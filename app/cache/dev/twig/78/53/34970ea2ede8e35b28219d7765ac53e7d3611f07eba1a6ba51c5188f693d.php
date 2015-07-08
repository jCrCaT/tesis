<?php

/* AppMediBundle:Default:inicio.html.twig */
class __TwigTemplate_785334970ea2ede8e35b28219d7765ac53e7d3611f07eba1a6ba51c5188f693d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_contenido($context, array $blocks = array())
    {
        // line 3
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/calendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/modal.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mootools2.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 6
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
        ";
        // line 43
        $context["mostrarCon"] = 1;
        // line 44
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "misAvances"));
        foreach ($context['_seq'] as $context["_key"] => $context["mostrar"]) {
            // line 45
            echo "        \$('#agregaritem";
            echo twig_escape_filter($this->env, (isset($context["mostrarCon"]) ? $context["mostrarCon"] : $this->getContext($context, "mostrarCon")), "html", null, true);
            echo "').on('click',function(e){
            e.preventDefault();
            \$( \"#mostrarContenido";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["mostrarCon"]) ? $context["mostrarCon"] : $this->getContext($context, "mostrarCon")), "html", null, true);
            echo "\").slideToggle( \"slow\" );
        });
        ";
            // line 49
            $context["mostrarCon"] = ((isset($context["mostrarCon"]) ? $context["mostrarCon"] : $this->getContext($context, "mostrarCon")) + 1);
            // line 50
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mostrar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    });
</script>
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Chart.js-master/Chart.js"), "html", null, true);
        echo "\"></script>
<div class=\"informacionAvanceProyecto\">
    <div class=\"headerInicio1\">
        <h3>Hitos</h3> 
        <ul class=\"botones nav nav-tabs\">
            <li><a href=\"#hproyecto\" data-toggle=\"tab\">Proyectos</a></li>
            <li><a href=\"#hlicitacion\" data-toggle=\"tab\">Licitaciones</a></li> 
        </ul>      
    </div>
    <div class=\"tab-content\">
    <div id=\"hproyecto\" class=\"containerScroll tab-pane active\">
        <table class=\"hito\">
        ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hitos"]) ? $context["hitos"] : $this->getContext($context, "hitos")));
        foreach ($context['_seq'] as $context["_key"] => $context["hito"]) {
            // line 66
            echo "            <tr>
                <td class=\"second\">";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["hito"]) ? $context["hito"] : $this->getContext($context, "hito")), "fecha"), "d-m-Y"), "html", null, true);
            echo "</td>
                <td class=\"second\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hito"]) ? $context["hito"] : $this->getContext($context, "hito")), "nombre"), "html", null, true);
            echo "</td>
                <td class=\"second\">";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hito"]) ? $context["hito"] : $this->getContext($context, "hito")), "descripcion"), "html", null, true);
            echo "</td>
                <td class=\"second\">";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["hito"]) ? $context["hito"] : $this->getContext($context, "hito")), "proyecto"), "nombreProyecto"), "html", null, true);
            echo "</td>  
                <td class=\"second\"><div class=\"etiquetaP\">";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hito"]) ? $context["hito"] : $this->getContext($context, "hito")), "tipo"), "html", null, true);
            echo "</div></td> 
            </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hito'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        </table>
    </div> 
    <div id=\"hlicitacion\" class=\"containerScroll tab-pane\">
        <table class=\"hito\">
        ";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hitosLic"]) ? $context["hitosLic"] : $this->getContext($context, "hitosLic")));
        foreach ($context['_seq'] as $context["_key"] => $context["hito"]) {
            // line 79
            echo "            <tr>
                <td class=\"second\">";
            // line 80
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["hito"]) ? $context["hito"] : $this->getContext($context, "hito")), "fecha"), "d-m-Y"), "html", null, true);
            echo "</td>
                <td class=\"second\">";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hito"]) ? $context["hito"] : $this->getContext($context, "hito")), "nombre"), "html", null, true);
            echo "</td>
                <td class=\"second\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hito"]) ? $context["hito"] : $this->getContext($context, "hito")), "descripcion"), "html", null, true);
            echo "</td>
                <td class=\"second\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["hito"]) ? $context["hito"] : $this->getContext($context, "hito")), "licitacion"), "nombre"), "html", null, true);
            echo "</td>  
                <td class=\"second\"><div id=\"etiquetaP\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hito"]) ? $context["hito"] : $this->getContext($context, "hito")), "tipo"), "html", null, true);
            echo "</div></td> 
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hito'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        </table>
    </div>
    </div>
</div>
<div class=\"ultimasCosas col-xs-12 col-sm-12 col-md-12 col-lg-12\">
    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 contenedor\">
       ";
        // line 93
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexHoras.html.twig", array("formHoras" => (isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras")), "formHorasLic" => (isset($context["formHorasLic"]) ? $context["formHorasLic"] : $this->getContext($context, "formHorasLic"))));
        // line 95
        echo " 
    </div> 
</div>
<div class=\"misAvances\">
    ";
        // line 99
        $context["avanceP"] = 1;
        // line 100
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["misAvances"]) ? $context["misAvances"] : $this->getContext($context, "misAvances")));
        foreach ($context['_seq'] as $context["_key"] => $context["avance"]) {
            // line 101
            echo "<div class=\"informacionAvanceProyecto col-xs-12 col-sm-12 col-md-12 col-lg-12\">
    <div class=\"headerInicio\">
        <h3>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avance"]) ? $context["avance"] : $this->getContext($context, "avance")), "nombre"), "html", null, true);
            echo "</h3> <a href=\"#\" id=\"agregaritem";
            echo twig_escape_filter($this->env, (isset($context["avanceP"]) ? $context["avanceP"] : $this->getContext($context, "avanceP")), "html", null, true);
            echo "\" class=\"toggle text-right linkMostrar\">Mostrar información</a>
    </div>
    <div id=\"mostrarContenido";
            // line 105
            echo twig_escape_filter($this->env, (isset($context["avanceP"]) ? $context["avanceP"] : $this->getContext($context, "avanceP")), "html", null, true);
            echo "\" class=\"mostrarContenido\">
    <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">
        <canvas class=\"avanceGraficoProyecto\" id=\"myChart";
            // line 107
            echo twig_escape_filter($this->env, (isset($context["avanceP"]) ? $context["avanceP"] : $this->getContext($context, "avanceP")), "html", null, true);
            echo "\" width=\"150\" height=\"150\"></canvas>
        <div>
            <table>
                <tr>
                    <td><div class=\"rojo\"> </div></td>
                    <td>Porcentaje Avance</td>
                </tr>
                <tr>
                    <td><div class=\"plomo\"> </div></td>
                    <td>Porcentaje Restante</td>                    
                </tr>
            </table>
        </div>
    </div>
    <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-8\">
        <div>
            <div class=\"text-center\">
                <ul class=\"botones nav nav-tabs\">
                    <li><a href=\"#avance";
            // line 125
            echo twig_escape_filter($this->env, (isset($context["avanceP"]) ? $context["avanceP"] : $this->getContext($context, "avanceP")), "html", null, true);
            echo "\" data-toggle=\"tab\">Avances</a></li>
                </ul>
        </div>
       </div>
         <div class=\"tab-content\">
             <div id=\"avance";
            // line 130
            echo twig_escape_filter($this->env, (isset($context["avanceP"]) ? $context["avanceP"] : $this->getContext($context, "avanceP")), "html", null, true);
            echo "\" class=\"tab-pane active\">
                <table class=\"graficoInicio\">
                    <tr>
                        <td class=\"upper\">Horas Avanzadas:</td>
                        <td class=\"upper\">";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avance"]) ? $context["avance"] : $this->getContext($context, "avance")), "suma"), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <td>Horas Asignadas:</td>
                        <td>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avance"]) ? $context["avance"] : $this->getContext($context, "avance")), "horas"), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <td>Porcentaje Avance:</td>
                        <td>";
            // line 142
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["avance"]) ? $context["avance"] : $this->getContext($context, "avance")), "suma") / $this->getAttribute((isset($context["avance"]) ? $context["avance"] : $this->getContext($context, "avance")), "horas")) * 100), "html", null, true);
            echo "%</td>
                    </tr>   
                </table>
            </div>
     </div>
    </div>
        </div>
</div>
    ";
            // line 150
            $context["avanceP"] = ((isset($context["avanceP"]) ? $context["avanceP"] : $this->getContext($context, "avanceP")) + 1);
            // line 151
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "   
</div>
<script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-clockpicker.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\$('.clockpicker').clockpicker({
\tplacement: 'right',
\talign: 'left'
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
    \$(\".avisoExitoso\").css({\"display\":\"block\"});
}
</script>
<script language=\"javascript\">
    ";
        // line 231
        $context["js"] = 1;
        // line 232
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["misAvances"]) ? $context["misAvances"] : $this->getContext($context, "misAvances")));
        foreach ($context['_seq'] as $context["_key"] => $context["avance"]) {
            // line 233
            echo "            var ctx = document.getElementById(\"myChart";
            echo twig_escape_filter($this->env, (isset($context["js"]) ? $context["js"] : $this->getContext($context, "js")), "html", null, true);
            echo "\").getContext(\"2d\");
            if (";
            // line 234
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["avance"]) ? $context["avance"] : $this->getContext($context, "avance")), "suma") / $this->getAttribute((isset($context["avance"]) ? $context["avance"] : $this->getContext($context, "avance")), "horas")) * 100), "html", null, true);
            echo " >= 100){
                var data = [
            {
                value: 100,
                color:\"#F7464A\",
                highlight: \"#FF5A5E\",
                label: \"Avance\"
            },
            {
                value: 0,
                color: \"#ddd\",
                highlight: \"#EAE7E7\",
                label: \"Restante\"
            }
            ];
                
            }else{
            var data = [
            {
                value: ";
            // line 253
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["avance"]) ? $context["avance"] : $this->getContext($context, "avance")), "suma") / $this->getAttribute((isset($context["avance"]) ? $context["avance"] : $this->getContext($context, "avance")), "horas")) * 100), "html", null, true);
            echo ",
                color:\"#F7464A\",
                highlight: \"#FF5A5E\",
                label: \"Avance\"
            },
            {
                value: 100 - ";
            // line 259
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["avance"]) ? $context["avance"] : $this->getContext($context, "avance")), "suma") / $this->getAttribute((isset($context["avance"]) ? $context["avance"] : $this->getContext($context, "avance")), "horas")) * 100), "html", null, true);
            echo ",
                color: \"#ddd\",
                highlight: \"#EAE7E7\",
                label: \"Restante\"
            }
            ];}
Chart.defaults.global.animation = true;
var myPieChart = new Chart(ctx).Pie(data);
    ";
            // line 267
            $context["js"] = ((isset($context["js"]) ? $context["js"] : $this->getContext($context, "js")) + 1);
            // line 268
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "        
</script> 
";
    }

    // line 273
    public function block_horas($context, array $blocks = array())
    {
        // line 274
        echo "
";
        // line 275
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexPerfil.html.twig", array("uf" => (isset($context["uf"]) ? $context["uf"] : $this->getContext($context, "uf"))));
        // line 276
        echo "

";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  467 => 276,  465 => 275,  462 => 274,  459 => 273,  453 => 269,  447 => 268,  445 => 267,  434 => 259,  425 => 253,  403 => 234,  398 => 233,  393 => 232,  391 => 231,  310 => 153,  301 => 151,  299 => 150,  288 => 142,  281 => 138,  274 => 134,  267 => 130,  259 => 125,  238 => 107,  233 => 105,  226 => 103,  222 => 101,  218 => 100,  216 => 99,  210 => 95,  208 => 93,  200 => 87,  191 => 84,  187 => 83,  183 => 82,  179 => 81,  175 => 80,  172 => 79,  168 => 78,  162 => 74,  153 => 71,  149 => 70,  145 => 69,  141 => 68,  137 => 67,  134 => 66,  130 => 65,  115 => 53,  111 => 51,  105 => 50,  103 => 49,  98 => 47,  92 => 45,  87 => 44,  85 => 43,  45 => 6,  41 => 5,  37 => 4,  32 => 3,  29 => 2,);
    }
}
