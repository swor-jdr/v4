<?php

/* ucp_pm_history.html */
class __TwigTemplate_ad6cadbe021c4bc479d2cc7c8c466a606eafafd5f0fa97c1a4b3c8bd3703046b extends Twig_Template
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
        echo "</div><!-- breaks the tabbed panel so the review is not merged into the tabs above -->

<div class=\"clearfix\">
<div class=\"side-segment\"><h3>";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("MESSAGE_HISTORY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "
   <small class=\"pull-right\" id=\"topic-review\">
\t <a data-text-swap=\"";
        // line 6
        echo $this->env->getExtension('phpbb')->lang("EXPAND_CLOSE");
        echo "\" data-text-original=\"";
        echo $this->env->getExtension('phpbb')->lang("EXPAND_VIEW");
        echo "\" class=\"topic-review-trigger\" href=\"#topic-review\">";
        echo $this->env->getExtension('phpbb')->lang("EXPAND_VIEW");
        echo "</a>
\t</small></h3></div>
</div>
";
        // line 9
        // line 10
        echo "<div class=\"topicreview-content\">
<script>
\tbbcodeEnabled = ";
        // line 12
        echo (isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null);
        echo ";
</script>
\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "history_row", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["history_row"]) {
            // line 15
            echo "\t\t<div class=\"well well-sm\" id=\"pr";
            echo $this->getAttribute($context["history_row"], "MSG_ID", array());
            echo "\">
\t\t <h3><a href=\"";
            // line 16
            echo $this->getAttribute($context["history_row"], "U_VIEW_MESSAGE", array());
            echo "\"";
            if ($this->getAttribute($context["history_row"], "S_CURRENT_MSG", array())) {
                echo " class=\"current\"";
            }
            echo ">";
            echo $this->getAttribute($context["history_row"], "SUBJECT", array());
            echo "</a></h3>
\t\t\t<div class=\"pull-left\">
\t\t\t ";
            // line 18
            echo $this->getAttribute($context["history_row"], "MINI_POST_IMG", array());
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("SENT_AT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "&nbsp;<strong>";
            echo $this->getAttribute($context["history_row"], "SENT_DATE", array());
            echo "</strong><br /> 
\t\t\t ";
            // line 19
            echo $this->env->getExtension('phpbb')->lang("MESSAGE_BY_AUTHOR");
            echo "&nbsp;";
            echo $this->getAttribute($context["history_row"], "MESSAGE_AUTHOR_FULL", array());
            echo "
\t\t\t</div> 
\t\t\t";
            // line 21
            $value = ($this->getAttribute($context["history_row"], "U_QUOTE", array()) || $this->getAttribute($context["history_row"], "MESSAGE_AUTHOR_QUOTE", array()));
            $context['definition']->set('SHOW_PM_HISTORY_POST_BUTTONS', $value);
            // line 22
            echo "\t\t\t
\t\t\t";
            // line 23
            // line 24
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SHOW_PM_HISTORY_POST_BUTTONS", array())) {
                // line 25
                echo "\t\t\t<div class=\"pull-right\">
\t\t\t";
                // line 26
                // line 27
                echo "\t\t\t\t";
                if (($this->getAttribute($context["history_row"], "U_QUOTE", array()) || $this->getAttribute($context["history_row"], "MESSAGE_AUTHOR_QUOTE", array()))) {
                    // line 28
                    echo "\t\t\t\t<a class=\"btn btn-sm btn-default\"";
                    if ($this->getAttribute($context["history_row"], "U_QUOTE", array())) {
                        echo " href=\"";
                        echo $this->getAttribute($context["history_row"], "U_QUOTE", array());
                        echo "\"";
                    } else {
                        echo " href=\"#postingbox\" onclick=\"addquote(";
                        echo $this->getAttribute($context["history_row"], "MSG_ID", array());
                        echo ", '";
                        echo $this->getAttribute($context["history_row"], "MESSAGE_AUTHOR_QUOTE", array());
                        echo "', '";
                        echo addslashes($this->env->getExtension('phpbb')->lang("WROTE"));
                        echo "');\"";
                    }
                    echo " title=\"";
                    echo $this->env->getExtension('phpbb')->lang("QUOTE");
                    echo " ";
                    echo $this->getAttribute($context["history_row"], "MESSAGE_AUTHOR", array());
                    echo "\"><i class=\"fa fa-comment\"></i></a>
\t\t\t    ";
                }
                // line 30
                echo "\t\t\t";
                // line 31
                echo "\t\t\t</div>
\t\t\t";
            }
            // line 33
            echo "\t\t\t";
            // line 34
            echo "\t\t\t
\t\t  <div class=\"space10\"></div>
\t\t\t<div class=\"content\">";
            // line 36
            if ($this->getAttribute($context["history_row"], "MESSAGE", array())) {
                echo $this->getAttribute($context["history_row"], "MESSAGE", array());
            } else {
                echo "<span class=\"error\">";
                echo $this->env->getExtension('phpbb')->lang("MESSAGE_REMOVED_FROM_OUTBOX");
                echo "</span>";
            }
            echo "</div>
\t\t\t <div id=\"message_";
            // line 37
            echo $this->getAttribute($context["history_row"], "MSG_ID", array());
            echo "\" style=\"display: none;\">";
            echo $this->getAttribute($context["history_row"], "DECODED_MESSAGE", array());
            echo "</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "<script>
// some function that depends on bootstrap and jquery
// We use a single ternary operator to check if the swap matches the orignal and perform the right action text swap based on the truthiness
head.ready(function () {

\$('.topic-review-trigger').click(function() {
  var el = \$(this);
    el.text() == el.data(\"text-swap\") ? el.text(el.data(\"text-original\")) : el.text(el.data(\"text-swap\"));
    \$('.topicreview-content').toggleClass('topicreview-expand');
});

});
</script>
</div>
";
        // line 54
        // line 55
        echo "<hr />
</div>
";
    }

    public function getTemplateName()
    {
        return "ucp_pm_history.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 55,  174 => 54,  158 => 40,  147 => 37,  137 => 36,  133 => 34,  131 => 33,  127 => 31,  125 => 30,  103 => 28,  100 => 27,  99 => 26,  96 => 25,  93 => 24,  92 => 23,  89 => 22,  86 => 21,  79 => 19,  70 => 18,  59 => 16,  54 => 15,  50 => 14,  45 => 12,  41 => 10,  40 => 9,  30 => 6,  24 => 4,  19 => 1,);
    }
}
