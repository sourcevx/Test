<?php

namespace Fp\RubricaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Rubrica
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fp\RubricaBundle\Entity\RubricaRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Rubrica
{
    
    protected $descrizione;

    protected $area;

    public function __construct()
    {
        $this->area = new ArrayCollection();
    }

    public function getDescrizione()
    {
        return $this->descrizione;
    }

    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;
    }

    public function getArea()
    {
        return $this->area;
    }
    
   
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
     * @var string
     *
     * @ORM\Column(name="cognome", type="string", length=255)
     */
    private $cognome;

    /**
     * @var string
     *
     * @ORM\Column(name="indirizzo", type="string", length=255)
     */
    private $indirizzo;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="cellulare", type="string", length=255)
     */
    private $cellulare;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

        /**
     * @var string
     * 
     * 
     * @ORM\ManyToOne(targetEntity="Ufficio")
     * @ORM\JoinColumn(name="ufficio", referencedColumnName="id")
     */
    private $ufficio;
    
    
    

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;
    
      /**
     * @var \DateTime
     *
     * @ORM\Column(name="modify", type="datetime" ,nullable=true))
     */
    private $modify;
    
     /**
     * @var \DateTime
     *
     * @ORM\Column(name="datanascita", type="datetime" ,nullable=true)
     */
    private $datanascita;


       /**
     * @var string
     * 
     * 
     * @ORM\ManyToOne(targetEntity="Comune")
     * @ORM\JoinColumn(name="comune", referencedColumnName="id")
     */
    private $comune;

    
    
    
    
//    /**
//     * Get eta
//     *
//     * @param integer $eta
//     * @return eta
//     */
//    public function getEta() {
//      
//  $data_eta = $this->datanascita;
//        $data_ins = new \DateTime();
//        $interval = $data_ins->diff($data_eta);
//        $eta = $interval->format("%y");
//
////
////        var_dump($eta);
////                die;  
//
//        return $eta;
//    }

  
    
  
   

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
     * @return Rubrica
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
     * Set cognome
     *
     * @param string $cognome
     *
     * @return Rubrica
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }

    /**
     * Get cognome
     *
     * @return string
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     *
     * @return Rubrica
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    /**
     * Get indirizzo
     *
     * @return string
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Rubrica
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    
    /**
     * Set cellulare
     *
     * @param string $cellulare
     * @return Rubrica
     */
    public function setCellulare($cellulare)
    {
       
        $this->cellulare = $cellulare;

        return $this;
    }

    /**
     * Get cellulare
     *
     * @return string
     */
    public function getCellulare()
    {
        return $this->cellulare;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Rubrica
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Rubrica
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modify
     *
     * @param \DateTime $modify
     *
     * @return Rubrica
     */
    public function setModify($modify)
    {
        $this->modify = $modify;

        return $this;
    }

    /**
     * Get modify
     *
     * @return \DateTime
     */
    public function getModify()
    {
        return $this->modify;
    }

    /**
     * Set datanascita
     *
     * @param \DateTime $datanascita
     *
     * @return Rubrica
     */
    public function setDatanascita($datanascita)
    {
        $this->datanascita = $datanascita;

        return $this;
    }

    /**
     * Get datanascita
     *
     * @return \DateTime
     */
    public function getDatanascita()
    {
        return $this->datanascita;
    }

    /**
     * Set ufficio
     *
     * @param \Fp\RubricaBundle\Entity\Ufficio $ufficio
     *
     * @return Rubrica
     */
    public function setUfficio(\Fp\RubricaBundle\Entity\Ufficio $ufficio = null)
    {
        $this->ufficio = $ufficio;

        return $this;
    }

    /**
     * Get ufficio
     *
     * @return \Fp\RubricaBundle\Entity\Ufficio
     */
    public function getUfficio()
    {
        return $this->ufficio;
    }

    /**
     * Set comune
     *
     * @param \Fp\RubricaBundle\Entity\Comune $comune
     *
     * @return Rubrica
     */
    public function setComune(\Fp\RubricaBundle\Entity\Comune $comune = null)
    {
        $this->comune = $comune;

        return $this;
    }

    /**
     * Get comune
     *
     * @return \Fp\RubricaBundle\Entity\Comune
     */
    public function getComune()
    {
        return $this->comune;
    }
}
