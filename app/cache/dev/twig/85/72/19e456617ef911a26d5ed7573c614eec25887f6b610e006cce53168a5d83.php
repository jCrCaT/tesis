<?php

/* AppMediBundle:Default:glicitacion.html.twig */
class __TwigTemplate_857219e456617ef911a26d5ed7573c614eec25887f6b610e006cce53168a5d83 extends Twig_Template
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
<script lang=\"text/javascript\">
    \$(document).ready(function(){
         var cw = \$('#infoGeneral').height();
         \$('#infoProf').css('height', cw+'px');
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
            \$(\"#containerScroll\").mCustomScrollbar();
            \$(\"#containerScroll1\").mCustomScrollbar();
            \$(\"#containerScroll2\").mCustomScrollbar();
            \$(\"#containerScroll3\").mCustomScrollbar();
            \$(\"#containerScroll4\").mCustomScrollbar();
        });
    })(jQuery);
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
    });
   
    
</script>
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$('#addProfesional').click(function(){
        var id = \$(this).data(\"id\");
        \$(\"#valorLicitacionProf\").val( id );
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
         var cw = \$('#infoGeneral').height();
         \$('#infoGeneral').css('height', cw+'px');
         \$('#infoProf').css('height', cw+'px');
         \$('#infoFin').css('height', cw+'px');
         \$('#infoEtapa').css('height', cw+'px');
         \$('#infoAdic').css('height', cw+'px');
         \$('#infoExep').css('height', cw+'px');
         \$('#infoHitos').css('height', cw+'px');
    });
   
    
</script>
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$('#addExLic').click(function(){
        var id = \$(this).data(\"id\");
        \$(\"#valorLicitacionEx\").val( id );
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
  \$('#addExReq').click(function(){
        var id = \$(this).data(\"id\");
        \$(\"#valorRequerimientoEx\").val( id );
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
  \$('#changeStatus').click(function(){
        var licitacion = \$(this).data(\"proyecto\");
        \$(\"#valorLicFin\").val( licitacion );
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
<script type=\"text/javascript\">
\$(document).ready(function(){
    \$(\".eRequerimiento\").click(function(e){
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
    \$(\".hitoEstado\").click(function(e){
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
<script lang=\"text/javascript\">
\$(document).ready(function(){
    \$(\".chosen-select\").chosen();
});
</script>
<div id=\"contenedorGraficos\">
    ";
        // line 207
        $context["largo"] = (twig_length_filter($this->env, $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "factTable")) - 1);
        // line 208
        echo "    <h4 class=\"tituloDash\">Dashboard de Licitación ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "nombre"), "html", null, true);
        echo " <input type=\"button\" id=\"changeStatus\" class=\"changeStatus pull-right\" data-proyecto=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "id"), "html", null, true);
        echo "\" value=\"Modificar Estado\"/></h4>
    <div id=\"infoLicitacion\">Esta licitación se encuentra ";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "estado"), "estado"), "html", null, true);
        echo "</div>
    <div  id=\"infoGeneral\" class=\"dashboardColumn col-xs-12 col-sm-12 col-md-6 col-lg-4 infoGeneral\">
        <h3>INFORMACIÓN GENERAL</h3>
        <canvas class=\"avanceGraficoProyecto\" id=\"myChart\" width=\"180\" height=\"180\"></canvas>
        <table>
            ";
        // line 214
        if (($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "avance") == 0)) {
            // line 215
            echo "                ";
            $context["avance"] = 0;
            // line 216
            echo "                    ";
        } else {
            // line 217
            echo "            ";
            $context["avance"] = (($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "avance") * 100) / $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "horasProgramadas"));
            // line 218
            echo "            ";
        }
        // line 219
        echo "            <tr>
                <td class=\"first\">Avance:</td>
                ";
        // line 221
        if ((($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "avance") == 0) || ($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "horasProgramadas") == 0))) {
            // line 222
            echo "                    <td class=\"second\">";
            echo twig_escape_filter($this->env, twig_round((isset($context["avance"]) ? $context["avance"] : $this->getContext($context, "avance")), 2, "floor"), "html", null, true);
            echo "%</td>
                    ";
        } else {
            // line 224
            echo "                    <td class=\"second\">";
            echo twig_escape_filter($this->env, twig_round((isset($context["avance"]) ? $context["avance"] : $this->getContext($context, "avance")), 2, "floor"), "html", null, true);
            echo "%</td>
            ";
        }
        // line 226
        echo "            </tr>
            <tr>
                <td class=\"first\">Fecha de Inicio:</td>
                <td class=\"second\">";
        // line 229
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "fechaInicio"), "d-m-Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td class=\"first\">Fecha de Término</td>
                <td class=\"second\">";
        // line 233
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "fechaTermino"), "d-m-Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td class=\"first\">Horas Programadas:</td>
                <td class=\"second\">";
        // line 237
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "horasProgramadas"), "html", null, true);
        echo " horas</td>
            </tr>
            <tr>
                <td class=\"first\">Horas Avanzadas:</td>
                <td class=\"second\">";
        // line 241
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "avance"), "html", null, true);
        echo " horas</td>
            </tr>
            <tr>
                <td class=\"first\">Horas Restantes:</td>
                <td class=\"second\">";
        // line 245
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "horasProgramadas") - $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "avance")), "html", null, true);
        echo " horas</td>
            </tr>
        </table>
    </div>
    <div class=\"dashboardColumn col-xs-12 col-sm-12 col-md-6 col-lg-4 infoFin\">
        <h3>FINANZAS</h3>
        <canvas class=\"avanceGraficoProyecto\" id=\"myChartFin\" width=\"180\" height=\"180\"></canvas>
        <table>
            ";
        // line 253
        if ((($this->getAttribute($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "finanzas"), "valorFecha", array(), "array") == 0) || ($this->getAttribute($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "finanzas"), "valorPresupuestado", array(), "array") == 0))) {
            // line 254
            echo "                ";
            $context["avanceFinanza"] = 0;
            // line 255
            echo "                ";
        } else {
            // line 256
            echo "                ";
            $context["avanceFinanza"] = (($this->getAttribute($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "finanzas"), "valorFecha", array(), "array") * 100) / $this->getAttribute($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "finanzas"), "valorPresupuestado", array(), "array"));
            // line 257
            echo "            ";
        }
        // line 258
        echo "            <tr>
                <td class=\"first\">Avance:</td>
                <td class=\"second\">";
        // line 260
        echo twig_escape_filter($this->env, twig_round((isset($context["avanceFinanza"]) ? $context["avanceFinanza"] : $this->getContext($context, "avanceFinanza")), 2, "floor"), "html", null, true);
        echo "%</td>
            </tr>
            <tr>
                <td class=\"first\">Valor actual:</td>
                ";
        // line 264
        if (($this->getAttribute($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "finanzas"), "valorFecha", array(), "array") == 0)) {
            // line 265
            echo "                <td class=\"second\">0 U.F</td>
                ";
        } else {
            // line 267
            echo "                <td class=\"second\">";
            echo twig_escape_filter($this->env, twig_round($this->getAttribute($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "finanzas"), "valorFecha", array(), "array"), 2, "floor"), "html", null, true);
            echo " U.F</td>
                ";
        }
        // line 269
        echo "            </tr>
            <tr>
                <td class=\"first\">Valor Presupuestado:</td>
                <td class=\"second\">";
        // line 272
        echo twig_escape_filter($this->env, twig_round($this->getAttribute($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "finanzas"), "valorPresupuestado", array(), "array"), 2, "floor"), "html", null, true);
        echo " U.F</td>
            </tr>
        </table>
        
    </div>
    <div id=\"infoProf\" class=\"dashboardColumn col-xs-12 col-sm-12 col-md-6 col-lg-4 infoProf\">
        <h3>PROFESIONALES ASIGNADOS</h3>
        <div id=\"containerScroll\">
        ";
        // line 280
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "asignacion"));
        foreach ($context['_seq'] as $context["_key"] => $context["asignacion"]) {
            // line 281
            echo "        <div class=\"profAsignado\">
            <div>
                ";
            // line 283
            if (($this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "imagenPerfil") == null)) {
                // line 284
                echo "                <div class=\"dashImgPerfil\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/male.png"), "html", null, true);
                echo "\" class=\"img-circle\" /></div>
                ";
            } else {
                // line 286
                echo "                <div class=\"dashImgPerfil\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("documentos/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "imagenPerfil"), "path"), "html", null, true);
                echo "\"></div>
                ";
            }
            // line 288
            echo "                <div class=\"dashInfoProf\">
                    <ul>
                        ";
            // line 290
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "papellido")) >= 5)) {
                echo " 
                        <li>";
                // line 291
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "pnombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "papellido"), 0, 3), "html", null, true);
                echo "...</li>
                        ";
            } else {
                // line 293
                echo "                         <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "pnombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "papellido"), "html", null, true);
                echo "</li>
                        ";
            }
            // line 295
            echo "                        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "horas"), "html", null, true);
            echo " horas</li>
                        <li>";
            // line 296
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "fechaInicio"), "d-m-Y"), "html", null, true);
            echo "</li>
                        <li>";
            // line 297
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "fechaTermino"), "d-m-Y"), "html", null, true);
            echo "</li>
                    </ul>
     
                </div>
            </div>  
        </div>
                
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asignacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 305
        echo "        </div>
        <div><input type=\"button\" id=\"addProfesional\" class=\"btnAdd center-block\" name=\"agregarProfesional\" value=\"Añadir Profesional\" data-id=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "id"), "html", null, true);
        echo "\"/></div>
    </div>
    <div class=\"dashboardColumn col-xs-12 col-sm-12 col-md-6 col-lg-6 infoEtapa\">
        <h3>REQUERIMIENTOS</h3>
        <table>
            <tr>
                <td class=\"first\">Requerimiento</td>
                <td class=\"first\">Horas</td>
                <td class=\"first\">Profesional</td>
                <td class=\"first\">Horas</td>
                <td class=\"first\">Estado</td>
            </tr>
        ";
        // line 318
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "dependencia"));
        foreach ($context['_seq'] as $context["_key"] => $context["requerimiento"]) {
            // line 319
            echo "            <tr>
                <td class=\"second\"><p>";
            // line 320
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requerimiento"]) ? $context["requerimiento"] : $this->getContext($context, "requerimiento")), "nombre"), "html", null, true);
            echo "</p></td>
                <td class=\"second\">";
            // line 321
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requerimiento"]) ? $context["requerimiento"] : $this->getContext($context, "requerimiento")), "horas"), "html", null, true);
            echo "</td>
                <td class=\"second\">";
            // line 322
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["requerimiento"]) ? $context["requerimiento"] : $this->getContext($context, "requerimiento")), "profesional"), "pnombre"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["requerimiento"]) ? $context["requerimiento"] : $this->getContext($context, "requerimiento")), "profesional"), "snombre"), "html", null, true);
            echo "</td>
                <td class=\"second\">";
            // line 323
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requerimiento"]) ? $context["requerimiento"] : $this->getContext($context, "requerimiento")), "avanceHoras"), "html", null, true);
            echo "</td>
                <td class=\"second\"><a href=\"#\" data-etapa=\"";
            // line 324
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requerimiento"]) ? $context["requerimiento"] : $this->getContext($context, "requerimiento")), "id"), "html", null, true);
            echo "\" class=\"eRequerimiento\">";
            if ((null === $this->getAttribute((isset($context["requerimiento"]) ? $context["requerimiento"] : $this->getContext($context, "requerimiento")), "estado"))) {
                echo "estado";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["requerimiento"]) ? $context["requerimiento"] : $this->getContext($context, "requerimiento")), "estado"), "estado"), "html", null, true);
            }
            echo "</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requerimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        echo "        </table> 
    </div>
    <div class=\"dashboardColumn col-xs-12 col-sm-12 col-md-6 col-lg-6 infoExep\">
        <h3>EXEPCIONES</h3>
        <ul class=\"botones nav nav-tabs\">
            <li><a href=\"#licitacion\" data-toggle=\"tab\">Licitacion</a></li>
            <li><a href=\"#requerimiento\" data-toggle=\"tab\">Req.</a></li>   
        </ul>
        <div class=\"tab-content\">
            <div id=\"licitacion\" class=\"tab-pane active\">
                <div id=\"containerScroll1\">
                ";
        // line 338
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "excepcionesPlazo"));
        foreach ($context['_seq'] as $context["_key"] => $context["excepcion"]) {
            // line 339
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
            // line 348
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["excepcion"]) ? $context["excepcion"] : $this->getContext($context, "excepcion")), "fechaAnterior"), "d-m-Y"), "html", null, true);
            echo "</td>
                                <td class=\"second\">";
            // line 349
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["excepcion"]) ? $context["excepcion"] : $this->getContext($context, "excepcion")), "fechaTermino"), "d-m-Y"), "html", null, true);
            echo "</td>
                                <td class=\"second\">";
            // line 350
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["excepcion"]) ? $context["excepcion"] : $this->getContext($context, "excepcion")), "fechaIngreso"), "d-m-Y"), "html", null, true);
            echo "</td>
                            </tr>
                        </table>
                        <div>
                            <ul>
                                <li>Las horas han ";
            // line 355
            if (($this->getAttribute((isset($context["excepcion"]) ? $context["excepcion"] : $this->getContext($context, "excepcion")), "accion") == "a")) {
                echo " <p style=\"color: #02C7DC\">aumentado</p> ";
            } else {
                echo " <p style=\"color:#f9012a\">disminuido</p>";
            }
            echo " </li>
                                <li>";
            // line 356
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["excepcion"]) ? $context["excepcion"] : $this->getContext($context, "excepcion")), "descripcion"), "html", null, true);
            echo "</li>
                                <li>";
            // line 357
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
        // line 363
        echo "               
            </div>
                <input type=\"button\" name=\"addExLic\" id=\"addExLic\" value=\"Añadir Excepción\" class=\"btnAdd center-block\" data-id=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "id"), "html", null, true);
        echo "\">
            </div>
            <div id=\"requerimiento\" class=\"tab-pane\">
                <div id=\"containerScroll3\">
                <table>
                    <tr>
                        <td class=\"first\">Req.</td>
                        <td class=\"first\">Fecha de Inicio</td>
                        <td class=\"first\">Fecha de Termino</td>
                    </tr>
                ";
        // line 375
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "dependencia"));
        foreach ($context['_seq'] as $context["_key"] => $context["requerimiento"]) {
            // line 376
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["requerimiento"]) ? $context["requerimiento"] : $this->getContext($context, "requerimiento")), "excepcionesRequerimiento"));
            foreach ($context['_seq'] as $context["_key"] => $context["excepciones"]) {
                echo "  
                        <tr>
                            <td class=\"second\">";
                // line 378
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requerimiento"]) ? $context["requerimiento"] : $this->getContext($context, "requerimiento")), "nombre"), "html", null, true);
                echo "</td>  
                            <td class=\"second\">";
                // line 379
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["excepciones"]) ? $context["excepciones"] : $this->getContext($context, "excepciones")), "fechaInicio"), "d-m-Y"), "html", null, true);
                echo "</td>
                            <td class=\"second\">";
                // line 380
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["excepciones"]) ? $context["excepciones"] : $this->getContext($context, "excepciones")), "fechaTermino"), "d-m-Y"), "html", null, true);
                echo "</td> 
                        </tr>                       
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['excepciones'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 382
            echo " 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requerimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 383
        echo " 
                </table> 
                </div>  
                <input type=\"button\" name=\"addExReq\" id=\"addExReq\" value=\"Añadir Excepción\" class=\"btnAdd center-block\" data-id=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "id"), "html", null, true);
        echo "\">
            </div>
            <div id=\"profesionales\" class=\"tab-pane\">
                3
            </div>
        </div>
    </div> 
    <div id=\"infohitos\" class=\"dashboardColumn col-xs-12 col-sm-12 col-md-6 col-lg-6 infoHitos\">
                <h3>HITOS</h3>
                <div id=\"containerScroll4\">
                    <table>
                        <tr>
                            <td class=\"first\">Nombre</td>
                            <td class=\"first\">Fecha</td>
                            <td class=\"first\">Descripción</td>
                            <td class=\"first\">Estado</td>
                        </tr>
                        ";
        // line 403
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "hito"));
        foreach ($context['_seq'] as $context["_key"] => $context["hito"]) {
            // line 404
            echo "                            <tr>
                                <td class=\"third\">";
            // line 405
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hito"]) ? $context["hito"] : $this->getContext($context, "hito")), "nombre"), "html", null, true);
            echo "</td>
                                <td class=\"third\">";
            // line 406
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["hito"]) ? $context["hito"] : $this->getContext($context, "hito")), "fecha"), "d-m-Y"), "html", null, true);
            echo "</td>
                                <td class=\"third\">";
            // line 407
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hito"]) ? $context["hito"] : $this->getContext($context, "hito")), "descripcion"), "html", null, true);
            echo "</td>  
                                <td class=\"third\"><a href=\"\" class=\"hitoEstado\" data-hito=\"";
            // line 408
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
        // line 411
        echo "                    </table>
                </div> 
        <input type=\"button\" name=\"addHito\" id=\"addHito\" data-proyecto=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "id"), "html", null, true);
        echo "\" value=\"Añadir Hito\" class=\"btnAdd center-block\">
    </div>   
</div>
<script language=\"javascript\">
    itemsGraph = [];
    porcentaje = [];
    ";
        // line 419
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "factTable"));
        foreach ($context['_seq'] as $context["_key"] => $context["tiempo"]) {
            echo "   
            porcentaje.push(";
            // line 420
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tiempo"]) ? $context["tiempo"] : $this->getContext($context, "tiempo")), "porcentajeAvance"), "html", null, true);
            echo ");
            itemsGraph.push(\"";
            // line 421
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tiempo"]) ? $context["tiempo"] : $this->getContext($context, "tiempo")), "fechaId"), "fecha"), "d-m-Y"), "html", null, true);
            echo "\");   
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tiempo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 423
        echo "    var numero = 1;
    var ctx = document.getElementById(\"casa\").getContext(\"2d\");
    var data = {
    labels: itemsGraph,
    datasets: [
        {
            label: \"My First dataset\",
            fillColor: \"rgba(220,220,220,0.2)\",
            strokeColor: \"rgba(220,220,220,1)\",
            pointColor: \"rgba(220,220,220,1)\",
            pointStrokeColor: \"#fff\",
            pointHighlightFill: \"#fff\",
            pointHighlightStroke: \"rgba(220,220,220,1)\",
            data: porcentaje
        }
    ]
};

var myLineChart = new Chart(ctx).Line(data);
</script>
<script language=\"javascript\">
           
                var ctx = document.getElementById(\"myChart\").getContext(\"2d\");
                var data = [
                {
                    value: ";
        // line 448
        echo twig_escape_filter($this->env, (isset($context["avance"]) ? $context["avance"] : $this->getContext($context, "avance")), "html", null, true);
        echo ",
                    color:\"#363569\",
                    highlight: \"#363569\",
                    label: \"Avance\"
                },
                {
                    value: 100 - ";
        // line 454
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "avance"), "html", null, true);
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
        // line 467
        echo twig_escape_filter($this->env, (isset($context["avanceFinanza"]) ? $context["avanceFinanza"] : $this->getContext($context, "avanceFinanza")), "html", null, true);
        echo ",
                    color:\"#363569\",
                    highlight: \"#363569\",
                    label: \"Avance\"
                },
                {
                    value: 100 - ";
        // line 473
        echo twig_escape_filter($this->env, (isset($context["avanceFinanza"]) ? $context["avanceFinanza"] : $this->getContext($context, "avanceFinanza")), "html", null, true);
        echo ",
                    color: \"#AFAEFA\",
                    highlight: \"#AFAEFA\",
                    label: \"Restante\"
                }
                ];
Chart.defaults.global.animation = false;
var myPieChart = new Chart(ctx).Pie(data);
</script>
<div id=\"popup\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Agregar Profesional a Licitación</h4>
        <div class=\"close\"><a href=\"#\" id=\"close\"><img src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <form action=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("glicitacion", array("id" => $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "id"))), "html", null, true);
        echo " \" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), 'enctype');
        echo " novalidate>
                <table>
                    ";
        // line 488
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), 'form_start');
        echo "
                    <tr>
                        <td class=\"etiqueta\"><font style=\"font-weight: bold;\">Profesional a asignar:</font></td>
                        <td>";
        // line 491
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), "profesional"), 'widget', array("attr" => array("class" => "largo-box chosen-select")));
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"etiqueta\"><font style=\"font-weight: bold;\">Horas asignadas:</font></td>
                        <td>";
        // line 495
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), "horas"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"etiqueta\"><font style=\"font-weight: bold;\">Valor de la hora de profesional:</font></td>
                        <td>";
        // line 499
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
                            <input type=\"hidden\" id=\"valorLicitacionProf\" name=\"valorProyecto\" value=\"\">
                        </td>
                    </tr>
                    ";
        // line 516
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), 'form_end');
        echo "
                </table>
           </form>
    </div>
</div>
<div id=\"popup1\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Agregar Excepción a Licitacion</h4>
        <div class=\"close\"><a href=\"#\" id=\"close1\"><img src=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <form action=\"";
        // line 525
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("glicitacion", array("id" => $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formExcepcionPlazo"]) ? $context["formExcepcionPlazo"] : $this->getContext($context, "formExcepcionPlazo")), 'enctype');
        echo " novalidate>
            <table>
                ";
        // line 527
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formExcepcionPlazo"]) ? $context["formExcepcionPlazo"] : $this->getContext($context, "formExcepcionPlazo")), 'form_start');
        echo "
                <tr>
                    <td>Nueva Fecha de término</td>
                    <td><input class=\"DatePicker\" name=\"fechaExLic\"></td>
                </tr>
                <tr>
                    <td>";
        // line 533
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcepcionPlazo"]) ? $context["formExcepcionPlazo"] : $this->getContext($context, "formExcepcionPlazo")), "horas"), 'label');
        echo "</td>
                    <td>";
        // line 534
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcepcionPlazo"]) ? $context["formExcepcionPlazo"] : $this->getContext($context, "formExcepcionPlazo")), "horas"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                    <td>";
        // line 535
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcepcionPlazo"]) ? $context["formExcepcionPlazo"] : $this->getContext($context, "formExcepcionPlazo")), "horas"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 538
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcepcionPlazo"]) ? $context["formExcepcionPlazo"] : $this->getContext($context, "formExcepcionPlazo")), "accion"), 'label');
        echo "</td>
                    <td>";
        // line 539
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcepcionPlazo"]) ? $context["formExcepcionPlazo"] : $this->getContext($context, "formExcepcionPlazo")), "accion"), 'widget', array("attr" => array("class" => "chosen-select largo-box")));
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 542
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcepcionPlazo"]) ? $context["formExcepcionPlazo"] : $this->getContext($context, "formExcepcionPlazo")), "descripcion"), 'label');
        echo "</td>
                    <td>";
        // line 543
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcepcionPlazo"]) ? $context["formExcepcionPlazo"] : $this->getContext($context, "formExcepcionPlazo")), "descripcion"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                    <td>";
        // line 544
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcepcionPlazo"]) ? $context["formExcepcionPlazo"] : $this->getContext($context, "formExcepcionPlazo")), "descripcion"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td><input type=\"submit\" class=\"btnAdd\" name=\"salvarExcepcionP\" value=\"Agregar Excepción\"></td>
                </tr>
                <tr>
                    <td><input type=\"hidden\" id=\"valorLicitacionEx\" name=\"valorLicitacionEx\" value=\"\"></td>
                </tr>
                ";
        // line 552
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formExcepcionPlazo"]) ? $context["formExcepcionPlazo"] : $this->getContext($context, "formExcepcionPlazo")), 'form_end');
        echo "
            </table>
        </form>
    </div>
</div>
<div id=\"popup2\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Agregar Excepción a Requerimiento</h4>
        <div class=\"close\"><a href=\"#\" id=\"close2\"><img src=\"";
        // line 560
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <form action=\"";
        // line 561
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("glicitacion", array("id" => $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formExcepcionReq"]) ? $context["formExcepcionReq"] : $this->getContext($context, "formExcepcionReq")), 'enctype');
        echo " novalidate>
            <table>
                ";
        // line 563
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formExcepcionReq"]) ? $context["formExcepcionReq"] : $this->getContext($context, "formExcepcionReq")), 'form_start');
        echo "
                <tr>
                    <td>";
        // line 565
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcepcionReq"]) ? $context["formExcepcionReq"] : $this->getContext($context, "formExcepcionReq")), "requerimiento"), 'label');
        echo "</td>
                    <td>";
        // line 566
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcepcionReq"]) ? $context["formExcepcionReq"] : $this->getContext($context, "formExcepcionReq")), "requerimiento"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                    <td>";
        // line 567
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcepcionReq"]) ? $context["formExcepcionReq"] : $this->getContext($context, "formExcepcionReq")), "requerimiento"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td>Nueva Fecha de inicio</td>
                    <td><input class=\"DatePicker\" name=\"fechaInicioReq\"></td>
                </tr>
                <tr>
                    <td>Nueva Fecha de termino</td>
                    <td><input class=\"DatePicker\" name=\"fechaTerminoReq\"></td>
                </tr>
                <tr>
                    <td>";
        // line 578
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcepcionReq"]) ? $context["formExcepcionReq"] : $this->getContext($context, "formExcepcionReq")), "horas"), 'label');
        echo "</td>
                    <td>";
        // line 579
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcepcionReq"]) ? $context["formExcepcionReq"] : $this->getContext($context, "formExcepcionReq")), "horas"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                    <td>";
        // line 580
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcepcionReq"]) ? $context["formExcepcionReq"] : $this->getContext($context, "formExcepcionReq")), "horas"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 583
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcepcionReq"]) ? $context["formExcepcionReq"] : $this->getContext($context, "formExcepcionReq")), "accion"), 'label');
        echo "</td>
                    <td>";
        // line 584
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcepcionReq"]) ? $context["formExcepcionReq"] : $this->getContext($context, "formExcepcionReq")), "accion"), 'widget', array("attr" => array("class" => "chosen-select largo-box")));
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 587
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcepcionReq"]) ? $context["formExcepcionReq"] : $this->getContext($context, "formExcepcionReq")), "descripcion"), 'label');
        echo "</td>
                    <td>";
        // line 588
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcepcionReq"]) ? $context["formExcepcionReq"] : $this->getContext($context, "formExcepcionReq")), "descripcion"), 'widget', array("attr" => array("class" => "chosen-select largo-box")));
        echo "</td>
                    <td>";
        // line 589
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcepcionReq"]) ? $context["formExcepcionReq"] : $this->getContext($context, "formExcepcionReq")), "descripcion"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td><input type=\"submit\" class=\"btnAdd\" name=\"salvarExcepcionR\" value=\"Agregar Excepción\"></td>
                </tr>
                <tr>
                    <td><input type=\"hidden\" id=\"valorRequerimientoEx\" name=\"valorRequerimientoEx\" value=\"\"></td>
                </tr>
                ";
        // line 597
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formExcepcionReq"]) ? $context["formExcepcionReq"] : $this->getContext($context, "formExcepcionReq")), 'form_end');
        echo "
            </table>
        </form>
    </div>
</div>
<div id=\"popup5\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Agregar Hito</h4>
        <div class=\"close\"><a href=\"#\" id=\"close5\"><img src=\"";
        // line 605
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <form action=\"";
        // line 606
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("glicitacion", array("id" => $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formHito"]) ? $context["formHito"] : $this->getContext($context, "formHito")), 'enctype');
        echo " novalidate>
            <table>
                ";
        // line 608
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formHito"]) ? $context["formHito"] : $this->getContext($context, "formHito")), 'form_start');
        echo "
                <tr>
                    <td>";
        // line 610
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHito"]) ? $context["formHito"] : $this->getContext($context, "formHito")), "nombre"), 'label');
        echo "</td>
                    <td>";
        // line 611
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHito"]) ? $context["formHito"] : $this->getContext($context, "formHito")), "nombre"), 'widget');
        echo "</td>
                    <td>";
        // line 612
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHito"]) ? $context["formHito"] : $this->getContext($context, "formHito")), "nombre"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td>Fecha:</td>
                    <td><input class=\"DatePicker\" name=\"fechaInicio\"></td> 
                </tr>
                <tr>
                    <td>";
        // line 619
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHito"]) ? $context["formHito"] : $this->getContext($context, "formHito")), "descripcion"), 'label');
        echo "</td>
                    <td>";
        // line 620
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHito"]) ? $context["formHito"] : $this->getContext($context, "formHito")), "descripcion"), 'widget');
        echo "</td>
                    <td>";
        // line 621
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHito"]) ? $context["formHito"] : $this->getContext($context, "formHito")), "descripcion"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td><input type=\"submit\" class=\"btnAdd\" name=\"salvarHito\" value=\"Agregar Hito\"></td>
                    <td><input type=\"hidden\" id=\"valorHito\" name=\"valorHito\" value=\"\"></td>
                </tr>
                ";
        // line 627
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formHito"]) ? $context["formHito"] : $this->getContext($context, "formHito")), 'form_end');
        echo "
            </table>
        </form>
    </div>
</div>
<div id=\"popup3\" style=\"display: none;\">
    <div class=\"content-popup2\">
        <h4 class=\"modalh4\">Actualizar estado de Licitación</h4>
        <div class=\"close\"><a href=\"#\" id=\"close3\"><img src=\"";
        // line 635
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
            <form action=\"";
        // line 636
        echo $this->env->getExtension('routing')->getPath("licitacion");
        echo " \" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEstadoLic"]) ? $context["formEstadoLic"] : $this->getContext($context, "formEstadoLic")), 'enctype');
        echo " novalidate>
                <table>
                    ";
        // line 638
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEstadoLic"]) ? $context["formEstadoLic"] : $this->getContext($context, "formEstadoLic")), 'form_start');
        echo "
                    <tr>
                        <td class=\"etiqueta\"><font style=\"font-weight: bold;\">Estado a asignar:</font></td>
                        <td>";
        // line 641
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEstadoLic"]) ? $context["formEstadoLic"] : $this->getContext($context, "formEstadoLic")), "estado"), 'widget', array("attr" => array("class" => "largo-box chosen-select")));
        echo "</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type=\"submit\" class=\"btnAdd\" name=\"actLicEstado\" value=\"Actualizar\"/>
                            <input type=\"text\" id=\"valorLicFin\" name=\"valorLicFin\" value=\"\"/>
                        </td>
                    </tr>
                    ";
        // line 650
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEstadoLic"]) ? $context["formEstadoLic"] : $this->getContext($context, "formEstadoLic")), 'form_end');
        echo "
                </table>
           </form>
    </div>
</div>
<div id=\"popup6\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Modificar Estado</h4>
        <div class=\"close\"><a href=\"#\" id=\"close6\"><img src=\"";
        // line 658
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <form action=\"";
        // line 659
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("glicitacion", array("id" => $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEstado"]) ? $context["formEstado"] : $this->getContext($context, "formEstado")), 'enctype');
        echo " novalidate>
            <table>
                ";
        // line 661
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEstado"]) ? $context["formEstado"] : $this->getContext($context, "formEstado")), 'form_start');
        echo "
                <tr>
                    <td>";
        // line 663
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEstado"]) ? $context["formEstado"] : $this->getContext($context, "formEstado")), "estado"), 'label');
        echo "</td>
                    <td>";
        // line 664
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEstado"]) ? $context["formEstado"] : $this->getContext($context, "formEstado")), "estado"), 'widget', array("attr" => array("class" => "chosen-select largo-box")));
        echo "</td>
                    <td>";
        // line 665
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEstado"]) ? $context["formEstado"] : $this->getContext($context, "formEstado")), "estado"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td><input type=\"submit\" class=\"btnAdd\" name=\"salvarEstadoEtapa\" value=\"Modificar Estado\"></td>
                    <td><input type=\"hidden\" id=\"valorEtapaAsignada\" name=\"valorEtapa\" value=\"\"></td>
                    <td><input type=\"hidden\" id=\"aaa\" name=\"aaa\" value=\"\"></td>
                </tr>
                ";
        // line 672
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEstado"]) ? $context["formEstado"] : $this->getContext($context, "formEstado")), 'form_end');
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


";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:glicitacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1181 => 672,  1171 => 665,  1167 => 664,  1163 => 663,  1158 => 661,  1151 => 659,  1147 => 658,  1136 => 650,  1124 => 641,  1118 => 638,  1111 => 636,  1107 => 635,  1096 => 627,  1087 => 621,  1083 => 620,  1079 => 619,  1069 => 612,  1065 => 611,  1061 => 610,  1056 => 608,  1049 => 606,  1045 => 605,  1034 => 597,  1023 => 589,  1019 => 588,  1015 => 587,  1009 => 584,  1005 => 583,  999 => 580,  995 => 579,  991 => 578,  977 => 567,  973 => 566,  969 => 565,  964 => 563,  957 => 561,  953 => 560,  942 => 552,  931 => 544,  927 => 543,  923 => 542,  917 => 539,  913 => 538,  907 => 535,  903 => 534,  899 => 533,  890 => 527,  883 => 525,  879 => 524,  868 => 516,  848 => 499,  841 => 495,  834 => 491,  828 => 488,  821 => 486,  817 => 485,  802 => 473,  793 => 467,  777 => 454,  768 => 448,  741 => 423,  733 => 421,  729 => 420,  723 => 419,  714 => 413,  710 => 411,  695 => 408,  691 => 407,  687 => 406,  683 => 405,  680 => 404,  676 => 403,  656 => 386,  651 => 383,  644 => 382,  635 => 380,  631 => 379,  627 => 378,  619 => 376,  615 => 375,  602 => 365,  598 => 363,  586 => 357,  582 => 356,  574 => 355,  566 => 350,  562 => 349,  558 => 348,  547 => 339,  543 => 338,  530 => 327,  515 => 324,  511 => 323,  505 => 322,  501 => 321,  497 => 320,  494 => 319,  490 => 318,  475 => 306,  472 => 305,  458 => 297,  454 => 296,  449 => 295,  441 => 293,  434 => 291,  430 => 290,  426 => 288,  419 => 286,  413 => 284,  411 => 283,  407 => 281,  403 => 280,  392 => 272,  387 => 269,  381 => 267,  377 => 265,  375 => 264,  368 => 260,  364 => 258,  361 => 257,  358 => 256,  355 => 255,  352 => 254,  350 => 253,  339 => 245,  332 => 241,  325 => 237,  318 => 233,  311 => 229,  306 => 226,  300 => 224,  294 => 222,  292 => 221,  288 => 219,  285 => 218,  282 => 217,  279 => 216,  276 => 215,  274 => 214,  266 => 209,  259 => 208,  257 => 207,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  40 => 5,  36 => 4,  31 => 3,  28 => 2,);
    }
}
