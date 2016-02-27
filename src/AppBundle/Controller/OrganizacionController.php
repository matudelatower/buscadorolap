<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Organizacion;
use AppBundle\Form\OrganizacionType;

/**
 * Organizacion controller.
 *
 */
class OrganizacionController extends Controller {
	/**
	 * Lists all Organizacion entities.
	 *
	 */
	public function indexAction() {
		$em = $this->getDoctrine()->getManager();

		$organizacions = $em->getRepository( 'AppBundle:Organizacion' )->findAll();

		return $this->render( 'organizacion/index.html.twig',
			array(
				'organizacions' => $organizacions,
			) );
	}

	/**
	 * Creates a new Organizacion entity.
	 *
	 */
	public function newAction( Request $request ) {
		$organizacion = new Organizacion();
		$form         = $this->createForm( 'AppBundle\Form\OrganizacionType', $organizacion );
		$form->handleRequest( $request );

		if ( $form->isSubmitted() && $form->isValid() ) {
			$em = $this->getDoctrine()->getManager();
			$em->persist( $organizacion );
			$em->flush();


			return $this->redirectToRoute( 'organizacion_show', array( 'id' => $organizacion->getId() ) );

		}

		return $this->render( 'organizacion/new.html.twig',
			array(
				'organizacion' => $organizacion,
				'form'         => $form->createView(),
			) );
	}

	/**
	 * Finds and displays a Organizacion entity.
	 *
	 */
	public function showAction( Organizacion $organizacion ) {
		$deleteForm   = $this->createDeleteForm( $organizacion );
		$em           = $this->getDoctrine()->getManager();
		$herramientas = $em->getRepository( 'AppBundle:Herramienta' )->findAll();

		$arrayDatos     = array();
		$arrayResultado = array();

		foreach ( $herramientas as $herramienta ) {
			$arrayDatos[ $herramienta->getNombre() ]['web']                  = $herramienta->getWeb() * $organizacion->getWeb();
			$arrayDatos[ $herramienta->getNombre() ]['windowsXp']            = $herramienta->getWindowsXp() * $organizacion->getWindowsXp();
			$arrayDatos[ $herramienta->getNombre() ]['libre']                = $herramienta->getLibre() * $organizacion->getLibre();
			$arrayDatos[ $herramienta->getNombre() ]['facilidadInstalacion'] = $herramienta->getFacilidadInstalacion() * $organizacion->getFacilidadInstalacion();
			$arrayDatos[ $herramienta->getNombre() ]['curvaAprendizaje']     = $herramienta->getCurvaAprendizaje() * $organizacion->getCurvaAprendizaje();
			$arrayDatos[ $herramienta->getNombre() ]['noUtilizaSql']         = $herramienta->getNoUtilizaSql() * $organizacion->getNoUtilizaSql();
			$arrayDatos[ $herramienta->getNombre() ]['extensionExcel']       = $herramienta->getExtensionExcel() * $organizacion->getExtensionExcel();
			$arrayDatos[ $herramienta->getNombre() ]['clienteServidor']      = $herramienta->getClienteServidor() * $organizacion->getClienteServidor();
			$arrayDatos[ $herramienta->getNombre() ]['ayudaOnline']          = $herramienta->getAyudaOnline() * $organizacion->getAyudaOnline();
			$arrayDatos[ $herramienta->getNombre() ]['etl']                  = $herramienta->getEtl() * $organizacion->getEtl();

			foreach ( $arrayDatos as $arrayDatoK => $arrayDatoV ) {
				$arrayResultado[ $arrayDatoK ] = 0;
				foreach ( $arrayDatoV as $key => $value ) {
					$arrayResultado[ $arrayDatoK ] += $value;
				}
			}

		}


		arsort( $arrayResultado );

		return $this->render( 'organizacion/show.html.twig',
			array(
				'organizacion'   => $organizacion,
				'delete_form'    => $deleteForm->createView(),
				'arrayResultado' => $arrayResultado,
			) );
	}

	/**
	 * Displays a form to edit an existing Organizacion entity.
	 *
	 */
	public function editAction( Request $request, Organizacion $organizacion ) {
		$deleteForm = $this->createDeleteForm( $organizacion );
		$editForm   = $this->createForm( 'AppBundle\Form\OrganizacionType', $organizacion );
		$editForm->handleRequest( $request );

		if ( $editForm->isSubmitted() && $editForm->isValid() ) {
			$em = $this->getDoctrine()->getManager();
			$em->persist( $organizacion );
			$em->flush();

			return $this->redirectToRoute( 'organizacion_edit', array( 'id' => $organizacion->getId() ) );
		}

		return $this->render( 'organizacion/edit.html.twig',
			array(
				'organizacion' => $organizacion,
				'edit_form'    => $editForm->createView(),
				'delete_form'  => $deleteForm->createView(),
			) );
	}

	/**
	 * Deletes a Organizacion entity.
	 *
	 */
	public function deleteAction( Request $request, Organizacion $organizacion ) {
		$form = $this->createDeleteForm( $organizacion );
		$form->handleRequest( $request );

		if ( $form->isSubmitted() && $form->isValid() ) {
			$em = $this->getDoctrine()->getManager();
			$em->remove( $organizacion );
			$em->flush();
		}

		return $this->redirectToRoute( 'organizacion_index' );
	}

	/**
	 * Creates a form to delete a Organizacion entity.
	 *
	 * @param Organizacion $organizacion The Organizacion entity
	 *
	 * @return \Symfony\Component\Form\Form The form
	 */
	private function createDeleteForm( Organizacion $organizacion ) {
		return $this->createFormBuilder()
		            ->setAction( $this->generateUrl( 'organizacion_delete', array( 'id' => $organizacion->getId() ) ) )
		            ->setMethod( 'DELETE' )
		            ->getForm();
	}
}
