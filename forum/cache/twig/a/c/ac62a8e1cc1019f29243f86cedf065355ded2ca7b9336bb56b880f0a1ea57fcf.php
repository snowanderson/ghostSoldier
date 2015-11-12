<?php

/* navbar_footer.html */
class __TwigTemplate_ac62a8e1cc1019f29243f86cedf065355ded2ca7b9336bb56b880f0a1ea57fcf extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-fixed-bottom hidden-sm hidden-xs\" id=\"footer-nav\">
\t<div class=\"container-fluid\">
\t\t<div class=\"collapse navbar-collapse\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t<li><a href=\"";
        // line 5
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" accesskey=\"h\"><i class=\"fa fa-home\"></i></a></li>
\t\t\t\t";
        // line 6
        if ((isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null);
            echo "\"><i class=\"fa fa-envelope\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_US");
            echo "</a></li>";
        }
        // line 7
        echo "\t\t\t\t";
        if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
            echo "\"><i class=\"fa fa-users\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
            echo "</a></li>";
        }
        // line 8
        echo "\t\t\t\t";
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_DELETE_COOKIES"]) ? $context["U_DELETE_COOKIES"] : null);
            echo "\"><i class=\"fa fa-trash-o\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("DELETE_COOKIES");
            echo "</a> </li> ";
        }
        // line 9
        echo "\t\t\t\t<li><p class=\"navbar-text\">";
        echo (isset($context["S_TIMEZONE"]) ? $context["S_TIMEZONE"] : null);
        echo "</p></li>
\t\t\t</ul>
\t\t\t<ul class=\"nav navbar-nav navbar-right\"><li><p class=\"navbar-text\" id=\"copyright\">Design";
        // line 11
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " <a href=\"http://zoker.me/go/comboot\" target=\"_blank\">ComBoot</a> by <a href=\"http://www.florian-gareis.de\" target=\"_blank\" id=\"author-name\">Florian Gareis</a></p></li></ul>
\t\t</div>
\t</div>
</nav>
<a id=\"back-to-top\" href=\"#\" class=\"btn btn-primary\" role=\"button\" title=\"";
        // line 15
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "BACK_TO_TOP_TOOLTIP", array());
        echo "\" data-toggle=\"tooltip\" data-placement=\"left\"><i class=\"fa fa-chevron-up\"></i></a>";
    }

    public function getTemplateName()
    {
        return "navbar_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  61 => 11,  55 => 9,  46 => 8,  37 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
