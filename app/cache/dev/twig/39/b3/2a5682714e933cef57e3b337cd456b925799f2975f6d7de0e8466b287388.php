<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_39b32a5682714e933cef57e3b337cd456b925799f2975f6d7de0e8466b287388 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  54 => 11,  43 => 8,  33 => 4,  30 => 3,  479 => 280,  475 => 279,  464 => 271,  453 => 263,  449 => 262,  445 => 261,  439 => 258,  435 => 257,  429 => 254,  425 => 253,  421 => 252,  412 => 246,  405 => 244,  401 => 243,  390 => 235,  373 => 221,  369 => 220,  365 => 219,  360 => 217,  353 => 215,  349 => 214,  338 => 206,  321 => 192,  317 => 191,  313 => 190,  308 => 188,  301 => 186,  297 => 185,  289 => 179,  278 => 175,  274 => 173,  268 => 171,  266 => 170,  262 => 169,  258 => 168,  251 => 164,  245 => 161,  242 => 160,  238 => 159,  218 => 142,  200 => 127,  196 => 126,  192 => 125,  186 => 122,  182 => 121,  178 => 120,  172 => 117,  168 => 116,  164 => 115,  159 => 113,  153 => 112,  44 => 6,  40 => 7,  36 => 4,  31 => 3,  28 => 2,);
    }
}
