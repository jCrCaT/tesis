<?php

/* AppMediBundle:Default:IndexPerfil.html.twig */
class __TwigTemplate_d8727f4a49265a9ff865c5dcdee4cfc530688133fc454542563d220368e20dc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-clockpicker.min.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mootools2.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/calendar.js"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/calendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
<script language=\"javascript\">
    

// The following should be put in your external js file,
// with the rest of your ondomready actions.
window.addEvent('domready', function(){

\t\$\$('.DatePicker').each( function(el){
\t\tnew DatePicker(el);
\t});

});



</script>
<div>
    <div class=\"perfil\">
        <div class=\"perfilBienvenida\">Bienvenido ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "getToken", array(), "method"), "getUser", array(), "method"), "getPnombre", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "getToken", array(), "method"), "getUser", array(), "method"), "getPapellido", array(), "method"), "html", null, true);
        echo "</div>
        <div>";
        // line 24
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "getToken"), "getUser"), "getImagenPerfil") == null)) {
        } else {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("documentos/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "getToken", array(), "method"), "getUser", array(), "method"), "getImagenPerfil", array(), "method"), "getPath", array(), "method"), "html", null, true);
        }
        echo " \" class=\"img-circle\" /></div>
        <table class=\"infoPerfil\">
            <tr>
                <td>Valor UF:</td>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["uf"]) ? $context["uf"] : $this->getContext($context, "uf")), "html", null, true);
        echo " (pesos chilenos)</td>                
            </tr>
            <tr>
                <td>Valor Dolar:</td>
                <td>\$500 (pesos chilenos)</td>                
            </tr>
            <tr>
                <td><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/config.png"), "html", null, true);
        echo "\"><a href=\"#\">Configuración</a></td>
                <td></td>
            </tr>
            <tr>
                <td><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/exit2.png"), "html", null, true);
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Cerrar Sesión</a></td>
                <td></td>
            </tr>
        </table>
        
    </div>    
</div>";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:IndexPerfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 39,  82 => 35,  72 => 28,  60 => 24,  54 => 23,  215 => 132,  207 => 127,  176 => 99,  155 => 87,  148 => 85,  140 => 80,  109 => 52,  101 => 50,  95 => 47,  91 => 46,  74 => 35,  67 => 33,  57 => 26,  28 => 3,  24 => 2,  19 => 1,  455 => 264,  453 => 263,  450 => 262,  447 => 261,  441 => 257,  435 => 256,  433 => 255,  422 => 247,  413 => 241,  391 => 222,  386 => 221,  381 => 220,  379 => 219,  298 => 141,  289 => 139,  287 => 138,  276 => 130,  269 => 126,  262 => 122,  255 => 118,  247 => 113,  238 => 107,  233 => 105,  226 => 103,  222 => 101,  218 => 100,  216 => 99,  210 => 95,  208 => 93,  200 => 87,  191 => 84,  187 => 83,  183 => 82,  179 => 81,  175 => 80,  172 => 98,  168 => 97,  162 => 74,  153 => 71,  149 => 70,  145 => 69,  141 => 68,  137 => 67,  134 => 66,  130 => 65,  115 => 53,  111 => 51,  105 => 51,  103 => 49,  98 => 47,  92 => 45,  87 => 45,  85 => 43,  45 => 6,  41 => 5,  37 => 4,  32 => 4,  29 => 2,);
    }
}
