<?php

/* navbar.php */
class __TwigTemplate_d9d7130ac2710964c21267e708e397c8983999f50a981b019f94a5c4ab4f5270 extends Twig_Template
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
        if (isset($context["logged"])) { $_logged_ = $context["logged"]; } else { $_logged_ = null; }
        if ($_logged_) {
            // line 2
            echo "<div class=\"navbar navbar-default navbar-inverse navbar-static-top nomargin\">
    <div class=\"container\">
        <div class=\"navbar-left\">
            <div class=\"hello\">Здравствуй, ";
            // line 5
            if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
            echo twig_escape_filter($this->env, $_currentUser_, "html", null, true);
            echo "</div>
        </div>
        <div class=\"navbar-right\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
            // line 9
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
            echo "/user/";
            if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
            echo twig_escape_filter($this->env, $_currentUser_, "html", null, true);
            echo "\">Мой профиль</a></li>
                <li><a href=\"";
            // line 10
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
            echo "/news_add\">Добавить новость</a></li>
                <li><a href=\"";
            // line 11
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
            echo "/news_list\">Добавленные новости</a></li>
                <li><a href=\"#\">Статистика</a></li>
                <li><a href=\"";
            // line 13
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
            echo "/logout\">Выход</a></li>
            </ul>
        </div>
    </div>
</div>
";
        }
        // line 19
        echo "<nav class=\"navbar navbar-default\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 32
        if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
        echo twig_escape_filter($this->env, $_path_, "html", null, true);
        echo "\">Главная <span class=\"sr-only\">(current)</span></a></li>
                <li><a href=\"";
        // line 33
        if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
        echo twig_escape_filter($this->env, $_path_, "html", null, true);
        echo "/news\">Новости</a></li>
                <li><a href=\"";
        // line 34
        if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
        echo twig_escape_filter($this->env, $_path_, "html", null, true);
        echo "/pages/kontakty\">Контакты</a></li>
                ";
        // line 35
        if (isset($context["logged"])) { $_logged_ = $context["logged"]; } else { $_logged_ = null; }
        if (($_logged_ == false)) {
            // line 36
            echo "                <li><a href=\"";
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
            echo "/register\">Регистрация</a></li>
                <li><a href=\"";
            // line 37
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
            echo "/login\">Авторизация</a></li>
                ";
        }
        // line 39
        echo "                <!--<li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">One more separated link</a></li>
                    </ul>
                </li>-->
            </ul>
            <form class=\"navbar-form navbar-right\" action=\"search\" role=\"search\" method=\"POST\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Слово для поиска\" name=\"searchQuery\">
                </div>
\t\t\t\t<input type=\"submit\" class=\"btn btn-default\" name=\"find\" value=\"Найти\" />
            </form>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "navbar.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 39,  103 => 37,  97 => 36,  94 => 35,  89 => 34,  84 => 33,  79 => 32,  64 => 19,  54 => 13,  48 => 11,  43 => 10,  35 => 9,  27 => 5,  22 => 2,  19 => 1,);
    }
}
