<?php

namespace FrontBundle\Controller;

use FrontBundle\Entity\FileMessages;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Filemessage controller.
 *
 */
class FileMessagesController extends Controller
{
    /**
     * Lists all fileMessage entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fileMessages = $em->getRepository('FrontBundle:FileMessages')->findAll();

        return $this->render('FrontBundle:filemessages:index.html.twig', array(
            'fileMessages' => $fileMessages,
        ));
    }

    /**
     * Creates a new fileMessage entity.
     *
     */
    public function newAction(Request $request)
    {
        $fileMessage = new FileMessages();
        $form = $this->createForm('FrontBundle\Form\FileMessagesType', $fileMessage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fileMessage);
            $em->flush();

            return $this->redirectToRoute('filemessages_show', array('id' => $fileMessage->getId()));
        }

        return $this->render('FrontBundle:filemessages:new.html.twig', array(
            'fileMessage' => $fileMessage,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a fileMessage entity.
     *
     */
    public function showAction(FileMessages $fileMessage)
    {
        $deleteForm = $this->createDeleteForm($fileMessage);

        return $this->render('FrontBundle:filemessages:show.html.twig', array(
            'fileMessage' => $fileMessage,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing fileMessage entity.
     *
     */
    public function editAction(Request $request, FileMessages $fileMessage)
    {
        $deleteForm = $this->createDeleteForm($fileMessage);
        $editForm = $this->createForm('FrontBundle\Form\FileMessagesType', $fileMessage);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('filemessages_edit', array('id' => $fileMessage->getId()));
        }

        return $this->render('FrontBundle:filemessages:edit.html.twig', array(
            'fileMessage' => $fileMessage,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a fileMessage entity.
     *
     */
    public function deleteAction(Request $request, FileMessages $fileMessage)
    {
        $form = $this->createDeleteForm($fileMessage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fileMessage);
            $em->flush();
        }

        return $this->redirectToRoute('filemessages_index');
    }

    /**
     * Creates a form to delete a fileMessage entity.
     *
     * @param FileMessages $fileMessage The fileMessage entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FileMessages $fileMessage)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('filemessages_delete', array('id' => $fileMessage->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
