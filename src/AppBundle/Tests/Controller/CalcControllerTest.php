<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Controller\CalcController;


class calcTest extends \PHPUnit_Framework_TestCase
{
   
    
    public function testIndex()
    {
        $calc = new CalcController();
        $result = $calc->sumAction(30, 12);

        // asserisce che il calcolatore aggiunga correttamente i numeri!
        $this->assertEquals(42, $result);
    }

}
