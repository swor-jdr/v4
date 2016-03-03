<?php

/* mcp_forum.html */
class __TwigTemplate_325d42d087b3ef47b616d775386e8aab2ab76ed711402f0a8fa9a1de8f82aa4f extends Twig_Template
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
        $this->loadTemplate("mcp_header.html", "mcp_forum.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        $value = "forum-selection2";
        $context['definition']->set('CUSTOM_FIELDSET_CLASS', $value);
        // line 3
        echo "<div class=\"side-segment\"><h3><a href=\"";
        echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("FORUM");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "&nbsp;";
        echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
        echo "</a></h3></div>
<div class=\"row\">
\t
\t<div class=\"col-md-4\">
\t";
        // line 7
        $location = "jumpbox_options.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox_options.html", "mcp_forum.html", 7)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 8
        echo "\t</div>

\t<div class=\"col-md-8\"> 
     <ul class=\"pagination pagination-sm pull-right\">
\t\t <li><a>";
        // line 12
        echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
        echo "</a></li>
\t\t";
        // line 13
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 14
            echo "\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_forum.html", 14)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 15
            echo "\t\t";
        } else {
            // line 16
            echo "\t\t\t<li class=\"active\"><a>";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a></li>\t
\t\t";
        }
        // line 18
        echo "     </ul>
   </div>

</div>

<form method=\"post\" id=\"mcp\" action=\"";
        // line 23
        echo (isset($context["S_MCP_ACTION"]) ? $context["S_MCP_ACTION"] : null);
        echo "\">
<div class=\"tab-pane active\">
\t";
        // line 25
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()))) {
            // line 26
            echo "\t<div class=\"panel panel-forum\">
\t<div class=\"panel-heading\">
\t <i class=\"fa fa-list-ol\"></i>&nbsp;";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("TOPICS");
            echo "
\t</div>
\t<div class=\"panel-inner\">
\t<table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th data-class=\"expand\">";
            // line 34
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</th>
\t\t\t<th data-hide=\"phone\">";
            // line 35
            echo $this->env->getExtension('phpbb')->lang("REPLIES");
            echo "</th>
\t\t\t<th data-hide=\"phone\">";
            // line 36
            echo $this->env->getExtension('phpbb')->lang("LAST_POST");
            echo "</th>
\t\t\t";
            // line 37
            if ( !(isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null)) {
                // line 38
                echo "\t\t    <th>";
                echo $this->env->getExtension('phpbb')->lang("MARK");
                echo "</th>
\t\t    ";
            }
            // line 40
            echo "\t\t</tr>
\t</thead>\t\t
\t<tbody>
\t";
            // line 43
            ob_start();
            echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_LOCKED");
            $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
            $context['definition']->set('VAR', $value);
            // line 44
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
                // line 45
                echo "\t\t<tr>
\t\t\t<td>
\t\t    ";
                // line 47
                if ($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array())) {
                    echo "<i class=\"topic-icon\" style=\"background-image: url(";
                    echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                    echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array());
                    echo "); background-repeat: no-repeat;\" title=\"";
                    echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
                    echo "\"></i>";
                }
                // line 48
                echo "\t\t\t <span class=\"icon-wrapper\">
\t\t\t  <i class=\"row-icon-font icon-moon-default2";
                // line 49
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE", array()) == 2)) {
                    echo " icon-moon-voice2";
                } elseif (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE", array()) == 3)) {
                    echo " icon-moon-podcast2<!-- ESLEIF topicrow.S_TOPIC_TYPE == 1 --> icon-moon-pushpin2<!-- ESLEIF topicrow.S_HAS_POLL --> icon-moon-poll";
                }
                if ($this->getAttribute($context["topicrow"], "S_TOPIC_MOVED", array())) {
                    echo " icon-moon-moved";
                }
                if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array())) {
                    echo " forum-unread";
                } else {
                    echo " forum-read";
                }
                echo "\" title=\"";
                echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
                echo "\"></i>
\t\t\t </span>
\t\t\t <i class=\"row-icon-font-mini";
                // line 51
                if (($this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "TOPIC_TYPE", array()) == $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "VAR", array()))) {
                    echo " fa fa-lock forumview-lock";
                }
                echo "\" title=\"";
                echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
                echo "\"></i>
\t\t\t ";
                // line 52
                if ($this->getAttribute($context["topicrow"], "S_SELECT_TOPIC", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_SELECT_TOPIC", array());
                    echo "\" class=\"\">&#91;&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("SELECT_MERGE");
                    echo "&nbsp;&#93;</a>&nbsp;&nbsp; ";
                }
                // line 53
                echo "\t\t\t ";
                // line 54
                echo "\t\t\t <a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
                echo "\" class=\"topictitle\">";
                echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", array());
                echo "</a>
\t\t\t ";
                // line 55
                // line 56
                echo "\t\t\t ";
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", array()))) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("TOPICS_ROW_NOT_APPROVED");
                    echo "\"><i class=\"fa fa-question-circle\"></i></a> ";
                }
                // line 57
                echo "\t\t\t ";
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_DELETED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_DELETED", array()))) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("TOPICS_ROW_DELETED");
                    echo "\">&nbsp;<i class=\"fa fa-exclamation-circle text-danger\"></i></a>";
                }
                // line 58
                echo "\t\t\t ";
                if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("TOPICS_ROW_REPORTED");
                    echo "\"><i class=\"fa fa-exclamation-circle text-danger\"></i></a>";
                }
                // line 59
                echo "\t\t\t ";
                if (($this->getAttribute($context["topicrow"], "S_MOVED_TOPIC", array()) && (isset($context["S_CAN_DELETE"]) ? $context["S_CAN_DELETE"] : null))) {
                    echo "&nbsp;<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_DELETE_TOPIC", array());
                    echo "\" class=\"\">&#91;&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_SHADOW_TOPIC");
                    echo "&nbsp;&#93;</a>";
                }
                // line 60
                echo "\t\t\t <br />
\t\t\t ";
                // line 61
                if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", array()))) {
                    // line 62
                    echo "\t\t\t\t    <ul class=\"pagination pagination-forum pagination-xs pull-right hidden-sm hidden-xs\">
\t\t\t\t\t\t";
                    // line 63
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                        // line 64
                        echo "\t\t\t\t\t\t ";
                        if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                            // line 65
                            echo "\t\t\t\t\t\t ";
                        } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                            echo "<li class=\"active\">";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                            echo "</li>
\t\t\t\t\t\t ";
                        } elseif ($this->getAttribute(                        // line 66
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                            echo "<li class=\"ellipsis\"><a>";
                            echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                            echo "</a></li>
\t\t\t\t\t\t ";
                        } elseif ($this->getAttribute(                        // line 67
$context["pagination"], "S_IS_NEXT", array())) {
                            // line 68
                            echo "\t\t\t\t\t\t";
                        } else {
                            // line 69
                            echo "\t\t\t\t\t\t <li><a href=\"";
                            echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                            echo "\">";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                            echo "</a></li>
\t\t\t\t\t\t";
                        }
                        // line 71
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 72
                    echo "\t\t\t\t\t</ul>\t\t
\t\t\t    ";
                }
                // line 74
                echo "\t\t\t ";
                if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                    echo "<i class=\"fa fa-paperclip fa-flip-horizontal\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("ATTACH_FORUM");
                    echo "\"></i>";
                }
                // line 75
                echo "\t\t\t ";
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo "&nbsp;";
                echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", array());
                echo "&nbsp;&#45;<small>";
                echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", array());
                echo "</small>
\t\t\t</td>
\t\t\t<td class=\"stats-col\">";
                // line 77
                echo $this->getAttribute($context["topicrow"], "REPLIES", array());
                echo "&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                echo "</td>
\t\t\t<td class=\"center\">";
                // line 78
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo "&nbsp;";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
                echo " 
\t\t\t<br /><small>";
                // line 79
                echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
                echo "</small>
\t\t\t</td>
\t\t\t";
                // line 81
                if ( !(isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null)) {
                    // line 82
                    echo "\t\t\t<td class=\"large60\"><div class=\"text-center\">";
                    if ( !$this->getAttribute($context["topicrow"], "S_MOVED_TOPIC", array())) {
                        echo "<input type=\"checkbox\" name=\"topic_id_list[]\" id=\"";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["topicrow"], "S_TOPIC_CHECKED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo "><label for=\"";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
                        echo "\">";
                    } else {
                        echo "&nbsp;</label>";
                    }
                    echo "</div></td>
\t\t\t";
                }
                // line 84
                echo "\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "\t\t</tbody>
\t</table>
\t</div>
\t</div>
\t";
        } else {
            // line 91
            echo "\t<div class=\"alert alert-info fade in\">
        <button data-dismiss=\"alert\" class=\"close\" type=\"button\" aria-hidden=\"true\"><i class=\"awe-remove-circle\"></i></button>
         <i class=\"fa fa-warning\"></i>&nbsp;<strong>";
            // line 93
            echo $this->env->getExtension('phpbb')->lang("INFO_BOX");
            echo "</strong>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("NO_TOPICS");
            echo "
     </div> 
\t";
        }
        // line 96
        echo "\t\t

<div class=\"row\">
   <div class=\"col-md-6 pull-left\">
    <fieldset>
\t ";
        // line 101
        if ( !(isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null)) {
            // line 102
            echo "\t <div class=\"input-group\">
\t <select class=\"selectpicker\" data-container=\"body\" data-width=\"auto\" data-style=\"btn btn-default form-control\" name=\"action\">
\t\t<option value=\"\" selected=\"selected\">";
            // line 104
            echo $this->env->getExtension('phpbb')->lang("SELECT_ACTION");
            echo "</option>
\t\t";
            // line 105
            if ((isset($context["S_CAN_DELETE"]) ? $context["S_CAN_DELETE"] : null)) {
                echo "<option value=\"delete_topic\">";
                echo $this->env->getExtension('phpbb')->lang("DELETE");
                echo "</option>";
            }
            // line 106
            echo "\t\t";
            if ((isset($context["S_CAN_MERGE"]) ? $context["S_CAN_MERGE"] : null)) {
                echo "<option value=\"merge_topics\">";
                echo $this->env->getExtension('phpbb')->lang("MERGE");
                echo "</option>";
            }
            // line 107
            echo "\t\t";
            if ((isset($context["S_CAN_MOVE"]) ? $context["S_CAN_MOVE"] : null)) {
                echo "<option value=\"move\">";
                echo $this->env->getExtension('phpbb')->lang("MOVE");
                echo "</option>";
            }
            // line 108
            echo "\t\t";
            if ((isset($context["S_CAN_FORK"]) ? $context["S_CAN_FORK"] : null)) {
                echo "<option value=\"fork\">";
                echo $this->env->getExtension('phpbb')->lang("FORK");
                echo "</option>";
            }
            // line 109
            echo "\t\t";
            if ((isset($context["S_CAN_LOCK"]) ? $context["S_CAN_LOCK"] : null)) {
                echo "<option value=\"lock\">";
                echo $this->env->getExtension('phpbb')->lang("LOCK");
                echo "</option><option value=\"unlock\">";
                echo $this->env->getExtension('phpbb')->lang("UNLOCK");
                echo "</option>";
            }
            // line 110
            echo "\t\t";
            if ((isset($context["S_CAN_SYNC"]) ? $context["S_CAN_SYNC"] : null)) {
                echo "<option value=\"resync\">";
                echo $this->env->getExtension('phpbb')->lang("RESYNC");
                echo "</option>";
            }
            // line 111
            echo "\t\t";
            if ((isset($context["S_CAN_MAKE_NORMAL"]) ? $context["S_CAN_MAKE_NORMAL"] : null)) {
                echo "<option value=\"make_normal\">";
                echo $this->env->getExtension('phpbb')->lang("MAKE_NORMAL");
                echo "</option>";
            }
            // line 112
            echo "\t\t";
            if ((isset($context["S_CAN_MAKE_STICKY"]) ? $context["S_CAN_MAKE_STICKY"] : null)) {
                echo "<option value=\"make_sticky\">";
                echo $this->env->getExtension('phpbb')->lang("MAKE_STICKY");
                echo "</option>";
            }
            // line 113
            echo "\t\t";
            if ((isset($context["S_CAN_MAKE_ANNOUNCE"]) ? $context["S_CAN_MAKE_ANNOUNCE"] : null)) {
                // line 114
                echo "\t\t\t<option value=\"make_announce\">";
                echo $this->env->getExtension('phpbb')->lang("MAKE_ANNOUNCE");
                echo "</option>
\t\t\t<option value=\"make_global\">";
                // line 115
                echo $this->env->getExtension('phpbb')->lang("MAKE_GLOBAL");
                echo "</option>
\t    ";
            }
            // line 117
            echo "\t </select>
\t<span class=\"input-group-btn\">
\t<a href=\"javascript:void(0);\" onclick=\"marklist('mcp', 'topic_id_list', true); return false;\" class=\"btn btn-default\" title=\"";
            // line 119
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "\"><i class=\"fa fa-check-square-o\"></i></a>
\t<a href=\"javascript:void(0);\" onclick=\"marklist('mcp', 'topic_id_list', false); return false;\" class=\"btn btn-default\" title=\"";
            // line 120
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "\"><i class=\"fa fa-square-o\"></i></a>
\t<button class=\"btn btn-default\" type=\"submit\" value=\"";
            // line 121
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" >";
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "</button>
   </span>
   </div>
\t";
        }
        // line 125
        echo "\t";
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
    </fieldset>
   </div>

   
   <div class=\"col-md-2 pull-right hidden-xs\">
    <ul class=\"pagination pagination-sm pull-right\">
\t    <li><a title=\"\" href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\">";
        // line 132
        echo $this->env->getExtension('phpbb')->lang("OPTIONS");
        echo "</a></li>
\t</ul>
   </div>
   
</div>

<div class=\"hidden-xs\">
\t<fieldset class=\"controls-row\">
                    <div class=\"sorting collapse\">
\t\t\t\t\t <div class=\"panel panel-default\">
\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                         <label for=\"bday_day\">";
        // line 145
        echo $this->env->getExtension('phpbb')->lang("DISPLAY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
                            <div class=\"control-row\">
                              ";
        // line 147
        echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
        echo "
                            </div>
\t\t\t\t\t\t</div>
\t 
\t                    <div class=\"col-md-4 col-sm-4\"> 
                          <label for=\"bday_day\">";
        // line 152
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo "</label>
                            <div class=\"control-row\">
                              ";
        // line 154
        echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
        echo "
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                           <label for=\"bday_day\">";
        // line 159
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo "</label>
                            <div class=\"control-row\">
\t\t\t\t\t\t\t<div class=\"input-group\">
                             ";
        // line 162
        echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
        echo "
\t\t\t\t\t\t\t <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" name=\"sort\" type=\"submit\">";
        // line 164
        echo $this->env->getExtension('phpbb')->lang("GO");
        echo "</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    </div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                      </div>
\t\t\t\t\t </div>
\t\t\t\t\t</div>
            <!-- // Widget --> 
\t</fieldset> 
</div>

</div>
</form>
";
        // line 179
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_forum.html", 179)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_forum.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  576 => 179,  558 => 164,  553 => 162,  547 => 159,  539 => 154,  534 => 152,  526 => 147,  520 => 145,  504 => 132,  493 => 125,  484 => 121,  480 => 120,  476 => 119,  472 => 117,  467 => 115,  462 => 114,  459 => 113,  452 => 112,  445 => 111,  438 => 110,  429 => 109,  422 => 108,  415 => 107,  408 => 106,  402 => 105,  398 => 104,  394 => 102,  392 => 101,  385 => 96,  377 => 93,  373 => 91,  366 => 86,  359 => 84,  339 => 82,  337 => 81,  332 => 79,  326 => 78,  320 => 77,  310 => 75,  303 => 74,  299 => 72,  293 => 71,  285 => 69,  282 => 68,  280 => 67,  274 => 66,  267 => 65,  264 => 64,  260 => 63,  257 => 62,  255 => 61,  252 => 60,  243 => 59,  234 => 58,  225 => 57,  216 => 56,  215 => 55,  208 => 54,  206 => 53,  198 => 52,  190 => 51,  171 => 49,  168 => 48,  159 => 47,  155 => 45,  150 => 44,  145 => 43,  140 => 40,  134 => 38,  132 => 37,  128 => 36,  124 => 35,  120 => 34,  111 => 28,  107 => 26,  105 => 25,  100 => 23,  93 => 18,  87 => 16,  84 => 15,  71 => 14,  69 => 13,  65 => 12,  59 => 8,  47 => 7,  34 => 3,  31 => 2,  19 => 1,);
    }
}
