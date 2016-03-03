<?php

/* @phpbb_pages/event/navbar_header_quick_links_after.html */
class __TwigTemplate_dfb7e9dad268bf65d5d17d3a43ffbf0399940e93fd51b39e4ba9b1acecdd0636 extends Twig_Template
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
        if ((isset($context["S_NAVBAR_HEADER_QUICK_LINKS_AFTER"]) ? $context["S_NAVBAR_HEADER_QUICK_LINKS_AFTER"] : null)) {
            // line 2
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navbar_header_quick_links_after_links", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["navbar_header_quick_links_after_links"]) {
                // line 3
                echo "\t\t<li class=\"small-icon icon-pages icon-page-";
                echo $this->getAttribute($context["navbar_header_quick_links_after_links"], "LINK_ROUTE", array());
                echo "\"";
                if ($this->getAttribute($context["navbar_header_quick_links_after_links"], "ICON_LINK", array())) {
                    echo " style=\"background-image: url('";
                    echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                    echo "/images/";
                    echo $this->getAttribute($context["navbar_header_quick_links_after_links"], "ICON_LINK", array());
                    echo "');\"";
                }
                echo ">
\t\t\t<a href=\"";
                // line 4
                echo $this->getAttribute($context["navbar_header_quick_links_after_links"], "U_LINK_URL", array());
                echo "\" role=\"menuitem\">";
                echo $this->getAttribute($context["navbar_header_quick_links_after_links"], "LINK_TITLE", array());
                echo "</a>
\t\t</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navbar_header_quick_links_after_links'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_pages/event/navbar_header_quick_links_after.html";
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
