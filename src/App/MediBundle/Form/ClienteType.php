<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class ClienteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
                'nombre', 'text', array(
                    'label' => 'Nombre de Cliente' 
                    )
                );
        $builder->add(
                'rut', 'text', array(
                    'label' => 'Rut de cliente' 
                    )
                );
        $builder->add(
                'giro', 'text', array(
                    'label' => 'Giro de cliente' 
                    )
                );
        $builder->add(
                'telefono', 'text', array(
                    'label' => 'Teléfono de Cliente' 
                    )
                );
        $builder->add(
                'correoelectronico', 'text', array(
                    'label' => 'Correo electrónico de Cliente' 
                    )
                );
        $builder->add(
                'direccion', 'text', array(
                    'label' => 'Direccion de Cliente' 
                    )
                );
        $builder->add(
                'comuna', 'entity', array(
                    'label' => 'Comuna a la que pertenece: ',
                    'class' => 'AppMediBundle:Comuna',
                    'query_builder' => function(EntityRepository $er) {
                     return $er->createQueryBuilder('u')
                               ->where('u.id >= 1');},
                    'property' => 'nombre',
                    'attr' => array(
                        'class' => 'classs'
                    )));
        
        
        
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'app\MediBundle\Entity\Cliente',
                                     'csrf_protection' => true,
                                     'csrf_field_name' => '_token',
                                     'intention' => 'cliente_item'));
    }
    
    public function getName() {
        return 'Cliente';
    }
}


?>
