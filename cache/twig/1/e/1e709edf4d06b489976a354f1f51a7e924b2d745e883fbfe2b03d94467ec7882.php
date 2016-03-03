<?php

/* ucp_avatar_options_remote.html */
class __TwigTemplate_1e709edf4d06b489976a354f1f51a7e924b2d745e883fbfe2b03d94467ec7882 extends Twig_Template
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
        echo " <div class=\"control-group\">
\t <label class=\"label-control\" for=\"avatar_remote_url\">";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("LINK_REMOTE_AVATAR");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb')->lang("LINK_REMOTE_AVATAR_EXPLAIN");
        echo "</span>
\t<div class=\"controls controls-row\">
\t <input placeholder=\"http://the-avatar-site/avatar.gif\" type=\"url\" name=\"avatar_remote_url\" id=\"avatar_remote_url\" value=\"";
        // line 4
        echo (isset($context["AVATAR_REMOTE_URL"]) ? $context["AVATAR_REMOTE_URL"] : null);
        echo "\" class=\"form-control\" data-reset-on-edit=\"#avatar_remote_width, #avatar_remote_height\" />
\t</div>
 </div>


 <div class=\"control-group\">
     <label for=\"avatar_gravatar_width\" class=\"control-label\">";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("GRAVATAR_AVATAR_SIZE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb')->lang("GRAVATAR_AVATAR_SIZE_EXPLAIN");
        echo "</span>
   <div class=\"controls controls-row\">
        
\t<div class=\"row\">
\t\t<div class=\"col-md-3\">
\t\t<label class=\"sr-only\" for=\"avatar_gravatar_width\"></label>
\t\t<div class=\"input-group\">
\t\t   <span class=\"input-group-addon\">";
        // line 17
        echo $this->env->getExtension('phpbb')->lang("WIDTH_SIZE");
        echo "</span>
            <input type=\"text\" name=\"avatar_remote_width\" id=\"avatar_remote_width\" size=\"3\" value=\"";
        // line 18
        echo (isset($context["AVATAR_REMOTE_WIDTH"]) ? $context["AVATAR_REMOTE_WIDTH"] : null);
        echo "\" class=\"form-control input-sm\" placeholder=\"";
        echo $this->env->getExtension('phpbb')->lang("WIDTH_PLACEHOLDER");
        echo "\">
\t\t\t<span class=\"input-group-addon\">";
        // line 19
        echo $this->env->getExtension('phpbb')->lang("PIXEL_SIZE");
        echo "</span>
        </div>
\t\t</div>

\t    <div class=\"col-md-3\">
\t\t<label class=\"sr-only\" for=\"avatar_gravatar_height\"></label>
\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\">";
        // line 26
        echo $this->env->getExtension('phpbb')->lang("HEIGHT_SIZE");
        echo "</span>
            <input type=\"text\" name=\"avatar_remote_height\" id=\"avatar_remote_height\" size=\"3\" value=\"";
        // line 27
        echo (isset($context["AVATAR_REMOTE_HEIGHT"]) ? $context["AVATAR_REMOTE_HEIGHT"] : null);
        echo "\" class=\"form-control input-sm\" placeholder=\"";
        echo $this->env->getExtension('phpbb')->lang("HEIGTH_PLACEHOLDER");
        echo "\">
\t\t\t<span class=\"input-group-addon\">";
        // line 28
        echo $this->env->getExtension('phpbb')->lang("PIXEL_SIZE");
        echo "</span>
         </div>
\t\t</div>
\t</div>
\t
   </div>
 </div>";
    }

    public function getTemplateName()
    {
        return "ucp_avatar_options_remote.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 28,  76 => 27,  72 => 26,  62 => 19,  56 => 18,  52 => 17,  39 => 10,  30 => 4,  22 => 2,  19 => 1,);
    }
}
