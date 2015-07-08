<?php

/* AppMediBundle:Default:IndexProyecto.html.twig */
class __TwigTemplate_169a56f55d888f2955b5c6b44c021d311664342ae586496ea3458d22f109d368 extends Twig_Template
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
        echo "<div>
                <div><h4>Mis proyectos</h4></div>
                <table>
                    ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")));
        foreach ($context['_seq'] as $context["_key"] => $context["proyecto"]) {
            // line 5
            echo "                    <tr>
                        <td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "nombre"), "html", null, true);
            echo "</td>
                        <td style=\"width: 80%\">
                            <div class=\"progress\">
                                ";
            // line 9
            if (($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "avance") <= 50)) {
                // line 10
                echo "                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "avance"), "html", null, true);
                echo "%\" alt=\"hello\">
                                    <span class=\"sr-only\">40% Complete (success)</span>
                                </div>
                                ";
            }
            // line 14
            echo "                                ";
            if ((($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "avance") >= 51) && ($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "avance") <= 75))) {
                // line 15
                echo "                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "avance"), "html", null, true);
                echo "%\" alt=\"hello\">
                                    <span class=\"sr-only\">40% Complete (success)</span>
                                </div>
                                ";
            }
            // line 19
            echo "                                ";
            if (($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "avance") >= 76)) {
                // line 20
                echo "                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "avance"), "html", null, true);
                echo "%\" alt=\"hello\">
                                    <span class=\"sr-only\">40% Complete (success)</span>
                                </div>
                                ";
            }
            // line 24
            echo "                                
                            </div>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                </table>
            </div>";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:IndexProyecto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  69 => 24,  61 => 20,  58 => 19,  50 => 15,  47 => 14,  39 => 10,  31 => 6,  28 => 5,  24 => 4,  55 => 18,  19 => 1,  315 => 145,  313 => 144,  309 => 142,  307 => 141,  303 => 139,  301 => 138,  298 => 137,  295 => 136,  285 => 130,  273 => 121,  267 => 118,  263 => 117,  255 => 112,  249 => 109,  245 => 108,  238 => 104,  231 => 102,  227 => 101,  218 => 94,  208 => 90,  204 => 89,  200 => 88,  192 => 87,  185 => 85,  179 => 84,  171 => 82,  167 => 81,  160 => 77,  156 => 76,  143 => 66,  134 => 60,  130 => 59,  126 => 58,  120 => 55,  116 => 54,  112 => 53,  107 => 51,  101 => 50,  60 => 13,  57 => 12,  49 => 8,  45 => 14,  41 => 13,  37 => 9,  33 => 3,  30 => 10,);
    }
}
