<?php
// src/AppBundle/Controller/MainController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class MainController extends Controller
{
    /**
     * @Route ("/contact")
     * @Method ("GET")
     */
    public function contactAction()
    {
        //return new Response('<html><body>HomePage</body></html>');
         return $this->render('AppBundle:Main:index.html.twig');
    }
    
    /**
     * @Route ("/Processo")
     * @Method ("POST")
     */
        public function processcontactAction()
    {
        return new Response('<html><body>Processo</body></html>');
    }
    
}




