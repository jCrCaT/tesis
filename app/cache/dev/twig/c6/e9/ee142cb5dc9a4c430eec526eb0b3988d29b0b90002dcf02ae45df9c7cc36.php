<?php

/* AppMediBundle:Default:newTwigTemplate.html.twig */
class __TwigTemplate_c6e9ee142cb5dc9a4c430eec526eb0b3988d29b0b90002dcf02ae45df9c7cc36 extends Twig_Template
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
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-clockpicker.min.css"), "html", null, true);
        echo "\">
<div class=\"agregarItem\" >
    <div>
        <h4>Agregar Licitación</h4>
        <a href=\"#\" id=\"agregaritem\" class=\"toggle text-right\"><img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrowDown.png"), "html", null, true);
        echo "\"></a>
        <div id=\"formAdd\" style=\"display:none\">
            <form action=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("licitacion");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
            <div class=\"addUbication\">
                <table>
                ";
        // line 132
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                <tr>
                    <td>";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                    <td>";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                    <td>";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                    <td>";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente"), 'widget', array("attr" => array("class" => "chosen-select largo-box")));
        echo "</td>
                    <td>";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horasProgramadas"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                    <td>";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horasProgramadas"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                    <td>";
        // line 146
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
        // line 171
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </table>
        </div>       
</form>
            
        </div>
    </div>
</div>
<section class=\"licitacion\">
    ";
        // line 180
        $context["contador"] = 1;
        // line 181
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")));
        foreach ($context['_seq'] as $context["_key"] => $context["listar"]) {
            // line 182
            echo "    <form class=\"tableLic1 col-xs-12 col-sm-12 col-md-10 col-lg-10\" action=\"";
            echo $this->env->getExtension('routing')->getPath("licitacion");
            echo " \" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " novalidate>
        ";
            // line 183
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
        <div class=\"tablaInformacion\">
            <div class=\"headerInfo\">
                <h3>";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "nombre"), "html", null, true);
            echo "</h3>
            </div>
            <div class=\"text-center\">
                <ul class=\"botones nav nav-tabs\">
                    <li><a href=\"#generalLic";
            // line 190
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">General";
            if (($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "estadoFinal") == 1)) {
                echo "   <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/alerta1.png"), "html", null, true);
                echo "\">";
            }
            echo "</a></li>
                    <li><a href=\"#licitacion";
            // line 191
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">Profesionales/Licitación</a></li>
                    <li><a href=\"#proyecto";
            // line 192
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">Proyecto</a></li>
                    <li><a href=\"#requerimiento";
            // line 193
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">Requerimientos</a></li>
                    <li><a href=\"#requerimiento";
            // line 194
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" data-toggle=\"tab\">Excepciones</a></li>
                </ul>
            </div>
            <div class=\"tab-content\">
                <div id=\"generalLic";
            // line 198
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" class=\"infoLi tab-pane active\">
                    <ul>
                        <li><font style=\"font-weight: bold;\">Estado:</font> ";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "estado"), "estado"), "html", null, true);
            if (($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "estadoFinal") == 1)) {
                echo " <font style=\"color: #D20A0A\">\"Actualizar\"</font> ";
            }
            echo "</li>                       
                        <li><font style=\"font-weight: bold;\">Fecha de Inicio:</font> ";
            // line 201
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "fechaInicio"), "d-m-Y"), "html", null, true);
            echo "</li>
                        <li><font style=\"font-weight: bold;\">Fecha de termino:</font> ";
            // line 202
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "fechaTermino"), "d-m-Y"), "html", null, true);
            echo "</li>
                        <li><font style=\"font-weight: bold;\">Horas planificadas:</font> ";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "horasProgramadas"), "html", null, true);
            echo "</li>
                        <li><font style=\"font-weight: bold;\">Progreso:</font> xxxx</li>
                        <li><font style=\"font-weight: bold;\">Patrocinador: </font>";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "cliente"), "nombre"), "html", null, true);
            echo "</li>
                    </ul>
                    <div>
                        <input class=\"btnAdd\" type=\"submit\" name=\"eliminar\" value=\"eliminar\">
                        <input type=\"button\" class=\"actualizarEstado btnAdd\" data-lic=\"";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\" value=\"Actualizar\">
                        <input type=\"button\" class=\"botonExcLic btnAdd\" data-licitacion=\"";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\" value=\"Excepción\">
                        <input type=\"hidden\" name=\"valorEliminarLic\" value=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\">                        
                    </div>
                </div>
                <div id=\"licitacion";
            // line 214
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" class=\"tab-pane\">
                    <h4>Profesionales asignados a Licitación</h4>
                    <table class=\"reqLicitacion\">
                        <tr>
                            <td></td>
                            <td class=\"tituloReLic\">Profesional</td>
                            <td class=\"tituloReLic\">Horas</td>
                            <td class=\"tituloReLic\">Valor Hora (uf)</td>
                            <td class=\"tituloReLic\">Avance</td>
                            <td></td>
                        </tr>
                        ";
            // line 225
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "asignacion"));
            foreach ($context['_seq'] as $context["_key"] => $context["dependencia"]) {
                // line 226
                echo "                        <form action=\"";
                echo $this->env->getExtension('routing')->getPath("licitacion");
                echo " \" method=\"post\" ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), 'enctype');
                echo " novalidate>
                        <tr>
                            ";
                // line 228
                if (($this->getAttribute($this->getAttribute((isset($context["dependencia"]) ? $context["dependencia"] : $this->getContext($context, "dependencia")), "profesional"), "ImagenPerfil", array(), "method") == null)) {
                    // line 229
                    echo "                            <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/imgPerfil.png"), "html", null, true);
                    echo "\" class=\"img-circle imgProfLic\" /></td>
                            ";
                } else {
                    // line 231
                    echo "                            <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("documentos/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["dependencia"]) ? $context["dependencia"] : $this->getContext($context, "dependencia")), "profesional"), "ImagenPerfil", array(), "method"), "Path", array(), "method"), "html", null, true);
                    echo "\" class=\"img-circle imgProfLic\" /></td>
                            ";
                }
                // line 233
                echo "                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dependencia"]) ? $context["dependencia"] : $this->getContext($context, "dependencia")), "profesional"), "pnombre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dependencia"]) ? $context["dependencia"] : $this->getContext($context, "dependencia")), "profesional"), "snombre"), "html", null, true);
                echo "</td>
                            <td>";
                // line 234
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dependencia"]) ? $context["dependencia"] : $this->getContext($context, "dependencia")), "horas"), "html", null, true);
                echo "</td>
                            <td>";
                // line 235
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dependencia"]) ? $context["dependencia"] : $this->getContext($context, "dependencia")), "valorHora"), "html", null, true);
                echo "</td>
                            <td></td>
                            <td><input type=\"submit\" class=\"btnRemProf\" name=\"btnRemProf\"/>
                                <input type=\"hidden\" name=\"eliminarProfLic\" value=\"";
                // line 238
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dependencia"]) ? $context["dependencia"] : $this->getContext($context, "dependencia")), "id"), "html", null, true);
                echo "\"/>
                                <input type=\"hidden\" id=\"remProfPro\" name=\"removerProLic\" value=\"licitacion\">
                            </td>
                  
                        </tr>
                        </form>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dependencia'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 245
            echo "                    </table>
                    <div>
                        <input type=\"button\" class=\"agregarProfLic btnAdd\" data-button=\"";
            // line 247
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\" data-tipo=\"licitacion\" value=\"Agregar Profesional\">
                    </div>
                    
                </div>
                <div id=\"proyecto";
            // line 251
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" class=\"tab-pane\">
                    ";
            // line 252
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "proyecto"));
            foreach ($context['_seq'] as $context["_key"] => $context["proyecto"]) {
                // line 253
                echo "                    <ul class=\"infoLi\">
                        <li><font style=\"font-weight: bold;\">Nombre:</font> ";
                // line 254
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "nombreProyecto"), "html", null, true);
                echo "</li>
                        <li><font style=\"font-weight: bold;\">Fecha de Inicio:</font> ";
                // line 255
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "fechaInicio"), "d-m-Y"), "html", null, true);
                echo "</li>
                        <li><font style=\"font-weight: bold;\">Fecha de Término:</font> ";
                // line 256
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "fechaFin"), "d-m-Y"), "html", null, true);
                echo "</li>
                        <li><font style=\"font-weight: bold;\">Horas programadas:</font> ";
                // line 257
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "HorasProgramadas"), "html", null, true);
                echo "</li>
                        
                    </ul>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "                    <h4>Profesionales asignados a Proyecto</h4>
                    <table class=\"reqLicitacion\">                        
                        <tr>
                            <td class=\"tituloReLic\">Profesional</td>
                            <td class=\"tituloReLic\">Horas</td>
                            <td class=\"tituloReLic\">Valor por hora (UF)</td>
                            <td class=\"tituloReLic\"></td>
                            
                        </tr>
                        ";
            // line 270
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "proyecto"));
            foreach ($context['_seq'] as $context["_key"] => $context["asignacionProyecto"]) {
                // line 271
                echo "                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["asignacionProyecto"]) ? $context["asignacionProyecto"] : $this->getContext($context, "asignacionProyecto")), "asignacion"));
                foreach ($context['_seq'] as $context["_key"] => $context["asignacion"]) {
                    // line 272
                    echo "                        <tr>
                            <form action=\"";
                    // line 273
                    echo $this->env->getExtension('routing')->getPath("licitacion");
                    echo " \" method=\"post\" novalidate>
                            <td>";
                    // line 274
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "pnombre"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "profesional"), "snombre"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 275
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "horas"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 276
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "valorHora"), "html", null, true);
                    echo "</td>
                            <td><input type=\"submit\" class=\"btnRemProf\" name=\"btnRemProf\"/>
                                <input type=\"hidden\" id=\"remProfPro\" name=\"removerProLic\" value=\"proyecto\"/>
                                <input type=\"hidden\" name=\"eliminarProfLic\" value=\"";
                    // line 279
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
                // line 284
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asignacionProyecto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "                    </table>
                    <div>
                        ";
            // line 287
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "proyecto"));
            foreach ($context['_seq'] as $context["_key"] => $context["proyecto"]) {
                // line 288
                echo "                        <input type=\"button\" class=\"btnAdd modProyecto\" value=\"Modificar datos de Proyecto\" data-proyecto=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"), "html", null, true);
                echo "\">
                        <input type=\"button\" class=\"agregarProfLic btnAdd\" data-button=\"";
                // line 289
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"), "html", null, true);
                echo "\" data-tipo=\"proyecto\" value=\"Agregar Profesional\">
                        
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 292
            echo "     
                    </div>
                    
                </div>
                <div id=\"requerimiento";
            // line 296
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\" class=\" tab-pane\">
                    <table class=\"reqLicitacion\">
                    <h4>Requerimientos de Licitación</h4>
                    <tr>
                        <td class=\"tituloReLic\">Nombre</td>
                        <td class=\"tituloReLic\">Profesional a cargo</td>
                        <td class=\"tituloReLic\">Avance (horas)</td>
                        <td class=\"tituloReLic\"></td>
                    </tr>
                    ";
            // line 305
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "dependencia"));
            foreach ($context['_seq'] as $context["_key"] => $context["dependencia"]) {
                echo "     
                    <form action=\"";
                // line 306
                echo $this->env->getExtension('routing')->getPath("licitacion");
                echo " \" method=\"post\" novalidate>
                    <tr>
                        <td>";
                // line 308
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dependencia"]) ? $context["dependencia"] : $this->getContext($context, "dependencia")), "nombre"), "html", null, true);
                echo "</td>
                        <td>";
                // line 309
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dependencia"]) ? $context["dependencia"] : $this->getContext($context, "dependencia")), "profesional"), "pnombre"), "html", null, true);
                echo "</td>
                        <td>xxx</td>
                        <td>
                            <input type=\"submit\" name=\"eliminarReq\" value=\"eliminar Requerimiento\" class=\"btnRemProf\">
                            <input type=\"hidden\" name=\"valorReqEliminar\" value=\"";
                // line 313
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dependencia"]) ? $context["dependencia"] : $this->getContext($context, "dependencia")), "id"), "html", null, true);
                echo "\">
                        </td>
                    </tr>
                    </form>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dependencia'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 318
            echo "                    </table>
                    <div>
                        <input type=\"button\" class=\"botonRequerimiento btnAdd\" data-button=\"";
            // line 320
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\" value=\"Añadir Requerimiento\">
                    </div>
                    
                    
                    
                    
                </div>
            </div>    
            
        </div>
        ";
            // line 330
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
    </form>
    ";
            // line 332
            $context["contador"] = ((isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")) + 1);
            // line 333
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 334
        echo "
</section>
<div id=\"popup\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Agregar Requerimiento a Licitación</h4>
        <div class=\"close\"><a href=\"#\" id=\"close\"><img src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <form action=\"";
        // line 340
        echo $this->env->getExtension('routing')->getPath("licitacion");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formRequerimiento"]) ? $context["formRequerimiento"] : $this->getContext($context, "formRequerimiento")), 'enctype');
        echo " novalidate>
            <table>
                ";
        // line 342
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRequerimiento"]) ? $context["formRequerimiento"] : $this->getContext($context, "formRequerimiento")), 'form_start');
        echo "
                <tr>
                    <td>";
        // line 344
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRequerimiento"]) ? $context["formRequerimiento"] : $this->getContext($context, "formRequerimiento")), "nombre"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                    <td>";
        // line 345
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRequerimiento"]) ? $context["formRequerimiento"] : $this->getContext($context, "formRequerimiento")), "nombre"), 'widget');
        echo "</td>
                    <td>";
        // line 346
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRequerimiento"]) ? $context["formRequerimiento"] : $this->getContext($context, "formRequerimiento")), "nombre"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 349
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRequerimiento"]) ? $context["formRequerimiento"] : $this->getContext($context, "formRequerimiento")), "profesional"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                    <td>";
        // line 350
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRequerimiento"]) ? $context["formRequerimiento"] : $this->getContext($context, "formRequerimiento")), "profesional"), 'widget');
        echo "</td>
                    <td>";
        // line 351
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRequerimiento"]) ? $context["formRequerimiento"] : $this->getContext($context, "formRequerimiento")), "profesional"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td><input type=\"submit\" class=\"btnForm1\" name=\"salvarRequerimiento\" value=\"Agregar Requerimiento\"></td>
                    <td><input type=\"hidden\" id=\"valorRequerimiento\" name=\"valorReunion\" value=\"\"></td>
                    <td></td>
                </tr>
                ";
        // line 358
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
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <form action=\"";
        // line 367
        echo $this->env->getExtension('routing')->getPath("licitacion");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formDocumento"]) ? $context["formDocumento"] : $this->getContext($context, "formDocumento")), 'enctype');
        echo " novalidate>
            <table>
                ";
        // line 369
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formDocumento"]) ? $context["formDocumento"] : $this->getContext($context, "formDocumento")), 'form_start');
        echo "
                <tr>
                    <td>";
        // line 371
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDocumento"]) ? $context["formDocumento"] : $this->getContext($context, "formDocumento")), "file"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                    <td>";
        // line 372
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDocumento"]) ? $context["formDocumento"] : $this->getContext($context, "formDocumento")), "file"), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td><input type=\"submit\" class=\"btnForm1\" name=\"subirDocumento\" value=\"Salvar Documento\"></td>
                    <td><input type=\"text\" id=\"valorDocumento\" name=\"valorDocumento\" value=\"\"></td>
                    <td></td>
                </tr>
                ";
        // line 379
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
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
            <form action=\"";
        // line 390
        echo $this->env->getExtension('routing')->getPath("licitacion");
        echo " \" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), 'enctype');
        echo " novalidate>
                <table>
                    ";
        // line 392
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), 'form_start');
        echo "
                    <tr>
                        <td class=\"etiqueta\"><font style=\"font-weight: bold;\">Profesional a asignar:</font></td>
                        <td>";
        // line 395
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), "profesional"), 'widget', array("attr" => array("class" => "largo-box chosen-select")));
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"etiqueta\"><font style=\"font-weight: bold;\">Horas asignadas:</font></td>
                        <td>";
        // line 399
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfesional"]) ? $context["formProfesional"] : $this->getContext($context, "formProfesional")), "horas"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"etiqueta\"><font style=\"font-weight: bold;\">Valor de la hora de profesional:</font></td>
                        <td>";
        // line 403
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
        // line 413
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
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
            <form action=\"";
        // line 422
        echo $this->env->getExtension('routing')->getPath("licitacion");
        echo " \" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formProyecto"]) ? $context["formProyecto"] : $this->getContext($context, "formProyecto")), 'enctype');
        echo " novalidate>
                <table>
                    ";
        // line 424
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formProyecto"]) ? $context["formProyecto"] : $this->getContext($context, "formProyecto")), 'form_start');
        echo "
                    <tr>
                <td>";
        // line 426
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProyecto"]) ? $context["formProyecto"] : $this->getContext($context, "formProyecto")), "nombreProyecto"), 'label', array("label_attr" => array("class" => "etiqueta ")));
        echo "</td>
                <td>";
        // line 427
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProyecto"]) ? $context["formProyecto"] : $this->getContext($context, "formProyecto")), "nombreProyecto"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                <td>";
        // line 428
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProyecto"]) ? $context["formProyecto"] : $this->getContext($context, "formProyecto")), "nombreProyecto"), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 431
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProyecto"]) ? $context["formProyecto"] : $this->getContext($context, "formProyecto")), "horasProgramadas"), 'label', array("label_attr" => array("class" => "etiqueta", "cols" => "50", "rows" => "50")));
        echo "</td>
                <td>";
        // line 432
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProyecto"]) ? $context["formProyecto"] : $this->getContext($context, "formProyecto")), "horasProgramadas"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                <td>";
        // line 433
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProyecto"]) ? $context["formProyecto"] : $this->getContext($context, "formProyecto")), "horasProgramadas"), 'errors');
        echo "</td> 
            </tr>
                        <tr>
                <td>";
        // line 436
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProyecto"]) ? $context["formProyecto"] : $this->getContext($context, "formProyecto")), "descripcion"), 'label', array("label_attr" => array("class" => "etiqueta", "cols" => "50", "rows" => "50")));
        echo "</td>
                <td>";
        // line 437
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProyecto"]) ? $context["formProyecto"] : $this->getContext($context, "formProyecto")), "descripcion"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                <td>";
        // line 438
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
        // line 454
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
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
            <form action=\"";
        // line 464
        echo $this->env->getExtension('routing')->getPath("licitacion");
        echo " \" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEstadoLic"]) ? $context["formEstadoLic"] : $this->getContext($context, "formEstadoLic")), 'enctype');
        echo " novalidate>
                <table>
                    ";
        // line 466
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEstadoLic"]) ? $context["formEstadoLic"] : $this->getContext($context, "formEstadoLic")), 'form_start');
        echo "
                    <tr>
                        <td class=\"etiqueta\"><font style=\"font-weight: bold;\">Estado a asignar:</font></td>
                        <td>";
        // line 469
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
        // line 478
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
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <input type=\"hidden\" id=\"valorLicEx\">
    </div>
</div>
<script type=\"text/javascript\" src=\"";
        // line 491
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
";
    }

    // line 553
    public function block_horas($context, array $blocks = array())
    {
        // line 554
        echo "
";
        // line 555
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexHoras.html.twig", array("formHoras" => (isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras"))));
        // line 556
        echo "

";
        // line 560
        echo "
";
        // line 561
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexProyecto.html.twig", array("proyectos" => (isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto"))));
        // line 562
        echo "

";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:newTwigTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1015 => 562,  1013 => 561,  1010 => 560,  1006 => 556,  1004 => 555,  1001 => 554,  998 => 553,  932 => 491,  925 => 487,  913 => 478,  901 => 469,  895 => 466,  888 => 464,  884 => 463,  872 => 454,  853 => 438,  849 => 437,  845 => 436,  839 => 433,  835 => 432,  831 => 431,  825 => 428,  821 => 427,  817 => 426,  812 => 424,  805 => 422,  801 => 421,  790 => 413,  777 => 403,  770 => 399,  763 => 395,  757 => 392,  750 => 390,  746 => 389,  733 => 379,  723 => 372,  719 => 371,  714 => 369,  707 => 367,  703 => 366,  692 => 358,  682 => 351,  678 => 350,  674 => 349,  668 => 346,  664 => 345,  660 => 344,  655 => 342,  648 => 340,  644 => 339,  637 => 334,  631 => 333,  629 => 332,  624 => 330,  611 => 320,  607 => 318,  596 => 313,  589 => 309,  585 => 308,  580 => 306,  574 => 305,  562 => 296,  556 => 292,  547 => 289,  542 => 288,  538 => 287,  534 => 285,  528 => 284,  517 => 279,  511 => 276,  507 => 275,  501 => 274,  497 => 273,  494 => 272,  489 => 271,  485 => 270,  464 => 257,  460 => 256,  456 => 255,  452 => 254,  449 => 253,  445 => 252,  441 => 251,  434 => 247,  417 => 238,  411 => 235,  400 => 233,  385 => 228,  377 => 226,  373 => 225,  359 => 214,  353 => 211,  349 => 210,  338 => 205,  333 => 203,  325 => 201,  318 => 200,  313 => 198,  306 => 194,  284 => 190,  277 => 186,  271 => 183,  259 => 181,  245 => 171,  213 => 145,  195 => 139,  185 => 135,  181 => 134,  345 => 209,  340 => 132,  335 => 7,  329 => 202,  311 => 143,  307 => 142,  302 => 193,  296 => 137,  293 => 136,  288 => 134,  280 => 131,  276 => 130,  272 => 128,  270 => 127,  261 => 121,  257 => 180,  253 => 119,  249 => 118,  244 => 117,  236 => 115,  225 => 110,  212 => 106,  205 => 102,  200 => 100,  188 => 94,  184 => 93,  174 => 89,  134 => 65,  126 => 63,  76 => 20,  58 => 14,  34 => 7,  23 => 1,  480 => 162,  474 => 261,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 245,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 234,  402 => 130,  398 => 129,  393 => 231,  387 => 229,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 192,  294 => 191,  285 => 89,  283 => 132,  278 => 86,  268 => 85,  264 => 182,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 111,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 116,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 109,  219 => 76,  217 => 146,  208 => 68,  204 => 72,  179 => 91,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 18,  63 => 15,  59 => 14,  87 => 25,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  38 => 6,  201 => 92,  196 => 99,  183 => 82,  171 => 61,  166 => 71,  163 => 127,  158 => 67,  156 => 123,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 16,  49 => 19,  28 => 2,  24 => 4,  26 => 6,  21 => 2,  31 => 3,  25 => 3,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 11,  44 => 12,  27 => 4,  79 => 18,  72 => 19,  69 => 25,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 59,  115 => 56,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 12,  43 => 8,  41 => 9,  35 => 5,  32 => 3,  29 => 2,  209 => 144,  203 => 141,  199 => 140,  193 => 73,  189 => 136,  187 => 84,  182 => 66,  176 => 132,  173 => 65,  168 => 129,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 75,  144 => 49,  141 => 48,  133 => 55,  130 => 64,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 13,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 8,  33 => 4,  30 => 6,);
    }
}
