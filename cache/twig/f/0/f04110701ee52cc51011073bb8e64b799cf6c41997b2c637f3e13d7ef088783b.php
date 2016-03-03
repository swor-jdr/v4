<?php

/* overall_header.html */
class __TwigTemplate_f04110701ee52cc51011073bb8e64b799cf6c41997b2c637f3e13d7ef088783b extends Twig_Template
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
        // line 4
        echo (isset($context["S_CONTENT_ENCODING"]) ? $context["S_CONTENT_ENCODING"] : null);
        echo "\">
<meta name=\"author\" content=\"SiteSplat www.sitesplat.com\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"><!-- Set the viewport width to device width for mobile -->
<meta name=\"Description\" content=\"\"><!-- Set Your forum description here inside the \"\" tag -->
<meta name=\"Keywords\" content=\"\"><!-- Set Your forum keywords here inside the \"\" tag and make sure they are separated by a comma -->
<meta name=\"application-name\" content=\"StarWars Open Rift\"><!-- WIN8 Tiles setup forum name -->
<meta name=\"msapplication-TileColor\" content=\"#ffffff\"><!-- WIN8 Tiles color -->
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
";
        // line 12
        echo (isset($context["META"]) ? $context["META"] : null);
        echo "
<title>";
        // line 13
        if ((isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null)) {
            echo "&#40;";
            echo (isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null);
            echo "&#41;&nbsp;";
        }
        if (( !(isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) &&  !(isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo "&nbsp;&#45;&nbsp;";
        }
        if ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "&nbsp;&#45;&nbsp;";
        } elseif ((isset($context["S_IN_UCP"]) ? $context["S_IN_UCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("UCP");
            echo "&nbsp;&#45;&nbsp;";
        }
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        if (((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) || (isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo "&nbsp;&#45;&nbsp;";
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        }
        echo "</title>
";
        // line 14
        if ((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null)) {
            // line 15
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_OVERALL"]) ? $context["S_ENABLE_FEEDS_OVERALL"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "\">";
            }
            // line 16
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_NEWS"]) ? $context["S_ENABLE_FEEDS_NEWS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=news\">";
            }
            // line 17
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_FORUMS"]) ? $context["S_ENABLE_FEEDS_FORUMS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=forums\">";
            }
            // line 18
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS"]) ? $context["S_ENABLE_FEEDS_TOPICS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics\">";
            }
            // line 19
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"]) ? $context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics_active\">";
            }
            // line 20
            echo "\t";
            if (((isset($context["S_ENABLE_FEEDS_FORUM"]) ? $context["S_ENABLE_FEEDS_FORUM"] : null) && (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo " - ";
                echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "\">";
            }
            // line 21
            echo "\t";
            if (((isset($context["S_ENABLE_FEEDS_TOPIC"]) ? $context["S_ENABLE_FEEDS_TOPIC"] : null) && (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " - ";
                echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "&amp;t=";
                echo (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null);
                echo "\">";
            }
            // line 22
        }
        // line 24
        echo "
";
        // line 25
        if ((isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null)) {
            // line 26
            echo "\t<link rel=\"canonical\" href=\"";
            echo (isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null);
            echo "\" />
";
        }
        // line 28
        echo "
<!-- Google free font here -->
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Asap:700' rel='stylesheet' type='text/css'>

<!-- CSS files start here -->
<link href=\"";
        // line 34
        echo (isset($context["T_STYLESHEET_LINK"]) ? $context["T_STYLESHEET_LINK"] : null);
        echo "\" rel=\"stylesheet\">
";
        // line 35
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            // line 36
            echo "<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/plupload.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 38
        // line 39
        echo "
";
        // line 40
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS", array());
        echo "

<link href=\"";
        // line 42
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/basics.min.css\" rel=\"stylesheet\">
<link href=\"";
        // line 43
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/custom.css\" rel=\"stylesheet\">

<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 45
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/images/logo-black.png\">
<!-- CSS files stop here -->

";
        // line 48
        // line 49
        echo "
<!-- older scripts set started here after the headjs - cannot do this with phpbb31 due to ajax stuff -->
<script src=\"//cdnjs.cloudflare.com/ajax/libs/headjs/1.0.3/head.load.min.js\"></script>

</head>
<body data-spy=\"scroll\" data-target=\".scrollspy\" id=\"phpbb\" class=\"section-";
        // line 54
        echo (isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null);
        echo " ";
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo " ";
        echo (isset($context["BODY_CLASS"]) ? $context["BODY_CLASS"] : null);
        echo "\">
";
        // line 55
        // line 56
        echo "
 <header id=\"top\" class=\"navbar navbar-inverse navbar-static-top flat-nav\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      <button data-target=\".flat-nav-collapse\" data-toggle=\"collapse\" type=\"button\" class=\"nav-tog lines-button x navbar-toggle neutro\">
\t   <span class=\"sr-only sr-nav\">";
        // line 61
        echo $this->env->getExtension('phpbb')->lang("TOGGLE_NAV");
        echo "</span>
        <span class=\"lines\"></span>
      </button>
\t  ";
        // line 64
        if ((isset($context["LOGO_IMAGE_EXIST"]) ? $context["LOGO_IMAGE_EXIST"] : null)) {
            // line 65
            echo "      \t<a class=\"navbar-brand\" href=\"";
            if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            } else {
                echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            }
            echo "\"><img style=\"max-height: 60px; max-width:100%; margin-top: -20px;\" class=\"img-responsive\" src=\"";
            echo (isset($context["T_IMAGES_PATH"]) ? $context["T_IMAGES_PATH"] : null);
            echo "../ext/sitesplat/flatbootsminicms/images/logo/";
            echo (isset($context["LOGO_FILENAME"]) ? $context["LOGO_FILENAME"] : null);
            echo "\" alt=\"";
            echo (isset($context["LOGO_TEXT"]) ? $context["LOGO_TEXT"] : null);
            echo "\" /></a>
      ";
        } else {
            // line 67
            echo "      \t<a class=\"navbar-brand\" href=\"";
            if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            } else {
                echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            }
            echo "\"><img src=\"./styles/FLATBOOTS/theme/images/logo-jaune.png\" alt=\"SWOR\" class=\"img-responsive swor__header__logo\" /></a>
      ";
        }
        // line 69
        echo "    </div>
\t ";
        // line 70
        $location = "addons/navigation.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("addons/navigation.html", "overall_header.html", 70)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 71
        echo "  </div>
 </header>
    <div class=\"search-input search-input-fullscreen hidden-xs hidden-sm\">
\t   <form method=\"get\" id=\"search\" action=\"";
        // line 74
        echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
        echo "\">
\t\t   <fieldset>
\t\t   <input name=\"keywords\" id=\"keywords\" type=\"text\" maxlength=\"128\" title=\"";
        // line 76
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
        echo "\" placeholder=\"";
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "\" value=\"\" autocomplete=\"off\"/>
\t\t   <div class=\"close\">&times;</div>
\t\t   ";
        // line 78
        echo (isset($context["S_SEARCH_HIDDEN_FIELDS"]) ? $context["S_SEARCH_HIDDEN_FIELDS"] : null);
        echo "
\t\t   </fieldset>
        </form>
    </div>

";
        // line 83
        if ( !(isset($context["HIDE_HEADER"]) ? $context["HIDE_HEADER"] : null)) {
            // line 84
            echo "  ";
            if ((isset($context["IN_BADGE"]) ? $context["IN_BADGE"] : null)) {
                // line 85
                echo "   ";
                $location = "@sitesplat_badge/header_badge_teaser.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("@sitesplat_badge/header_badge_teaser.html", "overall_header.html", 85)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 86
                echo "  ";
            } else {
                // line 87
                echo "   ";
                $location = "addons/header_teaser_body.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("addons/header_teaser_body.html", "overall_header.html", 87)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 88
                echo "  ";
            }
        } else {
            // line 90
            echo "<div style=\"padding-top:30px;\" class=\"space-teaser\"></div>
";
        }
        // line 92
        echo "
<div class=\"container\">
  <!-- start content -->
  <div id=\"content-forum\">

  ";
        // line 97
        // line 98
        echo "\t<div class=\"breadcrumb-line clearfix\">
\t\t<ul class=\"breadcrumb\">
\t\t";
        // line 100
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 101
        echo "
\t\t  ";
        // line 102
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            // line 103
            echo "\t\t   <li ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" data-navbar-reference=\"home\" itemprop=\"url\"><span class=\"icon fa fa-home\"></span></a></li>
\t\t   <li ";
            // line 104
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" data-navbar-reference=\"home\" itemprop=\"url\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</a></li>
\t\t  ";
        } else {
            // line 106
            echo "\t\t   <li ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a href=\"";
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\" data-navbar-reference=\"index\" itemprop=\"url\"><span class=\"icon fa fa-home\"></span></a></li>
\t\t   <li ";
            // line 107
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a href=\"";
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\" data-navbar-reference=\"index\" itemprop=\"url\">";
            echo $this->env->getExtension('phpbb')->lang("INDEX");
            echo "</a></li>
\t\t  ";
        }
        // line 109
        echo "
        ";
        // line 110
        // line 111
        echo "\t\t  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 112
            echo "\t\t   <li ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a itemprop=\"url\" href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\"";
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo ">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</a></li>
\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "\t\t";
        // line 115
        echo "
\t\t</ul>
\t\t";
        // line 117
        if (((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) && (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "viewforum") || ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "viewtopic")))) {
            // line 118
            echo "\t\t<ul class=\"breadcrumb-buttons visible-xxs\">
\t\t    <li>
\t\t\t  <a href=\"#\" title=\"\" data-toggle=\"modal\" data-target=\"#BreadcrumbMap\">
\t\t\t   <i class=\"icon fa fa-sitemap\"></i>
\t\t\t  </a>
\t\t   </li>
\t\t</ul>
\t\t";
        }
        // line 126
        echo "\t</div>

    ";
        // line 128
        // line 129
        echo "
\t<div id=\"page-body\">

\t";
        // line 132
        if ((((isset($context["S_BOARD_DISABLED"]) ? $context["S_BOARD_DISABLED"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) && ((isset($context["U_MCP"]) ? $context["U_MCP"] : null) || (isset($context["U_ACP"]) ? $context["U_ACP"] : null)))) {
            // line 133
            echo "\t<div class=\"alert alert-warning fade in\">
\t\t<button data-dismiss=\"alert\" class=\"close\"><span class=\"awe-remove-circle\"></span></button>
\t\t<i class=\"fa fa-info\"></i>&nbsp;<strong>";
            // line 135
            echo $this->env->getExtension('phpbb')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("BOARD_DISABLED");
            echo "
\t</div>
\t";
        }
        // line 138
        echo "
    ";
        // line 139
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 139,  478 => 138,  469 => 135,  465 => 133,  463 => 132,  458 => 129,  457 => 128,  453 => 126,  443 => 118,  441 => 117,  437 => 115,  435 => 114,  417 => 112,  412 => 111,  411 => 110,  408 => 109,  399 => 107,  392 => 106,  383 => 104,  376 => 103,  374 => 102,  371 => 101,  368 => 100,  364 => 98,  363 => 97,  356 => 92,  352 => 90,  348 => 88,  335 => 87,  332 => 86,  319 => 85,  316 => 84,  314 => 83,  306 => 78,  299 => 76,  294 => 74,  289 => 71,  277 => 70,  274 => 69,  264 => 67,  248 => 65,  246 => 64,  240 => 61,  233 => 56,  232 => 55,  224 => 54,  217 => 49,  216 => 48,  210 => 45,  205 => 43,  201 => 42,  196 => 40,  193 => 39,  192 => 38,  184 => 36,  182 => 35,  178 => 34,  170 => 28,  164 => 26,  162 => 25,  159 => 24,  157 => 22,  140 => 21,  125 => 20,  114 => 19,  103 => 18,  92 => 17,  81 => 16,  70 => 15,  68 => 14,  44 => 13,  40 => 12,  29 => 4,  22 => 2,  19 => 1,);
    }
}
