<?php

/* mcp_warn_post.html */
class __TwigTemplate_229d9d1f31138df8c6914e558303622fdccb307ee1399801a865690bf6dca3da extends Twig_Template
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
        $this->loadTemplate("mcp_header.html", "mcp_warn_post.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<form method=\"post\" id=\"mcp\" action=\"";
        echo (isset($context["U_POST_ACTION"]) ? $context["U_POST_ACTION"] : null);
        echo "\">
<div class=\"side-segment\"><h3>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("MCP_WARN_POST");
        echo "</h3></div>
<div class=\"well\">
<div class=\"row\">
    <div class=\"col-md-2\">
\t  ";
        // line 7
        if ((isset($context["AVATAR"]) ? $context["AVATAR"] : null)) {
            echo (isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null);
        } else {
            echo "<div class=\"fileinput-new thumbnail\" style=\"width: 100px; height: 100px;\"><img src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/no_avatar.gif\" alt=\"\" /></div>";
        }
        // line 8
        echo "    </div>

      <ul class=\"list-unstyled\">
\t    <li><i class=\"fa fa-user text-muted\"></i>";
        // line 11
        if ((isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null)) {
            echo "<span style=\"color: #";
            echo (isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null);
            echo "\">&nbsp;";
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
            echo "</span>";
        } else {
            echo "&nbsp;";
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        }
        echo "</li>
        <li><i class=\"fa fa-calendar text-muted\"></i>&nbsp;";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("JOINED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "&nbsp;";
        echo (isset($context["JOINED"]) ? $context["JOINED"] : null);
        echo "</li>
        <li><i class=\"fa fa-comments text-muted\"></i>&nbsp;";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("TOTAL_POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "&nbsp;";
        echo (isset($context["POSTS"]) ? $context["POSTS"] : null);
        echo "</li>
        <li><i class=\"fa fa-warning text-muted\"></i>&nbsp;";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("WARNINGS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "&nbsp;";
        echo (isset($context["WARNINGS"]) ? $context["WARNINGS"] : null);
        echo "</li>
\t\t";
        // line 15
        if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
            echo "<li>";
            echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
            echo "</li>";
        }
        // line 16
        echo "      </ul>
</div>
</div>

<div class=\"well\">
<h3>";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
        echo "</h3>
\t<div class=\"content\">
\t\t";
        // line 23
        echo (isset($context["POST"]) ? $context["POST"] : null);
        echo "
\t</div>
</div>
";
        // line 26
        // line 27
        echo "<div class=\"well\">
\t<fieldset>
\t\t<div class=\"control-group\"> 
\t\t <label class=\"control-label\" for=\"warning\">";
        // line 30
        echo $this->env->getExtension('phpbb')->lang("ADD_WARNING");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb')->lang("ADD_WARNING_EXPLAIN");
        echo "</span>
\t        <div class=\"controls controls-row\"> 
              <textarea placeholder=\"";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("MORE_INFO");
        echo "...\" rows=\"2\" name=\"warning\" id=\"warning\" class=\"form-control\">";
        echo $this->env->getExtension('phpbb')->lang("WARNING_POST_DEFAULT");
        echo "</textarea>
\t         </div> 
\t    </div>\t
\t\t";
        // line 35
        if ((isset($context["S_CAN_NOTIFY"]) ? $context["S_CAN_NOTIFY"] : null)) {
            // line 36
            echo "         \t<div class=\"controls controls-row\"> 
              <input type=\"checkbox\" name=\"notify_user\" id=\"notify_user\" checked=\"checked\"><label for=\"notify_user\">";
            // line 37
            echo $this->env->getExtension('phpbb')->lang("NOTIFY_USER_WARN");
            echo "</label> 
\t         </div>
\t\t";
        }
        // line 40
        echo "\t</fieldset>
</div>
";
        // line 42
        // line 43
        echo "<fieldset class=\"form-actions\">
\t<button type=\"reset\" value=\"";
        // line 44
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-default\">";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "</button>
\t<button type=\"submit\" name=\"action[add_warning]\" value=\"";
        // line 45
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"btn btn-default\">";
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "</button>
\t";
        // line 46
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>

</form>

";
        // line 51
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_warn_post.html", 51)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_warn_post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 51,  167 => 46,  161 => 45,  155 => 44,  152 => 43,  151 => 42,  147 => 40,  141 => 37,  138 => 36,  136 => 35,  128 => 32,  120 => 30,  115 => 27,  114 => 26,  108 => 23,  103 => 21,  96 => 16,  90 => 15,  83 => 14,  76 => 13,  69 => 12,  56 => 11,  51 => 8,  43 => 7,  36 => 3,  31 => 2,  19 => 1,);
    }
}
