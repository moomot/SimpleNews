<?php

/* news/news_add.php */
class __TwigTemplate_48a3423e78439f45b9dd1e1e06f8528972a50d329fd2ad822d4f54eddbf64459 extends Twig_Template
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
                <h3 class=\"panel-title\">Добавление новости</h3>
            </div>
            <div class=\"panel-body\">
                ";
        // line 8
        if (isset($context["statusMsg"])) { $_statusMsg_ = $context["statusMsg"]; } else { $_statusMsg_ = null; }
        echo $this->getAttribute($_statusMsg_, "msg", array());
        echo "
                ";
        // line 9
        if (isset($context["statusMsg"])) { $_statusMsg_ = $context["statusMsg"]; } else { $_statusMsg_ = null; }
        if (($this->getAttribute($_statusMsg_, "status", array()) == "error")) {
            // line 10
            echo "                <form action=\"\" method=\"post\" accept-charset=\"utf-8\" enctype=\"multipart/form-data\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-star\"></span></span>
                        <input type=\"text\" class=\"form-control noborder\" required name=\"title\" value=\"";
            // line 13
            if (isset($context["regData"])) { $_regData_ = $context["regData"]; } else { $_regData_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_regData_, "title", array()), "html", null, true);
            echo "\" placeholder=\"Заголовок новости\">
                    </div>
                    <div class=\"input-group fullWidth\">
                        <h4><span class=\"label label-default\" style=\"font-weight: normal;\">Краткое описание новости (обязательное)</span></h4>
                        <textarea class=\"form-control\" required name=\"shortDescription\" placeholder=\"Краткое описание новости\" cols=\"30\" rows=\"7\" >";
            // line 17
            if (isset($context["regData"])) { $_regData_ = $context["regData"]; } else { $_regData_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_regData_, "shortDescription", array()), "html", null, true);
            echo "</textarea>
                    </div>
                    <div class=\"input-group fullWidth\">
                        <h4><span class=\"label label-default\" style=\"font-weight: normal;\">Полное описание новости (обязательное)</span></h4>
                        <textarea class=\"form-control\" required name=\"fullDescription\" placeholder=\"Полное описание новости\" cols=\"30\" rows=\"15\" >";
            // line 21
            if (isset($context["regData"])) { $_regData_ = $context["regData"]; } else { $_regData_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_regData_, "fullDescription", array()), "html", null, true);
            echo "</textarea>
                    </div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\">Изображение</span>
                        <input class=\"form-control noborder\"  type=\"FILE\" required name=\"imgupload\">
                    </div>
                    <p><input type=\"submit\" class=\"btn btn-default btn-block\" name=\"news_add\" value=\"Добавить &rarr;\"/></p>
                </form>
                ";
        }
        // line 30
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "news/news_add.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 30,  57 => 21,  49 => 17,  41 => 13,  36 => 10,  33 => 9,  28 => 8,  19 => 1,);
    }
}
