<?php

/* informerByDate.php */
class __TwigTemplate_c52a368d89f33958b0a58c301d5816a5f3d4ff9db5b3c2e7ceed7701f5315708 extends Twig_Template
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
        echo "
    <div class=\"container\">
        <div class=\"row\">
";
        // line 4
        if (isset($context["lastNewsByDate"])) { $_lastNewsByDate_ = $context["lastNewsByDate"]; } else { $_lastNewsByDate_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_lastNewsByDate_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "            <div class=\"col-sm-3 col-md-3\">
                <div class=\"thumbnail\">
                    <img  class=\"thumbnail\" src=\"";
            // line 7
            if (isset($context["imgPath"])) { $_imgPath_ = $context["imgPath"]; } else { $_imgPath_ = null; }
            echo twig_escape_filter($this->env, $_imgPath_, "html", null, true);
            echo "/";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "thumbnail", array()), "html", null, true);
            echo "\" alt=\"poster\" width=\"150\" height=\"150\" />
                    <div class=\"caption newsInformer\">
                        <h4>";
            // line 9
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title", array()), "html", null, true);
            echo "</h4>
                        <p>";
            // line 10
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "shortDescription", array()), "html", null, true);
            echo "</p>
                        <p><a href=\"news/";
            // line 11
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary pull-right\" role=\"button\">Подробнее</a> </p>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "informerByDate.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  52 => 11,  47 => 10,  42 => 9,  33 => 7,  29 => 5,  24 => 4,  19 => 1,);
    }
}
