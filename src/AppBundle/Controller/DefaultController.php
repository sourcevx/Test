<?php

// src/AppBundle/Controller/DefaultController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Form\TaskType as TaskForm;


class DefaultController extends Controller {

    /**
     * @Route ("/Task")
     */
    public function newAction(Request $request) {
        // crea un task fornendo alcuni dati fittizi per questo esempio
        $task = new Task();
//        $task->setName('Scrivere un post sul blog');
        //       $task->setDataDue(new \DateTime('tomorrow'));


        $form = $this->createFormBuilder($task)
                ->add('name', 'text', array('label'=> 'Testo'))
                ->add('Name1', 'textarea', array('label'=> 'textarea'))
                ->add('Name2', 'email', array('label'=> 'email'))
                ->add('Name3', 'integer', array('label'=> 'integer'))
                ->add('Name4', 'money', array('label'=> 'money'))
                ->add('Name5', 'number', array('label'=> 'number'))
                ->add('Name6', 'password', array('label'=> 'password'))
                ->add('Name7', 'percent', array('label'=> 'percent'))
                ->add('Name8', 'search', array('label'=> 'search'))
                ->add('Name9','text',array('label'=> 'search'))
                //->add('Name31', 'entity')
                
              //  ->add('Name31', 'entity', array('class' => 'AcmeHelloBundle:User', 'property' => 'name',))
                
                ->add('Name12', 'country')
                ->add('Name13', 'language')
                ->add('Name14', 'locale')
               ->add('Name11', 'timezone')
                ->add('Name16', 'currency')
                ->add('Name17', 'date')
                ->add('Name18', 'datetime')
                
                //->add('dueDate', 'date', array('widget' => 'single_text'))
                
                ->add('Name19', 'time')
                ->add('Name20', 'birthday')
                ->add('Name21', 'checkbox')
                ->add('Name22', 'file')
                ->add('Name23', 'radio')
                ->add('Name24', 'collection')
                ->add('Name25', 'repeated')
                ->add('Name26', 'hidden')
                ->add('Name27', 'button')
                ->add('Name28', 'reset')
                ->add('Name29', 'submit')
                ->add('Name30', 'form')
                ->getForm();

        //  i attiva quando si omette il secondo parametro del metodo add()
        //   (o se si passa null a esso). Se si passa un array di opzioni 
        //   come terzo parametro (fatto sopra per dueDate), q
        //   ueste opzioni vengono applicate al campo indovinato.
//                >add('task')
//        ->add('dueDate', null, array('widget' => 'single_text'))
//        ->add('save', 'submit')

        return $this->render('AppBundle:Task:index.html.twig', array('form' => $form->createView(),));
    }

}

//  public function newAction(Request $request)
//    {
//        // crea un task fornendo alcuni dati fittizi per questo esempio
//        $task = new Task();
//        $task->setName('Scrivere un post sul blog');
//        $task->setDataDue(new \DateTime('tomorrow'));
//
////        $form = $this->createFormBuilder($task)
////            ->add('task', 'text')
////            ->add('dueDate', 'date')
////            ->add('save', 'submit', array('label' => 'Crea post'))
////            ->getForm();
//        
//        
//        
////           ->add('taskName', 'text')
////           ->add('taskName2', 'textarea')
////        ->add('taskName', 'email')
////        ->add('taskName', 'integer')
////        ->add('taskName', 'money')
////        ->add('taskName', 'number')
////        ->add('taskName', 'password')
////        ->add('taskName', 'percent')
////        ->add('taskName', 'search')
////        ->add('taskName', 'url')
////        ->add('taskName', 'choice')
////        ->add('taskName', 'entity')
////        ->add('taskName', 'country')
////        ->add('taskName', 'language')
////        ->add('taskName', 'locale')
////        ->add('taskName', 'timezone')
////        ->add('taskName', 'currency')
////        ->add('taskName', 'date')
////        ->add('taskName', 'datetime')
////        ->add('taskName', 'time')
////        ->add('taskName', 'birthday')
////        ->add('taskName', 'checkbox')
////        ->add('taskName', 'file')
////        ->add('taskName', 'radio')
////        ->add('taskName', 'collection')
////        ->add('taskName', 'repeated')
////        ->add('taskName', 'hidden')
////        ->add('taskName', 'Bottoni')
////        ->add('taskName', 'button')
////        ->add('taskName', 'reset')
////        ->add('taskName', 'submit')
////        ->add('taskName', 'form')
//               
//                                
//        
//         $form = $this->createForm(new TaskForm, $task);
//         $form->handleRequest($request);
////    $form = $this->createFormBuilder($task)
////    ->add('name', 'text')
////    //->add('dueDate', 'date')
////    ->add('dataDue', 'date', array('widget' => 'single_text'))     
////    ->add('save', 'submit', array('label' => 'Crea post'))
////    ->add('saveAndAdd', 'submit', array('label' => 'Salva e aggiungi'))
////    ->getForm();
//
//        
//        if ($form->isValid()) {
//    // ... eseguire un'azione, come salvare il task nella base dati
//
//    $nextAction = $form->get('saveAndAdd')->isClicked()
//        ? 'task_new'
//        : 'task_success';
//    
//        return $this->redirect($this->generateUrl($nextAction));
//        }
//        
//
//    
////        return $this->render('AppBundle:Task:index.html.twig', array(
////            'form' => $form->createView(),
////        ));
//    
//
//
//        return $this->render('AppBundle:Task:index.html.twig', array(
//            'form' => $form->createView(),
//        ));
//                
//    }