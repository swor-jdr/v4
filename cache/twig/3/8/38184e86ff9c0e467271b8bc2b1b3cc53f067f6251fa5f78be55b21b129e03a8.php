<?php

/* ucp_pm_viewmessage.html */
class __TwigTemplate_38184e86ff9c0e467271b8bc2b1b3cc53f067f6251fa5f78be55b21b129e03a8 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_pm_viewmessage.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"tab-pane active\">
";
        // line 3
        $location = "ucp_pm_message_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_pm_message_header.html", "ucp_pm_viewmessage.html", 3)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 4
        echo "
</fieldset> <!--FORMER DOUBLE DIV PANEL AND INNER FOR VIEW FOLDER AND VIEW MESSASGE-->

";
        // line 7
        if (((isset($context["S_DISPLAY_HISTORY"]) ? $context["S_DISPLAY_HISTORY"] : null) && ((isset($context["U_VIEW_PREVIOUS_HISTORY"]) ? $context["U_VIEW_PREVIOUS_HISTORY"] : null) || (isset($context["U_VIEW_NEXT_HISTORY"]) ? $context["U_VIEW_NEXT_HISTORY"] : null)))) {
            // line 8
            echo "\t<fieldset>
\t\t<ul class=\"pager\">
\t\t  ";
            // line 10
            if ((isset($context["U_VIEW_PREVIOUS_HISTORY"]) ? $context["U_VIEW_PREVIOUS_HISTORY"] : null)) {
                echo "<li class=\"previous\"><a href=\"";
                echo (isset($context["U_VIEW_PREVIOUS_HISTORY"]) ? $context["U_VIEW_PREVIOUS_HISTORY"] : null);
                echo "\" class=\"pull-left\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_PREVIOUS_HISTORY");
                echo "</a></li>";
            }
            // line 11
            echo "\t\t  ";
            if ((isset($context["U_VIEW_NEXT_HISTORY"]) ? $context["U_VIEW_NEXT_HISTORY"] : null)) {
                echo "<li class=\"next\"><a href=\"";
                echo (isset($context["U_VIEW_NEXT_HISTORY"]) ? $context["U_VIEW_NEXT_HISTORY"] : null);
                echo "\" class=\"pull-right\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_NEXT_HISTORY");
                echo "</a></li>";
            }
            // line 12
            echo "\t\t</ul>
\t</fieldset>
";
        }
        // line 15
        echo "
<div class=\"space10\"></div>
  
<div id=\"post-";
        // line 18
        echo (isset($context["MESSAGE_ID"]) ? $context["MESSAGE_ID"] : null);
        echo "\" class=\"pm\">
 <div class=\"panel panel-poll\">
    <div class=\"panel-heading\">
        <div class=\"side-segment\"><h3 style=\"border-bottom: 4px solid #ccc;\">";
        // line 21
        echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
        echo "</h3></div>    
\t\t<div class=\"clearfix\">
\t\t <div class=\"text-muted pull-left\"><i class=\"fa fa-clock-o\"></i>&nbsp;";
        // line 23
        echo (isset($context["SENT_DATE"]) ? $context["SENT_DATE"] : null);
        echo "</div>
\t\t  <div class=\"pull-right\">
\t\t\t <div class=\"btn-group btn-group-sm\">\t
\t\t\t ";
        // line 26
        if ((isset($context["U_EMAIL_PM"]) ? $context["U_EMAIL_PM"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_EMAIL_PM"]) ? $context["U_EMAIL_PM"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("EMAIL_PM");
            echo "\" class=\"btn btn-default\"><i class=\"fa fa-envelope\"></i></a>";
        }
        // line 27
        echo "\t\t\t ";
        if ((isset($context["U_PRINT_PM"]) ? $context["U_PRINT_PM"] : null)) {
            echo "<a class=\"btn btn-default\" href=\"";
            echo (isset($context["U_PRINT_PM"]) ? $context["U_PRINT_PM"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PRINT_PM");
            echo "\" accesskey=\"p\" class=\"print\"><i class=\"fa fa-print\"></i></a>";
        }
        // line 28
        echo "             </div>
\t\t     ";
        // line 29
        $value = ((((isset($context["U_EDIT"]) ? $context["U_EDIT"] : null) || (isset($context["U_DELETE"]) ? $context["U_DELETE"] : null)) || (isset($context["U_REPORT"]) ? $context["U_REPORT"] : null)) || (isset($context["U_QUOTE"]) ? $context["U_QUOTE"] : null));
        $context['definition']->set('SHOW_PM_POST_BUTTONS', $value);
        // line 30
        echo "\t\t       ";
        // line 31
        echo "\t\t      ";
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SHOW_PM_POST_BUTTONS", array())) {
            // line 32
            echo "\t\t      <div class=\"btn-group btn-group-sm\">
\t\t\t  ";
            // line 33
            // line 34
            echo "\t\t\t  ";
            if ((isset($context["U_EDIT"]) ? $context["U_EDIT"] : null)) {
                echo "<a class=\"btn btn-default\" href=\"";
                echo (isset($context["U_EDIT"]) ? $context["U_EDIT"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("POST_EDIT_PM");
                echo "\"><i class=\"fa fa-edit\"></i> </a>";
            }
            // line 35
            echo "\t\t\t  ";
            if ((isset($context["U_DELETE"]) ? $context["U_DELETE"] : null)) {
                echo "<a class=\"btn btn-default\" href=\"";
                echo (isset($context["U_DELETE"]) ? $context["U_DELETE"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("DELETE_MESSAGE");
                echo "\"><i class=\"fa fa-trash-o\"></i> </a>";
            }
            // line 36
            echo "\t\t\t  ";
            if ((isset($context["U_REPORT"]) ? $context["U_REPORT"] : null)) {
                echo "<a class=\"btn btn-default\" href=\"";
                echo (isset($context["U_REPORT"]) ? $context["U_REPORT"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("REPORT_PM");
                echo "\"><i class=\"fa fa-warning\"></i> </a>";
            }
            // line 37
            echo "\t\t\t  ";
            if ((isset($context["U_QUOTE"]) ? $context["U_QUOTE"] : null)) {
                echo "<a class=\"btn btn-default\" href=\"";
                echo (isset($context["U_QUOTE"]) ? $context["U_QUOTE"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("POST_QUOTE_PM");
                echo "\"><i class=\"fa fa-comment\"></i> </a>";
            }
            // line 38
            echo "\t\t      ";
            // line 39
            echo "\t\t\t  </div>
\t\t     ";
        }
        // line 41
        echo "\t\t\t   ";
        // line 42
        echo "\t        </div>
\t\t</div>
\t</div>
   
    <div class=\"panel-body\">
\t    <div class=\"media media-pm\">
\t\t\t<div class=\"avatar-over pull-left\">
\t\t\t\t";
        // line 49
        if ((isset($context["AUTHOR_AVATAR"]) ? $context["AUTHOR_AVATAR"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_MESSAGE_AUTHOR"]) ? $context["U_MESSAGE_AUTHOR"] : null);
            echo "\">";
            echo (isset($context["AUTHOR_AVATAR"]) ? $context["AUTHOR_AVATAR"] : null);
            echo "</a>";
        } else {
            echo "<img src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/no_avatar.gif\" alt=\"\" />";
        }
        // line 50
        echo "\t\t\t\t";
        if ((isset($context["S_ONLINE"]) ? $context["S_ONLINE"] : null)) {
            echo " 
\t\t\t\t<span class=\"status\"></span>
\t\t\t\t";
        }
        // line 53
        echo "\t\t\t</div>
                <ul class=\"media-body user-info list-unstyled text-muted\">
                 <li>";
        // line 55
        echo $this->env->getExtension('phpbb')->lang("PM_FROM");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "&nbsp;";
        echo (isset($context["MESSAGE_AUTHOR_FULL"]) ? $context["MESSAGE_AUTHOR_FULL"] : null);
        echo "</li>
\t\t\t\t ";
        // line 56
        if ((isset($context["S_TO_RECIPIENT"]) ? $context["S_TO_RECIPIENT"] : null)) {
            echo "<li>";
            echo $this->env->getExtension('phpbb')->lang("TO");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "&nbsp;";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "to_recipient", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                if ($this->getAttribute($context["to_recipient"], "NAME_FULL", array())) {
                    echo $this->getAttribute($context["to_recipient"], "NAME_FULL", array());
                    echo "&nbsp;&#45;";
                } else {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["to_recipient"], "U_VIEW", array());
                    echo "\" style=\"color:";
                    if ($this->getAttribute($context["to_recipient"], "COLOUR", array())) {
                        echo $this->getAttribute($context["to_recipient"], "COLOUR", array());
                    } elseif ($this->getAttribute($context["to_recipient"], "IS_GROUP", array())) {
                        echo "#0000FF";
                    }
                    echo ";\">";
                    echo $this->getAttribute($context["to_recipient"], "NAME", array());
                    echo "</a>";
                }
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</li>";
        }
        // line 57
        echo "\t\t         ";
        if ((isset($context["S_BCC_RECIPIENT"]) ? $context["S_BCC_RECIPIENT"] : null)) {
            echo "<li>";
            echo $this->env->getExtension('phpbb')->lang("BCC");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "&nbsp;";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "bcc_recipient", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["bcc_recipient"]) {
                if ($this->getAttribute($context["bcc_recipient"], "NAME_FULL", array())) {
                    echo $this->getAttribute($context["bcc_recipient"], "NAME_FULL", array());
                    echo "&nbsp;&#45;";
                } else {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["bcc_recipient"], "U_VIEW", array());
                    echo "\" style=\"color:";
                    if ($this->getAttribute($context["bcc_recipient"], "COLOUR", array())) {
                        echo $this->getAttribute($context["bcc_recipient"], "COLOUR", array());
                    } elseif ($this->getAttribute($context["bcc_recipient"], "IS_GROUP", array())) {
                        echo "#0000FF";
                    }
                    echo ";\">";
                    echo $this->getAttribute($context["bcc_recipient"], "NAME", array());
                    echo "</a>";
                }
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcc_recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</li>";
        }
        // line 58
        echo "                  <li class=\"share-box\">
\t\t\t\t   <a data-toggle=\"modal\" href=\"#mini";
        // line 59
        echo (isset($context["MESSAGE_ID"]) ? $context["MESSAGE_ID"] : null);
        echo "\" class=\"btn btn-bordered btn-xs\"><i class=\"glyphicon glyphicon-user\"></i></a>
\t\t\t\t
\t\t\t\t<div class=\"modal fade\" id=\"mini";
        // line 61
        echo (isset($context["MESSAGE_ID"]) ? $context["MESSAGE_ID"] : null);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t  <div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t\t  <h4 class=\"modal-title\">";
        // line 66
        echo $this->env->getExtension('phpbb')->lang("USER_MINI_PROFILE");
        echo "</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t  <div class=\"row profile-data\">
\t\t\t\t\t\t\t<!-- Left Side Start -->
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-3 col-xs-12 text-center\">
\t\t\t\t\t\t\t  ";
        // line 72
        // line 73
        echo "\t\t\t\t\t\t\t  <div class=\"profile-avatar\">
\t\t\t\t\t\t\t\t";
        // line 74
        if ((isset($context["AUTHOR_AVATAR"]) ? $context["AUTHOR_AVATAR"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_MESSAGE_AUTHOR"]) ? $context["U_MESSAGE_AUTHOR"] : null);
            echo "\">";
            echo (isset($context["AUTHOR_AVATAR"]) ? $context["AUTHOR_AVATAR"] : null);
            echo "</a>";
        } else {
            echo "<img src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/no_avatar.gif\" alt=\"\" />";
        }
        // line 75
        echo "\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  ";
        // line 76
        // line 77
        echo "\t\t\t\t\t\t\t  
                          ";
        // line 78
        echo " 
\t\t\t\t\t\t\t";
        // line 79
        if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
            echo "<div class=\"profile-rank text-center\">";
            echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
            echo "</div>";
        }
        // line 80
        echo "\t                      ";
        // line 81
        echo "\t\t\t\t\t\t  
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-default\" title=\"\" href=\"";
        // line 82
        echo (isset($context["U_MESSAGE_AUTHOR"]) ? $context["U_MESSAGE_AUTHOR"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("USER_MINI_PROFILE_VIEW_FULL");
        echo "</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Left Side End -->

\t\t\t\t\t\t\t<!-- Right Side Start -->
\t\t\t\t\t\t\t<div class=\"col-lg-8 col-md-8 col-sm-9 col-xs-12\">
\t\t\t\t\t\t\t <h3 style=\"border-bottom: 4px solid #ffffff;\">";
        // line 89
        echo (isset($context["MESSAGE_AUTHOR_FULL"]) ? $context["MESSAGE_AUTHOR_FULL"] : null);
        echo "</h3>
\t\t\t\t\t\t\t  <ul class=\"icon-list list-unstyled\">
\t\t\t\t\t\t\t\t";
        // line 91
        if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
            echo "<li><i class=\"fa fa-sitemap\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("RANK");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "&nbsp;";
            echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
            echo "</li>";
        }
        // line 92
        echo "\t\t\t\t\t\t\t\t<li><i class=\"fa fa-comments\"></i>&nbsp;";
        echo $this->env->getExtension('phpbb')->lang("POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "&nbsp;";
        echo (isset($context["AUTHOR_POSTS"]) ? $context["AUTHOR_POSTS"] : null);
        echo "</li>
\t\t\t\t\t\t\t\t";
        // line 93
        if ((isset($context["AUTHOR_JOINED"]) ? $context["AUTHOR_JOINED"] : null)) {
            echo "<li><i class=\"fa fa-calendar\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("JOINED");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "&nbsp;";
            echo (isset($context["AUTHOR_JOINED"]) ? $context["AUTHOR_JOINED"] : null);
            echo "</li>";
        }
        // line 94
        echo "\t\t\t\t\t\t\t\t<li><i class=\"fa fa-bolt\"></i>&nbsp;";
        echo $this->env->getExtension('phpbb')->lang("USER_STATUS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        if ((isset($context["S_ONLINE"]) ? $context["S_ONLINE"] : null)) {
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("ONLINE");
        } else {
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("OFF_LINE");
        }
        echo "</li>
\t\t\t\t\t\t\t    ";
        // line 95
        // line 96
        echo "\t\t\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 97
            echo "\t\t\t\t\t\t\t\t\t";
            if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                // line 98
                echo "\t\t\t\t\t\t\t\t\t\t<li class=\"profile-custom-field profile-";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_IDENT", array());
                echo "\"><i class=\"fa fa-cog\"></i>&nbsp;";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "&nbsp;";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                echo "</li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 100
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\t\t\t\t\t\t\t\t";
        // line 102
        echo "
\t\t\t\t\t\t\t\t";
        // line 103
        // line 104
        echo "\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Right Side End -->
                         </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t                ";
        // line 110
        // line 111
        echo "\t\t\t\t\t\t";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "contact", array()))) {
            // line 112
            echo "\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t  <ul class=\"mini-profile-contact\">
\t\t\t\t\t\t   ";
            // line 114
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "contact", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 115
                echo "\t\t\t\t\t\t\t\t";
                $context["REMAINDER"] = ($this->getAttribute($context["contact"], "S_ROW_COUNT", array()) % 4);
                // line 116
                echo "\t\t\t\t\t\t\t\t";
                $value = (((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 3) || ($this->getAttribute($context["contact"], "S_LAST_ROW", array()) && ($this->getAttribute($context["contact"], "S_NUM_ROWS", array()) < 4)));
                $context['definition']->set('S_LAST_CELL', $value);
                // line 117
                echo "\t\t\t\t\t\t\t\t";
                if (((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 0)) {
                    // line 118
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 119
                echo "\t\t\t\t\t\t\t\t\t<li><a class=\"default-contact\" href=\"";
                if ($this->getAttribute($context["contact"], "U_CONTACT", array())) {
                    echo $this->getAttribute($context["contact"], "U_CONTACT", array());
                } else {
                    echo $this->getAttribute($context["contact"], "U_PROFILE_AUTHOR", array());
                }
                echo "\" title=\"";
                echo $this->getAttribute($context["contact"], "NAME", array());
                echo "\"";
                if (($this->getAttribute($context["contact"], "ID", array()) == "jabber")) {
                    echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-moon-";
                // line 120
                echo $this->getAttribute($context["contact"], "ID", array());
                echo "\"></i>
\t\t\t\t\t\t\t\t\t    </a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                // line 123
                if ((((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 3) || $this->getAttribute($context["contact"], "S_LAST_ROW", array()))) {
                    // line 124
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 125
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "\t\t\t\t\t\t </ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 129
        echo "\t\t\t\t\t\t";
        // line 130
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t  </div><!-- /.modal-content -->
\t\t\t\t\t</div><!-- /.modal-dialog -->
\t\t\t\t  </div><!-- /.modal -->
\t\t\t\t  
\t\t\t\t  ";
        // line 135
        if ((isset($context["U_PM"]) ? $context["U_PM"] : null)) {
            echo "<a title=\"\" href=\"";
            echo (isset($context["U_PM"]) ? $context["U_PM"] : null);
            echo "\" class=\"btn btn-bordered btn-xs\"><i class=\"glyphicon glyphicon-envelope\"></i></a>";
        }
        // line 136
        echo "\t\t\t\t</li>
\t\t\t   </ul>
        </div>
\t
\t\t<div class=\"content\">";
        // line 140
        echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
        echo "</div>

\t\t";
        // line 142
        if ((isset($context["S_HAS_ATTACHMENTS"]) ? $context["S_HAS_ATTACHMENTS"] : null)) {
            // line 143
            echo "\t\t<div class=\"attachbox\">
\t\t\t<h5>";
            // line 144
            echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
            echo "</h5>
\t\t\t";
            // line 145
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attachment", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 146
                echo "\t\t\t<span>";
                echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                echo "</span>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "\t\t</div>
\t\t";
        }
        // line 150
        echo "
\t\t";
        // line 151
        if ((isset($context["S_DISPLAY_NOTICE"]) ? $context["S_DISPLAY_NOTICE"] : null)) {
            // line 152
            echo "\t\t\t<div class=\"rules\">";
            echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_NOTICE");
            echo "</div>
\t\t";
        }
        // line 154
        echo "
\t\t";
        // line 155
        if (((isset($context["EDITED_MESSAGE"]) ? $context["EDITED_MESSAGE"] : null) || (isset($context["EDIT_REASON"]) ? $context["EDIT_REASON"] : null))) {
            // line 156
            echo "\t\t<div class=\"notice\">";
            echo (isset($context["EDITED_MESSAGE"]) ? $context["EDITED_MESSAGE"] : null);
            echo "
\t\t\t";
            // line 157
            if ((isset($context["EDIT_REASON"]) ? $context["EDIT_REASON"] : null)) {
                echo "<strong>";
                echo $this->env->getExtension('phpbb')->lang("REASON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> <small>";
                echo (isset($context["EDIT_REASON"]) ? $context["EDIT_REASON"] : null);
                echo "</small>";
            }
            // line 158
            echo "\t\t</div>
\t\t";
        }
        // line 160
        echo "
\t\t";
        // line 161
        if ((isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null)) {
            // line 162
            echo "\t\t <p class=\"separator text-center hidden-xs\"><i class=\"fa fa-ellipsis-h fa-2x\"></i></p>
\t\t <div id=\"sig";
            // line 163
            echo (isset($context["MESSAGE_ID"]) ? $context["MESSAGE_ID"] : null);
            echo "\" class=\"hidden-xs post-signature\">";
            echo (isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null);
            echo "</div>
\t\t";
        }
        // line 165
        echo "\t</div>\t
\t
\t</div>
</div>

<ul class=\"pager\">
  ";
        // line 171
        if ((isset($context["U_PREVIOUS_PM"]) ? $context["U_PREVIOUS_PM"] : null)) {
            echo "<li class=\"previous\"><a href=\"";
            echo (isset($context["U_PREVIOUS_PM"]) ? $context["U_PREVIOUS_PM"] : null);
            echo "\" class=\"pull-left\">";
            echo $this->env->getExtension('phpbb')->lang("VIEW_PREVIOUS_PM");
            echo "</a></li>";
        }
        // line 172
        echo "  ";
        if ((isset($context["U_NEXT_PM"]) ? $context["U_NEXT_PM"] : null)) {
            echo "<li class=\"next\"><a href=\"";
            echo (isset($context["U_NEXT_PM"]) ? $context["U_NEXT_PM"] : null);
            echo "\" class=\"pull-right\">";
            echo $this->env->getExtension('phpbb')->lang("VIEW_NEXT_PM");
            echo "</a></li>";
        }
        // line 173
        echo "</ul>

<div class=\"clearfix\">
<div class=\"pull-right\">
    <ul class=\"pagination pagination-sm hidden-xs\">
\t <li><a title=\"\" data-original-title=\"\" href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\">";
        // line 178
        echo $this->env->getExtension('phpbb')->lang("OPTIONS");
        echo "</a></li>
    </ul>
</div>
</div>
\t 
";
        // line 183
        if ((isset($context["S_VIEW_MESSAGE"]) ? $context["S_VIEW_MESSAGE"] : null)) {
            // line 184
            echo "<div class=\"clearfix\">
<fieldset class=\"controls-row\">
   <div class=\"sorting collapse\">
\t<div class=\"panel panel-default\">
\t <div class=\"panel-body\">
\t <div class=\"row\">
\t";
            // line 190
            if ((isset($context["S_MARK_OPTIONS"]) ? $context["S_MARK_OPTIONS"] : null)) {
                // line 191
                echo "\t<div class=\"col-md-6\"> 
\t<label class=\"control-label\" for=\"mark_option\">";
                // line 192
                echo $this->env->getExtension('phpbb')->lang("MARK");
                echo "</label>
\t  <div class=\"input-group\">
\t   <select class=\"selectpicker\" data-container=\"body\" data-style=\"btn btn-default form-control\" name=\"mark_option\" id=\"mark_option\">";
                // line 194
                echo (isset($context["S_MARK_OPTIONS"]) ? $context["S_MARK_OPTIONS"] : null);
                echo "</select>
\t   <div class=\"input-group-btn\">
\t   <button class=\"btn btn-default\" type=\"submit\" name=\"submit_mark\" value=\"";
                // line 196
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "</button>
\t   </div>
\t  </div>
\t</div> 
\t";
            }
            // line 201
            echo "   ";
            if (( !(isset($context["S_UNREAD"]) ? $context["S_UNREAD"] : null) &&  !(isset($context["S_SPECIAL_FOLDER"]) ? $context["S_SPECIAL_FOLDER"] : null))) {
                // line 202
                echo "\t<div class=\"col-md-6\"> 
\t<label class=\"control-label\" for=\"dest_folder\">";
                // line 203
                if ((isset($context["S_VIEW_MESSAGE"]) ? $context["S_VIEW_MESSAGE"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("MOVE_TO_FOLDER");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("MOVE_MARKED_TO_FOLDER");
                }
                echo "</label>
\t  <div class=\"input-group\">
\t    <select class=\"selectpicker\" data-container=\"body\" data-width=\"auto\" data-style=\"btn btn-default form-control\" data-width=\"auto\" name=\"dest_folder\" id=\"dest_folder\">";
                // line 205
                echo (isset($context["S_TO_FOLDER_OPTIONS"]) ? $context["S_TO_FOLDER_OPTIONS"] : null);
                echo "</select>
\t   <div class=\"input-group-btn\">
\t\t<button class=\"btn btn-default\" type=\"submit\" name=\"move_pm\" value=\"";
                // line 207
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "</button>
\t   </div>
\t   </div>
\t</div> 
\t";
            }
            // line 212
            echo "\t<input type=\"hidden\" name=\"marked_msg_id[]\" value=\"";
            echo (isset($context["MSG_ID"]) ? $context["MSG_ID"] : null);
            echo "\" />
\t<input type=\"hidden\" name=\"cur_folder_id\" value=\"";
            // line 213
            echo (isset($context["CUR_FOLDER_ID"]) ? $context["CUR_FOLDER_ID"] : null);
            echo "\" />
\t<input type=\"hidden\" name=\"p\" value=\"";
            // line 214
            echo (isset($context["MSG_ID"]) ? $context["MSG_ID"] : null);
            echo "\" />
    </div>
   </div>
   </div>
  </div>
</fieldset>
</div>
";
        }
        // line 222
        echo "
";
        // line 223
        $location = "ucp_pm_message_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_pm_message_footer.html", "ucp_pm_viewmessage.html", 223)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 224
        echo "
";
        // line 225
        if ((isset($context["S_DISPLAY_HISTORY"]) ? $context["S_DISPLAY_HISTORY"] : null)) {
            $location = "ucp_pm_history.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_pm_history.html", "ucp_pm_viewmessage.html", 225)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 226
        echo "</div>
";
        // line 227
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_pm_viewmessage.html", 227)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_pm_viewmessage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  763 => 227,  760 => 226,  746 => 225,  743 => 224,  731 => 223,  728 => 222,  717 => 214,  713 => 213,  708 => 212,  698 => 207,  693 => 205,  683 => 203,  680 => 202,  677 => 201,  667 => 196,  662 => 194,  657 => 192,  654 => 191,  652 => 190,  644 => 184,  642 => 183,  634 => 178,  627 => 173,  618 => 172,  610 => 171,  602 => 165,  595 => 163,  592 => 162,  590 => 161,  587 => 160,  583 => 158,  574 => 157,  569 => 156,  567 => 155,  564 => 154,  558 => 152,  556 => 151,  553 => 150,  549 => 148,  540 => 146,  536 => 145,  532 => 144,  529 => 143,  527 => 142,  522 => 140,  516 => 136,  510 => 135,  503 => 130,  501 => 129,  496 => 126,  490 => 125,  487 => 124,  485 => 123,  479 => 120,  464 => 119,  461 => 118,  458 => 117,  454 => 116,  451 => 115,  447 => 114,  443 => 112,  440 => 111,  439 => 110,  431 => 104,  430 => 103,  427 => 102,  425 => 101,  419 => 100,  408 => 98,  405 => 97,  400 => 96,  399 => 95,  386 => 94,  377 => 93,  369 => 92,  360 => 91,  355 => 89,  343 => 82,  340 => 81,  338 => 80,  332 => 79,  329 => 78,  326 => 77,  325 => 76,  322 => 75,  310 => 74,  307 => 73,  306 => 72,  297 => 66,  289 => 61,  284 => 59,  281 => 58,  248 => 57,  216 => 56,  209 => 55,  205 => 53,  198 => 50,  186 => 49,  177 => 42,  175 => 41,  171 => 39,  169 => 38,  160 => 37,  151 => 36,  142 => 35,  133 => 34,  132 => 33,  129 => 32,  126 => 31,  124 => 30,  121 => 29,  118 => 28,  109 => 27,  101 => 26,  95 => 23,  90 => 21,  84 => 18,  79 => 15,  74 => 12,  65 => 11,  57 => 10,  53 => 8,  51 => 7,  46 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
