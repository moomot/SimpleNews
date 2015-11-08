<?php

/* sidebar.php */
class __TwigTemplate_6fbc1c2385c7d84064c249105f634f9ea73b32b000b7b1074827e0d16a79a271 extends Twig_Template
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
        echo "<div class=\"panel panel-default panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Меню сайта</h3>
    </div>
    <div class=\"panel-body\">
        <ul class=\"nav nav-pills nav-stacked\">
            <li role=\"presentation\" class=\"";
        // line 7
        if (isset($context["module"])) { $_module_ = $context["module"]; } else { $_module_ = null; }
        if (($_module_ == "my_cms")) {
            echo "active";
        }
        echo "\"><a href=\"";
        if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
        echo twig_escape_filter($this->env, $_path_, "html", null, true);
        echo "\">Главная страница</a></li>
            <li role=\"presentation\" class=\"";
        // line 8
        if (isset($context["module"])) { $_module_ = $context["module"]; } else { $_module_ = null; }
        if (($_module_ == "news")) {
            echo "active";
        }
        echo "\"><a href=\"";
        if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
        echo twig_escape_filter($this->env, $_path_, "html", null, true);
        echo "/news\">Новости</a></li>
            <li role=\"presentation\" class=\"";
        // line 9
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if (($_id_ == 2)) {
            echo "active";
        }
        echo "\"><a href=\"";
        if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
        echo twig_escape_filter($this->env, $_path_, "html", null, true);
        echo "/pages/kontakty\">Контакты</a></li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "sidebar.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  37 => 8,  27 => 7,  19 => 1,);
    }
}
