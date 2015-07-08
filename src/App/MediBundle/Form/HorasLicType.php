<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class HorasLicType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add(
                'requerimiento', 'entity', array(
                    'label' => 'Requerimiento trabajado: ',
                    'class' => 'AppMediBundle:Requerimiento',
                    'query_builder' => function(EntityRepository $er) {
                     return $er->createQueryBuilder('r')
                               ->leftJoin('r.licitacion', 'l', 'WITH', 'r.licitacion = l.id')
                                ->innerJoin('l.asignacion', 'a', 'WITH', 'l.id = a.licitacion');},
                    'property' => 'requeLicitacion',
                    'attr' => array(
                        'class' => 'classs',
                        'data-native-menu' => 'false'
                    )));
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'App\MediBundle\Entity\HorasLic',
                                     'csrf_protection' => true,
                                     'csrf_field_name' => '_token',
                                     'intention' => 'horasLic_item'));
    }
    
    public function getName() {
        return 'HorasLic';
    }
}