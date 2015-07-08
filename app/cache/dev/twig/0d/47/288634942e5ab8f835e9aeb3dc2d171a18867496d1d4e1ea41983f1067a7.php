<?php

/* ::base.html.twig */
class __TwigTemplate_0d47288634942e5ab8f835e9aeb3dc2d171a18867496d1d4e1ea41983f1067a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'contenido' => array($this, 'block_contenido'),
            'horas' => array($this, 'block_horas'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/dd.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">        
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/template.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/chosen.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">      
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/js2.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 16
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modal.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 18
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/mediaQuery.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/selectbox.js"), "html", null, true);
        echo "\"></script>
        
        <link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
        <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
    </head>
    <script type=\"text/javascript\">
    var id = \$(\"#myDropdown\").data('ddslick');


    </script>
    <div id=\"blackWindow\"></div>
    <nav class=\"navbar navbar-default container\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"search\"></span>
      </button>
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#menu-inicial\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      
    </div>
    <div id=\"fraseinicial\">
    <a class=\"navbar-brand\" href=\"#\">Cecilia Peschke Dagnino & Asociados</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
      </ul>
      <form class=\"navbar-form navbar-left\" role=\"search\" action=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("busqueda");
        echo "\" method=\"post\" novalidate>
        <div class=\"form-group\">
            ";
        // line 57
        echo "            <div id=\"contenedorBusqueda\">
                <input type=\"text\" name=\"txtBuscar\" id=\"inputBuscar\" placeholder=\"Buscar\">
                <div id=\"myDropdown\">
                <select id=\"demo-htmlselect\" selected=\"2\" value=\"tipo\" name=\"selectOption\">
                    <option value=\"1\" data-imagesrc=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/proyecto1.png"), "html", null, true);
        echo "\">Proyecto</option>
                    <option value=\"2\" data-imagesrc=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/licitacion.png"), "html", null, true);
        echo "\">Licitación</option>
                    <option value=\"3\" data-imagesrc=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/profesional.png"), "html", null, true);
        echo "\">Profesional</option>
                </select>
                </div>
                <input type=\"submit\" class=\"btnBuscar\" id=\"btnBuscar\" name=\"buscarContenido\" value=\"Buscar\">
                <input type=\"hidden\" id=\"tipoBuscar\" name=\"tipoBuscar\" value=\"\">
            </div>

        </div>
      </form>
          <div class=\"infoProfesional pull-right\">
        <div>";
        // line 73
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "getToken"), "getUser"), "getImagenPerfil") == null)) {
        } else {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("documentos/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "getToken", array(), "method"), "getUser", array(), "method"), "getImagenPerfil", array(), "method"), "getPath", array(), "method"), "html", null, true);
        }
        echo " \" class=\"img-circle\" /></div>
        <div>Bienvenido ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "getToken", array(), "method"), "getUser", array(), "method"), "getPnombre", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "getToken", array(), "method"), "getUser", array(), "method"), "getPapellido", array(), "method"), "html", null, true);
        echo "</div>        
    </div> 
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  <div>   
</div>
</nav>
    <body>
        <div class=\"container\">
        <section class=\"header col-xs-12 col-sm-12 col-md-2 col-lg-2\">
            <div id=\"menu-inicial\">
            <div id='cssmenu'>
                <ul>
                    <li class='active has-sub'><a href='";
        // line 87
        echo $this->env->getExtension('routing')->getPath("horas");
        echo "'><span>Horas</span></a>
                        <ul>
                            <li class='has-sub'><a href='";
        // line 89
        echo $this->env->getExtension('routing')->getPath("area");
        echo "'><span>Áreas</span></a>
                                <ul>
                                    <li><a href='";
        // line 91
        echo $this->env->getExtension('routing')->getPath("area");
        echo "'><span>Gestión de Áreas</span></a></li>
                                    <li class='last'><a href='";
        // line 92
        echo $this->env->getExtension('routing')->getPath("asignararea");
        echo "'><span>Asignación de Áreas</span></a></li>
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>Proyectos</span></a>
                                <ul>
                                    <li><a href='";
        // line 97
        echo $this->env->getExtension('routing')->getPath("proyecto");
        echo "'><span>Gestión de Proyectos</span></a></li>
                                    <li class='last'><a href='";
        // line 98
        echo $this->env->getExtension('routing')->getPath("asignarproyecto");
        echo "'><span>Asignación de Proyectos</span></a></li>
                                </ul>
                            <li><a href='";
        // line 100
        echo $this->env->getExtension('routing')->getPath("actividad");
        echo "'><span>Gestión de actividades</span></a></li>
                            </li>
                        </ul>
                    </li>
                    <li class='active has-sub'><a href='";
        // line 104
        echo $this->env->getExtension('routing')->getPath("usuario");
        echo "'><span>Profesionales</span></a>
                        <ul>
                            <li><a href='";
        // line 106
        echo $this->env->getExtension('routing')->getPath("usuario");
        echo "'><span>Gestión de profesionales</span></a></li>
                            <li><a href='";
        // line 107
        echo $this->env->getExtension('routing')->getPath("estudio");
        echo "'><span>Gestión de estudios</span></a></li>
                            <li><a href='";
        // line 108
        echo $this->env->getExtension('routing')->getPath("estudio");
        echo "'><span>Gestión de experiencia laboral</span></a></li>
                            <li><a href='";
        // line 109
        echo $this->env->getExtension('routing')->getPath("rango");
        echo "'><span>Gestión de Rangos</span></a></li>
                            
                        </ul>
                    </li>
                    <li><a href='";
        // line 113
        echo $this->env->getExtension('routing')->getPath("empresa");
        echo "'><span>Empresas</span></a></li>
                    <li><a href='";
        // line 114
        echo $this->env->getExtension('routing')->getPath("area");
        echo "'><span>Áreas</span></a></li>
                    <li><a href='";
        // line 115
        echo $this->env->getExtension('routing')->getPath("licitacion");
        echo "'><span>Licitaciones</span>";
        echo "</a></li>
                    <li><a href='";
        // line 116
        echo $this->env->getExtension('routing')->getPath("proyecto");
        echo "'><span>Proyectos</span></a></li>
                    <li><a href='";
        // line 117
        echo $this->env->getExtension('routing')->getPath("reunion");
        echo "'><span>Reuniones</span></a></li>
                    <li><a href='";
        // line 118
        echo $this->env->getExtension('routing')->getPath("cliente");
        echo "'><span>Clientes</span></a></li>
                    <li><a href='";
        // line 119
        echo $this->env->getExtension('routing')->getPath("actividad");
        echo "'><span>Actividades</span></a></li>
                    ";
        // line 120
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 121
            echo "                    <li><a href='";
            echo $this->env->getExtension('routing')->getPath("pais");
            echo "'><span>País</span></a></li>
                    <li><a href='";
            // line 122
            echo $this->env->getExtension('routing')->getPath("region");
            echo "'><span>Región</span></a></li>
                    <li><a href='";
            // line 123
            echo $this->env->getExtension('routing')->getPath("ciudad");
            echo "'><span>Ciudad</span></a></li>
                    <li><a href='";
            // line 124
            echo $this->env->getExtension('routing')->getPath("comuna");
            echo "'><span>Comuna</span></a></li>
                    ";
        }
        // line 126
        echo "                </ul>
            </div>
        </div>
        </section>
        ";
        // line 130
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "gproyecto") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "glicitacion"))) {
            // line 131
            echo "            <section class=\"main col-xs-12 col-sm-12 col-md-9 col-lg-10\">
        ";
        } else {
            // line 133
            echo "            <section class=\"main col-xs-12 col-sm-12 col-md-7 col-lg-7\">
        ";
        }
        // line 134
        echo "    
            ";
        // line 135
        $this->displayBlock('contenido', $context, $blocks);
        echo " 
        </section> 
        ";
        // line 137
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "grafico")) {
            echo "      
        ";
        } else {
            // line 139
            echo "        <section class=\"right col-xs-12 col-sm-12 col-md-3 col-lg-3\">     
            ";
            // line 140
            $this->displayBlock('horas', $context, $blocks);
            // line 141
            echo "        </section> 
        ";
        }
        // line 142
        echo "        
            </div>
    </body>
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/chosen.proto.js"), "html", null, true);
        echo "\"></script>
     <script>
    \$(\"#myDropdown\").ddslick({
        selectText: \"Select your favorite social network\",
        onSelected: function(selectedData){
            var ddData = \$('#myDropdown').data('ddslick');
            \$(\"#tipoBuscar\").val( ddData.selectedIndex );

            
        }
        });
    </script>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "CPD & Asociados";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 135
    public function block_contenido($context, array $blocks = array())
    {
    }

    // line 140
    public function block_horas($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 140,  359 => 135,  354 => 7,  348 => 6,  330 => 146,  326 => 145,  321 => 142,  317 => 141,  315 => 140,  312 => 139,  307 => 137,  302 => 135,  299 => 134,  295 => 133,  291 => 131,  289 => 130,  283 => 126,  278 => 124,  274 => 123,  270 => 122,  265 => 121,  263 => 120,  259 => 119,  255 => 118,  251 => 117,  247 => 116,  242 => 115,  238 => 114,  234 => 113,  227 => 109,  223 => 108,  219 => 107,  215 => 106,  210 => 104,  203 => 100,  198 => 98,  194 => 97,  186 => 92,  182 => 91,  177 => 89,  172 => 87,  154 => 74,  145 => 73,  132 => 63,  128 => 62,  124 => 61,  118 => 57,  113 => 54,  76 => 20,  72 => 19,  67 => 18,  62 => 16,  58 => 14,  54 => 13,  50 => 12,  46 => 11,  41 => 9,  36 => 8,  34 => 7,  30 => 6,  23 => 1,);
    }
}
