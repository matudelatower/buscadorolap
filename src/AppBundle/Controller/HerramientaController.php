<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Herramienta;
use AppBundle\Form\HerramientaType;

/**
 * Herramienta controller.
 *
 */
class HerramientaController extends Controller
{
    /**
     * Lists all Herramienta entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $herramientas = $em->getRepository('AppBundle:Herramienta')->findAll();

        return $this->render('herramienta/index.html.twig', array(
            'herramientas' => $herramientas,
        ));
    }

    /**
     * Creates a new Herramienta entity.
     *
     */
    public function newAction(Request $request)
    {
        $herramienta = new Herramienta();
        $form = $this->createForm('AppBundle\Form\HerramientaType', $herramienta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($herramienta);
            $em->flush();

            return $this->redirectToRoute('herramientas_show', array('id' => $herramienta->getId()));
        }

        return $this->render('herramienta/new.html.twig', array(
            'herramienta' => $herramienta,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Herramienta entity.
     *
     */
    public function showAction(Herramienta $herramientum)
    {
        $deleteForm = $this->createDeleteForm($herramientum);

        return $this->render('herramienta/show.html.twig', array(
            'herramientum' => $herramientum,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Herramienta entity.
     *
     */
    public function editAction(Request $request, Herramienta $herramientum)
    {
        $deleteForm = $this->createDeleteForm($herramientum);
        $editForm = $this->createForm('AppBundle\Form\HerramientaType', $herramientum);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($herramientum);
            $em->flush();

            return $this->redirectToRoute('herramientas_edit', array('id' => $herramientum->getId()));
        }

        return $this->render('herramienta/edit.html.twig', array(
            'herramientum' => $herramientum,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Herramienta entity.
     *
     */
    public function deleteAction(Request $request, Herramienta $herramientum)
    {
        $form = $this->createDeleteForm($herramientum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($herramientum);
            $em->flush();
        }

        return $this->redirectToRoute('herramientas_index');
    }

    /**
     * Creates a form to delete a Herramienta entity.
     *
     * @param Herramienta $herramientum The Herramienta entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Herramienta $herramientum)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('herramientas_delete', array('id' => $herramientum->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
