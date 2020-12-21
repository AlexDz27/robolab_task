<?php

namespace App\Entity;

use App\Repository\TeacherRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TeacherRepository::class)
 */
class Teacher
{
  /**
   * @ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column(type="integer")
   */
  private $id;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private $name;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private $surname;

  /**
   * @ORM\Column(type="string", length=255, nullable=true)
   */
  private $middleName;

  /**
   * @ORM\Column(type="string", length=500, nullable=true)
   */
  private $imgPath;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private $speciality;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private $place;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private $time;

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

  public function getSurname(): ?string
  {
    return $this->surname;
  }

  public function setSurname(string $surname): self
  {
    $this->surname = $surname;

    return $this;
  }

  public function getMiddleName(): ?string
  {
    return $this->middleName;
  }

  public function setMiddleName(?string $middleName): self
  {
    $this->middleName = $middleName;

    return $this;
  }

  public function getFullName(): string
  {
    return "{$this->getSurname()} {$this->getName()} {$this->getMiddleName()}";
  }

  public function getImgPath(): ?string
  {
      return $this->imgPath;
  }

  public function setImgPath(?string $imgPath): self
  {
      $this->imgPath = $imgPath;

      return $this;
  }

  public function getSpeciality(): ?string
  {
      return $this->speciality;
  }

  public function setSpeciality(string $speciality): self
  {
      $this->speciality = $speciality;

      return $this;
  }

  public function getPlace(): ?string
  {
      return $this->place;
  }

  public function setPlace(string $place): self
  {
      $this->place = $place;

      return $this;
  }

  public function getTime(): ?string
  {
      return $this->time;
  }

  public function setTime(string $time): self
  {
      $this->time = $time;

      return $this;
  }
}
