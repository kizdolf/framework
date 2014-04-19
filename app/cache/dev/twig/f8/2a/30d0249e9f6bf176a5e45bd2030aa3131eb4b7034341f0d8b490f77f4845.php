<?php

/* ::layout.html.twig */
class __TwigTemplate_f82a30d0249e9f6bf176a5e45bd2030aa3131eb4b7034341f0d8b490f77f4845 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body id=\"container\" class=\"span12\">
\t";
        // line 9
        $this->displayBlock('menu', $context, $blocks);
        // line 13
        echo "\t<div id=\"content\" class=\"span9\">
\t\t";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "\t</div>
  ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo " Web0.1 ";
    }

    // line 9
    public function block_menu($context, array $blocks = array())
    {
        // line 10
        echo "\t\t";
        // line 11
        echo "\t\t";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SmiaWorkBundle:Web:login"));
        echo "
\t";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "\t\t\t";
        // line 16
        echo "\t\t\tempty body
\t\t";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 21,  87 => 20,  84 => 19,  79 => 16,  77 => 15,  74 => 14,  67 => 11,  65 => 10,  62 => 9,  56 => 6,  51 => 23,  49 => 19,  46 => 18,  44 => 14,  41 => 13,  33 => 6,  23 => 1,  42 => 7,  39 => 9,  32 => 4,  29 => 5,);
    }
}
