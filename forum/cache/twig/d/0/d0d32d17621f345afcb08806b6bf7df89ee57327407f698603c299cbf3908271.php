<?php

/* navbar_header.html */
class __TwigTemplate_d0d32d17621f345afcb08806b6bf7df89ee57327407f698603c299cbf3908271 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-fixed-top navbar-fix\" id=\"header-nav\">
\t<!-- Mobile dropdown buttons -->
\t<div class=\"container-fluid\">
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle pull-left-mobile\" id=\"main-menu-btn\" data-toggle=\"collapse\" data-target=\"#main-menu\">
\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand hidden-xs\" href=\"";
        // line 8
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\">";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "</a>
\t\t\t<button type=\"button\" class=\"navbar-toggle pull-right-mobile\" id=\"user-menu-btn\" data-toggle=\"collapse\" data-target=\"#user-menu\">
\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t</button>
\t\t\t";
        // line 12
        if (((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null) && (isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null))) {
            // line 13
            echo "\t\t\t\t<button type=\"button\" class=\"navbar-toggle pull-right-mobile\" id=\"notification-menu-btn\" data-toggle=\"collapse\" data-target=\"#notification-menu\">
\t\t\t\t\t<i class=\"fa fa-bell\"></i>
\t\t\t\t</button>
\t\t\t";
        }
        // line 17
        echo "\t\t\t<button type=\"button\" class=\"navbar-toggle pull-right-mobile\" id=\"search-menu-btn\" data-toggle=\"collapse\" data-target=\"#search-menu\">
\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t</button>
\t\t</div>
\t\t<div class=\"collapse navbar-collapse pull-left-desktop\" id=\"main-menu\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t<li id=\"quick-links\" class=\"dropdown ";
        // line 23
        if (( !(isset($context["S_DISPLAY_QUICK_LINKS"]) ? $context["S_DISPLAY_QUICK_LINKS"] : null) &&  !(isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null))) {
            echo " hidden";
        }
        echo "\" data-skip-responsive=\"true\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-bars\"></i> ";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("QUICK_LINKS");
        echo "</a>
\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t";
        // line 26
        // line 27
        echo "
\t\t\t\t\t\t";
        // line 28
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            // line 29
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
                // line 30
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo (isset($context["U_SEARCH_SELF"]) ? $context["U_SEARCH_SELF"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_SELF");
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                // line 33
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["S_LOAD_UNREADS"]) ? $context["S_LOAD_UNREADS"] : null)) {
                echo " 
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 36
                echo (isset($context["U_SEARCH_UNREAD"]) ? $context["U_SEARCH_UNREAD"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_UNREAD");
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo (isset($context["U_SEARCH_UNANSWERED"]) ? $context["U_SEARCH_UNANSWERED"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 39
            echo (isset($context["U_SEARCH_ACTIVE_TOPICS"]) ? $context["U_SEARCH_ACTIVE_TOPICS"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 41
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</a></li>
\t\t\t\t\t\t";
        }
        // line 43
        echo "
\t\t\t\t\t\t";
        // line 44
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null) || (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)))) {
            // line 45
            echo "\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t";
            // line 46
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-male fa-fw\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 47
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-users fa-fw\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 48
            echo "\t\t\t\t\t\t";
        }
        // line 49
        echo "
\t\t\t\t\t\t";
        // line 50
        // line 51
        echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
        // line 53
        // line 54
        echo "\t\t\t\t<li><a href=\"";
        echo (isset($context["U_FAQ"]) ? $context["U_FAQ"] : null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("FAQ_EXPLAIN");
        echo "\"><i class=\"fa fa-question\"></i> ";
        echo $this->env->getExtension('phpbb')->lang("FAQ");
        echo "</a></li>
\t\t\t\t";
        // line 55
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            // line 56
            echo "\t\t\t\t\t<li><a href=\"";
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "\"><i class=\"fa fa-cogs\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("ACP_SHORT");
            echo "</a></li>
\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t";
        if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
            // line 59
            echo "\t\t\t\t\t<li><a href=\"";
            echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "\"><i class=\"fa fa-gavel\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("MCP_SHORT");
            echo "</a></li>
\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t";
        // line 62
        echo "\t\t\t</ul>
\t\t</div>
\t\t";
        // line 64
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            // line 65
            echo "\t\t\t<div class=\"collapse navbar-collapse pull-left-desktop\" id=\"search-menu\"> 
\t\t\t\t<form class=\"navbar-form navbar-left\" method=\"get\" id=\"search\" action=\"";
            // line 66
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input class=\"input-medium search form-control\" maxlength=\"128\" type=\"text\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
            // line 68
            echo addslashes($this->env->getExtension('phpbb')->lang("SEARCH_FORUM"));
            echo "\" />
\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t";
            // line 70
            echo (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]) ? $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t<a href=\"";
            // line 72
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" class=\"btn btn-default\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\"><i class=\"fa fa-cog\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t";
        }
        // line 78
        echo "\t\t<div class=\"collapse navbar-collapse pull-right-desktop\" id=\"user-menu\">
\t\t\t";
        // line 79
        // line 80
        echo "\t\t\t<!-- Desktop user menu -->
\t\t\t<ul class=\"nav navbar-nav navbar-right hidden-xs fix-right-nav\">
\t\t\t\t";
        // line 82
        if ((isset($context["S_DISPLAY_PM"]) ? $context["S_DISPLAY_PM"] : null)) {
            // line 83
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 84
            echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope fa-fw\"></i> ";
            // line 85
            echo $this->env->getExtension('phpbb')->lang("PRIVATE_MESSAGES");
            echo " <span class=\"label ";
            if ((isset($context["PRIVATE_MESSAGE_INFO_UNREAD"]) ? $context["PRIVATE_MESSAGE_INFO_UNREAD"] : null)) {
                echo "label-danger";
            } else {
                echo "label-primary";
            }
            echo "\">";
            echo (isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null);
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t";
        // line 90
        // line 91
        echo "\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-labeled navbar-btn dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"btn-label ";
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            echo "nav-avatar";
        }
        echo "\">";
        if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
            echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
        } elseif ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            echo "<img src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/default_avatar.jpg\" alt=\"";
            echo $this->env->getExtension('phpbb')->lang("AVATAR");
            echo "\">";
        } else {
            echo "<i class=\"fa fa-user\"></i>";
        }
        echo "</span> ";
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            echo (isset($context["S_USERNAME"]) ? $context["S_USERNAME"] : null);
            echo " ";
        }
        echo "<span class=\"caret\"></span></button>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t";
        // line 93
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 94
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null)) {
                // line 95
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo (isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            // line 97
            echo "\t\t\t\t\t\t\t";
            // line 98
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo (isset($context["U_USER_PROFILE"]) ? $context["U_USER_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "\"><i class=\"fa fa-user fa-fw\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 99
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "\" accesskey=\"e\"><i class=\"fa fa-wrench\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "</a></li>
\t\t\t\t\t\t\t";
            // line 100
            // line 101
            echo "\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><button class=\"btn btn-danger btn-block\" type=\"button\" title=\"";
            // line 102
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" onclick=\"window.location.href='";
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "'\" accesskey=\"x\"><i class=\"fa fa-sign-out\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</button></li>
\t\t\t\t\t\t\t";
            // line 103
            // line 104
            echo "\t\t\t\t\t\t";
        } else {
            // line 105
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<form action=\"";
            // line 106
            echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
            echo "\" method=\"post\" id=\"navloginform\" name=\"loginform\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"";
            // line 108
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "\" name=\"username\" size=\"10\" class=\"form-control\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"";
            // line 111
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo "\" name=\"password\" size=\"10\" class=\"form-control\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo "\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 113
            if ((isset($context["S_DISPLAY_FULL_LOGIN"]) ? $context["S_DISPLAY_FULL_LOGIN"] : null)) {
                // line 114
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 115
                if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                    echo "<label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"4\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
                    echo "</label>";
                }
                // line 116
                echo "\t\t\t\t\t\t\t\t\t\t\t<br><label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"5\" /> ";
                echo $this->env->getExtension('phpbb')->lang("HIDE_ME");
                echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 119
            echo "\t\t\t\t\t\t\t\t\t";
            echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
            echo "
\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"login\" class=\"btn btn-primary btn-block\"><i class=\"glyphicon glyphicon-log-in\"></i> ";
            // line 120
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
            echo "</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            // line 123
            if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
                // line 124
                echo "\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><button class=\"btn btn-primary btn-block\" type\"button\" onclick=\"window.location.href='";
                // line 125
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "'\"><i class=\"glyphicon glyphicon-user\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</button></li>
\t\t\t\t\t\t\t";
            } else {
                // line 127
                echo "\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><button class=\"btn btn-primary btn-block disabled\" type=\"button\"><i class=\"glyphicon glyphicon-user\"></i> ";
                // line 128
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</button></li>
\t\t\t\t\t\t\t";
            }
            // line 130
            echo "\t\t\t\t\t\t";
        }
        // line 131
        echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
        // line 133
        // line 134
        echo "\t\t\t</ul>
\t\t\t<!-- Mobile user menu -->
\t\t\t<ul class=\"nav navbar-nav navbar-right visible-xs fix-right-nav\">
\t\t\t\t";
        // line 137
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 138
            echo "\t\t\t\t\t<li>";
            echo (isset($context["S_USERNAME"]) ? $context["S_USERNAME"] : null);
            echo "</li>
\t\t\t\t\t";
            // line 139
            if ((isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null)) {
                // line 140
                echo "\t\t\t\t\t\t<li><a href=\"";
                echo (isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 142
            echo "\t\t\t\t\t";
            // line 143
            echo "\t\t\t\t\t<li><a href=\"";
            echo (isset($context["U_USER_PROFILE"]) ? $context["U_USER_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "\"><i class=\"fa fa-user fa-fw\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 144
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "\" accesskey=\"e\"><i class=\"fa fa-wrench\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "</a></li>
\t\t\t\t\t";
            // line 145
            // line 146
            echo "\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t<li><button class=\"btn btn-danger btn-block\" type=\"button\" title=\"";
            // line 147
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" onclick=\"window.location.href='";
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "'\" accesskey=\"x\"><i class=\"fa fa-sign-out\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</button></li>
\t\t\t\t\t";
            // line 148
            // line 149
            echo "\t\t\t\t";
        } else {
            // line 150
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-block\" type=\"button\" title=\"";
            // line 153
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" onclick=\"window.location.href='";
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "'\" accesskey=\"x\"><i class=\"fa fa-sign-out\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t";
            // line 157
            if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
                // line 158
                echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-block\" type=\"button\" onclick=\"window.location.href='";
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "'\"><i class=\"glyphicon glyphicon-user\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</button>
\t\t\t\t\t\t\t\t";
            } else {
                // line 160
                echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-block disabled\" type=\"button\"><i class=\"glyphicon glyphicon-user\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</button>
\t\t\t\t\t\t\t\t";
            }
            // line 162
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 166
        echo "\t\t\t</ul>
\t\t</div>
\t\t";
        // line 168
        if (((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null) && (isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null))) {
            // line 169
            echo "\t\t\t<div class=\"collapse navbar-collapse pull-right-desktop\" id=\"notification-menu\">
\t\t\t\t<ul class=\"nav navbar-nav navbar-right hidden-xs\">
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle hidden-xs\" id=\"notification_list_button\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-bell fa-fw\"></i> ";
            // line 172
            echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
            echo " <span class=\"label label-primary\">";
            echo (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null);
            echo "</span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" id=\"notification-panel\" role=\"menu\">
\t\t\t\t\t\t\t<li>";
            // line 174
            $location = "notification_dropdown.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("notification_dropdown.html", "navbar_header.html", 174)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>\t
\t\t\t\t</ul>
\t\t\t\t<ul class=\"nav navbar-nav navbar-right visible-xs\" id=\"notification-panel-mobile\">
\t\t\t\t\t<li>";
            // line 179
            $location = "notification_dropdown.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("notification_dropdown.html", "navbar_header.html", 179)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            echo "</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 183
        echo "\t</div>
</nav>";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  570 => 183,  553 => 179,  535 => 174,  528 => 172,  523 => 169,  521 => 168,  517 => 166,  511 => 162,  505 => 160,  497 => 158,  495 => 157,  484 => 153,  479 => 150,  476 => 149,  475 => 148,  467 => 147,  464 => 146,  463 => 145,  455 => 144,  446 => 143,  444 => 142,  436 => 140,  434 => 139,  429 => 138,  427 => 137,  422 => 134,  421 => 133,  417 => 131,  414 => 130,  409 => 128,  406 => 127,  399 => 125,  396 => 124,  394 => 123,  388 => 120,  383 => 119,  376 => 116,  370 => 115,  367 => 114,  365 => 113,  358 => 111,  350 => 108,  345 => 106,  342 => 105,  339 => 104,  338 => 103,  330 => 102,  327 => 101,  326 => 100,  318 => 99,  309 => 98,  307 => 97,  299 => 95,  296 => 94,  294 => 93,  269 => 91,  268 => 90,  265 => 89,  250 => 85,  246 => 84,  243 => 83,  241 => 82,  237 => 80,  236 => 79,  233 => 78,  222 => 72,  217 => 70,  212 => 68,  207 => 66,  204 => 65,  202 => 64,  198 => 62,  196 => 61,  186 => 59,  183 => 58,  173 => 56,  171 => 55,  162 => 54,  161 => 53,  157 => 51,  156 => 50,  153 => 49,  150 => 48,  141 => 47,  133 => 46,  130 => 45,  128 => 44,  125 => 43,  118 => 41,  111 => 39,  104 => 38,  97 => 36,  92 => 35,  84 => 33,  81 => 32,  73 => 30,  70 => 29,  68 => 28,  65 => 27,  64 => 26,  59 => 24,  53 => 23,  45 => 17,  39 => 13,  37 => 12,  28 => 8,  19 => 1,);
    }
}
