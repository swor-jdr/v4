<?php

/* viewonline_body.html */
class __TwigTemplate_c2efcaaf12cd0e5c8036e7acb13490dd3353786d71238accabd141dbd47b3233 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "viewonline_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"side-segment\"><h3>";
        echo (isset($context["TOTAL_REGISTERED_USERS_ONLINE"]) ? $context["TOTAL_REGISTERED_USERS_ONLINE"] : null);
        echo "</h3></div>
<p>";
        // line 3
        echo (isset($context["TOTAL_GUEST_USERS_ONLINE"]) ? $context["TOTAL_GUEST_USERS_ONLINE"] : null);
        if ((isset($context["S_SWITCH_GUEST_DISPLAY"]) ? $context["S_SWITCH_GUEST_DISPLAY"] : null)) {
            echo "&nbsp;&#166;&nbsp;<a href=\"";
            echo (isset($context["U_SWITCH_GUEST_DISPLAY"]) ? $context["U_SWITCH_GUEST_DISPLAY"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SWITCH_GUEST_DISPLAY");
            echo "</a>";
        }
        echo "</p>
";
        // line 4
        if ((isset($context["LEGEND"]) ? $context["LEGEND"] : null)) {
            // line 5
            echo "<div class=\"clearfix\">
 <div class=\"pull-left\">
  <p><small>";
            // line 7
            echo $this->env->getExtension('phpbb')->lang("LEGEND");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "&nbsp;";
            echo (isset($context["LEGEND"]) ? $context["LEGEND"] : null);
            echo "</small></p>
 </div>
</div>
";
        }
        // line 11
        echo "<div class=\"panel panel-forum\">
\t     <div class=\"panel-heading\">
\t\t  <i class=\"fa fa-map-marker\"></i>&nbsp;";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
        echo "
\t\t </div>
\t\t <div class=\"panel-inner\">
\t\t<table class=\"footable table table-striped table-primary table-hover\">
\t";
        // line 17
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "user_row", array()))) {
            echo "\t
\t<thead>
\t\t<tr>
\t\t\t<th data-class=\"expand\"><a href=\"";
            // line 20
            echo (isset($context["U_SORT_USERNAME"]) ? $context["U_SORT_USERNAME"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "</a></th>
\t\t\t<th data-hide=\"phone\"><a href=\"";
            // line 21
            echo (isset($context["U_SORT_LOCATION"]) ? $context["U_SORT_LOCATION"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("FORUM_LOCATION");
            echo "</a></th>
\t\t\t<th data-hide=\"phone\"><a href=\"";
            // line 22
            echo (isset($context["U_SORT_UPDATED"]) ? $context["U_SORT_UPDATED"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("LAST_UPDATED");
            echo "</a></th>
\t\t</tr>
\t</thead>\t\t
\t<tbody>
\t\t";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "user_row", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["user_row"]) {
                // line 27
                echo "\t\t<tr>
\t\t\t<td>";
                // line 28
                echo $this->getAttribute($context["user_row"], "USERNAME_FULL", array());
                if ($this->getAttribute($context["user_row"], "USER_IP", array())) {
                    echo "&nbsp;&#166;&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("IP");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "&nbsp;<a href=\"";
                    echo $this->getAttribute($context["user_row"], "U_USER_IP", array());
                    echo "\">";
                    echo $this->getAttribute($context["user_row"], "USER_IP", array());
                    echo "</a>&nbsp;&#187;&nbsp;<a href=\"";
                    echo $this->getAttribute($context["user_row"], "U_WHOIS", array());
                    echo "\" onclick=\"popup(this.href, 750, 500); return false;\">";
                    echo $this->env->getExtension('phpbb')->lang("WHOIS");
                    echo "</a>";
                }
                // line 29
                echo "\t\t\t";
                if ($this->getAttribute($context["user_row"], "USER_BROWSER", array())) {
                    echo "<br />";
                    echo $this->getAttribute($context["user_row"], "USER_BROWSER", array());
                }
                // line 30
                echo "\t\t\t</td>
\t\t\t<td><a href=\"";
                // line 31
                echo $this->getAttribute($context["user_row"], "U_FORUM_LOCATION", array());
                echo "\">";
                echo $this->getAttribute($context["user_row"], "FORUM_LOCATION", array());
                echo "</a></td>
\t\t\t<td>";
                // line 32
                echo $this->getAttribute($context["user_row"], "LASTUPDATE", array());
                echo "</td>
\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t";
        } else {
            // line 36
            echo "\t\t<tr>
\t\t\t<td colspan=\"3\">";
            // line 37
            echo $this->env->getExtension('phpbb')->lang("NO_ONLINE_USERS");
            if ((isset($context["S_SWITCH_GUEST_DISPLAY"]) ? $context["S_SWITCH_GUEST_DISPLAY"] : null)) {
                echo "&nbsp;&bull;&nbsp;<a href=\"";
                echo (isset($context["U_SWITCH_GUEST_DISPLAY"]) ? $context["U_SWITCH_GUEST_DISPLAY"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SWITCH_GUEST_DISPLAY");
                echo "</a>";
            }
            echo "</td>
\t\t</tr>
\t";
        }
        // line 40
        echo "\t</tbody>
\t</table>
\t</div>
</div>

<div class=\"row\">
 <div class=\"col-md-5\">
  ";
        // line 47
        $location = "jumpbox_options.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox_options.html", "viewonline_body.html", 47)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 48
        echo " </div>
 <div class=\"col-md-7\">
\t<ul class=\"pagination pagination-sm pull-right\">
\t\t";
        // line 51
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 52
            echo "\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "viewonline_body.html", 52)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 53
            echo "\t\t";
        } else {
            // line 54
            echo "\t\t\t<li class=\"active\"><a>";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a></li>\t
\t\t";
        }
        // line 56
        echo "    </ul>\t
 </div>
</div>
";
        // line 59
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewonline_body.html", 59)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewonline_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 59,  217 => 56,  211 => 54,  208 => 53,  195 => 52,  193 => 51,  188 => 48,  176 => 47,  167 => 40,  154 => 37,  151 => 36,  148 => 35,  139 => 32,  133 => 31,  130 => 30,  124 => 29,  108 => 28,  105 => 27,  101 => 26,  92 => 22,  86 => 21,  80 => 20,  74 => 17,  67 => 13,  63 => 11,  53 => 7,  49 => 5,  47 => 4,  36 => 3,  31 => 2,  19 => 1,);
    }
}
