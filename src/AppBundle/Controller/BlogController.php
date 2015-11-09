<?php
// src/AppBundle/Controller/BlogController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Product;

class BlogController extends Controller
{
    /**
    * @Route("blog/{page}", defaults={"page" = 1}, requirements={"page": "\d+"})
    */
    
    public function indexAction($page)
    {
     return $this->render('AppBundle:Blog:index.html.twig');
    }
    
   
           
    /**
     * @Route ("blog/show/{slut}")
     */
    public function showAction($slut)
    {
        
        
         return $this->render(
                'AppBundle:Blog:index.html.twig', array('slut_name' => $slut)
        );
        //return new Response('<html><body>Ciao '.$slut.'!</body></html>');
    }
    
    /**
     * @Route ("blog/delete{del}")
     */
    public function deleteAction($del)
    {
     
        return new Response('<html><body>Ciao '.$del.'!</body></html>');
    }
    
//    /**
//     * @Route ("/blog/update/")
//     */
//    public function updateAction(Request $Req)
//    {
//        //$form = $this->creteForm(...);
//      
//        $form->handleRequest($Req);
//        
//       if ($form->isValid()){
//           $this->get('session')->getFlashBag()->add('notice','le modifiche sono state salvate');
//           return $this->redirectToRoute;
//          
//       }
//        
//       return $this->render('...');
//    }
    


    
}




