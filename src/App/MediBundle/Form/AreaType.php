<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class AreaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
                'nombre', 'text', array(
                    'label' => 'Nombre de Área' 
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
        $resolver->setDefaults(array('data_class' => 'app\MediBundle\Entity\Area',
                                     'csrf_protection' => true,
                                     'csrf_field_name' => '_token',
                                     'intention' => 'area_item'));
    }
    
    public function getName() {
        return 'Area';
    }
}


?>
