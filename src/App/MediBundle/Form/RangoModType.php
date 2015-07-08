<?php

namespace App\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class RangoModType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
                'name', 'entity', array(
                    'label' => 'Rango a asignar: ',
                    'class' => 'AppMediBundle:Rango',
                    'query_builder' => function(EntityRepository $er) {
                     return $er->createQueryBuilder('u')
                               ->where('u.id >= 1');},
                    'property' => 'name',                   
                    'attr' => array(
                        'class' => 'classs',
                        'data-native-menu' => 'false'
                    )));
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
        return 'Rango';
    }
}
