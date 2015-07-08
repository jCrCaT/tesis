<?php

/* AppMediBundle:Default:cliente.html.twig */
class __TwigTemplate_dfeb277ffced7070c9d9ff6ef4909a581078af5658cb12f014b1d4458baa7f60 extends Twig_Template
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
        echo "    <script language=\"javascript\">
    \$(document).ready(function(){ 
        \$('#agregaritem').on('click',function(e){
            e.preventDefault();
            \$( \"#formAdd\").slideToggle( \"slow\" );
        });
    });
</script>
    <div class=\"agregarItem\">
    <div>
    <h4>Agregar Cliente</h4>
    <a href=\"#\" id=\"agregaritem\" class=\"toggle linkMostrar\">Mostrar/Ocultar</a>
    <div id=\"formAdd\" style=\"display:none\">
    <div class=\"addUbication\">
        <table>
            <form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("cliente");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
            ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <tr>
                <td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut"), 'widget', array("value" => $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "rut")));
        echo "</td>
                <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut"), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'widget', array("value" => $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "nombre")));
        echo "</td>
                <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion"), 'widget', array("value" => $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "direccion")));
        echo "</td>
                <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion"), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "giro"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "giro"), 'widget', array("value" => $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "giro")));
        echo "</td>
                <td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "giro"), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'widget', array("value" => $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "telefono")));
        echo "</td>
                <td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correoelectronico"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correoelectronico"), 'widget', array("value" => $this->getAttribute((isset($context["modificar"]) ? $context["modificar"] : $this->getContext($context, "modificar")), "correoelectronico")));
        echo "</td>
                <td>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correoelectronico"), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comuna"), 'label', array("label_attr" => array("class" => "etiqueta")));
        echo "</td>
                <td>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comuna"), 'widget');
        echo "</td>
                <td>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comuna"), 'errors');
        echo "</td>
            </tr>
            <tr class=\"filaFormulario\">
                <td><input type=\"submit\" name=\"salvarCliente\" value=\"Salvar Cliente\"></td>
                <td></td>
            </tr>   
            ";
        // line 59
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
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
        echo "</td>
            <td class=\"headerTable1\">Dirección de ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
        echo "</td>
            <td class=\"headerTable1\">Teléfono de ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
        echo "</td>
            <td class=\"headerTable1\"></td>
            <td class=\"headerTable1\"></td>
            <td class=\"headerTable1\"></td>
            
        </tr>
        ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")));
        foreach ($context['_seq'] as $context["_key"] => $context["listar"]) {
            // line 78
            echo "        <form action=\"";
            echo $this->env->getExtension('routing')->getPath("cliente");
            echo " \" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " novalidate>
        <tr class=\"trContent1\">    
            <td class=\"tabInfo\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "nombre"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "direccion"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "telefono"), "html", null, true);
            echo "</td>
            <td class=\"tabInfo\"><input type=\"submit\" name=\"eliminar\" value=\"eliminar\"></td>
            <td class=\"tabInfo\"><input type=\"submit\" name=\"modificar\" value=\"modificar\"></td>
            <td class=\"tabInfo\"><input type=\"submit\" name=\"fichacliente\" value=\"Desplegar Ficha\"></td>
            <td><input type=\"hidden\" name=\"valorEliminar\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "\"></td>
            <td><input type=\"hidden\" name=\"tabla\" value=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["informacion"]) ? $context["informacion"] : $this->getContext($context, "informacion")), "tabla"), "html", null, true);
            echo "\"></td>
        </tr>    
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "    </table> 
</div>

";
    }

    // line 95
    public function block_horas($context, array $blocks = array())
    {
        // line 96
        echo "
";
        // line 97
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexHoras.html.twig", array("formHoras" => (isset($context["formHoras"]) ? $context["formHoras"] : $this->getContext($context, "formHoras"))));
        // line 98
        echo "

";
        // line 100
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexReunion.html.twig", array("reuniones" => (isset($context["reuniones"]) ? $context["reuniones"] : $this->getContext($context, "reuniones"))));
        // line 101
        echo "

";
        // line 103
        echo twig_include($this->env, $context, "AppMediBundle:Default:IndexProyecto.html.twig", array("proyectos" => (isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto"))));
        // line 104
        echo "

";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:cliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 100,  577 => 231,  569 => 229,  550 => 212,  537 => 209,  533 => 208,  520 => 204,  513 => 200,  488 => 189,  479 => 183,  467 => 179,  462 => 178,  448 => 172,  433 => 166,  425 => 161,  421 => 160,  405 => 156,  354 => 131,  190 => 61,  77 => 18,  266 => 116,  161 => 59,  124 => 43,  84 => 28,  53 => 18,  146 => 67,  281 => 95,  239 => 95,  210 => 90,  202 => 89,  127 => 53,  118 => 50,  65 => 15,  137 => 59,  129 => 54,  323 => 143,  319 => 141,  317 => 140,  289 => 128,  274 => 93,  260 => 113,  232 => 91,  228 => 101,  216 => 96,  211 => 82,  191 => 77,  165 => 74,  114 => 48,  110 => 38,  104 => 28,  100 => 38,  315 => 110,  301 => 102,  267 => 118,  231 => 102,  167 => 74,  160 => 48,  215 => 132,  155 => 66,  829 => 420,  820 => 416,  784 => 388,  780 => 387,  758 => 371,  754 => 370,  744 => 366,  740 => 365,  734 => 362,  730 => 361,  726 => 360,  717 => 354,  710 => 352,  706 => 351,  695 => 343,  670 => 327,  665 => 325,  658 => 323,  654 => 322,  643 => 314,  626 => 300,  622 => 299,  618 => 298,  613 => 296,  606 => 294,  602 => 293,  594 => 288,  584 => 281,  565 => 275,  559 => 274,  555 => 273,  551 => 272,  543 => 270,  539 => 269,  524 => 260,  518 => 203,  514 => 255,  503 => 251,  499 => 197,  493 => 247,  481 => 244,  447 => 227,  443 => 226,  439 => 225,  420 => 218,  416 => 216,  403 => 212,  399 => 211,  395 => 210,  358 => 192,  352 => 189,  348 => 130,  342 => 187,  331 => 147,  304 => 157,  300 => 169,  292 => 167,  250 => 83,  207 => 81,  175 => 55,  150 => 44,  890 => 499,  878 => 490,  865 => 485,  861 => 484,  850 => 476,  841 => 470,  837 => 469,  833 => 468,  823 => 417,  819 => 460,  815 => 459,  810 => 457,  803 => 455,  799 => 454,  788 => 446,  773 => 437,  769 => 379,  759 => 432,  753 => 429,  749 => 428,  745 => 427,  731 => 416,  727 => 415,  718 => 412,  711 => 410,  696 => 401,  685 => 393,  681 => 392,  677 => 391,  671 => 388,  667 => 387,  661 => 384,  657 => 383,  653 => 382,  633 => 373,  617 => 360,  608 => 354,  592 => 341,  583 => 335,  548 => 271,  544 => 307,  529 => 207,  525 => 205,  516 => 295,  512 => 294,  508 => 293,  505 => 292,  482 => 275,  477 => 243,  470 => 241,  428 => 254,  424 => 219,  412 => 246,  408 => 245,  392 => 209,  388 => 208,  369 => 136,  351 => 211,  336 => 122,  332 => 206,  256 => 123,  248 => 170,  233 => 79,  198 => 138,  326 => 183,  308 => 106,  303 => 139,  299 => 173,  295 => 151,  291 => 171,  287 => 96,  279 => 181,  226 => 154,  222 => 87,  197 => 86,  152 => 53,  148 => 52,  113 => 49,  90 => 43,  476 => 280,  472 => 180,  450 => 263,  446 => 171,  442 => 169,  436 => 258,  432 => 257,  426 => 254,  422 => 253,  418 => 252,  370 => 221,  366 => 135,  357 => 132,  350 => 215,  346 => 129,  310 => 190,  286 => 183,  275 => 118,  265 => 90,  263 => 112,  255 => 112,  242 => 96,  218 => 86,  192 => 87,  186 => 76,  178 => 70,  172 => 98,  153 => 63,  1015 => 562,  1013 => 561,  1010 => 560,  1006 => 556,  1004 => 555,  1001 => 554,  998 => 553,  932 => 491,  925 => 487,  913 => 478,  901 => 469,  895 => 466,  888 => 464,  884 => 463,  872 => 487,  853 => 438,  849 => 437,  845 => 436,  839 => 433,  835 => 432,  831 => 421,  825 => 418,  821 => 427,  817 => 415,  812 => 424,  805 => 422,  801 => 421,  790 => 413,  777 => 438,  770 => 399,  763 => 433,  757 => 392,  750 => 369,  746 => 389,  733 => 379,  723 => 414,  719 => 371,  714 => 369,  707 => 409,  703 => 366,  692 => 358,  682 => 351,  678 => 329,  674 => 328,  668 => 346,  664 => 345,  660 => 344,  655 => 342,  648 => 340,  644 => 376,  637 => 374,  631 => 333,  629 => 332,  624 => 330,  611 => 320,  607 => 318,  596 => 289,  589 => 309,  585 => 308,  580 => 279,  574 => 278,  562 => 296,  556 => 310,  547 => 289,  542 => 210,  538 => 306,  534 => 285,  528 => 261,  517 => 279,  511 => 276,  507 => 199,  501 => 198,  497 => 248,  494 => 272,  489 => 246,  485 => 245,  464 => 257,  460 => 177,  456 => 255,  452 => 254,  449 => 253,  445 => 265,  441 => 264,  434 => 223,  417 => 159,  411 => 235,  400 => 244,  385 => 228,  377 => 200,  373 => 199,  359 => 214,  353 => 211,  349 => 210,  338 => 186,  333 => 203,  325 => 144,  318 => 174,  313 => 144,  306 => 194,  284 => 190,  277 => 186,  271 => 117,  259 => 104,  245 => 97,  213 => 97,  195 => 78,  185 => 85,  181 => 83,  345 => 209,  340 => 208,  335 => 185,  329 => 118,  311 => 138,  307 => 141,  302 => 193,  296 => 168,  293 => 97,  288 => 134,  280 => 161,  276 => 160,  272 => 159,  270 => 92,  261 => 88,  257 => 103,  253 => 101,  249 => 108,  244 => 117,  236 => 80,  225 => 110,  212 => 146,  205 => 142,  200 => 82,  188 => 75,  184 => 93,  174 => 69,  134 => 47,  126 => 48,  76 => 25,  58 => 14,  34 => 12,  23 => 1,  480 => 162,  474 => 242,  469 => 158,  461 => 269,  457 => 176,  453 => 230,  444 => 149,  440 => 148,  437 => 147,  435 => 167,  430 => 222,  427 => 143,  423 => 142,  413 => 158,  409 => 157,  407 => 213,  402 => 244,  398 => 243,  393 => 231,  387 => 235,  384 => 237,  381 => 137,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 134,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 114,  314 => 139,  312 => 194,  309 => 142,  305 => 136,  298 => 137,  294 => 185,  285 => 130,  283 => 125,  278 => 94,  268 => 116,  264 => 115,  258 => 112,  252 => 109,  247 => 98,  241 => 77,  229 => 78,  220 => 99,  214 => 88,  177 => 82,  169 => 60,  140 => 64,  132 => 51,  128 => 36,  107 => 42,  61 => 20,  273 => 121,  269 => 127,  254 => 110,  243 => 146,  240 => 81,  238 => 104,  235 => 101,  230 => 82,  227 => 101,  224 => 92,  221 => 109,  219 => 150,  217 => 69,  208 => 90,  204 => 89,  179 => 56,  159 => 71,  143 => 63,  135 => 40,  119 => 51,  102 => 36,  71 => 19,  67 => 16,  63 => 15,  59 => 13,  87 => 32,  94 => 38,  89 => 39,  85 => 21,  75 => 31,  68 => 23,  56 => 12,  38 => 6,  201 => 83,  196 => 81,  183 => 57,  171 => 54,  166 => 110,  163 => 73,  158 => 70,  156 => 47,  151 => 63,  142 => 59,  138 => 48,  136 => 63,  121 => 52,  117 => 43,  105 => 51,  91 => 46,  62 => 16,  49 => 18,  28 => 2,  24 => 2,  26 => 6,  21 => 2,  31 => 3,  25 => 3,  19 => 1,  93 => 28,  88 => 31,  78 => 27,  46 => 11,  44 => 7,  27 => 4,  79 => 18,  72 => 17,  69 => 25,  47 => 9,  40 => 6,  37 => 5,  22 => 2,  246 => 82,  157 => 71,  145 => 62,  139 => 45,  131 => 57,  123 => 34,  120 => 42,  115 => 32,  111 => 41,  108 => 30,  101 => 40,  98 => 27,  96 => 33,  83 => 25,  74 => 26,  66 => 15,  55 => 19,  52 => 8,  50 => 12,  43 => 8,  41 => 6,  35 => 5,  32 => 3,  29 => 2,  209 => 144,  203 => 80,  199 => 64,  193 => 86,  189 => 85,  187 => 84,  182 => 71,  176 => 99,  173 => 65,  168 => 69,  164 => 50,  162 => 108,  154 => 46,  149 => 62,  147 => 43,  144 => 51,  141 => 42,  133 => 55,  130 => 46,  125 => 53,  122 => 52,  116 => 41,  112 => 53,  109 => 52,  106 => 37,  103 => 41,  99 => 40,  95 => 47,  92 => 32,  86 => 28,  82 => 28,  80 => 19,  73 => 19,  64 => 22,  60 => 21,  57 => 12,  54 => 23,  51 => 14,  48 => 8,  45 => 7,  42 => 14,  39 => 9,  36 => 5,  33 => 3,  30 => 2,);
    }
}
