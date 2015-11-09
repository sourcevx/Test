<?php

namespace Fp\AnagraficaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Fp\AnagraficaBundle\Entity\Anagrafica;
use Fp\AnagraficaBundle\Form\AnagraficaType;

/**
 * Anagrafica controller.
 *
 * @Route("/anagrafica")
 */
class AnagraficaController extends Controller
{

    /**
     * Lists all Anagrafica entities.
     *
     * @Route("/", name="anagrafica")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AnagraficaBundle:Anagrafica')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Anagrafica entity.
     *
     * @Route("/", name="anagrafica_create")
     * @Method("POST")
     * @Template("AnagraficaBundle:Anagrafica:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Anagrafica();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('anagrafica_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Anagrafica entity.
     *
     * @param Anagrafica $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Anagrafica $entity)
    {
        $form = $this->createForm(new AnagraficaType(), $entity, array(
            'action' => $this->generateUrl('anagrafica_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Anagrafica entity.
     *
     * @Route("/new", name="anagrafica_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Anagrafica();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Anagrafica entity.
     *
     * @Route("/{id}", name="anagrafica_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AnagraficaBundle:Anagrafica')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Anagrafica entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Anagrafica entity.
     *
     * @Route("/{id}/edit", name="anagrafica_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AnagraficaBundle:Anagrafica')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Anagrafica entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Anagrafica entity.
    *
    * @param Anagrafica $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Anagrafica $entity)
    {
        $form = $this->createForm(new AnagraficaType(), $entity, array(
            'action' => $this->generateUrl('anagrafica_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Anagrafica entity.
     *
     * @Route("/{id}", name="anagrafica_update")
     * @Method("PUT")
     * @Template("AnagraficaBundle:Anagrafica:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AnagraficaBundle:Anagrafica')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Anagrafica entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('anagrafica_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Anagrafica entity.
     *
     * @Route("/{id}", name="anagrafica_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AnagraficaBundle:Anagrafica')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Anagrafica entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('anagrafica'));
    }

    /**
     * Creates a form to delete a Anagrafica entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('anagrafica_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
