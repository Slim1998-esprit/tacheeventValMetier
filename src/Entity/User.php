<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdUser", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="NomUser", type="string", length=255, nullable=false)
     */
    private $nomuser;

    /**
     * @var string
     *
     * @ORM\Column(name="PrenomUser", type="string", length=255, nullable=false)
     */
    private $prenomuser;

    /**
     * @var string
     *
     * @ORM\Column(name="Pwd", type="string", length=255, nullable=false)
     */
    private $pwd;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="NumTel", type="integer", nullable=false)
     */
    private $numtel;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeUser", type="string", length=255, nullable=false)
     */
    private $typeuser;

    /**
     * @var string
     *
     * @ORM\Column(name="Photo", type="string", length=255, nullable=false)
     */
    private $photo;

    

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function getNomuser(): ?string
    {
        return $this->nomuser;
    }

    public function setNomuser(string $nomuser): self
    {
        $this->nomuser = $nomuser;

        return $this;
    }

    public function getPrenomuser(): ?string
    {
        return $this->prenomuser;
    }

    public function setPrenomuser(string $prenomuser): self
    {
        $this->prenomuser = $prenomuser;

        return $this;
    }

    public function getPwd(): ?string
    {
        return $this->pwd;
    }

    public function setPwd(string $pwd): self
    {
        $this->pwd = $pwd;

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

    public function getNumtel(): ?int
    {
        return $this->numtel;
    }

    public function setNumtel(int $numtel): self
    {
        $this->numtel = $numtel;

        return $this;
    }

    public function getTypeuser(): ?string
    {
        return $this->typeuser;
    }

    public function setTypeuser(string $typeuser): self
    {
        $this->typeuser = $typeuser;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }


}
