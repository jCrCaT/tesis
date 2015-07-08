<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // dw_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dw_homepage')), array (  '_controller' => 'DwBundle:Default:index',));
        }

        // inicio
        if ($pathinfo === '/inicio') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\InicioController::admInicioAction',  '_route' => 'inicio',);
        }

        // pais
        if ($pathinfo === '/pais') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\PaisController::admPaisAction',  '_route' => 'pais',);
        }

        // mpais
        if ($pathinfo === '/mpais') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\PaisController::mPaisAction',  '_route' => 'mpais',);
        }

        // producto
        if ($pathinfo === '/producto') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\ProductoController::admProductoAction',  '_route' => 'producto',);
        }

        // region
        if ($pathinfo === '/region') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\RegionController::admRegionAction',  '_route' => 'region',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // ciudad
            if ($pathinfo === '/ciudad') {
                return array (  '_controller' => 'App\\MediBundle\\Controller\\CiudadController::admCiudadAction',  '_route' => 'ciudad',);
            }

            // comuna
            if ($pathinfo === '/comuna') {
                return array (  '_controller' => 'App\\MediBundle\\Controller\\ComunaController::admComunaAction',  '_route' => 'comuna',);
            }

        }

        // usuario
        if ($pathinfo === '/usuario') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\User1Controller::admUser1Action',  '_route' => 'usuario',);
        }

        // empresa
        if ($pathinfo === '/empresa') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\EmpresaController::admEmpresaAction',  '_route' => 'empresa',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'App\\MediBundle\\Controller\\SeguridadController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // rango
        if ($pathinfo === '/rango') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\RangoAdmController::admRangoAction',  '_route' => 'rango',);
        }

        // area
        if ($pathinfo === '/area') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\AreaController::admAreaAction',  '_route' => 'area',);
        }

        // proyecto
        if ($pathinfo === '/proyecto') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\ProyectoController::admProyectoAction',  '_route' => 'proyecto',);
        }

        // gproyecto
        if (0 === strpos($pathinfo, '/dashboard/proyecto') && preg_match('#^/dashboard/proyecto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gproyecto')), array (  '_controller' => 'App\\MediBundle\\Controller\\GproyectoController::GproyectoAction',));
        }

        if (0 === strpos($pathinfo, '/asignar')) {
            // asignararea
            if ($pathinfo === '/asignararea') {
                return array (  '_controller' => 'App\\MediBundle\\Controller\\AsAreaController::admAsAreaAction',  '_route' => 'asignararea',);
            }

            // asignarproyecto
            if ($pathinfo === '/asignarproyecto') {
                return array (  '_controller' => 'App\\MediBundle\\Controller\\AsProyectoController::admAsProyectoAction',  '_route' => 'asignarproyecto',);
            }

        }

        // cliente
        if ($pathinfo === '/cliente') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\ClienteController::admClienteAction',  '_route' => 'cliente',);
        }

        // actividad
        if ($pathinfo === '/actividad') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\ActividadController::admActividadAction',  '_route' => 'actividad',);
        }

        // estudio
        if ($pathinfo === '/estudio') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\EstudioController::admEstudioAction',  '_route' => 'estudio',);
        }

        // horas
        if ($pathinfo === '/horas') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\HorasController::admHorasAction',  '_route' => 'horas',);
        }

        // grafico
        if ($pathinfo === '/grafico') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\GraficoController::admGraficoAction',  '_route' => 'grafico',);
        }

        // tipoestudio
        if ($pathinfo === '/tipoestudio') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\TipoestudioController::admTipoEstudioAction',  '_route' => 'tipoestudio',);
        }

        // reunion
        if ($pathinfo === '/reunion') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\ReunionController::admReunionAction',  '_route' => 'reunion',);
        }

        if (0 === strpos($pathinfo, '/minuta')) {
            // minuta
            if (preg_match('#^/minuta/(?P<key>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'minuta')), array (  '_controller' => 'App\\MediBundle\\Controller\\MinutaController::admMinutaAction',));
            }

            // minutaForm
            if ($pathinfo === '/minuta') {
                return array (  '_controller' => 'App\\MediBundle\\Controller\\MinutaController::admMinutaFormAction',  '_route' => 'minutaForm',);
            }

        }

        // filtro
        if ($pathinfo === '/filtro') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\FiltroController::admFiltroAction',  '_route' => 'filtro',);
        }

        // licitacion
        if ($pathinfo === '/licitacion') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\LicitacionController::admLicitacionAction',  '_route' => 'licitacion',);
        }

        // asignarlicitacion
        if ($pathinfo === '/asignarlicitacion') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\AsLicitacionController::admAsLicitacionAction',  '_route' => 'asignarlicitacion',);
        }

        if (0 === strpos($pathinfo, '/pr')) {
            // prueba
            if ($pathinfo === '/prueba') {
                return array (  '_controller' => 'App\\DataWarehouseBundle\\Controller\\PruebaController::DatawarehouseAction',  '_route' => 'prueba',);
            }

            // proyectoEtapa
            if ($pathinfo === '/proyecto') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_proyectoEtapa;
                }

                return array (  '_controller' => 'App\\MediBundle\\Controller\\ProyectoController::etapaProyectoAction',  '_route' => 'proyectoEtapa',);
            }
            not_proyectoEtapa:

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/p')) {
            // etapaProyecto
            if ($pathinfo === '/proyecto') {
                return array (  '_controller' => 'App\\MediBundle\\Controller\\ProyectoController::admProyectoAction',  '_route' => 'etapaProyecto',);
            }

            // peticionAjax
            if ($pathinfo === '/peticionAjax') {
                return array (  '_controller' => 'App\\MediBundle\\Controller\\ProyectoController::admProyectoAction',  '_route' => 'peticionAjax',);
            }

        }

        // glicitacion
        if (0 === strpos($pathinfo, '/dashboard/licitacion') && preg_match('#^/dashboard/licitacion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'glicitacion')), array (  '_controller' => 'App\\MediBundle\\Controller\\GlicitacionController::GlicitacionAction',));
        }

        // permiso
        if ($pathinfo === '/permiso') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\PermisoController::admPermisoAction',  '_route' => 'permiso',);
        }

        // busqueda
        if ($pathinfo === '/busqueda') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\BusquedaController::admBusquedaAction',  '_route' => 'busqueda',);
        }

        // estadoevento
        if ($pathinfo === '/estadoevento') {
            return array (  '_controller' => 'App\\MediBundle\\Controller\\EstadoAccionesController::admEstadoAccionesAction',  '_route' => 'estadoevento',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
