<?php

/* online_panel.html */
class __TwigTemplate_032ebc85f1d30c02a7bd598e9eb7b7c2cb2a3a104c6401962b1d2a863becfe02 extends Twig_Template
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
        echo "<div class=\"panel panel-info\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\"><i class=\"fa fa-globe\"></i> ";
        // line 3
        if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
            echo "</a>";
        } else {
            echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
        }
        echo "</h3>
\t</div>
\t<div class=\"panel-body\">
\t\t";
        // line 6
        // line 7
        echo "\t\t";
        echo (isset($context["TOTAL_USERS_ONLINE"]) ? $context["TOTAL_USERS_ONLINE"] : null);
        echo " (";
        echo $this->env->getExtension('phpbb')->lang("ONLINE_EXPLAIN");
        echo ")<br />";
        echo (isset($context["RECORD_USERS"]) ? $context["RECORD_USERS"] : null);
        echo "<br /> 
\t\t<hr />
\t\t";
        // line 9
        echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
        echo "
\t\t";
        // line 10
        if ((isset($context["LEGEND"]) ? $context["LEGEND"] : null)) {
            echo "<br /><em>";
            echo $this->env->getExtension('phpbb')->lang("LEGEND");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            echo (isset($context["LEGEND"]) ? $context["LEGEND"] : null);
            echo "</em>";
        }
        // line 11
        echo "\t\t";
        // line 12
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "online_panel.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  61 => 11,  52 => 10,  48 => 9,  38 => 7,  37 => 6,  23 => 3,  19 => 1,);
    }
}
