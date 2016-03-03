<?php

/* memberlist_email.html */
class __TwigTemplate_04c4ca4018bddc2c067dc573c776a0ea52a8b7321f263c150f648d578c26e523 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "memberlist_email.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<form method=\"post\" action=\"";
        echo (isset($context["S_POST_ACTION"]) ? $context["S_POST_ACTION"] : null);
        echo "\" id=\"post\">
<div class=\"clearfix\">
";
        // line 4
        if ((isset($context["S_CONTACT_ADMIN"]) ? $context["S_CONTACT_ADMIN"] : null)) {
            // line 5
            echo "<div class=\"side-segment\"><h3>";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_ADMIN");
            echo "</h3></div>\t
";
        } elseif (        // line 6
(isset($context["S_SEND_USER"]) ? $context["S_SEND_USER"] : null)) {
            // line 7
            echo "<div class=\"side-segment\"><h3>";
            echo $this->env->getExtension('phpbb')->lang("SEND_EMAIL_USER");
            echo "&nbsp;";
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
            echo "</h3></div>\t
";
        } else {
            // line 9
            echo "<div class=\"side-segment\"><h3>";
            echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
            echo "</h3></div>\t
";
        }
        // line 11
        if ((isset($context["CONTACT_INFO"]) ? $context["CONTACT_INFO"] : null)) {
            // line 12
            echo "\t<div class=\"panel\">
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"postbody\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t";
            // line 16
            echo (isset($context["CONTACT_INFO"]) ? $context["CONTACT_INFO"] : null);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 22
        echo "<div class=\"well\">
\t";
        // line 23
        if ((isset($context["ERROR_MESSAGE"]) ? $context["ERROR_MESSAGE"] : null)) {
            // line 24
            echo "\t<div class=\"alert alert-info fade in\">
    <i class=\"fa fa-warning\"></i><strong>&nbsp;";
            // line 25
            echo $this->env->getExtension('phpbb')->lang("INFO_BOX");
            echo "</strong>&nbsp;";
            echo (isset($context["ERROR_MESSAGE"]) ? $context["ERROR_MESSAGE"] : null);
            echo "
    </div> 
\t";
        }
        // line 28
        echo "\t<fieldset>
\t";
        // line 29
        if ((isset($context["S_SEND_USER"]) ? $context["S_SEND_USER"] : null)) {
            // line 30
            echo "        <div class=\"control-group\">
\t\t  <label for=\"username\" class=\"control-label\">";
            // line 31
            echo $this->env->getExtension('phpbb')->lang("RECIPIENT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t<div class=\"controls\">
\t\t\t<div class=\"input-icon left\">
\t\t\t <i class=\"fa fa-user\"></i>
\t\t\t  <input type=\"text\" class=\"form-control input-sm\" name=\"username\" id=\"username\" placeholder=\"";
            // line 35
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
            echo "\" disabled=\"\">
\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
\t\t
\t\t<div class=\"control-group\">
\t\t  <label for=\"subject\" class=\"control-label\">";
            // line 41
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t<div class=\"controls\">
\t\t\t<div class=\"input-icon left\">
\t\t\t <i class=\"fa fa-tag\"></i>
\t\t\t  <input type=\"text\" class=\"form-control input-sm\" name=\"subject\" id=\"subject\" value=\"";
            // line 45
            echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
            echo "\">
\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
    ";
        } elseif (        // line 49
(isset($context["S_CONTACT_ADMIN"]) ? $context["S_CONTACT_ADMIN"] : null)) {
            // line 50
            echo "\t    <div class=\"control-group\">
\t\t  <label for=\"recipient\" class=\"control-label\">";
            // line 51
            echo $this->env->getExtension('phpbb')->lang("RECIPIENT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t<div class=\"controls\">
\t\t\t<div class=\"input-icon left\">
\t\t\t <i class=\"fa fa-tag\"></i>
\t\t\t   <input type=\"text\" class=\"form-control input-sm\" name=\"username\" id=\"username\" placeholder=\"";
            // line 55
            echo $this->env->getExtension('phpbb')->lang("ADMINISTRATOR");
            echo "\" disabled=\"\">
\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
\t\t";
            // line 59
            if ( !(isset($context["S_IS_REGISTERED"]) ? $context["S_IS_REGISTERED"] : null)) {
                // line 60
                echo "\t\t<div class=\"control-group\">
\t\t  <label for=\"email\" class=\"control-label\">";
                // line 61
                echo $this->env->getExtension('phpbb')->lang("SENDER_EMAIL_ADDRESS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>
\t\t\t<div class=\"controls\">
\t\t\t<div class=\"input-icon left\">
\t\t\t <i class=\"icon-moon-email\"></i>
\t\t\t  <input type=\"text\" class=\"form-control input-sm\" name=\"email\" id=\"email\" value=\"";
                // line 65
                echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
                echo "\">
\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
        <div class=\"control-group\">
\t\t  <label for=\"name\" class=\"control-label\">";
                // line 70
                echo $this->env->getExtension('phpbb')->lang("SENDER_NAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>
\t\t\t<div class=\"controls\">
\t\t\t<div class=\"input-icon left\">
\t\t\t <i class=\"fa fa-user\"></i>
\t\t\t  <input type=\"text\" class=\"form-control input-sm\" name=\"name\" id=\"name\" value=\"";
                // line 74
                echo (isset($context["NAME"]) ? $context["NAME"] : null);
                echo "\">
\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
\t\t";
            }
            // line 78
            echo "\t
        <div class=\"control-group\">
\t\t  <label for=\"subject\" class=\"control-label\">";
            // line 80
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t<div class=\"controls\">
\t\t\t<div class=\"input-icon left\">
\t\t\t <i class=\"fa fa-tag\"></i>
\t\t\t  <input type=\"text\" class=\"form-control input-sm\" name=\"subject\" id=\"subject\" value=\"";
            // line 84
            echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
            echo "\">
\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t\t\t
\t";
        } else {
            // line 89
            echo "\t\t
        <div class=\"control-group\">
\t\t  <label for=\"email\" class=\"control-label\">";
            // line 91
            echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t<div class=\"controls\">
\t\t\t<div class=\"input-icon left\">
\t\t\t <i class=\"icon-moon-email\"></i>
\t\t\t  <input type=\"text\" class=\"form-control input-sm\" name=\"email\" id=\"email\" value=\"";
            // line 95
            echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
            echo "\">
\t\t\t</div>
\t\t\t</div>
\t\t</div>\t

        <div class=\"control-group\">
\t\t  <label for=\"name\" class=\"control-label\">";
            // line 101
            echo $this->env->getExtension('phpbb')->lang("REAL_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t<div class=\"controls\">
\t\t\t<div class=\"input-icon left\">
\t\t\t <i class=\"fa fa-ok\"></i>
\t\t\t  <input type=\"text\" class=\"form-control input-sm\" name=\"name\" id=\"name\" value=\"";
            // line 105
            echo (isset($context["NAME"]) ? $context["NAME"] : null);
            echo "\">
\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
\t\t
        <div class=\"control-group\">
\t\t  <label for=\"lang\" class=\"control-label\">";
            // line 111
            echo $this->env->getExtension('phpbb')->lang("DEST_LANG");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><span class=\"help-block\">";
            echo $this->env->getExtension('phpbb')->lang("DEST_LANG_EXPLAIN");
            echo "</span>
\t\t\t<div class=\"controls\">
\t\t\t <select class=\"selectpicker\" name=\"lang\">";
            // line 113
            echo (isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null);
            echo "</select>
\t\t\t</div>
\t\t</div>\t
\t";
        }
        // line 117
        echo "\t
\t\t<div class=\"space10\"></div>
\t\t  <label for=\"message\" class=\"control-label\">";
        // line 119
        echo $this->env->getExtension('phpbb')->lang("MESSAGE_BODY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t<div class=\"controls\">
\t\t\t  <textarea class=\"form-control\" name=\"message\" id=\"message\" rows=\"5\" tabindex=\"4\" placeholder=\"";
        // line 121
        echo $this->env->getExtension('phpbb')->lang("MESSAGE_BODY");
        echo "\">";
        echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
        echo "</textarea>
\t\t\t  <p class=\"help-block\">";
        // line 122
        echo $this->env->getExtension('phpbb')->lang("EMAIL_BODY_EXPLAIN");
        echo "</p>
\t\t\t<input type=\"checkbox\" name=\"cc_sender\" id=\"cc_sender\" value=\"1\" checked=\"checked\" tabindex=\"5\" /><label class=\"checkbox-inline\" for=\"cc_sender\">";
        // line 123
        echo $this->env->getExtension('phpbb')->lang("CC_SENDER");
        echo "</label>
\t\t\t</div>
        <div class=\"space10\"></div>
\t</fieldset>

\t<fieldset class=\"form-actions\">
\t\t<button type=\"submit\" tabindex=\"6\" name=\"submit\" class=\"btn btn-default\" value=\"";
        // line 129
        echo $this->env->getExtension('phpbb')->lang("SEND_EMAIL");
        echo "\" autocomplete=\"off\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb')->lang("SENDING");
        echo "<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\">&nbsp;";
        echo $this->env->getExtension('phpbb')->lang("SEND_EMAIL");
        echo "</button>
\t</fieldset>
";
        // line 131
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</div>
</div>
</form>

";
        // line 136
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_email.html", 136)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_email.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 136,  301 => 131,  292 => 129,  283 => 123,  279 => 122,  273 => 121,  267 => 119,  263 => 117,  256 => 113,  248 => 111,  239 => 105,  231 => 101,  222 => 95,  214 => 91,  210 => 89,  202 => 84,  194 => 80,  190 => 78,  182 => 74,  174 => 70,  166 => 65,  158 => 61,  155 => 60,  153 => 59,  146 => 55,  138 => 51,  135 => 50,  133 => 49,  126 => 45,  118 => 41,  109 => 35,  101 => 31,  98 => 30,  96 => 29,  93 => 28,  85 => 25,  82 => 24,  80 => 23,  77 => 22,  68 => 16,  62 => 12,  60 => 11,  54 => 9,  46 => 7,  44 => 6,  39 => 5,  37 => 4,  31 => 2,  19 => 1,);
    }
}
