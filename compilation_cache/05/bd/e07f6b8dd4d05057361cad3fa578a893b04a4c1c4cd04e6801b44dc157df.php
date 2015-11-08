<?php

/* users/register.php */
class __TwigTemplate_05bde07f6b8dd4d05057361cad3fa578a893b04a4c1c4cd04e6801b44dc157df extends Twig_Template
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
        // line 5
        if (isset($context["statusMsg"])) { $_statusMsg_ = $context["statusMsg"]; } else { $_statusMsg_ = null; }
        if (($this->getAttribute($_statusMsg_, "status", array()) == "error")) {
            echo "Регистрация";
        } else {
            echo "Авторизация пользователя";
        }
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                ";
        // line 8
        if (isset($context["statusMsg"])) { $_statusMsg_ = $context["statusMsg"]; } else { $_statusMsg_ = null; }
        echo $this->getAttribute($_statusMsg_, "msg", array());
        echo "
                ";
        // line 9
        if (isset($context["logged"])) { $_logged_ = $context["logged"]; } else { $_logged_ = null; }
        if ($_logged_) {
            // line 10
            echo "                Вы уже зарегистрированы!
                ";
        } else {
            // line 12
            echo "                ";
            if (isset($context["statusMsg"])) { $_statusMsg_ = $context["statusMsg"]; } else { $_statusMsg_ = null; }
            if (($this->getAttribute($_statusMsg_, "status", array()) == "error")) {
                // line 13
                echo "                <form action=\"\" method=\"post\" accept-charset=\"utf-8\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></span>
                        <input type=\"text\" class=\"form-control noborder\" required name=\"username\" value=\"";
                // line 16
                if (isset($context["regData"])) { $_regData_ = $context["regData"]; } else { $_regData_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_regData_, "login", array()), "html", null, true);
                echo "\" placeholder=\"Логин\">
                    </div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock\"></span></span>
                        <input type=\"password\" class=\"form-control noborder\"  required name=\"password\" value=\"\" placeholder=\"Введите пароль\">
                    </div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock\"></span></span>
                        <input type=\"password\" class=\"form-control noborder\" required name=\"password_secondary\" placeholder=\"Повторите пароль\">
                    </div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-envelope\"></span></span>
                        <input type=\"email\" class=\"form-control noborder\" required name=\"email\" value=\"";
                // line 28
                if (isset($context["regData"])) { $_regData_ = $context["regData"]; } else { $_regData_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_regData_, "email", array()), "html", null, true);
                echo "\"  placeholder=\"E-Mail\">
                    </div>

                    <div class=\"btn-group gender\">
                        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">Выбрать пол
                            <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"javascript://\">Male</a></li>
                            <li><a href=\"javascript://\">Famale</a></li>
                        </ul>
                        <input type=\"hidden\" name=\"gender\" value=\"";
                // line 39
                if (isset($context["regData"])) { $_regData_ = $context["regData"]; } else { $_regData_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_regData_, "gender", array()), "html", null, true);
                echo "\" >
                    </div>

                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-send\"></span></span>
                        <input type=\"text\" class=\"form-control noborder\" name=\"skype\" placeholder=\"Skype\"  value=\"";
                // line 44
                if (isset($context["regData"])) { $_regData_ = $context["regData"]; } else { $_regData_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_regData_, "skype", array()), "html", null, true);
                echo "\" >
                    </div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></span>
                        <input type=\"date\" class=\"form-control noborder\" required name=\"birthday\" placeholder=\"Дата рождения\"  value=\"";
                // line 48
                if (isset($context["regData"])) { $_regData_ = $context["regData"]; } else { $_regData_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_regData_, "date", array()), "html", null, true);
                echo "\" >
                    </div>
                    <p><input type=\"submit\" class=\"btn btn-default btn-block\" name=\"register\" value=\"Зарегистрироваться &rarr;\"/></p>
                </form>
                ";
            } else {
                // line 53
                echo "                ";
                $this->env->loadTemplate("login_form.php")->display($context);
                // line 54
                echo "                ";
            }
            // line 55
            echo "                ";
        }
        // line 56
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "users/register.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 56,  120 => 55,  117 => 54,  114 => 53,  105 => 48,  97 => 44,  88 => 39,  73 => 28,  57 => 16,  52 => 13,  48 => 12,  44 => 10,  41 => 9,  36 => 8,  25 => 5,  19 => 1,);
    }
}
