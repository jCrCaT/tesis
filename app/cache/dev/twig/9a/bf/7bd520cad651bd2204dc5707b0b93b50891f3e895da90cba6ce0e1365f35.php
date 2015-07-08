<?php

/* AppMediBundle:Default:glicitacion.html_1.twig */
class __TwigTemplate_9abf7bd520cad651bd2204dc5707b0b93b50891f3e895da90cba6ce0e1365f35 extends Twig_Template
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
<script type=\"text/javascript\">
    \$(document).ready(function(){
         var cw = \$('#infoGeneral').height();
         \$('#infoProf').css('height', cw+'px');
    });  
</script>
<script type=\"text/javascript\">
    (function(\$){
        \$(window).load(function(){
            \$(\"#containerScroll\").mCustomScrollbar();
        });
    })(jQuery);
</script>
<div id=\"contenedorGraficos\">
    ";
        // line 24
        $context["largo"] = (twig_length_filter($this->env, $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "factTable")) - 1);
        // line 25
        echo "    <h4 class=\"tituloDash\">Dashboard de Licitación ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "nombre"), "html", null, true);
        echo "</h4>
    <div  id=\"infoGeneral\" class=\" dashboardColumn col-xs-12 col-sm-12 col-md-6 col-lg-4 infoGeneral\">
        <h3>INFORMACIÓN GENERAL</h3>
        <canvas class=\"avanceGraficoProyecto\" id=\"myChart\" width=\"180\" height=\"180\"></canvas>
        <table>
            <tr>
                <td class=\"first\">Avance:</td>
                <td class=\"second\">";
        // line 32
        echo twig_escape_filter($this->env, twig_round($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "factTable"), (isset($context["largo"]) ? $context["largo"] : $this->getContext($context, "largo")), array(), "array"), "porcentajeAvance"), 2, "floor"), "html", null, true);
        echo "%</td>
            </tr>
            <tr>
                <td class=\"first\">Fecha de Inicio:</td>
                <td class=\"second\">";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "fechaInicio"), "d-m-Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td class=\"first\">Fecha de Término</td>
                <td class=\"second\">";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "fechaTermino"), "d-m-Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td class=\"first\">Horas Programadas:</td>
                <td class=\"second\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "horasProgramadas"), "html", null, true);
        echo " horas</td>
            </tr>
            <tr>
                <td class=\"first\">Horas Avanzadas:</td>
                <td class=\"second\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "factTable"), (isset($context["largo"]) ? $context["largo"] : $this->getContext($context, "largo")), array(), "array"), "horasAvanzadas"), "html", null, true);
        echo " horas</td>
            </tr>
            <tr>
                <td class=\"first\">Horas Restantes:</td>
                <td class=\"second\">";
        // line 52
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "horasProgramadas") - $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "factTable"), (isset($context["largo"]) ? $context["largo"] : $this->getContext($context, "largo")), array(), "array"), "horasAvanzadas")), "html", null, true);
        echo " horas</td>
            </tr>
        </table>
    </div>
    <div class=\"dashboardColumn col-xs-12 col-sm-12 col-md-6 col-lg-4 infoFin\">
        <h3>FINANZAS</h3>
        
    </div>
    <div id=\"infoProf\" class=\"dashboardColumn col-xs-12 col-sm-12 col-md-6 col-lg-4 infoProf\">
        <h3>PROFESIONALES ASIGNADOS</h3>
        <div id=\"containerScroll\">
        ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "asignacion"));
        foreach ($context['_seq'] as $context["_key"] => $context["asignacion"]) {
            // line 64
            echo "        <div class=\"profAsignado\">
            <div>
                ";
            // line 66
            if (($this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "imagenPerfil") == null)) {
                // line 67
                echo "                <div class=\"dashImgPerfil\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/male.png"), "html", null, true);
                echo "\" class=\"img-circle\" /></div>
                ";
            } else {
                // line 69
                echo "                <div class=\"dashImgPerfil\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("documentos/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "imagenPerfil"), "path"), "html", null, true);
                echo "\"></div>
                ";
            }
            // line 71
            echo "                <div class=\"dashInfoProf\">
                    <ul>
                        ";
            // line 73
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "papellido")) >= 5)) {
                echo " 
                        <li>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "pnombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "papellido"), 0, 3), "html", null, true);
                echo "...</li>
                        ";
            } else {
                // line 76
                echo "                         <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "pnombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "papellido"), "html", null, true);
                echo "</li>
                        ";
            }
            // line 78
            echo "                        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "horas"), "html", null, true);
            echo " horas</li>
                    </ul>
     
                </div>
            </div>  
        </div>
                
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asignacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "        </div>
        <div><input type=\"button\" id=\"addProfesional\" class=\"btnAdd center-block\" name=\"agregarProfesional\" value=\"Añadir Profesional\" data-id=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "id"), "html", null, true);
        echo "\"/></div>
    </div>
    <div class=\"dashboardColumn col-xs-12 col-sm-12 col-md-6 col-lg-4 infoEtapa\">
        <h3>REQUERIMIENTOS</h3>
        <table>
            <tr>
                <td class=\"first\">Requerimiento</td>
                <td class=\"first\">Horas</td>
                <td class=\"first\">Profesional</td>
            </tr>
        ";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "dependencia"));
        foreach ($context['_seq'] as $context["_key"] => $context["requerimiento"]) {
            // line 98
            echo "            <tr>
                <td class=\"second\"><p>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requerimiento"]) ? $context["requerimiento"] : $this->getContext($context, "requerimiento")), "nombre"), "html", null, true);
            echo "</p></td>
                <td class=\"second\">";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requerimiento"]) ? $context["requerimiento"] : $this->getContext($context, "requerimiento")), "horas"), "html", null, true);
            echo "</td>
                <td class=\"second\">";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["requerimiento"]) ? $context["requerimiento"] : $this->getContext($context, "requerimiento")), "profesional"), "pnombre"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["requerimiento"]) ? $context["requerimiento"] : $this->getContext($context, "requerimiento")), "profesional"), "snombre"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requerimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "        </table> 
    </div>
    <div class=\"dashboardColumn col-xs-12 col-sm-12 col-md-6 col-lg-4 infoAdic\">
        <h3>AVANCE PROGRESIVO</h3>
        <canvas id=\"avances\" width=\"270%\" height=\"200%\"></canvas>
    </div>
    <div class=\"dashboardColumn col-xs-12 col-sm-12 col-md-6 col-lg-4 infoExep\">
        <h3>EXEPCIONES</h3>
        <canvas id=\"avances\" width=\"270%\" height=\"200%\"></canvas>
    </div>
    
</div>
<script language=\"javascript\">
    itemsGraph = [];
    porcentaje = [];
    ";
        // line 123
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "factTable"));
        foreach ($context['_seq'] as $context["_key"] => $context["tiempo"]) {
            // line 124
            echo "            itemsGraph.push(\"hello\");      
            porcentaje.push(\"hola\");
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tiempo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "    var avance = document.getElementById(\"avances\").getContext(\"2d\");
    var data = {
    labels: itemsGraph,
    datasets: [
        {
            label: \"My First dataset\",
            fillColor: \"rgba(220,220,220,0.2)\",
            strokeColor: \"rgba(220,220,220,9)\",
            pointColor: \"rgba(220,220,220,9)\",
            pointStrokeColor: \"#fff\",
            pointHighlightFill: \"#fff\",
            pointHighlightStroke: \"rgba(220,220,220,1)\",
            data: porcentaje
        }
    ]
};

var myLineChart = new Chart(avance).Line(data);
</script>
<script language=\"javascript\">
           
                var ctx = document.getElementById(\"myChart\").getContext(\"2d\");
                var data = [
                {
                    value: ";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "factTable"), (isset($context["largo"]) ? $context["largo"] : $this->getContext($context, "largo")), array(), "array"), "porcentajeAvance"), "html", null, true);
        echo ",
                    color:\"#363569\",
                    highlight: \"#363569\",
                    label: \"Avance\"
                },
                {
                    value: 100 - ";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["licitacion"]) ? $context["licitacion"] : $this->getContext($context, "licitacion")), "factTable"), (isset($context["largo"]) ? $context["largo"] : $this->getContext($context, "largo")), array(), "array"), "porcentajeAvance"), "html", null, true);
        echo ",
                    color: \"#AFAEFA\",
                    highlight: \"#AFAEFA\",
                    label: \"Restante\"
                }
                ];
Chart.defaults.global.animation = false;
var myPieChart = new Chart(ctx).Pie(data);
</script>


";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:glicitacion.html_1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 67,  281 => 121,  239 => 104,  210 => 90,  202 => 89,  127 => 53,  118 => 50,  65 => 14,  137 => 59,  129 => 54,  323 => 143,  319 => 141,  317 => 140,  289 => 128,  274 => 119,  260 => 111,  232 => 99,  228 => 101,  216 => 96,  211 => 94,  191 => 78,  165 => 74,  114 => 48,  110 => 47,  104 => 44,  100 => 38,  315 => 145,  301 => 135,  267 => 118,  231 => 102,  167 => 74,  160 => 77,  215 => 132,  155 => 87,  829 => 420,  820 => 416,  784 => 388,  780 => 387,  758 => 371,  754 => 370,  744 => 366,  740 => 365,  734 => 362,  730 => 361,  726 => 360,  717 => 354,  710 => 352,  706 => 351,  695 => 343,  670 => 327,  665 => 325,  658 => 323,  654 => 322,  643 => 314,  626 => 300,  622 => 299,  618 => 298,  613 => 296,  606 => 294,  602 => 293,  594 => 288,  584 => 281,  565 => 275,  559 => 274,  555 => 273,  551 => 272,  543 => 270,  539 => 269,  524 => 260,  518 => 257,  514 => 255,  503 => 251,  499 => 249,  493 => 247,  481 => 244,  447 => 227,  443 => 226,  439 => 225,  420 => 218,  416 => 216,  403 => 212,  399 => 211,  395 => 210,  358 => 192,  352 => 189,  348 => 188,  342 => 187,  331 => 147,  304 => 157,  300 => 169,  292 => 167,  250 => 150,  207 => 93,  175 => 113,  150 => 103,  890 => 499,  878 => 490,  865 => 485,  861 => 484,  850 => 476,  841 => 470,  837 => 469,  833 => 468,  823 => 417,  819 => 460,  815 => 459,  810 => 457,  803 => 455,  799 => 454,  788 => 446,  773 => 437,  769 => 379,  759 => 432,  753 => 429,  749 => 428,  745 => 427,  731 => 416,  727 => 415,  718 => 412,  711 => 410,  696 => 401,  685 => 393,  681 => 392,  677 => 391,  671 => 388,  667 => 387,  661 => 384,  657 => 383,  653 => 382,  633 => 373,  617 => 360,  608 => 354,  592 => 341,  583 => 335,  548 => 271,  544 => 307,  529 => 300,  525 => 298,  516 => 295,  512 => 294,  508 => 293,  505 => 292,  482 => 275,  477 => 243,  470 => 241,  428 => 254,  424 => 219,  412 => 246,  408 => 245,  392 => 209,  388 => 208,  369 => 197,  351 => 211,  336 => 207,  332 => 206,  256 => 123,  248 => 170,  233 => 142,  198 => 138,  326 => 183,  308 => 171,  303 => 139,  299 => 173,  295 => 151,  291 => 171,  287 => 165,  279 => 181,  226 => 154,  222 => 135,  197 => 86,  152 => 69,  148 => 85,  113 => 49,  90 => 43,  476 => 280,  472 => 279,  450 => 263,  446 => 262,  442 => 261,  436 => 258,  432 => 257,  426 => 254,  422 => 253,  418 => 252,  370 => 221,  366 => 220,  357 => 217,  350 => 215,  346 => 214,  310 => 190,  286 => 183,  275 => 118,  265 => 171,  263 => 112,  255 => 112,  242 => 103,  218 => 92,  192 => 87,  186 => 76,  178 => 82,  172 => 98,  153 => 63,  1015 => 562,  1013 => 561,  1010 => 560,  1006 => 556,  1004 => 555,  1001 => 554,  998 => 553,  932 => 491,  925 => 487,  913 => 478,  901 => 469,  895 => 466,  888 => 464,  884 => 463,  872 => 487,  853 => 438,  849 => 437,  845 => 436,  839 => 433,  835 => 432,  831 => 421,  825 => 418,  821 => 427,  817 => 415,  812 => 424,  805 => 422,  801 => 421,  790 => 413,  777 => 438,  770 => 399,  763 => 433,  757 => 392,  750 => 369,  746 => 389,  733 => 379,  723 => 414,  719 => 371,  714 => 369,  707 => 409,  703 => 366,  692 => 358,  682 => 351,  678 => 329,  674 => 328,  668 => 346,  664 => 345,  660 => 344,  655 => 342,  648 => 340,  644 => 376,  637 => 374,  631 => 333,  629 => 332,  624 => 330,  611 => 320,  607 => 318,  596 => 289,  589 => 309,  585 => 308,  580 => 279,  574 => 278,  562 => 296,  556 => 310,  547 => 289,  542 => 288,  538 => 306,  534 => 285,  528 => 261,  517 => 279,  511 => 276,  507 => 253,  501 => 291,  497 => 248,  494 => 272,  489 => 246,  485 => 245,  464 => 257,  460 => 256,  456 => 255,  452 => 254,  449 => 253,  445 => 265,  441 => 264,  434 => 223,  417 => 238,  411 => 235,  400 => 244,  385 => 228,  377 => 200,  373 => 199,  359 => 214,  353 => 211,  349 => 210,  338 => 186,  333 => 203,  325 => 144,  318 => 174,  313 => 144,  306 => 194,  284 => 190,  277 => 186,  271 => 117,  259 => 169,  245 => 108,  213 => 97,  195 => 80,  185 => 85,  181 => 83,  345 => 209,  340 => 208,  335 => 185,  329 => 146,  311 => 138,  307 => 141,  302 => 193,  296 => 168,  293 => 130,  288 => 134,  280 => 161,  276 => 160,  272 => 159,  270 => 127,  261 => 124,  257 => 109,  253 => 108,  249 => 108,  244 => 117,  236 => 115,  225 => 110,  212 => 146,  205 => 142,  200 => 87,  188 => 131,  184 => 93,  174 => 76,  134 => 57,  126 => 58,  76 => 25,  58 => 14,  34 => 7,  23 => 1,  480 => 162,  474 => 242,  469 => 158,  461 => 269,  457 => 231,  453 => 230,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 222,  427 => 143,  423 => 142,  413 => 134,  409 => 246,  407 => 213,  402 => 244,  398 => 243,  393 => 231,  387 => 235,  384 => 237,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 219,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 181,  314 => 139,  312 => 194,  309 => 142,  305 => 136,  298 => 137,  294 => 185,  285 => 130,  283 => 125,  278 => 86,  268 => 116,  264 => 176,  258 => 174,  252 => 151,  247 => 78,  241 => 77,  229 => 140,  220 => 99,  214 => 91,  177 => 82,  169 => 60,  140 => 64,  132 => 51,  128 => 49,  107 => 42,  61 => 13,  273 => 121,  269 => 127,  254 => 92,  243 => 146,  240 => 145,  238 => 104,  235 => 101,  230 => 82,  227 => 101,  224 => 100,  221 => 109,  219 => 150,  217 => 98,  208 => 90,  204 => 89,  179 => 84,  159 => 71,  143 => 66,  135 => 53,  119 => 51,  102 => 43,  71 => 19,  67 => 33,  63 => 15,  59 => 14,  87 => 32,  94 => 36,  89 => 39,  85 => 25,  75 => 31,  68 => 23,  56 => 9,  38 => 6,  201 => 83,  196 => 126,  183 => 75,  171 => 78,  166 => 110,  163 => 73,  158 => 70,  156 => 76,  151 => 63,  142 => 59,  138 => 54,  136 => 63,  121 => 52,  117 => 44,  105 => 51,  91 => 46,  62 => 16,  49 => 8,  28 => 2,  24 => 2,  26 => 6,  21 => 2,  31 => 3,  25 => 3,  19 => 1,  93 => 28,  88 => 6,  78 => 27,  46 => 11,  44 => 6,  27 => 4,  79 => 18,  72 => 28,  69 => 25,  47 => 9,  40 => 5,  37 => 5,  22 => 2,  246 => 104,  157 => 71,  145 => 62,  139 => 45,  131 => 62,  123 => 52,  120 => 55,  115 => 48,  111 => 37,  108 => 44,  101 => 40,  98 => 42,  96 => 42,  83 => 25,  74 => 24,  66 => 15,  55 => 19,  52 => 8,  50 => 12,  43 => 8,  41 => 6,  35 => 5,  32 => 4,  29 => 2,  209 => 144,  203 => 84,  199 => 122,  193 => 86,  189 => 85,  187 => 84,  182 => 78,  176 => 99,  173 => 65,  168 => 76,  164 => 75,  162 => 108,  154 => 68,  149 => 62,  147 => 63,  144 => 66,  141 => 60,  133 => 55,  130 => 56,  125 => 53,  122 => 52,  116 => 54,  112 => 53,  109 => 52,  106 => 36,  103 => 32,  99 => 45,  95 => 47,  92 => 41,  86 => 28,  82 => 35,  80 => 19,  73 => 19,  64 => 22,  60 => 24,  57 => 12,  54 => 23,  51 => 14,  48 => 7,  45 => 7,  42 => 7,  39 => 9,  36 => 4,  33 => 3,  30 => 2,);
    }
}
