<?php

/* news/news_list.php */
class __TwigTemplate_24f5a88b56e084ee08313df87823109178ae76f2598da92cf844f4d9ce8b4588 extends Twig_Template
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
                <h3 class=\"panel-title\">Список новостей пользователя ";
        // line 5
        if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
        echo twig_escape_filter($this->env, $_currentUser_, "html", null, true);
        echo "</h3>
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
";
    }

    public function getTemplateName()
    {
        return "news/news_list.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  57 => 17,  46 => 16,  43 => 15,  38 => 14,  25 => 5,  19 => 1,);
    }
}
