<?php

/* header.php */
class __TwigTemplate_0275d22b8db3efba6fadb9475e55bea6887f8c619dcd80f0ad5d363b2043df2e extends Twig_Template
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
        echo "<div class=\"container-fl\" style=\"border-bottom: 1px solid #cecece;margin-bottom: 10px;padding-bottom: 20px\">
<div class=\"text-center\"><img src=\"";
        // line 2
        if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
        echo twig_escape_filter($this->env, $_path_, "html", null, true);
        echo "/templates/default/images/logo.png\" alt=\"\" /></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "header.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
