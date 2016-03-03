<?php

/* mcp_topic.html */
class __TwigTemplate_4e46d3fbf6e296d89396c9b2c26ddfd7a0d0e9ef8538319449bc367b00382f40 extends Twig_Template
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
        $this->loadTemplate("mcp_header.html", "mcp_topic.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"side-segment\"><h3><a href=\"";
        echo (isset($context["U_VIEW_TOPIC"]) ? $context["U_VIEW_TOPIC"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("TOPIC");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "&nbsp;";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "</a></h3></div>

<form id=\"mcp\" method=\"post\" action=\"";
        // line 4
        echo (isset($context["S_MCP_ACTION"]) ? $context["S_MCP_ACTION"] : null);
        echo "\">

<div class=\"panel has-nav-tabs panel-default\">
\t<ul class=\"nav nav-tabs\">
\t <li class=\"active\"><a href=\"#display-panel\" data-toggle=\"tab\" data-original-title=\"\" title=\"\">";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("DISPLAY_OPTIONS");
        echo "</a></li>
\t <li class=\"\"><a href=\"#split-panel\" data-toggle=\"tab\" data-original-title=\"\" title=\"\">";
        // line 9
        echo $this->env->getExtension('phpbb')->lang("SPLIT_TOPIC");
        echo "</a></li>
\t <li class=\"\"><a href=\"#merge-panel\" data-toggle=\"tab\" data-original-title=\"\" title=\"\">";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("MERGE_POSTS");
        echo "</a></li>
    </ul>
\t
<div class=\"tab-content panel-content\">
  <div id=\"display-panel\" class=\"tab-pane panel-body active\">
    <fieldset>
\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"posts_per_page\">";
        // line 17
        echo $this->env->getExtension('phpbb')->lang("POSTS_PER_PAGE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb')->lang("POSTS_PER_PAGE_EXPLAIN");
        echo "</span>
\t<div class=\"controls controls-row\"> 
       <input type=\"text\" class=\"form-control input-sm\" placeholder=\"\" name=\"posts_per_page\" id=\"posts_per_page\" value=\"";
        // line 19
        echo (isset($context["POSTS_PER_PAGE"]) ? $context["POSTS_PER_PAGE"] : null);
        echo "\">
\t</div> 
\t</div>
\t
 <label class=\"control-label\" for=\"\">";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12\">
\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                <label for=\"bday_day\">";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("DISPLAY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
            <div class=\"control-row\">
                ";
        // line 29
        echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
        echo "
            </div>
\t\t\t</div>
\t 
\t        <div class=\"col-md-4 col-sm-4\"> 
                <label for=\"bday_day\">";
        // line 34
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo "</label>
            <div class=\"control-row\">
                ";
        // line 36
        echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
        echo "
            </div>
\t\t\t</div>

\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                 <label for=\"bday_day\">";
        // line 41
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo "</label>
                <div class=\"control-row\">
\t\t\t\t <div class=\"input-group\">
                    ";
        // line 44
        echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
        echo "
\t\t\t\t<span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" name=\"sort\" type=\"submit\">";
        // line 46
        echo $this->env->getExtension('phpbb')->lang("GO");
        echo "</button>
\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t</div>   
\t\t\t</div>
        </div>
\t</div>
</fieldset>
</div>
  
<div id=\"split-panel\" class=\"tab-pane panel-body\">
";
        // line 57
        if ((isset($context["S_CAN_SPLIT"]) ? $context["S_CAN_SPLIT"] : null)) {
            // line 58
            echo "<fieldset>
\t <p>";
            // line 59
            echo $this->env->getExtension('phpbb')->lang("SPLIT_TOPIC_EXPLAIN");
            echo "</p>
\t";
            // line 60
            if ((isset($context["S_SHOW_TOPIC_ICONS"]) ? $context["S_SHOW_TOPIC_ICONS"] : null)) {
                // line 61
                echo "\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"icon\">";
                // line 62
                echo $this->env->getExtension('phpbb')->lang("TOPIC_ICON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>
\t<div class=\"controls controls-row\"> 
       <div class=\"radio\"><input type=\"radio\" name=\"icon\" id=\"icon\" value=\"0\" checked=\"checked\"><label for=\"dst1\">";
                // line 64
                echo $this->env->getExtension('phpbb')->lang("NO_TOPIC_ICON");
                echo "</label></div>
\t";
                // line 65
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_icon", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["topic_icon"]) {
                    echo "<div class=\"radio\"><input type=\"radio\" name=\"icon\" id=\"icon-";
                    echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                    echo "\" value=\"";
                    echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                    echo "\" ";
                    echo $this->getAttribute($context["topic_icon"], "S_ICON_CHECKED", array());
                    echo " ><label for=\"icon-";
                    echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["topic_icon"], "ICON_IMG", array());
                    echo "\" width=\"";
                    echo $this->getAttribute($context["topic_icon"], "ICON_WIDTH", array());
                    echo "\" height=\"";
                    echo $this->getAttribute($context["topic_icon"], "ICON_HEIGHT", array());
                    echo "\" alt=\"\" title=\"\" /></label></div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_icon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "\t</div> 
\t</div>
\t";
            }
            // line 69
            echo "
\t";
            // line 70
            // line 71
            echo "\t
\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"subject\">";
            // line 73
            echo $this->env->getExtension('phpbb')->lang("SPLIT_SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t<div class=\"controls controls-row\"> 
       <input type=\"text\" class=\"form-control input-sm\" placeholder=\"\" name=\"subject\" id=\"subject\" maxlength=\"64\" tabindex=\"2\" value=\"";
            // line 75
            echo (isset($context["SPLIT_SUBJECT"]) ? $context["SPLIT_SUBJECT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SPLIT_SUBJECT");
            echo "\">
\t</div> 
\t</div>
\t
\t";
            // line 79
            // line 80
            echo "\t
    <div class=\"controls\">
\t    <label class=\"control-label\">";
            // line 82
            echo $this->env->getExtension('phpbb')->lang("SPLIT_FORUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t<div class=\"input-group col-md-4\">
        <select class=\"selectpicker\" data-container=\"body\" data-width=\"auto\" data-style=\"btn btn-default form-control\" name=\"to_forum_id\">";
            // line 84
            echo (isset($context["S_FORUM_SELECT"]) ? $context["S_FORUM_SELECT"] : null);
            echo "</select>
\t<span class=\"input-group-btn\">
\t\t<button class=\"btn btn-default\" name=\"sort\" type=\"submit\">";
            // line 86
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "</button>
\t </span>
\t </div>
   </div>
</fieldset>
";
        }
        // line 92
        echo "</div>
  
<div id=\"merge-panel\" class=\"tab-pane panel-body\">
";
        // line 95
        if ((isset($context["S_CAN_MERGE"]) ? $context["S_CAN_MERGE"] : null)) {
            // line 96
            echo "<fieldset>
 <p>";
            // line 97
            echo $this->env->getExtension('phpbb')->lang("MERGE_TOPIC_EXPLAIN");
            echo "</p>
\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"to_topic_id\">";
            // line 99
            echo $this->env->getExtension('phpbb')->lang("MERGE_TOPIC_ID");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t<div class=\"controls controls-row\"> 
       <input type=\"text\" class=\"form-control\" placeholder=\"\" name=\"to_topic_id\" id=\"to_topic_id\" value=\"";
            // line 101
            echo (isset($context["TO_TOPIC_ID"]) ? $context["TO_TOPIC_ID"] : null);
            echo "\">
\t</div> 
\t<a href=\"";
            // line 103
            echo (isset($context["U_SELECT_TOPIC"]) ? $context["U_SELECT_TOPIC"] : null);
            echo "\" >";
            echo $this->env->getExtension('phpbb')->lang("SELECT_TOPIC");
            echo "</a>
\t";
            // line 104
            if ((isset($context["TO_TOPIC_INFO"]) ? $context["TO_TOPIC_INFO"] : null)) {
                echo (isset($context["TO_TOPIC_INFO"]) ? $context["TO_TOPIC_INFO"] : null);
            }
            // line 105
            echo "\t</div>\t
</fieldset>
";
        }
        // line 108
        echo "</div>

</div>



</div>

<div class=\"clearfix\">
\t<div class=\"side-segment\"><h3>";
        // line 117
        echo $this->env->getExtension('phpbb')->lang("TOPIC_REVIEW");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "<small class=\"pull-right\" id=\"review\">
\t <a data-text-swap=\"";
        // line 118
        echo $this->env->getExtension('phpbb')->lang("EXPAND_CLOSE");
        echo "\" data-text-original=\"";
        echo $this->env->getExtension('phpbb')->lang("EXPAND_VIEW");
        echo "\" class=\"topicreview-trigger\" href=\"#review\">";
        echo $this->env->getExtension('phpbb')->lang("EXPAND_VIEW");
        echo "</a>
\t</small></h3>
\t</div>
\t <p>";
        // line 121
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "</p>
\t<div class=\"space10\"></div>
</div>

<div class=\"well well-sm text-muted\">
\t<div class=\"topicreview\">
\t\t";
        // line 127
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "postrow", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 128
            echo "\t\t<div class=\"post panel panel-default\">
\t\t\t<div class=\"postbody panel-body\" id=\"pr";
            // line 129
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">
\t\t\t  <div class=\"clearfix\">
\t\t\t\t<div class=\"pull-right\" style=\"position: relative; bottom: 3px;\">
\t\t\t\t<a class=\"btn btn-xs btn-default\" href=\"";
            // line 132
            echo $this->getAttribute($context["postrow"], "U_POST_DETAILS", array());
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
            echo "\"><i class=\"fa fa-question-circle\"></i></span></a>
\t\t\t\t<input type=\"checkbox\" id=\"post_id_list_select_";
            // line 133
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\" name=\"post_id_list[]\" value=\"";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\"";
            if ($this->getAttribute($context["postrow"], "S_CHECKED", array())) {
                echo " checked=\"checked\"";
            }
            echo " ><label for=\"post_id_list_select_";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\"></label>
\t\t\t\t</div>

\t\t\t\t<div class=\"side-segment\"><h3><a href=\"";
            // line 136
            echo $this->getAttribute($context["postrow"], "U_POST_DETAILS", array());
            echo "\">";
            echo $this->getAttribute($context["postrow"], "POST_SUBJECT", array());
            echo "</a></h3></div>
\t\t\t\t<p><a href=\"#pr";
            // line 137
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">&#35;";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "</a>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("POSTED");
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo "<strong>&nbsp;";
            echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            echo "</strong>&nbsp;&#45;&nbsp;";
            echo $this->getAttribute($context["postrow"], "POST_DATE", array());
            if ($this->getAttribute($context["postrow"], "U_MCP_DETAILS", array())) {
                echo "&nbsp;&#91;&nbsp;<a href=\"";
                echo $this->getAttribute($context["postrow"], "U_MCP_DETAILS", array());
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
                echo "</a>&nbsp;&#93;";
            }
            echo "</p>
\t\t\t  </div>
\t\t\t  
\t\t\t\t";
            // line 140
            if (($this->getAttribute($context["postrow"], "S_POST_UNAPPROVED", array()) || $this->getAttribute($context["postrow"], "S_POST_REPORTED", array()))) {
                // line 141
                echo "\t\t\t\t<div class=\"alert alert-info fade in\">
\t\t\t\t";
                // line 142
                if ($this->getAttribute($context["postrow"], "S_POST_UNAPPROVED", array())) {
                    echo "<i class=\"fa fa-question-circle\"></i> <a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_MCP_APPROVE", array());
                    echo "\"><strong>";
                    echo $this->env->getExtension('phpbb')->lang("POST_UNAPPROVED");
                    echo "</strong></a><br />";
                }
                // line 143
                echo "\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", array())) {
                    echo "<i class=\"fa fa-warning\"></i> <a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_MCP_REPORT", array());
                    echo "\"><strong>";
                    echo $this->env->getExtension('phpbb')->lang("POST_REPORTED");
                    echo "</strong></a>";
                }
                // line 144
                echo "\t\t\t\t</div>
\t\t\t\t";
            }
            // line 146
            echo "
\t\t\t\t<div class=\"content\" id=\"message_";
            // line 147
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">";
            echo $this->getAttribute($context["postrow"], "MESSAGE", array());
            echo "</div>
                <div class=\"space10\"></div>
\t\t\t\t";
            // line 149
            if ($this->getAttribute($context["postrow"], "S_HAS_ATTACHMENTS", array())) {
                // line 150
                echo "\t\t\t\t\t<div class=\"attachbox\">
\t\t\t\t\t\t<h5>";
                // line 151
                echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                echo "</h5>
\t\t\t\t\t\t";
                // line 152
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 153
                    echo "\t\t\t\t\t\t\t<span>";
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                    echo "</span>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 155
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 157
            echo "\t\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "\t</div>
</div>

<script>
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

<div class=\"row\">
\t<div class=\"col-md-5 pull-left\">
\t<fieldset>
\t   <div class=\"input-group\">
\t\t<select class=\"selectpicker\" data-container=\"body\" data-width=\"auto\" data-style=\"btn btn-default form-control\" name=\"action\">
\t\t\t<option value=\"\" selected=\"selected\">";
        // line 182
        echo $this->env->getExtension('phpbb')->lang("SELECT_ACTION");
        echo "</option>
\t\t\t";
        // line 183
        if ((isset($context["S_CAN_APPROVE"]) ? $context["S_CAN_APPROVE"] : null)) {
            echo "<option value=\"approve\">";
            echo $this->env->getExtension('phpbb')->lang("APPROVE_POSTS");
            echo "</option>";
        }
        // line 184
        echo "\t\t\t";
        if ((isset($context["S_CAN_LOCK"]) ? $context["S_CAN_LOCK"] : null)) {
            echo "<option value=\"lock_post\">";
            echo $this->env->getExtension('phpbb')->lang("LOCK_POST_POSTS");
            echo "&nbsp;&#91;&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("LOCK_POST_EXPLAIN");
            echo "&nbsp;&#93;</option><option value=\"unlock_post\">";
            echo $this->env->getExtension('phpbb')->lang("UNLOCK_POST_POSTS");
            echo "</option>";
        }
        // line 185
        echo "\t\t\t";
        if ((isset($context["S_CAN_DELETE"]) ? $context["S_CAN_DELETE"] : null)) {
            echo "<option value=\"delete_post\">";
            echo $this->env->getExtension('phpbb')->lang("DELETE_POSTS");
            echo "</option>";
        }
        // line 186
        echo "\t\t\t";
        if ((isset($context["S_CAN_MERGE"]) ? $context["S_CAN_MERGE"] : null)) {
            echo "<option value=\"merge_posts\"";
            if ((isset($context["S_MERGE_VIEW"]) ? $context["S_MERGE_VIEW"] : null)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb')->lang("MERGE_POSTS");
            echo "</option>";
        }
        // line 187
        echo "\t\t\t";
        if ((isset($context["S_CAN_SPLIT"]) ? $context["S_CAN_SPLIT"] : null)) {
            echo "<option value=\"split_all\"";
            if ((isset($context["S_SPLIT_VIEW"]) ? $context["S_SPLIT_VIEW"] : null)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb')->lang("SPLIT_POSTS");
            echo "</option><option value=\"split_beyond\">";
            echo $this->env->getExtension('phpbb')->lang("SPLIT_AFTER");
            echo "</option>";
        }
        // line 188
        echo "\t\t\t";
        if ((isset($context["S_CAN_SYNC"]) ? $context["S_CAN_SYNC"] : null)) {
            echo "<option value=\"resync\">";
            echo $this->env->getExtension('phpbb')->lang("RESYNC");
            echo "</option>";
        }
        // line 189
        echo "\t\t</select>
\t\t<span class=\"input-group-btn\">
\t\t<a href=\"javascript:;\" onclick=\"marklist('mcp', 'post', true); return false;\" class=\"btn btn-default\" title=\"\" data-original-title=\"";
        // line 191
        echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
        echo "\"><i class=\"fa fa-check-square-o\"></i></a>
\t\t<a href=\"javascript:;\" onclick=\"marklist('mcp', 'post', false); return false;\" class=\"btn btn-default\" title=\"\" data-original-title=\"";
        // line 192
        echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
        echo "\"><i class=\"fa fa-square-o\"></i></a>
\t\t<button class=\"btn btn-default\" type=\"submit\" value=\"";
        // line 193
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" name=\"mcp_topic_submit\" >";
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "</button>
\t  </span>
\t  </div>
\t";
        // line 196
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t";
        // line 197
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</fieldset>
\t </div>
 
    <div class=\"col-md-7\">
     <ul class=\"pagination pagination-sm pull-right\">
\t\t <li><a>";
        // line 203
        echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
        echo "</a></li>
\t\t";
        // line 204
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 205
            echo "\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_topic.html", 205)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 206
            echo "\t\t";
        } else {
            // line 207
            echo "\t\t\t<li class=\"active\"><a>";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a></li>\t
\t\t";
        }
        // line 209
        echo "     </ul>
\t</div>
 </div>
</form>
";
        // line 213
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_topic.html", 213)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_topic.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  600 => 213,  594 => 209,  588 => 207,  585 => 206,  572 => 205,  570 => 204,  566 => 203,  557 => 197,  553 => 196,  545 => 193,  541 => 192,  537 => 191,  533 => 189,  526 => 188,  513 => 187,  502 => 186,  495 => 185,  484 => 184,  478 => 183,  474 => 182,  450 => 160,  442 => 157,  438 => 155,  429 => 153,  425 => 152,  421 => 151,  418 => 150,  416 => 149,  409 => 147,  406 => 146,  402 => 144,  393 => 143,  385 => 142,  382 => 141,  380 => 140,  357 => 137,  351 => 136,  337 => 133,  331 => 132,  325 => 129,  322 => 128,  318 => 127,  309 => 121,  299 => 118,  294 => 117,  283 => 108,  278 => 105,  274 => 104,  268 => 103,  263 => 101,  257 => 99,  252 => 97,  249 => 96,  247 => 95,  242 => 92,  233 => 86,  228 => 84,  222 => 82,  218 => 80,  217 => 79,  208 => 75,  202 => 73,  198 => 71,  197 => 70,  194 => 69,  189 => 66,  166 => 65,  162 => 64,  156 => 62,  153 => 61,  151 => 60,  147 => 59,  144 => 58,  142 => 57,  128 => 46,  123 => 44,  117 => 41,  109 => 36,  104 => 34,  96 => 29,  90 => 27,  82 => 23,  75 => 19,  67 => 17,  57 => 10,  53 => 9,  49 => 8,  42 => 4,  31 => 2,  19 => 1,);
    }
}
