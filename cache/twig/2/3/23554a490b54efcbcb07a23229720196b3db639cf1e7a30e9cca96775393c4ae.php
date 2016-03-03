<?php

/* mcp_post.html */
class __TwigTemplate_23554a490b54efcbcb07a23229720196b3db639cf1e7a30e9cca96775393c4ae extends Twig_Template
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
        $this->loadTemplate("mcp_header.html", "mcp_post.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"tab-pane active\">
";
        // line 3
        if ((isset($context["S_MCP_REPORT"]) ? $context["S_MCP_REPORT"] : null)) {
            // line 4
            echo "\t";
            if ((isset($context["S_PM"]) ? $context["S_PM"] : null)) {
                // line 5
                echo "\t<div class=\"side-segment\"><h3>";
                echo $this->env->getExtension('phpbb')->lang("PM_REPORT_DETAILS");
                echo "</h3></div>
\t";
            } else {
                // line 7
                echo "\t<div class=\"side-segment\"><h3>";
                echo $this->env->getExtension('phpbb')->lang("REPORT_DETAILS");
                echo "</h3></div>
\t";
            }
            // line 9
            echo "
<div id=\"report\" class=\"well\">
\t<div class=\"clearfix\">
\t\t
\t\t<div class=\"pull-right\">
\t     <form method=\"post\" id=\"mcp_report\" action=\"";
            // line 14
            echo (isset($context["S_CLOSE_ACTION"]) ? $context["S_CLOSE_ACTION"] : null);
            echo "\">
\t      <fieldset>
\t\t  <div class=\"btn-group\">
\t\t   ";
            // line 17
            if ( !(isset($context["S_REPORT_CLOSED"]) ? $context["S_REPORT_CLOSED"] : null)) {
                // line 18
                echo "\t\t\t<button class=\"btn btn-sm btn-default\" type=\"submit\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("CLOSE_REPORT");
                echo "\" name=\"action[close]\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("CLOSE_REPORT");
                echo "\"><i class=\"fa fa-lock\"></i></button>
\t\t  ";
            }
            // line 20
            echo "\t\t    <button class=\"btn btn-sm btn-default\" type=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("DELETE_REPORT");
            echo "\" name=\"action[delete]\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("DELETE_REPORT");
            echo "\"><i class=\"fa fa-trash-o\"></i></button>
\t\t   </div>
\t\t   <input type=\"hidden\" name=\"report_id_list[]\" value=\"";
            // line 22
            echo (isset($context["REPORT_ID"]) ? $context["REPORT_ID"] : null);
            echo "\" />
\t\t    ";
            // line 23
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t      </fieldset>
\t     </form>
\t    </div>
\t
    <h3>";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("REPORT_REASON");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "&nbsp;";
            echo (isset($context["REPORT_REASON_TITLE"]) ? $context["REPORT_REASON_TITLE"] : null);
            echo "</h3>
\t<p class=\"author\">";
            // line 29
            echo $this->env->getExtension('phpbb')->lang("REPORTED");
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo "&nbsp;";
            echo (isset($context["REPORTER_FULL"]) ? $context["REPORTER_FULL"] : null);
            echo "&nbsp;&laquo;&nbsp;";
            echo (isset($context["REPORT_DATE"]) ? $context["REPORT_DATE"] : null);
            echo "</p>
\t\t";
            // line 30
            if ((isset($context["S_REPORT_CLOSED"]) ? $context["S_REPORT_CLOSED"] : null)) {
                // line 31
                echo "\t\t<div class=\"alert alert-info fade in\">
            <i class=\"fa fa-info\"></i>&nbsp;";
                // line 32
                echo $this->env->getExtension('phpbb')->lang("REPORT_CLOSED");
                echo "
        </div>
\t\t";
            }
            // line 35
            echo "\t\t\t<div class=\"content\">
\t\t\t";
            // line 36
            if ((isset($context["REPORT_TEXT"]) ? $context["REPORT_TEXT"] : null)) {
                // line 37
                echo "\t\t\t\t";
                echo (isset($context["REPORT_TEXT"]) ? $context["REPORT_TEXT"] : null);
                echo "
\t\t\t";
            } else {
                // line 39
                echo "\t\t\t\t";
                echo (isset($context["REPORT_REASON_DESCRIPTION"]) ? $context["REPORT_REASON_DESCRIPTION"] : null);
                echo "
\t\t\t";
            }
            // line 41
            echo "\t\t\t</div>
\t\t\t
\t</div>
</div>
";
        } else {
            // line 46
            echo "\t<div class=\"side-segment\"><h3>";
            echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
            echo "</h3></div>
";
        }
        // line 48
        echo "

<div class=\"well well-sm\"> 
\t<h3><a href=\"";
        // line 51
        echo (isset($context["U_VIEW_POST"]) ? $context["U_VIEW_POST"] : null);
        echo "\">";
        echo (isset($context["POST_SUBJECT"]) ? $context["POST_SUBJECT"] : null);
        echo "</a><small class=\"pull-right\" id=\"review\">
\t <a data-text-swap=\"";
        // line 52
        echo $this->env->getExtension('phpbb')->lang("EXPAND_CLOSE");
        echo "\" data-text-original=\"";
        echo $this->env->getExtension('phpbb')->lang("EXPAND_VIEW");
        echo "\" class=\"topicreview-trigger\" href=\"#review\">";
        echo $this->env->getExtension('phpbb')->lang("EXPAND_VIEW");
        echo "</a>
\t</small></h3>
\t\t";
        // line 54
        if ((isset($context["S_PM"]) ? $context["S_PM"] : null)) {
            // line 55
            echo "\t\t<p class=\"author\">
\t\t\t<strong>";
            // line 56
            echo $this->env->getExtension('phpbb')->lang("SENT_AT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong>&nbsp;";
            echo (isset($context["POST_DATE"]) ? $context["POST_DATE"] : null);
            echo "
\t\t\t<br /><strong>";
            // line 57
            echo $this->env->getExtension('phpbb')->lang("PM_FROM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong>&nbsp;";
            echo (isset($context["POST_AUTHOR_FULL"]) ? $context["POST_AUTHOR_FULL"] : null);
            echo "
\t\t\t";
            // line 58
            if ((isset($context["S_TO_RECIPIENT"]) ? $context["S_TO_RECIPIENT"] : null)) {
                echo "<br /><strong>";
                echo $this->env->getExtension('phpbb')->lang("TO");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "to_recipient", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                    if ($this->getAttribute($context["to_recipient"], "NAME_FULL", array())) {
                        echo $this->getAttribute($context["to_recipient"], "NAME_FULL", array());
                    } else {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["to_recipient"], "U_VIEW", array());
                        echo "\" style=\"color:";
                        if ($this->getAttribute($context["to_recipient"], "COLOUR", array())) {
                            echo $this->getAttribute($context["to_recipient"], "COLOUR", array());
                        } elseif ($this->getAttribute($context["to_recipient"], "IS_GROUP", array())) {
                            echo "#0000FF";
                        }
                        echo ";\">";
                        echo $this->getAttribute($context["to_recipient"], "NAME", array());
                        echo "</a>";
                    }
                    echo "&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 59
            echo "\t\t\t";
            if ((isset($context["S_BCC_RECIPIENT"]) ? $context["S_BCC_RECIPIENT"] : null)) {
                echo "<br /><strong>";
                echo $this->env->getExtension('phpbb')->lang("BCC");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "bcc_recipient", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["bcc_recipient"]) {
                    if ($this->getAttribute($context["bcc_recipient"], "NAME_FULL", array())) {
                        echo $this->getAttribute($context["bcc_recipient"], "NAME_FULL", array());
                    } else {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["bcc_recipient"], "U_VIEW", array());
                        echo "\" style=\"color:";
                        if ($this->getAttribute($context["bcc_recipient"], "COLOUR", array())) {
                            echo $this->getAttribute($context["bcc_recipient"], "COLOUR", array());
                        } elseif ($this->getAttribute($context["bcc_recipient"], "IS_GROUP", array())) {
                            echo "#0000FF";
                        }
                        echo ";\">";
                        echo $this->getAttribute($context["bcc_recipient"], "NAME", array());
                        echo "</a>";
                    }
                    echo "&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcc_recipient'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 60
            echo "\t\t</p>
\t\t";
        } else {
            // line 62
            echo "\t\t<div class=\"pull-left\">
\t\t <i class=\"fa fa-file\"></i>&nbsp;";
            // line 63
            echo $this->env->getExtension('phpbb')->lang("POSTED");
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo "&nbsp;";
            echo (isset($context["POST_AUTHOR_FULL"]) ? $context["POST_AUTHOR_FULL"] : null);
            echo "&nbsp;&raquo;&nbsp;<i class=\"fa fa-clock-o\"></i>&nbsp;";
            echo (isset($context["POST_DATE"]) ? $context["POST_DATE"] : null);
            echo "
\t\t</div>
\t\t";
        }
        // line 66
        echo "        <div class=\"pull-right\">
\t\t";
        // line 67
        if ((isset($context["U_EDIT"]) ? $context["U_EDIT"] : null)) {
            // line 68
            echo "\t\t <a class=\"btn btn-sm btn-default\" href=\"";
            echo (isset($context["U_EDIT"]) ? $context["U_EDIT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("EDIT_POST");
            echo "\"><i class=\"fa fa-edit\"></i></a>
\t\t";
        }
        // line 70
        echo "\t\t";
        if ((isset($context["S_POST_UNAPPROVED"]) ? $context["S_POST_UNAPPROVED"] : null)) {
            // line 71
            echo "\t\t<div class=\"pull-right\">
\t\t\t<form method=\"post\" id=\"mcp_approve\" action=\"";
            // line 72
            echo (isset($context["U_APPROVE_ACTION"]) ? $context["U_APPROVE_ACTION"] : null);
            echo "\">
\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t<button class=\"btn btn-default\" type=\"submit\" value=\"";
            // line 74
            echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
            echo "\" name=\"action[disapprove]\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
            echo "\"><i class=\"fa fa-thumbs-down\"></i></button>
\t\t\t\t<button class=\"btn btn-default\" type=\"submit\" value=\"";
            // line 75
            echo $this->env->getExtension('phpbb')->lang("APPROVE");
            echo "\" name=\"action[approve]\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("APPROVE");
            echo "\"><i class=\"fa fa-thumbs-up\"></i></button>
\t\t\t</div>
\t\t\t\t";
            // line 77
            if ( !(isset($context["S_FIRST_POST"]) ? $context["S_FIRST_POST"] : null)) {
                echo "<input type=\"hidden\" name=\"mode\" value=\"unapproved_posts\" />";
            }
            // line 78
            echo "\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
            echo (isset($context["POST_ID"]) ? $context["POST_ID"] : null);
            echo "\" />
\t\t\t\t";
            // line 79
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t</form>
\t\t </div>
\t\t";
        }
        // line 83
        echo "\t  </div>
\t  
\t\t<div class=\"space10\"></div>
\t\t
\t\t";
        // line 87
        if ((isset($context["S_MESSAGE_REPORTED"]) ? $context["S_MESSAGE_REPORTED"] : null)) {
            // line 88
            echo "\t\t\t<p class=\"rules\">
\t\t\t\t";
            // line 89
            echo (isset($context["REPORTED_IMG"]) ? $context["REPORTED_IMG"] : null);
            echo "&nbsp;<a href=\"";
            echo (isset($context["U_MCP_REPORT"]) ? $context["U_MCP_REPORT"] : null);
            echo "\"><strong>";
            echo $this->env->getExtension('phpbb')->lang("MESSAGE_REPORTED");
            echo "</strong></a>
\t\t\t</p>
\t\t";
        }
        // line 92
        echo "
\t\t<div class=\"content topicreview\">
\t\t\t";
        // line 94
        echo (isset($context["POST_PREVIEW"]) ? $context["POST_PREVIEW"] : null);
        echo "
\t\t</div>

\t\t";
        // line 97
        if ((isset($context["S_HAS_ATTACHMENTS"]) ? $context["S_HAS_ATTACHMENTS"] : null)) {
            // line 98
            echo "\t\t\t<div class=\"attachbox\">
\t\t\t\t<h5>";
            // line 99
            echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
            echo "</h5>
\t\t\t\t";
            // line 100
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attachment", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 101
                echo "\t\t\t\t\t<span>";
                echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                echo "</span>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "\t\t\t</div>
\t\t";
        }
        // line 105
        echo "
\t\t";
        // line 106
        if (((isset($context["DELETED_MESSAGE"]) ? $context["DELETED_MESSAGE"] : null) || (isset($context["DELETE_REASON"]) ? $context["DELETE_REASON"] : null))) {
            // line 107
            echo "\t\t\t<div class=\"notice\">
\t\t\t\t";
            // line 108
            echo (isset($context["DELETED_MESSAGE"]) ? $context["DELETED_MESSAGE"] : null);
            echo "
\t\t\t\t";
            // line 109
            if ((isset($context["DELETE_REASON"]) ? $context["DELETE_REASON"] : null)) {
                echo "<br /><strong>";
                echo $this->env->getExtension('phpbb')->lang("REASON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> <em>";
                echo (isset($context["DELETE_REASON"]) ? $context["DELETE_REASON"] : null);
                echo "</em>";
            }
            // line 110
            echo "\t\t\t</div>
\t\t";
        }
        // line 112
        echo "\t\t
\t\t";
        // line 113
        if ((isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null)) {
            // line 114
            echo "\t\t\t<div id=\"sig";
            echo (isset($context["POST_ID"]) ? $context["POST_ID"] : null);
            echo "\" class=\"signature\">";
            echo (isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null);
            echo "</div>
\t\t";
        }
        // line 116
        echo "
\t\t";
        // line 117
        if (((isset($context["S_MCP_REPORT"]) ? $context["S_MCP_REPORT"] : null) && (isset($context["S_CAN_VIEWIP"]) ? $context["S_CAN_VIEWIP"] : null))) {
            // line 118
            echo "\t\t<hr />
\t\t\t";
            // line 119
            if ((isset($context["S_PM"]) ? $context["S_PM"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("THIS_PM_IP");
            } else {
                echo $this->env->getExtension('phpbb')->lang("THIS_POST_IP");
            }
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "
\t\t\t";
            // line 120
            if ((isset($context["U_WHOIS"]) ? $context["U_WHOIS"] : null)) {
                // line 121
                echo "\t\t\t<a href=\"";
                echo (isset($context["U_WHOIS"]) ? $context["U_WHOIS"] : null);
                echo "\">";
                if ((isset($context["POST_IPADDR"]) ? $context["POST_IPADDR"] : null)) {
                    echo (isset($context["POST_IPADDR"]) ? $context["POST_IPADDR"] : null);
                } else {
                    echo (isset($context["POST_IP"]) ? $context["POST_IP"] : null);
                }
                echo "</a>
\t\t\t";
                // line 122
                if ((isset($context["POST_IPADDR"]) ? $context["POST_IPADDR"] : null)) {
                    echo (isset($context["POST_IP"]) ? $context["POST_IP"] : null);
                } else {
                    echo "&nbsp;&#40;<a href=\"";
                    echo (isset($context["U_LOOKUP_IP"]) ? $context["U_LOOKUP_IP"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("LOOKUP_IP");
                    echo "</a>&#41;";
                }
                // line 123
                echo "\t\t\t";
            } else {
                // line 124
                echo "\t\t\t ";
                if ((isset($context["POST_IPADDR"]) ? $context["POST_IPADDR"] : null)) {
                    echo (isset($context["POST_IPADDR"]) ? $context["POST_IPADDR"] : null);
                    echo "&nbsp;&#40;";
                    echo (isset($context["POST_IP"]) ? $context["POST_IP"] : null);
                    echo "&#41;";
                } else {
                    echo "<span class=\"label label-default\">";
                    echo (isset($context["POST_IP"]) ? $context["POST_IP"] : null);
                    echo "</span>";
                    if ((isset($context["U_LOOKUP_IP"]) ? $context["U_LOOKUP_IP"] : null)) {
                        echo "&nbsp;&#40;<a href=\"";
                        echo (isset($context["U_LOOKUP_IP"]) ? $context["U_LOOKUP_IP"] : null);
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("LOOKUP_IP");
                        echo "</a>&#41;";
                    }
                }
                // line 125
                echo "\t\t\t";
            }
            // line 126
            echo "\t\t";
        }
        // line 127
        echo "</div>


";
        // line 130
        if (((((isset($context["S_CAN_LOCK_POST"]) ? $context["S_CAN_LOCK_POST"] : null) || (isset($context["S_CAN_DELETE_POST"]) ? $context["S_CAN_DELETE_POST"] : null)) || (isset($context["S_CAN_CHGPOSTER"]) ? $context["S_CAN_CHGPOSTER"] : null)) || (isset($context["S_MCP_POST_ADDITIONAL_OPTS"]) ? $context["S_MCP_POST_ADDITIONAL_OPTS"] : null))) {
            // line 131
            echo "    <div class=\"clearfix\">
\t\t";
            // line 132
            if ((isset($context["S_CAN_CHGPOSTER"]) ? $context["S_CAN_CHGPOSTER"] : null)) {
                // line 133
                echo "\t\t<form method=\"post\" id=\"mcp_chgposter\" action=\"";
                echo (isset($context["U_POST_ACTION"]) ? $context["U_POST_ACTION"] : null);
                echo "\">
\t\t <fieldset class=\"framed-ucp\">
\t\t   <legend>";
                // line 135
                echo $this->env->getExtension('phpbb')->lang("MOD_OPTIONS");
                echo "</legend>
           
\t\t   <div class=\"row\">
\t\t    <div class=\"col-md-6\">
\t\t\t";
                // line 139
                if ((isset($context["S_USER_SELECT"]) ? $context["S_USER_SELECT"] : null)) {
                    // line 140
                    echo "\t\t\t<label class=\"control-label\">";
                    echo $this->env->getExtension('phpbb')->lang("CHANGE_POSTER");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label>
\t\t\t<div class=\"input-group\">
\t\t\t<select data-container=\"body\" data-width=\"auto\" data-style=\"btn btn-default form-control\" class=\"selectpicker\" name=\"u\">";
                    // line 142
                    echo (isset($context["S_USER_SELECT"]) ? $context["S_USER_SELECT"] : null);
                    echo "</select> 
\t\t\t<span class=\"input-group-btn\">
\t\t\t<button type=\"submit\" class=\"btn btn-default\" name=\"action[chgposter_ip]\" value=\"";
                    // line 144
                    echo $this->env->getExtension('phpbb')->lang("CONFIRM");
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("CONFIRM");
                    echo "</button>
\t\t\t</span>
\t\t\t</div>
\t\t\t</div>
\t\t\t";
                }
                // line 149
                echo "\t\t\t
\t\t\t<div class=\"col-md-6\">
\t\t\t<label class=\"control-label\">";
                // line 151
                echo $this->env->getExtension('phpbb')->lang("CHANGE_POSTER");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "<span>&nbsp;&#91;&nbsp;<a href=\"";
                echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
                echo "\" onclick=\"find_username(this.href); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                echo "</a>&nbsp;&#93;</span></label>
\t\t\t<div class=\"input-group\">
\t\t\t<input class=\"form-control\" type=\"text\" name=\"username\" value=\"\" placeholder=\"";
                // line 153
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
                echo "\"> 
\t\t\t<span class=\"input-group-btn\">
\t\t\t<button class=\"btn btn-default\" name=\"action[chgposter]\" value=\"";
                // line 155
                echo $this->env->getExtension('phpbb')->lang("CONFIRM");
                echo "\" type=\"submit\">";
                echo $this->env->getExtension('phpbb')->lang("CONFIRM");
                echo "</button>
\t\t\t</span>
\t\t\t</div>
\t\t\t</div>
\t\t\t";
                // line 159
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t   </div>\t
\t\t </fieldset>
\t\t</form>
        ";
            }
            // line 164
            echo "
\t\t<div class=\"space10\"></div>
\t\t <div class=\"space10\"></div> 
\t\t
\t\t";
            // line 168
            // line 169
            echo "\t\t
\t\t";
            // line 170
            if (((isset($context["S_CAN_LOCK_POST"]) ? $context["S_CAN_LOCK_POST"] : null) || (isset($context["S_CAN_DELETE_POST"]) ? $context["S_CAN_DELETE_POST"] : null))) {
                // line 171
                echo "\t\t <form method=\"post\" id=\"mcp\" action=\"";
                echo (isset($context["U_MCP_ACTION"]) ? $context["U_MCP_ACTION"] : null);
                echo "\">
\t\t  <fieldset class=\"framed-ucp\">
\t\t  <legend>";
                // line 173
                echo $this->env->getExtension('phpbb')->lang("MOD_OPTIONS");
                echo "</legend>
\t\t   <label class=\"control-label\">";
                // line 174
                echo $this->env->getExtension('phpbb')->lang("MOD_OPTIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>
\t\t\t<div class=\"input-group col-md-4\">
\t\t\t    <select data-container=\"body\" data-width=\"auto\" data-style=\"btn btn-default form-control\" class=\"selectpicker\" name=\"action\">
\t\t\t\t\t";
                // line 177
                if ((isset($context["S_CAN_LOCK_POST"]) ? $context["S_CAN_LOCK_POST"] : null)) {
                    if ((isset($context["S_POST_LOCKED"]) ? $context["S_POST_LOCKED"] : null)) {
                        echo "<option value=\"unlock_post\">";
                        echo $this->env->getExtension('phpbb')->lang("UNLOCK_POST");
                        echo "&nbsp;&#91;";
                        echo $this->env->getExtension('phpbb')->lang("UNLOCK_POST_EXPLAIN");
                        echo "&#93;</option>";
                    } else {
                        echo "<option value=\"lock_post\">";
                        echo $this->env->getExtension('phpbb')->lang("LOCK_POST");
                        echo "&nbsp;&#91;";
                        echo $this->env->getExtension('phpbb')->lang("LOCK_POST_EXPLAIN");
                        echo "&#93;</option>";
                    }
                }
                // line 178
                echo "\t\t\t\t\t";
                if ((isset($context["S_CAN_DELETE_POST"]) ? $context["S_CAN_DELETE_POST"] : null)) {
                    echo "<option value=\"delete_post\">";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST");
                    echo "</option>";
                }
                // line 179
                echo "\t\t\t\t</select> 
\t\t\t<span class=\"input-group-btn\">\t
\t\t\t\t<button class=\"btn btn-default\" type=\"submit\" value=\"";
                // line 181
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "</button>
\t\t\t</span>
\t\t\t</div>
\t\t\t";
                // line 184
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t  </fieldset>
\t\t </form>
        ";
            }
            // line 188
            echo "    </div>
";
        }
        // line 190
        echo "

";
        // line 192
        if ((((isset($context["S_MCP_QUEUE"]) ? $context["S_MCP_QUEUE"] : null) || (isset($context["S_MCP_REPORT"]) ? $context["S_MCP_REPORT"] : null)) || (isset($context["RETURN_TOPIC"]) ? $context["RETURN_TOPIC"] : null))) {
            // line 193
            echo "<p>";
            if ((isset($context["S_MCP_QUEUE"]) ? $context["S_MCP_QUEUE"] : null)) {
                echo (isset($context["RETURN_QUEUE"]) ? $context["RETURN_QUEUE"] : null);
                echo "&nbsp;&#124;&nbsp;";
                echo (isset($context["RETURN_TOPIC_SIMPLE"]) ? $context["RETURN_TOPIC_SIMPLE"] : null);
                echo "&nbsp;&#124;&nbsp;";
                echo (isset($context["RETURN_POST"]) ? $context["RETURN_POST"] : null);
            } elseif ((isset($context["S_MCP_REPORT"]) ? $context["S_MCP_REPORT"] : null)) {
                echo (isset($context["RETURN_REPORTS"]) ? $context["RETURN_REPORTS"] : null);
                if ( !(isset($context["S_PM"]) ? $context["S_PM"] : null)) {
                    echo "&nbsp;&#124;&nbsp;<a href=\"";
                    echo (isset($context["U_VIEW_POST"]) ? $context["U_VIEW_POST"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_POST");
                    echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
                    echo (isset($context["U_VIEW_TOPIC"]) ? $context["U_VIEW_TOPIC"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC");
                    echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
                    echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_FORUM");
                    echo "</a>";
                }
            } else {
                echo (isset($context["RETURN_TOPIC"]) ? $context["RETURN_TOPIC"] : null);
            }
            echo "</p>
";
        }
        // line 195
        echo "

";
        // line 197
        if ((isset($context["S_MCP_QUEUE"]) ? $context["S_MCP_QUEUE"] : null)) {
        } else {
            // line 199
            if ((isset($context["S_SHOW_USER_NOTES"]) ? $context["S_SHOW_USER_NOTES"] : null)) {
                // line 200
                echo "\t<div class=\"well\" id=\"usernotes\">
\t\t<form method=\"post\" id=\"mcp_notes\" action=\"";
                // line 201
                echo (isset($context["U_POST_ACTION"]) ? $context["U_POST_ACTION"] : null);
                echo "\">
\t\t\t";
                // line 202
                if ((isset($context["S_USER_NOTES"]) ? $context["S_USER_NOTES"] : null)) {
                    // line 203
                    echo "\t\t\t\t<h3>";
                    echo $this->env->getExtension('phpbb')->lang("FEEDBACK");
                    echo "</h3>
\t\t\t\t";
                    // line 204
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "usernotes", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["usernotes"]) {
                        // line 205
                        echo "\t\t\t\t\t<span class=\"small\"><strong>";
                        echo $this->env->getExtension('phpbb')->lang("REPORTED_BY");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "&nbsp;";
                        echo $this->getAttribute($context["usernotes"], "REPORT_BY", array());
                        echo "&nbsp;&laquo;&nbsp;";
                        echo $this->getAttribute($context["usernotes"], "REPORT_AT", array());
                        echo "</strong></span>
\t\t\t\t\t";
                        // line 206
                        if ((isset($context["S_CLEAR_ALLOWED"]) ? $context["S_CLEAR_ALLOWED"] : null)) {
                            echo "<input type=\"checkbox\" name=\"marknote[]\" value=\"";
                            echo $this->getAttribute($context["usernotes"], "ID", array());
                            echo "\" />";
                        }
                        // line 207
                        echo "\t\t\t\t\t<div class=\"postbody\">";
                        echo $this->getAttribute($context["usernotes"], "ACTION", array());
                        echo "</div>
\t\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usernotes'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 210
                    echo "
\t\t\t\t";
                    // line 211
                    if ((isset($context["S_CLEAR_ALLOWED"]) ? $context["S_CLEAR_ALLOWED"] : null)) {
                        // line 212
                        echo "\t\t\t\t\t<fieldset class=\"form-actions\">
\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"submit\" name=\"action[del_all]\" value=\"";
                        // line 213
                        echo $this->env->getExtension('phpbb')->lang("DELETE_ALL");
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("DELETE_ALL");
                        echo "</button>
\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"submit\" name=\"action[del_marked]\" value=\"";
                        // line 214
                        echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
                        echo "</button>
\t\t\t\t\t</fieldset>
\t\t\t\t";
                    }
                    // line 217
                    echo "\t\t\t";
                }
                // line 218
                echo "
\t\t\t<h3>";
                // line 219
                echo $this->env->getExtension('phpbb')->lang("ADD_FEEDBACK");
                echo "</h3>
\t\t\t<p>";
                // line 220
                echo $this->env->getExtension('phpbb')->lang("ADD_FEEDBACK_EXPLAIN");
                echo "</p>

\t\t\t<fieldset>
\t\t\t\t<textarea name=\"usernote\" rows=\"4\" cols=\"76\" class=\"form-control\"></textarea>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"form-actions\">
\t\t\t\t<button class=\"btn btn-default\" type=\"submit\" name=\"action[add_feedback]\" value=\"";
                // line 227
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "</button>
\t\t\t\t<button class=\"btn btn-default\" type=\"reset\" value=\"";
                // line 228
                echo $this->env->getExtension('phpbb')->lang("RESET");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RESET");
                echo "</button>
\t\t\t\t";
                // line 229
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t</fieldset>
\t\t</form>
\t</div>
";
            }
            // line 234
            echo "
\t";
            // line 235
            if ((isset($context["S_SHOW_REPORTS"]) ? $context["S_SHOW_REPORTS"] : null)) {
                // line 236
                echo "\t\t<div class=\"well\" id=\"reports\">
\t\t\t<h3>";
                // line 237
                echo $this->env->getExtension('phpbb')->lang("MCP_POST_REPORTS");
                echo "</h3>
\t\t\t";
                // line 238
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "reports", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["reports"]) {
                    // line 239
                    echo "\t\t\t\t<span class=\"small\"><strong>";
                    echo $this->env->getExtension('phpbb')->lang("REPORTED_BY");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "&nbsp;";
                    if ($this->getAttribute($context["reports"], "U_REPORTER", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["reports"], "U_REPORTER", array());
                        echo "\">";
                        echo $this->getAttribute($context["reports"], "REPORTER", array());
                        echo "</a>";
                    } else {
                        echo $this->getAttribute($context["reports"], "REPORTER", array());
                    }
                    echo "&nbsp;&laquo;&nbsp;";
                    echo $this->getAttribute($context["reports"], "REPORT_TIME", array());
                    echo "</strong></span>
\t\t\t\t<p><small>";
                    // line 240
                    echo $this->getAttribute($context["reports"], "REASON_TITLE", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "&nbsp;";
                    echo $this->getAttribute($context["reports"], "REASON_DESC", array());
                    echo "</small>";
                    if ($this->getAttribute($context["reports"], "REPORT_TEXT", array())) {
                        echo "<br />";
                        echo $this->getAttribute($context["reports"], "REPORT_TEXT", array());
                    }
                    echo "</p>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reports'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 242
                echo "\t\t</div>
\t";
            }
            // line 244
            echo "
";
            // line 245
            if (((isset($context["S_CAN_VIEWIP"]) ? $context["S_CAN_VIEWIP"] : null) &&  !(isset($context["S_MCP_REPORT"]) ? $context["S_MCP_REPORT"] : null))) {
                // line 246
                echo "\t<div id=\"ip\">
\t\t\t<p>";
                // line 247
                echo $this->env->getExtension('phpbb')->lang("THIS_POST_IP");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "&nbsp;
\t\t\t";
                // line 248
                if ((isset($context["U_WHOIS"]) ? $context["U_WHOIS"] : null)) {
                    // line 249
                    echo "\t\t\t\t<a href=\"";
                    echo (isset($context["U_WHOIS"]) ? $context["U_WHOIS"] : null);
                    echo "\">";
                    if ((isset($context["POST_IPADDR"]) ? $context["POST_IPADDR"] : null)) {
                        echo (isset($context["POST_IPADDR"]) ? $context["POST_IPADDR"] : null);
                    } else {
                        echo (isset($context["POST_IP"]) ? $context["POST_IP"] : null);
                    }
                    echo "</a>&nbsp;&#40;";
                    if ((isset($context["POST_IPADDR"]) ? $context["POST_IPADDR"] : null)) {
                        echo (isset($context["POST_IP"]) ? $context["POST_IP"] : null);
                    } else {
                        echo "<a href=\"";
                        echo (isset($context["U_LOOKUP_IP"]) ? $context["U_LOOKUP_IP"] : null);
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("LOOKUP_IP");
                        echo "</a>";
                    }
                    echo "&#41;
\t\t\t";
                } else {
                    // line 251
                    echo "\t\t\t\t";
                    if ((isset($context["POST_IPADDR"]) ? $context["POST_IPADDR"] : null)) {
                        echo (isset($context["POST_IPADDR"]) ? $context["POST_IPADDR"] : null);
                        echo "&nbsp;&#40;";
                        echo (isset($context["POST_IP"]) ? $context["POST_IP"] : null);
                        echo "&#41;";
                    } else {
                        echo (isset($context["POST_IP"]) ? $context["POST_IP"] : null);
                        if ((isset($context["U_LOOKUP_IP"]) ? $context["U_LOOKUP_IP"] : null)) {
                            echo "&nbsp;&#40;<a href=\"";
                            echo (isset($context["U_LOOKUP_IP"]) ? $context["U_LOOKUP_IP"] : null);
                            echo "\">";
                            echo $this->env->getExtension('phpbb')->lang("LOOKUP_IP");
                            echo "</a>&#41;";
                        }
                    }
                    // line 252
                    echo "\t\t\t";
                }
                // line 253
                echo "\t\t\t</p>
        <div class=\"panel panel-forum\">
\t\t   <div class=\"panel-heading\">
\t\t    <i class=\"fa fa-list-ol\"></i>&nbsp;";
                // line 256
                echo $this->env->getExtension('phpbb')->lang("USERS");
                echo "
\t\t   </div>
\t\t <div class=\"panel-inner\">
\t\t\t<table class=\"footable table table-striped table-primary table-hover\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th><i class=\"icon-moon-ipcontrol\"></i>&nbsp;";
                // line 262
                echo $this->env->getExtension('phpbb')->lang("OTHER_USERS");
                echo "</th>
\t\t\t\t<th><i class=\"fa fa-comments\"></i>&nbsp;";
                // line 263
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 267
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "userrow", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["userrow"]) {
                    // line 268
                    echo "\t\t\t<tr>
\t\t\t\t<td>";
                    // line 269
                    if ($this->getAttribute($context["userrow"], "U_PROFILE", array())) {
                        echo "<i class=\"fa fa-user\"></i><a href=\"";
                        echo $this->getAttribute($context["userrow"], "U_PROFILE", array());
                        echo "\">&nbsp;";
                        echo $this->getAttribute($context["userrow"], "USERNAME", array());
                        echo "</a>";
                    } else {
                        echo $this->getAttribute($context["userrow"], "USERNAME", array());
                    }
                    echo "</td>
\t\t\t\t<td><i class=\"fa fa-file\"></i><a href=\"";
                    // line 270
                    echo $this->getAttribute($context["userrow"], "U_SEARCHPOSTS", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_POSTS_BY");
                    echo " ";
                    echo $this->getAttribute($context["userrow"], "USERNAME", array());
                    echo "\">&nbsp;";
                    echo $this->getAttribute($context["userrow"], "NUM_POSTS", array());
                    echo "&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_POSTS_BY");
                    echo "&nbsp;";
                    echo $this->getAttribute($context["userrow"], "USERNAME", array());
                    echo "</a></td>
\t\t\t</tr>
\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 273
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">";
                    // line 274
                    echo $this->env->getExtension('phpbb')->lang("NO_MATCHES_FOUND");
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 277
                echo "\t\t\t</tbody>
\t\t\t</table>
        </div>
\t\t</div>
\t\t
\t<div class=\"panel panel-forum\">
\t\t<div class=\"panel-heading\">
\t\t <i class=\"fa fa-list-ol\"></i>&nbsp;";
                // line 284
                echo $this->env->getExtension('phpbb')->lang("MCP_IP_TITLE");
                echo "
\t\t</div>
\t\t<div class=\"panel-inner\">
\t\t\t<table class=\"footable table table-striped table-primary table-hover\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th><i class=\"icon-moon-ipcontrol\"></i>&nbsp;";
                // line 290
                echo $this->env->getExtension('phpbb')->lang("IPS_POSTED_FROM");
                echo "</th>
\t\t\t\t<th><i class=\"fa fa-comments\"></i>&nbsp;";
                // line 291
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 295
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "iprow", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["iprow"]) {
                    // line 296
                    echo "\t\t\t<tr>
\t\t\t\t<td>";
                    // line 297
                    if ($this->getAttribute($context["iprow"], "HOSTNAME", array())) {
                        echo "<i class=\"icon-moon-ipcontrol\"></i><a href=\"";
                        echo $this->getAttribute($context["iprow"], "U_WHOIS", array());
                        echo "\">&nbsp;";
                        echo $this->getAttribute($context["iprow"], "HOSTNAME", array());
                        echo "</a>&nbsp;&#40;";
                        echo $this->getAttribute($context["iprow"], "IP", array());
                        echo "&#41;";
                    } else {
                        echo "<i class=\"icon-moon-ipcontrol\"></i><a href=\"";
                        echo $this->getAttribute($context["iprow"], "U_WHOIS", array());
                        echo "\">&nbsp;";
                        echo $this->getAttribute($context["iprow"], "IP", array());
                        echo "</a>&nbsp;&#40;<a href=\"";
                        echo $this->getAttribute($context["iprow"], "U_LOOKUP_IP", array());
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("LOOKUP_IP");
                        echo "</a>&#41;";
                    }
                    echo "</td>
\t\t\t\t<td>";
                    // line 298
                    echo $this->getAttribute($context["iprow"], "NUM_POSTS", array());
                    echo "</td>
\t\t\t</tr>
\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 301
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">";
                    // line 302
                    echo $this->env->getExtension('phpbb')->lang("NO_MATCHES_FOUND");
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iprow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 305
                echo "\t\t\t</tbody>
\t\t\t<tfoot>
             <tr>
                <td colspan=\"2\"><a href=\"";
                // line 308
                echo (isset($context["U_LOOKUP_ALL"]) ? $context["U_LOOKUP_ALL"] : null);
                echo "#ip\">";
                echo $this->env->getExtension('phpbb')->lang("LOOKUP_ALL");
                echo "</a></td>
             </tr>
            </tfoot>
\t\t\t</table>
        </div>
\t\t
\t </div>
\t 
\t</div>
";
            }
            // line 318
            echo "
";
        }
        // line 320
        echo "
";
        // line 321
        if ((isset($context["S_TOPIC_REVIEW"]) ? $context["S_TOPIC_REVIEW"] : null)) {
            $location = "posting_topic_review.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_topic_review.html", "mcp_post.html", 321)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 322
        echo "<script>
// some function that depends on bootstrap and jquery
// We use a single ternary operator to check if the swap matches the orignal and perform the right action text swap based on the truthiness
head.ready(function () {

\$('.topicreview-trigger').click(function() {
  var el = \$(this);
    el.text() == el.data(\"text-swap\") ? el.text(el.data(\"text-original\")) : el.text(el.data(\"text-swap\"));
    \$('.topicreview').toggleClass('topicreview-expand');
});

});
</script>
</div>
";
        // line 336
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_post.html", 336)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1121 => 336,  1105 => 322,  1091 => 321,  1088 => 320,  1084 => 318,  1069 => 308,  1064 => 305,  1055 => 302,  1052 => 301,  1044 => 298,  1022 => 297,  1019 => 296,  1014 => 295,  1007 => 291,  1003 => 290,  994 => 284,  985 => 277,  976 => 274,  973 => 273,  955 => 270,  943 => 269,  940 => 268,  935 => 267,  928 => 263,  924 => 262,  915 => 256,  910 => 253,  907 => 252,  890 => 251,  868 => 249,  866 => 248,  861 => 247,  858 => 246,  856 => 245,  853 => 244,  849 => 242,  833 => 240,  815 => 239,  811 => 238,  807 => 237,  804 => 236,  802 => 235,  799 => 234,  791 => 229,  785 => 228,  779 => 227,  769 => 220,  765 => 219,  762 => 218,  759 => 217,  751 => 214,  745 => 213,  742 => 212,  740 => 211,  737 => 210,  727 => 207,  721 => 206,  711 => 205,  707 => 204,  702 => 203,  700 => 202,  696 => 201,  693 => 200,  691 => 199,  688 => 197,  684 => 195,  653 => 193,  651 => 192,  647 => 190,  643 => 188,  636 => 184,  628 => 181,  624 => 179,  617 => 178,  601 => 177,  594 => 174,  590 => 173,  584 => 171,  582 => 170,  579 => 169,  578 => 168,  572 => 164,  564 => 159,  555 => 155,  550 => 153,  540 => 151,  536 => 149,  526 => 144,  521 => 142,  514 => 140,  512 => 139,  505 => 135,  499 => 133,  497 => 132,  494 => 131,  492 => 130,  487 => 127,  484 => 126,  481 => 125,  462 => 124,  459 => 123,  449 => 122,  438 => 121,  436 => 120,  427 => 119,  424 => 118,  422 => 117,  419 => 116,  411 => 114,  409 => 113,  406 => 112,  402 => 110,  393 => 109,  389 => 108,  386 => 107,  384 => 106,  381 => 105,  377 => 103,  368 => 101,  364 => 100,  360 => 99,  357 => 98,  355 => 97,  349 => 94,  345 => 92,  335 => 89,  332 => 88,  330 => 87,  324 => 83,  317 => 79,  312 => 78,  308 => 77,  301 => 75,  295 => 74,  290 => 72,  287 => 71,  284 => 70,  276 => 68,  274 => 67,  271 => 66,  259 => 63,  256 => 62,  252 => 60,  221 => 59,  191 => 58,  184 => 57,  177 => 56,  174 => 55,  172 => 54,  163 => 52,  157 => 51,  152 => 48,  146 => 46,  139 => 41,  133 => 39,  127 => 37,  125 => 36,  122 => 35,  116 => 32,  113 => 31,  111 => 30,  101 => 29,  94 => 28,  86 => 23,  82 => 22,  74 => 20,  66 => 18,  64 => 17,  58 => 14,  51 => 9,  45 => 7,  39 => 5,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
