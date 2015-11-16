<?php

/* index_body.html */
class __TwigTemplate_e148cf24d69a0ba071a6449e5dfdba10111ba4bca4bd7f16ab07b97a8a0dab9e extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div id=\"wrap-body\">
\t<div class=\"chunk-main\">

\t\t";
        // line 6
        if ( !(isset($context["ANAMI_TCP"]) ? $context["ANAMI_TCP"] : null)) {
            // line 7
            echo "\t\t\t";
            $location = "site_sidebar.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("site_sidebar.html", "index_body.html", 7)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 8
            echo "\t\t";
        } elseif ((isset($context["ANAMI_SIDEBAR"]) ? $context["ANAMI_SIDEBAR"] : null)) {
            // line 9
            echo "\t\t\t<div id=\"sidebar\">
\t\t\t\t";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "siba", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["siba"]) {
                // line 11
                echo "\t\t\t\t\t<div class=\"side-block\">
\t\t\t\t\t\t<h4 class=\"side-block-head\">";
                // line 12
                echo $this->getAttribute($context["siba"], "SIDEBAR_NAME", array());
                echo "</h4>
\t\t\t\t\t\t<div class=\"side-block-body\">";
                // line 13
                echo $this->getAttribute($context["siba"], "SIDEBAR_CONTENT", array());
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['siba'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t\t</div>
\t\t";
        }
        // line 18
        echo "
\t\t<div id=\"forumlist\">

\t\t\t<div id=\"forumlist-inner\">

\t\t\t\t";
        // line 23
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 23)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 24
        echo "
\t\t\t\t";
        // line 25
        // line 26
        echo "
\t\t\t</div>

\t\t</div>

\t</div>

\t";
        // line 33
        $location = "site_footer_area.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("site_footer_area.html", "index_body.html", 33)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 34
        echo "
</div>

";
        // line 37
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 37)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 37,  126 => 34,  114 => 33,  105 => 26,  104 => 25,  101 => 24,  89 => 23,  82 => 18,  78 => 16,  69 => 13,  65 => 12,  62 => 11,  58 => 10,  55 => 9,  52 => 8,  39 => 7,  37 => 6,  31 => 2,  19 => 1,);
    }
}
