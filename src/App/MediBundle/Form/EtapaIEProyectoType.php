<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class EtapaIEProyectoType extends AbstractType
{
    protected $proyecto;
    public function __construct($proyecto) {
        $this->proyecto = $proyecto;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $proyecto = $this->proyecto;
        $builder->add(
                'etapaProyecto', 'entity', array(
                    'label' => 'Etapa: ',
                    'class' => 'AppMediBundle:AsignacionEtapa',
                    'query_builder' => function(EntityRepository $er) use ($proyecto){
                     return $er->createQueryBuilder('p')
                               ->where('p.proyecto >= :proyecto')
                               ->setParameter('proyecto', $proyecto);},
                    'property' => 'nombreEtapaProyecto',
                    'attr' => array(
                        'class' => 'classs',
                        'data-native-menu' => 'false'
                    )));
        
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
                                     'csrf_protection' => true,
                                     'csrf_field_name' => '_token',
                                     'intention' => 'etapaeproyecto_item'));
    }
    
    public function getName() {
        return 'etapae';
    }
}


?>
