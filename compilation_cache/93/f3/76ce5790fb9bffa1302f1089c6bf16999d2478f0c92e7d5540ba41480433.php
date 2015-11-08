<?php

/* siteMainPage.php */
class __TwigTemplate_93f376ce5790fb9bffa1302f1089c6bf16999d2478f0c92e7d5540ba41480433 extends Twig_Template
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
        if (isset($context["do"])) { $_do_ = $context["do"]; } else { $_do_ = null; }
        if (($_do_ == "register")) {
            // line 2
            echo "    ";
            $this->env->loadTemplate("users/register.php")->display($context);
        } elseif (($_do_ == "login")) {
            // line 4
            echo "    ";
            $this->env->loadTemplate("users/login_form.php")->display($context);
        } else {
            // line 6
            if (isset($context["issetId"])) { $_issetId_ = $context["issetId"]; } else { $_issetId_ = null; }
            if (($_issetId_ == false)) {
                // line 7
                $this->env->loadTemplate("news/informerByDate.php")->display($context);
                // line 8
                $this->env->loadTemplate("body.php")->display($context);
            } else {
                // line 10
                echo "        ";
                $this->env->loadTemplate("news/newsFull.php")->display($context);
            }
        }
    }

    public function getTemplateName()
    {
        return "siteMainPage.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  35 => 8,  33 => 7,  30 => 6,  26 => 4,  22 => 2,  19 => 1,);
    }
}
