<?php

/* ucp_notifications.html */
class __TwigTemplate_9c89093dd2e779ac38feb6deb56d5b99fbce966ea56a8ce191cbf2f3e9831e91 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_notifications.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">
<div class=\"tab-pane active\">
\t<fieldset class=\"framed-ucp\">
\t <legend>";
        // line 6
        echo (isset($context["TITLE"]) ? $context["TITLE"] : null);
        echo "</legend>
       <p>";
        // line 7
        echo (isset($context["TITLE_EXPLAIN"]) ? $context["TITLE_EXPLAIN"] : null);
        echo "</p>

\t\t";
        // line 9
        if (((isset($context["MODE"]) ? $context["MODE"] : null) == "notification_options")) {
            // line 10
            echo "\t\t ";
            // line 11
            echo "\t    <div class=\"panel panel-forum\">
\t     <div class=\"panel-heading\">
\t\t  ";
            // line 13
            echo $this->env->getExtension('phpbb')->lang("NOTIFICATION_TYPE");
            echo "
\t\t </div>
\t\t <div class=\"panel-inner\">
\t\t\t<table class=\"footable table table-striped table-primary table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t\t";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notification_methods", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification_methods"]) {
                // line 21
                echo "\t\t\t\t\t\t\t<th class=\"mark text-center\">";
                echo $this->getAttribute($context["notification_methods"], "NAME", array());
                echo "</th>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_methods'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t\t\t\t\t<th class=\"mark text-center\">";
            echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
            echo "</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notification_types", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification_types"]) {
                // line 28
                echo "\t\t\t\t\t";
                if ($this->getAttribute($context["notification_types"], "GROUP_NAME", array())) {
                    // line 29
                    echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"notification-table-title\" colspan=\"";
                    // line 30
                    echo (isset($context["NOTIFICATION_TYPES_COLS"]) ? $context["NOTIFICATION_TYPES_COLS"] : null);
                    echo "\">";
                    echo $this->getAttribute($context["notification_types"], "GROUP_NAME", array());
                    echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                } else {
                    // line 33
                    echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                    // line 35
                    echo $this->getAttribute($context["notification_types"], "NAME", array());
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 36
                    if ($this->getAttribute($context["notification_types"], "EXPLAIN", array())) {
                        echo "<br />&nbsp;&nbsp;";
                        echo $this->getAttribute($context["notification_types"], "EXPLAIN", array());
                    }
                    // line 37
                    echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                    // line 38
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["notification_types"], "notification_methods", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["notification_methods"]) {
                        // line 39
                        echo "\t\t\t\t\t\t\t\t<td class=\"mark text-center\"><input data-notify=\"method";
                        echo $this->getAttribute($context["notification_methods"], "S_ROW_COUNT", array());
                        echo "\" type=\"checkbox\" name=\"";
                        echo $this->getAttribute($context["notification_types"], "TYPE", array());
                        echo "_";
                        echo $this->getAttribute($context["notification_methods"], "METHOD", array());
                        echo "\"";
                        if ($this->getAttribute($context["notification_methods"], "SUBSCRIBED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " /></td>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_methods'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "\t\t\t\t\t\t\t<td class=\"mark text-center\"><input data-notify=\"notify\" type=\"checkbox\" name=\"";
                    echo $this->getAttribute($context["notification_types"], "TYPE", array());
                    echo "_notification\"";
                    if ($this->getAttribute($context["notification_types"], "SUBSCRIBED", array())) {
                        echo " checked=\"checked\"";
                    }
                    echo " /></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_types'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"form_time\" value=\"";
            // line 47
            echo (isset($context["FORM_TIME"]) ? $context["FORM_TIME"] : null);
            echo "\" />
\t\t\t\t\t\t\t\t";
            // line 48
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t\t\t\t\t\t";
            // line 49
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 50
            if (((isset($context["MODE"]) ? $context["MODE"] : null) == "notification_options")) {
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            } else {
                echo $this->env->getExtension('phpbb')->lang("MARK_READ");
            }
            echo "\" class=\"btn btn-default\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            // line 52
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notification_methods", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification_methods"]) {
                // line 53
                echo "\t\t\t\t\t\t\t<td class=\"mark text-center btn-noti-td\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" onclick=\"\$('#ucp input[data-notify=method";
                // line 55
                echo $this->getAttribute($context["notification_methods"], "S_ROW_COUNT", array());
                echo "]').iCheck('check')\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "\"><i class=\"fa fa-check-square-o\"></i></a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" onclick=\"\$('#ucp input[data-notify=method";
                // line 56
                echo $this->getAttribute($context["notification_methods"], "S_ROW_COUNT", array());
                echo "]').iCheck('uncheck')\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "\"><i class=\"fa fa-square-o\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_methods'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "\t\t\t\t\t\t\t<td class=\"mark text-center\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" onclick=\"\$('#ucp input[data-notify=notify]').iCheck('check')\" title=\"";
            // line 62
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "\"><i class=\"fa fa-check-square-o\"></i></a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" onclick=\"\$('#ucp input[data-notify=notify]').iCheck('uncheck')\" title=\"";
            // line 63
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "\"><i class=\"fa fa-square-o\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t </div>
\t\t</div>\t
\t\t\t
\t\t";
        } else {
            // line 73
            echo "\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notification_list", array()))) {
                // line 74
                echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t <ul class=\"pagination pagination-sm pull-left\">
\t\t\t  ";
                // line 77
                if ((isset($context["U_MARK_ALL"]) ? $context["U_MARK_ALL"] : null)) {
                    echo "<li><a href=\"";
                    echo (isset($context["U_MARK_ALL"]) ? $context["U_MARK_ALL"] : null);
                    echo "\" class=\"mark\">";
                    echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS_MARK_ALL_READ");
                    echo "</a></li>";
                }
                // line 78
                echo "\t\t\t </ul>
\t\t\t</div>

\t\t\t<div class=\"col-md-8\"> 
\t\t\t <ul class=\"pagination pagination-sm pull-right\">
\t\t\t\t <li><a>";
                // line 83
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo "&nbsp;";
                echo (isset($context["TOTAL_COUNT"]) ? $context["TOTAL_COUNT"] : null);
                echo "</a></li>
\t\t\t\t";
                // line 84
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                    // line 85
                    echo "\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_notifications.html", 85)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 86
                    echo "\t\t\t\t";
                } else {
                    // line 87
                    echo "\t\t\t\t\t<li class=\"active\"><a>";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "</a></li>\t
\t\t\t\t";
                }
                // line 89
                echo "\t\t\t </ul>
\t\t   </div>
\t\t</div>
\t\t
        
\t\t\t<div class=\"clearfix\">
\t\t\t\t";
                // line 95
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notification_list", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["notification_list"]) {
                    // line 96
                    echo "\t\t\t\t<div class=\"media panel panel-default panel-body notification_list\">\t\t\t\t
\t\t\t\t\t<div class=\"notifications\">
\t\t\t\t\t\t\t<div class=\"media-left\">
\t\t\t\t\t\t\t";
                    // line 99
                    if ($this->getAttribute($context["notification_list"], "AVATAR", array())) {
                        echo $this->getAttribute($context["notification_list"], "AVATAR", array());
                    } else {
                        echo "<img class=\"media-object\" src=\"";
                        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                        echo "/images/no_avatar.gif\" alt=\"\" />";
                    }
                    // line 100
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"media-body ";
                    // line 101
                    if ($this->getAttribute($context["notification_list"], "UNREAD", array())) {
                        echo " noti-unread";
                    } else {
                    }
                    if ($this->getAttribute($context["notification_list"], "STYLING", array())) {
                        echo " ";
                        echo $this->getAttribute($context["notification_list"], "STYLING", array());
                    }
                    echo "\">\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                    // line 102
                    if ($this->getAttribute($context["notification_list"], "URL", array())) {
                        echo "<a href=\"";
                        if ($this->getAttribute($context["notification_list"], "UNREAD", array())) {
                            echo $this->getAttribute($context["notification_list"], "U_MARK_READ", array());
                        } else {
                            echo $this->getAttribute($context["notification_list"], "URL", array());
                        }
                        echo "\">";
                    }
                    // line 103
                    echo "\t\t\t\t\t\t\t\t <p class=\"notifications_title\">";
                    echo $this->getAttribute($context["notification_list"], "FORMATTED_TITLE", array());
                    if ($this->getAttribute($context["notification_list"], "REFERENCE", array())) {
                        echo " ";
                        echo $this->getAttribute($context["notification_list"], "REFERENCE", array());
                    }
                    echo "</p>
\t\t\t\t\t\t\t\t ";
                    // line 104
                    if ($this->getAttribute($context["notification_list"], "URL", array())) {
                        echo "</a>";
                    }
                    echo "\t\t\t\t
\t\t\t\t\t\t\t\t ";
                    // line 105
                    if ($this->getAttribute($context["notification_list"], "FORUM", array())) {
                        echo "<p class=\"notifications_forum\">";
                        echo $this->getAttribute($context["notification_list"], "FORUM", array());
                        echo "</p>";
                    }
                    // line 106
                    echo "\t\t\t\t\t\t\t\t ";
                    if ($this->getAttribute($context["notification_list"], "REASON", array())) {
                        echo "<p class=\"notifications_reason\">";
                        echo $this->getAttribute($context["notification_list"], "REASON", array());
                        echo "</p>";
                    }
                    // line 107
                    echo "\t\t\t\t\t\t\t\t <p class=\"notifications_time\">";
                    echo $this->getAttribute($context["notification_list"], "TIME", array());
                    echo "</p>
\t\t\t\t\t\t\t <div class=\"mark pull-right\"><input type=\"checkbox\" name=\"mark[]\" value=\"";
                    // line 108
                    echo $this->getAttribute($context["notification_list"], "NOTIFICATION_ID", array());
                    echo "\"";
                    if ( !$this->getAttribute($context["notification_list"], "UNREAD", array())) {
                        echo " disabled=\"disabled\"";
                    }
                    echo " /></div>
\t\t\t\t\t\t\t</div>
                         
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "\t\t\t\t<div class=\"space10\"></div>
\t\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t";
                // line 119
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notification_list", array()))) {
                    // line 120
                    echo "\t\t\t<div class=\"pull-left\">
\t\t\t\t<input type=\"hidden\" name=\"form_time\" value=\"";
                    // line 121
                    echo (isset($context["FORM_TIME"]) ? $context["FORM_TIME"] : null);
                    echo "\" />
\t\t\t\t";
                    // line 122
                    echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                    echo "
\t\t\t\t <input type=\"submit\" name=\"submit\" value=\"";
                    // line 123
                    echo $this->env->getExtension('phpbb')->lang("MARK_READ");
                    echo "\" class=\"btn btn-default\" />
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t <a class=\"btn btn-default\" onclick=\"marklist('ucp', 'mark', true)\" title=\"";
                    // line 125
                    echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                    echo "\"><i class=\"fa fa-check-square-o\"></i></a>
\t\t\t\t <a class=\"btn btn-default\" onclick=\"marklist('ucp', 'mark', false)\" title=\"";
                    // line 126
                    echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                    echo "\"><i class=\"fa fa-square-o\"></i></a>
\t\t\t\t</div>
\t\t\t\t";
                    // line 128
                    echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                    echo "
\t\t\t</div>
\t\t";
                }
                // line 131
                echo "\t\t\t</div>

\t\t\t<div class=\"col-md-8\"> 
\t\t\t <ul class=\"pagination pagination-sm pull-right\">
\t\t\t\t <li><a>";
                // line 135
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo "&nbsp;";
                echo (isset($context["TOTAL_COUNT"]) ? $context["TOTAL_COUNT"] : null);
                echo "</a></li>
\t\t\t\t";
                // line 136
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                    // line 137
                    echo "\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_notifications.html", 137)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 138
                    echo "\t\t\t\t";
                } else {
                    // line 139
                    echo "\t\t\t\t\t<li class=\"active\"><a>";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "</a></li>\t
\t\t\t\t";
                }
                // line 141
                echo "\t\t\t </ul>
\t\t   </div>
\t\t</div>

\t\t\t";
            } else {
                // line 146
                echo "\t\t\t<div class=\"alert alert-info fade in\">
\t\t\t <i class=\"fa fa-warning\"></i>&nbsp;<strong>";
                // line 147
                echo $this->env->getExtension('phpbb')->lang("INFO_BOX");
                echo "</strong>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("NO_NOTIFICATIONS");
                echo "
\t\t\t</div>
\t\t\t";
            }
            // line 150
            echo "
\t\t";
        }
        // line 152
        echo "</fieldset>
</div>
</form>

";
        // line 156
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_notifications.html", 156)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_notifications.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 156,  483 => 152,  479 => 150,  471 => 147,  468 => 146,  461 => 141,  455 => 139,  452 => 138,  439 => 137,  437 => 136,  431 => 135,  425 => 131,  419 => 128,  414 => 126,  410 => 125,  405 => 123,  401 => 122,  397 => 121,  394 => 120,  392 => 119,  385 => 114,  369 => 108,  364 => 107,  357 => 106,  351 => 105,  345 => 104,  336 => 103,  326 => 102,  315 => 101,  312 => 100,  304 => 99,  299 => 96,  295 => 95,  287 => 89,  281 => 87,  278 => 86,  265 => 85,  263 => 84,  257 => 83,  250 => 78,  242 => 77,  237 => 74,  234 => 73,  221 => 63,  217 => 62,  213 => 60,  201 => 56,  195 => 55,  191 => 53,  187 => 52,  178 => 50,  174 => 49,  170 => 48,  166 => 47,  162 => 45,  156 => 44,  145 => 41,  128 => 39,  124 => 38,  121 => 37,  116 => 36,  112 => 35,  108 => 33,  100 => 30,  97 => 29,  94 => 28,  90 => 27,  82 => 23,  73 => 21,  69 => 20,  59 => 13,  55 => 11,  53 => 10,  51 => 9,  46 => 7,  42 => 6,  34 => 3,  31 => 2,  19 => 1,);
    }
}
