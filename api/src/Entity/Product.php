<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
#[ApiResource(
    collectionOperations: ['get'],
    itemOperations: [
        'get' => [
            'normalization_context' => ['groups' => ['read:collection', 'read:item']]
        ]
    ]
)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(['read:collection'])]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['read:collection'])]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['read:collection'])]
    private $brand;

    #[ORM\Column(type: 'float')]
    #[Groups(['read:item'])]
    private $price;

    #[ORM\Column(type: 'text')]
    #[Groups(['read:item'])]
    private $description;

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

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
