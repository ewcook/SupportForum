<?php

/* forumlist_body.html */
class __TwigTemplate_f0301d32cdf29e6a4ae3183072944cb4897d055d05a6ff60c9612c68f80fe10e extends Twig_Template
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
        echo "
";
        // line 2
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "forumrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 3
            echo "\t";
            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
            if ((($this->getAttribute($_forumrow_, "S_IS_CAT", array()) &&  !$this->getAttribute($_forumrow_, "S_FIRST_ROW", array())) || $this->getAttribute($_forumrow_, "S_NO_CAT", array()))) {
                // line 4
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 9
            echo "
\t";
            // line 10
            if (isset($context["forumlist_body_category_header_before"])) { $_forumlist_body_category_header_before_ = $context["forumlist_body_category_header_before"]; } else { $_forumlist_body_category_header_before_ = null; }
            // line 11
            echo "\t";
            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
            if ((($this->getAttribute($_forumrow_, "S_IS_CAT", array()) || $this->getAttribute($_forumrow_, "S_FIRST_ROW", array())) || $this->getAttribute($_forumrow_, "S_NO_CAT", array()))) {
                // line 12
                echo "\t\t<div class=\"forabg category-";
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                echo $this->getAttribute($_forumrow_, "FORUM_ID", array());
                if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                if (($this->getAttribute($_definition_, "STANDARD_FORUMS_LAYOUT", array()) == 0)) {
                    echo " elegant";
                }
                echo "\" data-hide-description=\"";
                if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                echo $this->getAttribute($_definition_, "HIDE_FORUM_DESCRIPTION", array());
                echo "\">
\t\t\t<div class=\"inner\">
\t\t\t<ul class=\"topiclist\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t";
                // line 16
                if (isset($context["forumlist_body_category_header_row_prepend"])) { $_forumlist_body_category_header_row_prepend_ = $context["forumlist_body_category_header_row_prepend"]; } else { $_forumlist_body_category_header_row_prepend_ = null; }
                // line 17
                echo "\t\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 18
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if ($this->getAttribute($_forumrow_, "S_IS_CAT", array())) {
                    echo "<a href=\"";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "U_VIEWFORUM", array());
                    echo "\" data-id=\"";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "FORUM_ID", array());
                    echo "\">";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "FORUM_NAME", array());
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                }
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"topics\">";
                // line 19
                echo $this->env->getExtension('phpbb')->lang("TOPICS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"posts\">";
                // line 20
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 21
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t";
                // line 23
                if (isset($context["forumlist_body_category_header_row_append"])) { $_forumlist_body_category_header_row_append_ = $context["forumlist_body_category_header_row_append"]; } else { $_forumlist_body_category_header_row_append_ = null; }
                // line 24
                echo "\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist forums\">
\t";
            }
            // line 28
            echo "\t";
            if (isset($context["forumlist_body_category_header_after"])) { $_forumlist_body_category_header_after_ = $context["forumlist_body_category_header_after"]; } else { $_forumlist_body_category_header_after_ = null; }
            // line 29
            echo "
\t";
            // line 30
            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
            if ( !$this->getAttribute($_forumrow_, "S_IS_CAT", array())) {
                // line 31
                echo "\t\t";
                if (isset($context["forumlist_body_forum_row_before"])) { $_forumlist_body_forum_row_before_ = $context["forumlist_body_forum_row_before"]; } else { $_forumlist_body_forum_row_before_ = null; }
                // line 32
                echo "\t\t<li class=\"row forum-";
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                echo $this->getAttribute($_forumrow_, "FORUM_ID", array());
                echo "\">
\t\t\t";
                // line 33
                if (isset($context["forumlist_body_forum_row_prepend"])) { $_forumlist_body_forum_row_prepend_ = $context["forumlist_body_forum_row_prepend"]; } else { $_forumlist_body_forum_row_prepend_ = null; }
                // line 34
                echo "\t\t\t";
                if (isset($context["EXTRA_DESC"])) { $_EXTRA_DESC_ = $context["EXTRA_DESC"]; } else { $_EXTRA_DESC_ = null; }
                ob_start();
                // line 35
                echo "\t\t\t";
                if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if (((($this->getAttribute($_definition_, "STANDARD_FORUMS_LAYOUT", array()) == 0) &&  !$this->getAttribute($_forumrow_, "CLICKS", array())) &&  !$this->getAttribute($_forumrow_, "S_IS_LINK", array()))) {
                    // line 36
                    echo "\t\t\t\t<div class=\"forum-statistics\">
\t\t\t\t\t<span class=\"dfn\">";
                    // line 37
                    echo $this->env->getExtension('phpbb')->lang("TOPICS");
                    echo "</span>";
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <span class=\"value\">";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "TOPICS", array());
                    echo "</span><span class=\"comma\">";
                    echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                    echo "</span>
\t\t\t\t\t<span class=\"dfn\">";
                    // line 38
                    echo $this->env->getExtension('phpbb')->lang("POSTS");
                    echo "</span>";
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <span class=\"value\">";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "POSTS", array());
                    echo "</span>
\t\t\t\t</div>
\t\t\t";
                }
                // line 41
                echo "\t\t\t";
                $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
                $context['definition']->set('EXTRA_DESC', $value);
                // line 42
                echo "\t\t\t<dl class=\"icon ";
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                echo $this->getAttribute($_forumrow_, "FORUM_IMG_STYLE", array());
                if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                if (trim($this->getAttribute($_definition_, "EXTRA_DESC", array()))) {
                    echo " elegant-row";
                }
                echo "\">
\t\t\t\t<dt title=\"";
                // line 43
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                echo $this->getAttribute($_forumrow_, "FORUM_FOLDER_IMG_ALT", array());
                echo "\">
\t\t\t\t\t";
                // line 44
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if ($this->getAttribute($_forumrow_, "S_UNREAD_FORUM", array())) {
                    echo "<a href=\"";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "U_VIEWFORUM", array());
                    echo "\" class=\"icon-link\"></a>";
                }
                // line 45
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 46
                if (isset($context["S_ENABLE_FEEDS"])) { $_S_ENABLE_FEEDS_ = $context["S_ENABLE_FEEDS"]; } else { $_S_ENABLE_FEEDS_ = null; }
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if (($_S_ENABLE_FEEDS_ && $this->getAttribute($_forumrow_, "S_FEED_ENABLED", array()))) {
                    echo "<!-- <a class=\"feed-icon-forum\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("FEED");
                    echo " - ";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "FORUM_NAME", array());
                    echo "\" href=\"";
                    if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                    echo $_U_FEED_;
                    echo "?f=";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "FORUM_ID", array());
                    echo "\"></a> -->";
                }
                // line 47
                echo "
\t\t\t\t\t\t";
                // line 48
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if ($this->getAttribute($_forumrow_, "FORUM_IMAGE", array())) {
                    echo "<span class=\"forum-image\">";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "FORUM_IMAGE", array());
                    echo "</span>";
                }
                // line 49
                echo "\t\t\t\t\t\t<a href=\"";
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                echo $this->getAttribute($_forumrow_, "U_VIEWFORUM", array());
                echo "\" class=\"forumtitle\" data-id=\"";
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                echo $this->getAttribute($_forumrow_, "FORUM_ID", array());
                echo "\">";
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                echo $this->getAttribute($_forumrow_, "FORUM_NAME", array());
                echo "</a>
\t\t\t\t\t\t";
                // line 50
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if ($this->getAttribute($_forumrow_, "FORUM_DESC", array())) {
                    echo "<div class=\"forum-description\">";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "FORUM_DESC", array());
                    echo "</div>";
                }
                // line 51
                echo "\t\t\t\t\t\t";
                if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                echo $this->getAttribute($_definition_, "EXTRA_DESC", array());
                echo "
\t\t\t\t\t\t";
                // line 52
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if ($this->getAttribute($_forumrow_, "MODERATORS", array())) {
                    // line 53
                    echo "\t\t\t\t\t\t\t<div class=\"forum-moderators\"><strong>";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "L_MODERATOR_STR", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> ";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "MODERATORS", array());
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 55
                echo "\t\t\t\t\t\t";
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if ((twig_length_filter($this->env, $this->getAttribute($_forumrow_, "subforum", array())) && $this->getAttribute($_forumrow_, "S_LIST_SUBFORUMS", array()))) {
                    // line 56
                    echo "\t\t\t\t\t\t\t<div class=\"subforums-list\">
\t\t\t\t\t\t\t";
                    // line 57
                    if (isset($context["forumlist_body_subforums_before"])) { $_forumlist_body_subforums_before_ = $context["forumlist_body_subforums_before"]; } else { $_forumlist_body_subforums_before_ = null; }
                    // line 58
                    echo "\t\t\t\t\t\t\t<strong>";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "L_SUBFORUM_STR", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                    // line 60
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_forumrow_, "subforum", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 61
                        echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                        if (isset($context["subforum"])) { $_subforum_ = $context["subforum"]; } else { $_subforum_ = null; }
                        echo $this->getAttribute($_subforum_, "U_SUBFORUM", array());
                        echo "\" class=\"subforum";
                        if (isset($context["subforum"])) { $_subforum_ = $context["subforum"]; } else { $_subforum_ = null; }
                        if ($this->getAttribute($_subforum_, "S_UNREAD", array())) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if (isset($context["subforum"])) { $_subforum_ = $context["subforum"]; } else { $_subforum_ = null; }
                        if ($this->getAttribute($_subforum_, "S_UNREAD", array())) {
                            echo $this->env->getExtension('phpbb')->lang("UNREAD_POSTS");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">";
                        if (isset($context["subforum"])) { $_subforum_ = $context["subforum"]; } else { $_subforum_ = null; }
                        echo $this->getAttribute($_subforum_, "SUBFORUM_NAME", array());
                        echo "</a>";
                        if (isset($context["subforum"])) { $_subforum_ = $context["subforum"]; } else { $_subforum_ = null; }
                        if ( !$this->getAttribute($_subforum_, "S_LAST_ROW", array())) {
                            echo "<span>";
                            echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                            echo "</span>";
                        }
                        echo "</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
                    // line 64
                    if (isset($context["forumlist_body_subforums_after"])) { $_forumlist_body_subforums_after_ = $context["forumlist_body_subforums_after"]; } else { $_forumlist_body_subforums_after_ = null; }
                    // line 65
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 67
                echo "
\t\t\t\t\t\t";
                // line 68
                if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
                if ( !$_S_IS_BOT_) {
                    // line 69
                    echo "\t\t\t\t\t\t";
                    if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                    if ((trim($this->getAttribute($_definition_, "EXTRA_DESC", array())) == "")) {
                        // line 70
                        echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                        // line 71
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        if ($this->getAttribute($_forumrow_, "CLICKS", array())) {
                            // line 72
                            echo "\t\t\t\t\t\t\t\t";
                            echo $this->env->getExtension('phpbb')->lang("REDIRECTS");
                            echo $this->env->getExtension('phpbb')->lang("COLON");
                            echo " <strong>";
                            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                            echo $this->getAttribute($_forumrow_, "CLICKS", array());
                            echo "</strong>
\t\t\t\t\t\t\t";
                        } elseif (( !$this->getAttribute($_forumrow_, "S_IS_LINK", array()) && $this->getAttribute($_forumrow_, "TOPICS", array()))) {
                            // line 74
                            echo "\t\t\t\t\t\t\t\t";
                            echo $this->env->getExtension('phpbb')->lang("TOPICS");
                            echo $this->env->getExtension('phpbb')->lang("COLON");
                            echo " <strong>";
                            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                            echo $this->getAttribute($_forumrow_, "TOPICS", array());
                            echo "</strong>
\t\t\t\t\t\t\t";
                        }
                        // line 76
                        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 78
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    if (( !$this->getAttribute($_forumrow_, "S_IS_LINK", array()) && $this->getAttribute($_forumrow_, "LAST_POST_TIME", array()))) {
                        // line 79
                        echo "\t\t\t\t\t\t\t<div class=\"forum-lastpost\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<span><strong>";
                        // line 80
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "</strong> <a href=\"";
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        echo $this->getAttribute($_forumrow_, "U_LAST_POST", array());
                        echo "\" title=\"";
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        echo $this->getAttribute($_forumrow_, "LAST_POST_SUBJECT", array());
                        echo "\" class=\"lastsubject\">";
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        echo $this->getAttribute($_forumrow_, "LAST_POST_SUBJECT_TRUNCATED", array());
                        echo "</a></span>
\t\t\t\t\t\t\t\t<span>";
                        // line 81
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        echo $this->getAttribute($_forumrow_, "LAST_POSTER_FULL", array());
                        echo ", ";
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        echo $this->getAttribute($_forumrow_, "LAST_POST_TIME", array());
                        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 84
                    echo "\t\t\t\t\t\t";
                }
                // line 85
                echo "
\t\t\t\t\t\t";
                // line 86
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if ($this->getAttribute($_forumrow_, "U_UNAPPROVED_TOPICS", array())) {
                    // line 87
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "U_UNAPPROVED_TOPICS", array());
                    echo "\" class=\"forum-mcplink\">";
                    if (isset($context["UNAPPROVED_IMG"])) { $_UNAPPROVED_IMG_ = $context["UNAPPROVED_IMG"]; } else { $_UNAPPROVED_IMG_ = null; }
                    echo $_UNAPPROVED_IMG_;
                    echo "</a>
\t\t\t\t\t\t";
                } elseif ($this->getAttribute($_forumrow_, "U_UNAPPROVED_POSTS", array())) {
                    // line 89
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "U_UNAPPROVED_POSTS", array());
                    echo "\" class=\"forum-mcplink\">";
                    if (isset($context["UNAPPROVED_POST_IMG"])) { $_UNAPPROVED_POST_IMG_ = $context["UNAPPROVED_POST_IMG"]; } else { $_UNAPPROVED_POST_IMG_ = null; }
                    echo $_UNAPPROVED_POST_IMG_;
                    echo "</a>
\t\t\t\t\t\t";
                }
                // line 91
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t";
                // line 93
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if ($this->getAttribute($_forumrow_, "CLICKS", array())) {
                    // line 94
                    echo "\t\t\t\t\t<dd class=\"redirect\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("REDIRECTS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "CLICKS", array());
                    echo "</span></dd>
\t\t\t\t";
                } elseif ( !$this->getAttribute($_forumrow_, "S_IS_LINK", array())) {
                    // line 96
                    echo "\t\t\t\t\t";
                    if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                    if (($this->getAttribute($_definition_, "STANDARD_FORUMS_LAYOUT", array()) != 0)) {
                        // line 97
                        echo "\t\t\t\t\t<dd class=\"topics\">";
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        echo $this->getAttribute($_forumrow_, "TOPICS", array());
                        echo " <dfn>";
                        echo $this->env->getExtension('phpbb')->lang("TOPICS");
                        echo "</dfn></dd>
\t\t\t\t\t<dd class=\"posts\">";
                        // line 98
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        echo $this->getAttribute($_forumrow_, "POSTS", array());
                        echo " <dfn>";
                        echo $this->env->getExtension('phpbb')->lang("POSTS");
                        echo "</dfn></dd>
\t\t\t\t\t";
                    }
                    // line 100
                    echo "\t\t\t\t\t<dd class=\"lastpost\"><span>
\t\t\t\t\t\t";
                    // line 101
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    if ($this->getAttribute($_forumrow_, "LAST_POST_TIME", array())) {
                        echo "<dfn>";
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo "</dfn>
\t\t\t\t\t\t";
                        // line 102
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        if ($this->getAttribute($_forumrow_, "S_DISPLAY_SUBJECT", array())) {
                            // line 103
                            echo "\t\t\t\t\t\t\t";
                            if (isset($context["forumlist_body_last_post_title_prepend"])) { $_forumlist_body_last_post_title_prepend_ = $context["forumlist_body_last_post_title_prepend"]; } else { $_forumlist_body_last_post_title_prepend_ = null; }
                            // line 104
                            echo "\t\t\t\t\t\t\t<a href=\"";
                            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                            echo $this->getAttribute($_forumrow_, "U_LAST_POST", array());
                            echo "\" title=\"";
                            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                            echo $this->getAttribute($_forumrow_, "LAST_POST_SUBJECT", array());
                            echo "\" class=\"lastsubject\">";
                            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                            echo $this->getAttribute($_forumrow_, "LAST_POST_SUBJECT_TRUNCATED", array());
                            echo "</a> <br />
\t\t\t\t\t\t";
                        }
                        // line 105
                        echo " 
\t\t\t\t\t\t";
                        // line 106
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        echo $this->getAttribute($_forumrow_, "LAST_POSTER_FULL", array());
                        echo "
\t\t\t\t\t\t";
                        // line 107
                        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
                        if ( !$_S_IS_BOT_) {
                            echo "<a href=\"";
                            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                            echo $this->getAttribute($_forumrow_, "U_LAST_POST", array());
                            echo "\">";
                            if (isset($context["LAST_POST_IMG"])) { $_LAST_POST_IMG_ = $context["LAST_POST_IMG"]; } else { $_LAST_POST_IMG_ = null; }
                            echo $_LAST_POST_IMG_;
                            echo "</a> ";
                        }
                        echo "<br />";
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        echo $this->getAttribute($_forumrow_, "LAST_POST_TIME", array());
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO_POSTS");
                        echo "<br />&nbsp;";
                    }
                    echo "</span>
\t\t\t\t\t</dd>
\t\t\t\t";
                } else {
                    // line 110
                    echo "\t\t\t\t\t<dd>&nbsp;</dd>
\t\t\t\t";
                }
                // line 112
                echo "\t\t\t</dl>
\t\t\t";
                // line 113
                if (isset($context["forumlist_body_forum_row_append"])) { $_forumlist_body_forum_row_append_ = $context["forumlist_body_forum_row_append"]; } else { $_forumlist_body_forum_row_append_ = null; }
                // line 114
                echo "\t\t</li>
\t\t";
                // line 115
                if (isset($context["forumlist_body_forum_row_after"])) { $_forumlist_body_forum_row_after_ = $context["forumlist_body_forum_row_after"]; } else { $_forumlist_body_forum_row_after_ = null; }
                // line 116
                echo "\t";
            }
            // line 117
            echo "
\t";
            // line 118
            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
            if ($this->getAttribute($_forumrow_, "S_LAST_ROW", array())) {
                // line 119
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
                // line 123
                if (isset($context["forumlist_body_last_row_after"])) { $_forumlist_body_last_row_after_ = $context["forumlist_body_last_row_after"]; } else { $_forumlist_body_last_row_after_ = null; }
                // line 124
                echo "\t";
            }
            // line 125
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 127
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 129
            echo $this->env->getExtension('phpbb')->lang("NO_FORUMS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  569 => 129,  565 => 127,  559 => 125,  556 => 124,  554 => 123,  548 => 119,  545 => 118,  542 => 117,  539 => 116,  537 => 115,  534 => 114,  532 => 113,  529 => 112,  525 => 110,  503 => 107,  496 => 106,  493 => 105,  480 => 104,  477 => 103,  474 => 102,  467 => 101,  464 => 100,  456 => 98,  448 => 97,  444 => 96,  434 => 94,  431 => 93,  427 => 91,  417 => 89,  407 => 87,  404 => 86,  401 => 85,  398 => 84,  386 => 81,  372 => 80,  369 => 79,  365 => 78,  361 => 76,  351 => 74,  341 => 72,  338 => 71,  335 => 70,  331 => 69,  328 => 68,  325 => 67,  321 => 65,  319 => 64,  316 => 63,  282 => 61,  277 => 60,  269 => 58,  267 => 57,  264 => 56,  260 => 55,  249 => 53,  246 => 52,  240 => 51,  232 => 50,  220 => 49,  212 => 48,  209 => 47,  192 => 46,  189 => 45,  181 => 44,  176 => 43,  166 => 42,  162 => 41,  151 => 38,  140 => 37,  137 => 36,  132 => 35,  128 => 34,  126 => 33,  120 => 32,  117 => 31,  114 => 30,  111 => 29,  108 => 28,  102 => 24,  100 => 23,  95 => 21,  91 => 20,  87 => 19,  69 => 18,  66 => 17,  64 => 16,  48 => 12,  44 => 11,  42 => 10,  39 => 9,  32 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
