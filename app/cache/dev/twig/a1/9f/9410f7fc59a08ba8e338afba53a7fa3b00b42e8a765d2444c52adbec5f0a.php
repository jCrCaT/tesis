<?php

/* ::localidad.html.twig */
class __TwigTemplate_a19f9410f7fc59a08ba8e338afba53a7fa3b00b42e8a765d2444c52adbec5f0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate(":App:MediBundle:Resources:views:Default:ciudad.html.twig");

        $this->blocks = array(
            'listarLocalidad' => array($this, 'block_listarLocalidad'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":App:MediBundle:Resources:views:Default:ciudad.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_listarLocalidad($context, array $blocks = array())
    {
        // line 3
        echo "    <table class=\"listar\">
        <tr>
            <td>Identificador de</td>
            <td>Nombre de</td>
            
        </tr>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")));
        foreach ($context['_seq'] as $context["_key"] => $context["listar"]) {
            // line 10
            echo "        <tr>    
            <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "id"), "html", null, true);
            echo "</td>
            <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listar"]) ? $context["listar"] : $this->getContext($context, "listar")), "nombre"), "html", null, true);
            echo "</td>
        <tr/>    
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </table>    

";
    }

    public function getTemplateName()
    {
        return "::localidad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1100 => 314,  1098 => 313,  1088 => 308,  1084 => 307,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  979 => 260,  976 => 259,  973 => 258,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  934 => 241,  931 => 240,  923 => 236,  918 => 234,  915 => 233,  900 => 228,  897 => 227,  894 => 226,  889 => 224,  876 => 218,  873 => 217,  862 => 212,  860 => 211,  857 => 210,  846 => 205,  844 => 204,  828 => 197,  814 => 191,  809 => 189,  785 => 178,  783 => 177,  772 => 172,  764 => 169,  756 => 165,  751 => 163,  739 => 156,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  699 => 142,  697 => 141,  689 => 137,  683 => 135,  675 => 132,  638 => 118,  635 => 117,  619 => 113,  598 => 107,  576 => 101,  496 => 79,  490 => 77,  478 => 74,  390 => 43,  316 => 16,  640 => 119,  609 => 319,  593 => 105,  591 => 309,  581 => 305,  563 => 298,  557 => 96,  545 => 291,  541 => 290,  531 => 283,  483 => 258,  471 => 253,  459 => 69,  454 => 244,  438 => 236,  371 => 35,  363 => 32,  321 => 135,  429 => 188,  401 => 172,  394 => 168,  81 => 28,  807 => 491,  796 => 183,  775 => 485,  702 => 472,  698 => 471,  694 => 138,  679 => 466,  649 => 122,  634 => 456,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  367 => 198,  794 => 389,  792 => 488,  786 => 386,  761 => 364,  729 => 155,  725 => 343,  713 => 337,  709 => 336,  704 => 334,  690 => 469,  672 => 345,  650 => 306,  642 => 301,  636 => 298,  632 => 297,  614 => 111,  582 => 271,  578 => 270,  564 => 99,  560 => 261,  552 => 293,  510 => 235,  506 => 234,  465 => 249,  458 => 210,  380 => 206,  344 => 24,  526 => 284,  522 => 279,  324 => 113,  1227 => 738,  1217 => 731,  1213 => 730,  1209 => 729,  1204 => 727,  1197 => 725,  1193 => 724,  1182 => 716,  1173 => 710,  1169 => 709,  1165 => 708,  1155 => 701,  1151 => 700,  1147 => 699,  1142 => 697,  1135 => 695,  1131 => 694,  1120 => 686,  1103 => 315,  1099 => 671,  1095 => 312,  1090 => 668,  1083 => 666,  1079 => 306,  1068 => 657,  1063 => 655,  1042 => 637,  1038 => 636,  1034 => 635,  1029 => 282,  1022 => 631,  1018 => 630,  1007 => 622,  990 => 608,  986 => 607,  982 => 261,  977 => 604,  970 => 257,  966 => 601,  955 => 252,  944 => 585,  940 => 584,  936 => 242,  930 => 580,  926 => 579,  920 => 235,  916 => 575,  912 => 574,  903 => 229,  896 => 566,  892 => 225,  881 => 220,  854 => 536,  847 => 532,  834 => 527,  830 => 198,  806 => 504,  798 => 184,  793 => 182,  789 => 387,  767 => 170,  735 => 347,  701 => 439,  686 => 468,  666 => 126,  662 => 125,  651 => 337,  647 => 336,  625 => 453,  620 => 451,  604 => 391,  600 => 280,  588 => 308,  570 => 265,  554 => 367,  530 => 359,  515 => 85,  468 => 328,  419 => 198,  372 => 286,  297 => 179,  455 => 264,  386 => 159,  414 => 52,  410 => 221,  237 => 123,  389 => 160,  378 => 157,  375 => 152,  262 => 98,  234 => 124,  463 => 248,  415 => 180,  406 => 298,  376 => 205,  361 => 195,  347 => 191,  327 => 114,  680 => 134,  599 => 359,  587 => 350,  575 => 341,  558 => 368,  546 => 253,  527 => 91,  523 => 309,  519 => 278,  509 => 83,  495 => 335,  491 => 333,  486 => 236,  451 => 215,  397 => 213,  356 => 276,  334 => 141,  194 => 248,  20 => 1,  223 => 159,  492 => 228,  487 => 190,  475 => 217,  473 => 254,  431 => 189,  391 => 198,  383 => 207,  343 => 146,  328 => 139,  320 => 127,  70 => 19,  290 => 5,  282 => 142,  180 => 80,  206 => 114,  170 => 96,  97 => 41,  251 => 100,  577 => 303,  569 => 300,  550 => 94,  537 => 209,  533 => 284,  520 => 281,  513 => 305,  488 => 227,  479 => 256,  467 => 72,  462 => 202,  448 => 240,  433 => 60,  425 => 161,  421 => 197,  405 => 49,  354 => 178,  190 => 76,  77 => 27,  266 => 366,  161 => 202,  124 => 132,  84 => 41,  53 => 11,  146 => 181,  281 => 411,  239 => 80,  210 => 270,  202 => 266,  127 => 44,  118 => 49,  65 => 18,  137 => 90,  129 => 148,  323 => 128,  319 => 141,  317 => 185,  289 => 113,  274 => 110,  260 => 363,  232 => 88,  228 => 98,  216 => 79,  211 => 92,  191 => 246,  165 => 60,  114 => 111,  110 => 38,  104 => 36,  100 => 35,  315 => 131,  301 => 121,  267 => 101,  231 => 83,  167 => 74,  160 => 98,  215 => 280,  155 => 47,  829 => 420,  820 => 416,  784 => 388,  780 => 176,  758 => 371,  754 => 477,  744 => 366,  740 => 365,  734 => 362,  730 => 361,  726 => 458,  717 => 354,  710 => 149,  706 => 473,  695 => 139,  670 => 327,  665 => 325,  658 => 124,  654 => 123,  643 => 120,  626 => 325,  622 => 323,  618 => 289,  613 => 320,  606 => 318,  602 => 317,  594 => 288,  584 => 386,  565 => 275,  559 => 296,  555 => 95,  551 => 221,  543 => 219,  539 => 269,  524 => 90,  518 => 203,  514 => 278,  503 => 81,  499 => 268,  493 => 78,  481 => 189,  447 => 261,  443 => 226,  439 => 195,  420 => 254,  416 => 252,  403 => 48,  399 => 200,  395 => 199,  358 => 151,  352 => 143,  348 => 140,  342 => 23,  331 => 140,  304 => 181,  300 => 180,  292 => 146,  250 => 341,  207 => 269,  175 => 58,  150 => 55,  890 => 499,  878 => 219,  865 => 213,  861 => 540,  850 => 476,  841 => 203,  837 => 469,  833 => 199,  823 => 417,  819 => 460,  815 => 459,  810 => 492,  803 => 455,  799 => 392,  788 => 486,  773 => 437,  769 => 171,  759 => 478,  753 => 164,  749 => 162,  745 => 427,  731 => 416,  727 => 476,  718 => 412,  711 => 410,  696 => 140,  685 => 393,  681 => 424,  677 => 465,  671 => 388,  667 => 387,  661 => 384,  657 => 383,  653 => 382,  633 => 373,  617 => 112,  608 => 354,  592 => 341,  583 => 335,  548 => 292,  544 => 307,  529 => 92,  525 => 280,  516 => 238,  512 => 84,  508 => 276,  505 => 270,  482 => 234,  477 => 232,  470 => 73,  428 => 59,  424 => 262,  412 => 222,  408 => 50,  392 => 209,  388 => 42,  369 => 136,  351 => 192,  336 => 169,  332 => 20,  256 => 96,  248 => 336,  233 => 304,  198 => 112,  326 => 138,  308 => 13,  303 => 106,  299 => 8,  295 => 178,  291 => 102,  287 => 138,  279 => 193,  226 => 84,  222 => 297,  197 => 249,  152 => 46,  148 => 65,  113 => 39,  90 => 27,  476 => 330,  472 => 329,  450 => 64,  446 => 197,  442 => 62,  436 => 235,  432 => 257,  426 => 58,  422 => 226,  418 => 224,  370 => 182,  366 => 33,  357 => 123,  350 => 26,  346 => 139,  310 => 152,  286 => 112,  275 => 105,  265 => 105,  263 => 365,  255 => 353,  242 => 106,  218 => 100,  192 => 109,  186 => 239,  178 => 59,  172 => 57,  153 => 56,  1015 => 562,  1013 => 561,  1010 => 560,  1006 => 556,  1004 => 266,  1001 => 554,  998 => 553,  932 => 491,  925 => 487,  913 => 478,  901 => 469,  895 => 466,  888 => 464,  884 => 463,  872 => 487,  853 => 438,  849 => 206,  845 => 436,  839 => 433,  835 => 432,  831 => 421,  825 => 196,  821 => 427,  817 => 192,  812 => 190,  805 => 422,  801 => 185,  790 => 413,  777 => 438,  770 => 399,  763 => 433,  757 => 363,  750 => 476,  746 => 161,  733 => 379,  723 => 414,  719 => 340,  714 => 369,  707 => 148,  703 => 366,  692 => 358,  682 => 467,  678 => 133,  674 => 328,  668 => 344,  664 => 342,  660 => 340,  655 => 342,  648 => 340,  644 => 335,  637 => 374,  631 => 327,  629 => 326,  624 => 292,  611 => 320,  607 => 318,  596 => 106,  589 => 309,  585 => 307,  580 => 279,  574 => 278,  562 => 336,  556 => 310,  547 => 93,  542 => 252,  538 => 361,  534 => 247,  528 => 244,  517 => 404,  511 => 277,  507 => 198,  501 => 80,  497 => 267,  494 => 240,  489 => 262,  485 => 245,  464 => 71,  460 => 326,  456 => 68,  452 => 254,  449 => 198,  445 => 212,  441 => 196,  434 => 167,  417 => 204,  411 => 196,  400 => 47,  385 => 41,  377 => 37,  373 => 156,  359 => 214,  353 => 193,  349 => 272,  338 => 135,  333 => 203,  325 => 129,  318 => 111,  313 => 15,  306 => 107,  284 => 190,  277 => 223,  271 => 374,  259 => 103,  245 => 335,  213 => 78,  195 => 93,  185 => 74,  181 => 232,  345 => 147,  340 => 145,  335 => 21,  329 => 188,  311 => 14,  307 => 128,  302 => 125,  296 => 121,  293 => 6,  288 => 4,  280 => 118,  276 => 395,  272 => 138,  270 => 102,  261 => 122,  257 => 137,  253 => 342,  249 => 108,  244 => 128,  236 => 103,  225 => 298,  212 => 279,  205 => 108,  200 => 72,  188 => 102,  184 => 233,  174 => 217,  134 => 161,  126 => 147,  76 => 31,  58 => 15,  34 => 4,  23 => 2,  480 => 75,  474 => 231,  469 => 216,  461 => 70,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 61,  435 => 202,  430 => 203,  427 => 200,  423 => 57,  413 => 241,  409 => 157,  407 => 195,  402 => 215,  398 => 191,  393 => 211,  387 => 164,  384 => 291,  381 => 220,  379 => 195,  374 => 36,  368 => 34,  365 => 197,  362 => 134,  360 => 145,  355 => 27,  341 => 189,  337 => 22,  322 => 212,  314 => 153,  312 => 130,  309 => 129,  305 => 129,  298 => 120,  294 => 135,  285 => 3,  283 => 115,  278 => 410,  268 => 373,  264 => 111,  258 => 354,  252 => 130,  247 => 113,  241 => 93,  229 => 87,  220 => 290,  214 => 71,  177 => 70,  169 => 210,  140 => 58,  132 => 49,  128 => 47,  107 => 37,  61 => 2,  273 => 394,  269 => 107,  254 => 132,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 81,  221 => 126,  219 => 93,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 62,  119 => 117,  102 => 30,  71 => 19,  67 => 16,  63 => 18,  59 => 15,  87 => 26,  94 => 57,  89 => 47,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  38 => 6,  201 => 106,  196 => 92,  183 => 81,  171 => 216,  166 => 209,  163 => 53,  158 => 62,  156 => 195,  151 => 188,  142 => 92,  138 => 92,  136 => 168,  121 => 131,  117 => 40,  105 => 25,  91 => 56,  62 => 14,  49 => 12,  28 => 2,  24 => 3,  26 => 3,  21 => 2,  31 => 3,  25 => 35,  19 => 1,  93 => 28,  88 => 32,  78 => 24,  46 => 11,  44 => 8,  27 => 3,  79 => 32,  72 => 18,  69 => 13,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 96,  157 => 89,  145 => 52,  139 => 169,  131 => 160,  123 => 42,  120 => 31,  115 => 40,  111 => 110,  108 => 33,  101 => 89,  98 => 29,  96 => 67,  83 => 33,  74 => 20,  66 => 12,  55 => 12,  52 => 11,  50 => 12,  43 => 10,  41 => 7,  35 => 5,  32 => 5,  29 => 3,  209 => 98,  203 => 73,  199 => 265,  193 => 84,  189 => 240,  187 => 75,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 43,  144 => 176,  141 => 175,  133 => 51,  130 => 46,  125 => 42,  122 => 41,  116 => 116,  112 => 39,  109 => 38,  106 => 104,  103 => 46,  99 => 68,  95 => 39,  92 => 33,  86 => 46,  82 => 25,  80 => 24,  73 => 16,  64 => 3,  60 => 20,  57 => 19,  54 => 15,  51 => 13,  48 => 10,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
