<?php

/* posting_review.html */
class __TwigTemplate_773ad2dc1e3bc27240a3f78a7278342216c20e64f007136213b4f9fa6260d6a6 extends Twig_Template
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
        echo "<h3>";
        echo $this->env->getExtension('phpbb')->lang("POST_REVIEW");
        echo "</h3>
<p>";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("POST_REVIEW_EXPLAIN");
        echo "</p>
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "post_review_row", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["post_review_row"]) {
            // line 4
            if ($this->getAttribute($context["post_review_row"], "S_IGNORE_POST", array())) {
                // line 5
                echo "<div class=\"well post-ignore\">
\t<div class=\"inner\">
\t\t";
                // line 7
                echo $this->getAttribute($context["post_review_row"], "L_IGNORE_POST", array());
                echo "
";
            } else {
                // line 9
                echo "<div class=\"post";
                if ($this->getAttribute($context["post_review_row"], "ONLINE_STATUS", array())) {
                    echo " online";
                }
                echo "\">
";
            }
            // line 11
            echo "\t<div class=\"well\" id=\"ppr";
            echo $this->getAttribute($context["post_review_row"], "POST_ID", array());
            echo "\">
\t\t<h3><a href=\"#ppr";
            // line 12
            echo $this->getAttribute($context["post_review_row"], "POST_ID", array());
            echo "\">";
            echo $this->getAttribute($context["post_review_row"], "POST_SUBJECT", array());
            echo "</a></h3>
\t\t<p class=\"author\">";
            // line 13
            if ((isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                echo $this->getAttribute($context["post_review_row"], "MINI_POST_IMG", array());
            } else {
                echo "<a href=\"";
                echo $this->getAttribute($context["post_review_row"], "U_MINI_POST", array());
                echo "\">";
                echo $this->getAttribute($context["post_review_row"], "MINI_POST_IMG", array());
                echo "</a>";
            }
            echo " ";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo "<strong>  ";
            echo $this->getAttribute($context["post_review_row"], "POST_AUTHOR_FULL", array());
            echo "</strong> &raquo; ";
            echo $this->getAttribute($context["post_review_row"], "POST_DATE", array());
            echo "</p>
\t\t<div class=\"content\">";
            // line 14
            echo $this->getAttribute($context["post_review_row"], "MESSAGE", array());
            echo "</div>
\t\t";
            // line 15
            if ($this->getAttribute($context["post_review_row"], "S_HAS_ATTACHMENTS", array())) {
                // line 16
                echo "\t\t\t<div class=\"attachbox\">
\t\t\t\t<h5>";
                // line 17
                echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                echo "</h5>
\t\t\t\t";
                // line 18
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post_review_row"], "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 19
                    echo "\t\t\t\t\t<span>";
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                    echo "</span>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "\t\t\t</div>
\t\t";
            }
            // line 23
            echo "\t</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_review_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "<hr />";
    }

    public function getTemplateName()
    {
        return "posting_review.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 26,  110 => 23,  106 => 21,  97 => 19,  93 => 18,  89 => 17,  86 => 16,  84 => 15,  80 => 14,  62 => 13,  56 => 12,  51 => 11,  43 => 9,  38 => 7,  34 => 5,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
