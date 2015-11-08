<?php

/* users/login_form.php */
class __TwigTemplate_754f83a4e690fa95e412ce0021dd0b53343ac63d6f2bd49b1ba7c2d9ab77b917 extends Twig_Template
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
                <h3 class=\"panel-title\">Авторизация пользователя</h3>
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
            echo "                Вы уже авторизированы!
                ";
        } else {
            // line 12
            echo "                <form action=\"\" method=\"post\" accept-charset=\"utf-8\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></span>
                        <input type=\"text\" class=\"form-control noborder\" required name=\"username\" value=\"";
            // line 15
            if (isset($context["regData"])) { $_regData_ = $context["regData"]; } else { $_regData_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_regData_, "login", array()), "html", null, true);
            echo "\" placeholder=\"Логин\">
                    </div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock\"></span></span>
                        <input type=\"password\" class=\"form-control noborder\" required name=\"password\" value=\"\" placeholder=\"Введите пароль\">
                    </div>
                    <input type=\"hidden\" name=\"session_id\" value=\"";
            // line 21
            if (isset($context["regData"])) { $_regData_ = $context["regData"]; } else { $_regData_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_regData_, "sid", array()), "html", null, true);
            echo "\" />
                    <p><input type=\"submit\" class=\"btn btn-default btn-block\" name=\"do_login\" value=\"Войти &rarr;\"/></p>
                </form>
                ";
        }
        // line 25
        echo "                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "users/login_form.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 25,  55 => 21,  45 => 15,  40 => 12,  36 => 10,  33 => 9,  28 => 8,  19 => 1,);
    }
}
