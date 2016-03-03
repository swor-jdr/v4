<?php

/* ucp_main_drafts.html */
class __TwigTemplate_82a56d00bd21b77bfb0f1ba6d2b74b0d0f92004efdae4afc5ff2b08d46aeb740 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_main_drafts.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<form id=\"postform\" method=\"post\" action=\"";
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">
<div class=\"tab-pane active\">
<fieldset class=\"framed-ucp\">
  <legend>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</legend>
\t<p>";
        // line 6
        echo $this->env->getExtension('phpbb')->lang("DRAFTS_EXPLAIN");
        echo "</p>
";
        // line 7
        if ((isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null)) {
            // line 8
            echo "     <div class=\"clearfix\">
\t\t  ";
            // line 9
            $location = "posting_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_editor.html", "ucp_main_drafts.html", 9)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 10
            echo "\t </div>

<div class=\"space10\"></div>\t

\t<fieldset class=\"form-actions\">
\t\t";
            // line 15
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t <button type=\"reset\" value=\"";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" name=\"reset\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "</button>
\t\t <button type=\"submit\" name=\"submit\" value=\"";
            // line 17
            echo $this->env->getExtension('phpbb')->lang("SAVE");
            echo "\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb')->lang("SAVE");
            echo "</button>
\t\t";
            // line 18
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t
";
        } else {
            // line 22
            echo "
\t";
            // line 23
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "draftrow", array()))) {
                // line 24
                echo "\t<div class=\"panel panel-forum\">
\t<div class=\"panel-heading\">
\t <i class=\"fa fa-edit\"></i>&nbsp;";
                // line 26
                echo $this->env->getExtension('phpbb')->lang("DRAFTS");
                echo "
\t</div>
\t<div class=\"panel-inner\">
\t<table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th data-class=\"expand\">";
                // line 32
                echo $this->env->getExtension('phpbb')->lang("DRAFT_TITLE");
                echo "</th>
\t\t\t<th class=\"large26\" data-hide=\"phone\">";
                // line 33
                echo $this->env->getExtension('phpbb')->lang("SAVE_DATE");
                echo "</th>
\t\t\t<th class=\"table-check\">";
                // line 34
                echo $this->env->getExtension('phpbb')->lang("MARK");
                echo "</th>
\t\t</tr> 
\t</thead>
\t<tbody>
\t\t";
                // line 38
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "draftrow", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["draftrow"]) {
                    // line 39
                    echo "\t    <tr>
\t\t\t<td>
\t\t\t<a class=\"topictitle\" href=\"";
                    // line 41
                    echo $this->getAttribute($context["draftrow"], "U_VIEW_EDIT", array());
                    echo "\">";
                    echo $this->getAttribute($context["draftrow"], "DRAFT_SUBJECT", array());
                    echo "</a><br />
\t\t\t";
                    // line 42
                    if ($this->getAttribute($context["draftrow"], "S_LINK_TOPIC", array())) {
                        echo $this->env->getExtension('phpbb')->lang("TOPIC");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "&nbsp;<a href=\"";
                        echo $this->getAttribute($context["draftrow"], "U_VIEW", array());
                        echo "\">";
                        echo $this->getAttribute($context["draftrow"], "TITLE", array());
                        echo "</a>
\t\t\t";
                    } elseif ($this->getAttribute(                    // line 43
$context["draftrow"], "S_LINK_FORUM", array())) {
                        echo $this->env->getExtension('phpbb')->lang("FORUM");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "&nbsp;<a href=\"";
                        echo $this->getAttribute($context["draftrow"], "U_VIEW", array());
                        echo "\">";
                        echo $this->getAttribute($context["draftrow"], "TITLE", array());
                        echo "</a>
\t\t\t";
                    } elseif (                    // line 44
(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) {
                        // line 45
                        echo "\t\t\t";
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO_TOPIC_FORUM");
                    }
                    // line 46
                    echo "\t\t\t</td>
\t\t\t<td>
\t\t\t";
                    // line 48
                    echo $this->getAttribute($context["draftrow"], "DATE", array());
                    echo "<br />
\t\t\t";
                    // line 49
                    if ($this->getAttribute($context["draftrow"], "U_INSERT", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["draftrow"], "U_INSERT", array());
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("LOAD_DRAFT");
                        echo "</a>&nbsp;&#8211;&nbsp;";
                    }
                    echo "<a href=\"";
                    echo $this->getAttribute($context["draftrow"], "U_VIEW_EDIT", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_EDIT");
                    echo "</a>
\t\t\t</td>
\t\t\t<td class=\"table-check\"><div class=\"checker\"><input type=\"checkbox\" name=\"d[";
                    // line 51
                    echo $this->getAttribute($context["draftrow"], "DRAFT_ID", array());
                    echo "]\" id=\"d";
                    echo $this->getAttribute($context["draftrow"], "DRAFT_ID", array());
                    echo "\"><label for=\"d";
                    echo $this->getAttribute($context["draftrow"], "DRAFT_ID", array());
                    echo "\"></label></div></td>
\t    </tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['draftrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "\t\t</tbody>
\t\t</table>
\t </div>
\t</div>
\t";
            } else {
                // line 59
                echo "\t<div class=\"alert alert-info fade in\">
        <button data-dismiss=\"alert\" class=\"close\" type=\"button\" aria-hidden=\"true\"><i class=\"awe-remove-circle\"></i></button>
        <i class=\"fa fa-warning\"></i><strong>&nbsp;";
                // line 61
                echo $this->env->getExtension('phpbb')->lang("INFO_BOX");
                echo "</strong>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("NO_SAVED_DRAFTS");
                echo "
    </div> 
\t";
            }
            // line 64
            echo "

            <div class=\"pull-left\">
                <div class=\"btn-group\">
\t\t\t\t    ";
            // line 68
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "draftrow", array()))) {
                // line 69
                echo "                    <div class=\"dropdown\">
                        <button href=\"#\" data-toggle=\"dropdown\" class=\"btn btn-default\" title=\"\"><i class=\"fa fa-check-square-o\"></i>&nbsp;<span class=\"caret\"></span></button>
\t\t\t\t\t\t <ul class=\"dropdown-menu\">
                            <li><a href=\"#\" onclick=\"marklist('postform', '', true); return false;\" title=\"\"><i class=\"fa fa-check-square-o\"></i>";
                // line 72
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</a></li>
                            <li><a href=\"#\" onclick=\"marklist('postform', '', false); return false;\" title=\"\"><i class=\"fa fa-square-o\"></i>";
                // line 73
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a></li>
                          </ul> 
\t\t\t\t       <button class=\"btn btn-default\" type=\"submit\" name=\"delete\" title=\"";
                // line 75
                echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
                echo "\"><i class=\"fa fa-trash-o\"></i></button>
\t\t\t\t   </div> 
                        ";
                // line 77
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
                    ";
            }
            // line 78
            echo "\t\t  
\t\t        </div> 
           </div>
";
        }
        // line 82
        echo "</fieldset>
</div>
</form>
";
        // line 85
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_main_drafts.html", 85)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_main_drafts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 85,  262 => 82,  256 => 78,  251 => 77,  246 => 75,  241 => 73,  237 => 72,  232 => 69,  230 => 68,  224 => 64,  216 => 61,  212 => 59,  205 => 54,  192 => 51,  177 => 49,  173 => 48,  169 => 46,  164 => 45,  162 => 44,  152 => 43,  142 => 42,  136 => 41,  132 => 39,  128 => 38,  121 => 34,  117 => 33,  113 => 32,  104 => 26,  100 => 24,  98 => 23,  95 => 22,  88 => 18,  82 => 17,  76 => 16,  72 => 15,  65 => 10,  53 => 9,  50 => 8,  48 => 7,  44 => 6,  40 => 5,  31 => 2,  19 => 1,);
    }
}
