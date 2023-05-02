<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="id_client", columns={"id_client"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="idc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat;

    /**
     * @var float
     *
     * @ORM\Column(name="totale", type="float", precision=10, scale=0, nullable=false)
     */
    private $totale;

    /**
     * @var \Panier
     *
     * @ORM\ManyToOne(targetEntity="Panier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="id_client")
     * })
     */
    private $idClient;

    public function getIdc(): ?int
    {
        return $this->idc;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getEtat(): ?int
    {
        return $this->etat;
    }

    public function setEtat(int $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getTotale(): ?float
    {
        return $this->totale;
    }

    public function setTotale(float $totale): self
    {
        $this->totale = $totale;

        return $this;
    }

    public function getIdClient(): ?Panier
    {
        return $this->idClient;
    }

    public function setIdClient(?Panier $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }


}
