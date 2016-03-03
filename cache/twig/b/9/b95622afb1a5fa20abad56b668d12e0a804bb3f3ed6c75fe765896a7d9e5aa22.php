<?php

/* confirm_delete_body.html */
class __TwigTemplate_b95622afb1a5fa20abad56b668d12e0a804bb3f3ed6c75fe765896a7d9e5aa22 extends Twig_Template
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
 <h3 class=\"alert_title\">";
            // line 3
            echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
            echo "</h3>
\t<p>";
            // line 4
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</p>
\t";
            // line 5
            if ( !(isset($context["S_SHADOW_TOPICS"]) ? $context["S_SHADOW_TOPICS"] : null)) {
                // line 6
                echo "\t\t";
                if ((( !(isset($context["S_SOFTDELETED"]) ? $context["S_SOFTDELETED"] : null) && (isset($context["S_ALLOWED_DELETE"]) ? $context["S_ALLOWED_DELETE"] : null)) && (isset($context["S_ALLOWED_SOFTDELETE"]) ? $context["S_ALLOWED_SOFTDELETE"] : null))) {
                    // line 7
                    echo "\t\t\t  <input id=\"delete_permanent\" name=\"delete_permanent\" type=\"checkbox\" value=\"1\" ";
                    echo (isset($context["S_CHECKED_PERMANENT"]) ? $context["S_CHECKED_PERMANENT"] : null);
                    echo " />
\t\t\t   <label class=\"check-control\" for=\"delete_permanent\">&nbsp;&nbsp;";
                    // line 8
                    if ((isset($context["S_TOPIC_MODE"]) ? $context["S_TOPIC_MODE"] : null)) {
                        echo $this->env->getExtension('phpbb')->lang("DELETE_TOPIC_PERMANENTLY");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST_PERMANENTLY");
                    }
                    echo "</label>
\t\t";
                }
                // line 10
                echo "        <div class=\"control-group\">
\t\t  <label class=\"control-label\" for=\"delete_reason\">";
                // line 11
                echo $this->env->getExtension('phpbb')->lang("DELETE_REASON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><span class=\"help-block\">";
                echo $this->env->getExtension('phpbb')->lang("DELETE_REASON_EXPLAIN");
                echo "</span>
          <div class=\"controls controls-row\">\t\t  
\t\t   <input placeholder=\"";
                // line 13
                echo $this->env->getExtension('phpbb')->lang("SOFT_DELETE_PLACEHOLDER");
                echo "\" type=\"text\" name=\"delete_reason\" id=\"delete_reason\" value=\"\" class=\"form-control\" maxlength=\"120\" size=\"45\" />
\t\t  </div> 
\t\t </div> 
\t";
            }
            // line 17
            echo "\t <div class=\"space10\"></div>
\t<fieldset>
\t\t<input type=\"button\" name=\"confirm\" value=\"";
            // line 19
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "\" class=\"btn btn-default\" />
\t\t<input type=\"button\" name=\"cancel\" value=\"";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" class=\"btn btn-default\" />
\t</fieldset>
</form>
<script>
// We gotta do this on ajax calls because it will not inherit it from the overall_footer due to the ajax call
head.ready(function () {
  \$(\"input\").iCheck({checkboxClass:\"icheckbox_flat-aero\",radioClass:\"iradio_flat-aero\"});
});
</script>
";
        } else {
            // line 30
            echo "
";
            // line 31
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "confirm_delete_body.html", 31)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 32
            echo "<form id=\"confirm\" action=\"";
            echo (isset($context["S_CONFIRM_ACTION"]) ? $context["S_CONFIRM_ACTION"] : null);
            echo "\" method=\"post\">
\t<div class=\"side-segment\"><h3>";
            // line 33
            echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
            echo "</h3></div>
 <div class=\"alert alert-warning\">";
            // line 34
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</div>
\t<div class=\"well\">
\t";
            // line 36
            if ( !(isset($context["S_SHADOW_TOPICS"]) ? $context["S_SHADOW_TOPICS"] : null)) {
                // line 37
                echo "\t<fieldset>
\t\t";
                // line 38
                if ((( !(isset($context["S_SOFTDELETED"]) ? $context["S_SOFTDELETED"] : null) && (isset($context["S_ALLOWED_DELETE"]) ? $context["S_ALLOWED_DELETE"] : null)) && (isset($context["S_ALLOWED_SOFTDELETE"]) ? $context["S_ALLOWED_SOFTDELETE"] : null))) {
                    // line 39
                    echo "\t\t<div class=\"control-group\">
\t\t <label class=\"control-label\" for=\"delete_permanent\">";
                    // line 40
                    echo $this->env->getExtension('phpbb')->lang("DELETE_PERMANENTLY");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label>
\t\t <div class=\"controls controls-row\">
\t\t  <input id=\"delete_permanent\" name=\"delete_permanent\" type=\"checkbox\" value=\"1\" ";
                    // line 42
                    echo (isset($context["S_CHECKED_PERMANENT"]) ? $context["S_CHECKED_PERMANENT"] : null);
                    echo "><label class=\"checkbox-inline\" for=\"delete_permanent\">";
                    if ((isset($context["S_TOPIC_MODE"]) ? $context["S_TOPIC_MODE"] : null)) {
                        echo $this->env->getExtension('phpbb')->lang("DELETE_TOPIC_PERMANENTLY");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST_PERMANENTLY");
                    }
                    echo "</label>
\t     </div>
\t\t</div>
\t\t 
\t\t <div class=\"control-group\">
\t\t  <label class=\"control-label\" for=\"delete_reason\">";
                    // line 47
                    echo $this->env->getExtension('phpbb')->lang("DELETE_REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label><span class=\"help-block\">";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_REASON_EXPLAIN");
                    echo "</span>
          <div class=\"controls controls-row\">\t\t  
\t\t   <input placeholder=\"";
                    // line 49
                    echo $this->env->getExtension('phpbb')->lang("SOFT_DELETE_PLACEHOLDER");
                    echo "\" type=\"text\" name=\"delete_reason\" id=\"delete_reason\" value=\"\" class=\"form-control\" maxlength=\"120\" size=\"45\" />
\t\t  </div> 
\t\t </div> 
\t\t ";
                }
                // line 53
                echo "\t </fieldset>
\t";
            }
            // line 55
            echo "\t <div class=\"space10\"></div>
\t<fieldset>
\t  ";
            // line 57
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t<button type=\"submit\" name=\"confirm\" value=\"";
            // line 58
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</button>
\t\t<button type=\"submit\" name=\"cancel\" value=\"";
            // line 59
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</button>
\t</fieldset>
</div>
</form>
";
            // line 63
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "confirm_delete_body.html", 63)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "confirm_delete_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 63,  184 => 59,  178 => 58,  174 => 57,  170 => 55,  166 => 53,  159 => 49,  151 => 47,  137 => 42,  131 => 40,  128 => 39,  126 => 38,  123 => 37,  121 => 36,  116 => 34,  112 => 33,  107 => 32,  95 => 31,  92 => 30,  79 => 20,  75 => 19,  71 => 17,  64 => 13,  56 => 11,  53 => 10,  44 => 8,  39 => 7,  36 => 6,  34 => 5,  30 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
