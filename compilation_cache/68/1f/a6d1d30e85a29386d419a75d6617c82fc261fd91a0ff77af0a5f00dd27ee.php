<?php

/* includes.php */
class __TwigTemplate_681fa6d1d30e85a29386d419a75d6617c82fc261fd91a0ff77af0a5f00dd27ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'includes' => array($this, 'block_includes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('includes', $context, $blocks);
    }

    public function block_includes($context, array $blocks = array())
    {
        // line 2
        echo "<meta charset=\"UTF-8\">
<title> ";
        // line 3
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "</title>
<meta name=\"description\" content=\"";
        // line 4
        if (isset($context["description"])) { $_description_ = $context["description"]; } else { $_description_ = null; }
        echo twig_escape_filter($this->env, $_description_, "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 5
        if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
        echo twig_escape_filter($this->env, $_path_, "html", null, true);
        echo "/templates/default/css/theme.min.css\"/>
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
<script src=\"";
        // line 8
        if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
        echo twig_escape_filter($this->env, $_path_, "html", null, true);
        echo "/engine/js/bootstrap.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "includes.php";
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  49 => 7,  44 => 6,  39 => 5,  34 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
