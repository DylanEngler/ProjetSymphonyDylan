<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * civilite
 *
 * @ORM\Table(name="civilite")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\civiliteRepository")
 */
class civilite
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
     * @ORM\Column(name="id_civilite", type="integer")
     */
    private $idCivilite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_moi", type="string", length=255)
     */
    private $nomMoi;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_moi", type="string", length=255)
     */
    private $prenomMoi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance_moi", type="datetime")
     */
    private $dateNaissanceMoi;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_moi", type="string", length=255)
     */
    private $adresseMoi;

    /**
     * @var int
     *
     * @ORM\Column(name="numero_moi", type="integer")
     */
    private $numeroMoi;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_moi", type="string", length=255)
     */
    private $mailMoi;


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
     * Set idCivilite
     *
     * @param integer $idCivilite
     *
     * @return civilite
     */
    public function setIdCivilite($idCivilite)
    {
        $this->idCivilite = $idCivilite;

        return $this;
    }

    /**
     * Get idCivilite
     *
     * @return int
     */
    public function getIdCivilite()
    {
        return $this->idCivilite;
    }

    /**
     * Set nomMoi
     *
     * @param string $nomMoi
     *
     * @return civilite
     */
    public function setNomMoi($nomMoi)
    {
        $this->nomMoi = $nomMoi;

        return $this;
    }

    /**
     * Get nomMoi
     *
     * @return string
     */
    public function getNomMoi()
    {
        return $this->nomMoi;
    }

    /**
     * Set prenomMoi
     *
     * @param string $prenomMoi
     *
     * @return civilite
     */
    public function setPrenomMoi($prenomMoi)
    {
        $this->prenomMoi = $prenomMoi;

        return $this;
    }

    /**
     * Get prenomMoi
     *
     * @return string
     */
    public function getPrenomMoi()
    {
        return $this->prenomMoi;
    }

    /**
     * Set dateNaissanceMoi
     *
     * @param \DateTime $dateNaissanceMoi
     *
     * @return civilite
     */
    public function setDateNaissanceMoi($dateNaissanceMoi)
    {
        $this->dateNaissanceMoi = $dateNaissanceMoi;

        return $this;
    }

    /**
     * Get dateNaissanceMoi
     *
     * @return \DateTime
     */
    public function getDateNaissanceMoi()
    {
        return $this->dateNaissanceMoi;
    }

    /**
     * Set adresseMoi
     *
     * @param string $adresseMoi
     *
     * @return civilite
     */
    public function setAdresseMoi($adresseMoi)
    {
        $this->adresseMoi = $adresseMoi;

        return $this;
    }

    /**
     * Get adresseMoi
     *
     * @return string
     */
    public function getAdresseMoi()
    {
        return $this->adresseMoi;
    }

    /**
     * Set numeroMoi
     *
     * @param integer $numeroMoi
     *
     * @return civilite
     */
    public function setNumeroMoi($numeroMoi)
    {
        $this->numeroMoi = $numeroMoi;

        return $this;
    }

    /**
     * Get numeroMoi
     *
     * @return int
     */
    public function getNumeroMoi()
    {
        return $this->numeroMoi;
    }

    /**
     * Set mailMoi
     *
     * @param string $mailMoi
     *
     * @return civilite
     */
    public function setMailMoi($mailMoi)
    {
        $this->mailMoi = $mailMoi;

        return $this;
    }

    /**
     * Get mailMoi
     *
     * @return string
     */
    public function getMailMoi()
    {
        return $this->mailMoi;
    }
}

