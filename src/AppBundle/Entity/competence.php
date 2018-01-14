<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * competence
 *
 * @ORM\Table(name="competence")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\competenceRepository")
 */
class competence
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
     * @ORM\Column(name="id_competence", type="integer")
     */
    private $idCompetence;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_competence", type="string", length=255)
     */
    private $nomCompetence;


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
     * Set idCompetence
     *
     * @param integer $idCompetence
     *
     * @return competence
     */
    public function setIdCompetence($idCompetence)
    {
        $this->idCompetence = $idCompetence;

        return $this;
    }

    /**
     * Get idCompetence
     *
     * @return int
     */
    public function getIdCompetence()
    {
        return $this->idCompetence;
    }

    /**
     * Set nomCompetence
     *
     * @param string $nomCompetence
     *
     * @return competence
     */
    public function setNomCompetence($nomCompetence)
    {
        $this->nomCompetence = $nomCompetence;

        return $this;
    }

    /**
     * Get nomCompetence
     *
     * @return string
     */
    public function getNomCompetence()
    {
        return $this->nomCompetence;
    }
}

