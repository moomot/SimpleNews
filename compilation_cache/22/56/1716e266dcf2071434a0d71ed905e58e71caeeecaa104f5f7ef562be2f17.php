<?php

/* news/informerByDate.php */
class __TwigTemplate_22561716e266dcf2071434a0d71ed905e58e71caeeecaa104f5f7ef562be2f17 extends Twig_Template
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
";
        // line 3
        if (isset($context["lastNewsByDate"])) { $_lastNewsByDate_ = $context["lastNewsByDate"]; } else { $_lastNewsByDate_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_lastNewsByDate_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "            <div class=\"col-sm-3 col-md-3\">
                <div class=\"thumbnail\">
                    ";
            // line 6
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "thumbnail", array()) == "")) {
                // line 7
                echo "                    <img  class=\"thumbnail\" src=\"";
                if (isset($context["imgPath"])) { $_imgPath_ = $context["imgPath"]; } else { $_imgPath_ = null; }
                echo twig_escape_filter($this->env, $_imgPath_, "html", null, true);
                echo "/noposter.jpg\" alt=\"NOPOSTER\" width=\"150\" height=\"150\" />
                    ";
            } else {
                // line 9
                echo "                    <img  class=\"thumbnail\" src=\"";
                if (isset($context["imgPath"])) { $_imgPath_ = $context["imgPath"]; } else { $_imgPath_ = null; }
                echo twig_escape_filter($this->env, $_imgPath_, "html", null, true);
                echo "/";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "thumbnail", array()), "html", null, true);
                echo "\" alt=\"poster\" width=\"150\" height=\"150\" />
                    ";
            }
            // line 11
            echo "                    <div class=\"caption newsInformer\">
                        <h4>";
            // line 12
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title", array()), "html", null, true);
            echo "</h4>
                        <p>";
            // line 13
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "shortDescription", array());
            echo "</p>
                        <p><a href=\"";
            // line 14
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
            echo "/news/";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "url", array()), "html", null, true);
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
        // line 21
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "news/informerByDate.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 21,  65 => 14,  60 => 13,  55 => 12,  52 => 11,  42 => 9,  35 => 7,  32 => 6,  28 => 4,  23 => 3,  19 => 1,);
    }
}
