<?php

/* forumlist_body.html */
class __TwigTemplate_35b6698eb5c9d64e105270a53825493cc777f61aac4c3d5e5118c8cd8b2866a1 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forumrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 2
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) &&  !$this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 3
                echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t";
            }
            // line 6
            echo "\t

\t";
            // line 8
            // line 9
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) || $this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 10
                echo "\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t<thead class=\"topiclist\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t";
                // line 14
                // line 15
                echo "\t\t\t\t\t\t<th class=\"forum-name\">";
                if ($this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                    echo "<i class=\"fa fa-sitemap\"></i> <a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "</a>";
                } else {
                    echo "<i class=\"fa fa-folder-open\"></i> ";
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                }
                echo "</th>
\t\t\t\t\t\t<th class=\"topics hidden-xs\"><i class=\"fa fa-comments-o\"></i> ";
                // line 16
                echo $this->env->getExtension('phpbb')->lang("TOPICS");
                echo "</th>
\t\t\t\t\t\t<th class=\"posts hidden-xs\"><i class=\"fa fa-pencil-square-o\"></i> ";
                // line 17
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo "</th>
\t\t\t\t\t\t<th class=\"lastpost hidden-xs\"><i class=\"fa fa-history\"></i> <span>";
                // line 18
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></th>
\t\t\t\t\t\t";
                // line 19
                // line 20
                echo "\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody class=\"topiclist forums\">
\t";
            }
            // line 24
            echo "\t";
            // line 25
            echo "
\t";
            // line 26
            if ( !$this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                // line 27
                echo "\t\t";
                // line 28
                echo "\t\t\t\t<tr class=\"icon ";
                echo $this->getAttribute($context["forumrow"], "FORUM_IMG_STYLE", array());
                echo "\">
\t\t\t\t\t";
                // line 29
                // line 30
                echo "\t\t\t\t\t<td class=\"forum-name\" title=\"";
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                echo "\" >
\t\t\t\t\t\t<span class=\"pull-left forum-icon\">
\t\t\t\t\t\t\t<a href=\"";
                // line 32
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                echo "\" class=\"btn ";
                if ( !$this->getAttribute($context["forumrow"], "FORUM_IMAGE", array())) {
                    echo "btn-lg";
                }
                echo " ";
                if ($this->getAttribute($context["forumrow"], "S_LOCKED_FORUM", array())) {
                    echo "btn-danger";
                } elseif ($this->getAttribute($context["forumrow"], "S_UNREAD_FORUM", array())) {
                    echo "btn-info";
                } else {
                    echo "btn-default";
                }
                echo " tooltip-link\" title=\"";
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 33
                if ($this->getAttribute($context["forumrow"], "FORUM_IMAGE", array())) {
                    // line 34
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"forum-image\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_IMAGE", array());
                    echo "</span>
\t\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 35
$context["forumrow"], "S_IS_LINK", array())) {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-globe fa-fw\"></i>
\t\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 37
$context["forumrow"], "S_LOCKED_FORUM", array())) {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-lock fa-fw\"></i>
\t\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 39
$context["forumrow"], "FORUM_ICON", array())) {
                    // line 40
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ICON", array());
                    echo "\"></i>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 42
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-folder fa-fw\"></i>
\t\t\t\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                // line 46
                if (((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null) && $this->getAttribute($context["forumrow"], "S_FEED_ENABLED", array()))) {
                    echo "<!-- <a class=\"feed-icon-forum\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "\" href=\"";
                    echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                    echo "?f=";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                    echo "\"><img src=\"";
                    echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                    echo "/images/feed.gif\" alt=\"";
                    echo $this->env->getExtension('phpbb')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "\" /></a> -->";
                }
                // line 47
                echo "\t\t\t\t\t\t<div class=\"forum-icon-mobile\">
\t\t\t\t\t\t\t";
                // line 48
                if ($this->getAttribute($context["forumrow"], "S_IS_LINK", array())) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t<i class=\"fa fa-globe fa-fw\"></i>
\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 50
$context["forumrow"], "S_LOCKED_FORUM", array())) {
                    // line 51
                    echo "\t\t\t\t\t\t\t\t<i class=\"fa fa-lock fa-fw\"></i>
\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 52
$context["forumrow"], "FORUM_ICON", array())) {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t<i class=\"";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ICON", array());
                    echo "\"></i>
\t\t\t\t\t\t\t";
                } else {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t<i class=\"fa fa-folder fa-fw\"></i>
\t\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"";
                // line 58
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                echo "\" class=\"forumtitle\">";
                echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                echo "</a><br />
\t\t\t\t\t\t<div class=\"forum-desc\">";
                // line 59
                echo $this->getAttribute($context["forumrow"], "FORUM_DESC", array());
                echo "</div>
\t\t\t\t\t\t";
                // line 60
                if ($this->getAttribute($context["forumrow"], "MODERATORS", array())) {
                    // line 61
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_MODERATOR_STR", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["forumrow"], "MODERATORS", array());
                    echo "
\t\t\t\t\t\t";
                }
                // line 63
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["forumrow"], "SUBFORUMS", array()) && $this->getAttribute($context["forumrow"], "S_LIST_SUBFORUMS", array()))) {
                    // line 64
                    echo "\t\t\t\t\t\t\t";
                    // line 65
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_SUBFORUM_STR", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong>
\t\t\t\t\t\t\t";
                    // line 66
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forumrow"], "subforum", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 67
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["subforum"], "U_SUBFORUM", array());
                        echo "\" class=\"subforum";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if ($this->getAttribute($context["subforum"], "UNREAD", array())) {
                            echo $this->env->getExtension('phpbb')->lang("UNREAD_POSTS");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">";
                        echo $this->getAttribute($context["subforum"], "SUBFORUM_NAME", array());
                        echo "</a>";
                        if ( !$this->getAttribute($context["subforum"], "S_LAST_ROW", array())) {
                            echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                        }
                        // line 68
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 69
                    echo "\t\t\t\t\t\t\t";
                    // line 70
                    echo "\t\t\t\t\t\t";
                }
                // line 71
                echo "\t\t\t\t\t\t";
                if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                    // line 72
                    echo "\t\t\t\t\t\t\t<div class=\"visible-xs-block\">
\t\t\t\t\t\t\t\t";
                    // line 73
                    if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                        // line 74
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("REDIRECTS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                        echo "</strong>
\t\t\t\t\t\t\t\t";
                    } elseif (( !$this->getAttribute(                    // line 75
$context["forumrow"], "S_IS_LINK", array()) && $this->getAttribute($context["forumrow"], "TOPICS", array()))) {
                        // line 76
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("TOPICS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                        echo "</strong>
\t\t\t\t\t\t\t\t";
                    }
                    // line 78
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 80
                echo "\t\t\t\t\t</td>
\t\t\t\t\t";
                // line 81
                if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                    // line 82
                    echo "\t\t\t\t\t\t<td class=\"redirect\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("REDIRECTS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                    echo "</span></td>
\t\t\t\t\t";
                } elseif ( !$this->getAttribute(                // line 83
$context["forumrow"], "S_IS_LINK", array())) {
                    // line 84
                    echo "\t\t\t\t\t\t<td class=\"topics hidden-xs\"><span class=\"badge\">";
                    echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                    echo "</span></td>
\t\t\t\t\t\t<td class=\"posts hidden-xs\"><span class=\"badge\">";
                    // line 85
                    echo $this->getAttribute($context["forumrow"], "POSTS", array());
                    echo "</span></td>
\t\t\t\t\t\t<td class=\"lastpost hidden-xs\"><span>
\t\t\t\t\t\t\t";
                    // line 87
                    if ($this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array());
                        echo "\">";
                        echo (isset($context["UNAPPROVED_IMG"]) ? $context["UNAPPROVED_IMG"] : null);
                        echo "</a>";
                    }
                    // line 88
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", array())) {
                        echo "<dfn>";
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo "</dfn> ";
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["forumrow"], "LAST_POSTER_FULL", array());
                        echo "
\t\t\t\t\t\t\t";
                        // line 89
                        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                            echo "\"><i class=\"fa fa-external-link\"></i></a> ";
                        }
                        echo "<br />";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", array());
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO_POSTS");
                        echo "<br />&nbsp;";
                    }
                    echo "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
                } else {
                    // line 92
                    echo "\t\t\t\t\t\t<dd>&nbsp;</dd>
\t\t\t\t\t";
                }
                // line 94
                echo "\t\t\t\t\t";
                // line 95
                echo "\t\t\t\t</tr>
\t\t\t\t";
                // line 96
                // line 97
                echo "\t";
            }
            // line 98
            echo "\t";
            if ($this->getAttribute($context["forumrow"], "S_LAST_ROW", array())) {
                // line 99
                echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t";
                // line 102
                // line 103
                echo "\t";
            }
            // line 104
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 106
            echo "\t<div class=\"alert alert-danger\">
\t\t<strong>";
            // line 107
            echo $this->env->getExtension('phpbb')->lang("NO_FORUMS");
            echo "</strong>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 107,  389 => 106,  383 => 104,  380 => 103,  379 => 102,  374 => 99,  371 => 98,  368 => 97,  367 => 96,  364 => 95,  362 => 94,  358 => 92,  342 => 89,  331 => 88,  323 => 87,  318 => 85,  313 => 84,  311 => 83,  303 => 82,  301 => 81,  298 => 80,  294 => 78,  285 => 76,  283 => 75,  275 => 74,  273 => 73,  270 => 72,  267 => 71,  264 => 70,  262 => 69,  256 => 68,  235 => 67,  231 => 66,  225 => 65,  223 => 64,  220 => 63,  211 => 61,  209 => 60,  205 => 59,  199 => 58,  196 => 57,  192 => 55,  186 => 53,  184 => 52,  181 => 51,  179 => 50,  176 => 49,  174 => 48,  171 => 47,  153 => 46,  149 => 44,  145 => 42,  139 => 40,  137 => 39,  134 => 38,  132 => 37,  129 => 36,  127 => 35,  122 => 34,  120 => 33,  102 => 32,  96 => 30,  95 => 29,  90 => 28,  88 => 27,  86 => 26,  83 => 25,  81 => 24,  75 => 20,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  48 => 15,  47 => 14,  41 => 10,  38 => 9,  37 => 8,  33 => 6,  27 => 3,  24 => 2,  19 => 1,);
    }
}
