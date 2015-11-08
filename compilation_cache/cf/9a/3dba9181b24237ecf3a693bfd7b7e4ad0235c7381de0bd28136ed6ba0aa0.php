<?php

/* sysVariables.php */
class __TwigTemplate_cf9a3dba9181b24237ecf3a693bfd7b7e4ad0235c7381de0bd28136ed6ba0aa0 extends Twig_Template
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
        echo "<?
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 02.05.2015
 * Time: 1:30
 */
require_once(\"../../config.php\");
//include(\"./engine/SimpleParser.php\");

\$result = mysql_query('SELECT * FROM settings');
if(!empty(\$result)) {
    \$row = mysql_fetch_array(\$result);
    extract(\$row);
}
?>
<meta charset=\"UTF-8\">
<title><?echo \$siteName;?></title>
<meta name=\"description\" content=\"{siteDescription}\">
<link rel=\"stylesheet\" href=\"{path}/templates/default/css/theme.min.css\"/>
<script type=\"text/javascript\" src=\"{path}/engine/js/jquery-1.11.1.min.js\"></script>
<script src=\"{path}/engine/js/admin_scripts.js\"></script>
<script src=\"{path}/engine/js/bootstrap.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "sysVariables.php";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }
}
