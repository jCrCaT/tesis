<?php

/* AppMediBundle:Default:reunion.html.twig */
class __TwigTemplate_e3d493a9511d52ce292864a9197ed1614af408ee0b7f3ca6250b15ed33bfc0c8 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/calendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/modal.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mootools2.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/calendar.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$('.botonAgregar').click(function(){
        var reunion = \$(this).data(\"button\");
        \$(\"#valorReunion\").val( reunion );      
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
    

// The following should be put in your external js file,
// with the rest of your ondomready actions.
window.addEvent('domready', function(){

\t\$\$('.DatePicker').each( function(el){
\t\tnew DatePicker(el);
\t});

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

<div class=\"avisoExitoso\" style=\"display: none;\">
    <div>Registro Añadido exitósamente</div>   
</div>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-clockpicker.min.css"), "html", null, true);
        echo "\">
<div class=\"agregarItem\">
<div>
    <h4>Agendar Reunión</h4>
    <a href=\"#\" id=\"agregaritem\" class=\"toggle linkMostrar\">Mostrar/Ocultar</a>
    <div id=\"formAdd\" style=\"display:none\">
    <div class=\"addUbication\">
        <table>
            <form action=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("reunion");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
            ";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <tr>
                <td class=\"etiqueta\">Fecha de Reunión: </td>
                <td><input class=\"DatePicker\" name=\"fechaInicio\"></td> 
            </tr>
            <tr>
                <td class=\"etiqueta\">Hora de inicio de Reunion: </td>
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
                <td>";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente"), 'widget', array("value" => $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "cliente")));
        echo "</td>
                <td>";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente"), 'errors');
        echo "</td>
            </tr>
            ";
        // line 94
        if (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "crear")) {
            // line 95
            echo "            <tr class=\"filaFormulario\">
                <td><input type=\"submit\" class=\"btnAdd\" name=\"salvarReunion\" value=\"Agendar Reunión\"></td>
                <td></td>
            </tr>
            ";
        } else {
            // line 100
            echo "            <tr class=\"filaFormulario\">
                <td><input type=\"submit\" name=\"modificarHora\" value=\"Documentar hora\"></td>
                <td><input type=\"hidden\" name=\"valorModificar\" value=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "id"), "html", null, true);
            echo "\"></td>
                <td></td>
            </tr>
            ";
        }
        // line 106
        echo "            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </form> 
        </table>
    </div>  
    </div>
    </div>
    </div>    
<div class=\"proyecto\">
<table class=\"listar\">
        <tr class=\"trHeader\">            
            <td class=\"headerTable1\">Fecha de inicio</td>
            <td class=\"headerTable1\">Hora de inicio</td>
            <td class=\"headerTable1\">Cliente</td>
            <td class=\"headerTable1\">Participantes</td>
            <td class=\"headerTable1\"></td>
            <td class=\"headerTable1\"></td> 
            <td class=\"headerTable1\"></td>
            
        </tr>
        ";
        // line 125
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")));
        foreach ($context['_seq'] as $context["_key"] => $context["listar"]) {
            // line 126
            echo "        <form action=\"";
            echo $this->env->getExtension('routing')->getPath("reunion");
            echo " \" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " novalidate>
        <tr class=\"trContent1\">    
            <td class=\"tabInfo\">";
            // line 128
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "fechaInicio"), "d-m-Y"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 129
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "fechaInicio"), "H:i"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "cliente"), "nombre"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo text-center\">
                <table class=\"profReu\">
                    ";
            // line 133
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "dependencia"));
            foreach ($context['_seq'] as $context["_key"] => $context["dependencia"]) {
                // line 134
                echo "                    <tr>
                        <td>";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dependencia"]) ? $context["dependencia"] : $this->getContext($context, "dependencia")), "pnombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dependencia"]) ? $context["dependencia"] : $this->getContext($context, "dependencia")), "snombre"), "html", null, true);
                echo "</td>
                        <td><input type=\"submit\" class=\"btnRemProf\" name=\"remProfReu\" value=\"\"></td>
                        <td><input type=\"hidden\" id=\"valorEliminar\" name=\"profReuRem\" value=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dependencia"]) ? $context["dependencia"] : $this->getContext($context, "dependencia")), "id"), "html", null, true);
                echo "\"></td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dependencia'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "                </table>
                
                <input type=\"button\" class=\"botonAgregar center-block\" data-button=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\">
            <td class=\"tabInfo\"><input type=\"submit\" class=\"btnForm\" name=\"eliminar\" value=\"eliminar\"></td>
            <td class=\"tabInfo\"><input type=\"submit\" class=\"btnForm\" name=\"modificar\" value=\"modificar\"></td>
            <td class=\"tabInfo\"><input type=\"submit\" class=\"btnForm\" name=\"minuta\" value=\"minuta\"></td>
            <td><input type=\"hidden\" id=\"valorEliminar\" name=\"valorEliminar\" value=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\"></td>
            <td><input type=\"hidden\" name=\"tabla\" value=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
            echo "\"></td>
        </tr>    
        </form>
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "    </table> 
</div>
<div id=\"popup\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Agregar profesional a reunión</h4>
        <div class=\"close\"><a href=\"#\" id=\"close\"><img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
            <form action=\"";
        // line 158
        echo $this->env->getExtension('routing')->getPath("reunion");
        echo " \" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), 'enctype');
        echo " novalidate>
                ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), "psnombre"), 'widget');
        echo "
                <input type=\"hidden\" id=\"valorReunion\" name=\"valorReunion\" value=\"\">
                <input type=\"submit\" class=\"btnForm1\" name=\"agregarProfesional\" value=\"Agregar Profesional\">
           </form>
    </div>
</div>
<script type=\"text/javascript\" src=\"";
        // line 165
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
<script lang=\"javascript\">
function GetUrlValue(VarSearch){
\tvar SearchString = window.location.search.substring(1);
\tvar VariableArray = SearchString.split('&');
\tfor(var i = 0; i < VariableArray.length; i++){
\t\tvar KeyValuePair = VariableArray[i].split('=');
\t\tif(KeyValuePair[0] === VarSearch){
                    return KeyValuePair[1];

\t\t}
\t}
}; 
if(GetUrlValue('status') === 'success'){
    /*\$(\".avisoExitoso\").css({\"display\":\"block\"});*/
    /*\$(\".avisoExitoso\").fadeIn('slow').delay(30000);*/
    \$(\".avisoExitoso\").animate({opacity: 1.0}, 500).slideDown('slow');
}
</script>
";
    }

    // line 246
    public function block_horas($context, array $blocks = array())
    {
        // line 247
        echo "
";
        // line 248
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexHoras.html.twig", array("formHoras" => (isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras"))));
        // line 249
        echo "

";
        // line 251
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexReunion.html.twig", array("reuniones" => (isset($context["reuniones"]) ? $context["reuniones"] : $this->getContext($context, "reuniones"))));
        // line 252
        echo "

";
        // line 254
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexProyecto.html.twig", array("proyectos" => (isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto"))));
        // line 255
        echo "

";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:reunion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 255,  420 => 254,  416 => 252,  414 => 251,  410 => 249,  408 => 248,  405 => 247,  402 => 246,  318 => 165,  309 => 159,  303 => 158,  299 => 157,  292 => 152,  281 => 147,  277 => 146,  270 => 142,  266 => 140,  257 => 137,  250 => 135,  247 => 134,  243 => 133,  237 => 130,  233 => 129,  229 => 128,  221 => 126,  217 => 125,  194 => 106,  187 => 102,  183 => 100,  176 => 95,  174 => 94,  169 => 92,  165 => 91,  161 => 90,  141 => 73,  135 => 72,  124 => 64,  73 => 16,  69 => 15,  65 => 14,  60 => 13,  57 => 12,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 3,  30 => 2,);
    }
}
