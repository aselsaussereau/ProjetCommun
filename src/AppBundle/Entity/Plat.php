<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plat
 *
 * @ORM\Table(name="plat")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PlatRepository")
 */
class Plat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idPlat", type="integer", unique=true)
     */
    private $idPlat;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPlat", type="string", length=255)
     */
    private $nomPlat;

    /**
     * @var string
     *
     * @ORM\Column(name="categoriePlat", type="string", length=255)
     */
    private $categoriePlat;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionPlat", type="string", length=500)
     */
    private $descriptionPlat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dureeValide", type="datetime")
     */
    private $dureeValide;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creeA", type="datetime")
     */
    private $creeA;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idPlat
     *
     * @param integer $idPlat
     *
     * @return Plat
     */
    public function setIdPlat($idPlat)
    {
        $this->idPlat = $idPlat;

        return $this;
    }

    /**
     * Get idPlat
     *
     * @return int
     */
    public function getIdPlat()
    {
        return $this->idPlat;
    }

    /**
     * Set nomPlat
     *
     * @param string $nomPlat
     *
     * @return Plat
     */
    public function setNomPlat($nomPlat)
    {
        $this->nomPlat = $nomPlat;

        return $this;
    }

    /**
     * Get nomPlat
     *
     * @return string
     */
    public function getNomPlat()
    {
        return $this->nomPlat;
    }

    /**
     * Set categoriePlat
     *
     * @param string $categoriePlat
     *
     * @return Plat
     */
    public function setCategoriePlat($categoriePlat)
    {
        $this->categoriePlat = $categoriePlat;

        return $this;
    }

    /**
     * Get categoriePlat
     *
     * @return string
     */
    public function getCategoriePlat()
    {
        return $this->categoriePlat;
    }

    /**
     * Set descriptionPlat
     *
     * @param string $descriptionPlat
     *
     * @return Plat
     */
    public function setDescriptionPlat($descriptionPlat)
    {
        $this->descriptionPlat = $descriptionPlat;

        return $this;
    }

    /**
     * Get descriptionPlat
     *
     * @return string
     */
    public function getDescriptionPlat()
    {
        return $this->descriptionPlat;
    }

    /**
     * Set dureeValide
     *
     * @param \DateTime $dureeValide
     *
     * @return Plat
     */
    public function setDureeValide($dureeValide)
    {
        $this->dureeValide = $dureeValide;

        return $this;
    }

    /**
     * Get dureeValide
     *
     * @return \DateTime
     */
    public function getDureeValide()
    {
        return $this->dureeValide;
    }

    /**
     * Set creeA
     *
     * @param \DateTime $creeA
     *
     * @return Plat
     */
    public function setCreeA($creeA)
    {
        $this->creeA = $creeA;

        return $this;
    }

    /**
     * Get creeA
     *
     * @return \DateTime
     */
    public function getCreeA()
    {
        return $this->creeA;
    }
}

