<?php

/* viewtopic_body.html */
class __TwigTemplate_d2eb6d0481a007343254a5ee51e3278f7e7f36e5b0475d364135cd179975a6e5 extends Twig_Template
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
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if (isset($context["U_VIEW_UNREAD_POST"])) { $_U_VIEW_UNREAD_POST_ = $context["U_VIEW_UNREAD_POST"]; } else { $_U_VIEW_UNREAD_POST_ = null; }
        if (isset($context["U_WATCH_TOPIC"])) { $_U_WATCH_TOPIC_ = $context["U_WATCH_TOPIC"]; } else { $_U_WATCH_TOPIC_ = null; }
        if (isset($context["U_BOOKMARK_TOPIC"])) { $_U_BOOKMARK_TOPIC_ = $context["U_BOOKMARK_TOPIC"]; } else { $_U_BOOKMARK_TOPIC_ = null; }
        if (isset($context["U_BUMP_TOPIC"])) { $_U_BUMP_TOPIC_ = $context["U_BUMP_TOPIC"]; } else { $_U_BUMP_TOPIC_ = null; }
        if (isset($context["U_EMAIL_TOPIC"])) { $_U_EMAIL_TOPIC_ = $context["U_EMAIL_TOPIC"]; } else { $_U_EMAIL_TOPIC_ = null; }
        if (isset($context["U_PRINT_TOPIC"])) { $_U_PRINT_TOPIC_ = $context["U_PRINT_TOPIC"]; } else { $_U_PRINT_TOPIC_ = null; }
        if (isset($context["S_DISPLAY_TOPIC_TOOLS"])) { $_S_DISPLAY_TOPIC_TOOLS_ = $context["S_DISPLAY_TOPIC_TOOLS"]; } else { $_S_DISPLAY_TOPIC_TOOLS_ = null; }
        if (( !$_S_IS_BOT_ && (((((($_U_VIEW_UNREAD_POST_ || $_U_WATCH_TOPIC_) || $_U_BOOKMARK_TOPIC_) || $_U_BUMP_TOPIC_) || $_U_EMAIL_TOPIC_) || $_U_PRINT_TOPIC_) || $_S_DISPLAY_TOPIC_TOOLS_))) {
            // line 3
            echo "\t";
            if (isset($context["U_VIEW_UNREAD_POST"])) { $_U_VIEW_UNREAD_POST_ = $context["U_VIEW_UNREAD_POST"]; } else { $_U_VIEW_UNREAD_POST_ = null; }
            if ($_U_VIEW_UNREAD_POST_) {
                // line 4
                echo "\t\t<li class=\"small-icon icon-mark\"><a href=\"";
                if (isset($context["U_VIEW_UNREAD_POST"])) { $_U_VIEW_UNREAD_POST_ = $context["U_VIEW_UNREAD_POST"]; } else { $_U_VIEW_UNREAD_POST_ = null; }
                echo $_U_VIEW_UNREAD_POST_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_UNREAD_POST");
                echo "</a></li>
\t";
            }
            // line 6
            echo "\t";
            if (isset($context["U_WATCH_TOPIC"])) { $_U_WATCH_TOPIC_ = $context["U_WATCH_TOPIC"]; } else { $_U_WATCH_TOPIC_ = null; }
            if ($_U_WATCH_TOPIC_) {
                // line 7
                echo "\t\t<li class=\"small-icon icon-";
                if (isset($context["S_WATCHING_TOPIC"])) { $_S_WATCHING_TOPIC_ = $context["S_WATCHING_TOPIC"]; } else { $_S_WATCHING_TOPIC_ = null; }
                if ($_S_WATCHING_TOPIC_) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\">
\t\t\t<a href=\"";
                // line 8
                if (isset($context["U_WATCH_TOPIC"])) { $_U_WATCH_TOPIC_ = $context["U_WATCH_TOPIC"]; } else { $_U_WATCH_TOPIC_ = null; }
                echo $_U_WATCH_TOPIC_;
                echo "\" class=\"watch-topic-link\" title=\"";
                if (isset($context["S_WATCH_TOPIC_TITLE"])) { $_S_WATCH_TOPIC_TITLE_ = $context["S_WATCH_TOPIC_TITLE"]; } else { $_S_WATCH_TOPIC_TITLE_ = null; }
                echo $_S_WATCH_TOPIC_TITLE_;
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
                if (isset($context["S_WATCHING_TOPIC"])) { $_S_WATCHING_TOPIC_ = $context["S_WATCHING_TOPIC"]; } else { $_S_WATCHING_TOPIC_ = null; }
                if ( !$_S_WATCHING_TOPIC_) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-text=\"";
                if (isset($context["S_WATCH_TOPIC_TOGGLE"])) { $_S_WATCH_TOPIC_TOGGLE_ = $context["S_WATCH_TOPIC_TOGGLE"]; } else { $_S_WATCH_TOPIC_TOGGLE_ = null; }
                echo $_S_WATCH_TOPIC_TOGGLE_;
                echo "\" data-toggle-url=\"";
                if (isset($context["U_WATCH_TOPIC_TOGGLE"])) { $_U_WATCH_TOPIC_TOGGLE_ = $context["U_WATCH_TOPIC_TOGGLE"]; } else { $_U_WATCH_TOPIC_TOGGLE_ = null; }
                echo $_U_WATCH_TOPIC_TOGGLE_;
                echo "\" data-update-all=\".watch-topic-link\">";
                if (isset($context["S_WATCH_TOPIC_TITLE"])) { $_S_WATCH_TOPIC_TITLE_ = $context["S_WATCH_TOPIC_TITLE"]; } else { $_S_WATCH_TOPIC_TITLE_ = null; }
                echo $_S_WATCH_TOPIC_TITLE_;
                echo "</a>
\t\t</li>
\t";
            }
            // line 11
            if (isset($context["NAVLINKS_SHOW_DEFAULT"])) { $_NAVLINKS_SHOW_DEFAULT_ = $context["NAVLINKS_SHOW_DEFAULT"]; } else { $_NAVLINKS_SHOW_DEFAULT_ = null; }
            $value = 1;
            $context['definition']->set('NAVLINKS_SHOW_DEFAULT', $value);
        }
        $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
        $context['definition']->set('NAVLINKS', $value);
        // line 14
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "viewtopic_body.html", 14)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 15
        echo "
<h2 class=\"topic-title\">";
        // line 16
        if (isset($context["viewtopic_topic_title_prepend"])) { $_viewtopic_topic_title_prepend_ = $context["viewtopic_topic_title_prepend"]; } else { $_viewtopic_topic_title_prepend_ = null; }
        echo "<a href=\"";
        if (isset($context["U_VIEW_TOPIC"])) { $_U_VIEW_TOPIC_ = $context["U_VIEW_TOPIC"]; } else { $_U_VIEW_TOPIC_ = null; }
        echo $_U_VIEW_TOPIC_;
        echo "\">";
        if (isset($context["TOPIC_TITLE"])) { $_TOPIC_TITLE_ = $context["TOPIC_TITLE"]; } else { $_TOPIC_TITLE_ = null; }
        echo $_TOPIC_TITLE_;
        echo "</a>";
        if (isset($context["viewtopic_topic_title_append"])) { $_viewtopic_topic_title_append_ = $context["viewtopic_topic_title_append"]; } else { $_viewtopic_topic_title_append_ = null; }
        echo "</h2>
";
        // line 17
        if (isset($context["viewtopic_topic_title_after"])) { $_viewtopic_topic_title_after_ = $context["viewtopic_topic_title_after"]; } else { $_viewtopic_topic_title_after_ = null; }
        // line 18
        echo "<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the topic body -->
";
        // line 19
        if (isset($context["FORUM_DESC"])) { $_FORUM_DESC_ = $context["FORUM_DESC"]; } else { $_FORUM_DESC_ = null; }
        if ($_FORUM_DESC_) {
            echo "<div style=\"display: none !important;\">";
            if (isset($context["FORUM_DESC"])) { $_FORUM_DESC_ = $context["FORUM_DESC"]; } else { $_FORUM_DESC_ = null; }
            echo $_FORUM_DESC_;
            echo "<br /></div>";
        }
        // line 20
        echo "
";
        // line 21
        if (isset($context["MODERATORS"])) { $_MODERATORS_ = $context["MODERATORS"]; } else { $_MODERATORS_ = null; }
        if ($_MODERATORS_) {
            // line 22
            echo "<p>
\t<strong>";
            // line 23
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
            echo "
</p>
";
        }
        // line 26
        echo "
";
        // line 27
        if (isset($context["S_FORUM_RULES"])) { $_S_FORUM_RULES_ = $context["S_FORUM_RULES"]; } else { $_S_FORUM_RULES_ = null; }
        if ($_S_FORUM_RULES_) {
            // line 28
            echo "\t<div class=\"rules";
            if (isset($context["U_FORUM_RULES"])) { $_U_FORUM_RULES_ = $context["U_FORUM_RULES"]; } else { $_U_FORUM_RULES_ = null; }
            if ($_U_FORUM_RULES_) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 31
            if (isset($context["U_FORUM_RULES"])) { $_U_FORUM_RULES_ = $context["U_FORUM_RULES"]; } else { $_U_FORUM_RULES_ = null; }
            if ($_U_FORUM_RULES_) {
                // line 32
                echo "\t\t\t<a href=\"";
                if (isset($context["U_FORUM_RULES"])) { $_U_FORUM_RULES_ = $context["U_FORUM_RULES"]; } else { $_U_FORUM_RULES_ = null; }
                echo $_U_FORUM_RULES_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 34
                echo "\t\t\t<strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 35
                if (isset($context["FORUM_RULES"])) { $_FORUM_RULES_ = $context["FORUM_RULES"]; } else { $_FORUM_RULES_ = null; }
                echo $_FORUM_RULES_;
                echo "
\t\t";
            }
            // line 37
            echo "
\t\t</div>
\t</div>
";
        }
        // line 41
        echo "
<div class=\"action-bar top\">

\t<div class=\"buttons\">
\t\t";
        // line 45
        if (isset($context["viewtopic_buttons_top_before"])) { $_viewtopic_buttons_top_before_ = $context["viewtopic_buttons_top_before"]; } else { $_viewtopic_buttons_top_before_ = null; }
        // line 46
        echo "
\t";
        // line 47
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if (isset($context["S_DISPLAY_REPLY_INFO"])) { $_S_DISPLAY_REPLY_INFO_ = $context["S_DISPLAY_REPLY_INFO"]; } else { $_S_DISPLAY_REPLY_INFO_ = null; }
        if (( !$_S_IS_BOT_ && $_S_DISPLAY_REPLY_INFO_)) {
            // line 48
            echo "\t\t<a href=\"";
            if (isset($context["U_POST_REPLY_TOPIC"])) { $_U_POST_REPLY_TOPIC_ = $context["U_POST_REPLY_TOPIC"]; } else { $_U_POST_REPLY_TOPIC_ = null; }
            echo $_U_POST_REPLY_TOPIC_;
            echo "\" class=\"button icon-button ";
            if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
            if ($_S_IS_LOCKED_) {
                echo "locked-icon";
            } else {
                echo "reply-icon";
            }
            echo "\" title=\"";
            if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
            if ($_S_IS_LOCKED_) {
                echo $this->env->getExtension('phpbb')->lang("TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb')->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 49
            if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
            if ($_S_IS_LOCKED_) {
                echo $this->env->getExtension('phpbb')->lang("BUTTON_TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb')->lang("BUTTON_POST_REPLY");
            }
            // line 50
            echo "\t\t</a>
\t";
        }
        // line 52
        echo "
\t\t";
        // line 53
        if (isset($context["viewtopic_buttons_top_after"])) { $_viewtopic_buttons_top_after_ = $context["viewtopic_buttons_top_after"]; } else { $_viewtopic_buttons_top_after_ = null; }
        // line 54
        echo "\t</div>

\t";
        // line 56
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 56)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 57
        echo "\t";
        if (isset($context["viewtopic_dropdown_top_custom"])) { $_viewtopic_dropdown_top_custom_ = $context["viewtopic_dropdown_top_custom"]; } else { $_viewtopic_dropdown_top_custom_ = null; }
        // line 58
        echo "
\t";
        // line 59
        if (isset($context["S_DISPLAY_SEARCHBOX"])) { $_S_DISPLAY_SEARCHBOX_ = $context["S_DISPLAY_SEARCHBOX"]; } else { $_S_DISPLAY_SEARCHBOX_ = null; }
        if ($_S_DISPLAY_SEARCHBOX_) {
            // line 60
            echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"topic-search\" action=\"";
            // line 61
            if (isset($context["S_SEARCHBOX_ACTION"])) { $_S_SEARCHBOX_ACTION_ = $context["S_SEARCHBOX_ACTION"]; } else { $_S_SEARCHBOX_ACTION_ = null; }
            echo $_S_SEARCHBOX_ACTION_;
            echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\"  type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
            // line 63
            echo $this->env->getExtension('phpbb')->lang("SEARCH_TOPIC");
            echo "\" />
\t\t\t\t<button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
            // line 64
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</button>
\t\t\t\t<a href=\"";
            // line 65
            if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
            echo $_U_SEARCH_;
            echo "\" class=\"button icon-button search-adv-icon\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "</a>
\t\t\t\t";
            // line 66
            if (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"])) { $_S_SEARCH_LOCAL_HIDDEN_FIELDS_ = $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]; } else { $_S_SEARCH_LOCAL_HIDDEN_FIELDS_ = null; }
            echo $_S_SEARCH_LOCAL_HIDDEN_FIELDS_;
            echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
        }
        // line 71
        echo "
\t";
        // line 72
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (isset($context["TOTAL_POSTS"])) { $_TOTAL_POSTS_ = $context["TOTAL_POSTS"]; } else { $_TOTAL_POSTS_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array())) || $_TOTAL_POSTS_)) {
            // line 73
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 74
            if (isset($context["U_VIEW_UNREAD_POST"])) { $_U_VIEW_UNREAD_POST_ = $context["U_VIEW_UNREAD_POST"]; } else { $_U_VIEW_UNREAD_POST_ = null; }
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if (($_U_VIEW_UNREAD_POST_ &&  !$_S_IS_BOT_)) {
                echo "<a href=\"";
                if (isset($context["U_VIEW_UNREAD_POST"])) { $_U_VIEW_UNREAD_POST_ = $context["U_VIEW_UNREAD_POST"]; } else { $_U_VIEW_UNREAD_POST_ = null; }
                echo $_U_VIEW_UNREAD_POST_;
                echo "\" class=\"mark\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_UNREAD_POST");
                echo "</a> &bull; ";
            }
            if (isset($context["TOTAL_POSTS"])) { $_TOTAL_POSTS_ = $context["TOTAL_POSTS"]; } else { $_TOTAL_POSTS_ = null; }
            echo $_TOTAL_POSTS_;
            echo "
\t\t\t";
            // line 75
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
                // line 76
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 76)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 77
                echo "\t\t\t";
            } else {
                // line 78
                echo "\t\t\t\t&bull; ";
                if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                echo $_PAGE_NUMBER_;
                echo "
\t\t\t";
            }
            // line 80
            echo "\t\t</div>
\t";
        }
        // line 82
        echo "\t";
        if (isset($context["viewtopic_body_pagination_top_after"])) { $_viewtopic_body_pagination_top_after_ = $context["viewtopic_body_pagination_top_after"]; } else { $_viewtopic_body_pagination_top_after_ = null; }
        // line 83
        echo "</div>

";
        // line 85
        if (isset($context["viewtopic_body_poll_before"])) { $_viewtopic_body_poll_before_ = $context["viewtopic_body_poll_before"]; } else { $_viewtopic_body_poll_before_ = null; }
        // line 86
        echo "
";
        // line 87
        if (isset($context["S_HAS_POLL"])) { $_S_HAS_POLL_ = $context["S_HAS_POLL"]; } else { $_S_HAS_POLL_ = null; }
        if ($_S_HAS_POLL_) {
            // line 88
            echo "\t<form method=\"post\" action=\"";
            if (isset($context["S_POLL_ACTION"])) { $_S_POLL_ACTION_ = $context["S_POLL_ACTION"]; } else { $_S_POLL_ACTION_ = null; }
            echo $_S_POLL_ACTION_;
            echo "\" data-ajax=\"vote_poll\" class=\"topic_poll\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"content\">
\t\t\t<h2 class=\"poll-title\">";
            // line 94
            if (isset($context["viewtopic_body_poll_question_prepend"])) { $_viewtopic_body_poll_question_prepend_ = $context["viewtopic_body_poll_question_prepend"]; } else { $_viewtopic_body_poll_question_prepend_ = null; }
            if (isset($context["POLL_QUESTION"])) { $_POLL_QUESTION_ = $context["POLL_QUESTION"]; } else { $_POLL_QUESTION_ = null; }
            echo $_POLL_QUESTION_;
            if (isset($context["viewtopic_body_poll_question_append"])) { $_viewtopic_body_poll_question_append_ = $context["viewtopic_body_poll_question_append"]; } else { $_viewtopic_body_poll_question_append_ = null; }
            echo "</h2>
\t\t\t<p class=\"author\">";
            // line 95
            echo $this->env->getExtension('phpbb')->lang("POLL_LENGTH");
            if (isset($context["S_CAN_VOTE"])) { $_S_CAN_VOTE_ = $context["S_CAN_VOTE"]; } else { $_S_CAN_VOTE_ = null; }
            if (isset($context["L_POLL_LENGTH"])) { $_L_POLL_LENGTH_ = $context["L_POLL_LENGTH"]; } else { $_L_POLL_LENGTH_ = null; }
            if (($_S_CAN_VOTE_ && $_L_POLL_LENGTH_)) {
                echo "<br />";
            }
            if (isset($context["S_CAN_VOTE"])) { $_S_CAN_VOTE_ = $context["S_CAN_VOTE"]; } else { $_S_CAN_VOTE_ = null; }
            if ($_S_CAN_VOTE_) {
                echo "<span class=\"poll_max_votes\">";
                echo $this->env->getExtension('phpbb')->lang("MAX_VOTES");
                echo "</span>";
            }
            echo "</p>

\t\t\t<fieldset class=\"polls\">
\t\t\t";
            // line 98
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "poll_option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 99
                echo "\t\t\t\t";
                if (isset($context["viewtopic_body_poll_option_before"])) { $_viewtopic_body_poll_option_before_ = $context["viewtopic_body_poll_option_before"]; } else { $_viewtopic_body_poll_option_before_ = null; }
                // line 100
                echo "\t\t\t\t<dl class=\"";
                if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                if ($this->getAttribute($_poll_option_, "POLL_OPTION_VOTED", array())) {
                    echo "voted";
                }
                if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                if ($this->getAttribute($_poll_option_, "POLL_OPTION_MOST_VOTES", array())) {
                    echo " most-votes";
                }
                echo "\"";
                if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                if ($this->getAttribute($_poll_option_, "POLL_OPTION_VOTED", array())) {
                    echo " title=\"";
                    echo $this->env->getExtension('phpbb')->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo " data-alt-text=\"";
                echo $this->env->getExtension('phpbb')->lang("POLL_VOTED_OPTION");
                echo "\" data-poll-option-id=\"";
                if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                echo $this->getAttribute($_poll_option_, "POLL_OPTION_ID", array());
                echo "\">
\t\t\t\t\t<dt>";
                // line 101
                if (isset($context["S_CAN_VOTE"])) { $_S_CAN_VOTE_ = $context["S_CAN_VOTE"]; } else { $_S_CAN_VOTE_ = null; }
                if ($_S_CAN_VOTE_) {
                    echo "<label for=\"vote_";
                    if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                    echo $this->getAttribute($_poll_option_, "POLL_OPTION_ID", array());
                    echo "\">";
                    if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                    echo $this->getAttribute($_poll_option_, "POLL_OPTION_CAPTION", array());
                    echo "</label>";
                } else {
                    if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                    echo $this->getAttribute($_poll_option_, "POLL_OPTION_CAPTION", array());
                }
                echo "</dt>
\t\t\t\t\t";
                // line 102
                if (isset($context["S_CAN_VOTE"])) { $_S_CAN_VOTE_ = $context["S_CAN_VOTE"]; } else { $_S_CAN_VOTE_ = null; }
                if ($_S_CAN_VOTE_) {
                    echo "<dd style=\"width: auto;\" class=\"poll_option_select\">";
                    if (isset($context["S_IS_MULTI_CHOICE"])) { $_S_IS_MULTI_CHOICE_ = $context["S_IS_MULTI_CHOICE"]; } else { $_S_IS_MULTI_CHOICE_ = null; }
                    if ($_S_IS_MULTI_CHOICE_) {
                        echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                        echo $this->getAttribute($_poll_option_, "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                        echo $this->getAttribute($_poll_option_, "POLL_OPTION_ID", array());
                        echo "\"";
                        if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                        if ($this->getAttribute($_poll_option_, "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    } else {
                        echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                        echo $this->getAttribute($_poll_option_, "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                        echo $this->getAttribute($_poll_option_, "POLL_OPTION_ID", array());
                        echo "\"";
                        if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                        if ($this->getAttribute($_poll_option_, "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    }
                    echo "</dd>";
                }
                // line 103
                echo "\t\t\t\t\t<dd class=\"resultbar";
                if (isset($context["S_DISPLAY_RESULTS"])) { $_S_DISPLAY_RESULTS_ = $context["S_DISPLAY_RESULTS"]; } else { $_S_DISPLAY_RESULTS_ = null; }
                if ( !$_S_DISPLAY_RESULTS_) {
                    echo " hidden";
                }
                echo "\"><div class=\"";
                if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                if (($this->getAttribute($_poll_option_, "POLL_OPTION_PCT", array()) < 20)) {
                    echo "pollbar1";
                } elseif (($this->getAttribute($_poll_option_, "POLL_OPTION_PCT", array()) < 40)) {
                    echo "pollbar2";
                } elseif (($this->getAttribute($_poll_option_, "POLL_OPTION_PCT", array()) < 60)) {
                    echo "pollbar3";
                } elseif (($this->getAttribute($_poll_option_, "POLL_OPTION_PCT", array()) < 80)) {
                    echo "pollbar4";
                } else {
                    echo "pollbar5";
                }
                echo "\" style=\"width:";
                if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                echo $this->getAttribute($_poll_option_, "POLL_OPTION_PERCENT_REL", array());
                echo ";\">";
                if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                echo $this->getAttribute($_poll_option_, "POLL_OPTION_RESULT", array());
                echo "</div></dd>
\t\t\t\t\t<dd class=\"poll_option_percent";
                // line 104
                if (isset($context["S_DISPLAY_RESULTS"])) { $_S_DISPLAY_RESULTS_ = $context["S_DISPLAY_RESULTS"]; } else { $_S_DISPLAY_RESULTS_ = null; }
                if ( !$_S_DISPLAY_RESULTS_) {
                    echo " hidden";
                }
                echo "\">";
                if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                if (($this->getAttribute($_poll_option_, "POLL_OPTION_RESULT", array()) == 0)) {
                    echo $this->env->getExtension('phpbb')->lang("NO_VOTES");
                } else {
                    if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                    echo $this->getAttribute($_poll_option_, "POLL_OPTION_PERCENT", array());
                }
                echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 106
                if (isset($context["viewtopic_body_poll_option_after"])) { $_viewtopic_body_poll_option_after_ = $context["viewtopic_body_poll_option_after"]; } else { $_viewtopic_body_poll_option_after_ = null; }
                // line 107
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "
\t\t\t\t<dl class=\"poll_total_votes";
            // line 109
            if (isset($context["S_DISPLAY_RESULTS"])) { $_S_DISPLAY_RESULTS_ = $context["S_DISPLAY_RESULTS"]; } else { $_S_DISPLAY_RESULTS_ = null; }
            if ( !$_S_DISPLAY_RESULTS_) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\">";
            // line 111
            echo $this->env->getExtension('phpbb')->lang("TOTAL_VOTES");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <span class=\"poll_total_vote_cnt\">";
            if (isset($context["TOTAL_VOTES"])) { $_TOTAL_VOTES_ = $context["TOTAL_VOTES"]; } else { $_TOTAL_VOTES_ = null; }
            echo $_TOTAL_VOTES_;
            echo "</span></dd>
\t\t\t\t</dl>

\t\t\t";
            // line 114
            if (isset($context["S_CAN_VOTE"])) { $_S_CAN_VOTE_ = $context["S_CAN_VOTE"]; } else { $_S_CAN_VOTE_ = null; }
            if ($_S_CAN_VOTE_) {
                // line 115
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_vote\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><input type=\"submit\" name=\"update\" value=\"";
                // line 117
                echo $this->env->getExtension('phpbb')->lang("SUBMIT_VOTE");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 120
            echo "
\t\t\t";
            // line 121
            if (isset($context["S_DISPLAY_RESULTS"])) { $_S_DISPLAY_RESULTS_ = $context["S_DISPLAY_RESULTS"]; } else { $_S_DISPLAY_RESULTS_ = null; }
            if ( !$_S_DISPLAY_RESULTS_) {
                // line 122
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_view_results\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><a href=\"";
                // line 124
                if (isset($context["U_VIEW_RESULTS"])) { $_U_VIEW_RESULTS_ = $context["U_VIEW_RESULTS"]; } else { $_U_VIEW_RESULTS_ = null; }
                echo $_U_VIEW_RESULTS_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_RESULTS");
                echo "</a></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 127
            echo "\t\t\t</fieldset>
\t\t\t<div class=\"vote-submitted hidden\">";
            // line 128
            echo $this->env->getExtension('phpbb')->lang("VOTE_SUBMITTED");
            echo "</div>
\t\t</div>

\t\t</div>
\t\t";
            // line 132
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t\t";
            // line 133
            if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
            echo $_S_HIDDEN_FIELDS_;
            echo "
\t</div>

\t</form>
";
        }
        // line 138
        echo "
";
        // line 139
        if (isset($context["viewtopic_body_poll_after"])) { $_viewtopic_body_poll_after_ = $context["viewtopic_body_poll_after"]; } else { $_viewtopic_body_poll_after_ = null; }
        // line 140
        echo "
";
        // line 141
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "postrow", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 142
            echo "\t";
            if (isset($context["viewtopic_body_postrow_post_before"])) { $_viewtopic_body_postrow_post_before_ = $context["viewtopic_body_postrow_post_before"]; } else { $_viewtopic_body_postrow_post_before_ = null; }
            // line 143
            echo "\t";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_FIRST_UNREAD", array())) {
                // line 144
                echo "\t\t<a id=\"unread\" class=\"anchor\"";
                if (isset($context["S_UNREAD_VIEW"])) { $_S_UNREAD_VIEW_ = $context["S_UNREAD_VIEW"]; } else { $_S_UNREAD_VIEW_ = null; }
                if ($_S_UNREAD_VIEW_) {
                    echo " data-url=\"";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "U_MINI_POST", array());
                    echo "\"";
                }
                echo "></a>
\t";
            }
            // line 146
            echo "\t<div id=\"p";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            echo $this->getAttribute($_postrow_, "POST_ID", array());
            echo "\" class=\"post has-profile ";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if (($this->getAttribute($_postrow_, "S_ROW_COUNT", array()) % 2 == 1)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_UNREAD_POST", array())) {
                echo " unreadpost";
            }
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_POST_REPORTED", array())) {
                echo " reported";
            }
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_POST_DELETED", array())) {
                echo " deleted";
            }
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if (($this->getAttribute($_postrow_, "S_ONLINE", array()) &&  !$this->getAttribute($_postrow_, "S_POST_HIDDEN", array()))) {
                echo " online";
            }
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "POSTER_WARNINGS", array())) {
                echo " warned";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t<dl class=\"postprofile\" id=\"profile";
            // line 149
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            echo $this->getAttribute($_postrow_, "POST_ID", array());
            echo "\"";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_POST_HIDDEN", array())) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t\t<dt class=\"";
            // line 150
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if (($this->getAttribute($_postrow_, "RANK_TITLE", array()) || $this->getAttribute($_postrow_, "RANK_IMG", array()))) {
                echo "has-profile-rank";
            } else {
                echo "no-profile-rank";
            }
            echo " ";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "POSTER_AVATAR", array())) {
                echo "has-avatar";
            } else {
                echo "no-avatar";
            }
            echo "\">
\t\t\t\t<div class=\"avatar-container\">
\t\t\t\t\t";
            // line 152
            if (isset($context["viewtopic_body_avatar_before"])) { $_viewtopic_body_avatar_before_ = $context["viewtopic_body_avatar_before"]; } else { $_viewtopic_body_avatar_before_ = null; }
            // line 153
            echo "\t\t\t\t\t";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "POSTER_AVATAR", array())) {
                // line 154
                echo "\t\t\t\t\t\t";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                if ($this->getAttribute($_postrow_, "U_POST_AUTHOR", array())) {
                    echo "<a href=\"";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "U_POST_AUTHOR", array());
                    echo "\" class=\"avatar\">";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "POSTER_AVATAR", array());
                    echo "</a>";
                } else {
                    echo "<span class=\"avatar\">";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "POSTER_AVATAR", array());
                    echo "</span>";
                }
                // line 155
                echo "\t\t\t\t\t";
            }
            // line 156
            echo "\t\t\t\t\t";
            if (isset($context["viewtopic_body_avatar_after"])) { $_viewtopic_body_avatar_after_ = $context["viewtopic_body_avatar_after"]; } else { $_viewtopic_body_avatar_after_ = null; }
            // line 157
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 158
            if (isset($context["viewtopic_body_post_author_before"])) { $_viewtopic_body_post_author_before_ = $context["viewtopic_body_post_author_before"]; } else { $_viewtopic_body_post_author_before_ = null; }
            // line 159
            echo "\t\t\t\t";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ( !$this->getAttribute($_postrow_, "U_POST_AUTHOR", array())) {
                echo "<strong>";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "POST_AUTHOR_FULL", array());
                echo "</strong>";
            } else {
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "POST_AUTHOR_FULL", array());
            }
            // line 160
            echo "\t\t\t\t";
            if (isset($context["viewtopic_body_post_author_after"])) { $_viewtopic_body_post_author_after_ = $context["viewtopic_body_post_author_after"]; } else { $_viewtopic_body_post_author_after_ = null; }
            // line 161
            echo "\t\t\t</dt>

\t\t\t";
            // line 163
            if (isset($context["viewtopic_body_postrow_rank_before"])) { $_viewtopic_body_postrow_rank_before_ = $context["viewtopic_body_postrow_rank_before"]; } else { $_viewtopic_body_postrow_rank_before_ = null; }
            // line 164
            echo "\t\t\t";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if (($this->getAttribute($_postrow_, "RANK_TITLE", array()) || $this->getAttribute($_postrow_, "RANK_IMG", array()))) {
                echo "<dd class=\"profile-rank\">";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "RANK_TITLE", array());
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                if (($this->getAttribute($_postrow_, "RANK_TITLE", array()) && $this->getAttribute($_postrow_, "RANK_IMG", array()))) {
                    echo "<br />";
                }
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "RANK_IMG", array());
                echo "</dd>";
            }
            // line 165
            echo "\t\t\t";
            if (isset($context["viewtopic_body_postrow_rank_after"])) { $_viewtopic_body_postrow_rank_after_ = $context["viewtopic_body_postrow_rank_after"]; } else { $_viewtopic_body_postrow_rank_after_ = null; }
            // line 166
            echo "
\t\t";
            // line 167
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if (($this->getAttribute($_postrow_, "POSTER_POSTS", array()) != "")) {
                echo "<dd class=\"profile-posts\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                if (($this->getAttribute($_postrow_, "U_SEARCH", array()) !== "")) {
                    echo "<a href=\"";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "U_SEARCH", array());
                    echo "\">";
                }
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "POSTER_POSTS", array());
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                if (($this->getAttribute($_postrow_, "U_SEARCH", array()) !== "")) {
                    echo "</a>";
                }
                echo "</dd>";
            }
            // line 168
            echo "\t\t";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "POSTER_JOINED", array())) {
                echo "<dd class=\"profile-joined\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("JOINED");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "POSTER_JOINED", array());
                echo "</dd>";
            }
            // line 169
            echo "\t\t";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "POSTER_WARNINGS", array())) {
                echo "<dd class=\"profile-warnings\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("WARNINGS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "POSTER_WARNINGS", array());
                echo "</dd>";
            }
            // line 170
            echo "
\t\t";
            // line 171
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_PROFILE_FIELD1", array())) {
                // line 172
                echo "\t\t\t<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dd><strong>";
                // line 173
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "PROFILE_FIELD1_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "PROFILE_FIELD1_VALUE", array());
                echo "</dd>
\t\t";
            }
            // line 175
            echo "
\t\t";
            // line 176
            if (isset($context["viewtopic_body_postrow_custom_fields_before"])) { $_viewtopic_body_postrow_custom_fields_before_ = $context["viewtopic_body_postrow_custom_fields_before"]; } else { $_viewtopic_body_postrow_custom_fields_before_ = null; }
            // line 177
            echo "\t\t";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_postrow_, "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 178
                echo "\t\t\t";
                if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                if ( !$this->getAttribute($_custom_fields_, "S_PROFILE_CONTACT", array())) {
                    // line 179
                    echo "\t\t\t\t<dd class=\"profile-custom-field profile-";
                    if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                    echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_IDENT", array());
                    echo "\"><strong>";
                    if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                    echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_NAME", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> ";
                    if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                    echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_VALUE", array());
                    echo "</dd>
\t\t\t";
                }
                // line 181
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "\t\t";
            if (isset($context["viewtopic_body_postrow_custom_fields_after"])) { $_viewtopic_body_postrow_custom_fields_after_ = $context["viewtopic_body_postrow_custom_fields_after"]; } else { $_viewtopic_body_postrow_custom_fields_after_ = null; }
            // line 183
            echo "
\t\t";
            // line 184
            if (isset($context["viewtopic_body_contact_fields_before"])) { $_viewtopic_body_contact_fields_before_ = $context["viewtopic_body_contact_fields_before"]; } else { $_viewtopic_body_contact_fields_before_ = null; }
            // line 185
            echo "\t\t";
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if (( !$_S_IS_BOT_ && twig_length_filter($this->env, $this->getAttribute($_postrow_, "contact", array())))) {
                // line 186
                echo "\t\t\t<dd class=\"profile-contact\">
\t\t\t\t<strong>";
                // line 187
                echo $this->env->getExtension('phpbb')->lang("CONTACT");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong>
\t\t\t\t<div class=\"dropdown-container dropdown-";
                // line 188
                if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
                echo $_S_CONTENT_FLOW_END_;
                echo " dropdown-down\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-trigger\"><span class=\"imageset icon_contact\" title=\"";
                // line 189
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "CONTACT_USER", array());
                echo "\">";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "CONTACT_USER", array());
                echo "</span></a>
\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<div class=\"dropdown-contents contact-icons\">
\t\t\t\t\t\t\t";
                // line 193
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_postrow_, "contact", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 194
                    echo "\t\t\t\t\t\t\t\t";
                    if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
                    $context["REMAINDER"] = ($this->getAttribute($_contact_, "S_ROW_COUNT", array()) % 4);
                    // line 195
                    echo "\t\t\t\t\t\t\t\t";
                    if (isset($context["S_LAST_CELL"])) { $_S_LAST_CELL_ = $context["S_LAST_CELL"]; } else { $_S_LAST_CELL_ = null; }
                    if (isset($context["REMAINDER"])) { $_REMAINDER_ = $context["REMAINDER"]; } else { $_REMAINDER_ = null; }
                    if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
                    $value = (($_REMAINDER_ == 3) || ($this->getAttribute($_contact_, "S_LAST_ROW", array()) && ($this->getAttribute($_contact_, "S_NUM_ROWS", array()) < 4)));
                    $context['definition']->set('S_LAST_CELL', $value);
                    // line 196
                    echo "\t\t\t\t\t\t\t\t";
                    if (isset($context["REMAINDER"])) { $_REMAINDER_ = $context["REMAINDER"]; } else { $_REMAINDER_ = null; }
                    if (($_REMAINDER_ == 0)) {
                        // line 197
                        echo "\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 199
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
                    if ($this->getAttribute($_contact_, "U_CONTACT", array())) {
                        if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
                        echo $this->getAttribute($_contact_, "U_CONTACT", array());
                    } else {
                        if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                        echo $this->getAttribute($_postrow_, "U_POST_AUTHOR", array());
                    }
                    echo "\" title=\"";
                    if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
                    echo $this->getAttribute($_contact_, "NAME", array());
                    echo "\"";
                    if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                    if ($this->getAttribute($_definition_, "S_LAST_CELL", array())) {
                        echo " class=\"last-cell\"";
                    }
                    if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
                    if (($this->getAttribute($_contact_, "ID", array()) == "jabber")) {
                        echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t<span class=\"contact-icon ";
                    // line 200
                    if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
                    echo $this->getAttribute($_contact_, "ID", array());
                    echo "-icon\">";
                    if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
                    echo $this->getAttribute($_contact_, "NAME", array());
                    echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    // line 202
                    if (isset($context["REMAINDER"])) { $_REMAINDER_ = $context["REMAINDER"]; } else { $_REMAINDER_ = null; }
                    if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
                    if ((($_REMAINDER_ == 3) || $this->getAttribute($_contact_, "S_LAST_ROW", array()))) {
                        // line 203
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 205
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 206
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</dd>
\t\t";
            }
            // line 211
            echo "\t\t";
            if (isset($context["viewtopic_body_contact_fields_after"])) { $_viewtopic_body_contact_fields_after_ = $context["viewtopic_body_contact_fields_after"]; } else { $_viewtopic_body_contact_fields_after_ = null; }
            // line 212
            echo "
\t\t</dl>

\t\t<div class=\"postbody\">

\t\t\t";
            // line 217
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_POST_HIDDEN", array())) {
                // line 218
                echo "\t\t\t\t";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                if ($this->getAttribute($_postrow_, "S_POST_DELETED", array())) {
                    // line 219
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "POST_ID", array());
                    echo "\">
\t\t\t\t\t\t";
                    // line 220
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "L_POST_DELETED_MESSAGE", array());
                    echo "<br />
\t\t\t\t\t\t";
                    // line 221
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "L_POST_DISPLAY", array());
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                } elseif ($this->getAttribute($_postrow_, "S_IGNORE_POST", array())) {
                    // line 224
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "POST_ID", array());
                    echo "\">
\t\t\t\t\t\t";
                    // line 225
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "L_IGNORE_POST", array());
                    echo "<br />
\t\t\t\t\t\t";
                    // line 226
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "L_POST_DISPLAY", array());
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 229
                echo "\t\t\t";
            }
            // line 230
            echo "\t\t\t<div id=\"post_content";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            echo $this->getAttribute($_postrow_, "POST_ID", array());
            echo "\"";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_POST_HIDDEN", array())) {
                echo " style=\"display: none;\"";
            }
            echo ">

\t\t\t";
            // line 232
            if (isset($context["viewtopic_body_post_subject_before"])) { $_viewtopic_body_post_subject_before_ = $context["viewtopic_body_post_subject_before"]; } else { $_viewtopic_body_post_subject_before_ = null; }
            // line 233
            echo "\t\t\t<h3 ";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_FIRST_ROW", array())) {
                echo "class=\"first\"";
            }
            echo ">";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "POST_ICON_IMG", array())) {
                echo "<img src=\"";
                if (isset($context["T_ICONS_PATH"])) { $_T_ICONS_PATH_ = $context["T_ICONS_PATH"]; } else { $_T_ICONS_PATH_ = null; }
                echo $_T_ICONS_PATH_;
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "POST_ICON_IMG", array());
                echo "\" width=\"";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "POST_ICON_IMG_WIDTH", array());
                echo "\" height=\"";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "POST_ICON_IMG_HEIGHT", array());
                echo "\" alt=\"\" /> ";
            }
            echo "<a href=\"#p";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            echo $this->getAttribute($_postrow_, "POST_ID", array());
            echo "\">";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            echo $this->getAttribute($_postrow_, "POST_SUBJECT", array());
            echo "</a></h3>

\t\t";
            // line 235
            if (isset($context["SHOW_POST_BUTTONS"])) { $_SHOW_POST_BUTTONS_ = $context["SHOW_POST_BUTTONS"]; } else { $_SHOW_POST_BUTTONS_ = null; }
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            $value = ((((($this->getAttribute($_postrow_, "U_EDIT", array()) || $this->getAttribute($_postrow_, "U_DELETE", array())) || $this->getAttribute($_postrow_, "U_REPORT", array())) || $this->getAttribute($_postrow_, "U_WARN", array())) || $this->getAttribute($_postrow_, "U_INFO", array())) || $this->getAttribute($_postrow_, "U_QUOTE", array()));
            $context['definition']->set('SHOW_POST_BUTTONS', $value);
            // line 236
            echo "\t\t";
            if (isset($context["viewtopic_body_post_buttons_list_before"])) { $_viewtopic_body_post_buttons_list_before_ = $context["viewtopic_body_post_buttons_list_before"]; } else { $_viewtopic_body_post_buttons_list_before_ = null; }
            // line 237
            echo "\t\t";
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if ( !$_S_IS_BOT_) {
                // line 238
                echo "\t\t\t";
                if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                if ($this->getAttribute($_definition_, "SHOW_POST_BUTTONS", array())) {
                    // line 239
                    echo "\t\t\t\t<ul class=\"post-buttons\">
\t\t\t\t\t";
                    // line 240
                    if (isset($context["viewtopic_body_post_buttons_before"])) { $_viewtopic_body_post_buttons_before_ = $context["viewtopic_body_post_buttons_before"]; } else { $_viewtopic_body_post_buttons_before_ = null; }
                    // line 241
                    echo "\t\t\t\t\t";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    if ($this->getAttribute($_postrow_, "U_EDIT", array())) {
                        // line 242
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 243
                        if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                        echo $this->getAttribute($_postrow_, "U_EDIT", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("EDIT_POST");
                        echo "\" class=\"button icon-button edit-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("BUTTON_EDIT");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 246
                    echo "\t\t\t\t\t";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    if ($this->getAttribute($_postrow_, "U_DELETE", array())) {
                        // line 247
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 248
                        if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                        echo $this->getAttribute($_postrow_, "U_DELETE", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST");
                        echo "\" class=\"button icon-button delete-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 251
                    echo "\t\t\t\t\t";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    if ($this->getAttribute($_postrow_, "U_REPORT", array())) {
                        // line 252
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 253
                        if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                        echo $this->getAttribute($_postrow_, "U_REPORT", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("REPORT_POST");
                        echo "\" class=\"button icon-button report-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("REPORT_POST");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 256
                    echo "\t\t\t\t\t";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    if ($this->getAttribute($_postrow_, "U_WARN", array())) {
                        // line 257
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 258
                        if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                        echo $this->getAttribute($_postrow_, "U_WARN", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("WARN_USER");
                        echo "\" class=\"button icon-button warn-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("WARN_USER");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 261
                    echo "\t\t\t\t\t";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    if ($this->getAttribute($_postrow_, "U_INFO", array())) {
                        // line 262
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 263
                        if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                        echo $this->getAttribute($_postrow_, "U_INFO", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("INFORMATION");
                        echo "\" class=\"button icon-button info-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("INFORMATION");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 266
                    echo "\t\t\t\t\t";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    if ($this->getAttribute($_postrow_, "U_QUOTE", array())) {
                        // line 267
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 268
                        if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                        echo $this->getAttribute($_postrow_, "U_QUOTE", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("REPLY_WITH_QUOTE");
                        echo "\" class=\"button icon-button quote-icon\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("QUOTE");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 271
                    echo "\t\t\t\t\t";
                    if (isset($context["viewtopic_body_post_buttons_after"])) { $_viewtopic_body_post_buttons_after_ = $context["viewtopic_body_post_buttons_after"]; } else { $_viewtopic_body_post_buttons_after_ = null; }
                    // line 272
                    echo "\t\t\t\t</ul>
\t\t\t";
                }
                // line 274
                echo "\t\t";
            }
            // line 275
            echo "\t\t";
            if (isset($context["viewtopic_body_post_buttons_list_after"])) { $_viewtopic_body_post_buttons_list_after_ = $context["viewtopic_body_post_buttons_list_after"]; } else { $_viewtopic_body_post_buttons_list_after_ = null; }
            // line 276
            echo "
\t\t\t";
            // line 277
            if (isset($context["viewtopic_body_postrow_post_details_before"])) { $_viewtopic_body_postrow_post_details_before_ = $context["viewtopic_body_postrow_post_details_before"]; } else { $_viewtopic_body_postrow_post_details_before_ = null; }
            // line 278
            echo "\t\t\t<p class=\"author\">";
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if ($_S_IS_BOT_) {
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "MINI_POST_IMG", array());
            } else {
                echo "<a href=\"";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "U_MINI_POST", array());
                echo "\">";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "MINI_POST_IMG", array());
                echo "</a>";
            }
            echo "<span class=\"responsive-hide\">";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            echo $this->getAttribute($_postrow_, "POST_AUTHOR_FULL", array());
            echo "</strong> &raquo; </span>";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            echo $this->getAttribute($_postrow_, "POST_DATE", array());
            echo " </p>
\t\t\t";
            // line 279
            if (isset($context["viewtopic_body_postrow_post_details_after"])) { $_viewtopic_body_postrow_post_details_after_ = $context["viewtopic_body_postrow_post_details_after"]; } else { $_viewtopic_body_postrow_post_details_after_ = null; }
            // line 280
            echo "
\t\t\t";
            // line 281
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_POST_UNAPPROVED", array())) {
                // line 282
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "U_APPROVE_ACTION", array());
                echo "\">
\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t<strong>";
                // line 284
                echo $this->env->getExtension('phpbb')->lang("POST_UNAPPROVED_ACTION");
                echo "</strong>
\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                // line 285
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
                echo "\" name=\"action[disapprove]\" />
\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                // line 286
                echo $this->env->getExtension('phpbb')->lang("APPROVE");
                echo "\" name=\"action[approve]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 287
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "POST_ID", array());
                echo "\" />
\t\t\t\t\t";
                // line 288
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            } elseif ($this->getAttribute($_postrow_, "S_POST_DELETED", array())) {
                // line 292
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "U_APPROVE_ACTION", array());
                echo "\">
\t\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t\t<strong>";
                // line 294
                echo $this->env->getExtension('phpbb')->lang("POST_DELETED_ACTION");
                echo "</strong>
\t\t\t\t\t";
                // line 295
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                if ($this->getAttribute($_postrow_, "S_DELETE_PERMANENT", array())) {
                    // line 296
                    echo "\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("DELETE");
                    echo "\" name=\"action[delete]\" />
\t\t\t\t\t";
                }
                // line 298
                echo "\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("RESTORE");
                echo "\" name=\"action[restore]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 299
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "POST_ID", array());
                echo "\" />
\t\t\t\t\t";
                // line 300
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            }
            // line 304
            echo "
\t\t\t";
            // line 305
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_POST_REPORTED", array())) {
                // line 306
                echo "\t\t\t<p class=\"post-notice reported\">
\t\t\t\t<a href=\"";
                // line 307
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "U_MCP_REPORT", array());
                echo "\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("POST_REPORTED");
                echo "</strong></a>
\t\t\t</p>
\t\t\t";
            }
            // line 310
            echo "
\t\t\t<div class=\"content\">";
            // line 311
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            echo $this->getAttribute($_postrow_, "MESSAGE", array());
            echo "</div>

\t\t\t";
            // line 313
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_HAS_ATTACHMENTS", array())) {
                // line 314
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>
\t\t\t\t\t\t";
                // line 316
                echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                echo "
\t\t\t\t\t</dt>
\t\t\t\t\t";
                // line 318
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_postrow_, "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 319
                    echo "\t\t\t\t\t\t<dd>";
                    if (isset($context["attachment"])) { $_attachment_ = $context["attachment"]; } else { $_attachment_ = null; }
                    echo $this->getAttribute($_attachment_, "DISPLAY_ATTACHMENT", array());
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 321
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 323
            echo "
\t\t\t";
            // line 324
            if (isset($context["viewtopic_body_postrow_post_notices_before"])) { $_viewtopic_body_postrow_post_notices_before_ = $context["viewtopic_body_postrow_post_notices_before"]; } else { $_viewtopic_body_postrow_post_notices_before_ = null; }
            // line 325
            echo "\t\t\t";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "S_DISPLAY_NOTICE", array())) {
                echo "<div class=\"rules\">";
                echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_NOTICE");
                echo "</div>";
            }
            // line 326
            echo "\t\t\t";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if (($this->getAttribute($_postrow_, "DELETED_MESSAGE", array()) || $this->getAttribute($_postrow_, "DELETE_REASON", array()))) {
                // line 327
                echo "\t\t\t\t<div class=\"notice post_deleted_msg\">
\t\t\t\t\t";
                // line 328
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "DELETED_MESSAGE", array());
                echo "
\t\t\t\t\t";
                // line 329
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                if ($this->getAttribute($_postrow_, "DELETE_REASON", array())) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb')->lang("REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> <em>";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "DELETE_REASON", array());
                    echo "</em>";
                }
                // line 330
                echo "\t\t\t\t</div>
\t\t\t";
            } elseif (($this->getAttribute($_postrow_, "EDITED_MESSAGE", array()) || $this->getAttribute($_postrow_, "EDIT_REASON", array()))) {
                // line 332
                echo "\t\t\t\t<div class=\"notice\">
\t\t\t\t\t";
                // line 333
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "EDITED_MESSAGE", array());
                echo "
\t\t\t\t\t";
                // line 334
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                if ($this->getAttribute($_postrow_, "EDIT_REASON", array())) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb')->lang("REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> <em>";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "EDIT_REASON", array());
                    echo "</em>";
                }
                // line 335
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 337
            echo "
\t\t\t";
            // line 338
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "BUMPED_MESSAGE", array())) {
                echo "<div class=\"notice\"><br /><br />";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "BUMPED_MESSAGE", array());
                echo "</div>";
            }
            // line 339
            echo "\t\t\t";
            if (isset($context["viewtopic_body_postrow_post_notices_after"])) { $_viewtopic_body_postrow_post_notices_after_ = $context["viewtopic_body_postrow_post_notices_after"]; } else { $_viewtopic_body_postrow_post_notices_after_ = null; }
            // line 340
            echo "\t\t\t";
            if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
            if ($this->getAttribute($_postrow_, "SIGNATURE", array())) {
                echo "<div id=\"sig";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "POST_ID", array());
                echo "\" class=\"signature\">";
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                echo $this->getAttribute($_postrow_, "SIGNATURE", array());
                echo "</div>";
            }
            // line 341
            echo "
\t\t\t";
            // line 342
            if (isset($context["viewtopic_body_postrow_post_content_footer"])) { $_viewtopic_body_postrow_post_content_footer_ = $context["viewtopic_body_postrow_post_content_footer"]; } else { $_viewtopic_body_postrow_post_content_footer_ = null; }
            // line 343
            echo "\t\t\t</div>

\t\t</div>

\t\t</div>
\t\t<div class=\"back2top\"><a href=\"#top\" class=\"top\" title=\"";
            // line 348
            echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
            echo "</a></div>
\t</div>

\t";
            // line 351
            if (isset($context["viewtopic_body_postrow_post_after"])) { $_viewtopic_body_postrow_post_after_ = $context["viewtopic_body_postrow_post_after"]; } else { $_viewtopic_body_postrow_post_after_ = null; }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 353
        echo "
";
        // line 354
        if (isset($context["S_QUICK_REPLY"])) { $_S_QUICK_REPLY_ = $context["S_QUICK_REPLY"]; } else { $_S_QUICK_REPLY_ = null; }
        if ($_S_QUICK_REPLY_) {
            // line 355
            echo "\t";
            $location = "quickreply_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quickreply_editor.html", "viewtopic_body.html", 355)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 357
        echo "
";
        // line 358
        if (isset($context["S_NUM_POSTS"])) { $_S_NUM_POSTS_ = $context["S_NUM_POSTS"]; } else { $_S_NUM_POSTS_ = null; }
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if ((($_S_NUM_POSTS_ > 1) || twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array())))) {
            // line 359
            echo "\t<form id=\"viewtopic\" method=\"post\" action=\"";
            if (isset($context["S_TOPIC_ACTION"])) { $_S_TOPIC_ACTION_ = $context["S_TOPIC_ACTION"]; } else { $_S_TOPIC_ACTION_ = null; }
            echo $_S_TOPIC_ACTION_;
            echo "\">
\t<fieldset class=\"display-options\" style=\"margin-top: 0; \">
\t\t";
            // line 361
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if ( !$_S_IS_BOT_) {
                // line 362
                echo "\t\t<label>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                if (isset($context["S_SELECT_SORT_DAYS"])) { $_S_SELECT_SORT_DAYS_ = $context["S_SELECT_SORT_DAYS"]; } else { $_S_SELECT_SORT_DAYS_ = null; }
                echo $_S_SELECT_SORT_DAYS_;
                echo "</label>
\t\t<label>";
                // line 363
                echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                echo " ";
                if (isset($context["S_SELECT_SORT_KEY"])) { $_S_SELECT_SORT_KEY_ = $context["S_SELECT_SORT_KEY"]; } else { $_S_SELECT_SORT_KEY_ = null; }
                echo $_S_SELECT_SORT_KEY_;
                echo "</label> <label>";
                if (isset($context["S_SELECT_SORT_DIR"])) { $_S_SELECT_SORT_DIR_ = $context["S_SELECT_SORT_DIR"]; } else { $_S_SELECT_SORT_DIR_ = null; }
                echo $_S_SELECT_SORT_DIR_;
                echo "</label>
\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 364
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" class=\"button2\" />
\t\t";
            }
            // line 366
            echo "\t</fieldset>
\t</form>
\t<hr />
";
        }
        // line 370
        echo "
";
        // line 371
        if (isset($context["viewtopic_body_topic_actions_before"])) { $_viewtopic_body_topic_actions_before_ = $context["viewtopic_body_topic_actions_before"]; } else { $_viewtopic_body_topic_actions_before_ = null; }
        // line 372
        echo "<div class=\"action-bar bottom\">
\t<div class=\"buttons\">
\t\t";
        // line 374
        if (isset($context["viewtopic_buttons_bottom_before"])) { $_viewtopic_buttons_bottom_before_ = $context["viewtopic_buttons_bottom_before"]; } else { $_viewtopic_buttons_bottom_before_ = null; }
        // line 375
        echo "
\t";
        // line 376
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if (isset($context["S_DISPLAY_REPLY_INFO"])) { $_S_DISPLAY_REPLY_INFO_ = $context["S_DISPLAY_REPLY_INFO"]; } else { $_S_DISPLAY_REPLY_INFO_ = null; }
        if (( !$_S_IS_BOT_ && $_S_DISPLAY_REPLY_INFO_)) {
            // line 377
            echo "\t\t<a href=\"";
            if (isset($context["U_POST_REPLY_TOPIC"])) { $_U_POST_REPLY_TOPIC_ = $context["U_POST_REPLY_TOPIC"]; } else { $_U_POST_REPLY_TOPIC_ = null; }
            echo $_U_POST_REPLY_TOPIC_;
            echo "\" class=\"button icon-button ";
            if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
            if ($_S_IS_LOCKED_) {
                echo "locked-icon";
            } else {
                echo "reply-icon";
            }
            echo "\" title=\"";
            if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
            if ($_S_IS_LOCKED_) {
                echo $this->env->getExtension('phpbb')->lang("TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb')->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 378
            if (isset($context["S_IS_LOCKED"])) { $_S_IS_LOCKED_ = $context["S_IS_LOCKED"]; } else { $_S_IS_LOCKED_ = null; }
            if ($_S_IS_LOCKED_) {
                echo $this->env->getExtension('phpbb')->lang("BUTTON_TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb')->lang("BUTTON_POST_REPLY");
            }
            // line 379
            echo "\t\t</a>
\t";
        }
        // line 381
        echo "
\t\t";
        // line 382
        if (isset($context["viewtopic_buttons_bottom_after"])) { $_viewtopic_buttons_bottom_after_ = $context["viewtopic_buttons_bottom_after"]; } else { $_viewtopic_buttons_bottom_after_ = null; }
        // line 383
        echo "\t</div>

\t";
        // line 385
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 385)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 386
        echo "
\t";
        // line 387
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "quickmod", array()))) {
            // line 388
            echo "\t\t<div class=\"dropdown-container dropdown-container-";
            if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
            echo $_S_CONTENT_FLOW_BEGIN_;
            echo " dropdown-up dropdown-";
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo " dropdown-button-control\" id=\"quickmod\">
\t\t\t<span title=\"";
            // line 389
            echo $this->env->getExtension('phpbb')->lang("QUICK_MOD");
            echo "\" class=\"dropdown-trigger button icon-button modtools-icon dropdown-select\">";
            echo $this->env->getExtension('phpbb')->lang("QUICK_MOD");
            echo "</span>
\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 393
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "quickmod", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["quickmod"]) {
                // line 394
                echo "\t\t\t\t\t";
                if (isset($context["QUICKMOD_AJAX"])) { $_QUICKMOD_AJAX_ = $context["QUICKMOD_AJAX"]; } else { $_QUICKMOD_AJAX_ = null; }
                if (isset($context["quickmod"])) { $_quickmod_ = $context["quickmod"]; } else { $_quickmod_ = null; }
                $value = twig_in_filter($this->getAttribute($_quickmod_, "VALUE", array()), array(0 => "lock", 1 => "unlock", 2 => "delete_topic", 3 => "restore_topic", 4 => "make_normal", 5 => "make_sticky", 6 => "make_announce", 7 => "make_global"));
                $context['definition']->set('QUICKMOD_AJAX', $value);
                // line 395
                echo "\t\t\t\t\t<li><a href=\"";
                if (isset($context["quickmod"])) { $_quickmod_ = $context["quickmod"]; } else { $_quickmod_ = null; }
                echo $this->getAttribute($_quickmod_, "LINK", array());
                echo "\"";
                if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                if ($this->getAttribute($_definition_, "QUICKMOD_AJAX", array())) {
                    echo " data-ajax=\"true\" data-refresh=\"true\"";
                }
                echo ">";
                if (isset($context["quickmod"])) { $_quickmod_ = $context["quickmod"]; } else { $_quickmod_ = null; }
                echo $this->getAttribute($_quickmod_, "TITLE", array());
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickmod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 397
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 401
        echo "\t
\t";
        // line 402
        if (isset($context["viewtopic_dropdown_bottom_custom"])) { $_viewtopic_dropdown_bottom_custom_ = $context["viewtopic_dropdown_bottom_custom"]; } else { $_viewtopic_dropdown_bottom_custom_ = null; }
        // line 403
        echo "
\t";
        // line 404
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (isset($context["TOTAL_POSTS"])) { $_TOTAL_POSTS_ = $context["TOTAL_POSTS"]; } else { $_TOTAL_POSTS_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array())) || $_TOTAL_POSTS_)) {
            // line 405
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 406
            if (isset($context["TOTAL_POSTS"])) { $_TOTAL_POSTS_ = $context["TOTAL_POSTS"]; } else { $_TOTAL_POSTS_ = null; }
            echo $_TOTAL_POSTS_;
            echo "
\t\t\t";
            // line 407
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
                // line 408
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 408)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 409
                echo "\t\t\t";
            } else {
                // line 410
                echo "\t\t\t\t&bull; ";
                if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                echo $_PAGE_NUMBER_;
                echo "
\t\t\t";
            }
            // line 412
            echo "\t\t</div>
\t";
        }
        // line 414
        echo "\t<div class=\"clear\"></div>
</div>

";
        // line 417
        if (isset($context["viewtopic_body_footer_before"])) { $_viewtopic_body_footer_before_ = $context["viewtopic_body_footer_before"]; } else { $_viewtopic_body_footer_before_ = null; }
        // line 418
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewtopic_body.html", 418)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 419
        echo "
";
        // line 420
        if (isset($context["S_DISPLAY_ONLINE_LIST"])) { $_S_DISPLAY_ONLINE_LIST_ = $context["S_DISPLAY_ONLINE_LIST"]; } else { $_S_DISPLAY_ONLINE_LIST_ = null; }
        if ($_S_DISPLAY_ONLINE_LIST_) {
            // line 421
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3>";
            // line 422
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
            // line 423
            if (isset($context["LOGGED_IN_USER_LIST"])) { $_LOGGED_IN_USER_LIST_ = $context["LOGGED_IN_USER_LIST"]; } else { $_LOGGED_IN_USER_LIST_ = null; }
            echo $_LOGGED_IN_USER_LIST_;
            echo "</p>
\t</div>
";
        }
        // line 426
        echo "
";
        // line 427
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewtopic_body.html", 427)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1836 => 427,  1833 => 426,  1826 => 423,  1812 => 422,  1809 => 421,  1806 => 420,  1803 => 419,  1791 => 418,  1789 => 417,  1784 => 414,  1780 => 412,  1773 => 410,  1770 => 409,  1757 => 408,  1754 => 407,  1749 => 406,  1746 => 405,  1742 => 404,  1739 => 403,  1737 => 402,  1734 => 401,  1728 => 397,  1710 => 395,  1704 => 394,  1699 => 393,  1690 => 389,  1681 => 388,  1678 => 387,  1675 => 386,  1663 => 385,  1659 => 383,  1657 => 382,  1654 => 381,  1650 => 379,  1643 => 378,  1623 => 377,  1619 => 376,  1616 => 375,  1614 => 374,  1610 => 372,  1608 => 371,  1605 => 370,  1599 => 366,  1594 => 364,  1584 => 363,  1575 => 362,  1572 => 361,  1565 => 359,  1561 => 358,  1558 => 357,  1544 => 355,  1541 => 354,  1538 => 353,  1532 => 351,  1524 => 348,  1517 => 343,  1515 => 342,  1512 => 341,  1500 => 340,  1497 => 339,  1489 => 338,  1486 => 337,  1482 => 335,  1471 => 334,  1466 => 333,  1463 => 332,  1459 => 330,  1448 => 329,  1443 => 328,  1440 => 327,  1436 => 326,  1428 => 325,  1426 => 324,  1423 => 323,  1419 => 321,  1409 => 319,  1404 => 318,  1399 => 316,  1395 => 314,  1392 => 313,  1386 => 311,  1383 => 310,  1374 => 307,  1371 => 306,  1368 => 305,  1365 => 304,  1357 => 300,  1352 => 299,  1347 => 298,  1341 => 296,  1338 => 295,  1334 => 294,  1327 => 292,  1319 => 288,  1314 => 287,  1310 => 286,  1306 => 285,  1302 => 284,  1295 => 282,  1292 => 281,  1289 => 280,  1287 => 279,  1262 => 278,  1260 => 277,  1257 => 276,  1254 => 275,  1251 => 274,  1247 => 272,  1244 => 271,  1233 => 268,  1230 => 267,  1226 => 266,  1215 => 263,  1212 => 262,  1208 => 261,  1197 => 258,  1194 => 257,  1190 => 256,  1179 => 253,  1176 => 252,  1172 => 251,  1161 => 248,  1158 => 247,  1154 => 246,  1143 => 243,  1140 => 242,  1136 => 241,  1134 => 240,  1131 => 239,  1127 => 238,  1123 => 237,  1120 => 236,  1115 => 235,  1084 => 233,  1082 => 232,  1070 => 230,  1067 => 229,  1060 => 226,  1055 => 225,  1049 => 224,  1042 => 221,  1037 => 220,  1031 => 219,  1027 => 218,  1024 => 217,  1017 => 212,  1014 => 211,  1007 => 206,  1001 => 205,  997 => 203,  993 => 202,  984 => 200,  960 => 199,  956 => 197,  952 => 196,  945 => 195,  941 => 194,  936 => 193,  925 => 189,  920 => 188,  915 => 187,  912 => 186,  907 => 185,  905 => 184,  902 => 183,  899 => 182,  893 => 181,  879 => 179,  875 => 178,  869 => 177,  867 => 176,  864 => 175,  854 => 173,  851 => 172,  848 => 171,  845 => 170,  833 => 169,  821 => 168,  799 => 167,  796 => 166,  793 => 165,  778 => 164,  776 => 163,  772 => 161,  769 => 160,  757 => 159,  755 => 158,  752 => 157,  749 => 156,  746 => 155,  729 => 154,  725 => 153,  723 => 152,  706 => 150,  696 => 149,  661 => 146,  649 => 144,  645 => 143,  642 => 142,  637 => 141,  634 => 140,  632 => 139,  629 => 138,  620 => 133,  615 => 132,  608 => 128,  605 => 127,  596 => 124,  592 => 122,  589 => 121,  586 => 120,  580 => 117,  576 => 115,  573 => 114,  563 => 111,  555 => 109,  552 => 108,  546 => 107,  544 => 106,  528 => 104,  501 => 103,  467 => 102,  451 => 101,  427 => 100,  424 => 99,  419 => 98,  402 => 95,  395 => 94,  384 => 88,  381 => 87,  378 => 86,  376 => 85,  372 => 83,  369 => 82,  365 => 80,  358 => 78,  355 => 77,  342 => 76,  339 => 75,  324 => 74,  321 => 73,  317 => 72,  314 => 71,  305 => 66,  296 => 65,  290 => 64,  286 => 63,  280 => 61,  277 => 60,  274 => 59,  271 => 58,  268 => 57,  256 => 56,  252 => 54,  250 => 53,  247 => 52,  243 => 50,  236 => 49,  216 => 48,  212 => 47,  209 => 46,  207 => 45,  201 => 41,  195 => 37,  189 => 35,  184 => 34,  175 => 32,  172 => 31,  162 => 28,  159 => 27,  156 => 26,  141 => 23,  138 => 22,  135 => 21,  132 => 20,  124 => 19,  121 => 18,  119 => 17,  107 => 16,  104 => 15,  92 => 14,  85 => 11,  59 => 8,  49 => 7,  45 => 6,  36 => 4,  32 => 3,  22 => 2,  19 => 1,);
    }
}
