<?php

/* @phpbb_pages/event/overall_header_navigation_prepend.html */
class __TwigTemplate_f1be2eecf05f5e34690f22573a943a822e7617a73369f64e008241f469df6ae9 extends Twig_Template
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
        if ((isset($context["S_OVERALL_HEADER_NAVIGATION_PREPEND"]) ? $context["S_OVERALL_HEADER_NAVIGATION_PREPEND"] : null)) {
            // line 2
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "overall_header_navigation_prepend_links", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["overall_header_navigation_prepend_links"]) {
                // line 3
                echo "\t\t<li class=\"small-icon icon-pages icon-page-";
                echo $this->getAttribute($context["overall_header_navigation_prepend_links"], "LINK_ROUTE", array());
                echo " no-bulletin\"";
                if ($this->getAttribute($context["overall_header_navigation_prepend_links"], "ICON_LINK", array())) {
                    echo " style=\"background-image: url('";
                    echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                    echo "/images/";
                    echo $this->getAttribute($context["overall_header_navigation_prepend_links"], "ICON_LINK", array());
                    echo "');\"";
                }
                echo ">
\t\t\t<a href=\"";
                // line 4
                echo $this->getAttribute($context["overall_header_navigation_prepend_links"], "U_LINK_URL", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["overall_header_navigation_prepend_links"], "LINK_TITLE", array());
                echo "\" role=\"menuitem\">";
                echo $this->getAttribute($context["overall_header_navigation_prepend_links"], "LINK_TITLE", array());
                echo "</a>
\t\t</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['overall_header_navigation_prepend_links'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_pages/event/overall_header_navigation_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
