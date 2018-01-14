<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExpPro
 *
 * @ORM\Table(name="exp_pro")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExpProRepository")
 */
class ExpPro
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
     * @var string
     *
     * @ORM\Column(name="ExpTitre", type="string", length=255)
     */
    private $expTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="ExpLieu", type="string", length=255)
     */
    private $expLieu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ExpDebut", type="datetime")
     */
    private $expDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ExpFin", type="datetime")
     */
    private $expFin;


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
     * Set expTitre
     *
     * @param string $expTitre
     *
     * @return ExpPro
     */
    public function setExpTitre($expTitre)
    {
        $this->expTitre = $expTitre;

        return $this;
    }

    /**
     * Get expTitre
     *
     * @return string
     */
    public function getExpTitre()
    {
        return $this->expTitre;
    }

    /**
     * Set expLieu
     *
     * @param string $expLieu
     *
     * @return ExpPro
     */
    public function setExpLieu($expLieu)
    {
        $this->expLieu = $expLieu;

        return $this;
    }

    /**
     * Get expLieu
     *
     * @return string
     */
    public function getExpLieu()
    {
        return $this->expLieu;
    }

    /**
     * Set expDebut
     *
     * @param \DateTime $expDebut
     *
     * @return ExpPro
     */
    public function setExpDebut($expDebut)
    {
        $this->expDebut = $expDebut;

        return $this;
    }

    /**
     * Get expDebut
     *
     * @return \DateTime
     */
    public function getExpDebut()
    {
        return $this->expDebut;
    }

    /**
     * Set expFin
     *
     * @param \DateTime $expFin
     *
     * @return ExpPro
     */
    public function setExpFin($expFin)
    {
        $this->expFin = $expFin;

        return $this;
    }

    /**
     * Get expFin
     *
     * @return \DateTime
     */
    public function getExpFin()
    {
        return $this->expFin;
    }
}

