<?php

/* ucp_pm_message_header.html */
class __TwigTemplate_ad2c7df7cbdc3e83f695054c98d234ef21bc0d8964ff70478d23f8aa861310f5 extends Twig_Template
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
        echo "<form id=\"viewfolder\" method=\"post\" action=\"";
        echo (isset($context["S_PM_ACTION"]) ? $context["S_PM_ACTION"] : null);
        echo "\">
<fieldset class=\"framed-ucp\">
<legend>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        if ((isset($context["CUR_FOLDER_NAME"]) ? $context["CUR_FOLDER_NAME"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "&nbsp;";
            echo (isset($context["CUR_FOLDER_NAME"]) ? $context["CUR_FOLDER_NAME"] : null);
        }
        echo "</legend>

";
        // line 5
        if (((isset($context["FOLDER_STATUS"]) ? $context["FOLDER_STATUS"] : null) && ((isset($context["FOLDER_MAX_MESSAGES"]) ? $context["FOLDER_MAX_MESSAGES"] : null) != 0))) {
            echo "<p>";
            echo (isset($context["FOLDER_STATUS"]) ? $context["FOLDER_STATUS"] : null);
            echo "</p>
<div class=\"progress progress-striped";
            // line 6
            if (((isset($context["FOLDER_PERCENT"]) ? $context["FOLDER_PERCENT"] : null) == 100)) {
                echo " active";
            }
            echo "\">
  <div role=\"progressbar\" aria-valuenow=\"";
            // line 7
            echo (isset($context["FOLDER_PERCENT"]) ? $context["FOLDER_PERCENT"] : null);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo (isset($context["FOLDER_PERCENT"]) ? $context["FOLDER_PERCENT"] : null);
            echo "%;\" class=\"progress-bar";
            if (((isset($context["FOLDER_PERCENT"]) ? $context["FOLDER_PERCENT"] : null) > 80)) {
                echo " progress-bar-danger";
            } else {
                echo " progress-bar-info";
            }
            echo "\"></div>
</div>
";
        }
        // line 10
        echo "
";
        // line 11
        if ((((isset($context["U_POST_REPLY_PM"]) ? $context["U_POST_REPLY_PM"] : null) || (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null)) || (isset($context["U_FORWARD_PM"]) ? $context["U_FORWARD_PM"] : null))) {
            // line 12
            echo "\t<div class=\"pull-left\">
\t\t <div class=\"btn-group\">
\t\t\t";
            // line 14
            if ((isset($context["U_POST_REPLY_PM"]) ? $context["U_POST_REPLY_PM"] : null)) {
                echo "<a class=\"btn btn-default\" title=\"\" href=\"";
                echo (isset($context["U_POST_REPLY_PM"]) ? $context["U_POST_REPLY_PM"] : null);
                echo "\"><i class=\"fa fa-reply\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("POST_REPLY_PM");
                echo "</a>
\t\t\t";
            } elseif (            // line 15
(isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null)) {
                echo "<a class=\"btn btn-default\" href=\"";
                echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                echo "\" accesskey=\"n\" title=\"\"><i class=\"fa fa-plus\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("UCP_PM_COMPOSE");
                echo "</a>";
            }
            // line 16
            echo "\t\t\t";
            if ((isset($context["U_FORWARD_PM"]) ? $context["U_FORWARD_PM"] : null)) {
                echo "<a class=\"btn btn-default\" title=\"\" href=\"";
                echo (isset($context["U_FORWARD_PM"]) ? $context["U_FORWARD_PM"] : null);
                echo "\"><i class=\"fa fa-forward\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("POST_FORWARD_PM");
                echo "</a>";
            }
            // line 17
            echo "\t\t\t";
            if (((isset($context["U_POST_REPLY_PM"]) ? $context["U_POST_REPLY_PM"] : null) && ((isset($context["S_PM_RECIPIENTS"]) ? $context["S_PM_RECIPIENTS"] : null) > 1))) {
                echo "<a class=\"btn btn-default\" title=\"\" href=\"";
                echo (isset($context["U_POST_REPLY_ALL"]) ? $context["U_POST_REPLY_ALL"] : null);
                echo "\"><i class=\"fa fa-group\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("REPLY_TO_ALL");
                echo "</a>";
            }
            echo "\t\t\t
\t\t </div> 
\t</div>
";
        }
        // line 21
        echo "
";
        // line 22
        if (((isset($context["TOTAL_MESSAGES"]) ? $context["TOTAL_MESSAGES"] : null) || (isset($context["S_VIEW_MESSAGE"]) ? $context["S_VIEW_MESSAGE"] : null))) {
            // line 23
            echo "    <ul class=\"pagination pagination-sm pull-right\">
\t\t";
            // line 24
            if ((isset($context["S_VIEW_MESSAGE"]) ? $context["S_VIEW_MESSAGE"] : null)) {
                // line 25
                echo "\t\t\t\t<li><a href=\"";
                echo (isset($context["U_CURRENT_FOLDER"]) ? $context["U_CURRENT_FOLDER"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RETURN_TO_FOLDER");
                echo "</a></li>
\t\t\t";
            } elseif ((            // line 26
(isset($context["FOLDER_CUR_MESSAGES"]) ? $context["FOLDER_CUR_MESSAGES"] : null) != 0)) {
                // line 27
                echo "\t\t\t\t";
                if ((isset($context["U_MARK_ALL"]) ? $context["U_MARK_ALL"] : null)) {
                    echo "<li><a href=\"";
                    echo (isset($context["U_MARK_ALL"]) ? $context["U_MARK_ALL"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("PM_MARK_ALL_READ");
                    echo "</a></li>";
                }
                // line 28
                echo "\t\t\t\t<li><a>";
                echo (isset($context["TOTAL_MESSAGES"]) ? $context["TOTAL_MESSAGES"] : null);
                echo "</a></li>
\t\t\t\t";
                // line 29
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                    // line 30
                    echo "\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_pm_message_header.html", 30)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 31
                    echo "\t\t\t\t";
                } else {
                    // line 32
                    echo "\t\t\t\t <li class=\"active\"><a>";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "</a></li>\t
\t\t\t\t";
                }
                // line 34
                echo "\t\t";
            }
            // line 35
            echo "    </ul>
";
        }
        // line 37
        echo "<div class=\"space10\"></div>";
    }

    public function getTemplateName()
    {
        return "ucp_pm_message_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 37,  169 => 35,  166 => 34,  160 => 32,  157 => 31,  144 => 30,  142 => 29,  137 => 28,  128 => 27,  126 => 26,  119 => 25,  117 => 24,  114 => 23,  112 => 22,  109 => 21,  95 => 17,  86 => 16,  78 => 15,  70 => 14,  66 => 12,  64 => 11,  61 => 10,  47 => 7,  41 => 6,  35 => 5,  25 => 3,  19 => 1,);
    }
}
