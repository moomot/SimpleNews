<?php

/* users/profile.php */
class __TwigTemplate_6597729f2677d6c14fbc80b579ed8b3eeecc13132195330bcea57f0a6fe652f5 extends Twig_Template
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
                <h3 class=\"panel-title\">Профиль пользователя ";
        // line 5
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "login", array()), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"panel-body \">

                <div class=\"col-md-10\">
                <div class=\"form-horizontal\">
                <div class=\"form-group\">
                    <label class=\"col-lg-1 control-label\">ID</label>
                    <div class=\"col-lg-11\">
                        <p class=\"form-control-static\">";
        // line 14
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id", array()), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-1 control-label\">Логин</label>
                    <div class=\"col-lg-11\">
                        <p class=\"form-control-static\">";
        // line 20
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "login", array()), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-1 control-label\">Почта</label>
                    <div class=\"col-lg-11\">
                        <p class=\"form-control-static\">";
        // line 26
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "mail", array()), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-1 control-label\">Дата рождения</label>
                    <div class=\"col-lg-11\">
                        <p class=\"form-control-static\">";
        // line 32
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "date", array()), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-1 control-label\">Пол</label>
                    <div class=\"col-lg-11\">
                        <p class=\"form-control-static\">";
        // line 38
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "gender", array()), "html", null, true);
        echo "</p>
                    </div>
                </div>
                </div>
                </div>
                <div class=\"col-md-2\">
                    <img class=\"thumbnail\" src=\"";
        // line 44
        if (isset($context["imgPath"])) { $_imgPath_ = $context["imgPath"]; } else { $_imgPath_ = null; }
        echo twig_escape_filter($this->env, $_imgPath_, "html", null, true);
        echo "/";
        if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_news_, "thumbnail", array()), "html", null, true);
        echo "\"width=\"150\" height=\"150\" alt=\"poster\" />
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "users/profile.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 44,  78 => 38,  68 => 32,  58 => 26,  48 => 20,  38 => 14,  25 => 5,  19 => 1,);
    }
}
