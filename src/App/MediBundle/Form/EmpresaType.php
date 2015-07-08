<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class EmpresaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
                'nombre', 'text', array(
                    'label' => 'Nombre de Empresa',
                    'attr'   =>  array(
                        'class'   => 'etiqueta')
                    )
                );
        $builder->add(
                'giro', 'text', array(
                    'label' => 'Giro de Empresa' 
                    )
                );
        $builder->add(
                'rut', 'text', array(
                    'label' => 'R.U.T de Empresa' 
                    )
                );
        $builder->add(
                'direccion', 'text', array(
                    'label' => 'Dirección de Empresa' 
                    )
                );
        $builder->add(
                'telefono', 'text', array(
                    'label' => 'Teléfono de Empresa' 
                    )
                );
        $builder->add(
                'correo', 'text', array(
                    'label' => 'Correo electrónico de Empresa' 
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
        $resolver->setDefaults(array('data_class' => 'app\MediBundle\Entity\Empresa',
                                     'csrf_protection' => true,
                                     'csrf_field_name' => '_token',
                                     'intention' => 'empresa_item'));
    }
    
    public function getName() {
        return 'Empresa';
    }
}


?>
