<?php

/* @gramziu_anami/event/overall_header_head_append.html */
class __TwigTemplate_e54a2c8d90982be00cc4591a29b9bd3db900b91ef82b3a249d0d221efe4eff4c extends Twig_Template
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
        echo "<style>
    .chunk, .chunk-main {
        max-width: ";
        // line 3
        echo (isset($context["ANAMI_WIDTH"]) ? $context["ANAMI_WIDTH"] : null);
        echo ";
    }

\tbody,
\t.dropdown-extended .header,
\t.notification_list p.notifications_title,
\tli.header dt,
\tli.header dd,
\t.postbody h3,
\t.content,
\t.content p,
\tdl.faq,
\tp.author,
\t.notice,
\tdl.file,
\tdl.file dt,
\tdl.thumbnail dd,
\tfieldset.polls,
\tfieldset.polls dd div,
\ta.forumtitle,
\ta.topictitle,
\tfieldset,
\tinput,
\tselect,
\tselect optgroup option,
\ttextarea,
\t#message-box textarea,
\ta.button1,
\tinput.button1,
\tinput.button3,
\ta.button2,
\tinput.button2,
\t.button {
\t\tfont-family: ";
        // line 36
        echo (isset($context["ANAMI_FONT"]) ? $context["ANAMI_FONT"] : null);
        echo ", Arial, Helvetica, sans-serif;
\t}

\ta.arrow-left:hover,
\ta.arrow-right:hover,
\tdl.thumbnail dt a:hover img {
\t\tcolor: ";
        // line 42
        echo (isset($context["ANAMI_CL_H"]) ? $context["ANAMI_CL_H"] : null);
        echo ";
\t}

\t.buttons .button {
\t\tbackground-color: ";
        // line 46
        echo (isset($context["ANAMI_CB"]) ? $context["ANAMI_CB"] : null);
        echo ";
\t\tborder-color: ";
        // line 47
        echo (isset($context["ANAMI_CB"]) ? $context["ANAMI_CB"] : null);
        echo ";
\t}

\t.buttons .button:hover {
\t\tbackground-color: ";
        // line 51
        echo (isset($context["ANAMI_CM"]) ? $context["ANAMI_CM"] : null);
        echo ";
\t\tborder-color: ";
        // line 52
        echo (isset($context["ANAMI_CM"]) ? $context["ANAMI_CM"] : null);
        echo ";
\t}

\t#site-header,
\t#site-footer-nav,
\t#site-footer {
\t\tbackground-color: ";
        // line 58
        echo (isset($context["ANAMI_CM"]) ? $context["ANAMI_CM"] : null);
        echo ";
\t}

\t.forabg .header,
\t.forumbg .header {
\t\tbackground-color: ";
        // line 63
        echo (isset($context["ANAMI_CT"]) ? $context["ANAMI_CT"] : null);
        echo ";
\t}

\t.postbody h3,
\t.postbody h3 a,
\ta.forumtitle,
\ta.topictitle,
\ta.lastsubject {
\t\tcolor: ";
        // line 71
        echo (isset($context["ANAMI_CL"]) ? $context["ANAMI_CL"] : null);
        echo ";
\t}
</style>

";
        // line 75
        if (((isset($context["ANAMI_LAYOUT"]) ? $context["ANAMI_LAYOUT"] : null) == 1)) {
            // line 76
            echo "<style>
\tbody {
\tbackground-color: #282B31;
\t}

\t#overall-wrap {
\tmargin: 20px auto;
\tbackground-color: #FAFAFA;
\tbox-shadow: 0 0 15px rgba(0, 0, 0, 0.25);
\tborder-radius: 10px;
\tmax-width: 1200px;
\t}

\t#site-header {
\tborder-radius: 3px 3px 0 0;
\t}

\t#site-footer {
\tborder-radius: 0 0 3px 3px;
\t}

\t#wrap, .inner {
\tmax-width: 1200px;
\t}

\t.chunk, .chunk-main {
\tpadding: 0 40px;
\t}
</style>
";
        } elseif ((        // line 105
(isset($context["ANAMI_LAYOUT"]) ? $context["ANAMI_LAYOUT"] : null) == 2)) {
            // line 106
            echo "<style>
\tbody {
\tbackground-color: #F0F0F0;
\t}

\t#overall-wrap {
\tmargin: 20px auto;
\tbackground-color: #FAFAFA;
\tbox-shadow: 0 0 15px rgba(0, 0, 0, 0.25);
\tborder-radius: 10px;
\tmax-width: 1200px;
\t}

\t#site-header {
\tborder-radius: 3px 3px 0 0;
\t}

\t#site-footer {
\tborder-radius: 0 0 3px 3px;
\t}

\t#wrap, .inner {
\tmax-width: 1200px;
\t}

\t.chunk, .chunk-main {
\tpadding: 0 40px;
\t}
</style>
";
        }
        // line 136
        echo "
";
        // line 137
        if ((isset($context["ANAMI_HEADER"]) ? $context["ANAMI_HEADER"] : null)) {
            // line 138
            echo "<style>
\t#site-header, #site-logo {
\t\tline-height: 50px;
\t\tmin-height: 50px;
\t}

\t#site-menu > li > a {
\t\tline-height: 50px;
\t}

\t#site-menu .dropdown {
\t\ttop: 45px;
\t}
</style>
";
        }
    }

    public function getTemplateName()
    {
        return "@gramziu_anami/event/overall_header_head_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 138,  195 => 137,  192 => 136,  160 => 106,  158 => 105,  127 => 76,  125 => 75,  118 => 71,  107 => 63,  99 => 58,  90 => 52,  86 => 51,  79 => 47,  75 => 46,  68 => 42,  59 => 36,  23 => 3,  19 => 1,);
    }
}
