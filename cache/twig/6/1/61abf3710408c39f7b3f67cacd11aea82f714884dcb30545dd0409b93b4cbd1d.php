<?php

/* ucp_zebra_friends.html */
class __TwigTemplate_61abf3710408c39f7b3f67cacd11aea82f714884dcb30545dd0409b93b4cbd1d extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_zebra_friends.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<form id=\"ucp\" method=\"post\" action=\"";
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">
<fieldset class=\"framed-ucp\">
    <legend>";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</legend>
\t <p>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("FRIENDS_EXPLAIN");
        echo "</p>
\t";
        // line 6
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            // line 7
            echo "\t<div class=\"alert alert-info fade in\">
       <i class=\"fa fa-warning\"></i><strong>&nbsp;";
            // line 8
            echo $this->env->getExtension('phpbb')->lang("INFO_BOX");
            echo "</strong>&nbsp;";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "
    </div>
\t";
        }
        // line 11
        echo "\t
    ";
        // line 12
        // line 13
        echo "\t
\t<div class=\"control-group\"> 
\t   <label class=\"control-label\"";
        // line 15
        if ((isset($context["S_USERNAME_OPTIONS"]) ? $context["S_USERNAME_OPTIONS"] : null)) {
            echo " for=\"usernames\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb')->lang("YOUR_FRIENDS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb')->lang("YOUR_FRIENDS_EXPLAIN");
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
\t\t";
        } else {
            // line 21
            echo "\t\t\t<span class=\"label label-default\">";
            echo $this->env->getExtension('phpbb')->lang("NO_FRIENDS");
            echo "</span>
\t\t";
        }
        // line 23
        echo "\t   </div>
\t</div> 
\t</div>
\t
\t";
        // line 27
        // line 28
        echo "\t
\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"add\">";
        // line 30
        echo $this->env->getExtension('phpbb')->lang("ADD_FRIENDS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb')->lang("ADD_FRIENDS_EXPLAIN");
        echo "</span>
\t<div class=\"controls controls-row\"> 
    \t<textarea class=\"form-control\" name=\"add\" id=\"add\" rows=\"2\" placeholder=\"Jhon Doe\">";
        // line 32
        echo (isset($context["USERNAMES"]) ? $context["USERNAMES"] : null);
        echo "</textarea>
\t<a href=\"";
        // line 33
        echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
        echo "\" onclick=\"find_username(this.href); return false;\">";
        echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
        echo "</a>
\t</div> 
\t<div class=\"space10\"></div>
\t</div>
\t<div class=\"space10\"></div>
\t";
        // line 38
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t<button type=\"reset\" value=\"";
        // line 39
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-default\" >";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "</button>
\t<button type=\"submit\" name=\"submit\" value=\"";
        // line 40
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"btn btn-default\" >";
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "</button>
\t";
        // line 41
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>
";
        // line 44
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_zebra_friends.html", 44)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_zebra_friends.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 44,  144 => 41,  138 => 40,  132 => 39,  128 => 38,  118 => 33,  114 => 32,  106 => 30,  102 => 28,  101 => 27,  95 => 23,  89 => 21,  83 => 19,  81 => 18,  68 => 15,  64 => 13,  63 => 12,  60 => 11,  52 => 8,  49 => 7,  47 => 6,  43 => 5,  39 => 4,  31 => 2,  19 => 1,);
    }
}
