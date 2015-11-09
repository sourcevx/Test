<?php

namespace Fp\UserBundle\Listener;

use FOS\UserBundle\Model\UserManagerInterface;
//use Fp\UserBundle\Entity\User;
//use FOS\UserBundle\Model\UserInterface;
//use Fp\UserBundle\Entity\UserRepository;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
//use Symfony\Component\Security\Core\Exception\AuthenticationException;
//use Symfony\Component\Security\Core\SecurityContext;
use Doctrine\ORM\EntityManager;



class LoginListener
{
    private $userManager;
    private $em;
    
    public function __construct(UserManagerInterface $userManager, EntityManager $em)
    {
        $this->userManager = $userManager;
        $this->em = $em;
        
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {   
        $userid = $event->getAuthenticationToken()->getUser()->getId();

        $user = $this->em->getRepository('FpUserBundle:User')->find($userid);
        //$id_struttura = $user->getStruttura()->getId();

        //$struttura = $this->em->getRepository('FpCommonsBundle:Struttura')->find($id_struttura);
        //$id_struttura_reg = $user->getStruttura()->getIdStrutturaRegionale();
       // $desc_struttura = $user->getStruttura()->getDenominazione();
//        $liv_struttura  = $user->getStruttura()->getLivello();
//        $anno_corrente = new \DateTime();
//        
        $session = $event->getRequest()->getSession();
        $session->set('userid',$userid);
//        $session->set('id_struttura', $id_struttura);
//        $session->set('id_struttura_reg', $user->getStruttura()->getIdStrutturaRegionale()->getId());
//        $session->set('desc_struttura', $desc_struttura);
//        $session->set('liv_struttura', $liv_struttura);
//        $session->set('anno_corrente', $anno_corrente->format('Y'));


    }
}
