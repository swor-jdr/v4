<?php

/* ucp_main_front.html */
class __TwigTemplate_e82f41c9242be0d14b12c070e7770564f2018873cbb84dbaa24911e47a3276ae extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_main_front.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"tab-pane active\">
\t
\t<div class=\"alert alert-info fade in\">
        <button data-dismiss=\"alert\" class=\"close\" type=\"button\" aria-hidden=\"true\"><i class=\"awe-remove-circle\"></i></button>
       ";
        // line 6
        echo $this->env->getExtension('phpbb')->lang("UCP_WELCOME");
        echo "
    </div> 
\t
";
        // line 9
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()))) {
            // line 10
            echo "\t<div class=\"side-segment\"><h3>";
            echo $this->env->getExtension('phpbb')->lang("IMPORTANT_NEWS");
            echo "</h3></div>
\t
\t<div class=\"panel panel-forum\">
\t<div class=\"panel-heading\">
\t <i class=\"fa fa-bolt\"></i>&nbsp;";
            // line 14
            echo $this->env->getExtension('phpbb')->lang("IMPORTANT_NEWS");
            echo "
\t</div>
\t<div class=\"panel-inner\">
\t<table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th data-class=\"expand\">";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("TOPICS");
            echo "</th>
\t\t\t<th data-hide=\"phone\">";
            // line 21
            echo $this->env->getExtension('phpbb')->lang("LAST_POST");
            echo "</th>
\t\t</tr>
\t</thead>
\t";
            // line 24
            ob_start();
            echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_LOCKED");
            $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
            $context['definition']->set('VAR', $value);
            // line 25
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
                // line 26
                echo "\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t <span class=\"icon-wrapper\">
\t\t\t\t <i class=\"row-icon-font icon-moon-podcast2";
                // line 30
                if ($this->getAttribute($context["topicrow"], "S_UNREAD", array())) {
                    echo " forum-unread";
                } else {
                    echo " forum-read";
                }
                echo "\" title=\"";
                echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
                echo "\"></i>
\t\t\t\t </span>
\t\t\t\t <i class=\"row-icon-font-mini";
                // line 32
                if (($this->getAttribute($context["topicrow"], "TOPIC_TYPE", array()) == $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "VAR", array()))) {
                    echo " fa fa-lock forumview-lock";
                }
                echo "\" title=\"";
                echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
                echo "\"></i>
\t\t\t\t ";
                // line 33
                if ($this->getAttribute($context["topicrow"], "S_UNREAD", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", array());
                    echo "\"><i class=\"fa fa-asterisk\"></i></a>";
                }
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
                echo "\" class=\"topictitle\">&nbsp;";
                echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", array());
                echo "</a><br>
\t\t\t\t ";
                // line 34
                if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", array()))) {
                    // line 35
                    echo "\t\t\t\t    <ul class=\"pagination pagination-forum pagination-xs pull-right hidden-sm hidden-xs\">
\t\t\t\t\t\t";
                    // line 36
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                        // line 37
                        echo "\t\t\t\t\t\t ";
                        if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                            // line 38
                            echo "\t\t\t\t\t\t ";
                        } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                            echo "<li class=\"active\">";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                            echo "</li>
\t\t\t\t\t\t ";
                        } elseif ($this->getAttribute(                        // line 39
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                            echo "<li class=\"ellipsis\"><a>";
                            echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                            echo "</a></li>
\t\t\t\t\t\t ";
                        } elseif ($this->getAttribute(                        // line 40
$context["pagination"], "S_IS_NEXT", array())) {
                            // line 41
                            echo "\t\t\t\t\t\t";
                        } else {
                            // line 42
                            echo "\t\t\t\t\t\t <li><a href=\"";
                            echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                            echo "\">";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                            echo "</a></li>
\t\t\t\t\t\t";
                        }
                        // line 44
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "\t\t\t\t\t</ul>\t\t
\t\t\t    ";
                }
                // line 47
                echo "\t\t\t\t ";
                if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                    echo $this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array());
                    echo "&nbsp;";
                }
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo "&nbsp;";
                echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", array());
                echo "<small>&nbsp;";
                echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", array());
                echo "</small>
\t\t\t\t</td>
\t\t\t\t<td class=\"center\">";
                // line 49
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo "&nbsp;";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
                echo "
\t\t\t\t<a title=\"";
                // line 50
                echo $this->env->getExtension('phpbb')->lang("FORUMLIST_LASTPOST");
                echo "\" href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                echo "\"><i class=\"fa fa-sign-out\"></i></a> 
\t\t\t\t<br /><small>";
                // line 51
                echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
                echo "</small>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</tbody>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "\t</table>
\t</div>
\t</div>
";
        }
        // line 60
        echo "
<div class=\"side-segment\"><h3>";
        // line 61
        echo $this->env->getExtension('phpbb')->lang("YOUR_DETAILS");
        echo "</h3></div>
 <div class=\"clearfix\">
    ";
        // line 63
        // line 64
        echo "                <div class=\"panel panel-poll\">
                    <div class=\"panel-body\">
                        <div class=\"scroll-content\">
                            <ul class=\"mini-timeline\">
                                <li class=\"mini-timeline-lime\">
                                    <div class=\"timeline-icon\"></div>
                                    <div class=\"timeline-body\">
                                        <div class=\"timeline-content\">
                                            <a class=\"name\" href=\"#\">";
        // line 72
        echo $this->env->getExtension('phpbb')->lang("USER");
        echo "&nbsp;";
        echo $this->env->getExtension('phpbb')->lang("JOINED_BOARD");
        echo "</a>
                                            <span class=\"time\">";
        // line 73
        echo (isset($context["JOINED"]) ? $context["JOINED"] : null);
        echo "</span>
                                        </div>
                                    </div>
                                </li>

                                <li class=\"mini-timeline-deeporange\">
                                    <div class=\"timeline-icon\"></div>
                                    <div class=\"timeline-body\">
                                        <div class=\"timeline-content\">
                                            <a class=\"name\" href=\"#\">";
        // line 82
        echo $this->env->getExtension('phpbb')->lang("VISITED_BOARD");
        echo "</a>
                                            <span class=\"time\">";
        // line 83
        echo (isset($context["LAST_VISIT_YOU"]) ? $context["LAST_VISIT_YOU"] : null);
        echo "</span>
                                        </div>
                                    </div>
                                </li>

                                <li class=\"mini-timeline-info\">
                                    <div class=\"timeline-icon\"></div>
                                    <div class=\"timeline-body\">
                                        <div class=\"timeline-content\">
                                            <a class=\"name\" href=\"#\">";
        // line 92
        echo $this->env->getExtension('phpbb')->lang("TOTAL_POSTS");
        echo "</a>&nbsp;";
        if ((isset($context["POSTS_PCT"]) ? $context["POSTS_PCT"] : null)) {
            echo (isset($context["POSTS"]) ? $context["POSTS"] : null);
            if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
                echo "&nbsp;&#124;&nbsp;<a href=\"";
                echo (isset($context["U_SEARCH_USER"]) ? $context["U_SEARCH_USER"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_YOUR_POSTS");
                echo "</a>";
            }
        } else {
            echo (isset($context["POSTS"]) ? $context["POSTS"] : null);
        }
        // line 93
        echo "                                            <span class=\"time\">12 mins ago</span>
                                        </div>
                                    </div>
                                </li>
                            ";
        // line 97
        if (((isset($context["ACTIVE_FORUM"]) ? $context["ACTIVE_FORUM"] : null) != "")) {
            // line 98
            echo "                                <li class=\"mini-timeline-indigo\">
                                    <div class=\"timeline-icon\"></div>
                                    <div class=\"timeline-body\">
                                        <div class=\"timeline-content\">
                                            <a class=\"name\" href=\"#\">";
            // line 102
            echo $this->env->getExtension('phpbb')->lang("ACTIVE_IN_FORUM");
            echo "</a>&nbsp;<strong><a href=\"";
            echo (isset($context["U_ACTIVE_FORUM"]) ? $context["U_ACTIVE_FORUM"] : null);
            echo "\">";
            echo (isset($context["ACTIVE_FORUM"]) ? $context["ACTIVE_FORUM"] : null);
            echo "</a></strong>&nbsp;&#40;";
            echo (isset($context["ACTIVE_FORUM_POSTS"]) ? $context["ACTIVE_FORUM_POSTS"] : null);
            echo "&nbsp;&#47;&nbsp;";
            echo (isset($context["ACTIVE_FORUM_PCT"]) ? $context["ACTIVE_FORUM_PCT"] : null);
            echo "&#41;
                                            <span class=\"time\">6 hours ago</span>
                                        </div>
                                    </div>
                                </li>
\t\t\t\t\t\t\t";
        }
        // line 108
        echo "\t\t\t\t\t\t\t";
        if (((isset($context["ACTIVE_TOPIC"]) ? $context["ACTIVE_TOPIC"] : null) != "")) {
            // line 109
            echo "                                <li class=\"mini-timeline-lime\">
                                    <div class=\"timeline-icon\"></div>
                                    <div class=\"timeline-body\">
                                        <div class=\"timeline-content\">
                                            <a class=\"name\" href=\"#\">";
            // line 113
            echo $this->env->getExtension('phpbb')->lang("ACTIVE_IN_TOPIC");
            echo "</a>&nbsp;<strong><a href=\"";
            echo (isset($context["U_ACTIVE_TOPIC"]) ? $context["U_ACTIVE_TOPIC"] : null);
            echo "\">";
            echo (isset($context["ACTIVE_TOPIC"]) ? $context["ACTIVE_TOPIC"] : null);
            echo "</a></strong><br />&#40;";
            echo (isset($context["ACTIVE_TOPIC_POSTS"]) ? $context["ACTIVE_TOPIC_POSTS"] : null);
            echo "&nbsp;&#47;&nbsp;";
            echo (isset($context["ACTIVE_TOPIC_PCT"]) ? $context["ACTIVE_TOPIC_PCT"] : null);
            echo "&#41;
                                            <span class=\"time\">4 mins ago</span>
                                        </div>
                                    </div>
                                </li>
                            ";
        }
        // line 119
        echo "\t\t\t\t\t\t\t";
        if ((isset($context["WARNINGS"]) ? $context["WARNINGS"] : null)) {
            // line 120
            echo "                                <li class=\"mini-timeline-deeporange\">
                                    <div class=\"timeline-icon\"></div>
                                    <div class=\"timeline-body\">
                                        <div class=\"timeline-content\">
                                            <a class=\"name\" href=\"#\">";
            // line 124
            echo $this->env->getExtension('phpbb')->lang("YOUR_WARNINGS");
            echo "</a>&nbsp;";
            echo (isset($context["WARNING_IMG"]) ? $context["WARNING_IMG"] : null);
            echo "&nbsp;&#91;";
            echo (isset($context["WARNINGS"]) ? $context["WARNINGS"] : null);
            echo "&#93;
                                            <span class=\"time\">6 mins ago</span>
                                        </div>
                                    </div>
                                </li>
                            ";
        }
        // line 130
        echo "                              
\t\t\t\t\t\t<!-- Ready to use here\t  
\t\t\t\t\t\t\t  <li class=\"mini-timeline-info\">
                                    <div class=\"timeline-icon\"></div>
                                    <div class=\"timeline-body\">
                                        <div class=\"timeline-content\">
                                            <a class=\"name\" href=\"#\">User</a> commented on thread <a href=\"#/\">SiteSplat.com</a> and <a class=\"name\" href=\"#/\">Themesplat</a>
                                            <span class=\"time\">12 mins ago</span>
                                        </div>
                                    </div>
                                </li>

                                <li class=\"mini-timeline-indigo\">
                                    <div class=\"timeline-icon\"></div>
                                    <div class=\"timeline-body\">
                                        <div class=\"timeline-content\">
                                            <a class=\"name\" href=\"#\">User</a> commented on thread <a href=\"#/\">SiteSplat.com</a> and <a class=\"name\" href=\"#/\">Themesplat</a>
                                            <span class=\"time\">12 mins ago</span>
                                        </div>
                                    </div>
                                </li>
\t\t\t\t\t\tReady to use here -->\t
\t\t\t\t\t\t\t\t
                                <li class=\"mini-timeline-default\">
                                    <div class=\"timeline-body ml-n\">
                                        <div class=\"timeline-content\">
                                            <a href=\"\" class=\"btn btn-sm btn-default\" type=\"button\">";
        // line 156
        echo $this->env->getExtension('phpbb')->lang("SEE_MORE");
        echo "</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
\t";
        // line 164
        echo "\t\t
    </div>
</div>

";
        // line 168
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_main_front.html", 168)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_main_front.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 168,  396 => 164,  385 => 156,  357 => 130,  344 => 124,  338 => 120,  335 => 119,  318 => 113,  312 => 109,  309 => 108,  292 => 102,  286 => 98,  284 => 97,  278 => 93,  263 => 92,  251 => 83,  247 => 82,  235 => 73,  229 => 72,  219 => 64,  218 => 63,  213 => 61,  210 => 60,  204 => 56,  193 => 51,  187 => 50,  181 => 49,  167 => 47,  163 => 45,  157 => 44,  149 => 42,  146 => 41,  144 => 40,  138 => 39,  131 => 38,  128 => 37,  124 => 36,  121 => 35,  119 => 34,  107 => 33,  99 => 32,  88 => 30,  82 => 26,  77 => 25,  72 => 24,  66 => 21,  62 => 20,  53 => 14,  45 => 10,  43 => 9,  37 => 6,  31 => 2,  19 => 1,);
    }
}
