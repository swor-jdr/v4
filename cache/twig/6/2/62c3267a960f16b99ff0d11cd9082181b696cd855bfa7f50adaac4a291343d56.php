<?php

/* mcp_reports.html */
class __TwigTemplate_62c3267a960f16b99ff0d11cd9082181b696cd855bfa7f50adaac4a291343d56 extends Twig_Template
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
        $this->loadTemplate("mcp_header.html", "mcp_reports.html", 1)->display($context);
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
 <p>";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("EXPLAIN");
        echo "</p>
<div class=\"row\">
\t";
        // line 6
        if ( !(isset($context["S_PM"]) ? $context["S_PM"] : null)) {
            // line 7
            echo "\t<div class=\"col-md-4\">
\t  <fieldset class=\"form-group\">
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
   ";
        }
        // line 19
        echo "   
   <div class=\"col-md-8 pull-right\">
        <ul class=\"pagination pagination-sm pull-right\">
\t\t\t <li><a>";
        // line 22
        echo (isset($context["TOTAL_REPORTS"]) ? $context["TOTAL_REPORTS"] : null);
        echo "</a></li>
\t\t\t";
        // line 23
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 24
            echo "\t\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_reports.html", 24)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 25
            echo "\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t<li class=\"active\"><a>";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a></li>\t
\t\t\t";
        }
        // line 28
        echo "\t\t</ul>\t
\t</div>
</div>
\t
\t";
        // line 32
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "postrow", array()))) {
            // line 33
            echo "\t<div class=\"panel panel-forum\">
\t     <div class=\"panel-heading\">
\t\t  <i class=\"fa fa-list-ol\"></i>&nbsp;";
            // line 35
            echo $this->env->getExtension('phpbb')->lang("REPORTS");
            echo "
\t\t </div>
\t\t <div class=\"panel-inner\">
\t\t<table class=\"footable table table-striped table-primary table-hover\">
        <thead>
\t\t<tr>
\t\t\t<th data-class=\"expand\">";
            // line 41
            echo $this->env->getExtension('phpbb')->lang("VIEW_DETAILS");
            echo "</th>
\t\t\t<th data-hide=\"phone\">";
            // line 42
            echo $this->env->getExtension('phpbb')->lang("REPORTER");
            if ( !(isset($context["S_PM"]) ? $context["S_PM"] : null)) {
                echo "&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
            }
            echo "</th>
\t\t    <th class=\"table-check\">";
            // line 43
            echo $this->env->getExtension('phpbb')->lang("MARK");
            echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "postrow", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
                // line 48
                echo "\t<tr>
\t\t";
                // line 49
                if ((isset($context["S_PM"]) ? $context["S_PM"] : null)) {
                    // line 50
                    echo "\t\t<td>
\t\t   <a href=\"";
                    // line 51
                    echo $this->getAttribute($context["postrow"], "U_VIEW_DETAILS", array());
                    echo "\" class=\"topictitle\">";
                    echo $this->getAttribute($context["postrow"], "PM_SUBJECT", array());
                    echo "</a>&nbsp;";
                    echo $this->getAttribute($context["postrow"], "ATTACH_ICON_IMG", array());
                    echo "<br />
\t\t   ";
                    // line 52
                    echo $this->env->getExtension('phpbb')->lang("MESSAGE_BY_AUTHOR");
                    echo "&nbsp;";
                    echo $this->getAttribute($context["postrow"], "PM_AUTHOR_FULL", array());
                    echo "&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("MESSAGE_TO");
                    echo "&nbsp;";
                    echo $this->getAttribute($context["postrow"], "RECIPIENTS", array());
                    echo "&nbsp;&#45;&nbsp;
\t\t   <small>";
                    // line 53
                    echo $this->getAttribute($context["postrow"], "PM_TIME", array());
                    echo "</small>
\t\t</td>
\t\t
\t\t<td>
\t\t";
                    // line 57
                    echo $this->getAttribute($context["postrow"], "REPORTER_FULL", array());
                    echo "<br>
\t\t<small>";
                    // line 58
                    echo $this->getAttribute($context["postrow"], "REPORT_TIME", array());
                    echo "</small>
\t\t</td>
\t\t";
                } else {
                    // line 61
                    echo "\t\t
\t\t<td>
\t\t<a href=\"";
                    // line 63
                    echo $this->getAttribute($context["postrow"], "U_VIEW_DETAILS", array());
                    echo "\">";
                    echo $this->getAttribute($context["postrow"], "POST_SUBJECT", array());
                    echo "</a>&nbsp;";
                    echo $this->getAttribute($context["postrow"], "ATTACH_ICON_IMG", array());
                    echo "<br />
\t    ";
                    // line 64
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
                    echo "&nbsp;&#45;
\t\t<small>";
                    // line 65
                    echo $this->getAttribute($context["postrow"], "POST_TIME", array());
                    echo "</small>
\t\t</td>
\t\t
\t\t<td>
\t\t";
                    // line 69
                    echo $this->getAttribute($context["postrow"], "REPORTER_FULL", array());
                    echo "&nbsp;&#45;
\t\t<small>";
                    // line 70
                    echo $this->getAttribute($context["postrow"], "REPORT_TIME", array());
                    echo "</small><br />
\t\t";
                    // line 71
                    if ($this->getAttribute($context["postrow"], "U_VIEWFORUM", array())) {
                        echo $this->env->getExtension('phpbb')->lang("FORUM");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "&nbsp;<a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_VIEWFORUM", array());
                        echo "\">";
                        echo $this->getAttribute($context["postrow"], "FORUM_NAME", array());
                        echo "</a>";
                    } else {
                        echo $this->getAttribute($context["postrow"], "FORUM_NAME", array());
                    }
                    // line 72
                    echo "\t\t</td>
\t\t";
                }
                // line 74
                echo "\t\t<td class=\"table-check\"><div class=\"checker\"><input type=\"checkbox\" name=\"report_id_list[]\" value=\"";
                echo $this->getAttribute($context["postrow"], "REPORT_ID", array());
                echo "\" id=\"report_id_list[]\"><label for=\"report_id_list[]\"></label></div></td>
\t</tr>
\t\t\t
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "\t\t\t</tbody>
\t</table>
\t</div>
</div>
\t";
        } else {
            // line 83
            echo "\t<div class=\"alert alert-info fade in\">
        <button data-dismiss=\"alert\" class=\"close\" type=\"button\" aria-hidden=\"true\"><i class=\"awe-remove-circle\"></i></button>
        <i class=\"fa fa-warning\"></i>&nbsp;<strong>";
            // line 85
            echo $this->env->getExtension('phpbb')->lang("INFO_BOX");
            echo "</strong>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("NO_REPORTS");
            echo "
    </div> 
\t";
        }
        // line 88
        echo "
<div class=\"row\">\t
\t";
        // line 90
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "postrow", array()))) {
            // line 91
            echo "\t<div class=\"col-md-4\">
\t<div class=\"pull-left\">
\t<fieldset>
\t<div class=\"btn-group\">
\t <button class=\"btn btn-default\" type=\"submit\" name=\"action[delete]\" title=\"\" data-original-title=\"";
            // line 95
            echo $this->env->getExtension('phpbb')->lang("DELETE_REPORTS");
            echo "\"><i class=\"fa fa-trash-o\"></i></button>
\t ";
            // line 96
            if ( !(isset($context["S_CLOSED"]) ? $context["S_CLOSED"] : null)) {
                // line 97
                echo "\t <button class=\"btn btn-default\" type=\"submit\" name=\"action[close]\" title=\"\" data-original-title=\"";
                echo $this->env->getExtension('phpbb')->lang("CLOSE_REPORTS");
                echo "\"><i class=\"fa fa-lock\"></i></button>
\t ";
            }
            // line 99
            echo "\t</div>
\t
\t<div class=\"btn-group\">
\t<a href=\"javascript:;\" onclick=\"marklist('mcp', 'report_id_list', true); return false;\" class=\"btn btn-default\" title=\"\" data-original-title=\"";
            // line 102
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "\"><i class=\"fa fa-check-square-o\"></i></a>
\t<a href=\"javascript:;\" onclick=\"marklist('mcp', 'report_id_list', false); return false;\" class=\"btn btn-default\" title=\"\" data-original-title=\"";
            // line 103
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "\"><i class=\"fa fa-square-o\"></i></a>
\t</div>
    </fieldset>
\t</div>
\t</div>
    ";
        }
        // line 109
        echo "\t
\t<div class=\"col-md-8 pull-right\">
        <ul class=\"pagination pagination-sm pull-right\">
\t\t<li><a title=\"\" data-original-title=\"\" href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\">";
        // line 112
        echo $this->env->getExtension('phpbb')->lang("OPTIONS");
        echo "</a></li>
\t\t\t <li><a>";
        // line 113
        echo (isset($context["TOTAL_REPORTS"]) ? $context["TOTAL_REPORTS"] : null);
        echo "</a></li>
\t\t\t";
        // line 114
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 115
            echo "\t\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_reports.html", 115)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 116
            echo "\t\t\t";
        } else {
            // line 117
            echo "\t\t\t\t<li class=\"active\"><a>";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a></li>\t
\t\t\t";
        }
        // line 119
        echo "\t\t</ul>\t
\t</div>\t
</div>

<div class=\"space10\"></div>
\t
<div class=\"hidden-xs\">
\t<fieldset class=\"controls-row\">
                    <div class=\"sorting collapse\">
\t\t\t\t\t <div class=\"panel panel-default\">
\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                         <label for=\"bday_day\">";
        // line 132
        echo $this->env->getExtension('phpbb')->lang("DISPLAY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
                            <div class=\"control-row\">
                              ";
        // line 134
        echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
        echo "
                            </div>
\t\t\t\t\t\t</div>
\t 
\t                    <div class=\"col-md-4 col-sm-4\"> 
                          <label for=\"bday_day\">";
        // line 139
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo " </label>
                            <div class=\"control-row\">
                              ";
        // line 141
        echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
        echo "
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                           <label for=\"bday_day\">";
        // line 146
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo "</label>
                            <div class=\"control-row\">
\t\t\t\t\t\t\t<div class=\"input-group\">
                             ";
        // line 149
        echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
        echo "
\t\t\t\t\t\t\t <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" name=\"sort\" type=\"submit\">";
        // line 151
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
        // line 164
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_reports.html", 164)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_reports.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 164,  401 => 151,  396 => 149,  390 => 146,  382 => 141,  377 => 139,  369 => 134,  363 => 132,  348 => 119,  342 => 117,  339 => 116,  326 => 115,  324 => 114,  320 => 113,  316 => 112,  311 => 109,  302 => 103,  298 => 102,  293 => 99,  287 => 97,  285 => 96,  281 => 95,  275 => 91,  273 => 90,  269 => 88,  261 => 85,  257 => 83,  250 => 78,  239 => 74,  235 => 72,  223 => 71,  219 => 70,  215 => 69,  208 => 65,  202 => 64,  194 => 63,  190 => 61,  184 => 58,  180 => 57,  173 => 53,  163 => 52,  155 => 51,  152 => 50,  150 => 49,  147 => 48,  143 => 47,  136 => 43,  128 => 42,  124 => 41,  115 => 35,  111 => 33,  109 => 32,  103 => 28,  97 => 26,  94 => 25,  81 => 24,  79 => 23,  75 => 22,  70 => 19,  63 => 15,  57 => 12,  52 => 10,  47 => 7,  45 => 6,  40 => 4,  36 => 3,  31 => 2,  19 => 1,);
    }
}
