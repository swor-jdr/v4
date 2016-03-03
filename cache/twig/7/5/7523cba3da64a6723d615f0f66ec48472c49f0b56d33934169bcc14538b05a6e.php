<?php

/* ucp_prefs_view.html */
class __TwigTemplate_7523cba3da64a6723d615f0f66ec48472c49f0b56d33934169bcc14538b05a6e extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_prefs_view.html", 1)->display($context);
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
        echo "
<!-- profile-settings starts here-->   
";
        // line 13
        echo "  
    <div class=\"control-group\"> 
\t<label for=\"gender\" class=\"control-label\">";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("VIEW_IMAGES");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div class=\"controls controls-row\"> 
        <div class=\"radio\"><input type=\"radio\" name=\"images\" id=\"images1\" value=\"1\"";
        // line 17
        if ((isset($context["S_IMAGES"]) ? $context["S_IMAGES"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /><label for=\"images1\">";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label></div>   
        <div class=\"radio\"><input type=\"radio\" name=\"images\" id=\"images0\" value=\"0\"";
        // line 18
        if ( !(isset($context["S_IMAGES"]) ? $context["S_IMAGES"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /><label for=\"images0\">";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label></div>
\t</div> 
\t</div> 
\t  
    <div class=\"control-group\"> 
\t<label for=\"gender\" class=\"control-label\">";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("VIEW_FLASH");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div class=\"controls controls-row\"> 
        <div class=\"radio\"><input type=\"radio\" name=\"flash\" id=\"flash1\" value=\"1\"";
        // line 25
        if ((isset($context["S_FLASH"]) ? $context["S_FLASH"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /><label for=\"flash1\">";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label></div>   
        <div class=\"radio\"><input type=\"radio\" name=\"flash\" id=\"flash0\" value=\"0\"";
        // line 26
        if ( !(isset($context["S_FLASH"]) ? $context["S_FLASH"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /><label for=\"flash0\">";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label></div>
\t</div> 
\t</div>
\t  
    <div class=\"control-group\"> 
\t<label for=\"gender\" class=\"control-label\">";
        // line 31
        echo $this->env->getExtension('phpbb')->lang("VIEW_SMILIES");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div class=\"controls controls-row\"> 
        <div class=\"radio\"><input type=\"radio\" name=\"smilies\" id=\"smilies1\" value=\"1\"";
        // line 33
        if ((isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /><label for=\"smilies1\">";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label></div>   
        <div class=\"radio\"><input type=\"radio\" name=\"smilies\" id=\"smilies0\" value=\"0\"";
        // line 34
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
        // line 39
        echo $this->env->getExtension('phpbb')->lang("VIEW_SIGS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div class=\"controls controls-row\"> 
        <div class=\"radio\"><input type=\"radio\" name=\"sigs\" id=\"sigs1\" value=\"1\"";
        // line 41
        if ((isset($context["S_SIGS"]) ? $context["S_SIGS"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /><label for=\"sigs1\">";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label></div>   
        <div class=\"radio\"><input type=\"radio\" name=\"sigs\" id=\"sigs0\" value=\"0\"";
        // line 42
        if ( !(isset($context["S_SIGS"]) ? $context["S_SIGS"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /><label for=\"sigs0\">";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label></div>
\t</div> 
\t</div>

    <div class=\"control-group\"> 
\t<label for=\"gender\" class=\"control-label\">";
        // line 47
        echo $this->env->getExtension('phpbb')->lang("VIEW_AVATARS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div class=\"controls controls-row\"> 
        <div class=\"radio\"><input type=\"radio\" name=\"avatars\" id=\"avatars1\" value=\"1\"";
        // line 49
        if ((isset($context["S_AVATARS"]) ? $context["S_AVATARS"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /><label for=\"avatars1\">";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label></div>   
        <div class=\"radio\"><input type=\"radio\" name=\"avatars\" id=\"avatars0\" value=\"0\"";
        // line 50
        if ( !(isset($context["S_AVATARS"]) ? $context["S_AVATARS"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /><label for=\"avatars0\">";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label></div>
\t</div> 
\t</div>
\t  
\t";
        // line 54
        if ((isset($context["S_CHANGE_CENSORS"]) ? $context["S_CHANGE_CENSORS"] : null)) {
            // line 55
            echo "    <div class=\"control-group\"> 
\t<label for=\"gender\" class=\"control-label\">";
            // line 56
            echo $this->env->getExtension('phpbb')->lang("DISABLE_CENSORS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t<div class=\"controls controls-row\"> 
       <div class=\"radio\"><input type=\"radio\" name=\"wordcensor\" id=\"wordcensor1\" value=\"1\"";
            // line 58
            if ((isset($context["S_DISABLE_CENSORS"]) ? $context["S_DISABLE_CENSORS"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /><label for=\"wordcensor1\">";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label></div>   
       <div class=\"radio\"><input type=\"radio\" name=\"wordcensor\" id=\"wordcensor0\" value=\"0\"";
            // line 59
            if ( !(isset($context["S_DISABLE_CENSORS"]) ? $context["S_DISABLE_CENSORS"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /><label for=\"wordcensor0\">";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></div>
\t</div> 
\t</div>
    ";
        }
        // line 63
        echo "\t
<!-- profile-settings ends here-->
";
        // line 65
        // line 66
        echo "

";
        // line 68
        // line 69
        echo "    <div class=\"control-group\"> 
\t<label for=\"gender\" class=\"control-label\">";
        // line 70
        echo $this->env->getExtension('phpbb')->lang("VIEW_TOPICS_DAYS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div class=\"controls controls-row\"> 
\t   <div class=\"selector\">";
        // line 72
        echo (isset($context["S_TOPIC_SORT_DAYS"]) ? $context["S_TOPIC_SORT_DAYS"] : null);
        echo "</div>   
\t</div> 
\t</div>

    <div class=\"control-group\"> 
\t<label for=\"gender\" class=\"control-label\">";
        // line 77
        echo $this->env->getExtension('phpbb')->lang("VIEW_TOPICS_KEY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div class=\"controls controls-row\"> 
\t   <div class=\"selector\">";
        // line 79
        echo (isset($context["S_TOPIC_SORT_KEY"]) ? $context["S_TOPIC_SORT_KEY"] : null);
        echo "</div>   
\t</div> 
\t</div>
\t
    <div class=\"control-group\"> 
\t<label for=\"gender\" class=\"control-label\">";
        // line 84
        echo $this->env->getExtension('phpbb')->lang("VIEW_TOPICS_DIR");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div class=\"controls controls-row\"> 
\t   <div class=\"selector\">";
        // line 86
        echo (isset($context["S_TOPIC_SORT_DIR"]) ? $context["S_TOPIC_SORT_DIR"] : null);
        echo "</div>   
\t</div> 
\t</div>
\t  
    <div class=\"control-group\"> 
\t<label for=\"gender\" class=\"control-label\">";
        // line 91
        echo $this->env->getExtension('phpbb')->lang("VIEW_POSTS_DAYS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div class=\"controls controls-row\"> 
\t   <div class=\"selector\">";
        // line 93
        echo (isset($context["S_POST_SORT_DAYS"]) ? $context["S_POST_SORT_DAYS"] : null);
        echo "</div>   
\t</div> 
\t</div>
\t  
    <div class=\"control-group\"> 
\t<label for=\"gender\" class=\"control-label\">";
        // line 98
        echo $this->env->getExtension('phpbb')->lang("VIEW_POSTS_KEY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div class=\"controls controls-row\"> 
\t   <div class=\"selector\">";
        // line 100
        echo (isset($context["S_POST_SORT_KEY"]) ? $context["S_POST_SORT_KEY"] : null);
        echo "</div>   
\t</div> 
\t</div>
\t  
    <div class=\"control-group\"> 
\t<label for=\"gender\" class=\"control-label\">";
        // line 105
        echo $this->env->getExtension('phpbb')->lang("VIEW_POSTS_DIR");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div class=\"controls controls-row\"> 
\t   <div class=\"selector\">";
        // line 107
        echo (isset($context["S_POST_SORT_DIR"]) ? $context["S_POST_SORT_DIR"] : null);
        echo "</div>   
\t</div> 
\t</div> 
";
        // line 110
        echo "\t

</fieldset>
</div>

<div class=\"space10\"></div>
<div class=\"form-actions\"> 
\t";
        // line 117
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t<button type=\"reset\" value=\"";
        // line 118
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-default\">";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "</button> 
\t<button type=\"submit\" name=\"submit\" value=\"";
        // line 119
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"btn btn-default\" autocomplete=\"off\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb')->lang("LOADING");
        echo "<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\">";
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "</button>
\t";
        // line 120
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</div>

</form>

";
        // line 125
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_prefs_view.html", 125)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_prefs_view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 125,  346 => 120,  338 => 119,  332 => 118,  328 => 117,  319 => 110,  313 => 107,  307 => 105,  299 => 100,  293 => 98,  285 => 93,  279 => 91,  271 => 86,  265 => 84,  257 => 79,  251 => 77,  243 => 72,  237 => 70,  234 => 69,  233 => 68,  229 => 66,  228 => 65,  224 => 63,  213 => 59,  205 => 58,  199 => 56,  196 => 55,  194 => 54,  183 => 50,  175 => 49,  169 => 47,  157 => 42,  149 => 41,  143 => 39,  131 => 34,  123 => 33,  117 => 31,  105 => 26,  97 => 25,  91 => 23,  79 => 18,  71 => 17,  65 => 15,  61 => 13,  57 => 11,  49 => 8,  46 => 7,  44 => 6,  40 => 5,  31 => 2,  19 => 1,);
    }
}
