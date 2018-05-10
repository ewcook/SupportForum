<?php

/* index_body.html */
class __TwigTemplate_ca30c6c39d38b6f261323d70f9b2eb653674ca3d7ade4f02d468d54a9fcd84c9 extends Twig_Template
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
        if (isset($context["NAVLINKS"])) { $_NAVLINKS_ = $context["NAVLINKS"]; } else { $_NAVLINKS_ = null; }
        ob_start();
        // line 2
        echo "\t";
        if (isset($context["U_MARK_FORUMS"])) { $_U_MARK_FORUMS_ = $context["U_MARK_FORUMS"]; } else { $_U_MARK_FORUMS_ = null; }
        if ($_U_MARK_FORUMS_) {
            // line 3
            echo "\t\t<li class=\"small-icon icon-mark\"><a href=\"";
            if (isset($context["U_MARK_FORUMS"])) { $_U_MARK_FORUMS_ = $context["U_MARK_FORUMS"]; } else { $_U_MARK_FORUMS_ = null; }
            echo $_U_MARK_FORUMS_;
            echo "\" accesskey=\"m\" data-ajax=\"mark_forums_read\">";
            echo $this->env->getExtension('phpbb')->lang("MARK_FORUMS_READ");
            echo "</a></li>
\t\t";
            // line 4
            if (isset($context["NAVLINKS_SHOW_DEFAULT"])) { $_NAVLINKS_SHOW_DEFAULT_ = $context["NAVLINKS_SHOW_DEFAULT"]; } else { $_NAVLINKS_SHOW_DEFAULT_ = null; }
            $value = 1;
            $context['definition']->set('NAVLINKS_SHOW_DEFAULT', $value);
            // line 5
            echo "\t";
        }
        $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
        $context['definition']->set('NAVLINKS', $value);
        // line 7
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "index_body.html", 7)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 8
        echo "
";
        // line 9
        if (isset($context["index_body_markforums_before"])) { $_index_body_markforums_before_ = $context["index_body_markforums_before"]; } else { $_index_body_markforums_before_ = null; }
        // line 10
        if (isset($context["index_body_markforums_after"])) { $_index_body_markforums_after_ = $context["index_body_markforums_after"]; } else { $_index_body_markforums_after_ = null; }
        // line 11
        echo "
";
        // line 12
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 12)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 13
        echo "
";
        // line 14
        if (isset($context["index_body_forumlist_body_after"])) { $_index_body_forumlist_body_after_ = $context["index_body_forumlist_body_after"]; } else { $_index_body_forumlist_body_after_ = null; }
        // line 15
        echo "
";
        // line 16
        if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if (( !$_S_USER_LOGGED_IN_ &&  !$_S_IS_BOT_)) {
            // line 17
            echo "\t<form method=\"post\" action=\"";
            if (isset($context["S_LOGIN_ACTION"])) { $_S_LOGIN_ACTION_ = $context["S_LOGIN_ACTION"]; } else { $_S_LOGIN_ACTION_ = null; }
            echo $_S_LOGIN_ACTION_;
            echo "\" class=\"headerspace\">
\t<h3><a href=\"";
            // line 18
            if (isset($context["U_LOGIN_LOGOUT"])) { $_U_LOGIN_LOGOUT_ = $context["U_LOGIN_LOGOUT"]; } else { $_U_LOGIN_LOGOUT_ = null; }
            echo $_U_LOGIN_LOGOUT_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a>";
            if (isset($context["S_REGISTER_ENABLED"])) { $_S_REGISTER_ENABLED_ = $context["S_REGISTER_ENABLED"]; } else { $_S_REGISTER_ENABLED_ = null; }
            if ($_S_REGISTER_ENABLED_) {
                echo "&nbsp; &bull; &nbsp;<a href=\"";
                if (isset($context["U_REGISTER"])) { $_U_REGISTER_ = $context["U_REGISTER"]; } else { $_U_REGISTER_ = null; }
                echo $_U_REGISTER_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</a>";
            }
            echo "</h3>
\t\t<fieldset class=\"quick-login\">
\t\t\t<label for=\"username\"><span>";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "\" /></label>
\t\t\t<label for=\"password\"><span>";
            // line 21
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label>
\t\t\t";
            // line 22
            if (isset($context["U_SEND_PASSWORD"])) { $_U_SEND_PASSWORD_ = $context["U_SEND_PASSWORD"]; } else { $_U_SEND_PASSWORD_ = null; }
            if ($_U_SEND_PASSWORD_) {
                // line 23
                echo "\t\t\t\t<a href=\"";
                if (isset($context["U_SEND_PASSWORD"])) { $_U_SEND_PASSWORD_ = $context["U_SEND_PASSWORD"]; } else { $_U_SEND_PASSWORD_ = null; }
                echo $_U_SEND_PASSWORD_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORGOT_PASS");
                echo "</a>
\t\t\t";
            }
            // line 25
            echo "\t\t\t";
            if (isset($context["S_AUTOLOGIN_ENABLED"])) { $_S_AUTOLOGIN_ENABLED_ = $context["S_AUTOLOGIN_ENABLED"]; } else { $_S_AUTOLOGIN_ENABLED_ = null; }
            if ($_S_AUTOLOGIN_ENABLED_) {
                // line 26
                echo "\t\t\t\t<span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" /></label>
\t\t\t";
            }
            // line 28
            echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
            echo "\" class=\"button2\" />
\t\t\t";
            // line 29
            if (isset($context["S_LOGIN_REDIRECT"])) { $_S_LOGIN_REDIRECT_ = $context["S_LOGIN_REDIRECT"]; } else { $_S_LOGIN_REDIRECT_ = null; }
            echo $_S_LOGIN_REDIRECT_;
            echo "
\t\t</fieldset>
\t</form>
";
        }
        // line 33
        echo "
";
        // line 34
        if (isset($context["index_body_stat_blocks_before"])) { $_index_body_stat_blocks_before_ = $context["index_body_stat_blocks_before"]; } else { $_index_body_stat_blocks_before_ = null; }
        // line 35
        echo "
";
        // line 36
        if (isset($context["S_DISPLAY_ONLINE_LIST"])) { $_S_DISPLAY_ONLINE_LIST_ = $context["S_DISPLAY_ONLINE_LIST"]; } else { $_S_DISPLAY_ONLINE_LIST_ = null; }
        if ($_S_DISPLAY_ONLINE_LIST_) {
            // line 37
            echo "\t<div class=\"stat-block online-list\">
\t\t";
            // line 38
            if (isset($context["U_VIEWONLINE"])) { $_U_VIEWONLINE_ = $context["U_VIEWONLINE"]; } else { $_U_VIEWONLINE_ = null; }
            if ($_U_VIEWONLINE_) {
                echo "<h3><a href=\"";
                if (isset($context["U_VIEWONLINE"])) { $_U_VIEWONLINE_ = $context["U_VIEWONLINE"]; } else { $_U_VIEWONLINE_ = null; }
                echo $_U_VIEWONLINE_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                echo "</a></h3>";
            } else {
                echo "<h3>";
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                echo "</h3>";
            }
            // line 39
            echo "\t\t<p>
\t\t\t";
            // line 40
            if (isset($context["index_body_block_online_prepend"])) { $_index_body_block_online_prepend_ = $context["index_body_block_online_prepend"]; } else { $_index_body_block_online_prepend_ = null; }
            // line 41
            echo "\t\t\t";
            if (isset($context["TOTAL_USERS_ONLINE"])) { $_TOTAL_USERS_ONLINE_ = $context["TOTAL_USERS_ONLINE"]; } else { $_TOTAL_USERS_ONLINE_ = null; }
            echo $_TOTAL_USERS_ONLINE_;
            echo " (";
            echo $this->env->getExtension('phpbb')->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            if (isset($context["RECORD_USERS"])) { $_RECORD_USERS_ = $context["RECORD_USERS"]; } else { $_RECORD_USERS_ = null; }
            echo $_RECORD_USERS_;
            echo "<br /> <br />";
            if (isset($context["LOGGED_IN_USER_LIST"])) { $_LOGGED_IN_USER_LIST_ = $context["LOGGED_IN_USER_LIST"]; } else { $_LOGGED_IN_USER_LIST_ = null; }
            echo $_LOGGED_IN_USER_LIST_;
            echo "
\t\t\t";
            // line 42
            if (isset($context["LEGEND"])) { $_LEGEND_ = $context["LEGEND"]; } else { $_LEGEND_ = null; }
            if ($_LEGEND_) {
                echo "<br /><em>";
                echo $this->env->getExtension('phpbb')->lang("LEGEND");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                if (isset($context["LEGEND"])) { $_LEGEND_ = $context["LEGEND"]; } else { $_LEGEND_ = null; }
                echo $_LEGEND_;
                echo "</em>";
            }
            // line 43
            echo "\t\t\t";
            if (isset($context["index_body_block_online_append"])) { $_index_body_block_online_append_ = $context["index_body_block_online_append"]; } else { $_index_body_block_online_append_ = null; }
            // line 44
            echo "\t\t</p>
\t</div>
";
        }
        // line 47
        echo "
";
        // line 48
        if (isset($context["S_DISPLAY_BIRTHDAY_LIST"])) { $_S_DISPLAY_BIRTHDAY_LIST_ = $context["S_DISPLAY_BIRTHDAY_LIST"]; } else { $_S_DISPLAY_BIRTHDAY_LIST_ = null; }
        if ($_S_DISPLAY_BIRTHDAY_LIST_) {
            // line 49
            echo "\t<div class=\"stat-block birthday-list\">
\t\t<h3>";
            // line 50
            echo $this->env->getExtension('phpbb')->lang("BIRTHDAYS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 52
            if (isset($context["index_body_block_birthday_prepend"])) { $_index_body_block_birthday_prepend_ = $context["index_body_block_birthday_prepend"]; } else { $_index_body_block_birthday_prepend_ = null; }
            // line 53
            echo "\t\t\t";
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "birthdays", array()))) {
                echo $this->env->getExtension('phpbb')->lang("CONGRATULATIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <strong>";
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "birthdays", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    if (isset($context["birthdays"])) { $_birthdays_ = $context["birthdays"]; } else { $_birthdays_ = null; }
                    echo $this->getAttribute($_birthdays_, "USERNAME", array());
                    if (isset($context["birthdays"])) { $_birthdays_ = $context["birthdays"]; } else { $_birthdays_ = null; }
                    if (($this->getAttribute($_birthdays_, "AGE", array()) !== "")) {
                        echo " (";
                        if (isset($context["birthdays"])) { $_birthdays_ = $context["birthdays"]; } else { $_birthdays_ = null; }
                        echo $this->getAttribute($_birthdays_, "AGE", array());
                        echo ")";
                    }
                    if (isset($context["birthdays"])) { $_birthdays_ = $context["birthdays"]; } else { $_birthdays_ = null; }
                    if ( !$this->getAttribute($_birthdays_, "S_LAST_ROW", array())) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->env->getExtension('phpbb')->lang("NO_BIRTHDAYS");
            }
            // line 54
            echo "\t\t\t";
            if (isset($context["index_body_block_birthday_append"])) { $_index_body_block_birthday_append_ = $context["index_body_block_birthday_append"]; } else { $_index_body_block_birthday_append_ = null; }
            // line 55
            echo "\t\t</p>
\t</div>
";
        }
        // line 58
        echo "
";
        // line 59
        if (isset($context["NEWEST_USER"])) { $_NEWEST_USER_ = $context["NEWEST_USER"]; } else { $_NEWEST_USER_ = null; }
        if ($_NEWEST_USER_) {
            // line 60
            echo "\t<div class=\"stat-block statistics\">
\t\t<h3>";
            // line 61
            echo $this->env->getExtension('phpbb')->lang("STATISTICS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 63
            if (isset($context["index_body_block_stats_prepend"])) { $_index_body_block_stats_prepend_ = $context["index_body_block_stats_prepend"]; } else { $_index_body_block_stats_prepend_ = null; }
            // line 64
            echo "\t\t\t";
            if (isset($context["TOTAL_POSTS"])) { $_TOTAL_POSTS_ = $context["TOTAL_POSTS"]; } else { $_TOTAL_POSTS_ = null; }
            echo $_TOTAL_POSTS_;
            echo " &bull; ";
            if (isset($context["TOTAL_TOPICS"])) { $_TOTAL_TOPICS_ = $context["TOTAL_TOPICS"]; } else { $_TOTAL_TOPICS_ = null; }
            echo $_TOTAL_TOPICS_;
            echo " &bull; ";
            if (isset($context["TOTAL_USERS"])) { $_TOTAL_USERS_ = $context["TOTAL_USERS"]; } else { $_TOTAL_USERS_ = null; }
            echo $_TOTAL_USERS_;
            echo " &bull; ";
            if (isset($context["NEWEST_USER"])) { $_NEWEST_USER_ = $context["NEWEST_USER"]; } else { $_NEWEST_USER_ = null; }
            echo $_NEWEST_USER_;
            echo "
\t\t\t";
            // line 65
            if (isset($context["index_body_block_stats_append"])) { $_index_body_block_stats_append_ = $context["index_body_block_stats_append"]; } else { $_index_body_block_stats_append_ = null; }
            // line 66
            echo "\t\t</p>
\t</div>
";
        }
        // line 69
        echo "
";
        // line 70
        if (isset($context["index_body_stat_blocks_after"])) { $_index_body_stat_blocks_after_ = $context["index_body_stat_blocks_after"]; } else { $_index_body_stat_blocks_after_ = null; }
        // line 71
        echo "
";
        // line 72
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 72)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 72,  327 => 71,  325 => 70,  322 => 69,  317 => 66,  315 => 65,  300 => 64,  298 => 63,  293 => 61,  290 => 60,  287 => 59,  284 => 58,  279 => 55,  276 => 54,  244 => 53,  242 => 52,  237 => 50,  234 => 49,  231 => 48,  228 => 47,  223 => 44,  220 => 43,  209 => 42,  195 => 41,  193 => 40,  190 => 39,  176 => 38,  173 => 37,  170 => 36,  167 => 35,  165 => 34,  162 => 33,  154 => 29,  149 => 28,  143 => 26,  139 => 25,  130 => 23,  127 => 22,  120 => 21,  113 => 20,  95 => 18,  89 => 17,  85 => 16,  82 => 15,  80 => 14,  77 => 13,  65 => 12,  62 => 11,  60 => 10,  58 => 9,  55 => 8,  43 => 7,  38 => 5,  34 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
