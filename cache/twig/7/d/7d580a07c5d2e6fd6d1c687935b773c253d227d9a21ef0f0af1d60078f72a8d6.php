<?php

/* posting_layout.html */
class __TwigTemplate_7d580a07c5d2e6fd6d1c687935b773c253d227d9a21ef0f0af1d60078f72a8d6 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "posting_layout.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if ((isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null)) {
            // line 4
            echo "\t<h2>";
            echo "<a href=\"";
            echo (isset($context["U_VIEW_TOPIC"]) ? $context["U_VIEW_TOPIC"] : null);
            echo "\">";
            echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
            echo "</a></h2>
";
        } else {
            // line 6
            echo "\t<h2><a href=\"";
            echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
            echo "\">";
            echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
            echo "</a></h2>
 ";
        }
        // line 8
        echo "
";
        // line 9
        if ((isset($context["S_FORUM_RULES"]) ? $context["S_FORUM_RULES"] : null)) {
            // line 10
            echo "\t\t";
            if ((isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null)) {
                // line 11
                echo "\t\t<div class=\"alert alert-info fade in\">
\t\t  <button class=\"close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t<a href=\"";
                // line 13
                echo (isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</a>
\t\t</div>
\t\t";
            } else {
                // line 16
                echo "\t\t<div class=\"alert alert-info fade in\">
\t\t  <button class=\"close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t<strong>";
                // line 18
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                echo (isset($context["FORUM_RULES"]) ? $context["FORUM_RULES"] : null);
                echo "
\t\t</div>
\t\t";
            }
        }
        // line 22
        echo "
<form id=\"postform\" method=\"post\" action=\"";
        // line 23
        echo (isset($context["S_POST_ACTION"]) ? $context["S_POST_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">

";
        // line 25
        if ((isset($context["S_DRAFT_LOADED"]) ? $context["S_DRAFT_LOADED"] : null)) {
            // line 26
            echo "\t<div class=\"well\">
\t\t<h3>";
            // line 27
            echo $this->env->getExtension('phpbb')->lang("INFORMATION");
            echo "</h3>
\t\t<p>";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("DRAFT_LOADED");
            echo "</p>
\t</div>
";
        }
        // line 31
        echo "
";
        // line 32
        if ((isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null)) {
            $location = "drafts.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("drafts.html", "posting_layout.html", 32)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 33
        echo "
";
        // line 34
        if ((isset($context["S_POST_REVIEW"]) ? $context["S_POST_REVIEW"] : null)) {
            $location = "posting_review.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_review.html", "posting_layout.html", 34)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 35
        echo "
";
        // line 36
        if ((isset($context["S_UNGLOBALISE"]) ? $context["S_UNGLOBALISE"] : null)) {
            // line 37
            echo " <div class=\"clearfix\">
  <div class=\"well\">
  <div class=\"side-segment\"><h3>";
            // line 39
            echo $this->env->getExtension('phpbb')->lang("SELECT_DESTINATION_FORUM");
            echo "</h3></div>
   <fieldset>
\t<div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 41
            echo $this->env->getExtension('phpbb')->lang("UNGLOBALISE_EXPLAIN");
            echo "</div>
   <label class=\"control-label\" for=\"to_forum_id\">";
            // line 42
            echo $this->env->getExtension('phpbb')->lang("MOVE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
       <div class=\"input-group col-md-4 col-sm-5\">
\t   <select data-container=\"body\" data-width=\"100px\" class=\"selectpicker input-group-btn\" id=\"to_forum_id\" name=\"to_forum_id\">";
            // line 44
            echo (isset($context["S_FORUM_SELECT"]) ? $context["S_FORUM_SELECT"] : null);
            echo "</select>
\t\t<span class=\"input-group-btn\">
\t\t<button class=\"btn btn-default\" type=\"submit\" name=\"post\" value=\"";
            // line 46
            echo $this->env->getExtension('phpbb')->lang("CONFIRM");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("CONFIRM");
            echo "</button>
\t\t<button class=\"btn btn-default\" type=\"submit\" name=\"cancel_unglobalise\" value=\"";
            // line 47
            echo $this->env->getExtension('phpbb')->lang("CANCEL");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("CANCEL");
            echo "</button>
\t    </span>
\t   </div>
   </fieldset>
  </div>
 </div>
";
        }
        // line 54
        echo "
";
        // line 55
        if ((isset($context["S_DISPLAY_PREVIEW"]) ? $context["S_DISPLAY_PREVIEW"] : null)) {
            $location = "posting_preview.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_preview.html", "posting_layout.html", 55)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 56
        echo "
<div class=\"clearfix\" id=\"postingbox\">
\t<div class=\"well\">
\t <div class=\"side-segment\">
\t\t<h3>";
        // line 60
        echo $this->env->getExtension('phpbb')->lang("POST_A");
        echo "</h3>
\t </div>
\t
\t";
        // line 63
        $value = 1;
        $context['definition']->set('EXTRA_POSTING_OPTIONS', $value);
        // line 64
        echo "\t";
        $location = "posting_editor.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_editor.html", "posting_layout.html", 64)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 65
        echo "\t";
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</div>
      ";
        // line 67
        if ((isset($context["S_SHOW_ATTACH_BOX"]) ? $context["S_SHOW_ATTACH_BOX"] : null)) {
            $location = "posting_attach_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_attach_body.html", "posting_layout.html", 67)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 68
        echo "\t  ";
        // line 69
        echo "      ";
        if (((isset($context["S_SHOW_POLL_BOX"]) ? $context["S_SHOW_POLL_BOX"] : null) || (isset($context["S_POLL_DELETE"]) ? $context["S_POLL_DELETE"] : null))) {
            $location = "posting_poll_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_poll_body.html", "posting_layout.html", 69)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 70
        echo "\t  ";
        // line 71
        echo "</div>

</form>

</div><!-- panel has-nav-tabs no-border with tab ends tag here posting_editor.html -->

    ";
        // line 77
        if ((isset($context["S_DISPLAY_REVIEW"]) ? $context["S_DISPLAY_REVIEW"] : null)) {
            // line 78
            echo "    <div class=\"panel panel-default\">
\t  <div class=\"panel-body\">
      ";
            // line 80
            $location = "posting_topic_review.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_topic_review.html", "posting_layout.html", 80)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 81
            echo "\t </div>
\t</div>
\t";
        }
        // line 84
        echo "
<div class=\"space10\"></div>


</div>
";
        // line 89
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "posting_layout.html", 89)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "posting_layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 89,  308 => 84,  303 => 81,  291 => 80,  287 => 78,  285 => 77,  277 => 71,  275 => 70,  260 => 69,  258 => 68,  244 => 67,  238 => 65,  225 => 64,  222 => 63,  216 => 60,  210 => 56,  196 => 55,  193 => 54,  181 => 47,  175 => 46,  170 => 44,  164 => 42,  160 => 41,  155 => 39,  151 => 37,  149 => 36,  146 => 35,  132 => 34,  129 => 33,  115 => 32,  112 => 31,  106 => 28,  102 => 27,  99 => 26,  97 => 25,  90 => 23,  87 => 22,  77 => 18,  73 => 16,  65 => 13,  61 => 11,  58 => 10,  56 => 9,  53 => 8,  45 => 6,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
