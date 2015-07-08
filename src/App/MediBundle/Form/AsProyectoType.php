<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class AsProyectoType extends AbstractType  
{
    
    public function __construct($em) {
        $this->em = $em;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
                'proyecto', 'entity', array(
                    'label' => 'Proyecto a asignar: ',
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
                'profesional', 'entity', array(
                    'label' => 'Profesional a asignar: ',
                    'class' => 'AppMediBundle:User1',
                    'query_builder' => function(EntityRepository $er) {
                     return $er->createQueryBuilder('u')
                               ->where('u.id >= 1');},
                    'property' => 'psnombre',
                    //'data' => $his->em->getReference('AppMediBundle:UserArea', 2),                   
                    'attr' => array(
                        'class' => 'classs',
                        'data-native-menu' => 'false'
                    )));
        $builder->add(
                'horas', 'text', array(
                    'label' => 'Horas asignadas' 
                    )
                );
        $builder->add(
                'valorHora', 'text', array(
                    'label' => 'Valor por Hora (UF)'
                ));
        
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'app\MediBundle\Entity\UserProyecto',
                                     'csrf_protection' => true,
                                     'csrf_field_name' => '_token',
                                     'intention' => 'userproyecto_item'));
    }
    
    public function getName() {
        return 'UserProyecto';
    }
}


?>
