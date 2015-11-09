<?php
// src/AppBundle/Controller/ArticleController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class ArticleController extends Controller
{
   /**
     * @Route ("/article")
     */
    
  
//    /**
//     * @Route ("/articles/{_locale}/{year}/{title}.{_format}",
//     * defaults={"_format" = "html"},
//     * requirements= 
//     * {"_locate"= "en|fr",
//     * "_format"= "html|rss",
//     * "year"= "\d+" 
//     * }
//     *  )
//    */
    
    
    //$_controller
    //$_route
    //$_format
    //$_locale,$year,$title,$_route,$_format,$_controller
    public function showAction()
    {
        {
     return $this->render('AppBundle:Article:article_details.html.twig');
    }
     //   return new Response('<html><body><br> Contoller: '  .$_controller. '</br><br> Rotta: ' .$_route. '</br><br> Formattazione: '.$_format. '</br></body></html>');
      //  return new Response('<html><body>' .$_route.  '</body></html>');
      //  return new Response('<html><body>' .$_format.  '</body></html>');
    }
}




