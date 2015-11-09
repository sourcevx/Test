<?php

namespace Fp\RubricaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * fP\RubricaBundle\Entity\Provincia
 *
 * @ORM\Table(name="Province")
 * @ORM\Entity(repositoryClass="Fp\RubricaBundle\Entity\ProvinciaRepository")
 */
class Provincia
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $nome
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    protected $nome;

    /**
     * @var string $slug
     *
     * @ORM\Column(name="sigla", type="string", length=255, unique=true)
     */
    protected $sigla;

    /**
     * @ORM\ManyToOne(targetEntity="Comune")
     * @ORM\JoinColumn(name="id_regione", referencedColumnName="id")
     */
    protected $id_regione; 

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->regioni = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Provincia
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set sigla
     *
     * @param string $sigla
     *
     * @return Provincia
     */
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;

        return $this;
    }

    /**
     * Get sigla
     *
     * @return string
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * Set idRegione
     *
     * @param \Fp\RubricaBundle\Entity\Comune $idRegione
     *
     * @return Provincia
     */
    public function setIdRegione(\Fp\RubricaBundle\Entity\Comune $idRegione = null)
    {
        $this->id_regione = $idRegione;

        return $this;
    }

    /**
     * Get idRegione
     *
     * @return \Fp\RubricaBundle\Entity\Comune
     */
    public function getIdRegione()
    {
        return $this->id_regione;
    }
}
