<?php

/* simple_header_ACP.html */
class __TwigTemplate_ece1794716e55af4516ea28433bf55421fdfa8f8b739e7e44afe53ad91c11dfc extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo "\" lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\">
<head>

<meta charset=\"";
        // line 5
        echo (isset($context["S_CONTENT_ENCODING"]) ? $context["S_CONTENT_ENCODING"] : null);
        echo "\">
<meta name=\"author\" content=\"SiteSplat www.sitesplat.com\">
<meta name=\"designer\" content=\"SiteSplat www.sitesplat.com\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"keywords\" content=\"\" />
<meta name=\"description\" content=\"\" />
";
        // line 11
        echo (isset($context["META"]) ? $context["META"] : null);
        echo "
<title>";
        // line 12
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "&nbsp;&bull;&nbsp;";
        if ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "&nbsp;&bull;&nbsp;";
        } elseif ((isset($context["S_IN_UCP"]) ? $context["S_IN_UCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("UCP");
            echo "&nbsp;&bull;&nbsp;";
        }
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        echo "</title>

<!-- Google free font here -->
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Asap:700' rel='stylesheet' type='text/css'>

<!-- CSS files start here-->
<link href=\"";
        // line 19
        echo (isset($context["T_STYLESHEET_LINK"]) ? $context["T_STYLESHEET_LINK"] : null);
        echo "\" rel=\"stylesheet\">
";
        // line 20
        // line 21
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS", array());
        echo "
";
        // line 22
        // line 23
        echo "<link href=\"";
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/basics.css\" rel=\"stylesheet\">
<link href=\"";
        // line 24
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/custom.css\" rel=\"stylesheet\">
<!-- CSS files -->

<!-- Scripts start here after the jquery.js -->
<script src=\"//cdnjs.cloudflare.com/ajax/libs/headjs/1.0.3/head.min.js\"></script>
<script>
// this loads jquery asyncrounously & in parallel
head.load(\"//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js\", \"";
        // line 31
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/vendors/bootstrap/js/bootstrap.min.js\", \"";
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/vendors/core.min.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\", \"";
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/vendors/forum_fn.js\", \"";
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/vendors/ajax.min.js\");
</script>

";
        // line 34
        $value = 1;
        $context['definition']->set('POPUP', $value);
        // line 35
        echo "
";
        // line 36
        // line 37
        echo "
";
        // line 38
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS", array());
        echo "

";
        // line 40
        // line 41
        echo "
</head>

<body id=\"phpbb\" class=\"section-";
        // line 44
        echo (isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null);
        echo " ";
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo " ";
        echo (isset($context["BODY_CLASS"]) ? $context["BODY_CLASS"] : null);
        echo "\">

";
        // line 46
        // line 47
        echo "
<div class=\"dormient\">
<div class=\"container\">
  <!-- start content -->
  <div id=\"content-forum\">
   
   <div id=\"page-body\">
\t <main role=\"main\">";
    }

    public function getTemplateName()
    {
        return "simple_header_ACP.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 47,  131 => 46,  122 => 44,  117 => 41,  116 => 40,  111 => 38,  108 => 37,  107 => 36,  104 => 35,  101 => 34,  87 => 31,  77 => 24,  72 => 23,  71 => 22,  67 => 21,  66 => 20,  62 => 19,  43 => 12,  39 => 11,  30 => 5,  22 => 2,  19 => 1,);
    }
}
