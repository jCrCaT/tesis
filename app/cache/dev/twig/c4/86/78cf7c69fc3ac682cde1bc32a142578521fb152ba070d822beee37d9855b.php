<?php

/* AppMediBundle:Default:horas.html.twig */
class __TwigTemplate_c48678cf7c69fc3ac682cde1bc32a142578521fb152ba070d822beee37d9855b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
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
    public function block_contenido($context, array $blocks = array())
    {
        // line 3
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mootools2.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/calendar.js"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/calendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
<script language=\"javascript\">
    

// The following should be put in your external js file,
// with the rest of your ondomready actions.
window.addEvent('domready', function(){

\t\$\$('.DatePicker').each( function(el){
\t\tnew DatePicker(el);
\t});

});



</script>
<script>
    \$(document).ready(function(){
        \$('.proyecto').change(function(){
            alert(\"hola\");
            var getTeamsUrl = Routing.generate('etapaProyecto');
            \$.ajax({
                    type: 'POST',
                    url: '";
        // line 31
        echo $this->env->getExtension('routing')->getPath("peticionAjax");
        echo "',
                    success: function(data){           
                        alert(data.name);
            }});
        });  
    });
</script>
<script lang=\"text/javascript\">
\$(document).ready(function(){
    \$(\".chosen-select\").chosen();
});
</script>
<script lang=\"text/javascript\">
\$(document).ready(function(){
    \$(\".handCloser\").click(function(){
        \$('.mensajeAlerta').fadeOut('slow');
        
    });
});
</script>
";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 52
            echo "        <div class=\"mensajeAlerta\">
        <img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/bien.png"), "html", null, true);
            echo "\" class=\"handCloser\">
        <div>Éxito!!</div>
        El registro ha sido almacenado!!
        <div class=\"infoAdic\">
        (Para ocultar esta ventana presionar el ticket verde)</div>
        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-clockpicker.min.css"), "html", null, true);
        echo "\">
<form action=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("horas");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
    <h4 class=\"tituloFormulario\">Agregar Hora de trabajo</h4>
            <ul class=\"nav nav-tabs botonesHoras\">
                    <li class=\"active\">
                        <a href=\"#proyectos\" data-toggle=\"tab\">Proyectos</a>
                    </li>
                    <li>
                        <a href=\"#licitaciones\" data-toggle=\"tab\">Licitación</a>
                    </li>
                </ul>
    <div class=\"tab-content\">
    <div id=\"proyectos\" class=\"addUbication tab-pane active\">
        <table>
            ";
        // line 74
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <tr>
                <td class=\"etiqueta\">Fecha de inicio</td>
                <td><input class=\"DatePicker\" name=\"fechaInicio\"></td> 
            </tr>
            <tr>
                <td class=\"etiqueta\">Fecha de término</td>
                <td><input class=\"DatePicker\" name=\"fechaTermino\"></td> 
            </tr>
            <tr>
                <td>";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "actividad"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "actividad"), 'widget', array("attr" => array("class" => "chosen-select largo-box")));
        echo "</td>
                <td>";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "actividad"), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proyecto"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proyecto"), 'widget', array("attr" => array("class" => "chosen-select largo-box proyecto")));
        echo "</td>
                <td>";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proyecto"), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td class=\"etiqueta\">Hora de inicio de actividad</td>
                <td>
                    <div id=\"reloj\" class=\"input-group clockpicker\" data-placement=\"left\" data-align=\"top\" data-autoclose=\"true\">
                        <input type=\"text\" class=\"form-control\" value=\"13:14\" name=\"horaInicio\">
                            <span class=\"input-group-addon\">
                                <span class=\"glyphicon glyphicon-time\"></span>
                            </span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class=\"etiqueta\">Hora de fin de actividad</td>
                <td>
                    <div id=\"reloj\" class=\"input-group clockpicker\" data-placement=\"left\" data-align=\"top\" data-autoclose=\"true\">
                        <input type=\"text\" class=\"form-control\" value=\"13:14\" name=\"horaTermino\">
                            <span class=\"input-group-addon\">
                                <span class=\"glyphicon glyphicon-time\"></span>
                            </span>
                    </div>
                </td>
            </tr>
            <tr class=\"filaFormulario\">
                <td><input type=\"submit\" class=\"btnAdd\" name=\"salvarHora\" value=\"Documentar hora\"></td>
                <td></td>
            </tr>
            ";
        // line 119
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </table>
    </div>
    <div id=\"licitaciones\" class=\"addUbication tab-pane\">
        <table>
            ";
        // line 124
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formLic"]) ? $context["formLic"] : $this->getContext($context, "formLic")), 'form_start');
        echo "
            <tr>
                <td class=\"etiqueta\">Fecha de inicio</td>
                <td><input class=\"DatePicker\" name=\"fechaLicInicio\"></td> 
            </tr>
            <tr>
                <td class=\"etiqueta\">Fecha de término</td>
                <td><input class=\"DatePicker\" name=\"fechaLicTermino\"></td> 
            </tr>
            <tr>
                <td>";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLic"]) ? $context["formLic"] : $this->getContext($context, "formLic")), "requerimiento"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLic"]) ? $context["formLic"] : $this->getContext($context, "formLic")), "requerimiento"), 'widget', array("attr" => array("class" => "largo-box chosen-select ")));
        echo "</td>
                <td>";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLic"]) ? $context["formLic"] : $this->getContext($context, "formLic")), "requerimiento"), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td class=\"etiqueta\">Hora de inicio de actividad</td>
                <td>
                    <div id=\"reloj\" class=\"input-group clockpicker\" data-placement=\"left\" data-align=\"top\" data-autoclose=\"true\">
                        <input type=\"text\" class=\"form-control\" value=\"13:14\" name=\"horaLicInicio\">
                            <span class=\"input-group-addon\">
                                <span class=\"glyphicon glyphicon-time\"></span>
                            </span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class=\"etiqueta\">Hora de fin de actividad</td>
                <td>
                    <div id=\"reloj\" class=\"input-group clockpicker\" data-placement=\"left\" data-align=\"top\" data-autoclose=\"true\">
                        <input type=\"text\" class=\"form-control\" value=\"13:14\" name=\"horaLicTermino\">
                            <span class=\"input-group-addon\">
                                <span class=\"glyphicon glyphicon-time\"></span>
                            </span>
                    </div>
                </td>
            </tr>
            <tr class=\"filaFormulario\">
                <td><input type=\"submit\" class=\"btnAdd\" name=\"salvarLicHora\" value=\"Documentar hora\"></td>
                <td></td>
            </tr>
            ";
        // line 164
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </table>
    </div>  
    </div>
</form>    
<div class=\"proyecto\">
<table class=\"listar\">
        <tr class=\"trHeader\">
            <td class=\"headerTable1\">Fecha de inicio de actividad</td>
            <td class=\"headerTable1\">Fecha de termino de actividad</td>
            <td class=\"headerTable1\">Hora de inicio de actividad</td>
            <td class=\"headerTable1\">Hora de termino de actividad</td>
            <td class=\"headerTable1\">Duración de actividad</td>
            <td class=\"headerTable1\"></td>            
        </tr>
        ";
        // line 179
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")));
        foreach ($context['_seq'] as $context["_key"] => $context["listar"]) {
            // line 180
            echo "        <form action=\"";
            echo $this->env->getExtension('routing')->getPath("horas");
            echo " \" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " novalidate>
        <tr class=\"trContent1\">    
            <td class=\"tabInfo\">";
            // line 182
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "fechaInicio"), "d-m-Y"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 183
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "fechaTermino"), "d-m-Y"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 184
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "fechaInicio"), "H:i "), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 185
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "fechaTermino"), "H:i "), "html", null, true);
            echo "</td> 
            <td class=\"tabInfo\">";
            // line 186
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "duracionActividad"), "%H:%i"), "html", null, true);
            echo " horas</td>
            <td class=\"tabInfo\"><input type=\"submit\" class=\"btnAdd btnEliminar\" name=\"eliminar\" value=\"eliminar\"></td>
            <td><input type=\"hidden\" name=\"valorEliminar\" value=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\"></td>
            <td><input type=\"hidden\" name=\"tabla\" value=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
            echo "\"></td>
        <tr/>    
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "    </table>
</div>
<script type=\"text/javascript\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-clockpicker.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\$('.clockpicker').clockpicker({
\tplacement: 'right',
\talign: 'left',
})
\t.find('input').change(function(){
\t\tconsole.log(this.value);
\t});
var input = \$('#single-input').clockpicker({
\tplacement: 'top',
\talign: 'left',
\tautoclose: true,
\t'default': 'now'
});

\$('.clockpicker-with-callbacks').clockpicker({
\t\tdonetext: 'Done',
\t\tinit: function() { 
\t\t\tconsole.log(\"colorpicker initiated\");
\t\t},
\t\tbeforeShow: function() {
\t\t\tconsole.log(\"before show\");
\t\t},
\t\tafterShow: function() {
\t\t\tconsole.log(\"after show\");
\t\t},
\t\tbeforeHide: function() {
\t\t\tconsole.log(\"before hide\");
\t\t},
\t\tafterHide: function() {
\t\t\tconsole.log(\"after hide\");
\t\t},
\t\tbeforeHourSelect: function() {
\t\t\tconsole.log(\"before hour selected\");
\t\t},
\t\tafterHourSelect: function() {
\t\t\tconsole.log(\"after hour selected\");
\t\t},
\t\tbeforeDone: function() {
\t\t\tconsole.log(\"before done\");
\t\t},
\t\tafterDone: function() {
\t\t\tconsole.log(\"after done\");
\t\t}
\t})
\t.find('input').change(function(){
\t\tconsole.log(this.value);
\t});

// Manually toggle to the minutes view
\$('#check-minutes').click(function(e){
\t// Have to stop propagation here
\te.stopPropagation();
\tinput.clockpicker('show')
\t\t\t.clockpicker('toggleView', 'minutes');
});
if (/mobile/i.test(navigator.userAgent)) {
\t\$('input').prop('readOnly', true);
}
</script>
";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:horas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 195,  332 => 193,  322 => 189,  318 => 188,  313 => 186,  309 => 185,  305 => 184,  301 => 183,  297 => 182,  289 => 180,  285 => 179,  267 => 164,  236 => 136,  232 => 135,  228 => 134,  215 => 124,  207 => 119,  176 => 91,  172 => 90,  168 => 89,  162 => 86,  158 => 85,  154 => 84,  141 => 74,  123 => 61,  118 => 60,  105 => 53,  102 => 52,  98 => 51,  75 => 31,  48 => 7,  44 => 6,  40 => 5,  36 => 4,  31 => 3,  28 => 2,);
    }
}
