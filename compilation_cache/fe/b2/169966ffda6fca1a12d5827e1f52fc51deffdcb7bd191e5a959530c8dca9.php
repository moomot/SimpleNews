<?php

/* staticpages/static.php */
class __TwigTemplate_feb2169966ffda6fca1a12d5827e1f52fc51deffdcb7bd191e5a959530c8dca9 extends Twig_Template
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

        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
        // line 7
        if (isset($context["staticPage"])) { $_staticPage_ = $context["staticPage"]; } else { $_staticPage_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_staticPage_, "title", array()), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <p>";
        // line 10
        if (isset($context["staticPage"])) { $_staticPage_ = $context["staticPage"]; } else { $_staticPage_ = null; }
        echo $this->getAttribute($_staticPage_, "fullDescription", array());
        echo "</p>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "staticpages/static.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  27 => 7,  19 => 1,);
    }
}
