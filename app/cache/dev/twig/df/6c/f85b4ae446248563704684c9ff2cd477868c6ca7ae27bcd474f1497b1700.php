<?php

/* AppMediBundle:Default:minuta.html.twig */
class __TwigTemplate_df6cf85b4ae446248563704684c9ff2cd477868c6ca7ae27bcd474f1497b1700 extends Twig_Template
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
        echo "    <script language=\"javascript\">
    \$(document).ready(function(){ 
        \$('#agregaritem').on('click',function(e){
            e.preventDefault();
            \$( \"#formAdd\").slideToggle( \"slow\" );
        });
    });
</script>
<div class=\"agregarItem\">
    <div>
    <h4>Agregar Minuta a reunión</h4>
    <a href=\"#\" id=\"agregaritem\" class=\"toggle linkMostrar\">Mostrar/Ocultar</a>
    <div id=\"formAdd\" style=\"display:none\">
    <div class=\"addUbication\">
        <table>
            <form action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("minuta", array("key" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "key"), "method"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <tr class=\"filaFormulario\">
                <td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion"), 'widget', array("value" => $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "descripcion")));
        echo "</td>
                <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion"), 'errors');
        echo "</td> 
            </tr>
            <tr class=\"filaFormulario\">
                <td>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profesional"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profesional"), 'widget');
        echo "</td>
                <td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profesional"), 'errors');
        echo "</td> 
            </tr>
            ";
        // line 40
        if (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "crear")) {
            // line 41
            echo "            <tr class=\"filaFormulario\">
                <td><input type=\"submit\" name=\"salvarMinuta\" value=\"salvarMinuta\"></td>
                <td><input type=\"hidden\" name=\"idReunion\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\"></td>
                <td></td>
            </tr>
            ";
        } else {
            // line 47
            echo "            <tr class=\"filaFormulario\">
                <td><input type=\"submit\" name=\"modificarPais\" value=\"Modificar País\"></td>
                <td><input type=\"hidden\" name=\"valorModificar\" value=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "id"), "html", null, true);
            echo "\"></td>
                <td></td>
            </tr>
            ";
        }
        // line 53
        echo "            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </form>
        </table>
    </div> 
    </div>
    </div>
    </div>   
<section class=\"conjuntoMinuta\">
    <div>
        <h4>Puntos tratados en reunión con cliente \"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "cliente"), "nombre"), "html", null, true);
        echo "\" realizada en la fecha \"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "fechaInicio"), "d-m-Y"), "html", null, true);
        echo "\"\" a las \"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "fechaInicio"), "H:i"), "html", null, true);
        echo "\"</h4>
        
    </div>
    <div class=\"licitacion\">
    <table class=\"listar\">
        <tr class=\"trHeader1\">
            
            <td class=\"headerTable\">Identificador de minuta</td>
            <td class=\"headerTable\">Fecha de minuta</td>
            <td class=\"headerTable\">Encargado de minuta</td>
            <td class=\"headerTable\">Descripcion de minuta</td>
            <td class=\"headerTable\">Fecha de acuerdo</td>
            <td class=\"headerTable\">Hora de acuerdo</td>
            <td class=\"headerTable\"></td>
            <td class=\"headerTable\"></td>            
            
        </tr>
        ";
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["minutas"]) ? $context["minutas"] : $this->getContext($context, "minutas")));
        foreach ($context['_seq'] as $context["_key"] => $context["minutas"]) {
            // line 80
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("minuta", array("key" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "key"), "method"))), "html", null, true);
            echo " \" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " novalidate>
        <tr class=\"trContent1\">    
            <td class=\"tabInfo\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["minutas"]) ? $context["minutas"] : $this->getContext($context, "minutas")), "id"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\"></td>
            <td class=\"tabInfo\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["minutas"]) ? $context["minutas"] : $this->getContext($context, "minutas")), "profesional"), "pnombre"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["minutas"]) ? $context["minutas"] : $this->getContext($context, "minutas")), "profesional"), "snombre"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["minutas"]) ? $context["minutas"] : $this->getContext($context, "minutas")), "descripcion"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\"><input type=\"submit\" name=\"eliminar\" value=\"eliminar\"></td>
            <td class=\"tabInfo\"><input type=\"submit\" name=\"modificar\" value=\"modificar\"></td>
            <td><input type=\"hidden\" name=\"valorEliminar\" value=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["minutas"]) ? $context["minutas"] : $this->getContext($context, "minutas")), "id"), "html", null, true);
            echo "\"></td>
        </tr>    
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['minutas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "    </table>
    </div>
</section>   
";
    }

    // line 96
    public function block_horas($context, array $blocks = array())
    {
        // line 97
        echo "
";
        // line 98
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexHoras.html.twig", array("formHoras" => (isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras")), "formHorasLic" => (isset($context["formHorasLic"]) ? $context["formHorasLic"] : $this->getContext($context, "formHorasLic"))));
        // line 100
        echo "

";
        // line 102
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexReunion.html.twig", array("reuniones" => (isset($context["reuniones"]) ? $context["reuniones"] : $this->getContext($context, "reuniones"))));
        // line 103
        echo "

";
        // line 105
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexProyecto.html.twig", array("proyectos" => (isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto"))));
        // line 106
        echo "

";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:minuta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 106,  240 => 105,  236 => 103,  234 => 102,  230 => 100,  228 => 98,  225 => 97,  222 => 96,  215 => 92,  205 => 88,  199 => 85,  193 => 84,  188 => 82,  180 => 80,  176 => 79,  152 => 62,  139 => 53,  132 => 49,  128 => 47,  121 => 43,  117 => 41,  115 => 40,  110 => 38,  106 => 37,  102 => 36,  96 => 33,  92 => 32,  88 => 31,  83 => 29,  77 => 28,  60 => 13,  57 => 12,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 3,  30 => 2,);
    }
}
