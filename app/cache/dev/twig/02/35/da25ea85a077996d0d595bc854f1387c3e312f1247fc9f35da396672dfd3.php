<?php

/* AppMediBundle:Default:respaldoGrafico.html.twig */
class __TwigTemplate_0235da25ea85a077996d0d595bc854f1387c3e312f1247fc9f35da396672dfd3 extends Twig_Template
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
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("grafico");
        echo " \" method=\"post\" novalidate>
<input type=\"submit\" class=\"btnAdd\" name=\"generarReporte\" value=\"Generar Reporte\">
</form>
";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")));
        foreach ($context['_seq'] as $context["_key"] => $context["proyectos"]) {
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "nombreProyecto"), "html", null, true);
            echo "
";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "factTable"));
            foreach ($context['_seq'] as $context["_key"] => $context["avance"]) {
                // line 19
                echo "2
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyectos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    <h3 class=\"tituloForm\">Gráficos</h3>
    <h4 class=\"subTituloForm\">Lista de proyectos activos</h4>
    <div class=\"infoGrafico\">
        ";
        // line 25
        $context["ciclo"] = 1;
        // line 26
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")));
        foreach ($context['_seq'] as $context["_key"] => $context["informacion"]) {
            // line 27
            echo "            <section class=\"proyecto col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <table class=\"descripcionProyecto\">
                    <tr class=\"headerInfoProyecto\">
                        <td><h4>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "proyecto"), "html", null, true);
            echo "</h4></td>
                        ";
            // line 31
            if ((($this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "avance") >= 0) && ($this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "avance") <= 50))) {
                // line 32
                echo "                            ";
                $context["bar"] = "-success";
                // line 33
                echo "                        ";
            }
            // line 34
            echo "                        ";
            if ((($this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "avance") >= 51) && ($this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "avance") <= 74))) {
                // line 35
                echo "                            ";
                $context["bar"] = "-warning";
                // line 36
                echo "                        ";
            }
            // line 37
            echo "                        ";
            if ((($this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "avance") >= 75) && ($this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "avance") <= 100))) {
                // line 38
                echo "                            ";
                $context["bar"] = "-danger";
                // line 39
                echo "                        ";
            }
            // line 40
            echo "                        <td>Horas avanzadas</td>
                        <td class=\"barraProyecto\"><div class=\"progress\">
                            <div class=\"progress-bar progress-bar";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["bar"]) ? $context["bar"] : $this->getContext($context, "bar")), "html", null, true);
            echo "\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "avance"), "html", null, true);
            echo "%\">
                                <span class=\"sr-only\">40% Complete (success)</span>
                            </div>
                            </div></td>
                    </tr>
                    <tr>
                        <td></td>
                        ";
            // line 49
            if ((($this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "avanceDinero") >= 0) && ($this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "avance") <= 50))) {
                // line 50
                echo "                            ";
                $context["bar"] = "-success";
                // line 51
                echo "                        ";
            }
            // line 52
            echo "                        ";
            if ((($this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "avanceDinero") >= 51) && ($this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "avance") <= 74))) {
                // line 53
                echo "                            ";
                $context["bar"] = "-warning";
                // line 54
                echo "                        ";
            }
            // line 55
            echo "                        ";
            if ((($this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "avanceDinero") >= 75) && ($this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "avance") <= 100))) {
                // line 56
                echo "                            ";
                $context["bar"] = "-danger";
                // line 57
                echo "                        ";
            }
            // line 58
            echo "                        <td>Costo avanzado</td>
                        ";
            // line 60
            echo "                           ";
            // line 61
            echo "                              ";
            // line 62
            echo "                           ";
            // line 63
            echo "                            ";
            // line 64
            echo "                    </tr>
                </table>
                 ";
            // line 66
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "usuarios"));
            foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                // line 67
                echo "                 <div class=\"contGraph col-xs-12 col-sm-12 col-md-3 col-lg-4\">
                 <div id=\"circle";
                // line 68
                echo twig_escape_filter($this->env, (isset($context["ciclo"]) ? $context["ciclo"] : $this->getContext($context, "ciclo")), "html", null, true);
                echo "\" class=\"graph\"></div>
                 <ul class=\"nav nav-tabs\">
                    <li class=\"active\">
                        <a href=\"#General";
                // line 71
                echo twig_escape_filter($this->env, (isset($context["ciclo"]) ? $context["ciclo"] : $this->getContext($context, "ciclo")), "html", null, true);
                echo "\" data-toggle=\"tab\">General</a>
                    </li>
                    <li>
                        <a href=\"#Economico";
                // line 74
                echo twig_escape_filter($this->env, (isset($context["ciclo"]) ? $context["ciclo"] : $this->getContext($context, "ciclo")), "html", null, true);
                echo "\" data-toggle=\"tab\">Económico</a>
                    </li>
                </ul>
                 <div class=\"tab-content\">
                     <div id=\"General";
                // line 78
                echo twig_escape_filter($this->env, (isset($context["ciclo"]) ? $context["ciclo"] : $this->getContext($context, "ciclo")), "html", null, true);
                echo "\" class=\"tab-pane active\">
                     <table class=\"tablaGrafico\">
                         <tr>
                             <td class=\"tituloGrafico\">Profesional:</td>
                             <td>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre"), "html", null, true);
                echo "</td>
                         </tr>
                         <tr>
                             <td class=\"tituloGrafico\">Progreso:</td>
                             <td>";
                // line 86
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "porcentaje"), 2), "html", null, true);
                echo "%</td>
                         </tr>
                         <tr>
                             <td class=\"tituloGrafico\">Horas Progresadas:</td>
                             <td>";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "horasprogresadas"), "html", null, true);
                echo "</td>
                         </tr>
                         <tr>
                             <td class=\"tituloGrafico\">Horas asignadas:</td>
                             <td>";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "horasasignadas"), "html", null, true);
                echo "</td>
                         </tr>
                     </table>
                     </div>
                     <div id=\"Economico";
                // line 98
                echo twig_escape_filter($this->env, (isset($context["ciclo"]) ? $context["ciclo"] : $this->getContext($context, "ciclo")), "html", null, true);
                echo "\" class=\"tab-pane\">
                         <table class=\"tablaGrafico\">
                         <tr>
                             <td class=\"tituloGrafico\">Costo por Hora (UF):</td>
                             <td>";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "valorHora"), "html", null, true);
                echo "</td>
                         </tr>
                         <tr>
                             <td class=\"tituloGrafico\">Costo Esperado (UF):</td>
                             <td>";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "valorEsperado"), "html", null, true);
                echo "</td>
                         </tr>
                         <tr>
                             <td class=\"tituloGrafico\">Costo progresado (UF):</td>
                             <td>";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "valorProgresado"), "html", null, true);
                echo "</td>
                         </tr>
                     </table>
                 </div>
                 </div>
                 </div>
                 ";
                // line 116
                $context["ciclo"] = ((isset($context["ciclo"]) ? $context["ciclo"] : $this->getContext($context, "ciclo")) + 1);
                // line 117
                echo "                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "                
            </section>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['informacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "        
    </div>  
    ";
        // line 124
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/circle-progress.js"), "html", null, true);
        echo "\"></script>
    <script>
        ";
        // line 126
        $context["js"] = 1;
        // line 127
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")));
        foreach ($context['_seq'] as $context["_key"] => $context["informacion"]) {
            // line 128
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "usuarios"));
            foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                // line 129
                echo "        \$('#circle";
                echo twig_escape_filter($this->env, (isset($context["js"]) ? $context["js"] : $this->getContext($context, "js")), "html", null, true);
                echo "').circleProgress({
\tvalue: ";
                // line 130
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "porcentaje") / 100), "html", null, true);
                echo ",  
        ";
                // line 131
                if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "porcentaje") <= 0.75)) {
                    echo "        
\tsize: 80,
\tfill: {
\t\t gradient: [\"#01FB1A\", \"#06B017\"]
\t}";
                } else {
                    // line 136
                    echo "        size: 80,
\tfill: {
\t\t gradient: [\"#FA0217\", \"#C10212\"]
\t}";
                }
                // line 139
                echo "    
        
}
            );
        ";
                // line 143
                $context["js"] = ((isset($context["js"]) ? $context["js"] : $this->getContext($context, "js")) + 1);
                // line 144
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['informacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "    </script>
    </script>

    
    
";
    }

    // line 152
    public function block_horas($context, array $blocks = array())
    {
        // line 153
        echo "
";
        // line 154
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexHoras.html.twig", array("formHoras" => (isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras"))));
        // line 155
        echo "

";
        // line 157
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexReunion.html.twig", array("reuniones" => (isset($context["reuniones"]) ? $context["reuniones"] : $this->getContext($context, "reuniones"))));
        // line 158
        echo "

";
        // line 160
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexProyecto.html.twig", array("proyectos" => (isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto"))));
        // line 161
        echo "

";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:respaldoGrafico.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 158,  378 => 153,  375 => 152,  262 => 102,  234 => 86,  463 => 224,  415 => 194,  406 => 188,  376 => 170,  361 => 161,  347 => 153,  327 => 143,  680 => 431,  599 => 359,  587 => 350,  575 => 341,  558 => 335,  546 => 326,  527 => 310,  523 => 309,  519 => 308,  509 => 304,  495 => 299,  491 => 298,  486 => 236,  451 => 215,  397 => 244,  356 => 223,  334 => 216,  194 => 66,  20 => 1,  223 => 159,  492 => 239,  487 => 190,  475 => 293,  473 => 187,  431 => 264,  391 => 179,  383 => 155,  343 => 126,  328 => 130,  320 => 119,  70 => 16,  290 => 134,  282 => 132,  180 => 72,  206 => 79,  170 => 55,  97 => 26,  251 => 100,  577 => 231,  569 => 338,  550 => 212,  537 => 209,  533 => 208,  520 => 204,  513 => 305,  488 => 237,  479 => 294,  467 => 179,  462 => 179,  448 => 172,  433 => 166,  425 => 161,  421 => 197,  405 => 156,  354 => 144,  190 => 64,  77 => 20,  266 => 128,  161 => 52,  124 => 49,  84 => 21,  53 => 11,  146 => 58,  281 => 95,  239 => 80,  210 => 70,  202 => 89,  127 => 46,  118 => 34,  65 => 14,  137 => 40,  129 => 41,  323 => 129,  319 => 141,  317 => 139,  289 => 100,  274 => 93,  260 => 118,  232 => 91,  228 => 108,  216 => 96,  211 => 153,  191 => 92,  165 => 74,  114 => 48,  110 => 48,  104 => 32,  100 => 38,  315 => 110,  301 => 121,  267 => 87,  231 => 101,  167 => 54,  160 => 66,  215 => 101,  155 => 50,  829 => 420,  820 => 416,  784 => 388,  780 => 387,  758 => 371,  754 => 370,  744 => 366,  740 => 365,  734 => 362,  730 => 361,  726 => 360,  717 => 354,  710 => 352,  706 => 351,  695 => 343,  670 => 327,  665 => 325,  658 => 323,  654 => 322,  643 => 314,  626 => 300,  622 => 299,  618 => 298,  613 => 296,  606 => 363,  602 => 293,  594 => 288,  584 => 281,  565 => 275,  559 => 274,  555 => 273,  551 => 221,  543 => 219,  539 => 269,  524 => 202,  518 => 203,  514 => 255,  503 => 197,  499 => 300,  493 => 247,  481 => 189,  447 => 227,  443 => 226,  439 => 225,  420 => 261,  416 => 159,  403 => 212,  399 => 151,  395 => 161,  358 => 192,  352 => 143,  348 => 221,  342 => 218,  331 => 122,  304 => 157,  300 => 141,  292 => 201,  250 => 121,  207 => 71,  175 => 65,  150 => 44,  890 => 499,  878 => 490,  865 => 485,  861 => 484,  850 => 476,  841 => 470,  837 => 469,  833 => 468,  823 => 417,  819 => 460,  815 => 459,  810 => 457,  803 => 455,  799 => 454,  788 => 446,  773 => 437,  769 => 379,  759 => 432,  753 => 429,  749 => 428,  745 => 427,  731 => 416,  727 => 415,  718 => 412,  711 => 410,  696 => 401,  685 => 393,  681 => 392,  677 => 430,  671 => 388,  667 => 387,  661 => 384,  657 => 383,  653 => 382,  633 => 373,  617 => 360,  608 => 354,  592 => 341,  583 => 335,  548 => 271,  544 => 307,  529 => 207,  525 => 205,  516 => 200,  512 => 294,  508 => 293,  505 => 303,  482 => 234,  477 => 232,  470 => 241,  428 => 254,  424 => 262,  412 => 246,  408 => 245,  392 => 209,  388 => 241,  369 => 136,  351 => 211,  336 => 150,  332 => 131,  256 => 123,  248 => 94,  233 => 79,  198 => 67,  326 => 183,  308 => 106,  303 => 108,  299 => 137,  295 => 151,  291 => 171,  287 => 117,  279 => 193,  226 => 149,  222 => 148,  197 => 86,  152 => 66,  148 => 65,  113 => 32,  90 => 22,  476 => 280,  472 => 180,  450 => 263,  446 => 170,  442 => 169,  436 => 206,  432 => 257,  426 => 254,  422 => 162,  418 => 252,  370 => 167,  366 => 146,  357 => 132,  350 => 215,  346 => 139,  310 => 112,  286 => 133,  275 => 192,  265 => 90,  263 => 179,  255 => 98,  242 => 119,  218 => 147,  192 => 79,  186 => 62,  178 => 83,  172 => 98,  153 => 49,  1015 => 562,  1013 => 561,  1010 => 560,  1006 => 556,  1004 => 555,  1001 => 554,  998 => 553,  932 => 491,  925 => 487,  913 => 478,  901 => 469,  895 => 466,  888 => 464,  884 => 463,  872 => 487,  853 => 438,  849 => 437,  845 => 436,  839 => 433,  835 => 432,  831 => 421,  825 => 418,  821 => 427,  817 => 415,  812 => 424,  805 => 422,  801 => 421,  790 => 413,  777 => 438,  770 => 399,  763 => 433,  757 => 392,  750 => 369,  746 => 389,  733 => 379,  723 => 414,  719 => 371,  714 => 369,  707 => 409,  703 => 366,  692 => 358,  682 => 351,  678 => 329,  674 => 328,  668 => 346,  664 => 345,  660 => 344,  655 => 342,  648 => 340,  644 => 376,  637 => 374,  631 => 333,  629 => 332,  624 => 330,  611 => 320,  607 => 318,  596 => 289,  589 => 309,  585 => 308,  580 => 279,  574 => 278,  562 => 336,  556 => 310,  547 => 289,  542 => 210,  538 => 306,  534 => 285,  528 => 261,  517 => 279,  511 => 199,  507 => 198,  501 => 198,  497 => 248,  494 => 240,  489 => 246,  485 => 245,  464 => 285,  460 => 177,  456 => 255,  452 => 254,  449 => 253,  445 => 212,  441 => 169,  434 => 167,  417 => 159,  411 => 235,  400 => 185,  385 => 176,  377 => 238,  373 => 199,  359 => 214,  353 => 211,  349 => 210,  338 => 217,  333 => 203,  325 => 144,  318 => 128,  313 => 127,  306 => 194,  284 => 190,  277 => 186,  271 => 117,  259 => 104,  245 => 109,  213 => 74,  195 => 93,  185 => 135,  181 => 88,  345 => 209,  340 => 136,  335 => 185,  329 => 214,  311 => 126,  307 => 141,  302 => 203,  296 => 202,  293 => 118,  288 => 135,  280 => 161,  276 => 110,  272 => 127,  270 => 129,  261 => 86,  257 => 178,  253 => 101,  249 => 108,  244 => 169,  236 => 80,  225 => 110,  212 => 144,  205 => 97,  200 => 76,  188 => 63,  184 => 61,  174 => 82,  134 => 39,  126 => 69,  76 => 28,  58 => 19,  34 => 12,  23 => 1,  480 => 233,  474 => 231,  469 => 158,  461 => 269,  457 => 176,  453 => 173,  444 => 271,  440 => 148,  437 => 267,  435 => 167,  430 => 203,  427 => 143,  423 => 142,  413 => 158,  409 => 157,  407 => 251,  402 => 244,  398 => 243,  393 => 160,  387 => 157,  384 => 237,  381 => 154,  379 => 146,  374 => 116,  368 => 112,  365 => 111,  362 => 134,  360 => 145,  355 => 158,  341 => 105,  337 => 103,  322 => 212,  314 => 139,  312 => 194,  309 => 142,  305 => 124,  298 => 137,  294 => 135,  285 => 116,  283 => 125,  278 => 131,  268 => 116,  264 => 115,  258 => 123,  252 => 84,  247 => 98,  241 => 90,  229 => 78,  220 => 78,  214 => 71,  177 => 87,  169 => 53,  140 => 48,  132 => 51,  128 => 37,  107 => 30,  61 => 20,  273 => 121,  269 => 106,  254 => 122,  243 => 146,  240 => 81,  238 => 104,  235 => 163,  230 => 82,  227 => 82,  224 => 73,  221 => 158,  219 => 102,  217 => 69,  208 => 143,  204 => 142,  179 => 58,  159 => 81,  143 => 94,  135 => 72,  119 => 34,  102 => 27,  71 => 17,  67 => 16,  63 => 26,  59 => 20,  87 => 27,  94 => 23,  89 => 22,  85 => 32,  75 => 18,  68 => 15,  56 => 21,  38 => 5,  201 => 68,  196 => 81,  183 => 57,  171 => 69,  166 => 80,  163 => 82,  158 => 51,  156 => 65,  151 => 57,  142 => 56,  138 => 92,  136 => 45,  121 => 56,  117 => 55,  105 => 43,  91 => 46,  62 => 18,  49 => 8,  28 => 2,  24 => 4,  26 => 5,  21 => 2,  31 => 3,  25 => 3,  19 => 1,  93 => 25,  88 => 31,  78 => 18,  46 => 11,  44 => 18,  27 => 4,  79 => 19,  72 => 27,  69 => 24,  47 => 14,  40 => 10,  37 => 5,  22 => 2,  246 => 120,  157 => 47,  145 => 76,  139 => 73,  131 => 38,  123 => 34,  120 => 68,  115 => 32,  111 => 31,  108 => 49,  101 => 40,  98 => 41,  96 => 33,  83 => 25,  74 => 18,  66 => 24,  55 => 19,  52 => 20,  50 => 15,  43 => 8,  41 => 6,  35 => 15,  32 => 3,  29 => 2,  209 => 98,  203 => 151,  199 => 74,  193 => 86,  189 => 70,  187 => 91,  182 => 60,  176 => 57,  173 => 56,  168 => 126,  164 => 53,  162 => 79,  154 => 46,  149 => 77,  147 => 56,  144 => 51,  141 => 42,  133 => 51,  130 => 90,  125 => 36,  122 => 35,  116 => 33,  112 => 50,  109 => 53,  106 => 37,  103 => 37,  99 => 36,  95 => 25,  92 => 32,  86 => 32,  82 => 20,  80 => 29,  73 => 17,  64 => 15,  60 => 13,  57 => 12,  54 => 23,  51 => 18,  48 => 19,  45 => 7,  42 => 14,  39 => 10,  36 => 5,  33 => 3,  30 => 2,);
    }
}
