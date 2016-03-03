<?php

/* ucp_profile_signature.html */
class __TwigTemplate_d36904b0fdb37e21fc187f60d13998ae99436f0775fc4a8c91a57aca75bf2207 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_profile_signature.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<form id=\"postform\" method=\"post\" action=\"";
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">
";
        // line 3
        if (((isset($context["SIGNATURE_PREVIEW"]) ? $context["SIGNATURE_PREVIEW"] : null) != "")) {
            // line 4
            echo "\t<div class=\"well\">
\t\t<h3>";
            // line 5
            echo $this->env->getExtension('phpbb')->lang("SIGNATURE_PREVIEW");
            echo "</h3>
\t\t\t<div class=\"signature\" style=\"border-top:none; margin-top: 0;\">";
            // line 6
            echo (isset($context["SIGNATURE_PREVIEW"]) ? $context["SIGNATURE_PREVIEW"] : null);
            echo "</div>
\t</div>
";
        }
        // line 9
        echo "
<div class=\"well\">
   <fieldset class=\"framed-ucp\">
   <legend>";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</legend>
\t<div class=\"alert alert-info fade in\">
\t\t\t";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("SIGNATURE_EXPLAIN");
        echo "
\t\t</div>
\t";
        // line 16
        $value = 1;
        $context['definition']->set('SIG_EDIT', $value);
        // line 17
        echo "\t";
        $location = "posting_editor.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_editor.html", "ucp_profile_signature.html", 17)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 18
        echo "\t</fieldset>
\t
\t<div class=\"space10\"></div>
\t
\t<fieldset class=\"framed-ucp\">
\t<legend>";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("OPTIONS");
        echo "</legend>
\t\t";
        // line 24
        if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
            // line 25
            echo "        <input type=\"checkbox\" name=\"disable_bbcode\" id=\"disable_bbcode\"";
            echo (isset($context["S_BBCODE_CHECKED"]) ? $context["S_BBCODE_CHECKED"] : null);
            echo "><label class=\"checkbox-inline\" for=\"disable_bbcode\">";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_BBCODE");
            echo "</label>
\t\t";
        }
        // line 27
        echo "\t\t";
        if ((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null)) {
            // line 28
            echo "\t\t<input type=\"checkbox\" name=\"disable_smilies\" id=\"disable_smilies\"";
            echo (isset($context["S_SMILIES_CHECKED"]) ? $context["S_SMILIES_CHECKED"] : null);
            echo "><label class=\"checkbox-inline\" for=\"disable_smilies\">";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_SMILIES");
            echo "</label>
\t\t";
        }
        // line 30
        echo "\t\t";
        if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
            // line 31
            echo "\t\t<input type=\"checkbox\" name=\"disable_magic_url\" id=\"disable_magic_url\"";
            echo (isset($context["S_MAGIC_URL_CHECKED"]) ? $context["S_MAGIC_URL_CHECKED"] : null);
            echo "><label class=\"checkbox-inline\" for=\"disable_magic_url\">";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_MAGIC_URL");
            echo "</label>
\t\t";
        }
        // line 33
        echo "\t</fieldset>
</div>

\t<div class=\"form-actions\"> 
\t";
        // line 37
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t<button type=\"reset\" name=\"reset\" value=\"";
        // line 38
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" class=\"btn btn-default\" >";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "</button>
\t<button type=\"submit\" class=\"btn btn-default\" name=\"preview\" value=\"";
        // line 39
        echo $this->env->getExtension('phpbb')->lang("PREVIEW");
        echo "\" autocomplete=\"off\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb')->lang("LOADING");
        echo "<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\">";
        echo $this->env->getExtension('phpbb')->lang("PREVIEW");
        echo "</button>
\t<button type=\"submit\" class=\"btn btn-default\" name=\"submit\" value=\"";
        // line 40
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" autocomplete=\"off\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb')->lang("LOADING");
        echo "<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\">";
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "</button>
\t";
        // line 41
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</div>
</form>
";
        // line 44
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_profile_signature.html", 44)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_profile_signature.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 44,  159 => 41,  151 => 40,  143 => 39,  137 => 38,  133 => 37,  127 => 33,  119 => 31,  116 => 30,  108 => 28,  105 => 27,  97 => 25,  95 => 24,  91 => 23,  84 => 18,  71 => 17,  68 => 16,  63 => 14,  58 => 12,  53 => 9,  47 => 6,  43 => 5,  40 => 4,  38 => 3,  31 => 2,  19 => 1,);
    }
}
