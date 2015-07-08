<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LoginType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
                '_username', 'text', array(
                    'label' => 'Usuario' 
                    )
                );
        $builder->add(
                '_password', 'password', array(
                    'label' => 'Contraseña' 
                    )
                );
        $builder->add(
                'salvarPais', 'submit', array(
                    'label' => 'Guardar'
                ));
        
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'App\MediBundle\Entity\Pais',
                                     'csrf_protection' => true,
                                     'csrf_field_name' => '_token',
                                     'intention' => 'pais_item'));
    }
    
    public function getName() {
        return 'Pais';
    }
}


?>
