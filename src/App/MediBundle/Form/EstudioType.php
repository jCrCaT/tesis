<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class EstudioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
                'descripcion', 'textarea', array(
                    'label' => 'Descripcion' 
                    )
                );
        $builder->add(
                'institucion', 'text', array(
                    'label' => 'Institución en que se realizó' 
                    )
                );
        $builder->add(
                'profesional', 'entity', array(
                    'label' => 'Profesional al que pertenece: ',
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
        $resolver->setDefaults(array('data_class' => 'App\MediBundle\Entity\Estudio',
                                     'csrf_protection' => true,
                                     'csrf_field_name' => '_token',
                                     'intention' => 'estudio_item'));
    }
    
    public function getName() {
        return 'Proyecto';
    }
}


?>
