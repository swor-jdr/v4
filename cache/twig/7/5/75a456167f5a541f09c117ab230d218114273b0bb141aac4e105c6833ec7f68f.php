<?php

/* ucp_groups_membership.html */
class __TwigTemplate_75a456167f5a541f09c117ab230d218114273b0bb141aac4e105c6833ec7f68f extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_groups_membership.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"tab-pane active\">
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">

    <div class=\"alert alert-info fade in\">
        <button aria-hidden=\"true\" type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"awe-remove-circle\"></i></button>
         <p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("GROUPS_EXPLAIN");
        echo "</p>
    </div>
\t
\t";
        // line 10
        $value = 0;
        $context['definition']->set('SHOW_BUTTONS', $value);
        // line 11
        echo "\t";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "leader", array()))) {
            // line 12
            echo "<div class=\"panel panel-forum\">
    <div class=\"panel-heading\">
      <i class=\"fa fa-list-ol\"></i>&nbsp;";
            // line 14
            echo $this->env->getExtension('phpbb')->lang("GROUP_LEADER");
            echo "
   </div>
   <div class=\"panel-inner\">
    <table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th>";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("GROUP");
            echo "</th>
\t\t    <th class=\"table-check\">";
            // line 21
            echo $this->env->getExtension('phpbb')->lang("SELECT");
            echo "</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "leader", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["leader"]) {
                // line 26
                echo "\t\t";
                if ( !$this->getAttribute($context["leader"], "GROUP_SPECIAL", array())) {
                    // line 27
                    echo "\t\t\t";
                    $value = 1;
                    $context['definition']->set('SHOW_BUTTONS', $value);
                    // line 28
                    echo "\t\t";
                }
                // line 29
                echo "\t\t<tr>
\t\t\t<td>
\t\t\t";
                // line 31
                if ((isset($context["S_CHANGE_DEFAULT"]) ? $context["S_CHANGE_DEFAULT"] : null)) {
                    echo "<input title=\"";
                    echo $this->env->getExtension('phpbb')->lang("CHANGE_DEFAULT_GROUP");
                    echo "\" type=\"radio\" name=\"default\"";
                    if ($this->getAttribute($context["leader"], "S_GROUP_DEFAULT", array())) {
                        echo " checked=\"checked\"";
                    }
                    echo " value=\"";
                    echo $this->getAttribute($context["leader"], "GROUP_ID", array());
                    echo "\" id=\"";
                    echo $this->getAttribute($context["leader"], "GROUP_ID", array());
                    echo "\"><label class=\"checkbox-inline\" for=\"";
                    echo $this->getAttribute($context["leader"], "GROUP_ID", array());
                    echo "\"><a href=\"";
                    echo $this->getAttribute($context["leader"], "U_VIEW_GROUP", array());
                    echo "\"";
                    if ($this->getAttribute($context["leader"], "GROUP_COLOUR", array())) {
                        echo " style=\"color:#";
                        echo $this->getAttribute($context["leader"], "GROUP_COLOUR", array());
                        echo "\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["leader"], "GROUP_NAME", array());
                    echo "</a></label>";
                }
                // line 32
                echo "\t\t\t";
                if ($this->getAttribute($context["leader"], "GROUP_DESC", array())) {
                    echo $this->getAttribute($context["leader"], "GROUP_DESC", array());
                }
                // line 33
                echo "\t\t\t";
                if ( !$this->getAttribute($context["leader"], "GROUP_SPECIAL", array())) {
                    echo "<br /><small>";
                    echo $this->getAttribute($context["leader"], "GROUP_STATUS", array());
                    echo "</small>";
                }
                // line 34
                echo "\t\t\t</td>
\t\t\t<td class=\"large60\"><div class=\"text-center\"><input type=\"radio\" class=\"uniform\" name=\"selected\" value=\"";
                // line 35
                echo $this->getAttribute($context["leader"], "GROUP_ID", array());
                echo "\" ";
                if ($this->getAttribute($context["leader"], "GROUP_SPECIAL", array())) {
                    echo "disabled=\"disabled\"";
                }
                echo "><label for=\"";
                echo $this->getAttribute($context["leader"], "GROUP_ID", array());
                echo "\"></label></div></td>
\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leader'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t</tbody>
\t</table>
\t </div>
</div>
\t";
        }
        // line 43
        echo "
\t";
        // line 44
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "member", array()))) {
            // line 45
            echo "<div class=\"panel panel-forum\">
    <div class=\"panel-heading\">
      <i class=\"fa fa-list-ol\"></i>&nbsp;";
            // line 47
            echo $this->env->getExtension('phpbb')->lang("GROUP_MEMBER");
            echo "
   </div>
    <div class=\"panel-inner\">
    <table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th>";
            // line 53
            echo $this->env->getExtension('phpbb')->lang("GROUP");
            echo "</th>
\t\t    <th class=\"table-check\">";
            // line 54
            echo $this->env->getExtension('phpbb')->lang("SELECT");
            echo "</th>
\t\t</tr>
\t</thead>\t\t
\t<tbody>
\t\t";
            // line 58
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "member", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 59
                echo "\t\t";
                if ( !$this->getAttribute($context["member"], "GROUP_SPECIAL", array())) {
                    // line 60
                    echo "\t\t\t";
                    $value = 1;
                    $context['definition']->set('SHOW_BUTTONS', $value);
                    // line 61
                    echo "\t\t";
                }
                echo "\t\t
\t\t<tr>
\t\t\t<td>
\t\t\t";
                // line 64
                if ((isset($context["S_CHANGE_DEFAULT"]) ? $context["S_CHANGE_DEFAULT"] : null)) {
                    echo "<input title=\"";
                    echo $this->env->getExtension('phpbb')->lang("CHANGE_DEFAULT_GROUP");
                    echo "\" type=\"radio\" name=\"default\"";
                    if ($this->getAttribute($context["member"], "S_GROUP_DEFAULT", array())) {
                        echo " checked=\"checked\"";
                    }
                    echo " value=\"";
                    echo $this->getAttribute($context["member"], "GROUP_ID", array());
                    echo "\" id=\"";
                    echo $this->getAttribute($context["member"], "GROUP_ID", array());
                    echo "\"><label class=\"checkbox-inline\" for=\"";
                    echo $this->getAttribute($context["member"], "GROUP_ID", array());
                    echo "\"><a href=\"";
                    echo $this->getAttribute($context["member"], "U_VIEW_GROUP", array());
                    echo "\"";
                    if ($this->getAttribute($context["member"], "GROUP_COLOUR", array())) {
                        echo " style=\"color:#";
                        echo $this->getAttribute($context["member"], "GROUP_COLOUR", array());
                        echo "\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["member"], "GROUP_NAME", array());
                    echo "</a></label>";
                }
                // line 65
                echo "\t\t\t";
                if ($this->getAttribute($context["member"], "GROUP_DESC", array())) {
                    echo " ";
                    echo $this->getAttribute($context["member"], "GROUP_DESC", array());
                }
                // line 66
                echo "\t\t\t";
                if ( !$this->getAttribute($context["member"], "GROUP_SPECIAL", array())) {
                    echo $this->getAttribute($context["member"], "GROUP_STATUS", array());
                }
                // line 67
                echo "\t\t\t</td>
\t\t\t<td class=\"large60\"><div class=\"text-center\"><input type=\"radio\" class=\"uniform\" name=\"selected\" value=\"";
                // line 68
                echo $this->getAttribute($context["member"], "GROUP_ID", array());
                echo "\" ";
                if ($this->getAttribute($context["member"], "GROUP_SPECIAL", array())) {
                    echo "disabled=\"disabled\"";
                }
                echo " id=\"";
                echo $this->getAttribute($context["member"], "GROUP_ID", array());
                echo "-yu\"><label class=\"checkbox-inline\" for=\"";
                echo $this->getAttribute($context["member"], "GROUP_ID", array());
                echo "-yu\"></label></div></td>
\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "\t\t</tbody>
\t</table>
\t</div>
</div>
\t";
        }
        // line 76
        echo "\t

";
        // line 78
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pending", array()))) {
            // line 79
            echo "<div class=\"panel panel-forum\">
    <div class=\"panel-heading\">
      <i class=\"fa fa-list-ol\"></i> ";
            // line 81
            echo $this->env->getExtension('phpbb')->lang("GROUP_PENDING");
            echo "
   </div>
    <div class=\"panel-inner\">
    <table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th>";
            // line 87
            echo $this->env->getExtension('phpbb')->lang("GROUP");
            echo "</th>
\t\t    <th class=\"table-check\">";
            // line 88
            echo $this->env->getExtension('phpbb')->lang("SELECT");
            echo "</th>
\t\t</tr>
\t</thead>\t\t
\t<tbody>
\t\t";
            // line 92
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pending", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pending"]) {
                // line 93
                echo "\t\t";
                if ( !$this->getAttribute($context["pending"], "GROUP_SPECIAL", array())) {
                    // line 94
                    echo "\t\t\t";
                    $value = 1;
                    $context['definition']->set('SHOW_BUTTONS', $value);
                    // line 95
                    echo "\t\t";
                }
                echo "\t\t\t
\t\t<tr>
\t\t\t<td>
\t\t\t<a href=\"";
                // line 98
                echo $this->getAttribute($context["pending"], "U_VIEW_GROUP", array());
                echo "\"";
                if ($this->getAttribute($context["pending"], "GROUP_COLOUR", array())) {
                    echo " style=\"color:#";
                    echo $this->getAttribute($context["pending"], "GROUP_COLOUR", array());
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute($context["pending"], "GROUP_NAME", array());
                echo "</a>
\t\t\t";
                // line 99
                if ($this->getAttribute($context["pending"], "GROUP_DESC", array())) {
                    echo "<br />";
                    echo $this->getAttribute($context["pending"], "GROUP_DESC", array());
                }
                // line 100
                echo "\t\t\t";
                if ( !$this->getAttribute($context["pending"], "GROUP_SPECIAL", array())) {
                    echo "<br /><small>";
                    echo $this->getAttribute($context["pending"], "GROUP_STATUS", array());
                    echo "</small>";
                }
                // line 101
                echo "\t\t\t</td>
\t\t\t<td class=\"large60\"><div class=\"text-center\"><input type=\"radio\" class=\"uniform\" name=\"selected\" value=\"";
                // line 102
                echo $this->getAttribute($context["pending"], "GROUP_ID", array());
                echo "\" ";
                if ($this->getAttribute($context["pending"], "GROUP_SPECIAL", array())) {
                    echo "disabled=\"disabled\"";
                }
                echo " id=\"";
                echo $this->getAttribute($context["pending"], "GROUP_ID", array());
                echo "\"><label class=\"checkbox-inline\" for=\"";
                echo $this->getAttribute($context["pending"], "GROUP_ID", array());
                echo "\"></label></div></td>
\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pending'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "\t\t\t</tbody>
\t</table>
\t</div>
</div>
";
        }
        // line 110
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "nonmember", array()))) {
            // line 111
            echo " <div class=\"panel panel-forum\">
    <div class=\"panel-heading\">
      <i class=\"fa fa-list-ol\"></i>&nbsp;";
            // line 113
            echo $this->env->getExtension('phpbb')->lang("GROUP_NONMEMBER");
            echo "
   </div>
    <div class=\"panel-inner\">
    <table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th>";
            // line 119
            echo $this->env->getExtension('phpbb')->lang("GROUP");
            echo "</th>
\t\t    <th class=\"table-check\">";
            // line 120
            echo $this->env->getExtension('phpbb')->lang("SELECT");
            echo "</th>
\t\t</tr>
\t</thead>\t\t
\t<tbody>
\t\t";
            // line 124
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "nonmember", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["nonmember"]) {
                // line 125
                echo "\t\t";
                if ($this->getAttribute($context["nonmember"], "S_CAN_JOIN", array())) {
                    // line 126
                    echo "\t\t\t";
                    $value = 1;
                    $context['definition']->set('SHOW_BUTTONS', $value);
                    // line 127
                    echo "\t\t";
                }
                echo "\t\t
\t\t<tr>
\t\t\t<td>
\t\t\t<a href=\"";
                // line 130
                echo $this->getAttribute($context["nonmember"], "U_VIEW_GROUP", array());
                echo "\"";
                if ($this->getAttribute($context["nonmember"], "GROUP_COLOUR", array())) {
                    echo " style=\"color:#";
                    echo $this->getAttribute($context["nonmember"], "GROUP_COLOUR", array());
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute($context["nonmember"], "GROUP_NAME", array());
                echo "</a>
\t\t\t";
                // line 131
                if ($this->getAttribute($context["nonmember"], "GROUP_DESC", array())) {
                    echo "<br />";
                    echo $this->getAttribute($context["nonmember"], "GROUP_DESC", array());
                }
                // line 132
                echo "\t\t\t";
                if ( !$this->getAttribute($context["nonmember"], "GROUP_SPECIAL", array())) {
                    echo "<br /><small>";
                    echo $this->getAttribute($context["nonmember"], "GROUP_STATUS", array());
                    echo "</small>";
                }
                // line 133
                echo "\t\t\t</td>
\t\t\t<td class=\"large60\"><div class=\"text-center\"><input type=\"radio\" class=\"uniform\" name=\"selected\" value=\"";
                // line 134
                echo $this->getAttribute($context["nonmember"], "GROUP_ID", array());
                echo "\" ";
                if ( !$this->getAttribute($context["nonmember"], "S_CAN_JOIN", array())) {
                    echo "disabled=\"disabled\"";
                }
                echo " id=\"";
                echo $this->getAttribute($context["nonmember"], "GROUP_NAME", array());
                echo "\"><label class=\"checkbox-inline\" for=\"";
                echo $this->getAttribute($context["nonmember"], "GROUP_NAME", array());
                echo "\"></label></div></td>
\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nonmember'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "\t\t</tbody>
\t</table>
\t</div>
</div>
";
        }
        // line 142
        echo "\t
";
        // line 143
        if (((isset($context["S_CHANGE_DEFAULT"]) ? $context["S_CHANGE_DEFAULT"] : null) || ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SHOW_BUTTONS", array()) == 1))) {
            // line 144
            echo "\t<fieldset>
\t\t";
            // line 145
            if ((isset($context["S_CHANGE_DEFAULT"]) ? $context["S_CHANGE_DEFAULT"] : null)) {
                // line 146
                echo "\t\t<div class=\"pull-left\">
\t\t\t <button class=\"btn btn-default\" type=\"submit\" name=\"change_default\" value=\"";
                // line 147
                echo $this->env->getExtension('phpbb')->lang("CHANGE_DEFAULT_GROUP");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("CHANGE_DEFAULT_GROUP");
                echo "</button>
\t\t\t";
                // line 148
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t</div>
\t\t";
            }
            // line 151
            echo "
\t\t";
            // line 152
            if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SHOW_BUTTONS", array()) == 1)) {
                // line 153
                echo "\t\t<div class=\"pull-right\">
\t          <div class=\"input-group\">
\t\t       <select class=\"selectpicker\" data-width=\"auto\" data-container=\"body\" name=\"action\" id=\"action\">
\t\t\t\t<option value=\"join\">";
                // line 156
                echo $this->env->getExtension('phpbb')->lang("JOIN_SELECTED");
                echo "</option>
\t\t\t\t<option value=\"resign\">";
                // line 157
                echo $this->env->getExtension('phpbb')->lang("RESIGN_SELECTED");
                echo "</option>
\t\t\t\t<option value=\"demote\">";
                // line 158
                echo $this->env->getExtension('phpbb')->lang("DEMOTE_SELECTED");
                echo "</option>
\t\t\t  </select>
\t\t\t<span class=\"input-group-btn\">  
\t\t        <button class=\"btn btn-default\" type=\"submit\" name=\"submit\" value=\"";
                // line 161
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "</button>
\t        </span>
\t\t\t</div>
\t\t\t";
                // line 164
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t</div>
\t\t";
            }
            // line 167
            echo "\t</fieldset>
";
        }
        // line 169
        echo "</form>
</div>
";
        // line 171
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_groups_membership.html", 171)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_groups_membership.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  536 => 171,  532 => 169,  528 => 167,  522 => 164,  514 => 161,  508 => 158,  504 => 157,  500 => 156,  495 => 153,  493 => 152,  490 => 151,  484 => 148,  478 => 147,  475 => 146,  473 => 145,  470 => 144,  468 => 143,  465 => 142,  458 => 137,  441 => 134,  438 => 133,  431 => 132,  426 => 131,  414 => 130,  407 => 127,  403 => 126,  400 => 125,  396 => 124,  389 => 120,  385 => 119,  376 => 113,  372 => 111,  370 => 110,  363 => 105,  346 => 102,  343 => 101,  336 => 100,  331 => 99,  319 => 98,  312 => 95,  308 => 94,  305 => 93,  301 => 92,  294 => 88,  290 => 87,  281 => 81,  277 => 79,  275 => 78,  271 => 76,  264 => 71,  247 => 68,  244 => 67,  239 => 66,  233 => 65,  207 => 64,  200 => 61,  196 => 60,  193 => 59,  189 => 58,  182 => 54,  178 => 53,  169 => 47,  165 => 45,  163 => 44,  160 => 43,  153 => 38,  138 => 35,  135 => 34,  128 => 33,  123 => 32,  97 => 31,  93 => 29,  90 => 28,  86 => 27,  83 => 26,  79 => 25,  72 => 21,  68 => 20,  59 => 14,  55 => 12,  52 => 11,  49 => 10,  43 => 7,  34 => 3,  31 => 2,  19 => 1,);
    }
}
