<?php 
namespace Fp\UserBundle\Entity;


use Doctrine\ORM\Mapping as ORM;


/**
 * Fp\UserBundle\Entity\User
 *
 * @ORM\Table(name="Utenti")
 * @ORM\Entity(repositoryClass="Fp\UserBundle\Entity\UserRepository")
 */

class User 

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
     * @var string $name
     * 
     *@ORM\Column(type="string", nullable=true, length=100)
     */
    protected $name;
    
    /**
     * @var string $lastname
     * 
     *@ORM\Column(type="string", nullable=true, length=100)
     */
    protected $lastname;
    
     /**
     * @var string $cell
     * 
     *@ORM\Column(type="string", nullable=true, length=20)
     */
    protected $cell;
             
    /**
     * @var string $struttura
     *
     * @ORM\ManyToOne(targetEntity="Fp\AnagraficaBundle\Entity\Anagrafica")
     * @ORM\JoinColumn(name="id_codicefiscale", referencedColumnName="id")
     */
    protected $codicefiscale;

   
   
    

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set cell
     *
     * @param string $cell
     *
     * @return User
     */
    public function setCell($cell)
    {
        $this->cell = $cell;

        return $this;
    }

    /**
     * Get cell
     *
     * @return string
     */
    public function getCell()
    {
        return $this->cell;
    }

    /**
     * Set codicefiscale
     *
     * @param \Fp\AnagraficaBundle\Entity\Anagrafica $codicefiscale
     *
     * @return User
     */
    public function setCodicefiscale(\Fp\AnagraficaBundle\Entity\Anagrafica $codicefiscale = null)
    {
        $this->codicefiscale = $codicefiscale;

        return $this;
    }

    /**
     * Get codicefiscale
     *
     * @return \Fp\AnagraficaBundle\Entity\Anagrafica
     */
    public function getCodicefiscale()
    {
        return $this->codicefiscale;
    }
}
