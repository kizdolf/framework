<?php

/* jburetwebBundle:web:nav.html.twig */
class __TwigTemplate_679b32ae42811b158215f98cc6580b889efd6ba7f576d20c40912921eb6ef8b2 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>NAV</title>
</head>
<body>
\tYou want to navigate in the site? it's around here!
<hr />
\tand your on the ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " page!
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "jburetwebBundle:web:nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  19 => 1,);
    }
}
