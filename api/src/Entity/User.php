<?php

namespace App\Entity;

use App\Repository\UserRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ApiResource(
    normalizationContext: ['groups' => ['read:collection']],
    itemOperations: [
        'put' => [
            'denormalization_context' => ['groups' => ['put']]
        ],
        'get' => [
            'normalization_context' => ['groups' => ['read:collection', 'read:item', 'read:User']]
        ],
        'delete'
    ]
)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(['read:collection'])]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['read:collection', 'put'])]
    private $username;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['read:item', 'put'])]
    private $email;

    #[ORM\Column(type: 'json', nullable: true)]
    #[Groups(['read:item', 'put'])]
    private $role = [];

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Groups(['read:item', 'put'])]
    private $password;

    #[ORM\ManyToOne(targetEntity: Client::class, inversedBy: 'users')]
    #[Groups(['read:item'])]
    private $client;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getRole(): ?array
    {
        return $this->role;
    }

    public function setRole(?array $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }
}
