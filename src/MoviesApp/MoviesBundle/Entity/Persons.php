<?php

namespace MoviesApp\MoviesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
//use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Persons
 *
 * @ORM\Table(name="persons")
 * @ORM\Entity(repositoryClass="MoviesApp\MoviesBundle\Repository\PersonsRepository")
 */
class Persons
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_birth", type="date")
     */
    private $dateBirth;
	
	/**
     * @ORM\ManyToOne(targetEntity="Roles")
     * @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     */
    Private $roles;


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
     * Set name
     *
     * @param string $name
     *
     * @return Persons
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Persons
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set dateBirth
     *
     * @param \DateTime $dateBirth
     *
     * @return Persons
     */
    public function setDateBirth($dateBirth)
    {
        $this->dateBirth = $dateBirth;

        return $this;
    }

    /**
     * Get dateBirth
     *
     * @return \DateTime
     */
    public function getDateBirth()
    {
        return $this->dateBirth;
    }

    /**
     * Set roles
     *
     * @param \MoviesApp\MoviesBundle\Entity\Roles $roles
     *
     * @return Persons
     */
    public function setRoles(\MoviesApp\MoviesBundle\Entity\Roles $roles = null)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return \MoviesApp\MoviesBundle\Entity\Roles
     */
    public function getRoles()
    {
        return $this->roles;
    }
    
    public function getNameSurname()
    {
        return $this->name.' '.$this->surname;
    }
}
