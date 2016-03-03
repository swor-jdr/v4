<?php

/* mcp_notes_user.html */
class __TwigTemplate_587c675df9071b3cef1983a18531684e1574b62c8d9f41f77e76a3a309b73a74 extends Twig_Template
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
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_header.html", "mcp_notes_user.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<form method=\"post\" id=\"mcp\" action=\"";
        echo (isset($context["U_POST_ACTION"]) ? $context["U_POST_ACTION"] : null);
        echo "\">
<div class=\"side-segment\"><h3>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h3></div>
<div class=\"well\">
<div class=\"row\">
    <div class=\"col-md-2\">
\t  ";
        // line 7
        if ((isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
            echo "<div class=\"fileinput-new thumbnail\" style=\"width: 100px; height: 100px;\">";
            echo (isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null);
            echo "</div>";
        } else {
            echo "<div class=\"fileinput-new thumbnail\" style=\"width: 100px; height: 100px;\"><img src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/no_avatar.gif\" alt=\"\" /></div>";
        }
        // line 8
        echo "    </div>
\t<div class=\"col-md-10\">
      <ul class=\"list-unstyled\">
\t    <li><i class=\"fa fa-user text-muted\"></i>";
        // line 11
        if ((isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null)) {
            echo "<span style=\"color: #";
            echo (isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null);
            echo "\">&nbsp;";
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
            echo "</span>";
        } else {
            echo "&nbsp;";
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        }
        echo "</li>
        <li><i class=\"fa fa-calendar text-muted\"></i>&nbsp;";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("JOINED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "&nbsp;";
        echo (isset($context["JOINED"]) ? $context["JOINED"] : null);
        echo "</li>
        <li><i class=\"fa fa-comments text-muted\"></i> ";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("TOTAL_POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "&nbsp;";
        echo (isset($context["POSTS"]) ? $context["POSTS"] : null);
        echo "</li>
        <li><i class=\"fa fa-warning text-muted\"></i> ";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("WARNINGS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "&nbsp;";
        echo (isset($context["WARNINGS"]) ? $context["WARNINGS"] : null);
        echo "</li>
\t\t";
        // line 15
        if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
            echo "<li>&nbsp;";
            echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
            echo "</li>";
        }
        // line 16
        echo "      </ul>
\t</div>  
</div>
</div>

<div class=\"well\">
    <div class=\"control-group\"> 
\t  <label class=\"control-label\" for=\"usernote\">";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("ADD_FEEDBACK");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb')->lang("ADD_FEEDBACK_EXPLAIN");
        echo "</span>
\t    <div class=\"controls controls-row\"> 
         <textarea placeholder=\"";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("ADD_FEEDBACK");
        echo "...\" rows=\"2\"  name=\"usernote\" id=\"usernote\" class=\"form-control\"></textarea>
\t    </div> 
\t</div>
    <div class=\"space10\"></div>
    <div class=\"space10\"></div>
\t<fieldset>
\t\t";
        // line 31
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t\t<button type=\"reset\" value=\"";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-default\">";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "</button>
\t\t<button type=\"submit\" name=\"action[add_feedback]\" value=\"";
        // line 33
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"btn btn-default\">";
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "</button>
\t\t";
        // line 34
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</fieldset>
</div>

<div class=\"space10\"></div>
 <div class=\"space10\"></div>

<div class=\"row\">
\t<div class=\"col-md-6\">
\t <div class=\"input-group input-group-sm\">
\t   <input class=\"form-control\" type=\"text\" class=\"medium\" size=\"\" name=\"keywords\" id=\"search_keywords\" placeholder=\"";
        // line 44
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
        echo ":\">
\t  <span class=\"input-group-btn\">
\t   <button type=\"submit\" class=\"btn btn-default\">";
        // line 46
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "</button>
      </span>
\t </div>
\t</div>
\t
\t<div class=\"col-md-6\">
        <ul class=\"pagination pagination-sm pull-right\">
\t\t\t<li><a>";
        // line 53
        echo (isset($context["TOTAL_REPORTS"]) ? $context["TOTAL_REPORTS"] : null);
        echo "</a></li>
\t\t\t";
        // line 54
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 55
            echo "\t\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_notes_user.html", 55)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 56
            echo "\t\t\t";
        } else {
            // line 57
            echo "\t\t\t\t<li class=\"active\"><a>";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a></li>\t
\t\t\t";
        }
        // line 59
        echo "\t\t</ul>
\t</div>\t
</div>

<div class=\"panel panel-forum\">
\t<div class=\"panel-heading\">
\t <i class=\"fa fa-edit\"></i>&nbsp;";
        // line 65
        echo $this->env->getExtension('phpbb')->lang("NOTE");
        echo "
\t</div>
\t<div class=\"panel-inner\">
\t<table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t<tr>
\t\t<th data-hide=\"phone\"><i class=\"fa fa-book\"></i>&nbsp;";
        // line 71
        echo $this->env->getExtension('phpbb')->lang("ACTION_NOTE");
        echo "</th>
\t\t<th data-class=\"expand\"><i class=\"fa fa-user\"></i>&nbsp;";
        // line 72
        echo $this->env->getExtension('phpbb')->lang("REPORT_BY");
        echo "</th>
\t\t<th data-hide=\"phone\"><i class=\"icon-moon-ipcontrol\"></i>&nbsp;";
        // line 73
        echo $this->env->getExtension('phpbb')->lang("IP");
        echo "</th>
\t\t<th data-hide=\"phone\"><i class=\"fa fa-clock-o\"></i>&nbsp;";
        // line 74
        echo $this->env->getExtension('phpbb')->lang("TIME");
        echo "</th>
\t\t";
        // line 75
        if ((isset($context["S_CLEAR_ALLOWED"]) ? $context["S_CLEAR_ALLOWED"] : null)) {
            // line 76
            echo "        <th><i class=\"fa fa-check-square-o\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("MARK");
            echo "</th>
\t\t";
        }
        // line 78
        echo "\t</tr>
\t</thead>
\t<tbody>
\t";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "usernotes", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["usernotes"]) {
            // line 82
            echo "\t<tr>
\t    <td>";
            // line 83
            echo $this->getAttribute($context["usernotes"], "ACTION", array());
            echo "</td>
\t    <td>";
            // line 84
            echo $this->getAttribute($context["usernotes"], "REPORT_BY", array());
            echo "</td>
\t\t<td class=\"center\">";
            // line 85
            echo $this->getAttribute($context["usernotes"], "IP", array());
            echo "</td>
\t\t<td class=\"center\">";
            // line 86
            echo $this->getAttribute($context["usernotes"], "REPORT_AT", array());
            echo "</td>
\t";
            // line 87
            if ((isset($context["S_CLEAR_ALLOWED"]) ? $context["S_CLEAR_ALLOWED"] : null)) {
                // line 88
                echo "\t    <td class=\"table-check\"><div class=\"checker\"><input type=\"checkbox\" name=\"marknote[]\" id=\"note-";
                echo $this->getAttribute($context["usernotes"], "ID", array());
                echo "\" value=\"";
                echo $this->getAttribute($context["usernotes"], "ID", array());
                echo "\"><label for=\"note-";
                echo $this->getAttribute($context["usernotes"], "ID", array());
                echo "\"></label></div></td>
\t";
            }
            // line 90
            echo "\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 92
            echo "\t<tr>
\t\t<td class=\"bg1\" colspan=\"";
            // line 93
            if ((isset($context["S_CLEAR_ALLOWED"]) ? $context["S_CLEAR_ALLOWED"] : null)) {
                echo "5";
            } else {
                echo "4";
            }
            echo "\" align=\"center\"><span class=\"gen\">";
            echo $this->env->getExtension('phpbb')->lang("NO_ENTRIES");
            echo "</span></td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usernotes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "\t</tbody>
\t</table>
\t</div>
</div>
\t
\t<div class=\"clearfix\">
        <div class=\"pull-right\">
            <ul class=\"pagination pagination-sm\">
\t\t\t <li><a title=\"\" data-original-title=\"\" href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\">";
        // line 104
        echo $this->env->getExtension('phpbb')->lang("OPTIONS");
        echo "</a></li>
\t\t\t <li><a>";
        // line 105
        echo (isset($context["TOTAL_REPORTS"]) ? $context["TOTAL_REPORTS"] : null);
        echo "</a></li>
\t\t\t";
        // line 106
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 107
            echo "\t\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_notes_user.html", 107)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 108
            echo "\t\t\t";
        } else {
            // line 109
            echo "\t\t\t\t<li class=\"active\"><a>";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a></li>\t
\t\t\t";
        }
        // line 111
        echo "\t\t </ul>\t\t\t
\t    </div>
   
  
  ";
        // line 115
        if ((isset($context["S_CLEAR_ALLOWED"]) ? $context["S_CLEAR_ALLOWED"] : null)) {
            // line 116
            echo "  
   <div class=\"pull-left\">
\t<fieldset>
\t<div class=\"btn-group\">
\t <button class=\"btn btn-default\" type=\"submit\" name=\"action[del_all]\" title=\"\" data-original-title=\"";
            // line 120
            echo $this->env->getExtension('phpbb')->lang("DELETE_ALL");
            echo "\"><i class=\"fa fa-trash-o\"></i></button>
\t <button class=\"btn btn-default\" type=\"submit\" name=\"action[del_marked]\" title=\"\" data-original-title=\"";
            // line 121
            echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
            echo "\"><i class=\"fa fa-times\"></i></button>
\t</div>
\t
\t<div class=\"btn-group\">
\t<a href=\"javascript:;\" onclick=\"marklist('mcp', 'marknote', true); return false;\" class=\"btn btn-default\" title=\"\" data-original-title=\"";
            // line 125
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "\"><i class=\"fa fa-check-square-o\"></i></a>
\t<a href=\"javascript:;\" onclick=\"marklist('mcp', 'marknote', false); return false;\" class=\"btn btn-default\" title=\"\" data-original-title=\"";
            // line 126
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "\"><i class=\"fa fa-square-o\"></i></a>
\t</div>
    </fieldset>
\t</div>
\t</div>
";
        }
        // line 132
        echo "  
     <div class=\"space10\"></div>
  
<div class=\"hidden-xs\">
\t<fieldset class=\"controls-row\">
                    <div class=\"sorting collapse\">
\t\t\t\t\t <div class=\"panel panel-default\">
\t\t\t\t\t  <div class=\"panel-body\">
                        <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                         <label for=\"bday_day\">";
        // line 142
        echo $this->env->getExtension('phpbb')->lang("DISPLAY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
                            <div class=\"control-row\">
                              ";
        // line 144
        echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
        echo "
                            </div>
\t\t\t\t\t\t</div>
\t 
\t                    <div class=\"col-md-4 col-sm-4\"> 
                          <label for=\"bday_day\">";
        // line 149
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo "</label>
                            <div class=\"control-row\">
                              ";
        // line 151
        echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
        echo "
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                           <label for=\"bday_day\">";
        // line 156
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo "</label>
                            <div class=\"control-row\">
\t\t\t\t\t\t\t<div class=\"input-group\">
                             ";
        // line 159
        echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
        echo "
\t\t\t\t\t\t\t <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" name=\"sort\" type=\"submit\">";
        // line 161
        echo $this->env->getExtension('phpbb')->lang("GO");
        echo "</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    </div>   
\t\t\t\t\t\t</div>
                        </div>
                      </div>
\t\t\t\t\t </div>
\t\t\t\t\t</div>
\t</fieldset> 
</div>
\t
</form>

";
        // line 175
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_notes_user.html", 175)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_notes_user.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 175,  432 => 161,  427 => 159,  421 => 156,  413 => 151,  408 => 149,  400 => 144,  394 => 142,  382 => 132,  373 => 126,  369 => 125,  362 => 121,  358 => 120,  352 => 116,  350 => 115,  344 => 111,  338 => 109,  335 => 108,  322 => 107,  320 => 106,  316 => 105,  312 => 104,  302 => 96,  287 => 93,  284 => 92,  278 => 90,  268 => 88,  266 => 87,  262 => 86,  258 => 85,  254 => 84,  250 => 83,  247 => 82,  242 => 81,  237 => 78,  231 => 76,  229 => 75,  225 => 74,  221 => 73,  217 => 72,  213 => 71,  204 => 65,  196 => 59,  190 => 57,  187 => 56,  174 => 55,  172 => 54,  168 => 53,  158 => 46,  153 => 44,  140 => 34,  134 => 33,  128 => 32,  124 => 31,  115 => 25,  107 => 23,  98 => 16,  92 => 15,  85 => 14,  78 => 13,  71 => 12,  58 => 11,  53 => 8,  43 => 7,  36 => 3,  31 => 2,  19 => 1,);
    }
}
