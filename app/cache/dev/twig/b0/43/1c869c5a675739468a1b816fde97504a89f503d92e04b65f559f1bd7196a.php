<?php

/* AppMediBundle:Default:permisos.html.twig */
class __TwigTemplate_b0431c869c5a675739468a1b816fde97504a89f503d92e04b65f559f1bd7196a extends Twig_Template
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
        echo "<h4>Administrar Permisos</h4>
";
        // line 4
        if (array_key_exists("accion", $context)) {
            // line 5
            echo "<div>
    No se encuentran configurados los permisos. Por esto mismo, luego de presionar el siguiente boton, se configurarán todos los permisos para que los demás usuarios no posean acceso a ninguna característica. Luego de esto, usted podrá modificar cada uno de los permisos como usted desee.
</div>
";
        }
        // line 9
        echo "
";
    }

    public function getTemplateName()
    {
        return "AppMediBundle:Default:permisos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  526 => 284,  522 => 282,  324 => 162,  1227 => 738,  1217 => 731,  1213 => 730,  1209 => 729,  1204 => 727,  1197 => 725,  1193 => 724,  1182 => 716,  1173 => 710,  1169 => 709,  1165 => 708,  1155 => 701,  1151 => 700,  1147 => 699,  1142 => 697,  1135 => 695,  1131 => 694,  1120 => 686,  1103 => 672,  1099 => 671,  1095 => 670,  1090 => 668,  1083 => 666,  1079 => 665,  1068 => 657,  1063 => 655,  1042 => 637,  1038 => 636,  1034 => 635,  1029 => 633,  1022 => 631,  1018 => 630,  1007 => 622,  990 => 608,  986 => 607,  982 => 606,  977 => 604,  970 => 602,  966 => 601,  955 => 593,  944 => 585,  940 => 584,  936 => 583,  930 => 580,  926 => 579,  920 => 576,  916 => 575,  912 => 574,  903 => 568,  896 => 566,  892 => 565,  881 => 557,  854 => 536,  847 => 532,  834 => 527,  830 => 526,  806 => 504,  798 => 502,  793 => 501,  789 => 500,  767 => 480,  735 => 464,  701 => 439,  686 => 427,  666 => 421,  662 => 420,  651 => 417,  647 => 416,  625 => 397,  620 => 394,  604 => 391,  600 => 390,  588 => 387,  570 => 374,  554 => 367,  530 => 359,  515 => 349,  468 => 328,  419 => 301,  372 => 286,  297 => 125,  455 => 264,  386 => 221,  414 => 300,  410 => 249,  237 => 123,  389 => 158,  378 => 289,  375 => 152,  262 => 134,  234 => 102,  463 => 224,  415 => 194,  406 => 298,  376 => 288,  361 => 161,  347 => 153,  327 => 143,  680 => 431,  599 => 359,  587 => 350,  575 => 341,  558 => 368,  546 => 366,  527 => 310,  523 => 309,  519 => 350,  509 => 304,  495 => 335,  491 => 333,  486 => 236,  451 => 215,  397 => 244,  356 => 276,  334 => 260,  194 => 77,  20 => 1,  223 => 159,  492 => 239,  487 => 190,  475 => 293,  473 => 187,  431 => 264,  391 => 198,  383 => 196,  343 => 169,  328 => 164,  320 => 249,  70 => 31,  290 => 145,  282 => 132,  180 => 80,  206 => 79,  170 => 55,  97 => 31,  251 => 100,  577 => 231,  569 => 338,  550 => 212,  537 => 209,  533 => 208,  520 => 281,  513 => 305,  488 => 237,  479 => 294,  467 => 179,  462 => 179,  448 => 172,  433 => 309,  425 => 161,  421 => 197,  405 => 247,  354 => 144,  190 => 74,  77 => 28,  266 => 136,  161 => 73,  124 => 64,  84 => 21,  53 => 11,  146 => 58,  281 => 142,  239 => 80,  210 => 86,  202 => 89,  127 => 55,  118 => 34,  65 => 14,  137 => 67,  129 => 41,  323 => 129,  319 => 141,  317 => 139,  289 => 139,  274 => 93,  260 => 110,  232 => 104,  228 => 98,  216 => 99,  211 => 92,  191 => 84,  165 => 68,  114 => 42,  110 => 38,  104 => 32,  100 => 38,  315 => 110,  301 => 121,  267 => 125,  231 => 101,  167 => 74,  160 => 66,  215 => 92,  155 => 71,  829 => 420,  820 => 416,  784 => 388,  780 => 387,  758 => 371,  754 => 477,  744 => 366,  740 => 365,  734 => 362,  730 => 361,  726 => 458,  717 => 354,  710 => 445,  706 => 351,  695 => 343,  670 => 327,  665 => 325,  658 => 419,  654 => 418,  643 => 314,  626 => 300,  622 => 299,  618 => 298,  613 => 393,  606 => 363,  602 => 293,  594 => 288,  584 => 386,  565 => 275,  559 => 274,  555 => 273,  551 => 221,  543 => 219,  539 => 269,  524 => 202,  518 => 203,  514 => 278,  503 => 197,  499 => 336,  493 => 247,  481 => 189,  447 => 261,  443 => 226,  439 => 225,  420 => 254,  416 => 252,  403 => 201,  399 => 200,  395 => 199,  358 => 180,  352 => 143,  348 => 221,  342 => 218,  331 => 122,  304 => 157,  300 => 141,  292 => 146,  250 => 129,  207 => 71,  175 => 80,  150 => 44,  890 => 499,  878 => 490,  865 => 485,  861 => 540,  850 => 476,  841 => 529,  837 => 469,  833 => 468,  823 => 417,  819 => 460,  815 => 459,  810 => 457,  803 => 455,  799 => 454,  788 => 446,  773 => 437,  769 => 379,  759 => 478,  753 => 429,  749 => 428,  745 => 427,  731 => 416,  727 => 415,  718 => 412,  711 => 410,  696 => 401,  685 => 393,  681 => 424,  677 => 430,  671 => 388,  667 => 387,  661 => 384,  657 => 383,  653 => 382,  633 => 373,  617 => 360,  608 => 354,  592 => 341,  583 => 335,  548 => 271,  544 => 307,  529 => 207,  525 => 205,  516 => 279,  512 => 294,  508 => 276,  505 => 303,  482 => 234,  477 => 232,  470 => 241,  428 => 254,  424 => 262,  412 => 246,  408 => 248,  392 => 209,  388 => 241,  369 => 136,  351 => 211,  336 => 166,  332 => 165,  256 => 132,  248 => 107,  233 => 105,  198 => 78,  326 => 183,  308 => 106,  303 => 128,  299 => 151,  295 => 151,  291 => 122,  287 => 138,  279 => 193,  226 => 101,  222 => 96,  197 => 86,  152 => 62,  148 => 65,  113 => 32,  90 => 24,  476 => 330,  472 => 329,  450 => 262,  446 => 170,  442 => 214,  436 => 310,  432 => 257,  426 => 254,  422 => 247,  418 => 252,  370 => 167,  366 => 146,  357 => 132,  350 => 174,  346 => 139,  310 => 112,  286 => 133,  275 => 139,  265 => 90,  263 => 123,  255 => 120,  242 => 106,  218 => 100,  192 => 84,  186 => 80,  178 => 83,  172 => 75,  153 => 61,  1015 => 562,  1013 => 561,  1010 => 560,  1006 => 556,  1004 => 555,  1001 => 554,  998 => 553,  932 => 491,  925 => 487,  913 => 478,  901 => 469,  895 => 466,  888 => 464,  884 => 463,  872 => 487,  853 => 438,  849 => 437,  845 => 436,  839 => 433,  835 => 432,  831 => 421,  825 => 418,  821 => 427,  817 => 415,  812 => 424,  805 => 422,  801 => 421,  790 => 413,  777 => 438,  770 => 399,  763 => 433,  757 => 392,  750 => 476,  746 => 389,  733 => 379,  723 => 414,  719 => 371,  714 => 369,  707 => 409,  703 => 366,  692 => 358,  682 => 351,  678 => 329,  674 => 328,  668 => 346,  664 => 345,  660 => 344,  655 => 342,  648 => 340,  644 => 376,  637 => 374,  631 => 333,  629 => 332,  624 => 330,  611 => 320,  607 => 318,  596 => 389,  589 => 309,  585 => 308,  580 => 279,  574 => 278,  562 => 336,  556 => 310,  547 => 289,  542 => 210,  538 => 361,  534 => 360,  528 => 285,  517 => 279,  511 => 277,  507 => 198,  501 => 198,  497 => 248,  494 => 240,  489 => 246,  485 => 245,  464 => 327,  460 => 326,  456 => 255,  452 => 254,  449 => 253,  445 => 212,  441 => 257,  434 => 167,  417 => 204,  411 => 203,  400 => 185,  385 => 176,  377 => 238,  373 => 199,  359 => 214,  353 => 211,  349 => 272,  338 => 217,  333 => 203,  325 => 144,  318 => 160,  313 => 245,  306 => 156,  284 => 190,  277 => 223,  271 => 138,  259 => 104,  245 => 109,  213 => 74,  195 => 93,  185 => 72,  181 => 71,  345 => 209,  340 => 136,  335 => 185,  329 => 214,  311 => 126,  307 => 141,  302 => 203,  296 => 202,  293 => 123,  288 => 121,  280 => 118,  276 => 130,  272 => 127,  270 => 114,  261 => 122,  257 => 137,  253 => 101,  249 => 108,  244 => 128,  236 => 103,  225 => 97,  212 => 144,  205 => 88,  200 => 87,  188 => 82,  184 => 61,  174 => 94,  134 => 66,  126 => 46,  76 => 28,  58 => 16,  34 => 4,  23 => 1,  480 => 233,  474 => 231,  469 => 158,  461 => 269,  457 => 325,  453 => 324,  444 => 271,  440 => 148,  437 => 211,  435 => 256,  430 => 203,  427 => 208,  423 => 207,  413 => 241,  409 => 157,  407 => 202,  402 => 246,  398 => 243,  393 => 160,  387 => 157,  384 => 291,  381 => 220,  379 => 195,  374 => 116,  368 => 285,  365 => 184,  362 => 134,  360 => 145,  355 => 158,  341 => 168,  337 => 103,  322 => 212,  314 => 158,  312 => 157,  309 => 159,  305 => 129,  298 => 141,  294 => 135,  285 => 143,  283 => 125,  278 => 131,  268 => 116,  264 => 111,  258 => 121,  252 => 130,  247 => 113,  241 => 90,  229 => 128,  220 => 78,  214 => 71,  177 => 70,  169 => 75,  140 => 60,  132 => 49,  128 => 47,  107 => 30,  61 => 20,  273 => 128,  269 => 126,  254 => 122,  243 => 133,  240 => 105,  238 => 107,  235 => 163,  230 => 100,  227 => 82,  224 => 73,  221 => 126,  219 => 93,  217 => 95,  208 => 93,  204 => 142,  179 => 79,  159 => 72,  143 => 68,  135 => 72,  119 => 41,  102 => 36,  71 => 17,  67 => 19,  63 => 18,  59 => 16,  87 => 44,  94 => 25,  89 => 32,  85 => 23,  75 => 33,  68 => 15,  56 => 25,  38 => 5,  201 => 68,  196 => 85,  183 => 81,  171 => 67,  166 => 80,  163 => 65,  158 => 51,  156 => 65,  151 => 70,  142 => 56,  138 => 92,  136 => 59,  121 => 43,  117 => 41,  105 => 50,  91 => 28,  62 => 13,  49 => 8,  28 => 2,  24 => 4,  26 => 5,  21 => 2,  31 => 3,  25 => 3,  19 => 1,  93 => 25,  88 => 31,  78 => 18,  46 => 7,  44 => 6,  27 => 5,  79 => 34,  72 => 27,  69 => 15,  47 => 14,  40 => 5,  37 => 5,  22 => 2,  246 => 120,  157 => 62,  145 => 62,  139 => 53,  131 => 57,  123 => 60,  120 => 43,  115 => 40,  111 => 51,  108 => 49,  101 => 32,  98 => 47,  96 => 33,  83 => 29,  74 => 18,  66 => 24,  55 => 19,  52 => 8,  50 => 8,  43 => 8,  41 => 6,  35 => 15,  32 => 3,  29 => 2,  209 => 98,  203 => 87,  199 => 85,  193 => 84,  189 => 70,  187 => 83,  182 => 60,  176 => 79,  173 => 77,  168 => 78,  164 => 74,  162 => 74,  154 => 68,  149 => 60,  147 => 63,  144 => 51,  141 => 68,  133 => 51,  130 => 65,  125 => 36,  122 => 44,  116 => 33,  112 => 52,  109 => 49,  106 => 37,  103 => 46,  99 => 36,  95 => 25,  92 => 32,  86 => 38,  82 => 22,  80 => 29,  73 => 17,  64 => 15,  60 => 13,  57 => 12,  54 => 9,  51 => 18,  48 => 7,  45 => 7,  42 => 9,  39 => 10,  36 => 5,  33 => 3,  30 => 2,);
    }
}
