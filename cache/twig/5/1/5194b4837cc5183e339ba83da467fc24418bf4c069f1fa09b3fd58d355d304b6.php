<?php

/* memberlist_body.html */
class __TwigTemplate_5194b4837cc5183e339ba83da467fc24418bf4c069f1fa09b3fd58d355d304b6 extends Twig_Template
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
        if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
            // line 2
            echo "\t";
            $location = "simple_header_ACP.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_header_ACP.html", "memberlist_body.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 3
            echo "\t";
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 3)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 4
            echo "\t<form method=\"post\" id=\"results\" action=\"";
            echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
            echo "\" onsubmit=\"insert_marked_users('#results', this.user); return false;\" data-form-name=\"";
            echo (isset($context["S_FORM_NAME"]) ? $context["S_FORM_NAME"] : null);
            echo "\" data-field-name=\"";
            echo (isset($context["S_FIELD_NAME"]) ? $context["S_FIELD_NAME"] : null);
            echo "\">

";
        } elseif (        // line 6
(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null)) {
            // line 7
            echo "\t";
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "memberlist_body.html", 7)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            echo "\t
\t";
            // line 8
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 8)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 9
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
            echo "\">

";
        } else {
            // line 12
            echo "\t";
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "memberlist_body.html", 12)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 13
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
            echo "\">
";
        }
        // line 15
        echo "
\t";
        // line 16
        if ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
            // line 17
            echo "\t\t<div class=\"side-segment\"><h3";
            if ((isset($context["GROUP_COLOR"]) ? $context["GROUP_COLOR"] : null)) {
                echo " style=\"color:#";
                echo (isset($context["GROUP_COLOR"]) ? $context["GROUP_COLOR"] : null);
                echo ";\"";
            }
            echo ">";
            echo (isset($context["GROUP_NAME"]) ? $context["GROUP_NAME"] : null);
            echo "</h3></div> 
\t\t<p>";
            // line 18
            echo (isset($context["GROUP_DESC"]) ? $context["GROUP_DESC"] : null);
            echo "&nbsp;";
            echo (isset($context["GROUP_TYPE"]) ? $context["GROUP_TYPE"] : null);
            echo "</p>
\t\t<p>
\t\t\t";
            // line 20
            if ((isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
                echo (isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null);
            }
            // line 21
            echo "\t\t\t";
            if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
                echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
            }
            // line 22
            echo "\t\t\t";
            if ((isset($context["GROUP_RANK"]) ? $context["GROUP_RANK"] : null)) {
                echo (isset($context["GROUP_RANK"]) ? $context["GROUP_RANK"] : null);
            }
            // line 23
            echo "\t\t</p>
\t";
        } else {
            // line 25
            echo "\t\t<div class=\"side-segment\"><h3>";
            echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
            if ((isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "&nbsp;<a href=\"";
                echo (isset($context["U_SEARCH_WORDS"]) ? $context["U_SEARCH_WORDS"] : null);
                echo "\">";
                echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
                echo "</a>";
            }
            echo "</h3></div> 
    <div class=\"clearfix\">
\t\t<div class=\"pull-left\">
            <ul class=\"pagination pagination-sm members-search\">
\t        ";
            // line 29
            if (((isset($context["U_FIND_MEMBER"]) ? $context["U_FIND_MEMBER"] : null) &&  !(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null))) {
                echo "<li class=\"\"><a href=\"";
                echo (isset($context["U_FIND_MEMBER"]) ? $context["U_FIND_MEMBER"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                echo "</a></li>";
            } elseif ((((isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null) && (isset($context["U_HIDE_FIND_MEMBER"]) ? $context["U_HIDE_FIND_MEMBER"] : null)) &&  !(isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null))) {
                echo "<li class=\"\"><a href=\"";
                echo (isset($context["U_HIDE_FIND_MEMBER"]) ? $context["U_HIDE_FIND_MEMBER"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("HIDE_MEMBER_SEARCH");
                echo "</a></li>";
            }
            // line 30
            echo "\t        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "first_char", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["first_char"]) {
                // line 31
                echo "\t\t\t\t\t<li class=\"\"><a href=\"";
                echo $this->getAttribute($context["first_char"], "U_SORT", array());
                echo "\">";
                echo $this->getAttribute($context["first_char"], "DESC", array());
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['first_char'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t</ul>
\t\t</div> 
\t<script>
\thead.ready(function () {
\t  \$('.members-search a[href=\"' +location.pathname + location.search +'\"]').closest('li').addClass('active');
\t});
\t</script>
\t</div> \t
\t\t<div class=\"space10\"></div> \t
\t";
        }
        // line 43
        echo "\t";
        if ((((isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null) ||  !(isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) ||  !twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array())))) {
            // line 44
            echo "\t<div class=\"panel panel-forum\">
\t     <div class=\"panel-heading\">
\t\t  <i class=\"fa fa-group\"></i>&nbsp;";
            // line 46
            echo $this->env->getExtension('phpbb')->lang("MEMBERS");
            echo "
\t\t </div>
\t\t <div class=\"panel-inner\">
\t\t<table id=\"memberlist\" class=\"footable table table-striped table-primary table-hover\">
\t\t<thead>
\t   <tr>
\t\t<th data-class=\"expand\"><a href=\"";
            // line 52
            echo (isset($context["U_SORT_USERNAME"]) ? $context["U_SORT_USERNAME"] : null);
            echo "\">";
            if (((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array())))) {
                echo $this->env->getExtension('phpbb')->lang("GROUP_LEADER");
            } else {
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
            }
            echo "</a>&#44;<a href=\"";
            echo (isset($context["U_SORT_RANK"]) ? $context["U_SORT_RANK"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RANK");
            echo "</a></th>
\t\t<th data-hide=\"phone\"><a href=\"";
            // line 53
            echo (isset($context["U_SORT_POSTS"]) ? $context["U_SORT_POSTS"] : null);
            echo "#memberlist\">";
            echo $this->env->getExtension('phpbb')->lang("POSTS");
            echo "</a></th>
\t\t<th data-hide=\"phone\">";
            // line 54
            echo $this->env->getExtension('phpbb')->lang("OTHER");
            echo "</th>
\t\t<th data-hide=\"phone\"><a href=\"";
            // line 55
            echo (isset($context["U_SORT_JOINED"]) ? $context["U_SORT_JOINED"] : null);
            echo "#memberlist\">";
            echo $this->env->getExtension('phpbb')->lang("JOINED");
            echo "</a></th>
        ";
            // line 56
            if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                // line 57
                echo "        <th data-hide=\"phone\"><a href=\"";
                echo (isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null);
                echo "#memberlist\">";
                echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                echo "</a></th>
\t\t";
            }
            // line 59
            echo "\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t";
        }
        // line 63
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["memberrow"]) {
            // line 64
            echo "\t\t";
            if ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
                // line 65
                echo "\t\t";
                if (( !$this->getAttribute($context["memberrow"], "S_GROUP_LEADER", array()) &&  !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "S_MEMBER_HEADER", array()))) {
                    // line 66
                    echo "\t\t";
                    if (((isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null) && $this->getAttribute($context["memberrow"], "S_FIRST_ROW", array()))) {
                        // line 67
                        echo "\t\t<tr>
\t\t\t<td colspan=\"";
                        // line 68
                        if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                            echo "5";
                        } else {
                            echo "4";
                        }
                        echo "\">&nbsp;</td>
\t\t</tr>
\t\t";
                    }
                    // line 71
                    if ((isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null)) {
                        // line 72
                        echo "\t\t</tbody>
\t\t</table>
\t\t</div>
    </div>
";
                    }
                    // line 77
                    echo "   <div class=\"panel panel-forum\">
\t     <div class=\"panel-heading\">
\t\t  <i class=\"fa fa-group\"></i>&nbsp;";
                    // line 79
                    echo $this->env->getExtension('phpbb')->lang("MEMBERS");
                    echo "
\t\t </div>
\t\t <div class=\"panel-inner\">
\t\t<table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t<tr>
\t";
                    // line 85
                    if ( !(isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null)) {
                        // line 86
                        echo "\t\t<th data-class=\"expand\"><a href=\"";
                        echo (isset($context["U_SORT_USERNAME"]) ? $context["U_SORT_USERNAME"] : null);
                        echo "\">";
                        if ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
                            echo $this->env->getExtension('phpbb')->lang("GROUP_MEMBERS");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("USERNAME");
                        }
                        echo "</a><span>";
                        echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                        echo "<a href=\"";
                        echo (isset($context["U_SORT_RANK"]) ? $context["U_SORT_RANK"] : null);
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("RANK");
                        echo "</a></span></th>
\t\t<th data-hide=\"phone\"><a href=\"";
                        // line 87
                        echo (isset($context["U_SORT_POSTS"]) ? $context["U_SORT_POSTS"] : null);
                        echo "#memberlist\">";
                        echo $this->env->getExtension('phpbb')->lang("POSTS");
                        echo "</a></th>
\t\t<th data-hide=\"phone\">";
                        // line 88
                        echo $this->env->getExtension('phpbb')->lang("OTHER");
                        echo "</th>
\t    <th data-hide=\"phone\"><a href=\"";
                        // line 89
                        echo (isset($context["U_SORT_JOINED"]) ? $context["U_SORT_JOINED"] : null);
                        echo "#memberlist\">";
                        echo $this->env->getExtension('phpbb')->lang("JOINED");
                        echo "</a></th>
\t\t";
                        // line 90
                        if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                            // line 91
                            echo "\t\t<th><a href=\"";
                            echo (isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null);
                            echo "#memberlist\">";
                            echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                            echo "</a></th>
\t\t";
                        }
                        // line 93
                        echo "\t";
                    } elseif ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
                        // line 94
                        echo "\t\t<th><i class=\"fa fa-group\"></i>&nbsp;";
                        echo $this->env->getExtension('phpbb')->lang("GROUP_MEMBERS");
                        echo "</th>
\t\t<th>&nbsp;</th>
\t\t<th>&nbsp;</th>
\t\t<th>&nbsp;</th>
\t\t";
                        // line 98
                        if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                            echo "<th class=\"active_sort\">&nbsp;</th>";
                        }
                        // line 99
                        echo "\t";
                    }
                    // line 100
                    echo "\t</tr>
\t</thead>
\t<tbody>
\t\t\t";
                    // line 103
                    $value = 1;
                    $context['definition']->set('S_MEMBER_HEADER', $value);
                    // line 104
                    echo "\t\t";
                }
                // line 105
                echo "\t";
            }
            // line 106
            echo "\t<tr>
\t\t<td>";
            // line 107
            if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SELECT_SINGLE"]) ? $context["S_SELECT_SINGLE"] : null))) {
                echo "<span><input type=\"checkbox\" name=\"user\" id=\"";
                echo $this->getAttribute($context["memberrow"], "USERNAME", array());
                echo "\" value=\"";
                echo $this->getAttribute($context["memberrow"], "USERNAME", array());
                echo "\"><label for=\"";
                echo $this->getAttribute($context["memberrow"], "USERNAME", array());
                echo "\"></label></span>";
            }
            echo $this->getAttribute($context["memberrow"], "USERNAME_FULL", array());
            echo "<br>";
            if ($this->getAttribute($context["memberrow"], "RANK_IMG", array())) {
                echo "<span class=\"rank-img\">";
                echo $this->getAttribute($context["memberrow"], "RANK_IMG", array());
                echo "</span>";
            } else {
                echo "<small>";
                echo $this->getAttribute($context["memberrow"], "RANK_TITLE", array());
                echo "</small>";
            }
            if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
                echo "<br />&#91;&nbsp;<a href=\"#\" onclick=\"insert_single_user('#results', '";
                echo $this->getAttribute($context["memberrow"], "A_USERNAME", array());
                echo "'); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("SELECT");
                echo "</a>&nbsp;&#93;";
            }
            echo "</td>
\t\t<td>";
            // line 108
            if (($this->getAttribute($context["memberrow"], "POSTS", array()) && (isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["memberrow"], "U_SEARCH_USER", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
                echo "\">";
                echo $this->getAttribute($context["memberrow"], "POSTS", array());
                echo "</a>";
            } else {
                echo $this->getAttribute($context["memberrow"], "POSTS", array());
            }
            echo "</td>
\t\t<td>
\t\t<ul class=\"list-inline\" style=\"margin-bottom: 0;\">
\t\t";
            // line 111
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 112
                echo "            ";
                if ($this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                    // line 113
                    echo "               ";
                    if ($this->getAttribute($context["custom_fields"], "PROFILE_FIELD_CONTACT", array())) {
                        // line 114
                        echo "                <li><a class=\"default-contact\" href=\"";
                        echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_CONTACT", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_DESC", array());
                        echo "\"><i class=\"icon-moon-";
                        echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                        echo "\"></i></a></li>
               ";
                    }
                    // line 115
                    echo "\t\t\t\t
            ";
                }
                // line 117
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "\t\t</ul>
        ";
            // line 119
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 120
                echo "\t\t ";
                if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                    // line 121
                    echo "            ";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                    echo "&#44;&nbsp;
\t\t ";
                }
                // line 123
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t\t
\t\t</td>
\t\t<td>";
            // line 125
            echo $this->getAttribute($context["memberrow"], "JOINED", array());
            echo "</td>
        ";
            // line 126
            if ((isset($context["S_VIEWONLINE"]) ? $context["S_VIEWONLINE"] : null)) {
                // line 127
                echo "        <td>";
                echo $this->getAttribute($context["memberrow"], "LAST_ACTIVE", array());
                echo "</td>
\t    ";
            }
            // line 129
            echo "\t</tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 131
            echo "\t<tr>
\t\t<td colspan=\"";
            // line 132
            if ((isset($context["S_VIEWONLINE"]) ? $context["S_VIEWONLINE"] : null)) {
                echo "5";
            } else {
                echo "4";
            }
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("NO_MEMBERS");
            echo "</td>
\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memberrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "\t</tbody>
\t</table>
\t </div>
  </div>
";
        // line 139
        if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SELECT_SINGLE"]) ? $context["S_SELECT_SINGLE"] : null))) {
            // line 140
            echo "<div class=\"pull-left\">
\t<fieldset>
\t<div class=\"btn-group\">
\t<a href=\"javascript:;\" onclick=\"marklist('results', 'user', true); return false;\" class=\"btn btn-default\" title=\"";
            // line 143
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "\"><i class=\"fa fa-check-square-o\"></i></a>
\t<a href=\"javascript:;\" onclick=\"marklist('results', 'user', false); return false;\" class=\"btn btn-default\" title=\"";
            // line 144
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "\"><i class=\"fa fa-square-o\"></i></a>
\t</div>
\t<button class=\"btn btn-default\" type=\"submit\" title=\"";
            // line 146
            echo $this->env->getExtension('phpbb')->lang("SELECT_MARKED");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SELECT_MARKED");
            echo "</button>
    </fieldset>
</div>
<div class=\"space10\"></div>
<div class=\"space10\"></div>
";
        }
        // line 152
        echo "
";
        // line 153
        if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
            // line 154
            echo "</form>
<form method=\"post\" id=\"sort-results\" action=\"";
            // line 155
            echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
            echo "\">
";
        }
        // line 157
        echo "
";
        // line 158
        if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null))) {
            // line 159
            echo "<fieldset>
\t<label for=\"sk\">";
            // line 160
            echo $this->env->getExtension('phpbb')->lang("SELECT_SORT_METHOD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label> 
\t<select class=\"selectpicker\" data-container=\"body\" data-width=\"auto\" name=\"sk\" id=\"sk\">";
            // line 161
            echo (isset($context["S_MODE_SELECT"]) ? $context["S_MODE_SELECT"] : null);
            echo "</select>
\t
\t<label for=\"sd\">";
            // line 163
            echo $this->env->getExtension('phpbb')->lang("ORDER");
            echo "</label> 
\t<select class=\"selectpicker\" data-container=\"body\" data-width=\"auto\" name=\"sd\" id=\"sd\">";
            // line 164
            echo (isset($context["S_ORDER_SELECT"]) ? $context["S_ORDER_SELECT"] : null);
            echo "</select> 
\t<button type=\"submit\" name=\"sort\" value=\"";
            // line 165
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "</button>
</fieldset>
";
        }
        // line 168
        echo "
</form>


";
        // line 172
        if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
            // line 173
            echo "\t";
            $location = "simple_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_footer.html", "memberlist_body.html", 173)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 175
            echo "<div class=\"row\">
<div class=\"col-md-4\">
";
            // line 177
            $location = "jumpbox_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("jumpbox_options.html", "memberlist_body.html", 177)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 178
            echo "</div>

<div class=\"col-md-8\">
    <ul class=\"pagination pagination-sm pull-right\">
\t\t <li><a>";
            // line 182
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo "</a></li>
\t\t";
            // line 183
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 184
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "memberlist_body.html", 184)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 185
                echo "\t\t";
            } else {
                // line 186
                echo "\t\t\t<li class=\"active\"><a>";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "</a></li>\t
\t\t";
            }
            // line 188
            echo "    </ul>
</div>\t
</div>

";
            // line 192
            $location = "jump_links.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("jump_links.html", "memberlist_body.html", 192)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 193
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "memberlist_body.html", 193)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "memberlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  710 => 193,  698 => 192,  692 => 188,  686 => 186,  683 => 185,  670 => 184,  668 => 183,  664 => 182,  658 => 178,  646 => 177,  642 => 175,  628 => 173,  626 => 172,  620 => 168,  612 => 165,  608 => 164,  604 => 163,  599 => 161,  594 => 160,  591 => 159,  589 => 158,  586 => 157,  581 => 155,  578 => 154,  576 => 153,  573 => 152,  562 => 146,  557 => 144,  553 => 143,  548 => 140,  546 => 139,  540 => 135,  525 => 132,  522 => 131,  516 => 129,  510 => 127,  508 => 126,  504 => 125,  495 => 123,  489 => 121,  486 => 120,  482 => 119,  479 => 118,  473 => 117,  469 => 115,  459 => 114,  456 => 113,  453 => 112,  449 => 111,  433 => 108,  403 => 107,  400 => 106,  397 => 105,  394 => 104,  391 => 103,  386 => 100,  383 => 99,  379 => 98,  371 => 94,  368 => 93,  360 => 91,  358 => 90,  352 => 89,  348 => 88,  342 => 87,  325 => 86,  323 => 85,  314 => 79,  310 => 77,  303 => 72,  301 => 71,  291 => 68,  288 => 67,  285 => 66,  282 => 65,  279 => 64,  273 => 63,  267 => 59,  259 => 57,  257 => 56,  251 => 55,  247 => 54,  241 => 53,  227 => 52,  218 => 46,  214 => 44,  211 => 43,  199 => 33,  188 => 31,  183 => 30,  169 => 29,  153 => 25,  149 => 23,  144 => 22,  139 => 21,  135 => 20,  128 => 18,  117 => 17,  115 => 16,  112 => 15,  106 => 13,  93 => 12,  86 => 9,  74 => 8,  59 => 7,  57 => 6,  47 => 4,  34 => 3,  21 => 2,  19 => 1,);
    }
}
