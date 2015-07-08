<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
                'nombre', 'text', array(
                    'label' => 'Nombre de Producto' 
                    )
               );
        $builder->add(
                'descripcion', 'text', array(
                    'label' => 'Descripción de Producto' 
                    )
                );
        $builder->add(
                'cantidad', 'text', array(
                    'label' => 'Cantidad de Producto (Kilogramos)' 
                    )
                );
        $builder->add(
                'salvarproducto', 'submit', array(
                    'label' => 'Guardar'
                ));
        
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'App\MediBundle\Entity\Producto',
                                     'csrf_protection' => true,
                                     'csrf_field_name' => '_token',
                                     'intention' => 'producto_item'));
    }
    
    public function getName() {
        return 'Producto';
    }
}


?>
