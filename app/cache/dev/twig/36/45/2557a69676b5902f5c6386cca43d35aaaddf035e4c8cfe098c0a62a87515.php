<?php

/* AppMediBundle:Default:proyecto.html_1.twig */
class __TwigTemplate_36452557a69676b5902f5c6386cca43d35aaaddf035e4c8cfe098c0a62a87515 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_contenido($context, array $blocks = array())
    {
        // line 3
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/modal.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mootools2.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/calendar.js"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/calendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$('.addEtapa').click(function(){
        var etapa = \$(this).data(\"etapa\");
        \$(\"#valorProyecto\").val( etapa );
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
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$('.addEtapaE').click(function(){
        var etapa = \$(this).data(\"etapa\");
        \$(\"#valorProyecto1\").val( etapa );
        \$('#popup1').fadeIn('slow');
        \$('.popup-overlay').fadeIn('slow');
        \$('.popup-overlay').height(\$(window).height());
        return false;
    });
    
  \$('#close1').click(function(){
    \$('#popup1').fadeOut('slow');
    \$('.popup-overlay').fadeOut('slow');
    return false;
  });
});
</script>
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$('.addEtapaE').click(function(){
        var etapa = \$(this).data(\"etapa\");
        \$(\"#valorProyecto1\").val( etapa );
        \$('#popup1').fadeIn('slow');
        \$('.popup-overlay').fadeIn('slow');
        \$('.popup-overlay').height(\$(window).height());
        return false;
    });
    
  \$('#close1').click(function(){
    \$('#popup1').fadeOut('slow');
    \$('.popup-overlay').fadeOut('slow');
    return false;
  });
});
</script>
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$('.addExcepcionPlazo').click(function(){
        var proyecto = \$(this).data(\"proyecto\");
        \$(\"#valorProyectoEx\").val( proyecto );
        \$('#popup2').fadeIn('slow');
        \$('.popup-overlay').fadeIn('slow');
        \$('.popup-overlay').height(\$(window).height());
        return false;
    });
    
  \$('#close2').click(function(){
    \$('#popup2').fadeOut('slow');
    \$('.popup-overlay').fadeOut('slow');
    return false;
  });
});
</script>
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$('.addExcepcionEtapa').click(function(){
        var etapa = \$(this).data(\"etapa\");
        \$(\"#valorEtapaEx\").val( etapa );
        \$('#popup3').fadeIn('slow');
        \$('.popup-overlay').fadeIn('slow');
        \$('.popup-overlay').height(\$(window).height());
        return false;
    });
    
  \$('#close3').click(function(){
    \$('#popup3').fadeOut('slow');
    \$('.popup-overlay').fadeOut('slow');
    return false;
  });
});
</script>
<script>
    \$\$('input.DatePicker').each( function(el){
\tnew DatePicker(el);
});
</script>
<form action=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("proyecto");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
    ";
        // line 103
        if (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "crear")) {
            // line 104
            echo "    <h4>Agregar Proyecto</h4>
    ";
        } else {
            // line 106
            echo "    <h4>Usted modificará el Proyecto <font class=\"red\">\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "nombre"), "html", null, true);
            echo "\"</font> </h4>
    ";
        }
        // line 108
        echo "    <div class=\"addUbication\">
        <table>
            ";
        // line 110
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <tr>
                <td>";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreProyecto"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreProyecto"), 'widget', array("value" => $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "nombreProyecto")));
        echo "</td>
                <td>";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreProyecto"), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion"), 'label', array("label_attr" => array("class" => "etiqueta", "cols" => "50", "rows" => "50")));
        echo "</td>
                <td>";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion"), 'widget', array("value" => $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "descripcion")));
        echo "</td>
                <td>";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion"), 'errors');
        echo "</td> 
            </tr>
            <tr>
                <td>";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horasProgramadas"), 'label', array("label_attr" => array("class" => "etiqueta", "cols" => "50", "rows" => "50")));
        echo "</td>
                <td>";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horasProgramadas"), 'widget', array("value" => $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "descripcion")));
        echo "</td>
                <td>";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horasProgramadas"), 'errors');
        echo "</td> 
            </tr>
            <tr>
                <td>Fecha de inicio</td>
                <td><input type=\"text\" class=\"DatePicker\" name=\"fechaInicio\" type=\"text\"></td> 
            </tr>
            <tr>
                <td>Fecha de término</td>
                <td><input class=\"DatePicker\" name=\"fechaFin\"></td>
            </tr>
            ";
        // line 134
        if (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "crear")) {
            // line 135
            echo "            <tr class=\"filaFormulario\">
                <td><input type=\"submit\" name=\"salvarProyecto\" class=\"btnAdd\" value=\"Salvar Proyecto\"></td>
                <td></td>
            </tr>
            ";
        } else {
            // line 140
            echo "            <tr class=\"filaFormulario\">
                <td><input type=\"submit\" name=\"modificarProyecto\" value=\"Modificar Proyecto\"></td>
                <td><input type=\"hidden\" name=\"valorProyecto\" value=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "id"), "html", null, true);
            echo "\"></td>
                <td></td>
            </tr>
            ";
        }
        // line 145
        echo "   
            ";
        // line 146
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </table>
    </div>    
</form>  
";
        // line 150
        $context["contador"] = 1;
        // line 151
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")));
        foreach ($context['_seq'] as $context["_key"] => $context["listar"]) {
            // line 152
            echo "<div class=\"informacionProyecto col-xs-12 col-sm-12 col-md-10 col-lg-10\">
    <div class=\"headerInfo\">
        <h3>";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "nombreProyecto"), "html", null, true);
            echo "</h3>
    </div>
    <div class=\"text-center\">
                <ul class=\"botones nav nav-tabs\">
                    <li><a href=\"#generalPro";
            // line 158
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">General</a></li>
                    <li><a href=\"#Profesional";
            // line 159
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">Profesionales</a></li>
                    <li><a href=\"#etapas";
            // line 160
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">Etapas</a></li>
                    <li><a href=\"#excepcion";
            // line 161
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">Excepciones</a></li>
                </ul>
    </div>
    <div class=\"tab-content\">
        <div id=\"generalPro";
            // line 165
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" class=\"infoPro tab-pane active\">
            <ul>
                <li><font style=\"font-weight: bold;\">Nombre:</font> ";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "nombreProyecto"), "html", null, true);
            echo "</li>  
                <li><font style=\"font-weight: bold;\">Inicio:</font></font> ";
            // line 168
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "fechaInicio"), "d-m-Y"), "html", null, true);
            echo "</li>
                <li><font style=\"font-weight: bold;\">Término:</font> ";
            // line 169
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "fechaFin"), "d-m-Y"), "html", null, true);
            echo "</li>
                <li><font style=\"font-weight: bold;\">Horas:</font> ";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "horasProgramadas"), "html", null, true);
            echo "</li>
                <li><font style=\"font-weight: bold;\">Patrocinador:</font> ";
            // line 171
            if (($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "clientes") == null)) {
                echo "\"Por asignar\"";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "clientes"), "nombre"), "html", null, true);
            }
            echo "</li>
            </ul>
        </div>
        <div id=\"Profesional";
            // line 174
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" class=\"tab-pane\">
            <h4>Profesionales asignados a Proyecto</h4>
            <table class=\"reqLicitacion\">                        
                        <tr>
                            <td class=\"tituloReLic\">Profesional</td>
                            <td class=\"tituloReLic\">Horas</td>
                            <td class=\"tituloReLic\">Valor por hora (UF)</td>
                            <td class=\"tituloReLic\"></td>
                            
                        </tr>
                        ";
            // line 184
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "asignacion"));
            foreach ($context['_seq'] as $context["_key"] => $context["asignacion"]) {
                // line 185
                echo "                        <tr>
                            <form action=\"";
                // line 186
                echo $this->env->getExtension('routing')->getPath("licitacion");
                echo " \" method=\"post\" novalidate>
                            <td>";
                // line 187
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "pnombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "snombre"), "html", null, true);
                echo "</td>
                            <td>";
                // line 188
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "horas"), "html", null, true);
                echo "</td>
                            <td>";
                // line 189
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "valorHora"), "html", null, true);
                echo "</td>
                            <td><input type=\"submit\" class=\"btnRemProf\" name=\"btnRemProf\"/>
                                <input type=\"hidden\" id=\"remProfPro\" name=\"removerProLic\" value=\"proyecto\"/>
                                <input type=\"hidden\" name=\"eliminarProfLic\" value=\"";
                // line 192
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "id"), "html", null, true);
                echo "\"/>
                            </td>
                            </form>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asignacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "                    </table>
        </div>
        <div id=\"etapas";
            // line 199
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" class=\"tab-pane\">
            <h4>Etapas de proyecto \"";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "nombreProyecto"), "html", null, true);
            echo "\"</h4>
            <table class=\"reqLicitacion\">
                <tr>
                    <td class=\"tituloReLic\">Nombre de etapa</td>
                    <td class=\"tituloReLic\">Fecha de inicio</td>
                    <td class=\"tituloReLic\">Fecha de término</td> 
                    <td></td>
                </tr>
                ";
            // line 208
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "asignacionEtapa"));
            foreach ($context['_seq'] as $context["_key"] => $context["asignacionEtapa"]) {
                // line 209
                echo "                    <tr>
                        <td>";
                // line 210
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacionEtapa"]) ? $context["asignacionEtapa"] : $this->getContext($context, "asignacionEtapa")), "etapaProyecto"), "nombre"), "html", null, true);
                echo "</td>
                        <td>";
                // line 211
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["asignacionEtapa"]) ? $context["asignacionEtapa"] : $this->getContext($context, "asignacionEtapa")), "fechaInicio"), "d-m-Y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 212
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["asignacionEtapa"]) ? $context["asignacionEtapa"] : $this->getContext($context, "asignacionEtapa")), "fechaTermino"), "d-m-Y"), "html", null, true);
                echo "</td> 
                        <td><input type=\"button\" class=\"btnModProfRole addExcepcionEtapa\" data-etapa=\"";
                // line 213
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignacionEtapa"]) ? $context["asignacionEtapa"] : $this->getContext($context, "asignacionEtapa")), "id"), "html", null, true);
                echo "\"></td>
                    </tr>    
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asignacionEtapa'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            echo "            </table>
            <div>
                <input type=\"button\" class=\"btnAdd addEtapa\" value=\"Añadir Etapa\" data-etapa=\"";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\">
                <input type=\"button\" class=\"btnAdd addEtapaE\" value=\"Añadir existente\" data-etapa=\"";
            // line 219
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\">
            </div>
        </div>
        <div id=\"excepcion";
            // line 222
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" class=\"tab-pane\">
            <h4>Excepciones de Proyecto \"";
            // line 223
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "nombreProyecto"), "html", null, true);
            echo "\"</h4>
            <ul class=\"botones nav nav-tabs\">               
                <li><a href=\"#exProyecto";
            // line 225
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">Proyecto</a></li>
                <li><a href=\"#exEtapa";
            // line 226
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">Etapas</a></li>
                <li><a href=\"#exProfesionales";
            // line 227
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">Profesionales</a></li>
             </ul>
            <div class=\"tab-content\">
            <div id=\"exProyecto";
            // line 230
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" class=\"tab-pane\">
            <h5><b>Excepciones de Plazo de \"";
            // line 231
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "nombreProyecto"), "html", null, true);
            echo "\"</b></h5>
            <table class=\"reqLicitacion\">
                <tr>
                    <td>Fecha de Término</td>
                    <td>Fecha de Ingreso</td>
                    <td>Fecha anterior</td>
                    <td>Horas modificadas</td>
                    <td>Descripción</td>
                    <td>Acción realizada</td>
                </tr>
                ";
            // line 241
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "excepcionesPlazo"));
            foreach ($context['_seq'] as $context["_key"] => $context["excepcion"]) {
                // line 242
                echo "                <tr>
                    <td>";
                // line 243
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["excepcion"]) ? $context["excepcion"] : $this->getContext($context, "excepcion")), "fechaTermino"), "d-m-Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 244
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["excepcion"]) ? $context["excepcion"] : $this->getContext($context, "excepcion")), "fechaIngreso"), "d-m-Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 245
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["excepcion"]) ? $context["excepcion"] : $this->getContext($context, "excepcion")), "fechaAnterior"), "d-m-Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 246
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["excepcion"]) ? $context["excepcion"] : $this->getContext($context, "excepcion")), "horas"), "html", null, true);
                echo "</td>
                    <td>";
                // line 247
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["excepcion"]) ? $context["excepcion"] : $this->getContext($context, "excepcion")), "descripcion"), "html", null, true);
                echo "</td>
                    ";
                // line 248
                if (($this->getAttribute((isset($context["excepcion"]) ? $context["excepcion"] : $this->getContext($context, "excepcion")), "accion") == "a")) {
                    // line 249
                    echo "                    <td>+</td>
                    ";
                } else {
                    // line 251
                    echo "                    <td>-</td>
                    ";
                }
                // line 253
                echo "                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['excepcion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            echo "            </table>
            <div>
                <input type=\"button\" class=\"btnAdd addExcepcionPlazo\" value=\"Añadir Excepción\" data-proyecto=\"";
            // line 257
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\">
            </div>
            </div>
            <div id=\"exEtapa";
            // line 260
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" class=\"tab-pane\">
                <h5><b>Excepciones de Plazo de Etapas de \"";
            // line 261
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "nombreProyecto"), "html", null, true);
            echo "\"</b></h5>
                <table>
                    <tr>
                        <td>Fecha de inicio original</td>
                        <td>Fecha de término original</td>
                        <td>profesional modificador</td>
                        <td>Etapa</td>
                    </tr>
                    ";
            // line 269
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "asignacionEtapa"));
            foreach ($context['_seq'] as $context["_key"] => $context["etapa"]) {
                // line 270
                echo "                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["etapa"]) ? $context["etapa"] : $this->getContext($context, "etapa")), "excepcionesEtapa"));
                foreach ($context['_seq'] as $context["_key"] => $context["excepciones"]) {
                    // line 271
                    echo "                    <tr>
                        <td>";
                    // line 272
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["excepciones"]) ? $context["excepciones"] : $this->getContext($context, "excepciones")), "fechaInicio"), "d-m-Y"), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 273
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["excepciones"]) ? $context["excepciones"] : $this->getContext($context, "excepciones")), "fechaTermino"), "d-m-Y"), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 274
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["excepciones"]) ? $context["excepciones"] : $this->getContext($context, "excepciones")), "profesional"), "pnombre"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["excepciones"]) ? $context["excepciones"] : $this->getContext($context, "excepciones")), "profesional"), "papellido"), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 275
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["excepciones"]) ? $context["excepciones"] : $this->getContext($context, "excepciones")), "etapaProyecto"), "etapaProyecto"), "nombre"), "html", null, true);
                    echo "</td>
                    </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['excepciones'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 278
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etapa'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 279
            echo "                </table>
            </div>
            <div id=\"exProfesionales";
            // line 281
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" class=\"tab-pane\">3</div>
            </div>
        </div>
        
        
        
    </div>
    ";
            // line 288
            $context["contador"] = ((isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")) + 1);
            // line 289
            echo "</div>
<div id=\"popup\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Agregar Etapa a Proyecto</h4>
        <div class=\"close\"><a href=\"#\" id=\"close\"><img src=\"";
            // line 293
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
            echo "\"/></a></div>
        <form action=\"";
            // line 294
            echo $this->env->getExtension('routing')->getPath("proyecto");
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEtapa"]) ? $context["formEtapa"] : $this->getContext($context, "formEtapa")), 'enctype');
            echo " novalidate>
            <table>
                ";
            // line 296
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEtapa"]) ? $context["formEtapa"] : $this->getContext($context, "formEtapa")), 'form_start');
            echo "
                <tr>
                    <td>";
            // line 298
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtapa"]) ? $context["formEtapa"] : $this->getContext($context, "formEtapa")), "nombre"), 'label');
            echo "</td>
                    <td>";
            // line 299
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtapa"]) ? $context["formEtapa"] : $this->getContext($context, "formEtapa")), "nombre"), 'widget');
            echo "</td>
                    <td>";
            // line 300
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtapa"]) ? $context["formEtapa"] : $this->getContext($context, "formEtapa")), "nombre"), 'errors');
            echo "</td>
                </tr>
                <tr>
                    <td>Fecha de inicio</td>
                    <td><input class=\"DatePicker\" name=\"fechaInicio\"></td> 
                </tr>
                <tr>
                    <td>Fecha de término</td>
                    <td><input class=\"DatePicker\" name=\"fechaterminoet\"></td> 
                </tr>
                <tr>
                    <td><input type=\"submit\" class=\"btnAdd\" name=\"salvarEtapa\" value=\"Agregar Etapa\"></td>
                    <td><input type=\"hidden\" id=\"valorProyecto\" name=\"valorProyecto1\" value=\"\"></td>
                </tr>
                ";
            // line 314
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEtapa"]) ? $context["formEtapa"] : $this->getContext($context, "formEtapa")), 'form_end');
            echo "
            </table>
        </form>
    </div>
</div>
<div id=\"popup1\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Agregar Etapa existente a Proyecto</h4>
        <div class=\"close\"><a href=\"#\" id=\"close1\"><img src=\"";
            // line 322
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
            echo "\"/></a></div>
        <form action=\"";
            // line 323
            echo $this->env->getExtension('routing')->getPath("proyecto");
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEtapaE"]) ? $context["formEtapaE"] : $this->getContext($context, "formEtapaE")), 'enctype');
            echo " novalidate>
            <table>
                ";
            // line 325
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEtapaE"]) ? $context["formEtapaE"] : $this->getContext($context, "formEtapaE")), 'form_start');
            echo "
                <tr>
                    <td>";
            // line 327
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtapaE"]) ? $context["formEtapaE"] : $this->getContext($context, "formEtapaE")), "nombre"), 'label');
            echo "</td>
                    <td>";
            // line 328
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtapaE"]) ? $context["formEtapaE"] : $this->getContext($context, "formEtapaE")), "nombre"), 'widget', array("attr" => array("class" => "chosen-select largo-box")));
            echo "</td>
                    <td>";
            // line 329
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtapaE"]) ? $context["formEtapaE"] : $this->getContext($context, "formEtapaE")), "nombre"), 'errors');
            echo "</td>
                </tr>
                <tr>
                    <td>Fecha de inicio</td>
                    <td><input class=\"DatePicker\" name=\"fechaInicio\"></td> 
                </tr>
                <tr>
                    <td>Fecha de término</td>
                    <td><input class=\"DatePicker\" name=\"fechaterminoet\"></td> 
                </tr>
                <tr>
                    <td><input type=\"submit\" class=\"btnAdd\" name=\"salvarEtapaE\" value=\"Agregar Etapa\"></td>
                    <td><input type=\"text\" id=\"valorProyecto1\" name=\"valorProyecto\" value=\"\"></td>
                </tr>
                ";
            // line 343
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEtapa"]) ? $context["formEtapa"] : $this->getContext($context, "formEtapa")), 'form_end');
            echo "
            </table>
        </form>
    </div>
</div>
<div id=\"popup2\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Agregar Excepción a Proyecto</h4>
        <div class=\"close\"><a href=\"#\" id=\"close2\"><img src=\"";
            // line 351
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
            echo "\"/></a></div>
        <form action=\"";
            // line 352
            echo $this->env->getExtension('routing')->getPath("proyecto");
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), 'enctype');
            echo " novalidate>
            <table>
                ";
            // line 354
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), 'form_start');
            echo "
                <tr>
                    <td>Nueva Fecha de término</td>
                    <td><input class=\"DatePicker\" name=\"fechaExPro\"></td>
                </tr>
                <tr>
                    <td>";
            // line 360
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "horas"), 'label');
            echo "</td>
                    <td>";
            // line 361
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "horas"), 'widget', array("attr" => array("class" => "largo-box")));
            echo "</td>
                    <td>";
            // line 362
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "horas"), 'errors');
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 365
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "accion"), 'label');
            echo "</td>
                    <td>";
            // line 366
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "accion"), 'widget', array("attr" => array("class" => "chosen-select largo-box")));
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 369
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "descripcion"), 'label');
            echo "</td>
                    <td>";
            // line 370
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "descripcion"), 'widget', array("attr" => array("class" => "largo-box")));
            echo "</td>
                    <td>";
            // line 371
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "descripcion"), 'errors');
            echo "</td>
                </tr>
                <tr>
                    <td><input type=\"submit\" class=\"btnAdd\" name=\"salvarExcepcionP\" value=\"Agregar Etapa\"></td>
                </tr>
                <tr>
                    <td><input type=\"hidden\" id=\"valorProyectoEx\" name=\"valorProyectoEx\" value=\"\"></td>
                </tr>
                ";
            // line 379
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), 'form_end');
            echo "
            </table>
        </form>
    </div>
</div>
<div id=\"popup3\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Agregar Excepción a Etapa</h4>
        <div class=\"close\"><a href=\"#\" id=\"close3\"><img src=\"";
            // line 387
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
            echo "\"/></a></div>
        <form action=\"";
            // line 388
            echo $this->env->getExtension('routing')->getPath("proyecto");
            echo "\" method=\"post\"  novalidate>
            <table>
                <tr>
                    <td>Nueva Fecha de Inicio</td>
                    <td><input class=\"DatePicker\" name=\"fechaInicioEtapa\"></td>
                </tr>
                <tr>
                    <td>Nueva Fecha de término</td>
                    <td><input class=\"DatePicker\" name=\"fechaTerminoEtapa\"></td>
                </tr>
                <tr>
                    <td>Motivo de modificación</td>
                    <td><input type=\"text\" name=\"descripcion\"></td>                    
                </tr>
                <tr>
                    <td><input type=\"submit\" class=\"btnAdd\" name=\"salvarExcepcionE\" value=\"Salvar Excepción\"></td>
                </tr>
                <tr>
                    <td><input type=\"text\" id=\"valorEtapaEx\" name=\"valorEtapaEx\" value=\"\"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 415
    public function block_horas($context, array $blocks = array())
    {
        // line 416
        echo "
";
        // line 417
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexHoras.html.twig", array("formHoras" => (isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras"))));
        // line 418
        echo "

";
        // line 420
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexReunion.html.twig", array("reuniones" => (isset($context["reuniones"]) ? $context["reuniones"] : $this->getContext($context, "reuniones"))));
        // line 421
        echo "

";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:proyecto.html_1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  829 => 420,  820 => 416,  784 => 388,  780 => 387,  758 => 371,  754 => 370,  744 => 366,  740 => 365,  734 => 362,  730 => 361,  726 => 360,  717 => 354,  710 => 352,  706 => 351,  695 => 343,  670 => 327,  665 => 325,  658 => 323,  654 => 322,  643 => 314,  626 => 300,  622 => 299,  618 => 298,  613 => 296,  606 => 294,  602 => 293,  594 => 288,  584 => 281,  565 => 275,  559 => 274,  555 => 273,  551 => 272,  543 => 270,  539 => 269,  524 => 260,  518 => 257,  514 => 255,  503 => 251,  499 => 249,  493 => 247,  481 => 244,  447 => 227,  443 => 226,  439 => 225,  420 => 218,  416 => 216,  403 => 212,  399 => 211,  395 => 210,  358 => 192,  352 => 189,  348 => 188,  342 => 187,  331 => 184,  304 => 170,  300 => 169,  292 => 167,  250 => 150,  207 => 124,  175 => 113,  150 => 103,  890 => 499,  878 => 490,  865 => 485,  861 => 484,  850 => 476,  841 => 470,  837 => 469,  833 => 468,  823 => 417,  819 => 460,  815 => 459,  810 => 457,  803 => 455,  799 => 454,  788 => 446,  773 => 437,  769 => 379,  759 => 432,  753 => 429,  749 => 428,  745 => 427,  731 => 416,  727 => 415,  718 => 412,  711 => 410,  696 => 401,  685 => 393,  681 => 392,  677 => 391,  671 => 388,  667 => 387,  661 => 384,  657 => 383,  653 => 382,  633 => 373,  617 => 360,  608 => 354,  592 => 341,  583 => 335,  548 => 271,  544 => 307,  529 => 300,  525 => 298,  516 => 295,  512 => 294,  508 => 293,  505 => 292,  482 => 275,  477 => 243,  470 => 241,  428 => 254,  424 => 219,  412 => 246,  408 => 245,  392 => 209,  388 => 208,  369 => 197,  351 => 211,  336 => 207,  332 => 206,  256 => 173,  248 => 170,  233 => 142,  198 => 138,  326 => 183,  308 => 171,  303 => 174,  299 => 173,  295 => 172,  291 => 171,  287 => 165,  279 => 181,  226 => 154,  222 => 135,  197 => 107,  152 => 104,  148 => 73,  113 => 49,  90 => 43,  476 => 280,  472 => 279,  450 => 263,  446 => 262,  442 => 261,  436 => 258,  432 => 257,  426 => 254,  422 => 253,  418 => 252,  370 => 221,  366 => 220,  357 => 217,  350 => 215,  346 => 214,  310 => 190,  286 => 183,  275 => 180,  265 => 171,  263 => 170,  255 => 168,  242 => 160,  218 => 122,  192 => 125,  186 => 122,  178 => 120,  172 => 117,  153 => 112,  1015 => 562,  1013 => 561,  1010 => 560,  1006 => 556,  1004 => 555,  1001 => 554,  998 => 553,  932 => 491,  925 => 487,  913 => 478,  901 => 469,  895 => 466,  888 => 464,  884 => 463,  872 => 487,  853 => 438,  849 => 437,  845 => 436,  839 => 433,  835 => 432,  831 => 421,  825 => 418,  821 => 427,  817 => 415,  812 => 424,  805 => 422,  801 => 421,  790 => 413,  777 => 438,  770 => 399,  763 => 433,  757 => 392,  750 => 369,  746 => 389,  733 => 379,  723 => 414,  719 => 371,  714 => 369,  707 => 409,  703 => 366,  692 => 358,  682 => 351,  678 => 329,  674 => 328,  668 => 346,  664 => 345,  660 => 344,  655 => 342,  648 => 340,  644 => 376,  637 => 374,  631 => 333,  629 => 332,  624 => 330,  611 => 320,  607 => 318,  596 => 289,  589 => 309,  585 => 308,  580 => 279,  574 => 278,  562 => 296,  556 => 310,  547 => 289,  542 => 288,  538 => 306,  534 => 285,  528 => 261,  517 => 279,  511 => 276,  507 => 253,  501 => 291,  497 => 248,  494 => 272,  489 => 246,  485 => 245,  464 => 257,  460 => 256,  456 => 255,  452 => 254,  449 => 253,  445 => 265,  441 => 264,  434 => 223,  417 => 238,  411 => 235,  400 => 244,  385 => 228,  377 => 200,  373 => 199,  359 => 214,  353 => 211,  349 => 210,  338 => 186,  333 => 203,  325 => 204,  318 => 174,  313 => 198,  306 => 194,  284 => 190,  277 => 186,  271 => 178,  259 => 169,  245 => 161,  213 => 145,  195 => 139,  185 => 117,  181 => 130,  345 => 209,  340 => 208,  335 => 185,  329 => 205,  311 => 143,  307 => 142,  302 => 193,  296 => 168,  293 => 136,  288 => 134,  280 => 161,  276 => 160,  272 => 159,  270 => 127,  261 => 154,  257 => 152,  253 => 119,  249 => 118,  244 => 117,  236 => 115,  225 => 110,  212 => 146,  205 => 142,  200 => 127,  188 => 131,  184 => 93,  174 => 89,  134 => 65,  126 => 63,  76 => 20,  58 => 14,  34 => 7,  23 => 1,  480 => 162,  474 => 242,  469 => 158,  461 => 269,  457 => 231,  453 => 230,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 222,  427 => 143,  423 => 142,  413 => 134,  409 => 246,  407 => 213,  402 => 244,  398 => 243,  393 => 231,  387 => 235,  384 => 237,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 219,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 181,  314 => 191,  312 => 194,  309 => 193,  305 => 188,  298 => 186,  294 => 185,  285 => 89,  283 => 132,  278 => 86,  268 => 158,  264 => 176,  258 => 174,  252 => 151,  247 => 78,  241 => 77,  229 => 140,  220 => 134,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 146,  240 => 145,  238 => 159,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 109,  219 => 150,  217 => 146,  208 => 68,  204 => 72,  179 => 114,  159 => 113,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 18,  63 => 15,  59 => 14,  87 => 25,  94 => 44,  89 => 20,  85 => 25,  75 => 31,  68 => 14,  56 => 9,  38 => 6,  201 => 92,  196 => 126,  183 => 82,  171 => 112,  166 => 110,  163 => 127,  158 => 77,  156 => 106,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 16,  49 => 19,  28 => 2,  24 => 4,  26 => 6,  21 => 2,  31 => 3,  25 => 3,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 11,  44 => 6,  27 => 4,  79 => 18,  72 => 19,  69 => 25,  47 => 9,  40 => 5,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 62,  123 => 47,  120 => 59,  115 => 56,  111 => 37,  108 => 48,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 8,  50 => 12,  43 => 8,  41 => 5,  35 => 5,  32 => 3,  29 => 2,  209 => 144,  203 => 123,  199 => 122,  193 => 119,  189 => 118,  187 => 84,  182 => 121,  176 => 132,  173 => 65,  168 => 116,  164 => 115,  162 => 108,  154 => 58,  149 => 51,  147 => 75,  144 => 102,  141 => 48,  133 => 55,  130 => 64,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 45,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 13,  51 => 14,  48 => 7,  45 => 6,  42 => 7,  39 => 9,  36 => 4,  33 => 4,  30 => 6,);
    }
}
