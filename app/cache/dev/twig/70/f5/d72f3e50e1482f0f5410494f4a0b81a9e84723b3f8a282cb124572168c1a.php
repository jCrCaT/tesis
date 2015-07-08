<?php

/* AppMediBundle:Default:ciudad.html.twig */
class __TwigTemplate_70f5d72f3e50e1482f0f5410494f4a0b81a9e84723b3f8a282cb124572168c1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'submenu' => array($this, 'block_submenu'),
            'contenido' => array($this, 'block_contenido'),
            'horas' => array($this, 'block_horas'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_submenu($context, array $blocks = array())
    {
        // line 3
        echo "            <nav class=\"submenu\">
                <ul>
                    <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("pais");
        echo "\">País</a></li>
                    <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("region");
        echo "\">Región</a></li>
                    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("ciudad");
        echo "\">Ciudad</a></li>
                    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("comuna");
        echo "\">Comuna</a></li>
                </ul>
            </nav>
";
    }

    // line 12
    public function block_contenido($context, array $blocks = array())
    {
        // line 13
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/chosen.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">  
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/modal.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$('.modificarCiudad').click(function(){
        var id = \$(this).data(\"identificador\");
        var nombre = \$(this).data(\"nombre\");
        var superior = \$(this).data(\"superior\");
        \$(\"#valorIdentificador\").val( id );
        document.getElementById(\"valorNombre\").innerHTML = nombre;
        document.getElementById(\"valorSuperior\").innerHTML = superior;
        \$('#popup').fadeIn('slow');
        \$('.popup-overlay').fadeIn('slow');
        \$('.popup-overlay').height(\$(window).height());
        return false;
    });
    
    \$('#close').click(function(){
        \$('#popup').fadeOut('slow');
        \$('.popup-overlay').fadeOut('slow');
        return false;
    });
});
</script>
<script lang=\"text/javascript\">
    \$(document).ready(function(){
    \$(\".chosen-select\").chosen();
});
</script>
<form action=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("ciudad");
        echo "\" class=\"example\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
    ";
        // line 43
        if (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "crear")) {
            // line 44
            echo "    <h4>Agregar Ciudad</h4>
    ";
        } else {
            // line 46
            echo "    <h4>Usted modificará la Ciudad <font class=\"red\">\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "nombre"), "html", null, true);
            echo "\"</font> </h4>
    ";
        }
        // line 48
        echo "    <div class=\"addUbication\">
        <table>
            ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <tr class=\"filaFormulario\">
                <td>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'widget', array("value" => $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "nombre")));
        echo "</td>
            </tr>
            <tr>
                <td></td>
                <td>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'errors');
        echo "</td>                
            </tr>
            <tr class=\"filaFormulario\">
                <td>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "superior"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "superior"), 'widget', array("attr" => array("class" => "chosen-select")));
        echo "</td>
            </tr>
            <tr class=\"filaFormulario\">
                <td><input type=\"submit\" name=\"salvarCiudad\" value=\"Salvar Región\"></td>
                <td></td>
            </tr>
        </table>
    </div>    
</form>    
<section class=\"tabla\"> 
    <h4>Listado de ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "listado"), "html", null, true);
        echo "</h4>
<table class=\"listar\">
        <tr>
            
            <td class=\"tabSup\">Identificador de ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
        echo "</td>
            <td class=\"tabSup\">Nombre de ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
        echo "</td>
            <td class=\"tabSup\">Región a la que pertenece</td>
            <td class=\"tabSup\"></td>
            <td class=\"tabSup\"></td>
            
        </tr>
        ";
        // line 82
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")));
        foreach ($context['_seq'] as $context["_key"] => $context["listar"]) {
            // line 83
            echo "        <form action=\"";
            echo $this->env->getExtension('routing')->getPath("ciudad");
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " novalidate>
        <tr>    
            <td class=\"tabInfo\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "nombre"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "superior"), "nombre"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\"><input type=\"submit\" name=\"modificar\" value=\"eliminar\"></td>
            <td class=\"tabInfo\"><input type=\"button\" class=\"modificarCiudad\" value=\"modificar\" data-identificador=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\" data-nombre=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "nombre"), "html", null, true);
            echo "\" data-superior=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "superior"), "nombre"), "html", null, true);
            echo "\"></td>
            <td><input type=\"hidden\" name=\"valorEliminar\" value=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\"></td>
            <td><input type=\"hidden\" name=\"inferior\" value=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "inferior"), "html", null, true);
            echo "\"></td>
            <td><input type=\"hidden\" name=\"tabla\" value=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
            echo "\"></td>
        <tr/>    
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "    </table>
</section>
<div id=\"popup\" class=\"formulario\" style=\"display: none;\">
    <div class=\"content-popup2\">
        <h4 class=\"modalh4\">Usted modificará un País</h4>
        <div class=\"close\"><a href=\"#\" id=\"close\"><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
            <form action=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("ciudad");
        echo " \" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formCiudad"]) ? $context["formCiudad"] : $this->getContext($context, "formCiudad")), 'enctype');
        echo " novalidate>
                <table>
                    ";
        // line 104
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCiudad"]) ? $context["formCiudad"] : $this->getContext($context, "formCiudad")), 'form_start');
        echo "
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorNombre\"></div></td>
                        <td>";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCiudad"]) ? $context["formCiudad"] : $this->getContext($context, "formCiudad")), "nombre"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                        <td>";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCiudad"]) ? $context["formCiudad"] : $this->getContext($context, "formCiudad")), "nombre"), 'widget');
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCiudad"]) ? $context["formCiudad"] : $this->getContext($context, "formCiudad")), "nombre"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorSuperior\"></div></td>
                        <td>";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCiudad"]) ? $context["formCiudad"] : $this->getContext($context, "formCiudad")), "superior"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                        <td>";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCiudad"]) ? $context["formCiudad"] : $this->getContext($context, "formCiudad")), "superior"), 'widget', array("attr" => array("class" => "chosen-select")));
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCiudad"]) ? $context["formCiudad"] : $this->getContext($context, "formCiudad")), "superior"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td><input type=\"submit\" name=\"guardarCambios\" value=\"guardarCambios\"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><input type=\"text\" name=\"valorIdentificador\" id=\"valorIdentificador\" value=\"\"></td>
                    </tr>
                    ";
        // line 130
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCiudad"]) ? $context["formCiudad"] : $this->getContext($context, "formCiudad")), 'form_end');
        echo "
                </table>
           </form>
    </div>
</div>
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/chosen.proto.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 138
    public function block_horas($context, array $blocks = array())
    {
        // line 139
        echo "
";
        // line 140
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexHoras.html.twig", array("formHoras" => (isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras"))));
        // line 141
        echo "

";
        // line 143
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexReunion.html.twig", array("reuniones" => (isset($context["reuniones"]) ? $context["reuniones"] : $this->getContext($context, "reuniones"))));
        // line 144
        echo "

";
        // line 146
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexProyecto.html.twig", array("proyectos" => (isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto"))));
        // line 147
        echo "

";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:ciudad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 147,  329 => 146,  325 => 144,  323 => 143,  319 => 141,  317 => 140,  314 => 139,  311 => 138,  305 => 136,  301 => 135,  293 => 130,  281 => 121,  275 => 118,  271 => 117,  263 => 112,  257 => 109,  253 => 108,  246 => 104,  239 => 102,  235 => 101,  228 => 96,  218 => 92,  214 => 91,  210 => 90,  202 => 89,  197 => 87,  193 => 86,  189 => 85,  181 => 83,  177 => 82,  168 => 76,  164 => 75,  157 => 71,  144 => 61,  140 => 60,  134 => 57,  127 => 53,  123 => 52,  118 => 50,  114 => 48,  108 => 46,  104 => 44,  102 => 43,  96 => 42,  65 => 14,  60 => 13,  57 => 12,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 3,  30 => 2,);
    }
}
