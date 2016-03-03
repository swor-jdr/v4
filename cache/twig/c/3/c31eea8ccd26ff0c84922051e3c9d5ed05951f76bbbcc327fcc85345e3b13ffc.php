<?php

/* posting_editor.html */
class __TwigTemplate_c31eea8ccd26ff0c84922051e3c9d5ed05951f76bbbcc327fcc85345e3b13ffc extends Twig_Template
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
\t";
        // line 2
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            // line 3
            echo "\t<div class=\"alert alert-info fade in\">
       ";
            // line 4
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "
    </div>
\t";
        }
        // line 7
        echo "
\t";
        // line 8
        if (((isset($context["S_SHOW_TOPIC_ICONS"]) ? $context["S_SHOW_TOPIC_ICONS"] : null) || (isset($context["S_SHOW_PM_ICONS"]) ? $context["S_SHOW_PM_ICONS"] : null))) {
            // line 9
            echo "\t<div class=\"hidden-xs\">
\t <div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"icon\">";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("ICON");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t <div class=\"controls controls-row\"> 
      <div class=\"radio\"><input type=\"radio\" name=\"icon\" id=\"icon\" value=\"0\" checked=\"checked\" tabindex=\"1\"><label for=\"icon\">";
            // line 13
            if ((isset($context["S_SHOW_TOPIC_ICONS"]) ? $context["S_SHOW_TOPIC_ICONS"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("NO_TOPIC_ICON");
            } else {
                echo $this->env->getExtension('phpbb')->lang("NO_PM_ICON");
            }
            echo "</label></div>
     ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_icon", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["topic_icon"]) {
                echo "<div class=\"radio\"><input type=\"radio\" name=\"icon\" id=\"icon-";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\" value=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\" ";
                echo $this->getAttribute($context["topic_icon"], "S_ICON_CHECKED", array());
                echo " tabindex=\"1\"><label for=\"icon-";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_HEIGHT", array());
                echo "\" alt=\"\" title=\"\" /></label></div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t </div> 
\t </div>
\t</div>
\t";
        }
        // line 19
        echo "
\t";
        // line 20
        if (( !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null) && (isset($context["S_DISPLAY_USERNAME"]) ? $context["S_DISPLAY_USERNAME"] : null))) {
            // line 21
            echo "\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"username\">";
            // line 22
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t<div class=\"controls controls-row\"> 
\t<div class=\"input-icon left\">
\t  <i class=\"fa fa-user\"></i>
       <input type=\"text\" class=\"form-control input-sm\" placeholder=\"\" tabindex=\"1\" name=\"username\" id=\"username\" value=\"";
            // line 26
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
            echo "\">
\t </div> 
\t</div> 
\t</div>
\t";
        }
        // line 31
        echo "
    ";
        // line 32
        // line 33
        echo "
\t";
        // line 34
        if ((((isset($context["S_POST_ACTION"]) ? $context["S_POST_ACTION"] : null) || (isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) || (isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null))) {
            // line 35
            echo "\t<div class=\"control-group\"> 
\t<label class=\"control-label\" for=\"subject\">";
            // line 36
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t<div class=\"row\">
\t <div class=\"";
            // line 38
            if ((isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null)) {
                echo "col-md-12";
            } else {
                echo "col-xs-12 col-lg-8";
            }
            echo "\">
       <input type=\"text\" class=\"form-control input-sm\" placeholder=\"";
            // line 39
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "\" name=\"subject\" id=\"subject\" maxlength=\"";
            if ((isset($context["S_NEW_MESSAGE"]) ? $context["S_NEW_MESSAGE"] : null)) {
                echo "100";
            } else {
                echo "124";
            }
            echo "\" tabindex=\"2\" value=\"";
            echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
            echo (isset($context["DRAFT_SUBJECT"]) ? $context["DRAFT_SUBJECT"] : null);
            echo "\">
\t </div> 
\t </div> 
\t </div>
\t ";
            // line 43
            if (((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null) && (isset($context["S_CONFIRM_CODE"]) ? $context["S_CONFIRM_CODE"] : null))) {
                // line 44
                echo "\t\t";
                $value = 3;
                $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
                // line 45
                echo "\t\t";
                $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "posting_editor.html", 45)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 46
                echo "\t ";
            }
            // line 47
            echo "\t";
        }
        // line 48
        echo "
    ";
        // line 49
        // line 50
        echo "\t
\t ";
        // line 51
        $location = "posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_buttons.html", "posting_editor.html", 51)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 52
        echo "
\t
\t <div class=\"space10\"></div>

 <div class=\"row\">
\t";
        // line 57
        // line 58
        echo "    <div class=\"";
        if ((isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null)) {
            echo "col-md-12";
        } else {
            echo "col-md-8";
        }
        echo "\"> 
      <span id=\"dragNdrop\">
\t   <textarea class=\"form-control\" rows=\"10\" ";
        // line 60
        if ((((isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null) &&  !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) &&  !(isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null))) {
            echo "name=\"signature\" id=\"signature\" ";
        } else {
            echo "name=\"message\" id=\"message\"";
        }
        echo " tabindex=\"4\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" placeholder=\"\" class=\"form-control\">";
        echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
        echo (isset($context["DRAFT_MESSAGE"]) ? $context["DRAFT_MESSAGE"] : null);
        echo (isset($context["IMGUR_IMAGE"]) ? $context["IMGUR_IMAGE"] : null);
        echo (isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null);
        echo "</textarea>
\t  <span> 
\t</div>
\t";
        // line 63
        // line 64
        echo "
\t<div class=\"col-md-4\">
    ";
        // line 66
        echo "\t
\t\t
\t\t";
        // line 68
        if (((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array())))) {
            // line 69
            echo "\t\t<strong>";
            echo $this->env->getExtension('phpbb')->lang("SMILIES");
            echo "
\t\t  ";
            // line 70
            if (((isset($context["S_SHOW_SMILEY_LINK"]) ? $context["S_SHOW_SMILEY_LINK"] : null) && (isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null))) {
                // line 71
                echo "\t\t\t<a class=\"btn-link btn-xs\" href=\"";
                echo (isset($context["U_MORE_SMILIES"]) ? $context["U_MORE_SMILIES"] : null);
                echo "\" onclick=\"popup(this.href, 450, 350, '_phpbbsmilies'); return false;\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MORE_SMILIES");
                echo "\"><i class=\"fa fa-plus\"></i></a>
\t\t  ";
            }
            // line 73
            echo "\t\t</strong><br />
\t <div class=\"hidden-xs\">
\t\t\t";
            // line 75
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                // line 76
                echo "\t\t\t\t<a href=\"#\" onclick=\"insert_text('";
                echo $this->getAttribute($context["smiley"], "A_SMILEY_CODE", array());
                echo "', true); return false;\"><img src=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_HEIGHT", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_CODE", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_DESC", array());
                echo "\" /></a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "\t\t";
        }
        // line 79
        echo "    ";
        // line 80
        echo "\t\t";
        if ((isset($context["BBCODE_STATUS"]) ? $context["BBCODE_STATUS"] : null)) {
            // line 81
            echo "\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array()))) {
                echo "<hr />";
            }
            // line 82
            echo "\t\t";
            echo (isset($context["BBCODE_STATUS"]) ? $context["BBCODE_STATUS"] : null);
            echo "<br />
\t\t";
            // line 83
            if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
                // line 84
                echo "\t\t\t";
                echo (isset($context["IMG_STATUS"]) ? $context["IMG_STATUS"] : null);
                echo "<br />
\t\t\t";
                // line 85
                echo (isset($context["FLASH_STATUS"]) ? $context["FLASH_STATUS"] : null);
                echo "<br />
\t\t\t";
                // line 86
                echo (isset($context["URL_STATUS"]) ? $context["URL_STATUS"] : null);
                echo "<br />
\t\t";
            }
            // line 88
            echo "\t\t";
            echo (isset($context["SMILIES_STATUS"]) ? $context["SMILIES_STATUS"] : null);
            echo "
\t\t";
        }
        // line 90
        echo "\t\t";
        if (((isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null) || (isset($context["S_DISPLAY_REVIEW"]) ? $context["S_DISPLAY_REVIEW"] : null))) {
            // line 91
            echo "\t\t\t";
            if ((isset($context["S_DISPLAY_REVIEW"]) ? $context["S_DISPLAY_REVIEW"] : null)) {
                echo "<hr />";
            }
            // line 92
            echo "\t\t\t";
            if ((isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null)) {
                echo "<strong><a href=\"";
                echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("BACK_TO_DRAFTS");
                echo "</a></strong>";
            }
            // line 93
            echo "\t\t\t";
            if ((isset($context["S_DISPLAY_REVIEW"]) ? $context["S_DISPLAY_REVIEW"] : null)) {
                echo "<strong><a href=\"#topic-review\">";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_REVIEW");
                echo "</a></strong>";
            }
            // line 94
            echo "\t\t";
        }
        // line 95
        echo "\t </div>
\t</div>
 </div>
</fieldset>


";
        // line 101
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "EXTRA_POSTING_OPTIONS", array()) == 1)) {
            // line 102
            echo "
\t";
            // line 103
            if ( !(isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null)) {
                // line 104
                echo "\t</div>
\t";
            }
            // line 106
            echo "

\t";
            // line 108
            if (( !(isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null) && ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT", array()) == 1))) {
                // line 109
                echo "\t\t<fieldset class=\"form-actions\">
\t\t\t";
                // line 110
                echo (isset($context["S_HIDDEN_ADDRESS_FIELD"]) ? $context["S_HIDDEN_ADDRESS_FIELD"] : null);
                echo "
\t\t\t";
                // line 111
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t";
                // line 112
                // line 113
                echo "\t\t\t";
                if ((isset($context["S_HAS_DRAFTS"]) ? $context["S_HAS_DRAFTS"] : null)) {
                    echo "<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                    echo $this->env->getExtension('phpbb')->lang("LOADING");
                    echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" accesskey=\"d\" tabindex=\"8\" name=\"load\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("LOAD_DRAFT");
                    echo "\" onclick=\"load_draft = true;\"><span class=\"hidden-xs\">";
                    echo $this->env->getExtension('phpbb')->lang("LOAD_DRAFT");
                    echo "</span><i class=\"visible-xs glyphicon glyphicon-floppy-open fa-btn-fx\"></i></button>";
                }
                // line 114
                echo "\t\t\t";
                if ((isset($context["S_SAVE_ALLOWED"]) ? $context["S_SAVE_ALLOWED"] : null)) {
                    echo "<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                    echo $this->env->getExtension('phpbb')->lang("SAVING");
                    echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" accesskey=\"k\" tabindex=\"7\" name=\"save\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("SAVE_DRAFT");
                    echo "\"><span class=\"hidden-xs\">";
                    echo $this->env->getExtension('phpbb')->lang("SAVE_DRAFT");
                    echo "</span><i class=\"visible-xs glyphicon glyphicon-floppy-saved fa-btn-fx\"></i></button>";
                }
                // line 115
                echo "\t\t\t<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                echo $this->env->getExtension('phpbb')->lang("LOADING");
                echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" tabindex=\"5\" name=\"preview\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("PREVIEW");
                echo "\"";
                if ( !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) {
                    echo " onclick=\"document.getElementById('postform').action += '#preview';\"";
                }
                echo " >";
                echo $this->env->getExtension('phpbb')->lang("PREVIEW");
                echo "</button>
\t\t\t<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                // line 116
                echo $this->env->getExtension('phpbb')->lang("LOADING");
                echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" accesskey=\"s\" tabindex=\"6\" name=\"post\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "</button>
\t\t</fieldset>
\t";
            }
            // line 119
            echo "\t
<div class=\"space10\"></div>
";
            // line 121
            if ((isset($context["S_SHOW_ATTACH_BOX"]) ? $context["S_SHOW_ATTACH_BOX"] : null)) {
                // line 122
                echo "<script>
function addClass(e,s){e.classList?e.classList.add(s):e.className+=\" \"+s}function removeClass(e,s){e.classList?e.classList.remove(s):e.className=e.className.replace(new RegExp(\"(^|\\\\b)\"+s.split(\" \").join(\"|\")+\"(\\\\b|\$)\",\"gi\"),\" \")}function txtDropClicked(){removeClassesOnFocus(!1),addClass(document.getElementById(\"message\"),\"dropzone-wrap\"),addClass(document.getElementById(\"dragNdrop\"),\"dropzone-content\")}function removeClassesOnFocus(e){var s=e===!1?document.getElementById(\"message\"):e.target;removeClass(s,\"dropzone-wrap\"),removeClass(s.parentNode,\"dropzone-content\")}window.addEventListener(\"load\",function(){document.getElementById(\"ToggleTxTDrop\").addEventListener(\"click\",txtDropClicked),document.getElementById(\"message\").addEventListener(\"focus\",removeClassesOnFocus)});
</script>
";
            }
            // line 126
            echo "\t\t<div class=\"panel has-nav-tabs panel-default\"><!-- panel has-nav-tabs no-border with tab start tag here posting_layout.html -->
\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t<li class=\"";
            // line 128
            if ((isset($context["IMGUR_DELETEHASH"]) ? $context["IMGUR_DELETEHASH"] : null)) {
            } else {
                echo "active";
            }
            echo "\"><a data-toggle=\"tab\" href=\"#options-panel-below\"><span>";
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</span></a></li>
\t\t\t\t";
            // line 129
            if ((isset($context["S_SHOW_ATTACH_BOX"]) ? $context["S_SHOW_ATTACH_BOX"] : null)) {
                echo "<li class=\"\"><a data-toggle=\"tab\" href=\"#posting-attach-body-html\" id=\"ToggleTxTDrop\"><span>";
                echo $this->env->getExtension('phpbb')->lang("ADD_ATTACHMENT");
                echo "</span></a></li>";
            }
            // line 130
            echo "\t\t\t\t";
            if ((((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "posting") && (isset($context["IN_IMGUR"]) ? $context["IN_IMGUR"] : null))) {
                echo "<li class=\"";
                if ((isset($context["IMGUR_DELETEHASH"]) ? $context["IMGUR_DELETEHASH"] : null)) {
                    echo "active";
                }
                echo "\"><a data-toggle=\"tab\" href=\"#posting-imgur-html\"><span>";
                echo $this->env->getExtension('phpbb')->lang("IMGUR_UPLOAD_TITLE");
                echo "</span></a></li>";
            } else {
            }
            // line 131
            echo "\t\t\t\t";
            if (((isset($context["S_SHOW_POLL_BOX"]) ? $context["S_SHOW_POLL_BOX"] : null) || (isset($context["S_POLL_DELETE"]) ? $context["S_POLL_DELETE"] : null))) {
                echo "<li class=\"\"><a data-toggle=\"tab\" href=\"#posting-poll-html\"><span>";
                echo $this->env->getExtension('phpbb')->lang("ADD_POLL");
                echo "</span></a></li>";
            }
            // line 132
            echo "\t\t\t";
            // line 133
            echo "\t\t\t</ul>
\t
    <div class=\"tab-content panel-content\">
\t   ";
            // line 136
            if (( !(isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null) && ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT", array()) == 1))) {
                // line 137
                echo "\t\t<div class=\"panel-body tab-pane";
                if ((isset($context["IMGUR_DELETEHASH"]) ? $context["IMGUR_DELETEHASH"] : null)) {
                } else {
                    echo " active";
                }
                echo "\" id=\"options-panel-below\">
\t\t<fieldset>
\t\t";
                // line 139
                // line 140
                echo "\t\t\t";
                if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
                    // line 141
                    echo "\t\t\t <input type=\"checkbox\" name=\"disable_bbcode\" id=\"disable_bbcode\"";
                    echo (isset($context["S_BBCODE_CHECKED"]) ? $context["S_BBCODE_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"disable_bbcode\">";
                    echo $this->env->getExtension('phpbb')->lang("DISABLE_BBCODE");
                    echo "</label>
\t\t\t";
                }
                // line 143
                echo "\t\t\t";
                if ((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null)) {
                    // line 144
                    echo "\t\t\t <input type=\"checkbox\" name=\"disable_smilies\" id=\"disable_smilies\"";
                    echo (isset($context["S_SMILIES_CHECKED"]) ? $context["S_SMILIES_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"disable_smilies\">";
                    echo $this->env->getExtension('phpbb')->lang("DISABLE_SMILIES");
                    echo "</label>
\t\t\t";
                }
                // line 146
                echo "\t\t\t";
                if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
                    // line 147
                    echo "\t\t\t <input type=\"checkbox\" name=\"disable_magic_url\" id=\"disable_magic_url\"";
                    echo (isset($context["S_MAGIC_URL_CHECKED"]) ? $context["S_MAGIC_URL_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"disable_magic_url\">";
                    echo $this->env->getExtension('phpbb')->lang("DISABLE_MAGIC_URL");
                    echo "</label>
\t\t\t";
                }
                // line 149
                echo "\t\t\t";
                if ((isset($context["S_SIG_ALLOWED"]) ? $context["S_SIG_ALLOWED"] : null)) {
                    // line 150
                    echo "\t\t\t <input type=\"checkbox\" name=\"attach_sig\" id=\"attach_sig\"";
                    echo (isset($context["S_SIGNATURE_CHECKED"]) ? $context["S_SIGNATURE_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"attach_sig\">";
                    echo $this->env->getExtension('phpbb')->lang("ATTACH_SIG");
                    echo "</label>
\t\t\t";
                }
                // line 152
                echo "\t\t\t";
                if ((isset($context["S_NOTIFY_ALLOWED"]) ? $context["S_NOTIFY_ALLOWED"] : null)) {
                    // line 153
                    echo "\t\t\t <input type=\"checkbox\" name=\"notify\" id=\"notify\"";
                    echo (isset($context["S_NOTIFY_CHECKED"]) ? $context["S_NOTIFY_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"notify\">";
                    echo $this->env->getExtension('phpbb')->lang("NOTIFY_REPLY");
                    echo "</label>
\t\t\t";
                }
                // line 155
                echo "\t\t\t";
                if ((isset($context["S_LOCK_TOPIC_ALLOWED"]) ? $context["S_LOCK_TOPIC_ALLOWED"] : null)) {
                    // line 156
                    echo "\t\t\t <input type=\"checkbox\" name=\"lock_topic\" id=\"lock_topic\"";
                    echo (isset($context["S_LOCK_TOPIC_CHECKED"]) ? $context["S_LOCK_TOPIC_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"lock_topic\">";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_TOPIC");
                    echo "</label>
\t\t\t";
                }
                // line 158
                echo "\t\t\t";
                if ((isset($context["S_LOCK_POST_ALLOWED"]) ? $context["S_LOCK_POST_ALLOWED"] : null)) {
                    // line 159
                    echo "\t\t\t <input type=\"checkbox\" name=\"lock_post\" id=\"lock_post\"";
                    echo (isset($context["S_LOCK_POST_CHECKED"]) ? $context["S_LOCK_POST_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"lock_post\">";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_POST");
                    echo "&nbsp;&#91;";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_POST_EXPLAIN");
                    echo "&#93;</label>
\t\t\t";
                }
                // line 161
                echo "\t\t\t";
                if ((((isset($context["S_TYPE_TOGGLE"]) ? $context["S_TYPE_TOGGLE"] : null) || (isset($context["S_TOPIC_TYPE_ANNOUNCE"]) ? $context["S_TOPIC_TYPE_ANNOUNCE"] : null)) || (isset($context["S_TOPIC_TYPE_STICKY"]) ? $context["S_TOPIC_TYPE_STICKY"] : null))) {
                    // line 162
                    echo "\t\t\t<hr class=\"dashed\" />
\t\t\t";
                }
                // line 164
                echo "\t\t\t";
                if (((isset($context["S_SOFTDELETE_ALLOWED"]) ? $context["S_SOFTDELETE_ALLOWED"] : null) || (isset($context["S_DELETE_ALLOWED"]) ? $context["S_DELETE_ALLOWED"] : null))) {
                    // line 165
                    echo "\t\t\t <input type=\"checkbox\" name=\"delete\" id=\"delete\" ";
                    echo (isset($context["S_SOFTDELETE_CHECKED"]) ? $context["S_SOFTDELETE_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"delete\">";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST_SOFT");
                    echo "&nbsp;&#91;";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST_SOFT_WARN");
                    echo "&#93;</label>
\t\t\t <input type=\"checkbox\" name=\"delete_permanent\" id=\"delete_permanent\"><label class=\"check-control\" for=\"delete_permanent\">";
                    // line 166
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST_PERMANENT");
                    echo "&nbsp;&#91;";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST_PERMANENT_WARN");
                    echo "&#93;</label>\t
\t\t\t<hr class=\"dashed\" />
\t\t\t";
                }
                // line 169
                echo "\t\t\t
\t\t\t";
                // line 170
                if ((isset($context["S_TYPE_TOGGLE"]) ? $context["S_TYPE_TOGGLE"] : null)) {
                    // line 171
                    echo "\t\t    <div class=\"control-group\"> 
\t         <label class=\"control-label\" for=\"topic_type-0\">";
                    // line 172
                    if ((isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                        echo $this->env->getExtension('phpbb')->lang("CHANGE_TOPIC_TO");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("POST_TOPIC_AS");
                    }
                    echo ":</label>
\t         <div class=\"controls controls-row\"> 
             ";
                    // line 174
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_type", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic_type"]) {
                        // line 175
                        echo "\t\t\t  <input type=\"radio\" name=\"topic_type\" id=\"topic_type-";
                        echo $this->getAttribute($context["topic_type"], "VALUE", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["topic_type"], "VALUE", array());
                        echo "\"";
                        echo $this->getAttribute($context["topic_type"], "S_CHECKED", array());
                        echo "><label class=\"radio-inline\" for=\"topic_type-";
                        echo $this->getAttribute($context["topic_type"], "VALUE", array());
                        echo "\">";
                        echo $this->getAttribute($context["topic_type"], "L_TOPIC_TYPE", array());
                        echo "</label>
\t\t\t ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_type'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 177
                    echo "\t         </div> 
\t\t\t <div class=\"space10\"></div>
\t        </div>
\t\t\t";
                }
                // line 181
                echo "
\t\t\t";
                // line 182
                if (((isset($context["S_TOPIC_TYPE_ANNOUNCE"]) ? $context["S_TOPIC_TYPE_ANNOUNCE"] : null) || (isset($context["S_TOPIC_TYPE_STICKY"]) ? $context["S_TOPIC_TYPE_STICKY"] : null))) {
                    // line 183
                    echo "\t\t\t<div class=\"control-group\"> 
\t         <label class=\"control-label\" for=\"topic_time_limit\">";
                    // line 184
                    echo $this->env->getExtension('phpbb')->lang("STICK_TOPIC_FOR");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label><span class=\"help-block\">";
                    echo $this->env->getExtension('phpbb')->lang("STICK_TOPIC_FOR_EXPLAIN");
                    echo "</span>
\t\t\t<div class=\"input-group col-xs-8 col-sm-2 col-md-2\">
\t\t       <input type=\"text\" class=\"form-control input-sm\" min=\"0\" max=\"999\" name=\"topic_time_limit\" id=\"topic_time_limit\" maxlength=\"3\" value=\"";
                    // line 186
                    echo (isset($context["TOPIC_TIME_LIMIT"]) ? $context["TOPIC_TIME_LIMIT"] : null);
                    echo "\">
\t\t      <span class=\"input-group-addon\">";
                    // line 187
                    echo $this->env->getExtension('phpbb')->lang("DAYS");
                    echo "</span>
\t         </div>
\t\t\t <div class=\"space10\"></div>
\t       </div>
\t\t\t";
                }
                // line 192
                echo "\t\t\t
\t\t\t";
                // line 193
                if ((isset($context["S_EDIT_REASON"]) ? $context["S_EDIT_REASON"] : null)) {
                    // line 194
                    echo "\t\t\t<div class=\"control-group\"> 
\t         <label class=\"control-label\" for=\"edit_reason\">";
                    // line 195
                    echo $this->env->getExtension('phpbb')->lang("EDIT_REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label>
\t        <div class=\"row\"> 
\t\t\t<div class=\"col-xs-8 col-sm-5 col-md-5\"> 
             <input type=\"text\" class=\"form-control input-sm\" placeholder=\"";
                    // line 198
                    echo $this->env->getExtension('phpbb')->lang("EDIT_LINK_PLACEHOLDER");
                    echo "\" name=\"edit_reason\" id=\"edit_reason\" value=\"";
                    echo (isset($context["EDIT_REASON"]) ? $context["EDIT_REASON"] : null);
                    echo "\">
\t        </div>
\t\t\t</div>
\t\t\t</div>
\t\t\t";
                }
                // line 203
                echo "\t\t</fieldset>
\t\t";
            }
            // line 205
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "posting_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  707 => 205,  703 => 203,  693 => 198,  686 => 195,  683 => 194,  681 => 193,  678 => 192,  670 => 187,  666 => 186,  658 => 184,  655 => 183,  653 => 182,  650 => 181,  644 => 177,  627 => 175,  623 => 174,  614 => 172,  611 => 171,  609 => 170,  606 => 169,  598 => 166,  589 => 165,  586 => 164,  582 => 162,  579 => 161,  569 => 159,  566 => 158,  558 => 156,  555 => 155,  547 => 153,  544 => 152,  536 => 150,  533 => 149,  525 => 147,  522 => 146,  514 => 144,  511 => 143,  503 => 141,  500 => 140,  499 => 139,  490 => 137,  488 => 136,  483 => 133,  481 => 132,  474 => 131,  462 => 130,  456 => 129,  447 => 128,  443 => 126,  437 => 122,  435 => 121,  431 => 119,  421 => 116,  408 => 115,  397 => 114,  386 => 113,  385 => 112,  381 => 111,  377 => 110,  374 => 109,  372 => 108,  368 => 106,  364 => 104,  362 => 103,  359 => 102,  357 => 101,  349 => 95,  346 => 94,  339 => 93,  330 => 92,  325 => 91,  322 => 90,  316 => 88,  311 => 86,  307 => 85,  302 => 84,  300 => 83,  295 => 82,  290 => 81,  287 => 80,  285 => 79,  282 => 78,  263 => 76,  259 => 75,  255 => 73,  247 => 71,  245 => 70,  240 => 69,  238 => 68,  234 => 66,  230 => 64,  229 => 63,  214 => 60,  204 => 58,  203 => 57,  196 => 52,  184 => 51,  181 => 50,  180 => 49,  177 => 48,  174 => 47,  171 => 46,  158 => 45,  154 => 44,  152 => 43,  135 => 39,  127 => 38,  121 => 36,  118 => 35,  116 => 34,  113 => 33,  112 => 32,  109 => 31,  101 => 26,  93 => 22,  90 => 21,  88 => 20,  85 => 19,  79 => 15,  56 => 14,  48 => 13,  42 => 11,  38 => 9,  36 => 8,  33 => 7,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
