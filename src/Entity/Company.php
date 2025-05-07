<?php

namespace App\Entity;

use App\Repository\CompanyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompanyRepository::class)]
class Company
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[ORM\Column(length: 255)]
    private string $legalName;

    #[ORM\Column(length: 255)]
    private string $tradeName;

    #[ORM\Column(length: 255)]
    private string $address;

    #[ORM\Column(length: 255)]
    private string $phone;

    #[ORM\Column(length: 255)]
    private string $email;

    #[ORM\Column(length: 255)]
    private string $taxId;

    #[ORM\Column(length: 255)]
    private ?string $logo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLegalName(): ?string
    {
        return $this->legalName;
    }

    public function getTradeName(): ?string
    {
        return $this->tradeName;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getTaxId(): ?string
    {
        return $this->taxId;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }
}
