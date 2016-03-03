<?php

/* ucp_profile_autologin_keys.html */
class __TwigTemplate_158596d113cd30ce793d1182883277fb2e6a53f301b06575b0bde4354f72a546 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_profile_autologin_keys.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<form id=\"ucp\" method=\"post\" action=\"";
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">
<div class=\"tab-pane active\">
\t<fieldset class=\"framed-ucp\">
\t <legend>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</legend>
\t\t<p>";
        // line 6
        echo $this->env->getExtension('phpbb')->lang("PROFILE_AUTOLOGIN_KEYS");
        echo "</p>
\t
\t";
        // line 8
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            // line 9
            echo "\t\t<div class=\"alert alert-info fade in\">
         <i class=\"fa fa-warning\"></i> <strong>";
            // line 10
            echo $this->env->getExtension('phpbb')->lang("INFO_BOX");
            echo "</strong> ";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "
        </div>
\t";
        }
        // line 13
        echo "
\t<div class=\"panel panel-forum\">
\t     <div class=\"panel-heading\">
\t\t  ";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("LOGIN_KEY");
        echo "
\t\t </div>
\t\t<div class=\"panel-inner\">
\t\t<table class=\"footable table table-striped table-primary table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th data-class=\"expand\">";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("IP");
        echo "</th>
\t\t\t\t\t<th data-hide=\"phone\">";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("LOGIN_KEY");
        echo "</th>
\t\t\t\t\t<th data-hide=\"phone\">";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("LOGIN_TIME");
        echo "</th>
\t\t\t\t\t<th data-hide=\"phone\" class=\"mark\">";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("MARK");
        echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "sessions", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sessions"]) {
            // line 30
            echo "\t\t\t\t<tr>
\t\t\t\t    <td>";
            // line 31
            echo $this->getAttribute($context["sessions"], "IP", array());
            echo "</td>
\t\t\t\t\t<td><label for=\"";
            // line 32
            echo $this->getAttribute($context["sessions"], "KEY", array());
            echo "\">";
            echo $this->getAttribute($context["sessions"], "KEY", array());
            echo "</label></td>
\t\t\t\t\t<td>";
            // line 33
            echo $this->getAttribute($context["sessions"], "LOGIN_TIME", array());
            echo "</td>
\t\t\t\t\t<td class=\"mark\"><input type=\"checkbox\" name=\"keys[]\" value=\"";
            // line 34
            echo $this->getAttribute($context["sessions"], "KEY", array());
            echo "\" id=\"";
            echo $this->getAttribute($context["sessions"], "KEY", array());
            echo "\" /></td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "\t\t\t\t<tr><td colspan=\"4\">";
            echo $this->env->getExtension('phpbb')->lang("PROFILE_NO_AUTOLOGIN_KEYS");
            echo "</td></tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sessions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t\t</tbody>
\t\t</table>
\t\t</div>
    </div>

";
        // line 44
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "sessions", array()))) {
            // line 45
            echo "\t ";
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t <div class=\"btn-group\">
\t  <a title=\"";
            // line 47
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "\" class=\"btn btn-default\" onclick=\"\$('#ucp input:checkbox').iCheck('check')\" href=\"javascript:void(0);\"><i class=\"fa fa-check-square-o\"></i></a>
\t  <a title=\"";
            // line 48
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "\" class=\"btn btn-default\" onclick=\"\$('#ucp input:checkbox').iCheck('uncheck')\" href=\"javascript:void(0);\"><i class=\"fa fa-square-o\"></i></a>
\t  <button title=\"";
            // line 49
            echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
            echo "\" type=\"submit\" name=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
            echo "\" class=\"btn btn-default\"><i class=\"fa fa-trash-o\"></i></button>
\t </div>
\t\t";
            // line 51
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
";
        }
        // line 53
        echo "</fieldset>
</div>
</form>

";
        // line 57
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_profile_autologin_keys.html", 57)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_profile_autologin_keys.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 57,  171 => 53,  166 => 51,  159 => 49,  155 => 48,  151 => 47,  145 => 45,  143 => 44,  136 => 39,  127 => 37,  117 => 34,  113 => 33,  107 => 32,  103 => 31,  100 => 30,  95 => 29,  88 => 25,  84 => 24,  80 => 23,  76 => 22,  67 => 16,  62 => 13,  54 => 10,  51 => 9,  49 => 8,  44 => 6,  40 => 5,  31 => 2,  19 => 1,);
    }
}
