<?php

/* search/search_main.php */
class __TwigTemplate_fde1e778eccb5893f696e68eaf68758d145b1f01b820675862335d47c0574f41 extends Twig_Template
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
                <h3 class=\"panel-title\">Найденные новости</h3>
            </div>
            <div class=\"panel-body\">
                <table class=\"table\">
                    <thead>
                    <th>Название</th>
                    <th>Дата</th>
                    </thead>
                    <tbody>
                                ";
        // line 14
        if (isset($context["userNews"])) { $_userNews_ = $context["userNews"]; } else { $_userNews_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_userNews_);
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 15
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 16
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo twig_escape_filter($this->env, $_path_, "html", null, true);
            echo "/news/";
            if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_items_, "url", array()), "html", null, true);
            echo "\">";
            if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_items_, "title", array()), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 17
            if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_items_, "date", array()), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<nav class=\"text-center\">
    <ul class=\"pagination\">
        <li>
            <a href=\"#\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">&laquo;</span>
            </a>
        </li>
        ";
        // line 35
        if (isset($context["pageSwitcher"])) { $_pageSwitcher_ = $context["pageSwitcher"]; } else { $_pageSwitcher_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($_pageSwitcher_, "pagesNum", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 36
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
        // line 38
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
        return "search/search_main.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 38,  85 => 36,  80 => 35,  63 => 20,  53 => 17,  42 => 16,  39 => 15,  34 => 14,  19 => 1,);
    }
}
