<?php

namespace My\FirmowaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use My\FirmowaBundle\Entity\Rachunek;
use My\FirmowaBundle\Form\RachunekType;
use Ps\PdfBundle\Annotation\Pdf;
/**
 * Rachunek controller.
 *
 * @Route("/rachunek")
 */
class RachunekController extends Controller
{
    /**
     * Lists all Rachunek entities.
     *
     * @Route("/", name="rachunek")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('MyFirmowaBundle:Rachunek')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Rachunek entity.
     *
     * @Route("/{id}/show", name="rachunek_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MyFirmowaBundle:Rachunek')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rachunek entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Rachunek entity.
     *
     * @Route("/new", name="rachunek_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Rachunek();
        $form   = $this->createForm(new RachunekType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Rachunek entity.
     *
     * @Route("/create", name="rachunek_create")
     * @Method("post")
     * @Template("MyFirmowaBundle:Rachunek:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Rachunek();
        $request = $this->getRequest();
        $form    = $this->createForm(new RachunekType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rachunek_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Rachunek entity.
     *
     * @Route("/{id}/edit", name="rachunek_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MyFirmowaBundle:Rachunek')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rachunek entity.');
        }

        $editForm = $this->createForm(new RachunekType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Rachunek entity.
     *
     * @Route("/{id}/update", name="rachunek_update")
     * @Method("post")
     * @Template("MyFirmowaBundle:Rachunek:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MyFirmowaBundle:Rachunek')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rachunek entity.');
        }

        $editForm   = $this->createForm(new RachunekType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rachunek_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Rachunek entity.
     *
     * @Route("/{id}/delete", name="rachunek_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('MyFirmowaBundle:Rachunek')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Rachunek entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('rachunek'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    /**
    * Create PDF document
    * @PDF()
    * @Route("/{id}/wystaw", name="rachunek_wystaw")
    * @Template()
    */
    public function wystawAction($id){
    	$format ='pdf';// $this->get('request')->get('_format');
    	
    	return $this->render(sprintf('MyFirmowaBundle:Rachunek:wystawAction.%s.twig', $format));

    	
    }
}
