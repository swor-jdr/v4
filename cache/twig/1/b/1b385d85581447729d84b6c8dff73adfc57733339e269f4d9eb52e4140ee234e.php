<?php

/* mcp_logs.html */
class __TwigTemplate_1b385d85581447729d84b6c8dff73adfc57733339e269f4d9eb52e4140ee234e extends Twig_Template
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
        $this->loadTemplate("mcp_header.html", "mcp_logs.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"side-segment\"><h3>";
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h3></div>
<form method=\"post\" id=\"mcp\" action=\"";
        // line 3
        echo (isset($context["U_POST_ACTION"]) ? $context["U_POST_ACTION"] : null);
        echo "\">

<div class=\"row\">
    <div class=\"col-md-4 col-sm-6\">
\t <div class=\"input-group input-group-sm\"> 
\t   <input class=\"form-control\" type=\"text\" class=\"medium\" size=\"\" name=\"keywords\" id=\"search_keywords\" placeholder=\"";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
        echo ":\">
\t  <span class=\"input-group-btn\">
\t   <button type=\"submit\" class=\"btn btn-default\">";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "</button>
      </span>
     </div>
    </div>

\t<div class=\"col-md-8\">
        <ul class=\"pagination pagination-sm pull-right\">
\t\t <li><a>";
        // line 17
        echo (isset($context["TOTAL"]) ? $context["TOTAL"] : null);
        echo "</a></li>
\t\t";
        // line 18
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 19
            echo "\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_logs.html", 19)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 20
            echo "\t\t";
        } else {
            // line 21
            echo "\t\t\t<li class=\"active\"><a>";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a></li>\t
\t\t";
        }
        // line 23
        echo "       </ul>\t
\t</div>
</div>
\t
 <div class=\"panel panel-forum\">
   <div class=\"panel-heading\">
\t <i class=\"fa fa-bolt\"></i> ";
        // line 29
        echo $this->env->getExtension('phpbb')->lang("MODERATOR_LOGS");
        echo "
\t</div>
\t<div class=\"panel-inner\">
\t<table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t<tr>
\t\t<th data-class=\"expand\">";
        // line 35
        echo $this->env->getExtension('phpbb')->lang("MCP_DETAIL_U_IP");
        echo "</th>
\t\t<th data-hide=\"phone\">";
        // line 36
        echo $this->env->getExtension('phpbb')->lang("TIME");
        echo "</th>
\t\t<th data-hide=\"phone\">";
        // line 37
        echo $this->env->getExtension('phpbb')->lang("ACTION");
        echo "</th>
\t\t";
        // line 38
        if ((isset($context["S_CLEAR_ALLOWED"]) ? $context["S_CLEAR_ALLOWED"] : null)) {
            // line 39
            echo "\t\t<th>";
            echo $this->env->getExtension('phpbb')->lang("MARK");
            echo "</th>
\t\t";
        }
        // line 41
        echo "\t</tr>
\t</thead>
\t\t<tbody>
\t";
        // line 44
        if ((isset($context["S_LOGS"]) ? $context["S_LOGS"] : null)) {
            // line 45
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "log", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 46
                echo "\t\t<tr>
\t\t <td>";
                // line 47
                echo $this->getAttribute($context["log"], "USERNAME", array());
                echo " <br>";
                echo $this->getAttribute($context["log"], "IP", array());
                echo "</td>
\t\t <td>";
                // line 48
                echo $this->getAttribute($context["log"], "DATE", array());
                echo "</td>
\t\t <td>";
                // line 49
                echo $this->getAttribute($context["log"], "ACTION", array());
                echo "<br />
\t\t\t";
                // line 50
                echo $this->getAttribute($context["log"], "DATA", array());
                echo "
\t\t </td>
\t\t ";
                // line 52
                if ((isset($context["S_CLEAR_ALLOWED"]) ? $context["S_CLEAR_ALLOWED"] : null)) {
                    // line 53
                    echo "\t     <td class=\"table-check\"><div class=\"checker\"><input type=\"checkbox\" name=\"mark[]\" id=\"";
                    echo $this->getAttribute($context["log"], "ID", array());
                    echo "\" value=\"";
                    echo $this->getAttribute($context["log"], "ID", array());
                    echo "\"><label for=\"";
                    echo $this->getAttribute($context["log"], "ID", array());
                    echo "\"></label></div></td>
\t    ";
                }
                // line 55
                echo "\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t";
        } else {
            // line 58
            echo "\t\t<tr>
\t\t\t<td colspan=\"";
            // line 59
            if ((isset($context["S_CLEAR_ALLOWED"]) ? $context["S_CLEAR_ALLOWED"] : null)) {
                echo "5";
            } else {
                echo "4";
            }
            echo "\" >";
            echo $this->env->getExtension('phpbb')->lang("NO_ENTRIES");
            echo "</td>
\t\t</tr>
\t";
        }
        // line 62
        echo "\t</tbody>
\t</table>
\t</div>
</div>
\t";
        // line 66
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "log", array()))) {
            // line 67
            echo "
<div class=\"row\">
\t\t
\t";
            // line 70
            if ((isset($context["S_CLEAR_ALLOWED"]) ? $context["S_CLEAR_ALLOWED"] : null)) {
                // line 71
                echo "    <div class=\"col-md-4\">
\t<fieldset>
\t<div class=\"btn-group\">
\t <button class=\"btn btn-default\" type=\"submit\" name=\"action[del_all]\" title=\"\" data-original-title=\"";
                // line 74
                echo $this->env->getExtension('phpbb')->lang("DELETE_ALL");
                echo "\"><i class=\"fa fa-trash-o\"></i></button>
\t ";
                // line 75
                if ( !(isset($context["S_CLOSED"]) ? $context["S_CLOSED"] : null)) {
                    // line 76
                    echo "\t <button class=\"btn btn-default\" type=\"submit\" name=\"action[del_marked]\" title=\"\" data-original-title=\"";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
                    echo "\"><i class=\"fa fa-times\"></i></button>
\t ";
                }
                // line 78
                echo "\t</div>
\t
\t<div class=\"btn-group\">
\t<a href=\"javascript:;\" onclick=\"marklist('mcp', 'mark', true); return false;\" class=\"btn btn-default\" title=\"\" data-original-title=\"";
                // line 81
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "\"><i class=\"fa fa-check-square-o\"></i></a>
\t<a href=\"javascript:;\" onclick=\"marklist('mcp', 'mark', false); return false;\" class=\"btn btn-default\" title=\"\" data-original-title=\"";
                // line 82
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "\"><i class=\"fa fa-square-o\"></i></a>
\t</div>
    </fieldset>
\t</div>
\t";
            }
            // line 87
            echo "\t\t
\t<div class=\"col-md-8\">
        <ul class=\"pagination pagination-sm pull-right\">
\t\t<li class=\"hidden-xs\"><a title=\"\" data-original-title=\"\" href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\">";
            // line 90
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</a></li>
\t\t <li><a>";
            // line 91
            echo (isset($context["TOTAL"]) ? $context["TOTAL"] : null);
            echo "</a></li>
\t\t";
            // line 92
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 93
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "mcp_logs.html", 93)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 94
                echo "\t\t";
            } else {
                // line 95
                echo "\t\t\t<li class=\"active\"><a>";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "</a></li>\t
\t\t";
            }
            // line 97
            echo "       </ul>\t
\t</div>\t
\t\t
</div>

<div class=\"space10\"></div>

\t\t";
            // line 104
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t
<div class=\"hidden-xs\">
\t<fieldset class=\"controls-row\">
                    <div class=\"sorting collapse\">
\t\t\t\t\t <div class=\"panel panel-default\">
\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                         <label for=\"bday_day\">";
            // line 113
            echo $this->env->getExtension('phpbb')->lang("DISPLAY");
            echo ":</label>
                            <div class=\"control-row\">
                              ";
            // line 115
            echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
            echo "
                            </div>
\t\t\t\t\t\t</div>
\t 
\t                    <div class=\"col-md-4 col-sm-4\"> 
                          <label for=\"bday_day\">";
            // line 120
            echo $this->env->getExtension('phpbb')->lang("SORT_BY");
            echo " </label>
                            <div class=\"control-row\">
                              ";
            // line 122
            echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
            echo "
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                           <label for=\"bday_day\">";
            // line 127
            echo $this->env->getExtension('phpbb')->lang("SORT_BY");
            echo "</label>
                            <div class=\"control-row\">
\t\t\t\t\t\t\t<div class=\"input-group\">
                             ";
            // line 130
            echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
            echo "
\t\t\t\t\t\t\t <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" name=\"sort\" type=\"submit\">";
            // line 132
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
\t";
        } else {
            // line 145
            echo "\t\t";
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t";
        }
        // line 147
        echo "</form>

";
        // line 149
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_logs.html", 149)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_logs.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 149,  361 => 147,  355 => 145,  339 => 132,  334 => 130,  328 => 127,  320 => 122,  315 => 120,  307 => 115,  302 => 113,  290 => 104,  281 => 97,  275 => 95,  272 => 94,  259 => 93,  257 => 92,  253 => 91,  249 => 90,  244 => 87,  236 => 82,  232 => 81,  227 => 78,  221 => 76,  219 => 75,  215 => 74,  210 => 71,  208 => 70,  203 => 67,  201 => 66,  195 => 62,  183 => 59,  180 => 58,  177 => 57,  170 => 55,  160 => 53,  158 => 52,  153 => 50,  149 => 49,  145 => 48,  139 => 47,  136 => 46,  131 => 45,  129 => 44,  124 => 41,  118 => 39,  116 => 38,  112 => 37,  108 => 36,  104 => 35,  95 => 29,  87 => 23,  81 => 21,  78 => 20,  65 => 19,  63 => 18,  59 => 17,  49 => 10,  44 => 8,  36 => 3,  31 => 2,  19 => 1,);
    }
}
