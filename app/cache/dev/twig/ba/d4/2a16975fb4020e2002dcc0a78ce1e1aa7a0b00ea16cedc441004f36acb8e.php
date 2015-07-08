<?php

/* AppMediBundle:Default:filtro.html.twig */
class __TwigTemplate_bad42a16975fb4020e2002dcc0a78ce1e1aa7a0b00ea16cedc441004f36acb8e extends Twig_Template
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mootools2.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/calendar.js"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 15
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
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-clockpicker.min.css"), "html", null, true);
        echo "\">
<ul class=\"nav nav-tabs\">
  <li class=\"active\">
    <a href=\"#Proyecto\" data-toggle=\"tab\">Proyecto</a>
  </li>
  <li>
      <a href=\"#ProyectoTiempo\" data-toggle=\"tab\">Proyecto/Tiempo</a>
  </li>
    <li>
      <a href=\"#ProyectoProfesional\" data-toggle=\"tab\">Proyecto/Profesional</a>
  </li>
    <li>
      <a href=\"#Profesional\" data-toggle=\"tab\">Profesional</a>
  </li>
</ul>
 <div class=\"tab-content\">
   <div id=\"Proyecto\" class=\"tab-pane active\">
     <form action=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("filtro");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
";
        // line 50
        if (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "crear")) {
            // line 51
            echo "    <h4>Filtrar información</h4>
    ";
        } else {
            // line 53
            echo "    <h4>Usted modificará la Ciudad <font class=\"red\">\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "nombre"), "html", null, true);
            echo "\"</font> </h4>
    ";
        }
        // line 55
        echo "    <div class=\"addUbication\">
        <table>
            ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <tr class=\"filaFormulario\">
                <td>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreProyecto"), 'label', array("label_attr" => array("class" => "etiqueta", "id" => "proyecto")));
        echo "</td>
                <td>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreProyecto"), 'widget');
        echo "</td>
            </tr>
            ";
        // line 62
        if (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "crear")) {
            // line 63
            echo "            <tr class=\"filaFormulario\">
                <td><input type=\"submit\" name=\"filtrarProyectoTiempo\" value=\"Filtrar\"></td>
                <td></td>
            </tr>
            ";
        }
        // line 68
        echo "        </table>
    </div>    
</form> 
   </div>
   <div id=\"ProyectoTiempo\" class=\"tab-pane\">
     <form action=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("filtro");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'enctype');
        echo " novalidate>
";
        // line 74
        if (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "crear")) {
            // line 75
            echo "    <h4>Filtrar información</h4>
    ";
        } else {
            // line 77
            echo "    <h4>Usted modificará la Ciudad <font class=\"red\">\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "nombre"), "html", null, true);
            echo "\"</font> </h4>
    ";
        }
        // line 79
        echo "    <div class=\"addUbication\">
        <table>
            ";
        // line 81
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'form_start');
        echo "
            <tr class=\"filaFormulario\">
                <td>";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "nombreProyecto1"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "nombreProyecto1"), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td class=\"etiqueta\">Fecha de inicio</td>
                <td><input class=\"DatePicker\" name=\"fechaInicio\"></td> 
            </tr>
            <tr>
                <td class=\"etiqueta\">Fecha de término</td>
                <td><input class=\"DatePicker\" name=\"fechaTermino\"></td> 
            </tr>
            <tr>
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
            ";
        // line 117
        if (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "crear")) {
            // line 118
            echo "            <tr class=\"filaFormulario\">
                <td><input type=\"submit\" name=\"filtrarProyectoTiempo\" value=\"Filtrar\"></td>
                <td></td>
            </tr>
            ";
        }
        // line 123
        echo "        </table>
    </div>    
</form> 
   </div>
     <div id=\"ProyectoProfesional\" class=\"tab-pane\">
     <form action=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("filtro");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'enctype');
        echo " novalidate>
";
        // line 129
        if (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "crear")) {
            // line 130
            echo "    <h4>Filtrar información</h4>
    ";
        } else {
            // line 132
            echo "    <h4>Usted modificará la Ciudad <font class=\"red\">\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "nombre"), "html", null, true);
            echo "\"</font> </h4>
    ";
        }
        // line 134
        echo "    <div class=\"addUbication\">
        <table>
            ";
        // line 136
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <tr class=\"filaFormulario\">
                <td>";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "nombreProyecto2"), 'label', array("label_attr" => array("class" => "etiqueta", "id" => "proyecto")));
        echo "</td>
                <td>";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "nombreProyecto2"), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "username"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "username"), 'widget');
        echo "</td>
            </tr>
            ";
        // line 145
        if (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "crear")) {
            // line 146
            echo "            <tr class=\"filaFormulario\">
                <td><input type=\"submit\" name=\"filtrarProyecto\" value=\"Filtrar\"></td>
                <td></td>
            </tr>
            ";
        }
        // line 151
        echo "        </table>
    </div>    
</form> 
   </div>
     <div id=\"Profesional\" class=\"tab-pane\">
     <form action=\"";
        // line 156
        echo $this->env->getExtension('routing')->getPath("filtro");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), 'enctype');
        echo " novalidate>
";
        // line 157
        if (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "crear")) {
            // line 158
            echo "    <h4>Filtrar información</h4>
    ";
        } else {
            // line 160
            echo "    <h4>Usted modificará la Ciudad <font class=\"red\">\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "nombre"), "html", null, true);
            echo "\"</font> </h4>
    ";
        }
        // line 162
        echo "    <div class=\"addUbication\">
        <table>
            ";
        // line 164
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), 'form_start');
        echo "
                <td>";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "username1"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "username1"), 'widget');
        echo "</td>
            </tr>
            ";
        // line 168
        if (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "crear")) {
            // line 169
            echo "            <tr class=\"filaFormulario\">
                <td><input type=\"submit\" name=\"filtrarProyecto\" value=\"Filtrar\"></td>
                <td></td>
            </tr>
            ";
        }
        // line 174
        echo "        </table>
    </div>    
</form>
   </div>
</div>   
<section class=\"tabla\"> 
    <h4>Listado de ";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "listado"), "html", null, true);
        echo "</h4>
<table class=\"listar\">
        <tr>
            
            <td class=\"tabSup\">Identificador de ";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
        echo "</td>
            <td class=\"tabSup\">Fecha de inicio</td>
            <td class=\"tabSup\">Fecha de término</td>
            <td class=\"tabSup\">Hora de inicio</td>
            <td class=\"tabSup\">Hora de término</td>
            <td class=\"tabSup\">Profesional</td>
            <td class=\"tabSup\">Actividad realizada</td>
            <td class=\"tabSup\"></td>
            <td class=\"tabSup\"></td>
            
        </tr>
        ";
        // line 195
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")));
        foreach ($context['_seq'] as $context["_key"] => $context["listar"]) {
            // line 196
            echo "        <form action=\"";
            echo $this->env->getExtension('routing')->getPath("filtro");
            echo " \" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " novalidate>
        <tr>    
            <td class=\"tabInfo\">";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 199
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "fechaInicio"), "d-m-Y"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 200
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "fechaTermino"), "d-m-Y"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 201
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "fechaInicio"), "H:i"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 202
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "fechaTermino"), "H:i"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "profesional"), "pnombre"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "profesional"), "snombre"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "actividad"), "nombre"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\"><input type=\"submit\" name=\"eliminar\" value=\"eliminar\"></td>
            <td class=\"tabInfo\"><input type=\"submit\" name=\"modificar\" value=\"modificar\"></td>
            <td><input type=\"hidden\" name=\"valorEliminar\" value=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\"></td>
            <td ><input type=\"hidden\" name=\"tabla\" value=\"";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
            echo "\"></td>
        <tr/>    
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo " 
    </table> 
</section> 
<script type=\"text/javascript\" src=\"";
        // line 214
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

    // line 276
    public function block_horas($context, array $blocks = array())
    {
        // line 277
        echo "
";
        // line 278
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexHoras.html.twig", array("formHoras" => (isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras"))));
        // line 279
        echo "

";
        // line 281
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexReunion.html.twig", array("reuniones" => (isset($context["reuniones"]) ? $context["reuniones"] : $this->getContext($context, "reuniones"))));
        // line 282
        echo "

";
        // line 284
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexProyecto.html.twig", array("proyectos" => (isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto"))));
        // line 285
        echo "

";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:filtro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  526 => 284,  522 => 282,  324 => 162,  1227 => 738,  1217 => 731,  1213 => 730,  1209 => 729,  1204 => 727,  1197 => 725,  1193 => 724,  1182 => 716,  1173 => 710,  1169 => 709,  1165 => 708,  1155 => 701,  1151 => 700,  1147 => 699,  1142 => 697,  1135 => 695,  1131 => 694,  1120 => 686,  1103 => 672,  1099 => 671,  1095 => 670,  1090 => 668,  1083 => 666,  1079 => 665,  1068 => 657,  1063 => 655,  1042 => 637,  1038 => 636,  1034 => 635,  1029 => 633,  1022 => 631,  1018 => 630,  1007 => 622,  990 => 608,  986 => 607,  982 => 606,  977 => 604,  970 => 602,  966 => 601,  955 => 593,  944 => 585,  940 => 584,  936 => 583,  930 => 580,  926 => 579,  920 => 576,  916 => 575,  912 => 574,  903 => 568,  896 => 566,  892 => 565,  881 => 557,  854 => 536,  847 => 532,  834 => 527,  830 => 526,  806 => 504,  798 => 502,  793 => 501,  789 => 500,  767 => 480,  735 => 464,  701 => 439,  686 => 427,  666 => 421,  662 => 420,  651 => 417,  647 => 416,  625 => 397,  620 => 394,  604 => 391,  600 => 390,  588 => 387,  570 => 374,  554 => 367,  530 => 359,  515 => 349,  468 => 328,  419 => 301,  372 => 286,  297 => 125,  455 => 264,  386 => 221,  414 => 300,  410 => 249,  237 => 123,  389 => 158,  378 => 289,  375 => 152,  262 => 134,  234 => 86,  463 => 224,  415 => 194,  406 => 298,  376 => 288,  361 => 161,  347 => 153,  327 => 143,  680 => 431,  599 => 359,  587 => 350,  575 => 341,  558 => 368,  546 => 366,  527 => 310,  523 => 309,  519 => 350,  509 => 304,  495 => 335,  491 => 333,  486 => 236,  451 => 215,  397 => 244,  356 => 276,  334 => 260,  194 => 77,  20 => 1,  223 => 159,  492 => 239,  487 => 190,  475 => 293,  473 => 187,  431 => 264,  391 => 198,  383 => 196,  343 => 169,  328 => 164,  320 => 249,  70 => 31,  290 => 145,  282 => 132,  180 => 72,  206 => 79,  170 => 55,  97 => 31,  251 => 100,  577 => 231,  569 => 338,  550 => 212,  537 => 209,  533 => 208,  520 => 281,  513 => 305,  488 => 237,  479 => 294,  467 => 179,  462 => 179,  448 => 172,  433 => 309,  425 => 161,  421 => 197,  405 => 247,  354 => 144,  190 => 74,  77 => 23,  266 => 136,  161 => 73,  124 => 64,  84 => 21,  53 => 11,  146 => 58,  281 => 142,  239 => 80,  210 => 86,  202 => 89,  127 => 55,  118 => 34,  65 => 14,  137 => 67,  129 => 41,  323 => 129,  319 => 141,  317 => 139,  289 => 139,  274 => 93,  260 => 110,  232 => 104,  228 => 117,  216 => 99,  211 => 92,  191 => 84,  165 => 68,  114 => 42,  110 => 35,  104 => 32,  100 => 38,  315 => 110,  301 => 121,  267 => 125,  231 => 101,  167 => 74,  160 => 66,  215 => 101,  155 => 71,  829 => 420,  820 => 416,  784 => 388,  780 => 387,  758 => 371,  754 => 477,  744 => 366,  740 => 365,  734 => 362,  730 => 361,  726 => 458,  717 => 354,  710 => 445,  706 => 351,  695 => 343,  670 => 327,  665 => 325,  658 => 419,  654 => 418,  643 => 314,  626 => 300,  622 => 299,  618 => 298,  613 => 393,  606 => 363,  602 => 293,  594 => 288,  584 => 386,  565 => 275,  559 => 274,  555 => 273,  551 => 221,  543 => 219,  539 => 269,  524 => 202,  518 => 203,  514 => 278,  503 => 197,  499 => 336,  493 => 247,  481 => 189,  447 => 261,  443 => 226,  439 => 225,  420 => 254,  416 => 252,  403 => 201,  399 => 200,  395 => 199,  358 => 180,  352 => 143,  348 => 221,  342 => 218,  331 => 122,  304 => 157,  300 => 141,  292 => 146,  250 => 129,  207 => 71,  175 => 80,  150 => 44,  890 => 499,  878 => 490,  865 => 485,  861 => 540,  850 => 476,  841 => 529,  837 => 469,  833 => 468,  823 => 417,  819 => 460,  815 => 459,  810 => 457,  803 => 455,  799 => 454,  788 => 446,  773 => 437,  769 => 379,  759 => 478,  753 => 429,  749 => 428,  745 => 427,  731 => 416,  727 => 415,  718 => 412,  711 => 410,  696 => 401,  685 => 393,  681 => 424,  677 => 430,  671 => 388,  667 => 387,  661 => 384,  657 => 383,  653 => 382,  633 => 373,  617 => 360,  608 => 354,  592 => 341,  583 => 335,  548 => 271,  544 => 307,  529 => 207,  525 => 205,  516 => 279,  512 => 294,  508 => 276,  505 => 303,  482 => 234,  477 => 232,  470 => 241,  428 => 254,  424 => 262,  412 => 246,  408 => 248,  392 => 209,  388 => 241,  369 => 136,  351 => 211,  336 => 166,  332 => 165,  256 => 132,  248 => 107,  233 => 105,  198 => 78,  326 => 183,  308 => 106,  303 => 128,  299 => 151,  295 => 151,  291 => 122,  287 => 138,  279 => 193,  226 => 101,  222 => 101,  197 => 86,  152 => 66,  148 => 65,  113 => 32,  90 => 24,  476 => 330,  472 => 329,  450 => 262,  446 => 170,  442 => 214,  436 => 310,  432 => 257,  426 => 254,  422 => 247,  418 => 252,  370 => 167,  366 => 146,  357 => 132,  350 => 174,  346 => 139,  310 => 112,  286 => 133,  275 => 139,  265 => 90,  263 => 123,  255 => 120,  242 => 119,  218 => 100,  192 => 84,  186 => 80,  178 => 83,  172 => 75,  153 => 61,  1015 => 562,  1013 => 561,  1010 => 560,  1006 => 556,  1004 => 555,  1001 => 554,  998 => 553,  932 => 491,  925 => 487,  913 => 478,  901 => 469,  895 => 466,  888 => 464,  884 => 463,  872 => 487,  853 => 438,  849 => 437,  845 => 436,  839 => 433,  835 => 432,  831 => 421,  825 => 418,  821 => 427,  817 => 415,  812 => 424,  805 => 422,  801 => 421,  790 => 413,  777 => 438,  770 => 399,  763 => 433,  757 => 392,  750 => 476,  746 => 389,  733 => 379,  723 => 414,  719 => 371,  714 => 369,  707 => 409,  703 => 366,  692 => 358,  682 => 351,  678 => 329,  674 => 328,  668 => 346,  664 => 345,  660 => 344,  655 => 342,  648 => 340,  644 => 376,  637 => 374,  631 => 333,  629 => 332,  624 => 330,  611 => 320,  607 => 318,  596 => 389,  589 => 309,  585 => 308,  580 => 279,  574 => 278,  562 => 336,  556 => 310,  547 => 289,  542 => 210,  538 => 361,  534 => 360,  528 => 285,  517 => 279,  511 => 277,  507 => 198,  501 => 198,  497 => 248,  494 => 240,  489 => 246,  485 => 245,  464 => 327,  460 => 326,  456 => 255,  452 => 254,  449 => 253,  445 => 212,  441 => 257,  434 => 167,  417 => 204,  411 => 203,  400 => 185,  385 => 176,  377 => 238,  373 => 199,  359 => 214,  353 => 211,  349 => 272,  338 => 217,  333 => 203,  325 => 144,  318 => 160,  313 => 245,  306 => 156,  284 => 190,  277 => 223,  271 => 138,  259 => 104,  245 => 109,  213 => 74,  195 => 93,  185 => 72,  181 => 71,  345 => 209,  340 => 136,  335 => 185,  329 => 214,  311 => 126,  307 => 141,  302 => 203,  296 => 202,  293 => 123,  288 => 121,  280 => 118,  276 => 130,  272 => 127,  270 => 114,  261 => 122,  257 => 137,  253 => 101,  249 => 108,  244 => 128,  236 => 104,  225 => 110,  212 => 144,  205 => 97,  200 => 87,  188 => 83,  184 => 61,  174 => 94,  134 => 66,  126 => 46,  76 => 28,  58 => 16,  34 => 3,  23 => 1,  480 => 233,  474 => 231,  469 => 158,  461 => 269,  457 => 325,  453 => 324,  444 => 271,  440 => 148,  437 => 211,  435 => 256,  430 => 203,  427 => 208,  423 => 207,  413 => 241,  409 => 157,  407 => 202,  402 => 246,  398 => 243,  393 => 160,  387 => 157,  384 => 291,  381 => 220,  379 => 195,  374 => 116,  368 => 285,  365 => 184,  362 => 134,  360 => 145,  355 => 158,  341 => 168,  337 => 103,  322 => 212,  314 => 158,  312 => 157,  309 => 159,  305 => 129,  298 => 141,  294 => 135,  285 => 143,  283 => 125,  278 => 131,  268 => 116,  264 => 111,  258 => 121,  252 => 130,  247 => 113,  241 => 90,  229 => 128,  220 => 78,  214 => 71,  177 => 70,  169 => 75,  140 => 60,  132 => 48,  128 => 37,  107 => 30,  61 => 20,  273 => 128,  269 => 126,  254 => 122,  243 => 133,  240 => 81,  238 => 107,  235 => 163,  230 => 118,  227 => 82,  224 => 73,  221 => 126,  219 => 93,  217 => 95,  208 => 93,  204 => 142,  179 => 79,  159 => 72,  143 => 68,  135 => 72,  119 => 41,  102 => 27,  71 => 17,  67 => 19,  63 => 18,  59 => 16,  87 => 44,  94 => 25,  89 => 32,  85 => 23,  75 => 33,  68 => 15,  56 => 25,  38 => 5,  201 => 68,  196 => 85,  183 => 81,  171 => 67,  166 => 80,  163 => 65,  158 => 51,  156 => 65,  151 => 70,  142 => 56,  138 => 92,  136 => 59,  121 => 53,  117 => 51,  105 => 50,  91 => 28,  62 => 13,  49 => 8,  28 => 2,  24 => 4,  26 => 5,  21 => 2,  31 => 3,  25 => 3,  19 => 1,  93 => 25,  88 => 31,  78 => 18,  46 => 7,  44 => 6,  27 => 5,  79 => 34,  72 => 27,  69 => 15,  47 => 14,  40 => 5,  37 => 5,  22 => 2,  246 => 120,  157 => 62,  145 => 62,  139 => 67,  131 => 57,  123 => 60,  120 => 43,  115 => 50,  111 => 51,  108 => 49,  101 => 32,  98 => 47,  96 => 42,  83 => 26,  74 => 18,  66 => 24,  55 => 19,  52 => 8,  50 => 8,  43 => 8,  41 => 6,  35 => 15,  32 => 3,  29 => 2,  209 => 98,  203 => 87,  199 => 80,  193 => 86,  189 => 70,  187 => 83,  182 => 60,  176 => 76,  173 => 77,  168 => 78,  164 => 74,  162 => 74,  154 => 68,  149 => 60,  147 => 63,  144 => 51,  141 => 68,  133 => 51,  130 => 65,  125 => 36,  122 => 44,  116 => 33,  112 => 52,  109 => 49,  106 => 37,  103 => 46,  99 => 36,  95 => 25,  92 => 41,  86 => 38,  82 => 22,  80 => 29,  73 => 17,  64 => 15,  60 => 13,  57 => 12,  54 => 9,  51 => 18,  48 => 7,  45 => 7,  42 => 6,  39 => 10,  36 => 4,  33 => 3,  30 => 2,);
    }
}
