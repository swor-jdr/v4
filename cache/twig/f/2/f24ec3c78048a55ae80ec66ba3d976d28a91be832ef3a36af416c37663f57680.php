<?php

/* captcha_qa_acp_demo.html */
class __TwigTemplate_f24ec3c78048a55ae80ec66ba3d976d28a91be832ef3a36af416c37663f57680 extends Twig_Template
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
        echo "<dl>
\t<dt><label for=\"answer\">";
        // line 2
        if ((isset($context["QA_CONFIRM_QUESTION"]) ? $context["QA_CONFIRM_QUESTION"] : null)) {
            echo " ";
            echo (isset($context["QA_CONFIRM_QUESTION"]) ? $context["QA_CONFIRM_QUESTION"] : null);
            echo " ";
        } else {
            echo " ";
            echo $this->env->getExtension('phpbb')->lang("CONFIRM_QUESTION");
            echo " ";
        }
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_QUESTION_EXPLAIN");
        echo "</span></dt>

\t<dd>
\t\t<input type=\"text\" tabindex=\"10\" name=\"answer\" id=\"answer\" size=\"45\" class=\"inputbox autowidth\" title=\"";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("ANSWER");
        echo "\"  />
\t</dd>
</dl>
";
    }

    public function getTemplateName()
    {
        return "captcha_qa_acp_demo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  22 => 2,  19 => 1,);
    }
}
