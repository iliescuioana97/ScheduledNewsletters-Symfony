<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="subscription")
 * @ORM\Entity()
 */
class Subscription {

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
     * @Assert\NotBlank()
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
     */
    private $subdate;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=100)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $subarea_id;

    public function getSubdate() {
        return $this->subdate;
    }

    public function setSubdate($subdate) {
        $this->subdate = $subdate;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstName() {
        return $this->firstname;
    }

    /**
     * Set firstname
     *
     * @param string $executor
     *
     * @return Task
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname() {
        return $this->surname;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Category
     */
    public function setSurname($surname) {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Category
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get subarea_id
     *
     * @return int
     */
    public function getSubareaId() {
        return $this->subarea_id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Category
     */
    public function setSubareaId($subarea_id) {
        $this->subarea_id = $subarea_id;

        return $this;
    }

}
