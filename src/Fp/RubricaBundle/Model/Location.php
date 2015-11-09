<?php

namespace Fp\RubricaBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;

class Location
{
    /**
     * @Assert\NotBlank()
     */
    public $address;

    /**
     * @Assert\Type("Fp\RubricaBundle\Entity\City")
     * @Assert\NotNull()
     */
    public $city;
}
