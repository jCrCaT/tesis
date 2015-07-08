<?php
namespace app\MediBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
Use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class HorasType extends AbstractType
{
    protected $usuarioEmpresa;
    public function __construct($usuarioEmpresa) {
        $this->usuarioEmpresa = $usuarioEmpresa;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $usuarioEmpresa = $this->usuarioEmpresa;
        $builder->add(
                'actividad', 'entity', array(
                    'label' => 'Actividad: ',
                    'class' => 'AppMediBundle:Actividad',
                    'query_builder' => function(EntityRepository $er) {
                     return $er->createQueryBuilder('u')
                               ->where('u.id >= 1');},
                    'property' => 'nombre',
                    'attr' => array(
                        'class' => 'classs',
                        'data-native-menu' => 'false'
                    )));
        $builder->add(
                'proyecto', 'entity', array(
                    'label' => 'Proyecto: ',
                    'class' => 'AppMediBundle:Proyecto',
                    'query_builder' => function(EntityRepository $er) use($usuarioEmpresa) {
                     return $er->createQueryBuilder('p')
                               ->innerJoin('p.asignacion', 'a','WITH', 'a.proyecto = p.id', 'a.id')
                             ->where('a.profesional = :profesional')
                             ->setParameter('profesional', $usuarioEmpresa->getId())
                             ;
                    },
                    'property' => 'nombreProyecto',
                    'attr' => array(
                       'class' => 'classs',
                      'data-native-menu' => 'false'
                    )));
           /*$builder->add(
                   'proyecto', 'entity', array(
                       'label' => 'Proyecto:',
                       'class' => 'AppMediBundle:Proyecto',
                       'query_builder' => function(EntityRepository $er){
               $request = $er->getRepository('AppMediBundle:Proyecto');
               $request1 = $request->createQueryBuilder('P');
               $query = $request1
                       ->select('P.asignacion','A')
                       ->getQuery();
               return $query;
                       },
                               'property' => 'nombreProyecto',
                               'attr' => array(
                       'class' => 'classs',
                      'data-native-menu' => 'false')
                   ));*/
        
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'App\MediBundle\Entity\Horas',
                                     'csrf_protection' => true,
                                     'csrf_field_name' => '_token',
                                     'intention' => 'horas_item'));
    }
    
    public function getName() {
        return 'Horas';
    }
}


?>
