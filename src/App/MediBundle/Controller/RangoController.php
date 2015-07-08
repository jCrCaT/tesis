<?php

namespace App\MediBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\MediBundle\Entity\Rango;
use App\MediBundle\Form\RangoType;

/**
 * Rango controller.
 *
 * @Route("/admin/rango")
 */
class RangoController extends Controller
{

    /**
     * Lists all Rango entities.
     *
     * @Route("/", name="admin_rango")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppMediBundle:Rango')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Rango entity.
     *
     * @Route("/", name="admin_rango_create")
     * @Method("POST")
     * @Template("AppMediBundle:Rango:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Rango();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_rango_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Rango entity.
    *
    * @param Rango $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Rango $entity)
    {
        $form = $this->createForm(new RangoType(), $entity, array(
            'action' => $this->generateUrl('admin_rango_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Rango entity.
     *
     * @Route("/new", name="admin_rango_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Rango();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Rango entity.
     *
     * @Route("/{id}", name="admin_rango_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppMediBundle:Rango')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rango entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Rango entity.
     *
     * @Route("/{id}/edit", name="admin_rango_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppMediBundle:Rango')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rango entity.');
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
    * Creates a form to edit a Rango entity.
    *
    * @param Rango $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Rango $entity)
    {
        $form = $this->createForm(new RangoType(), $entity, array(
            'action' => $this->generateUrl('admin_rango_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Rango entity.
     *
     * @Route("/{id}", name="admin_rango_update")
     * @Method("PUT")
     * @Template("AppMediBundle:Rango:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppMediBundle:Rango')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rango entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_rango_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Rango entity.
     *
     * @Route("/{id}", name="admin_rango_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppMediBundle:Rango')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Rango entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_rango'));
    }

    /**
     * Creates a form to delete a Rango entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_rango_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
