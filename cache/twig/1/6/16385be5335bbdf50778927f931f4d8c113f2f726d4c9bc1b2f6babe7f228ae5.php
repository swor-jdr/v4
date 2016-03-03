<?php

/* ucp_main_subscribed.html */
class __TwigTemplate_16385be5335bbdf50778927f931f4d8c113f2f726d4c9bc1b2f6babe7f228ae5 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_main_subscribed.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<form id=\"ucp\" method=\"post\" action=\"";
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">
<div class=\"tab-pane active\">
<fieldset class=\"framed-ucp\">
  <legend>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</legend>
\t<p>";
        // line 6
        echo $this->env->getExtension('phpbb')->lang("WATCHED_EXPLAIN");
        echo "</p>

";
        // line 8
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forumrow", array()))) {
            // line 9
            echo "<div class=\"panel panel-forum\">
\t<div class=\"panel-heading\">
\t <i class=\"fa fa-eye\"></i> ";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("WATCHED_FORUMS");
            echo "
\t</div>
\t<div class=\"panel-inner\">
\t<table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th data-class=\"expand\">";
            // line 17
            echo $this->env->getExtension('phpbb')->lang("FORUMS");
            echo "</th>
\t\t\t<th class=\"large26\" data-hide=\"phone\">";
            // line 18
            echo $this->env->getExtension('phpbb')->lang("LAST_POST");
            echo "</th>
\t\t    <th class=\"table-check\">";
            // line 19
            echo $this->env->getExtension('phpbb')->lang("MARK");
            echo "</th>
\t\t</tr> 
\t</thead>
\t<tbody>
\t";
            // line 23
            ob_start();
            echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_LOCKED");
            $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
            $context['definition']->set('VAR', $value);
            // line 24
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forumrow", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
                // line 25
                echo "\t\t<tr>
\t\t\t<td title=\"";
                // line 26
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                echo "\" >
\t\t\t<span class=\"icon-wrapper\">
\t\t\t <i class=\"row-icon-font icon-moon-default";
                // line 28
                if ($this->getAttribute((isset($context["topicrow"]) ? $context["topicrow"] : null), "S_UNREAD_TOPIC", array())) {
                    echo " forum-unread";
                } else {
                    echo " forum-read";
                }
                echo "\" title=\"";
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                echo "\"></i>
\t\t\t</span>
\t\t\t <i class=\"row-icon-font-mini";
                // line 30
                if (($this->getAttribute((isset($context["topicrow"]) ? $context["topicrow"] : null), "TOPIC_TYPE", array()) == $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "VAR", array()))) {
                    echo " fa fa-lock forumview-lock";
                }
                echo "\" title=\"";
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                echo "\"></i>
\t\t\t <a class=\"topictitle\" href=\"";
                // line 31
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                echo "\">";
                echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                echo "</a><br />";
                echo $this->getAttribute($context["forumrow"], "FORUM_DESC", array());
                echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t ";
                // line 34
                if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", array())) {
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo "&nbsp;";
                    echo $this->getAttribute($context["forumrow"], "LAST_POST_AUTHOR_FULL", array());
                    echo "&nbsp;<a title=\"";
                    echo $this->env->getExtension('phpbb')->lang("FORUMLIST_LASTPOST");
                    echo "\" href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                    echo "\"><i class=\"fa fa-sign-out\"></i></a> 
\t\t\t <br /><small>";
                    // line 35
                    echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", array());
                    echo "</small>
\t\t\t ";
                } else {
                    // line 36
                    echo $this->env->getExtension('phpbb')->lang("NO_POSTS");
                    echo "<br />";
                }
                // line 37
                echo "\t\t\t</td>
\t\t\t<td class=\"table-check\"><div class=\"checker\"><input type=\"checkbox\" name=\"f[";
                // line 38
                echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                echo "]\" id=\"f";
                echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                echo "\"><label for=\"f";
                echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                echo "\"></label></div></td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t</tbody>
 </table>
 </div>
</div>
\t
\t";
        } elseif (        // line 46
(isset($context["S_FORUM_NOTIFY"]) ? $context["S_FORUM_NOTIFY"] : null)) {
            // line 47
            echo "\t<div class=\"alert alert-info fade in\">
        <button data-dismiss=\"alert\" class=\"close\" type=\"button\" aria-hidden=\"true\"><i class=\"awe-remove-circle\"></i></button>
        <i class=\"fa fa-warning\"></i><strong>&nbsp;";
            // line 49
            echo $this->env->getExtension('phpbb')->lang("INFO_BOX");
            echo "</strong>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("NO_WATCHED_FORUMS");
            echo "
    </div> 
    ";
        }
        // line 52
        echo "
";
        // line 53
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()))) {
            // line 54
            echo "<div class=\"panel panel-forum\">
\t<div class=\"panel-heading\">
\t <i class=\"fa fa-thumb-tack\"></i>&nbsp;";
            // line 56
            echo $this->env->getExtension('phpbb')->lang("WATCHED_TOPICS");
            echo "
\t</div>
\t<div class=\"panel-inner\">
\t<table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th data-class=\"expand\">";
            // line 62
            echo $this->env->getExtension('phpbb')->lang("TOPICS");
            echo "</th>
\t\t\t<th data-hide=\"phone\">";
            // line 63
            echo $this->env->getExtension('phpbb')->lang("LAST_POST");
            echo "</th>
\t\t\t<th class=\"table-check\">";
            // line 64
            echo $this->env->getExtension('phpbb')->lang("MARK");
            echo "</th>
\t\t</tr> 
\t</thead>
\t<tbody>
\t";
            // line 68
            ob_start();
            echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_LOCKED");
            $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
            $context['definition']->set('VAR', $value);
            // line 69
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
                // line 70
                echo "\t\t<tr>
\t\t    <td>
\t\t\t ";
                // line 72
                if (($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array()) && (isset($context["S_TOPIC_ICONS"]) ? $context["S_TOPIC_ICONS"] : null))) {
                    echo "<i class=\"topic-icon\" style=\"background-image: url(";
                    echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                    echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array());
                    echo "); background-repeat: no-repeat;\" title=\"";
                    echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
                    echo "\"></i>";
                }
                // line 73
                echo "\t\t\t<span class=\"icon-wrapper\">
\t\t\t <i class=\"row-icon-font icon-moon-default2";
                // line 74
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE", array()) == 2)) {
                    echo " icon-moon-voice2";
                } elseif (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE", array()) == 3)) {
                    echo " icon-moon-podcast2";
                } elseif (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE", array()) == 1)) {
                    echo " icon-moon-pushpin2";
                } elseif ($this->getAttribute($context["topicrow"], "S_HAS_POLL", array())) {
                    echo " icon-moon-poll";
                }
                if ($this->getAttribute($context["topicrow"], "S_TOPIC_MOVED", array())) {
                    echo " icon-moon-moved";
                }
                if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array())) {
                    echo " forum-unread";
                } else {
                    echo " forum-read";
                }
                echo "\" title=\"";
                echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
                echo "\"></i>
\t\t\t</span>
\t\t\t <i class=\"row-icon-font-mini";
                // line 76
                if (($this->getAttribute($context["topicrow"], "TOPIC_TYPE", array()) == $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "VAR", array()))) {
                    echo " fa fa-lock forumview-lock";
                }
                echo "\" title=\"";
                echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
                echo "\"></i>
\t\t\t ";
                // line 77
                if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", array());
                    echo "\"><i class=\"fa fa-asterisk\"></i></a>";
                }
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
                echo "\" class=\"topictitle\">&nbsp;";
                echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", array());
                echo "</a>
\t\t\t ";
                // line 78
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", array()))) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                    echo "\"><i class=\"fa fa-question-circle\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("TOPICS_ROW_NOT_APPROVED");
                    echo "\"></i></a>";
                }
                // line 79
                echo "\t\t\t ";
                if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("TOPICS_ROW_REPORTED");
                    echo "\"><i class=\"fa fa-exclamation-circle\"></i></a>";
                }
                echo "<br />
\t\t\t ";
                // line 80
                if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", array()))) {
                    // line 81
                    echo "\t\t\t\t    <ul class=\"pagination pagination-forum pagination-xs pull-right hidden-sm hidden-xs\">
\t\t\t\t\t\t";
                    // line 82
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                        // line 83
                        echo "\t\t\t\t\t\t ";
                        if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                            // line 84
                            echo "\t\t\t\t\t\t ";
                        } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                            echo "<li class=\"active\">";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                            echo "</li>
\t\t\t\t\t\t ";
                        } elseif ($this->getAttribute(                        // line 85
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                            echo "<li class=\"ellipsis\"><a>";
                            echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                            echo "</a></li>
\t\t\t\t\t\t ";
                        } elseif ($this->getAttribute(                        // line 86
$context["pagination"], "S_IS_NEXT", array())) {
                            // line 87
                            echo "\t\t\t\t\t\t";
                        } else {
                            // line 88
                            echo "\t\t\t\t\t\t <li><a href=\"";
                            echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                            echo "\">";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                            echo "</a></li>
\t\t\t\t\t\t";
                        }
                        // line 90
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 91
                    echo "\t\t\t\t\t</ul>\t\t
\t\t\t    ";
                }
                // line 93
                echo "\t\t\t ";
                if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                    echo "<i class=\"fa fa-paper-clip fa-flip-horizontal\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("ATTACH_FORUM");
                    echo "\"></i>";
                }
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo "&nbsp;";
                echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", array());
                echo " <small>";
                echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", array());
                echo "</small>
\t\t\t</td>
\t\t\t<td>";
                // line 95
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo "&nbsp;";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
                echo "
\t\t\t ";
                // line 96
                if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                    echo "<a title=\"";
                    echo $this->env->getExtension('phpbb')->lang("FORUMLIST_LASTPOST");
                    echo "\" href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                    echo "\"><i class=\"fa fa-sign-out\"></i></a>";
                }
                // line 97
                echo "\t\t\t <br /><small>";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
                echo "</small>
\t\t\t</td>
\t\t\t<td class=\"table-check\">
\t\t\t <div class=\"checker\">
\t\t\t  <label for=\"t";
                // line 101
                echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
                echo "\"></label>
\t\t\t   <input type=\"checkbox\" name=\"t[";
                // line 102
                echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
                echo "]\" id=\"t";
                echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
                echo "\"/>
\t\t\t </div>
\t\t\t</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "\t</tbody>
 </table>
 </div>
 </div>
\t
\t<div class=\"clearfix\">
            <div class=\"pull-left\">
                <div class=\"btn-group\">
\t\t\t\t    ";
            // line 115
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array())) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forumrow", array())))) {
                // line 116
                echo "                    <div class=\"dropdown\">
                        <button href=\"#\" data-toggle=\"dropdown\" class=\"btn btn-default\" title=\"\"><i class=\"fa fa-check-square-o\"></i>&nbsp;<span class=\"caret\"></span></button>
\t\t\t\t\t\t <ul class=\"dropdown-menu\">
                            <li><a href=\"#\" onclick=\"marklist('ucp', 't', true); marklist('ucp', 'f', true); return false;\" title=\"\"><i class=\"fa fa-check-square-o\"></i>";
                // line 119
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</a></li>
                            <li><a href=\"#\" onclick=\"marklist('ucp', 't', false); marklist('ucp', 'f', false); return false;\" title=\"\"><i class=\"fa fa-square-o\"></i>";
                // line 120
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a></li>
                          </ul> 
\t\t\t\t    <button class=\"btn btn-default\" type=\"submit\" name=\"unwatch\" title=\"";
                // line 122
                echo $this->env->getExtension('phpbb')->lang("UNWATCH_MARKED");
                echo "\"><i class=\"fa fa-eye-slash\"></i></button>
\t\t\t\t   </div>
                        ";
                // line 124
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
                    ";
            }
            // line 125
            echo "\t\t  
\t\t        </div> 
           </div>

            <ul class=\"pagination pagination-sm pull-right\">
\t\t\t\t <li><a>";
            // line 130
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo "</a></li>
\t\t\t\t";
            // line 131
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 132
                echo "\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "ucp_main_subscribed.html", 132)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 133
                echo "\t\t\t\t";
            } else {
                // line 134
                echo "\t\t\t\t\t<li class=\"active\"><a>";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "</a></li>\t
\t\t\t\t";
            }
            // line 136
            echo "\t\t\t</ul> 

    </div>
\t\t
";
        } elseif (        // line 140
(isset($context["S_TOPIC_NOTIFY"]) ? $context["S_TOPIC_NOTIFY"] : null)) {
            // line 141
            echo "\t<div class=\"alert alert-info fade in\">
        <button data-dismiss=\"alert\" class=\"close\" type=\"button\" aria-hidden=\"true\"><i class=\"awe-remove-circle\"></i></button>
        <i class=\"fa fa-warning\"></i><strong>&nbsp;";
            // line 143
            echo $this->env->getExtension('phpbb')->lang("INFO_BOX");
            echo "</strong>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("NO_WATCHED_TOPICS");
            echo "
    </div> 
";
        }
        // line 146
        echo "
</div>
</fieldset>
</form>

";
        // line 151
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_main_subscribed.html", 151)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_main_subscribed.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  504 => 151,  497 => 146,  489 => 143,  485 => 141,  483 => 140,  477 => 136,  471 => 134,  468 => 133,  455 => 132,  453 => 131,  449 => 130,  442 => 125,  437 => 124,  432 => 122,  427 => 120,  423 => 119,  418 => 116,  416 => 115,  406 => 107,  393 => 102,  389 => 101,  381 => 97,  373 => 96,  367 => 95,  352 => 93,  348 => 91,  342 => 90,  334 => 88,  331 => 87,  329 => 86,  323 => 85,  316 => 84,  313 => 83,  309 => 82,  306 => 81,  304 => 80,  293 => 79,  285 => 78,  273 => 77,  265 => 76,  242 => 74,  239 => 73,  230 => 72,  226 => 70,  221 => 69,  216 => 68,  209 => 64,  205 => 63,  201 => 62,  192 => 56,  188 => 54,  186 => 53,  183 => 52,  175 => 49,  171 => 47,  169 => 46,  162 => 41,  149 => 38,  146 => 37,  142 => 36,  137 => 35,  126 => 34,  116 => 31,  108 => 30,  97 => 28,  92 => 26,  89 => 25,  84 => 24,  79 => 23,  72 => 19,  68 => 18,  64 => 17,  55 => 11,  51 => 9,  49 => 8,  44 => 6,  40 => 5,  31 => 2,  19 => 1,);
    }
}
