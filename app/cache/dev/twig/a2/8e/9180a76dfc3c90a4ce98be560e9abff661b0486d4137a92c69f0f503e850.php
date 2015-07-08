<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_a28e9180a76dfc3c90a4ce98be560e9abff661b0486d4137a92c69f0f503e850 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  75 => 28,  70 => 26,  42 => 12,  32 => 6,  26 => 3,  24 => 2,  19 => 1,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1100 => 314,  1098 => 313,  1088 => 308,  1084 => 307,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  979 => 260,  976 => 259,  973 => 258,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  934 => 241,  931 => 240,  923 => 236,  918 => 234,  915 => 233,  900 => 228,  897 => 227,  894 => 226,  889 => 224,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  833 => 199,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  796 => 183,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  529 => 92,  527 => 91,  524 => 90,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  480 => 75,  478 => 74,  470 => 73,  467 => 72,  461 => 70,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  437 => 61,  428 => 59,  426 => 58,  423 => 57,  408 => 50,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  374 => 36,  371 => 35,  366 => 33,  363 => 32,  355 => 27,  350 => 26,  344 => 24,  342 => 23,  337 => 22,  332 => 20,  316 => 16,  308 => 13,  290 => 5,  281 => 411,  278 => 410,  273 => 394,  268 => 373,  266 => 366,  263 => 365,  260 => 363,  258 => 354,  255 => 353,  250 => 341,  248 => 336,  245 => 335,  243 => 327,  238 => 312,  235 => 311,  233 => 304,  230 => 303,  227 => 301,  222 => 297,  220 => 290,  215 => 280,  210 => 270,  207 => 269,  204 => 267,  202 => 266,  199 => 265,  197 => 249,  194 => 248,  191 => 246,  189 => 240,  186 => 239,  181 => 232,  176 => 223,  171 => 216,  169 => 210,  166 => 209,  164 => 203,  161 => 202,  159 => 196,  154 => 189,  151 => 188,  149 => 182,  146 => 181,  144 => 176,  141 => 175,  139 => 169,  136 => 168,  131 => 160,  129 => 148,  124 => 132,  121 => 131,  119 => 117,  116 => 116,  114 => 111,  111 => 110,  109 => 105,  106 => 104,  104 => 90,  101 => 89,  99 => 68,  96 => 67,  94 => 57,  91 => 35,  89 => 47,  86 => 46,  84 => 41,  81 => 40,  79 => 29,  74 => 20,  71 => 19,  69 => 13,  66 => 25,  64 => 3,  61 => 2,  345 => 137,  340 => 132,  335 => 21,  329 => 6,  311 => 14,  307 => 142,  302 => 139,  298 => 138,  296 => 137,  293 => 6,  288 => 4,  283 => 132,  280 => 131,  276 => 395,  272 => 128,  270 => 127,  261 => 121,  257 => 120,  253 => 342,  249 => 118,  244 => 117,  240 => 326,  236 => 115,  229 => 111,  225 => 298,  221 => 109,  217 => 289,  212 => 279,  205 => 102,  200 => 100,  196 => 99,  188 => 94,  184 => 233,  179 => 224,  174 => 217,  156 => 195,  147 => 75,  134 => 161,  130 => 64,  126 => 147,  120 => 59,  115 => 56,  76 => 31,  72 => 19,  67 => 18,  62 => 24,  58 => 14,  54 => 13,  50 => 15,  46 => 14,  41 => 9,  34 => 7,  30 => 5,  23 => 1,  1227 => 738,  1217 => 731,  1213 => 730,  1209 => 729,  1204 => 727,  1197 => 725,  1193 => 724,  1182 => 716,  1173 => 710,  1169 => 709,  1165 => 708,  1155 => 701,  1151 => 700,  1147 => 699,  1142 => 697,  1135 => 695,  1131 => 694,  1120 => 686,  1103 => 315,  1099 => 671,  1095 => 312,  1090 => 668,  1083 => 666,  1079 => 306,  1068 => 657,  1063 => 655,  1042 => 637,  1038 => 636,  1034 => 635,  1029 => 282,  1022 => 631,  1018 => 630,  1007 => 622,  990 => 608,  986 => 607,  982 => 261,  977 => 604,  970 => 257,  966 => 601,  955 => 252,  944 => 585,  940 => 584,  936 => 242,  930 => 580,  926 => 579,  920 => 235,  916 => 575,  912 => 574,  903 => 229,  896 => 566,  892 => 225,  881 => 220,  861 => 540,  854 => 536,  847 => 532,  841 => 203,  834 => 527,  830 => 198,  806 => 504,  798 => 184,  793 => 182,  789 => 500,  767 => 170,  759 => 478,  754 => 477,  750 => 476,  735 => 464,  726 => 458,  710 => 149,  701 => 439,  686 => 427,  681 => 424,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  651 => 417,  647 => 416,  625 => 397,  620 => 394,  613 => 393,  604 => 391,  600 => 390,  596 => 106,  588 => 387,  584 => 386,  570 => 374,  558 => 368,  554 => 367,  546 => 366,  538 => 361,  534 => 360,  530 => 359,  519 => 350,  515 => 85,  499 => 336,  495 => 335,  491 => 333,  476 => 330,  472 => 329,  468 => 328,  464 => 71,  460 => 326,  457 => 325,  453 => 324,  436 => 310,  433 => 60,  419 => 301,  414 => 52,  406 => 298,  399 => 296,  395 => 295,  391 => 293,  384 => 291,  378 => 289,  376 => 288,  372 => 286,  368 => 34,  356 => 276,  349 => 272,  334 => 260,  320 => 249,  313 => 15,  306 => 241,  299 => 8,  292 => 233,  285 => 3,  277 => 223,  275 => 222,  271 => 374,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  40 => 5,  36 => 8,  31 => 3,  28 => 2,);
    }
}
