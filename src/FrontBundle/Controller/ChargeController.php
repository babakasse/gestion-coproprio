<?php

namespace FrontBundle\Controller;

use FOS\UserBundle\Model\UserInterface;
use FrontBundle\Entity\Charge;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Charge controller.
 *
 */
class ChargeController extends Controller
{
    /**
     * Lists all charge entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $charges = $em->getRepository('FrontBundle:Charge')->findAll();

        return $this->render('FrontBundle:charge:index.html.twig', array(
            'charges' => $charges,
        ));
    }

    /**
     * Creates a new charge entity.
     *
     */
    public function newAction(Request $request, UserInterface $user)
    {
        $charge = new Charge();
        /** kcdev */
        $userId = $user->getId();
        $charge->setIdUser( $userId );
        $charge->setUser($user);
        $form = $this->createForm('FrontBundle\Form\ChargeType', $charge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($charge);
            $em->flush();

            return $this->redirectToRoute('charge_show', array('id' => $charge->getId()));
        }

        return $this->render('FrontBundle:charge:new.html.twig', array( //#kcdev
            'charge' => $charge,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a charge entity.
     *
     */
    public function showAction(Charge $charge)
    {
        $deleteForm = $this->createDeleteForm($charge);

        return $this->render('FrontBundle:charge:show.html.twig', array(
            'charge' => $charge,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing charge entity.
     *
     */
    public function editAction(Request $request, Charge $charge)
    {
        $deleteForm = $this->createDeleteForm($charge);
        $editForm = $this->createForm('FrontBundle\Form\ChargeType', $charge);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('charge_edit', array('id' => $charge->getId()));
        }

        return $this->render('FrontBundle:charge:edit.html.twig', array(
            'charge' => $charge,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a charge entity.
     *
     */
    public function deleteAction(Request $request, Charge $charge)
    {
        $form = $this->createDeleteForm($charge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($charge);
            $em->flush();
        }

        return $this->redirectToRoute('charge_index');
    }

    /**
     * Creates a form to delete a charge entity.
     *
     * @param Charge $charge The charge entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Charge $charge)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('charge_delete', array('id' => $charge->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
