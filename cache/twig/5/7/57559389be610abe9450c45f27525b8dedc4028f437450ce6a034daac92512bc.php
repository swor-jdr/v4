<?php

/* search_results.html */
class __TwigTemplate_57559389be610abe9450c45f27525b8dedc4028f437450ce6a034daac92512bc extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "search_results.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"side-segment\"><h3>";
        if ((isset($context["SEARCH_TITLE"]) ? $context["SEARCH_TITLE"] : null)) {
            echo (isset($context["SEARCH_TITLE"]) ? $context["SEARCH_TITLE"] : null);
        } else {
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
        }
        if ((isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null)) {
            echo ": <a href=\"";
            echo (isset($context["U_SEARCH_WORDS"]) ? $context["U_SEARCH_WORDS"] : null);
            echo "\">";
            echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
            echo "</a>";
        }
        echo "</h3></div>
";
        // line 3
        if ((isset($context["SEARCHED_QUERY"]) ? $context["SEARCHED_QUERY"] : null)) {
            echo "<p>";
            echo $this->env->getExtension('phpbb')->lang("SEARCHED_QUERY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "&nbsp;<strong>";
            echo (isset($context["SEARCHED_QUERY"]) ? $context["SEARCHED_QUERY"] : null);
            echo "</strong></p>";
        }
        // line 4
        if ((isset($context["IGNORED_WORDS"]) ? $context["IGNORED_WORDS"] : null)) {
            echo "<p>";
            echo $this->env->getExtension('phpbb')->lang("IGNORED_TERMS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "&nbsp;<span class=\"badge badge-important\">";
            echo (isset($context["IGNORED_WORDS"]) ? $context["IGNORED_WORDS"] : null);
            echo "</span></p>";
        }
        // line 5
        if ((isset($context["PHRASE_SEARCH_DISABLED"]) ? $context["PHRASE_SEARCH_DISABLED"] : null)) {
            echo "<p><strong>";
            echo $this->env->getExtension('phpbb')->lang("PHRASE_SEARCH_DISABLED");
            echo "</strong></p>";
        }
        // line 6
        echo "
";
        // line 7
        if ((isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null)) {
            // line 8
            echo "\t<p><i class=\"fa fa-chevron-left\"></i>&nbsp;<a href=\"";
            echo (isset($context["U_SEARCH_TOPIC"]) ? $context["U_SEARCH_TOPIC"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "&nbsp;";
            echo (isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null);
            echo "</a></p>
";
        } else {
            // line 10
            echo "\t<p><i class=\"fa fa-chevron-left\"></i>&nbsp;<a href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("GO_TO_SEARCH_ADV");
            echo "</a></p>
";
        }
        // line 12
        echo "
";
        // line 13
        // line 14
        echo "
";
        // line 15
        if ((((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null)) || (isset($context["TOTAL_MATCHES"]) ? $context["TOTAL_MATCHES"] : null)) || (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null))) {
            // line 16
            echo "<form method=\"post\" action=\"";
            echo (isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null);
            echo "\">
 <div class=\"row\">
\t
\t<div class=\"col-md-4 col-xs-7\">
\t";
            // line 20
            if ((isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null)) {
                // line 21
                echo "\t<div class=\"pull-left\">
\t";
                // line 22
                if ((isset($context["SEARCH_IN_RESULTS"]) ? $context["SEARCH_IN_RESULTS"] : null)) {
                    // line 23
                    echo "\t<div class=\"input-group input-group-sm input-icon left\">
\t  <i class=\"fa fa-search\"></i>
      <input type=\"text\" class=\"form-control\" size=\"\" name=\"add_keywords\" id=\"add_keywords\" placeholder=\"";
                    // line 25
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_IN_RESULTS");
                    echo "\">
      <div class=\"input-group-btn\">
        <button class=\"btn btn-default\" type=\"submit\" value=\"";
                    // line 27
                    echo $this->env->getExtension('phpbb')->lang("SEARCH");
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH");
                    echo "</button>
\t  </div>
    </div>
\t";
                }
                // line 31
                echo "\t</div>
\t";
            }
            // line 33
            echo "\t</div>
\t
\t<div class=\"col-md-8\">
\t<div class=\"pull-right\">
     <ul class=\"pagination pagination-sm hidden-xs\">
\t\t <li class=\"active\"><a>";
            // line 38
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
            echo "</a></li>
\t\t";
            // line 39
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 40
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 40)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 41
                echo "\t\t";
            } else {
                // line 42
                echo "\t\t\t<li class=\"active\"><a>";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "</a></li>\t
\t\t";
            }
            // line 44
            echo "     </ul>
\t
\t<div class=\"visible-xs\"> 
     <ul class=\"pagination pagination-sm\">
\t";
            // line 48
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 49
                echo "\t\t\t";
                $location = "pagination_mobile.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination_mobile.html", "search_results.html", 49)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 50
                echo "\t\t";
            } else {
                // line 51
                echo "\t\t\t<li class=\"active\"><a>";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "</a></li>\t
\t\t";
            }
            // line 53
            echo "\t</ul>
\t</div>
   </div>
   </div>
\t
 </div>
</form>
";
        }
        // line 61
        echo "
";
        // line 62
        if ((isset($context["S_SHOW_TOPICS"]) ? $context["S_SHOW_TOPICS"] : null)) {
            // line 63
            echo "\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()))) {
                // line 64
                echo "\t<div class=\"panel panel-forum\">
\t<div class=\"panel-heading\">
\t <i class=\"fa fa-bolt\"></i>&nbsp;";
                // line 66
                echo $this->env->getExtension('phpbb')->lang("TOPICS");
                echo "
\t</div>
\t<div class=\"panel-inner\">
    <table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th data-class=\"expand\">";
                // line 72
                echo $this->env->getExtension('phpbb')->lang("TITLE");
                echo "</th>
\t\t\t<th class=\"large110\" data-hide=\"phone\">";
                // line 73
                echo $this->env->getExtension('phpbb')->lang("TOPICS_POSTS_STATISTICS");
                echo "</th>
\t\t\t<th class=\"large21\" data-hide=\"phone\">";
                // line 74
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</th>
\t\t</tr>
\t</thead>\t\t
\t<tbody>
\t";
                // line 78
                ob_start();
                echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_LOCKED");
                $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
                $context['definition']->set('VAR', $value);
                // line 79
                echo "\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                    // line 80
                    echo "\t\t";
                    // line 81
                    echo "\t\t<tr>
\t\t\t<td>
\t\t\t";
                    // line 83
                    if ($this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG", array())) {
                        echo "<i class=\"topic-icon\" style=\"background-image: url(";
                        echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                        echo $this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG", array());
                        echo "); background-repeat: no-repeat;\" title=\"";
                        echo $this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG_ALT", array());
                        echo "\"></i>";
                    }
                    // line 84
                    echo "\t\t\t<span class=\"icon-wrapper\">
\t\t\t\t<i class=\"row-icon-font icon-moon-default2";
                    // line 85
                    if (($this->getAttribute($context["searchresults"], "S_TOPIC_TYPE", array()) == 2)) {
                        echo " icon-moon-voice2";
                    } elseif (($this->getAttribute($context["searchresults"], "S_TOPIC_TYPE", array()) == 3)) {
                        echo " icon-moon-podcast2";
                    } elseif (($this->getAttribute($context["searchresults"], "S_TOPIC_TYPE", array()) == 1)) {
                        echo " icon-moon-pushpin2";
                    } elseif ($this->getAttribute($context["searchresults"], "S_HAS_POLL", array())) {
                        echo " icon-moon-poll";
                    }
                    if ($this->getAttribute($context["searchresults"], "S_UNREAD_TOPIC", array())) {
                        echo " forum-unread";
                    } else {
                        echo " forum-read";
                    }
                    echo "\" title=\"";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_FOLDER_IMG_ALT", array());
                    echo "\"></i>
\t\t\t</span>
\t\t\t\t<i class=\"row-icon-font-mini";
                    // line 87
                    if (($this->getAttribute($context["searchresults"], "TOPIC_TYPE", array()) == $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "VAR", array()))) {
                        echo " fa fa-lock forumview-lock";
                    }
                    echo "\" title=\"";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG_ALT", array());
                    echo "\"></i>
\t\t\t<span class=\"desc-wrapper\">\t
\t\t\t";
                    // line 89
                    // line 90
                    echo "\t\t\t\t";
                    if (($this->getAttribute($context["searchresults"], "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_NEWEST_POST", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("VIEW_FIRST_UNREAD");
                        echo "\"><i class=\"fa fa-asterisk\"></i></a>";
                    }
                    // line 91
                    echo "\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                    echo "\" class=\"topictitle\">";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", array());
                    echo "</a> ";
                    if ($this->getAttribute($context["searchresults"], "ATTACH_ICON_IMG", array())) {
                        echo "<i class=\"fa fa-paperclip fa-flip-horizontal\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"";
                        echo $this->env->getExtension('phpbb')->lang("ATTACH_FORUM");
                        echo "\"></i>";
                    }
                    // line 92
                    echo "\t\t\t\t";
                    if (($this->getAttribute($context["searchresults"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["searchresults"], "S_POSTS_UNAPPROVED", array()))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_QUEUE", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("TOPICS_ROW_NOT_APPROVED");
                        echo "\"><i class=\"fa fa-question-circle\"></i></a>";
                    }
                    // line 93
                    echo "\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_TOPIC_REPORTED", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_REPORT", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("TOPICS_ROW_REPORTED");
                        echo "\"><i class=\"fa fa-exclamation-circle text-danger\"></i></a>";
                    }
                    echo "<br />
\t\t\t\t";
                    // line 94
                    if (twig_length_filter($this->env, $this->getAttribute($context["searchresults"], "pagination", array()))) {
                        // line 95
                        echo "\t\t\t\t    <ul class=\"pagination pagination-forum pagination-xs pull-right hidden-sm hidden-xs\">
\t\t\t\t\t\t";
                        // line 96
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["searchresults"], "pagination", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                            // line 97
                            echo "\t\t\t\t\t\t ";
                            if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                                // line 98
                                echo "\t\t\t\t\t\t ";
                            } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                                echo "<li class=\"active\">";
                                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                echo "</li>
\t\t\t\t\t\t ";
                            } elseif ($this->getAttribute(                            // line 99
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                                echo "<li class=\"ellipsis\"><a>";
                                echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                                echo "</a></li>
\t\t\t\t\t\t ";
                            } elseif ($this->getAttribute(                            // line 100
$context["pagination"], "S_IS_NEXT", array())) {
                                // line 101
                                echo "\t\t\t\t\t\t";
                            } else {
                                // line 102
                                echo "\t\t\t\t\t\t <li><a href=\"";
                                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                                echo "\">";
                                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                echo "</a></li>
\t\t\t\t\t\t";
                            }
                            // line 104
                            echo "\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 105
                        echo "\t\t\t\t\t</ul>\t\t
\t\t\t    ";
                    }
                    // line 107
                    echo "\t\t\t\t";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo "&nbsp;";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_AUTHOR_FULL", array());
                    echo "&nbsp;&#45;&nbsp;<small>";
                    echo $this->getAttribute($context["searchresults"], "FIRST_POST_TIME", array());
                    echo "</small>
\t\t\t\t";
                    // line 108
                    if ( !$this->getAttribute($context["searchresults"], "S_TOPIC_GLOBAL", array())) {
                        echo "<i class=\"fa fa-comments\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb')->lang("IN");
                        echo "&nbsp;<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", array());
                        echo "\">";
                        echo $this->getAttribute($context["searchresults"], "FORUM_TITLE", array());
                        echo "</a>";
                    } else {
                        echo "&nbsp;&#40;";
                        echo $this->env->getExtension('phpbb')->lang("GLOBAL");
                        echo "&#41;";
                    }
                    // line 109
                    echo "\t\t\t";
                    // line 110
                    echo "\t\t\t</span>
\t\t\t</td>
\t\t\t<td class=\"stats-col\"><span class=\"stats-wrapper\">";
                    // line 112
                    echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", array());
                    echo "&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("REPLIES");
                    echo "<br />&nbsp;";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_VIEWS", array());
                    echo "&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("VIEWS");
                    echo "</span></td>
\t\t\t<td class=\"center\">";
                    // line 113
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo "&nbsp;";
                    echo $this->getAttribute($context["searchresults"], "LAST_POST_AUTHOR_FULL", array());
                    echo "
\t\t\t";
                    // line 114
                    if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                        echo "<a rel=\"tooltip\" data-placement=\"right\" data-original-title=\"";
                        echo $this->env->getExtension('phpbb')->lang("FORUMLIST_LASTPOST");
                        echo "\" href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_LAST_POST", array());
                        echo "\"><i class=\"mobile-post fa fa-sign-out\"></i></a>";
                    }
                    // line 115
                    echo "\t\t\t<br /><small>";
                    echo $this->getAttribute($context["searchresults"], "LAST_POST_TIME", array());
                    echo "</small>
\t\t\t</td>
\t\t</tr>
\t\t";
                    // line 118
                    // line 119
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                echo "\t\t </tbody>
\t</table>
\t</div>
    </div>
\t
\t";
            } else {
                // line 126
                echo "\t<div class=\"alert alert-info fade in\">
       <button data-dismiss=\"alert\" class=\"close\" type=\"button\" aria-hidden=\"true\"><i class=\"awe-remove-circle\"></i></button>
       <i class=\"fa fa-warning\"></i> <strong>";
                // line 128
                echo $this->env->getExtension('phpbb')->lang("INFO_BOX");
                echo "</strong>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_RESULTS");
                echo "
    </div> 
\t";
            }
            // line 131
            echo "
";
        } else {
            // line 133
            echo "
";
            // line 134
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                // line 135
                // line 136
                echo "<div class=\"clearfix\">
\t<div class=\"well well-sm\">
\t";
                // line 138
                if ($this->getAttribute($context["searchresults"], "S_IGNORE_POST", array())) {
                    // line 139
                    echo "\t\t<div class=\"postbody\">
\t\t\t";
                    // line 140
                    echo $this->getAttribute($context["searchresults"], "L_IGNORE_POST", array());
                    echo "
\t\t</div>
\t";
                } else {
                    // line 143
                    echo "\t\t<div class=\"pull-left\">
\t\t\t<h4><a href=\"";
                    // line 144
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "POST_SUBJECT", array());
                    echo "</a></h4>
\t\t";
                    // line 145
                    echo "\t
\t\t   <span class=\"text-muted\"><i class=\"fa fa-user\"></i>&nbsp;";
                    // line 146
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo "&nbsp;";
                    echo $this->getAttribute($context["searchresults"], "POST_AUTHOR_FULL", array());
                    echo "&nbsp;&#166;&nbsp;<i class=\"fa fa-clock-o\"></i>&nbsp;";
                    echo $this->getAttribute($context["searchresults"], "POST_DATE", array());
                    echo "&nbsp;&#166;</span> 
\t\t";
                    // line 147
                    if ($this->getAttribute($context["searchresults"], "FORUM_TITLE", array())) {
                        // line 148
                        echo "           <span class=\"text-muted\"><i class=\"fa fa-folder\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb')->lang("FORUM");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "&nbsp;<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", array());
                        echo "\">";
                        echo $this->getAttribute($context["searchresults"], "FORUM_TITLE", array());
                        echo "</a>&nbsp;&#166;&nbsp;<i class=\"fa fa-folder-open\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb')->lang("TOPIC");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "&nbsp;<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                        echo "\">";
                        echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", array());
                        echo "</a>&nbsp;&#166;</span> 
\t\t\t";
                    } else {
                        // line 150
                        echo "\t\t\t<span class=\"text-muted\"><i class=\"fa fa-plus\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb')->lang("GLOBAL");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "&nbsp;<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                        echo "\">";
                        echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", array());
                        echo "</a>&nbsp;&#166;</span> 
\t\t\t";
                    }
                    // line 152
                    echo "\t\t\t<span class=\"text-muted\"><i class=\"fa fa-comments\"></i>&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "&nbsp;<strong>";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", array());
                    echo "</strong>&nbsp;&#166;&nbsp;<i class=\"fa fa-eye\"></i>&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("VIEWS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "&nbsp;<strong>";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_VIEWS", array());
                    echo "</strong></span> 
\t\t";
                    // line 153
                    // line 154
                    echo "\t\t</div>
\t\t<div class=\"space10\"></div>
\t\t\t<div class=\"content\"><p>";
                    // line 156
                    echo $this->getAttribute($context["searchresults"], "MESSAGE", array());
                    echo "</p></div>
\t";
                }
                // line 158
                echo "
\t";
                // line 159
                if ( !$this->getAttribute($context["searchresults"], "S_IGNORE_POST", array())) {
                    // line 160
                    echo "\t<div class=\"clearfix\">
\t\t<div class=\"pull-right\"><a href=\"";
                    // line 161
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("JUMP_TO_POST");
                    echo "</a></div>
\t</div>
\t";
                }
                // line 164
                echo "    </div>
\t</div>
\t";
                // line 166
                // line 167
                echo "\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 168
                echo "\t<div class=\"alert alert-info fade in\">
       <button data-dismiss=\"alert\" class=\"close\" type=\"button\" aria-hidden=\"true\"><i class=\"awe-remove-circle\"></i></button>
       <i class=\"fa fa-warning\"></i><strong>";
                // line 170
                echo $this->env->getExtension('phpbb')->lang("INFO_BOX");
                echo "</strong>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_RESULTS");
                echo "
    </div> 
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 174
        echo "

";
        // line 176
        if (((((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()))) || (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null)) || (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null)) || (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null))) {
            echo "  
   <div class=\"pull-right\">
     <ul class=\"pagination pagination-sm hidden-xs\">
\t    ";
            // line 179
            if (((isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null) || (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null))) {
                // line 180
                echo "\t     <li><a title=\"\" data-original-title=\"\" href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\">";
                echo $this->env->getExtension('phpbb')->lang("OPTIONS");
                echo "</a></li>
\t    ";
            }
            // line 182
            echo "\t\t <li class=\"active\"><a>";
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
            echo "</a></li>
\t\t";
            // line 183
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 184
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 184)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 185
                echo "\t\t";
            } else {
                // line 186
                echo "\t\t\t<li class=\"active\"><a>";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "</a></li>\t
\t\t";
            }
            // line 188
            echo "     </ul>
\t
\t<div class=\"visible-xs\"> 
     <ul class=\"pagination pagination-sm\">
\t";
            // line 192
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 193
                echo "\t\t\t";
                $location = "pagination_mobile.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination_mobile.html", "search_results.html", 193)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 194
                echo "\t\t";
            } else {
                // line 195
                echo "\t\t\t<li class=\"active\"><a>";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "</a></li>\t
\t\t";
            }
            // line 197
            echo "\t</ul>
\t</div>
   </div>
";
        }
        // line 201
        echo "

<div class=\"row\">
<div class=\"col-md-4\">
";
        // line 205
        $location = "jumpbox_options.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox_options.html", "search_results.html", 205)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 206
        echo "</div>
</div>

";
        // line 209
        $location = "jump_links.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jump_links.html", "search_results.html", 209)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 210
        echo "
<div class=\"hidden-xs\">
";
        // line 212
        if ((((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()))) || (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null)) || (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null))) {
            // line 213
            echo "<form class=\"form-horizontal\" method=\"post\" action=\"";
            echo (isset($context["S_FORUM_ACTION"]) ? $context["S_FORUM_ACTION"] : null);
            echo "\">
\t<fieldset class=\"controls-row\">
                    <div class=\"sorting collapse\">
\t\t\t\t\t <div class=\"panel panel-default\">
\t\t\t\t\t  <div class=\"panel-body\">
                        <div class=\"row\">
\t\t\t\t\t";
            // line 219
            if (((isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null) || (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null))) {
                // line 220
                echo "\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                         ";
                // line 221
                if ((isset($context["S_SHOW_TOPICS"]) ? $context["S_SHOW_TOPICS"] : null)) {
                    echo "<label for=\"bday_day\">";
                    echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label>";
                } else {
                    echo "<label for=\"bday_day\">";
                    echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                    echo "</label>";
                }
                // line 222
                echo "                           ";
                if ((isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null)) {
                    // line 223
                    echo "                            <div class=\"control-row\">
                              ";
                    // line 224
                    echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
                    echo "
                            </div>
\t\t\t\t\t\t</div>
\t 
\t                    <div class=\"col-md-4 col-sm-4\"> 
                          <label for=\"bday_day\">";
                    // line 229
                    echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                    echo "</label>
                            <div class=\"control-row\">
                              ";
                    // line 231
                    echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
                    echo "
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                           <label for=\"bday_day\">";
                    // line 236
                    echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                    echo "</label>
                            <div class=\"control-row\">
\t\t\t\t\t\t\t<div class=\"input-group\">
                             ";
                    // line 239
                    echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
                    echo "
\t\t\t\t\t\t\t <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" name=\"sort\" type=\"submit\">";
                    // line 241
                    echo $this->env->getExtension('phpbb')->lang("GO");
                    echo "</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    </div>   
\t\t\t\t\t\t</div>
\t                ";
                }
                // line 247
                echo "\t\t\t\t\t";
            }
            // line 248
            echo "                        </div>
                      </div>
\t\t\t\t\t </div>
\t\t\t\t\t</div>
            <!-- // Widget --> 
\t</fieldset> 
</form>
";
        }
        // line 256
        echo "</div>


";
        // line 259
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_results.html", 259)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_results.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  846 => 259,  841 => 256,  831 => 248,  828 => 247,  819 => 241,  814 => 239,  808 => 236,  800 => 231,  795 => 229,  787 => 224,  784 => 223,  781 => 222,  770 => 221,  767 => 220,  765 => 219,  755 => 213,  753 => 212,  749 => 210,  737 => 209,  732 => 206,  720 => 205,  714 => 201,  708 => 197,  702 => 195,  699 => 194,  686 => 193,  684 => 192,  678 => 188,  672 => 186,  669 => 185,  656 => 184,  654 => 183,  649 => 182,  643 => 180,  641 => 179,  635 => 176,  631 => 174,  619 => 170,  615 => 168,  610 => 167,  609 => 166,  605 => 164,  597 => 161,  594 => 160,  592 => 159,  589 => 158,  584 => 156,  580 => 154,  579 => 153,  566 => 152,  555 => 150,  537 => 148,  535 => 147,  527 => 146,  524 => 145,  518 => 144,  515 => 143,  509 => 140,  506 => 139,  504 => 138,  500 => 136,  499 => 135,  494 => 134,  491 => 133,  487 => 131,  479 => 128,  475 => 126,  467 => 120,  461 => 119,  460 => 118,  453 => 115,  445 => 114,  439 => 113,  429 => 112,  425 => 110,  423 => 109,  409 => 108,  400 => 107,  396 => 105,  390 => 104,  382 => 102,  379 => 101,  377 => 100,  371 => 99,  364 => 98,  361 => 97,  357 => 96,  354 => 95,  352 => 94,  341 => 93,  332 => 92,  321 => 91,  312 => 90,  311 => 89,  302 => 87,  282 => 85,  279 => 84,  270 => 83,  266 => 81,  264 => 80,  259 => 79,  254 => 78,  247 => 74,  243 => 73,  239 => 72,  230 => 66,  226 => 64,  223 => 63,  221 => 62,  218 => 61,  208 => 53,  202 => 51,  199 => 50,  186 => 49,  184 => 48,  178 => 44,  172 => 42,  169 => 41,  156 => 40,  154 => 39,  150 => 38,  143 => 33,  139 => 31,  130 => 27,  125 => 25,  121 => 23,  119 => 22,  116 => 21,  114 => 20,  106 => 16,  104 => 15,  101 => 14,  100 => 13,  97 => 12,  87 => 10,  76 => 8,  74 => 7,  71 => 6,  65 => 5,  56 => 4,  47 => 3,  31 => 2,  19 => 1,);
    }
}
