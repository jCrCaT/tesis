<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class PlazoProyectoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
                'horas', 'text', array(
                    'label' => 'Horas por modificar' 
                    )
                );
        $builder->add(
                'accion','choice', array(
                    'label' => 'Acciòn a realizar',
                    'choices' => array(
                        'd' => 'Disminuir',
                        'a' => 'Aumentar'
                    )
                ));
        $builder->add('descripcion', 'text', array(
                    'label' => 'Motivo de modificación' 
                    )
                );
        
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'app\MediBundle\Entity\ExcepcionPlazoProyecto',
                                     'csrf_protection' => true,
                                     'csrf_field_name' => '_token',
                                     'intention' => 'explazopro_item'));
    }
    
    public function getName() {
        return 'PlazoProyecto';
    }
}


?>
