<?php

/* ucp_pm_viewfolder.html */
class __TwigTemplate_f16038782d2ab4532c303e494a2d4df8033491d20ae5ece747393eebbe308234 extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_pm_viewfolder.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if ( !(isset($context["PROMPT"]) ? $context["PROMPT"] : null)) {
            // line 4
            echo "\t";
            $location = "ucp_pm_message_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_pm_message_header.html", "ucp_pm_viewfolder.html", 4)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 6
        echo "
";
        // line 7
        if ((isset($context["PROMPT"]) ? $context["PROMPT"] : null)) {
            // line 8
            echo "\t<form id=\"viewfolder\" method=\"post\" action=\"";
            echo (isset($context["S_PM_ACTION"]) ? $context["S_PM_ACTION"] : null);
            echo "\">
\t<fieldset class=\"framed-ucp\">
\t\t<legend>";
            // line 10
            echo $this->env->getExtension('phpbb')->lang("EXPORT_AS_CSV");
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</legend>
\t\t
\t\t\t <div class=\"controls controls-row\">\t\t\t\t\t\t
              <label class=\"control-label\" for=\"delimiter\">";
            // line 13
            echo $this->env->getExtension('phpbb')->lang("DELIMITER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
                <div class=\"controls\">
                <input type=\"text\" class=\"\" id=\"delimiter\" name=\"delimiter\" value=\",\">
                </div>

             <label class=\"control-label\" for=\"enclosure\">";
            // line 18
            echo $this->env->getExtension('phpbb')->lang("ENCLOSURE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
                <div class=\"controls\">
                   <input type=\"text\" class=\"\" id=\"enclosure\" name=\"enclosure\" value=\"&#034;\">
                </div>\t\t\t\t\t
\t\t\t </div>
\t</fieldset>
\t<fieldset class=\"form-actions\">
\t\t<input type=\"hidden\" name=\"export_option\" value=\"CSV\" />
\t\t<button class=\"btn btn-default\" type=\"submit\" name=\"submit_export\" value=\"";
            // line 26
            echo $this->env->getExtension('phpbb')->lang("EXPORT_FOLDER");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("EXPORT_FOLDER");
            echo "</button>
\t\t<button class=\"btn btn-default\" type=\"reset\" value=\"";
            // line 27
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" name=\"reset\">";
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "</button>
\t\t";
            // line 28
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>
";
        } else {
            // line 32
            echo "
\t";
            // line 33
            if ((isset($context["NUM_REMOVED"]) ? $context["NUM_REMOVED"] : null)) {
                // line 34
                echo "\t\t<div class=\"notice\">
\t\t\t<p>";
                // line 35
                echo (isset($context["RULE_REMOVED_MESSAGES"]) ? $context["RULE_REMOVED_MESSAGES"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 38
            echo "
\t";
            // line 39
            if ((isset($context["NUM_NOT_MOVED"]) ? $context["NUM_NOT_MOVED"] : null)) {
                // line 40
                echo "\t\t<div class=\"notice\">
\t\t\t<p>";
                // line 41
                echo (isset($context["NOT_MOVED_MESSAGES"]) ? $context["NOT_MOVED_MESSAGES"] : null);
                echo "<br />";
                echo (isset($context["RELEASE_MESSAGE_INFO"]) ? $context["RELEASE_MESSAGE_INFO"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 44
            echo "
\t";
            // line 45
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "messagerow", array()))) {
                // line 46
                echo "\t<div class=\"panel panel-forum\">
\t<div class=\"panel-heading\">
\t <i class=\"fa fa-envelope\"></i>&nbsp;";
                // line 48
                echo $this->env->getExtension('phpbb')->lang("MESSAGE");
                echo "
\t</div>
\t<div class=\"panel-inner\">
\t<table class=\"footable table table-striped table-primary table-hover\">
\t\t<thead>
            <tr>
               <th data-class=\"expand\">";
                // line 54
                if ((isset($context["S_SHOW_RECIPIENTS"]) ? $context["S_SHOW_RECIPIENTS"] : null)) {
                    echo "&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("MESSAGE_TO");
                    echo "&nbsp;&#47;&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("SUBJECT");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("SUBJECT");
                    echo "&nbsp;&#47;&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("FROM");
                }
                echo "</th>
               <th data-hide=\"phone\" class=\"large23\">";
                // line 55
                if ((isset($context["S_SHOW_RECIPIENTS"]) ? $context["S_SHOW_RECIPIENTS"] : null)) {
                    echo "&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("SENT_AT");
                    echo "&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("DATES");
                } else {
                    echo "&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("DATES");
                }
                echo "</th>
\t\t       <th data-hide=\"phone\" class=\"table-check\">";
                // line 56
                echo $this->env->getExtension('phpbb')->lang("MARK");
                echo "</th>
\t\t  </tr>
        </thead>
\t\t<tbody>
\t\t";
                // line 60
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "messagerow", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["messagerow"]) {
                    // line 61
                    echo "\t\t<tr> 
            <td>
\t\t\t    ";
                    // line 63
                    if ($this->getAttribute($context["messagerow"], "S_PM_DELETED", array())) {
                        // line 64
                        echo "\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["messagerow"], "U_REMOVE_PM", array());
                        echo "\" class=\"topictitle\">";
                        echo $this->env->getExtension('phpbb')->lang("DELETE_MESSAGE");
                        echo "</a><br />
\t\t\t\t<span class=\"error\">";
                        // line 65
                        echo $this->env->getExtension('phpbb')->lang("MESSAGE_REMOVED_FROM_OUTBOX");
                        echo "</span>
\t\t\t\t";
                    } else {
                        // line 67
                        echo "\t\t\t\t<span class=\"fa fa-envelope ";
                        if ($this->getAttribute($context["messagerow"], "PM_CLASS", array())) {
                            echo $this->getAttribute($context["messagerow"], "PM_CLASS", array());
                        }
                        echo "\"></span> <a href=\"";
                        echo $this->getAttribute($context["messagerow"], "U_VIEW_PM", array());
                        echo "\" class=\"";
                        if ($this->getAttribute($context["messagerow"], "S_PM_UNREAD", array())) {
                            echo "topictitle";
                        } else {
                            echo "nothing";
                        }
                        echo "\">";
                        echo $this->getAttribute($context["messagerow"], "SUBJECT", array());
                        echo "</a><br />
\t\t\t\t";
                    }
                    // line 69
                    echo "\t\t\t\t";
                    if ((isset($context["S_SHOW_RECIPIENTS"]) ? $context["S_SHOW_RECIPIENTS"] : null)) {
                        echo $this->env->getExtension('phpbb')->lang("BY");
                        echo "&nbsp;";
                        echo $this->getAttribute($context["messagerow"], "RECIPIENTS", array());
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("BY");
                        echo "&nbsp;";
                        echo $this->getAttribute($context["messagerow"], "MESSAGE_AUTHOR_FULL", array());
                    }
                    // line 70
                    echo "\t\t\t\t";
                    if ($this->getAttribute($context["messagerow"], "S_PM_REPORTED", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["messagerow"], "U_MCP_REPORT", array());
                        echo "\"><i class=\"fa fa-exclamation-sign\"></i></a>";
                    }
                    if ($this->getAttribute($context["messagerow"], "ATTACH_ICON_IMG", array())) {
                        echo "<i class=\"icon-paper-clip icon-flip-horizontal\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"";
                        echo $this->env->getExtension('phpbb')->lang("ATTACH_FORUM");
                        echo "\"></i> ";
                    }
                    // line 71
                    echo "\t\t\t\t";
                    if ($this->getAttribute($context["messagerow"], "S_AUTHOR_DELETED", array())) {
                        // line 72
                        echo "\t\t\t\t<br /><small>";
                        echo $this->env->getExtension('phpbb')->lang("PM_FROM_REMOVED_AUTHOR");
                        echo "</small>
\t\t\t\t";
                    }
                    // line 74
                    echo "\t\t\t\t";
                    if ((isset($context["S_UNREAD"]) ? $context["S_UNREAD"] : null)) {
                        if ($this->getAttribute($context["messagerow"], "FOLDER", array())) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["messagerow"], "U_FOLDER", array());
                            echo "\">";
                            echo $this->getAttribute($context["messagerow"], "FOLDER", array());
                            echo "</a>";
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("UNKNOWN_FOLDER");
                        }
                    }
                    // line 75
                    echo "\t\t\t</td>
            <td>";
                    // line 76
                    if ((isset($context["S_SHOW_RECIPIENTS"]) ? $context["S_SHOW_RECIPIENTS"] : null)) {
                        echo $this->getAttribute($context["messagerow"], "SENT_TIME", array());
                    } else {
                        echo $this->getAttribute($context["messagerow"], "SENT_TIME", array());
                    }
                    echo "</td>
            <td class=\"table-check\"><div class=\"checker\"><input id=\"";
                    // line 77
                    echo $this->getAttribute($context["messagerow"], "MESSAGE_ID", array());
                    echo "\" name=\"marked_msg_id[]\" value=\"";
                    echo $this->getAttribute($context["messagerow"], "MESSAGE_ID", array());
                    echo "\" type=\"checkbox\"><label for=\"";
                    echo $this->getAttribute($context["messagerow"], "MESSAGE_ID", array());
                    echo "\"></label></div></td>
\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messagerow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "\t\t</tbody>
\t</table>
\t</div>
\t</div>
\t";
            } else {
                // line 85
                echo "\t\t<p><strong>
\t\t\t";
                // line 86
                if (((isset($context["S_COMPOSE_PM_VIEW"]) ? $context["S_COMPOSE_PM_VIEW"] : null) && (isset($context["S_NO_AUTH_SEND_MESSAGE"]) ? $context["S_NO_AUTH_SEND_MESSAGE"] : null))) {
                    // line 87
                    echo "\t\t\t\t";
                    if ((isset($context["S_USER_NEW"]) ? $context["S_USER_NEW"] : null)) {
                        echo $this->env->getExtension('phpbb')->lang("USER_NEW_PERMISSION_DISALLOWED");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO_AUTH_SEND_MESSAGE");
                    }
                    // line 88
                    echo "\t\t\t";
                } else {
                    // line 89
                    echo "\t\t\t\t";
                    echo $this->env->getExtension('phpbb')->lang("NO_MESSAGES");
                    echo "
\t\t\t";
                }
                // line 91
                echo "\t\t</strong></p>
\t";
            }
            // line 93
            echo "
";
            // line 94
            if (((isset($context["FOLDER_CUR_MESSAGES"]) ? $context["FOLDER_CUR_MESSAGES"] : null) != 0)) {
                // line 95
                echo "\t<div class=\"table_options\">
             <div class=\"pull-left\">
                <div class=\"btn-group\">
                    <div class=\"dropdown\">
                        <a href=\"#\" data-toggle=\"dropdown\" class=\"btn btn-default\" title=\"\"><i class=\"fa fa-check-square-o\"></i>&nbsp;<span class=\"caret\"></span></a>
                          <ul class=\"dropdown-menu\">
                            <li><a href=\"#\" onclick=\"marklist('viewfolder', 'marked_msg', true); return false;\" title=\"\"><i class=\"fa fa-check-square-o\"></i>";
                // line 101
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</a></li>
                            <li><a href=\"#\" onclick=\"marklist('viewfolder', 'marked_msg', false); return false;\" title=\"\"><i class=\"fa fa-square-o\"></i>";
                // line 102
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a></li>
                          </ul>
                    </div>
            </div>
            <div class=\"btn-group\">
                 <div class=\"dropdown\">
                    <a href=\"#\" data-toggle=\"dropdown\" class=\"btn btn-default\" title=\"\"><i class=\"fa fa-folder\"></i>&nbsp;<span class=\"caret\"></span></a>
                       <ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a href=\"";
                // line 110
                echo (isset($context["U_UCP_PM_INBOX"]) ? $context["U_UCP_PM_INBOX"] : null);
                echo "\" title=\"\"><i class=\"fa fa-download\"></i>";
                echo $this->env->getExtension('phpbb')->lang("UCP_PM_INBOX");
                echo "</a></li>
                        <li><a href=\"";
                // line 111
                echo (isset($context["U_UCP_PM_SENTBOX"]) ? $context["U_UCP_PM_SENTBOX"] : null);
                echo "\" title=\"\"><i class=\"fa fa-upload\"></i>";
                echo $this->env->getExtension('phpbb')->lang("UCP_PM_SENTBOX");
                echo "</a></li>
                        <li><a href=\"";
                // line 112
                echo (isset($context["U_UCP_PM_OUTBOX"]) ? $context["U_UCP_PM_OUTBOX"] : null);
                echo "\" title=\"\"><i class=\"fa fa-upload\"></i>";
                echo $this->env->getExtension('phpbb')->lang("UCP_PM_OUTBOX");
                echo "</a></li>
                       </ul>
                 </div>
           </div>
           </div>
\t\t 
\t    <div class=\"clearfix\">
\t\t<ul class=\"pagination pagination-sm pull-right\">
\t\t";
                // line 120
                if (((isset($context["FOLDER_CUR_MESSAGES"]) ? $context["FOLDER_CUR_MESSAGES"] : null) != 0)) {
                    echo "<li><a title=\"\" data-original-title=\"\" href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\">";
                    echo $this->env->getExtension('phpbb')->lang("OPTIONS");
                    echo "</a></li>";
                }
                // line 121
                echo "\t\t <li><a>";
                echo (isset($context["TOTAL_MESSAGES"]) ? $context["TOTAL_MESSAGES"] : null);
                echo "</a></li>
\t\t";
                // line 122
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                    // line 123
                    echo "\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_pm_viewfolder.html", 123)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 124
                    echo "\t\t";
                } else {
                    // line 125
                    echo "\t\t\t<li class=\"active\"><a>";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "</a></li>\t
\t\t";
                }
                // line 127
                echo "     </ul>
        </div>
    </div>
";
            }
            // line 131
            echo "
\t<div class=\"space10\"></div>

";
            // line 134
            if (((isset($context["FOLDER_CUR_MESSAGES"]) ? $context["FOLDER_CUR_MESSAGES"] : null) != 0)) {
                // line 135
                echo "<fieldset>
 <div class=\"clearfix\">
\t<div class=\"hidden-xs\">
\t   <div class=\"input-group col-md-4 col-sm-5 pull-right\">
\t\t<select class=\"selectpicker\" data-width=\"auto\" data-style=\"btn btn-default form-control\" name=\"export_option\" id=\"export_option\">
\t\t<option data-icon=\"icon-download-alt\"  value=\"CSV\">";
                // line 140
                echo $this->env->getExtension('phpbb')->lang("EXPORT_AS_CSV");
                echo "</option>
\t\t<option data-icon=\"icon-align-justify\" value=\"CSV_EXCEL\">";
                // line 141
                echo $this->env->getExtension('phpbb')->lang("EXPORT_AS_CSV_EXCEL");
                echo "</option>
\t\t<option data-icon=\"icon-columns\" value=\"XML\">";
                // line 142
                echo $this->env->getExtension('phpbb')->lang("EXPORT_AS_XML");
                echo "</option>
\t\t</select>
\t\t<div class=\"input-group-btn\">
\t\t<button type=\"submit\" name=\"submit_export\" class=\"btn btn-default\">";
                // line 145
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "</button>
\t\t</div>
\t   </div>
\t</div>
\t\t
\t<div class=\"input-group col-md-4 col-sm-5\">
\t\t<select class=\"selectpicker\" data-width=\"auto\" data-style=\"btn btn-default form-control\" name=\"mark_option\">
\t\t";
                // line 152
                echo (isset($context["S_MARK_OPTIONS"]) ? $context["S_MARK_OPTIONS"] : null);
                echo "
\t\t";
                // line 153
                echo (isset($context["S_MOVE_MARKED_OPTIONS"]) ? $context["S_MOVE_MARKED_OPTIONS"] : null);
                echo "
\t\t</select> 
\t\t<div class=\"input-group-btn\">
\t\t<button type=\"submit\" name=\"submit_mark\" class=\"btn btn-default\">";
                // line 156
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "</button>
\t\t</div>
\t</div>\t
 </div>
</fieldset>
";
            }
            // line 162
            echo "\t
\t<!-- </fieldset> phpBB 3.0.x FORMER DOUBLE DIV PANEL AND INNER FOR VIEW FOLDER AND VIEW MESSASGE -->

\t<div class=\"space10\"></div>
<div class=\"hidden-xs\">
";
            // line 167
            if (((isset($context["FOLDER_CUR_MESSAGES"]) ? $context["FOLDER_CUR_MESSAGES"] : null) != 0)) {
                // line 168
                echo "\t<fieldset class=\"controls-row\">
                    <div class=\"sorting collapse\">
\t\t\t\t\t <div class=\"panel panel-default\">
\t\t\t\t\t  <div class=\"panel-body\">
                        <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                         <label for=\"bday_day\">";
                // line 174
                echo $this->env->getExtension('phpbb')->lang("DISPLAY");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>
                            <div class=\"control-row\">
                              ";
                // line 176
                echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
                echo "
                            </div>
\t\t\t\t\t\t</div>
\t 
\t                    <div class=\"col-md-4 col-sm-4\"> 
                          <label for=\"bday_day\">";
                // line 181
                echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                echo "</label>
                            <div class=\"control-row\">
                              ";
                // line 183
                echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
                echo "
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                           <label for=\"bday_day\">";
                // line 188
                echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                echo "</label>
                            <div class=\"control-row\">
\t\t\t\t\t\t\t<div class=\"input-group\">
                             ";
                // line 191
                echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
                echo "
\t\t\t\t\t\t\t <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" name=\"sort\" type=\"submit\">";
                // line 193
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "</button>
\t\t\t\t\t\t\t  <input type=\"hidden\" name=\"cur_folder_id\" value=\"";
                // line 194
                echo (isset($context["CUR_FOLDER_ID"]) ? $context["CUR_FOLDER_ID"] : null);
                echo "\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    </div>   
\t\t\t\t\t\t</div>
                        </div>
                      </div>
\t\t\t\t\t </div>
\t\t\t\t\t</div>
            <!-- // Widget --> 
\t</fieldset> 
";
            }
            // line 206
            echo "</div>

\t";
            // line 208
            $location = "ucp_pm_message_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_pm_message_footer.html", "ucp_pm_viewfolder.html", 208)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 210
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_pm_viewfolder.html", 210)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_pm_viewfolder.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 210,  559 => 208,  555 => 206,  540 => 194,  536 => 193,  531 => 191,  525 => 188,  517 => 183,  512 => 181,  504 => 176,  498 => 174,  490 => 168,  488 => 167,  481 => 162,  472 => 156,  466 => 153,  462 => 152,  452 => 145,  446 => 142,  442 => 141,  438 => 140,  431 => 135,  429 => 134,  424 => 131,  418 => 127,  412 => 125,  409 => 124,  396 => 123,  394 => 122,  389 => 121,  383 => 120,  370 => 112,  364 => 111,  358 => 110,  347 => 102,  343 => 101,  335 => 95,  333 => 94,  330 => 93,  326 => 91,  320 => 89,  317 => 88,  310 => 87,  308 => 86,  305 => 85,  298 => 80,  285 => 77,  277 => 76,  274 => 75,  261 => 74,  255 => 72,  252 => 71,  240 => 70,  229 => 69,  211 => 67,  206 => 65,  199 => 64,  197 => 63,  193 => 61,  189 => 60,  182 => 56,  170 => 55,  157 => 54,  148 => 48,  144 => 46,  142 => 45,  139 => 44,  131 => 41,  128 => 40,  126 => 39,  123 => 38,  117 => 35,  114 => 34,  112 => 33,  109 => 32,  102 => 28,  96 => 27,  90 => 26,  78 => 18,  69 => 13,  61 => 10,  55 => 8,  53 => 7,  50 => 6,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
