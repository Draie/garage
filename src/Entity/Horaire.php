<?php

namespace App\Entity;

use App\Repository\HoraireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HoraireRepository::class)]
class Horaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Jour = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $morningStartTime = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $morningEndTime = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $afterStartTime = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $afterEndTime = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJour(): ?string
    {
        return $this->Jour;
    }

    public function setJour(string $Jour): self
    {
        $this->Jour = $Jour;

        return $this;
    }

    public function getMorningStartTime(): ?\DateTimeInterface
    {
        return $this->morningStartTime;
    }

    public function setMorningStartTime(\DateTimeInterface $morningStartTime): self
    {
        $this->morningStartTime = $morningStartTime;

        return $this;
    }

    public function getMorningEndTime(): ?\DateTimeInterface
    {
        return $this->morningEndTime;
    }

    public function setMorningEndTime(\DateTimeInterface $morningEndTime): self
    {
        $this->morningEndTime = $morningEndTime;

        return $this;
    }

    public function getafterStartTime(): ?\DateTimeInterface
    {
        return $this->afterStartTime;
    }

    public function setafterStartTime(\DateTimeInterface $afterStartTime): self
    {
        $this->afterStartTime = $afterStartTime;

        return $this;
    }

    public function getAfterEndTime(): ?\DateTimeInterface
    {
        return $this->afterEndTime;
    }

    public function setAfterEndTime(\DateTimeInterface $afterEndTime): self
    {
        $this->afterEndTime = $afterEndTime;

        return $this;
    }
}
