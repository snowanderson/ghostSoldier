<?php

/* site_menu.html */
class __TwigTemplate_d0e188907f56103bf99fa29707ec7f81170caf8614247a7a3befd6e166887a78 extends Twig_Template
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
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<li class=\"site-menu\"><a href=\"";
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("INDEX");
            echo "</a></li>";
        }
        // line 2
        if ((isset($context["ANAMI_TCP"]) ? $context["ANAMI_TCP"] : null)) {
            // line 3
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "mame", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["mame"]) {
                // line 4
                echo "\t\t<li class=\"site-menu\">
\t\t\t<a href=\"";
                // line 5
                echo $this->getAttribute($context["mame"], "MENU_URL", array());
                echo "\">";
                echo $this->getAttribute($context["mame"], "MENU_NAME", array());
                echo "</a>
\t\t</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mame'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 9
        // line 10
        echo "<li ";
        if ( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            echo "data-skip-responsive=\"true\"";
        } else {
            echo "data-last-responsive=\"true\"";
        }
        echo " class=\"site-menu\"><a href=\"";
        echo (isset($context["U_FAQ"]) ? $context["U_FAQ"] : null);
        echo "\" rel=\"help\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("FAQ_EXPLAIN");
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("FAQ");
        echo "</a></li>
";
        // line 11
    }

    public function getTemplateName()
    {
        return "site_menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  50 => 10,  49 => 9,  37 => 5,  34 => 4,  29 => 3,  27 => 2,  19 => 1,);
    }
}
