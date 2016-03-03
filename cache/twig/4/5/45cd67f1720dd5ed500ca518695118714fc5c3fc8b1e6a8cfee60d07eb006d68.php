<?php

/* addons/navigation.html */
class __TwigTemplate_45cd67f1720dd5ed500ca518695118714fc5c3fc8b1e6a8cfee60d07eb006d68 extends Twig_Template
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
        echo "<!-- Main navigation block -->
<nav class=\"collapse navbar-collapse flat-nav-collapse\" aria-label=\"Primary\">
    ";
        // line 3
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            // line 4
            echo "\t<div class=\"user-login hidden-lg hidden-md hidden-sm\">
\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t<li class=\"dropdown dropdown-avatar\">
\t\t\t\t<a href=\"javascript:void(0)\" data-toggle=\"dropdown\" class=\"user-menu\">
\t\t\t\t ";
            // line 8
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
                echo "&nbsp;";
            }
            echo "&nbsp;<span>";
            echo $this->env->getExtension('phpbb')->lang("WELCOME_INDEX");
            echo "&#44;&nbsp;";
            echo (isset($context["CURRENT_USERNAME_SIMPLE"]) ? $context["CURRENT_USERNAME_SIMPLE"] : null);
            echo "<i class=\"caret\"></i></span>
\t\t\t\t</a>
\t\t\t\t<ul class=\"dropdown-menu usermenu\">
\t\t\t\t   <li><a title=\"\" href=\"";
            // line 11
            echo (isset($context["U_UCP_PREFERENCE"]) ? $context["U_UCP_PREFERENCE"] : null);
            echo "\"><i class=\"fa fa-user\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("UCP_PROFILE");
            echo "</a></li>
\t\t\t\t   <li><a title=\"\" href=\"";
            // line 12
            echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
            echo "\"><i class=\"fa fa-inbox\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("UCP_MESSAGES");
            echo "&nbsp;&nbsp;<span class=\"badge badge-info\">";
            if (((isset($context["S_DISPLAY_PM"]) ? $context["S_DISPLAY_PM"] : null) && (isset($context["S_USER_UNREAD_PRIVMSG"]) ? $context["S_USER_UNREAD_PRIVMSG"] : null))) {
                echo (isset($context["S_USER_UNREAD_PRIVMSG"]) ? $context["S_USER_UNREAD_PRIVMSG"] : null);
            } else {
                echo (isset($context["S_USER_NEW_PRIVMSG"]) ? $context["S_USER_NEW_PRIVMSG"] : null);
            }
            echo "</span></a></li>
\t\t\t\t   ";
            // line 13
            if ((isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null)) {
                // line 14
                echo "\t\t\t\t\t <li><a title=\"\" href=\"";
                echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
                echo "\"><i class=\"fa fa-bell\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo "&nbsp;&nbsp;";
                if ( !twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notifications", array()))) {
                } else {
                    echo "<span class=\"badge badge-info\">";
                    echo (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null);
                    echo "</span>";
                }
                echo "</a></li>
\t\t\t\t   ";
            }
            // line 16
            echo "\t\t\t\t   <li><a title=\"\" href=\"";
            echo (isset($context["U_UCP_PROFILE_SETTINGS"]) ? $context["U_UCP_PROFILE_SETTINGS"] : null);
            echo "\"><i class=\"fa fa-cog\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("UCP_PROFILE_SETTINGS");
            echo "</a></li>
\t               ";
            // line 17
            if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
                echo "<li><a title=\"\" href=\"";
                echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
                echo "\"><i class=\"fa fa-user-md\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("ADMIN_PANEL_GENERAL");
                echo "</a></li>";
            }
            // line 18
            echo "\t               ";
            if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
                echo "\"><i class=\"fa fa-legal\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("MODERATOR_PANEL_GENERAL");
                echo "</a></li>";
            }
            // line 19
            echo "\t\t\t\t   ";
            if (((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null) &&  !((isset($context["U_ACP"]) ? $context["U_ACP"] : null) || (isset($context["U_MCP"]) ? $context["U_MCP"] : null)))) {
                echo "<li><a href=\"";
                echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
                echo "\"><i class=\"fa fa-user\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("USER_PANEL");
                echo "</a></li>";
            }
            // line 20
            echo "\t\t\t\t   ";
            if ((isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null);
                echo "\"><i class=\"fa fa-random\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>";
            }
            // line 21
            echo "\t\t\t\t  <li><a title=\"\" href=\"";
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\"><i class=\"fa fa-power-off\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("LOGOUT");
            echo "</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t</ul>
\t</div>
\t";
        }
        // line 27
        echo "
      <ul class=\"nav navbar-nav navbar-nav-fancy\">
        <li class=\"dropdown\">
             <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 30
        echo $this->env->getExtension('phpbb')->lang("MAIN_FORUM");
        echo "&nbsp;<b class=\"caret\"></b></a>
             <span class=\"dropdown-arrow\"></span>
            <ul class=\"dropdown-menu\">
                ";
        // line 33
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) || ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)))) {
            // line 34
            echo "\t\t\t\t<li><a href=\"";
            echo (isset($context["U_SEARCH_UNANSWERED"]) ? $context["U_SEARCH_UNANSWERED"] : null);
            echo "\"><i class=\"fa fa-search\"></i>";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t\t";
            // line 35
            if ((isset($context["S_LOAD_UNREADS"]) ? $context["S_LOAD_UNREADS"] : null)) {
                // line 36
                echo "\t\t\t\t<li><a href=\"";
                echo (isset($context["U_SEARCH_UNREAD"]) ? $context["U_SEARCH_UNREAD"] : null);
                echo "\"><i class=\"fa fa-comment\"></i>";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_UNREAD");
                echo "</a></li>
\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t";
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                // line 39
                echo "\t\t\t\t<li><a href=\"";
                echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                echo "\"><i class=\"fa fa-thumbs-up\"></i>";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                echo "</a></li>
\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t<li><a href=\"";
            echo (isset($context["U_SEARCH_ACTIVE_TOPICS"]) ? $context["U_SEARCH_ACTIVE_TOPICS"] : null);
            echo "\"><i class=\"fa fa-star\"></i>";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t";
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null))) {
            // line 44
            echo "\t\t\t   <li><a href=\"";
            echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
            echo "\"><i class=\"fa fa-check\"></i>";
            echo $this->env->getExtension('phpbb')->lang("MARK_FORUMS_READ");
            echo "</a></li>
\t           ";
        }
        // line 46
        echo "\t\t\t   ";
        // line 47
        echo "\t\t\t   <li><a href=\"";
        echo (isset($context["U_FAQ"]) ? $context["U_FAQ"] : null);
        echo "\"><i class=\"fa fa-question-circle\"></i>";
        echo $this->env->getExtension('phpbb')->lang("FAQ");
        echo "</a></li>
\t\t\t   ";
        // line 48
        // line 49
        echo "\t\t\t   ";
        if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
            echo "\"><i class=\"fa fa-group\"></i>";
            echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
            echo "</a></li>";
        }
        // line 50
        echo "\t\t\t  ";
        if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
            echo "\"><i class=\"fa fa-trophy\"></i>";
            echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
            echo "</a></li>";
        }
        // line 51
        echo "            </ul>
        </li>
\t\t";
        // line 53
        if ((isset($context["FLATBOOTS_MINI_CMS_ENABLED"]) ? $context["FLATBOOTS_MINI_CMS_ENABLED"] : null)) {
            // line 54
            echo "        \t";
            // line 55
            echo "        ";
        } else {
            // line 56
            echo "\t\t<li class=\"dropdown\">
             <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 57
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "&nbsp;<b class=\"caret\"></b></a>
             <span class=\"dropdown-arrow\"></span>
            <ul class=\"dropdown-menu\">
                <li><a href=\"";
            // line 60
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\"><i class=\"fa fa-search fa\"></i>";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "</a></li>
                ";
            // line 61
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null))) {
                // line 62
                echo "\t\t\t\t ";
                if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
                    // line 63
                    echo "\t\t\t\t<li><a href=\"";
                    echo (isset($context["U_SEARCH_SELF"]) ? $context["U_SEARCH_SELF"] : null);
                    echo "\"><i class=\"fa fa-comments\"></i>";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_SELF");
                    echo "</a></li>
\t\t\t\t<li><a href=\"";
                    // line 64
                    echo (isset($context["SITESPLAT_SEARCH_LAST_DAY"]) ? $context["SITESPLAT_SEARCH_LAST_DAY"] : null);
                    echo "\"><i class=\"fa fa-sort-numeric-asc\"></i>";
                    echo $this->env->getExtension('phpbb')->lang("SITESPLAT_SEARCH_LAST_DAY");
                    echo "</a></li>
\t\t\t\t<li><a href=\"";
                    // line 65
                    echo (isset($context["SITESPLAT_SEARCH_WEEK"]) ? $context["SITESPLAT_SEARCH_WEEK"] : null);
                    echo "\"><i class=\"fa fa-sort-alpha-asc\"></i>";
                    echo $this->env->getExtension('phpbb')->lang("SITESPLAT_SEARCH_WEEK");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 67
                echo "\t\t\t\t";
            }
            // line 68
            echo "                <li class=\"divider\"></li>
                <li class=\"dropdown-header\">";
            // line 69
            echo $this->env->getExtension('phpbb')->lang("DEMO_HEADER_MENU");
            echo "</li>
                <li><a href=\"#\">";
            // line 70
            echo $this->env->getExtension('phpbb')->lang("DEMO_LINK");
            echo "</a></li>
                <li><a href=\"#\">";
            // line 71
            echo $this->env->getExtension('phpbb')->lang("DEMO_LINK");
            echo "</a></li>
            </ul>
        </li>
\t\t";
        }
        // line 75
        echo "      </ul>

\t";
        // line 77
        if ( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            // line 78
            echo "    <ul class=\"nav navbar-nav navbar-right navbar-nav-fancy\">
\t    ";
            // line 79
            if ((( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) &&  !((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null) || (isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null)))) {
                // line 80
                echo "\t\t<li><a href=\"";
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("CREATE_ACCOUNT");
                echo "</a></li>
\t   ";
            }
            // line 82
            echo "\t    ";
            if ( !(isset($context["ENABLE_POPUP_LOGIN"]) ? $context["ENABLE_POPUP_LOGIN"] : null)) {
                // line 83
                echo "\t\t\t<li><a href=\"";
                echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("LOGIN");
                echo "</a></li>
\t\t";
            } else {
                // line 85
                echo "\t\t\t<li><a href=\"\" data-toggle=\"modal\" data-target=\"#modal-login\" role=\"button\" data-toggle=\"modal\">";
                echo $this->env->getExtension('phpbb')->lang("LOGIN");
                echo "</a></li>
\t\t";
            }
            // line 87
            echo "\t</ul>
\t";
        }
        // line 89
        echo "
\t";
        // line 90
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            // line 91
            echo "\t<div class=\"user-login hidden-xs\">
\t\t<ul class=\"nav navbar-nav navbar-right navbar-nav-fancy\">
\t\t";
            // line 93
            // line 94
            echo "\t\t<li><a class=\"btn-search\" href=\"javascript:void(0)\"><i class=\"fa fa-lightbulb-o\"></i></a></li>
\t\t";
            // line 95
            // line 96
            echo "\t\t";
            if ((isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null)) {
                // line 97
                echo "\t\t    <li class=\"dropdown dropdown-avatar dropdown-notification\">
\t\t\t  <a id=\"notification_list_button\" href=\"javascript:void(0)\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i>";
                // line 98
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notifications", array())) && (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null))) {
                    echo "<em class=\"notifications badge badge-danger\">";
                    echo (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null);
                    echo "</em>";
                }
                echo "</a>
                <ul class=\"dropdown-menu user-login-drop arrow-up\">
                 <li><a href=\"";
                // line 100
                echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
                echo "\" class=\"notification-heading\">";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo "</a></li>
                   ";
                // line 101
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "addons/navigation.html", 101)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 102
                echo "                </ul>
            </li>
\t\t";
            }
            // line 105
            echo "
\t\t\t<li class=\"dropdown dropdown-avatar\">
\t\t\t  <a href=\"javascript:void(0)\" data-toggle=\"dropdown\">
\t\t\t   ";
            // line 108
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
                echo "&nbsp;";
            } else {
                echo "<img src=\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/images/user4.png\" alt=\"No avatar\">";
            }
            echo "&nbsp;<span>";
            echo $this->env->getExtension('phpbb')->lang("WELCOME_INDEX");
            echo "&#44;&nbsp;";
            echo (isset($context["CURRENT_USERNAME_SIMPLE"]) ? $context["CURRENT_USERNAME_SIMPLE"] : null);
            echo "<i class=\"caret\"></i></span>
\t\t\t  </a>
                ";
            // line 110
            if ((isset($context["S_USER_NEW_PRIVMSG"]) ? $context["S_USER_NEW_PRIVMSG"] : null)) {
                echo "<em class=\"notifications-pm badge badge-warning\">";
                echo (isset($context["PM_NEW_COUNT_BADGE"]) ? $context["PM_NEW_COUNT_BADGE"] : null);
                echo "</em>";
            } elseif ((isset($context["S_USER_UNREAD_PRIVMSG"]) ? $context["S_USER_UNREAD_PRIVMSG"] : null)) {
                echo "<em class=\"notifications-pm badge badge-success\">";
                echo (isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null);
                echo "</em>";
            }
            // line 111
            echo "\t\t\t\t   <ul class=\"dropdown-menu user-login-drop arrow-up\">
                        <li>";
            // line 112
            if ((isset($context["S_USER_NEW_PRIVMSG"]) ? $context["S_USER_NEW_PRIVMSG"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                echo "\">";
                echo (isset($context["PM_NEW_COUNT"]) ? $context["PM_NEW_COUNT"] : null);
                echo "</a>";
            } elseif ((isset($context["S_USER_UNREAD_PRIVMSG"]) ? $context["S_USER_UNREAD_PRIVMSG"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                echo "\">";
                echo (isset($context["PM_UNREAD_COUNT"]) ? $context["PM_UNREAD_COUNT"] : null);
                echo "</a>";
            } else {
                echo "<a href=\"";
                echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("NO_PMS_INFO");
                echo "</a>";
            }
            echo "</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"navbar-wrapper\">
                              <div class=\"navbar-content navbar-avatar\">
                                    <div class=\"row\">
                                        <div class=\"col-md-5 col-xs-5\">
                                          ";
            // line 118
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
            } else {
                echo "<img src=\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/images/user4.png\" alt=\"No avatar\">";
            }
            // line 119
            echo "                                            <p class=\"text-center\"><a href=\"";
            echo (isset($context["U_UCP_PROFILE_AVATAR"]) ? $context["U_UCP_PROFILE_AVATAR"] : null);
            echo "\">
                                                <small>";
            // line 120
            echo $this->env->getExtension('phpbb')->lang("CHANGE_AVATAR");
            echo "</small>
                                            </a></p>
                                        </div>
                                        <div class=\"col-md-7 col-xs-7\"><span>";
            // line 123
            echo (isset($context["CURRENT_USERNAME_FULL"]) ? $context["CURRENT_USERNAME_FULL"] : null);
            echo "</span>
                                            <p class=\"text-muted small\">";
            // line 124
            echo (isset($context["USER_EMAIL_MENU"]) ? $context["USER_EMAIL_MENU"] : null);
            echo "</p>
                                             ";
            // line 125
            if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
                echo "<a class=\"btn btn-info btn-sm btn-block\" href=\"";
                echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
                echo "\"><i class=\"fa fa-user-md\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("ADMIN_PANEL_GENERAL");
                echo "</a>";
            }
            // line 126
            echo "\t                                         ";
            if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
                echo "<a class=\"btn btn-warning btn-sm btn-block\" href=\"";
                echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
                echo "\"><i class=\"fa fa-legal\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("MODERATOR_PANEL_GENERAL");
                echo "</a>";
            }
            // line 127
            echo "                                             ";
            if (((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null) &&  !((isset($context["U_ACP"]) ? $context["U_ACP"] : null) || (isset($context["U_MCP"]) ? $context["U_MCP"] : null)))) {
                echo "<a class=\"btn btn-success btn-sm btn-block\" href=\"";
                echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
                echo "\"><i class=\"fa fa-user\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("USER_PANEL");
                echo "</a>";
            }
            // line 128
            echo "\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <div class=\"navbar-footer\">
                                    <div class=\"navbar-footer-content\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6 col-xs-6\"><a class=\"btn btn-default btn-sm\" href=\"";
            // line 134
            echo (isset($context["U_UCP_PROFILE_SETTINGS"]) ? $context["U_UCP_PROFILE_SETTINGS"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("CHANGE_PASSWORD");
            echo "</a></div>
                                            <div class=\"col-md-6 col-xs-6\"><a class=\"btn btn-default btn-sm pull-right\" href=\"";
            // line 135
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("LOGOUT");
            echo "</a></div>
                                        </div>
                                    </div>
                               </div>
\t\t\t\t\t\t\t</div>
                        </li>
                    </ul>
            </li>
\t\t</ul>
\t</div>
\t";
        }
        // line 146
        echo "</nav>
";
    }

    public function getTemplateName()
    {
        return "addons/navigation.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  529 => 146,  513 => 135,  507 => 134,  499 => 128,  490 => 127,  481 => 126,  473 => 125,  469 => 124,  465 => 123,  459 => 120,  454 => 119,  446 => 118,  419 => 112,  416 => 111,  406 => 110,  390 => 108,  385 => 105,  380 => 102,  368 => 101,  362 => 100,  353 => 98,  350 => 97,  347 => 96,  346 => 95,  343 => 94,  342 => 93,  338 => 91,  336 => 90,  333 => 89,  329 => 87,  323 => 85,  315 => 83,  312 => 82,  304 => 80,  302 => 79,  299 => 78,  297 => 77,  293 => 75,  286 => 71,  282 => 70,  278 => 69,  275 => 68,  272 => 67,  265 => 65,  259 => 64,  252 => 63,  249 => 62,  247 => 61,  241 => 60,  235 => 57,  232 => 56,  229 => 55,  227 => 54,  225 => 53,  221 => 51,  212 => 50,  203 => 49,  202 => 48,  195 => 47,  193 => 46,  185 => 44,  182 => 43,  174 => 41,  166 => 39,  163 => 38,  155 => 36,  153 => 35,  146 => 34,  144 => 33,  138 => 30,  133 => 27,  121 => 21,  112 => 20,  103 => 19,  94 => 18,  86 => 17,  79 => 16,  64 => 14,  62 => 13,  50 => 12,  44 => 11,  31 => 8,  25 => 4,  23 => 3,  19 => 1,);
    }
}
