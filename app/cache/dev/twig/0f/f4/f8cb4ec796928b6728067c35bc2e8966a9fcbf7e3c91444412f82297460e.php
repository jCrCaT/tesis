<?php

/* AppMediBundle:Default:region.html.twig */
class __TwigTemplate_0ff4f8cb4ec796928b6728067c35bc2e8966a9fcbf7e3c91444412f82297460e extends Twig_Template
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
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$('.modificarRegion').click(function(){
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

<script lang=\"text/javascript\">
    \$(document).ready(function(){
    \$(\".chosen-select\").chosen();
});
</script>

<form action=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("region");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
    <h4>Agregar Región</h4>
    <div class=\"addUbication\">
        <table>
            ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <tr class=\"filaFormulario\">
                <td>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td></td>
                <td>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'errors');
        echo "</td>                
            </tr>
            <tr class=\"filaFormulario\">
                <td>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "superior"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "superior"), 'widget', array("attr" => array("class" => "chosen-select")));
        echo "</td>
            </tr>
            <tr class=\"filaFormulario\">
                <td><input type=\"submit\" name=\"salvarRegion\" value=\"Salvar Región\"></td>
                <td></td>
            </tr>
        </table>
    </div>    
</form>    
<section class=\"tabla\">  
    <h4>Listado de ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "listado"), "html", null, true);
        echo "</h4>
<table class=\"listar\">
        <tr>
            
            <td class=\"tabSup\">Identificador de ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
        echo "</td>
            <td class=\"tabSup\">Nombre de ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
        echo "</td>
            <td class=\"tabSup\">País al que pertenece</td>
            <td class=\"tabSup\"></td>
            <td class=\"tabSup\"></td>
            
        </tr>
        ";
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")));
        foreach ($context['_seq'] as $context["_key"] => $context["listar"]) {
            // line 80
            echo "        <form action=\"";
            echo $this->env->getExtension('routing')->getPath("region");
            echo " \" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " novalidate>
        <tr>    
            <td class=\"tabInfo\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "nombre"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "superior"), "nombre"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\"><input type=\"submit\" name=\"eliminar\" value=\"eliminar\"></td>
            <td class=\"tabInfo\"><input type=\"button\" class=\"modificarRegion\" name=\"modificarRegion\" value=\"modificar\" data-nombre=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "nombre"), "html", null, true);
            echo "\" data-identificador=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\" data-superior=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "superior"), "nombre"), "html", null, true);
            echo "\"></td>
            <td><input type=\"hidden\" name=\"valorEliminar\" value=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\"></td>
            <td><input type=\"hidden\" name=\"inferior\" value=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "inferior"), "html", null, true);
            echo "\"></td>
            <td><input type=\"hidden\" name=\"tabla\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
            echo "\"></td>
        </tr>    
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "    </table>
</section>
<div id=\"popup\" style=\"display: none;\">
    <div class=\"content-popup2\">
        <h4 class=\"modalh4\">Usted modificará una Región</h4>
        <div class=\"close\"><a href=\"#\" id=\"close\"><img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/close.png"), "html", null, true);
        echo "\"/></a></div>
            <form action=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("region");
        echo " \" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formRegion"]) ? $context["formRegion"] : $this->getContext($context, "formRegion")), 'enctype');
        echo " novalidate>
                <table>
                    ";
        // line 101
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRegion"]) ? $context["formRegion"] : $this->getContext($context, "formRegion")), 'form_start');
        echo "
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorNombre\"></div></td>
                        <td>Nombre de Región</td>
                        <td>";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRegion"]) ? $context["formRegion"] : $this->getContext($context, "formRegion")), "nombre"), 'widget');
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRegion"]) ? $context["formRegion"] : $this->getContext($context, "formRegion")), "nombre"), 'errors');
        echo "</td> 
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>Valor Actual:</td>
                        <td><div id=\"valorSuperior\"></div></td>
                        <td>País al que pertenece:</td>
                        <td>";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRegion"]) ? $context["formRegion"] : $this->getContext($context, "formRegion")), "superior"), 'widget', array("attr" => array("class" => "chosen-select")));
        echo "</td>
                    </tr>
                    <tr class=\"filaFormulario\">
                        <td>";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRegion"]) ? $context["formRegion"] : $this->getContext($context, "formRegion")), "nombre"), 'errors');
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
        // line 127
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRegion"]) ? $context["formRegion"] : $this->getContext($context, "formRegion")), 'form_end');
        echo "
                </table>
           </form>
    </div>
</div>
";
    }

    // line 133
    public function block_horas($context, array $blocks = array())
    {
        // line 134
        echo "
";
        // line 135
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexHoras.html.twig", array("formHoras" => (isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras"))));
        // line 136
        echo "

";
        // line 138
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexReunion.html.twig", array("reuniones" => (isset($context["reuniones"]) ? $context["reuniones"] : $this->getContext($context, "reuniones"))));
        // line 139
        echo "

";
        // line 141
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexProyecto.html.twig", array("proyectos" => (isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto"))));
        // line 142
        echo "

";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 136,  282 => 133,  180 => 107,  206 => 79,  170 => 65,  97 => 32,  251 => 100,  577 => 231,  569 => 229,  550 => 212,  537 => 209,  533 => 208,  520 => 204,  513 => 200,  488 => 189,  479 => 183,  467 => 179,  462 => 178,  448 => 172,  433 => 166,  425 => 161,  421 => 160,  405 => 156,  354 => 131,  190 => 78,  77 => 20,  266 => 116,  161 => 56,  124 => 49,  84 => 28,  53 => 11,  146 => 58,  281 => 95,  239 => 106,  210 => 81,  202 => 89,  127 => 53,  118 => 50,  65 => 14,  137 => 59,  129 => 58,  323 => 143,  319 => 141,  317 => 140,  289 => 128,  274 => 93,  260 => 118,  232 => 91,  228 => 101,  216 => 96,  211 => 82,  191 => 77,  165 => 74,  114 => 48,  110 => 48,  104 => 32,  100 => 38,  315 => 110,  301 => 102,  267 => 118,  231 => 101,  167 => 68,  160 => 66,  215 => 132,  155 => 55,  829 => 420,  820 => 416,  784 => 388,  780 => 387,  758 => 371,  754 => 370,  744 => 366,  740 => 365,  734 => 362,  730 => 361,  726 => 360,  717 => 354,  710 => 352,  706 => 351,  695 => 343,  670 => 327,  665 => 325,  658 => 323,  654 => 322,  643 => 314,  626 => 300,  622 => 299,  618 => 298,  613 => 296,  606 => 294,  602 => 293,  594 => 288,  584 => 281,  565 => 275,  559 => 274,  555 => 273,  551 => 272,  543 => 270,  539 => 269,  524 => 260,  518 => 203,  514 => 255,  503 => 251,  499 => 197,  493 => 247,  481 => 244,  447 => 227,  443 => 226,  439 => 225,  420 => 218,  416 => 216,  403 => 212,  399 => 211,  395 => 210,  358 => 192,  352 => 189,  348 => 130,  342 => 187,  331 => 147,  304 => 157,  300 => 141,  292 => 167,  250 => 83,  207 => 81,  175 => 67,  150 => 44,  890 => 499,  878 => 490,  865 => 485,  861 => 484,  850 => 476,  841 => 470,  837 => 469,  833 => 468,  823 => 417,  819 => 460,  815 => 459,  810 => 457,  803 => 455,  799 => 454,  788 => 446,  773 => 437,  769 => 379,  759 => 432,  753 => 429,  749 => 428,  745 => 427,  731 => 416,  727 => 415,  718 => 412,  711 => 410,  696 => 401,  685 => 393,  681 => 392,  677 => 391,  671 => 388,  667 => 387,  661 => 384,  657 => 383,  653 => 382,  633 => 373,  617 => 360,  608 => 354,  592 => 341,  583 => 335,  548 => 271,  544 => 307,  529 => 207,  525 => 205,  516 => 295,  512 => 294,  508 => 293,  505 => 292,  482 => 275,  477 => 243,  470 => 241,  428 => 254,  424 => 219,  412 => 246,  408 => 245,  392 => 209,  388 => 208,  369 => 136,  351 => 211,  336 => 122,  332 => 206,  256 => 123,  248 => 170,  233 => 79,  198 => 75,  326 => 183,  308 => 106,  303 => 139,  299 => 173,  295 => 151,  291 => 171,  287 => 96,  279 => 181,  226 => 154,  222 => 87,  197 => 86,  152 => 66,  148 => 65,  113 => 46,  90 => 28,  476 => 280,  472 => 180,  450 => 263,  446 => 171,  442 => 169,  436 => 258,  432 => 257,  426 => 254,  422 => 253,  418 => 252,  370 => 221,  366 => 135,  357 => 132,  350 => 215,  346 => 129,  310 => 190,  286 => 183,  275 => 118,  265 => 90,  263 => 112,  255 => 112,  242 => 96,  218 => 86,  192 => 79,  186 => 110,  178 => 83,  172 => 98,  153 => 73,  1015 => 562,  1013 => 561,  1010 => 560,  1006 => 556,  1004 => 555,  1001 => 554,  998 => 553,  932 => 491,  925 => 487,  913 => 478,  901 => 469,  895 => 466,  888 => 464,  884 => 463,  872 => 487,  853 => 438,  849 => 437,  845 => 436,  839 => 433,  835 => 432,  831 => 421,  825 => 418,  821 => 427,  817 => 415,  812 => 424,  805 => 422,  801 => 421,  790 => 413,  777 => 438,  770 => 399,  763 => 433,  757 => 392,  750 => 369,  746 => 389,  733 => 379,  723 => 414,  719 => 371,  714 => 369,  707 => 409,  703 => 366,  692 => 358,  682 => 351,  678 => 329,  674 => 328,  668 => 346,  664 => 345,  660 => 344,  655 => 342,  648 => 340,  644 => 376,  637 => 374,  631 => 333,  629 => 332,  624 => 330,  611 => 320,  607 => 318,  596 => 289,  589 => 309,  585 => 308,  580 => 279,  574 => 278,  562 => 296,  556 => 310,  547 => 289,  542 => 210,  538 => 306,  534 => 285,  528 => 261,  517 => 279,  511 => 276,  507 => 199,  501 => 198,  497 => 248,  494 => 272,  489 => 246,  485 => 245,  464 => 257,  460 => 177,  456 => 255,  452 => 254,  449 => 253,  445 => 265,  441 => 264,  434 => 223,  417 => 159,  411 => 235,  400 => 244,  385 => 228,  377 => 200,  373 => 199,  359 => 214,  353 => 211,  349 => 210,  338 => 186,  333 => 203,  325 => 144,  318 => 174,  313 => 144,  306 => 194,  284 => 190,  277 => 186,  271 => 117,  259 => 104,  245 => 109,  213 => 93,  195 => 87,  185 => 72,  181 => 70,  345 => 209,  340 => 208,  335 => 185,  329 => 118,  311 => 138,  307 => 141,  302 => 142,  296 => 139,  293 => 97,  288 => 135,  280 => 161,  276 => 160,  272 => 127,  270 => 92,  261 => 88,  257 => 103,  253 => 101,  249 => 108,  244 => 117,  236 => 80,  225 => 110,  212 => 82,  205 => 142,  200 => 76,  188 => 111,  184 => 93,  174 => 82,  134 => 47,  126 => 48,  76 => 28,  58 => 13,  34 => 12,  23 => 1,  480 => 162,  474 => 242,  469 => 158,  461 => 269,  457 => 176,  453 => 230,  444 => 149,  440 => 148,  437 => 147,  435 => 167,  430 => 222,  427 => 143,  423 => 142,  413 => 158,  409 => 157,  407 => 213,  402 => 244,  398 => 243,  393 => 231,  387 => 235,  384 => 237,  381 => 137,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 134,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 114,  314 => 139,  312 => 194,  309 => 142,  305 => 136,  298 => 137,  294 => 138,  285 => 134,  283 => 125,  278 => 94,  268 => 116,  264 => 115,  258 => 112,  252 => 109,  247 => 98,  241 => 77,  229 => 78,  220 => 98,  214 => 88,  177 => 82,  169 => 60,  140 => 48,  132 => 51,  128 => 60,  107 => 44,  61 => 20,  273 => 121,  269 => 127,  254 => 115,  243 => 146,  240 => 81,  238 => 104,  235 => 101,  230 => 82,  227 => 101,  224 => 99,  221 => 109,  219 => 150,  217 => 69,  208 => 90,  204 => 78,  179 => 69,  159 => 71,  143 => 55,  135 => 62,  119 => 54,  102 => 42,  71 => 30,  67 => 16,  63 => 15,  59 => 20,  87 => 32,  94 => 43,  89 => 36,  85 => 35,  75 => 31,  68 => 17,  56 => 12,  38 => 5,  201 => 83,  196 => 81,  183 => 57,  171 => 69,  166 => 80,  163 => 67,  158 => 70,  156 => 65,  151 => 57,  142 => 68,  138 => 48,  136 => 63,  121 => 52,  117 => 36,  105 => 43,  91 => 46,  62 => 13,  49 => 8,  28 => 2,  24 => 2,  26 => 6,  21 => 2,  31 => 3,  25 => 3,  19 => 1,  93 => 37,  88 => 31,  78 => 27,  46 => 7,  44 => 7,  27 => 4,  79 => 32,  72 => 27,  69 => 16,  47 => 9,  40 => 6,  37 => 5,  22 => 2,  246 => 82,  157 => 71,  145 => 62,  139 => 54,  131 => 51,  123 => 34,  120 => 47,  115 => 32,  111 => 41,  108 => 49,  101 => 40,  98 => 41,  96 => 33,  83 => 25,  74 => 26,  66 => 24,  55 => 19,  52 => 8,  50 => 8,  43 => 8,  41 => 6,  35 => 5,  32 => 3,  29 => 2,  209 => 144,  203 => 89,  199 => 88,  193 => 86,  189 => 85,  187 => 86,  182 => 84,  176 => 105,  173 => 66,  168 => 101,  164 => 50,  162 => 79,  154 => 46,  149 => 72,  147 => 56,  144 => 51,  141 => 63,  133 => 51,  130 => 46,  125 => 57,  122 => 52,  116 => 41,  112 => 50,  109 => 52,  106 => 37,  103 => 47,  99 => 40,  95 => 28,  92 => 32,  86 => 32,  82 => 22,  80 => 29,  73 => 17,  64 => 22,  60 => 13,  57 => 12,  54 => 9,  51 => 18,  48 => 8,  45 => 7,  42 => 14,  39 => 4,  36 => 5,  33 => 3,  30 => 2,);
    }
}
