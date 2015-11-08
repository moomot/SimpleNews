<?php

/* content.php */
class __TwigTemplate_1230a5cd7913bade7bde4de79f51bf3eaf4b41272ccf15f4539265ec3a18797e extends Twig_Template
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
        if (isset($context["newsItems"])) { $_newsItems_ = $context["newsItems"]; } else { $_newsItems_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_newsItems_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><a href=\"";
            // line 4
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
            echo "/news/";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "url", array()), "html", null, true);
            echo "\">";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title", array()), "html", null, true);
            echo "</a></h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                ";
            // line 9
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "thumbnail", array()) == "")) {
                // line 10
                echo "                <img  class=\"thumbnail\" src=\"";
                if (isset($context["imgPath"])) { $_imgPath_ = $context["imgPath"]; } else { $_imgPath_ = null; }
                echo twig_escape_filter($this->env, $_imgPath_, "html", null, true);
                echo "/noposter.jpg\" alt=\"NOPOSTER\" width=\"150\" height=\"150\" />
                ";
            } else {
                // line 12
                echo "                <img  class=\"thumbnail\" src=\"";
                if (isset($context["imgPath"])) { $_imgPath_ = $context["imgPath"]; } else { $_imgPath_ = null; }
                echo twig_escape_filter($this->env, $_imgPath_, "html", null, true);
                echo "/";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "thumbnail", array()), "html", null, true);
                echo "\" alt=\"poster\" width=\"150\" height=\"150\" />
                ";
            }
            // line 14
            echo "            </div>
            <div class=\"col-md-9\" style=\"margin-left: -40px\">";
            // line 15
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "shortDescription", array()), "html", null, true);
            echo "</div>
        </div>
        <p><a href=\"";
            // line 17
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
            echo "/news/";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "url", array()), "html", null, true);
            echo "\" class=\"btn btn-default pull-right\" role=\"button\">Подробнее</a> </p>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "content.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  66 => 15,  63 => 14,  53 => 12,  46 => 10,  43 => 9,  28 => 4,  24 => 2,  19 => 1,);
    }
}
