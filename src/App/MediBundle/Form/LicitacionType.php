<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class LicitacionType extends AbstractType
{
    private $usuarioEmpresa;
    
    public function __construct($usuarioEmpresa){
        $this->usuarioEmpresa = $usuarioEmpresa;        
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $usuarioEmpresa = $this->usuarioEmpresa;
        $builder->add(
                'nombre', 'text', array(
                    'label' => 'Nombre de Licitación' 
                    )
                );
        $builder->add(
                'horasProgramadas', 'text', array(
                    'label' => 'Horas programadas' 
                    )
                );
        
        $builder->add(
                'cliente', 'entity', array(
                    'label' => 'Cliente: ',
                    'class' => 'AppMediBundle:Cliente',
                    'query_builder' => function(EntityRepository $er) use ($usuarioEmpresa) {
                     return $er->createQueryBuilder('p')
                               ->where('p.id >= 1');},
                    'property' => 'nombre',
                    'attr' => array(
                        'class' => 'classs',
                        'data-native-menu' => 'false'
                    )));
        
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'app\MediBundle\Entity\Licitacion',
                                     'csrf_protection' => true,
                                     'csrf_field_name' => '_token',
                                     'intention' => 'licitacion_item'));
    }
    
    public function getName() {
        return 'Licitacion';
    }
}


?>
