<?php

namespace Fp\RubricaBundle\Controller;

use Fp\RubricaBundle\Entity\Account;
use Fp\RubricaBundle\Form\Type\AccountType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;



/**
 * Rubrica controller.
 *
 * @Route("/selezione")
 */
class SelezioneController extends Controller
{

    
    /**
     * Displays a form to create a new Rubrica entity.
     *
     * @Route("/", name="selezione")
     * @Method("GET")
     * @Template()
     */
    public function ajaxAction(Request $request) {
//        if (! $request->isXmlHttpRequest()) {
//            throw new NotFoundHttpException();
//        }

        // Get the province ID
        $id = $request->query->get('province_id');

        $result = array();

        // Return a list of cities, based on the selected province
        $repo = $this->getDoctrine()->getManager()->getRepository('RubricaBundle:City');
        $cities = $repo->findByProvince($id, array('name' => 'asc'));
        foreach ($cities as $city) {
            $result[$city->getName()] = $city->getId();
        }
 return $this->redirect($this->generateUrl('Selezione_index'));
      //  return new JsonResponse($result);
    }


    public function createAction(Request $request)
    {
        $account = new Account();

        // You probably want to use a service and inject it automatically. For simplicity,
        // I'm just adding it to the constructor.
        $form = $this->createForm(new AccountType($this->getDoctrine()->getManager()), $account);

        $form->handleRequest($request);

        if ($form->isValid()) {
            /* Do your stuff here */

            $this->getDoctrine()->getManager()->persist($account);
            $this->getDoctrine()->getManager()->flush();
        }

        return $this->render('RubricaBundle:Selezione:index.html.twig', array('form' => $form->createView()));
    }

}