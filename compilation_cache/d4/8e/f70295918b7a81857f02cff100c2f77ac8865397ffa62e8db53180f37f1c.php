<?php

/* newsFull.php */
class __TwigTemplate_d48ef70295918b7a81857f02cff100c2f77ac8865397ffa62e8db53180f37f1c extends Twig_Template
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

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 6
        if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_news_, "title", array()), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"text-center news-img col-md-2\">
                <a href=\"";
        // line 10
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
        // line 12
        if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_news_, "fullDescription", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
        <div class=\"input-group\">
            <span class=\"input-group-addon\">Автор:</span>
            <input type=\"text\" class=\"form-control noborder\" placeholder=\"";
        // line 17
        if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_news_, "author", array()), "html", null, true);
        echo "\" readonly aria-describedby=\"basic-addon1\">
        </div>
    <div class=\"input-group\">
        <span class=\"input-group-addon\">Дата добавления:</span>
        <input type=\"text\" class=\"form-control noborder\" placeholder=\"";
        // line 21
        if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_news_, "date", array()), "html", null, true);
        echo "\" readonly aria-describedby=\"basic-addon1\">
    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "newsFull.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 21,  58 => 17,  49 => 12,  34 => 10,  26 => 6,  19 => 1,);
    }
}
