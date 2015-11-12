<?php

/* login_panel.html */
class __TwigTemplate_e68a982aba046477f99e425270f40f1351650009c0c566b162db0f63584398eb extends Twig_Template
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
\t\t<h3 class=\"panel-title\"><i class=\"fa fa-user\"></i> ";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
        echo "</h3>
\t</div>\t
\t<div class=\"panel-body\">
\t\t<form method=\"post\" action=\"";
        // line 6
        echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
        echo "\" class=\"form-inline\" name=\"loginform\">
\t\t\t<div class=\"row mobile-fix\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"text\" placeholder=\"";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "\" tabindex=\"1\" name=\"username\" size=\"10\" class=\"form-control\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "\" style=\"width: 117px;\"/>
\t\t\t\t\t\t<input type=\"password\" placeholder=\"";
        // line 11
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo "\" tabindex=\"2\" name=\"password\" size=\"10\" class=\"form-control\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo "\" style=\"width: 117px;\" autocomplete=\"off\"/>
\t\t\t\t\t\t<span class=\"input-group-btn\" style=\"width: 0px;\">
\t\t\t\t\t\t\t";
        // line 13
        echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
        echo "
\t\t\t\t\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("LOGIN");
        echo "\" class=\"btn btn-primary\" />
\t\t\t\t\t\t</span>\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 20
        if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
            // line 21
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
            echo "\" class=\"btn btn-primary btn-labeled\"><span class=\"btn-label\"><i class=\"glyphicon glyphicon glyphicon-user\"></i></span>";
            echo $this->env->getExtension('phpbb')->lang("REGISTER");
            echo "</a>
\t\t\t\t\t\t";
        } else {
            // line 23
            echo "\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-labeled disabled\"><span class=\"btn-label\"><i class=\"glyphicon glyphicon glyphicon-user\"></i></span>";
            echo $this->env->getExtension('phpbb')->lang("REGISTER");
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 28
        if ((isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null)) {
            // line 29
            echo "\t\t\t\t<a href=\"";
            echo (isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("FORGOT_PASS");
            echo "</a>
\t\t\t";
        }
        // line 31
        echo "\t\t\t";
        if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
            // line 32
            echo "\t\t\t\t<span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
            echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
            echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\"/></label>
\t\t\t";
        }
        // line 34
        echo "\t\t\t";
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t</form>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "login_panel.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  96 => 32,  93 => 31,  85 => 29,  83 => 28,  78 => 25,  72 => 23,  64 => 21,  62 => 20,  53 => 14,  49 => 13,  42 => 11,  36 => 10,  29 => 6,  23 => 3,  19 => 1,);
    }
}
