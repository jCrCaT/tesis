<?php

/* AppMediBundle:Default:proyecto.html.twig */
class __TwigTemplate_4c34e0efe6fa7efde943cf88529b28cb746aa2750b529a2c1c561cdf188c25d8 extends Twig_Template
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
<script language=\"javascript\">
    \$(document).ready(function(){ 
        \$('#agregaritem').on('click',function(e){
            e.preventDefault();
            \$( \"#formAdd\").slideToggle( \"slow\" );
        });
    });
</script>
    ";
        // line 105
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 106
            echo "        <div class=\"mensajeAlerta\">
        <img src=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/bien.png"), "html", null, true);
            echo "\" class=\"handCloser\">
        <div>Éxito!!</div>
        El registro ha sido almacenado!!
        <div class=\"infoAdic\">
        (Para ocultar esta ventana presionar el ticket verde)</div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "    <div class=\"agregarItem\">
    <div>
    <h4>Agregar Proyecto</h4>
    <a href=\"#\" id=\"agregaritem\" class=\"toggle linkMostrar\">Mostrar/Ocultar</a>
    <div id=\"formAdd\" style=\"display:none\">
        <div class=\"addUbication\">
        <table>
            <form action=\"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("proyecto");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
            ";
        // line 122
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <tr>
                <td>";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreProyecto"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreProyecto"), 'widget', array("value" => $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "nombreProyecto")));
        echo "</td>
                <td>";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreProyecto"), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion"), 'label', array("label_attr" => array("class" => "etiqueta", "cols" => "50", "rows" => "50")));
        echo "</td>
                <td>";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion"), 'widget', array("value" => $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "descripcion")));
        echo "</td>
                <td>";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion"), 'errors');
        echo "</td> 
            </tr>
            <tr>
                <td>";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horasProgramadas"), 'label', array("label_attr" => array("class" => "etiqueta", "cols" => "50", "rows" => "50")));
        echo "</td>
                <td>";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horasProgramadas"), 'widget', array("value" => $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "descripcion")));
        echo "</td>
                <td>";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horasProgramadas"), 'errors');
        echo "</td> 
            </tr>
            <tr>
                <td class=\"etiqueta\">Fecha de inicio</td>
                <td><input type=\"text\" class=\"DatePicker\" name=\"fechaInicio\" type=\"text\"></td> 
            </tr>
            <tr>
                <td class=\"etiqueta\">Fecha de término</td>
                <td><input class=\"DatePicker\" name=\"fechaFin\"></td>
            </tr>
            <tr class=\"filaFormulario\">
                <td><input type=\"submit\" name=\"salvarProyecto\" class=\"btnAdd\" value=\"Salvar Proyecto\"></td>
                <td></td>
            </tr> 
            ";
        // line 150
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </form>  
        </table>
    </div> 
    </div>
    </div>
    </div>  
<div class=\"proyecto\">
    <table>
        <tr class=\"trHeader\">
            <td class=\"headerTable\">Nombre</td>
            <td class=\"headerTable\">Barra</td>
            <td class=\"headerTable\">Porcentaje</td>
            <td class=\"headerTable\">Fecha de Inicio</td>
            <td class=\"headerTable\">Fecha de término</td>
            <td class=\"headerTable\">Cliente</td>
            <td></td>
        </tr>
        ";
        // line 168
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")));
        foreach ($context['_seq'] as $context["_key"] => $context["listar"]) {
            // line 169
            echo "        <tr class=\"trContent\">
            <td>";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "nombreProyecto"), "html", null, true);
            echo "</td>
            ";
            // line 171
            if ((($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "avance") == 0) || ($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "horasProgramadas") == 0))) {
                // line 172
                echo "                <td class=\"second\"><div class=\"progress\" style=\"width: 100px; height: 20px; margin-top: 5px; margin-bottom: 5px; padding-bottom: 0\">
                    <div class=\"bar bar-success\" style=\"width: 0%; background-color: #B4F7A9; height: 100%; margin-bottom: 0 !important; padding-bottom: 0 !important;\"></div>
                </div></td>
                <td>0%</td>
                ";
            } else {
                // line 177
                echo "                ";
                $context["avance"] = (($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "avance") * 100) / $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "horasProgramadas"));
                // line 178
                echo "                <td class=\"second\"><div class=\"progress\" style=\"width: 100px; height: 20px; margin-top: 5px; margin-bottom: 5px; padding-bottom: 0\">
                    <div class=\"bar bar-success\" style=\"width: ";
                // line 179
                echo twig_escape_filter($this->env, (isset($context["avance"]) ? $context["avance"] : $this->getContext($context, "avance")), "html", null, true);
                echo "%; background-color: #B4F7A9; height: 100%; margin-bottom: 0 !important; padding-bottom: 0 !important;\"></div>
                </div>
            </td>
                <td>
                    ";
                // line 183
                echo twig_escape_filter($this->env, twig_round((isset($context["avance"]) ? $context["avance"] : $this->getContext($context, "avance")), 2, "floor"), "html", null, true);
                echo "%
                </td>

                ";
            }
            // line 187
            echo "            <td></td>
            <td>";
            // line 188
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "fechaInicio"), "d-m-Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 189
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "fechaFin"), "d-m-Y"), "html", null, true);
            echo "</td>
            ";
            // line 190
            if (($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "clientes") != null)) {
                // line 191
                echo "            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "clientes"), "nombre"), "html", null, true);
                echo "</td>
            ";
            } else {
                // line 193
                echo "            <td></td>
            ";
            }
            // line 195
            echo "            <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gproyecto", array("id" => $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"))), "html", null, true);
            echo "\">Administrar</a></td>
            
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "    </table>
    
</div>
<div id=\"popup\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Agregar Etapa a Proyecto</h4>
        <div class=\"close\"><a href=\"#\" id=\"close\"><img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <form action=\"";
        // line 206
        echo $this->env->getExtension('routing')->getPath("proyecto");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEtapa"]) ? $context["formEtapa"] : $this->getContext($context, "formEtapa")), 'enctype');
        echo " novalidate>
            <table>
                ";
        // line 208
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEtapa"]) ? $context["formEtapa"] : $this->getContext($context, "formEtapa")), 'form_start');
        echo "
                <tr>
                    <td>";
        // line 210
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtapa"]) ? $context["formEtapa"] : $this->getContext($context, "formEtapa")), "nombre"), 'label');
        echo "</td>
                    <td>";
        // line 211
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtapa"]) ? $context["formEtapa"] : $this->getContext($context, "formEtapa")), "nombre"), 'widget');
        echo "</td>
                    <td>";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtapa"]) ? $context["formEtapa"] : $this->getContext($context, "formEtapa")), "nombre"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td class=\"etiqueta\">Fecha de inicio</td>
                    <td><input class=\"DatePicker\" name=\"fechaInicio\"></td> 
                </tr>
                <tr>
                    <td class=\"etiqueta\">Fecha de término</td>
                    <td><input class=\"DatePicker\" name=\"fechaterminoet\"></td> 
                </tr>
                <tr>
                    <td><input type=\"submit\" class=\"btnAdd\" name=\"salvarEtapa\" value=\"Agregar Etapa\"></td>
                    <td><input type=\"hidden\" id=\"valorProyecto\" name=\"valorProyecto1\" value=\"\"></td>
                </tr>
                ";
        // line 226
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEtapa"]) ? $context["formEtapa"] : $this->getContext($context, "formEtapa")), 'form_end');
        echo "
            </table>
        </form>
    </div>
</div>
<div id=\"popup1\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Agregar Etapa existente a Proyecto</h4>
        <div class=\"close\"><a href=\"#\" id=\"close1\"><img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <form action=\"";
        // line 235
        echo $this->env->getExtension('routing')->getPath("proyecto");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEtapaE"]) ? $context["formEtapaE"] : $this->getContext($context, "formEtapaE")), 'enctype');
        echo " novalidate>
            <table>
                ";
        // line 237
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEtapaE"]) ? $context["formEtapaE"] : $this->getContext($context, "formEtapaE")), 'form_start');
        echo "
                <tr>
                    <td>";
        // line 239
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtapaE"]) ? $context["formEtapaE"] : $this->getContext($context, "formEtapaE")), "nombre"), 'label');
        echo "</td>
                    <td>";
        // line 240
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEtapaE"]) ? $context["formEtapaE"] : $this->getContext($context, "formEtapaE")), "nombre"), 'widget', array("attr" => array("class" => "chosen-select largo-box")));
        echo "</td>
                    <td>";
        // line 241
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
        // line 255
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEtapa"]) ? $context["formEtapa"] : $this->getContext($context, "formEtapa")), 'form_end');
        echo "
            </table>
        </form>
    </div>
</div>
<div id=\"popup2\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Agregar Excepción a Proyecto</h4>
        <div class=\"close\"><a href=\"#\" id=\"close2\"><img src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <form action=\"";
        // line 264
        echo $this->env->getExtension('routing')->getPath("proyecto");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), 'enctype');
        echo " novalidate>
            <table>
                ";
        // line 266
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), 'form_start');
        echo "
                <tr>
                    <td>Nueva Fecha de término</td>
                    <td><input class=\"DatePicker\" name=\"fechaExPro\"></td>
                </tr>
                <tr>
                    <td>";
        // line 272
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "horas"), 'label');
        echo "</td>
                    <td>";
        // line 273
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "horas"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                    <td>";
        // line 274
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "horas"), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 277
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "accion"), 'label');
        echo "</td>
                    <td>";
        // line 278
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "accion"), 'widget', array("attr" => array("class" => "chosen-select largo-box")));
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 281
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "descripcion"), 'label');
        echo "</td>
                    <td>";
        // line 282
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), "descripcion"), 'widget', array("attr" => array("class" => "largo-box")));
        echo "</td>
                    <td>";
        // line 283
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
        // line 291
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formExcPlazoP"]) ? $context["formExcPlazoP"] : $this->getContext($context, "formExcPlazoP")), 'form_end');
        echo "
            </table>
        </form>
    </div>
</div>
<div id=\"popup3\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Agregar Excepción a Etapa</h4>
        <div class=\"close\"><a href=\"#\" id=\"close3\"><img src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <form action=\"";
        // line 300
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
<script>
    \$\$('input.DatePicker').each( function(el){
    new DatePicker(el);
});
</script>
";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:proyecto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 300,  520 => 299,  509 => 291,  498 => 283,  494 => 282,  490 => 281,  484 => 278,  480 => 277,  474 => 274,  470 => 273,  466 => 272,  457 => 266,  450 => 264,  446 => 263,  435 => 255,  418 => 241,  414 => 240,  410 => 239,  405 => 237,  398 => 235,  394 => 234,  383 => 226,  366 => 212,  362 => 211,  358 => 210,  353 => 208,  346 => 206,  342 => 205,  334 => 199,  323 => 195,  319 => 193,  313 => 191,  311 => 190,  307 => 189,  303 => 188,  300 => 187,  293 => 183,  286 => 179,  283 => 178,  280 => 177,  273 => 172,  271 => 171,  267 => 170,  264 => 169,  260 => 168,  239 => 150,  222 => 136,  218 => 135,  214 => 134,  208 => 131,  204 => 130,  200 => 129,  194 => 126,  190 => 125,  186 => 124,  181 => 122,  175 => 121,  166 => 114,  153 => 107,  150 => 106,  146 => 105,  44 => 6,  40 => 5,  36 => 4,  31 => 3,  28 => 2,);
    }
}
