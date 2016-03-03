<?php

/* manage_pages.html */
class __TwigTemplate_7f23cb4335e918ebc8859237073e691b131829ead6a25a8c6e98097c362339dd extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "manage_pages.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (((isset($context["S_ADD_PAGE"]) ? $context["S_ADD_PAGE"] : null) || (isset($context["S_EDIT_PAGE"]) ? $context["S_EDIT_PAGE"] : null))) {
            // line 6
            echo "
\t";
            // line 7
            $asset_file = "@phpbb_pages/scripts.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('15');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
            // line 8
            echo "
\t<script>
\t\tvar form_name = 'add_edit_page';
\t\tvar text_name = 'page_content';
\t\tvar load_draft = false;
\t\tvar upload = false;
\t\tvar imageTag = false;
\t</script>

\t<a href=\"";
            // line 17
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t";
            // line 19
            if ((isset($context["S_ADD_PAGE"]) ? $context["S_ADD_PAGE"] : null)) {
                // line 20
                echo "\t\t<h1>";
                echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_CREATE_PAGE");
                echo "</h1>

\t\t<p>";
                // line 22
                echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_CREATE_PAGE_EXPLAIN");
                echo "</p>
\t";
            } else {
                // line 24
                echo "\t\t<h1>";
                echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_EDIT_PAGE");
                echo " :: ";
                echo (isset($context["PAGES_TITLE"]) ? $context["PAGES_TITLE"] : null);
                echo "</h1>

\t\t<p>";
                // line 26
                echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_EDIT_PAGE_EXPLAIN");
                echo "</p>
\t";
            }
            // line 28
            echo "
\t";
            // line 29
            if ((isset($context["S_ERROR"]) ? $context["S_ERROR"] : null)) {
                // line 30
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 31
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 32
                echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 35
            echo "
\t<form id=\"add_edit_page\" method=\"post\" action=\"";
            // line 36
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 38
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_SETTINGS");
            echo "</legend>
\t\t\t";
            // line 39
            if ((isset($context["S_EDIT_PAGE"]) ? $context["S_EDIT_PAGE"] : null)) {
                // line 40
                echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label>";
                // line 41
                echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_FORM_VIEW_PAGE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><a href=\"";
                // line 42
                echo (isset($context["U_VIEW_PAGE"]) ? $context["U_VIEW_PAGE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_VIEW");
                echo "</a></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 45
            echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"page_title\">";
            // line 46
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_FORM_TITLE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_FORM_TITLE_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"page_title\" name=\"page_title\" value=\"";
            // line 47
            echo (isset($context["PAGES_TITLE"]) ? $context["PAGES_TITLE"] : null);
            echo "\" maxlength=\"200\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"page_description\">";
            // line 50
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_FORM_DESC");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_FORM_DESC_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"page_description\" name=\"page_description\" value=\"";
            // line 51
            echo (isset($context["PAGES_DESCRIPTION"]) ? $context["PAGES_DESCRIPTION"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"page_route\">";
            // line 54
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_FORM_ROUTE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_FORM_ROUTE_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"page_route\" name=\"page_route\" value=\"";
            // line 55
            echo (isset($context["PAGES_ROUTE"]) ? $context["PAGES_ROUTE"] : null);
            echo "\" maxlength=\"200\" /></dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t<fieldset>
\t\t\t<legend>";
            // line 59
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_FORM_CONTENT");
            echo "</legend>
\t\t\t";
            // line 60
            if ((isset($context["S_REPLACE_PAGES_EDITOR"]) ? $context["S_REPLACE_PAGES_EDITOR"] : null)) {
                // line 61
                echo "\t\t\t\t";
                // line 62
                echo "\t\t\t";
            } else {
                // line 63
                echo "\t\t\t\t<p>";
                echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_FORM_CONTENT_EXPLAIN");
                echo "</p>
\t\t\t\t";
                // line 64
                $location = "acp_posting_buttons.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("acp_posting_buttons.html", "manage_pages.html", 64)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 65
                echo "\t\t\t\t<dl class=\"responsive-columns\">
\t\t\t\t\t<dt style=\"width: 90px;\" id=\"color_palette_placeholder\" data-orientation=\"v\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\"></dt>
\t\t\t\t\t<dd style=\"margin-";
                // line 67
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo ": 90px;\">
\t\t\t\t\t\t<textarea name=\"page_content\" rows=\"25\" cols=\"60\" style=\"width: 95%;\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" data-bbcode=\"true\">";
                // line 68
                echo (isset($context["PAGES_CONTENT"]) ? $context["PAGES_CONTENT"] : null);
                echo "</textarea>
\t\t\t\t\t</dd>
\t\t\t\t\t<dd style=\"margin-";
                // line 70
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo ": 90px; margin-top: 5px;\">
\t\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio html-off\" name=\"parse_bbcode\"";
                // line 71
                if ((isset($context["S_PARSE_BBCODE_CHECKED"]) ? $context["S_PARSE_BBCODE_CHECKED"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("PARSE_BBCODE");
                echo "</label>
\t\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio html-off\" name=\"parse_smilies\"";
                // line 72
                if ((isset($context["S_PARSE_SMILIES_CHECKED"]) ? $context["S_PARSE_SMILIES_CHECKED"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("PARSE_SMILIES");
                echo "</label>
\t\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio html-off\" name=\"parse_magic_url\"";
                // line 73
                if ((isset($context["S_PARSE_MAGIC_URL_CHECKED"]) ? $context["S_PARSE_MAGIC_URL_CHECKED"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("PARSE_URLS");
                echo "</label>
\t\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio html-on\" name=\"parse_html\"";
                // line 74
                if ((isset($context["S_PARSE_HTML_CHECKED"]) ? $context["S_PARSE_HTML_CHECKED"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("PARSE_HTML");
                echo "</label>
\t\t\t\t\t</dd>
\t\t\t\t\t<dd style=\"margin-";
                // line 76
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo ": 90px; margin-top: 10px;\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("OPTIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " </strong>";
                echo (isset($context["BBCODE_STATUS"]) ? $context["BBCODE_STATUS"] : null);
                echo " :: ";
                echo (isset($context["IMG_STATUS"]) ? $context["IMG_STATUS"] : null);
                echo " :: ";
                echo (isset($context["FLASH_STATUS"]) ? $context["FLASH_STATUS"] : null);
                echo " :: ";
                echo (isset($context["URL_STATUS"]) ? $context["URL_STATUS"] : null);
                echo " :: ";
                echo (isset($context["SMILIES_STATUS"]) ? $context["SMILIES_STATUS"] : null);
                echo "</dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 79
            echo "\t\t</fieldset>
\t\t<fieldset>
\t\t\t<legend>";
            // line 81
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_OPTIONS");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"page_template\">";
            // line 83
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_FORM_TEMPLATE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_FORM_TEMPLATE_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><select name=\"page_template\" id=\"page_template\">
\t\t\t\t\t<option value=\"\">";
            // line 85
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_FORM_TEMPLATE_SELECT");
            echo "</option>
\t\t\t\t\t";
            // line 86
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "page_template_options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page_template_options"]) {
                // line 87
                echo "\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["page_template_options"], "VALUE", array());
                echo "\"";
                if ($this->getAttribute($context["page_template_options"], "S_SELECTED", array())) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->getAttribute($context["page_template_options"], "VALUE", array());
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_template_options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "\t\t\t\t</select></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"page_order\">";
            // line 92
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_FORM_ORDER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_FORM_ORDER_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input type=\"number\" id=\"page_order\" size=\"6\" maxlength=\"6\" min=\"0\" max=\"999999\" name=\"page_order\" value=\"";
            // line 93
            echo (isset($context["PAGES_ORDER"]) ? $context["PAGES_ORDER"] : null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"page_links\">";
            // line 96
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_FORM_LINKS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_FORM_LINKS_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><select name=\"page_links[]\" id=\"page_links\" size=\"10\" multiple=\"multiple\">
\t\t\t\t\t";
            // line 98
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "page_link_options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page_link_options"]) {
                // line 99
                echo "\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["page_link_options"], "VALUE", array());
                echo "\"";
                if ($this->getAttribute($context["page_link_options"], "S_SELECTED", array())) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->getAttribute($context["page_link_options"], "LABEL", array());
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link_options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "\t\t\t\t</select></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"page_display\">";
            // line 104
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_FORM_DISPLAY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_FORM_DISPLAY_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"page_display\" name=\"page_display\" value=\"1\"";
            // line 105
            if ((isset($context["S_PAGES_DISPLAY"]) ? $context["S_PAGES_DISPLAY"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"page_display\" value=\"0\"";
            // line 106
            if ( !(isset($context["S_PAGES_DISPLAY"]) ? $context["S_PAGES_DISPLAY"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"page_guest_display\">";
            // line 109
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_FORM_GUESTS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_FORM_GUESTS_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"page_guest_display\" name=\"page_guest_display\" value=\"1\"";
            // line 110
            if ((isset($context["S_PAGES_GUEST_DISPLAY"]) ? $context["S_PAGES_GUEST_DISPLAY"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"page_guest_display\" value=\"0\"";
            // line 111
            if ( !(isset($context["S_PAGES_GUEST_DISPLAY"]) ? $context["S_PAGES_GUEST_DISPLAY"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 115
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 116
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t\t\t";
            // line 117
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t</fieldset>
\t</form>

";
        } else {
            // line 122
            echo "
\t<h1>";
            // line 123
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_MANAGE");
            echo "</h1>

\t<p>";
            // line 125
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_MANAGE_EXPLAIN");
            echo "</p>

\t<form id=\"pages_purge_icons\" method=\"post\" action=\"";
            // line 127
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 129
            echo $this->env->getExtension('phpbb')->lang("GENERAL_OPTIONS");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"action_purge_icon_cache\">";
            // line 131
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_PURGE_ICONS_LABEL");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_PURGE_ICONS_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input class=\"button2\" type=\"submit\" id=\"action_purge_icon_cache\" name=\"action_purge_icon_cache\" value=\"";
            // line 132
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_PURGE_ICONS");
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t<input type=\"hidden\" name=\"action\" value=\"purge_icons\" />
\t\t</fieldset>
\t</form>

\t<table class=\"table1 zebra-table fixed-width-table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th style=\"width: 15%;\">";
            // line 141
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_TITLE");
            echo "</th>
\t\t\t\t<th style=\"width: 15%;\">";
            // line 142
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_DESCRIPTION");
            echo "</th>
\t\t\t\t<th style=\"width: 10%;\">";
            // line 143
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_ROUTE");
            echo "</th>
\t\t\t\t<th style=\"width: 15%;\">";
            // line 144
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_TEMPLATE");
            echo "</th>
\t\t\t\t<th style=\"width: 10%;\">";
            // line 145
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_ORDER");
            echo "</th>
\t\t\t\t<th style=\"width: 15%;\">";
            // line 146
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_STATUS");
            echo "</th>
\t\t\t\t<th style=\"width: 10%;\">";
            // line 147
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_LINK");
            echo "</th>
\t\t\t\t<th style=\"width: 10%;\">";
            // line 148
            echo $this->env->getExtension('phpbb')->lang("ACTION");
            echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
            // line 152
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pages", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["pages"]) {
                // line 153
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td><strong>";
                // line 154
                echo $this->getAttribute($context["pages"], "PAGES_TITLE", array());
                echo "</strong></td>
\t\t\t\t\t<td>";
                // line 155
                echo $this->getAttribute($context["pages"], "PAGES_DESCRIPTION", array());
                echo "</td>
\t\t\t\t\t<td>";
                // line 156
                echo $this->getAttribute($context["pages"], "PAGES_ROUTE", array());
                echo "</td>
\t\t\t\t\t<td>";
                // line 157
                echo $this->getAttribute($context["pages"], "PAGES_TEMPLATE", array());
                echo "</td>
\t\t\t\t\t<td>";
                // line 158
                echo $this->getAttribute($context["pages"], "PAGES_ORDER", array());
                echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
                // line 160
                if (($this->getAttribute($context["pages"], "S_PAGES_DISPLAY", array()) && $this->getAttribute($context["pages"], "S_PAGES_GUEST_DISPLAY", array()))) {
                    // line 161
                    echo "\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_PUBLISHED");
                    echo "
\t\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 162
$context["pages"], "S_PAGES_DISPLAY", array())) {
                    // line 163
                    echo "\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_PUBLISHED_NO_GUEST");
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 165
                    echo "\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_PRIVATE");
                    echo "
\t\t\t\t\t\t";
                }
                // line 167
                echo "\t\t\t\t\t</td>
\t\t\t\t\t<td><a href=\"";
                // line 168
                echo $this->getAttribute($context["pages"], "U_PAGES_ROUTE", array());
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_VIEW");
                echo "</a></td>
\t\t\t\t\t<td><a href=\"";
                // line 169
                echo $this->getAttribute($context["pages"], "U_EDIT", array());
                echo "\">";
                echo (isset($context["ICON_EDIT"]) ? $context["ICON_EDIT"] : null);
                echo "</a> <a href=\"";
                echo $this->getAttribute($context["pages"], "U_DELETE", array());
                echo "\" data-ajax=\"row_delete\">";
                echo (isset($context["ICON_DELETE"]) ? $context["ICON_DELETE"] : null);
                echo "</a></td>
\t\t\t\t</tr>
\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 172
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"8\" style=\"text-align: center;\">";
                // line 173
                echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_EMPTY");
                echo "</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "\t\t</tbody>
\t</table>

\t<form id=\"pages_add_page\" method=\"post\" action=\"";
            // line 179
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t\t<fieldset class=\"quick\">
\t\t\t<input class=\"button2\" type=\"submit\" name=\"addpage\" value=\"";
            // line 181
            echo $this->env->getExtension('phpbb')->lang("ACP_PAGES_CREATE_PAGE");
            echo "\" />
\t\t\t<input type=\"hidden\" name=\"action\" value=\"add\" />
\t\t\t";
            // line 183
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t</fieldset>
\t</form>

";
        }
        // line 188
        echo "
";
        // line 189
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "manage_pages.html", 189)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "manage_pages.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  634 => 189,  631 => 188,  623 => 183,  618 => 181,  613 => 179,  608 => 176,  599 => 173,  596 => 172,  582 => 169,  576 => 168,  573 => 167,  567 => 165,  561 => 163,  559 => 162,  554 => 161,  552 => 160,  547 => 158,  543 => 157,  539 => 156,  535 => 155,  531 => 154,  528 => 153,  523 => 152,  516 => 148,  512 => 147,  508 => 146,  504 => 145,  500 => 144,  496 => 143,  492 => 142,  488 => 141,  476 => 132,  470 => 131,  465 => 129,  460 => 127,  455 => 125,  450 => 123,  447 => 122,  439 => 117,  435 => 116,  431 => 115,  420 => 111,  412 => 110,  405 => 109,  395 => 106,  387 => 105,  380 => 104,  375 => 101,  360 => 99,  356 => 98,  348 => 96,  342 => 93,  335 => 92,  330 => 89,  315 => 87,  311 => 86,  307 => 85,  299 => 83,  294 => 81,  290 => 79,  271 => 76,  262 => 74,  254 => 73,  246 => 72,  238 => 71,  234 => 70,  229 => 68,  225 => 67,  221 => 65,  209 => 64,  204 => 63,  201 => 62,  199 => 61,  197 => 60,  193 => 59,  186 => 55,  179 => 54,  173 => 51,  166 => 50,  160 => 47,  153 => 46,  150 => 45,  142 => 42,  137 => 41,  134 => 40,  132 => 39,  128 => 38,  123 => 36,  120 => 35,  114 => 32,  110 => 31,  107 => 30,  105 => 29,  102 => 28,  97 => 26,  89 => 24,  84 => 22,  78 => 20,  76 => 19,  67 => 17,  56 => 8,  41 => 7,  38 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
