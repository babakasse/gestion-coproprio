<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Charge
 */
class Charge
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var int
     */
    private $montant;

    /**
     * @var \DateTime
     */
    private $dateEcheance;

    /**
     * @var bool
     */
    private $statut;

    /**
     * @var array
     */
    private $user;

    /**
     * @var \FrontBundle\Entity\Contrat
     */
    private $contrat;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Charge
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     *
     * @return Charge
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return int
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set dateEcheance
     *
     * @param \DateTime $dateEcheance
     *
     * @return Charge
     */
    public function setDateEcheance($dateEcheance)
    {
        $this->dateEcheance = $dateEcheance;

        return $this;
    }

    /**
     * Get dateEcheance
     *
     * @return \DateTime
     */
    public function getDateEcheance()
    {
        return $this->dateEcheance;
    }

    /**
     * Set statut
     *
     * @param boolean $statut
     *
     * @return Charge
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return bool
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set user
     *
     * @param array $user
     *
     * @return Charge
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return array
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set contrat
     *
     * @param \FrontBundle\Entity\Contrat $contrat
     *
     * @return Charge
     */
    public function setContrat(\FrontBundle\Entity\Contrat $contrat = null)
    {
        $this->contrat = $contrat;

        return $this;
    }

    /**
     * Get contrat
     *
     * @return \FrontBundle\Entity\Contrat
     */
    public function getContrat()
    {
        return $this->contrat;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $versements;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->versements = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add versement
     *
     * @param \FrontBundle\Entity\Versement $versement
     *
     * @return Charge
     */
    public function addVersement(\FrontBundle\Entity\Versement $versement)
    {
        $this->versements[] = $versement;

            //Je lie le versement à la charge
            $versement->setCharge($this);

        return $this;
    }

    /**
     * Remove versement
     *
     * @param \FrontBundle\Entity\Versement $versement
     */
    public function removeVersement(\FrontBundle\Entity\Versement $versement)
    {
        $this->versements->removeElement($versement);
    }

    /**
     * Get versements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVersements()
    {
        return $this->versements;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;


    /**
     * Add user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Charge
     */
    public function addUser(\UserBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *     * @param \UserBundle\Entity\User $user
     */
    public function removeUser(\UserBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @var \FrontBundle\Entity\Piecejointe
     */
    private $piecejointe;

    /**
     * Set piecejointe
     *
     * @param \FrontBundle\Entity\Piecejointe $piecejointe
     *
     * @return Charge
     */
    public function setPiecejointe(\FrontBundle\Entity\Piecejointe $piecejointe = null)
    {
        $this->piecejointe = $piecejointe;

        return $this;
    }

    /**
     * Get piecejointe
     *
     * @return \FrontBundle\Entity\Piecejointe
     */
    public function getPiecejointe()
    {
        return $this->piecejointe;
    }

}
