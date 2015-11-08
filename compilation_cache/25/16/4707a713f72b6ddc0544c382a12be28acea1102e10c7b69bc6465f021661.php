<?php

/* news/mainPage.php */
class __TwigTemplate_25164707a713f72b6ddc0544c382a12be28acea1102e10c7b69bc6465f021661 extends Twig_Template
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
        if (isset($context["issetId"])) { $_issetId_ = $context["issetId"]; } else { $_issetId_ = null; }
        if (($_issetId_ == false)) {
            // line 2
            echo "    ";
            $this->env->loadTemplate("body.php")->display($context);
        } else {
            // line 4
            echo "    ";
            $this->env->loadTemplate("news/newsFull.php")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "news/mainPage.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,  19 => 1,);
    }
}
