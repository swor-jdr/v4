<?php

/* posting_attach_body.html */
class __TwigTemplate_7fdb92ef8dd9205558fd4865ee3e54430cf511780dbed3cf89eb3ed3a7c70874 extends Twig_Template
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
        echo "<div class=\"panel-body tab-pane\" id=\"posting-attach-body-html\">
\t<p>";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("ADD_ATTACHMENT_EXPLAIN");
        echo "<span class=\"hidden\" id=\"drag-n-drop-message\">&nbsp;";
        echo $this->env->getExtension('phpbb')->lang("PLUPLOAD_DRAG_TEXTAREA");
        echo "</span></p>\t
<div class=\"clearfix\" id=\"attach-panel\">
    <fieldset id=\"attach-panel-basic\">
\t<label for=\"fileupload\">";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("FILENAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t <input type=\"file\" name=\"fileupload\" id=\"fileupload\" maxlength=\"";
        // line 6
        echo (isset($context["FILESIZE"]) ? $context["FILESIZE"] : null);
        echo "\" value=\"\" class=\"inputbox form-control\" /> 
\t <input type=\"submit\" name=\"add_file\" value=\"";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("ADD_FILE");
        echo "\" class=\"btn btn-default\" onclick=\"upload = true;\" />
\t 
\t<label for=\"filecomment\">";
        // line 9
        echo $this->env->getExtension('phpbb')->lang("FILE_COMMENT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t <textarea name=\"filecomment\" id=\"filecomment\" rows=\"1\" cols=\"40\" class=\"inputbox form-control\">";
        // line 10
        echo (isset($context["FILE_COMMENT"]) ? $context["FILE_COMMENT"] : null);
        echo "</textarea>
\t</fieldset>

\t<div id=\"attach-panel-multi\">
\t <button type=\"button\" class=\"btn btn-default\" value=\"";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("PLUPLOAD_ADD_FILES");
        echo "\" id=\"add_files\" /><i class=\"fa fa-cloud-upload\"></i>&nbsp;";
        echo $this->env->getExtension('phpbb')->lang("PLUPLOAD_ADD_FILES");
        echo "</button>
\t</div>

\t<div id=\"file-list-container\" class=\"";
        // line 17
        if ( !twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attach_row", array()))) {
            echo " hidden";
        }
        echo "\">
\t <div id=\"file-list\">
\t\t<div class=\"attach-row panel panel-default panel-body\" id=\"attach-row-tpl\">
\t\t   <button type=\"button\" value=\"";
        // line 20
        echo $this->env->getExtension('phpbb')->lang("DELETE_FILE");
        echo "\" class=\"close file-delete\"><i class=\"awe-remove-circle\"></i></button>\t
\t\t\t<div class=\"attach-name\">  
\t\t\t\t<span class=\"pull-left file-name text-overflow\"></span>
\t\t\t\t <span class=\"file-size\"></span>
\t\t\t\t  <span class=\"file-status\"></span>
\t\t\t\t   <button type=\"button\" value=\"";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("PLACE_INLINE");
        echo "\" class=\"btn-link hidden file-inline-bbcode\">";
        echo $this->env->getExtension('phpbb')->lang("PLACE_INLINE");
        echo "</button>
\t\t\t\t<div class=\"attach-comment\">
\t\t\t\t <textarea rows=\"1\" maxlength=\"45\" class=\"inputbox form-control form-plupload\" placeholder=\"";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("ADD_DESCRIPTION");
        echo "\"></textarea>
\t\t\t\t</div>
\t\t    </div>
\t\t\t<span class=\"file-progress progress\">
\t\t\t <span class=\"file-progress-bar progress-bar progress-bar-info progress-bar-striped\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\"></span>
\t\t\t</span>\t\t\t\t
\t\t</div>
\t\t
\t\t";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attach_row", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["attach_row"]) {
            // line 36
            echo "\t\t<div class=\"attach-row panel panel-default panel-body\" data-attach-id=\"";
            echo $this->getAttribute($context["attach_row"], "ATTACH_ID", array());
            echo "\">
\t\t   <button type=\"button\" value=\"";
            // line 37
            echo $this->env->getExtension('phpbb')->lang("DELETE_FILE");
            echo "\" class=\"close file-delete\"><i class=\"awe-remove-circle\"></i></button>\t
\t\t\t<div class=\"attach-name\">  
\t\t\t\t<span class=\"pull-left file-name text-overflow\"><a href=\"";
            // line 39
            echo $this->getAttribute($context["attach_row"], "U_VIEW_ATTACHMENT", array());
            echo "\">";
            echo $this->getAttribute($context["attach_row"], "FILENAME", array());
            echo "</a></span>
\t\t\t\t <span class=\"file-size\">";
            // line 40
            echo $this->getAttribute($context["attach_row"], "FILESIZE", array());
            echo "</span>
\t\t\t\t  <span class=\"file-status file-uploaded\"></span>
\t\t\t\t  ";
            // line 42
            if ((isset($context["S_INLINE_ATTACHMENT_OPTIONS"]) ? $context["S_INLINE_ATTACHMENT_OPTIONS"] : null)) {
                // line 43
                echo "\t\t\t\t   <button type=\"button\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("PLACE_INLINE");
                echo "\" class=\"btn-link file-inline-bbcode\">";
                echo $this->env->getExtension('phpbb')->lang("PLUPLOAD_PLACE_INLINE");
                echo "</button>
\t\t\t\t  ";
            }
            // line 45
            echo "\t\t\t\t<div class=\"attach-comment\">
\t\t\t\t <textarea name=\"comment_list[";
            // line 46
            echo $this->getAttribute($context["attach_row"], "ASSOC_INDEX", array());
            echo "]\" rows=\"1\" class=\"inputbox form-control form-plupload\" placeholder=\"";
            echo $this->env->getExtension('phpbb')->lang("ADD_DESCRIPTION");
            echo "\">";
            echo $this->getAttribute($context["attach_row"], "FILE_COMMENT", array());
            echo "</textarea>
\t\t\t     ";
            // line 47
            echo $this->getAttribute($context["attach_row"], "S_HIDDEN", array());
            echo "
\t\t\t\t</div>
\t\t    </div>\t\t\t
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t </div>
\t</div>
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "posting_attach_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 52,  144 => 47,  136 => 46,  133 => 45,  125 => 43,  123 => 42,  118 => 40,  112 => 39,  107 => 37,  102 => 36,  98 => 35,  87 => 27,  80 => 25,  72 => 20,  64 => 17,  56 => 14,  49 => 10,  44 => 9,  39 => 7,  35 => 6,  30 => 5,  22 => 2,  19 => 1,);
    }
}
