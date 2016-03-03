<?php

/* mcp_move.html */
class __TwigTemplate_b888046a76f028946de4dacf1085b808cebc9a5159a2bbf9219b91be2f36d089 extends Twig_Template
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
        if ((isset($context["S_AJAX_REQUEST"]) ? $context["S_AJAX_REQUEST"] : null)) {
            // line 2
            echo "   <div class=\"side-segment\"><h3>";
            echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
            echo "</h3></div>
\t<div class=\"well\">
\t\t";
            // line 4
            if ((isset($context["ADDITIONAL_MSG"]) ? $context["ADDITIONAL_MSG"] : null)) {
                echo "<p>";
                echo (isset($context["ADDITIONAL_MSG"]) ? $context["ADDITIONAL_MSG"] : null);
                echo "</p>";
            }
            // line 5
            echo "\t\t<div class=\"control-group\">
\t\t\t<label class=\"control-label\">";
            // line 6
            echo $this->env->getExtension('phpbb')->lang("SELECT_DESTINATION_FORUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t <div class=\"controls controls-row\">
\t\t\t<select class=\"selectpicker\" data-container=\"body\" name=\"to_forum_id\">";
            // line 8
            echo (isset($context["S_FORUM_SELECT"]) ? $context["S_FORUM_SELECT"] : null);
            echo "</select>
\t\t\t<div class=\"space10\"></div>
\t\t\t";
            // line 10
            if ((isset($context["S_CAN_LEAVE_SHADOW"]) ? $context["S_CAN_LEAVE_SHADOW"] : null)) {
                // line 11
                echo "\t\t\t   <div><input type=\"checkbox\" name=\"move_leave_shadow\" id=\"move_leave_shadow\" checked=\"checked\"><label class=\"icheck-control\" for=\"move_leave_shadow\">";
                echo $this->env->getExtension('phpbb')->lang("LEAVE_SHADOW");
                echo "</label></div>
\t\t\t";
            }
            // line 13
            echo "\t\t\t";
            if ((isset($context["S_CAN_LOCK_TOPIC"]) ? $context["S_CAN_LOCK_TOPIC"] : null)) {
                // line 14
                echo "\t\t\t  <div><input type=\"checkbox\" name=\"move_lock_topics\" id=\"move_lock_topics\"><label class=\"icheck-control\" for=\"move_lock_topics\">";
                echo $this->env->getExtension('phpbb')->lang("LOCK_TOPIC");
                echo "</label></div>
\t\t\t";
            }
            // line 16
            echo "\t     </div>
\t\t</div>
\t\t<span class=\"help-block\">";
            // line 18
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</span>
\t\t
\t<div class=\"space10\"></div>
    <fieldset>
\t<button class=\"btn btn-default\" name=\"confirm\" type=\"submit\" value=\"";
            // line 22
            echo (isset($context["YES_VALUE"]) ? $context["YES_VALUE"] : null);
            echo "\">";
            echo (isset($context["YES_VALUE"]) ? $context["YES_VALUE"] : null);
            echo "</button>
\t<button class=\"btn btn-default\" name=\"cancel\" type=\"submit\">";
            // line 23
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</button>
    </fieldset>
\t</div>
";
        } else {
            // line 27
            echo "
";
            // line 28
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "mcp_move.html", 28)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 29
            echo "<form id=\"confirm\" action=\"";
            echo (isset($context["S_CONFIRM_ACTION"]) ? $context["S_CONFIRM_ACTION"] : null);
            echo "\" method=\"post\">
      <div class=\"side-segment\"><h3>";
            // line 30
            echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
            echo "</h3></div>
\t<div class=\"well\">
\t\t";
            // line 32
            if ((isset($context["ADDITIONAL_MSG"]) ? $context["ADDITIONAL_MSG"] : null)) {
                echo "<p>";
                echo (isset($context["ADDITIONAL_MSG"]) ? $context["ADDITIONAL_MSG"] : null);
                echo "</p>";
            }
            // line 33
            echo "\t<fieldset>
\t\t<div class=\"control-group\">
\t\t\t<label class=\"control-label\">";
            // line 35
            echo $this->env->getExtension('phpbb')->lang("SELECT_DESTINATION_FORUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t <div class=\"controls controls-row\">
\t\t\t<select class=\"selectpicker\" data-container=\"body\" name=\"to_forum_id\">";
            // line 37
            echo (isset($context["S_FORUM_SELECT"]) ? $context["S_FORUM_SELECT"] : null);
            echo "</select>
\t\t\t<div class=\"space10\"></div>
\t\t\t";
            // line 39
            if ((isset($context["S_CAN_LEAVE_SHADOW"]) ? $context["S_CAN_LEAVE_SHADOW"] : null)) {
                // line 40
                echo "\t\t\t   <div><input type=\"checkbox\" name=\"move_leave_shadow\" id=\"move_leave_shadow\" checked=\"checked\"><label class=\"icheck-control\" for=\"move_leave_shadow\">";
                echo $this->env->getExtension('phpbb')->lang("LEAVE_SHADOW");
                echo "</label></div>
\t\t\t";
            }
            // line 42
            echo "\t\t\t";
            if ((isset($context["S_CAN_LOCK_TOPIC"]) ? $context["S_CAN_LOCK_TOPIC"] : null)) {
                // line 43
                echo "\t\t\t  <div><input type=\"checkbox\" name=\"move_lock_topics\" id=\"move_lock_topics\"><label class=\"icheck-control\" for=\"move_lock_topics\">";
                echo $this->env->getExtension('phpbb')->lang("LOCK_TOPIC");
                echo "</label></div>
\t\t\t";
            }
            // line 45
            echo "\t     </div>
\t\t</div>
\t </fieldset>
\t\t<span class=\"help-block\">";
            // line 48
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</span>
\t\t
\t<div class=\"space10\"></div>
    <fieldset>
\t";
            // line 52
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t<button class=\"btn btn-default\" name=\"confirm\" type=\"submit\" value=\"";
            // line 53
            echo (isset($context["YES_VALUE"]) ? $context["YES_VALUE"] : null);
            echo "\">";
            echo (isset($context["YES_VALUE"]) ? $context["YES_VALUE"] : null);
            echo "</button>
\t<button class=\"btn btn-default\" name=\"cancel\" type=\"submit\">";
            // line 54
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</button>
\t";
            // line 55
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
    </fieldset>
\t</div>
</form>
";
            // line 59
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "mcp_move.html", 59)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "mcp_move.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 59,  177 => 55,  173 => 54,  167 => 53,  163 => 52,  156 => 48,  151 => 45,  145 => 43,  142 => 42,  136 => 40,  134 => 39,  129 => 37,  123 => 35,  119 => 33,  113 => 32,  108 => 30,  103 => 29,  91 => 28,  88 => 27,  81 => 23,  75 => 22,  68 => 18,  64 => 16,  58 => 14,  55 => 13,  49 => 11,  47 => 10,  42 => 8,  36 => 6,  33 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
