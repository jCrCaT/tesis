<?php

/* AppMediBundle:Default:gproyecto.html.twig */
class __TwigTemplate_bb687c9223f311c1fbd81c9c5f9d801035f00b25244e740ce2ae91e22303c5db extends Twig_Template
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
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.mCustomScrollbar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/modal.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Chart.js-master/Chart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/calendar.js"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/calendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
<script>
    \$\$('.DatePicker').each( function(el){
\tnew DatePicker(el);
});
</script>
<script type=\"text/javascript\">
    \$(document).ready(function(){
         var cw = \$('#infoGeneral').height();
         \$('#infoGeneral').css('height', cw+'px');
         \$('#infoProf').css('height', cw+'px');
         \$('#infoFin').css('height', cw+'px');
         \$('#infoEtapa').css('height', cw+'px');
         \$('#infoAdic').css('height', cw+'px');
         \$('#infoExep').css('height', cw+'px');
         \$('#infoHitos').css('height', cw+'px');
         \$('#infoAvances').css('height', cw+'px');
         \$('#infoActividades').css('height', cw+'px');
    });
   
    
</script>
<script type=\"text/javascript\">
    (function(\$){
        \$(window).load(function(){
            var cw = \$('#infoGeneral').height();
            var ce = cw - 38 - cw * 0.30;
            \$('#containerScroll').css('height', ce+'px');
            \$('#containerScroll1').css('height', ce+'px');
            \$('#containerScroll2').css('height', ce+'px');
            \$('#containerScroll3').css('height', ce+'px');
            \$('#containerScroll4').css('height', ce+'px');
            \$(\"#containerScroll\").mCustomScrollbar();
            \$(\"#containerScroll1\").mCustomScrollbar();
            \$(\"#containerScroll2\").mCustomScrollbar();
            \$(\"#containerScroll3\").mCustomScrollbar();
            \$('#containerScroll4').css('height', ce+'px');
        });
    })(jQuery);
</script>
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$('#addProfesional').click(function(){
        var id = \$(this).data(\"id\");
        \$(\"#valorProyecto\").val( id );
        \$('#blackWindow').fadeIn('slow');
        \$('#popup').fadeIn('slow');
        \$('.popup-overlay').fadeIn('slow');
        \$('.popup-overlay').height(\$(window).height());
        return false;
    });
    
  \$('#close').click(function(){
    \$('#popup').fadeOut('slow');
    \$('#blackWindow').fadeOut('slow');
    \$('.popup-overlay').fadeOut('slow');
    return false;
  });
});
</script>
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$('#addExProy').click(function(){
        var id = \$(this).data(\"id\");
        \$(\"#valorProyecto\").val( id );
        \$('#blackWindow').fadeIn('slow');
        \$('#popup1').fadeIn('slow');
        \$('.popup-overlay').fadeIn('slow');
        \$('.popup-overlay').height(\$(window).height());
        return false;
    });
    
  \$('#close1').click(function(){
    \$('#popup1').fadeOut('slow');
    \$('#blackWindow').fadeOut('slow');
    \$('.popup-overlay').fadeOut('slow');
    return false;
  });
});
</script>
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$('#addExEtapa').click(function(){
        var etapa = \$(this).data(\"etapa\");
        \$(\"#valorEtapaEx\").val( etapa );
        \$('#blackWindow').fadeIn('slow');
        \$('#popup3').fadeIn('slow');
        \$('.popup-overlay').fadeIn('slow');
        \$('.popup-overlay').height(\$(window).height());
        return false;
    });
    
  \$('#close3').click(function(){
    \$('#popup3').fadeOut('slow');
    \$('#blackWindow').fadeOut('slow');
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
<script type=\"text/javascript\">
    (function(\$){
        \$(window).load(function(){
            \$(\"#containerScroll\").mCustomScrollbar();
        });
    })(jQuery);
</script>
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$('#addEtapa').click(function(){
        var etapa = \$(this).data(\"etapa\");
        \$(\"#valorProyecto1\").val( etapa );
        \$('#blackWindow').fadeIn('slow');
        \$('#popup4').fadeIn('slow');
        \$('.popup-overlay').fadeIn('slow');
        \$('.popup-overlay').height(\$(window).height());
        return false;
    });
    
  \$('#close4').click(function(){
    \$('#popup4').fadeOut('slow');
    \$('#blackWindow').fadeOut('slow');
    \$('.popup-overlay').fadeOut('slow');
    return false;
  });
});
</script>
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$('#addEtapaE').click(function(){
        var etapaexistente = \$(this).data(\"etapaexistente\");
        \$(\"#valorProyecto2\").val( etapaexistente );
        \$('#blackWindow').fadeIn('slow');
        \$('#popup2').fadeIn('slow');
        \$('.popup-overlay').fadeIn('slow');
        \$('.popup-overlay').height(\$(window).height());
        return false;
    });
    
  \$('#close2').click(function(){
    \$('#popup2').fadeOut('slow');
    \$('#blackWindow').fadeOut('slow');
    \$('.popup-overlay').fadeOut('slow');
    return false;
  });
});
</script>
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$('#addHito').click(function(){
        var hito = \$(this).data(\"proyecto\");
        \$(\"#valorHito\").val( hito );
        \$('#blackWindow').fadeIn('slow');
        \$('#popup5').fadeIn('slow');
        \$('.popup-overlay').fadeIn('slow');
        \$('.popup-overlay').height(\$(window).height());
        return false;
    });
    
  \$('#close5').click(function(){
    \$('#popup5').fadeOut('slow');
    \$('#blackWindow').fadeOut('slow');
    \$('.popup-overlay').fadeOut('slow');
    return false;
  });
});
</script>
<script type=\"text/javascript\">
\$(document).ready(function(){
    \$(\".eEtapa\").click(function(e){
        e.preventDefault();
        var asEtapa = \$(this).data(\"etapa\");
        \$(\"#aaa\").val(1);
        \$(\"#valorEtapaAsignada\").val(asEtapa);
        \$('#blackWindow').fadeIn('slow');
        \$('#popup6').fadeIn('slow');
    });

    \$('#close6').click(function(){
    \$('#popup6').fadeOut('slow');
    \$('#blackWindow').fadeOut('slow');
    \$('.popup-overlay').fadeOut('slow');
    return false;
  });
}
);    
</script>
<script type=\"text/javascript\">
\$(document).ready(function(){
    \$(\".eHito\").click(function(e){
        e.preventDefault();
        var asHito = \$(this).data(\"hito\");
        \$(\"#aaa\").val(2);
        \$(\"#valorEtapaAsignada\").val(asHito);
        \$('#blackWindow').fadeIn('slow');
        \$('#popup6').fadeIn('slow');
    });

    \$('#close6').click(function(){
    \$('#popup6').fadeOut('slow');
    \$('#blackWindow').fadeOut('slow');
    \$('.popup-overlay').fadeOut('slow');
    return false;
  });
}
);    
</script>
<div id=\"contenedorGraficos\">
<h4 class=\"tituloDash\">Dashboard de Proyecto ";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "nombreProyecto"), "html", null, true);
        echo "</h4>
";
        // line 223
        $context["largo"] = (twig_length_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "factTable")) - 1);
        // line 224
        echo "    <div  id=\"infoGeneral\" class=\" dashboardColumn col-xs-12 col-sm-12 col-md-6 col-lg-4 infoGeneral\">
        <h3>INFORMACIÓN GENERAL</h3>
        <canvas class=\"avanceGraficoProyecto\" id=\"myChart\" width=\"180\" height=\"180\"></canvas>
        <table>
            <tr>
                <td class=\"first\">Avance:</td>
                ";
        // line 230
        if ((($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "avanceHoras") == 0) || ($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "horasProgramadas") == 0))) {
            // line 231
            echo "                <td class=\"second\">0%</td>
                ";
        } else {
            // line 233
            echo "                <td class=\"second\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "avanceHoras") * 100) / twig_round($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "horasProgramadas"), 2, "floor")), "html", null, true);
            echo "%</td>

                ";
        }
        // line 236
        echo "            </tr>
            <tr>
                <td class=\"first\">Fecha de Inicio:</td>
                <td class=\"second\">";
        // line 239
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "fechaInicio"), "d-m-Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td class=\"first\">Fecha de Término</td>
                <td class=\"second\">";
        // line 243
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "fechaFin"), "d-m-Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td class=\"first\">Horas Programadas:</td>
                <td class=\"second\">";
        // line 247
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "horasProgramadas"), "html", null, true);
        echo " horas</td>
            </tr>
            <tr>
                <td class=\"first\">Horas Avanzadas:</td>
                <td class=\"second\">";
        // line 251
        echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "avanceHoras"), 2, "floor"), "html", null, true);
        echo " horas</td>
            </tr>
            <tr>
                <td class=\"first\">Horas Restantes:</td>
                <td class=\"second\">";
        // line 255
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "horasProgramadas") - twig_round($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "avanceHoras"), 2, "floor")), "html", null, true);
        echo " horas</td>
            </tr>
        </table>
        
    </div>
    <div id=\"infoFin\" class=\"dashboardColumn col-xs-12 col-sm-12 col-md-6 col-lg-4 infoFin\">
        <h3>FINANZAS</h3>
        <canvas class=\"avanceGraficoProyecto\" id=\"myChartFin\" width=\"180\" height=\"180\"></canvas>
        <table>
            ";
        // line 264
        if ((($this->getAttribute($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "finanzas"), "valorFecha", array(), "array") == 0) || ($this->getAttribute($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "finanzas"), "valorPresupuestado", array(), "array") == 0))) {
            // line 265
            echo "                ";
            $context["avanceFinanza"] = 0;
            // line 266
            echo "                    ";
        } else {
            // line 267
            echo "                ";
            $context["avanceFinanza"] = (($this->getAttribute($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "finanzas"), "valorFecha", array(), "array") * 100) / $this->getAttribute($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "finanzas"), "valorPresupuestado", array(), "array"));
            // line 268
            echo "            ";
        }
        // line 269
        echo "            <tr>
                <td class=\"first\">Avance:</td>
                <td class=\"second\">";
        // line 271
        echo twig_escape_filter($this->env, twig_round((isset($context["avanceFinanza"]) ? $context["avanceFinanza"] : $this->getContext($context, "avanceFinanza")), 2, "floor"), "html", null, true);
        echo "%</td>
            </tr>
            <tr>
                <td class=\"first\">Valor actual:</td>
                <td class=\"second\">";
        // line 275
        echo twig_escape_filter($this->env, twig_round($this->getAttribute($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "finanzas"), "valorFecha", array(), "array"), 2, "floor"), "html", null, true);
        echo " U.F</td>
            </tr>
            <tr>
                <td class=\"first\">Valor Presupuestado:</td>
                <td class=\"second\">";
        // line 279
        echo twig_escape_filter($this->env, twig_round($this->getAttribute($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "finanzas"), "valorPresupuestado", array(), "array"), 2, "floor"), "html", null, true);
        echo " U.F</td>
            </tr>
        </table>
        
        
    </div>
    <div id=\"infoProf\" class=\"dashboardColumn col-xs-12 col-sm-12 col-md-6 col-lg-4 infoProf\">
        <h3>PROFESIONALES ASIGNADOS</h3>
        <div id=\"containerScroll\">
        ";
        // line 288
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "asignacion"));
        foreach ($context['_seq'] as $context["_key"] => $context["asignacion"]) {
            // line 289
            echo "        <div class=\"profAsignado\">
            <div>
                ";
            // line 291
            if (($this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "imagenPerfil") == null)) {
                // line 292
                echo "                <div class=\"dashImgPerfil\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/male.png"), "html", null, true);
                echo "\" class=\"img-circle\" /></div>
                ";
            } else {
                // line 294
                echo "                <div class=\"dashImgPerfil\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("documentos/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "imagenPerfil"), "path"), "html", null, true);
                echo "\"></div>
                ";
            }
            // line 296
            echo "                <div class=\"dashInfoProf\">
                    <ul> 
                        ";
            // line 298
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "papellido")) >= 5)) {
                echo " 
                        <li>";
                // line 299
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "pnombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "papellido"), 0, 3), "html", null, true);
                echo "...</li>
                        ";
            } else {
                // line 301
                echo "                        <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "pnombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "papellido"), "html", null, true);
                echo "</li>
                        ";
            }
            // line 303
            echo "                        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "horas"), "html", null, true);
            echo " h/Prog.</li>
                        <li>";
            // line 304
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "valorHora"), "html", null, true);
            echo " U.F</li>
                        <li>";
            // line 305
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "fechaInicio"), "d-m-Y"), "html", null, true);
            echo " F/I</li>
                        <li>";
            // line 306
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "fechaTermino"), "d-m-Y"), "html", null, true);
            echo " F/T</li>
                    </ul>
     
                </div>
            </div>  
        </div>
                
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asignacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        echo "        </div>
        <div><input type=\"button\" id=\"addProfesional\" class=\"btnAdd center-block\" name=\"agregarProfesional\" value=\"Añadir Profesional\" data-id=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"), "html", null, true);
        echo "\"/></div>
        
    </div>
    <div id=\"infoEtapa\" class=\"dashboardColumn col-xs-12 col-sm-12 col-md-6 col-lg-6 infoEtapa\">
        <h3>ETAPAS</h3>
        <div id=\"containerScroll2\">
        <table>
            <tr>
                <td class=\"first\">Etapa</td>
                <td class=\"first\">Fecha Inicio</td>
                <td class=\"first\">Fecha Término</td>
                <td class=\"first\">horas</td>
                <td class=\"first\">Estado</td>
            </tr>
        ";
        // line 329
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "asignacionEtapa"));
        foreach ($context['_seq'] as $context["_key"] => $context["etapa"]) {
            // line 330
            echo "            <tr>
                <td class=\"second etapa\"><p>";
            // line 331
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["etapa"]) ? $context["etapa"] : $this->getContext($context, "etapa")), "etapaProyecto"), "nombre"), "html", null, true);
            echo "</p></td>
                <td class=\"second\">";
            // line 332
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["etapa"]) ? $context["etapa"] : $this->getContext($context, "etapa")), "fechaInicio"), "d-m-Y"), "html", null, true);
            echo "</td>
                <td class=\"second\">";
            // line 333
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["etapa"]) ? $context["etapa"] : $this->getContext($context, "etapa")), "fechaTermino"), "d-m-Y"), "html", null, true);
            echo "</td>
                <td class=\"second\">";
            // line 334
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etapa"]) ? $context["etapa"] : $this->getContext($context, "etapa")), "sumaHoras"), "html", null, true);
            echo "</td>
                <td><a href=\"#\" data-etapa=\"";
            // line 335
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etapa"]) ? $context["etapa"] : $this->getContext($context, "etapa")), "id"), "html", null, true);
            echo "\" class=\"eEtapa\">";
            if ((null === $this->getAttribute((isset($context["etapa"]) ? $context["etapa"] : $this->getContext($context, "etapa")), "estado"))) {
                echo "estado";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["etapa"]) ? $context["etapa"] : $this->getContext($context, "etapa")), "estado"), "estado"), "html", null, true);
            }
            echo "</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etapa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 338
        echo "        </table> 
        </div> 
        <div><input type=\"button\" id=\"addEtapa\" class=\"btnAdd center-block\" name=\"agregarNEtapa\" value=\"Añadir Etapa\"      data-etapa=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"), "html", null, true);
        echo "\"/>
            <input type=\"button\" id=\"addEtapaE\" class=\"btnAdd center-block\" name=\"agregarEtapaE\" value=\"Añadir Etapa Existente\" data-etapaexistente=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"), "html", null, true);
        echo "\"/>
        </div>      
    </div>
    <div id=\"infoExep\" class=\"dashboardColumn col-xs-12 col-sm-12 col-md-6 col-lg-6 infoExep\">
        <h3>EXCEPCIONES</h3>
        <ul class=\"botones nav nav-tabs\">
            <li><a href=\"#proyecto\" data-toggle=\"tab\">Proyecto</a></li>
            <li><a href=\"#etapa\" data-toggle=\"tab\">Etapas</a></li>
             <li><a href=\"#hitos\" data-toggle=\"tab\">Hitos</a></li>    
        </ul>
        <div class=\"tab-content\">
            <div id=\"proyecto\" class=\"tab-pane active\">
            <div id=\"containerScroll1\">
                ";
        // line 354
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "excepcionesPlazo"));
        foreach ($context['_seq'] as $context["_key"] => $context["excepcion"]) {
            // line 355
            echo "                <div class=\"exepProyecto\">
                    <div>
                        <table>
                            <tr>
                                <td class=\"first\">Fecha de Anterior</td>
                                <td class=\"first\">Fecha de Término</td>
                                <td class=\"first\">Fecha de Ingreso</td>
                            </tr>
                            <tr>
                                <td class=\"second\">";
            // line 364
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["excepcion"]) ? $context["excepcion"] : $this->getContext($context, "excepcion")), "fechaAnterior"), "d-m-Y"), "html", null, true);
            echo "</td>
                                <td class=\"second\">";
            // line 365
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["excepcion"]) ? $context["excepcion"] : $this->getContext($context, "excepcion")), "fechaTermino"), "d-m-Y"), "html", null, true);
            echo "</td>
                                <td class=\"second\">";
            // line 366
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["excepcion"]) ? $context["excepcion"] : $this->getContext($context, "excepcion")), "fechaIngreso"), "d-m-Y"), "html", null, true);
            echo "</td>
                            </tr>
                        </table>
                        <div>
                            <ul>
                                <li>Las horas han ";
            // line 371
            if (($this->getAttribute((isset($context["excepcion"]) ? $context["excepcion"] : $this->getContext($context, "excepcion")), "accion") == "a")) {
                echo " <p style=\"color: #02C7DC\">aumentado</p> ";
            } else {
                echo " <p style=\"color:#f9012a\">disminuido</p>";
            }
            echo " </li>
                                <li>";
            // line 372
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["excepcion"]) ? $context["excepcion"] : $this->getContext($context, "excepcion")), "descripcion"), "html", null, true);
            echo "</li>
                                <li>";
            // line 373
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["excepcion"]) ? $context["excepcion"] : $this->getContext($context, "excepcion")), "horas"), "html", null, true);
            echo " horas han sido modificadas</li>
                            </ul>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['excepcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 379
        echo "               
            </div>
                <input type=\"button\" name=\"addExProyecto\" id=\"addExProy\" value=\"Añadir Excepción\" class=\"btnAdd center-block\">
        </div>
            <div id=\"etapa\" class=\"tab-pane\">
                <div id=\"containerScroll3\">
                <table>
                    <tr>
                        <td class=\"first\">Etapa</td>
                        <td class=\"first\">Fecha de Inicio</td>
                        <td class=\"first\">Fecha de Termino</td>
                    </tr>
                ";
        // line 391
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "asignacionEtapa"));
        foreach ($context['_seq'] as $context["_key"] => $context["exepcion"]) {
            // line 392
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exepcion"]) ? $context["exepcion"] : $this->getContext($context, "exepcion")), "excepcionesEtapa"));
            foreach ($context['_seq'] as $context["_key"] => $context["excepciones"]) {
                echo "  
                        <tr>
                            <td class=\"second\">";
                // line 394
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["exepcion"]) ? $context["exepcion"] : $this->getContext($context, "exepcion")), "etapaProyecto"), "nombre"), "html", null, true);
                echo "</td>  
                            <td class=\"second\">";
                // line 395
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["excepciones"]) ? $context["excepciones"] : $this->getContext($context, "excepciones")), "fechaInicio"), "d-m-Y"), "html", null, true);
                echo "</td>
                            <td class=\"second\">";
                // line 396
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["excepciones"]) ? $context["excepciones"] : $this->getContext($context, "excepciones")), "fechaTermino"), "d-m-Y"), "html", null, true);
                echo "</td> 
                        </tr>                       
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['excepciones'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 398
            echo " 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exepcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 399
        echo " 
                </table> 
                </div>  
                <input type=\"button\" name=\"addExEtapa\" id=\"addExEtapa\" data-proyecto=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"), "html", null, true);
        echo "\" value=\"Añadir Excepción\" class=\"btnAdd center-block\">
                
            </div>
            <div id=\"hitos\" class=\"tab-pane\">
                3
            </div>
            
        </div>
    </div>
    <div id=\"infoAdic\" class=\"dashboardColumn col-xs-12 col-sm-12 col-md-6 col-lg-6 infoAdic\">
        <h3>HITOS</h3>
        <div id=\"containerScroll3\">
            <table>
                <tr>
                    <td class=\"first\">Nombre</td>
                    <td class=\"first\">Fecha</td>
                    <td class=\"first\">Descripción</td>
                    <td class=\"first\">Estado</td>
                </tr>
                ";
        // line 421
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "hito"));
        foreach ($context['_seq'] as $context["_key"] => $context["hito"]) {
            // line 422
            echo "                    <tr>
                        <td class=\"second\"><p>";
            // line 423
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hito"]) ? $context["hito"] : $this->getContext($context, "hito")), "nombre"), "html", null, true);
            echo "</p></td>
                        <td class=\"third\">";
            // line 424
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["hito"]) ? $context["hito"] : $this->getContext($context, "hito")), "fecha"), "d-m-Y"), "html", null, true);
            echo "</td>
                        <td class=\"third\">";
            // line 425
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hito"]) ? $context["hito"] : $this->getContext($context, "hito")), "descripcion"), "html", null, true);
            echo "</td>
                        <td class=\"third\"><a href=\"\" class=\"eHito\" data-hito=\"";
            // line 426
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hito"]) ? $context["hito"] : $this->getContext($context, "hito")), "id"), "html", null, true);
            echo "\">";
            if ((null === $this->getAttribute((isset($context["hito"]) ? $context["hito"] : $this->getContext($context, "hito")), "estado"))) {
                echo "estado";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["hito"]) ? $context["hito"] : $this->getContext($context, "hito")), "estado"), "estado"), "html", null, true);
            }
            echo "</a></td>                        
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hito'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 429
        echo "
            </table>
        </div> 
        <input type=\"button\" name=\"addHito\" id=\"addHito\" data-proyecto=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"), "html", null, true);
        echo "\" value=\"Añadir Hito\" class=\"btnAdd center-block\">
    </div>
    <div id=\"infoAvances\" class=\"dashboardColumn col-xs-12 col-sm-12 col-md-6 col-lg-6 infoAvances\">
        <h3>AVANCE DE PROFESIONALES</h3>
        <canvas id=\"avancesProf\" width=\"270\" height=\"200\"></canvas>
        
    </div>
    <div id=\"infoActividades\" class=\"dashboardColumn col-xs-12 col-sm-12 col-md-6 col-lg-6 infoAvances\">
        <h3>ACTIVIDADES DOCUMENTADAS</h3>
        <canvas id=\"avancesAct\" width=\"270\" height=\"200\"></canvas> 
        ";
        // line 442
        $context["numeroAct"] = 1;
        // line 443
        echo "            <div id=\"containerScroll4\">
                <div class=\"tituloLista\">Lista de actividades</div>
                <ul id=\"ulItems\">
        ";
        // line 446
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "actividades"));
        foreach ($context['_seq'] as $context["_key"] => $context["actividades"]) {
            // line 447
            echo "            <li>";
            echo twig_escape_filter($this->env, (isset($context["numeroAct"]) ? $context["numeroAct"] : $this->getContext($context, "numeroAct")), "html", null, true);
            echo ".-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividades"]) ? $context["actividades"] : $this->getContext($context, "actividades")), "nombre"), "html", null, true);
            echo "</li>
            ";
            // line 448
            $context["numeroAct"] = ((isset($context["numeroAct"]) ? $context["numeroAct"] : $this->getContext($context, "numeroAct")) + 1);
            // line 449
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividades'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
                </ul>
            </div>
    </div>
    <div id=\"infoActividadesProf\" class=\"dashboardColumn col-xs-12 col-sm-12 col-md-6 col-lg-6 infoAvances\">
        <h3>ACTIVIDADES POR PROFESIONALES</h3>
            <div id=\"containerScroll5\">
                <div class=\"tituloLista\">Actividades desarrolladas por Profesionales</div>
                <table>
                    <tr>
                        <td class=\"first\">Profesional</td>
                        <td class=\"first\">Actividad</td>
                        <td class=\"first\">Cantidad de horas</td>
                    </tr>
                ";
        // line 463
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "actProf"));
        foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
            // line 464
            echo "                    <tr>
                        <td class=\"third\">";
            // line 465
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "nombre"), "html", null, true);
            echo "</td>
                        <td class=\"third\">";
            // line 466
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "actnom"), "html", null, true);
            echo "</td>
                        <td class=\"third\" style=\"text-align:center\">";
            // line 467
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "suma"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 470
        echo "                </table>
            </div>
    </div>
<script language=\"javascript\">
           
                var ctx = document.getElementById(\"myChart\").getContext(\"2d\");
                var data = [
                {
                    value: ";
        // line 478
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "avanceHoras") * 100) / twig_round($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "horasProgramadas"), 2, "floor")), "html", null, true);
        echo ",
                    color:\"#363569\",
                    highlight: \"#363569\",
                    label: \"Avance\"
                },
                {
                    value: 100 - ";
        // line 484
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "avanceHoras") * 100) / twig_round($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "horasProgramadas"), 2, "floor")), "html", null, true);
        echo ",
                    color: \"#AFAEFA\",
                    highlight: \"#AFAEFA\",
                    label: \"Restante\"
                }
                ];
Chart.defaults.global.animation = false;
var myPieChart = new Chart(ctx).Pie(data);
</script>
<script language=\"javascript\">
                var ctx = document.getElementById(\"myChartFin\").getContext(\"2d\");
                var data = [
                {
                    value: ";
        // line 497
        echo twig_escape_filter($this->env, twig_round((isset($context["avanceFinanza"]) ? $context["avanceFinanza"] : $this->getContext($context, "avanceFinanza")), 2, "floor"), "html", null, true);
        echo ",
                    color:\"#363569\",
                    highlight: \"#363569\",
                    label: \"Avance\"
                },
                {
                    value: 100 - ";
        // line 503
        echo twig_escape_filter($this->env, twig_round((isset($context["avanceFinanza"]) ? $context["avanceFinanza"] : $this->getContext($context, "avanceFinanza")), 2, "floor"), "html", null, true);
        echo ",
                    color: \"#AFAEFA\",
                    highlight: \"#AFAEFA\",
                    label: \"Restante\"
                }
                ];
Chart.defaults.global.animation = false;
var myPieChart = new Chart(ctx).Pie(data);
</script>
<script language=\"javascript\">
    itemsNombre = [];
    avancePropio = [];
    ";
        // line 515
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "avanceProfesionales"));
        foreach ($context['_seq'] as $context["_key"] => $context["tiempo"]) {
            // line 516
            echo "            itemsNombre.push(\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tiempo"]) ? $context["tiempo"] : $this->getContext($context, "tiempo")), "nombre"), "html", null, true);
            echo "\");
            avancePropio.push(\"";
            // line 517
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tiempo"]) ? $context["tiempo"] : $this->getContext($context, "tiempo")), "suma"), "html", null, true);
            echo "\");      
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tiempo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 519
        echo "    var avance = document.getElementById(\"avancesProf\").getContext(\"2d\");
    var data = {
    labels: itemsNombre,
    datasets: [
        {
            label: \"Avances por Profesionales\",
            fillColor: \"rgba(220,220,220,0.5)\",
            strokeColor: \"rgba(220,220,220,0.8)\",
            highlightFill: \"rgba(220,220,220,0.75)\",
            highlightStroke: \"rgba(220,220,220,1)\",
            data: avancePropio
        }
    ]
};

var myBarChart = new Chart(avance).Bar(data);
</script>
<script language=\"javascript\">
    itemsNombre = [];
    avancePropio = [];
    var numero = 1;
    ";
        // line 540
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "actividades"));
        foreach ($context['_seq'] as $context["_key"] => $context["tiempo"]) {
            // line 541
            echo "            itemsNombre.push(numero);
            avancePropio.push(\"";
            // line 542
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tiempo"]) ? $context["tiempo"] : $this->getContext($context, "tiempo")), "suma"), "html", null, true);
            echo "\");   
            numero = numero +1;   
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tiempo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 545
        echo "    var avance = document.getElementById(\"avancesAct\").getContext(\"2d\");
    var data = {
    labels: itemsNombre,
    datasets: [
        {
            label: \"Avances por Profesionales\",
            fillColor: \"rgba(220,220,220,0.5)\",
            strokeColor: \"rgba(220,220,220,0.8)\",
            highlightFill: \"rgba(220,220,220,0.75)\",
            highlightStroke: \"rgba(220,220,220,1)\",
            data: avancePropio
        }
    ]
};

var myBarChart = new Chart(avance).Bar(data);
</script>
<script language=\"javascript\">
    itemsGraph = [];
    porcentaje = [];
    ";
        // line 565
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "factTable"));
        foreach ($context['_seq'] as $context["_key"] => $context["tiempo"]) {
            // line 566
            echo "            itemsGraph.push(\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tiempo"]) ? $context["tiempo"] : $this->getContext($context, "tiempo")), "fechaId"), "fecha"), "d-m-Y"), "html", null, true);
            echo "\");      
            porcentaje.push(\"";
            // line 567
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tiempo"]) ? $context["tiempo"] : $this->getContext($context, "tiempo")), "porcentajeAvance"), "html", null, true);
            echo "\");
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tiempo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 569
        echo "    var avance = document.getElementById(\"avances\").getContext(\"2d\");
    var data = {
    labels: itemsGraph,
    datasets: [
        {
            label: \"My First dataset\",
            fillColor: \"rgba(220,220,220,0.2)\",
            strokeColor: \"rgba(220,220,220,9)\",
            pointColor: \"rgba(220,220,220,9)\",
            pointStrokeColor: \"rgba(220,220,220,0.5)\",
            pointHighlightFill: \"rgba(220,220,220,0.5)\",
            pointHighlightStroke: \"rgba(220,220,220,1)\",
            data: porcentaje
        }
    ]
};

var myLineChart = new Chart(avance).Line(data);
</script>
<div id=\"popup\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Agregar Profesional a Proyecto</h4>
        <div class=\"close\"><a href=\"#\" id=\"close\"><img src=\"";
        // line 591
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <form action=\"";
        // line 592
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gproyecto", array("id" => $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"))), "html", null, true);
        echo " \" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), 'enctype');
        echo " novalidate>
                <table>
                    ";
        // line 594
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), 'form_start');
        echo "
                    <tr>
                        <td class=\"etiqueta\"><font style=\"font-weight: bold;\">Profesional a asignar:</font></td>
                        <td>";
        // line 597
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), "profesional"), 'widget', array("attr" => array("class" => "largo-box chosen-select")));
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"etiqueta\"><font style=\"font-weight: bold;\">Horas asignadas:</font></td>
                        <td>";
        // line 601
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), "horas"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"etiqueta\"><font style=\"font-weight: bold;\">Valor de la hora de profesional:</font></td>
                        <td>";
        // line 605
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), "valorHora"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                    </tr>
                    <tr>
                        <td>Fecha de inicio</td>
                        <td><input class=\"DatePicker\" name=\"fechaInicio\"></td> 
                    </tr>
                    <tr>
                        <td>Fecha de término</td>
                        <td><input class=\"DatePicker\" name=\"fechaTermino\"></td> 
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type=\"submit\" class=\"btnAdd\" name=\"agregarProfesional\" value=\"Agregar Profesional\">
                            <input type=\"hidden\" id=\"valorProyecto\" name=\"valorProyecto\" value=\"\">
                        </td>
                    </tr>
                    ";
        // line 622
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), 'form_end');
        echo "
                </table>
           </form>
    </div>
</div>
<div id=\"popup1\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Agregar Excepción a Proyecto</h4>
        <div class=\"close\"><a href=\"#\" id=\"close1\"><img src=\"";
        // line 630
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <form action=\"";
        // line 631
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gproyecto", array("id" => $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), 'enctype');
        echo " novalidate>
            <table>
                ";
        // line 633
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), 'form_start');
        echo "
                <tr>
                    <td>Nueva Fecha de término</td>
                    <td><input class=\"DatePicker\" name=\"fechaExPro\"></td>
                </tr>
                <tr>
                    <td>";
        // line 639
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "horas"), 'label');
        echo "</td>
                    <td>";
        // line 640
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "horas"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                    <td>";
        // line 641
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "horas"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 644
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "accion"), 'label');
        echo "</td>
                    <td>";
        // line 645
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "accion"), 'widget', array("attr" => array("class" => "chosen-select largo-box")));
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 648
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "descripcion"), 'label');
        echo "</td>
                    <td>";
        // line 649
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "descripcion"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                    <td>";
        // line 650
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "descripcion"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td><input type=\"submit\" class=\"btnAdd\" name=\"salvarExcepcionP\" value=\"Agregar Etapa\"></td>
                </tr>
                <tr>
                    <td><input type=\"hidden\" id=\"valorProyectoEx\" name=\"valorProyectoEx\" value=\"\"></td>
                </tr>
                ";
        // line 658
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), 'form_end');
        echo "
            </table>
        </form>
    </div>
</div>
<div id=\"popup2\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Agregar Etapa existente a Proyecto</h4>
        <div class=\"close\"><a href=\"#\" id=\"close2\"><img src=\"";
        // line 666
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <form action=\"";
        // line 667
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gproyecto", array("id" => $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEtapaE"]) ? $context["formEtapaE"] : $this->getContext($context, "formEtapaE")), 'enctype');
        echo " novalidate>
            <table>
                ";
        // line 669
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEtapaE"]) ? $context["formEtapaE"] : $this->getContext($context, "formEtapaE")), 'form_start');
        echo "
                <tr>
                    <td>";
        // line 671
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtapaE"]) ? $context["formEtapaE"] : $this->getContext($context, "formEtapaE")), "nombre"), 'label');
        echo "</td>
                    <td>";
        // line 672
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtapaE"]) ? $context["formEtapaE"] : $this->getContext($context, "formEtapaE")), "nombre"), 'widget', array("attr" => array("class" => "chosen-select largo-box")));
        echo "</td>
                    <td>";
        // line 673
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtapaE"]) ? $context["formEtapaE"] : $this->getContext($context, "formEtapaE")), "nombre"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td>Fecha de inicio</td>
                    <td><input class=\"DatePicker\" name=\"fechaInicio\"></td> 
                </tr>
                <tr>
                    <td>Fecha de término</td>
                    <td><input class=\"DatePicker\" name=\"fechaterminoet\"></td> 
                </tr>
                <tr>
                    <td><input type=\"submit\" class=\"btnAdd\" name=\"salvarEtapaE\" value=\"Agregar Etapa\"></td>
                    <td><input type=\"hidden\" id=\"valorProyecto2\" name=\"valorProyecto2\" value=\"\"></td>
                </tr>
                ";
        // line 687
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEtapaE"]) ? $context["formEtapaE"] : $this->getContext($context, "formEtapaE")), 'form_end');
        echo "
            </table>
        </form>
    </div>
</div>
<div id=\"popup3\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Agregar Excepción a Etapa</h4>
        <div class=\"close\"><a href=\"#\" id=\"close3\"><img src=\"";
        // line 695
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <form action=\"";
        // line 696
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gproyecto", array("id" => $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEtapaProyecto"]) ? $context["formEtapaProyecto"] : $this->getContext($context, "formEtapaProyecto")), 'enctype');
        echo "  novalidate>
            <table>
                ";
        // line 698
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEtapaProyecto"]) ? $context["formEtapaProyecto"] : $this->getContext($context, "formEtapaProyecto")), 'form_start');
        echo "
                <tr>
                    <td>";
        // line 700
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtapaProyecto"]) ? $context["formEtapaProyecto"] : $this->getContext($context, "formEtapaProyecto")), "etapaProyecto"), 'label');
        echo "</td>
                    <td>";
        // line 701
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtapaProyecto"]) ? $context["formEtapaProyecto"] : $this->getContext($context, "formEtapaProyecto")), "etapaProyecto"), 'widget', array("attr" => array("class" => "chosen-select largo-box")));
        echo "</td>
                    <td>";
        // line 702
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtapaProyecto"]) ? $context["formEtapaProyecto"] : $this->getContext($context, "formEtapaProyecto")), "etapaProyecto"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td>Nueva Fecha de Inicio</td>
                    <td><input class=\"DatePicker\" name=\"fechaInicioEtapa\"></td>
                </tr>
                <tr>
                    <td>Nueva Fecha de término</td>
                    <td><input class=\"DatePicker\" name=\"fechaTerminoEtapa\"></td>
                </tr>
                <tr>
                    <td>Motivo de modificación</td>
                    <td><input type=\"text\" name=\"descripcion\"></td>                    
                </tr>
                <tr>
                    <td><input type=\"submit\" class=\"btnAdd\" name=\"salvarExcepcionE\" value=\"Salvar Excepción\"></td>
                </tr>
                <tr>
                    <td><input type=\"hidden\" id=\"valorEtapaEx\" name=\"valorEtapaEx\" value=\"";
        // line 720
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"), "html", null, true);
        echo "\"></td>
                </tr>
                ";
        // line 722
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEtapaProyecto"]) ? $context["formEtapaProyecto"] : $this->getContext($context, "formEtapaProyecto")), 'form_end');
        echo "
            </table>
        </form>
    </div>
</div>
<div id=\"popup4\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Agregar Etapa a Proyecto</h4>
        <div class=\"close\"><a href=\"#\" id=\"close4\"><img src=\"";
        // line 730
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <form action=\"";
        // line 731
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gproyecto", array("id" => $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNuevaEtapa"]) ? $context["formNuevaEtapa"] : $this->getContext($context, "formNuevaEtapa")), 'enctype');
        echo " novalidate>
            <table>
                ";
        // line 733
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formNuevaEtapa"]) ? $context["formNuevaEtapa"] : $this->getContext($context, "formNuevaEtapa")), 'form_start');
        echo "
                <tr>
                    <td>";
        // line 735
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNuevaEtapa"]) ? $context["formNuevaEtapa"] : $this->getContext($context, "formNuevaEtapa")), "nombre"), 'label');
        echo "</td>
                    <td>";
        // line 736
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNuevaEtapa"]) ? $context["formNuevaEtapa"] : $this->getContext($context, "formNuevaEtapa")), "nombre"), 'widget');
        echo "</td>
                    <td>";
        // line 737
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNuevaEtapa"]) ? $context["formNuevaEtapa"] : $this->getContext($context, "formNuevaEtapa")), "nombre"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td>Fecha de inicio</td>
                    <td><input class=\"DatePicker\" name=\"fechaInicio\"></td> 
                </tr>
                <tr>
                    <td>Fecha de término</td>
                    <td><input class=\"DatePicker\" name=\"fechaterminoet\"></td> 
                </tr>
                <tr>
                    <td><input type=\"submit\" class=\"btnAdd\" name=\"salvarEtapa\" value=\"Agregar Etapa\"></td>
                    <td><input type=\"text\" id=\"valorProyecto1\" name=\"valorProyecto1\" value=\"\"></td>
                </tr>
                ";
        // line 751
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formNuevaEtapa"]) ? $context["formNuevaEtapa"] : $this->getContext($context, "formNuevaEtapa")), 'form_end');
        echo "
            </table>
        </form>
    </div>
</div>
<div id=\"popup5\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Agregar Hito</h4>
        <div class=\"close\"><a href=\"#\" id=\"close5\"><img src=\"";
        // line 759
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <form action=\"";
        // line 760
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gproyecto", array("id" => $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formHito"]) ? $context["formHito"] : $this->getContext($context, "formHito")), 'enctype');
        echo " novalidate>
            <table>
                ";
        // line 762
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formNuevaEtapa"]) ? $context["formNuevaEtapa"] : $this->getContext($context, "formNuevaEtapa")), 'form_start');
        echo "
                <tr>
                    <td>";
        // line 764
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHito"]) ? $context["formHito"] : $this->getContext($context, "formHito")), "nombre"), 'label');
        echo "</td>
                    <td>";
        // line 765
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHito"]) ? $context["formHito"] : $this->getContext($context, "formHito")), "nombre"), 'widget');
        echo "</td>
                    <td>";
        // line 766
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHito"]) ? $context["formHito"] : $this->getContext($context, "formHito")), "nombre"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td>Fecha:</td>
                    <td><input class=\"DatePicker\" name=\"fechaInicio\"></td> 
                </tr>
                <tr>
                    <td>";
        // line 773
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHito"]) ? $context["formHito"] : $this->getContext($context, "formHito")), "descripcion"), 'label');
        echo "</td>
                    <td>";
        // line 774
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHito"]) ? $context["formHito"] : $this->getContext($context, "formHito")), "descripcion"), 'widget');
        echo "</td>
                    <td>";
        // line 775
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHito"]) ? $context["formHito"] : $this->getContext($context, "formHito")), "descripcion"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td><input type=\"submit\" class=\"btnAdd\" name=\"salvarHito\" value=\"Agregar Hito\"></td>
                    <td><input type=\"hidden\" id=\"valorHito\" name=\"valorHito\" value=\"\"></td>
                </tr>
                ";
        // line 781
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formHito"]) ? $context["formHito"] : $this->getContext($context, "formHito")), 'form_end');
        echo "
            </table>
        </form>
    </div>
</div>
<div id=\"popup6\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Modificar Estado</h4>
        <div class=\"close\"><a href=\"#\" id=\"close6\"><img src=\"";
        // line 789
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <form action=\"";
        // line 790
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gproyecto", array("id" => $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEstadoEtapa"]) ? $context["formEstadoEtapa"] : $this->getContext($context, "formEstadoEtapa")), 'enctype');
        echo " novalidate>
            <table>
                ";
        // line 792
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEstadoEtapa"]) ? $context["formEstadoEtapa"] : $this->getContext($context, "formEstadoEtapa")), 'form_start');
        echo "
                <tr>
                    <td>";
        // line 794
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEstadoEtapa"]) ? $context["formEstadoEtapa"] : $this->getContext($context, "formEstadoEtapa")), "estado"), 'label');
        echo "</td>
                    <td>";
        // line 795
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEstadoEtapa"]) ? $context["formEstadoEtapa"] : $this->getContext($context, "formEstadoEtapa")), "estado"), 'widget', array("attr" => array("class" => "chosen-select largo-box")));
        echo "</td>
                    <td>";
        // line 796
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEstadoEtapa"]) ? $context["formEstadoEtapa"] : $this->getContext($context, "formEstadoEtapa")), "estado"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td><input type=\"submit\" class=\"btnAdd\" name=\"salvarEstadoEtapa\" value=\"Modificar Estado\"></td>
                    <td><input type=\"hidden\" id=\"valorEtapaAsignada\" name=\"valorEtapa\" value=\"\"></td>
                    <td><input type=\"hidden\" id=\"aaa\" name=\"aaa\" value=\"\"></td>
                </tr>
                ";
        // line 803
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEstadoEtapa"]) ? $context["formEstadoEtapa"] : $this->getContext($context, "formEstadoEtapa")), 'form_end');
        echo "
            </table>
        </form>
    </div>
</div>
<script>
    \$\$('.DatePicker').each( function(el){
    new DatePicker(el);
});
</script>
</div>
";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:gproyecto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1367 => 803,  1357 => 796,  1353 => 795,  1349 => 794,  1344 => 792,  1337 => 790,  1333 => 789,  1322 => 781,  1313 => 775,  1309 => 774,  1305 => 773,  1295 => 766,  1291 => 765,  1287 => 764,  1282 => 762,  1275 => 760,  1271 => 759,  1260 => 751,  1243 => 737,  1239 => 736,  1235 => 735,  1230 => 733,  1223 => 731,  1219 => 730,  1208 => 722,  1203 => 720,  1182 => 702,  1178 => 701,  1174 => 700,  1169 => 698,  1162 => 696,  1158 => 695,  1147 => 687,  1130 => 673,  1126 => 672,  1122 => 671,  1117 => 669,  1110 => 667,  1106 => 666,  1095 => 658,  1084 => 650,  1080 => 649,  1076 => 648,  1070 => 645,  1066 => 644,  1060 => 641,  1056 => 640,  1052 => 639,  1043 => 633,  1036 => 631,  1032 => 630,  1021 => 622,  1001 => 605,  994 => 601,  987 => 597,  981 => 594,  974 => 592,  970 => 591,  946 => 569,  938 => 567,  933 => 566,  929 => 565,  907 => 545,  898 => 542,  895 => 541,  891 => 540,  868 => 519,  860 => 517,  855 => 516,  851 => 515,  836 => 503,  827 => 497,  811 => 484,  802 => 478,  792 => 470,  783 => 467,  779 => 466,  775 => 465,  772 => 464,  768 => 463,  747 => 449,  745 => 448,  738 => 447,  734 => 446,  729 => 443,  727 => 442,  714 => 432,  709 => 429,  694 => 426,  690 => 425,  686 => 424,  682 => 423,  679 => 422,  675 => 421,  653 => 402,  648 => 399,  641 => 398,  632 => 396,  628 => 395,  624 => 394,  616 => 392,  612 => 391,  598 => 379,  586 => 373,  582 => 372,  574 => 371,  566 => 366,  562 => 365,  558 => 364,  547 => 355,  543 => 354,  527 => 341,  523 => 340,  519 => 338,  504 => 335,  500 => 334,  496 => 333,  492 => 332,  488 => 331,  485 => 330,  481 => 329,  464 => 315,  461 => 314,  447 => 306,  443 => 305,  439 => 304,  434 => 303,  426 => 301,  419 => 299,  415 => 298,  411 => 296,  404 => 294,  398 => 292,  396 => 291,  392 => 289,  388 => 288,  376 => 279,  369 => 275,  362 => 271,  358 => 269,  355 => 268,  352 => 267,  349 => 266,  346 => 265,  344 => 264,  332 => 255,  325 => 251,  318 => 247,  311 => 243,  304 => 239,  299 => 236,  292 => 233,  288 => 231,  286 => 230,  278 => 224,  276 => 223,  272 => 222,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  40 => 5,  36 => 4,  31 => 3,  28 => 2,);
    }
}
