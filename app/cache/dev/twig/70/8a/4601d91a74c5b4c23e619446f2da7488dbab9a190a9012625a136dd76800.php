<?php

/* AppMediBundle:Default:login.html.twig */
class __TwigTemplate_708a4601d91a74c5b4c23e619446f2da7488dbab9a190a9012625a136dd76800 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"> 
    <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\"> 
    <script src=\"http://code.jquery.com/jquery-1.11.0.min.js\"></script>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/beaverslider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/beaverslider-effects.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/template.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
</head>
";
        // line 10
        $this->displayBlock('contenido', $context, $blocks);
    }

    public function block_contenido($context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 13
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 15
        echo " <html>
     <body class=\"white\" >
        <div id=\"imagenPortada\">
         <div class=\"formularioInicio\">
            <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
                <div class=\"tituloInicioSesion\">Iniciar Sesión</div>
                <table class=\"cuadroLogin\">
                    <tr class=\"fila\">
                        <td>
                            <div class=\"divInput\">
                                <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/usuario.png"), "html", null, true);
        echo "\">
                                <input class=\"loginInput\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Usuario\" />                                
                            </div>
                        </td>
                    </tr>
                    <tr class=\"fila\">
                        <td>
                            <div class=\"divInput outLineTop\">
                                <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/password.png"), "html", null, true);
        echo "\">
                                <input class=\"loginInput\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Contraseña\"/>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"fila\">
                        <td><button class=\"btnLogin\" type=\"submit\">Ingresar</button></td>
                    </tr>
                    <tr class=\"fila lastFila\">
                        <td><a class=\"recPass\">Recuperar contraseña</a></td>
                    </tr>
                </table>
        <input type=\"hidden\" name=\"_target_path\" value=\"/inicio\" />
     
            </form>
         </div>
         <div class=\"formularioDescripcion\">
            <div id=\"btnPaginaInicio\">ThinkProject</div>
            <div id=\"DescripcionPagina\">ThinkProject se caracteriza por ser una plataforma que le permite:</div>
            <div>
                <ul>
                    <li><img class=\"descripcionImg\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/proyecto2.png"), "html", null, true);
        echo "\"><div>Administrar sus proyectos de manera fácil e intuitiva.</div></li>
                    <li><img class=\"descripcionImg\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/carrera.png"), "html", null, true);
        echo "\"><div>Administrar en la participación de sus licitaciones.</div></li>
                    <li><img class=\"descripcionImg\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/tiempo.png"), "html", null, true);
        echo "\"><div>Administrar la carga horaria de cada uno de sus profesionales.</div></li>
                    <li><img class=\"descripcionImg\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/cmmi.png"), "html", null, true);
        echo "\"><div>Administrar sus estrategias a través de un panel de control</div></li>
                </ul>
            </div>
                 
        </div>
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 57,  118 => 56,  114 => 55,  110 => 54,  86 => 33,  76 => 26,  72 => 25,  63 => 19,  57 => 15,  51 => 13,  49 => 12,  46 => 11,  40 => 10,  34 => 7,  30 => 6,  26 => 5,  20 => 1,);
    }
}
