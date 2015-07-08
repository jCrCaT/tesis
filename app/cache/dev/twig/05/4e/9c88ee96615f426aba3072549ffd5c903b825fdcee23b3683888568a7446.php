<?php

/* AppMediBundle:Default:busquedaProyecto.html.twig */
class __TwigTemplate_054e9c88ee96615f426aba3072549ffd5c903b825fdcee23b3683888568a7446 extends Twig_Template
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
        echo "
";
        // line 12
        echo "    ";
        $context["contador"] = 1;
        // line 13
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 14
            echo "    <div class=\"busquedaProyecto col-xs-12 col-sm-12 col-md-12 col-lg-12\">
    \t<div class=\"tittle\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")), "nombreProyecto"), "html", null, true);
            echo "</div>
    \t<div class=\"ulInfo\">
    \t\t<ul class=\"nav nav-tabs\">
    \t\t\t<li class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\"><a href=\"#general";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">General</a></li>
    \t\t\t<li class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\"><a href=\"#profesionales";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">Profesionales</a></li>
    \t\t\t<li class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\"><a href=\"#etapas";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">Etapas</a></li>
    \t\t</ul>
    \t</div>
    \t<div class=\"tab-content\">
    \t\t<div id=\"general";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" class=\"tab-pane active\">
    \t\t<ul class=\"ulBusquedaProyecto\">
    \t\t\t<li>Información General</li>
    \t\t\t<li>Fecha de Inicio: ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")), "fechaInicio"), "d-m-Y"), "html", null, true);
            echo "</li>
    \t\t\t<li>Fecha de Término: ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")), "fechaFin"), "d-m-Y"), "html", null, true);
            echo "</li>
    \t\t\t<li>Horas Programadas: ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")), "horasProgramadas"), "html", null, true);
            echo "</li>
    \t\t</ul>
    \t\t</div>
    \t\t<div id=\"profesionales";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" class=\"tab-pane\">
    \t\t\t<table class=\"proyectoBusquedaP\">
    \t\t\t\t<tr>
    \t\t\t\t\t<td class=\"first\"></td>
    \t\t\t\t\t<td class=\"first\">Nombre</td>
    \t\t\t\t\t<td class=\"first\">Horas</td>
    \t\t\t\t\t<td class=\"first\">Ingreso</td>
    \t\t\t\t\t<td class=\"first\">Retiro</td>
    \t\t\t\t</tr>
    \t\t\t";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")), "asignacion"));
            foreach ($context['_seq'] as $context["_key"] => $context["asignacion"]) {
                // line 42
                echo "    \t\t\t\t<tr>
    \t\t\t\t\t<td class=\"third\">";
                // line 43
                if (($this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "imagenPerfil") == null)) {
                    // line 44
                    echo "                <div class=\"dashImgPerfilSec\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/male.png"), "html", null, true);
                    echo "\" class=\"img-circle\" /></div>
                ";
                } else {
                    // line 46
                    echo "                <div class=\"dashImgPerfilSec\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("documentos/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "imagenPerfil"), "path"), "html", null, true);
                    echo "\"></div>
                ";
                }
                // line 47
                echo "</td>
    \t\t\t\t\t<td class=\"third\">
    \t\t\t\t";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "pnombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "papellido"), "html", null, true);
                echo "
    \t\t\t\t\t</td>
    \t\t\t\t\t<td class=\"third\">";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "horas"), "html", null, true);
                echo "</td>
    \t\t\t\t\t<td class=\"third\">30-02-2015</td>
    \t\t\t\t\t<td class=\"third\">30-02-2015</td>
    \t\t\t\t</tr>
    \t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asignacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "    \t\t\t</table>
    \t\t</div>
    \t\t<div id=\"etapas";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" class=\"tab-pane\">
    \t\t\t<table class=\"proyectoBusquedaP\">
    \t\t\t\t<tr>
    \t\t\t\t\t<td class=\"first\">Nombre</td>
    \t\t\t\t\t<td class=\"first\">Fecha de Inicio</td>
    \t\t\t\t\t<td class=\"first\">Fecha de término</td>
    \t\t\t\t</tr>
    \t\t\t";
            // line 65
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")), "asignacionEtapa"));
            foreach ($context['_seq'] as $context["_key"] => $context["etapa"]) {
                // line 66
                echo "    \t\t\t\t<tr>
    \t\t\t\t\t<td class=\"third\"><p>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["etapa"]) ? $context["etapa"] : $this->getContext($context, "etapa")), "etapaProyecto"), "nombre"), "html", null, true);
                echo "</p></td>
                \t\t<td class=\"second\">";
                // line 68
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["etapa"]) ? $context["etapa"] : $this->getContext($context, "etapa")), "fechaInicio"), "d-m-Y"), "html", null, true);
                echo "</td>
                \t\t<td class=\"second\">";
                // line 69
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["etapa"]) ? $context["etapa"] : $this->getContext($context, "etapa")), "fechaTermino"), "d-m-Y"), "html", null, true);
                echo "</td>
    \t\t\t\t</tr>
    \t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etapa'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "    \t\t\t</table>
    \t\t</div>


    \t</div>
    </div>
    ";
            // line 78
            $context["contador"] = ((isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")) + 1);
            // line 79
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:busquedaProyecto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 79,  188 => 78,  180 => 72,  171 => 69,  167 => 68,  163 => 67,  160 => 66,  156 => 65,  146 => 58,  142 => 56,  131 => 51,  124 => 49,  120 => 47,  113 => 46,  107 => 44,  105 => 43,  102 => 42,  98 => 41,  86 => 32,  80 => 29,  76 => 28,  72 => 27,  66 => 24,  59 => 20,  55 => 19,  51 => 18,  45 => 15,  42 => 14,  37 => 13,  34 => 12,  31 => 3,  28 => 2,);
    }
}
