<?php

/* WebProfilerBundle:Profiler:profiler.css.twig */
class __TwigTemplate_ef0f3424c2f52eff553161755d460860e224ebd977f04223ce46dd6924ead03c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "/*
Copyright (c) 2008, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.6.0
*/
html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var,optgroup{font-style:inherit;font-weight:inherit;}del,ins{text-decoration:none;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;}sup{vertical-align:baseline;}sub{vertical-align:baseline;}legend{color:#000;}input,button,textarea,select,optgroup,option{font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;}input,button,textarea,select{*font-size:100%;}
html, body {
    background-color: #efefef;
}
body {
    font: 1em \"Lucida Sans Unicode\", \"Lucida Grande\", Verdana, Arial, Helvetica, sans-serif;
    text-align: left;
}
p {
    font-size: 14px;
    line-height: 20px;
    color: #313131;
    padding-bottom: 20px
}
strong {
    color: #313131;
    font-weight: bold;
}
em {
    font-style: italic;
}
a {
    color: #6c6159;
}
a img {
    border: none;
}
a:hover {
    text-decoration: underline;
}
button::-moz-focus-inner {
    padding: 0;
    border: none;
}
button {
    overflow: visible;
    width: auto;
    background-color: transparent;
    font-weight: bold;
}
caption {
    margin-bottom: 7px;
}
table, tr, th, td {
    border-collapse: collapse;
    border: 1px solid #d0dbb3;
}
table {
    width: 100%;
    margin: 10px 0 30px;
}
table th {
    font-weight: bold;
    background-color: #f1f7e2;
}
table th, table td {
    font-size: 12px;
    padding: 8px 10px;
}
table td em {
    color: #aaa;
}
fieldset {
    border: none;
}
abbr {
    border-bottom: 1px dotted #000;
    cursor: help;
}
pre, code {
    font-size: 0.9em;
}
.clear {
    clear: both;
    height: 0;
    font-size: 0;
    line-height: 0;
}
.clear-fix:after
{
    content: \"\\0020\";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
* html .clear-fix
{
    height: 1%;
}
.clear-fix
{
    display: block;
}
#content {
    padding: 0 50px;
    margin: 0 auto 20px;
    font-family: Arial, Helvetica, sans-serif;
    min-width: 970px;
}
#header {
    padding: 20px 30px 20px;
}
#header h1 {
    float: left;
}
.search {
    float: right;
}
#menu-profiler {
    border-right: 1px solid #dfdfdf;
}
#menu-profiler li {
    border-bottom: 1px solid #dfdfdf;
    position: relative;
    padding-bottom: 0;
    display: block;
    background-color: #f6f6f6;
    z-index: 10000;
}
#menu-profiler li a {
    color: #404040;
    display: block;
    font-size: 13px;
    text-transform: uppercase;
    text-decoration: none;
    cursor: pointer;
}
#menu-profiler li a span.label {
    display: block;
    padding: 20px 0px 16px 65px;
    min-height: 16px;
    overflow: hidden;
}
#menu-profiler li a span.icon {
    display: block;
    position: absolute;
    left: 0;
    top: 12px;
    width: 60px;
    text-align: center;
}
#menu-profiler li.selected a,
#menu-profiler li a:hover {
    background: #d1d1d1 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA7CAAAAACfn7+eAAAACXZwQWcAAAABAAAAOwDiPIGUAAAAJElEQVQIW2N4y8TA9B+KGZDYEP5/FD4Eo7IgNLJqZDUIMRRTAcmVHUZf/1g/AAAAAElFTkSuQmCC) repeat-x 0 0;
}
#navigation div:first-child,
#menu-profiler li:first-child,
#menu-profiler li:first-child a,
#menu-profiler li:first-child a span.label {
    border-radius: 16px 0 0 0;
}
#menu-profiler li a span.count {
    padding: 0;
    position: absolute;
    right: 10px;
    top: 20px;
}
#collector-wrapper {
    float: left;
    width: 100%;
}
#collector-content {
    margin-left: 250px;
    padding: 30px 40px 40px;
}
#navigation {
    float: left;
    width: 250px;
    margin-left: -100%;
}
#collector-content table td {
    background-color: white;
}
h1 {
    font-family: Georgia, \"Times New Roman\", Times, serif;
    color: #404040;
}
h2, h3 {
    font-weight: bold;
    margin-bottom: 20px;
}
li {
    padding-bottom: 10px;
}
#main {
    border-radius: 16px;
    margin-bottom: 20px;
}
#menu-profiler span.count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: #fff;
    margin-right: 2px;
    font-size: 11px;
}
#resume {
    background-color: #f6f6f6;
    border-bottom: 1px solid #dfdfdf;
    padding: 18px 10px 0px;
    margin-left: 250px;
    height: 34px;
    color: #313131;
    font-size: 12px;
    border-top-right-radius: 16px;
}
a#resume-view-all {
    display: inline-block;
    padding: 0.2em 0.7em;
    margin-right: 0.5em;
    background-color: #666;
    border-radius: 16px;
    color: white;
    font-weight: bold;
    text-decoration: none;
}
table th.value {
    width: 450px;
    background-color: #dfeeb8;
}
#content h2 {
    font-size: 24px;
    color: #313131;
    font-weight: bold;
}
#content #main {
    padding: 0;
    background-color: #FFF;
    border: 1px solid #dfdfdf;
}
#content #main p {
    color: #313131;
    font-size: 14px;
    padding-bottom: 20px;
}
.sf-toolbarreset {
    border-top: 0;
    padding: 0;
}
.sf-reset .block-exception-detected .text-exception {
    left: 10px;
    right: 10px;
    width: 95%;
}
.sf-reset .block-exception-detected .illustration-exception {
    display: none;
}
ul.alt {
    margin: 10px 0 30px;
}
ul.alt li {
    padding: 5px 7px;
    font-size: 13px;
}
ul.alt li.even {
    background: #f1f7e2;
}
ul.alt li.error {
    background-color: #f66;
    margin-bottom: 1px;
}
ul.alt li.warning {
    background-color: #ffcc00;
    margin-bottom: 1px;
}
ul.sf-call-stack li {
    text-size: small;
    padding: 0 0 0 20px;
}
td.main, td.menu {
    text-align: left;
    margin: 0;
    padding: 0;
    border: 0;
    vertical-align: top;
}
.search {
    float: right;
    padding-top: 20px;
}
.search label {
    line-height: 28px;
    vertical-align: middle;
}
.search input {
    width: 195px;
    font-size: 12px;
    border: 1px solid #dadada;
    background: #FFF url(data:image/gif;base64,R0lGODlhAQAFAKIAAPX19e/v7/39/fr6+urq6gAAAAAAAAAAACH5BAAAAAAALAAAAAABAAUAAAMESAEjCQA7) repeat-x left top;
    padding: 5px 6px;
    color: #565656;
}
.search input[type=\"search\"] {
    -webkit-appearance: textfield;
}
#navigation div:first-child {
    margin: 0 0 20px;
    border-top: 0;
}
#navigation .search {
    padding-top: 15px;
    float: none;
    background: none repeat scroll 0 0 #f6f6f6;
    color: #333;
    margin: 20px 0;
    border: 1px solid #dfdfdf;
    border-left: none;
}
#navigation .search h3 {
    font-family: Arial, Helvetica, sans-serif;
    text-transform: uppercase;
    margin-left: 10px;
    font-size: 13px;
}
#navigation .search form {
    padding: 15px 0;
}
#navigation .search button {
    float: right;
    margin-right: 20px;
}
#navigation .search label {
    display: block;
    float: left;
    width: 50px;
}
#navigation .search input,
#navigation .search select,
#navigation .search label,
#navigation .search a {
    font-size: 12px;
}
#navigation .search form {
    padding-left: 10px;
}
#navigation .search input {
    width: 160px;
}
#navigation .import label {
    float: none;
    display: inline;
}
#navigation .import input {
    width: 100px;
}
.timeline {
    background-color: #fbfbfb;
    margin-bottom: 15px;
    margin-top: 5px;
}
#collector-content .routing tr.matches td {
    background-color: #0e0;
}
#collector-content .routing tr.almost td {
    background-color: #fa0;
}
.loading {
    background: transparent url(data:image/gif;base64,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) scroll no-repeat 50% 50%;
    height: 30px;
    display: none;
}
.sf-profiler-timeline .legends {
    font-size: 12px;
    line-height: 1.5em;
}
.sf-profiler-timeline .legends span {
    border-left-width: 10px;
    border-left-style: solid;
    padding: 0 10px 0 5px;
}
.sf-profiler-timeline canvas {
    border: 1px solid #999;
    border-width: 1px 0;
}
.collapsed-menu-parents #resume,
.collapsed-menu-parents #collector-content {
    margin-left: 60px !important;
}
.collapsed-menu {
    width: 60px !important;
}
.collapsed-menu span :not(.icon) {
    display: none !important;
}
.collapsed-menu span.icon img {
    display: inline !important;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:profiler.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  367 => 339,  794 => 389,  792 => 388,  786 => 386,  761 => 364,  729 => 344,  725 => 343,  713 => 337,  709 => 336,  704 => 334,  690 => 328,  672 => 316,  650 => 306,  642 => 301,  636 => 298,  632 => 297,  614 => 288,  582 => 271,  578 => 270,  564 => 262,  560 => 261,  552 => 256,  510 => 235,  506 => 234,  465 => 215,  458 => 210,  380 => 186,  344 => 171,  526 => 284,  522 => 282,  324 => 162,  1227 => 738,  1217 => 731,  1213 => 730,  1209 => 729,  1204 => 727,  1197 => 725,  1193 => 724,  1182 => 716,  1173 => 710,  1169 => 709,  1165 => 708,  1155 => 701,  1151 => 700,  1147 => 699,  1142 => 697,  1135 => 695,  1131 => 694,  1120 => 686,  1103 => 672,  1099 => 671,  1095 => 670,  1090 => 668,  1083 => 666,  1079 => 665,  1068 => 657,  1063 => 655,  1042 => 637,  1038 => 636,  1034 => 635,  1029 => 633,  1022 => 631,  1018 => 630,  1007 => 622,  990 => 608,  986 => 607,  982 => 606,  977 => 604,  970 => 602,  966 => 601,  955 => 593,  944 => 585,  940 => 584,  936 => 583,  930 => 580,  926 => 579,  920 => 576,  916 => 575,  912 => 574,  903 => 568,  896 => 566,  892 => 565,  881 => 557,  854 => 536,  847 => 532,  834 => 527,  830 => 526,  806 => 504,  798 => 502,  793 => 501,  789 => 387,  767 => 480,  735 => 347,  701 => 439,  686 => 427,  666 => 421,  662 => 420,  651 => 417,  647 => 416,  625 => 397,  620 => 394,  604 => 391,  600 => 280,  588 => 274,  570 => 265,  554 => 367,  530 => 359,  515 => 349,  468 => 328,  419 => 198,  372 => 286,  297 => 125,  455 => 264,  386 => 221,  414 => 300,  410 => 249,  237 => 123,  389 => 158,  378 => 289,  375 => 152,  262 => 134,  234 => 124,  463 => 224,  415 => 197,  406 => 298,  376 => 185,  361 => 161,  347 => 153,  327 => 143,  680 => 431,  599 => 359,  587 => 350,  575 => 341,  558 => 368,  546 => 253,  527 => 310,  523 => 309,  519 => 350,  509 => 304,  495 => 335,  491 => 333,  486 => 236,  451 => 215,  397 => 244,  356 => 276,  334 => 260,  194 => 77,  20 => 1,  223 => 159,  492 => 228,  487 => 190,  475 => 217,  473 => 187,  431 => 201,  391 => 198,  383 => 187,  343 => 169,  328 => 164,  320 => 249,  70 => 24,  290 => 144,  282 => 142,  180 => 80,  206 => 114,  170 => 102,  97 => 41,  251 => 100,  577 => 231,  569 => 338,  550 => 212,  537 => 209,  533 => 208,  520 => 281,  513 => 305,  488 => 227,  479 => 294,  467 => 179,  462 => 179,  448 => 206,  433 => 309,  425 => 161,  421 => 197,  405 => 247,  354 => 178,  190 => 74,  77 => 28,  266 => 136,  161 => 73,  124 => 64,  84 => 29,  53 => 15,  146 => 93,  281 => 142,  239 => 80,  210 => 86,  202 => 113,  127 => 60,  118 => 34,  65 => 14,  137 => 90,  129 => 41,  323 => 159,  319 => 141,  317 => 139,  289 => 139,  274 => 93,  260 => 110,  232 => 104,  228 => 98,  216 => 118,  211 => 92,  191 => 84,  165 => 68,  114 => 42,  110 => 22,  104 => 32,  100 => 38,  315 => 110,  301 => 121,  267 => 125,  231 => 101,  167 => 74,  160 => 98,  215 => 92,  155 => 71,  829 => 420,  820 => 416,  784 => 388,  780 => 387,  758 => 371,  754 => 477,  744 => 366,  740 => 365,  734 => 362,  730 => 361,  726 => 458,  717 => 354,  710 => 445,  706 => 351,  695 => 343,  670 => 327,  665 => 325,  658 => 419,  654 => 307,  643 => 314,  626 => 300,  622 => 299,  618 => 289,  613 => 393,  606 => 283,  602 => 293,  594 => 288,  584 => 386,  565 => 275,  559 => 274,  555 => 273,  551 => 221,  543 => 219,  539 => 269,  524 => 243,  518 => 203,  514 => 278,  503 => 197,  499 => 230,  493 => 247,  481 => 189,  447 => 261,  443 => 226,  439 => 203,  420 => 254,  416 => 252,  403 => 194,  399 => 200,  395 => 199,  358 => 179,  352 => 143,  348 => 221,  342 => 218,  331 => 122,  304 => 149,  300 => 148,  292 => 146,  250 => 129,  207 => 71,  175 => 80,  150 => 94,  890 => 499,  878 => 490,  865 => 485,  861 => 540,  850 => 476,  841 => 529,  837 => 469,  833 => 468,  823 => 417,  819 => 460,  815 => 459,  810 => 457,  803 => 455,  799 => 392,  788 => 446,  773 => 437,  769 => 379,  759 => 478,  753 => 429,  749 => 428,  745 => 427,  731 => 416,  727 => 415,  718 => 412,  711 => 410,  696 => 331,  685 => 393,  681 => 424,  677 => 430,  671 => 388,  667 => 387,  661 => 384,  657 => 383,  653 => 382,  633 => 373,  617 => 360,  608 => 354,  592 => 341,  583 => 335,  548 => 271,  544 => 307,  529 => 207,  525 => 205,  516 => 238,  512 => 294,  508 => 276,  505 => 303,  482 => 234,  477 => 232,  470 => 241,  428 => 254,  424 => 262,  412 => 246,  408 => 248,  392 => 209,  388 => 241,  369 => 136,  351 => 211,  336 => 169,  332 => 165,  256 => 132,  248 => 129,  233 => 105,  198 => 112,  326 => 183,  308 => 287,  303 => 128,  299 => 151,  295 => 151,  291 => 122,  287 => 138,  279 => 193,  226 => 122,  222 => 96,  197 => 86,  152 => 62,  148 => 65,  113 => 32,  90 => 32,  476 => 330,  472 => 329,  450 => 262,  446 => 170,  442 => 214,  436 => 310,  432 => 257,  426 => 254,  422 => 247,  418 => 252,  370 => 182,  366 => 181,  357 => 132,  350 => 327,  346 => 139,  310 => 152,  286 => 143,  275 => 139,  265 => 90,  263 => 123,  255 => 120,  242 => 106,  218 => 100,  192 => 109,  186 => 80,  178 => 104,  172 => 75,  153 => 61,  1015 => 562,  1013 => 561,  1010 => 560,  1006 => 556,  1004 => 555,  1001 => 554,  998 => 553,  932 => 491,  925 => 487,  913 => 478,  901 => 469,  895 => 466,  888 => 464,  884 => 463,  872 => 487,  853 => 438,  849 => 437,  845 => 436,  839 => 433,  835 => 432,  831 => 421,  825 => 418,  821 => 427,  817 => 415,  812 => 424,  805 => 422,  801 => 393,  790 => 413,  777 => 438,  770 => 399,  763 => 433,  757 => 363,  750 => 476,  746 => 355,  733 => 379,  723 => 414,  719 => 340,  714 => 369,  707 => 409,  703 => 366,  692 => 358,  682 => 351,  678 => 319,  674 => 328,  668 => 315,  664 => 345,  660 => 310,  655 => 342,  648 => 340,  644 => 376,  637 => 374,  631 => 333,  629 => 332,  624 => 292,  611 => 320,  607 => 318,  596 => 279,  589 => 309,  585 => 308,  580 => 279,  574 => 278,  562 => 336,  556 => 310,  547 => 289,  542 => 252,  538 => 361,  534 => 247,  528 => 244,  517 => 279,  511 => 277,  507 => 198,  501 => 198,  497 => 248,  494 => 240,  489 => 246,  485 => 245,  464 => 327,  460 => 326,  456 => 255,  452 => 254,  449 => 253,  445 => 212,  441 => 257,  434 => 167,  417 => 204,  411 => 196,  400 => 185,  385 => 176,  377 => 238,  373 => 199,  359 => 214,  353 => 328,  349 => 272,  338 => 217,  333 => 203,  325 => 144,  318 => 160,  313 => 245,  306 => 286,  284 => 190,  277 => 223,  271 => 138,  259 => 104,  245 => 109,  213 => 74,  195 => 93,  185 => 72,  181 => 71,  345 => 209,  340 => 170,  335 => 185,  329 => 214,  311 => 126,  307 => 141,  302 => 203,  296 => 147,  293 => 123,  288 => 121,  280 => 118,  276 => 139,  272 => 138,  270 => 114,  261 => 122,  257 => 137,  253 => 101,  249 => 108,  244 => 128,  236 => 103,  225 => 97,  212 => 117,  205 => 88,  200 => 87,  188 => 108,  184 => 107,  174 => 103,  134 => 66,  126 => 46,  76 => 27,  58 => 18,  34 => 4,  23 => 2,  480 => 233,  474 => 231,  469 => 216,  461 => 269,  457 => 325,  453 => 324,  444 => 205,  440 => 148,  437 => 211,  435 => 202,  430 => 203,  427 => 200,  423 => 199,  413 => 241,  409 => 157,  407 => 195,  402 => 246,  398 => 191,  393 => 160,  387 => 188,  384 => 291,  381 => 220,  379 => 195,  374 => 116,  368 => 285,  365 => 184,  362 => 134,  360 => 145,  355 => 329,  341 => 168,  337 => 103,  322 => 212,  314 => 153,  312 => 157,  309 => 159,  305 => 129,  298 => 141,  294 => 135,  285 => 143,  283 => 125,  278 => 131,  268 => 137,  264 => 111,  258 => 133,  252 => 130,  247 => 113,  241 => 90,  229 => 128,  220 => 119,  214 => 71,  177 => 70,  169 => 75,  140 => 60,  132 => 49,  128 => 47,  107 => 30,  61 => 12,  273 => 128,  269 => 126,  254 => 132,  243 => 133,  240 => 127,  238 => 107,  235 => 163,  230 => 123,  227 => 82,  224 => 73,  221 => 126,  219 => 93,  217 => 95,  208 => 93,  204 => 142,  179 => 79,  159 => 72,  143 => 68,  135 => 62,  119 => 41,  102 => 17,  71 => 30,  67 => 19,  63 => 19,  59 => 13,  87 => 32,  94 => 34,  89 => 36,  85 => 32,  75 => 33,  68 => 15,  56 => 16,  38 => 6,  201 => 68,  196 => 85,  183 => 81,  171 => 67,  166 => 80,  163 => 65,  158 => 79,  156 => 97,  151 => 70,  142 => 92,  138 => 92,  136 => 59,  121 => 43,  117 => 19,  105 => 18,  91 => 28,  62 => 13,  49 => 13,  28 => 3,  24 => 3,  26 => 6,  21 => 2,  31 => 8,  25 => 35,  19 => 1,  93 => 25,  88 => 31,  78 => 26,  46 => 13,  44 => 15,  27 => 7,  79 => 34,  72 => 27,  69 => 15,  47 => 8,  40 => 8,  37 => 5,  22 => 2,  246 => 120,  157 => 62,  145 => 62,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 40,  111 => 51,  108 => 19,  101 => 43,  98 => 34,  96 => 33,  83 => 31,  74 => 27,  66 => 24,  55 => 19,  52 => 14,  50 => 12,  43 => 11,  41 => 10,  35 => 5,  32 => 3,  29 => 3,  209 => 98,  203 => 87,  199 => 85,  193 => 84,  189 => 70,  187 => 83,  182 => 60,  176 => 79,  173 => 77,  168 => 78,  164 => 99,  162 => 74,  154 => 68,  149 => 60,  147 => 63,  144 => 51,  141 => 68,  133 => 51,  130 => 65,  125 => 36,  122 => 44,  116 => 33,  112 => 52,  109 => 49,  106 => 45,  103 => 46,  99 => 36,  95 => 25,  92 => 32,  86 => 38,  82 => 28,  80 => 30,  73 => 16,  64 => 21,  60 => 13,  57 => 12,  54 => 9,  51 => 17,  48 => 16,  45 => 8,  42 => 8,  39 => 10,  36 => 10,  33 => 9,  30 => 3,);
    }
}
