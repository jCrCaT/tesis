<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
use App\MediBundle\Form\DocumentoType;


class ContrasenaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       
        
        $builder->add(
                'password', 'repeated', array(
                    'type' => 'password',
                    'invalid_message' => 'El valor de los dos campos debe coincidir',
                    'label' => false,
                    'first_name' => 'Password',
                    'second_name' => 'Repetir_Password'
                    )
                );
                               
                             
        
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'App\MediBundle\Entity\User1',
                                     'csrf_protection' => true,
                                     'csrf_field_name' => '_token',
                                     'intention' => 'contrasena_item',
                                     'cascade_validation' => true));
    }
    
    public function getName() {
        return 'User1';
    }
}


?>
