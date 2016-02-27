<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HerramientaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('empresa')
            ->add('libre')
            ->add('windowsXp')
            ->add('web')
            ->add('facilidadInstalacion')
            ->add('curvaAprendizaje')
            ->add('noUtilizaSql')
            ->add('extensionExcel')
            ->add('clienteServidor')
            ->add('ayudaOnline')
            ->add('etl')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Herramienta'
        ));
    }
}
