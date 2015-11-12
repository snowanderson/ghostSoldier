<?php

/* viewforum_body.html */
class __TwigTemplate_13ce4b48e057259a930465e876929bf6dd3ffa07a816aafb6b37f85cb7643692 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "viewforum_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
<div class=\"page-header\">
\t<h2>";
        // line 6
        echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
        echo "</h2>
\t";
        // line 7
        if ((isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null)) {
            echo "<p>";
            echo (isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null);
            echo "</p>";
        }
        // line 8
        echo "</div>

";
        // line 10
        // line 11
        echo "
";
        // line 12
        if ((((isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null) || (isset($context["MODERATORS"]) ? $context["MODERATORS"] : null)) || (isset($context["U_MCP"]) ? $context["U_MCP"] : null))) {
            // line 13
            echo "\t<div>
\t\t<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the forum body -->
\t\t";
            // line 15
            if ((isset($context["MODERATORS"]) ? $context["MODERATORS"] : null)) {
                echo "<p><strong>";
                if ((isset($context["S_SINGLE_MODERATOR"]) ? $context["S_SINGLE_MODERATOR"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("MODERATOR");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("MODERATORS");
                }
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                echo (isset($context["MODERATORS"]) ? $context["MODERATORS"] : null);
                echo "</p>";
            }
            // line 16
            echo "\t</div>
";
        }
        // line 18
        echo "
";
        // line 19
        if ((isset($context["S_FORUM_RULES"]) ? $context["S_FORUM_RULES"] : null)) {
            // line 20
            echo "\t<div class=\"rules\">
\t\t<div class=\"alert alert-warning\">
\t\t\t";
            // line 22
            if ((isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null)) {
                // line 23
                echo "\t\t\t\t<a href=\"";
                echo (isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</a>
\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t<i class=\"fa fa-exclamation-triangle\"></i> <strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</strong>
\t\t\t\t<hr class=\"message-inner-separator\">
\t\t\t\t<p>";
                // line 27
                echo (isset($context["FORUM_RULES"]) ? $context["FORUM_RULES"] : null);
                echo "</p>
\t\t\t";
            }
            // line 29
            echo "\t\t</div> 
\t</div>
";
        }
        // line 32
        echo "
";
        // line 33
        if ((isset($context["S_HAS_SUBFORUM"]) ? $context["S_HAS_SUBFORUM"] : null)) {
            // line 34
            echo "\t";
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null))) {
                // line 35
                echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<a href=\"";
                // line 38
                echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
                echo "\" class=\"btn btn-default btn-sm\" data-ajax=\"mark_forums_read\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_SUBFORUMS_READ");
                echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 43
            echo "\t";
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "viewforum_body.html", 43)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 45
        echo "
";
        // line 46
        if (((((isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null)) || (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null))) {
            // line 47
            echo "\t";
            if ((((isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) || (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null))) {
                // line 48
                echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t";
                // line 51
                if ((( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null)) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array())))) {
                    echo "<a href=\"";
                    echo (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null);
                    echo "\" class=\"btn btn-default btn-sm\" data-ajax=\"mark_topics_read\">";
                    echo $this->env->getExtension('phpbb')->lang("MARK_TOPICS_READ");
                    echo "</a>";
                }
                // line 52
                echo "\t\t\t\t\t<span class=\"btn btn-default btn-sm disabled\">";
                echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
                echo "</span>
\t\t\t\t\t";
                // line 53
                if (((isset($context["BASE_URL"]) ? $context["BASE_URL"] : null) && ((isset($context["TOTAL_PAGES"]) ? $context["TOTAL_PAGES"] : null) > 6))) {
                    // line 54
                    echo "\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t";
                    // line 55
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo " <span class=\"caret\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"dropdown-menu jump-to\">
\t\t\t\t\t\t\t<li>";
                    // line 58
                    echo $this->env->getExtension('phpbb')->lang("JUMP_TO_PAGE");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</li>
\t\t\t\t\t\t\t<li class=\"page-jump-form\">
\t\t\t\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"page-number\" min=\"1\" maxlength=\"6\" title=\"";
                    // line 61
                    echo $this->env->getExtension('phpbb')->lang("JUMP_PAGE");
                    echo "\" class=\"form-control\" data-per-page=\"";
                    echo (isset($context["PER_PAGE"]) ? $context["PER_PAGE"] : null);
                    echo "\" data-base-url=\"";
                    echo twig_escape_filter($this->env, (isset($context["BASE_URL"]) ? $context["BASE_URL"] : null), "html_attr");
                    echo "\" data-start-name=\"";
                    echo (isset($context["START_NAME"]) ? $context["START_NAME"] : null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-primary btn-sm\" value=\"";
                    // line 63
                    echo $this->env->getExtension('phpbb')->lang("GO");
                    echo "\" type=\"button\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                } else {
                    // line 69
                    echo "\t\t\t\t\t\t<span class=\"btn btn-default btn-sm disabled\">";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "</span>
\t\t\t\t\t";
                }
                // line 71
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 75
            echo "\t<div class=\"row mobile-fix\" ";
            if ((isset($context["S_HAS_SUBFORUM"]) ? $context["S_HAS_SUBFORUM"] : null)) {
                echo "style=\"margin-top: 2em;\"";
            }
            echo ">        
\t\t";
            // line 76
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null))) {
                // line 77
                echo "\t\t\t<div class=\"col-md-3 col-xs-12\">
\t\t\t\t";
                // line 78
                // line 79
                echo "\t\t\t\t";
                if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                    // line 80
                    echo "\t\t\t\t\t<a class=\"btn btn-danger btn-labeled\" href=\"";
                    echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                    echo "\"><span class=\"btn-label\"><i class=\"fa fa-lock\"></i></span>";
                    echo $this->env->getExtension('phpbb')->lang("FORUM_LOCKED");
                    echo "</a>
\t\t\t\t";
                } else {
                    // line 82
                    echo "\t\t\t\t\t<a class=\"btn btn-primary btn-labeled\" href=\"";
                    echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                    echo "\"><span class=\"btn-label\"><i class=\"fa fa-pencil-square-o\"></i></span> ";
                    echo $this->env->getExtension('phpbb')->lang("POST_TOPIC");
                    echo "</a>
\t\t\t\t";
                }
                // line 84
                echo "\t\t\t\t";
                // line 85
                echo "\t\t\t</div>
\t\t";
            }
            // line 87
            echo "\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 88
                echo "\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t";
                // line 89
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 89)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 90
                echo "\t\t\t</div>
\t\t";
            }
            // line 92
            echo "\t\t";
            if ((isset($context["S_DISPLAY_SEARCHBOX"]) ? $context["S_DISPLAY_SEARCHBOX"] : null)) {
                // line 93
                echo "\t\t\t<div class=\"col-md-3 col-xs-12 pull-right\" role=\"search\">        
\t\t\t\t<form action=\"";
                // line 94
                echo (isset($context["S_SEARCHBOX_ACTION"]) ? $context["S_SEARCHBOX_ACTION"] : null);
                echo "\" method=\"get\" class=\"form-search pull-right\" style=\"margin:0;\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input class=\"input-medium search form-control\" type=\"text\" name=\"keywords\" size=\"20\" placeholder=\"";
                // line 96
                echo $this->env->getExtension('phpbb')->lang("SEARCH_FORUM");
                echo "\"/>
\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t";
                // line 98
                echo (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]) ? $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">";
                // line 99
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "</button>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t";
            }
            // line 105
            echo "\t</div>
";
        }
        // line 107
        echo "
";
        // line 108
        if ((isset($context["S_NO_READ_ACCESS"]) ? $context["S_NO_READ_ACCESS"] : null)) {
            // line 109
            echo "\t<div class=\"row\">
\t\t<div class=\"well\">
\t\t\t<strong>";
            // line 111
            echo $this->env->getExtension('phpbb')->lang("NO_READ_ACCESS");
            echo "</strong>
\t\t</div>
\t</div>
\t";
            // line 114
            if (( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                // line 115
                echo "\t\t<form action=\"";
                echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
                echo "\" method=\"post\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"well well-sm\">
\t\t\t\t\t<h3 class=\"box-heading\"><a href=\"";
                // line 118
                echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
                echo "</a>";
                if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
                    echo "&nbsp; &nbsp;<a href=\"";
                    echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("REGISTER");
                    echo "</a>";
                }
                echo "</h3>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<fieldset class=\"fields1\">
\t\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t\t<dt><label for=\"username\">";
                // line 122
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t\t\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
                // line 123
                echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
                echo "\" class=\"form-control\" /></dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt><label for=\"password\">";
                // line 126
                echo $this->env->getExtension('phpbb')->lang("PASSWORD");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t\t\t<dd><input type=\"password\" tabindex=\"2\" id=\"password\" name=\"password\" size=\"25\" class=\"form-control\" /></dd>
\t\t\t\t\t\t\t\t";
                // line 128
                if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                    echo "<dd><label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"3\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
                    echo "</label></dd>";
                }
                // line 129
                echo "\t\t\t\t\t\t\t\t<dd><label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"4\" /> ";
                echo $this->env->getExtension('phpbb')->lang("HIDE_ME");
                echo "</label></dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t\t\t\t<dd><input type=\"submit\" name=\"login\" tabindex=\"5\" value=\"";
                // line 133
                echo $this->env->getExtension('phpbb')->lang("LOGIN");
                echo "\" class=\"btn\" /></dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t";
                // line 135
                echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
                echo "
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t";
            }
        }
        // line 143
        echo "
";
        // line 144
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
            // line 145
            echo "\t";
            if (( !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) &&  !$this->getAttribute($context["topicrow"], "S_FIRST_ROW", array()))) {
                // line 146
                echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t";
            }
            // line 150
            echo "
\t";
            // line 151
            if (($this->getAttribute($context["topicrow"], "S_FIRST_ROW", array()) ||  !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()))) {
                // line 152
                echo "\t\t<div class=\"forumbg table-responsive ";
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array()) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())))) {
                    echo " announcement";
                }
                echo "\">
\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t<thead class=\"topiclist\">
\t\t\t\t\t<tr class=\"header\">
\t\t\t\t\t\t<th class=\"forum-name\">";
                // line 156
                if ((isset($context["S_DISPLAY_ACTIVE"]) ? $context["S_DISPLAY_ACTIVE"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("ACTIVE_TOPICS");
                } elseif (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array()) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())))) {
                    echo "<i class=\"fa fa-bullhorn\"></i> ";
                    echo $this->env->getExtension('phpbb')->lang("ANNOUNCEMENTS");
                } else {
                    echo "<i class=\"fa fa-comments-o\"></i> ";
                    echo $this->env->getExtension('phpbb')->lang("TOPICS");
                }
                echo "</th>
\t\t\t\t\t\t<th class=\"posts hidden-xs\"><i class=\"fa fa-reply\"></i> ";
                // line 157
                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                echo "</th>
\t\t\t\t\t\t<th class=\"views hidden-xs\"><i class=\"fa fa-eye\"></i> ";
                // line 158
                echo $this->env->getExtension('phpbb')->lang("VIEWS");
                echo "</th>
\t\t\t\t\t\t<th class=\"lastpost hidden-xs\"><i class=\"fa fa-history\"></i> <span>";
                // line 159
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></th>   
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody class=\"topiclist topics\">
\t";
            }
            // line 164
            echo "\t\t\t\t\t<tr class=\"t-row";
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())) {
                echo " warning-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array())) {
                echo " info-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo " success-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo " danger-color";
            }
            echo "\">                        
\t\t\t\t\t\t<td class=\"topic-name ";
            // line 165
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())) {
                echo " warning-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array())) {
                echo " info-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo " success-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo " danger-color";
            }
            echo "\" title=\"";
            echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
            echo "\">
\t\t\t\t\t\t\t<div class=\"pull-left forum-topic-icon\">
\t\t\t\t\t\t\t\t<span><a href=\"";
            // line 167
            echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
            echo "\" class=\"btn ";
            if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array())) {
                echo "btn-info";
            } else {
                echo "btn-default";
            }
            echo " btn-lg tooltip-link\" title=\"";
            echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 168
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_LOCKED", array())) {
                // line 169
                echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-lock fa-fw\"></i>
\t\t\t\t\t\t\t\t\t";
            } elseif ($this->getAttribute(            // line 170
$context["topicrow"], "S_POST_GLOBAL", array())) {
                // line 171
                echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-info-circle fa-fw\"></i>
\t\t\t\t\t\t\t\t\t";
            } elseif ($this->getAttribute(            // line 172
$context["topicrow"], "S_POST_ANNOUNCE", array())) {
                // line 173
                echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bullhorn fa-fw\"></i>
\t\t\t\t\t\t\t\t\t";
            } elseif ($this->getAttribute(            // line 174
$context["topicrow"], "S_POST_STICKY", array())) {
                // line 175
                echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-thumb-tack fa-fw\"></i>
\t\t\t\t\t\t\t\t\t";
            } elseif ($this->getAttribute(            // line 176
$context["topicrow"], "S_HAS_POLL", array())) {
                // line 177
                echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comment-o fa-fw\"></i>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 179
                echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file-text-o fa-fw\"></i>
\t\t\t\t\t\t\t\t\t";
            }
            // line 180
            echo " 
\t\t\t\t\t\t\t\t</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"pull-right topic-pagination\">
\t\t\t\t\t\t\t\t<div class=\"btn-group pagination-line\">
\t\t\t\t\t\t\t\t\t";
            // line 185
            if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", array()))) {
                // line 186
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                echo "\" class=\"btn btn-warning btn-xs\"><i class=\"fa fa-exclamation-triangle\"></i></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 188
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_DELETED", array())) {
                // line 189
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                echo "\" class=\"btn btn-warning btn-xs\"><i class=\"fa fa-trash\"></i></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 191
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                // line 192
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", array());
                echo "\" class=\"btn btn-warning btn-xs\"><i class=\"fa fa-exclamation-triangle\"></i></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 194
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                // line 195
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default btn-xs disabled\"><i class=\"fa fa-paperclip\"></i></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 197
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "PAGINATION", array())) {
                // line 198
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 200
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                    // line 201
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                        // line 202
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                        echo "<li class=\"active\"><span>";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 203
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                        echo "<li class=\"ellipsis\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                        echo "</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 204
$context["pagination"], "S_IS_NEXT", array())) {
                        // line 205
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        echo "<li><a href=\"";
                        echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                        echo "\">";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 207
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 208
                echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 211
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array())) {
                // line 212
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-info\" href=\"";
                echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", array());
                echo "\"><i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 214
            echo "\t\t\t\t\t\t\t\t\t";
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                // line 215
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs tooltip-link\" href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                echo "\"  title=\"";
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 216
            echo "\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"forum-topic-icon-mobile\">
\t\t\t\t\t\t\t\t";
            // line 220
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_LOCKED", array())) {
                // line 221
                echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-lock\"></i>
\t\t\t\t\t\t\t\t";
            } elseif ($this->getAttribute(            // line 222
$context["topicrow"], "S_POST_GLOBAL", array())) {
                // line 223
                echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t\t\t\t\t\t";
            } elseif ($this->getAttribute(            // line 224
$context["topicrow"], "S_POST_ANNOUNCE", array())) {
                // line 225
                echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bullhorn\"></i>
\t\t\t\t\t\t\t\t";
            } elseif ($this->getAttribute(            // line 226
$context["topicrow"], "S_POST_STICKY", array())) {
                // line 227
                echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-thumb-tack\"></i>
\t\t\t\t\t\t\t\t";
            } elseif ($this->getAttribute(            // line 228
$context["topicrow"], "S_HAS_POLL", array())) {
                // line 229
                echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comment-o\"></i>
\t\t\t\t\t\t\t\t";
            } else {
                // line 231
                echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file-text-o\"></i>
\t\t\t\t\t\t\t\t";
            }
            // line 233
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"";
            // line 234
            echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
            echo "\" class=\"topictitle\"><strong>";
            echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", array());
            echo "</strong></a><br/>
\t\t\t\t\t\t\t<small>";
            // line 235
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", array());
            echo " &raquo; ";
            echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", array());
            echo "</small>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"posts hidden-xs ";
            // line 237
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())) {
                echo " warning-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array())) {
                echo " info-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo " success-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo " danger-color";
            }
            echo "\">
\t\t\t\t\t\t\t<span class=\"badge\">";
            // line 238
            echo $this->getAttribute($context["topicrow"], "REPLIES", array());
            echo "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"views hidden-xs ";
            // line 240
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())) {
                echo " warning-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array())) {
                echo " info-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo " success-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo " danger-color";
            }
            echo "\">
\t\t\t\t\t\t\t<span class=\"badge\">";
            // line 241
            echo $this->getAttribute($context["topicrow"], "VIEWS", array());
            echo "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"lastpost hidden-xs ";
            // line 243
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())) {
                echo " warning-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array())) {
                echo " info-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo " success-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo " danger-color";
            }
            echo "\"><span><dfn>";
            echo $this->env->getExtension('phpbb')->lang("LAST_POST");
            echo " </dfn>";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
            echo "
\t\t\t\t\t\t\t";
            // line 244
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                echo "\"><i class=\"fa fa-external-link\"></i></a>";
            }
            echo "<br />";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
            echo "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t";
            // line 247
            if ($this->getAttribute($context["topicrow"], "S_LAST_ROW", array())) {
                // line 248
                echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t";
            }
            // line 252
            echo "\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 253
            echo "\t\t";
            if ((isset($context["S_IS_POSTABLE"]) ? $context["S_IS_POSTABLE"] : null)) {
                // line 254
                echo "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t<strong>";
                // line 255
                echo $this->env->getExtension('phpbb')->lang("NO_TOPICS");
                echo "</strong>
\t\t\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 259
        echo "
";
        // line 260
        if (((isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())))) {
            // line 261
            echo "\t<div class=\"row mobile-fix\" ";
            if ((isset($context["S_HAS_SUBFORUM"]) ? $context["S_HAS_SUBFORUM"] : null)) {
                echo "style=\"margin-top: 2em;\"";
            }
            echo ">        
\t\t";
            // line 262
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null))) {
                // line 263
                echo "\t\t\t<div class=\"col-md-3 col-xs-12\">
\t\t\t\t";
                // line 264
                // line 265
                echo "\t\t\t\t";
                if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                    // line 266
                    echo "\t\t\t\t\t<a class=\"btn btn-danger btn-labeled\" href=\"";
                    echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                    echo "\"><span class=\"btn-label\"><i class=\"fa fa-lock\"></i></span> ";
                    echo $this->env->getExtension('phpbb')->lang("FORUM_LOCKED");
                    echo "</a>
\t\t\t\t";
                } else {
                    // line 268
                    echo "\t\t\t\t\t<a class=\"btn btn-primary btn-labeled\" href=\"";
                    echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                    echo "\"><span class=\"btn-label\"><i class=\"fa fa-pencil-square-o\"></i></span> ";
                    echo $this->env->getExtension('phpbb')->lang("POST_TOPIC");
                    echo "</a>
\t\t\t\t";
                }
                // line 270
                echo "\t\t\t\t";
                // line 271
                echo "\t\t\t</div>
\t\t";
            }
            // line 273
            echo "\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 274
                echo "\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t";
                // line 275
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 275)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 276
                echo "\t\t\t</div>
\t\t";
            }
            // line 278
            echo "\t\t";
            if ((isset($context["S_DISPLAY_SEARCHBOX"]) ? $context["S_DISPLAY_SEARCHBOX"] : null)) {
                // line 279
                echo "\t\t\t<div class=\"col-md-3 col-xs-12 pull-right\">        
\t\t\t\t<form action=\"";
                // line 280
                echo (isset($context["S_SEARCHBOX_ACTION"]) ? $context["S_SEARCHBOX_ACTION"] : null);
                echo "\" method=\"get\" class=\"form-search pull-right\" style=\"margin:0;\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input class=\"input-medium search form-control\" type=\"text\" name=\"keywords\" size=\"20\" placeholder=\"";
                // line 282
                echo $this->env->getExtension('phpbb')->lang("SEARCH_FORUM");
                echo "\"/>
\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t";
                // line 284
                echo (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]) ? $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">";
                // line 285
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "</button>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t";
            }
            // line 291
            echo "    </div>
    ";
            // line 292
            if ((((isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) || (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null))) {
                // line 293
                echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t";
                // line 296
                if ((( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null)) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array())))) {
                    echo "<a href=\"";
                    echo (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null);
                    echo "\" class=\"btn btn-default btn-sm\" data-ajax=\"mark_topics_read\">";
                    echo $this->env->getExtension('phpbb')->lang("MARK_TOPICS_READ");
                    echo "</a>";
                }
                // line 297
                echo "\t\t\t\t\t<span class=\"btn btn-default btn-sm disabled\">";
                echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
                echo "</span>
\t\t\t\t\t";
                // line 298
                if (((isset($context["BASE_URL"]) ? $context["BASE_URL"] : null) && ((isset($context["TOTAL_PAGES"]) ? $context["TOTAL_PAGES"] : null) > 6))) {
                    // line 299
                    echo "\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t";
                    // line 300
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo " <span class=\"caret\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"dropdown-menu jump-to\">
\t\t\t\t\t\t\t<li>";
                    // line 303
                    echo $this->env->getExtension('phpbb')->lang("JUMP_TO_PAGE");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</li>
\t\t\t\t\t\t\t<li class=\"page-jump-form\">
\t\t\t\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"page-number\" min=\"1\" maxlength=\"6\" title=\"";
                    // line 306
                    echo $this->env->getExtension('phpbb')->lang("JUMP_PAGE");
                    echo "\" class=\"form-control\" data-per-page=\"";
                    echo (isset($context["PER_PAGE"]) ? $context["PER_PAGE"] : null);
                    echo "\" data-base-url=\"";
                    echo twig_escape_filter($this->env, (isset($context["BASE_URL"]) ? $context["BASE_URL"] : null), "html_attr");
                    echo "\" data-start-name=\"";
                    echo (isset($context["START_NAME"]) ? $context["START_NAME"] : null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-primary btn-sm\" value=\"";
                    // line 308
                    echo $this->env->getExtension('phpbb')->lang("GO");
                    echo "\" type=\"button\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                } else {
                    // line 314
                    echo "\t\t\t\t\t\t<span class=\"btn btn-default btn-sm disabled\">";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "</span>
\t\t\t\t\t";
                }
                // line 316
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 319
            echo "\t</div>
";
        }
        // line 321
        echo "
";
        // line 322
        if (((isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null) &&  !(isset($context["S_DISPLAY_ACTIVE"]) ? $context["S_DISPLAY_ACTIVE"] : null))) {
            // line 323
            echo "\t<div class=\"well well-sm\">
\t\t<form method=\"post\" action=\"";
            // line 324
            echo (isset($context["S_FORUM_ACTION"]) ? $context["S_FORUM_ACTION"] : null);
            echo "\" class=\"form-inline\">
\t\t\t<fieldset class=\"display-options\">
\t\t\t\t";
            // line 326
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                // line 327
                echo "\t\t\t\t\t<label>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_TOPICS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
                echo "</label>
\t\t\t\t\t<label>";
                // line 328
                echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                echo " ";
                echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
                echo "</label>
\t\t\t\t\t<label>";
                // line 329
                echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
                echo "</label>
\t\t\t\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 330
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" class=\"btn btn-default\" />
\t\t\t\t";
            }
            // line 332
            echo "\t\t\t</fieldset>
\t\t</form>
\t</div>
";
        }
        // line 336
        echo "
";
        // line 337
        if ((( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SHOW_LOGIN_PANEL", array()) == 1))) {
            // line 338
            echo "\t";
            $location = "login_panel.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("login_panel.html", "viewforum_body.html", 338)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 340
        echo "
";
        // line 341
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewforum_body.html", 341)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 342
        echo "
";
        // line 343
        $location = "online_panel.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("online_panel.html", "viewforum_body.html", 343)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 344
        echo "
";
        // line 345
        if ((isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null)) {
            // line 346
            echo "\t<div class=\"panel panel-info\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-unlock-alt\"></i> ";
            // line 348
            echo $this->env->getExtension('phpbb')->lang("FORUM_PERMISSIONS");
            echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<p>";
            // line 351
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "rules", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                echo $this->getAttribute($context["rules"], "RULE", array());
                echo "<br />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
\t\t</div>
\t</div>
";
        }
        // line 355
        echo "
";
        // line 356
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewforum_body.html", 356)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewforum_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1109 => 356,  1106 => 355,  1091 => 351,  1085 => 348,  1081 => 346,  1079 => 345,  1076 => 344,  1064 => 343,  1061 => 342,  1049 => 341,  1046 => 340,  1032 => 338,  1030 => 337,  1027 => 336,  1021 => 332,  1016 => 330,  1012 => 329,  1006 => 328,  998 => 327,  996 => 326,  991 => 324,  988 => 323,  986 => 322,  983 => 321,  979 => 319,  974 => 316,  968 => 314,  959 => 308,  948 => 306,  941 => 303,  935 => 300,  932 => 299,  930 => 298,  925 => 297,  917 => 296,  912 => 293,  910 => 292,  907 => 291,  898 => 285,  894 => 284,  889 => 282,  884 => 280,  881 => 279,  878 => 278,  874 => 276,  862 => 275,  859 => 274,  856 => 273,  852 => 271,  850 => 270,  842 => 268,  834 => 266,  831 => 265,  830 => 264,  827 => 263,  825 => 262,  818 => 261,  816 => 260,  813 => 259,  803 => 255,  800 => 254,  797 => 253,  792 => 252,  786 => 248,  784 => 247,  770 => 244,  749 => 243,  744 => 241,  729 => 240,  724 => 238,  709 => 237,  700 => 235,  694 => 234,  691 => 233,  687 => 231,  683 => 229,  681 => 228,  678 => 227,  676 => 226,  673 => 225,  671 => 224,  668 => 223,  666 => 222,  663 => 221,  661 => 220,  655 => 216,  647 => 215,  644 => 214,  638 => 212,  635 => 211,  630 => 208,  624 => 207,  614 => 205,  612 => 204,  606 => 203,  599 => 202,  596 => 201,  592 => 200,  588 => 198,  585 => 197,  581 => 195,  578 => 194,  572 => 192,  569 => 191,  563 => 189,  560 => 188,  554 => 186,  552 => 185,  545 => 180,  541 => 179,  537 => 177,  535 => 176,  532 => 175,  530 => 174,  527 => 173,  525 => 172,  522 => 171,  520 => 170,  517 => 169,  515 => 168,  503 => 167,  485 => 165,  469 => 164,  461 => 159,  457 => 158,  453 => 157,  441 => 156,  431 => 152,  429 => 151,  426 => 150,  420 => 146,  417 => 145,  412 => 144,  409 => 143,  398 => 135,  393 => 133,  385 => 129,  379 => 128,  373 => 126,  367 => 123,  362 => 122,  345 => 118,  338 => 115,  336 => 114,  330 => 111,  326 => 109,  324 => 108,  321 => 107,  317 => 105,  308 => 99,  304 => 98,  299 => 96,  294 => 94,  291 => 93,  288 => 92,  284 => 90,  272 => 89,  269 => 88,  266 => 87,  262 => 85,  260 => 84,  252 => 82,  244 => 80,  241 => 79,  240 => 78,  237 => 77,  235 => 76,  228 => 75,  222 => 71,  216 => 69,  207 => 63,  196 => 61,  189 => 58,  183 => 55,  180 => 54,  178 => 53,  173 => 52,  165 => 51,  160 => 48,  157 => 47,  155 => 46,  152 => 45,  138 => 43,  128 => 38,  123 => 35,  120 => 34,  118 => 33,  115 => 32,  110 => 29,  105 => 27,  99 => 25,  91 => 23,  89 => 22,  85 => 20,  83 => 19,  80 => 18,  76 => 16,  63 => 15,  59 => 13,  57 => 12,  54 => 11,  53 => 10,  49 => 8,  43 => 7,  39 => 6,  35 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
