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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
\t";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " Web0.1 ";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  46 => 8,  35 => 10,  33 => 8,  27 => 5,  21 => 1,  40 => 5,  37 => 5,  29 => 3,);
    }
}
