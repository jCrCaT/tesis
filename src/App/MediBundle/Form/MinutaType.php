<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class MinutaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add(
                'descripcion', 'textarea', array(
                    'label' => 'Descripción',
                    'attr' => array(
                        'cols' => '50', 
                        'rows' => '10')
                    )
                );
        $builder->add(
                'profesional', 'entity', array(
                    'label' => 'Profesional a asignar: ',
                    'class' => 'AppMediBundle:User1',
                    'query_builder' => function(EntityRepository $er) {
                     return $er->createQueryBuilder('u')
                               ->where('u.id >= 1');},
                    'property' => 'psNombre',
                    //'data' => $his->em->getReference('AppMediBundle:UserArea', 2),                   
                    'attr' => array(
                        'class' => 'classs',
                        'data-native-menu' => 'false'
                    )));
        
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
                                     'csrf_protection' => true,
                                     'csrf_field_name' => '_token',
                                     'intention' => 'minuta_item'));
    }
    
    public function getName() {
        return 'Minuta';
    }
}


?>
