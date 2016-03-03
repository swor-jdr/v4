<?php

/* posting_topic_review.html */
class __TwigTemplate_969e65a278d9eab1aeaaeeadd49b05b63599bc5d97542bb0462afffa58eecebb extends Twig_Template
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
        echo "<div class=\"clearfix\">
<div class=\"side-segment\"><h3>";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("TOPIC_REVIEW");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "&nbsp;";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "
   <small class=\"pull-right\" id=\"topic-review\">
\t <a data-text-swap=\"";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("EXPAND_CLOSE");
        echo "\" data-text-original=\"";
        echo $this->env->getExtension('phpbb')->lang("EXPAND_VIEW");
        echo "\" class=\"topic-review-trigger\" href=\"#topic-review\">";
        echo $this->env->getExtension('phpbb')->lang("EXPAND_VIEW");
        echo "</a>
\t</small></h3></div>
</div>

<div class=\"topicreview-content\">
";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_review_row", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["topic_review_row"]) {
            // line 10
            echo "\t";
            if ($this->getAttribute($context["topic_review_row"], "S_IGNORE_POST", array())) {
                // line 11
                echo "\t<div class=\"well post-ignore\">
\t\t<span>";
                // line 12
                echo $this->getAttribute($context["topic_review_row"], "L_IGNORE_POST", array());
                echo "</span>
\t\t <a class=\"btn btn-warning btn-xs\" data-toggle=\"collapse\" href=\"#pr";
                // line 13
                echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
                echo "\" aria-expanded=\"false\" aria-controls=\"pr";
                echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SHOW");
                echo "</a>
\t    <div class=\"space10\"></div>
    ";
            } else {
                // line 16
                echo "    ";
            }
            // line 17
            echo "\t<div class=\"panel panel-default panel-body post text-muted ";
            if ($this->getAttribute($context["topic_review_row"], "S_IGNORE_POST", array())) {
                echo "collapse";
            } else {
            }
            echo "\" id=\"pr";
            echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
            echo "\">
\t <h3><a href=\"#pr";
            // line 18
            echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
            echo "\">";
            echo $this->getAttribute($context["topic_review_row"], "POST_SUBJECT", array());
            echo "</a>";
            if ((isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                echo "<span class=\"pull-right post-id hidden-xs\"><i class=\"fa fa-file\"></i></span>";
            } else {
                echo "<span class=\"pull-right post-id hidden-xs\"><a href=\"";
                echo $this->getAttribute($context["topic_review_row"], "U_MINI_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO_POST");
                echo "\">&#35;";
                echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
                echo "</a></span>";
            }
            echo "</h3>
\t <div class=\"clearfix\">
\t ";
            // line 20
            if ((($this->getAttribute($context["topic_review_row"], "POSTER_QUOTE", array()) && $this->getAttribute($context["topic_review_row"], "DECODED_MESSAGE", array())) || $this->getAttribute($context["topic_review_row"], "U_MCP_DETAILS", array()))) {
                // line 21
                echo "\t\t<div class=\"text-muted pull-left\">
\t\t  ";
                // line 22
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo "<strong>&nbsp;";
                echo $this->getAttribute($context["topic_review_row"], "POST_AUTHOR_FULL", array());
                echo "</strong>&nbsp;&raquo;&nbsp;";
                echo $this->getAttribute($context["topic_review_row"], "POST_DATE", array());
                echo "
\t\t</div>
\t\t
\t
\t    <div class=\"pull-right\">
\t\t\t";
                // line 27
                if (($this->getAttribute($context["topic_review_row"], "POSTER_QUOTE", array()) && $this->getAttribute($context["topic_review_row"], "DECODED_MESSAGE", array()))) {
                    // line 28
                    echo "\t\t\t<a class=\"btn btn-sm btn-default\" href=\"#postingbox\" onclick=\"addquote(";
                    echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
                    echo ", '";
                    echo $this->getAttribute($context["topic_review_row"], "POSTER_QUOTE", array());
                    echo "', '";
                    echo addslashes($this->env->getExtension('phpbb')->lang("WROTE"));
                    echo "');\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("QUOTE");
                    echo " ";
                    echo $this->getAttribute($context["topic_review_row"], "POST_AUTHOR", array());
                    echo "\"><i class=\"fa fa-comment\"></i></a>
\t\t\t";
                }
                // line 30
                echo "\t\t\t
\t\t\t";
                // line 31
                if ($this->getAttribute($context["topic_review_row"], "U_MCP_DETAILS", array())) {
                    // line 32
                    echo "\t\t\t<a class=\"btn btn-sm btn-default\" href=\"";
                    echo $this->getAttribute($context["topic_review_row"], "U_MCP_DETAILS", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
                    echo "\"><i class=\"fa fa-question-circle\"></i></a>
\t\t\t";
                }
                // line 34
                echo "\t\t</div>
\t ";
            }
            // line 36
            echo "\t </div>
\t\t
\t    <div class=\"content clearfix\">";
            // line 38
            echo $this->getAttribute($context["topic_review_row"], "MESSAGE", array());
            echo "</div>
\t
\t\t\t";
            // line 40
            if ($this->getAttribute($context["topic_review_row"], "S_HAS_ATTACHMENTS", array())) {
                // line 41
                echo "\t\t\t\t<div class=\"attachbox\">
\t\t\t\t\t<h5>";
                // line 42
                echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                echo "</h5>
\t\t\t\t\t";
                // line 43
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topic_review_row"], "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 44
                    echo "\t\t\t\t\t\t<span>";
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                    echo "</span>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 48
            echo "\t\t\t";
            if (($this->getAttribute($context["topic_review_row"], "POSTER_QUOTE", array()) && $this->getAttribute($context["topic_review_row"], "DECODED_MESSAGE", array()))) {
                // line 49
                echo "\t\t\t\t<div id=\"message_";
                echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
                echo "\" style=\"display: none;\">";
                echo $this->getAttribute($context["topic_review_row"], "DECODED_MESSAGE", array());
                echo "</div>
\t\t\t";
            }
            // line 51
            echo "\t</div>
\t
";
            // line 53
            if ($this->getAttribute($context["topic_review_row"], "S_IGNORE_POST", array())) {
                // line 54
                echo "</div>
";
            } else {
            }
            // line 57
            echo "\t\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_review_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
<script>
// some function that depends on bootstrap and jquery
// We use a single ternary operator to check if the swap matches the orignal and perform the right action text swap based on the truthiness
head.ready(function () {
bbcodeEnabled = ";
        // line 64
        echo (isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null);
        echo ";
\$('.topic-review-trigger').click(function() {
  var el = \$(this);
    el.text() == el.data(\"text-swap\") ? el.text(el.data(\"text-original\")) : el.text(el.data(\"text-swap\"));
    \$('.topicreview-content').toggleClass('topicreview-expand');
});

});
</script>
</div>
";
    }

    public function getTemplateName()
    {
        return "posting_topic_review.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 64,  212 => 59,  205 => 57,  200 => 54,  198 => 53,  194 => 51,  186 => 49,  183 => 48,  179 => 46,  170 => 44,  166 => 43,  162 => 42,  159 => 41,  157 => 40,  152 => 38,  148 => 36,  144 => 34,  136 => 32,  134 => 31,  131 => 30,  117 => 28,  115 => 27,  103 => 22,  100 => 21,  98 => 20,  79 => 18,  69 => 17,  66 => 16,  56 => 13,  52 => 12,  49 => 11,  46 => 10,  42 => 9,  30 => 4,  22 => 2,  19 => 1,);
    }
}
