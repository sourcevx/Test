<?php

namespace Fp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use JMS\SecurityExtraBundle\Annotation\Secure;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     * @Secure(roles="ROLE_USER")
     */
    public function indexAction()
    {
        
        

    }
}

