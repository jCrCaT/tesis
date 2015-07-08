<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class PlazoRequerimientoType extends AbstractType
{
    protected $licitacion;
    public function __construct($licitacion) {
        $this->licitacion = $licitacion;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $licitacion = $this->licitacion;

        $builder->add(
                'horas', 'text', array(
                    'label' => 'Horas por modificar' 
                    )
                );
        $builder->add(
                'accion','choice', array(
                    'label' => 'Acción a realizar',
                    'choices' => array(
                        'd' => 'Disminuir',
                        'a' => 'Aumentar'
                    )
                ));
        $builder->add('descripcion', 'text', array(
                    'label' => 'Motivo de modificación' 
                    )
                );

        $builder->add(
                'requerimiento', 'entity', array(
                    'label' => 'Etapa: ',
                    'class' => 'AppMediBundle:Requerimiento',
                    'query_builder' => function(EntityRepository $er) use ($licitacion){
                     return $er->createQueryBuilder('p')
                               ->where('p.licitacion >= :licitacion')
                               ->setParameter('licitacion', $licitacion);},
                    'property' => 'nombre',
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
                                     'intention' => 'explazoreq_item'));
    }
    
    public function getName() {
        return 'PlazoRequerimiento';
    }
}


?>
