<?php

/* viewforum_body.html */
class __TwigTemplate_bc8dac7abe1adaf6a42796f540889ec582824cbfd9e7935252622819e200e070 extends Twig_Template
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
        if (isset($context["S_HAS_SUBFORUM"])) { $_S_HAS_SUBFORUM_ = $context["S_HAS_SUBFORUM"]; } else { $_S_HAS_SUBFORUM_ = null; }
        if (isset($context["U_MARK_FORUMS"])) { $_U_MARK_FORUMS_ = $context["U_MARK_FORUMS"]; } else { $_U_MARK_FORUMS_ = null; }
        if (($_S_HAS_SUBFORUM_ && $_U_MARK_FORUMS_)) {
            // line 3
            echo "\t\t<li class=\"small-icon icon-mark\"><a href=\"";
            if (isset($context["U_MARK_FORUMS"])) { $_U_MARK_FORUMS_ = $context["U_MARK_FORUMS"]; } else { $_U_MARK_FORUMS_ = null; }
            echo $_U_MARK_FORUMS_;
            echo "\" data-ajax=\"mark_forums_read\">";
            echo $this->env->getExtension('phpbb')->lang("MARK_SUBFORUMS_READ");
            echo "</a></li>
\t";
        }
        // line 5
        echo "\t";
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if (isset($context["U_MARK_TOPICS"])) { $_U_MARK_TOPICS_ = $context["U_MARK_TOPICS"]; } else { $_U_MARK_TOPICS_ = null; }
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if ((( !$_S_IS_BOT_ && $_U_MARK_TOPICS_) && twig_length_filter($this->env, $this->getAttribute($_loops_, "topicrow", array())))) {
            // line 6
            echo "\t\t<li class=\"small-icon icon-mark\"><a href=\"";
            if (isset($context["U_MARK_TOPICS"])) { $_U_MARK_TOPICS_ = $context["U_MARK_TOPICS"]; } else { $_U_MARK_TOPICS_ = null; }
            echo $_U_MARK_TOPICS_;
            echo "\" accesskey=\"m\" data-ajax=\"mark_topics_read\">";
            echo $this->env->getExtension('phpbb')->lang("MARK_TOPICS_READ");
            echo "</a></li>
\t";
        }
        // line 8
        if (isset($context["NAVLINKS_SHOW_DEFAULT"])) { $_NAVLINKS_SHOW_DEFAULT_ = $context["NAVLINKS_SHOW_DEFAULT"]; } else { $_NAVLINKS_SHOW_DEFAULT_ = null; }
        $value = 1;
        $context['definition']->set('NAVLINKS_SHOW_DEFAULT', $value);
        $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
        $context['definition']->set('NAVLINKS', $value);
        // line 10
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "viewforum_body.html", 10)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 11
        if (isset($context["viewforum_forum_title_before"])) { $_viewforum_forum_title_before_ = $context["viewforum_forum_title_before"]; } else { $_viewforum_forum_title_before_ = null; }
        // line 12
        echo "<h2 class=\"forum-title\">";
        if (isset($context["viewforum_forum_name_prepend"])) { $_viewforum_forum_name_prepend_ = $context["viewforum_forum_name_prepend"]; } else { $_viewforum_forum_name_prepend_ = null; }
        echo "<a href=\"";
        if (isset($context["U_VIEW_FORUM"])) { $_U_VIEW_FORUM_ = $context["U_VIEW_FORUM"]; } else { $_U_VIEW_FORUM_ = null; }
        echo $_U_VIEW_FORUM_;
        echo "\">";
        if (isset($context["FORUM_NAME"])) { $_FORUM_NAME_ = $context["FORUM_NAME"]; } else { $_FORUM_NAME_ = null; }
        echo $_FORUM_NAME_;
        echo "</a>";
        if (isset($context["viewforum_forum_name_append"])) { $_viewforum_forum_name_append_ = $context["viewforum_forum_name_append"]; } else { $_viewforum_forum_name_append_ = null; }
        echo "</h2>
";
        // line 13
        if (isset($context["viewforum_forum_title_after"])) { $_viewforum_forum_title_after_ = $context["viewforum_forum_title_after"]; } else { $_viewforum_forum_title_after_ = null; }
        // line 14
        if (isset($context["FORUM_DESC"])) { $_FORUM_DESC_ = $context["FORUM_DESC"]; } else { $_FORUM_DESC_ = null; }
        if (isset($context["MODERATORS"])) { $_MODERATORS_ = $context["MODERATORS"]; } else { $_MODERATORS_ = null; }
        if (isset($context["U_MCP"])) { $_U_MCP_ = $context["U_MCP"]; } else { $_U_MCP_ = null; }
        if ((($_FORUM_DESC_ || $_MODERATORS_) || $_U_MCP_)) {
            // line 15
            echo "<div>
\t<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the forum body -->
\t";
            // line 17
            if (isset($context["FORUM_DESC"])) { $_FORUM_DESC_ = $context["FORUM_DESC"]; } else { $_FORUM_DESC_ = null; }
            if ($_FORUM_DESC_) {
                echo "<div style=\"display: none !important;\">";
                if (isset($context["FORUM_DESC"])) { $_FORUM_DESC_ = $context["FORUM_DESC"]; } else { $_FORUM_DESC_ = null; }
                echo $_FORUM_DESC_;
                echo "<br /></div>";
            }
            // line 18
            echo "\t";
            if (isset($context["MODERATORS"])) { $_MODERATORS_ = $context["MODERATORS"]; } else { $_MODERATORS_ = null; }
            if ($_MODERATORS_) {
                echo "<p><strong>";
                if (isset($context["S_SINGLE_MODERATOR"])) { $_S_SINGLE_MODERATOR_ = $context["S_SINGLE_MODERATOR"]; } else { $_S_SINGLE_MODERATOR_ = null; }
                if ($_S_SINGLE_MODERATOR_) {
                    echo $this->env->getExtension('phpbb')->lang("MODERATOR");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("MODERATORS");
                }
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                if (isset($context["MODERATORS"])) { $_MODERATORS_ = $context["MODERATORS"]; } else { $_MODERATORS_ = null; }
                echo $_MODERATORS_;
                echo "</p>";
            }
            // line 19
            echo "</div>
";
        }
        // line 21
        echo "
";
        // line 22
        if (isset($context["S_FORUM_RULES"])) { $_S_FORUM_RULES_ = $context["S_FORUM_RULES"]; } else { $_S_FORUM_RULES_ = null; }
        if ($_S_FORUM_RULES_) {
            // line 23
            echo "\t<div class=\"rules";
            if (isset($context["U_FORUM_RULES"])) { $_U_FORUM_RULES_ = $context["U_FORUM_RULES"]; } else { $_U_FORUM_RULES_ = null; }
            if ($_U_FORUM_RULES_) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 26
            if (isset($context["U_FORUM_RULES"])) { $_U_FORUM_RULES_ = $context["U_FORUM_RULES"]; } else { $_U_FORUM_RULES_ = null; }
            if ($_U_FORUM_RULES_) {
                // line 27
                echo "\t\t\t<a href=\"";
                if (isset($context["U_FORUM_RULES"])) { $_U_FORUM_RULES_ = $context["U_FORUM_RULES"]; } else { $_U_FORUM_RULES_ = null; }
                echo $_U_FORUM_RULES_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 29
                echo "\t\t\t<strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 30
                if (isset($context["FORUM_RULES"])) { $_FORUM_RULES_ = $context["FORUM_RULES"]; } else { $_FORUM_RULES_ = null; }
                echo $_FORUM_RULES_;
                echo "
\t\t";
            }
            // line 32
            echo "
\t\t</div>
\t</div>
";
        }
        // line 36
        echo "
";
        // line 37
        if (isset($context["S_HAS_SUBFORUM"])) { $_S_HAS_SUBFORUM_ = $context["S_HAS_SUBFORUM"]; } else { $_S_HAS_SUBFORUM_ = null; }
        if ($_S_HAS_SUBFORUM_) {
            // line 38
            echo "\t";
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "viewforum_body.html", 38)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 40
        echo "
";
        // line 41
        if (isset($context["S_DISPLAY_POST_INFO"])) { $_S_DISPLAY_POST_INFO_ = $context["S_DISPLAY_POST_INFO"]; } else { $_S_DISPLAY_POST_INFO_ = null; }
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (isset($context["TOTAL_POSTS"])) { $_TOTAL_POSTS_ = $context["TOTAL_POSTS"]; } else { $_TOTAL_POSTS_ = null; }
        if (isset($context["TOTAL_TOPICS"])) { $_TOTAL_TOPICS_ = $context["TOTAL_TOPICS"]; } else { $_TOTAL_TOPICS_ = null; }
        if (((($_S_DISPLAY_POST_INFO_ || twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) || $_TOTAL_POSTS_) || $_TOTAL_TOPICS_)) {
            // line 42
            echo "\t<div class=\"action-bar top\">

\t";
            // line 44
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if (isset($context["S_DISPLAY_POST_INFO"])) { $_S_DISPLAY_POST_INFO_ = $context["S_DISPLAY_POST_INFO"]; } else { $_S_DISPLAY_POST_INFO_ = null; }
            if (( !$_S_IS_BOT_ && $_S_DISPLAY_POST_INFO_)) {
                // line 45
                echo "\t\t<div class=\"buttons\">
\t\t\t";
                // line 46
                if (isset($context["viewforum_buttons_top_before"])) { $_viewforum_buttons_top_before_ = $context["viewforum_buttons_top_before"]; } else { $_viewforum_buttons_top_before_ = null; }
                // line 47
                echo "
\t\t\t<a href=\"";
                // line 48
                if (isset($context["U_POST_NEW_TOPIC"])) { $_U_POST_NEW_TOPIC_ = $context["U_POST_NEW_TOPIC"]; } else { $_U_POST_NEW_TOPIC_ = null; }
                echo $_U_POST_NEW_TOPIC_;
                echo "\" class=\"button icon-button ";
                if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
                if ($_S_IS_LOCKED_) {
                    echo "locked-icon";
                } else {
                    echo "post-icon";
                }
                echo "\" title=\"";
                if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
                if ($_S_IS_LOCKED_) {
                    echo $this->env->getExtension('phpbb')->lang("FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t\t";
                // line 49
                if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
                if ($_S_IS_LOCKED_) {
                    echo $this->env->getExtension('phpbb')->lang("BUTTON_FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("BUTTON_NEW_TOPIC");
                }
                // line 50
                echo "\t\t\t</a>

\t\t\t";
                // line 52
                if (isset($context["viewforum_buttons_top_after"])) { $_viewforum_buttons_top_after_ = $context["viewforum_buttons_top_after"]; } else { $_viewforum_buttons_top_after_ = null; }
                // line 53
                echo "\t\t</div>
\t";
            }
            // line 55
            echo "
\t";
            // line 56
            if (isset($context["S_DISPLAY_SEARCHBOX"])) { $_S_DISPLAY_SEARCHBOX_ = $context["S_DISPLAY_SEARCHBOX"]; } else { $_S_DISPLAY_SEARCHBOX_ = null; }
            if ($_S_DISPLAY_SEARCHBOX_) {
                // line 57
                echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"forum-search\" action=\"";
                // line 58
                if (isset($context["S_SEARCHBOX_ACTION"])) { $_S_SEARCHBOX_ACTION_ = $context["S_SEARCHBOX_ACTION"]; } else { $_S_SEARCHBOX_ACTION_ = null; }
                echo $_S_SEARCHBOX_ACTION_;
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\" type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
                // line 60
                echo $this->env->getExtension('phpbb')->lang("SEARCH_FORUM");
                echo "\" />
\t\t\t\t<button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
                // line 61
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "</button>
\t\t\t\t<a href=\"";
                // line 62
                if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
                echo $_U_SEARCH_;
                echo "\" class=\"button icon-button search-adv-icon\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
                echo "</a>
\t\t\t\t";
                // line 63
                if (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"])) { $_S_SEARCH_LOCAL_HIDDEN_FIELDS_ = $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]; } else { $_S_SEARCH_LOCAL_HIDDEN_FIELDS_ = null; }
                echo $_S_SEARCH_LOCAL_HIDDEN_FIELDS_;
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
            }
            // line 68
            echo "
\t<div class=\"pagination\">
\t\t";
            // line 70
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if (isset($context["U_MARK_TOPICS"])) { $_U_MARK_TOPICS_ = $context["U_MARK_TOPICS"]; } else { $_U_MARK_TOPICS_ = null; }
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if ((( !$_S_IS_BOT_ && $_U_MARK_TOPICS_) && twig_length_filter($this->env, $this->getAttribute($_loops_, "topicrow", array())))) {
                echo "<a href=\"";
                if (isset($context["U_MARK_TOPICS"])) { $_U_MARK_TOPICS_ = $context["U_MARK_TOPICS"]; } else { $_U_MARK_TOPICS_ = null; }
                echo $_U_MARK_TOPICS_;
                echo "\" class=\"mark\" accesskey=\"m\" data-ajax=\"mark_topics_read\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_TOPICS_READ");
                echo "</a> &bull; ";
            }
            // line 71
            echo "\t\t";
            if (isset($context["TOTAL_TOPICS"])) { $_TOTAL_TOPICS_ = $context["TOTAL_TOPICS"]; } else { $_TOTAL_TOPICS_ = null; }
            echo $_TOTAL_TOPICS_;
            echo "
\t\t";
            // line 72
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
                // line 73
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 73)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 74
                echo "\t\t";
            } else {
                // line 75
                echo "\t\t\t&bull; ";
                if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                echo $_PAGE_NUMBER_;
                echo "
\t\t";
            }
            // line 77
            echo "\t</div>

\t</div>
";
        }
        // line 81
        echo "
";
        // line 82
        if (isset($context["S_NO_READ_ACCESS"])) { $_S_NO_READ_ACCESS_ = $context["S_NO_READ_ACCESS"]; } else { $_S_NO_READ_ACCESS_ = null; }
        if ($_S_NO_READ_ACCESS_) {
            // line 83
            echo "
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 86
            echo $this->env->getExtension('phpbb')->lang("NO_READ_ACCESS");
            echo "</strong>
\t\t</div>
\t</div>

\t";
            // line 90
            if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if (( !$_S_USER_LOGGED_IN_ &&  !$_S_IS_BOT_)) {
                // line 91
                echo "
\t\t<form action=\"";
                // line 92
                if (isset($context["S_LOGIN_ACTION"])) { $_S_LOGIN_ACTION_ = $context["S_LOGIN_ACTION"]; } else { $_S_LOGIN_ACTION_ = null; }
                echo $_S_LOGIN_ACTION_;
                echo "\" method=\"post\">

\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">

\t\t\t<div class=\"content\">
\t\t\t\t<h3><a href=\"";
                // line 98
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

\t\t\t\t<fieldset class=\"fields1\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"username\">";
                // line 102
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
                // line 103
                if (isset($context["USERNAME"])) { $_USERNAME_ = $context["USERNAME"]; } else { $_USERNAME_ = null; }
                echo $_USERNAME_;
                echo "\" class=\"inputbox autowidth\" /></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"password\">";
                // line 106
                echo $this->env->getExtension('phpbb')->lang("PASSWORD");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><input type=\"password\" tabindex=\"2\" id=\"password\" name=\"password\" size=\"25\" class=\"inputbox autowidth\" autocomplete=\"off\" /></dd>
\t\t\t\t\t";
                // line 108
                if (isset($context["S_AUTOLOGIN_ENABLED"])) { $_S_AUTOLOGIN_ENABLED_ = $context["S_AUTOLOGIN_ENABLED"]; } else { $_S_AUTOLOGIN_ENABLED_ = null; }
                if ($_S_AUTOLOGIN_ENABLED_) {
                    echo "<dd><label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"3\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
                    echo "</label></dd>";
                }
                // line 109
                echo "\t\t\t\t\t<dd><label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"4\" /> ";
                echo $this->env->getExtension('phpbb')->lang("HIDE_ME");
                echo "</label></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd><input type=\"submit\" name=\"login\" tabindex=\"5\" value=\"";
                // line 113
                echo $this->env->getExtension('phpbb')->lang("LOGIN");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 115
                if (isset($context["S_LOGIN_REDIRECT"])) { $_S_LOGIN_REDIRECT_ = $context["S_LOGIN_REDIRECT"]; } else { $_S_LOGIN_REDIRECT_ = null; }
                echo $_S_LOGIN_REDIRECT_;
                echo "
\t\t\t\t</fieldset>
\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t\t</form>

\t";
            }
            // line 125
            echo "
";
        }
        // line 127
        echo "
";
        // line 128
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "topicrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
            // line 129
            echo "
\t";
            // line 130
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if (( !$this->getAttribute($_topicrow_, "S_TOPIC_TYPE_SWITCH", array()) &&  !$this->getAttribute($_topicrow_, "S_FIRST_ROW", array()))) {
                // line 131
                echo "\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 135
            echo "
\t";
            // line 136
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if (($this->getAttribute($_topicrow_, "S_FIRST_ROW", array()) ||  !$this->getAttribute($_topicrow_, "S_TOPIC_TYPE_SWITCH", array()))) {
                // line 137
                echo "\t\t<div class=\"forumbg";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                if (($this->getAttribute($_topicrow_, "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($_topicrow_, "S_POST_ANNOUNCE", array()) || $this->getAttribute($_topicrow_, "S_POST_GLOBAL", array())))) {
                    echo " announcement";
                }
                echo "\">
\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t<dt";
                // line 142
                if (isset($context["S_DISPLAY_ACTIVE"])) { $_S_DISPLAY_ACTIVE_ = $context["S_DISPLAY_ACTIVE"]; } else { $_S_DISPLAY_ACTIVE_ = null; }
                if ($_S_DISPLAY_ACTIVE_) {
                    echo " id=\"active_topics\"";
                }
                echo "><div class=\"list-inner\">";
                if (isset($context["S_DISPLAY_ACTIVE"])) { $_S_DISPLAY_ACTIVE_ = $context["S_DISPLAY_ACTIVE"]; } else { $_S_DISPLAY_ACTIVE_ = null; }
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                if ($_S_DISPLAY_ACTIVE_) {
                    echo $this->env->getExtension('phpbb')->lang("ACTIVE_TOPICS");
                } elseif (($this->getAttribute($_topicrow_, "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($_topicrow_, "S_POST_ANNOUNCE", array()) || $this->getAttribute($_topicrow_, "S_POST_GLOBAL", array())))) {
                    echo $this->env->getExtension('phpbb')->lang("ANNOUNCEMENTS");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("TOPICS");
                }
                echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 143
                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                // line 144
                echo $this->env->getExtension('phpbb')->lang("VIEWS");
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 145
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">
\t";
            }
            // line 151
            echo "
\t\t";
            // line 152
            if (isset($context["viewforum_body_topic_row_before"])) { $_viewforum_body_topic_row_before_ = $context["viewforum_body_topic_row_before"]; } else { $_viewforum_body_topic_row_before_ = null; }
            // line 153
            echo "\t\t<li class=\"row";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if (($this->getAttribute($_topicrow_, "S_ROW_COUNT", array()) % 2 == 0)) {
                echo " bg1";
            } else {
                echo " bg2";
            }
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if ($this->getAttribute($_topicrow_, "S_POST_GLOBAL", array())) {
                echo " global-announce";
            }
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if ($this->getAttribute($_topicrow_, "S_POST_ANNOUNCE", array())) {
                echo " announce";
            }
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if ($this->getAttribute($_topicrow_, "S_POST_STICKY", array())) {
                echo " sticky";
            }
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if ($this->getAttribute($_topicrow_, "S_TOPIC_REPORTED", array())) {
                echo " reported";
            }
            echo "\">
\t\t\t";
            // line 154
            if (isset($context["viewforum_body_topic_row_prepend"])) { $_viewforum_body_topic_row_prepend_ = $context["viewforum_body_topic_row_prepend"]; } else { $_viewforum_body_topic_row_prepend_ = null; }
            // line 155
            echo "\t\t\t<dl class=\"icon ";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            echo $this->getAttribute($_topicrow_, "TOPIC_IMG_STYLE", array());
            echo "\">
\t\t\t\t<dt";
            // line 156
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if (isset($context["S_TOPIC_ICONS"])) { $_S_TOPIC_ICONS_ = $context["S_TOPIC_ICONS"]; } else { $_S_TOPIC_ICONS_ = null; }
            if (($this->getAttribute($_topicrow_, "TOPIC_ICON_IMG", array()) && $_S_TOPIC_ICONS_)) {
                echo " style=\"background-image: url(";
                if (isset($context["T_ICONS_PATH"])) { $_T_ICONS_PATH_ = $context["T_ICONS_PATH"]; } else { $_T_ICONS_PATH_ = null; }
                echo $_T_ICONS_PATH_;
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "TOPIC_ICON_IMG", array());
                echo "); background-repeat: no-repeat;\"";
            }
            echo " title=\"";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            echo $this->getAttribute($_topicrow_, "TOPIC_FOLDER_IMG_ALT", array());
            echo "\">
\t\t\t\t\t";
            // line 157
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if (($this->getAttribute($_topicrow_, "S_UNREAD_TOPIC", array()) &&  !$_S_IS_BOT_)) {
                echo "<a href=\"";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "U_NEWEST_POST", array());
                echo "\" class=\"icon-link\"></a>";
            }
            // line 158
            echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
            // line 159
            if (isset($context["topiclist_row_prepend"])) { $_topiclist_row_prepend_ = $context["topiclist_row_prepend"]; } else { $_topiclist_row_prepend_ = null; }
            // line 160
            echo "\t\t\t\t\t\t";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if (($this->getAttribute($_topicrow_, "S_UNREAD_TOPIC", array()) &&  !$_S_IS_BOT_)) {
                echo "<a href=\"";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "U_NEWEST_POST", array());
                echo "\">";
                if (isset($context["NEWEST_POST_IMG"])) { $_NEWEST_POST_IMG_ = $context["NEWEST_POST_IMG"]; } else { $_NEWEST_POST_IMG_ = null; }
                echo $_NEWEST_POST_IMG_;
                echo "</a> ";
            }
            echo "<a href=\"";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            echo $this->getAttribute($_topicrow_, "U_VIEW_TOPIC", array());
            echo "\" class=\"topictitle\">";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            echo $this->getAttribute($_topicrow_, "TOPIC_TITLE", array());
            echo "</a>
\t\t\t\t\t\t";
            // line 161
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if (($this->getAttribute($_topicrow_, "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($_topicrow_, "S_POSTS_UNAPPROVED", array()))) {
                echo "<a href=\"";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "U_MCP_QUEUE", array());
                echo "\">";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "UNAPPROVED_IMG", array());
                echo "</a> ";
            }
            // line 162
            echo "\t\t\t\t\t\t";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if ($this->getAttribute($_topicrow_, "S_TOPIC_DELETED", array())) {
                echo "<a href=\"";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "U_MCP_QUEUE", array());
                echo "\">";
                if (isset($context["DELETED_IMG"])) { $_DELETED_IMG_ = $context["DELETED_IMG"]; } else { $_DELETED_IMG_ = null; }
                echo $_DELETED_IMG_;
                echo "</a> ";
            }
            // line 163
            echo "\t\t\t\t\t\t";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if ($this->getAttribute($_topicrow_, "S_TOPIC_REPORTED", array())) {
                echo "<a href=\"";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "U_MCP_REPORT", array());
                echo "\">";
                if (isset($context["REPORTED_IMG"])) { $_REPORTED_IMG_ = $context["REPORTED_IMG"]; } else { $_REPORTED_IMG_ = null; }
                echo $_REPORTED_IMG_;
                echo "</a>";
            }
            echo "<br />

\t\t\t\t\t\t";
            // line 165
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if ($this->getAttribute($_topicrow_, "S_POST_STICKY", array())) {
                echo "<i class=\"topic-status sticky fa fa-thumb-tack\"></i>";
            }
            // line 166
            echo "
\t\t\t\t\t\t";
            // line 167
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if ( !$_S_IS_BOT_) {
                // line 168
                echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                // line 169
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo " ";
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo " ";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "LAST_POST_AUTHOR_FULL", array());
                echo " &laquo; <a href=\"";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "U_LAST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                echo "\">";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "LAST_POST_TIME", array());
                echo "</a>
\t\t\t\t\t\t\t";
                // line 170
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                if (isset($context["FORUM_ID"])) { $_FORUM_ID_ = $context["FORUM_ID"]; } else { $_FORUM_ID_ = null; }
                if (($this->getAttribute($_topicrow_, "S_POST_GLOBAL", array()) && ($_FORUM_ID_ != $this->getAttribute($_topicrow_, "FORUM_ID", array())))) {
                    echo "<br />";
                    echo $this->env->getExtension('phpbb')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("IN");
                    echo " <a href=\"";
                    if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                    echo $this->getAttribute($_topicrow_, "U_VIEW_FORUM", array());
                    echo "\">";
                    if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                    echo $this->getAttribute($_topicrow_, "FORUM_NAME", array());
                    echo "</a>";
                }
                // line 171
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 172
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                if ($this->getAttribute($_topicrow_, "REPLIES", array())) {
                    echo "<span class=\"responsive-show left-box\" style=\"display: none;\">";
                    echo $this->env->getExtension('phpbb')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                    echo $this->getAttribute($_topicrow_, "REPLIES", array());
                    echo "</strong></span>";
                }
                // line 173
                echo "\t\t\t\t\t\t";
            }
            // line 174
            echo "
\t\t\t\t\t\t";
            // line 175
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_topicrow_, "pagination", array()))) {
                // line 176
                echo "\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                // line 178
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_topicrow_, "pagination", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                    // line 179
                    echo "\t\t\t\t\t\t\t\t";
                    if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                    if ($this->getAttribute($_pagination_, "S_IS_PREV", array())) {
                        // line 180
                        echo "\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($_pagination_, "S_IS_CURRENT", array())) {
                        echo "<li class=\"active\"><span>";
                        if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                        echo $this->getAttribute($_pagination_, "PAGE_NUMBER", array());
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($_pagination_, "S_IS_ELLIPSIS", array())) {
                        // line 181
                        echo "<li class=\"ellipsis\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($_pagination_, "S_IS_NEXT", array())) {
                        // line 183
                        echo "\t\t\t\t\t\t\t\t";
                    } else {
                        echo "<li><a href=\"";
                        if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                        echo $this->getAttribute($_pagination_, "PAGE_URL", array());
                        echo "\">";
                        if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                        echo $this->getAttribute($_pagination_, "PAGE_NUMBER", array());
                        echo "</a></li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 185
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 189
            echo "
\t\t\t\t\t\t<div class=\"responsive-hide\">
\t\t\t\t\t\t\t";
            // line 191
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if ($this->getAttribute($_topicrow_, "S_HAS_POLL", array())) {
                if (isset($context["POLL_IMG"])) { $_POLL_IMG_ = $context["POLL_IMG"]; } else { $_POLL_IMG_ = null; }
                echo $_POLL_IMG_;
                echo " ";
            }
            // line 192
            echo "\t\t\t\t\t\t\t";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if ($this->getAttribute($_topicrow_, "ATTACH_ICON_IMG", array())) {
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "ATTACH_ICON_IMG", array());
                echo " ";
            }
            // line 193
            echo "\t\t\t\t\t\t\t";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " ";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            echo $this->getAttribute($_topicrow_, "TOPIC_AUTHOR_FULL", array());
            echo " &raquo; ";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            echo $this->getAttribute($_topicrow_, "FIRST_POST_TIME", array());
            echo "
\t\t\t\t\t\t\t";
            // line 194
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if (isset($context["FORUM_ID"])) { $_FORUM_ID_ = $context["FORUM_ID"]; } else { $_FORUM_ID_ = null; }
            if (($this->getAttribute($_topicrow_, "S_POST_GLOBAL", array()) && ($_FORUM_ID_ != $this->getAttribute($_topicrow_, "FORUM_ID", array())))) {
                echo " &raquo; ";
                echo $this->env->getExtension('phpbb')->lang("IN");
                echo " <a href=\"";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "U_VIEW_FORUM", array());
                echo "\">";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "FORUM_NAME", array());
                echo "</a>";
            }
            // line 195
            echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 197
            if (isset($context["topiclist_row_append"])) { $_topiclist_row_append_ = $context["topiclist_row_append"]; } else { $_topiclist_row_append_ = null; }
            // line 198
            echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"posts\">";
            // line 200
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            echo $this->getAttribute($_topicrow_, "REPLIES", array());
            echo " <dfn>";
            echo $this->env->getExtension('phpbb')->lang("REPLIES");
            echo "</dfn></dd>
\t\t\t\t<dd class=\"views\">";
            // line 201
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            echo $this->getAttribute($_topicrow_, "VIEWS", array());
            echo " <dfn>";
            echo $this->env->getExtension('phpbb')->lang("VIEWS");
            echo "</dfn></dd>
\t\t\t\t<dd class=\"lastpost\"><span><dfn>";
            // line 202
            echo $this->env->getExtension('phpbb')->lang("LAST_POST");
            echo " </dfn>";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " ";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            echo $this->getAttribute($_topicrow_, "LAST_POST_AUTHOR_FULL", array());
            echo "
\t\t\t\t\t";
            // line 203
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if ( !$_S_IS_BOT_) {
                echo "<a href=\"";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "U_LAST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                echo "\">";
                if (isset($context["LAST_POST_IMG"])) { $_LAST_POST_IMG_ = $context["LAST_POST_IMG"]; } else { $_LAST_POST_IMG_ = null; }
                echo $_LAST_POST_IMG_;
                echo "</a> ";
            }
            echo "<br />";
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            echo $this->getAttribute($_topicrow_, "LAST_POST_TIME", array());
            echo "</span>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
            // line 206
            if (isset($context["viewforum_body_topic_row_append"])) { $_viewforum_body_topic_row_append_ = $context["viewforum_body_topic_row_append"]; } else { $_viewforum_body_topic_row_append_ = null; }
            // line 207
            echo "\t\t</li>
\t\t";
            // line 208
            if (isset($context["viewforum_body_topic_row_after"])) { $_viewforum_body_topic_row_after_ = $context["viewforum_body_topic_row_after"]; } else { $_viewforum_body_topic_row_after_ = null; }
            // line 209
            echo "
\t";
            // line 210
            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
            if ($this->getAttribute($_topicrow_, "S_LAST_ROW", array())) {
                // line 211
                echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 215
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 217
            echo "\t";
            if (isset($context["S_IS_POSTABLE"])) { $_S_IS_POSTABLE_ = $context["S_IS_POSTABLE"]; } else { $_S_IS_POSTABLE_ = null; }
            if ($_S_IS_POSTABLE_) {
                // line 218
                echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
                // line 220
                echo $this->env->getExtension('phpbb')->lang("NO_TOPICS");
                echo "</strong>
\t\t</div>
\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "
";
        // line 226
        if (isset($context["S_SELECT_SORT_DAYS"])) { $_S_SELECT_SORT_DAYS_ = $context["S_SELECT_SORT_DAYS"]; } else { $_S_SELECT_SORT_DAYS_ = null; }
        if (isset($context["S_DISPLAY_ACTIVE"])) { $_S_DISPLAY_ACTIVE_ = $context["S_DISPLAY_ACTIVE"]; } else { $_S_DISPLAY_ACTIVE_ = null; }
        if (($_S_SELECT_SORT_DAYS_ &&  !$_S_DISPLAY_ACTIVE_)) {
            // line 227
            echo "\t<form method=\"post\" action=\"";
            if (isset($context["S_FORUM_ACTION"])) { $_S_FORUM_ACTION_ = $context["S_FORUM_ACTION"]; } else { $_S_FORUM_ACTION_ = null; }
            echo $_S_FORUM_ACTION_;
            echo "\">
\t\t<fieldset class=\"display-options\">
\t";
            // line 229
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if ( !$_S_IS_BOT_) {
                // line 230
                echo "\t\t\t<label>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_TOPICS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                if (isset($context["S_SELECT_SORT_DAYS"])) { $_S_SELECT_SORT_DAYS_ = $context["S_SELECT_SORT_DAYS"]; } else { $_S_SELECT_SORT_DAYS_ = null; }
                echo $_S_SELECT_SORT_DAYS_;
                echo "</label>
\t\t\t<label>";
                // line 231
                echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                echo " ";
                if (isset($context["S_SELECT_SORT_KEY"])) { $_S_SELECT_SORT_KEY_ = $context["S_SELECT_SORT_KEY"]; } else { $_S_SELECT_SORT_KEY_ = null; }
                echo $_S_SELECT_SORT_KEY_;
                echo "</label>
\t\t\t<label>";
                // line 232
                if (isset($context["S_SELECT_SORT_DIR"])) { $_S_SELECT_SORT_DIR_ = $context["S_SELECT_SORT_DIR"]; } else { $_S_SELECT_SORT_DIR_ = null; }
                echo $_S_SELECT_SORT_DIR_;
                echo "</label>
\t\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 233
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" class=\"button2\" />
\t";
            }
            // line 235
            echo "\t\t</fieldset>
\t</form>
\t<hr />
";
        }
        // line 239
        echo "
";
        // line 240
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (isset($context["S_DISPLAY_ACTIVE"])) { $_S_DISPLAY_ACTIVE_ = $context["S_DISPLAY_ACTIVE"]; } else { $_S_DISPLAY_ACTIVE_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_loops_, "topicrow", array())) &&  !$_S_DISPLAY_ACTIVE_)) {
            // line 241
            echo "\t<div class=\"action-bar bottom\">
\t\t";
            // line 242
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if (isset($context["S_DISPLAY_POST_INFO"])) { $_S_DISPLAY_POST_INFO_ = $context["S_DISPLAY_POST_INFO"]; } else { $_S_DISPLAY_POST_INFO_ = null; }
            if (( !$_S_IS_BOT_ && $_S_DISPLAY_POST_INFO_)) {
                // line 243
                echo "\t\t\t<div class=\"buttons\">
\t\t\t\t";
                // line 244
                if (isset($context["viewforum_buttons_bottom_before"])) { $_viewforum_buttons_bottom_before_ = $context["viewforum_buttons_bottom_before"]; } else { $_viewforum_buttons_bottom_before_ = null; }
                // line 245
                echo "
\t\t\t\t<a href=\"";
                // line 246
                if (isset($context["U_POST_NEW_TOPIC"])) { $_U_POST_NEW_TOPIC_ = $context["U_POST_NEW_TOPIC"]; } else { $_U_POST_NEW_TOPIC_ = null; }
                echo $_U_POST_NEW_TOPIC_;
                echo "\" class=\"button icon-button ";
                if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
                if ($_S_IS_LOCKED_) {
                    echo "locked-icon";
                } else {
                    echo "post-icon";
                }
                echo "\" title=\"";
                if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
                if ($_S_IS_LOCKED_) {
                    echo $this->env->getExtension('phpbb')->lang("FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t\t\t";
                // line 247
                if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
                if ($_S_IS_LOCKED_) {
                    echo $this->env->getExtension('phpbb')->lang("BUTTON_FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("BUTTON_NEW_TOPIC");
                }
                // line 248
                echo "\t\t\t\t</a>

\t\t\t\t";
                // line 250
                if (isset($context["viewforum_buttons_bottom_after"])) { $_viewforum_buttons_bottom_after_ = $context["viewforum_buttons_bottom_after"]; } else { $_viewforum_buttons_bottom_after_ = null; }
                // line 251
                echo "\t\t\t</div>
\t\t";
            }
            // line 253
            echo "
\t\t<div class=\"pagination\">
\t\t\t";
            // line 255
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if (isset($context["U_MARK_TOPICS"])) { $_U_MARK_TOPICS_ = $context["U_MARK_TOPICS"]; } else { $_U_MARK_TOPICS_ = null; }
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if ((( !$_S_IS_BOT_ && $_U_MARK_TOPICS_) && twig_length_filter($this->env, $this->getAttribute($_loops_, "topicrow", array())))) {
                echo "<a href=\"";
                if (isset($context["U_MARK_TOPICS"])) { $_U_MARK_TOPICS_ = $context["U_MARK_TOPICS"]; } else { $_U_MARK_TOPICS_ = null; }
                echo $_U_MARK_TOPICS_;
                echo "\" data-ajax=\"mark_topics_read\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_TOPICS_READ");
                echo "</a> &bull; ";
            }
            // line 256
            echo "\t\t\t";
            if (isset($context["TOTAL_TOPICS"])) { $_TOTAL_TOPICS_ = $context["TOTAL_TOPICS"]; } else { $_TOTAL_TOPICS_ = null; }
            echo $_TOTAL_TOPICS_;
            echo "
\t\t\t";
            // line 257
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
                // line 258
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 258)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 259
                echo "\t\t\t";
            } else {
                // line 260
                echo "\t\t\t\t &bull; ";
                if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                echo $_PAGE_NUMBER_;
                echo "
\t\t\t";
            }
            // line 262
            echo "\t\t</div>
\t</div>
";
        }
        // line 265
        echo "
";
        // line 266
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewforum_body.html", 266)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 267
        echo "
";
        // line 268
        if (isset($context["S_DISPLAY_ONLINE_LIST"])) { $_S_DISPLAY_ONLINE_LIST_ = $context["S_DISPLAY_ONLINE_LIST"]; } else { $_S_DISPLAY_ONLINE_LIST_ = null; }
        if ($_S_DISPLAY_ONLINE_LIST_) {
            // line 269
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3>";
            // line 270
            if (isset($context["U_VIEWONLINE"])) { $_U_VIEWONLINE_ = $context["U_VIEWONLINE"]; } else { $_U_VIEWONLINE_ = null; }
            if ($_U_VIEWONLINE_) {
                echo "<a href=\"";
                if (isset($context["U_VIEWONLINE"])) { $_U_VIEWONLINE_ = $context["U_VIEWONLINE"]; } else { $_U_VIEWONLINE_ = null; }
                echo $_U_VIEWONLINE_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                echo "</a>";
            } else {
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
            }
            echo "</h3>
\t\t<p>";
            // line 271
            if (isset($context["LOGGED_IN_USER_LIST"])) { $_LOGGED_IN_USER_LIST_ = $context["LOGGED_IN_USER_LIST"]; } else { $_LOGGED_IN_USER_LIST_ = null; }
            echo $_LOGGED_IN_USER_LIST_;
            echo "</p>
\t</div>
";
        }
        // line 274
        echo "
";
        // line 275
        if (isset($context["S_DISPLAY_POST_INFO"])) { $_S_DISPLAY_POST_INFO_ = $context["S_DISPLAY_POST_INFO"]; } else { $_S_DISPLAY_POST_INFO_ = null; }
        if ($_S_DISPLAY_POST_INFO_) {
            // line 276
            echo "\t<div class=\"stat-block permissions\">
\t\t<h3>";
            // line 277
            echo $this->env->getExtension('phpbb')->lang("FORUM_PERMISSIONS");
            echo "</h3>
\t\t<p>";
            // line 278
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "rules", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                if (isset($context["rules"])) { $_rules_ = $context["rules"]; } else { $_rules_ = null; }
                echo $this->getAttribute($_rules_, "RULE", array());
                echo "<br />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
\t</div>
";
        }
        // line 281
        echo "
";
        // line 282
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewforum_body.html", 282)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewforum_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1158 => 282,  1155 => 281,  1139 => 278,  1135 => 277,  1132 => 276,  1129 => 275,  1126 => 274,  1119 => 271,  1105 => 270,  1102 => 269,  1099 => 268,  1096 => 267,  1084 => 266,  1081 => 265,  1076 => 262,  1069 => 260,  1066 => 259,  1053 => 258,  1050 => 257,  1044 => 256,  1032 => 255,  1028 => 253,  1024 => 251,  1022 => 250,  1018 => 248,  1011 => 247,  992 => 246,  989 => 245,  987 => 244,  984 => 243,  980 => 242,  977 => 241,  973 => 240,  970 => 239,  964 => 235,  959 => 233,  954 => 232,  947 => 231,  938 => 230,  935 => 229,  928 => 227,  924 => 226,  921 => 225,  910 => 220,  906 => 218,  902 => 217,  896 => 215,  890 => 211,  887 => 210,  884 => 209,  882 => 208,  879 => 207,  877 => 206,  857 => 203,  848 => 202,  841 => 201,  834 => 200,  830 => 198,  828 => 197,  824 => 195,  810 => 194,  799 => 193,  791 => 192,  784 => 191,  780 => 189,  775 => 186,  769 => 185,  757 => 183,  751 => 181,  742 => 180,  738 => 179,  733 => 178,  729 => 176,  726 => 175,  723 => 174,  720 => 173,  709 => 172,  706 => 171,  690 => 170,  673 => 169,  670 => 168,  667 => 167,  664 => 166,  659 => 165,  644 => 163,  632 => 162,  621 => 161,  600 => 160,  598 => 159,  595 => 158,  586 => 157,  570 => 156,  564 => 155,  562 => 154,  536 => 153,  534 => 152,  531 => 151,  522 => 145,  518 => 144,  514 => 143,  497 => 142,  485 => 137,  482 => 136,  479 => 135,  473 => 131,  470 => 130,  467 => 129,  461 => 128,  458 => 127,  454 => 125,  440 => 115,  435 => 113,  427 => 109,  420 => 108,  414 => 106,  407 => 103,  402 => 102,  382 => 98,  372 => 92,  369 => 91,  365 => 90,  358 => 86,  353 => 83,  350 => 82,  347 => 81,  341 => 77,  334 => 75,  331 => 74,  318 => 73,  315 => 72,  309 => 71,  297 => 70,  293 => 68,  284 => 63,  275 => 62,  269 => 61,  265 => 60,  259 => 58,  256 => 57,  253 => 56,  250 => 55,  246 => 53,  244 => 52,  240 => 50,  233 => 49,  214 => 48,  211 => 47,  209 => 46,  206 => 45,  202 => 44,  198 => 42,  192 => 41,  189 => 40,  175 => 38,  172 => 37,  169 => 36,  163 => 32,  157 => 30,  152 => 29,  143 => 27,  140 => 26,  130 => 23,  127 => 22,  124 => 21,  120 => 19,  103 => 18,  95 => 17,  91 => 15,  86 => 14,  84 => 13,  71 => 12,  69 => 11,  57 => 10,  51 => 8,  42 => 6,  36 => 5,  27 => 3,  22 => 2,  19 => 1,);
    }
}
