<?php

/* addons/header_teaser_body.html */
class __TwigTemplate_4f404450d3a238735ca03e26d9f2997ec85ea4fb6260dce6f36d12b76973a1b3 extends Twig_Template
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
        echo "<div class=\"masthead flat-header\">
    <div class=\"wrapper-head\">
\t <div class=\"container\">
\t \t";
        // line 4
        if ((((isset($context["TEASER_TITLE"]) ? $context["TEASER_TITLE"] : null) != "") || ((isset($context["TEASER_TEXT"]) ? $context["TEASER_TEXT"] : null) != ""))) {
            // line 5
            echo "\t \t\t<h1>";
            echo (isset($context["TEASER_TITLE"]) ? $context["TEASER_TITLE"] : null);
            echo "</h1>
       \t\t<p>";
            // line 6
            echo (isset($context["TEASER_TEXT"]) ? $context["TEASER_TEXT"] : null);
            echo "</p>
\t \t";
        } else {
            // line 8
            echo "\t\t\t<h1>L'Armée des Ombres&nbsp;<a class=\"label label-call\" href=\"./intro/\" target=\"_blank\">Voir l'intro</a></h1>
\t\t\t<p>Saison XI</p>
        ";
        }
        // line 11
        echo "     </div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "addons/header_teaser_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  36 => 8,  31 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
