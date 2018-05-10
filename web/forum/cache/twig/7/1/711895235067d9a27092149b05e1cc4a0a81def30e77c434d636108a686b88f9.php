<?php

/* overall_header.html */
class __TwigTemplate_711895235067d9a27092149b05e1cc4a0a81def30e77c434d636108a686b88f9 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        if (isset($context["S_CONTENT_DIRECTION"])) { $_S_CONTENT_DIRECTION_ = $context["S_CONTENT_DIRECTION"]; } else { $_S_CONTENT_DIRECTION_ = null; }
        echo $_S_CONTENT_DIRECTION_;
        echo "\" lang=\"";
        if (isset($context["S_USER_LANG"])) { $_S_USER_LANG_ = $context["S_USER_LANG"]; } else { $_S_USER_LANG_ = null; }
        echo $_S_USER_LANG_;
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 7
        if (isset($context["META"])) { $_META_ = $context["META"]; } else { $_META_ = null; }
        echo $_META_;
        echo "
<title>";
        // line 8
        if (isset($context["UNREAD_NOTIFICATIONS_COUNT"])) { $_UNREAD_NOTIFICATIONS_COUNT_ = $context["UNREAD_NOTIFICATIONS_COUNT"]; } else { $_UNREAD_NOTIFICATIONS_COUNT_ = null; }
        if ($_UNREAD_NOTIFICATIONS_COUNT_) {
            echo "(";
            if (isset($context["UNREAD_NOTIFICATIONS_COUNT"])) { $_UNREAD_NOTIFICATIONS_COUNT_ = $context["UNREAD_NOTIFICATIONS_COUNT"]; } else { $_UNREAD_NOTIFICATIONS_COUNT_ = null; }
            echo $_UNREAD_NOTIFICATIONS_COUNT_;
            echo ") ";
        }
        if (isset($context["S_VIEWTOPIC"])) { $_S_VIEWTOPIC_ = $context["S_VIEWTOPIC"]; } else { $_S_VIEWTOPIC_ = null; }
        if (isset($context["S_VIEWFORUM"])) { $_S_VIEWFORUM_ = $context["S_VIEWFORUM"]; } else { $_S_VIEWFORUM_ = null; }
        if (( !$_S_VIEWTOPIC_ &&  !$_S_VIEWFORUM_)) {
            if (isset($context["SITENAME"])) { $_SITENAME_ = $context["SITENAME"]; } else { $_SITENAME_ = null; }
            echo $_SITENAME_;
            echo " - ";
        }
        if (isset($context["S_IN_MCP"])) { $_S_IN_MCP_ = $context["S_IN_MCP"]; } else { $_S_IN_MCP_ = null; }
        if (isset($context["S_IN_UCP"])) { $_S_IN_UCP_ = $context["S_IN_UCP"]; } else { $_S_IN_UCP_ = null; }
        if ($_S_IN_MCP_) {
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo " - ";
        } elseif ($_S_IN_UCP_) {
            echo $this->env->getExtension('phpbb')->lang("UCP");
            echo " - ";
        }
        if (isset($context["PAGE_TITLE"])) { $_PAGE_TITLE_ = $context["PAGE_TITLE"]; } else { $_PAGE_TITLE_ = null; }
        echo $_PAGE_TITLE_;
        if (isset($context["S_VIEWTOPIC"])) { $_S_VIEWTOPIC_ = $context["S_VIEWTOPIC"]; } else { $_S_VIEWTOPIC_ = null; }
        if (isset($context["S_VIEWFORUM"])) { $_S_VIEWFORUM_ = $context["S_VIEWFORUM"]; } else { $_S_VIEWFORUM_ = null; }
        if (($_S_VIEWTOPIC_ || $_S_VIEWFORUM_)) {
            echo " - ";
            if (isset($context["SITENAME"])) { $_SITENAME_ = $context["SITENAME"]; } else { $_SITENAME_ = null; }
            echo $_SITENAME_;
        }
        echo "</title>

";
        // line 10
        $location = "_style_config.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("_style_config.html", "overall_header.html", 10)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 11
        echo "
";
        // line 12
        if (isset($context["S_ENABLE_FEEDS"])) { $_S_ENABLE_FEEDS_ = $context["S_ENABLE_FEEDS"]; } else { $_S_ENABLE_FEEDS_ = null; }
        if ($_S_ENABLE_FEEDS_) {
            // line 13
            echo "\t";
            if (isset($context["S_ENABLE_FEEDS_OVERALL"])) { $_S_ENABLE_FEEDS_OVERALL_ = $context["S_ENABLE_FEEDS_OVERALL"]; } else { $_S_ENABLE_FEEDS_OVERALL_ = null; }
            if ($_S_ENABLE_FEEDS_OVERALL_) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                if (isset($context["SITENAME"])) { $_SITENAME_ = $context["SITENAME"]; } else { $_SITENAME_ = null; }
                echo $_SITENAME_;
                echo "\" href=\"";
                if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                echo $_U_FEED_;
                echo "\">";
            }
            // line 14
            echo "\t";
            if (isset($context["S_ENABLE_FEEDS_NEWS"])) { $_S_ENABLE_FEEDS_NEWS_ = $context["S_ENABLE_FEEDS_NEWS"]; } else { $_S_ENABLE_FEEDS_NEWS_ = null; }
            if ($_S_ENABLE_FEEDS_NEWS_) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_NEWS");
                echo "\" href=\"";
                if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                echo $_U_FEED_;
                echo "?mode=news\">";
            }
            // line 15
            echo "\t";
            if (isset($context["S_ENABLE_FEEDS_FORUMS"])) { $_S_ENABLE_FEEDS_FORUMS_ = $context["S_ENABLE_FEEDS_FORUMS"]; } else { $_S_ENABLE_FEEDS_FORUMS_ = null; }
            if ($_S_ENABLE_FEEDS_FORUMS_) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
                echo "\" href=\"";
                if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                echo $_U_FEED_;
                echo "?mode=forums\">";
            }
            // line 16
            echo "\t";
            if (isset($context["S_ENABLE_FEEDS_TOPICS"])) { $_S_ENABLE_FEEDS_TOPICS_ = $context["S_ENABLE_FEEDS_TOPICS"]; } else { $_S_ENABLE_FEEDS_TOPICS_ = null; }
            if ($_S_ENABLE_FEEDS_TOPICS_) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                echo $_U_FEED_;
                echo "?mode=topics\">";
            }
            // line 17
            echo "\t";
            if (isset($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"])) { $_S_ENABLE_FEEDS_TOPICS_ACTIVE_ = $context["S_ENABLE_FEEDS_TOPICS_ACTIVE"]; } else { $_S_ENABLE_FEEDS_TOPICS_ACTIVE_ = null; }
            if ($_S_ENABLE_FEEDS_TOPICS_ACTIVE_) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                echo $_U_FEED_;
                echo "?mode=topics_active\">";
            }
            // line 18
            echo "\t";
            if (isset($context["S_ENABLE_FEEDS_FORUM"])) { $_S_ENABLE_FEEDS_FORUM_ = $context["S_ENABLE_FEEDS_FORUM"]; } else { $_S_ENABLE_FEEDS_FORUM_ = null; }
            if (isset($context["S_FORUM_ID"])) { $_S_FORUM_ID_ = $context["S_FORUM_ID"]; } else { $_S_FORUM_ID_ = null; }
            if (($_S_ENABLE_FEEDS_FORUM_ && $_S_FORUM_ID_)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo " - ";
                if (isset($context["FORUM_NAME"])) { $_FORUM_NAME_ = $context["FORUM_NAME"]; } else { $_FORUM_NAME_ = null; }
                echo $_FORUM_NAME_;
                echo "\" href=\"";
                if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                echo $_U_FEED_;
                echo "?f=";
                if (isset($context["S_FORUM_ID"])) { $_S_FORUM_ID_ = $context["S_FORUM_ID"]; } else { $_S_FORUM_ID_ = null; }
                echo $_S_FORUM_ID_;
                echo "\">";
            }
            // line 19
            echo "\t";
            if (isset($context["S_ENABLE_FEEDS_TOPIC"])) { $_S_ENABLE_FEEDS_TOPIC_ = $context["S_ENABLE_FEEDS_TOPIC"]; } else { $_S_ENABLE_FEEDS_TOPIC_ = null; }
            if (isset($context["S_TOPIC_ID"])) { $_S_TOPIC_ID_ = $context["S_TOPIC_ID"]; } else { $_S_TOPIC_ID_ = null; }
            if (($_S_ENABLE_FEEDS_TOPIC_ && $_S_TOPIC_ID_)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " - ";
                if (isset($context["TOPIC_TITLE"])) { $_TOPIC_TITLE_ = $context["TOPIC_TITLE"]; } else { $_TOPIC_TITLE_ = null; }
                echo $_TOPIC_TITLE_;
                echo "\" href=\"";
                if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                echo $_U_FEED_;
                echo "?f=";
                if (isset($context["S_FORUM_ID"])) { $_S_FORUM_ID_ = $context["S_FORUM_ID"]; } else { $_S_FORUM_ID_ = null; }
                echo $_S_FORUM_ID_;
                echo "&amp;t=";
                if (isset($context["S_TOPIC_ID"])) { $_S_TOPIC_ID_ = $context["S_TOPIC_ID"]; } else { $_S_TOPIC_ID_ = null; }
                echo $_S_TOPIC_ID_;
                echo "\">";
            }
            // line 20
            echo "\t";
            if (isset($context["overall_header_feeds"])) { $_overall_header_feeds_ = $context["overall_header_feeds"]; } else { $_overall_header_feeds_ = null; }
        }
        // line 22
        echo "
";
        // line 23
        if (isset($context["U_CANONICAL"])) { $_U_CANONICAL_ = $context["U_CANONICAL"]; } else { $_U_CANONICAL_ = null; }
        if ($_U_CANONICAL_) {
            // line 24
            echo "\t<link rel=\"canonical\" href=\"";
            if (isset($context["U_CANONICAL"])) { $_U_CANONICAL_ = $context["U_CANONICAL"]; } else { $_U_CANONICAL_ = null; }
            echo $_U_CANONICAL_;
            echo "\">
";
        }
        // line 26
        echo "
";
        // line 27
        if (isset($context["S_ALLOW_CDN"])) { $_S_ALLOW_CDN_ = $context["S_ALLOW_CDN"]; } else { $_S_ALLOW_CDN_ = null; }
        if ($_S_ALLOW_CDN_) {
            // line 28
            echo "<script>
\tWebFontConfig = {
\t\tgoogle: {
\t\t\tfamilies: ['Open+Sans:600:cyrillic-ext,latin,greek-ext,greek,vietnamese,latin-ext,cyrillic']
\t\t}
\t};

\t(function(d) {
\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\twf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
\t\twf.async = true;
\t\ts.parentNode.insertBefore(wf, s);
\t})(document);
</script>
\t<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\" rel=\"stylesheet\">
";
        } else {
            // line 44
            echo "\t<link href=\"";
            if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
            echo $_T_THEME_PATH_;
            echo "/fonts/font-awesome-4.5.0/css/font-awesome.min.css\" rel=\"stylesheet\">
";
        }
        // line 46
        echo "<link href=\"";
        if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
        echo $_T_THEME_PATH_;
        echo "/fonts/glyphicons-pro-1.9.2/css/glyphicons.css\" rel=\"stylesheet\">

<link href=\"";
        // line 48
        if (isset($context["T_STYLESHEET_LINK"])) { $_T_STYLESHEET_LINK_ = $context["T_STYLESHEET_LINK"]; } else { $_T_STYLESHEET_LINK_ = null; }
        echo $_T_STYLESHEET_LINK_;
        echo "\" rel=\"stylesheet\">

";
        // line 50
        if (isset($context["S_CONTENT_DIRECTION"])) { $_S_CONTENT_DIRECTION_ = $context["S_CONTENT_DIRECTION"]; } else { $_S_CONTENT_DIRECTION_ = null; }
        if (($_S_CONTENT_DIRECTION_ == "rtl")) {
            // line 51
            echo "\t<link href=\"";
            if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
            echo $_T_THEME_PATH_;
            echo "/bidi.css?assets_version=";
            if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
            echo $_T_ASSETS_VERSION_;
            echo "\" rel=\"stylesheet\">
";
        }
        // line 53
        echo "
";
        // line 54
        if (isset($context["S_PLUPLOAD"])) { $_S_PLUPLOAD_ = $context["S_PLUPLOAD"]; } else { $_S_PLUPLOAD_ = null; }
        if ($_S_PLUPLOAD_) {
            // line 55
            echo "\t<link href=\"";
            if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
            echo $_T_THEME_PATH_;
            echo "/plupload.css?assets_version=";
            if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
            echo $_T_ASSETS_VERSION_;
            echo "\" rel=\"stylesheet\">
";
        }
        // line 57
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 59
        if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
        echo $_T_THEME_PATH_;
        echo "/tweaks.css?assets_version=";
        if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
        echo $_T_ASSETS_VERSION_;
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 62
        if (isset($context["overall_header_head_append"])) { $_overall_header_head_append_ = $context["overall_header_head_append"]; } else { $_overall_header_head_append_ = null; }
        // line 63
        echo "
";
        // line 64
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        echo $this->getAttribute($_definition_, "STYLESHEETS", array());
        echo "

";
        // line 66
        if (isset($context["overall_header_stylesheets_after"])) { $_overall_header_stylesheets_after_ = $context["overall_header_stylesheets_after"]; } else { $_overall_header_stylesheets_after_ = null; }
        // line 67
        echo "
</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 69
        if (isset($context["SCRIPT_NAME"])) { $_SCRIPT_NAME_ = $context["SCRIPT_NAME"]; } else { $_SCRIPT_NAME_ = null; }
        echo $_SCRIPT_NAME_;
        echo " ";
        if (isset($context["S_CONTENT_DIRECTION"])) { $_S_CONTENT_DIRECTION_ = $context["S_CONTENT_DIRECTION"]; } else { $_S_CONTENT_DIRECTION_ = null; }
        echo $_S_CONTENT_DIRECTION_;
        echo " ";
        if (isset($context["BODY_CLASS"])) { $_BODY_CLASS_ = $context["BODY_CLASS"]; } else { $_BODY_CLASS_ = null; }
        echo $_BODY_CLASS_;
        echo "\" data-online-text=\"";
        echo addslashes($this->env->getExtension('phpbb')->lang("ONLINE"));
        echo "\">
<div id=\"body-wrapper\">

";
        // line 72
        if (isset($context["overall_header_body_before"])) { $_overall_header_body_before_ = $context["overall_header_body_before"]; } else { $_overall_header_body_before_ = null; }
        // line 73
        echo "
";
        // line 74
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        if (($this->getAttribute($_definition_, "WRAP_HEADER", array()) == 1)) {
            // line 75
            echo "<div id=\"wrap\" class=\"page-width\">
";
        }
        // line 77
        echo "\t<a id=\"top\" class=\"anchor\" accesskey=\"t\"></a>
\t<div id=\"page-header\" class=\"page-width\">
\t\t<div class=\"headerbar\" role=\"banner\">
\t\t\t<div class=\"inner\">

\t\t\t<div id=\"site-description\">
\t\t\t\t<a id=\"logo\" class=\"logo\" href=\"";
        // line 83
        if (isset($context["U_SITE_HOME"])) { $_U_SITE_HOME_ = $context["U_SITE_HOME"]; } else { $_U_SITE_HOME_ = null; }
        if ($_U_SITE_HOME_) {
            if (isset($context["U_SITE_HOME"])) { $_U_SITE_HOME_ = $context["U_SITE_HOME"]; } else { $_U_SITE_HOME_ = null; }
            echo $_U_SITE_HOME_;
        } else {
            if (isset($context["U_INDEX"])) { $_U_INDEX_ = $context["U_INDEX"]; } else { $_U_INDEX_ = null; }
            echo $_U_INDEX_;
        }
        echo "\" title=\"";
        if (isset($context["U_SITE_HOME"])) { $_U_SITE_HOME_ = $context["U_SITE_HOME"]; } else { $_U_SITE_HOME_ = null; }
        if ($_U_SITE_HOME_) {
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
        } else {
            echo $this->env->getExtension('phpbb')->lang("INDEX");
        }
        echo "\"><img src=\"";
        if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
        echo $_T_THEME_PATH_;
        echo "/images/logo.png\" data-src-hd=\"";
        if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
        echo $_T_THEME_PATH_;
        echo "/images/logo_hd.png\" /></a>
\t\t\t\t<p class=\"sitename\">";
        // line 84
        if (isset($context["SITENAME"])) { $_SITENAME_ = $context["SITENAME"]; } else { $_SITENAME_ = null; }
        echo $_SITENAME_;
        echo "</p>
\t\t\t\t<p>";
        // line 85
        if (isset($context["SITE_DESCRIPTION"])) { $_SITE_DESCRIPTION_ = $context["SITE_DESCRIPTION"]; } else { $_SITE_DESCRIPTION_ = null; }
        echo $_SITE_DESCRIPTION_;
        echo "</p>
\t\t\t\t<p class=\"skiplink\"><a href=\"#start_here\">";
        // line 86
        echo $this->env->getExtension('phpbb')->lang("SKIP");
        echo "</a></p>
\t\t\t</div>

\t\t\t";
        // line 89
        if (isset($context["overall_header_searchbox_before"])) { $_overall_header_searchbox_before_ = $context["overall_header_searchbox_before"]; } else { $_overall_header_searchbox_before_ = null; }
        // line 90
        echo "\t\t\t";
        if (isset($context["S_DISPLAY_SEARCH"])) { $_S_DISPLAY_SEARCH_ = $context["S_DISPLAY_SEARCH"]; } else { $_S_DISPLAY_SEARCH_ = null; }
        if (isset($context["S_IN_SEARCH"])) { $_S_IN_SEARCH_ = $context["S_IN_SEARCH"]; } else { $_S_IN_SEARCH_ = null; }
        if (($_S_DISPLAY_SEARCH_ &&  !$_S_IN_SEARCH_)) {
            // line 91
            echo "\t\t\t";
            if (isset($context["SEARCH_BOX"])) { $_SEARCH_BOX_ = $context["SEARCH_BOX"]; } else { $_SEARCH_BOX_ = null; }
            ob_start();
            // line 92
            echo "\t\t\t<div id=\"search-box\" class=\"search-box search-header\" role=\"search\">
\t\t\t\t<form action=\"";
            // line 93
            if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
            echo $_U_SEARCH_;
            echo "\" method=\"get\" id=\"search\">
\t\t\t\t<fieldset>
\t\t\t\t\t<input name=\"keywords\" id=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
            // line 95
            echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
            echo "\" class=\"inputbox search tiny\" size=\"20\" value=\"";
            if (isset($context["SEARCH_WORDS"])) { $_SEARCH_WORDS_ = $context["SEARCH_WORDS"]; } else { $_SEARCH_WORDS_ = null; }
            echo $_SEARCH_WORDS_;
            echo "\" placeholder=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_MINI");
            echo "\" />
\t\t\t\t\t<button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
            // line 96
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</button>
\t\t\t\t\t<a href=\"";
            // line 97
            if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
            echo $_U_SEARCH_;
            echo "\" class=\"button icon-button search-adv-icon\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "</a>
\t\t\t\t\t";
            // line 98
            if (isset($context["S_SEARCH_HIDDEN_FIELDS"])) { $_S_SEARCH_HIDDEN_FIELDS_ = $context["S_SEARCH_HIDDEN_FIELDS"]; } else { $_S_SEARCH_HIDDEN_FIELDS_ = null; }
            echo $_S_SEARCH_HIDDEN_FIELDS_;
            echo "
\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t";
            $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
            $context['definition']->set('SEARCH_BOX', $value);
            // line 103
            echo "\t\t\t";
            if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
            if (($this->getAttribute($_definition_, "SEARCH_IN_NAVBAR", array()) == 0)) {
                if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                echo $this->getAttribute($_definition_, "SEARCH_BOX", array());
            }
            // line 104
            echo "\t\t\t";
        }
        // line 105
        echo "
\t\t\t</div>
\t\t</div>

";
        // line 109
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        if (($this->getAttribute($_definition_, "WRAP_HEADER", array()) == 2)) {
            // line 110
            echo "</div>
<div id=\"wrap\" class=\"page-width\">
<div>
";
        }
        // line 114
        echo "
\t\t";
        // line 115
        if (isset($context["overall_header_navbar_before"])) { $_overall_header_navbar_before_ = $context["overall_header_navbar_before"]; } else { $_overall_header_navbar_before_ = null; }
        // line 116
        echo "\t\t";
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header.html", "overall_header.html", 116)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 117
        echo "\t</div>

";
        // line 119
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        if (($this->getAttribute($_definition_, "WRAP_HEADER", array()) == 0)) {
            // line 120
            echo "<div id=\"wrap\" class=\"page-width\">
";
        }
        // line 122
        echo "
\t";
        // line 123
        if (isset($context["overall_header_page_body_before"])) { $_overall_header_page_body_before_ = $context["overall_header_page_body_before"]; } else { $_overall_header_page_body_before_ = null; }
        // line 124
        echo "
\t<a id=\"start_here\" class=\"anchor\"></a>
\t<div id=\"page-body\" role=\"main\">
\t\t";
        // line 127
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        echo $this->getAttribute($_definition_, "BREADCRUMBS", array());
        echo "
\t\t";
        // line 128
        if (isset($context["S_BOARD_DISABLED"])) { $_S_BOARD_DISABLED_ = $context["S_BOARD_DISABLED"]; } else { $_S_BOARD_DISABLED_ = null; }
        if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
        if (isset($context["U_MCP"])) { $_U_MCP_ = $context["U_MCP"]; } else { $_U_MCP_ = null; }
        if (isset($context["U_ACP"])) { $_U_ACP_ = $context["U_ACP"]; } else { $_U_ACP_ = null; }
        if ((($_S_BOARD_DISABLED_ && $_S_USER_LOGGED_IN_) && ($_U_MCP_ || $_U_ACP_))) {
            // line 129
            echo "\t\t<div id=\"information\" class=\"rules\">
\t\t\t<div class=\"inner\">
\t\t\t\t<strong>";
            // line 131
            echo $this->env->getExtension('phpbb')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            echo $this->env->getExtension('phpbb')->lang("BOARD_DISABLED");
            echo "
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 135
        echo "
\t\t";
        // line 136
        if (isset($context["overall_header_content_before"])) { $_overall_header_content_before_ = $context["overall_header_content_before"]; } else { $_overall_header_content_before_ = null; }
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  544 => 136,  541 => 135,  531 => 131,  527 => 129,  521 => 128,  516 => 127,  511 => 124,  509 => 123,  506 => 122,  502 => 120,  499 => 119,  495 => 117,  482 => 116,  480 => 115,  477 => 114,  471 => 110,  468 => 109,  462 => 105,  459 => 104,  452 => 103,  442 => 98,  433 => 97,  427 => 96,  418 => 95,  412 => 93,  409 => 92,  405 => 91,  400 => 90,  398 => 89,  392 => 86,  387 => 85,  382 => 84,  358 => 83,  350 => 77,  346 => 75,  343 => 74,  340 => 73,  338 => 72,  323 => 69,  319 => 67,  317 => 66,  311 => 64,  308 => 63,  306 => 62,  296 => 59,  292 => 57,  282 => 55,  279 => 54,  276 => 53,  266 => 51,  263 => 50,  257 => 48,  250 => 46,  243 => 44,  225 => 28,  222 => 27,  219 => 26,  212 => 24,  209 => 23,  206 => 22,  202 => 20,  179 => 19,  159 => 18,  146 => 17,  133 => 16,  120 => 15,  107 => 14,  93 => 13,  90 => 12,  87 => 11,  75 => 10,  39 => 8,  34 => 7,  22 => 2,  19 => 1,);
    }
}
