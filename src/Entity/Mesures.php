<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MesuresRepository")
 */
class Mesures
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="float")
     */
    private $poids;

    /**
     * @ORM\Column(type="float")
     */
    private $imc;

    /**
     * @ORM\Column(type="float")
     */
    private $img;

    /**
     * @ORM\Column(type="float")
     */
    private $muscle;

    /**
     * @ORM\Column(type="float")
     */
    private $hydratation;

    /**
     * @ORM\Column(type="float")
     */
    private $densiteOsseuse;

    /**
     * @ORM\Column(type="float")
     */
    private $bmr;

    /**
     * @ORM\Column(type="float")
     */
    private $txProteine;

    /**
     * @ORM\Column(type="float")
     */
    private $ageCorps;

    /**
     * @ORM\Column(type="float")
     */
    private $graisseViscerale;

    /**
     * @ORM\Column(type="float")
     */
    private $graisseSousCutanee;

    /**
     * @ORM\Column(type="float")
     */
    private $poidsNormal;

    /**
     * @ORM\Column(type="float")
     */
    private $controlePoids;

    /**
     * @ORM\Column(type="float")
     */
    private $graisseCorporelle;

    /**
     * @ORM\Column(type="float")
     */
    private $poidsSansGraisse;

    /**
     * @ORM\Column(type="float")
     */
    private $poidsMusculaire;

    /**
     * @ORM\Column(type="float")
     */
    private $qtyProteine;

    /**
     * @ORM\Column(type="float")
     */
    private $tourEpaule;

    /**
     * @ORM\Column(type="float")
     */
    private $tourPoitrine;

    /**
     * @ORM\Column(type="float")
     */
    private $bicepsG;

    /**
     * @ORM\Column(type="float")
     */
    private $bicepsD;

    /**
     * @ORM\Column(type="float")
     */
    private $tourTaille;

    /**
     * @ORM\Column(type="float")
     */
    private $cuisseG;

    /**
     * @ORM\Column(type="float")
     */
    private $cuisseD;

    /**
     * @ORM\Column(type="float")
     */
    private $molletG;

    /**
     * @ORM\Column(type="float")
     */
    private $molletD;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="mesures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $User;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getPoids(): ?float
    {
        return $this->poids;
    }

    public function setPoids(float $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getImc(): ?float
    {
        return $this->imc;
    }

    public function setImc(float $imc): self
    {
        $this->imc = $imc;

        return $this;
    }

    public function getImg(): ?float
    {
        return $this->img;
    }

    public function setImg(float $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getMuscle(): ?float
    {
        return $this->muscle;
    }

    public function setMuscle(float $muscle): self
    {
        $this->muscle = $muscle;

        return $this;
    }

    public function getHydratation(): ?float
    {
        return $this->hydratation;
    }

    public function setHydratation(float $hydratation): self
    {
        $this->hydratation = $hydratation;

        return $this;
    }

    public function getDensiteOsseuse(): ?float
    {
        return $this->densiteOsseuse;
    }

    public function setDensiteOsseuse(float $densiteOsseuse): self
    {
        $this->densiteOsseuse = $densiteOsseuse;

        return $this;
    }

    public function getBmr(): ?float
    {
        return $this->bmr;
    }

    public function setBmr(float $bmr): self
    {
        $this->bmr = $bmr;

        return $this;
    }

    public function getTxProteine(): ?float
    {
        return $this->txProteine;
    }

    public function setTxProteine(float $txProteine): self
    {
        $this->txProteine = $txProteine;

        return $this;
    }

    public function getAgeCorps(): ?float
    {
        return $this->ageCorps;
    }

    public function setAgeCorps(float $ageCorps): self
    {
        $this->ageCorps = $ageCorps;

        return $this;
    }

    public function getGraisseViscerale(): ?float
    {
        return $this->graisseViscerale;
    }

    public function setGraisseViscerale(float $graisseViscerale): self
    {
        $this->graisseViscerale = $graisseViscerale;

        return $this;
    }

    public function getGraisseSousCutanee(): ?float
    {
        return $this->graisseSousCutanee;
    }

    public function setGraisseSousCutanee(float $graisseSousCutanee): self
    {
        $this->graisseSousCutanee = $graisseSousCutanee;

        return $this;
    }

    public function getPoidsNormal(): ?float
    {
        return $this->poidsNormal;
    }

    public function setPoidsNormal(float $poidsNormal): self
    {
        $this->poidsNormal = $poidsNormal;

        return $this;
    }

    public function getControlePoids(): ?float
    {
        return $this->controlePoids;
    }

    public function setControlePoids(float $controlePoids): self
    {
        $this->controlePoids = $controlePoids;

        return $this;
    }

    public function getGraisseCorporelle(): ?float
    {
        return $this->graisseCorporelle;
    }

    public function setGraisseCorporelle(float $graisseCorporelle): self
    {
        $this->graisseCorporelle = $graisseCorporelle;

        return $this;
    }

    public function getPoidsSansGraisse(): ?float
    {
        return $this->poidsSansGraisse;
    }

    public function setPoidsSansGraisse(float $poidsSansGraisse): self
    {
        $this->poidsSansGraisse = $poidsSansGraisse;

        return $this;
    }

    public function getPoidsMusculaire(): ?float
    {
        return $this->poidsMusculaire;
    }

    public function setPoidsMusculaire(float $poidsMusculaire): self
    {
        $this->poidsMusculaire = $poidsMusculaire;

        return $this;
    }

    public function getQtyProteine(): ?float
    {
        return $this->qtyProteine;
    }

    public function setQtyProteine(float $qtyProteine): self
    {
        $this->qtyProteine = $qtyProteine;

        return $this;
    }

    public function getTourEpaule(): ?float
    {
        return $this->tourEpaule;
    }

    public function setTourEpaule(float $tourEpaule): self
    {
        $this->tourEpaule = $tourEpaule;

        return $this;
    }

    public function getTourPoitrine(): ?float
    {
        return $this->tourPoitrine;
    }

    public function setTourPoitrine(float $tourPoitrine): self
    {
        $this->tourPoitrine = $tourPoitrine;

        return $this;
    }

    public function getBicepsG(): ?float
    {
        return $this->bicepsG;
    }

    public function setBicepsG(float $bicepsG): self
    {
        $this->bicepsG = $bicepsG;

        return $this;
    }

    public function getBicepsD(): ?float
    {
        return $this->bicepsD;
    }

    public function setBicepsD(float $bicepsD): self
    {
        $this->bicepsD = $bicepsD;

        return $this;
    }

    public function getTourTaille(): ?float
    {
        return $this->tourTaille;
    }

    public function setTourTaille(float $tourTaille): self
    {
        $this->tourTaille = $tourTaille;

        return $this;
    }

    public function getCuisseG(): ?float
    {
        return $this->cuisseG;
    }

    public function setCuisseG(float $cuisseG): self
    {
        $this->cuisseG = $cuisseG;

        return $this;
    }

    public function getCuisseD(): ?float
    {
        return $this->cuisseD;
    }

    public function setCuisseD(float $cuisseD): self
    {
        $this->cuisseD = $cuisseD;

        return $this;
    }

    public function getMolletG(): ?float
    {
        return $this->molletG;
    }

    public function setMolletG(float $molletG): self
    {
        $this->molletG = $molletG;

        return $this;
    }

    public function getMolletD(): ?float
    {
        return $this->molletD;
    }

    public function setMolletD(float $molletD): self
    {
        $this->molletD = $molletD;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }
}
