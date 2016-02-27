<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrganizacionType extends AbstractType {
	/**
	 * @param FormBuilderInterface $builder
	 * @param array $options
	 */
	public function buildForm( FormBuilderInterface $builder, array $options ) {
		$aChoices = range( 0, 3 );
		$builder
			->add( 'nombre' )
			->add( 'cuit' )
			->add( 'domicilio' )
			->add( 'localidad' )
			->add( 'provinciaEstado' )
			->add( 'pais' )
			->add( 'libre',
				ChoiceType::class,
				array(
					'label'    => '¿Cuán relevante es que la herramienta sea gratuita?',
					'choices'  => $aChoices,
					'expanded' => true,
					'multiple' => false,
					'attr'     => array( 'class' => 'herramienta ' )
				) )
			->add( 'windowsXp',
				ChoiceType::class,
				array(
					'label'    => '¿Cuán Relevante es que la herramienta funcione unicamente en Windows XP?',
					'choices'  => $aChoices,
					'expanded' => true,
					'multiple' => false,
					'attr'     => array( 'class' => 'herramienta ' )
				) )
			->add( 'web',
				ChoiceType::class,
				array(
					'label'    => '¿Cuán relevante es que utilice una plataforma web?',
					'choices'  => $aChoices,
					'expanded' => true,
					'multiple' => false,
					'attr'     => array( 'class' => 'herramienta ' )
				) )
			->add( 'facilidadInstalacion',
				ChoiceType::class,
				array(
					'label'    => '¿Cuán relevante es la facilidad para instalar la herramienta?',
					'choices'  => $aChoices,
					'expanded' => true,
					'multiple' => false,
					'attr'     => array( 'class' => 'herramienta ' )
				) )
			->add( 'curvaAprendizaje',
				ChoiceType::class,
				array(
					'label'    => '¿Cuán relevante es que sea de aprendizaje sencillo?',
					'choices'  => $aChoices,
					'expanded' => true,
					'multiple' => false,
					'attr'     => array( 'class' => 'herramienta ' )
				) )
			->add( 'noUtilizaSql',
				ChoiceType::class,
				array(
					'label'    => '¿Tiene conocimientos sobre SQL? ¿Cuán relevante es que utilice este lenguaje?',
					'choices'  => $aChoices,
					'expanded' => true,
					'multiple' => false,
					'attr'     => array( 'class' => 'herramienta ' )
				) )
			->add( 'extensionExcel',
				ChoiceType::class,
				array(
					'label'    => '¿Es relevante que tenga integración con la herramienta Excel?',
					'choices'  => $aChoices,
					'expanded' => true,
					'multiple' => false,
					'attr'     => array( 'class' => 'herramienta ' )
				) )
			->add( 'clienteServidor',
				ChoiceType::class,
				array(
					'label'    => '¿Cuán relevante es que trabaje en red?',
					'choices'  => $aChoices,
					'expanded' => true,
					'multiple' => false,
					'attr'     => array( 'class' => 'herramienta ' )
				) )
			->add( 'ayudaOnline',
				ChoiceType::class,
				array(
					'label'    => '¿Cuán relevante es que posea ayuda en la web?',
					'choices'  => $aChoices,
					'expanded' => true,
					'multiple' => false,
					'attr'     => array( 'class' => 'herramienta ' )
				) )
			->add( 'etl',
				ChoiceType::class,
				array(
					'label'    => '¿Tiene conocientos de herramientas ETL? ¿Cuán relevante es que utilice este tipo de herramientas?',
					'choices'  => $aChoices,
					'expanded' => true,
					'multiple' => false,
					'attr'     => array( 'class' => 'herramienta ' )
				) );
	}

	/**
	 * @param OptionsResolver $resolver
	 */
	public function configureOptions( OptionsResolver $resolver ) {
		$resolver->setDefaults( array(
			'data_class' => 'AppBundle\Entity\Organizacion'
		) );
	}
}
