<?php

/* confirm_body.html */
class __TwigTemplate_9b1adb30b501a5932c2893619d3587c84a4fde734c78a1303efe2d363ce44599 extends Twig_Template
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
            echo "<form action=\"";
            echo (isset($context["S_CONFIRM_ACTION"]) ? $context["S_CONFIRM_ACTION"] : null);
            echo "\" method=\"post\">
\t<h3 class=\"alert_title\">";
            // line 3
            echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
            echo "</h3>
\t<p>";
            // line 4
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</p>
\t<fieldset>
\t\t<input type=\"button\" name=\"confirm\" value=\"";
            // line 6
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "\" class=\"btn btn-default\" />
\t\t<input type=\"button\" name=\"cancel\" value=\"";
            // line 7
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" class=\"btn btn-default\" />
\t</fieldset>
</form>
";
        } else {
            // line 11
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "confirm_body.html", 11)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 12
            echo "<form id=\"confirm\" action=\"";
            echo (isset($context["S_CONFIRM_ACTION"]) ? $context["S_CONFIRM_ACTION"] : null);
            echo "\" method=\"post\">
\t<div class=\"side-segment\"><h3>";
            // line 13
            echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
            echo "</h3></div>
<div class=\"well\">
\t<p>";
            // line 15
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</p>
\t<fieldset>
\t\t";
            // line 17
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t<button type=\"submit\" name=\"confirm\" value=\"";
            // line 18
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</button>
\t\t<button type=\"submit\" name=\"cancel\" value=\"";
            // line 19
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</button>
\t</fieldset>
</div>
</form>
";
            // line 23
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "confirm_body.html", 23)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "confirm_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  83 => 19,  77 => 18,  73 => 17,  68 => 15,  63 => 13,  58 => 12,  46 => 11,  39 => 7,  35 => 6,  30 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
