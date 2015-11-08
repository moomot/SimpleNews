<?php

/* main.tpl */
class __TwigTemplate_f96203f3345aa21a08d4f42a3e2fab487674bcd4735ecf754c87f5df3e886062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'includes' => array($this, 'block_includes'),
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $this->displayBlock('includes', $context, $blocks);
        // line 5
        echo "</head>
<body>
    ";
        // line 7
        $this->displayBlock('navbar', $context, $blocks);
        // line 8
        echo "</body>
</html>";
    }

    // line 4
    public function block_includes($context, array $blocks = array())
    {
    }

    // line 7
    public function block_navbar($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "main.tpl";
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  39 => 4,  34 => 8,  32 => 7,  28 => 5,  26 => 4,  21 => 1,);
    }
}
