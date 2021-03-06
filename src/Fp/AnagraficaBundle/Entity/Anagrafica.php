<?php

namespace Fp\AnagraficaBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Anagrafica
 *
 * @ORM\Table(name="Anagrafica")
 * @ORM\Entity(repositoryClass="Fp\AnagraficaBundle\Entity\AnagraficaRepository")
 */
class Anagrafica 
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
     * @ORM\Column(name="comune", type="string", length=255)
     */
    private $comune;

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
     * @ORM\Column(name="sesso", type="string", length=1)
     * 
     */
    private $sesso;
    
    /**
     * @var string
     *
     * @ORM\Column(name="codicefiscale", type="string", length=16)
     */
    private $codicefiscale;


    

   

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
     * @return Anagrafica
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
     * @return Anagrafica
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
     * @return Anagrafica
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
     * Set comune
     *
     * @param string $comune
     *
     * @return Anagrafica
     */
    public function setComune($comune)
    {
        $this->comune = $comune;

        return $this;
    }

    /**
     * Get comune
     *
     * @return string
     */
    public function getComune()
    {
        return $this->comune;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Anagrafica
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
     *
     * @return Anagrafica
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
     * Set sesso
     *
     * @param string $sesso
     *
     * @return Anagrafica
     */
    public function setSesso($sesso)
    {
        $this->sesso = $sesso;

        return $this;
    }

    /**
     * Get sesso
     *
     * @return string
     */
    public function getSesso()
    {
        return $this->sesso;
    }

    /**
     * Set codicefiscale
     *
     * @param string $codicefiscale
     *
     * @return Anagrafica
     */
    public function setCodicefiscale($codicefiscale)
    {
        $this->codicefiscale = $codicefiscale;

        return $this;
    }

    /**
     * Get codicefiscale
     *
     * @return string
     */
    public function getCodicefiscale()
    {
        return $this->codicefiscale;
    }
}
