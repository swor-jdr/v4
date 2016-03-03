<?php

/* pagination.html */
class __TwigTemplate_bf2849698ef2ead9c35250293b27d1663e6684dabd64a8a5dcd722f9c2b9a3ac extends Twig_Template
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
        echo "<ul>
";
        // line 2
        if (((isset($context["BASE_URL"]) ? $context["BASE_URL"] : null) && ((isset($context["TOTAL_PAGES"]) ? $context["TOTAL_PAGES"] : null) > 6))) {
            // line 3
            echo "\t<li class=\"dropdown-container dropdown-button-control dropdown-page-jump page-jump\">
\t\t<a href=\"#\" class=\"dropdown-trigger\" title=\"";
            // line 4
            echo $this->env->getExtension('phpbb')->lang("JUMP_TO_PAGE_CLICK");
            echo "\" role=\"button\">";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a>
\t\t<div class=\"dropdown hidden\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t<li>";
            // line 8
            echo $this->env->getExtension('phpbb')->lang("JUMP_TO_PAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</li>
\t\t\t\t<li class=\"page-jump-form\">
\t\t\t\t\t<input type=\"number\" name=\"page-number\" min=\"1\" maxlength=\"6\" title=\"";
            // line 10
            echo $this->env->getExtension('phpbb')->lang("JUMP_PAGE");
            echo "\" class=\"inputbox tiny\" data-per-page=\"";
            echo (isset($context["PER_PAGE"]) ? $context["PER_PAGE"] : null);
            echo "\" data-base-url=\"";
            echo twig_escape_filter($this->env, (isset($context["BASE_URL"]) ? $context["BASE_URL"] : null), "html_attr");
            echo "\" data-start-name=\"";
            echo (isset($context["START_NAME"]) ? $context["START_NAME"] : null);
            echo "\" />
\t\t\t\t\t<input class=\"button2\" value=\"";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" type=\"button\" />
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</li>
";
        }
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
            // line 18
            echo "\t";
            if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                // line 19
                echo "\t<li class=\"previous\"><a href=\"";
                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                echo "\" rel=\"prev\" role=\"button\">";
                echo $this->env->getExtension('phpbb')->lang("PREVIOUS");
                echo "</a></li>
\t";
            } elseif ($this->getAttribute(            // line 20
$context["pagination"], "S_IS_CURRENT", array())) {
                // line 21
                echo "\t<li class=\"active\"><span>";
                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                echo "</span></li>
\t";
            } elseif ($this->getAttribute(            // line 22
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                // line 23
                echo "\t<li class=\"ellipsis\" role=\"separator\"><span>";
                echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                echo "</span></li>
\t";
            } elseif ($this->getAttribute(            // line 24
$context["pagination"], "S_IS_NEXT", array())) {
                // line 25
                echo "\t<li class=\"next\"><a href=\"";
                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                echo "\" rel=\"next\" role=\"button\">";
                echo $this->env->getExtension('phpbb')->lang("NEXT");
                echo "</a></li>
\t";
            } else {
                // line 27
                echo "\t<li><a href=\"";
                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                echo "\" role=\"button\">";
                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                echo "</a></li>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "pagination.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 30,  99 => 27,  91 => 25,  89 => 24,  84 => 23,  82 => 22,  77 => 21,  75 => 20,  68 => 19,  65 => 18,  61 => 17,  52 => 11,  42 => 10,  36 => 8,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
