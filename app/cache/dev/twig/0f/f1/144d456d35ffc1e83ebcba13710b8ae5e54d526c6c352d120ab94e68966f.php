<?php

/* SmiaWorkBundle:Web:index.html.twig */
class __TwigTemplate_0ff1144d456d35ffc1e83ebcba13710b8ae5e54d526c6c352d120ab94e68966f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SmiaWorkBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SmiaWorkBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " | home
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "\tYou're in the index. youpikay pov... hum.
";
    }

    public function getTemplateName()
    {
        return "SmiaWorkBundle:Web:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  39 => 6,  32 => 4,  29 => 3,);
    }
}
