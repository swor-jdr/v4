<?php

/* posting_pm_header.html */
class __TwigTemplate_f43b19aa1284273da214c80481dca4aca0f1e5d643b4787d055fc847277cb1c5 extends Twig_Template
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
        echo "<fieldset>
";
        // line 2
        if ( !(isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null)) {
            // line 3
            echo "\t\t<div class=\"clearfix\">
\t";
            // line 4
            if ((isset($context["S_ALLOW_MASS_PM"]) ? $context["S_ALLOW_MASS_PM"] : null)) {
                // line 5
                echo "\t\t\t";
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "to_recipient", array()))) {
                    // line 6
                    echo "\t\t\t\t<div class=\"controls controls-row\">
\t\t\t\t\t<label class=\"control-label\">";
                    // line 7
                    echo $this->env->getExtension('phpbb')->lang("TO");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label>
\t\t\t\t\t<div class=\"tagsinput\">
\t\t\t\t\t\t";
                    // line 9
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "to_recipient", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                        // line 10
                        echo "\t\t\t\t\t\t\t";
                        if (( !$this->getAttribute($context["to_recipient"], "S_FIRST_ROW", array()) && (($this->getAttribute($context["to_recipient"], "S_ROW_COUNT", array()) % 4) == 0))) {
                            echo "</div><div class=\"tagsinput\">";
                        }
                        // line 11
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["to_recipient"], "IS_GROUP", array())) {
                            echo "<span class=\"tag\"><span><a href=\"";
                            echo $this->getAttribute($context["to_recipient"], "U_VIEW", array());
                            echo "\"><strong>";
                            echo $this->getAttribute($context["to_recipient"], "NAME", array());
                            echo "</strong></a></span>&nbsp;";
                        } else {
                            echo "<span class=\"tag\"><span>";
                            echo $this->getAttribute($context["to_recipient"], "NAME_FULL", array());
                            echo "</span>";
                        }
                        // line 12
                        echo "\t\t\t\t\t\t\t";
                        if ( !(isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                            echo "<input type=\"submit\" name=\"remove_";
                            echo $this->getAttribute($context["to_recipient"], "TYPE", array());
                            echo "[";
                            echo $this->getAttribute($context["to_recipient"], "UG_ID", array());
                            echo "]\" value=\"x\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("USER_REMOVE_PLACEHOLDER");
                            echo "\" class=\"btn-link\" /></span>&nbsp;";
                        }
                        // line 13
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"space10\"></div>
\t\t\t";
                }
                // line 18
                echo "\t\t\t";
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "bcc_recipient", array()))) {
                    // line 19
                    echo "\t\t\t\t<div class=\"controls controls-row\">
\t\t\t\t\t<label class=\"control-label\">";
                    // line 20
                    echo $this->env->getExtension('phpbb')->lang("BCC");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label>
\t\t\t\t\t<div class=\"tagsinput\">
\t\t\t\t\t\t";
                    // line 22
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "bcc_recipient", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["bcc_recipient"]) {
                        // line 23
                        echo "\t\t\t\t\t\t\t";
                        if (( !$this->getAttribute($context["bcc_recipient"], "S_FIRST_ROW", array()) && (($this->getAttribute($context["bcc_recipient"], "S_ROW_COUNT", array()) % 4) == 0))) {
                            echo "</div><div class=\"tagsinput\">";
                        }
                        // line 24
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["bcc_recipient"], "IS_GROUP", array())) {
                            echo "<span class=\"tag\"><span><a href=\"";
                            echo $this->getAttribute($context["bcc_recipient"], "U_VIEW", array());
                            echo "\"><strong>";
                            echo $this->getAttribute($context["bcc_recipient"], "NAME", array());
                            echo "</strong></a></span>";
                        } else {
                            echo "<span class=\"tag\"><span>";
                            echo $this->getAttribute($context["bcc_recipient"], "NAME_FULL", array());
                            echo "</span>";
                        }
                        // line 25
                        echo "\t\t\t\t\t\t\t";
                        if ( !(isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                            echo "<input type=\"submit\" name=\"remove_";
                            echo $this->getAttribute($context["bcc_recipient"], "TYPE", array());
                            echo "[";
                            echo $this->getAttribute($context["bcc_recipient"], "UG_ID", array());
                            echo "]\" value=\"x\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("GROUP_REMOVE_PLACEHOLDER");
                            echo "\" class=\"btn-link\" /></span>&nbsp;";
                        }
                        // line 26
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcc_recipient'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"space10\"></div>
\t\t\t";
                }
                // line 31
                echo "\t\t\t
\t\t";
                // line 32
                if ( !(isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                    // line 33
                    echo "\t\t<div class=\"controls controls-row\">
\t\t\t<div class=\"input-group col-md-6\">
\t\t\t<input type=\"text\" placeholder=\"\" id=\"username_list\" name=\"username_list\" class=\"form-control\" tabindex=\"1\"> 
\t\t\t<span class=\"input-group-btn\">
\t\t\t<button class=\"btn btn-default\" name=\"add_to\" value=\"";
                    // line 37
                    echo $this->env->getExtension('phpbb')->lang("ADD");
                    echo "\" type=\"submit\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("ADD");
                    echo "\"><i class=\"fa fa-plus\"></i> ";
                    echo $this->env->getExtension('phpbb')->lang("ADD");
                    echo "</button>
            <button class=\"btn btn-default\" name=\"add_bcc\" value=\"";
                    // line 38
                    echo $this->env->getExtension('phpbb')->lang("ADD_BCC");
                    echo "\" type=\"submit\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("ADD_BCC");
                    echo "\"><i class=\"fa fa-plus\"></i> [BCC]</button>
\t\t\t<a href=\"";
                    // line 39
                    echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
                    echo "\" class=\"btn btn-default\" onclick=\"find_username(this.href); return false;\" rel=\"tooltip\" data-placement=\"right\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                    echo "\"><i class=\"fa fa-user\"></i></a>
\t\t\t";
                    // line 40
                    // line 41
                    echo "\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t\t";
                }
                // line 45
                echo "\t\t
    ";
            } else {
                // line 47
                echo "\t\t\t<div>
\t\t\t\t<div><label class=\"control-label\" for=\"username_list\">";
                // line 48
                echo $this->env->getExtension('phpbb')->lang("TO");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>";
                if ( !(isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                    echo "<br /><span><a href=\"";
                    echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
                    echo "\" onclick=\"find_username(this.href); return false\">";
                    echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                    echo "</a></span>";
                }
                echo "</div>
\t\t\t\t";
                // line 49
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "to_recipient", array()))) {
                    // line 50
                    echo "\t\t\t\t\t<div id=\"tagsinput\" class=\"tagsinput\">
\t\t\t\t\t\t";
                    // line 51
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "to_recipient", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                        // line 52
                        echo "\t\t\t\t\t\t\t";
                        if (( !$this->getAttribute($context["to_recipient"], "S_FIRST_ROW", array()) && (($this->getAttribute($context["to_recipient"], "S_ROW_COUNT", array()) % 4) == 0))) {
                            echo "</div><div id=\"tagsinput\" class=\"tagsinput\">";
                        }
                        // line 53
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["to_recipient"], "IS_GROUP", array())) {
                            echo "<span class=\"tag\"><span><a href=\"";
                            echo $this->getAttribute($context["to_recipient"], "U_VIEW", array());
                            echo "\"><strong>";
                            echo $this->getAttribute($context["to_recipient"], "NAME", array());
                            echo "</strong></a></span>";
                        } else {
                            echo "<span class=\"tag\"><span>";
                            echo $this->getAttribute($context["to_recipient"], "NAME_FULL", array());
                            echo "</span>";
                        }
                        // line 54
                        echo "\t\t\t\t\t\t\t";
                        if ( !(isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                            echo "<input type=\"submit\" name=\"remove_";
                            echo $this->getAttribute($context["to_recipient"], "TYPE", array());
                            echo "[";
                            echo $this->getAttribute($context["to_recipient"], "UG_ID", array());
                            echo "]\" value=\"x\" class=\"btn-link\" /></span>&nbsp;";
                        }
                        // line 55
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 56
                    echo "\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 58
                echo "                
\t\t\t\t";
                // line 59
                if ( !(isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                    // line 60
                    echo "\t\t\t\t<div><input class=\"inputbox\" type=\"text\" name=\"username_list\" id=\"username_list\" size=\"20\" value=\"\" /> <input type=\"submit\" name=\"add_to\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("ADD");
                    echo "\" class=\"btn\" /></div>
\t\t\t\t";
                }
                // line 62
                echo "\t\t\t</div>
\t";
            }
            // line 64
            echo "\t\t</div>

\t\t";
            // line 66
            if ((isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null)) {
                // line 67
                echo "\t\t\t<div class=\"control-group\"> 
\t\t\t<label class=\"control-label\" for=\"group_list\">";
                // line 68
                echo $this->env->getExtension('phpbb')->lang("USERGROUPS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>
\t\t\t\t<div class=\"controls controls-row\"> 
\t\t\t\t\t<div class=\"selector\"> 
\t\t\t\t\t<select class=\"selectpicker\" data-selected-text-format=\"count\" data-container=\"body\" name=\"group_list[]\" id=\"group_list\" multiple=\"multiple\" size=\"4\">";
                // line 71
                echo (isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null);
                echo "</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 76
            echo "
";
        }
        // line 78
        echo "</fieldset>
";
    }

    public function getTemplateName()
    {
        return "posting_pm_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 78,  286 => 76,  278 => 71,  271 => 68,  268 => 67,  266 => 66,  262 => 64,  258 => 62,  252 => 60,  250 => 59,  247 => 58,  243 => 56,  237 => 55,  228 => 54,  215 => 53,  210 => 52,  206 => 51,  203 => 50,  201 => 49,  188 => 48,  185 => 47,  181 => 45,  175 => 41,  174 => 40,  168 => 39,  162 => 38,  154 => 37,  148 => 33,  146 => 32,  143 => 31,  137 => 27,  131 => 26,  120 => 25,  107 => 24,  102 => 23,  98 => 22,  92 => 20,  89 => 19,  86 => 18,  80 => 14,  74 => 13,  63 => 12,  50 => 11,  45 => 10,  41 => 9,  35 => 7,  32 => 6,  29 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
