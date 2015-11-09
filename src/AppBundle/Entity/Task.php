<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Task
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\TaskRepository")
 */
class Task
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
     * @ORM\Column(name="name", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_due", type="datetime")
     */
    private $dataDue;
    
    
       /**
     * @var string
     *
     * @ORM\Column(name="name1", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name1;
    
       /**
     * @var string
     *
     * @ORM\Column(name="name2", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name2;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name3", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name3;
    
    
      /**
     * @var string
     *
     * @ORM\Column(name="name4", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name4;
        
    

    
    
    //______________________________________________________________________________________________________________
    
      /**
     * @var string
     *
     * @ORM\Column(name="name5", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name5;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name6", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name6;
          /**
     * @var string
     *
     * @ORM\Column(name="name7", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name7;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name8", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name8;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name9", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name9;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name10", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name10;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name11", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name11;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name12", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name12;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name13", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name13;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name14", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name14;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name15", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name16;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name17", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name17;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name18", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name18;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name19", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name19;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name20", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name20;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name21", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name21;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name22", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name22;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name23", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name23;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name24", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name24;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name25", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name25;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name26", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name26;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name27", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name27;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name28", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name28;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name29", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name29;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name30", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name30;
    
      /**
     * @var string
     *
     * @ORM\Column(name="name31", type="string", length=255)
     * 
     * @Assert\NotNull()
     */
    private $name31;
    
    

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
     * Set name
     *
     * @param string $name
     *
     * @return Task
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
     * Set dataDue
     *
     * @param \DateTime $dataDue
     *
     * @return Task
     */
    public function setDataDue($dataDue)
    {
        $this->dataDue = $dataDue;

        return $this;
    }

    /**
     * Get dataDue
     *
     * @return \DateTime
     */
    public function getDataDue()
    {
        return $this->dataDue;
    }

    /**
     * Set name1
     *
     * @param string $name1
     *
     * @return Task
     */
    public function setName1($name1)
    {
        $this->name1 = $name1;

        return $this;
    }

    /**
     * Get name1
     *
     * @return string
     */
    public function getName1()
    {
        return $this->name1;
    }

    /**
     * Set name2
     *
     * @param string $name2
     *
     * @return Task
     */
    public function setName2($name2)
    {
        $this->name2 = $name2;

        return $this;
    }

    /**
     * Get name2
     *
     * @return string
     */
    public function getName2()
    {
        return $this->name2;
    }

    /**
     * Set name3
     *
     * @param string $name3
     *
     * @return Task
     */
    public function setName3($name3)
    {
        $this->name3 = $name3;

        return $this;
    }

    /**
     * Get name3
     *
     * @return string
     */
    public function getName3()
    {
        return $this->name3;
    }

    /**
     * Set name4
     *
     * @param string $name4
     *
     * @return Task
     */
    public function setName4($name4)
    {
        $this->name4 = $name4;

        return $this;
    }

    /**
     * Get name4
     *
     * @return string
     */
    public function getName4()
    {
        return $this->name4;
    }

    /**
     * Set name5
     *
     * @param string $name5
     *
     * @return Task
     */
    public function setName5($name5)
    {
        $this->name5 = $name5;

        return $this;
    }

    /**
     * Get name5
     *
     * @return string
     */
    public function getName5()
    {
        return $this->name5;
    }

    /**
     * Set name6
     *
     * @param string $name6
     *
     * @return Task
     */
    public function setName6($name6)
    {
        $this->name6 = $name6;

        return $this;
    }

    /**
     * Get name6
     *
     * @return string
     */
    public function getName6()
    {
        return $this->name6;
    }

    /**
     * Set name7
     *
     * @param string $name7
     *
     * @return Task
     */
    public function setName7($name7)
    {
        $this->name7 = $name7;

        return $this;
    }

    /**
     * Get name7
     *
     * @return string
     */
    public function getName7()
    {
        return $this->name7;
    }

    /**
     * Set name8
     *
     * @param string $name8
     *
     * @return Task
     */
    public function setName8($name8)
    {
        $this->name8 = $name8;

        return $this;
    }

    /**
     * Get name8
     *
     * @return string
     */
    public function getName8()
    {
        return $this->name8;
    }

    /**
     * Set name9
     *
     * @param string $name9
     *
     * @return Task
     */
    public function setName9($name9)
    {
        $this->name9 = $name9;

        return $this;
    }

    /**
     * Get name9
     *
     * @return string
     */
    public function getName9()
    {
        return $this->name9;
    }

    /**
     * Set name10
     *
     * @param string $name10
     *
     * @return Task
     */
    public function setName10($name10)
    {
        $this->name10 = $name10;

        return $this;
    }

    /**
     * Get name10
     *
     * @return string
     */
    public function getName10()
    {
        return $this->name10;
    }

    /**
     * Set name11
     *
     * @param string $name11
     *
     * @return Task
     */
    public function setName11($name11)
    {
        $this->name11 = $name11;

        return $this;
    }

    /**
     * Get name11
     *
     * @return string
     */
    public function getName11()
    {
        return $this->name11;
    }

    /**
     * Set name12
     *
     * @param string $name12
     *
     * @return Task
     */
    public function setName12($name12)
    {
        $this->name12 = $name12;

        return $this;
    }

    /**
     * Get name12
     *
     * @return string
     */
    public function getName12()
    {
        return $this->name12;
    }

    /**
     * Set name13
     *
     * @param string $name13
     *
     * @return Task
     */
    public function setName13($name13)
    {
        $this->name13 = $name13;

        return $this;
    }

    /**
     * Get name13
     *
     * @return string
     */
    public function getName13()
    {
        return $this->name13;
    }

    /**
     * Set name14
     *
     * @param string $name14
     *
     * @return Task
     */
    public function setName14($name14)
    {
        $this->name14 = $name14;

        return $this;
    }

    /**
     * Get name14
     *
     * @return string
     */
    public function getName14()
    {
        return $this->name14;
    }

    /**
     * Set name16
     *
     * @param string $name16
     *
     * @return Task
     */
    public function setName16($name16)
    {
        $this->name16 = $name16;

        return $this;
    }

    /**
     * Get name16
     *
     * @return string
     */
    public function getName16()
    {
        return $this->name16;
    }

    /**
     * Set name17
     *
     * @param string $name17
     *
     * @return Task
     */
    public function setName17($name17)
    {
        $this->name17 = $name17;

        return $this;
    }

    /**
     * Get name17
     *
     * @return string
     */
    public function getName17()
    {
        return $this->name17;
    }

    /**
     * Set name18
     *
     * @param string $name18
     *
     * @return Task
     */
    public function setName18($name18)
    {
        $this->name18 = $name18;

        return $this;
    }

    /**
     * Get name18
     *
     * @return string
     */
    public function getName18()
    {
        return $this->name18;
    }

    /**
     * Set name19
     *
     * @param string $name19
     *
     * @return Task
     */
    public function setName19($name19)
    {
        $this->name19 = $name19;

        return $this;
    }

    /**
     * Get name19
     *
     * @return string
     */
    public function getName19()
    {
        return $this->name19;
    }

    /**
     * Set name20
     *
     * @param string $name20
     *
     * @return Task
     */
    public function setName20($name20)
    {
        $this->name20 = $name20;

        return $this;
    }

    /**
     * Get name20
     *
     * @return string
     */
    public function getName20()
    {
        return $this->name20;
    }

    /**
     * Set name21
     *
     * @param string $name21
     *
     * @return Task
     */
    public function setName21($name21)
    {
        $this->name21 = $name21;

        return $this;
    }

    /**
     * Get name21
     *
     * @return string
     */
    public function getName21()
    {
        return $this->name21;
    }

    /**
     * Set name22
     *
     * @param string $name22
     *
     * @return Task
     */
    public function setName22($name22)
    {
        $this->name22 = $name22;

        return $this;
    }

    /**
     * Get name22
     *
     * @return string
     */
    public function getName22()
    {
        return $this->name22;
    }

    /**
     * Set name23
     *
     * @param string $name23
     *
     * @return Task
     */
    public function setName23($name23)
    {
        $this->name23 = $name23;

        return $this;
    }

    /**
     * Get name23
     *
     * @return string
     */
    public function getName23()
    {
        return $this->name23;
    }

    /**
     * Set name24
     *
     * @param string $name24
     *
     * @return Task
     */
    public function setName24($name24)
    {
        $this->name24 = $name24;

        return $this;
    }

    /**
     * Get name24
     *
     * @return string
     */
    public function getName24()
    {
        return $this->name24;
    }

    /**
     * Set name25
     *
     * @param string $name25
     *
     * @return Task
     */
    public function setName25($name25)
    {
        $this->name25 = $name25;

        return $this;
    }

    /**
     * Get name25
     *
     * @return string
     */
    public function getName25()
    {
        return $this->name25;
    }

    /**
     * Set name26
     *
     * @param string $name26
     *
     * @return Task
     */
    public function setName26($name26)
    {
        $this->name26 = $name26;

        return $this;
    }

    /**
     * Get name26
     *
     * @return string
     */
    public function getName26()
    {
        return $this->name26;
    }

    /**
     * Set name27
     *
     * @param string $name27
     *
     * @return Task
     */
    public function setName27($name27)
    {
        $this->name27 = $name27;

        return $this;
    }

    /**
     * Get name27
     *
     * @return string
     */
    public function getName27()
    {
        return $this->name27;
    }

    /**
     * Set name28
     *
     * @param string $name28
     *
     * @return Task
     */
    public function setName28($name28)
    {
        $this->name28 = $name28;

        return $this;
    }

    /**
     * Get name28
     *
     * @return string
     */
    public function getName28()
    {
        return $this->name28;
    }

    /**
     * Set name29
     *
     * @param string $name29
     *
     * @return Task
     */
    public function setName29($name29)
    {
        $this->name29 = $name29;

        return $this;
    }

    /**
     * Get name29
     *
     * @return string
     */
    public function getName29()
    {
        return $this->name29;
    }

    /**
     * Set name30
     *
     * @param string $name30
     *
     * @return Task
     */
    public function setName30($name30)
    {
        $this->name30 = $name30;

        return $this;
    }

    /**
     * Get name30
     *
     * @return string
     */
    public function getName30()
    {
        return $this->name30;
    }

    /**
     * Set name31
     *
     * @param string $name31
     *
     * @return Task
     */
    public function setName31($name31)
    {
        $this->name31 = $name31;

        return $this;
    }

    /**
     * Get name31
     *
     * @return string
     */
    public function getName31()
    {
        return $this->name31;
    }
}
