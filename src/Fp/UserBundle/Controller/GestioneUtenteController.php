<?php

namespace Fp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Fp\UserBundle\Form\RegistrazioneType;
use Fp\UserBundle\Form\EditType;


/**
 *  controller.
 *
 * @Route("/")
 */
class GestioneUtenteController extends Controller {

     public $rolesBuilder  = null;
    /**
     * Lista Utenti.
     * @Route("/lista", name="fp_gestione_utente")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('FpUserBundle:User')->findAll();
        return $this->render('FpUserBundle:GestioneUtente:index.html.twig', array('entities' => $entities));
    }

    /**  protected $roleBuilder;
     *
     * @Route("/creazione", name="fp_gestione_utente_creazione")
     * @Template()
     */
    public function newAction(Request $request) {
        $form = $this->createForm(new RegistrazioneType());
        $form->handleRequest($request);
        if ($form->isValid()) {
            $manipulator = $this->get('fos_user.util.user_manipulator');

            $username = $form["username"]->getdata();
            $password = $form["plainPassword"]->getdata();
            $email = $form["email"]->getdata();
            $inviom = $manipulator->create($username, $password, $email, true, false);
        }

        return $this->render('FpUserBundle:GestioneUtente:new.html.twig', array('form' => $form->createView()));
    }

    /**
     *
     * @Route("/cambio_password", name="fp_gestione_utente_cambio_pws")
     * @Template()
     */
    public function changepasswordAction() {
        
    }

    /**
     * @Route("/modifica/{id}", name="fp_gestione_utente_modifica")
     * @Method("GET")
     * @Template()
     */
    public function editAction(Request $request,$id) {
 

           $username = "test";
        $userManager = $this->get('fos_user.user_manager');
        $user= $userManager->findUserBy(array('id'=>$id));

        $form = $this->createForm(new EditType());
        $form->handleRequest($request);
       
        return $this->render('FpUserBundle:GestioneUtente:addroles.html.twig', array('form' => $form->createView()));
    

        
          
//        $userManager = $container->get('fos_user.user_manager');
//        
//        $em = $this->getDoctrine()->getManager();
//        $entity = $em->getRepository('FpUserBundle:User')->find($id);
//
//        if (!$entity) {
//            throw $this->createNotFoundException('Unable to find edit entity.');
//        }
//
//       //$editForm = $this->createEditForm($entity);
//
//        return array(
//            'entity' => $entity,
//            'edit_form' => $editForm->createView()
//        );
    }

    
    /**
     *
     * @Route("/addroles/{id}", name="fp_gestione_utente_roles")
     * @Template()
     */
    public function addrolesAction(Request $request,$id) {
        
          $request = $this->container->get('request');

    $form = $this->createForm(new EditType());
    $form->handleRequest($request);
    if ($form->isValid()) {

        // Getting the variable of the form
        $selectedUser = $request->request->get('value');
        // Getting the user infos
        $editUser = $this->getDoctrine()->getRepository('FpUserBundle:User')->find($selectedUser);
        // Using the UserManager (from the FOSUserBundle)
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($editUser->getUsername());
        // Changing the role of the user
        $user->setRoles(array($selectedUser['role']));
        // Updating the user
        $userManager->updateUser($user);
    }

    return $this->render(
        'FpUserBundle:GestioneUtente:addroles.html.twig',
        array(
            'form' => $form->createView()
            
        )
    );
        
//        $username = "test";
//        $userManager = $this->get('fos_user.user_manager');
//        $user= $userManager->findUserBy(array('id'=>$id));
//
//        $form = $this->createForm(new EditType(), $user);
//        $form->handleRequest($request);
//        if ($form->isValid()) {
//            $manipulator = $this->get('fos_user.util.user_manipulator');
//            //$roles = $form->getData()->getRole();
//            
//            $roles = $form->get('role')->getData()->get(0);
//            $ruolo=$roles->getRole();
//           
//            
//           $rol = $manipulator->addRole($username,$ruolo);
//          
//        } 
//        return $this->render('FpUserBundle:GestioneUtente:addroles.html.twig', array('form' => $form->createView()));
//            
    }
    
    

}

