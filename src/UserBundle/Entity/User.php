<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var int
     */
    private $telephone;

    /**
     * @var string
     */
    private $adresse;


    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return User
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $notifications;


    /**
     * Add notification
     *
     * @param \FrontBundle\Entity\Notification $notification
     *
     * @return User
     */
    public function addNotification(\FrontBundle\Entity\Notification $notification)
    {
        $this->notifications[] = $notification;

        return $this;
    }

    /**
     * Remove notification
     *
     * @param \FrontBundle\Entity\Notification $notification
     */
    public function removeNotification(\FrontBundle\Entity\Notification $notification)
    {
        $this->notifications->removeElement($notification);
    }

    /**
     * Get notifications
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNotifications()
    {
        return $this->notifications;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $versements;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $messages;


    /**
     * Add versement
     *
     * @param \FrontBundle\Entity\Versement $versement
     *
     * @return User
     */
    public function addVersement(\FrontBundle\Entity\Versement $versement)
    {
        $this->versements[] = $versement;

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
     * Add message
     *
     * @param \FrontBundle\Entity\Message $message
     *
     * @return User
     */
    public function addMessage(\FrontBundle\Entity\Message $message)
    {
        $this->messages[] = $message;

        return $this;
    }

    /**
     * Remove message
     *
     * @param \FrontBundle\Entity\Message $message
     */
    public function removeMessage(\FrontBundle\Entity\Message $message)
    {
        $this->messages->removeElement($message);
    }

    /**
     * Get messages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMessages()
    {
        return $this->messages;
    }
}
