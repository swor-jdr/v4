<?php

/* ucp_resend.html */
class __TwigTemplate_526fd71edd71df361339cb91d7854aa5eee8262ec9f70405cccc0bdefcd605d5 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "ucp_resend.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<form class=\"form-horizontal\" role=\"form\" action=\"";
        echo (isset($context["S_PROFILE_ACTION"]) ? $context["S_PROFILE_ACTION"] : null);
        echo "\" method=\"post\" id=\"resend\">
   <div class=\"side-segment\"><h3>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("UCP_RESEND");
        echo "</h3></div>
<div class=\"well\">
\t<fieldset>\t
\t<div class=\"col-md-6\">
    <div class=\"form-group\">
\t\t<label for=\"username\">";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
          <div class=\"input-icon left\">
\t        <i class=\"fa fa-user\"></i>
\t\t    <input class=\"form-control input-sm\" type=\"text\" name=\"username\" id=\"username\" value=\"";
        // line 11
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "\" placeholder=\"";
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "\"/>
\t\t  </div>
\t</div>
    <div class=\"form-group\">
\t\t<label for=\"email\">";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
          <div class=\"input-icon left\">
\t        <i class=\"icon-moon-at\"></i>
\t\t    <input class=\"form-control input-sm\" type=\"text\" name=\"email\" id=\"email\" size=\"25\" maxlength=\"100\" placeholder=\"Ex:Jhon@mail.com\"/>
\t\t  </div>
\t</div> 
\t<div class=\"form-group\">
\t";
        // line 22
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t\t<button type=\"submit\" name=\"submit\" id=\"submit\" class=\"btn btn-default\" value=\"";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" tabindex=\"2\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb')->lang("SENDING");
        echo "<i class='fa-spin fa fa-spinner fa-lg'></i>\">";
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "</button>
\t\t<button type=\"reset\" value=\"";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-default\">";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "</button>
\t";
        // line 25
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</div> 
   </div>
\t</fieldset>
</div>
</form>
";
        // line 31
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_resend.html", 31)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_resend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 31,  89 => 25,  83 => 24,  75 => 23,  71 => 22,  60 => 15,  51 => 11,  44 => 8,  36 => 3,  31 => 2,  19 => 1,);
    }
}
