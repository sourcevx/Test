<?php
// src/AppBundle/Controller/RelationController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\Product;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class RelationController extends Controller
{
    /**
 * Relation controller.
 *
 * @Route("/relation")
 */
    
     public function relationAction()
    {
        $category = new Category();
        $category->setName('Prodotti principali');

        $product = new Product();
        $product->setName('Test');
        $product->setPrice(19.99);
        $product->setDescription('prodotto di test');
        // correlare questo prodotto alla categoria
        $product->setCategory($category);

        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->persist($product);
        $em->flush();

        return new Response(
            'Creati prodotto con id: '.$product->getId()
            .' e categoria con id: '.$category->getId()
        );
    }
    
    
        /**
 * Relation controller.
 *
 * @Route("/relation/show/{id}")
 */
    public function showAction($id)
{
    $product = $this->getDoctrine()
        ->getRepository('AppBundle:Product')
        ->find($id);

    $categoryName = $product->getCategory()->getName();

   
}

}








