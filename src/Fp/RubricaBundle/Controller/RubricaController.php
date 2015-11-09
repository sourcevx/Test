<?php

namespace Fp\RubricaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Fp\RubricaBundle\Entity\Rubrica;
use Fp\RubricaBundle\Form\RubricaType;
use Fp\RubricaBundle\Form\SearchType;
use Fp\RubricaBundle\Form\ProductsType;
use Fp\RubricaBundle\Form\LocalitaType;
use Symfony\Component\HttpFoundation\Session\Session;
use JMS\SecurityExtraBundle\Annotation\Secure;

/**
 * Rubrica controller.
 *
 * @Route("/")
 */
class RubricaController extends Controller {

    /**
     * Lists all Rubrica entities.
     *
     * @Route("/", name="rubrica")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
//        $em = $this->getDoctrine()->getManager();
//
//        $entities = $em->getRepository('RubricaBundle:Rubrica')->findAll();
   
//        $aree = $em->getRepository('RubricaBundle:Area')->findAll();
//       
//        //DQL
//            $tsql = 'SELECT DISTINCT u FROM RubricaBundle:Ufficio u ';
//            $query = $em->createQuery($tsql);
//            $ufficio = $query->getResult();
//       
//        return $this->render('RubricaBundle:Rubrica:index.html.twig', 
//                array('entities' => $entities,'ufficio'=>$ufficio,'aree'=>$aree));
        
        $em = $this->getDoctrine()->getManager();
                 $entities = $em->getRepository('RubricaBundle:Rubrica')->findAll();
      
        return $this->render('RubricaBundle:Rubrica:index.html.twig', array('entities' => $entities));
    }
    
    /**
     * Creates a new Rubrica entity.
     *
     * @Route("/", name="rubrica_create")
     * @Method("POST")
     * @Template("RubricaBundle:Rubrica:new.html.twig")
     * @Secure(roles="ROLE_USER")
     */
    public function createAction(Request $request) {
        $entity = new Rubrica();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
         //   $entity->setCreated(new \DateTime());   
            $em->persist($entity);
            $em->flush();
          
            return $this->redirect($this->generateUrl('rubrica_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Rubrica entity.
     *
     * @param Rubrica $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Rubrica $entity) {
        $form = $this->createForm(new RubricaType(), $entity, array(
            'action' => $this->generateUrl('rubrica_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Rubrica entity.
     *
     * @Route("/new", name="rubrica_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction(Request $request) {
        $entity = new Rubrica();
        $form = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
        
    
    }

    /**
     * Finds and displays a Rubrica entity.
     *
     * @Route("/{id}", name="rubrica_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RubricaBundle:Rubrica')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rubrica entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Rubrica entity.
     *
     * @Route("/{id}/edit", name="rubrica_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RubricaBundle:Rubrica')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rubrica entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
        
        
    }

    /**
     * Creates a form to edit a Rubrica entity.
     *
     * @param Rubrica $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Rubrica $entity) {
        $form = $this->createForm(new RubricaType(), $entity, array(
            'action' => $this->generateUrl('rubrica_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Rubrica entity.
     *
     * @Route("/{id}", name="rubrica_update")
     * @Method("PUT")
     * @Template("RubricaBundle:Rubrica:edit.html.twig")
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RubricaBundle:Rubrica')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rubrica entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            
//            $entity->setModify(new \DateTime());
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rubrica_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Rubrica entity.
     *
     * @Route("/{id}", name="rubrica_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RubricaBundle:Rubrica')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Rubrica entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('rubrica'));
    }

    /**
     * Displays a form to search an existing Rubrica entity.
     *
     * @Route("/search/", name="rubrica_search")
     *
     * @Template()
     */
    public function searchAction(Request $request) {
         
        $form = $this->createForm(new SearchType());
        $form->handleRequest($request);

        if ($form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $chiave = $form["textsearch"]->getData();
//            $ricerca = explode(" ", $chiave);

//            $nomi = $em->getRepository('RubricaBundle:Rubrica')->findBynome($nome);
//             if (empty($ricerca[1])) {
//                $nomi = $em->getRepository('RubricaBundle:Rubrica')->findBy(array('nome' => $nome));
//            } else {
//                $nomi = $em->getRepository('RubricaBundle:Rubrica')->findBy(array('nome' => $ricerca[0], 'cognome' => $ricerca[1]));
//            }
//            return $this->render('RubricaBundle:Rubrica:search.html.twig', array('form' => $form->createView(), 'risultato_nomi' => $nomi));//
//   
//            //DQL
//            $tsql = 'SELECT r FROM RubricaBundle:Rubrica r  WHERE r.nome LIKE :nome';
//            if (!empty($ricerca[1])) {
//                $tsql.= ' AND r.cognome LIKE :cognome';
//            }
//            $query = $em->createQuery($tsql);
//            if (empty($ricerca[1])) {
//                $query->setParameter('nome', '%' . $chiave . '%');
//            } else {
//                $query->setParameter('nome', '%' . $ricerca[0] . '%');
//                $query->setParameter('cognome', '%' . $ricerca[1] . '%');
//            }
//            $nomi = $query->getResult();
            
            
            $repository = $this->getDoctrine()
                    ->getRepository('RubricaBundle:Rubrica');

            $chiave = $form["textsearch"]->getData();
            $ricerca = explode(" ", $chiave);
            
 
            $query = $repository->createQueryBuilder('r')
                    ->where('r.nome LIKE :nome');

            if (!empty($ricerca[1])) {
                $query->andWhere('r.cognome LIKE :cognome')
                        ->setParameter('nome', '%' . $ricerca[0] . '%')
                        ->setParameter('cognome', '%' . $ricerca[1] . '%');
                        
            } else {
                $query->setParameter('nome', '%' . $chiave . '%');
                       
            }

            $query->orderBy('r.nome', 'ASC');
            $query = $query->getQuery();
            $nomi = $query->getResult();
                
            return $this->render('RubricaBundle:Rubrica:search.html.twig', array('form' => $form->createView(), 'risultato_nomi' => $nomi));//
        }

        return $this->render('RubricaBundle:Rubrica:search.html.twig', array('form' => $form->createView()));

        
    }
    /**
     * Creates a form to delete a Rubrica entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('rubrica_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

    
    
    /**
     * Displays a form to search an existing Rubrica entity.
     *
     * @Route("/localita/", name="rubrica_localita")
     *
     * @Template()
     */
    public function localitaAction(Request $request) {
         
        $form = $this->createForm(new LocalitaType());
        $form->handleRequest($request);
        return $this->render('RubricaBundle:Rubrica:localita.html.twig', array('form' => $form->createView()));
    }
    
    /**
     * Displays a form to search an existing Rubrica entity.
     *
     * @Route("/sessioni/", name="rubrica_sessioni")
     *
     * @Template()
     */
    public function sessioniAction(Request $request) {
//        $session = new Session();
//        $session->start();

        $session = $request->getSession();
// imposta e ottiene attributi di sessione
         
        $session->set('name', 'Drak');
        $session->get('name');

// imposta messaggi flash
        $session->getFlashBag()->add('notice', 'Profilo aggiornato');

// recupera i messaggi
        // recupera i messaggi
foreach ($session->getFlashBag()->get('notice', array()) as $message) {
    echo "<div class='flash-notice'>$message</div>";
            
        }

     //   return $this->render('RubricaBundle:Rubrica:sessioni.html.twig');
    }
    
    
    
    
    
    
     /**
     * Displays a form to search an existing Rubrica entity.
     *
     * @Route("/upload/", name="rubrica_upload")
     *
     * @Template()
     */
    public function uploadAction(Request $request) {
         
        $form = $this->createForm(new ProductsType());
        $form->handleRequest($request);

        
        return $this->render('RubricaBundle:Rubrica:upload.html.twig', array('form' => $form->createView()));

        
    }
    
    
    
    
    
    
    

}
