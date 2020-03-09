<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SubjectRepository")
 */
class Subject
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $shortName;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\StreamLesson", inversedBy="subjects")
     */
    private $streamLesson;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Speciality", inversedBy="subjects")
     * @ORM\JoinColumn(nullable=false)
     */
    private $speciality;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $lectures;

    /**
     * @ORM\Column(type="smallint")
     */
    private $seminars;

    /**
     * @ORM\Column(type="smallint")
     */
    private $laboratories;

    /**
     * @ORM\Column(type="smallint")
     */
    private $practicals;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getShortName(): ?string
    {
        return $this->shortName;
    }

    public function setShortName(string $shortName): self
    {
        $this->shortName = $shortName;

        return $this;
    }

    public function getStreamLesson(): ?StreamLesson
    {
        return $this->streamLesson;
    }

    public function setStreamLesson(?StreamLesson $streamLesson): self
    {
        $this->streamLesson = $streamLesson;

        return $this;
    }

    public function getSpeciality(): ?Speciality
    {
        return $this->speciality;
    }

    public function setSpeciality(?Speciality $speciality): self
    {
        $this->speciality = $speciality;

        return $this;
    }

    public function getLectures(): ?int
    {
        return $this->lectures;
    }

    public function setLectures(?int $lectures): self
    {
        $this->lectures = $lectures;

        return $this;
    }

    public function getSeminars(): ?int
    {
        return $this->seminars;
    }

    public function setSeminars(int $seminars): self
    {
        $this->seminars = $seminars;

        return $this;
    }

    public function getLaboratories(): ?int
    {
        return $this->laboratories;
    }

    public function setLaboratories(int $laboratories): self
    {
        $this->laboratories = $laboratories;

        return $this;
    }

    public function getPracticals(): ?int
    {
        return $this->practicals;
    }

    public function setPracticals(int $practicals): self
    {
        $this->practicals = $practicals;

        return $this;
    }
}
