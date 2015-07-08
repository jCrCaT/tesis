<?php

/* AppMediBundle:Default:IndexReunion.html.twig */
class __TwigTemplate_2480b0c6fe0f86324b81ac07631533ab767cce1e57c652ea19ac2a658e845ecf extends Twig_Template
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
        echo "<div class=\"nextReunion\">
                <div><h4>Mis próximas reuniones</h4></div>
                <table>
                    <tr class=\"encabezadoReunion\">
                        <td>Fecha</td>
                        <td>Hora</td>
                        <td>Cliente</td>
                        <td>Lugar</td>                        
                    </tr>
                    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reuniones"]) ? $context["reuniones"] : $this->getContext($context, "reuniones")));
        foreach ($context['_seq'] as $context["_key"] => $context["reuniones"]) {
            echo " 
                    <tr class=\"contenidoReunion\">
                        <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reuniones"]) ? $context["reuniones"] : $this->getContext($context, "reuniones")), "fechaInicio"), "d-m-Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reuniones"]) ? $context["reuniones"] : $this->getContext($context, "reuniones")), "fechaInicio"), "H:i"), "html", null, true);
            echo "</td>
                        <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reuniones"]) ? $context["reuniones"] : $this->getContext($context, "reuniones")), "cliente"), "nombre"), "html", null, true);
            echo "</td>
                        <td>la calle #123</td>                        
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reuniones'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                    <tr>
                        <td class=\"border2\"></td>
                        <td class=\"border2\"></td>
                        <td class=\"border2\"></td>
                        <td class=\"border2\"></td>
                    </tr>
                </table>                              
            </div>
            <div>
";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:IndexReunion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 18,  19 => 1,  315 => 145,  313 => 144,  309 => 142,  307 => 141,  303 => 139,  301 => 138,  298 => 137,  295 => 136,  285 => 130,  273 => 121,  267 => 118,  263 => 117,  255 => 112,  249 => 109,  245 => 108,  238 => 104,  231 => 102,  227 => 101,  218 => 94,  208 => 90,  204 => 89,  200 => 88,  192 => 87,  185 => 85,  179 => 84,  171 => 82,  167 => 81,  160 => 77,  156 => 76,  143 => 66,  134 => 60,  130 => 59,  126 => 58,  120 => 55,  116 => 54,  112 => 53,  107 => 51,  101 => 50,  60 => 13,  57 => 12,  49 => 8,  45 => 14,  41 => 13,  37 => 12,  33 => 3,  30 => 10,);
    }
}
