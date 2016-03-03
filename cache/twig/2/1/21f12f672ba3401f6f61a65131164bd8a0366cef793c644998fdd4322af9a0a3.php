<?php

/* mcp_notes_front.html */
class __TwigTemplate_21f12f672ba3401f6f61a65131164bd8a0366cef793c644998fdd4322af9a0a3 extends Twig_Template
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
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_header.html", "mcp_notes_front.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<form method=\"post\" id=\"mcp\" action=\"";
        echo (isset($context["U_POST_ACTION"]) ? $context["U_POST_ACTION"] : null);
        echo "\">
<div class=\"side-segment\"><h3>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h3></div>
<div class=\"well\">
\t<fieldset>
\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"username\">";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("SELECT_USER");
        echo ":</label>
\t<div class=\"controls controls-row\"> 
       <input type=\"text\" class=\"form-control input-sm\" name=\"username\" id=\"username\">
\t   <strong><a href=\"";
        // line 10
        echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
        echo "\" onclick=\"find_username(this.href); return false;\">";
        echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
        echo "</a></strong>
\t</div> 
\t</div>
\t</fieldset>
</div>

<fieldset class=\"form-actions\">
\t<button type=\"reset\" value=\"";
        // line 17
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-default\">";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "</button>
\t<button type=\"submit\" name=\"submituser\" value=\"";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"btn btn-default\">";
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "</button>
\t";
        // line 19
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>
";
        // line 22
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_notes_front.html", 22)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_notes_front.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  73 => 19,  67 => 18,  61 => 17,  49 => 10,  43 => 7,  36 => 3,  31 => 2,  19 => 1,);
    }
}
