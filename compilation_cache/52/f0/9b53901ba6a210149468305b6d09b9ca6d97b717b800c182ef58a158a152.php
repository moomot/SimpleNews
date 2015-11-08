<?php

/* news/newsFull.php */
class __TwigTemplate_52f09b53901ba6a210149468305b6d09b9ca6d97b717b800c182ef58a158a152 extends Twig_Template
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
        if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
        if (($_news_ != false)) {
            // line 2
            echo "<div class=\"container\">
<div class=\"row\">

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
            // line 7
            if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_news_, "title", array()), "html", null, true);
            echo "</h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"text-center news-img col-md-2\">
                <a href=\"";
            // line 11
            if (isset($context["imgPath"])) { $_imgPath_ = $context["imgPath"]; } else { $_imgPath_ = null; }
            echo twig_escape_filter($this->env, $_imgPath_, "html", null, true);
            echo "/";
            if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_news_, "thumbnail", array()), "html", null, true);
            echo "\" class=\"thumbnail\"><img src=\"";
            if (isset($context["imgPath"])) { $_imgPath_ = $context["imgPath"]; } else { $_imgPath_ = null; }
            echo twig_escape_filter($this->env, $_imgPath_, "html", null, true);
            echo "/";
            if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_news_, "thumbnail", array()), "html", null, true);
            echo "\"width=\"300\" height=\"300\" alt=\"poster\" /></a>
            </div>
       <p>";
            // line 13
            if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
            echo $this->getAttribute($_news_, "fullDescription", array());
            echo "</p>
        </div>
    </div>
        <div class=\"input-group\">
            <span class=\"input-group-addon\">Автор:</span>
            <input type=\"text\" class=\"form-control noborder\" placeholder=\"";
            // line 18
            if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_news_, "author", array()), "html", null, true);
            echo "\" readonly aria-describedby=\"basic-addon1\">
        </div>
    <div class=\"input-group\">
        <span class=\"input-group-addon\">Дата добавления:</span>
        <input type=\"text\" class=\"form-control noborder\" placeholder=\"";
            // line 22
            if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_news_, "date", array()), "html", null, true);
            echo "\" readonly aria-describedby=\"basic-addon1\">
    </div>
</div>
</div>
";
        } else {
            // line 27
            echo "    ";
            $this->env->loadTemplate("404.php")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "news/newsFull.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 27,  69 => 22,  61 => 18,  52 => 13,  37 => 11,  29 => 7,  22 => 2,  19 => 1,);
    }
}
