<?php

/* AppMediBundle:Default:comuna.html.twig */
class __TwigTemplate_f6a29783d675164c06ded973811488c54249846f10709933a86f21bef47b356b extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("pais");
        echo "\">País</a></li>
                    <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("region");
        echo "\">Región</a></li>
                    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("ciudad");
        echo "\">Ciudad</a></li>
                    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("comuna");
        echo "\">Comuna</a></li>
                </ul>
            </nav>
";
    }

    // line 12
    public function block_contenido($context, array $blocks = array())
    {
        // line 13
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/modal.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
<script lang=\"text/javascript\">
    \$(document).ready(function(){
    \$(\".chosen-select\").chosen();
});
</script>
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$('.modificarComuna').click(function(){
        var id = \$(this).data(\"identificador\");
        var nombre = \$(this).data(\"nombre\");
        var superior = \$(this).data(\"superior\");
        \$(\"#valorIdentificador\").val( id );
        document.getElementById(\"valorNombre\").innerHTML = nombre;
        document.getElementById(\"valorSuperior\").innerHTML = superior;
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
<form action=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("comuna");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
";
        // line 42
        if (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "crear")) {
            // line 43
            echo "    <h4>Agregar Ciudad</h4>
    ";
        } else {
            // line 45
            echo "    <h4>Usted modificará la Ciudad <font class=\"red\">\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "nombre"), "html", null, true);
            echo "\"</font> </h4>
    ";
        }
        // line 47
        echo "    <div class=\"addUbication\">
        <table>
            ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <tr class=\"filaFormulario\">
                <td>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'widget', array("value" => $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "nombre")));
        echo "</td>
            </tr>
            <tr class=\"filaFormulario\">
                <td></td>
                <td>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'errors');
        echo "</td>                
            </tr>
            <tr class=\"filaFormulario\">
                <td>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "superior"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "superior"), 'widget', array("attr" => array("class" => "chosen-select")));
        echo "</td>
            </tr>
            ";
        // line 62
        if (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "crear")) {
            // line 63
            echo "            <tr class=\"filaFormulario\">
                <td><input type=\"submit\" name=\"salvarComuna\" value=\"Salvar Comuna\"></td>
                <td></td>
            </tr>
            ";
        } else {
            // line 68
            echo "            <tr class=\"filaFormulario\">
                <td><input type=\"submit\" name=\"modificarComuna\" value=\"Modificar Comuna\"></td>
                <td><input type=\"hidden\" name=\"valorModificar\" value=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "id"), "html", null, true);
            echo "\"></td>
                <td></td>
            </tr>
            ";
        }
        // line 74
        echo "        </table>
    </div>    
</form>    
<section class=\"tabla\"> 
    <h4>Listado de ";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "listado"), "html", null, true);
        echo "</h4>
<table class=\"listar\">
        <tr>
            
            <td class=\"tabSup\">Identificador de ";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
        echo "</td>
            <td class=\"tabSup\">Nombre de ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
        echo "</td>
            <td class=\"tabSup\">Ciudad a la que pertenece</td>
            <td class=\"tabSup\"></td>
            <td class=\"tabSup\"></td>
            
        </tr>
        ";
        // line 89
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")));
        foreach ($context['_seq'] as $context["_key"] => $context["listar"]) {
            // line 90
            echo "        <form action=\"";
            echo $this->env->getExtension('routing')->getPath("comuna");
            echo " \" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " novalidate>
        <tr>    
            <td class=\"tabInfo\">";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "nombre"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "superior"), "nombre"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\"><input type=\"submit\" name=\"eliminar\" value=\"eliminar\"></td>
            <td class=\"tabInfo\"><input type=\"button\" class=\"modificarComuna\" name=\"modificarComuna\" value=\"modificar\" data-nombre=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "nombre"), "html", null, true);
            echo "\" data-identificador=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\" data-superior=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "superior"), "nombre"), "html", null, true);
            echo "\"></td>
            <td><input type=\"hidden\" name=\"valorEliminar\" value=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\"></td>
            <td><input type=\"hidden\" name=\"inferior\" value=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "inferior"), "html", null, true);
            echo "\"></td>
            <td ><input type=\"hidden\" name=\"tabla\" value=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
            echo "\"></td>
        <tr/>    
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "    </table> 
</section>   
<div id=\"popup\" style=\"display: none;\">
    <div class=\"content-popup2\">
        <h4 class=\"modalh4\">Usted modificará una Región</h4>
        <div class=\"close\"><a href=\"#\" id=\"close\"><img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
            <form action=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("comuna");
        echo " \" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formComuna"]) ? $context["formComuna"] : $this->getContext($context, "formComuna")), 'enctype');
        echo " novalidate>
                <table>
                    ";
        // line 111
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formComuna"]) ? $context["formComuna"] : $this->getContext($context, "formComuna")), 'form_start');
        echo "
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorNombre\"></div></td>
                        <td>Nombre de Región</td>
                        <td>";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formComuna"]) ? $context["formComuna"] : $this->getContext($context, "formComuna")), "nombre"), 'widget');
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formComuna"]) ? $context["formComuna"] : $this->getContext($context, "formComuna")), "nombre"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorSuperior\"></div></td>
                        <td>País al que pertenece:</td>
                        <td>";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formComuna"]) ? $context["formComuna"] : $this->getContext($context, "formComuna")), "superior"), 'widget', array("attr" => array("class" => "chosen-select")));
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formComuna"]) ? $context["formComuna"] : $this->getContext($context, "formComuna")), "nombre"), 'errors');
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
        // line 137
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formComuna"]) ? $context["formComuna"] : $this->getContext($context, "formComuna")), 'form_end');
        echo "
                </table>
           </form>
    </div>
</div>
";
    }

    // line 143
    public function block_horas($context, array $blocks = array())
    {
        // line 144
        echo "
";
        // line 145
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexHoras.html.twig", array("formHoras" => (isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras"))));
        // line 146
        echo "

";
        // line 148
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexReunion.html.twig", array("reuniones" => (isset($context["reuniones"]) ? $context["reuniones"] : $this->getContext($context, "reuniones"))));
        // line 149
        echo "

";
        // line 151
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexProyecto.html.twig", array("proyectos" => (isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto"))));
        // line 152
        echo "

";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:comuna.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 148,  319 => 146,  317 => 145,  289 => 128,  274 => 119,  260 => 111,  232 => 99,  228 => 98,  216 => 96,  211 => 94,  191 => 89,  165 => 74,  114 => 49,  110 => 47,  104 => 45,  100 => 43,  315 => 145,  301 => 137,  267 => 118,  231 => 102,  167 => 81,  160 => 77,  215 => 132,  155 => 87,  829 => 420,  820 => 416,  784 => 388,  780 => 387,  758 => 371,  754 => 370,  744 => 366,  740 => 365,  734 => 362,  730 => 361,  726 => 360,  717 => 354,  710 => 352,  706 => 351,  695 => 343,  670 => 327,  665 => 325,  658 => 323,  654 => 322,  643 => 314,  626 => 300,  622 => 299,  618 => 298,  613 => 296,  606 => 294,  602 => 293,  594 => 288,  584 => 281,  565 => 275,  559 => 274,  555 => 273,  551 => 272,  543 => 270,  539 => 269,  524 => 260,  518 => 257,  514 => 255,  503 => 251,  499 => 249,  493 => 247,  481 => 244,  447 => 227,  443 => 226,  439 => 225,  420 => 218,  416 => 216,  403 => 212,  399 => 211,  395 => 210,  358 => 192,  352 => 189,  348 => 188,  342 => 187,  331 => 152,  304 => 170,  300 => 169,  292 => 167,  250 => 150,  207 => 93,  175 => 113,  150 => 103,  890 => 499,  878 => 490,  865 => 485,  861 => 484,  850 => 476,  841 => 470,  837 => 469,  833 => 468,  823 => 417,  819 => 460,  815 => 459,  810 => 457,  803 => 455,  799 => 454,  788 => 446,  773 => 437,  769 => 379,  759 => 432,  753 => 429,  749 => 428,  745 => 427,  731 => 416,  727 => 415,  718 => 412,  711 => 410,  696 => 401,  685 => 393,  681 => 392,  677 => 391,  671 => 388,  667 => 387,  661 => 384,  657 => 383,  653 => 382,  633 => 373,  617 => 360,  608 => 354,  592 => 341,  583 => 335,  548 => 271,  544 => 307,  529 => 300,  525 => 298,  516 => 295,  512 => 294,  508 => 293,  505 => 292,  482 => 275,  477 => 243,  470 => 241,  428 => 254,  424 => 219,  412 => 246,  408 => 245,  392 => 209,  388 => 208,  369 => 197,  351 => 211,  336 => 207,  332 => 206,  256 => 173,  248 => 170,  233 => 142,  198 => 138,  326 => 183,  308 => 171,  303 => 139,  299 => 173,  295 => 136,  291 => 171,  287 => 165,  279 => 181,  226 => 154,  222 => 135,  197 => 107,  152 => 104,  148 => 85,  113 => 49,  90 => 43,  476 => 280,  472 => 279,  450 => 263,  446 => 262,  442 => 261,  436 => 258,  432 => 257,  426 => 254,  422 => 253,  418 => 252,  370 => 221,  366 => 220,  357 => 217,  350 => 215,  346 => 214,  310 => 190,  286 => 183,  275 => 180,  265 => 171,  263 => 117,  255 => 112,  242 => 103,  218 => 94,  192 => 87,  186 => 122,  178 => 82,  172 => 98,  153 => 112,  1015 => 562,  1013 => 561,  1010 => 560,  1006 => 556,  1004 => 555,  1001 => 554,  998 => 553,  932 => 491,  925 => 487,  913 => 478,  901 => 469,  895 => 466,  888 => 464,  884 => 463,  872 => 487,  853 => 438,  849 => 437,  845 => 436,  839 => 433,  835 => 432,  831 => 421,  825 => 418,  821 => 427,  817 => 415,  812 => 424,  805 => 422,  801 => 421,  790 => 413,  777 => 438,  770 => 399,  763 => 433,  757 => 392,  750 => 369,  746 => 389,  733 => 379,  723 => 414,  719 => 371,  714 => 369,  707 => 409,  703 => 366,  692 => 358,  682 => 351,  678 => 329,  674 => 328,  668 => 346,  664 => 345,  660 => 344,  655 => 342,  648 => 340,  644 => 376,  637 => 374,  631 => 333,  629 => 332,  624 => 330,  611 => 320,  607 => 318,  596 => 289,  589 => 309,  585 => 308,  580 => 279,  574 => 278,  562 => 296,  556 => 310,  547 => 289,  542 => 288,  538 => 306,  534 => 285,  528 => 261,  517 => 279,  511 => 276,  507 => 253,  501 => 291,  497 => 248,  494 => 272,  489 => 246,  485 => 245,  464 => 257,  460 => 256,  456 => 255,  452 => 254,  449 => 253,  445 => 265,  441 => 264,  434 => 223,  417 => 238,  411 => 235,  400 => 244,  385 => 228,  377 => 200,  373 => 199,  359 => 214,  353 => 211,  349 => 210,  338 => 186,  333 => 203,  325 => 149,  318 => 174,  313 => 144,  306 => 194,  284 => 190,  277 => 186,  271 => 178,  259 => 169,  245 => 108,  213 => 145,  195 => 90,  185 => 85,  181 => 130,  345 => 209,  340 => 208,  335 => 185,  329 => 151,  311 => 143,  307 => 141,  302 => 193,  296 => 168,  293 => 136,  288 => 134,  280 => 161,  276 => 160,  272 => 159,  270 => 127,  261 => 154,  257 => 152,  253 => 109,  249 => 108,  244 => 117,  236 => 115,  225 => 110,  212 => 146,  205 => 142,  200 => 88,  188 => 131,  184 => 93,  174 => 89,  134 => 60,  126 => 58,  76 => 20,  58 => 14,  34 => 7,  23 => 1,  480 => 162,  474 => 242,  469 => 158,  461 => 269,  457 => 231,  453 => 230,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 222,  427 => 143,  423 => 142,  413 => 134,  409 => 246,  407 => 213,  402 => 244,  398 => 243,  393 => 231,  387 => 235,  384 => 237,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 219,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 181,  314 => 144,  312 => 194,  309 => 142,  305 => 188,  298 => 137,  294 => 185,  285 => 130,  283 => 125,  278 => 86,  268 => 116,  264 => 176,  258 => 174,  252 => 151,  247 => 78,  241 => 77,  229 => 140,  220 => 134,  214 => 69,  177 => 65,  169 => 60,  140 => 60,  132 => 51,  128 => 49,  107 => 51,  61 => 13,  273 => 121,  269 => 94,  254 => 92,  243 => 146,  240 => 145,  238 => 104,  235 => 74,  230 => 82,  227 => 101,  224 => 97,  221 => 109,  219 => 150,  217 => 146,  208 => 90,  204 => 89,  179 => 84,  159 => 113,  143 => 66,  135 => 53,  119 => 51,  102 => 32,  71 => 19,  67 => 33,  63 => 15,  59 => 14,  87 => 45,  94 => 44,  89 => 20,  85 => 25,  75 => 31,  68 => 14,  56 => 9,  38 => 6,  201 => 92,  196 => 126,  183 => 82,  171 => 78,  166 => 110,  163 => 127,  158 => 70,  156 => 76,  151 => 63,  142 => 59,  138 => 54,  136 => 59,  121 => 46,  117 => 44,  105 => 51,  91 => 46,  62 => 16,  49 => 8,  28 => 3,  24 => 2,  26 => 6,  21 => 2,  31 => 3,  25 => 3,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 11,  44 => 6,  27 => 4,  79 => 18,  72 => 19,  69 => 25,  47 => 9,  40 => 5,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 62,  139 => 45,  131 => 62,  123 => 52,  120 => 55,  115 => 56,  111 => 37,  108 => 48,  101 => 50,  98 => 42,  96 => 31,  83 => 25,  74 => 35,  66 => 15,  55 => 15,  52 => 8,  50 => 12,  43 => 8,  41 => 6,  35 => 5,  32 => 4,  29 => 2,  209 => 144,  203 => 92,  199 => 122,  193 => 119,  189 => 118,  187 => 84,  182 => 83,  176 => 99,  173 => 65,  168 => 97,  164 => 115,  162 => 108,  154 => 68,  149 => 51,  147 => 63,  144 => 102,  141 => 48,  133 => 55,  130 => 56,  125 => 44,  122 => 43,  116 => 54,  112 => 53,  109 => 52,  106 => 36,  103 => 32,  99 => 45,  95 => 47,  92 => 41,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 12,  54 => 13,  51 => 14,  48 => 7,  45 => 7,  42 => 7,  39 => 9,  36 => 4,  33 => 3,  30 => 2,);
    }
}
