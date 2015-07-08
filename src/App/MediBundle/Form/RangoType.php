<?php

namespace App\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RangoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
                'name', 'text', array(
                    'label' => 'Nombre de Rango' 
                    )
                );
        $builder->add(
                'role', 'text', array(
                    'label' => 'Nombre interno de rango' 
                    )
                );
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\MediBundle\Entity\Rango'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_medibundle_rango';
    }
}
