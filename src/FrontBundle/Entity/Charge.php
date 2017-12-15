<?php

namespace FrontBundle\Entity;

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
     * @var string
     */
    private $urlFacture;

    /**
     * @var string
     */
    private $urlContrat;


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
     * Set urlFacture
     *
     * @param string $urlFacture
     *
     * @return Charge
     */
    public function setUrlFacture($urlFacture)
    {
        $this->urlFacture = $urlFacture;

        return $this;
    }

    /**
     * Get urlFacture
     *
     * @return string
     */
    public function getUrlFacture()
    {
        return $this->urlFacture;
    }

    /**
     * Set urlContrat
     *
     * @param string $urlContrat
     *
     * @return Charge
     */
    public function setUrlContrat($urlContrat)
    {
        $this->urlContrat = $urlContrat;

        return $this;
    }

    /**
     * Get urlContrat
     *
     * @return string
     */
    public function getUrlContrat()
    {
        return $this->urlContrat;
    }
}

