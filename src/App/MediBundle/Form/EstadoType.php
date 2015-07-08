<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class EstadoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
                'estado', 'text', array(
                    'label' => 'Nombre: ' 
                    )
                );
        $builder->add(
                'descripcion', 'text', array(
                    'label' => 'Descripcion: ' 
                    )
                );
        
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'app\MediBundle\Entity\EstadoAcciones',
                                     'csrf_protection' => true,
                                     'csrf_field_name' => '_token',
                                     'intention' => 'estado_item'));
    }
    
    public function getName() {
        return 'EstadoAcciones';
    }
}


?>
