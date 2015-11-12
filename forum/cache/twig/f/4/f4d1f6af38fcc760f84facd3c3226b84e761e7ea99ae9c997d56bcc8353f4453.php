<?php

/* index_body.html */
class __TwigTemplate_f4d1f6af38fcc760f84facd3c3226b84e761e7ea99ae9c997d56bcc8353f4453 extends Twig_Template
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
";
        // line 3
        if ((((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) || ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) || (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null))) {
            // line 4
            echo "\t<div class=\"row\">
\t\t";
            // line 5
            if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
                // line 6
                echo "\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t<a href=\"";
                // line 8
                echo (isset($context["U_SEARCH_UNANSWERED"]) ? $context["U_SEARCH_UNANSWERED"] : null);
                echo "\" class=\"btn btn-default btn-sm\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
                echo "</a>
\t\t\t\t\t";
                // line 9
                if ((isset($context["S_LOAD_UNREADS"]) ? $context["S_LOAD_UNREADS"] : null)) {
                    // line 10
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo (isset($context["U_SEARCH_UNREAD"]) ? $context["U_SEARCH_UNREAD"] : null);
                    echo "\" class=\"btn btn-default btn-sm\">";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_UNREAD");
                    echo "</a>
\t\t\t\t\t";
                }
                // line 12
                echo "\t\t\t\t\t";
                if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                    // line 13
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                    echo "\" class=\"btn btn-default btn-sm\">";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                    echo "</a>
\t\t\t\t\t";
                }
                // line 15
                echo "\t\t\t\t\t<a href=\"";
                echo (isset($context["U_SEARCH_ACTIVE_TOPICS"]) ? $context["U_SEARCH_ACTIVE_TOPICS"] : null);
                echo "\" class=\"btn btn-default btn-sm\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
                echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 19
            echo "\t\t";
            // line 20
            echo "\t\t";
            if ((isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null)) {
                // line 21
                echo "\t\t\t<div class=\"col-md-6 ";
                if ( !(isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
                    echo "col-md-offset-6";
                }
                echo "\">
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<a href=\"";
                // line 23
                echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
                echo "\" accesskey=\"m\" class=\"btn btn-default btn-sm\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_FORUMS_READ");
                echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 27
            echo "\t\t";
            // line 28
            echo "\t</div>
";
        }
        // line 30
        echo "
";
        // line 31
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 31)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 32
        echo "
";
        // line 33
        // line 34
        echo "
";
        // line 35
        if (( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 36
            echo "\t";
            $location = "login_panel.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("login_panel.html", "index_body.html", 36)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 38
        echo "
";
        // line 39
        // line 40
        echo "
";
        // line 41
        if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
            // line 42
            echo "\t";
            $location = "online_panel.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("online_panel.html", "index_body.html", 42)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 44
        echo "
";
        // line 45
        if (((isset($context["S_DISPLAY_BIRTHDAY_LIST"]) ? $context["S_DISPLAY_BIRTHDAY_LIST"] : null) && (isset($context["BIRTHDAY_LIST"]) ? $context["BIRTHDAY_LIST"] : null))) {
            // line 46
            echo "\t<div class=\"panel panel-info\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-gift\"></i> ";
            // line 48
            echo $this->env->getExtension('phpbb')->lang("BIRTHDAYS");
            echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<p>
\t\t\t\t";
            // line 52
            // line 53
            echo "\t\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()))) {
                echo $this->env->getExtension('phpbb')->lang("CONGRATULATIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <strong>";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo $this->getAttribute($context["birthdays"], "USERNAME", array());
                    if (($this->getAttribute($context["birthdays"], "AGE", array()) !== "")) {
                        echo " (";
                        echo $this->getAttribute($context["birthdays"], "AGE", array());
                        echo ")";
                    }
                    if ( !$this->getAttribute($context["birthdays"], "S_LAST_ROW", array())) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->env->getExtension('phpbb')->lang("NO_BIRTHDAYS");
            }
            // line 54
            echo "\t\t\t\t";
            // line 55
            echo "\t\t\t</p>
\t\t</div>
\t</div>
";
        }
        // line 59
        echo "
";
        // line 60
        if ((isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null)) {
            // line 61
            echo "\t<div class=\"panel panel-info\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-area-chart\"></i> ";
            // line 63
            echo $this->env->getExtension('phpbb')->lang("STATISTICS");
            echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<p>
\t\t\t\t";
            // line 67
            // line 68
            echo "\t\t\t\t";
            echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
            echo " &bull; ";
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo " &bull; ";
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo " &bull; ";
            echo (isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null);
            echo "
\t\t\t\t";
            // line 69
            // line 70
            echo "\t\t\t</p>
\t\t\t<hr/>
\t\t\t<p class=\"";
            // line 72
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo " time";
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                echo " pull-right";
            }
            echo "\">";
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                echo (isset($context["LAST_VISIT_DATE"]) ? $context["LAST_VISIT_DATE"] : null);
            } else {
                echo (isset($context["CURRENT_TIME"]) ? $context["CURRENT_TIME"] : null);
            }
            echo "</p>
\t\t\t";
            // line 73
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                echo "<p class=\"pull-left time\">";
                echo (isset($context["CURRENT_TIME"]) ? $context["CURRENT_TIME"] : null);
                echo "</p>";
            }
            // line 74
            echo "\t\t</div>
\t</div>
";
        }
        // line 77
        echo "
";
        // line 78
        // line 79
        echo "
";
        // line 80
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 80)->display($context);
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
        return array (  287 => 80,  284 => 79,  283 => 78,  280 => 77,  275 => 74,  269 => 73,  255 => 72,  251 => 70,  250 => 69,  239 => 68,  238 => 67,  231 => 63,  227 => 61,  225 => 60,  222 => 59,  216 => 55,  214 => 54,  188 => 53,  187 => 52,  180 => 48,  176 => 46,  174 => 45,  171 => 44,  157 => 42,  155 => 41,  152 => 40,  151 => 39,  148 => 38,  134 => 36,  132 => 35,  129 => 34,  128 => 33,  125 => 32,  113 => 31,  110 => 30,  106 => 28,  104 => 27,  95 => 23,  87 => 21,  84 => 20,  82 => 19,  72 => 15,  64 => 13,  61 => 12,  53 => 10,  51 => 9,  45 => 8,  41 => 6,  39 => 5,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
