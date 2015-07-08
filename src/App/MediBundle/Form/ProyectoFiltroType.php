<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class ProyectoFiltroType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
                'nombreProyecto', 'entity', array(
                    'label' => 'Proyecto a buscar: ',
                    'class' => 'AppMediBundle:Proyecto',
                    'query_builder' => function(EntityRepository $er) {
                     return $er->createQueryBuilder('u')
                               ->where('u.id >= 1');},
                    'property' => 'nombreProyecto',
                    'attr' => array(
                        'class' => 'classs',
                        'data-native-menu' => 'false'
                    )));
                               
        $builder->add(
                'nombreProyecto1', 'entity', array(
                    'label' => 'Proyecto a buscar: ',
                    'class' => 'AppMediBundle:Proyecto',
                    'query_builder' => function(EntityRepository $er) {
                     return $er->createQueryBuilder('u')
                               ->where('u.id >= 1');},
                    'property' => 'nombreProyecto',
                    'attr' => array(
                        'class' => 'classs',
                        'data-native-menu' => 'false'
                    )));
         $builder->add(
                'nombreProyecto2', 'entity', array(
                    'label' => 'Proyecto a buscar: ',
                    'class' => 'AppMediBundle:Proyecto',
                    'query_builder' => function(EntityRepository $er) {
                     return $er->createQueryBuilder('u')
                               ->where('u.id >= 1');},
                    'property' => 'nombreProyecto',
                    'attr' => array(
                        'class' => 'classs',
                        'data-native-menu' => 'false'
                    )));
        $builder->add(
                'username', 'entity', array(
                    'label' => 'Profesional a buscar: ',
                    'class' => 'AppMediBundle:User1',
                    'query_builder' => function(EntityRepository $er) {
                     return $er->createQueryBuilder('u')
                               ->where('u.id >= 1');},
                    'property' => 'username',
                    'attr' => array(
                        'class' => 'classs',
                        'data-native-menu' => 'false'
                    )));
                               
        $builder->add(
                'username1', 'entity', array(
                    'label' => 'Profesional a buscar: ',
                    'class' => 'AppMediBundle:User1',
                    'query_builder' => function(EntityRepository $er) {
                     return $er->createQueryBuilder('u')
                               ->where('u.id >= 1');},
                    'property' => 'username',
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
                                     'intention' => 'proyecto_item'));
    }
    
    public function getName() {
        return 'Proyecto';
    }
}


?>
