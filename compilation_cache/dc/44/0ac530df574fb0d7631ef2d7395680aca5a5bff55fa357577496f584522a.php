<?php

/* body.php */
class __TwigTemplate_dc440ac530df574fb0d7631ef2d7395680aca5a5bff55fa357577496f584522a extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-9\">
            ";
        // line 4
        $this->env->loadTemplate("content.php")->display($context);
        // line 5
        echo "            ";
        $this->env->loadTemplate("news/pages.php")->display($context);
        // line 6
        echo "        </div>
        <div class=\"col-md-3\">
            ";
        // line 8
        $this->env->loadTemplate("sidebar.php")->display($context);
        // line 9
        echo "        </div>
    </div>
</div>
        ";
    }

    public function getTemplateName()
    {
        return "body.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  33 => 8,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
