<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DocumentoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
                'file', 'file', array(
                    'required' => true,
                    'label' => 'Archivo a subir'
                    )
                );
        
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'app\MediBundle\Entity\Documento',
                                     'csrf_protection' => true,
                                     'validation_groups' => 'Documento',
                                     'csrf_field_name' => '_token',
                                     'intention' => 'documento_item'));
    }
    
    public function getName() {
        return 'Documento';
    }
}

