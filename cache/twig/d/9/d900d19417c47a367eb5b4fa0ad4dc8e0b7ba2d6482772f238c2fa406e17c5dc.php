<?php

/* search_body.html */
class __TwigTemplate_d900d19417c47a367eb5b4fa0ad4dc8e0b7ba2d6482772f238c2fa406e17c5dc extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "search_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "  <div class=\"side-segment\"><h3>";
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "</h3></div>
  
  ";
        // line 4
        // line 5
        echo "
<form role=\"form\" method=\"get\" action=\"";
        // line 6
        echo (isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null);
        echo "\" data-focus=\"keywords\">
 <div class=\"well\">
\t<h3>";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("SEARCH_QUERY");
        echo "</h3>
  <fieldset>
\t<div class=\"form-group\">
\t\t <label class=\"control-label\" for=\"keywords\">";
        // line 11
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS_EXPLAIN");
        echo "</span>
          <div class=\"input-group\">
\t        <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
\t\t    <input class=\"form-control input-sm\" type=\"text\" placeholder=\"E.g. www.sitesplat.com\" name=\"keywords\" id=\"keywords\" title=\"";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
        echo "\"/>
\t\t  </div> 
\t</div>
\t<div class=\"form-group\">
\t  <input type=\"radio\" checked=\"checked\" name=\"terms\" id=\"terms1\" value=\"all\"><label class=\"checkbox-inline\" for=\"terms1\">";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("SEARCH_ALL_TERMS");
        echo "</label>
\t  <input type=\"radio\" name=\"terms\" id=\"terms2\" value=\"any\"><label class=\"checkbox-inline\" for=\"terms2\">";
        // line 19
        echo $this->env->getExtension('phpbb')->lang("SEARCH_ANY_TERMS");
        echo "</label>
\t <div class=\"control-group\"></div>
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"author\">";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("SEARCH_AUTHOR");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb')->lang("SEARCH_AUTHOR_EXPLAIN");
        echo "</span>
         <div class=\"input-group\">
\t       <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
\t\t   <input class=\"form-control input-sm\" type=\"text\" placeholder=\"E.g. SiteSplat\" name=\"author\" id=\"author\" title=\"";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("SEARCH_AUTHOR");
        echo "\"/>
\t\t</div> 
\t</div>
  </fieldset>
 </div>


<div class=\"well\">
\t<h3>";
        // line 35
        echo $this->env->getExtension('phpbb')->lang("SEARCH_OPTIONS");
        echo "</h3>

\t<fieldset>
\t<div class=\"form-group\">
\t   <label class=\"control-label\" for=\"search_forum\">";
        // line 39
        echo $this->env->getExtension('phpbb')->lang("SEARCH_FORUMS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb')->lang("SEARCH_FORUMS_EXPLAIN");
        echo "</span>
       <select class=\"selectpicker\" data-container=\"body\" data-selected-text-format=\"count\" name=\"fid[]\" id=\"search_forum\" multiple=\"multiple\" size=\"8\" title=\"";
        // line 40
        echo $this->env->getExtension('phpbb')->lang("SEARCH_FORUMS");
        echo "\">";
        echo (isset($context["S_FORUM_OPTIONS"]) ? $context["S_FORUM_OPTIONS"] : null);
        echo "</select>
     <div class=\"control-group\"></div>
\t</div>
\t
\t<div class=\"form-group\">
\t <label class=\"control-label\" for=\"search_child1\">";
        // line 45
        echo $this->env->getExtension('phpbb')->lang("SEARCH_SUBFORUMS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
      <input type=\"radio\" checked=\"checked\" name=\"sc\" id=\"search_child1\" value=\"1\"><label class=\"radio-inline\" for=\"search_child1\">";
        // line 46
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t  <input type=\"radio\" name=\"sc\" id=\"search_child2\" value=\"0\"><label class=\"radio-inline\" for=\"search_child2\">";
        // line 47
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t<div class=\"control-group\"></div>
\t</div>
\t
\t<div class=\"form-group\">
\t   <label class=\"control-label\" for=\"sf1\">";
        // line 52
        echo $this->env->getExtension('phpbb')->lang("SEARCH_WITHIN");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
     <input type=\"radio\" checked=\"checked\" name=\"sf\" id=\"sf1\" value=\"all\"><label class=\"radio-inline\" for=\"sf1\">";
        // line 53
        echo $this->env->getExtension('phpbb')->lang("SEARCH_TITLE_MSG");
        echo "</label>
\t <input type=\"radio\" name=\"sf\" id=\"sf2\" value=\"msgonly\"><label class=\"radio-inline\" for=\"sf2\">";
        // line 54
        echo $this->env->getExtension('phpbb')->lang("SEARCH_MSG_ONLY");
        echo "</label>
\t <input type=\"radio\" name=\"sf\" id=\"sf3\" value=\"titleonly\"><label class=\"radio-inline\" for=\"sf3\">";
        // line 55
        echo $this->env->getExtension('phpbb')->lang("SEARCH_TITLE_ONLY");
        echo "</label>
\t <input type=\"radio\" name=\"sf\" id=\"sf4\" value=\"firstpost\"><label class=\"radio-inline\" for=\"sf4\">";
        // line 56
        echo $this->env->getExtension('phpbb')->lang("SEARCH_FIRST_POST");
        echo "</label>
\t<div class=\"control-group\"></div>
\t</div>
\t
\t<div class=\"form-group\"> 
\t   <label class=\"control-label\" for=\"show_results1\">";
        // line 61
        echo $this->env->getExtension('phpbb')->lang("DISPLAY_RESULTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
    <input type=\"radio\" checked=\"checked\" name=\"sr\" id=\"show_results1\" value=\"posts\"><label class=\"radio-inline\" for=\"show_results1\">";
        // line 62
        echo $this->env->getExtension('phpbb')->lang("POSTS");
        echo "</label>
\t<input type=\"radio\" name=\"sr\" id=\"show_results2\" value=\"topics\"><label class=\"radio-inline\" for=\"show_results2\">";
        // line 63
        echo $this->env->getExtension('phpbb')->lang("TOPICS");
        echo "</label>
\t<div class=\"control-group\"></div>
\t</div>
\t
\t<div class=\"form-group\">
\t   <label class=\"control-label\" for=\"sort_result2\">";
        // line 68
        echo $this->env->getExtension('phpbb')->lang("RESULT_SORT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div>";
        // line 69
        echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
        echo "</div> 
\t <div class=\"space10\"></div>
\t<input type=\"radio\" name=\"sd\" id=\"sa\" value=\"a\"> <label class=\"radio-inline\" for=\"sa\">";
        // line 71
        echo $this->env->getExtension('phpbb')->lang("SORT_ASCENDING");
        echo "</label>
\t<input type=\"radio\" name=\"sd\" id=\"sd\" value=\"d\" checked=\"checked\"> <label class=\"radio-inline\" for=\"sd\">";
        // line 72
        echo $this->env->getExtension('phpbb')->lang("SORT_DESCENDING");
        echo "</label>
\t<div class=\"control-group\"></div>
\t</div>
\t
\t<div class=\"form-group\">
\t   <label class=\"control-label\" for=\"\">";
        // line 77
        echo $this->env->getExtension('phpbb')->lang("RESULT_DAYS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div>";
        // line 78
        echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
        echo "</div>
\t<div class=\"control-group\"></div>
\t</div>
   
   
   <div class=\"form-group\">
   <div class=\"row\">
   <div class=\"col-md-3 col-sm-5 col-xs-6\">
   <label class=\"control-label\" for=\"\">";
        // line 86
        echo $this->env->getExtension('phpbb')->lang("RETURN_FIRST");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
  <div class=\"input-group\">
     <select class=\"selectpicker input-group-btn\" data-container=\"body\" data-width=\"120px\" name=\"ch\" title=\"";
        // line 88
        echo $this->env->getExtension('phpbb')->lang("RETURN_FIRST");
        echo "\">";
        echo (isset($context["S_CHARACTER_OPTIONS"]) ? $context["S_CHARACTER_OPTIONS"] : null);
        echo "</select>
     <span class=\"input-group-addon\">";
        // line 89
        echo $this->env->getExtension('phpbb')->lang("POST_CHARACTERS");
        echo "</span>
   </div>
   </div>
   </div>
   </div>
   
  </fieldset>

</div>

\t<fieldset class=\"form-actions\">
\t\t";
        // line 100
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t\t<button type=\"reset\" value=\"";
        // line 101
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-default\">";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "</button>
\t\t<button type=\"submit\" name=\"submit\" value=\"";
        // line 102
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "\" class=\"btn btn-default\" autocomplete=\"off\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb')->lang("SEARCHING");
        echo "<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\">";
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "</button>
\t</fieldset>
</form>
<div class=\"space10\"></div>

";
        // line 107
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "recentsearch", array()))) {
            // line 108
            echo "   <div class=\"panel panel-forum\">
\t<div class=\"panel-heading\">
\t <i class=\"fa fa-tags\"></i>&nbsp;";
            // line 110
            echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
            echo "
\t</div>
\t<div class=\"panel-inner\">
    <table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t<tr>
\t\t<th colspan=\"2\" class=\"name\">";
            // line 116
            echo $this->env->getExtension('phpbb')->lang("RECENT_SEARCHES");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 120
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "recentsearch", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["recentsearch"]) {
                // line 121
                echo "\t\t<tr>
\t\t\t<td><a href=\"";
                // line 122
                echo $this->getAttribute($context["recentsearch"], "U_KEYWORDS", array());
                echo "\">";
                echo $this->getAttribute($context["recentsearch"], "KEYWORDS", array());
                echo "</a></td>
\t\t\t<td class=\"active\"><span>&nbsp;";
                // line 123
                echo $this->getAttribute($context["recentsearch"], "TIME", array());
                echo "</span></td>
\t\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 126
                echo "\t\t<tr>
\t\t\t<td colspan=\"2\">";
                // line 127
                echo $this->env->getExtension('phpbb')->lang("NO_RECENT_SEARCHES");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recentsearch'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "\t</tbody>
\t</table>
\t</div>
\t</div>
";
        }
        // line 135
        echo "
";
        // line 136
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_body.html", 136)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 136,  332 => 135,  325 => 130,  316 => 127,  313 => 126,  305 => 123,  299 => 122,  296 => 121,  291 => 120,  284 => 116,  275 => 110,  271 => 108,  269 => 107,  257 => 102,  251 => 101,  247 => 100,  233 => 89,  227 => 88,  221 => 86,  210 => 78,  205 => 77,  197 => 72,  193 => 71,  188 => 69,  183 => 68,  175 => 63,  171 => 62,  166 => 61,  158 => 56,  154 => 55,  150 => 54,  146 => 53,  141 => 52,  133 => 47,  129 => 46,  124 => 45,  114 => 40,  107 => 39,  100 => 35,  89 => 27,  80 => 24,  72 => 19,  68 => 18,  61 => 14,  52 => 11,  46 => 8,  41 => 6,  38 => 5,  37 => 4,  31 => 2,  19 => 1,);
    }
}
