<?php

/* AppMediBundle:Default:grafico.html.twig */
class __TwigTemplate_955dd0163f3530a816f29f27b773529e58ebafacd839170d9ed602dc1eff5a4a extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Chart.js-master/Chart.js"), "html", null, true);
        echo "\"></script>
<script language=\"javascript\">
    ";
        // line 5
        $context["toggle"] = 1;
        // line 6
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")));
        foreach ($context['_seq'] as $context["_key"] => $context["proyectos"]) {
            // line 7
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "factTable"));
            foreach ($context['_seq'] as $context["_key"] => $context["avance"]) {
                // line 8
                echo "                    \$(document).ready(function(){ 
                        \$('#botonToggle";
                // line 9
                echo twig_escape_filter($this->env, (isset($context["toggle"]) ? $context["toggle"] : $this->getContext($context, "toggle")), "html", null, true);
                echo "').on('click',function(e){
                        e.preventDefault();
                        \$( \"#contenidoToggle";
                // line 11
                echo twig_escape_filter($this->env, (isset($context["toggle"]) ? $context["toggle"] : $this->getContext($context, "toggle")), "html", null, true);
                echo "\" ).slideToggle( \"slow\" );
      
                        });
                    });
    ";
                // line 15
                $context["toggle"] = ((isset($context["toggle"]) ? $context["toggle"] : $this->getContext($context, "toggle")) + 1);
                // line 16
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyectos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</script>
<script language=\"javascript\">
    ";
        // line 20
        $context["avanceProf"] = 1;
        // line 21
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")));
        foreach ($context['_seq'] as $context["_key"] => $context["proyectos"]) {
            // line 22
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "avancesProfesionales"));
            foreach ($context['_seq'] as $context["_key"] => $context["avance"]) {
                // line 23
                echo "    \$(document).ready(function(){ 
   \$('#botonToggleProf";
                // line 24
                echo twig_escape_filter($this->env, (isset($context["avanceProf"]) ? $context["avanceProf"] : $this->getContext($context, "avanceProf")), "html", null, true);
                echo "').on('click',function(e){
       e.preventDefault();
       \$( \"#contenidoToggleProf";
                // line 26
                echo twig_escape_filter($this->env, (isset($context["avanceProf"]) ? $context["avanceProf"] : $this->getContext($context, "avanceProf")), "html", null, true);
                echo "\" ).slideToggle( \"slow\" );
      
   });
});
";
                // line 30
                $context["avanceProf"] = ((isset($context["avanceProf"]) ? $context["avanceProf"] : $this->getContext($context, "avanceProf")) + 1);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyectos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</script>
";
        // line 34
        $context["contador"] = 1;
        // line 35
        $context["ciclo"] = 1;
        // line 36
        $context["cicloAvanceProf"] = 1;
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")));
        foreach ($context['_seq'] as $context["_key"] => $context["proyectos"]) {
            // line 38
            echo "<div class=\"graficoProyecto col-xs-12 col-sm-12 col-md-12 col-lg-12\">
    <div class=\"headerInfo\">
        <h3>";
            // line 40
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "nombreProyecto")), "html", null, true);
            echo "</h3>        
    </div>
    <div class=\"text-center\">
                <ul class=\"botones nav nav-tabs\">
                    <li><a href=\"#generalPro";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">General</a></li>
                    <li><a href=\"#Profesional";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">Profesionales</a></li>
                    <li><a href=\"#avance";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">Avance</a></li>
                    <li><a href=\"#avanceProf";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">Avance por Profesional</a></li>
                </ul>
    </div>
    <div class=\"tab-content\">
        <div id=\"generalPro";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" class=\"infoPro tab-pane active\">
            <ul> 
                <li><font style=\"font-weight: bold;\">Inicio:</font></font> ";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "fechaInicio"), "d-m-Y"), "html", null, true);
            echo "</li>
                <li><font style=\"font-weight: bold;\">Término:</font> ";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "fechaFin"), "d-m-Y"), "html", null, true);
            echo "</li>
                <li><font style=\"font-weight: bold;\">Horas:</font> ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "horasProgramadas"), "html", null, true);
            echo "</li>
                <li><font style=\"font-weight: bold;\">Patrocinador:</font> ";
            // line 56
            if (($this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "clientes") == null)) {
                echo "\"Por asignar\"";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "clientes"), "nombre"), "html", null, true);
            }
            echo "</li>
            </ul>        
        </div>
        <div id=\"Profesional";
            // line 59
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
            // line 68
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "asignacion"));
            foreach ($context['_seq'] as $context["_key"] => $context["asignacion"]) {
                // line 69
                echo "                        <tr>
                            <form action=\"";
                // line 70
                echo $this->env->getExtension('routing')->getPath("licitacion");
                echo " \" method=\"post\" novalidate>
                            <td>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "pnombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "snombre"), "html", null, true);
                echo "</td>
                            <td>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "horas"), "html", null, true);
                echo "</td>
                            <td>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "valorHora"), "html", null, true);
                echo "</td>
 
                            </form>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asignacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "            </table>
        </div>
        <div id=\"avance";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" class=\"tab-pane\">
            <h4>Avances de Proyecto</h4>
            <canvas id=\"avanceGeneral";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" width=\"300\" height=\"150\"></canvas>
            ";
            // line 83
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "factTable"));
            foreach ($context['_seq'] as $context["_key"] => $context["resumen"]) {
                // line 84
                echo "            <div class=\"avanceProyecto\">
                <p><a href=\"#\" id=\"botonToggle";
                // line 85
                echo twig_escape_filter($this->env, (isset($context["ciclo"]) ? $context["ciclo"] : $this->getContext($context, "ciclo")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resumen"]) ? $context["resumen"] : $this->getContext($context, "resumen")), "fechaId"), "fecha"), "d-m-Y"), "html", null, true);
                echo "</a></p>
                <div  id=\"contenidoToggle";
                // line 86
                echo twig_escape_filter($this->env, (isset($context["ciclo"]) ? $context["ciclo"] : $this->getContext($context, "ciclo")), "html", null, true);
                echo "\" class=\"contenidoToggle";
                echo twig_escape_filter($this->env, (isset($context["ciclo"]) ? $context["ciclo"] : $this->getContext($context, "ciclo")), "html", null, true);
                echo "\" style=\"display:none\">
                <canvas class=\"avanceGraficoProyecto\" id=\"myChart";
                // line 87
                echo twig_escape_filter($this->env, (isset($context["ciclo"]) ? $context["ciclo"] : $this->getContext($context, "ciclo")), "html", null, true);
                echo "\" width=\"180\" height=\"180\"></canvas>
                <div>
                    <table>
                        <tr>
                            <td>Porcentaje de Avance:</td>
                            <td>";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resumen"]) ? $context["resumen"] : $this->getContext($context, "resumen")), "porcentajeAvance"), "html", null, true);
                echo "%</td>
                        </tr>
                        <tr>
                            <td>Porcentaje restante:</td>
                            <td>";
                // line 96
                echo twig_escape_filter($this->env, (100 - $this->getAttribute((isset($context["resumen"]) ? $context["resumen"] : $this->getContext($context, "resumen")), "porcentajeAvance")), "html", null, true);
                echo "%</td>
                        </tr>
                        <tr>
                            <td>Horas programadas:</td>
                            <td>";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resumen"]) ? $context["resumen"] : $this->getContext($context, "resumen")), "horasAsignadas"), "html", null, true);
                echo "</td>
                        </tr>
                        <tr>
                            <td>Horas de Avance:</td>
                            <td>";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resumen"]) ? $context["resumen"] : $this->getContext($context, "resumen")), "horasAvanzadas"), "html", null, true);
                echo "</td>
                        </tr>
                        <tr>
                            <td>Costo a la fecha:</td>
                            <td>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resumen"]) ? $context["resumen"] : $this->getContext($context, "resumen")), "valorFecha"), "html", null, true);
                echo "</td>
                        </tr>
                        <tr>
                            <td>Costo presupuestado:</td>
                            <td>";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resumen"]) ? $context["resumen"] : $this->getContext($context, "resumen")), "valorTotal"), "html", null, true);
                echo "</td>
                        </tr>
                        
                    </table>
                </div>
            </div>  
            </div>
                ";
                // line 119
                $context["ciclo"] = ((isset($context["ciclo"]) ? $context["ciclo"] : $this->getContext($context, "ciclo")) + 1);
                // line 120
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resumen'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "        </div>
        <div id=\"avanceProf";
            // line 122
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" class=\"tab-pane\">
            <h4>Avances de Proyecto por profesional</h4>
            ";
            // line 124
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "avancesProfesionales"));
            foreach ($context['_seq'] as $context["_key"] => $context["avanceProf"]) {
                // line 125
                echo "            <div>
                <p><a href=\"#\" id=\"botonToggleProf";
                // line 126
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
                // line 127
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
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avanceProf"]) ? $context["avanceProf"] : $this->getContext($context, "avanceProf")), "horasProgresadas"), "html", null, true);
                echo "</td>
                            <td>";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avanceProf"]) ? $context["avanceProf"] : $this->getContext($context, "avanceProf")), "horasAsignadas"), "html", null, true);
                echo "</td>
                            <td>";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avanceProf"]) ? $context["avanceProf"] : $this->getContext($context, "avanceProf")), "porcentajeAvance"), "html", null, true);
                echo "%</td>
                            <td>";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avanceProf"]) ? $context["avanceProf"] : $this->getContext($context, "avanceProf")), "valorHora"), "html", null, true);
                echo "</td>
                            <td>";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avanceProf"]) ? $context["avanceProf"] : $this->getContext($context, "avanceProf")), "valorFecha"), "html", null, true);
                echo "</td>
                            <td>";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avanceProf"]) ? $context["avanceProf"] : $this->getContext($context, "avanceProf")), "valorTotal"), "html", null, true);
                echo "</td>
                            
                        </tr>
                    </table>
                </div>
                ";
                // line 156
                $context["cicloAvanceProf"] = ((isset($context["cicloAvanceProf"]) ? $context["cicloAvanceProf"] : $this->getContext($context, "cicloAvanceProf")) + 1);
                // line 157
                echo "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avanceProf'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "
        </div>
    ";
            // line 161
            $context["contador"] = ((isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")) + 1);
            // line 162
            echo "    </div>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyectos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "<script language=\"javascript\">
    ";
        // line 167
        $context["js"] = 1;
        // line 168
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")));
        foreach ($context['_seq'] as $context["_key"] => $context["proyectos"]) {
            // line 169
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "factTable"));
            foreach ($context['_seq'] as $context["_key"] => $context["avance"]) {
                // line 170
                echo "                var ctx = document.getElementById(\"myChart";
                echo twig_escape_filter($this->env, (isset($context["js"]) ? $context["js"] : $this->getContext($context, "js")), "html", null, true);
                echo "\").getContext(\"2d\");
                var data = [
                {
                    value: ";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avance"]) ? $context["avance"] : $this->getContext($context, "avance")), "porcentajeAvance"), "html", null, true);
                echo ",
                    color:\"#F7464A\",
                    highlight: \"#FF5A5E\",
                    label: \"Avance\"
                },
                {
                    value: ";
                // line 179
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
                // line 187
                $context["js"] = ((isset($context["js"]) ? $context["js"] : $this->getContext($context, "js")) + 1);
                // line 188
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyectos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "        
</script>
<script language=\"javascript\">
    ";
        // line 193
        $context["contador"] = 1;
        // line 194
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")));
        foreach ($context['_seq'] as $context["_key"] => $context["proyectos"]) {
            // line 195
            echo "        itemsGraph = [];
        porcentaje = [];
        var lineGraph = document.getElementById(\"avanceGeneral";
            // line 197
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\").getContext(\"2d\");
        ";
            // line 198
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")), "factTable"));
            foreach ($context['_seq'] as $context["_key"] => $context["tiempo"]) {
                // line 199
                echo "            itemsGraph.push(\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tiempo"]) ? $context["tiempo"] : $this->getContext($context, "tiempo")), "fechaId"), "fecha"), "d-m-Y"), "html", null, true);
                echo "\");      
            porcentaje.push(";
                // line 200
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tiempo"]) ? $context["tiempo"] : $this->getContext($context, "tiempo")), "porcentajeAvance"), "html", null, true);
                echo ");
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tiempo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
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
            // line 219
            $context["contador"] = ((isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")) + 1);
            echo "         
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyectos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        echo "    
</script>
";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:grafico.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 193,  487 => 190,  475 => 188,  473 => 187,  431 => 166,  391 => 149,  383 => 147,  343 => 126,  328 => 121,  320 => 119,  70 => 16,  290 => 136,  282 => 96,  180 => 107,  206 => 79,  170 => 65,  97 => 24,  251 => 100,  577 => 231,  569 => 229,  550 => 212,  537 => 209,  533 => 208,  520 => 204,  513 => 200,  488 => 189,  479 => 183,  467 => 179,  462 => 179,  448 => 172,  433 => 166,  425 => 161,  421 => 160,  405 => 156,  354 => 131,  190 => 78,  77 => 20,  266 => 116,  161 => 56,  124 => 34,  84 => 21,  53 => 11,  146 => 58,  281 => 95,  239 => 80,  210 => 70,  202 => 89,  127 => 46,  118 => 34,  65 => 14,  137 => 59,  129 => 41,  323 => 143,  319 => 141,  317 => 140,  289 => 100,  274 => 93,  260 => 118,  232 => 91,  228 => 101,  216 => 96,  211 => 82,  191 => 59,  165 => 74,  114 => 48,  110 => 48,  104 => 32,  100 => 38,  315 => 110,  301 => 102,  267 => 87,  231 => 101,  167 => 68,  160 => 66,  215 => 132,  155 => 56,  829 => 420,  820 => 416,  784 => 388,  780 => 387,  758 => 371,  754 => 370,  744 => 366,  740 => 365,  734 => 362,  730 => 361,  726 => 360,  717 => 354,  710 => 352,  706 => 351,  695 => 343,  670 => 327,  665 => 325,  658 => 323,  654 => 322,  643 => 314,  626 => 300,  622 => 299,  618 => 298,  613 => 296,  606 => 294,  602 => 293,  594 => 288,  584 => 281,  565 => 275,  559 => 274,  555 => 273,  551 => 221,  543 => 219,  539 => 269,  524 => 202,  518 => 203,  514 => 255,  503 => 197,  499 => 195,  493 => 247,  481 => 189,  447 => 227,  443 => 226,  439 => 225,  420 => 161,  416 => 159,  403 => 212,  399 => 151,  395 => 150,  358 => 192,  352 => 189,  348 => 130,  342 => 187,  331 => 122,  304 => 157,  300 => 141,  292 => 167,  250 => 83,  207 => 69,  175 => 65,  150 => 44,  890 => 499,  878 => 490,  865 => 485,  861 => 484,  850 => 476,  841 => 470,  837 => 469,  833 => 468,  823 => 417,  819 => 460,  815 => 459,  810 => 457,  803 => 455,  799 => 454,  788 => 446,  773 => 437,  769 => 379,  759 => 432,  753 => 429,  749 => 428,  745 => 427,  731 => 416,  727 => 415,  718 => 412,  711 => 410,  696 => 401,  685 => 393,  681 => 392,  677 => 391,  671 => 388,  667 => 387,  661 => 384,  657 => 383,  653 => 382,  633 => 373,  617 => 360,  608 => 354,  592 => 341,  583 => 335,  548 => 271,  544 => 307,  529 => 207,  525 => 205,  516 => 200,  512 => 294,  508 => 293,  505 => 292,  482 => 275,  477 => 243,  470 => 241,  428 => 254,  424 => 219,  412 => 246,  408 => 245,  392 => 209,  388 => 208,  369 => 136,  351 => 211,  336 => 124,  332 => 206,  256 => 123,  248 => 83,  233 => 79,  198 => 75,  326 => 183,  308 => 106,  303 => 108,  299 => 173,  295 => 151,  291 => 171,  287 => 96,  279 => 181,  226 => 154,  222 => 87,  197 => 86,  152 => 66,  148 => 65,  113 => 46,  90 => 28,  476 => 280,  472 => 180,  450 => 263,  446 => 170,  442 => 169,  436 => 168,  432 => 257,  426 => 254,  422 => 162,  418 => 252,  370 => 221,  366 => 135,  357 => 132,  350 => 215,  346 => 129,  310 => 112,  286 => 183,  275 => 92,  265 => 90,  263 => 112,  255 => 85,  242 => 96,  218 => 86,  192 => 79,  186 => 110,  178 => 83,  172 => 98,  153 => 46,  1015 => 562,  1013 => 561,  1010 => 560,  1006 => 556,  1004 => 555,  1001 => 554,  998 => 553,  932 => 491,  925 => 487,  913 => 478,  901 => 469,  895 => 466,  888 => 464,  884 => 463,  872 => 487,  853 => 438,  849 => 437,  845 => 436,  839 => 433,  835 => 432,  831 => 421,  825 => 418,  821 => 427,  817 => 415,  812 => 424,  805 => 422,  801 => 421,  790 => 413,  777 => 438,  770 => 399,  763 => 433,  757 => 392,  750 => 369,  746 => 389,  733 => 379,  723 => 414,  719 => 371,  714 => 369,  707 => 409,  703 => 366,  692 => 358,  682 => 351,  678 => 329,  674 => 328,  668 => 346,  664 => 345,  660 => 344,  655 => 342,  648 => 340,  644 => 376,  637 => 374,  631 => 333,  629 => 332,  624 => 330,  611 => 320,  607 => 318,  596 => 289,  589 => 309,  585 => 308,  580 => 279,  574 => 278,  562 => 296,  556 => 310,  547 => 289,  542 => 210,  538 => 306,  534 => 285,  528 => 261,  517 => 279,  511 => 199,  507 => 198,  501 => 198,  497 => 248,  494 => 194,  489 => 246,  485 => 245,  464 => 257,  460 => 177,  456 => 255,  452 => 254,  449 => 253,  445 => 265,  441 => 169,  434 => 167,  417 => 159,  411 => 235,  400 => 244,  385 => 228,  377 => 200,  373 => 199,  359 => 214,  353 => 211,  349 => 210,  338 => 186,  333 => 203,  325 => 144,  318 => 174,  313 => 144,  306 => 194,  284 => 190,  277 => 186,  271 => 117,  259 => 104,  245 => 109,  213 => 93,  195 => 87,  185 => 69,  181 => 56,  345 => 209,  340 => 125,  335 => 185,  329 => 118,  311 => 138,  307 => 141,  302 => 142,  296 => 104,  293 => 97,  288 => 135,  280 => 161,  276 => 160,  272 => 127,  270 => 92,  261 => 86,  257 => 103,  253 => 101,  249 => 108,  244 => 82,  236 => 80,  225 => 110,  212 => 82,  205 => 142,  200 => 76,  188 => 111,  184 => 93,  174 => 82,  134 => 38,  126 => 35,  76 => 28,  58 => 13,  34 => 12,  23 => 1,  480 => 162,  474 => 242,  469 => 158,  461 => 269,  457 => 176,  453 => 173,  444 => 149,  440 => 148,  437 => 147,  435 => 167,  430 => 222,  427 => 143,  423 => 142,  413 => 158,  409 => 157,  407 => 156,  402 => 244,  398 => 243,  393 => 231,  387 => 148,  384 => 237,  381 => 137,  379 => 146,  374 => 116,  368 => 112,  365 => 111,  362 => 134,  360 => 109,  355 => 127,  341 => 105,  337 => 103,  322 => 120,  314 => 139,  312 => 194,  309 => 142,  305 => 136,  298 => 137,  294 => 138,  285 => 134,  283 => 125,  278 => 94,  268 => 116,  264 => 115,  258 => 112,  252 => 84,  247 => 98,  241 => 77,  229 => 78,  220 => 72,  214 => 71,  177 => 55,  169 => 53,  140 => 48,  132 => 51,  128 => 36,  107 => 38,  61 => 20,  273 => 121,  269 => 127,  254 => 115,  243 => 146,  240 => 81,  238 => 104,  235 => 78,  230 => 82,  227 => 101,  224 => 73,  221 => 109,  219 => 150,  217 => 69,  208 => 90,  204 => 78,  179 => 66,  159 => 61,  143 => 55,  135 => 48,  119 => 44,  102 => 26,  71 => 19,  67 => 16,  63 => 24,  59 => 13,  87 => 27,  94 => 23,  89 => 22,  85 => 35,  75 => 31,  68 => 15,  56 => 12,  38 => 5,  201 => 83,  196 => 81,  183 => 57,  171 => 64,  166 => 80,  163 => 62,  158 => 70,  156 => 65,  151 => 57,  142 => 68,  138 => 40,  136 => 45,  121 => 33,  117 => 36,  105 => 43,  91 => 46,  62 => 14,  49 => 8,  28 => 2,  24 => 2,  26 => 6,  21 => 2,  31 => 3,  25 => 3,  19 => 1,  93 => 25,  88 => 31,  78 => 18,  46 => 7,  44 => 7,  27 => 4,  79 => 32,  72 => 17,  69 => 16,  47 => 9,  40 => 6,  37 => 5,  22 => 2,  246 => 82,  157 => 47,  145 => 44,  139 => 54,  131 => 47,  123 => 34,  120 => 47,  115 => 32,  111 => 31,  108 => 49,  101 => 40,  98 => 41,  96 => 33,  83 => 25,  74 => 18,  66 => 16,  55 => 18,  52 => 9,  50 => 8,  43 => 8,  41 => 13,  35 => 5,  32 => 3,  29 => 2,  209 => 144,  203 => 68,  199 => 74,  193 => 86,  189 => 70,  187 => 86,  182 => 84,  176 => 105,  173 => 54,  168 => 101,  164 => 51,  162 => 79,  154 => 46,  149 => 45,  147 => 56,  144 => 51,  141 => 51,  133 => 51,  130 => 37,  125 => 39,  122 => 52,  116 => 33,  112 => 50,  109 => 30,  106 => 37,  103 => 37,  99 => 36,  95 => 28,  92 => 32,  86 => 32,  82 => 20,  80 => 23,  73 => 17,  64 => 15,  60 => 13,  57 => 11,  54 => 23,  51 => 18,  48 => 8,  45 => 14,  42 => 14,  39 => 6,  36 => 5,  33 => 3,  30 => 10,);
    }
}
