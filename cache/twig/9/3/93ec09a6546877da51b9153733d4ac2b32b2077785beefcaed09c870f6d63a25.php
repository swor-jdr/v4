<?php

/* report_body.html */
class __TwigTemplate_93ec09a6546877da51b9153733d4ac2b32b2077785beefcaed09c870f6d63a25 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "report_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"clearfix\">
<div class=\"side-segment\"><h3>";
        // line 3
        if ((isset($context["S_REPORT_POST"]) ? $context["S_REPORT_POST"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("REPORT_POST");
        } else {
            echo $this->env->getExtension('phpbb')->lang("REPORT_MESSAGE");
        }
        echo "</h3></div>\t
<form method=\"post\" action=\"";
        // line 4
        echo (isset($context["S_REPORT_ACTION"]) ? $context["S_REPORT_ACTION"] : null);
        echo "\" id=\"report\">
<div class=\"well\">
\t\t<p>";
        // line 6
        if ((isset($context["S_REPORT_POST"]) ? $context["S_REPORT_POST"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("REPORT_POST_EXPLAIN");
        } else {
            echo $this->env->getExtension('phpbb')->lang("REPORT_MESSAGE_EXPLAIN");
        }
        echo "</p>
\t\t   ";
        // line 7
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p>";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 8
        echo "\t<fieldset>
\t\t    <div class=\"control-group\"> 
\t            <label class=\"control-label\" for=\"reason_id\">";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("REASON");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
         \t<div class=\"controls controls-row\"> 
               <div class=\"selector\"><select class=\"selectpicker\" data-container=\"body\" data-width=\"100%\" name=\"reason_id\" id=\"reason_id\" class=\"full\">";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "reason", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
            echo "<option value=\"";
            echo $this->getAttribute($context["reason"], "ID", array());
            echo "\"";
            if ($this->getAttribute($context["reason"], "S_SELECTED", array())) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->getAttribute($context["reason"], "DESCRIPTION", array());
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</select></div>
\t         </div> 
\t        </div>
\t\t\t
\t\t";
        // line 16
        if ((isset($context["S_CAN_NOTIFY"]) ? $context["S_CAN_NOTIFY"] : null)) {
            // line 17
            echo "            <div class=\"control-group\"> 
\t            <label class=\"control-label\" for=\"notify1\">";
            // line 18
            echo $this->env->getExtension('phpbb')->lang("REPORT_NOTIFY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><span class=\"help-block\">";
            echo $this->env->getExtension('phpbb')->lang("REPORT_NOTIFY_EXPLAIN");
            echo "</span>
         \t<div class=\"controls controls-row\"> 
              <div class=\"radio\"><input type=\"radio\" name=\"notify\" id=\"notify1\" value=\"1\" ";
            // line 20
            if ( !(isset($context["S_NOTIFY"]) ? $context["S_NOTIFY"] : null)) {
                echo "checked=\"checked\"";
            }
            echo "><label for=\"notify1\">";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label></div>
\t\t\t  <div class=\"radio\"><input type=\"radio\" name=\"notify\" id=\"notify0\" value=\"0\" ";
            // line 21
            if ((isset($context["S_NOTIFY"]) ? $context["S_NOTIFY"] : null)) {
                echo "checked=\"checked\"";
            }
            echo "><label for=\"notify0\">";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></div>
\t         </div> 
\t        </div>
\t\t";
        }
        // line 25
        echo "\t\t
            <div class=\"control-group\"> 
\t          <label class=\"control-label\" for=\"report_text\">";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("MORE_INFO");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t        <div class=\"controls controls-row\"> 
              <textarea placeholder=\"";
        // line 29
        echo $this->env->getExtension('phpbb')->lang("MORE_INFO");
        echo "...";
        echo $this->env->getExtension('phpbb')->lang("CAN_LEAVE_BLANK");
        echo "\" rows=\"2\" name=\"report_text\" id=\"report_text\" class=\"form-control\">";
        echo (isset($context["REPORT_TEXT"]) ? $context["REPORT_TEXT"] : null);
        echo "</textarea>
\t         </div> 
\t        </div>\t\t
\t\t
\t\t";
        // line 33
        if ((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) {
            // line 34
            echo "\t\t\t";
            $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "report_body.html", 34)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 35
            echo "\t\t";
        }
        // line 36
        echo "\t</fieldset>
</div>

<div class=\"form-actions\">
\t<fieldset>
\t\t<button type=\"submit\" name=\"cancel\" class=\"btn btn-default\" value=\"";
        // line 41
        echo $this->env->getExtension('phpbb')->lang("CANCEL");
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("CANCEL");
        echo "</button>
\t\t<button type=\"submit\" name=\"submit\" class=\"btn btn-default\" value=\"";
        // line 42
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "</button>
\t\t";
        // line 43
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</fieldset>
</div>
</form>
</div>
";
        // line 48
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "report_body.html", 48)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "report_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 48,  183 => 43,  177 => 42,  171 => 41,  164 => 36,  161 => 35,  148 => 34,  146 => 33,  135 => 29,  129 => 27,  125 => 25,  114 => 21,  106 => 20,  98 => 18,  95 => 17,  93 => 16,  71 => 12,  65 => 10,  61 => 8,  55 => 7,  47 => 6,  42 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
