<?php

/* AppMediBundle:Default:graficoLicitacion.html.twig */
class __TwigTemplate_ad5c2094c9cd3e2af048747411a09b1f0ccc23b203a7c30e12ccf65629ee385f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'submenu' => array($this, 'block_submenu'),
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Chart.js-master/Chart.js"), "html", null, true);
        echo "\"></script>
<script language=\"javascript\">
    ";
        // line 15
        $context["toggle"] = 1;
        // line 16
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")));
        foreach ($context['_seq'] as $context["_key"] => $context["proyectos"]) {
            // line 17
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "factTable"));
            foreach ($context['_seq'] as $context["_key"] => $context["avance"]) {
                // line 18
                echo "    \$(document).ready(function(){ 
   \$('#botonToggle";
                // line 19
                echo twig_escape_filter($this->env, (isset($context["toggle"]) ? $context["toggle"] : $this->getContext($context, "toggle")), "html", null, true);
                echo "').on('click',function(e){
       e.preventDefault();
       \$( \"#contenidoToggle";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["toggle"]) ? $context["toggle"] : $this->getContext($context, "toggle")), "html", null, true);
                echo "\" ).slideToggle( \"slow\" );
      
   });
});
";
                // line 25
                $context["toggle"] = ((isset($context["toggle"]) ? $context["toggle"] : $this->getContext($context, "toggle")) + 1);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyectos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</script>
<script language=\"javascript\">
    ";
        // line 30
        $context["avanceProf"] = 1;
        // line 31
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")));
        foreach ($context['_seq'] as $context["_key"] => $context["proyectos"]) {
            // line 32
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "avancesProfesionales"));
            foreach ($context['_seq'] as $context["_key"] => $context["avance"]) {
                // line 33
                echo "    \$(document).ready(function(){ 
   \$('#botonToggleProf";
                // line 34
                echo twig_escape_filter($this->env, (isset($context["avanceProf"]) ? $context["avanceProf"] : $this->getContext($context, "avanceProf")), "html", null, true);
                echo "').on('click',function(e){
       e.preventDefault();
       \$( \"#contenidoToggleProf";
                // line 36
                echo twig_escape_filter($this->env, (isset($context["avanceProf"]) ? $context["avanceProf"] : $this->getContext($context, "avanceProf")), "html", null, true);
                echo "\" ).slideToggle( \"slow\" );
      
   });
});
";
                // line 40
                $context["avanceProf"] = ((isset($context["avanceProf"]) ? $context["avanceProf"] : $this->getContext($context, "avanceProf")) + 1);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyectos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</script>
";
        // line 44
        $context["contador"] = 1;
        // line 45
        $context["ciclo"] = 1;
        // line 46
        $context["cicloAvanceProf"] = 1;
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")));
        foreach ($context['_seq'] as $context["_key"] => $context["proyectos"]) {
            // line 48
            echo "<div class=\"graficoProyecto col-xs-12 col-sm-12 col-md-12 col-lg-12\">
    <div class=\"headerInfo\">
        <h3>";
            // line 50
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "nombreProyecto")), "html", null, true);
            echo "</h3>        
    </div>
    <div class=\"text-center\">
                <ul class=\"botones nav nav-tabs\">
                    <li><a href=\"#generalPro";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">General</a></li>
                    <li><a href=\"#Profesional";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">Profesionales</a></li>
                    <li><a href=\"#avance";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">Avance</a></li>
                    <li><a href=\"#avanceProf";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">Avance por Profesional</a></li>
                </ul>
    </div>
    <div class=\"tab-content\">
        <div id=\"generalPro";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" class=\"infoPro tab-pane active\">
            <ul> 
                <li><font style=\"font-weight: bold;\">Inicio:</font></font> ";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "fechaInicio"), "d-m-Y"), "html", null, true);
            echo "</li>
                <li><font style=\"font-weight: bold;\">Término:</font> ";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "fechaFin"), "d-m-Y"), "html", null, true);
            echo "</li>
                <li><font style=\"font-weight: bold;\">Horas:</font> ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "horasProgramadas"), "html", null, true);
            echo "</li>
                <li><font style=\"font-weight: bold;\">Patrocinador:</font> ";
            // line 66
            if (($this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "clientes") == null)) {
                echo "\"Por asignar\"";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "clientes"), "nombre"), "html", null, true);
            }
            echo "</li>
            </ul>        
        </div>
        <div id=\"Profesional";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" class=\"tab-pane\">
            <h4>Profesionales asignados a Proyecto</h4>
            <table class=\"reqLicitacion\">                        
                        <tr>
                            <td class=\"tituloReLic\">Profesional</td>
                            <td class=\"tituloReLic\">Horas</td>
                            <td class=\"tituloReLic\">Valor por hora (UF)</td>
                            
                        </tr>
                        ";
            // line 78
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "asignacion"));
            foreach ($context['_seq'] as $context["_key"] => $context["asignacion"]) {
                // line 79
                echo "                        <tr>
                            <form action=\"";
                // line 80
                echo $this->env->getExtension('routing')->getPath("licitacion");
                echo " \" method=\"post\" novalidate>
                            <td>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "pnombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "snombre"), "html", null, true);
                echo "</td>
                            <td>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "horas"), "html", null, true);
                echo "</td>
                            <td>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "valorHora"), "html", null, true);
                echo "</td>
 
                            </form>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asignacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                    </table>
        </div>
        <div id=\"avance";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" class=\"tab-pane\">
            <h4>Avances de Proyecto</h4>
            <canvas id=\"avanceGeneral";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" width=\"300\" height=\"150\"></canvas>
            ";
            // line 93
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "factTable"));
            foreach ($context['_seq'] as $context["_key"] => $context["resumen"]) {
                // line 94
                echo "            <div class=\"avanceProyecto\">
                <p><a href=\"#\" id=\"botonToggle";
                // line 95
                echo twig_escape_filter($this->env, (isset($context["ciclo"]) ? $context["ciclo"] : $this->getContext($context, "ciclo")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resumen"]) ? $context["resumen"] : $this->getContext($context, "resumen")), "fechaId"), "fecha"), "d-m-Y"), "html", null, true);
                echo "</a></p>
                <div  id=\"contenidoToggle";
                // line 96
                echo twig_escape_filter($this->env, (isset($context["ciclo"]) ? $context["ciclo"] : $this->getContext($context, "ciclo")), "html", null, true);
                echo "\" class=\"contenidoToggle";
                echo twig_escape_filter($this->env, (isset($context["ciclo"]) ? $context["ciclo"] : $this->getContext($context, "ciclo")), "html", null, true);
                echo "\" style=\"display:none\">
                <canvas class=\"avanceGraficoProyecto\" id=\"myChart";
                // line 97
                echo twig_escape_filter($this->env, (isset($context["ciclo"]) ? $context["ciclo"] : $this->getContext($context, "ciclo")), "html", null, true);
                echo "\" width=\"180\" height=\"180\"></canvas>
                <div>
                    <table>
                        <tr>
                            <td>Porcentaje de Avance:</td>
                            <td>";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resumen"]) ? $context["resumen"] : $this->getContext($context, "resumen")), "porcentajeAvance"), "html", null, true);
                echo "%</td>
                        </tr>
                        <tr>
                            <td>Porcentaje restante:</td>
                            <td>";
                // line 106
                echo twig_escape_filter($this->env, (100 - $this->getAttribute((isset($context["resumen"]) ? $context["resumen"] : $this->getContext($context, "resumen")), "porcentajeAvance")), "html", null, true);
                echo "%</td>
                        </tr>
                        <tr>
                            <td>Horas programadas:</td>
                            <td>";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resumen"]) ? $context["resumen"] : $this->getContext($context, "resumen")), "horasAsignadas"), "html", null, true);
                echo "</td>
                        </tr>
                        <tr>
                            <td>Horas de Avance:</td>
                            <td>";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resumen"]) ? $context["resumen"] : $this->getContext($context, "resumen")), "horasAvanzadas"), "html", null, true);
                echo "</td>
                        </tr>
                        <tr>
                            <td>Costo a la fecha:</td>
                            <td>";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resumen"]) ? $context["resumen"] : $this->getContext($context, "resumen")), "valorFecha"), "html", null, true);
                echo "</td>
                        </tr>
                        <tr>
                            <td>Costo presupuestado:</td>
                            <td>";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resumen"]) ? $context["resumen"] : $this->getContext($context, "resumen")), "valorTotal"), "html", null, true);
                echo "</td>
                        </tr>
                        
                    </table>
                </div>
            </div>  
            </div>
                ";
                // line 129
                $context["ciclo"] = ((isset($context["ciclo"]) ? $context["ciclo"] : $this->getContext($context, "ciclo")) + 1);
                // line 130
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resumen'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "        </div>
        <div id=\"avanceProf";
            // line 132
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" class=\"tab-pane\">
            <h4>Avances de Proyecto por profesional</h4>
            ";
            // line 134
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "avancesProfesionales"));
            foreach ($context['_seq'] as $context["_key"] => $context["avanceProf"]) {
                // line 135
                echo "            <div>
                <p><a href=\"#\" id=\"botonToggleProf";
                // line 136
                echo twig_escape_filter($this->env, (isset($context["cicloAvanceProf"]) ? $context["cicloAvanceProf"] : $this->getContext($context, "cicloAvanceProf")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["avanceProf"]) ? $context["avanceProf"] : $this->getContext($context, "avanceProf")), "profesional"), "pnombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["avanceProf"]) ? $context["avanceProf"] : $this->getContext($context, "avanceProf")), "profesional"), "papellido"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["avanceProf"]) ? $context["avanceProf"] : $this->getContext($context, "avanceProf")), "profesional"), "sapellido"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["avanceProf"]) ? $context["avanceProf"] : $this->getContext($context, "avanceProf")), "fechaId"), "fecha"), "d-m-Y"), "html", null, true);
                echo " </a></p>
                <div  id=\"contenidoToggleProf";
                // line 137
                echo twig_escape_filter($this->env, (isset($context["cicloAvanceProf"]) ? $context["cicloAvanceProf"] : $this->getContext($context, "cicloAvanceProf")), "html", null, true);
                echo "\" class=\"contenidoToggle";
                echo twig_escape_filter($this->env, (isset($context["cicloAvanceProf"]) ? $context["cicloAvanceProf"] : $this->getContext($context, "cicloAvanceProf")), "html", null, true);
                echo "\" style=\"display:none\">
                    <table class=\"reqLicitacion\">
                        <tr>
                            <td style=\"min-width: 100px;\">Gráfico</td>
                            <td>Horas Avanzadas</td>
                            <td>Horas Asignadas</td>
                            <td>Porcentaje Avance</td>
                            <td>Valor por hora (UF)</td>
                            <td>Valor a la Fecha</td>
                            <td>Valor Plafinificado</td>
                        </tr>
                        <tr>
                            <td>
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\" alt=\"hello\">
                                        <span class=\"sr-only\">40% Complete (success)</span>
                                    </div>
                                </div>
                            </td>
                            <td>";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avanceProf"]) ? $context["avanceProf"] : $this->getContext($context, "avanceProf")), "horasProgresadas"), "html", null, true);
                echo "</td>
                            <td>";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avanceProf"]) ? $context["avanceProf"] : $this->getContext($context, "avanceProf")), "horasAsignadas"), "html", null, true);
                echo "</td>
                            <td>";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avanceProf"]) ? $context["avanceProf"] : $this->getContext($context, "avanceProf")), "porcentajeAvance"), "html", null, true);
                echo "%</td>
                            <td>";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avanceProf"]) ? $context["avanceProf"] : $this->getContext($context, "avanceProf")), "valorHora"), "html", null, true);
                echo "</td>
                            <td>";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avanceProf"]) ? $context["avanceProf"] : $this->getContext($context, "avanceProf")), "valorFecha"), "html", null, true);
                echo "</td>
                            <td>";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avanceProf"]) ? $context["avanceProf"] : $this->getContext($context, "avanceProf")), "valorTotal"), "html", null, true);
                echo "</td>
                            
                        </tr>
                    </table>
                </div>
                ";
                // line 166
                $context["cicloAvanceProf"] = ((isset($context["cicloAvanceProf"]) ? $context["cicloAvanceProf"] : $this->getContext($context, "cicloAvanceProf")) + 1);
                // line 167
                echo "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avanceProf'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "
        </div>
    ";
            // line 171
            $context["contador"] = ((isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")) + 1);
            // line 172
            echo "    </div>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyectos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "<script language=\"javascript\">
    ";
        // line 177
        $context["js"] = 1;
        // line 178
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")));
        foreach ($context['_seq'] as $context["_key"] => $context["proyectos"]) {
            // line 179
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "factTable"));
            foreach ($context['_seq'] as $context["_key"] => $context["avance"]) {
                // line 180
                echo "                var ctx = document.getElementById(\"myChart";
                echo twig_escape_filter($this->env, (isset($context["js"]) ? $context["js"] : $this->getContext($context, "js")), "html", null, true);
                echo "\").getContext(\"2d\");
                var data = [
                {
                    value: ";
                // line 183
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avance"]) ? $context["avance"] : $this->getContext($context, "avance")), "porcentajeAvance"), "html", null, true);
                echo ",
                    color:\"#F7464A\",
                    highlight: \"#FF5A5E\",
                    label: \"Avance\"
                },
                {
                    value: ";
                // line 189
                echo twig_escape_filter($this->env, (100 - $this->getAttribute((isset($context["avance"]) ? $context["avance"] : $this->getContext($context, "avance")), "porcentajeAvance")), "html", null, true);
                echo ",
                    color: \"#ddd\",
                    highlight: \"#ddd\",
                    label: \"Restante\"
                }
                ];
Chart.defaults.global.animation = false;
var myPieChart = new Chart(ctx).Pie(data);
    ";
                // line 197
                $context["js"] = ((isset($context["js"]) ? $context["js"] : $this->getContext($context, "js")) + 1);
                // line 198
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyectos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "        
</script>
<script language=\"javascript\">
    ";
        // line 203
        $context["contador"] = 1;
        // line 204
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")));
        foreach ($context['_seq'] as $context["_key"] => $context["proyectos"]) {
            // line 205
            echo "        itemsGraph = [];
        porcentaje = [];
        var lineGraph = document.getElementById(\"avanceGeneral";
            // line 207
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\").getContext(\"2d\");
        ";
            // line 208
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "factTable"));
            foreach ($context['_seq'] as $context["_key"] => $context["tiempo"]) {
                // line 209
                echo "            itemsGraph.push(\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tiempo"]) ? $context["tiempo"] : $this->getContext($context, "tiempo")), "fechaId"), "fecha"), "d-m-Y"), "html", null, true);
                echo "\");      
            porcentaje.push(";
                // line 210
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tiempo"]) ? $context["tiempo"] : $this->getContext($context, "tiempo")), "porcentajeAvance"), "html", null, true);
                echo ");
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tiempo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            echo "        var data = {
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
var myLineChart = new Chart(lineGraph).Line(data);
";
            // line 229
            $context["contador"] = ((isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")) + 1);
            echo "         
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyectos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo "    
</script>
";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:graficoLicitacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  577 => 231,  569 => 229,  550 => 212,  537 => 209,  533 => 208,  520 => 204,  513 => 200,  488 => 189,  479 => 183,  467 => 179,  462 => 178,  448 => 172,  433 => 166,  425 => 161,  421 => 160,  405 => 156,  354 => 131,  190 => 61,  77 => 18,  266 => 116,  161 => 67,  124 => 53,  84 => 28,  53 => 18,  146 => 67,  281 => 95,  239 => 104,  210 => 90,  202 => 89,  127 => 53,  118 => 50,  65 => 15,  137 => 59,  129 => 54,  323 => 143,  319 => 141,  317 => 140,  289 => 128,  274 => 93,  260 => 113,  232 => 99,  228 => 101,  216 => 96,  211 => 94,  191 => 78,  165 => 74,  114 => 48,  110 => 31,  104 => 28,  100 => 38,  315 => 110,  301 => 102,  267 => 118,  231 => 102,  167 => 74,  160 => 48,  215 => 132,  155 => 66,  829 => 420,  820 => 416,  784 => 388,  780 => 387,  758 => 371,  754 => 370,  744 => 366,  740 => 365,  734 => 362,  730 => 361,  726 => 360,  717 => 354,  710 => 352,  706 => 351,  695 => 343,  670 => 327,  665 => 325,  658 => 323,  654 => 322,  643 => 314,  626 => 300,  622 => 299,  618 => 298,  613 => 296,  606 => 294,  602 => 293,  594 => 288,  584 => 281,  565 => 275,  559 => 274,  555 => 273,  551 => 272,  543 => 270,  539 => 269,  524 => 260,  518 => 203,  514 => 255,  503 => 251,  499 => 197,  493 => 247,  481 => 244,  447 => 227,  443 => 226,  439 => 225,  420 => 218,  416 => 216,  403 => 212,  399 => 211,  395 => 210,  358 => 192,  352 => 189,  348 => 130,  342 => 187,  331 => 147,  304 => 157,  300 => 169,  292 => 167,  250 => 83,  207 => 66,  175 => 55,  150 => 44,  890 => 499,  878 => 490,  865 => 485,  861 => 484,  850 => 476,  841 => 470,  837 => 469,  833 => 468,  823 => 417,  819 => 460,  815 => 459,  810 => 457,  803 => 455,  799 => 454,  788 => 446,  773 => 437,  769 => 379,  759 => 432,  753 => 429,  749 => 428,  745 => 427,  731 => 416,  727 => 415,  718 => 412,  711 => 410,  696 => 401,  685 => 393,  681 => 392,  677 => 391,  671 => 388,  667 => 387,  661 => 384,  657 => 383,  653 => 382,  633 => 373,  617 => 360,  608 => 354,  592 => 341,  583 => 335,  548 => 271,  544 => 307,  529 => 207,  525 => 205,  516 => 295,  512 => 294,  508 => 293,  505 => 292,  482 => 275,  477 => 243,  470 => 241,  428 => 254,  424 => 219,  412 => 246,  408 => 245,  392 => 209,  388 => 208,  369 => 136,  351 => 211,  336 => 122,  332 => 206,  256 => 123,  248 => 170,  233 => 79,  198 => 138,  326 => 183,  308 => 106,  303 => 139,  299 => 173,  295 => 151,  291 => 171,  287 => 96,  279 => 181,  226 => 154,  222 => 135,  197 => 86,  152 => 45,  148 => 85,  113 => 49,  90 => 43,  476 => 280,  472 => 180,  450 => 263,  446 => 171,  442 => 169,  436 => 258,  432 => 257,  426 => 254,  422 => 253,  418 => 252,  370 => 221,  366 => 135,  357 => 132,  350 => 215,  346 => 129,  310 => 190,  286 => 183,  275 => 118,  265 => 90,  263 => 112,  255 => 112,  242 => 103,  218 => 89,  192 => 87,  186 => 76,  178 => 71,  172 => 98,  153 => 63,  1015 => 562,  1013 => 561,  1010 => 560,  1006 => 556,  1004 => 555,  1001 => 554,  998 => 553,  932 => 491,  925 => 487,  913 => 478,  901 => 469,  895 => 466,  888 => 464,  884 => 463,  872 => 487,  853 => 438,  849 => 437,  845 => 436,  839 => 433,  835 => 432,  831 => 421,  825 => 418,  821 => 427,  817 => 415,  812 => 424,  805 => 422,  801 => 421,  790 => 413,  777 => 438,  770 => 399,  763 => 433,  757 => 392,  750 => 369,  746 => 389,  733 => 379,  723 => 414,  719 => 371,  714 => 369,  707 => 409,  703 => 366,  692 => 358,  682 => 351,  678 => 329,  674 => 328,  668 => 346,  664 => 345,  660 => 344,  655 => 342,  648 => 340,  644 => 376,  637 => 374,  631 => 333,  629 => 332,  624 => 330,  611 => 320,  607 => 318,  596 => 289,  589 => 309,  585 => 308,  580 => 279,  574 => 278,  562 => 296,  556 => 310,  547 => 289,  542 => 210,  538 => 306,  534 => 285,  528 => 261,  517 => 279,  511 => 276,  507 => 199,  501 => 198,  497 => 248,  494 => 272,  489 => 246,  485 => 245,  464 => 257,  460 => 177,  456 => 255,  452 => 254,  449 => 253,  445 => 265,  441 => 264,  434 => 223,  417 => 159,  411 => 235,  400 => 244,  385 => 228,  377 => 200,  373 => 199,  359 => 214,  353 => 211,  349 => 210,  338 => 186,  333 => 203,  325 => 144,  318 => 174,  313 => 144,  306 => 194,  284 => 190,  277 => 186,  271 => 117,  259 => 169,  245 => 108,  213 => 97,  195 => 63,  185 => 85,  181 => 83,  345 => 209,  340 => 208,  335 => 185,  329 => 118,  311 => 138,  307 => 141,  302 => 193,  296 => 168,  293 => 97,  288 => 134,  280 => 161,  276 => 160,  272 => 159,  270 => 92,  261 => 88,  257 => 109,  253 => 108,  249 => 108,  244 => 117,  236 => 80,  225 => 110,  212 => 146,  205 => 142,  200 => 82,  188 => 75,  184 => 93,  174 => 70,  134 => 52,  126 => 48,  76 => 25,  58 => 14,  34 => 12,  23 => 1,  480 => 162,  474 => 242,  469 => 158,  461 => 269,  457 => 176,  453 => 230,  444 => 149,  440 => 148,  437 => 147,  435 => 167,  430 => 222,  427 => 143,  423 => 142,  413 => 158,  409 => 157,  407 => 213,  402 => 244,  398 => 243,  393 => 231,  387 => 235,  384 => 237,  381 => 137,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 134,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 114,  314 => 139,  312 => 194,  309 => 142,  305 => 136,  298 => 137,  294 => 185,  285 => 130,  283 => 125,  278 => 94,  268 => 116,  264 => 115,  258 => 112,  252 => 109,  247 => 78,  241 => 77,  229 => 78,  220 => 99,  214 => 88,  177 => 82,  169 => 60,  140 => 64,  132 => 51,  128 => 36,  107 => 42,  61 => 20,  273 => 121,  269 => 127,  254 => 110,  243 => 146,  240 => 81,  238 => 104,  235 => 101,  230 => 82,  227 => 101,  224 => 92,  221 => 109,  219 => 150,  217 => 69,  208 => 90,  204 => 89,  179 => 56,  159 => 71,  143 => 63,  135 => 40,  119 => 51,  102 => 43,  71 => 19,  67 => 16,  63 => 15,  59 => 13,  87 => 32,  94 => 38,  89 => 39,  85 => 21,  75 => 31,  68 => 24,  56 => 12,  38 => 6,  201 => 83,  196 => 81,  183 => 57,  171 => 54,  166 => 110,  163 => 73,  158 => 70,  156 => 47,  151 => 63,  142 => 59,  138 => 54,  136 => 63,  121 => 52,  117 => 43,  105 => 51,  91 => 46,  62 => 16,  49 => 8,  28 => 2,  24 => 2,  26 => 6,  21 => 2,  31 => 3,  25 => 3,  19 => 1,  93 => 28,  88 => 29,  78 => 27,  46 => 11,  44 => 7,  27 => 4,  79 => 18,  72 => 17,  69 => 25,  47 => 9,  40 => 6,  37 => 5,  22 => 2,  246 => 82,  157 => 71,  145 => 62,  139 => 45,  131 => 57,  123 => 34,  120 => 33,  115 => 32,  111 => 41,  108 => 30,  101 => 40,  98 => 27,  96 => 42,  83 => 25,  74 => 27,  66 => 15,  55 => 19,  52 => 8,  50 => 12,  43 => 8,  41 => 6,  35 => 5,  32 => 3,  29 => 2,  209 => 144,  203 => 65,  199 => 64,  193 => 86,  189 => 85,  187 => 84,  182 => 78,  176 => 99,  173 => 65,  168 => 69,  164 => 50,  162 => 108,  154 => 46,  149 => 62,  147 => 43,  144 => 66,  141 => 42,  133 => 55,  130 => 56,  125 => 53,  122 => 52,  116 => 48,  112 => 53,  109 => 52,  106 => 36,  103 => 41,  99 => 40,  95 => 47,  92 => 25,  86 => 28,  82 => 35,  80 => 19,  73 => 19,  64 => 22,  60 => 13,  57 => 12,  54 => 23,  51 => 14,  48 => 8,  45 => 7,  42 => 14,  39 => 9,  36 => 5,  33 => 3,  30 => 2,);
    }
}
