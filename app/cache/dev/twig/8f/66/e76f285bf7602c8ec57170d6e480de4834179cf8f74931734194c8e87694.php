<?php

/* AppMediBundle:Default:user1.html.twig */
class __TwigTemplate_8f66e76f285bf7602c8ec57170d6e480de4834179cf8f74931734194c8e87694 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/chosen.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\"> 
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/modal.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jqueryvalidate/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jqueryvalidate/additional-methods.min.js"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.mCustomScrollbar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$('.modificarRango').click(function(){
         var role = \$(this).data(\"rango\");
         var profesional = \$(this).data(\"button\");
         \$('body,html').animate({scrollTop: 0}, 800);
        \$(\"#valorRole\").val( role );
        \$(\"#valorProfesional\").val( profesional );
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
    (function(\$){
        \$(window).load(function(){
            \$(\"#containerScroll\").css('height','400px');
            \$(\"#containerScroll\").mCustomScrollbar();
        });
    })(jQuery);
</script>
<script type=\"text/javascript\">
    \$(document).ready(function(){
       \$('.modificarProfesional').click(function(){
           var id = \$(this).data(\"identificador\");
           var run = \$(this).data(\"run\");
           var pnombre = \$(this).data(\"pnombre\");
           var snombre = \$(this).data(\"snombre\");
           var papellido = \$(this).data(\"papellido\");
           var sapellido = \$(this).data(\"sapellido\");
           var celectronico = \$(this).data(\"celectronico\");
           var direccion = \$(this).data(\"direccion\");
           var telefono = \$(this).data(\"telefono\");
           var empresa = \$(this).data(\"empresa\");
           \$('body,html').animate({scrollTop: 0}, 800);
           \$(\"#valorIdentificador\").val( id );
           \$(\"#valorIdentificador1\").val( id );
           document.getElementById(\"valorRun\").innerHTML = run;
           document.getElementById(\"valorPnombre\").innerHTML = pnombre;
           document.getElementById(\"valorSnombre\").innerHTML = snombre;
           document.getElementById(\"valorPapellido\").innerHTML = papellido;
           document.getElementById(\"valorSapellido\").innerHTML = sapellido;
           document.getElementById(\"valorCelectronico\").innerHTML = celectronico;
           document.getElementById(\"valorDireccion\").innerHTML = direccion;
           document.getElementById(\"valorTelefono\").innerHTML = telefono;
           document.getElementById(\"valorEmpresa\").innerHTML = empresa;
           \$('#popup1').fadeIn('slow');
           \$('.popup-overlay').fadeIn('slow');
           \$('.popup-overlay').height(\$(window).height());
           return false;
           
       }) ;
       
       \$('#close1').click(function(){
        \$('#popup1').fadeOut('slow');
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
    <h4>Agregar usuario</h4>
    <a href=\"#\" id=\"agregaritem\" class=\"toggle linkMostrar\">Mostrar/Ocultar</a>
    <div id=\"formAdd\" style=\"display:none\">
    <div class=\"addUbication\">
        <table>
            <form id=\"formProfesional\" action=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("usuario");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
            ";
        // line 100
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <tr>
                <td>";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("placeholder" => "Ej. 11222333-4")));
        echo "</td>
                <td>";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pnombre"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pnombre"), 'widget');
        echo "</td>
                <td>";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pnombre"), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "snombre"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "snombre"), 'widget');
        echo "</td>
                <td>";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "snombre"), 'errors');
        echo "</td>  
            </tr>
            <tr>
                <td>";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "papellido"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "papellido"), 'widget');
        echo "</td>
                <td>";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "papellido"), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sapellido"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sapellido"), 'widget');
        echo "</td>
                <td>";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sapellido"), 'errors');
        echo "</td> 
            </tr>
            <tr>
                <td>";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "Password"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "Password"), 'widget');
        echo "</td>
                <td>";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "Password"), 'errors');
        echo "</td>  
            </tr>
            <tr>
                <td>";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "Repetir_Password"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "Repetir_Password"), 'widget');
        echo "</td>
                <td>";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "Repetir_Password"), 'errors');
        echo "</td>  
            </tr>
            <tr>
                <td>";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correo"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correo"), 'widget');
        echo "</td>
                <td>";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correo"), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion"), 'widget');
        echo "</td>
                <td>";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion"), 'errors');
        echo "</td> 
            </tr>
            <tr>
                <td>";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'widget');
        echo "</td>
                <td>";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "empresa"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "empresa"), 'widget', array("attr" => array("class" => "chosen-select")));
        echo "</td>
                <td>";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "empresa"), 'errors');
        echo "</td> 
            </tr>
            <tr>
                <td>";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rango"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rango"), 'widget', array("attr" => array("class" => "chosen-select")));
        echo "</td>
                <td>";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rango"), 'errors');
        echo "</td> 
            </tr>
            <tr>
                <td>";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen"), "file"), 'label', array("label_attr" => array("class" => "etiqueta", "id" => "imagen")));
        echo "</td>
                <td>";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen"), "file"), 'widget');
        echo "</td>
            </tr>
            <tr class=\"filaFormulario\">
                <td><input type=\"submit\" id=\"botonAgregar\" class=\"btnAdd\" name=\"salvarUsuario\" value=\"Salvar Usuario\"></td>
                <td></td>
            </tr>
            ";
        // line 169
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </form> 
        </table>
    </div>  
    </div>
    </div> 
    </div> 
<div class=\"proyecto\">
<table class=\"listar\">
        <tr class=\"trHeader\">
            <td class=\"headerTable1\">Nombre de ";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
        echo "</td>
            <td class=\"headerTable1\">Correo de ";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
        echo "</td>
            <td class=\"headerTable1\">Rango de ";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
        echo "</td>
            <td class=\"headerTable1\"></td>
            <td class=\"headerTable1\"></td>
            <td class=\"headerTable1\"></td>
            <td class=\"headerTable1\"></td>
            
        </tr>
        ";
        // line 188
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")));
        foreach ($context['_seq'] as $context["_key"] => $context["listar"]) {
            // line 189
            echo "        <form action=\"";
            echo $this->env->getExtension('routing')->getPath("usuario");
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " novalidate>
        <tr class=\"trContent1\">    
            <td class=\"tabInfo\">";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "username"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "correo"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">
                <table>
                    ";
            // line 195
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 196
                echo "                    <tr>
                        <td>";
                // line 197
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "name"), "html", null, true);
                echo "</td>
                        <input type=\"button\" class=\"modificarRango modificar1\" data-button='";
                // line 198
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
                echo "' data-rango='";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "id"), "html", null, true);
                echo "'>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 201
            echo "                </table>
            </td>
            <td class=\"tabInfo\"><input type=\"button\" class=\"modificarProfesional btnAdd\" name=\"modificar\" value=\"modificar\"
                                       data-identificador=\"";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\"
                                       data-run=\"";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "username"), "html", null, true);
            echo "\" 
                                       data-pnombre=\"";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "pnombre"), "html", null, true);
            echo "\" 
                                       data-snombre=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "snombre"), "html", null, true);
            echo "\" 
                                       data-papellido=\"";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "papellido"), "html", null, true);
            echo "\" 
                                       data-sapellido=\"";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "sapellido"), "html", null, true);
            echo "\" 
                                       data-celectronico=\"";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "correo"), "html", null, true);
            echo "\" 
                                       data-direccion=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "direccion"), "html", null, true);
            echo "\" 
                                       data-telefono=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "telefono"), "html", null, true);
            echo "\" 
                                       data-empresa=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "empresa"), "nombre"), "html", null, true);
            echo "\"></td>
            <td class=\"tabInfo\"><input type=\"submit\" class=\"btnAdd\" name=\"eliminar\" value=\"eliminar\"></td>
            <td><input type=\"hidden\" name=\"valorEliminar\" value=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\"></td>
            <td><input type=\"hidden\" name=\"tabla\" value=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
            echo "\"></td>
        </tr>    
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "    </table>
</div>
<div id=\"popup\" style=\"display: none;\">
    <div class=\"content-popup\">
        <h4 class=\"modalh4\">Modificar Rango de Profesional</h4>
        <div class=\"close\"><a href=\"#\" id=\"close\"><img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
            <form action=\"";
        // line 226
        echo $this->env->getExtension('routing')->getPath("usuario");
        echo " \" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formRango"]) ? $context["formRango"] : $this->getContext($context, "formRango")), 'enctype');
        echo " novalidate>
                ";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRango"]) ? $context["formRango"] : $this->getContext($context, "formRango")), "name"), 'widget');
        echo "
                <input type=\"hidden\" id=\"valorRole\" name=\"valorRole\" value=\"\">
                <input type=\"hidden\" id=\"valorProfesional\" name=\"valorProfesional\" value=\"\">
                <input type=\"submit\" class=\"btnForm1 btnAdd\" name=\"modificarRangoProfesional\" value=\"Modificar Rango\">
           </form>
    </div>
</div> 
<div id=\"popup1\" class=\"formulario\" style=\"display: none;\">
    <div class=\"content-popup2\">
        <h4 class=\"modalh4\">Usted modificará un Usuario</h4>
        <div class=\"close\"><a href=\"#\" id=\"close1\"><img src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
        <div id=\"containerScroll\">
            <form action=\"";
        // line 239
        echo $this->env->getExtension('routing')->getPath("usuario");
        echo " \" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), 'enctype');
        echo " novalidate>
                <table>
                    ";
        // line 241
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), 'form_start');
        echo "
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorRun\"></div></td>
                        <td>";
        // line 245
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "username"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                        <td>";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "username"), 'widget');
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\" style=\"display:none\">
                        <td>";
        // line 249
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "username"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorPnombre\"></div></td>
                        <td>";
        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "pnombre"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                        <td>";
        // line 255
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "pnombre"), 'widget');
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\" style=\"display:none\">
                        <td>";
        // line 258
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "pnombre"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorSnombre\"></div></td>
                        <td>";
        // line 263
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "snombre"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                        <td>";
        // line 264
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "snombre"), 'widget');
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\" style=\"display:none\">
                        <td>";
        // line 267
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "snombre"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorPapellido\"></div></td>
                        <td>";
        // line 272
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "papellido"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                        <td>";
        // line 273
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "papellido"), 'widget');
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\" style=\"display:none\">
                        <td>";
        // line 276
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "papellido"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorSapellido\"></div></td>
                        <td>";
        // line 281
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "sapellido"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                        <td>";
        // line 282
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "sapellido"), 'widget');
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\" style=\"display:none\">
                        <td>";
        // line 285
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "sapellido"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorCelectronico\"></div></td>
                        <td>";
        // line 290
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "correo"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                        <td>";
        // line 291
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "correo"), 'widget');
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\" style=\"display:none\">
                        <td>";
        // line 294
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "correo"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorDireccion\"></div></td>
                        <td>";
        // line 299
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "direccion"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                        <td>";
        // line 300
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "direccion"), 'widget');
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\" style=\"display:none\">
                        <td>";
        // line 303
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "direccion"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorTelefono\"></div></td>
                        <td>";
        // line 308
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "telefono"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                        <td>";
        // line 309
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "telefono"), 'widget');
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\" style=\"display:none\">
                        <td>";
        // line 312
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "telefono"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorEmpresa\"></div></td>
                        <td>";
        // line 317
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "empresa"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                        <td>";
        // line 318
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "empresa"), 'widget', array("attr" => array("class" => "chosen-select")));
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\" style=\"display:none\">
                        <td>";
        // line 321
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "empresa"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorEmpresa\"></div></td>
                        <td>";
        // line 326
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "comuna"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                        <td>";
        // line 327
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "comuna"), 'widget', array("attr" => array("class" => "chosen-select")));
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\" style=\"display:none\">
                        <td>";
        // line 330
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), "comuna"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td><input type=\"submit\" class=\"btnAdd\" name=\"guardarCambios\" value=\"guardarCambios\"></td>
                        <td></td>
                    </tr>
                    <tr style=\"display:none\">
                        <td><input type=\"hidden\" name=\"valorIdentificador\" id=\"valorIdentificador\" value=\"\"></td>
                    </tr>
                    ";
        // line 339
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formUsuario"]) ? $context["formUsuario"] : $this->getContext($context, "formUsuario")), 'form_end');
        echo "
                </table>
           </form>
            <form action=\"";
        // line 342
        echo $this->env->getExtension('routing')->getPath("usuario");
        echo " \" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formContrasena"]) ? $context["formContrasena"] : $this->getContext($context, "formContrasena")), 'enctype');
        echo " novalidate>
                <h4>Modificar Contraseña</h4>
                <table>
                    ";
        // line 345
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formContrasena"]) ? $context["formContrasena"] : $this->getContext($context, "formContrasena")), 'form_start');
        echo "
                    <tr class=\"filaFormulario\">
                        <td>";
        // line 347
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formContrasena"]) ? $context["formContrasena"] : $this->getContext($context, "formContrasena")), "password"), "Password"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                        <td>";
        // line 348
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formContrasena"]) ? $context["formContrasena"] : $this->getContext($context, "formContrasena")), "password"), "Password"), 'widget', array("label_attr" => array("class" => "largo-box")));
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\" style=\"display:none\">
                        <td>";
        // line 351
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formContrasena"]) ? $context["formContrasena"] : $this->getContext($context, "formContrasena")), "password"), "Password"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>";
        // line 354
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formContrasena"]) ? $context["formContrasena"] : $this->getContext($context, "formContrasena")), "password"), "Repetir_Password"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                        <td>";
        // line 355
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formContrasena"]) ? $context["formContrasena"] : $this->getContext($context, "formContrasena")), "password"), "Repetir_Password"), 'widget', array("label_attr" => array("class" => "largo-box")));
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\" style=\"display:none\">
                        <td>";
        // line 358
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formContrasena"]) ? $context["formContrasena"] : $this->getContext($context, "formContrasena")), "password"), "Repetir_Password"), 'errors');
        echo "</td> 
                    </tr>
                    <tr>
                        <td>
                            <input type=\"submit\" class=\"btnAdd\" name=\"cambiarContrasena\" value=\"Modificar Contraseña\">
                            <input type=\"hidden\" name=\"valorIdentificador\" id=\"valorIdentificador1\" value=\"\">
                        </td>
                    </tr>
                    ";
        // line 366
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formContrasena"]) ? $context["formContrasena"] : $this->getContext($context, "formContrasena")), 'form_end');
        echo "

                </table>
            
            </form>
        </div>
    </div>
</div>
<script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/chosen.proto.js"), "html", null, true);
        echo "\"></script>
<script>
// just for the demos, avoids form submit
jQuery.validator.setDefaults({
  debug: true,
  success: \"valid\"
});
\$( \"#formProfesional\" ).validate({
  rules: {
    \"User1[imagen][file]\": {
      required: true,
      extension: \"png|bmp|jpg|jpeg\"
    }
  }
    submitHandler: function(formProfesional) {
        formProfesional.submit();
    }  
});

</script>
";
    }

    // line 397
    public function block_horas($context, array $blocks = array())
    {
        // line 398
        echo "
";
        // line 399
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexHoras.html.twig", array("formHoras" => (isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras"))));
        // line 400
        echo "


";
        // line 403
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexProyecto.html.twig", array("proyectos" => (isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto"))));
        // line 404
        echo "

";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:user1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  818 => 404,  816 => 403,  811 => 400,  809 => 399,  806 => 398,  803 => 397,  778 => 375,  774 => 374,  763 => 366,  752 => 358,  746 => 355,  742 => 354,  736 => 351,  730 => 348,  726 => 347,  721 => 345,  713 => 342,  707 => 339,  695 => 330,  689 => 327,  685 => 326,  677 => 321,  671 => 318,  667 => 317,  659 => 312,  653 => 309,  649 => 308,  641 => 303,  635 => 300,  631 => 299,  623 => 294,  617 => 291,  613 => 290,  605 => 285,  599 => 282,  595 => 281,  587 => 276,  581 => 273,  577 => 272,  569 => 267,  563 => 264,  559 => 263,  551 => 258,  545 => 255,  541 => 254,  533 => 249,  527 => 246,  523 => 245,  516 => 241,  509 => 239,  504 => 237,  491 => 227,  485 => 226,  481 => 225,  474 => 220,  464 => 216,  460 => 215,  455 => 213,  451 => 212,  447 => 211,  443 => 210,  439 => 209,  435 => 208,  431 => 207,  427 => 206,  423 => 205,  419 => 204,  414 => 201,  403 => 198,  399 => 197,  396 => 196,  392 => 195,  386 => 192,  382 => 191,  374 => 189,  370 => 188,  360 => 181,  356 => 180,  352 => 179,  339 => 169,  330 => 163,  326 => 162,  320 => 159,  316 => 158,  312 => 157,  306 => 154,  302 => 153,  298 => 152,  292 => 149,  288 => 148,  284 => 147,  278 => 144,  274 => 143,  270 => 142,  264 => 139,  260 => 138,  256 => 137,  250 => 134,  246 => 133,  242 => 132,  236 => 129,  232 => 128,  228 => 127,  222 => 124,  218 => 123,  214 => 122,  208 => 119,  204 => 118,  200 => 117,  194 => 114,  190 => 113,  186 => 112,  180 => 109,  176 => 108,  172 => 107,  166 => 104,  162 => 103,  158 => 102,  153 => 100,  147 => 99,  53 => 8,  49 => 7,  45 => 6,  41 => 5,  37 => 4,  32 => 3,  29 => 2,);
    }
}
