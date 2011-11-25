<?php

namespace My\FirmowaBundle\Controller;
use Symfony\Component\Form\FormBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use My\FirmowaBundle\Entity\Zamowienie;
use My\FirmowaBundle\Form\ZamowienieType;

/**
 * Zamowienie controller.
 *
 * @Route("/zamowienie")
 */
class ZamowienieController extends Controller
{
    /**
     * Lists all Zamowienie entities.
     *
     * @Route("/", name="zamowienie")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('MyFirmowaBundle:Zamowienie')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Zamowienie entity.
     *
     * @Route("/{id}/show", name="zamowienie_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MyFirmowaBundle:Zamowienie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Zamowienie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Zamowienie entity.
     *
     * @Route("/new", name="zamowienie_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Zamowienie();
        $id=array(1=>1, 2=>2);
        //$form   = $this->createForm(new ZamowienieType(), $entity);
		$form=$this->createFormBuilder($entity)
			->add('data_przyjecia','date')
			->add('data_odbioru','date')
			->add('Usterka','textarea')
			->add('numer_zamowienia','text')
			->add('klienci', 'entity',
		      array('class'=>'My\FirmowaBundle\Entity\Klient'))
			->getForm();
        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Zamowienie entity.
     *
     * @Route("/create", name="zamowienie_create")
     * @Method("post")
     * @Template("MyFirmowaBundle:Zamowienie:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Zamowienie();
        $request = $this->getRequest();
       // $form    = $this->createForm(new ZamowienieType(), $entity);
        $form=$this->createFormBuilder($entity)
        ->add('data_przyjecia','date')
        ->add('data_odbioru','date')
        ->add('Usterka','textarea')
        ->add('numer_zamowienia','text')
        ->add('klienci', 'entity',
		      array('class'=>'My\FirmowaBundle\Entity\Klient'))
        ->getForm();
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('zamowienie_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Zamowienie entity.
     *
     * @Route("/{id}/edit", name="zamowienie_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MyFirmowaBundle:Zamowienie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Zamowienie entity.');
        }

        $editForm = $this->createForm(new ZamowienieType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Zamowienie entity.
     *
     * @Route("/{id}/update", name="zamowienie_update")
     * @Method("post")
     * @Template("MyFirmowaBundle:Zamowienie:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MyFirmowaBundle:Zamowienie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Zamowienie entity.');
        }

        $editForm   = $this->createForm(new ZamowienieType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('zamowienie_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Zamowienie entity.
     *
     * @Route("/{id}/delete", name="zamowienie_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('MyFirmowaBundle:Zamowienie')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Zamowienie entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('zamowienie'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
