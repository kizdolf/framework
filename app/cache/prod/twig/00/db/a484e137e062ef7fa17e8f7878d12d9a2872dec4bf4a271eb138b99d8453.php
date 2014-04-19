<?php

/* SmiaWorkBundle:Web:login.html.twig */
class __TwigTemplate_00dba484e137e062ef7fa17e8f7878d12d9a2872dec4bf4a271eb138b99d8453 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('menu', $context, $blocks);
    }

    public function block_menu($context, array $blocks = array())
    {
        // line 2
        echo "<div id=\"menu\" class=\"span6\">
\t<ul class=\"nav nav-pills nav-stacked span6\">\t
\t\t";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 5
            echo "\t\t\t<li><a href=\"#\">";
            echo twig_escape_filter($this->env, (isset($context["article"]) ? $context["article"] : null), "html", null, true);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "\t</ul>
\t<div class=\"container \">
\t\t<div class=\"well span6\">
\t\t\t<form method=\"post\" action=\"/login\"";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
\t\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" />
\t\t\t</form>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SmiaWorkBundle:Web:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  48 => 10,  43 => 7,  34 => 5,  30 => 4,  26 => 2,  20 => 1,);
    }
}
