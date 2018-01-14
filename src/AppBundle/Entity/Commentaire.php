<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentaireRepository")
 */
class Commentaire
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
     * @ORM\Column(name="titreCommentaire", type="string", length=255)
     */
    private $titreCommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="texteCommentaire", type="text")
     */
    private $texteCommentaire;


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
     * Set titreCommentaire
     *
     * @param string $titreCommentaire
     *
     * @return Commentaire
     */
    public function setTitreCommentaire($titreCommentaire)
    {
        $this->titreCommentaire = $titreCommentaire;

        return $this;
    }

    /**
     * Get titreCommentaire
     *
     * @return string
     */
    public function getTitreCommentaire()
    {
        return $this->titreCommentaire;
    }

    /**
     * Set texteCommentaire
     *
     * @param string $texteCommentaire
     *
     * @return Commentaire
     */
    public function setTexteCommentaire($texteCommentaire)
    {
        $this->texteCommentaire = $texteCommentaire;

        return $this;
    }

    /**
     * Get texteCommentaire
     *
     * @return string
     */
    public function getTexteCommentaire()
    {
        return $this->texteCommentaire;
    }
}

