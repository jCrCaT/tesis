<?php
namespace App\MediBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\MediBundle\Entity\User1;
use App\MediBundle\Entity\Rango;
use App\MediBundle\Form\User1Type;
use App\MediBundle\Form\UserModType;
use App\MediBundle\Form\RangoModType;
use App\MediBundle\Form\ContrasenaType;
use App\MediBundle\Entity\Horas;
use App\MediBundle\Form\HorasType;
use App\MediBundle\Entity\HorasLic;
use App\MediBundle\Form\HorasLicType;

class User1Controller extends Controller
{
    
    private function setSecurePassword(&$entity) {
    $entity->setSalt(md5(time()));
    $encoder = new \Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder('sha512', true, 10);
    $password = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
    $entity->setPassword($password);
    }

    public function admUser1Action(Request $request)
    {
        $securityContext = $this->container->get('security.context');
        
        $informacion = array(
            'listado' => 'Usuarios',
            'tabla' =>  'Usuario',
        );
        $usuario = new User1();
        $usuario1 = new User1();
        $rango = new Rango();
        $horasIndex = new Horas();
        $horasLicIndex = new HorasLic();
        $usuarioEmpresa = $this->getUser();
        $form = $this->createForm(new User1Type(), $usuario);
        $formRango = $this->createForm(new RangoModType(), $rango);
        $formUsuario = $this->createForm(new UserModType(), $usuario1);
        $formUsuario->remove('password');
        $formUsuario->remove('first_name');
        $formUsuario->remove('second_name');
        $formHoras = $this->createForm(new HorasType($usuarioEmpresa), $horasIndex);
        $formHorasLic = $this->createForm(new HorasLicType($usuarioEmpresa), $horasLicIndex);
        $usuarioEmpresa = $this->getUser();
        $sendRequestList = $this->get('listar');
        $result = $sendRequestList->listarItems('User1', $securityContext ,$usuarioEmpresa);
        $usuario2 = new User1();
        $formContrasena = $this->createForm(new ContrasenaType(), $usuario2);
        
        //MÓDULO LADO DERECHO
        $horasIndex = new Horas();
        $formHoras = $this->createForm(new HorasType($usuarioEmpresa), $horasIndex);
        $reuniones = $sendRequestList->listarReuniones($usuarioEmpresa);
        $service1 = $this->get('grafico');
        $proyecto1= $service1->obtenerMisProyectos($usuarioEmpresa);
        $request = $this->container->get('request');

        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            $formRango->handleRequest($request);
            $formUsuario->handleRequest($request);
            $formContrasena->handleRequest($request);
            
       
            
                if(isset($_POST["salvarUsuario"]))
                {
                    $parametros = array(
                        'username' => $form->get('username')->getData(),
                        'pnombre' => $form->get('pnombre')->getData(),
                        'snombre' => $form->get('snombre')->getData(),
                        'papellido' => $form->get('papellido')->getData(),
                        'sapellido' => $form->get('sapellido')->getData(),
                        'password' => $form->get('password')->getData(),
                        'correo' => $form->get('correo')->getData(),
                        'empresa' => $form->get('empresa')->getData(),
                        'direccion' => $form->get('direccion')->getData(),
                        'comuna' => $form->get('comuna')->getData(),
                        'role' => $form->get('rango')->getData(),
                        'imagen' => $form->get('imagen')->getData()
                    );
                    $user = new User1();
                    $encoderFactory = $this->get('security.encoder_factory');
                    $encoder = $encoderFactory->getEncoder($user);
                    $salt = 'contraseñadeusuarioparaprueba';
                    $password = $encoder->encodePassword($parametros['password'], $salt);
                    $parametros['password'] = $password;
                    $service = $this->get('addLocation');       
                    $sending = $service->salvarUsuario($parametros);
                    
                    return $this->redirect($this->generateUrl('usuario'));    
                    }
                    
                    
                }
                
                if (isset($_POST["eliminar"])){
                    $solicitud = $this->getRequest();
                    $id = $solicitud->request->get('valorEliminar');
                    $propiedades = array(
                        'id' => $id,
                        'propietario' => 'User1'                        
                    );
                    $servicio = $this->get('eliminar');
                    $servicio1 = $this->get('comprobar');
                    $comprobar = $servicio1->comprobarDependenciaUsuario($propiedades);
                    $eliminar = $servicio->eliminarItem($propiedades);
                    return $this->redirect($this->generateUrl('usuario'));
                    
                }
                
                if (isset($_POST["curriculum"])){
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'columna' => 'id',
                        'propietario' => 'User1',
                        'id' => $solicitud->request->get('valorEliminar') 
                    );
                    $sendRequestList = $this->get('listar');
                    $result = $sendRequestList->obtenerInformacion($parametros);
                    $parametros['columna'] = 'profesional';
                    $parametros['propietario'] = 'Estudio';
                    $estudios = $sendRequestList->obtenerInformacion($parametros);
                    
                    return $this->render('AppMediBundle:Default:curriculum.html.twig', array(
                        'usuario' => $result,
                        'estudio' => $estudios
                    ));    
                    
                    
                }
                
                if(isset($_POST['modificarRangoProfesional'])){
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'tipoExterno' => 'Rango',
                        'tipoInterno' => 'User1',
                        'valorInterno' => $solicitud->request->get('valorProfesional'),
                        'valorExterno' => $solicitud->request->get('valorRole'),
                        'id' => $formRango->get('name')->getData()
                        
                    );
                    $servicio1 = $this->get('eliminar');
                    $servicio1->eliminarProfesionalReunion($parametros);
                    $servicio = $this->get('modificar');
                    $servicio->modificarProfReunion($parametros);
                    return $this->redirect($this->generateUrl('usuario'));
                }
                
                if (isset($_POST["guardarCambios"])){
                    if($formUsuario->isValid()){
                    $solicitud = $this->getRequest();
                    $parametros = array(
                        'id' => $solicitud->request->get('valorIdentificador'),
                        'username' => $formUsuario->get('username')->getData(),
                        'pnombre' => $formUsuario->get('pnombre')->getData(),
                        'snombre' => $formUsuario->get('snombre')->getData(),
                        'papellido' => $formUsuario->get('papellido')->getData(),
                        'sapellido' => $formUsuario->get('sapellido')->getData(),
                        'password' => $formUsuario->get('password')->getData(),
                        'correo' => $formUsuario->get('correo')->getData(),
                        'empresa' => $formUsuario->get('empresa')->getData(),
                        'direccion' => $formUsuario->get('direccion')->getData(),
                        'comuna' => $formUsuario->get('comuna')->getData(),
                        'tipo' => 'User1',
                        'superior' => null
                    );
                    $servicio = $this->get('modificar');
                    $servicio->modificarItem($parametros);
                    return $this->redirect($this->generateUrl('usuario'));
                    }
                    
                }
                
                if(isset($_POST["cambiarContrasena"])){
                    if($formContrasena->isValid()){
                        $solicitud = $this->getRequest();
                        $parametros = array(
                        'columna' => 'id',
                        'propietario' => 'User1',
                        'id' => $solicitud->request->get('valorIdentificador') 
                        );
                        $sendRequestList = $this->get('listar');
                        $userModPass = $sendRequestList->obtenerInformacionAtomica($parametros);
                        $parametrosModPass = array(
                            'id' => $solicitud->request->get('valorIdentificador'),
                            'password' => $formContrasena->get('password')->getData()
                        );
                        $encoderFactory = $this->get('security.encoder_factory');
                        $encoder = $encoderFactory->getEncoder($userModPass);
                        $salt = 'contraseñadeusuarioparaprueba';
                        $password = $encoder->encodePassword($parametrosModPass['password'], $salt);
                        $parametrosModPass["password"] = $password;
                        $servicioMod = $this->get("modificar");
                        $servicioMod->modificarContrasena($parametrosModPass, $userModPass);
                    }
                }
                
            
            
          
        return $this->render('AppMediBundle:Default:user1.html.twig', array(
            'form'=> $form->createView(),
            'formRango' => $formRango->createView(),
            'formUsuario' => $formUsuario->createView(),
            'formContrasena' => $formContrasena->createView(),
            'listar' => $result, 
            'informacion' => $informacion, 
            'tipo' => "crear", 
            'modificar' => $usuario,
            'formHoras' => $formHoras->createView(),
            'formHorasLic' => $formHorasLic->createView(),
            'reuniones' => $reuniones,
            'proyecto' => $proyecto1));
    }
}

