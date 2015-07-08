<?php

/* AppMediBundle:Default:area.html.twig */
class __TwigTemplate_e8757df427cc7f01f8cea4fc53ed35d4d5b64a22de2f56684794bfbe5908d7f7 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("empresa");
        echo "\">Empresa</a></li>
                    <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("area");
        echo "\">Área</a></li>
                    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("proyecto");
        echo "\">Proyectos</a></li>
                    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("empresa");
        echo "\">Encargados</a></li>
                </ul>
            </nav>
";
    }

    // line 12
    public function block_contenido($context, array $blocks = array())
    {
        // line 13
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/modal.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$('.modificar').click(function(){
        var id = \$(this).data(\"identificador\");
        var nombre = \$(this).data(\"nombre\");
        var descripcion = \$(this).data(\"descripcion\");
        \$(\"#valorIdentificador\").val( id );
        document.getElementById(\"valorNombre\").innerHTML = nombre;
        document.getElementById(\"valorDescripcion\").innerHTML = descripcion;
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
<script language=\"javascript\">
    \$(document).ready(function(){ 
        \$('#agregaritem').on('click',function(e){
            e.preventDefault();
            \$( \"#formAdd\").slideToggle( \"slow\" );
        });
    });
</script>
<div class=\"agregarItem\" >
    <div>
    <h4>Crear nueva Área</h4>
    <a href=\"#\" id=\"agregaritem\" class=\"toggle linkMostrar\">Mostrar/Ocultar</a>
    <div id=\"formAdd\" style=\"display:none\">
    <div class=\"addUbication\">
        <table>
            <form action=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("area");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
            ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <tr>
                <td>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'widget');
        echo "</td>
                <td>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion"), 'widget');
        echo "</td>
                <td>";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion"), 'errors');
        echo "</td> 
            </tr>
            <tr class=\"filaFormulario\">
                <td><input type=\"submit\" name=\"salvarArea\" value=\"Salvar Área\" class=\"btnAdd\"></td>
                <td></td>
            </tr>
            ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </form>
        </table>
    </div>
    </div>
    </div>        
<section class=\"tabla\">    
    <div class=\"licitacion\">
    <table>
        <tr class=\"trHeader\">
            <td class=\"headerTable1\">Nombre de ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
        echo "</td>
            <td class=\"headerTable1\">Descripción de ";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
        echo "</td>
            <td class=\"headerTable1\"></td>
            <td class=\"headerTable1\"></td>           
        </tr>
        ";
        // line 82
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")));
        foreach ($context['_seq'] as $context["_key"] => $context["listar"]) {
            // line 83
            echo "        <form action=\"";
            echo $this->env->getExtension('routing')->getPath("area");
            echo " \" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " novalidate>
        <tr class=\"trContent1\">    
            <td class=\"tabInfo\" data-nombre=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "nombre"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "nombre"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\" data-descripcion=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "descripcion"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "descripcion"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\"><input type=\"submit\" name=\"eliminar\" value=\"eliminar\" class=\"btnAdd\"></td>
            <td class=\"tabInfo\"><input type=\"button\" value=\"modificar\" class=\"modificar btnAdd\" data-identificador=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\" data-nombre = \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "nombre"), "html", null, true);
            echo "\" data-descripcion = \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "descripcion"), "html", null, true);
            echo "\"></td>
            <td><input type=\"hidden\" name=\"valorEliminar\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\"></td>
            <td><input type=\"hidden\" name=\"inferior\" value=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "inferior"), "html", null, true);
            echo "\"></td>
            <td><input type=\"hidden\" name=\"tabla\" value=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
            echo "\"></td>
        </tr>    
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "    </table>
    </div>
</section>

<div id=\"popup\" style=\"display: none;\">
    <div class=\"content-popup2\">
        <h4 class=\"modalh4\">Usted modificará un Área</h4>
        <div class=\"close\"><a href=\"#\" id=\"close\"><img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
            <form action=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("area");
        echo " \" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formArea"]) ? $context["formArea"] : $this->getContext($context, "formArea")), 'enctype');
        echo " novalidate>
                <table>
                    ";
        // line 105
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formArea"]) ? $context["formArea"] : $this->getContext($context, "formArea")), 'form_start');
        echo "
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorNombre\"></div></td>
                        <td>";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArea"]) ? $context["formArea"] : $this->getContext($context, "formArea")), "nombre"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                        <td>";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArea"]) ? $context["formArea"] : $this->getContext($context, "formArea")), "nombre"), 'widget');
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArea"]) ? $context["formArea"] : $this->getContext($context, "formArea")), "nombre"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorDescripcion\"></div></td>
                        <td>";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArea"]) ? $context["formArea"] : $this->getContext($context, "formArea")), "descripcion"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                        <td>";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArea"]) ? $context["formArea"] : $this->getContext($context, "formArea")), "descripcion"), 'widget');
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArea"]) ? $context["formArea"] : $this->getContext($context, "formArea")), "descripcion"), 'errors');
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
        // line 131
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formArea"]) ? $context["formArea"] : $this->getContext($context, "formArea")), 'form_end');
        echo "
                </table>
           </form>
    </div>
</div>
";
    }

    // line 137
    public function block_horas($context, array $blocks = array())
    {
        // line 138
        echo "
";
        // line 139
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexHoras.html.twig", array("formHoras" => (isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras"))));
        // line 140
        echo "

";
        // line 142
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexReunion.html.twig", array("reuniones" => (isset($context["reuniones"]) ? $context["reuniones"] : $this->getContext($context, "reuniones"))));
        // line 143
        echo "

";
        // line 145
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexProyecto.html.twig", array("proyectos" => (isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto"))));
        // line 146
        echo "

";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:area.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 146,  314 => 145,  310 => 143,  308 => 142,  304 => 140,  302 => 139,  299 => 138,  296 => 137,  286 => 131,  274 => 122,  268 => 119,  264 => 118,  256 => 113,  250 => 110,  246 => 109,  239 => 105,  232 => 103,  228 => 102,  219 => 95,  209 => 91,  205 => 90,  201 => 89,  193 => 88,  186 => 86,  180 => 85,  172 => 83,  168 => 82,  161 => 78,  157 => 77,  144 => 67,  135 => 61,  131 => 60,  127 => 59,  121 => 56,  117 => 55,  113 => 54,  108 => 52,  102 => 51,  60 => 13,  57 => 12,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 3,  30 => 2,);
    }
}
