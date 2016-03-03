<?php

/* mcp_queue.html */
class __TwigTemplate_003fee3d4a26d3a7b9cb42392214f72c572a7ec6f186b56dcfb7e9049aa30b1c extends Twig_Template
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
        $this->loadTemplate("mcp_header.html", "mcp_queue.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<form id=\"mcp\" method=\"post\" action=\"";
        echo (isset($context["S_MCP_ACTION"]) ? $context["S_MCP_ACTION"] : null);
        echo "\">
<div class=\"side-segment\"><h3>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h3></div>
\t<p>";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("EXPLAIN");
        echo "</p>
<div class=\"row\">
    
\t<div class=\"col-md-4\">
\t   <fieldset class=\"form-group\">
\t  <div class=\"input-group\">
\t\t<select class=\"selectpicker\" data-container=\"body\" data-width=\"auto\" data-style=\"btn btn-default form-control\" name=\"f\" id=\"fo\">";
        // line 10
        echo (isset($context["S_FORUM_OPTIONS"]) ? $context["S_FORUM_OPTIONS"] : null);
        echo "</select>  
\t\t<span class=\"input-group-btn\">
\t\t<button type=\"submit\" name=\"sort\" class=\"btn btn-default\">";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("GO");
        echo "</button>
\t\t</span>
\t\t</div>
\t\t";
        // line 15
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t </fieldset>
   </div>
   
   <div class=\"col-md-8\">
\t\t<ul class=\"pagination pagination-sm pull-right\">
\t\t <li><a>";
        // line 21
        echo (isset($context["TOTAL"]) ? $context["TOTAL"] : null);
        echo "</a></li>
\t\t";
        // line 22
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 23
            echo "\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_queue.html", 23)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 24
            echo "\t\t";
        } else {
            // line 25
            echo "\t\t\t<li class=\"active\"><a>";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a></li>\t
\t\t";
        }
        // line 27
        echo "       </ul>
\t</div>   
   
</div>


";
        // line 33
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "postrow", array()))) {
            echo "\t
 <div class=\"panel panel-forum\">
\t  <div class=\"panel-heading\">
\t    <i class=\"fa fa-bar-chart-o\"></i>&nbsp;";
            // line 36
            echo $this->env->getExtension('phpbb')->lang("QUEUE");
            echo "
\t  </div>
\t <div class=\"panel-inner\">
\t<table class=\"footable table table-striped table-primary table-hover\">
      <thead>
\t\t<tr>
\t\t\t<th data-class=\"expand\">";
            // line 42
            if ((isset($context["S_TOPICS"]) ? $context["S_TOPICS"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
            } else {
                echo $this->env->getExtension('phpbb')->lang("POST");
            }
            echo "</th>
\t\t\t<th data-hide=\"phone\">";
            // line 43
            if ( !(isset($context["S_TOPICS"]) ? $context["S_TOPICS"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
            }
            echo $this->env->getExtension('phpbb')->lang("FORUM");
            echo "</th>
\t\t    <th class=\"table-check\">";
            // line 44
            echo $this->env->getExtension('phpbb')->lang("MARK");
            echo "</th>
\t\t</tr>
\t  </thead>
\t  <tbody>
\t\t";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "postrow", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
                // line 49
                echo "
\t\t";
                // line 50
                if ($this->getAttribute($context["postrow"], "S_DELETED_TOPIC", array())) {
                    // line 51
                    echo "\t\t <p>";
                    echo $this->env->getExtension('phpbb')->lang("DELETED_TOPIC");
                    echo "</p>
\t\t";
                } else {
                    // line 53
                    echo "\t  <tr>
\t\t<td>
\t\t<a href=\"";
                    // line 55
                    echo $this->getAttribute($context["postrow"], "U_VIEW_DETAILS", array());
                    echo "\" class=\"topictitle\">";
                    echo $this->getAttribute($context["postrow"], "POST_SUBJECT", array());
                    echo "</a><br />
\t\t ";
                    // line 56
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
                    echo "&nbsp;&#45;&nbsp;
\t\t <small>";
                    // line 57
                    echo $this->getAttribute($context["postrow"], "POST_TIME", array());
                    echo "</small>
\t\t</td>
\t\t<td>
\t\t";
                    // line 60
                    if ((isset($context["S_TOPICS"]) ? $context["S_TOPICS"] : null)) {
                        echo $this->env->getExtension('phpbb')->lang("TOPIC");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "&nbsp;<a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_TOPIC", array());
                        echo "\">";
                        echo $this->getAttribute($context["postrow"], "TOPIC_TITLE", array());
                        echo "</a>";
                    }
                    echo "<br>
\t\t";
                    // line 61
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "&nbsp;<a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_VIEWFORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["postrow"], "FORUM_NAME", array());
                    echo "</a>
\t\t</td>
\t\t<td class=\"table-check\">
\t\t <div class=\"checker\">
\t\t  ";
                    // line 65
                    if ((isset($context["S_TOPICS"]) ? $context["S_TOPICS"] : null)) {
                        // line 66
                        echo "\t\t  <input type=\"checkbox\" name=\"topic_id_list[]\" value=\"";
                        echo $this->getAttribute($context["postrow"], "TOPIC_ID", array());
                        echo "\" id=\"";
                        echo $this->getAttribute($context["postrow"], "TOPIC_ID", array());
                        echo "\"><label for=\"";
                        echo $this->getAttribute($context["postrow"], "TOPIC_ID", array());
                        echo "\"></label>\t\t\t
\t\t  ";
                    } else {
                        // line 68
                        echo "\t\t  <input type=\"checkbox\" name=\"post_id_list[]\" value=\"";
                        echo $this->getAttribute($context["postrow"], "POST_ID", array());
                        echo "\" id=\"";
                        echo $this->getAttribute($context["postrow"], "POST_ID", array());
                        echo "\"><label for=\"";
                        echo $this->getAttribute($context["postrow"], "POST_ID", array());
                        echo "\"></label>
\t\t  ";
                    }
                    // line 70
                    echo "\t\t </div>
\t\t</td>
\t   </tr>
\t\t";
                }
                // line 74
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "\t  </tbody>
\t</table>
\t</div>
 </div>
";
        } else {
            // line 80
            echo "\t<div class=\"alert alert-info fade in\">
        <button data-dismiss=\"alert\" class=\"close\" type=\"button\" aria-hidden=\"true\"><i class=\"awe-remove-circle\"></i></button>
        <i class=\"fa fa-warning\"></i><strong>&nbsp;";
            // line 82
            echo $this->env->getExtension('phpbb')->lang("INFO_BOX");
            echo "</strong>&nbsp;
\t\t";
            // line 83
            if ((isset($context["S_RESTORE"]) ? $context["S_RESTORE"] : null)) {
                // line 84
                echo "\t\t\t";
                if ((isset($context["S_TOPICS"]) ? $context["S_TOPICS"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("NO_TOPICS_DELETED");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("NO_POSTS_DELETED");
                }
                // line 85
                echo "\t\t";
            } else {
                // line 86
                echo "\t\t\t";
                if ((isset($context["S_TOPICS"]) ? $context["S_TOPICS"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("NO_TOPICS_QUEUE");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("NO_POSTS_QUEUE");
                }
                // line 87
                echo "\t\t";
            }
            // line 88
            echo "\t</div>
\t";
        }
        // line 90
        echo "\t
 <div class=\"clearfix\">
\t";
        // line 92
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "postrow", array()))) {
            // line 93
            echo "\t<div class=\"pull-left\">
\t<fieldset class=\"display-actions\">
\t\t";
            // line 95
            if ((isset($context["S_RESTORE"]) ? $context["S_RESTORE"] : null)) {
                // line 96
                echo "\t\t<div class=\"btn-group\">
\t\t <button class=\"btn btn-default\" type=\"submit\" name=\"action[delete]\" value=\"";
                // line 97
                echo $this->env->getExtension('phpbb')->lang("DELETE");
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("DELETE");
                echo "\"><i class=\"fa fa-trash-o\"></i></button>
\t\t <button class=\"btn btn-default\" type=\"submit\" name=\"action[restore]\" value=\"";
                // line 98
                echo $this->env->getExtension('phpbb')->lang("RESTORE");
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("RESTORE");
                echo "\"><i class=\"fa fa-refresh\"></i></button>
\t\t</div>
\t\t";
            } else {
                // line 101
                echo "\t\t<div class=\"btn-group\">
\t\t <button class=\"btn btn-default\" type=\"submit\" name=\"action[approve]\" id=\"action[approve]\" title=\"";
                // line 102
                echo $this->env->getExtension('phpbb')->lang("APPROVE");
                echo "\"><i class=\"fa fa-thumbs-up\"></i></button>
\t\t <button class=\"btn btn-default\" type=\"submit\" name=\"action[disapprove]\" id=\"action[disapprove]\" title=\"";
                // line 103
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
                echo "\"><i class=\"fa fa-thumbs-down\"></i></button>
\t\t</div>
\t\t";
            }
            // line 106
            echo "
\t\t<div class=\"btn-group\">
\t\t";
            // line 108
            if ((isset($context["S_TOPICS"]) ? $context["S_TOPICS"] : null)) {
                // line 109
                echo "\t\t <a href=\"javascript:void(0);\" onclick=\"marklist('mcp', 'topic_id_list', true); return false;\" class=\"btn btn-default\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "\"><i class=\"fa fa-check-square-o\"></i></a>
\t\t <a href=\"javascript:void(0);\" onclick=\"marklist('mcp', 'topic_id_list', false); return false;\" class=\"btn btn-default\" title=\"";
                // line 110
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "\"><i class=\"fa fa-square-o\"></i></a>
\t\t";
            } else {
                // line 112
                echo "\t\t <a href=\"javascript:void(0);\" onclick=\"marklist('mcp', 'post_id_list', true); return false;\" class=\"btn btn-default\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "\"><i class=\"fa fa-check-square-o\"></i></a>
\t\t <a href=\"javascript:void(0);\" onclick=\"marklist('mcp', 'post_id_list', false); return false;\" class=\"btn btn-default\" title=\"";
                // line 113
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "\"><i class=\"fa fa-square-o\"></i></a>
\t\t";
            }
            // line 115
            echo "\t\t</div>\t
\t</fieldset>
\t</div>
    ";
        }
        // line 119
        echo "\t
\t<ul class=\"pagination pagination-sm pull-right\">
\t <li><a title=\"\" href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\">";
        // line 121
        echo $this->env->getExtension('phpbb')->lang("OPTIONS");
        echo "</a></li>
\t\t<li><a>";
        // line 122
        echo (isset($context["TOTAL"]) ? $context["TOTAL"] : null);
        echo "</a></li>
\t ";
        // line 123
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 124
            echo "\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_queue.html", 124)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 125
            echo "\t ";
        } else {
            // line 126
            echo "\t\t<li class=\"active\"><a>";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a></li>\t
\t ";
        }
        // line 128
        echo "\t</ul>
 </div>
\t
\t<div class=\"space10\"></div>
<div class=\"hidden-xs\">
\t<fieldset class=\"controls-row\">
                    <div class=\"sorting collapse\">
\t\t\t\t\t <div class=\"panel panel-default\">
\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                         <label for=\"bday_day\">";
        // line 139
        echo $this->env->getExtension('phpbb')->lang("DISPLAY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
                            <div class=\"control-row\">
                              ";
        // line 141
        echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
        echo "
                            </div>
\t\t\t\t\t\t</div>
\t 
\t                    <div class=\"col-md-4 col-sm-4\"> 
                          <label for=\"bday_day\">";
        // line 146
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo "</label>
                            <div class=\"control-row\">
                              ";
        // line 148
        echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
        echo "
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                           <label for=\"bday_day\">";
        // line 153
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo "</label>
                            <div class=\"control-row\">
\t\t\t\t\t\t\t<div class=\"input-group\">
                             ";
        // line 156
        echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
        echo "
\t\t\t\t\t\t\t <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" name=\"sort\" type=\"submit\">";
        // line 158
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

</form>

";
        // line 173
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_queue.html", 173)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_queue.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 173,  439 => 158,  434 => 156,  428 => 153,  420 => 148,  415 => 146,  407 => 141,  401 => 139,  388 => 128,  382 => 126,  379 => 125,  366 => 124,  364 => 123,  360 => 122,  356 => 121,  352 => 119,  346 => 115,  341 => 113,  336 => 112,  331 => 110,  326 => 109,  324 => 108,  320 => 106,  314 => 103,  310 => 102,  307 => 101,  299 => 98,  293 => 97,  290 => 96,  288 => 95,  284 => 93,  282 => 92,  278 => 90,  274 => 88,  271 => 87,  264 => 86,  261 => 85,  254 => 84,  252 => 83,  248 => 82,  244 => 80,  237 => 75,  231 => 74,  225 => 70,  215 => 68,  205 => 66,  203 => 65,  191 => 61,  179 => 60,  173 => 57,  167 => 56,  161 => 55,  157 => 53,  151 => 51,  149 => 50,  146 => 49,  142 => 48,  135 => 44,  128 => 43,  120 => 42,  111 => 36,  105 => 33,  97 => 27,  91 => 25,  88 => 24,  75 => 23,  73 => 22,  69 => 21,  60 => 15,  54 => 12,  49 => 10,  40 => 4,  36 => 3,  31 => 2,  19 => 1,);
    }
}
