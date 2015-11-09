<?php
// src/AppBundle/Controller/CalcController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class CalcController extends Controller
{

     /**
     * @Route ("/calc/{adendi_0}/{adendi_1}")
     */
    
    public function sumAction($adendi_0,$adendi_1)
    {
//       return $this->render('AppBundle:Calc:index.html.twig', array('Sum_Res' => $adendi_0 + $adendi_1)); 
    
   
      // $adendi = ($adendi_0 + $adendi_1);
       //return new Response('<html><body> Risultato= '.$adendi. '</body></html>');
        return $adendi_0 + $adendi_1;
    }
    
//    public function minAction($adendi_0,$adendi_1)
//    {
//      
//    }
//    
//     public function molAction($adendi_0,$adendi_1)
//    {
////       return $this->render(
////                'AppBundle:Blog:index.html.twig', array('slut_name' => $slut)
//    }
//    
//      public function divAction($adendi_0,$adendi_1 )
//    {
////       return $this->render(
////                'AppBundle:Blog:index.html.twig', array('slut_name' => $slut)
//    }
    
}




