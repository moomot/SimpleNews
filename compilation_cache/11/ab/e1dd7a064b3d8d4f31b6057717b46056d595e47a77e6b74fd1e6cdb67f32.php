<?php

/* pages.php */
class __TwigTemplate_11abe1dd7a064b3d8d4f31b6057717b46056d595e47a77e6b74fd1e6cdb67f32 extends Twig_Template
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
        echo "<nav class=\"text-center\">
    <ul class=\"pagination\">
        <li>
            <a href=\"#\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">&laquo;</span>
            </a>
        </li>
        ";
        // line 8
        if (isset($context["pageSwitcher"])) { $_pageSwitcher_ = $context["pageSwitcher"]; } else { $_pageSwitcher_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($_pageSwitcher_, "pagesNum", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 9
            echo "        <li><a href=\"";
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
            echo "/news/page";
            if (isset($context["x"])) { $_x_ = $context["x"]; } else { $_x_ = null; }
            echo twig_escape_filter($this->env, $_x_, "html", null, true);
            echo "\">";
            if (isset($context["x"])) { $_x_ = $context["x"]; } else { $_x_ = null; }
            echo twig_escape_filter($this->env, $_x_, "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        <li>
            <a href=\"#\" aria-label=\"Next\">
                <span aria-hidden=\"true\">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "pages.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  33 => 9,  28 => 8,  19 => 1,);
    }
}
