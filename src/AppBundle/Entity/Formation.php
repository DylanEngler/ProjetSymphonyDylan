<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FormationRepository")
 */
class Formation
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
     * @ORM\Column(name="id_formation", type="integer")
     */
    private $idFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_formation", type="string", length=255)
     */
    private $nomFormation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut_formation", type="datetime")
     */
    private $datedebutFormation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin_formation", type="datetime")
     */
    private $datefinFormation;


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
     * Set idFormation
     *
     * @param integer $idFormation
     *
     * @return Formation
     */
    public function setIdFormation($idFormation)
    {
        $this->idFormation = $idFormation;

        return $this;
    }

    /**
     * Get idFormation
     *
     * @return int
     */
    public function getIdFormation()
    {
        return $this->idFormation;
    }

    /**
     * Set nomFormation
     *
     * @param string $nomFormation
     *
     * @return Formation
     */
    public function setNomFormation($nomFormation)
    {
        $this->nomFormation = $nomFormation;

        return $this;
    }

    /**
     * Get nomFormation
     *
     * @return string
     */
    public function getNomFormation()
    {
        return $this->nomFormation;
    }

    /**
     * Set datedebutFormation
     *
     * @param \DateTime $datedebutFormation
     *
     * @return Formation
     */
    public function setDatedebutFormation($datedebutFormation)
    {
        $this->datedebutFormation = $datedebutFormation;

        return $this;
    }

    /**
     * Get datedebutFormation
     *
     * @return \DateTime
     */
    public function getDatedebutFormation()
    {
        return $this->datedebutFormation;
    }

    /**
     * Set datefinFormation
     *
     * @param \DateTime $datefinFormation
     *
     * @return Formation
     */
    public function setDatefinFormation($datefinFormation)
    {
        $this->datefinFormation = $datefinFormation;

        return $this;
    }

    /**
     * Get datefinFormation
     *
     * @return \DateTime
     */
    public function getDatefinFormation()
    {
        return $this->datefinFormation;
    }
}

