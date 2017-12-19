<?php

namespace FrontBundle\Entity;

/**
 * Versement
 */
class Versement
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $montant;

    /**
     * @var \DateTime
     */
    private $dateVersement;


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
     * Set montant
     *
     * @param integer $montant
     *
     * @return Versement
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
     * Set dateVersement
     *
     * @param \DateTime $dateVersement
     *
     * @return Versement
     */
    public function setDateVersement($dateVersement)
    {
        $this->dateVersement = $dateVersement;

        return $this;
    }

    /**
     * Get dateVersement
     *
     * @return \DateTime
     */
    public function getDateVersement()
    {
        return $this->dateVersement;
    }
    /**
     * @var \UserBundle\Entity\user
     */
    private $user;


    /**
     * Set user
     *
     * @param \UserBundle\Entity\user $user
     *
     * @return Versement
     */
    public function setUser(\UserBundle\Entity\user $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\user
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @var \FrontBundle\Entity\Charge
     */
    private $charge;


    /**
     * Set charge
     *
     * @param \FrontBundle\Entity\Charge $charge
     *
     * @return Versement
     */
    public function setCharge(\FrontBundle\Entity\Charge $charge = null)
    {
        $this->charge = $charge;

        return $this;
    }

    /**
     * Get charge
     *
     * @return \FrontBundle\Entity\Charge
     */
    public function getCharge()
    {
        return $this->charge;
    }
}
