<?php

/* overall_header.html */
class __TwigTemplate_8564a5fac89d66703ebbdd45869cb2a3fdfa7e6cd0ecc2290a9c2b19bf6bf286 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo "\" lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 6
        echo (isset($context["META"]) ? $context["META"] : null);
        echo "
<title>";
        // line 7
        if ((isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null)) {
            echo "(";
            echo (isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null);
            echo ") ";
        }
        if (( !(isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) &&  !(isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo " - ";
        }
        if ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo " - ";
        } elseif ((isset($context["S_IN_UCP"]) ? $context["S_IN_UCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("UCP");
            echo " - ";
        }
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        if (((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) || (isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo " - ";
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        }
        echo "</title>

";
        // line 9
        if ((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null)) {
            // line 10
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_OVERALL"]) ? $context["S_ENABLE_FEEDS_OVERALL"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "\" />";
            }
            // line 11
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_NEWS"]) ? $context["S_ENABLE_FEEDS_NEWS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=news\" />";
            }
            // line 12
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_FORUMS"]) ? $context["S_ENABLE_FEEDS_FORUMS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=forums\" />";
            }
            // line 13
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS"]) ? $context["S_ENABLE_FEEDS_TOPICS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics\" />";
            }
            // line 14
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"]) ? $context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics_active\" />";
            }
            // line 15
            echo "\t";
            if (((isset($context["S_ENABLE_FEEDS_FORUM"]) ? $context["S_ENABLE_FEEDS_FORUM"] : null) && (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo " - ";
                echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "\" />";
            }
            // line 16
            echo "\t";
            if (((isset($context["S_ENABLE_FEEDS_TOPIC"]) ? $context["S_ENABLE_FEEDS_TOPIC"] : null) && (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " - ";
                echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "&amp;t=";
                echo (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null);
                echo "\" />";
            }
            // line 17
            echo "
\t";
            // line 18
            // line 19
            echo "
";
        }
        // line 21
        echo "
<!--[if IE]><link rel=\"shortcut icon\" href=\"";
        // line 22
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/images/favicon.ico\"><![endif]-->
<link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 23
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/images/apple-touch-icon-precomposed.gif\">
<link rel=\"icon\" href=\"";
        // line 24
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/images/favicon.gif\" />
<link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 25
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/images/favicon.ico\" />

";
        // line 27
        if ((isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null)) {
            // line 28
            echo "\t<link rel=\"canonical\" href=\"";
            echo (isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null);
            echo "\" />
";
        }
        // line 30
        echo "
<!--
\tphpBB style name: Anami
\tBased on style:   prosilver (this is the default phpBB3 style)
\tOriginal author:  Tom Beddard ( http://www.subBlue.com/ )
\tModified by:      Gramziu
-->

";
        // line 38
        if ( !(isset($context["ANAMI_TCP"]) ? $context["ANAMI_TCP"] : null)) {
            // line 39
            echo "\t<link href=\"//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek,vietnamese\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />
";
        } else {
            // line 41
            echo "\t<link href=\"//fonts.googleapis.com/css?family=";
            echo (isset($context["ANAMI_FONT_C"]) ? $context["ANAMI_FONT_C"] : null);
            echo ":300,400,600,700&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek,vietnamese\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />
";
        }
        // line 43
        echo "<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />

<link href=\"";
        // line 45
        echo (isset($context["T_STYLESHEET_LINK"]) ? $context["T_STYLESHEET_LINK"] : null);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />
<link href=\"";
        // line 46
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/colours.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />
\t<link rel=\"stylesheet\" href=\"http://yui.yahooapis.com/pure/0.6.0/pure-min.css\">
";
        // line 48
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('gramziu_anami', '__main__'));
        $this->env->loadTemplate('@gramziu_anami/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 49
        echo "
";
        // line 50
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS", array());
        echo "

";
        // line 52
        // line 53
        echo "
</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 55
        echo (isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null);
        echo " ";
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo " ";
        echo (isset($context["BODY_CLASS"]) ? $context["BODY_CLASS"] : null);
        echo "\">

";
        // line 57
        // line 58
        echo "
<div id=\"overall-wrap\">
\t<a id=\"top\" class=\"anchor\" accesskey=\"t\"></a>
\t<div id=\"wrap-head\">

\t\t<div id=\"site-header\">
\t\t\t<div class=\"chunk\">
\t\t\t\t<div id=\"site-logo\">
\t\t\t\t\t<a class=\"site-logo\" href=\"";
        // line 66
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
        } else {
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        }
        echo "\" title=\"";
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
        } else {
            echo $this->env->getExtension('phpbb')->lang("INDEX");
        }
        echo "\"></a>
\t\t\t\t\t<p class=\"skiplink\"><a href=\"#start_here\">";
        // line 67
        echo $this->env->getExtension('phpbb')->lang("SKIP");
        echo "</a></p>
\t\t\t\t</div>

\t\t\t\t";
        // line 70
        // line 71
        echo "
\t\t\t\t<ul id=\"site-menu\">
\t\t\t\t\t";
        // line 73
        $location = "site_menu.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("site_menu.html", "overall_header.html", 73)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 74
        echo "
\t\t\t\t\t";
        // line 75
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            echo "<li class=\"font-icon\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "\" role=\"menuitem\"><i class=\"fa fa-tachometer\"></i></a></li>";
        }
        // line 76
        echo "\t\t\t\t\t";
        if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
            echo "<li class=\"font-icon\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "\" role=\"menuitem\"><i class=\"fa fa-gavel\"></i></a></li>";
        }
        // line 77
        echo "
\t\t\t\t";
        // line 78
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 79
            echo "\t\t\t\t\t";
            if ((isset($context["S_DISPLAY_PM"]) ? $context["S_DISPLAY_PM"] : null)) {
                // line 80
                echo "\t\t\t\t\t\t<li class=\"font-icon rightside\" data-skip-responsive=\"true\">
\t\t\t\t\t\t\t<a href=\"";
                // line 81
                echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                echo "\" role=\"menuitem\">";
                if ((isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null)) {
                    echo "<span class=\"nav-count\">";
                    echo (isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null);
                }
                echo "<i class=\"fa fa-inbox\"></i>";
                if ((isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null)) {
                    echo "</span>";
                }
                echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 84
            echo "\t\t\t\t\t";
            if ((isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null)) {
                // line 85
                echo "\t\t\t\t\t\t<li class=\"font-icon dropdown-container rightside\" data-skip-responsive=\"true\">
\t\t\t\t\t\t\t<a href=\"";
                // line 86
                echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
                echo "\" id=\"notification_list_button\" class=\"dropdown-trigger\">";
                if ((isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null)) {
                    echo "<span class=\"nav-count\">";
                    echo (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null);
                }
                echo "<i class=\"fa fa-bell\"></i>";
                if ((isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null)) {
                    echo "</span>";
                }
                echo "</a>
\t\t\t\t\t\t\t";
                // line 87
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "overall_header.html", 87)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 88
                echo "\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 90
            echo "\t\t\t\t\t<li class=\"";
            if ( !(isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo "font-icon ";
            }
            echo "dropdown-container dropdown-";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo " rightside\" data-skip-responsive=\"true\">
\t\t\t\t\t\t";
            // line 91
            // line 92
            echo "\t\t\t\t\t\t<a href=\"";
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" id=\"header-avatar\" class=\"dropdown-trigger\">";
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
            } else {
                echo "<i class=\"fa fa-user\"></i>";
            }
            echo "</a>
\t\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t\t";
            // line 96
            if ((isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null)) {
                echo "<li class=\"small-icon icon-restore-permissions\"><a href=\"";
                echo (isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>";
            }
            // line 97
            echo "
\t\t\t\t\t\t\t\t";
            // line 98
            // line 99
            echo "
\t\t\t\t\t\t\t\t<li class=\"font-icon icon-ucp\"><a href=\"";
            // line 100
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "\" role=\"menuitem\"><i class=\"fa fa-wrench\"></i>";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"font-icon icon-profile\"><a href=\"";
            // line 101
            echo (isset($context["U_USER_PROFILE"]) ? $context["U_USER_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "\" role=\"menuitem\"><i class=\"fa fa-user\"></i>";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "</a></li>

\t\t\t\t\t\t\t\t";
            // line 103
            // line 104
            echo "
\t\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t\t<li class=\"font-icon icon-logout\"><a href=\"";
            // line 106
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\"><i class=\"fa fa-power-off\"></i>";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 109
            // line 110
            echo "\t\t\t\t\t</li>
\t\t\t\t";
        } else {
            // line 112
            echo "\t\t\t\t\t<li class=\"font-icon rightside\"  data-skip-responsive=\"true\"><a href=\"";
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\"><i class=\"fa fa-power-off\"></i><span class=\"nav-rh-2\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</span></a></li>
\t\t\t\t\t";
            // line 113
            if (((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null) &&  !((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null) || (isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null)))) {
                // line 114
                echo "\t\t\t\t\t<li class=\"font-icon rightside\" data-skip-responsive=\"true\"><a href=\"";
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-pencil-square-o\"></i><span class=\"nav-rh-2\">";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</span></a></li>
\t\t\t\t\t";
            }
            // line 116
            echo "\t\t\t\t\t";
            // line 117
            echo "\t\t\t\t";
        }
        // line 118
        echo "
\t\t\t\t";
        // line 119
        // line 120
        echo "
\t\t\t\t";
        // line 121
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            // line 122
            echo "\t\t\t\t\t<li class=\"font-icon dropdown-container\" data-skip-responsive=\"true\">
\t\t\t\t\t\t";
            // line 123
            // line 124
            echo "\t\t\t\t\t\t<a href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" class=\"dropdown-trigger\"><i class=\"fa fa-search\"></i></a>
\t\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t\t<div id=\"site-search\" class=\"dropdown-contents\">
\t\t\t\t\t\t\t\t<form action=\"";
            // line 128
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" method=\"get\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<input name=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
            // line 130
            echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
            echo "\" size=\"20\" value=\"";
            echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
            echo "\" placeholder=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\" /><button type=\"submit\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\"><i class=\"fa fa-search\"></i></button>";
            echo (isset($context["S_SEARCH_HIDDEN_FIELDS"]) ? $context["S_SEARCH_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 135
            // line 136
            echo "\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 138
        echo "
\t\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t</div>

\t\t<div id=\"site-nav\" role=\"navigation\">
\t\t\t<div class=\"chunk\">
\t\t\t\t<ul class=\"site-nav\" role=\"menubar\">

\t\t\t\t\t";
        // line 149
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 150
        echo "\t\t\t\t\t";
        // line 151
        echo "\t\t\t\t\t<li class=\"breadcrumbs\">
\t\t\t\t\t\t";
        // line 152
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<span class=\"crumb\"><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo " data-navbar-reference=\"home\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</a></span>";
        }
        // line 153
        echo "\t\t\t\t\t\t";
        // line 154
        echo "\t\t\t\t\t\t<span class=\"crumb\"><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" accesskey=\"h\"";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
        echo " data-navbar-reference=\"index\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</a></span>
\t\t\t\t\t\t";
        // line 155
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 156
            echo "\t\t\t\t\t\t\t";
            // line 157
            echo "\t\t\t\t\t\t\t<span class=\"crumb\"><a href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo ">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</a></span>
\t\t\t\t\t\t\t";
            // line 158
            // line 159
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "\t\t\t\t\t\t";
        // line 161
        echo "\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 162
        // line 163
        echo "
\t\t\t\t\t<li class=\"font-icon responsive-menu dropdown-container";
        // line 164
        if (( !(isset($context["S_DISPLAY_QUICK_LINKS"]) ? $context["S_DISPLAY_QUICK_LINKS"] : null) &&  !(isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null))) {
            echo " hidden";
        }
        echo " rightside\" data-skip-responsive=\"true\">
\t\t\t\t\t\t<a href=\"#\" class=\"responsive-menu-link dropdown-trigger\"><i class=\"fa fa-bars\"></i></a>
\t\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t\t";
        // line 169
        // line 170
        echo "
\t\t\t\t\t\t\t\t";
        // line 171
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            // line 172
            echo "\t\t\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t\t\t";
            // line 173
            if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
                // line 174
                echo "\t\t\t\t\t\t\t\t\t\t<li class=\"font-icon icon-search-self\"><a href=\"";
                echo (isset($context["U_SEARCH_SELF"]) ? $context["U_SEARCH_SELF"] : null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-history\"></i>";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_SELF");
                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 176
            echo "\t\t\t\t\t\t\t\t\t";
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                // line 177
                echo "\t\t\t\t\t\t\t\t\t\t<li class=\"font-icon icon-search-new\"><a href=\"";
                echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-file-text\"></i>";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 179
            echo "\t\t\t\t\t\t\t\t\t";
            if ((isset($context["S_LOAD_UNREADS"]) ? $context["S_LOAD_UNREADS"] : null)) {
                echo " 
\t\t\t\t\t\t\t\t\t\t<li class=\"font-icon icon-search-unread\"><a href=\"";
                // line 180
                echo (isset($context["U_SEARCH_UNREAD"]) ? $context["U_SEARCH_UNREAD"] : null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-file\"></i>";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_UNREAD");
                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 182
            echo "\t\t\t\t\t\t\t\t\t<li class=\"font-icon icon-search-unanswered\"><a href=\"";
            echo (isset($context["U_SEARCH_UNANSWERED"]) ? $context["U_SEARCH_UNANSWERED"] : null);
            echo "\" role=\"menuitem\"><i class=\"fa fa-file-o\"></i>";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"font-icon icon-search-active\"><a href=\"";
            // line 183
            echo (isset($context["U_SEARCH_ACTIVE_TOPICS"]) ? $context["U_SEARCH_ACTIVE_TOPICS"] : null);
            echo "\" role=\"menuitem\"><i class=\"fa fa-fire\"></i>";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        }
        // line 185
        echo "\t\t\t\t\t\t\t\t<li class=\"separator site-menu\"></li>

\t\t\t\t\t\t\t\t";
        // line 187
        $location = "site_menu.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("site_menu.html", "overall_header.html", 187)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 188
        echo "
                                ";
        // line 189
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            // line 190
            echo "                                    <li class=\"vp-items font-icon\">
                                        <a href=\"";
            // line 191
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\"><i class=\"fa fa-search\"></i>";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</a>
                                    </li>
                                ";
        }
        // line 194
        echo "
                                ";
        // line 195
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            echo "<li class=\"vp-items font-icon\"><a href=\"";
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "\" role=\"menuitem\"><i class=\"fa fa-tachometer\"></i>";
            echo $this->env->getExtension('phpbb')->lang("ACP_SHORT");
            echo "</a></li>";
        }
        // line 196
        echo "                                ";
        if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
            echo "<li class=\"vp-items font-icon\"><a href=\"";
            echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "\" role=\"menuitem\"><i class=\"fa fa-gavel\"></i>";
            echo $this->env->getExtension('phpbb')->lang("MCP_SHORT");
            echo "</a></li>";
        }
        // line 197
        echo "
                                ";
        // line 198
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 199
            echo "                                    ";
            if ((isset($context["S_DISPLAY_PM"]) ? $context["S_DISPLAY_PM"] : null)) {
                // line 200
                echo "                                        <li class=\"vp-items font-icon\">
                                            <a href=\"";
                // line 201
                echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-inbox\"></i>";
                echo $this->env->getExtension('phpbb')->lang("PRIVATE_MESSAGES");
                echo "</a>
                                        </li>
                                    ";
            }
            // line 204
            echo "
                                    ";
            // line 205
            if ((isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null)) {
                // line 206
                echo "                                        <li class=\"vp-items font-icon\">
                                            <a href=\"";
                // line 207
                echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
                echo "\"><i class=\"fa fa-bell\"></i>";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo "</a>
                                        </li>
                                    ";
            }
            // line 210
            echo "
                                    <li class=\"vp-items font-icon\">
                                        <a href=\"";
            // line 212
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" id=\"header-avatar\" class=\"dropdown-trigger\"><i class=\"fa fa-wrench\"></i>";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "</a>
                                    </li>

                                    <li class=\"vp-items font-icon\">
                                        <a href=\"";
            // line 216
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\"><i class=\"fa fa-power-off\"></i>";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a>
                                    </li>
\t\t\t\t                ";
        } else {
            // line 219
            echo "                                    <li class=\"vp-items font-icon\"><a href=\"";
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\"><i class=\"fa fa-power-off\"></i>";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
                                    ";
            // line 220
            if (((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null) &&  !((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null) || (isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null)))) {
                // line 221
                echo "                                    <li class=\"vp-items font-icon\">
                                        <a href=\"";
                // line 222
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-pencil-square-o\"></i>";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</a>
                                    </li>
                                    ";
            }
            // line 225
            echo "                                ";
        }
        // line 226
        echo "
\t\t\t\t\t\t\t\t";
        // line 227
        // line 228
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t";
        // line 232
        // line 233
        echo "\t\t\t\t\t";
        if ((isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null)) {
            // line 234
            echo "\t\t\t\t\t\t<li class=\"font-icon rightside\">
\t\t\t\t\t\t\t<a href=\"";
            // line 235
            echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
            echo "\" class=\"mark-read\" accesskey=\"m\" data-ajax=\"mark_forums_read\"><i class=\"fa fa-check\" style=\"margin-right: 7.5px !important;\"></i>";
            echo $this->env->getExtension('phpbb')->lang("MARK_FORUMS_READ");
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 238
        echo "\t\t\t\t\t";
        // line 239
        echo "
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>

\t";
        // line 244
        // line 245
        echo "
\t<a id=\"start_here\" class=\"anchor\"></a>
\t\t";
        // line 247
        if ((((isset($context["S_BOARD_DISABLED"]) ? $context["S_BOARD_DISABLED"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) && ((isset($context["U_MCP"]) ? $context["U_MCP"] : null) || (isset($context["U_ACP"]) ? $context["U_ACP"] : null)))) {
            // line 248
            echo "\t\t<div id=\"information\" class=\"rules\">
\t\t\t<div class=\"chunk\">
\t\t\t\t<strong>";
            // line 250
            echo $this->env->getExtension('phpbb')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            echo $this->env->getExtension('phpbb')->lang("BOARD_DISABLED");
            echo "
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 254
        echo "
\t\t";
        // line 255
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  865 => 255,  862 => 254,  852 => 250,  848 => 248,  846 => 247,  842 => 245,  841 => 244,  834 => 239,  832 => 238,  824 => 235,  821 => 234,  818 => 233,  817 => 232,  811 => 228,  810 => 227,  807 => 226,  804 => 225,  796 => 222,  793 => 221,  791 => 220,  782 => 219,  772 => 216,  763 => 212,  759 => 210,  751 => 207,  748 => 206,  746 => 205,  743 => 204,  735 => 201,  732 => 200,  729 => 199,  727 => 198,  724 => 197,  713 => 196,  703 => 195,  700 => 194,  692 => 191,  689 => 190,  687 => 189,  684 => 188,  672 => 187,  668 => 185,  661 => 183,  654 => 182,  647 => 180,  642 => 179,  634 => 177,  631 => 176,  623 => 174,  621 => 173,  618 => 172,  616 => 171,  613 => 170,  612 => 169,  602 => 164,  599 => 163,  598 => 162,  595 => 161,  593 => 160,  587 => 159,  586 => 158,  573 => 157,  571 => 156,  567 => 155,  558 => 154,  556 => 153,  546 => 152,  543 => 151,  541 => 150,  538 => 149,  525 => 138,  521 => 136,  520 => 135,  504 => 130,  499 => 128,  491 => 124,  490 => 123,  487 => 122,  485 => 121,  482 => 120,  481 => 119,  478 => 118,  475 => 117,  473 => 116,  465 => 114,  463 => 113,  454 => 112,  450 => 110,  449 => 109,  439 => 106,  435 => 104,  434 => 103,  425 => 101,  417 => 100,  414 => 99,  413 => 98,  410 => 97,  402 => 96,  388 => 92,  387 => 91,  378 => 90,  374 => 88,  362 => 87,  349 => 86,  346 => 85,  343 => 84,  328 => 81,  325 => 80,  322 => 79,  320 => 78,  317 => 77,  308 => 76,  300 => 75,  297 => 74,  285 => 73,  281 => 71,  280 => 70,  274 => 67,  260 => 66,  250 => 58,  249 => 57,  240 => 55,  236 => 53,  235 => 52,  230 => 50,  227 => 49,  222 => 48,  215 => 46,  211 => 45,  207 => 43,  201 => 41,  197 => 39,  195 => 38,  185 => 30,  179 => 28,  177 => 27,  172 => 25,  168 => 24,  164 => 23,  160 => 22,  157 => 21,  153 => 19,  152 => 18,  149 => 17,  132 => 16,  117 => 15,  106 => 14,  95 => 13,  84 => 12,  73 => 11,  62 => 10,  60 => 9,  35 => 7,  31 => 6,  22 => 2,  19 => 1,);
    }
}
