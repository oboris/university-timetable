<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GroupRepository")
 */
class Group
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $code;

    /**
     * @ORM\Column(type="integer")
     */
    private $amountStudents;

    /**
     * @ORM\Column(type="integer")
     */
    private $courseNumber;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Faculty", inversedBy="groups")
     * @ORM\JoinColumn(nullable=false)
     */
    private $faculty;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getAmountStudents(): ?int
    {
        return $this->amountStudents;
    }

    public function setAmountStudents(int $amountStudents): self
    {
        $this->amountStudents = $amountStudents;

        return $this;
    }

    public function getCourseNumber(): ?int
    {
        return $this->courseNumber;
    }

    public function setCourseNumber(int $courseNumber): self
    {
        $this->courseNumber = $courseNumber;

        return $this;
    }

    public function getFaculty(): ?Faculty
    {
        return $this->faculty;
    }

    public function setFaculty(?Faculty $faculty): self
    {
        $this->faculty = $faculty;

        return $this;
    }
}
