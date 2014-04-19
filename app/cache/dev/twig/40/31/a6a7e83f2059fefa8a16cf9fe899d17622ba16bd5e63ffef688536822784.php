<?php

/* SmiaWorkBundle::layout.html.twig */
class __TwigTemplate_4031a6a7e83f2059fefa8a16cf9fe899d17622ba16bd5e63ffef688536822784 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'wrapper' => array($this, 'block_wrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"container\" class=\"row-fluid\">
\t<h1>Welcome around here!</h1>
\t<hr \\>
\t";
        // line 7
        $this->displayBlock('wrapper', $context, $blocks);
        // line 15
        echo "</div>
";
    }

    // line 7
    public function block_wrapper($context, array $blocks = array())
    {
        // line 8
        echo "\tLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.
\t";
    }

    public function getTemplateName()
    {
        return "SmiaWorkBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  44 => 7,  37 => 7,  42 => 8,  39 => 15,  32 => 4,  29 => 3,);
    }
}
