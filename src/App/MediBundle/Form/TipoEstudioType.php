<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TipoEstudioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
                'nombre', 'text', array(
                    'label' => 'Nombre de tipo de estudio' 
                    )
                );
        $builder->add(
                'descripcion', 'text', array(
                    'label' => 'Descripción de tipo de estudio' 
                    )
                );

        
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'App\MediBundle\Entity\TipoEstudio',
                                     'csrf_protection' => true,
                                     'csrf_field_name' => '_token',
                                     'intention' => 'pais_item'));
    }
    
    public function getName() {
        return 'TipoEstudio';
    }
}


?>
