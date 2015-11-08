<?php

/* index.php */
class __TwigTemplate_abe207b196f248c9d45e7613939f981e1f20b16b706375267c01c81295a2e314 extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $this->env->loadTemplate("includes.php")->display($context);
        // line 5
        echo "
</head>
<body>
";
        // line 8
        $this->env->loadTemplate("navbar.php")->display($context);
        // line 9
        echo "
";
        // line 10
        $this->env->loadTemplate("header.php")->display($context);
        // line 11
        echo "
";
        // line 12
        if (isset($context["module"])) { $_module_ = $context["module"]; } else { $_module_ = null; }
        if (($_module_ == "news")) {
            // line 13
            echo "    ";
            $this->env->loadTemplate("news/mainPage.php")->display($context);
        } elseif (($_module_ == "pages")) {
            // line 15
            echo "    ";
            $this->env->loadTemplate("staticpages/static.php")->display($context);
        } elseif (($_module_ == "user")) {
            // line 17
            echo "    ";
            $this->env->loadTemplate("users/profile.php")->display($context);
        } elseif (($_module_ == "news_add")) {
            // line 19
            echo "    ";
            $this->env->loadTemplate("news/news_add.php")->display($context);
        } elseif (($_module_ == "news_list")) {
            // line 21
            echo "    ";
            $this->env->loadTemplate("news/news_list.php")->display($context);
        } elseif (($_module_ == "search")) {
            // line 23
            echo "\t";
            $this->env->loadTemplate("search/search_main.php")->display($context);
        } else {
            // line 25
            echo "    ";
            $this->env->loadTemplate("siteMainPage.php")->display($context);
        }
        // line 27
        echo "
";
        // line 28
        $this->env->loadTemplate("footer.php")->display($context);
        // line 29
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 29,  75 => 28,  72 => 27,  68 => 25,  64 => 23,  60 => 21,  56 => 19,  52 => 17,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  36 => 10,  33 => 9,  31 => 8,  26 => 5,  24 => 4,  19 => 1,);
    }
}
