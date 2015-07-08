<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
use App\MediBundle\Form\DocumentoType;


class UserModType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       
        
        $builder->add(
                'username', 'text', array(
                    'label' => 'R.U.N de usuario',));
        $builder->add('pnombre', 'text', array(
                    'label' => 'Primer nombre de usuario'));
        
        $builder->add('snombre', 'text', array(
                    'label' => 'Segundo nombre de usuario'));
        
        $builder->add('papellido', 'text', array(
                    'label' => 'Primer apellido de usuario'));
        
        $builder->add('sapellido', 'text', array(
                    'label' => 'Segundo apellido de usuario'));
        
        $builder->add(
                'password', 'text', array(
                    'label' => 'Contraseña de usuario' 
                    )
                );
        $builder->add(
                'correo', 'text', array(
                    'label' => 'Correo electrónico de usuario' 
                    )
                );
        $builder->add(
                'direccion', 'text', array(
                    'label' => 'Dirección de usuario' 
                    )
                );
        $builder->add(
                'telefono', 'text', array(
                    'label' => 'Telefono de usuario' 
                    )
                );
        $builder->add(
                'empresa', 'entity', array(
                    'label' => 'Empresa a la que pertenece: ',
                    'class' => 'AppMediBundle:Empresa',
                    'query_builder' => function(EntityRepository $er) {
                     return $er->createQueryBuilder('u')
                               ->where('u.id >= 1');},
                    'property' => 'nombre',
                    'attr' => array(
                        'class' => 'classs',
                        'data-native-menu' => 'false'
                    )));
        $builder->add(
                'comuna', 'entity', array(
                    'label' => 'Comuna a la que pertenece: ',
                    'class' => 'AppMediBundle:Comuna',
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
        $resolver->setDefaults(array('data_class' => 'App\MediBundle\Entity\User1',
                                     'csrf_protection' => true,
                                     'csrf_field_name' => '_token',
                                     'intention' => 'user1_item',
                                     'cascade_validation' => true));
    }
    
    public function getName() {
        return 'User1';
    }
}


?>
