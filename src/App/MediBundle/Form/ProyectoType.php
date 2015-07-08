<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProyectoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
                'nombreProyecto', 'text', array(
                    'label' => 'Nombre de Proyecto' 
                    )
                );
        $builder->add(
                'descripcion', 'text', array(
                    'label' => 'Descripción',
                    'attr' => array(
                        'cols' => '500', 
                        'rows' => '500')
                    )
                );
        $builder->add(
                'horasProgramadas', 'text', array(
                    'label' => 'Horas Programadas'
                ));
        
    }
        
    
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'App\MediBundle\Entity\Proyecto',
                                     'csrf_protection' => true,
                                     'csrf_field_name' => '_token',
                                     'intention' => 'proyecto_item'));
    }
    
    public function getName() {
        return 'Proyecto';
    }
}


?>
