<?php

/* config.html */
class __TwigTemplate_6904c4cf457928491758f4ee1c0c0baedfa158fecaf3692b5f11b37c86547b6c extends Twig_Template
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
        $value = 1;
        $context['definition']->set('BETA', $value);
        // line 2
        $value = 0;
        $context['definition']->set('THEME_FILE', $value);
        // line 3
        echo "
";
        // line 4
        $value = "ONLINE";
        $context['definition']->set('ONLINE_BADGE', $value);
        // line 5
        $value = "OFFLINE";
        $context['definition']->set('OFFLINE_BADGE', $value);
    }

    public function getTemplateName()
    {
        return "config.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
