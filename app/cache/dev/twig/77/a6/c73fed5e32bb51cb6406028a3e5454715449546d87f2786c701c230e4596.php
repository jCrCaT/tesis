<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_77a6c73fed5e32bb51cb6406028a3e5454715449546d87f2786c701c230e4596 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, (isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")))) {
            // line 18
            echo "        <h1>Some Recommendations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((!twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 334,  609 => 319,  593 => 310,  591 => 309,  581 => 305,  563 => 298,  557 => 295,  545 => 291,  541 => 290,  531 => 283,  483 => 258,  471 => 253,  459 => 246,  454 => 244,  438 => 236,  371 => 156,  363 => 153,  321 => 135,  429 => 188,  401 => 172,  394 => 168,  81 => 23,  807 => 491,  796 => 489,  775 => 485,  702 => 472,  698 => 471,  694 => 470,  679 => 466,  649 => 462,  634 => 456,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  367 => 198,  794 => 389,  792 => 488,  786 => 386,  761 => 364,  729 => 344,  725 => 343,  713 => 337,  709 => 336,  704 => 334,  690 => 469,  672 => 345,  650 => 306,  642 => 301,  636 => 298,  632 => 297,  614 => 288,  582 => 271,  578 => 270,  564 => 262,  560 => 261,  552 => 293,  510 => 235,  506 => 234,  465 => 249,  458 => 210,  380 => 206,  344 => 119,  526 => 284,  522 => 279,  324 => 113,  1227 => 738,  1217 => 731,  1213 => 730,  1209 => 729,  1204 => 727,  1197 => 725,  1193 => 724,  1182 => 716,  1173 => 710,  1169 => 709,  1165 => 708,  1155 => 701,  1151 => 700,  1147 => 699,  1142 => 697,  1135 => 695,  1131 => 694,  1120 => 686,  1103 => 672,  1099 => 671,  1095 => 670,  1090 => 668,  1083 => 666,  1079 => 665,  1068 => 657,  1063 => 655,  1042 => 637,  1038 => 636,  1034 => 635,  1029 => 633,  1022 => 631,  1018 => 630,  1007 => 622,  990 => 608,  986 => 607,  982 => 606,  977 => 604,  970 => 602,  966 => 601,  955 => 593,  944 => 585,  940 => 584,  936 => 583,  930 => 580,  926 => 579,  920 => 576,  916 => 575,  912 => 574,  903 => 568,  896 => 566,  892 => 565,  881 => 557,  854 => 536,  847 => 532,  834 => 527,  830 => 526,  806 => 504,  798 => 502,  793 => 501,  789 => 387,  767 => 480,  735 => 347,  701 => 439,  686 => 468,  666 => 421,  662 => 420,  651 => 337,  647 => 336,  625 => 453,  620 => 451,  604 => 391,  600 => 280,  588 => 308,  570 => 265,  554 => 367,  530 => 359,  515 => 276,  468 => 328,  419 => 198,  372 => 286,  297 => 179,  455 => 264,  386 => 159,  414 => 300,  410 => 221,  237 => 123,  389 => 160,  378 => 157,  375 => 152,  262 => 98,  234 => 124,  463 => 248,  415 => 180,  406 => 298,  376 => 205,  361 => 195,  347 => 191,  327 => 114,  680 => 431,  599 => 359,  587 => 350,  575 => 341,  558 => 368,  546 => 253,  527 => 281,  523 => 309,  519 => 278,  509 => 272,  495 => 335,  491 => 333,  486 => 236,  451 => 215,  397 => 213,  356 => 276,  334 => 141,  194 => 68,  20 => 1,  223 => 159,  492 => 228,  487 => 190,  475 => 217,  473 => 254,  431 => 189,  391 => 198,  383 => 207,  343 => 146,  328 => 139,  320 => 127,  70 => 15,  290 => 119,  282 => 142,  180 => 80,  206 => 114,  170 => 96,  97 => 41,  251 => 100,  577 => 303,  569 => 300,  550 => 212,  537 => 209,  533 => 284,  520 => 281,  513 => 305,  488 => 227,  479 => 256,  467 => 179,  462 => 202,  448 => 240,  433 => 309,  425 => 161,  421 => 197,  405 => 247,  354 => 178,  190 => 76,  77 => 20,  266 => 136,  161 => 63,  124 => 64,  84 => 24,  53 => 11,  146 => 93,  281 => 114,  239 => 80,  210 => 77,  202 => 77,  127 => 35,  118 => 49,  65 => 17,  137 => 90,  129 => 41,  323 => 128,  319 => 141,  317 => 185,  289 => 113,  274 => 110,  260 => 110,  232 => 88,  228 => 98,  216 => 79,  211 => 92,  191 => 67,  165 => 60,  114 => 42,  110 => 38,  104 => 32,  100 => 39,  315 => 131,  301 => 121,  267 => 101,  231 => 83,  167 => 74,  160 => 98,  215 => 92,  155 => 47,  829 => 420,  820 => 416,  784 => 388,  780 => 387,  758 => 371,  754 => 477,  744 => 366,  740 => 365,  734 => 362,  730 => 361,  726 => 458,  717 => 354,  710 => 475,  706 => 473,  695 => 343,  670 => 327,  665 => 325,  658 => 419,  654 => 307,  643 => 314,  626 => 325,  622 => 323,  618 => 289,  613 => 320,  606 => 318,  602 => 317,  594 => 288,  584 => 386,  565 => 275,  559 => 296,  555 => 273,  551 => 221,  543 => 219,  539 => 269,  524 => 243,  518 => 203,  514 => 278,  503 => 197,  499 => 268,  493 => 247,  481 => 189,  447 => 261,  443 => 226,  439 => 195,  420 => 254,  416 => 252,  403 => 194,  399 => 200,  395 => 199,  358 => 151,  352 => 143,  348 => 140,  342 => 137,  331 => 140,  304 => 181,  300 => 180,  292 => 146,  250 => 129,  207 => 75,  175 => 58,  150 => 55,  890 => 499,  878 => 490,  865 => 485,  861 => 540,  850 => 476,  841 => 529,  837 => 469,  833 => 468,  823 => 417,  819 => 460,  815 => 459,  810 => 492,  803 => 455,  799 => 392,  788 => 486,  773 => 437,  769 => 379,  759 => 478,  753 => 429,  749 => 479,  745 => 427,  731 => 416,  727 => 476,  718 => 412,  711 => 410,  696 => 331,  685 => 393,  681 => 424,  677 => 465,  671 => 388,  667 => 387,  661 => 384,  657 => 383,  653 => 382,  633 => 373,  617 => 360,  608 => 354,  592 => 341,  583 => 335,  548 => 292,  544 => 307,  529 => 409,  525 => 280,  516 => 238,  512 => 294,  508 => 276,  505 => 270,  482 => 234,  477 => 232,  470 => 241,  428 => 230,  424 => 262,  412 => 222,  408 => 176,  392 => 209,  388 => 241,  369 => 136,  351 => 192,  336 => 169,  332 => 116,  256 => 96,  248 => 97,  233 => 87,  198 => 112,  326 => 138,  308 => 287,  303 => 106,  299 => 151,  295 => 178,  291 => 102,  287 => 138,  279 => 193,  226 => 84,  222 => 83,  197 => 104,  152 => 46,  148 => 65,  113 => 38,  90 => 26,  476 => 330,  472 => 329,  450 => 262,  446 => 197,  442 => 214,  436 => 235,  432 => 257,  426 => 254,  422 => 226,  418 => 224,  370 => 182,  366 => 181,  357 => 123,  350 => 327,  346 => 139,  310 => 152,  286 => 112,  275 => 105,  265 => 105,  263 => 95,  255 => 101,  242 => 106,  218 => 100,  192 => 109,  186 => 80,  178 => 59,  172 => 57,  153 => 56,  1015 => 562,  1013 => 561,  1010 => 560,  1006 => 556,  1004 => 555,  1001 => 554,  998 => 553,  932 => 491,  925 => 487,  913 => 478,  901 => 469,  895 => 466,  888 => 464,  884 => 463,  872 => 487,  853 => 438,  849 => 437,  845 => 436,  839 => 433,  835 => 432,  831 => 421,  825 => 418,  821 => 427,  817 => 415,  812 => 424,  805 => 422,  801 => 393,  790 => 413,  777 => 438,  770 => 399,  763 => 433,  757 => 363,  750 => 476,  746 => 478,  733 => 379,  723 => 414,  719 => 340,  714 => 369,  707 => 409,  703 => 366,  692 => 358,  682 => 467,  678 => 319,  674 => 328,  668 => 344,  664 => 342,  660 => 340,  655 => 342,  648 => 340,  644 => 335,  637 => 374,  631 => 327,  629 => 326,  624 => 292,  611 => 320,  607 => 318,  596 => 279,  589 => 309,  585 => 307,  580 => 279,  574 => 278,  562 => 336,  556 => 310,  547 => 289,  542 => 252,  538 => 361,  534 => 247,  528 => 244,  517 => 404,  511 => 277,  507 => 198,  501 => 198,  497 => 267,  494 => 240,  489 => 262,  485 => 245,  464 => 327,  460 => 326,  456 => 255,  452 => 254,  449 => 198,  445 => 212,  441 => 196,  434 => 167,  417 => 204,  411 => 196,  400 => 214,  385 => 176,  377 => 238,  373 => 156,  359 => 214,  353 => 193,  349 => 272,  338 => 135,  333 => 203,  325 => 129,  318 => 111,  313 => 183,  306 => 107,  284 => 190,  277 => 223,  271 => 138,  259 => 103,  245 => 109,  213 => 78,  195 => 93,  185 => 74,  181 => 65,  345 => 147,  340 => 145,  335 => 134,  329 => 188,  311 => 126,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  288 => 176,  280 => 118,  276 => 111,  272 => 138,  270 => 102,  261 => 122,  257 => 137,  253 => 100,  249 => 108,  244 => 128,  236 => 103,  225 => 97,  212 => 78,  205 => 108,  200 => 72,  188 => 102,  184 => 101,  174 => 65,  134 => 39,  126 => 46,  76 => 17,  58 => 14,  34 => 5,  23 => 2,  480 => 233,  474 => 231,  469 => 216,  461 => 269,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 211,  435 => 202,  430 => 203,  427 => 200,  423 => 199,  413 => 241,  409 => 157,  407 => 195,  402 => 215,  398 => 191,  393 => 211,  387 => 164,  384 => 291,  381 => 220,  379 => 195,  374 => 116,  368 => 285,  365 => 197,  362 => 134,  360 => 145,  355 => 150,  341 => 189,  337 => 103,  322 => 212,  314 => 153,  312 => 130,  309 => 129,  305 => 129,  298 => 120,  294 => 135,  285 => 175,  283 => 115,  278 => 98,  268 => 137,  264 => 111,  258 => 94,  252 => 130,  247 => 113,  241 => 93,  229 => 87,  220 => 81,  214 => 71,  177 => 70,  169 => 75,  140 => 58,  132 => 49,  128 => 47,  107 => 37,  61 => 12,  273 => 174,  269 => 107,  254 => 132,  243 => 92,  240 => 127,  238 => 107,  235 => 89,  230 => 123,  227 => 86,  224 => 81,  221 => 126,  219 => 93,  217 => 95,  208 => 76,  204 => 142,  179 => 98,  159 => 90,  143 => 51,  135 => 62,  119 => 40,  102 => 24,  71 => 13,  67 => 18,  63 => 18,  59 => 11,  87 => 34,  94 => 21,  89 => 30,  85 => 23,  75 => 19,  68 => 30,  56 => 16,  38 => 7,  201 => 106,  196 => 92,  183 => 81,  171 => 67,  166 => 95,  163 => 53,  158 => 62,  156 => 62,  151 => 59,  142 => 92,  138 => 92,  136 => 48,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 16,  49 => 12,  28 => 3,  24 => 3,  26 => 3,  21 => 2,  31 => 4,  25 => 35,  19 => 1,  93 => 27,  88 => 30,  78 => 24,  46 => 10,  44 => 9,  27 => 3,  79 => 21,  72 => 21,  69 => 16,  47 => 9,  40 => 11,  37 => 7,  22 => 2,  246 => 96,  157 => 89,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 40,  111 => 47,  108 => 47,  101 => 33,  98 => 30,  96 => 30,  83 => 33,  74 => 22,  66 => 25,  55 => 12,  52 => 13,  50 => 10,  43 => 9,  41 => 7,  35 => 6,  32 => 5,  29 => 4,  209 => 98,  203 => 73,  199 => 93,  193 => 84,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 99,  162 => 59,  154 => 60,  149 => 60,  147 => 43,  144 => 42,  141 => 51,  133 => 51,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 39,  109 => 27,  106 => 51,  103 => 46,  99 => 23,  95 => 39,  92 => 31,  86 => 38,  82 => 26,  80 => 27,  73 => 16,  64 => 11,  60 => 20,  57 => 19,  54 => 19,  51 => 13,  48 => 11,  45 => 11,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
