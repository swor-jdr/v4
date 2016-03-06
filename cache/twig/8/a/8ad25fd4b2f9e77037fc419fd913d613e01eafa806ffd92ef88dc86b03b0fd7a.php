<?php

/* overall_footer.html */
class __TwigTemplate_8ad25fd4b2f9e77037fc419fd913d613e01eafa806ffd92ef88dc86b03b0fd7a extends Twig_Template
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
        // line 2
        echo "
\t</div> <!-- page-body id in header -->
  </div> <!-- content-forum in header -->
 </div> <!-- container in header -->

";
        // line 7
        // line 8
        echo "
";
        // line 9
        if ((( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "index"))) {
            // line 10
            echo "    ";
            $location = "addons/sitesplat_login_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("addons/sitesplat_login_body.html", "overall_footer.html", 10)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 12
        echo "
\t<section class=\"section-page\">
        <div id=\"rtblock\" class=\"container\">
            ";
        // line 15
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "fltl", array()))) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('sitesplat_fltl', '__main__'));
            $this->env->loadTemplate('@sitesplat_fltl/event/fltl.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        } else {
            $location = "addons/recent_topics_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("addons/recent_topics_body.html", "overall_footer.html", 15)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 16
        echo "        </div>
    </section>

\t";
        // line 19
        if ((isset($context["FLATBOOTS_MINI_CMS_ENABLED"]) ? $context["FLATBOOTS_MINI_CMS_ENABLED"] : null)) {
            // line 20
            echo "\t\t";
            // line 21
            echo "\t";
        } else {
            // line 22
            echo "    <section class=\"section-pre-footer\">
\t\t<div class=\"container center\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-5 twitter\">
\t\t\t\t\t<div class=\"thumb\"><i class=\"fa fa-rebel\"></i></div>
\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t<h3>";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("FLATBOOTS_ABOUT_TITLE");
            echo "</h3>
\t\t\t\t\t\t<p>";
            // line 29
            echo $this->env->getExtension('phpbb')->lang("FLATBOOTS_ABOUT_PART_ONE");
            echo "</p>
\t\t\t\t\t\t<!--<a href=\"#\"><strong>";
            // line 30
            echo $this->env->getExtension('phpbb')->lang("READ_MORE");
            echo "</strong></a>-->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-5 col-sm-offset-2 twitter\">
\t\t\t\t\t<div class=\"thumb\"><i class=\"fa fa-twitter\"></i></div>
\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t<h3><a href=\"https://twitter.com/swor_jdr\">";
            // line 36
            echo $this->env->getExtension('phpbb')->lang("JOIN_US_TWITTER");
            echo "&nbsp;<small>@swor_jdr</small></a></h3>
\t\t\t\t\t\t <div id=\"twitter-feed\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t <div class=\"section-bg\"></div>
\t</section>
\t";
        }
        // line 45
        echo "
\t<footer class=\"burned-asphalt\"> <!-- Footer block -->
\t\t<div class=\"midnight-\" id=\"sub-footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row bottomLinks\">

\t\t\t\t\t<div class=\"col-sm-6 sm-direction\">
\t\t\t\t\t <nav>
\t\t\t\t\t";
        // line 53
        if ((isset($context["FLATBOOTS_MINI_CMS_ENABLED"]) ? $context["FLATBOOTS_MINI_CMS_ENABLED"] : null)) {
            // line 54
            echo "\t\t\t\t\t\t";
            // line 55
            echo "\t\t\t\t\t";
        } else {
            // line 56
            echo "\t\t\t\t\t\t<ul class=\"list-inline footer-nav\">
\t\t\t\t\t\t <li><a href=\"";
            // line 57
            echo (isset($context["U_PRIVACY"]) ? $context["U_PRIVACY"] : null);
            echo "\" title=\"\">";
            echo $this->env->getExtension('phpbb')->lang("PRIVACY");
            echo "</a></li>
\t\t\t\t\t\t <li><a href=\"";
            // line 58
            echo (isset($context["U_TERMS_USE"]) ? $context["U_TERMS_USE"] : null);
            echo "\" title=\"\">";
            echo $this->env->getExtension('phpbb')->lang("TERMS");
            echo "</a></li>
\t\t\t\t\t\t ";
            // line 59
            // line 60
            echo "\t\t\t\t\t\t ";
            if ((isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null)) {
                // line 61
                echo "\t\t\t\t\t\t <li><a href=\"";
                echo (isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null);
                echo "\" title=\"\">";
                echo $this->env->getExtension('phpbb')->lang("CONTACT_US");
                echo "</a></li>
\t\t\t\t\t\t ";
            }
            // line 63
            echo "\t\t\t\t\t\t ";
            // line 64
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t\t </nav>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-sm-6 sm-direction\">
\t\t\t\t\t\t<div class=\"clearfix socialbar\">
\t\t\t\t\t\t";
        // line 71
        if ((isset($context["FLATBOOTS_MINI_CMS_ENABLED"]) ? $context["FLATBOOTS_MINI_CMS_ENABLED"] : null)) {
            // line 72
            echo "\t\t\t\t\t\t\t\t";
            // line 73
            echo "\t\t\t\t\t\t";
        } else {
            // line 74
            echo "\t\t\t\t\t\t\t<div class=\"social-network\">
\t\t\t\t\t\t\t\t<!-- <a class=\"google-plus-color\" title=\"Google+\" href=\"https://plus.google.com/u/0/100435978342273345264/\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t\t\t<a class=\"github-color\" title=\"Github\" href=\"#2\"><i class=\"fa fa-github\"></i></a>
\t\t\t\t\t\t\t\t<a class=\"behance-color\" title=\"Behance\" href=\"#3\"><i class=\"fa fa-behance\"></i></a>-->
\t\t\t\t\t\t\t\t<!-- <a class=\"dropbox-color\" title=\"Dropbox\" href=\"#4\"><i class=\"fa fa-dropbox\"></i></a> -->
\t\t\t\t\t\t\t\t<!-- <a class=\"pinterest-color\" title=\"Pinterest\" href=\"#5\"><i class=\"fa fa-pinterest\"></i></a> -->
\t\t\t\t\t\t\t\t<a class=\"facebook-color\" title=\"Facebook\" href=\"https://www.facebook.com/sworjdr/?fref=ts\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t<a class=\"twitter-color\" title=\"Twitter\" href=\"https://twitter.com/swor_jdr\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t<!-- <a class=\"bitbucket-color\" title=\"Bitbucket\" href=\"#8\"><i class=\"fa fa-bitbucket\"></i></a> -->
\t\t\t\t\t\t\t\t<!--<a class=\"envato-color\" title=\"Envato\" href=\"http://themeforest.net/user/ThemeSplat/portfolio?ref=ThemeSplat\"><i class=\"icon-moon-envatoleaf\"></i></a>-->
\t\t\t\t\t\t\t\t<a class=\"rss-color hidden-xs\" title=\"rss\" href=\"";
            // line 84
            echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
            echo "\"><i class=\"fa fa-rss\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>

<a id=\"totop\" class=\"top-flat\" href=\"\" onclick=\"return false;\" style=\"display:none;\"></a>

<div class=\"hidden\">";
        // line 96
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            echo (isset($context["RUN_CRON_TASK"]) ? $context["RUN_CRON_TASK"] : null);
        }
        echo "</div>

<!-- injected via core and ajax JS for the return confirmation actions -->
   <div id=\"page-footer\">
\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 100
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\">&nbsp;</div>
\t</div>

\t<div id=\"phpbb_alert\" class=\"alert alert-default phpbb_alert\" data-l-err=\"";
        // line 104
        echo $this->env->getExtension('phpbb')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<button type=\"button\" class=\"close alert_close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t<h3 class=\"alert_title\">&nbsp;</h3>
\t\t <p class=\"alert_text\"></p>
\t</div>

\t<div id=\"phpbb_confirm\" class=\"alert alert-default phpbb_alert\">
\t\t<button type=\"button\" class=\"close alert_close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t<div class=\"alert_text\"></div>
\t</div>
  </div>
<!-- injected via core and ajax JS for the return confirmation actions -->

";
        // line 117
        if (((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) && (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "viewforum") || ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "viewtopic")))) {
            // line 118
            echo "\t<div class=\"modal fade\" id=\"BreadcrumbMap\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"BreadcrumbsLabel\">
\t  <div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t  <div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t<h4 class=\"modal-title\" id=\"BreadcrumbsLabel\">";
            // line 123
            echo $this->env->getExtension('phpbb')->lang("NAVIGATION");
            echo "</h4>
\t\t  </div>
\t\t  <div class=\"modal-body file-tree\">
\t\t   <ul>
\t\t\t<li class=\"root\"><a href=\"";
            // line 127
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("INDEX");
            echo "</a></li>
\t\t\t";
            // line 128
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
                // line 129
                echo "\t\t\t   <li><a href=\"";
                echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
                echo "</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "\t\t   </ul>
\t\t    <i class=\"icon-compass fa fa-compass\"></i>
\t\t  </div>
\t\t  <div class=\"modal-footer\">
\t\t  </div>
\t\t</div>
\t  </div>
\t</div>
\t";
        }
        // line 140
        echo "
\t";
        // line 141
        if ((isset($context["ENABLE_POPUP_LOGIN"]) ? $context["ENABLE_POPUP_LOGIN"] : null)) {
            // line 142
            echo "\t\t<div class=\"modal fade\" id=\"modal-login\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t\t<h3 class=\"modal-title\">";
            // line 147
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
            echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 150
            echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
            echo "\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<label for=\"username\" class=\"control-label\">";
            // line 152
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-icon left\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"username\" id=\"username\" placeholder=\"";
            // line 155
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<label for=\"password\" class=\"control-label\">";
            // line 158
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-icon left\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-key\"></i>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"password\" id=\"password\" placeholder=\"";
            // line 161
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 163
            if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                // line 164
                echo "\t\t\t\t\t\t\t\t\t<div class=\"controls controls-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"radio\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin-pop\"><label for=\"autologin-pop\">";
                // line 165
                echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
                echo "</label></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 168
            echo "\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" id=\"load\" name=\"login\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
            echo "\" data-loading-text=\"";
            echo $this->env->getExtension('phpbb')->lang("LOADING_LOG_IN");
            echo " <i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
            echo "</button>
\t\t\t\t\t\t\t\t";
            // line 169
            echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
            echo "
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t</div>
\t\t\t\t</div><!-- /.modal-content -->
\t\t\t</div><!-- /.modal-dialog -->
\t\t</div><!-- /.modal -->
\t";
        }
        // line 179
        echo "
<script>
// this loads jquery asyncrounously & in parallel
head.load(\"//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js\", \"";
        // line 182
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/vendors/bootstrap/js/bootstrap.min.js\", \"";
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/vendors/core.min.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\", \"";
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/vendors/forum_fn.min.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\", \"";
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/vendors/ajax.min.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\");
</script>

<!-- we use this event to load the JS scripts properly via the extension system -->
";
        // line 186
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('sitesplat_fltl', '__main__'));
        $this->env->loadTemplate('@sitesplat_fltl/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 187
        echo "
<!-- injected via a module or an include -->
<script>
// some function that depends on bootstrap and jquery
head.ready(function () {
\t\$('.footable').footable();\$(\".selectpicker\").selectpicker();\$(\".selectpicker\").tooltip(\"disable\");var totop=\$(\"#totop\");totop.click(function(){\$(\"html, body\").stop(true,true).animate({scrollTop:0},500);return false});\$(window).scroll(function(){if(\$(this).scrollTop()>600){totop.fadeIn()}else{totop.fadeOut()}});\$(\"button[data-loading-text], input[data-loading-text], .btn-load\").click(function(){var e=\$(this);e.button(\"loading\");setTimeout(function(){e.button(\"reset\")},3e3)});
\t\$(\"input\").iCheck({checkboxClass:\"icheckbox_flat-aero\",radioClass:\"iradio_flat-aero\"});\$(\".btn-search\").click(function(){\$(\".search-input\").toggleClass(\"open\").find(\"input\").focus()});\$(\".close\").click(function(){\$(this).prev(\"input\").val(\"\").parents(\".search-input\").removeClass(\"open\")});\$(\".nav-tog\").click(function(){if(\$(this).hasClass(\"neutro\")){\$(this).removeClass(\"neutro\").addClass(\"open\")}else{\$(this).removeClass(\"open\").addClass(\"neutro\")}});
\t\$('input[data-reset-on-edit]').on('keyup', function() {\$(this.getAttribute('data-reset-on-edit')).val('');});
\tfunction isTouchDevice(){return true==(\"ontouchstart\"in window||window.DocumentTouch&&document instanceof DocumentTouch);}if(isTouchDevice()===false){jQuery(function(e){e(\"a\").tooltip({html:true,container:\"body\"})});}
    \$('#notification_list_button').click(function(){setTimeout(function(){\$(\".nano\").nanoScroller();},0);});
});
// some function that depends on bootstrap and jquery
head.load(\"";
        // line 199
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/vendors/twitterFetcher.min.js\");
head.ready('twitterFetcher.min.js',function(){var twit={\"id\":'2726753526',\"domId\":'twitter-feed',\"maxTweets\":1,\"showUser\":false,\"showImages\":true,\"enableLinks\":true};twitterFetcher.fetch(twit);});
</script>
<!-- injected via a module or an include -->

";
        // line 204
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SCRIPTS", array());
        echo "

";
        // line 206
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            // line 207
            echo "<!-- // lets load the plupload crap super huge files becuase... wait for it wait for it. \"swear here\" -->
";
            // line 208
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 208)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 210
        echo "
";
        // line 211
        // line 212
        echo "
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62372292-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 212,  463 => 211,  460 => 210,  447 => 208,  444 => 207,  442 => 206,  437 => 204,  429 => 199,  415 => 187,  410 => 186,  391 => 182,  386 => 179,  373 => 169,  364 => 168,  358 => 165,  355 => 164,  353 => 163,  348 => 161,  341 => 158,  335 => 155,  328 => 152,  323 => 150,  315 => 147,  308 => 142,  306 => 141,  303 => 140,  292 => 131,  281 => 129,  277 => 128,  271 => 127,  264 => 123,  257 => 118,  255 => 117,  237 => 104,  222 => 100,  213 => 96,  202 => 87,  196 => 84,  184 => 74,  181 => 73,  179 => 72,  177 => 71,  170 => 66,  166 => 64,  164 => 63,  156 => 61,  153 => 60,  152 => 59,  146 => 58,  140 => 57,  137 => 56,  134 => 55,  132 => 54,  130 => 53,  120 => 45,  108 => 36,  99 => 30,  95 => 29,  91 => 28,  83 => 22,  80 => 21,  78 => 20,  76 => 19,  71 => 16,  52 => 15,  47 => 12,  33 => 10,  31 => 9,  28 => 8,  27 => 7,  20 => 2,  19 => 1,);
    }
}
