<?php

/* mcp_ban.html */
class __TwigTemplate_821ea91da6b7a22ccf652eb2d9c60356baae1575e4b14f3e0dc72d3348ac9030 extends Twig_Template
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
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_header.html", "mcp_ban.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<script>
// <![CDATA[

\tvar ban_length = new Array();
\t\tban_length[-1] = '';
\tvar ban_reason = new Array();
\t\tban_reason[-1] = '';
\tvar ban_give_reason = new Array();
\t\tban_give_reason[-1] = '';

\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "bans", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["bans"]) {
            // line 13
            echo "\t\tban_length['";
            echo $this->getAttribute($context["bans"], "BAN_ID", array());
            echo "'] = '";
            echo $this->getAttribute($context["bans"], "A_LENGTH", array());
            echo "';
\t\t";
            // line 14
            if ($this->getAttribute($context["bans"], "A_REASON", array())) {
                // line 15
                echo "\t\t\tban_reason['";
                echo $this->getAttribute($context["bans"], "BAN_ID", array());
                echo "'] = '";
                echo $this->getAttribute($context["bans"], "A_REASON", array());
                echo "';
\t\t";
            }
            // line 17
            echo "\t\t";
            if ($this->getAttribute($context["bans"], "A_GIVE_REASON", array())) {
                // line 18
                echo "\t\t\tban_give_reason['";
                echo $this->getAttribute($context["bans"], "BAN_ID", array());
                echo "'] = '";
                echo $this->getAttribute($context["bans"], "A_GIVE_REASON", array());
                echo "';
\t\t";
            }
            // line 20
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bans'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
\tfunction display_details(option)
\t{
\t\tdocument.getElementById('unbanlength').innerHTML = ban_length[option];
\t\tif (option in ban_reason) {
\t\t\tdocument.getElementById('unbanreason').innerHTML = ban_reason[option];
\t\t} else {
\t\t\tdocument.getElementById('unbanreason').innerHTML = '';
\t\t}
\t\tif (option in ban_give_reason) {
\t\t\tdocument.getElementById('unbangivereason').innerHTML = ban_give_reason[option];
\t\t} else {
\t\t\tdocument.getElementById('unbangivereason').innerHTML = '';
\t\t}
\t}

// ]]>
</script>

<form id=\"mcp_ban\" method=\"post\" action=\"";
        // line 40
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">
<div class=\"tab-pane active\">
<fieldset class=\"framed-ucp\">
<legend>";
        // line 43
        echo $this->env->getExtension('phpbb')->lang("MCP_MANAG_BAN");
        echo "</legend>
\t  <p>";
        // line 44
        echo $this->env->getExtension('phpbb')->lang("EXPLAIN");
        echo "</p>
";
        // line 45
        // line 46
        echo "\t<div class=\"control-group\"> 
\t    <label class=\"control-label\" for=\"ban\">";
        // line 47
        echo $this->env->getExtension('phpbb')->lang("BAN_CELL");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>";
        if ((isset($context["S_USERNAME_BAN"]) ? $context["S_USERNAME_BAN"] : null)) {
            echo "<span class=\"help-block\"><a href=\"";
            echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
            echo "\" onclick=\"find_username(this.href); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
            echo "</a></span>";
        }
        // line 48
        echo "\t<div class=\"controls controls-row\"> 
       <textarea placeholder=\"\" rows=\"2\" name=\"ban\" id=\"ban\" class=\"form-control\">";
        // line 49
        echo (isset($context["BAN_QUANTIFIER"]) ? $context["BAN_QUANTIFIER"] : null);
        echo "</textarea>
\t</div> 
\t</div>
\t
    <div class=\"control-group\"> 
\t    <label class=\"control-label\" for=\"banlength\">";
        // line 54
        echo $this->env->getExtension('phpbb')->lang("BAN_LENGTH");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div class=\"controls controls-row\"> 
     <select class=\"selectpicker\"  name=\"banlength\" id=\"banlength\" onchange=\"if(this.value==-1){document.getElementById('banlengthother').style.display = 'block';}else{document.getElementById('banlengthother').style.display='none';}\">";
        // line 56
        echo (isset($context["S_BAN_END_OPTIONS"]) ? $context["S_BAN_END_OPTIONS"] : null);
        echo "</select>
\t<div id=\"banlengthother\" style=\"display: none;\">
\t<label class=\"control-label\">";
        // line 58
        echo $this->env->getExtension('phpbb')->lang("YEAR_MONTH_DAY");
        echo "</label>
\t<input placeholder=\"2013-08-31\" type=\"text\" name=\"banlengthother\" class=\"form-control\" />
\t</div>
\t</div> 
\t<div class=\"space10\"></div>
\t</div>
\t
\t<div class=\"control-group\"> 
\t    <label class=\"control-label\" for=\"banreason\">";
        // line 66
        echo $this->env->getExtension('phpbb')->lang("BAN_REASON");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div class=\"controls controls-row\"> 
       <input type=\"text\" class=\"form-control\" placeholder=\"Spammer\" name=\"banreason\" id=\"banreason\" maxlength=\"255\">
\t</div> 
\t</div>
\t
\t<div class=\"control-group\"> 
\t    <label class=\"control-label\" for=\"bangivereason\">";
        // line 73
        echo $this->env->getExtension('phpbb')->lang("BAN_GIVE_REASON");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div class=\"controls controls-row\"> 
       <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 75
        echo $this->env->getExtension('phpbb')->lang("SPAMMER_PLACEHOLDER");
        echo "\" name=\"bangivereason\" id=\"bangivereason\" maxlength=\"255\">
\t</div> 
\t</div>
\t
\t<div class=\"control-group\"> 
\t    <label class=\"control-label\" for=\"banexclude0\">";
        // line 80
        echo $this->env->getExtension('phpbb')->lang("BAN_EXCLUDE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb')->lang("BAN_EXCLUDE_EXPLAIN");
        echo "</span>
\t<div class=\"controls controls-row\"> 
       <div class=\"radio\"><input type=\"radio\" name=\"banexclude\" id=\"banexclude1\" value=\"1\"><label for=\"banexclude1\">";
        // line 82
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label></div>
\t   <div class=\"radio\"><input type=\"radio\" checked=\"checked\" name=\"banexclude\" id=\"banexclude0\" value=\"0\"><label for=\"banexclude0\">";
        // line 83
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label></div>
\t</div> 
\t</div>
";
        // line 86
        // line 87
        echo "</fieldset>

<div class=\"space10\"></div>
<fieldset class=\"form-actions\">
\t";
        // line 91
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t<button type=\"reset\" value=\"";
        // line 92
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-default\">";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "</button>
\t<button type=\"submit\" name=\"bansubmit\" value=\"";
        // line 93
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"btn btn-default\">";
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "</button>
\t";
        // line 94
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>

<div class=\"space10\"></div>
<div class=\"well\">
\t<h3>";
        // line 99
        echo $this->env->getExtension('phpbb')->lang("UNBAN_TITLE");
        echo "</h3>
\t   <p>";
        // line 100
        echo $this->env->getExtension('phpbb')->lang("UNBAN_EXPLAIN");
        echo "</p>

\t";
        // line 102
        if ((isset($context["S_BANNED_OPTIONS"]) ? $context["S_BANNED_OPTIONS"] : null)) {
            // line 103
            echo "\t<fieldset>
\t";
            // line 104
            // line 105
            echo "\t<div class=\"control-group\"> 
\t    <label class=\"control-label\" for=\"unban\">";
            // line 106
            echo $this->env->getExtension('phpbb')->lang("BAN_CELL");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t<div class=\"controls controls-row\"> 
       <div class=\"selector\"> <select class=\"selectpicker\" data-container=\"body\" multiple=\"\" title=\"";
            // line 108
            echo $this->env->getExtension('phpbb')->lang("MARK_PLACEHOLDER");
            echo "\" data-selected-text-format=\"count\" name=\"unban[]\" id=\"unban\" onchange=\"if (this.selectedIndex != -1) {display_details(this.options[this.selectedIndex].value);}\">";
            echo (isset($context["BANNED_OPTIONS"]) ? $context["BANNED_OPTIONS"] : null);
            echo "</select></div>
\t</div> 
\t</div>
\t\t
\t<div class=\"widget-ban list\">
\t\t<ul class=\"list-unstyled\">
\t\t\t<li>
\t\t\t\t<span>";
            // line 115
            echo $this->env->getExtension('phpbb')->lang("BAN_LENGTH");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</span>
\t\t\t\t<span class=\"count\" id=\"unbanlength\"></span>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span>";
            // line 119
            echo $this->env->getExtension('phpbb')->lang("BAN_REASON");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</span>
\t\t\t\t<span class=\"count\" id=\"unbanreason\"></span>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span>";
            // line 123
            echo $this->env->getExtension('phpbb')->lang("BAN_GIVE_REASON");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</span>
\t\t\t\t<span class=\"count\" id=\"unbangivereason\"></span>
\t\t\t</li>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t</ul>
\t</div>
    ";
            // line 128
            // line 129
            echo "\t</fieldset>
</div>

\t<fieldset class=\"form-actions\">
\t";
            // line 133
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t<button type=\"reset\" value=\"";
            // line 134
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" name=\"reset\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "</button>
\t<button type=\"submit\" name=\"unbansubmit\" value=\"";
            // line 135
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "</button>
\t";
            // line 136
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
</fieldset>

\t";
        } else {
            // line 140
            echo "\t\t<p><strong>";
            echo $this->env->getExtension('phpbb')->lang("NO_BAN_CELL");
            echo "</strong></p>
\t";
        }
        // line 142
        echo "\t</div>
</form>
";
        // line 144
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_ban.html", 144)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_ban.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 144,  335 => 142,  329 => 140,  322 => 136,  316 => 135,  310 => 134,  306 => 133,  300 => 129,  299 => 128,  290 => 123,  282 => 119,  274 => 115,  262 => 108,  256 => 106,  253 => 105,  252 => 104,  249 => 103,  247 => 102,  242 => 100,  238 => 99,  230 => 94,  224 => 93,  218 => 92,  214 => 91,  208 => 87,  207 => 86,  201 => 83,  197 => 82,  189 => 80,  181 => 75,  175 => 73,  164 => 66,  153 => 58,  148 => 56,  142 => 54,  134 => 49,  131 => 48,  120 => 47,  117 => 46,  116 => 45,  112 => 44,  108 => 43,  102 => 40,  81 => 21,  75 => 20,  67 => 18,  64 => 17,  56 => 15,  54 => 14,  47 => 13,  43 => 12,  31 => 2,  19 => 1,);
    }
}
