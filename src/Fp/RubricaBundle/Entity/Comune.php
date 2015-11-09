<?php

namespace Fp\RubricaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Comuni
 *
 * @ORM\Table(name="Comuni")
 * @ORM\Entity
 * @UniqueEntity(fields={"nome", "id_provincia"})
 * 
 */
class Comune
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumn(name="id_provincia", referencedColumnName="id")
     * 
     */
    private $id_provincia;

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
     * @return Comune
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
     * Set idProvincia
     *
     * @param \Fp\RubricaBundle\Entity\Provincia $idProvincia
     *
     * @return Comune
     */
    public function setIdProvincia(\Fp\RubricaBundle\Entity\Provincia $idProvincia = null)
    {
        $this->id_provincia = $idProvincia;

        return $this;
    }
    /**
     * Get idProvincia
     *
     * @return \Fp\RubricaBundle\Entity\Provincia
     */
    public function getIdProvincia()
    {
        return $this->id_provincia;
    }
}
