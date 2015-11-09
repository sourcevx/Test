<?php

namespace Fp\RubricaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Fp\RubricaBundle\Entity\Area;
use Fp\RubricaBundle\Form\AreaType;

/**
 * Area controller.
 *
 * @Route("/area")
 */
class AreaController extends Controller
{

    /**
     * Lists all Area entities.
     *
     * @Route("/", name="area")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RubricaBundle:Area')->findAll();

        return array(
            'entities' => $entities,
        );
    }
//    /**
//     * Creates a new Area entity.
//     *
//     * @Route("/", name="area_create")
//     * @Method("POST")
//     * @Template("RubricaBundle:Area:new.html.twig")
//     */
//    public function createAction(Request $request)
//    {
//        $entity = new Area();
//        $form = $this->createCreateForm($entity);
//        $form->handleRequest($request);
//
//        if ($form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($entity);
//            $em->flush();
//
//            return $this->redirect($this->generateUrl('area_show', array('id' => $entity->getId())));
//        }
//
//        return array(
//            'entity' => $entity,
//            'form'   => $form->createView(),
//        );
//    }
//
//    /**
//     * Creates a form to create a Area entity.
//     *
//     * @param Area $entity The entity
//     *
//     * @return \Symfony\Component\Form\Form The form
//     */
//    private function createCreateForm(Area $entity)
//    {
//        $form = $this->createForm(new AreaType(), $entity, array(
//            'action' => $this->generateUrl('area_create'),
//            'method' => 'POST',
//        ));
//
//        $form->add('submit', 'submit', array('label' => 'Create'));
//
//        return $form;
//    }
//
//    /**
//     * Displays a form to create a new Area entity.
//     *
//     * @Route("/new", name="area_new")
//     * @Method("GET")
//     * @Template()
//     */
//    public function newAction()
//    {
//        $entity = new Area();
//        $form   = $this->createCreateForm($entity);
//
//        return array(
//            'entity' => $entity,
//            'form'   => $form->createView(),
//        );
//    }
//
//    /**
//     * Finds and displays a Area entity.
//     *
//     * @Route("/{id}", name="area_show")
//     * @Method("GET")
//     * @Template()
//     */
//    public function showAction($id)
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $entity = $em->getRepository('RubricaBundle:Area')->find($id);
//
//        if (!$entity) {
//            throw $this->createNotFoundException('Unable to find Area entity.');
//        }
//
//        $deleteForm = $this->createDeleteForm($id);
//
//        return array(
//            'entity'      => $entity,
//            'delete_form' => $deleteForm->createView(),
//        );
//    }
//
//    /**
//     * Displays a form to edit an existing Area entity.
//     *
//     * @Route("/{id}/edit", name="area_edit")
//     * @Method("GET")
//     * @Template()
//     */
//    public function editAction($id)
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $entity = $em->getRepository('RubricaBundle:Area')->find($id);
//
//        if (!$entity) {
//            throw $this->createNotFoundException('Unable to find Area entity.');
//        }
//
//        $editForm = $this->createEditForm($entity);
//        $deleteForm = $this->createDeleteForm($id);
//
//        return array(
//            'entity'      => $entity,
//            'edit_form'   => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
//        );
//    }
//
//    /**
//    * Creates a form to edit a Area entity.
//    *
//    * @param Area $entity The entity
//    *
//    * @return \Symfony\Component\Form\Form The form
//    */
//    private function createEditForm(Area $entity)
//    {
//        $form = $this->createForm(new AreaType(), $entity, array(
//            'action' => $this->generateUrl('area_update', array('id' => $entity->getId())),
//            'method' => 'PUT',
//        ));
//
//        $form->add('submit', 'submit', array('label' => 'Update'));
//
//        return $form;
//    }
//    /**
//     * Edits an existing Area entity.
//     *
//     * @Route("/{id}", name="area_update")
//     * @Method("PUT")
//     * @Template("RubricaBundle:Area:edit.html.twig")
//     */
//    public function updateAction(Request $request, $id)
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $entity = $em->getRepository('RubricaBundle:Area')->find($id);
//
//        if (!$entity) {
//            throw $this->createNotFoundException('Unable to find Area entity.');
//        }
//
//        $deleteForm = $this->createDeleteForm($id);
//        $editForm = $this->createEditForm($entity);
//        $editForm->handleRequest($request);
//
//        if ($editForm->isValid()) {
//            $em->flush();
//
//            return $this->redirect($this->generateUrl('area_edit', array('id' => $id)));
//        }
//
//        return array(
//            'entity'      => $entity,
//            'edit_form'   => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
//        );
//    }
//    /**
//     * Deletes a Area entity.
//     *
//     * @Route("/{id}", name="area_delete")
//     * @Method("DELETE")
//     */
//    public function deleteAction(Request $request, $id)
//    {
//        $form = $this->createDeleteForm($id);
//        $form->handleRequest($request);
//
//        if ($form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $entity = $em->getRepository('RubricaBundle:Area')->find($id);
//
//            if (!$entity) {
//                throw $this->createNotFoundException('Unable to find Area entity.');
//            }
//
//            $em->remove($entity);
//            $em->flush();
//        }
//
//        return $this->redirect($this->generateUrl('area'));
//    }
//
//    /**
//     * Creates a form to delete a Area entity by id.
//     *
//     * @param mixed $id The entity id
//     *
//     * @return \Symfony\Component\Form\Form The form
//     */
//    private function createDeleteForm($id)
//    {
//        return $this->createFormBuilder()
//            ->setAction($this->generateUrl('area_delete', array('id' => $id)))
//            ->setMethod('DELETE')
//            ->add('submit', 'submit', array('label' => 'Delete'))
//            ->getForm()
//        ;
//    }
}
