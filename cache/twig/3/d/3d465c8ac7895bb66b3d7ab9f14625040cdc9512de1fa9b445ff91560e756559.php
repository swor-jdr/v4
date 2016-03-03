<?php

/* ucp_prefs_post.html */
class __TwigTemplate_3d465c8ac7895bb66b3d7ab9f14625040cdc9512de1fa9b445ff91560e756559 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_prefs_post.html", 1)->display($context);
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
\t<legend>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</legend>
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
        // line 12
        echo "<!-- profile-settings starts here-->     
    <div class=\"control-group\"> 
\t<label for=\"gender\" class=\"control-label\">";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("DEFAULT_BBCODE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div class=\"controls controls-row\"> 
        <div class=\"radio\"><input type=\"radio\" name=\"bbcode\" id=\"bbcode1\" value=\"1\"";
        // line 16
        if ((isset($context["S_BBCODE"]) ? $context["S_BBCODE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /><label for=\"bbcode1\">";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label></div>   
        <div class=\"radio\"><input type=\"radio\" name=\"bbcode\" id=\"bbcode0\" value=\"0\"";
        // line 17
        if ( !(isset($context["S_BBCODE"]) ? $context["S_BBCODE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /><label for=\"bbcode0\">";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label></div>
\t</div> 
\t</div> 
\t
    <div class=\"control-group\"> 
\t<label for=\"gender\" class=\"control-label\">";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("DEFAULT_SMILIES");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div class=\"controls controls-row\"> 
        <div class=\"radio\"><input type=\"radio\" name=\"smilies\" id=\"smilies1\" value=\"1\"";
        // line 24
        if ((isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /><label for=\"smilies1\">";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label></div>   
        <div class=\"radio\"><input type=\"radio\" name=\"smilies\" id=\"smilies0\" value=\"0\"";
        // line 25
        if ( !(isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /><label for=\"smilies0\">";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label></div>
\t</div> 
\t</div> 
\t
    <div class=\"control-group\"> 
\t<label for=\"gender\" class=\"control-label\">";
        // line 30
        echo $this->env->getExtension('phpbb')->lang("DEFAULT_ADD_SIG");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div class=\"controls controls-row\"> 
        <div class=\"radio\"><input type=\"radio\" name=\"sig\" id=\"sig1\" value=\"1\"";
        // line 32
        if ((isset($context["S_SIG"]) ? $context["S_SIG"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /><label for=\"sig1\">";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label></div>   
        <div class=\"radio\"><input type=\"radio\" name=\"sig\" id=\"sig0\" value=\"0\"";
        // line 33
        if ( !(isset($context["S_SIG"]) ? $context["S_SIG"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /><label for=\"sig0\">";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label></div>
\t</div> 
\t</div> \t
\t
    <div class=\"control-group\"> 
\t<label for=\"gender\" class=\"control-label\">";
        // line 38
        echo $this->env->getExtension('phpbb')->lang("DEFAULT_NOTIFY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div class=\"controls controls-row\"> 
        <div class=\"radio\"><input type=\"radio\" name=\"notify\" id=\"notify1\" value=\"1\"";
        // line 40
        if ((isset($context["S_NOTIFY"]) ? $context["S_NOTIFY"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /><label for=\"notify1\">";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label></div>   
        <div class=\"radio\"><input type=\"radio\" name=\"notify\" id=\"notify0\" value=\"0\"";
        // line 41
        if ( !(isset($context["S_NOTIFY"]) ? $context["S_NOTIFY"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /><label for=\"notify0\">";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label></div>
\t</div> 
\t</div> \t
<!-- profile-settings ends here-->
";
        // line 45
        // line 46
        echo "\t</fieldset>
</div>

<div class=\"space10\"></div>
<div class=\"form-actions\"> 
\t";
        // line 51
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t<button type=\"reset\" value=\"";
        // line 52
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-default\">";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "</button>
\t<button type=\"submit\" name=\"submit\" value=\"";
        // line 53
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"btn btn-default\" autocomplete=\"off\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb')->lang("LOADING");
        echo "<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\">";
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "</button>
\t";
        // line 54
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</div>
\t
</form>

";
        // line 59
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_prefs_post.html", 59)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_prefs_post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 59,  191 => 54,  183 => 53,  177 => 52,  173 => 51,  166 => 46,  165 => 45,  154 => 41,  146 => 40,  140 => 38,  128 => 33,  120 => 32,  114 => 30,  102 => 25,  94 => 24,  88 => 22,  76 => 17,  68 => 16,  62 => 14,  58 => 12,  57 => 11,  49 => 8,  46 => 7,  44 => 6,  40 => 5,  31 => 2,  19 => 1,);
    }
}
