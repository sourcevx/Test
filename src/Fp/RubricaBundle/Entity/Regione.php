<?php

namespace Fp\RubricaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Fp\RubricaBundle\Entity\Regione
 *
 * @ORM\Table(name="Regioni")
 * @ORM\Entity(repositoryClass="Fp\RubricaBundle\Entity\RegioneRepository")
 */
class Regione
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
    public $nome;
    
  

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Rubrica = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set regione
     *
     * @param string $regione
     *
     * @return Regione
     */
    public function setRegione($regione)
    {
        $this->regione = $regione;

        return $this;
    }

    /**
     * Get regione
     *
     * @return string
     */
    public function getRegione()
    {
       
        return $this->nome;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Regione
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
}
