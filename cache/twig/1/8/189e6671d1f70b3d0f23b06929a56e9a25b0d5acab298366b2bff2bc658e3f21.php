<?php

/* @phpbb_pages/event/overall_footer_timezone_before.html */
class __TwigTemplate_189e6671d1f70b3d0f23b06929a56e9a25b0d5acab298366b2bff2bc658e3f21 extends Twig_Template
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
        // line 2
        if ((isset($context["S_OVERALL_FOOTER_TIMEZONE_AFTER"]) ? $context["S_OVERALL_FOOTER_TIMEZONE_AFTER"] : null)) {
            // line 3
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "overall_footer_timezone_after_links", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["overall_footer_timezone_after_links"]) {
                // line 4
                echo "\t\t<li class=\"small-icon icon-pages icon-page-";
                echo $this->getAttribute((isset($context["overall_footer_timezone_before_links"]) ? $context["overall_footer_timezone_before_links"] : null), "LINK_ROUTE", array());
                echo " rightside\"";
                if ($this->getAttribute($context["overall_footer_timezone_after_links"], "ICON_LINK", array())) {
                    echo " style=\"background-image: url('";
                    echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                    echo "/images/";
                    echo $this->getAttribute($context["overall_footer_timezone_after_links"], "ICON_LINK", array());
                    echo "');\"";
                }
                echo ">
\t\t\t<a href=\"";
                // line 5
                echo $this->getAttribute($context["overall_footer_timezone_after_links"], "U_LINK_URL", array());
                echo "\" role=\"menuitem\">";
                echo $this->getAttribute($context["overall_footer_timezone_after_links"], "LINK_TITLE", array());
                echo "</a>
\t\t</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['overall_footer_timezone_after_links'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_pages/event/overall_footer_timezone_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  26 => 4,  21 => 3,  19 => 2,);
    }
}
