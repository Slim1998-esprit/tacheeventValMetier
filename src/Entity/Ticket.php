<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket", indexes={@ORM\Index(name="numTicketO", columns={"numTicketO"}), @ORM\Index(name="idRes", columns={"idRes"}), @ORM\Index(name="idEvent", columns={"idEvent"})})
 * @ORM\Entity
 */
class Ticket
{
    /**
     * @var int
     *
     * @ORM\Column(name="numTicket", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numticket;

    /**
     * @var int
     *
     * @ORM\Column(name="nbMaxT", type="integer", nullable=false)
     */
    private $nbmaxt;

    /**
     * @var int
     *
     * @ORM\Column(name="nbTDemande", type="integer", nullable=false)
     */
    private $nbtdemande;

    /**
     * @var float
     *
     * @ORM\Column(name="PrixF", type="float", precision=255, scale=0, nullable=false)
     */
    private $prixf;

    /**
     * @var \Event
     *
     * @ORM\ManyToOne(targetEntity="Event")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEvent", referencedColumnName="IdEvent")
     * })
     */
    private $idevent;

    /**
     * @var \Ticketo
     *
     * @ORM\ManyToOne(targetEntity="Ticketo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="numTicketO", referencedColumnName="numTicketO")
     * })
     */
    private $numticketo;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRes", referencedColumnName="IdUser")
     * })
     */
    private $idres;

    public function getNumticket(): ?int
    {
        return $this->numticket;
    }

    public function getNbmaxt(): ?int
    {
        return $this->nbmaxt;
    }

    public function setNbmaxt(int $nbmaxt): self
    {
        $this->nbmaxt = $nbmaxt;

        return $this;
    }

    public function getNbtdemande(): ?int
    {
        return $this->nbtdemande;
    }

    public function setNbtdemande(int $nbtdemande): self
    {
        $this->nbtdemande = $nbtdemande;

        return $this;
    }

    public function getPrixf(): ?float
    {
        return $this->prixf;
    }

    public function setPrixf(float $prixf): self
    {
        $this->prixf = $prixf;

        return $this;
    }

    public function getIdevent(): ?Event
    {
        return $this->idevent;
    }

    public function setIdevent(?Event $idevent): self
    {
        $this->idevent = $idevent;

        return $this;
    }

    public function getNumticketo(): ?Ticketo
    {
        return $this->numticketo;
    }

    public function setNumticketo(?Ticketo $numticketo): self
    {
        $this->numticketo = $numticketo;

        return $this;
    }

    public function getIdres(): ?User
    {
        return $this->idres;
    }

    public function setIdres(?User $idres): self
    {
        $this->idres = $idres;

        return $this;
    }


}
