<?php

/* @phpbb_pages/event/overall_header_navigation_append.html */
class __TwigTemplate_b897ad9d64b6f56c921fd98f304decdc32de91704bbb07c082f02b6ca5161c11 extends Twig_Template
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
        if ((isset($context["S_OVERALL_HEADER_NAVIGATION_APPEND"]) ? $context["S_OVERALL_HEADER_NAVIGATION_APPEND"] : null)) {
            // line 2
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "overall_header_navigation_append_links", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["overall_header_navigation_append_links"]) {
                // line 3
                echo "\t\t<li class=\"small-icon icon-pages icon-page-";
                echo $this->getAttribute($context["overall_header_navigation_append_links"], "LINK_ROUTE", array());
                echo " no-bulletin\"";
                if ($this->getAttribute($context["overall_header_navigation_append_links"], "ICON_LINK", array())) {
                    echo " style=\"background-image:url('";
                    echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                    echo "/images/";
                    echo $this->getAttribute($context["overall_header_navigation_append_links"], "ICON_LINK", array());
                    echo "');\"";
                }
                echo ">
\t\t\t<a href=\"";
                // line 4
                echo $this->getAttribute($context["overall_header_navigation_append_links"], "U_LINK_URL", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["overall_header_navigation_append_links"], "LINK_TITLE", array());
                echo "\" role=\"menuitem\">";
                echo $this->getAttribute($context["overall_header_navigation_append_links"], "LINK_TITLE", array());
                echo "</a>
\t\t</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['overall_header_navigation_append_links'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_pages/event/overall_header_navigation_append.html";
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
