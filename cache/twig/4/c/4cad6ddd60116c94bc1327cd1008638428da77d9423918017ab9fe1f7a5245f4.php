<?php

/* ucp_main_bookmarks.html */
class __TwigTemplate_4cad6ddd60116c94bc1327cd1008638428da77d9423918017ab9fe1f7a5245f4 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_main_bookmarks.html", 1)->display($context);
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
        echo $this->env->getExtension('phpbb')->lang("BOOKMARKS_EXPLAIN");
        echo "</p>

";
        // line 8
        if ((isset($context["S_NO_DISPLAY_BOOKMARKS"]) ? $context["S_NO_DISPLAY_BOOKMARKS"] : null)) {
            // line 9
            echo "\t<div class=\"alert alert-info fade in\">
        <button data-dismiss=\"alert\" class=\"close\" type=\"button\" aria-hidden=\"true\"><i class=\"awe-remove-circle\"></i></button>
        ";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("BOOKMARKS_DISABLED");
            echo "
    </div> 
";
        } else {
            // line 14
            echo "
";
            // line 15
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()))) {
                // line 16
                echo "<div class=\"panel panel-forum\">
\t<div class=\"panel-heading\">
\t <i class=\"fa fa-bookmark\"></i>&nbsp;";
                // line 18
                echo $this->env->getExtension('phpbb')->lang("BOOKMARKS");
                echo "
\t</div>
\t<div class=\"panel-inner\">
\t<table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th data-class=\"expand\">";
                // line 24
                echo $this->env->getExtension('phpbb')->lang("TOPICS");
                echo "</th>
\t\t\t<th data-hide=\"phone\">";
                // line 25
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</th>
\t\t\t<th class=\"table-check\">";
                // line 26
                echo $this->env->getExtension('phpbb')->lang("MARK");
                echo "</th>
\t\t</tr> 
\t</thead>
\t<tbody>
\t";
                // line 30
                ob_start();
                echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_LOCKED");
                $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
                $context['definition']->set('VAR', $value);
                // line 31
                echo "\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
                    // line 32
                    echo "\t\t<tr>
\t\t\t";
                    // line 33
                    if ($this->getAttribute($context["topicrow"], "S_DELETED_TOPIC", array())) {
                        // line 34
                        echo "\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("DELETED_TOPIC");
                        echo "
\t\t\t";
                    } else {
                        // line 36
                        echo "\t\t\t<td>
\t\t\t    <span class=\"icon-wrapper\">
\t\t\t\t <i class=\"row-icon-font icon-moon-default2";
                        // line 38
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
\t\t\t\t</span>
\t\t\t\t<i class=\"row-icon-font-mini";
                        // line 40
                        if (($this->getAttribute($context["topicrow"], "TOPIC_TYPE", array()) == $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "VAR", array()))) {
                            echo " fa fa-lock forumview-lock";
                        }
                        echo "\" title=\"";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
                        echo "\"></i>
\t\t\t\t";
                        // line 41
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
\t\t\t\t";
                        // line 42
                        if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", array()))) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("TOPICS_ROW_NOT_APPROVED");
                            echo "\"><i class=\"fa fa-question-circle\"></i></a>";
                        }
                        // line 43
                        echo "\t\t\t\t";
                        if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", array());
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("TOPICS_ROW_REPORTED");
                            echo "\"><i class=\"fa fa-exclamation-circle\"></i></a>";
                        }
                        echo "<br />
\t\t\t\t";
                        // line 44
                        if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", array()))) {
                            // line 45
                            echo "\t\t\t\t    <ul class=\"pagination pagination-forum pagination-xs pull-right hidden-sm hidden-xs\">
\t\t\t\t\t\t";
                            // line 46
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                                // line 47
                                echo "\t\t\t\t\t\t ";
                                if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                                    // line 48
                                    echo "\t\t\t\t\t\t ";
                                } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                                    echo "<li class=\"active\">";
                                    echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                    echo "</li>
\t\t\t\t\t\t ";
                                } elseif ($this->getAttribute(                                // line 49
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                                    echo "<li class=\"ellipsis\"><a>";
                                    echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                                    echo "</a></li>
\t\t\t\t\t\t ";
                                } elseif ($this->getAttribute(                                // line 50
$context["pagination"], "S_IS_NEXT", array())) {
                                    // line 51
                                    echo "\t\t\t\t\t\t";
                                } else {
                                    // line 52
                                    echo "\t\t\t\t\t\t <li><a href=\"";
                                    echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                    echo "</a></li>
\t\t\t\t\t\t";
                                }
                                // line 54
                                echo "\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 55
                            echo "\t\t\t\t\t</ul>\t\t
\t\t\t    ";
                        }
                        // line 57
                        echo "\t\t\t\t";
                        if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                            echo "<i class=\"fa fa-paper-clip fa-flip-horizontal\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("ATTACH_FORUM");
                            echo "\"></i>";
                        }
                        // line 58
                        echo "\t\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo "&nbsp;";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", array());
                        echo "<small>&nbsp;";
                        echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", array());
                        echo "</small>
\t\t\t</td>
\t\t\t<td class=\"center\">
\t\t\t ";
                        // line 61
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo "&nbsp;";
                        echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
                        echo "
\t\t\t ";
                        // line 62
                        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                            echo "<a title=\"";
                            echo $this->env->getExtension('phpbb')->lang("FORUMLIST_LASTPOST");
                            echo "\" href=\"";
                            echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                            echo "\"><i class=\"fa fa-sign-out\"></i></a>";
                        }
                        // line 63
                        echo "\t\t\t <br /><small>&nbsp;";
                        echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
                        echo "</small>
\t\t\t</td>
\t\t\t";
                    }
                    // line 66
                    echo "\t\t\t<td class=\"table-check\"><div class=\"checker\"><input type=\"checkbox\" name=\"t[";
                    echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
                    echo "]\" id=\"t";
                    echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
                    echo "\"><label for=\"t";
                    echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
                    echo "\"></label></div></td>
\t\t</tr>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "\t</tbody>
 </table>
 </div>
</div>
\t
\t<div class=\"table_options\">
            <div class=\"pull-left\">
                <div class=\"btn-group\">
\t\t\t\t    ";
                // line 77
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array())) &&  !(isset($context["S_NO_DISPLAY_BOOKMARKS"]) ? $context["S_NO_DISPLAY_BOOKMARKS"] : null))) {
                    // line 78
                    echo "                    <div class=\"dropdown\">
                        <button href=\"#\" data-toggle=\"dropdown\" class=\"btn btn-default\" title=\"\"><i class=\"fa fa-check-square-o\"></i>&nbsp;<span class=\"caret\"></span></button>
\t\t\t\t\t\t <ul class=\"dropdown-menu\">
                            <li><a href=\"#\" onclick=\"marklist('ucp', '', true); return false;\" title=\"\"><i class=\"fa fa-check-square-o\"></i>";
                    // line 81
                    echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                    echo "</a></li>
                            <li><a href=\"#\" onclick=\"marklist('ucp', '', false); return false;\" title=\"\"><i class=\"fa fa-square-o\"></i>";
                    // line 82
                    echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                    echo "</a></li>
                          </ul> 
\t\t\t\t    <button class=\"btn btn-default\" type=\"submit\" name=\"unbookmark\" title=\"";
                    // line 84
                    echo $this->env->getExtension('phpbb')->lang("REMOVE_BOOKMARK_MARKED");
                    echo "\"><i class=\"fa fa-bookmark\"></i></button>
\t\t\t\t   </div>
                        ";
                    // line 86
                    echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                    echo "
                    ";
                }
                // line 87
                echo "\t\t  
\t\t        </div> 
           </div>
          <div class=\"clearfix\">
           <ul class=\"pagination pagination-sm pull-right\">
\t\t\t\t <li><a>";
                // line 92
                echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
                echo "</a></li>
\t\t\t\t";
                // line 93
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                    // line 94
                    echo "\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_main_bookmarks.html", 94)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 95
                    echo "\t\t\t\t";
                } else {
                    // line 96
                    echo "\t\t\t\t\t<li class=\"active\"><a>";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "</a></li>\t
\t\t\t\t";
                }
                // line 98
                echo "\t\t\t </ul> 
         </div>
    </div>
\t
";
            } else {
                // line 103
                echo "\t<div class=\"alert alert-info fade in\">
        <button data-dismiss=\"alert\" class=\"close\" type=\"button\" aria-hidden=\"true\"><i class=\"awe-remove-circle\"></i></button>
        ";
                // line 105
                echo $this->env->getExtension('phpbb')->lang("NO_BOOKMARKS");
                echo "
    </div> 
";
            }
            // line 108
            echo "
";
        }
        // line 110
        echo "</div>
</fieldset>
</form>
";
        // line 113
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_main_bookmarks.html", 113)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_main_bookmarks.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 113,  374 => 110,  370 => 108,  364 => 105,  360 => 103,  353 => 98,  347 => 96,  344 => 95,  331 => 94,  329 => 93,  325 => 92,  318 => 87,  313 => 86,  308 => 84,  303 => 82,  299 => 81,  294 => 78,  292 => 77,  282 => 69,  268 => 66,  261 => 63,  253 => 62,  247 => 61,  236 => 58,  229 => 57,  225 => 55,  219 => 54,  211 => 52,  208 => 51,  206 => 50,  200 => 49,  193 => 48,  190 => 47,  186 => 46,  183 => 45,  181 => 44,  170 => 43,  162 => 42,  150 => 41,  142 => 40,  119 => 38,  115 => 36,  109 => 34,  107 => 33,  104 => 32,  99 => 31,  94 => 30,  87 => 26,  83 => 25,  79 => 24,  70 => 18,  66 => 16,  64 => 15,  61 => 14,  55 => 11,  51 => 9,  49 => 8,  44 => 6,  40 => 5,  31 => 2,  19 => 1,);
    }
}
