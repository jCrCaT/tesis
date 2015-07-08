<?php

/* AppMediBundle:Default:licitacion1.html.twig */
class __TwigTemplate_93cad61adfc4fbeac53bcdea0bd53c08f79cb7ed33f99436dd28e61a4ccaad22 extends Twig_Template
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
  \$('.botonRequerimiento').click(function(){
        var reunion = \$(this).data(\"button\");
        \$(\"#valorRequerimiento\").val( reunion );
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
    \$('.botonDocumento').click(function(){
    var documento = \$(this).data(\"documento\");
    \$(\"#valorDocumento\").val( documento );
    \$('#popup1').fadeIn('slow');
    \$('.popup-overlay').fadeIn('slow');
    \$('.popup-overlay').height(\$(window).height());
    return false;
});       
\$('#close1').click(function(){
    \$('#popup1').fadeOut('slow');
    \$('.popup1-overlay').fadeOut('slow');
    return false;
});
});
</script>
<script type=\"text/javascript\">
\$(document).ready(function(){
    \$('.agregarProfLic').click(function(){
    var profesional = \$(this).data(\"button\");
    var tipo = \$(this).data(\"tipo\");
    \$(\"#valorLicitacion\").val( profesional );
    \$(\"#valorTipo\").val( tipo );
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
<script>
    \$(document).ready(function(){
    \$('.modProyecto').click(function(){
    var proyecto = \$(this).data(\"proyecto\");
    \$(\"#valorProyecto\").val( proyecto );
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
        \$(document).ready(function(){
    \$('.actualizarEstado').click(function(){
    var licitacionAct = \$(this).data(\"lic\");
    \$(\"#valorLicFin\").val( licitacionAct );
    \$('#popup4').fadeIn('slow');
    \$('.popup-overlay').fadeIn('slow');
    \$('.popup-overlay').height(\$(window).height());
    return false;    
});  
\$('#close4').click(function(){
    \$('#popup4').fadeOut('slow');
    \$('.popup-overlay').fadeOut('slow');
    return false;
});
});    
</script>
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$('.botonExLic').click(function(){
        var etapa = \$(this).data(\"licitacion\");
        \$(\"#valorLicEx\").val( etapa );
        \$('#popup5').fadeIn('slow');
        \$('.popup-overlay').fadeIn('slow');
        \$('.popup-overlay').height(\$(window).height());
        return false;
    });
    
  \$('#close5').click(function(){
    \$('#popup5').fadeOut('slow');
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
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-clockpicker.min.css"), "html", null, true);
        echo "\">
<div class=\"agregarItem\" >
    <div>
        <h4>Agregar Licitación</h4>
        <a href=\"#\" id=\"agregaritem\" class=\"toggle linkMostrar\">Mostrar/Ocultar</a>
        <div id=\"formAdd\" style=\"display:none\">
            <form action=\"";
        // line 132
        echo $this->env->getExtension('routing')->getPath("licitacion");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
            <div class=\"addUbication\">
                <table>
                ";
        // line 135
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                <tr>
                    <td>";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                    <td>";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                    <td>";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                    <td>";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente"), 'widget', array("attr" => array("class" => "chosen-select largo-box")));
        echo "</td>
                    <td>";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horasProgramadas"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                    <td>";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horasProgramadas"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                    <td>";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horasProgramadas"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td class=\"etiqueta\">Fecha de inicio</td>
                    <td><input class=\"DatePicker\" name=\"fechaInicio\"></td> 
                </tr>
                <tr>
                    <td class=\"etiqueta\">Fecha de término</td>
                    <td><input class=\"DatePicker\" name=\"fechaTermino\"></td> 
                </tr>
                <tr>
                    <td class=\"etiqueta\">Hora de inicio de actividad</td>
                    <td>
                        <div id=\"reloj\" class=\"input-group clockpicker\" data-placement=\"left\" data-align=\"top\" data-autoclose=\"true\">
                            <input type=\"text\" class=\"form-control\" value=\"13:14\" name=\"horaTermino\">
                            <span class=\"input-group-addon\">
                                <span class=\"glyphicon glyphicon-time\"></span>
                            </span>
                        </div>
                    </td>
                </tr>
                <tr class=\"filaFormulario\">
                    <td><input class=\"btnAdd\" type=\"submit\" name=\"salvarLicitacion\" value=\"Salvar Licitacion\"></td>
                    <td></td>
                </tr>
                ";
        // line 174
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </table>
        </div>       
</form>
            
        </div>
    </div>
</div>
<div class=\"licitacion\">
    <table>
        <tr class=\"trHeader\">
            <td class=\"headerTable\">Nombre</td>
            <td class=\"headerTable\">Barra de Progreso</td>
            <td class=\"headerTable\">Porcentaje</td>
            <td class=\"headerTable\">Fecha de inicio</td>
            <td class=\"headerTable\">Fecha de término</td>
            <td class=\"headerTable\"></td>
        </tr>
        ";
        // line 192
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")));
        foreach ($context['_seq'] as $context["_key"] => $context["listar"]) {
            // line 193
            echo "        <tr class=\"trContent\">
            <td>";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "nombre"), "html", null, true);
            echo "</td>
            <td>
                <div class=\"progress\" style=\"width: 150px; height: 20px; margin-top: 5px; margin-bottom: 5px; padding-bottom: 0\">
                    <div class=\"bar bar-success\" style=\"width: 70%; background-color: #B4F7A9; height: 100%; margin-bottom: 0 !important; padding-bottom: 0 !important;\"></div>
                </div>
            </td>
            <td></td>
            <td>";
            // line 201
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "fechaInicio"), "d-m-Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 202
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "fechaTermino"), "d-m-Y"), "html", null, true);
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/alerta1.png"), "html", null, true);
            echo "\"></td>
            <td><a href=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("glicitacion", array("id" => $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"))), "html", null, true);
            echo "\">Administrar</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "    </table>
</div>
<div id=\"popup\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Agregar Requerimiento a Licitación</h4>
        <div class=\"close\"><a href=\"#\" id=\"close\"><img src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <form action=\"";
        // line 212
        echo $this->env->getExtension('routing')->getPath("licitacion");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formRequerimiento"]) ? $context["formRequerimiento"] : $this->getContext($context, "formRequerimiento")), 'enctype');
        echo " novalidate>
            <table>
                ";
        // line 214
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRequerimiento"]) ? $context["formRequerimiento"] : $this->getContext($context, "formRequerimiento")), 'form_start');
        echo "
                <tr>
                    <td>";
        // line 216
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRequerimiento"]) ? $context["formRequerimiento"] : $this->getContext($context, "formRequerimiento")), "nombre"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                    <td>";
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRequerimiento"]) ? $context["formRequerimiento"] : $this->getContext($context, "formRequerimiento")), "nombre"), 'widget');
        echo "</td>
                    <td>";
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRequerimiento"]) ? $context["formRequerimiento"] : $this->getContext($context, "formRequerimiento")), "nombre"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 221
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRequerimiento"]) ? $context["formRequerimiento"] : $this->getContext($context, "formRequerimiento")), "profesional"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                    <td>";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRequerimiento"]) ? $context["formRequerimiento"] : $this->getContext($context, "formRequerimiento")), "profesional"), 'widget');
        echo "</td>
                    <td>";
        // line 223
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRequerimiento"]) ? $context["formRequerimiento"] : $this->getContext($context, "formRequerimiento")), "profesional"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td><input type=\"submit\" class=\"btnForm1\" name=\"salvarRequerimiento\" value=\"Agregar Requerimiento\"></td>
                    <td><input type=\"hidden\" id=\"valorRequerimiento\" name=\"valorReunion\" value=\"\"></td>
                    <td></td>
                </tr>
                ";
        // line 230
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRequerimiento"]) ? $context["formRequerimiento"] : $this->getContext($context, "formRequerimiento")), 'form_end');
        echo "
            </table>
        </form>
    </div>
</div>
<div id=\"popup1\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Agregar Documento a Licitación</h4>
        <div class=\"close\"><a href=\"#\" id=\"close1\"><img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <form action=\"";
        // line 239
        echo $this->env->getExtension('routing')->getPath("licitacion");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formDocumento"]) ? $context["formDocumento"] : $this->getContext($context, "formDocumento")), 'enctype');
        echo " novalidate>
            <table>
                ";
        // line 241
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formDocumento"]) ? $context["formDocumento"] : $this->getContext($context, "formDocumento")), 'form_start');
        echo "
                <tr>
                    <td>";
        // line 243
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDocumento"]) ? $context["formDocumento"] : $this->getContext($context, "formDocumento")), "file"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                    <td>";
        // line 244
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDocumento"]) ? $context["formDocumento"] : $this->getContext($context, "formDocumento")), "file"), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td><input type=\"submit\" class=\"btnForm1\" name=\"subirDocumento\" value=\"Salvar Documento\"></td>
                    <td><input type=\"text\" id=\"valorDocumento\" name=\"valorDocumento\" value=\"\"></td>
                    <td></td>
                </tr>
                ";
        // line 251
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formDocumento"]) ? $context["formDocumento"] : $this->getContext($context, "formDocumento")), 'form_end');
        echo "
            </table>
        </form>
    </div>
    
</div>

<div id=\"popup2\" style=\"display: none;\">
    <div class=\"content-popup2\">
        <h4 class=\"modalh4\">Agregar profesional</h4>
        <div class=\"close\"><a href=\"#\" id=\"close2\"><img src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
            <form action=\"";
        // line 262
        echo $this->env->getExtension('routing')->getPath("licitacion");
        echo " \" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), 'enctype');
        echo " novalidate>
                <table>
                    ";
        // line 264
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), 'form_start');
        echo "
                    <tr>
                        <td class=\"etiqueta\"><font style=\"font-weight: bold;\">Profesional a asignar:</font></td>
                        <td>";
        // line 267
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), "profesional"), 'widget', array("attr" => array("class" => "largo-box chosen-select")));
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"etiqueta\"><font style=\"font-weight: bold;\">Horas asignadas:</font></td>
                        <td>";
        // line 271
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), "horas"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"etiqueta\"><font style=\"font-weight: bold;\">Valor de la hora de profesional:</font></td>
                        <td>";
        // line 275
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), "valorHora"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type=\"submit\" class=\"btnAdd\" name=\"agregarProfesional\" value=\"Agregar Profesional\">
                            <input type=\"hidden\" id=\"valorLicitacion\" name=\"valorLicitacion\" value=\"\">
                            <input type=\"hidden\" id=\"valorTipo\" name=\"valorTipo\" value=\"\">
                        </td>
                    </tr>
                    ";
        // line 285
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), 'form_end');
        echo "
                </table>
           </form>
    </div>
</div>
<div id=\"popup3\" style=\"display: none;\">
    <div class=\"content-popup2\">
        <h4 class=\"modalh4\">Modificar información de Proyecto</h4>
        <div class=\"close\"><a href=\"#\" id=\"close3\"><img src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
            <form action=\"";
        // line 294
        echo $this->env->getExtension('routing')->getPath("licitacion");
        echo " \" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formProyecto"]) ? $context["formProyecto"] : $this->getContext($context, "formProyecto")), 'enctype');
        echo " novalidate>
                <table>
                    ";
        // line 296
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formProyecto"]) ? $context["formProyecto"] : $this->getContext($context, "formProyecto")), 'form_start');
        echo "
                    <tr>
                <td>";
        // line 298
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProyecto"]) ? $context["formProyecto"] : $this->getContext($context, "formProyecto")), "nombreProyecto"), 'label', array("label_attr" => array("class" => "etiqueta ")));
        echo "</td>
                <td>";
        // line 299
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProyecto"]) ? $context["formProyecto"] : $this->getContext($context, "formProyecto")), "nombreProyecto"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                <td>";
        // line 300
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProyecto"]) ? $context["formProyecto"] : $this->getContext($context, "formProyecto")), "nombreProyecto"), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 303
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProyecto"]) ? $context["formProyecto"] : $this->getContext($context, "formProyecto")), "horasProgramadas"), 'label', array("label_attr" => array("class" => "etiqueta", "cols" => "50", "rows" => "50")));
        echo "</td>
                <td>";
        // line 304
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProyecto"]) ? $context["formProyecto"] : $this->getContext($context, "formProyecto")), "horasProgramadas"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                <td>";
        // line 305
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProyecto"]) ? $context["formProyecto"] : $this->getContext($context, "formProyecto")), "horasProgramadas"), 'errors');
        echo "</td> 
            </tr>
                        <tr>
                <td>";
        // line 308
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProyecto"]) ? $context["formProyecto"] : $this->getContext($context, "formProyecto")), "descripcion"), 'label', array("label_attr" => array("class" => "etiqueta", "cols" => "50", "rows" => "50")));
        echo "</td>
                <td>";
        // line 309
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProyecto"]) ? $context["formProyecto"] : $this->getContext($context, "formProyecto")), "descripcion"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                <td>";
        // line 310
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProyecto"]) ? $context["formProyecto"] : $this->getContext($context, "formProyecto")), "descripcion"), 'errors');
        echo "</td> 
            </tr>
            <tr>
                <td>Fecha de inicio</td>
                <td><input class=\"DatePicker\" name=\"fechaInicio1\"></td> 
            </tr>
            <tr>
                <td>Fecha de término</td>
                <td><input class=\"DatePicker\" name=\"fechaFin1\"></td>
            </tr>
            <tr>
                <td>
                    <input type=\"submit\" class=\"btnAdd\" name=\"modDatosProy\" >
                    <input type=\"text\" id=\"valorProyecto\" name=\"valorProyecto\" value=\"\">                
                </td>
            </tr> 
                    ";
        // line 326
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formProyecto"]) ? $context["formProyecto"] : $this->getContext($context, "formProyecto")), 'form_end');
        echo "
                </table>
           </form>
    </div>
</div>
</div>
<div id=\"popup4\" style=\"display: none;\">
    <div class=\"content-popup2\">
        <h4 class=\"modalh4\">Actualizar estado de Licitación</h4>
        <div class=\"close\"><a href=\"#\" id=\"close4\"><img src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
            <form action=\"";
        // line 336
        echo $this->env->getExtension('routing')->getPath("licitacion");
        echo " \" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEstadoLic"]) ? $context["formEstadoLic"] : $this->getContext($context, "formEstadoLic")), 'enctype');
        echo " novalidate>
                <table>
                    ";
        // line 338
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEstadoLic"]) ? $context["formEstadoLic"] : $this->getContext($context, "formEstadoLic")), 'form_start');
        echo "
                    <tr>
                        <td class=\"etiqueta\"><font style=\"font-weight: bold;\">Estado a asignar:</font></td>
                        <td>";
        // line 341
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEstadoLic"]) ? $context["formEstadoLic"] : $this->getContext($context, "formEstadoLic")), "estado"), 'widget', array("attr" => array("class" => "largo-box chosen-select")));
        echo "</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type=\"submit\" class=\"btnAdd\" name=\"actLicEstado\" value=\"Actualizar\"/>
                            <input type=\"hidden\" id=\"valorLicFin\" name=\"valorLicFin\" value=\"\"/>
                        </td>
                    </tr>
                    ";
        // line 350
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEstadoLic"]) ? $context["formEstadoLic"] : $this->getContext($context, "formEstadoLic")), 'form_end');
        echo "
                </table>
           </form>
    </div>
</div>   
</div>
<div id=\"popup5\" style=\"display: none;\">
    <div class=\"content-popup2\">
        <h4 class=\"modalh4\">Agregar Excepción a Licitacion</h4>
        <div class=\"close\"><a href=\"#\" id=\"close5\"><img src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <input type=\"hidden\" id=\"valorLicEx\">
    </div>
</div>
<script type=\"text/javascript\" src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-clockpicker.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\$('.clockpicker').clockpicker({
\tplacement: 'right',
\talign: 'left'
})
\t.find('input').change(function(){
\t\tconsole.log(this.value);
\t});
var input = \$('#single-input').clockpicker({
\tplacement: 'top',
\talign: 'left',
\tautoclose: true,
\t'default': 'now'
});

\$('.clockpicker-with-callbacks').clockpicker({
\t\tdonetext: 'Done',
\t\tinit: function() { 
\t\t\tconsole.log(\"colorpicker initiated\");
\t\t},
\t\tbeforeShow: function() {
\t\t\tconsole.log(\"before show\");
\t\t},
\t\tafterShow: function() {
\t\t\tconsole.log(\"after show\");
\t\t},
\t\tbeforeHide: function() {
\t\t\tconsole.log(\"before hide\");
\t\t},
\t\tafterHide: function() {
\t\t\tconsole.log(\"after hide\");
\t\t},
\t\tbeforeHourSelect: function() {
\t\t\tconsole.log(\"before hour selected\");
\t\t},
\t\tafterHourSelect: function() {
\t\t\tconsole.log(\"after hour selected\");
\t\t},
\t\tbeforeDone: function() {
\t\t\tconsole.log(\"before done\");
\t\t},
\t\tafterDone: function() {
\t\t\tconsole.log(\"after done\");
\t\t}
\t})
\t.find('input').change(function(){
\t\tconsole.log(this.value);
\t});

// Manually toggle to the minutes view
\$('#check-minutes').click(function(e){
\t// Have to stop propagation here
\te.stopPropagation();
\tinput.clockpicker('show')
\t\t\t.clockpicker('toggleView', 'minutes');
});
if (/mobile/i.test(navigator.userAgent)) {
\t\$('input').prop('readOnly', true);
}
</script>
<script>
    \$\$('input.DatePicker').each( function(el){
    new DatePicker(el);
});
</script>
";
    }

    // line 430
    public function block_horas($context, array $blocks = array())
    {
        // line 431
        echo "
";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:licitacion1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  680 => 431,  677 => 430,  606 => 363,  599 => 359,  587 => 350,  575 => 341,  569 => 338,  562 => 336,  558 => 335,  546 => 326,  527 => 310,  523 => 309,  519 => 308,  513 => 305,  509 => 304,  505 => 303,  499 => 300,  495 => 299,  491 => 298,  486 => 296,  479 => 294,  475 => 293,  464 => 285,  451 => 275,  444 => 271,  437 => 267,  431 => 264,  424 => 262,  420 => 261,  407 => 251,  397 => 244,  393 => 243,  388 => 241,  381 => 239,  377 => 238,  366 => 230,  356 => 223,  352 => 222,  348 => 221,  342 => 218,  338 => 217,  334 => 216,  329 => 214,  322 => 212,  318 => 211,  311 => 206,  302 => 203,  296 => 202,  292 => 201,  282 => 194,  279 => 193,  275 => 192,  254 => 174,  226 => 149,  222 => 148,  218 => 147,  212 => 144,  208 => 143,  204 => 142,  198 => 139,  194 => 138,  190 => 137,  185 => 135,  177 => 132,  168 => 126,  45 => 6,  41 => 5,  37 => 4,  32 => 3,  29 => 2,);
    }
}
