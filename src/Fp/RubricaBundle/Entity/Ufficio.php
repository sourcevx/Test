<?php

namespace Fp\RubricaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ufficio
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fp\RubricaBundle\Entity\UfficioRepository")
 */
class Ufficio

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
     * @ORM\Column(name="ufficio", type="string", length=255)
     */
    private $ufficio;

    /**
     * @var integer
     *
     * @ORM\Column(name="typeufficio", type="string", length=255)
     */
    private $typeufficio;

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
     * Set ufficio
     *
     * @param string $ufficio
     *
     * @return Ufficio
     */
    public function setUfficio($ufficio)
    {
        $this->ufficio = $ufficio;

        return $this;
    }

    /**
     * Get ufficio
     *
     * @return string
     */
    public function getUfficio()
    {
        return $this->ufficio;
    }
    
    
  
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Rubrica = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add rubrica
     *
     * @param \Fp\RubricaBundle\Entity\Rubrica $rubrica
     *
     * @return Ufficio
     */
    public function addRubrica(\Fp\RubricaBundle\Entity\Rubrica $rubrica)
    {
        $this->Rubrica[] = $rubrica;

        return $this;
    }

    /**
     * Remove rubrica
     *
     * @param \Fp\RubricaBundle\Entity\Rubrica $rubrica
     */
    public function removeRubrica(\Fp\RubricaBundle\Entity\Rubrica $rubrica)
    {
        $this->Rubrica->removeElement($rubrica);
    }

    /**
     * Get rubrica
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRubrica()
    {
        return $this->Rubrica;
    }

    /**
     * Set typeufficio
     *
     * @param string $typeufficio
     *
     * @return Ufficio
     */
    public function setTypeufficio($typeufficio)
    {
        $this->typeufficio = $typeufficio;

        return $this;
    }

    /**
     * Get typeufficio
     *
     * @return string
     */
    public function getTypeufficio()
    {
        return $this->typeufficio;
    }
}
