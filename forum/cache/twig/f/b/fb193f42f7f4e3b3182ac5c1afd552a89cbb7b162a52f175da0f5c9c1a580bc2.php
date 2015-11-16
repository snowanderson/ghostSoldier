<?php

/* acp_tcp.html */
class __TwigTemplate_fb193f42f7f4e3b3182ac5c1afd552a89cbb7b162a52f175da0f5c9c1a580bc2 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_tcp.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a name=\"maincontent\"></a>

\t<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("ACP_TCP");
        echo "</h1>

\t<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("ACP_TCP_DESCRIPTION");
        echo "</p>

";
        // line 9
        if ((isset($context["S_MAIN"]) ? $context["S_MAIN"] : null)) {
            // line 10
            echo "
\t<form id=\"acp_tcp\" method=\"post\" action=\"";
            // line 11
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 14
            echo $this->env->getExtension('phpbb')->lang("ACP_TCP_MAIN");
            echo "</legend>
\t<dl> 
\t\t<dt><label for=\"anami_width\">";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("ACP_TCP_WIDTH");
            echo ":</label></dt>
\t\t<dd><input type=\"text\" value=\"";
            // line 17
            echo (isset($context["ANAMI_WIDTH"]) ? $context["ANAMI_WIDTH"] : null);
            echo "\" name=\"anami_width\" maxlength=\"7\" size=\"5\" /></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"anami_layout\">";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("ACP_TCP_LAYOUT");
            echo ":</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"anami_layout\" value=\"0\"";
            // line 21
            if (((isset($context["ANAMI_LAYOUT"]) ? $context["ANAMI_LAYOUT"] : null) == 0)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("ACP_TCP_WIDE");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"anami_layout\" value=\"1\"";
            // line 22
            if (((isset($context["ANAMI_LAYOUT"]) ? $context["ANAMI_LAYOUT"] : null) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("ACP_TCP_BOXED_DARK");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"anami_layout\" value=\"2\"";
            // line 23
            if (((isset($context["ANAMI_LAYOUT"]) ? $context["ANAMI_LAYOUT"] : null) == 2)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("ACP_TCP_BOXED_BRIGHT");
            echo "</label></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"anami_header\">";
            // line 26
            echo $this->env->getExtension('phpbb')->lang("ACP_TCP_HEADER");
            echo ":</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"anami_header\" value=\"0\"";
            // line 27
            if (((isset($context["ANAMI_HEADER"]) ? $context["ANAMI_HEADER"] : null) == 0)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("ACP_TCP_HEADER_BIG");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"anami_header\" value=\"1\"";
            // line 28
            if (((isset($context["ANAMI_HEADER"]) ? $context["ANAMI_HEADER"] : null) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("ACP_TCP_HEADER_SMALL");
            echo "</label></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"anami_font\">";
            // line 31
            echo $this->env->getExtension('phpbb')->lang("ACP_TCP_FONT");
            echo ":</label></dt>
\t\t<dd><input type=\"text\" value=\"";
            // line 32
            echo (isset($context["ANAMI_FONT"]) ? $context["ANAMI_FONT"] : null);
            echo "\" name=\"anami_font\" maxlength=\"48\" size=\"12\" /></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"anami_cm\">";
            // line 35
            echo $this->env->getExtension('phpbb')->lang("ACP_TCP_CM");
            echo ":</label></dt>
\t\t<dd><input type=\"text\" value=\"";
            // line 36
            echo (isset($context["ANAMI_CM"]) ? $context["ANAMI_CM"] : null);
            echo "\" name=\"anami_cm\" maxlength=\"7\" size=\"6\" />&nbsp;<span style=\"background-color: ";
            echo (isset($context["ANAMI_CM"]) ? $context["ANAMI_CM"] : null);
            echo "\">&nbsp; &nbsp;</span></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"anami_ct\">";
            // line 39
            echo $this->env->getExtension('phpbb')->lang("ACP_TCP_CT");
            echo ":</label></dt>
\t\t<dd><input type=\"text\" value=\"";
            // line 40
            echo (isset($context["ANAMI_CT"]) ? $context["ANAMI_CT"] : null);
            echo "\" name=\"anami_ct\" maxlength=\"7\" size=\"6\" />&nbsp;<span style=\"background-color: ";
            echo (isset($context["ANAMI_CT"]) ? $context["ANAMI_CT"] : null);
            echo "\">&nbsp; &nbsp;</span></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"anami_cl\">";
            // line 43
            echo $this->env->getExtension('phpbb')->lang("ACP_TCP_CL");
            echo ":</label></dt>
\t\t<dd><input type=\"text\" value=\"";
            // line 44
            echo (isset($context["ANAMI_CL"]) ? $context["ANAMI_CL"] : null);
            echo "\" name=\"anami_cl\" maxlength=\"7\" size=\"6\" />&nbsp;<span style=\"background-color: ";
            echo (isset($context["ANAMI_CL"]) ? $context["ANAMI_CL"] : null);
            echo "\">&nbsp; &nbsp;</span></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"anami_cl_h\">";
            // line 47
            echo $this->env->getExtension('phpbb')->lang("ACP_TCP_CL_H");
            echo ":</label></dt>
\t\t<dd><input type=\"text\" value=\"";
            // line 48
            echo (isset($context["ANAMI_CL_H"]) ? $context["ANAMI_CL_H"] : null);
            echo "\" name=\"anami_cl_h\" maxlength=\"7\" size=\"6\" />&nbsp;<span style=\"background-color: ";
            echo (isset($context["ANAMI_CL_H"]) ? $context["ANAMI_CL_H"] : null);
            echo "\">&nbsp; &nbsp;</span></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"anami_cb\">";
            // line 51
            echo $this->env->getExtension('phpbb')->lang("ACP_TCP_CB");
            echo ":</label></dt>
\t\t<dd><input type=\"text\" value=\"";
            // line 52
            echo (isset($context["ANAMI_CB"]) ? $context["ANAMI_CB"] : null);
            echo "\" name=\"anami_cb\" maxlength=\"7\" size=\"6\" />&nbsp;<span style=\"background-color: ";
            echo (isset($context["ANAMI_CB"]) ? $context["ANAMI_CB"] : null);
            echo "\">&nbsp; &nbsp;</span></dd>
\t</dl>
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 55
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 56
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t</p>
\t";
            // line 58
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>

\t</form>

";
        } elseif (        // line 63
(isset($context["S_SIDEBAR"]) ? $context["S_SIDEBAR"] : null)) {
            // line 64
            echo "
\t<form id=\"acp_tcp\" method=\"post\" action=\"";
            // line 65
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 68
            echo $this->env->getExtension('phpbb')->lang("ACP_TCP_MAIN");
            echo "</legend>
\t<dl> 
\t\t<dt><label for=\"anami_sidebar\">";
            // line 70
            echo $this->env->getExtension('phpbb')->lang("ACP_TCP_SIDEBAR_BLOCKS");
            echo ":</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"anami_sidebar\" value=\"1\"";
            // line 71
            if (((isset($context["ANAMI_SIDEBAR"]) ? $context["ANAMI_SIDEBAR"] : null) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"anami_sidebar\" value=\"0\"";
            // line 72
            if (((isset($context["ANAMI_SIDEBAR"]) ? $context["ANAMI_SIDEBAR"] : null) == 0)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t</dl>
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 75
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 76
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t</p>
\t";
            // line 78
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>

\t</form>

";
            // line 83
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "siba", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["siba"]) {
                // line 84
                echo "\t<form id=\"acp_tcp\" method=\"post\" action=\"";
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">
\t<fieldset>
\t\t<legend>";
                // line 86
                echo $this->getAttribute($context["siba"], "SIDEBAR_NAME", array());
                echo "</legend>
\t<dl>
\t\t<dt><label for=\"sidebar_name\">";
                // line 88
                echo $this->env->getExtension('phpbb')->lang("ACP_TCP_SIDEBAR_BLOCK");
                echo ":</label></dt>
\t\t<dd><input class=\"text medium\" type=\"text\" value=\"";
                // line 89
                echo $this->getAttribute($context["siba"], "SIDEBAR_NAME", array());
                echo "\" name=\"sidebar_name\" maxlength=\"70\" size=\"5\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"sidebar_content\">";
                // line 92
                echo $this->env->getExtension('phpbb')->lang("ACP_TCP_SIDEBAR_BLOCK_CONTENT");
                echo ":</label></dt>
\t\t<dd><textarea name=\"sidebar_content\" rows=\"15\" cols=\"45\">";
                // line 93
                echo $this->getAttribute($context["siba"], "SIDEBAR_CONTENT", array());
                echo "</textarea></dd>
\t</dl>
\t<input type=\"hidden\" value=\"";
                // line 95
                echo $this->getAttribute($context["siba"], "SIDEBAR_POSITION", array());
                echo "\" name=\"sidebar_position\" />
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
                // line 97
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
                // line 98
                echo $this->env->getExtension('phpbb')->lang("RESET");
                echo "\" />&nbsp;
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"delete\" value=\"Delete\" />
\t</p>
\t";
                // line 101
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t</fieldset>
\t</form>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['siba'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "
<form id=\"acp_tcp\" method=\"post\" action=\"";
            // line 106
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t<fieldset>
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"add\" value=\"Add\" />
\t</p>
\t";
            // line 111
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
</form>

";
        } elseif (        // line 115
(isset($context["S_FOOTER_BLOCKS"]) ? $context["S_FOOTER_BLOCKS"] : null)) {
            // line 116
            echo "
\t<form id=\"acp_tcp\" method=\"post\" action=\"";
            // line 117
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 120
            echo $this->env->getExtension('phpbb')->lang("ACP_TCP_MAIN");
            echo "</legend>
\t<dl> 
\t\t<dt><label for=\"anami_footer\">";
            // line 122
            echo $this->env->getExtension('phpbb')->lang("ACP_TCP_FOOTER_BLOCKS");
            echo ":</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"anami_footer\" value=\"1\"";
            // line 123
            if (((isset($context["ANAMI_FOOTER"]) ? $context["ANAMI_FOOTER"] : null) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"anami_footer\" value=\"0\"";
            // line 124
            if (((isset($context["ANAMI_FOOTER"]) ? $context["ANAMI_FOOTER"] : null) == 0)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t</dl>
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 127
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 128
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t</p>
\t";
            // line 130
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>

\t</form>

";
            // line 135
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "fubl", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["fubl"]) {
                // line 136
                echo "\t<form id=\"acp_tcp\" method=\"post\" action=\"";
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">
\t<fieldset>
\t\t<legend>";
                // line 138
                echo $this->getAttribute($context["fubl"], "FOOTER_NAME", array());
                echo "</legend>
\t<dl>
\t\t<dt><label for=\"footer_name\">";
                // line 140
                echo $this->env->getExtension('phpbb')->lang("ACP_TCP_FOOTER_BLOCK");
                echo ":</label></dt>
\t\t<dd><input class=\"text medium\" type=\"text\" name=\"footer_name\" value=\"";
                // line 141
                echo $this->getAttribute($context["fubl"], "FOOTER_NAME", array());
                echo "\" maxlength=\"255\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"footer_content\">";
                // line 144
                echo $this->env->getExtension('phpbb')->lang("ACP_TCP_FOOTER_BLOCK_CONTENT");
                echo ":</label></dt>
\t\t<dd><textarea name=\"footer_content\" rows=\"15\" cols=\"45\">";
                // line 145
                echo $this->getAttribute($context["fubl"], "FOOTER_CONTENT", array());
                echo "</textarea></dd>
\t</dl>
\t<input type=\"hidden\" value=\"";
                // line 147
                echo $this->getAttribute($context["fubl"], "FOOTER_POSITION", array());
                echo "\" name=\"footer_position\" />
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
                // line 149
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
                // line 150
                echo $this->env->getExtension('phpbb')->lang("RESET");
                echo "\" />
\t</p>
\t";
                // line 152
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t</fieldset>
\t</form>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fubl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "
";
        } elseif (        // line 157
(isset($context["S_SOCIAL_ICONS"]) ? $context["S_SOCIAL_ICONS"] : null)) {
            // line 158
            echo "
";
            // line 159
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "soic", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["soic"]) {
                // line 160
                echo "\t<form id=\"acp_tcp\" method=\"post\" action=\"";
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">
\t<fieldset>
\t\t<legend>";
                // line 162
                echo $this->getAttribute($context["soic"], "SI_POSITION", array());
                echo "</legend>
\t<dl>
\t\t<dt><label for=\"social_icon\">";
                // line 164
                echo $this->env->getExtension('phpbb')->lang("ACP_TCP_SOCIAL_ICON_IMAGE");
                echo ":</label></dt>
\t\t<dd><input class=\"text medium\" type=\"text\" value=\"";
                // line 165
                echo $this->getAttribute($context["soic"], "SOCIAL_ICON", array());
                echo "\" name=\"social_icon\" maxlength=\"70\" size=\"5\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"social_url\">";
                // line 168
                echo $this->env->getExtension('phpbb')->lang("ACP_TCP_SOCIAL_ICON_URL");
                echo ":</label></dt>
\t\t<dd><input class=\"text medium\" type=\"text\" value=\"";
                // line 169
                echo $this->getAttribute($context["soic"], "SOCIAL_URL", array());
                echo "\" name=\"social_url\" maxlength=\"70\" size=\"5\" /></dd>
\t</dl>
\t<input type=\"hidden\" value=\"";
                // line 171
                echo $this->getAttribute($context["soic"], "SOCIAL_POSITION", array());
                echo "\" name=\"social_position\" />
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
                // line 173
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
                // line 174
                echo $this->env->getExtension('phpbb')->lang("RESET");
                echo "\" />&nbsp;
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"delete\" value=\"Delete\" />
\t</p>
\t";
                // line 177
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t</fieldset>
\t</form>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['soic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "
<form id=\"acp_tcp\" method=\"post\" action=\"";
            // line 182
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t<fieldset>
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"add\" value=\"Add\" />
\t</p>
\t";
            // line 187
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
</form>

";
        } elseif (        // line 191
(isset($context["S_MAIN_MENU"]) ? $context["S_MAIN_MENU"] : null)) {
            // line 192
            echo "
";
            // line 193
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "mame", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["mame"]) {
                // line 194
                echo "\t<form id=\"acp_tcp\" method=\"post\" action=\"";
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">
\t<fieldset>
\t\t<legend>";
                // line 196
                echo $this->getAttribute($context["mame"], "MENU_POSITION", array());
                echo "</legend>
\t<dl>
\t\t<dt><label for=\"menu_name\">";
                // line 198
                echo $this->env->getExtension('phpbb')->lang("ACP_TCP_MENU_NAME");
                echo ":</label></dt>
\t\t<dd><input class=\"text medium\" type=\"text\" value=\"";
                // line 199
                echo $this->getAttribute($context["mame"], "MENU_NAME", array());
                echo "\" name=\"menu_name\" maxlength=\"70\" size=\"5\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"menu_url\">";
                // line 202
                echo $this->env->getExtension('phpbb')->lang("ACP_TCP_MENU_URL");
                echo ":</label></dt>
\t\t<dd><input class=\"text medium\" type=\"text\" value=\"";
                // line 203
                echo $this->getAttribute($context["mame"], "MENU_URL", array());
                echo "\" name=\"menu_url\" maxlength=\"70\" size=\"5\" /></dd>
\t</dl>
\t<input type=\"hidden\" value=\"";
                // line 205
                echo $this->getAttribute($context["mame"], "MENU_POSITION", array());
                echo "\" name=\"menu_position\" />
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
                // line 207
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
                // line 208
                echo $this->env->getExtension('phpbb')->lang("RESET");
                echo "\" />&nbsp;
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"delete\" value=\"Delete\" />
\t</p>
\t";
                // line 211
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t</fieldset>
\t</form>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mame'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "
<form id=\"acp_tcp\" method=\"post\" action=\"";
            // line 216
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t<fieldset>
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"add\" value=\"Add\" />
\t</p>
\t";
            // line 221
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
</form>

";
        }
        // line 226
        echo "
";
        // line 227
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_tcp.html", 227)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_tcp.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  627 => 227,  624 => 226,  616 => 221,  608 => 216,  605 => 215,  595 => 211,  589 => 208,  585 => 207,  580 => 205,  575 => 203,  571 => 202,  565 => 199,  561 => 198,  556 => 196,  550 => 194,  546 => 193,  543 => 192,  541 => 191,  534 => 187,  526 => 182,  523 => 181,  513 => 177,  507 => 174,  503 => 173,  498 => 171,  493 => 169,  489 => 168,  483 => 165,  479 => 164,  474 => 162,  468 => 160,  464 => 159,  461 => 158,  459 => 157,  456 => 156,  446 => 152,  441 => 150,  437 => 149,  432 => 147,  427 => 145,  423 => 144,  417 => 141,  413 => 140,  408 => 138,  402 => 136,  398 => 135,  390 => 130,  385 => 128,  381 => 127,  371 => 124,  363 => 123,  359 => 122,  354 => 120,  348 => 117,  345 => 116,  343 => 115,  336 => 111,  328 => 106,  325 => 105,  315 => 101,  309 => 98,  305 => 97,  300 => 95,  295 => 93,  291 => 92,  285 => 89,  281 => 88,  276 => 86,  270 => 84,  266 => 83,  258 => 78,  253 => 76,  249 => 75,  239 => 72,  231 => 71,  227 => 70,  222 => 68,  216 => 65,  213 => 64,  211 => 63,  203 => 58,  198 => 56,  194 => 55,  186 => 52,  182 => 51,  174 => 48,  170 => 47,  162 => 44,  158 => 43,  150 => 40,  146 => 39,  138 => 36,  134 => 35,  128 => 32,  124 => 31,  114 => 28,  106 => 27,  102 => 26,  92 => 23,  84 => 22,  76 => 21,  72 => 20,  66 => 17,  62 => 16,  57 => 14,  51 => 11,  48 => 10,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
