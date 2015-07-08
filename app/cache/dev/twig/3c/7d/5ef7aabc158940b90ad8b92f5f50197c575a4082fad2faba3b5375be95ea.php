<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_3c7d5ef7aabc158940b90ad8b92f5f50197c575a4082fad2faba3b5375be95ea extends Twig_Template
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
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class") . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type")) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function"));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args"));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file");
            echo " line ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  42 => 14,  38 => 13,  35 => 7,  26 => 5,  87 => 20,  80 => 19,  55 => 13,  46 => 7,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  27 => 4,  24 => 4,  22 => 2,  201 => 92,  199 => 91,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  51 => 15,  49 => 19,  39 => 6,  32 => 12,  19 => 1,  57 => 16,  54 => 21,  43 => 8,  33 => 6,  30 => 3,  479 => 280,  475 => 279,  464 => 271,  453 => 263,  449 => 262,  445 => 261,  439 => 258,  435 => 257,  429 => 254,  425 => 253,  421 => 252,  412 => 246,  405 => 244,  401 => 243,  390 => 235,  373 => 221,  369 => 220,  365 => 219,  360 => 217,  353 => 215,  349 => 214,  338 => 206,  321 => 192,  317 => 191,  313 => 190,  308 => 188,  301 => 186,  297 => 185,  289 => 179,  278 => 175,  274 => 173,  268 => 171,  266 => 170,  262 => 169,  258 => 168,  251 => 164,  245 => 161,  242 => 160,  238 => 159,  218 => 142,  200 => 127,  196 => 90,  192 => 125,  186 => 122,  182 => 121,  178 => 120,  172 => 117,  168 => 72,  164 => 115,  159 => 113,  153 => 112,  44 => 10,  40 => 7,  36 => 7,  31 => 5,  28 => 2,);
    }
}
