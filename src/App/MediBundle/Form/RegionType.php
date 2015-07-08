<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class RegionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
                'nombre', 'text', array(
                    'label' => 'Nombre de Región' 
                    )
                );
        $builder->add(
                'superior', 'entity', array(
                    'label' => 'País al que pertenece: ',
                    'class' => 'AppMediBundle:Pais',
                    'query_builder' => function(EntityRepository $er) {
                     return $er->createQueryBuilder('u')
                               ->where('u.id >= 1');},
                    'property' => 'nombre',
                    'attr' => array(
                        'class' => 'classs',
                        'data-native-menu' => 'false'
                    )));
        
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'App\MediBundle\Entity\Region',
                                     'csrf_protection' => true,
                                     'csrf_field_name' => '_token',
                                     'intention' => 'region_item'));
    }
    
    public function getName() {
        return 'pais';
    }
}


?>
