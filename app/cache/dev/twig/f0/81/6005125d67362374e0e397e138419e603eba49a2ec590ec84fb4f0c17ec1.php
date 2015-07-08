<?php

/* AppMediBundle:Default:empresa.html.twig */
class __TwigTemplate_f0816005125d67362374e0e397e138419e603eba49a2ec590ec84fb4f0c17ec1 extends Twig_Template
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
        echo "\">Áreas</a></li>
                    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("proyecto");
        echo "\">Proyectos</a></li>
                    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("empresa");
        echo "\">Actividades</a></li>
                </ul>
            </nav>
";
    }

    // line 12
    public function block_contenido($context, array $blocks = array())
    {
        // line 13
        echo "
<section class=\"contenido\">
<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/modal.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$('.modificarEmpresa').click(function(){
        var id = \$(this).data(\"identificador\");
        var rut = \$(this).data(\"rut\");
        var nombre = \$(this).data(\"nombre\");
        var giro = \$(this).data(\"giro\");
        var telefono = \$(this).data(\"telefono\");
        var correo = \$(this).data(\"correo\");
        var direccion = \$(this).data(\"direccion\");
        var comuna = \$(this).data(\"comuna\");
        \$(\"#valorIdentificador\").val( id );
        document.getElementById(\"valorRut\").innerHTML = rut;
        document.getElementById(\"valorNombre\").innerHTML = nombre;
        document.getElementById(\"valorGiro\").innerHTML = giro;
        document.getElementById(\"valorTelefono\").innerHTML = telefono;
        document.getElementById(\"valorCorreo\").innerHTML = correo;
        document.getElementById(\"valorDireccion\").innerHTML = direccion;
        document.getElementById(\"valorComuna\").innerHTML = comuna;
        \$('#popup').fadeIn('slow');
        \$('.popup-overlay').fadeIn('slow');
        \$('.popup-overlay').height(\$(window).height());
        return false;
    });
    
    \$('#close').click(function(){
        \$('#popup').fadeOut('slow');
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
<script language=\"javascript\">
    \$(document).ready(function(){ 
        \$('#agregaritem').on('click',function(e){
            e.preventDefault();
            \$( \"#formAdd\").slideToggle( \"slow\" );
        });
    });
</script>
<div class=\"agregarItem\">
    <div>
    <h4>Agregar Empresa</h4>
    <a href=\"#\" id=\"agregaritem\" class=\"toggle linkMostrar\">Mostrar/Ocultar</a>
    <div id=\"formAdd\" style=\"display:none\">
        <div class=\"addUbication\">
        <table>
            <form action=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("empresa");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
            ";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <tr>
                <td>";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut"), 'widget', array("value" => $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "rut")));
        echo "</td>
                <td>";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut"), 'errors');
        echo "</td> 
            </tr>
            <tr>
                <td>";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'widget', array("value" => $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "nombre")));
        echo "</td>
                <td>";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'errors');
        echo "</td>  
            </tr>
            <tr>
                <td>";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "giro"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "giro"), 'widget', array("value" => $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "giro")));
        echo "</td>
                <td>";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "giro"), 'errors');
        echo "</td> 
            </tr>
            <tr>
                <td>";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion"), 'widget', array("value" => $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "direccion")));
        echo "</td>
                <td>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion"), 'errors');
        echo "</td> 
            </tr>
            <tr>
                <td>";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correo"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correo"), 'widget', array("value" => $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "correo")));
        echo "</td>
                <td>";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correo"), 'errors');
        echo "</td> 
            </tr>
            <tr>
                <td>";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'widget', array("value" => $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "telefono")));
        echo "</td>
                <td>";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'errors');
        echo "</td> 
            </tr>
            <tr>
                <td>";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comuna"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comuna"), 'widget', array("attr" => array("class" => "chosen-select")));
        echo "</td>
            </tr>
            <tr class=\"filaFormulario\">
                <td><input type=\"submit\" name=\"salvarEmpresa\" value=\"Salvar Empresa\"></td>
                <td></td>
            </tr>
            ";
        // line 108
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </form> 
        </table>
    </div>    
</div> 
</div>
</div>
<section class=\"tabla\">    
    <div class=\"licitacion\">
<table>
        <tr class=\"trHeader\">
            <td class=\"headerTable1\">R.U.T de ";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
        echo "</td>
            <td class=\"headerTable1\">Nombre de ";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
        echo "</td>
            <td class=\"headerTable1\">Giro de ";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
        echo "</td>
            <td class=\"headerTable1\">Direccion de ";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
        echo "</td>
            <td class=\"headerTable1\">Comuna de ";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
        echo "</td>
            <td class=\"headerTable1\"></td>
            <td class=\"headerTable1\"></td>
            
        </tr>
        ";
        // line 128
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")));
        foreach ($context['_seq'] as $context["_key"] => $context["listar"]) {
            // line 129
            echo "        <form action=\"";
            echo $this->env->getExtension('routing')->getPath("empresa");
            echo " \" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " novalidate>
        <tr class=\"trContent1\">    
            <td class=\"tabInfo\">";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "rut"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "nombre"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "giro"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "direccion"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "comuna"), "nombre"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\"><input type=\"submit\" name=\"eliminar\" value=\"eliminar\"></td>
            <td class=\"trContent1\"><input type=\"button\" name=\"modificarEmpresa\" value=\"modificar\" class=\"modificarEmpresa\" data-identificador=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\" data-nombre=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "nombre"), "html", null, true);
            echo "\" data-rut=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "rut"), "html", null, true);
            echo "\" data-giro=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "giro"), "html", null, true);
            echo "\" data-comuna=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "comuna"), "nombre"), "html", null, true);
            echo "\" data-direccion=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "direccion"), "html", null, true);
            echo "\"></td>
            <td><input type=\"hidden\" name=\"valorEliminar\" value=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\"></td>
            <td><input type=\"hidden\" name=\"tabla\" value=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
            echo "\"></td>
        </tr>    
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "    </table>
</div>
</section>  
</section>  
<div id=\"popup\" style=\"display: none;\">
    <div class=\"content-popup2\">
        <h4 class=\"modalh4\">Usted modificará una Región</h4>
        <div class=\"close\"><a href=\"#\" id=\"close\"><img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
            <form action=\"";
        // line 151
        echo $this->env->getExtension('routing')->getPath("empresa");
        echo " \" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEmpresa"]) ? $context["formEmpresa"] : $this->getContext($context, "formEmpresa")), 'enctype');
        echo " novalidate>
                <table>
                    ";
        // line 153
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEmpresa"]) ? $context["formEmpresa"] : $this->getContext($context, "formEmpresa")), 'form_start');
        echo "
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorRut\"></div></td>
                        <td>R.U,T de Empresa</td>
                        <td>";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEmpresa"]) ? $context["formEmpresa"] : $this->getContext($context, "formEmpresa")), "rut"), 'widget');
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEmpresa"]) ? $context["formEmpresa"] : $this->getContext($context, "formEmpresa")), "rut"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorNombre\"></div></td>
                        <td>Nombre de Empresa</td>
                        <td>";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEmpresa"]) ? $context["formEmpresa"] : $this->getContext($context, "formEmpresa")), "nombre"), 'widget');
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEmpresa"]) ? $context["formEmpresa"] : $this->getContext($context, "formEmpresa")), "nombre"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorGiro\"></div></td>
                        <td>Giro de Empresa</td>
                        <td>";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEmpresa"]) ? $context["formEmpresa"] : $this->getContext($context, "formEmpresa")), "giro"), 'widget');
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>";
        // line 179
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEmpresa"]) ? $context["formEmpresa"] : $this->getContext($context, "formEmpresa")), "giro"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorDireccion\"></div></td>
                        <td>Dirección de Empresa</td>
                        <td>";
        // line 185
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEmpresa"]) ? $context["formEmpresa"] : $this->getContext($context, "formEmpresa")), "direccion"), 'widget');
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEmpresa"]) ? $context["formEmpresa"] : $this->getContext($context, "formEmpresa")), "direccion"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorComuna\"></div></td>
                        <td>Comuna de Empresa</td>
                        <td>";
        // line 194
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEmpresa"]) ? $context["formEmpresa"] : $this->getContext($context, "formEmpresa")), "comuna"), 'widget', array("attr" => array("class" => "chosen-select")));
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>";
        // line 197
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEmpresa"]) ? $context["formEmpresa"] : $this->getContext($context, "formEmpresa")), "comuna"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorTelefono\"></div></td>
                        <td>Nombre de Región</td>
                        <td>";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEmpresa"]) ? $context["formEmpresa"] : $this->getContext($context, "formEmpresa")), "telefono"), 'widget');
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>";
        // line 206
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEmpresa"]) ? $context["formEmpresa"] : $this->getContext($context, "formEmpresa")), "telefono"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorCorreo\"></div></td>
                        <td>Correo de Comuna</td>
                        <td>";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEmpresa"]) ? $context["formEmpresa"] : $this->getContext($context, "formEmpresa")), "correo"), 'widget');
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>";
        // line 215
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEmpresa"]) ? $context["formEmpresa"] : $this->getContext($context, "formEmpresa")), "correo"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td><input type=\"submit\" name=\"guardarCambios\" value=\"guardarCambios\"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><input type=\"hidden\" name=\"valorIdentificador\" id=\"valorIdentificador\" value=\"\"></td>
                    </tr>
                    ";
        // line 224
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEmpresa"]) ? $context["formEmpresa"] : $this->getContext($context, "formEmpresa")), 'form_end');
        echo "
                </table>
           </form>
    </div>
</div>

";
    }

    // line 231
    public function block_horas($context, array $blocks = array())
    {
        // line 232
        echo "
";
        // line 233
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexHoras.html.twig", array("formHoras" => (isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras"))));
        // line 234
        echo "

";
        // line 236
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexReunion.html.twig", array("reuniones" => (isset($context["reuniones"]) ? $context["reuniones"] : $this->getContext($context, "reuniones"))));
        // line 237
        echo "

";
        // line 239
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexProyecto.html.twig", array("proyectos" => (isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto"))));
        // line 240
        echo "

";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:empresa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 240,  492 => 239,  488 => 237,  486 => 236,  482 => 234,  480 => 233,  477 => 232,  474 => 231,  463 => 224,  451 => 215,  445 => 212,  436 => 206,  430 => 203,  421 => 197,  415 => 194,  406 => 188,  400 => 185,  391 => 179,  385 => 176,  376 => 170,  370 => 167,  361 => 161,  355 => 158,  347 => 153,  340 => 151,  336 => 150,  327 => 143,  317 => 139,  313 => 138,  299 => 137,  294 => 135,  290 => 134,  286 => 133,  282 => 132,  278 => 131,  270 => 129,  266 => 128,  258 => 123,  254 => 122,  250 => 121,  246 => 120,  242 => 119,  228 => 108,  219 => 102,  215 => 101,  209 => 98,  205 => 97,  201 => 96,  195 => 93,  191 => 92,  187 => 91,  181 => 88,  177 => 87,  173 => 86,  167 => 83,  163 => 82,  159 => 81,  153 => 78,  149 => 77,  145 => 76,  139 => 73,  135 => 72,  131 => 71,  126 => 69,  120 => 68,  64 => 15,  60 => 13,  57 => 12,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 3,  30 => 2,);
    }
}
