<?php

namespace My\FirmowaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use My\FirmowaBundle\Entity\Klient;
use My\FirmowaBundle\Form\KlientType;

/**
 * Klient controller.
 *
 * @Route("/klient")
 */
class KlientController extends Controller
{
    /**
     * Lists all Klient entities.
     *
     * @Route("/", name="klient")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('MyFirmowaBundle:Klient')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Klient entity.
     *
     * @Route("/{id}/show", name="klient_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MyFirmowaBundle:Klient')->find($id);
        $query = $em->createQuery("SELECT p FROM MyFirmowaBundle:Zamowienie p  WHERE p.klienci = $id");
		$entity2=$query->getResult();
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Klient entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'entity2'	  => $entity2,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Klient entity.
     *
     * @Route("/new", name="klient_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Klient();
        $form   = $this->createForm(new KlientType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Klient entity.
     *
     * @Route("/create", name="klient_create")
     * @Method("post")
     * @Template("MyFirmowaBundle:Klient:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Klient();
        $request = $this->getRequest();
        $form    = $this->createForm(new KlientType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('klient_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Klient entity.
     *
     * @Route("/{id}/edit", name="klient_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MyFirmowaBundle:Klient')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Klient entity.');
        }

        $editForm = $this->createForm(new KlientType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Klient entity.
     *
     * @Route("/{id}/update", name="klient_update")
     * @Method("post")
     * @Template("MyFirmowaBundle:Klient:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MyFirmowaBundle:Klient')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Klient entity.');
        }

        $editForm   = $this->createForm(new KlientType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('klient_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Klient entity.
     *
     * @Route("/{id}/delete", name="klient_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('MyFirmowaBundle:Klient')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Klient entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('klient'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
