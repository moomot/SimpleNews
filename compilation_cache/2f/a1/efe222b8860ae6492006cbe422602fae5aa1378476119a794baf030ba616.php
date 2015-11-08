<?php

/* includes.php */
class __TwigTemplate_2fa1efe222b8860ae6492006cbe422602fae5aa1378476119a794baf030ba616 extends Twig_Template
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
        echo "<meta charset=\"UTF-8\">
<title> ";
        // line 2
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "</title>
<meta name=\"description\" content=\"";
        // line 3
        if (isset($context["description"])) { $_description_ = $context["description"]; } else { $_description_ = null; }
        echo twig_escape_filter($this->env, $_description_, "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 4
        if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
        echo twig_escape_filter($this->env, $_path_, "html", null, true);
        echo "/templates/admin/css/bootstrap.css\"/>
<link rel=\"stylesheet\" href=\"";
        // line 5
        if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
        echo twig_escape_filter($this->env, $_path_, "html", null, true);
        echo "/templates/default/css/styles.css\"/>
<script type=\"text/javascript\" src=\"";
        // line 6
        if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
        echo twig_escape_filter($this->env, $_path_, "html", null, true);
        echo "/engine/js/jquery-1.11.1.min.js\"></script>
<script src=\"";
        // line 7
        if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
        echo twig_escape_filter($this->env, $_path_, "html", null, true);
        echo "/engine/js/admin_scripts.js\"></script>
";
        // line 8
        if (isset($context["sysHeaders"])) { $_sysHeaders_ = $context["sysHeaders"]; } else { $_sysHeaders_ = null; }
        echo $_sysHeaders_;
        echo "
";
    }

    public function getTemplateName()
    {
        return "includes.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  47 => 7,  42 => 6,  37 => 5,  32 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }
}
