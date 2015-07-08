<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class HitoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
                'nombre', 'text', array(
                    'label' => 'Nombre de Hito' 
                    )
                );
        $builder->add(
                'descripcion', 'text', array(
                    'label' => 'Descripcion' 
                    )
                );
        
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
                                     'csrf_protection' => true,
                                     'csrf_field_name' => '_token',
                                     'intention' => 'actividad_item'));
    }
    
    public function getName() {
        return 'Hito';
    }
}


?>
