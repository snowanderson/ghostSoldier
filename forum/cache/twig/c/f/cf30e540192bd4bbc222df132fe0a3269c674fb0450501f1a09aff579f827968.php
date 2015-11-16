<?php

/* site_footer_area.html */
class __TwigTemplate_cf30e540192bd4bbc222df132fe0a3269c674fb0450501f1a09aff579f827968 extends Twig_Template
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
        echo "<div id=\"site-footer-area\">
\t<div class=\"chunk\">

\t\t";
        // line 4
        // line 5
        echo "
\t\t";
        // line 6
        if ( !(isset($context["ANAMI_TCP"]) ? $context["ANAMI_TCP"] : null)) {
            // line 7
            echo "\t\t\t";
            if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
                // line 8
                echo "\t\t\t\t<div class=\"grid-3\">
\t\t\t\t\t";
                // line 9
                if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                    echo "<h3><a href=\"";
                    echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                    echo "</a></h3>";
                } else {
                    echo "<h3>";
                    echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                    echo "</h3>";
                }
                // line 10
                echo "\t\t\t\t\t<p>
\t\t\t\t\t\t";
                // line 11
                // line 12
                echo "\t\t\t\t\t\t";
                echo (isset($context["TOTAL_USERS_ONLINE"]) ? $context["TOTAL_USERS_ONLINE"] : null);
                echo " (";
                echo $this->env->getExtension('phpbb')->lang("ONLINE_EXPLAIN");
                echo ")<br />";
                echo (isset($context["RECORD_USERS"]) ? $context["RECORD_USERS"] : null);
                echo "<br /> <br />";
                echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
                echo "
\t\t\t\t\t\t";
                // line 13
                if ((isset($context["LEGEND"]) ? $context["LEGEND"] : null)) {
                    echo "<br />";
                    echo $this->env->getExtension('phpbb')->lang("LEGEND");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    echo (isset($context["LEGEND"]) ? $context["LEGEND"] : null);
                }
                // line 14
                echo "\t\t\t\t\t\t";
                // line 15
                echo "\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t";
            }
            // line 18
            echo "
\t\t\t";
            // line 19
            if (((isset($context["S_DISPLAY_BIRTHDAY_LIST"]) ? $context["S_DISPLAY_BIRTHDAY_LIST"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array())))) {
                // line 20
                echo "\t\t\t\t<div class=\"grid-3\">
\t\t\t\t\t<h3>";
                // line 21
                echo $this->env->getExtension('phpbb')->lang("BIRTHDAYS");
                echo "</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\t";
                // line 23
                // line 24
                echo "\t\t\t\t\t\t";
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
                // line 25
                echo "\t\t\t\t\t\t";
                // line 26
                echo "\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t";
            }
            // line 29
            echo "
\t\t\t";
            // line 30
            // line 31
            echo "
\t\t\t<div class=\"grid-3\">
\t\t\t\t<h5>About us</h5>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br /><br />Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
\t\t\t</div>
\t\t\t<div class=\"grid-3\">
\t\t\t\t<h5>You Must Know</h5>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Our Rules</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Frequently Asked Questions</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">BBCode example</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Lorem ipsum</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Welcome to phpBB3</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t";
        } else {
            // line 58
            echo "
\t\t\t";
            // line 59
            if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
                // line 60
                echo "\t\t\t\t<div";
                if ((isset($context["ANAMI_FOOTER"]) ? $context["ANAMI_FOOTER"] : null)) {
                    echo " class=\"grid-3\"";
                }
                echo ">
\t\t\t\t\t";
                // line 61
                if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                    echo "<h3><a href=\"";
                    echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                    echo "</a></h3>";
                } else {
                    echo "<h3>";
                    echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                    echo "</h3>";
                }
                // line 62
                echo "\t\t\t\t\t<p>
\t\t\t\t\t\t";
                // line 63
                // line 64
                echo "\t\t\t\t\t\t";
                echo (isset($context["TOTAL_USERS_ONLINE"]) ? $context["TOTAL_USERS_ONLINE"] : null);
                echo " (";
                echo $this->env->getExtension('phpbb')->lang("ONLINE_EXPLAIN");
                echo ")<br />";
                echo (isset($context["RECORD_USERS"]) ? $context["RECORD_USERS"] : null);
                echo "<br /> <br />";
                echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
                echo "
\t\t\t\t\t\t";
                // line 65
                if ((isset($context["LEGEND"]) ? $context["LEGEND"] : null)) {
                    echo "<br />";
                    echo $this->env->getExtension('phpbb')->lang("LEGEND");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    echo (isset($context["LEGEND"]) ? $context["LEGEND"] : null);
                }
                // line 66
                echo "\t\t\t\t\t\t";
                // line 67
                echo "\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t";
            }
            // line 70
            echo "
\t\t\t";
            // line 71
            if ((isset($context["ANAMI_FOOTER"]) ? $context["ANAMI_FOOTER"] : null)) {
                // line 72
                echo "\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "fubl", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["fubl"]) {
                    // line 73
                    echo "\t\t\t\t\t<div class=\"grid-3\">
\t\t\t\t\t\t<h5>";
                    // line 74
                    echo $this->getAttribute($context["fubl"], "FOOTER_NAME", array());
                    echo "</h5>
\t\t\t\t\t\t";
                    // line 75
                    echo $this->getAttribute($context["fubl"], "FOOTER_CONTENT", array());
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fubl'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "\t\t\t";
            }
            // line 79
            echo "
\t\t";
        }
        // line 81
        echo "
\t</div>

\t<div class=\"chunk\">

\t\t";
        // line 86
        if ((isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null)) {
            // line 87
            echo "\t\t\t<div class=\"statistics-list\">
\t\t\t\t<h3>";
            // line 88
            echo $this->env->getExtension('phpbb')->lang("STATISTICS");
            echo "</h3>
\t\t\t\t<div>
\t\t\t\t\t";
            // line 90
            // line 91
            echo "\t\t\t\t\t<div><span>";
            echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
            echo "</span></div>
\t\t\t\t\t<div><span>";
            // line 92
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo "</span></div>
\t\t\t\t\t<div><span>";
            // line 93
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo "</span></div>
\t\t\t\t\t<div><span>";
            // line 94
            echo (isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null);
            echo "</span></div>
\t\t\t\t\t";
            // line 95
            // line 96
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 99
        echo "
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "site_footer_area.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 99,  281 => 96,  280 => 95,  276 => 94,  272 => 93,  268 => 92,  263 => 91,  262 => 90,  257 => 88,  254 => 87,  252 => 86,  245 => 81,  241 => 79,  238 => 78,  229 => 75,  225 => 74,  222 => 73,  217 => 72,  215 => 71,  212 => 70,  207 => 67,  205 => 66,  197 => 65,  186 => 64,  185 => 63,  182 => 62,  170 => 61,  163 => 60,  161 => 59,  158 => 58,  129 => 31,  128 => 30,  125 => 29,  120 => 26,  118 => 25,  92 => 24,  91 => 23,  86 => 21,  83 => 20,  81 => 19,  78 => 18,  73 => 15,  71 => 14,  63 => 13,  52 => 12,  51 => 11,  48 => 10,  36 => 9,  33 => 8,  30 => 7,  28 => 6,  25 => 5,  24 => 4,  19 => 1,);
    }
}
