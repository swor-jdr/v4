<?php

/* ucp_zebra_foes.html */
class __TwigTemplate_4e92a5053088db5393d07ad70022ed84613906abface2a051a72b2209d3c5384 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_zebra_foes.html", 1)->display($context);
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
<fieldset class=\"framed-ucp\">
    <legend>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</legend>
\t <p>";
        // line 6
        echo $this->env->getExtension('phpbb')->lang("FOES_EXPLAIN");
        echo "</p>

\t";
        // line 8
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            // line 9
            echo "\t<div class=\"alert alert-info fade in\">
       <i class=\"fa fa-warning\"></i><strong>";
            // line 10
            echo $this->env->getExtension('phpbb')->lang("INFO_BOX");
            echo "</strong>&nbsp;";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "
    </div>
\t";
        }
        // line 13
        echo "\t
\t<div class=\"control-group\"> 
\t   <label class=\"control-label\"";
        // line 15
        if ((isset($context["S_USERNAME_OPTIONS"]) ? $context["S_USERNAME_OPTIONS"] : null)) {
            echo " for=\"usernames\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb')->lang("YOUR_FOES");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb')->lang("YOUR_FOES_EXPLAIN");
        echo "</span>
\t<div class=\"controls controls-row\"> 
       <div class=\"selector\">
\t   ";
        // line 18
        if ((isset($context["S_USERNAME_OPTIONS"]) ? $context["S_USERNAME_OPTIONS"] : null)) {
            // line 19
            echo "\t\t\t<select class=\"selectpicker\" data-selected-text-format=\"count\" data-container=\"body\" name=\"usernames[]\" id=\"usernames\" multiple=\"multiple\" size=\"5\">";
            echo (isset($context["S_USERNAME_OPTIONS"]) ? $context["S_USERNAME_OPTIONS"] : null);
            echo "</select>
\t\t\t";
        } else {
            // line 21
            echo "\t\t\t\t<span class=\"label label-default\">";
            echo $this->env->getExtension('phpbb')->lang("NO_FOES");
            echo "</span>
\t\t\t";
        }
        // line 23
        echo "\t   </div>
\t</div> 
\t</div>
\t
\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"add\">";
        // line 28
        echo $this->env->getExtension('phpbb')->lang("ADD_FOES");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb')->lang("ADD_FOES_EXPLAIN");
        echo "</span>
\t<div class=\"controls controls-row\"> 
    \t<textarea class=\"form-control\" name=\"add\" id=\"add\" rows=\"2\" placeholder=\"\">";
        // line 30
        echo (isset($context["USERNAMES"]) ? $context["USERNAMES"] : null);
        echo "</textarea>
\t<a href=\"";
        // line 31
        echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
        echo "\" onclick=\"find_username(this.href); return false;\">";
        echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
        echo "</a>
\t</div> 
\t<div class=\"space10\"></div>
\t</div>
\t<div class=\"space10\"></div>
\t";
        // line 36
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t<button type=\"reset\" value=\"";
        // line 37
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-default\">";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "</button>
\t<button type=\"submit\" name=\"submit\" value=\"";
        // line 38
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"btn btn-default\">";
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "</button>
\t";
        // line 39
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</fieldset>
</form>
</div>
";
        // line 43
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_zebra_foes.html", 43)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_zebra_foes.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 43,  139 => 39,  133 => 38,  127 => 37,  123 => 36,  113 => 31,  109 => 30,  101 => 28,  94 => 23,  88 => 21,  82 => 19,  80 => 18,  67 => 15,  63 => 13,  55 => 10,  52 => 9,  50 => 8,  45 => 6,  41 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
