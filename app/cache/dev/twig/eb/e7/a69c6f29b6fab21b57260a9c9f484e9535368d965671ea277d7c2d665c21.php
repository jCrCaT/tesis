<?php

/* AppMediBundle:Default:userproyecto.html.twig */
class __TwigTemplate_ebe7a69c6f29b6fab21b57260a9c9f484e9535368d965671ea277d7c2d665c21 extends Twig_Template
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
        echo "<script lang=\"text/javascript\">
    \$(document).ready(function(){
    \$(\".chosen-select\").chosen();
});
</script>
<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("asignarproyecto");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
    ";
        // line 9
        if (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "crear")) {
            // line 10
            echo "    <h4>Asignar Proyecto</h4>
    ";
        } else {
            // line 12
            echo "    <h4>Usted modificará la asignación <font class=\"red\">\"\"</font> </h4>
    ";
        }
        // line 14
        echo "    <div class=\"addUbication\">
        <table>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <tr>
                <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profesional"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profesional"), 'widget', array("attr" => array("class" => "chosen-select")));
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proyecto"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proyecto"), 'widget', array("attr" => array("class" => "chosen-select")));
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horas"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horas"), 'widget');
        echo "</td>
                <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horas"), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valorHora"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valorHora"), 'widget');
        echo "</td>
                <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valorHora"), 'errors');
        echo "</td>
            </tr>
            ";
        // line 35
        if (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "crear")) {
            // line 36
            echo "            <tr class=\"filaFormulario\">
                <td><input class=\"btn btn-danger\" type=\"submit\" name=\"asignarProyecto\" value=\"Asignar Proyecto\"></td>
                <td></td>
            </tr>
            ";
        } else {
            // line 41
            echo "            <tr class=\"filaFormulario\">
                <td><input class=\"btn btn-danger\" type=\"submit\" name=\"modificarProyecto\" value=\"Modificar Proyecto\"></td>
                <td><input type=\"hidden\" name=\"valorModificar\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "id"), "html", null, true);
            echo "\"></td>
                <td></td>
            </tr>
            ";
        }
        // line 47
        echo "        </table>
    </div>    
</form>    

<table class=\"listar\">
        <tr>
            
            <td class=\"tabSup\">Id</td>
            <td class=\"tabSup\">Profesional</td>
            <td class=\"tabSup\">Proyecto</td>
            <td class=\"tabSup\">Horas asignadas</td>
            <td class=\"tabSup\">Valor hora (UF)</td>
            <td class=\"tabSup\"></td>
            <td class=\"tabSup\"></td>
            <td class=\"tabSup\"></td>            
            
        </tr>
        ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")));
        foreach ($context['_seq'] as $context["_key"] => $context["listar"]) {
            // line 65
            echo "        <form action=\"";
            echo $this->env->getExtension('routing')->getPath("asignarproyecto");
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " novalidate>
        <tr>    
            <td class=\"tabInfo\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "profesional"), "pnombre"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "profesional"), "snombre"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "proyecto"), "nombreProyecto"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "horas"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 71
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "valorHora"), 2, ".", ","), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">Añadir excepción</td>
            <td class=\"tabInfo\"><input class=\"btn btn-danger\" type=\"submit\" name=\"modificar\" value=\"modificar\"></td>
            <td class=\"tabInfo\"><input class=\"btn btn-danger\" type=\"submit\" name=\"eliminar\" value=\"eliminar\"></td>
            <td><input type=\"hidden\" name=\"valorEliminar\" value=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\"></td>
            <td><input type=\"hidden\" name=\"area\" value=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "proyecto"), "nombreProyecto"), "html", null, true);
            echo "\"></td>
            <td><input type=\"hidden\" name=\"profesional\" value=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "profesional"), "username"), "html", null, true);
            echo "\"></td>
            <td><input type=\"hidden\" name=\"tabla\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
            echo "\"></td>
        <tr/>    
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "
    </table> 
";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:userproyecto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 82,  198 => 78,  194 => 77,  190 => 76,  186 => 75,  179 => 71,  175 => 70,  171 => 69,  165 => 68,  161 => 67,  153 => 65,  149 => 64,  130 => 47,  123 => 43,  119 => 41,  112 => 36,  110 => 35,  105 => 33,  101 => 32,  97 => 31,  91 => 28,  87 => 27,  83 => 26,  77 => 23,  73 => 22,  67 => 19,  63 => 18,  58 => 16,  54 => 14,  50 => 12,  46 => 10,  44 => 9,  38 => 8,  31 => 3,  28 => 2,);
    }
}
