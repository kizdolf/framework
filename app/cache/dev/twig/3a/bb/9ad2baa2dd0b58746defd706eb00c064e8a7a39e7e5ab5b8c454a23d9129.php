<?php

/* jburetwebBundle:web:login.html.twig */
class __TwigTemplate_3abb9ad2baa2dd0b58746defd706eb00c064e8a7a39e7e5ab5b8c454a23d9129 extends Twig_Template
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
\t<title>LOGIN PAGE</title>
</head>
<body>
\tVOICI LA PAGE DE LOGIN!

\t<form method=\"post\" id=\"login\", action=\"/index\">
\t\t<input name=\"login\" type=\"text\" class=\"input\" placeholder=\"Your login here\"/>
\t\t<input name=\"mail\" type=\"text\" class=\"input\" placeholder=\"your mail\"/>
\t\t<input name=\"password\" type=\"password\" class=\"input\"  placeholder=\"password\"/>
\t\t<input name=\"password_check\" type=\"password\" class=\"input\" />
\t\t<input name=\"new_user\" type=\"submit\" class=\"submit\" />
\t</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "jburetwebBundle:web:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
