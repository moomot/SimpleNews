<?php

/* 404.php */
class __TwigTemplate_82a0afaf8245d85fdbf0fc18f32598ec8c38ac03ff5b5b8daf3824fc01c910a2 extends Twig_Template
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
        <div class=\"alert alert-danger alert-dismissable\">
            <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
            Страница не найдена!
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "404.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
