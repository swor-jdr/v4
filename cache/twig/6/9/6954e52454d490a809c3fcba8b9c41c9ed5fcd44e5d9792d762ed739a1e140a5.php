<?php

/* ucp_avatar_options_local.html */
class __TwigTemplate_6954e52454d490a809c3fcba8b9c41c9ed5fcd44e5d9792d762ed739a1e140a5 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "avatar_local_cats", array()))) {
            // line 2
            echo " <label for=\"category\">";
            echo $this->env->getExtension('phpbb')->lang("AVATAR_CATEGORY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
<div class=\"control-group\">
<div class=\"input-group\">
<select class=\"selectpicker\" data-container=\"body\" data-style=\"btn btn-default form-control\" name=\"avatar_local_cat\" id=\"category\">
";
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "avatar_local_cats", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["avatar_local_cats"]) {
                // line 7
                echo " <option value=\"";
                echo $this->getAttribute($context["avatar_local_cats"], "NAME", array());
                echo "\"";
                if ($this->getAttribute($context["avatar_local_cats"], "SELECTED", array())) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->getAttribute($context["avatar_local_cats"], "NAME", array());
                echo "</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_local_cats'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "</select>
<span class=\"input-group-btn\">\t
 <button type=\"submit\" value=\"";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" name=\"avatar_local_go\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "</button>
</span>
</div>
</div>

<div class=\"gallery-avatar\" id=\"gallery\">
";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "avatar_local_row", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["avatar_local_row"]) {
                // line 18
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["avatar_local_row"], "avatar_local_col", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["avatar_local_col"]) {
                    // line 19
                    echo "\t<label for=\"av-";
                    echo $this->getAttribute($context["avatar_local_row"], "S_ROW_COUNT", array());
                    echo "-";
                    echo $this->getAttribute($context["avatar_local_col"], "S_ROW_COUNT", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["avatar_local_col"], "AVATAR_IMAGE", array());
                    echo "\" alt=\"\" /><br />
\t <input type=\"radio\" name=\"avatar_local_file\" id=\"av-";
                    // line 20
                    echo $this->getAttribute($context["avatar_local_row"], "S_ROW_COUNT", array());
                    echo "-";
                    echo $this->getAttribute($context["avatar_local_col"], "S_ROW_COUNT", array());
                    echo "\" value=\"";
                    echo $this->getAttribute($context["avatar_local_col"], "AVATAR_FILE", array());
                    echo "\" /></label>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_local_col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_local_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "</div>
";
        } else {
            // line 25
            echo "<div class=\"alert alert-info\">
 <i class=\"fa fa-warning\"></i><strong>&nbsp;";
            // line 26
            echo $this->env->getExtension('phpbb')->lang("INFO_BOX");
            echo "</strong>";
            echo $this->env->getExtension('phpbb')->lang("NO_AVATARS");
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "ucp_avatar_options_local.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 26,  101 => 25,  97 => 23,  81 => 20,  72 => 19,  68 => 18,  64 => 17,  53 => 11,  49 => 9,  34 => 7,  30 => 6,  21 => 2,  19 => 1,);
    }
}
