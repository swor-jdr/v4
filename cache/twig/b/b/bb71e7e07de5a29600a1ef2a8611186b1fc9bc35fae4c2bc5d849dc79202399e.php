<?php

/* posting_preview.html */
class __TwigTemplate_bb71e7e07de5a29600a1ef2a8611186b1fc9bc35fae4c2bc5d849dc79202399e extends Twig_Template
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
        echo "<div class=\"well well-sm\" id=\"preview\">
";
        // line 2
        if ((isset($context["S_HAS_POLL_OPTIONS"]) ? $context["S_HAS_POLL_OPTIONS"] : null)) {
            // line 3
            echo "\t<div class=\"content\">
\t\t<h2>";
            // line 4
            echo $this->env->getExtension('phpbb')->lang("PREVIEW");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "&nbsp;";
            echo (isset($context["POLL_QUESTION"]) ? $context["POLL_QUESTION"] : null);
            echo "</h2>
\t\t<p>";
            // line 5
            if ((isset($context["L_POLL_LENGTH"]) ? $context["L_POLL_LENGTH"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("POLL_LENGTH");
                echo "<br />";
            }
            echo $this->env->getExtension('phpbb')->lang("MAX_VOTES");
            echo "</p>
\t\t<fieldset>
\t\t";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "poll_option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 8
                echo "\t\t\t";
                if ((isset($context["S_IS_MULTI_CHOICE"]) ? $context["S_IS_MULTI_CHOICE"] : null)) {
                    echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                    echo "\" value=\"";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                    echo "\"";
                    if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                        echo " checked=\"checked\"";
                    }
                    echo " ><label for=\"vote_";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                    echo "\">";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                    echo "</label>";
                } else {
                    echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                    echo "\" value=\"";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                    echo "\"";
                    if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                        echo " checked=\"checked\"";
                    }
                    echo " ><label for=\"vote_";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                    echo "\">";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                    echo "</label>";
                }
                // line 9
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t\t</fieldset>
\t</div>
</div>

<div class=\"well well-sm\">
";
        }
        // line 16
        echo "\t\t<h3>";
        echo $this->env->getExtension('phpbb')->lang("PREVIEW");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "&nbsp;";
        echo (isset($context["PREVIEW_SUBJECT"]) ? $context["PREVIEW_SUBJECT"] : null);
        echo "</h3>
\t\t<div class=\"content\">";
        // line 17
        echo (isset($context["PREVIEW_MESSAGE"]) ? $context["PREVIEW_MESSAGE"] : null);
        echo "</div>
\t\t";
        // line 18
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attachment", array()))) {
            // line 19
            echo "\t\t<div class=\"attachbox\">
\t\t\t<h5>";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
            echo "</h5>
\t\t\t";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attachment", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 22
                echo "\t\t\t<span>";
                echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                echo "</span>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t</div>
\t\t";
        }
        // line 26
        echo "\t\t";
        if ((isset($context["PREVIEW_SIGNATURE"]) ? $context["PREVIEW_SIGNATURE"] : null)) {
            // line 27
            echo "\t\t<p class=\"separator text-center hidden-xs\"><i class=\"fa fa-ellipsis-h fa-2x\"></i></p>
\t\t<div class=\"hidden-xs post-signature\">";
            // line 28
            echo (isset($context["PREVIEW_SIGNATURE"]) ? $context["PREVIEW_SIGNATURE"] : null);
            echo "</div>
\t\t";
        }
        // line 30
        echo "</div>


";
    }

    public function getTemplateName()
    {
        return "posting_preview.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 30,  136 => 28,  133 => 27,  130 => 26,  126 => 24,  117 => 22,  113 => 21,  109 => 20,  106 => 19,  104 => 18,  100 => 17,  92 => 16,  84 => 10,  78 => 9,  47 => 8,  43 => 7,  34 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
