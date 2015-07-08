<?php

/* AppMediBundle:Default:IndexHoras.html.twig */
class __TwigTemplate_63b5767b60211ee3fadf65f5e9e052020064c7002f7ad9c983947b27fb6b4153 extends Twig_Template
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
<script lang=\"text/javascript\">
\$(document).ready(function(){
    \$(\".chosen-select\").chosen();
});
</script>
    <h4 class=\"important\">Agregar Hora de trabajo<a id=\"hand\" class=\"hand\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/hand.png"), "html", null, true);
        echo "\"/></a></h4>
    <ul class=\"botones nav nav-tabs\">
            <li><a href=\"#proyecto\" data-toggle=\"tab\">Proyectos</a></li>  
            <li><a href=\"#licitacion\" data-toggle=\"tab\">Licitación</a></li> 
        </ul>
        <div class=\"tab-content\">
    <div id=\"proyecto\" class=\"formularioTop tab-pane active\">
        <form class=\"formRight\" action=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("horas");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras")), 'enctype');
        echo " novalidate>
        <table class=\"horasIndex\">
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras")), 'form_start');
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
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras")), "actividad"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras")), "actividad"), 'widget', array("attr" => array("class" => "chosen-select largo-box")));
        echo "</td>
                <td>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras")), "actividad"), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras")), "proyecto"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras")), "proyecto"), 'widget', array("attr" => array("class" => "chosen-select largo-box")));
        echo "</td>
                <td>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras")), "proyecto"), 'errors');
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
                <td><input type=\"submit\" name=\"salvarHora\" class=\"btnAdd\" value=\"Documentar hora\"></td>
                <td></td>
            </tr>
            ";
        // line 80
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras")), 'form_end');
        echo "
        </table>
        </form>
    </div>
    <div id=\"licitacion\" class=\"tab-pane\">
        <form class=\"formRight\" action=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("horas");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formHorasLic"]) ? $context["formHorasLic"] : $this->getContext($context, "formHorasLic")), 'enctype');
        echo " novalidate>
        <table class=\"horasIndex\">
            ";
        // line 87
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formHorasLic"]) ? $context["formHorasLic"] : $this->getContext($context, "formHorasLic")), 'form_start');
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
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHorasLic"]) ? $context["formHorasLic"] : $this->getContext($context, "formHorasLic")), "requerimiento"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHorasLic"]) ? $context["formHorasLic"] : $this->getContext($context, "formHorasLic")), "requerimiento"), 'widget', array("attr" => array("class" => "chosen-select largo-box")));
        echo "</td>
                <td>";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHorasLic"]) ? $context["formHorasLic"] : $this->getContext($context, "formHorasLic")), "requerimiento"), 'errors');
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
                <td><input type=\"submit\" name=\"salvarHora\" class=\"btnAdd\" value=\"Documentar hora\"></td>
                <td></td>
            </tr>
            ";
        // line 127
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formHorasLic"]) ? $context["formHorasLic"] : $this->getContext($context, "formHorasLic")), 'form_end');
        echo "
        </table>
        </form>
    </div>
    </div>    
<script type=\"text/javascript\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-clockpicker.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\$('.clockpicker').clockpicker({
\tplacement: 'left',
\talign: 'left',
        autoclose: true,
\t'default': 'now'
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
</script>";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:IndexHoras.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 132,  207 => 127,  176 => 99,  155 => 87,  148 => 85,  140 => 80,  109 => 52,  101 => 50,  95 => 47,  91 => 46,  74 => 35,  67 => 33,  57 => 26,  28 => 3,  24 => 2,  19 => 1,  455 => 264,  453 => 263,  450 => 262,  447 => 261,  441 => 257,  435 => 256,  433 => 255,  422 => 247,  413 => 241,  391 => 222,  386 => 221,  381 => 220,  379 => 219,  298 => 141,  289 => 139,  287 => 138,  276 => 130,  269 => 126,  262 => 122,  255 => 118,  247 => 113,  238 => 107,  233 => 105,  226 => 103,  222 => 101,  218 => 100,  216 => 99,  210 => 95,  208 => 93,  200 => 87,  191 => 84,  187 => 83,  183 => 82,  179 => 81,  175 => 80,  172 => 98,  168 => 97,  162 => 74,  153 => 71,  149 => 70,  145 => 69,  141 => 68,  137 => 67,  134 => 66,  130 => 65,  115 => 53,  111 => 51,  105 => 51,  103 => 49,  98 => 47,  92 => 45,  87 => 45,  85 => 43,  45 => 6,  41 => 5,  37 => 4,  32 => 4,  29 => 2,);
    }
}
