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
     * @ORM\Column(name="telephone", type="integer")
     * @ORM\Telephone
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $telephone;

    /**
     * @ORM\Column(name="adresse", type="string")
     * @ORM\Adresse
     */
    protected $adresse;
}