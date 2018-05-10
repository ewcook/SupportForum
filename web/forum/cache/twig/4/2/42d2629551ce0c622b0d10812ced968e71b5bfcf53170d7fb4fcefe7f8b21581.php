<?php

/* navbar_header.html */
class __TwigTemplate_42d2629551ce0c622b0d10812ced968e71b5bfcf53170d7fb4fcefe7f8b21581 extends Twig_Template
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
        ob_start();
        // line 2
        echo "\t";
        if (isset($context["navbar_header_quick_links_before"])) { $_navbar_header_quick_links_before_ = $context["navbar_header_quick_links_before"]; } else { $_navbar_header_quick_links_before_ = null; }
        // line 3
        echo "
\t";
        // line 4
        if (isset($context["S_DISPLAY_SEARCH"])) { $_S_DISPLAY_SEARCH_ = $context["S_DISPLAY_SEARCH"]; } else { $_S_DISPLAY_SEARCH_ = null; }
        if ($_S_DISPLAY_SEARCH_) {
            // line 5
            echo "\t\t<li class=\"separator\"></li>
\t\t";
            // line 6
            if (isset($context["S_REGISTERED_USER"])) { $_S_REGISTERED_USER_ = $context["S_REGISTERED_USER"]; } else { $_S_REGISTERED_USER_ = null; }
            if ($_S_REGISTERED_USER_) {
                // line 7
                echo "\t\t\t<li class=\"small-icon icon-search-self\"><a href=\"";
                if (isset($context["U_SEARCH_SELF"])) { $_U_SEARCH_SELF_ = $context["U_SEARCH_SELF"]; } else { $_U_SEARCH_SELF_ = null; }
                echo $_U_SEARCH_SELF_;
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_SELF");
                echo "</a></li>
\t\t";
            }
            // line 9
            echo "\t\t";
            if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
            if ($_S_USER_LOGGED_IN_) {
                // line 10
                echo "\t\t\t<li class=\"small-icon icon-search-new\"><a href=\"";
                if (isset($context["U_SEARCH_NEW"])) { $_U_SEARCH_NEW_ = $context["U_SEARCH_NEW"]; } else { $_U_SEARCH_NEW_ = null; }
                echo $_U_SEARCH_NEW_;
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                echo "</a></li>
\t\t";
            }
            // line 12
            echo "\t\t";
            if (isset($context["S_LOAD_UNREADS"])) { $_S_LOAD_UNREADS_ = $context["S_LOAD_UNREADS"]; } else { $_S_LOAD_UNREADS_ = null; }
            if ($_S_LOAD_UNREADS_) {
                // line 13
                echo "\t\t\t<li class=\"small-icon icon-search-unread\"><a href=\"";
                if (isset($context["U_SEARCH_UNREAD"])) { $_U_SEARCH_UNREAD_ = $context["U_SEARCH_UNREAD"]; } else { $_U_SEARCH_UNREAD_ = null; }
                echo $_U_SEARCH_UNREAD_;
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_UNREAD");
                echo "</a></li>
\t\t";
            }
            // line 15
            echo "\t\t<li class=\"small-icon icon-search-unanswered\"><a href=\"";
            if (isset($context["U_SEARCH_UNANSWERED"])) { $_U_SEARCH_UNANSWERED_ = $context["U_SEARCH_UNANSWERED"]; } else { $_U_SEARCH_UNANSWERED_ = null; }
            echo $_U_SEARCH_UNANSWERED_;
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t<li class=\"small-icon icon-search-active\"><a href=\"";
            // line 16
            if (isset($context["U_SEARCH_ACTIVE_TOPICS"])) { $_U_SEARCH_ACTIVE_TOPICS_ = $context["U_SEARCH_ACTIVE_TOPICS"]; } else { $_U_SEARCH_ACTIVE_TOPICS_ = null; }
            echo $_U_SEARCH_ACTIVE_TOPICS_;
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t<li class=\"separator\"></li>
\t\t<li class=\"small-icon icon-search\"><a href=\"";
            // line 18
            if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
            echo $_U_SEARCH_;
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</a></li>
\t";
        }
        $context["quick_links_first_block"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 21
        echo "
";
        // line 22
        ob_start();
        // line 23
        echo "\t";
        if (isset($context["navbar_header_quick_links_after"])) { $_navbar_header_quick_links_after_ = $context["navbar_header_quick_links_after"]; } else { $_navbar_header_quick_links_after_ = null; }
        $context["quick_links_last_block"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 25
        echo "
";
        // line 26
        ob_start();
        if (isset($context["quick_links_first_block"])) { $_quick_links_first_block_ = $context["quick_links_first_block"]; } else { $_quick_links_first_block_ = null; }
        echo trim($_quick_links_first_block_);
        if (isset($context["quick_links_last_block"])) { $_quick_links_last_block_ = $context["quick_links_last_block"]; } else { $_quick_links_last_block_ = null; }
        echo trim($_quick_links_last_block_);
        $context["quick_links_all"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
<div class=\"navbar tabbed not-static\" role=\"navigation\">
\t<div class=\"inner page-width\">
\t\t<div class=\"nav-tabs\" data-current-page=\"";
        // line 30
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        if ($this->getAttribute($_definition_, "NAV_SECTION", array())) {
            if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
            echo $this->getAttribute($_definition_, "NAV_SECTION", array());
        } else {
            if (isset($context["SCRIPT_NAME"])) { $_SCRIPT_NAME_ = $context["SCRIPT_NAME"]; } else { $_SCRIPT_NAME_ = null; }
            echo $_SCRIPT_NAME_;
        }
        echo "\">
\t\t\t<ul class=\"leftside\">
\t\t\t\t<li id=\"quick-links\" class=\"tab responsive-menu dropdown-container";
        // line 32
        if (isset($context["quick_links_all"])) { $_quick_links_all_ = $context["quick_links_all"]; } else { $_quick_links_all_ = null; }
        if (($_quick_links_all_ == "")) {
            echo " empty";
        }
        echo "\">
\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-trigger\">";
        // line 33
        echo $this->env->getExtension('phpbb')->lang("QUICK_LINKS");
        echo "</a>
\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t";
        // line 37
        if (isset($context["quick_links_first_block"])) { $_quick_links_first_block_ = $context["quick_links_first_block"]; } else { $_quick_links_first_block_ = null; }
        echo $_quick_links_first_block_;
        echo "
\t\t\t\t\t\t\t";
        // line 38
        if (isset($context["quick_links_last_block"])) { $_quick_links_last_block_ = $context["quick_links_last_block"]; } else { $_quick_links_last_block_ = null; }
        if (trim($_quick_links_last_block_)) {
            // line 39
            echo "\t\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t\t";
            // line 40
            if (isset($context["quick_links_last_block"])) { $_quick_links_last_block_ = $context["quick_links_last_block"]; } else { $_quick_links_last_block_ = null; }
            echo $_quick_links_last_block_;
            echo "
\t\t\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
        // line 45
        if (isset($context["navtabs_left_before"])) { $_navtabs_left_before_ = $context["navtabs_left_before"]; } else { $_navtabs_left_before_ = null; }
        // line 46
        echo "\t\t\t\t";
        if (isset($context["U_SITE_HOME"])) { $_U_SITE_HOME_ = $context["U_SITE_HOME"]; } else { $_U_SITE_HOME_ = null; }
        if ($_U_SITE_HOME_) {
            // line 47
            echo "\t\t\t\t\t<li class=\"tab home\" data-responsive-class=\"small-icon icon-home\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 48
            if (isset($context["U_SITE_HOME"])) { $_U_SITE_HOME_ = $context["U_SITE_HOME"]; } else { $_U_SITE_HOME_ = null; }
            echo $_U_SITE_HOME_;
            echo "\" data-navbar-reference=\"home\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t<li class=\"tab forums selected\" data-responsive-class=\"small-icon icon-forums\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 52
        if (isset($context["U_INDEX"])) { $_U_INDEX_ = $context["U_INDEX"]; } else { $_U_INDEX_ = null; }
        echo $_U_INDEX_;
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("FORUMS");
        echo "</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 54
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if (isset($context["S_DISPLAY_MEMBERLIST"])) { $_S_DISPLAY_MEMBERLIST_ = $context["S_DISPLAY_MEMBERLIST"]; } else { $_S_DISPLAY_MEMBERLIST_ = null; }
        if (isset($context["U_TEAM"])) { $_U_TEAM_ = $context["U_TEAM"]; } else { $_U_TEAM_ = null; }
        if (( !$_S_IS_BOT_ && ($_S_DISPLAY_MEMBERLIST_ || $_U_TEAM_))) {
            // line 55
            echo "\t\t\t\t\t<li class=\"tab members dropdown-container\" data-select-match=\"member\" data-responsive-class=\"small-icon icon-members\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-trigger\" href=\"";
            // line 56
            if (isset($context["U_MEMBERLIST"])) { $_U_MEMBERLIST_ = $context["U_MEMBERLIST"]; } else { $_U_MEMBERLIST_ = null; }
            echo $_U_MEMBERLIST_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
            echo "</a>
\t\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t\t";
            // line 60
            if (isset($context["S_DISPLAY_MEMBERLIST"])) { $_S_DISPLAY_MEMBERLIST_ = $context["S_DISPLAY_MEMBERLIST"]; } else { $_S_DISPLAY_MEMBERLIST_ = null; }
            if ($_S_DISPLAY_MEMBERLIST_) {
                echo "<li class=\"small-icon icon-members\"><a href=\"";
                if (isset($context["U_MEMBERLIST"])) { $_U_MEMBERLIST_ = $context["U_MEMBERLIST"]; } else { $_U_MEMBERLIST_ = null; }
                echo $_U_MEMBERLIST_;
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 61
            echo "\t\t\t\t\t\t\t\t";
            if (isset($context["U_TEAM"])) { $_U_TEAM_ = $context["U_TEAM"]; } else { $_U_TEAM_ = null; }
            if ($_U_TEAM_) {
                echo "<li class=\"small-icon icon-team\"><a href=\"";
                if (isset($context["U_TEAM"])) { $_U_TEAM_ = $context["U_TEAM"]; } else { $_U_TEAM_ = null; }
                echo $_U_TEAM_;
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 62
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t";
        if (isset($context["navtabs_left_after"])) { $_navtabs_left_after_ = $context["navtabs_left_after"]; } else { $_navtabs_left_after_ = null; }
        // line 67
        echo "\t\t\t</ul>
\t\t\t<ul class=\"rightside\">
\t\t\t\t";
        // line 69
        if (isset($context["overall_header_navigation_prepend"])) { $_overall_header_navigation_prepend_ = $context["overall_header_navigation_prepend"]; } else { $_overall_header_navigation_prepend_ = null; }
        // line 70
        echo "\t\t\t\t<li class=\"tab faq\" data-select-match=\"faq\" data-responsive-class=\"small-icon icon-faq\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 71
        if (isset($context["U_FAQ"])) { $_U_FAQ_ = $context["U_FAQ"]; } else { $_U_FAQ_ = null; }
        echo $_U_FAQ_;
        echo "\" rel=\"help\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">";
        echo $this->env->getExtension('phpbb')->lang("FAQ");
        echo "</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 73
        if (isset($context["overall_header_navigation_append"])) { $_overall_header_navigation_append_ = $context["overall_header_navigation_append"]; } else { $_overall_header_navigation_append_ = null; }
        // line 74
        echo "\t\t\t\t";
        if (isset($context["U_ACP"])) { $_U_ACP_ = $context["U_ACP"]; } else { $_U_ACP_ = null; }
        if ($_U_ACP_) {
            echo "<li class=\"tab acp\" data-last-responsive=\"true\" data-responsive-class=\"small-icon icon-acp\"><a class=\"nav-link\" href=\"";
            if (isset($context["U_ACP"])) { $_U_ACP_ = $context["U_ACP"]; } else { $_U_ACP_ = null; }
            echo $_U_ACP_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("ACP_SHORT");
            echo "</a></li>";
        }
        // line 75
        echo "\t\t\t\t";
        if (isset($context["U_MCP"])) { $_U_MCP_ = $context["U_MCP"]; } else { $_U_MCP_ = null; }
        if ($_U_MCP_) {
            // line 76
            echo "\t\t\t\t\t<li class=\"tab mcp\" data-last-responsive=\"true\" data-select-match=\"mcp\" data-responsive-class=\"small-icon icon-mcp\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 77
            if (isset($context["U_MCP"])) { $_U_MCP_ = $context["U_MCP"]; } else { $_U_MCP_ = null; }
            echo $_U_MCP_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("MCP_SHORT");
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t";
        if (isset($context["S_REGISTERED_USER"])) { $_S_REGISTERED_USER_ = $context["S_REGISTERED_USER"]; } else { $_S_REGISTERED_USER_ = null; }
        if ($_S_REGISTERED_USER_) {
            // line 81
            echo "\t\t\t\t\t<li id=\"username_logged_in\" class=\"tab account dropdown-container\" data-skip-responsive=\"true\" data-select-match=\"ucp\">
\t\t\t\t\t\t<a href=\"";
            // line 82
            if (isset($context["U_PROFILE"])) { $_U_PROFILE_ = $context["U_PROFILE"]; } else { $_U_PROFILE_ = null; }
            echo $_U_PROFILE_;
            echo "\" class=\"nav-link dropdown-trigger\">";
            if (isset($context["CURRENT_USERNAME_SIMPLE"])) { $_CURRENT_USERNAME_SIMPLE_ = $context["CURRENT_USERNAME_SIMPLE"]; } else { $_CURRENT_USERNAME_SIMPLE_ = null; }
            echo $_CURRENT_USERNAME_SIMPLE_;
            echo "</a>
\t\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t\t";
            // line 86
            if (isset($context["U_RESTORE_PERMISSIONS"])) { $_U_RESTORE_PERMISSIONS_ = $context["U_RESTORE_PERMISSIONS"]; } else { $_U_RESTORE_PERMISSIONS_ = null; }
            if ($_U_RESTORE_PERMISSIONS_) {
                echo "<li class=\"small-icon icon-restore-permissions\"><a href=\"";
                if (isset($context["U_RESTORE_PERMISSIONS"])) { $_U_RESTORE_PERMISSIONS_ = $context["U_RESTORE_PERMISSIONS"]; } else { $_U_RESTORE_PERMISSIONS_ = null; }
                echo $_U_RESTORE_PERMISSIONS_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>";
            }
            // line 87
            echo "\t\t\t
\t\t\t\t\t\t\t\t";
            // line 88
            if (isset($context["navbar_header_profile_list_before"])) { $_navbar_header_profile_list_before_ = $context["navbar_header_profile_list_before"]; } else { $_navbar_header_profile_list_before_ = null; }
            // line 89
            echo "\t\t\t
\t\t\t\t\t\t\t\t<li class=\"small-icon icon-ucp\"><a href=\"";
            // line 90
            if (isset($context["U_PROFILE"])) { $_U_PROFILE_ = $context["U_PROFILE"]; } else { $_U_PROFILE_ = null; }
            echo $_U_PROFILE_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"small-icon icon-profile\"><a href=\"";
            // line 91
            if (isset($context["U_USER_PROFILE"])) { $_U_USER_PROFILE_ = $context["U_USER_PROFILE"]; } else { $_U_USER_PROFILE_ = null; }
            echo $_U_USER_PROFILE_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "</a></li>
\t\t\t
\t\t\t\t\t\t\t\t";
            // line 93
            if (isset($context["navbar_header_profile_list_after"])) { $_navbar_header_profile_list_after_ = $context["navbar_header_profile_list_after"]; } else { $_navbar_header_profile_list_after_ = null; }
            // line 94
            echo "\t\t\t
\t\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t\t<li class=\"small-icon icon-logout\"><a href=\"";
            // line 96
            if (isset($context["U_LOGIN_LOGOUT"])) { $_U_LOGIN_LOGOUT_ = $context["U_LOGIN_LOGOUT"]; } else { $_U_LOGIN_LOGOUT_ = null; }
            echo $_U_LOGIN_LOGOUT_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t";
            // line 100
            if (isset($context["S_DISPLAY_PM"])) { $_S_DISPLAY_PM_ = $context["S_DISPLAY_PM"]; } else { $_S_DISPLAY_PM_ = null; }
            if ($_S_DISPLAY_PM_) {
                // line 101
                echo "\t\t\t\t\t\t<li class=\"tab pm";
                if (isset($context["PRIVATE_MESSAGE_COUNT"])) { $_PRIVATE_MESSAGE_COUNT_ = $context["PRIVATE_MESSAGE_COUNT"]; } else { $_PRIVATE_MESSAGE_COUNT_ = null; }
                if (($_PRIVATE_MESSAGE_COUNT_ > 0)) {
                    echo " non-zero";
                }
                echo "\" data-skip-responsive=\"true\" data-select-match=\"pm\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 102
                if (isset($context["U_PRIVATEMSGS"])) { $_U_PRIVATEMSGS_ = $context["U_PRIVATEMSGS"]; } else { $_U_PRIVATEMSGS_ = null; }
                echo $_U_PRIVATEMSGS_;
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("PRIVATE_MESSAGES");
                echo "</a>
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<span class=\"counter\">";
                // line 104
                if (isset($context["PRIVATE_MESSAGE_COUNT"])) { $_PRIVATE_MESSAGE_COUNT_ = $context["PRIVATE_MESSAGE_COUNT"]; } else { $_PRIVATE_MESSAGE_COUNT_ = null; }
                echo $_PRIVATE_MESSAGE_COUNT_;
                echo "</span>
\t\t\t\t\t\t\t\t<span class=\"arrow\"></span>
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 109
            echo "\t\t\t\t\t";
            if (isset($context["S_NOTIFICATIONS_DISPLAY"])) { $_S_NOTIFICATIONS_DISPLAY_ = $context["S_NOTIFICATIONS_DISPLAY"]; } else { $_S_NOTIFICATIONS_DISPLAY_ = null; }
            if ($_S_NOTIFICATIONS_DISPLAY_) {
                // line 110
                echo "\t\t\t\t\t\t<li class=\"tab notifications dropdown-container";
                if (isset($context["NOTIFICATIONS_COUNT"])) { $_NOTIFICATIONS_COUNT_ = $context["NOTIFICATIONS_COUNT"]; } else { $_NOTIFICATIONS_COUNT_ = null; }
                if (($_NOTIFICATIONS_COUNT_ > 0)) {
                    echo " non-zero";
                }
                echo "\" data-skip-responsive=\"true\" data-select-match=\"notifications\">
\t\t\t\t\t\t\t<a href=\"";
                // line 111
                if (isset($context["U_VIEW_ALL_NOTIFICATIONS"])) { $_U_VIEW_ALL_NOTIFICATIONS_ = $context["U_VIEW_ALL_NOTIFICATIONS"]; } else { $_U_VIEW_ALL_NOTIFICATIONS_ = null; }
                echo $_U_VIEW_ALL_NOTIFICATIONS_;
                echo "\" id=\"notification_list_button\" class=\"nav-link dropdown-trigger\">";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo "</a>
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<span class=\"counter\">";
                // line 113
                if (isset($context["NOTIFICATIONS_COUNT"])) { $_NOTIFICATIONS_COUNT_ = $context["NOTIFICATIONS_COUNT"]; } else { $_NOTIFICATIONS_COUNT_ = null; }
                echo $_NOTIFICATIONS_COUNT_;
                echo "</span>
\t\t\t\t\t\t\t\t<span class=\"arrow\"></span>
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t";
                // line 116
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "navbar_header.html", 116)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 117
                echo "\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 119
            echo "\t\t\t\t";
        }
        // line 120
        echo "\t\t\t\t";
        if (isset($context["S_REGISTERED_USER"])) { $_S_REGISTERED_USER_ = $context["S_REGISTERED_USER"]; } else { $_S_REGISTERED_USER_ = null; }
        if ($_S_REGISTERED_USER_) {
            // line 121
            echo "\t\t\t\t\t<li class=\"tab logout\"  data-skip-responsive=\"true\"><a class=\"nav-link\" href=\"";
            if (isset($context["U_LOGIN_LOGOUT"])) { $_U_LOGIN_LOGOUT_ = $context["U_LOGIN_LOGOUT"]; } else { $_U_LOGIN_LOGOUT_ = null; }
            echo $_U_LOGIN_LOGOUT_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t";
        } else {
            // line 123
            echo "\t\t\t\t\t<li class=\"tab login\"  data-skip-responsive=\"true\" data-select-match=\"login\"><a class=\"nav-link\" href=\"";
            if (isset($context["U_LOGIN_LOGOUT"])) { $_U_LOGIN_LOGOUT_ = $context["U_LOGIN_LOGOUT"]; } else { $_U_LOGIN_LOGOUT_ = null; }
            echo $_U_LOGIN_LOGOUT_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t";
            // line 124
            if (isset($context["S_REGISTER_ENABLED"])) { $_S_REGISTER_ENABLED_ = $context["S_REGISTER_ENABLED"]; } else { $_S_REGISTER_ENABLED_ = null; }
            if ($_S_REGISTER_ENABLED_) {
                // line 125
                echo "\t\t\t\t\t\t<li class=\"tab register\" data-skip-responsive=\"true\" data-select-match=\"register\"><a class=\"nav-link\" href=\"";
                if (isset($context["U_REGISTER"])) { $_U_REGISTER_ = $context["U_REGISTER"]; } else { $_U_REGISTER_ = null; }
                echo $_U_REGISTER_;
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 127
            echo "\t\t\t\t\t";
            if (isset($context["navbar_header_logged_out_content"])) { $_navbar_header_logged_out_content_ = $context["navbar_header_logged_out_content"]; } else { $_navbar_header_logged_out_content_ = null; }
            // line 128
            echo "\t\t\t\t";
        }
        // line 129
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</div>

<div class=\"navbar secondary";
        // line 134
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        if ((($this->getAttribute($_definition_, "SEARCH_IN_NAVBAR", array()) == 1) && $this->getAttribute($_definition_, "SEARCH_BOX", array()))) {
            echo " with-search";
        }
        echo "\">
\t<ul role=\"menubar\">
\t\t";
        // line 136
        ob_start();
        // line 137
        echo "\t\t";
        if (isset($context["secondary_navlinks_before"])) { $_secondary_navlinks_before_ = $context["secondary_navlinks_before"]; } else { $_secondary_navlinks_before_ = null; }
        // line 138
        echo "\t\t";
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        if (trim($this->getAttribute($_definition_, "NAVLINKS", array()))) {
            // line 139
            echo "\t\t\t";
            if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
            echo $this->getAttribute($_definition_, "NAVLINKS", array());
            echo "
\t\t";
        }
        // line 141
        echo "\t\t";
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        if (( !trim($this->getAttribute($_definition_, "NAVLINKS", array())) || ($this->getAttribute($_definition_, "NAVLINKS_SHOW_DEFAULT", array()) == 1))) {
            // line 142
            echo "\t\t\t";
            if (isset($context["U_WATCH_FORUM_LINK"])) { $_U_WATCH_FORUM_LINK_ = $context["U_WATCH_FORUM_LINK"]; } else { $_U_WATCH_FORUM_LINK_ = null; }
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if (($_U_WATCH_FORUM_LINK_ &&  !$_S_IS_BOT_)) {
                echo "<li class=\"small-icon icon-";
                if (isset($context["S_WATCHING_FORUM"])) { $_S_WATCHING_FORUM_ = $context["S_WATCHING_FORUM"]; } else { $_S_WATCHING_FORUM_ = null; }
                if ($_S_WATCHING_FORUM_) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-last-responsive=\"true\"><a href=\"";
                if (isset($context["U_WATCH_FORUM_LINK"])) { $_U_WATCH_FORUM_LINK_ = $context["U_WATCH_FORUM_LINK"]; } else { $_U_WATCH_FORUM_LINK_ = null; }
                echo $_U_WATCH_FORUM_LINK_;
                echo "\" title=\"";
                if (isset($context["S_WATCH_FORUM_TITLE"])) { $_S_WATCH_FORUM_TITLE_ = $context["S_WATCH_FORUM_TITLE"]; } else { $_S_WATCH_FORUM_TITLE_ = null; }
                echo $_S_WATCH_FORUM_TITLE_;
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
                if (isset($context["S_WATCHING_FORUM"])) { $_S_WATCHING_FORUM_ = $context["S_WATCHING_FORUM"]; } else { $_S_WATCHING_FORUM_ = null; }
                if ( !$_S_WATCHING_FORUM_) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-text=\"";
                if (isset($context["S_WATCH_FORUM_TOGGLE"])) { $_S_WATCH_FORUM_TOGGLE_ = $context["S_WATCH_FORUM_TOGGLE"]; } else { $_S_WATCH_FORUM_TOGGLE_ = null; }
                echo $_S_WATCH_FORUM_TOGGLE_;
                echo "\" data-toggle-url=\"";
                if (isset($context["U_WATCH_FORUM_TOGGLE"])) { $_U_WATCH_FORUM_TOGGLE_ = $context["U_WATCH_FORUM_TOGGLE"]; } else { $_U_WATCH_FORUM_TOGGLE_ = null; }
                echo $_U_WATCH_FORUM_TOGGLE_;
                echo "\">";
                if (isset($context["S_WATCH_FORUM_TITLE"])) { $_S_WATCH_FORUM_TITLE_ = $context["S_WATCH_FORUM_TITLE"]; } else { $_S_WATCH_FORUM_TITLE_ = null; }
                echo $_S_WATCH_FORUM_TITLE_;
                echo "</a></li>";
            }
            // line 143
            echo "\t\t";
        }
        // line 144
        echo "\t\t";
        if (isset($context["secondary_navlinks_after"])) { $_secondary_navlinks_after_ = $context["secondary_navlinks_after"]; } else { $_secondary_navlinks_after_ = null; }
        // line 145
        echo "\t\t";
        $context["secondary_links"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 146
        echo "\t\t";
        if (isset($context["secondary_links"])) { $_secondary_links_ = $context["secondary_links"]; } else { $_secondary_links_ = null; }
        if (trim($_secondary_links_)) {
            // line 147
            echo "\t\t\t";
            if (isset($context["secondary_links"])) { $_secondary_links_ = $context["secondary_links"]; } else { $_secondary_links_ = null; }
            echo $_secondary_links_;
            echo "
\t\t\t";
            // line 148
            if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
            if (isset($context["S_DISPLAY_SEARCH"])) { $_S_DISPLAY_SEARCH_ = $context["S_DISPLAY_SEARCH"]; } else { $_S_DISPLAY_SEARCH_ = null; }
            if (($this->getAttribute($_definition_, "NAVLINKS_SHOW_DEFAULT", array()) && $_S_DISPLAY_SEARCH_)) {
                // line 149
                echo "\t\t\t\t<li class=\"small-icon icon-search";
                if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                if ((($this->getAttribute($_definition_, "SEARCH_IN_NAVBAR", array()) == 1) && $this->getAttribute($_definition_, "SEARCH_BOX", array()))) {
                    echo " responsive-hide";
                }
                echo "\"><a href=\"";
                if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
                echo $_U_SEARCH_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "</a></li>
\t\t\t\t";
                // line 150
                if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
                if ($_S_USER_LOGGED_IN_) {
                    // line 151
                    echo "\t\t\t\t\t<li class=\"small-icon icon-new-posts\"><a href=\"";
                    if (isset($context["U_SEARCH_NEW"])) { $_U_SEARCH_NEW_ = $context["U_SEARCH_NEW"]; } else { $_U_SEARCH_NEW_ = null; }
                    echo $_U_SEARCH_NEW_;
                    echo "\" role=\"menuitem\">";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 153
                echo "\t\t\t";
            }
            // line 154
            echo "\t\t";
        } else {
            // line 155
            echo "\t\t\t";
            if (isset($context["S_DISPLAY_SEARCH"])) { $_S_DISPLAY_SEARCH_ = $context["S_DISPLAY_SEARCH"]; } else { $_S_DISPLAY_SEARCH_ = null; }
            if ($_S_DISPLAY_SEARCH_) {
                // line 156
                echo "\t\t\t\t<li class=\"small-icon icon-search";
                if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                if ((($this->getAttribute($_definition_, "SEARCH_IN_NAVBAR", array()) == 1) && $this->getAttribute($_definition_, "SEARCH_BOX", array()))) {
                    echo " responsive-hide";
                }
                echo "\"><a href=\"";
                if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
                echo $_U_SEARCH_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "</a></li>
\t\t\t\t";
                // line 157
                if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
                if ($_S_USER_LOGGED_IN_) {
                    // line 158
                    echo "\t\t\t\t\t<li class=\"small-icon icon-new-posts\"><a href=\"";
                    if (isset($context["U_SEARCH_NEW"])) { $_U_SEARCH_NEW_ = $context["U_SEARCH_NEW"]; } else { $_U_SEARCH_NEW_ = null; }
                    echo $_U_SEARCH_NEW_;
                    echo "\" role=\"menuitem\">";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 160
                echo "\t\t\t";
            }
            // line 161
            echo "\t\t\t";
            if (isset($context["S_REGISTERED_USER"])) { $_S_REGISTERED_USER_ = $context["S_REGISTERED_USER"]; } else { $_S_REGISTERED_USER_ = null; }
            if (isset($context["S_DISPLAY_SEARCH"])) { $_S_DISPLAY_SEARCH_ = $context["S_DISPLAY_SEARCH"]; } else { $_S_DISPLAY_SEARCH_ = null; }
            if ( !$_S_REGISTERED_USER_) {
                // line 162
                echo "\t\t\t\t<li class=\"small-icon icon-login\"><a href=\"";
                if (isset($context["U_LOGIN_LOGOUT"])) { $_U_LOGIN_LOGOUT_ = $context["U_LOGIN_LOGOUT"]; } else { $_U_LOGIN_LOGOUT_ = null; }
                echo $_U_LOGIN_LOGOUT_;
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
                echo "</a></li>
\t\t\t\t";
                // line 163
                if (isset($context["S_REGISTER_ENABLED"])) { $_S_REGISTER_ENABLED_ = $context["S_REGISTER_ENABLED"]; } else { $_S_REGISTER_ENABLED_ = null; }
                if ($_S_REGISTER_ENABLED_) {
                    // line 164
                    echo "\t\t\t\t\t<li class=\"small-icon icon-register\"><a href=\"";
                    if (isset($context["U_REGISTER"])) { $_U_REGISTER_ = $context["U_REGISTER"]; } else { $_U_REGISTER_ = null; }
                    echo $_U_REGISTER_;
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("REGISTER");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 166
                echo "\t\t\t";
            } elseif ( !$_S_DISPLAY_SEARCH_) {
                // line 167
                echo "\t\t\t\t<li><a href=\"";
                if (isset($context["U_PROFILE"])) { $_U_PROFILE_ = $context["U_PROFILE"]; } else { $_U_PROFILE_ = null; }
                echo $_U_PROFILE_;
                echo "\" class=\"small-icon icon-profile\">";
                if (isset($context["CURRENT_USERNAME_SIMPLE"])) { $_CURRENT_USERNAME_SIMPLE_ = $context["CURRENT_USERNAME_SIMPLE"]; } else { $_CURRENT_USERNAME_SIMPLE_ = null; }
                echo $_CURRENT_USERNAME_SIMPLE_;
                echo "</a></li>
\t\t\t";
            }
            // line 169
            echo "\t\t";
        }
        // line 170
        echo "
\t\t";
        // line 171
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        if ((($this->getAttribute($_definition_, "SEARCH_IN_NAVBAR", array()) == 1) && $this->getAttribute($_definition_, "SEARCH_BOX", array()))) {
            // line 172
            echo "\t\t\t<li class=\"search-box not-responsive\">";
            if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
            echo $this->getAttribute($_definition_, "SEARCH_BOX", array());
            echo "</li>
\t\t";
        }
        // line 174
        echo "\t</ul>
</div>

";
        // line 177
        if (isset($context["BREADCRUMBS"])) { $_BREADCRUMBS_ = $context["BREADCRUMBS"]; } else { $_BREADCRUMBS_ = null; }
        ob_start();
        // line 178
        echo "<div class=\"navbar nav-breadcrumbs\">
\t<ul id=\"nav-breadcrumbs\" class=\"linklist navlinks\" role=\"menubar\">
\t\t";
        // line 180
        if (isset($context["MICRODATA"])) { $_MICRODATA_ = $context["MICRODATA"]; } else { $_MICRODATA_ = null; }
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 181
        echo "\t\t";
        if (isset($context["overall_header_breadcrumbs_before"])) { $_overall_header_breadcrumbs_before_ = $context["overall_header_breadcrumbs_before"]; } else { $_overall_header_breadcrumbs_before_ = null; }
        // line 182
        echo "\t\t<li class=\"small-icon icon-home breadcrumbs\">
\t\t\t";
        // line 183
        if (isset($context["U_SITE_HOME"])) { $_U_SITE_HOME_ = $context["U_SITE_HOME"]; } else { $_U_SITE_HOME_ = null; }
        if ($_U_SITE_HOME_) {
            echo "<span class=\"crumb\" style=\"display: none;\"><a href=\"";
            if (isset($context["U_SITE_HOME"])) { $_U_SITE_HOME_ = $context["U_SITE_HOME"]; } else { $_U_SITE_HOME_ = null; }
            echo $_U_SITE_HOME_;
            echo "\"";
            if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
            echo $this->getAttribute($_definition_, "MICRODATA", array());
            echo " data-navbar-reference=\"home\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</span></a></span>";
        }
        // line 184
        echo "\t\t\t";
        if (isset($context["overall_header_breadcrumb_prepend"])) { $_overall_header_breadcrumb_prepend_ = $context["overall_header_breadcrumb_prepend"]; } else { $_overall_header_breadcrumb_prepend_ = null; }
        // line 185
        echo "\t\t\t<span class=\"crumb\"";
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        echo $this->getAttribute($_definition_, "MICRODATA", array());
        echo "><a href=\"";
        if (isset($context["U_INDEX"])) { $_U_INDEX_ = $context["U_INDEX"]; } else { $_U_INDEX_ = null; }
        echo $_U_INDEX_;
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\" itemprop=\"url\"><span itemprop=\"title\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</span></a></span>
\t\t\t";
        // line 186
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 187
            echo "\t\t\t\t";
            if (isset($context["overall_header_navlink_prepend"])) { $_overall_header_navlink_prepend_ = $context["overall_header_navlink_prepend"]; } else { $_overall_header_navlink_prepend_ = null; }
            // line 188
            echo "\t\t\t\t<span class=\"crumb\"";
            if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
            echo $this->getAttribute($_definition_, "MICRODATA", array());
            if (isset($context["navlinks"])) { $_navlinks_ = $context["navlinks"]; } else { $_navlinks_ = null; }
            if ($this->getAttribute($_navlinks_, "MICRODATA", array())) {
                echo " ";
                if (isset($context["navlinks"])) { $_navlinks_ = $context["navlinks"]; } else { $_navlinks_ = null; }
                echo $this->getAttribute($_navlinks_, "MICRODATA", array());
            }
            echo "><a href=\"";
            if (isset($context["navlinks"])) { $_navlinks_ = $context["navlinks"]; } else { $_navlinks_ = null; }
            echo $this->getAttribute($_navlinks_, "U_VIEW_FORUM", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            if (isset($context["navlinks"])) { $_navlinks_ = $context["navlinks"]; } else { $_navlinks_ = null; }
            echo $this->getAttribute($_navlinks_, "FORUM_NAME", array());
            echo "</span></a></span>
\t\t\t\t";
            // line 189
            if (isset($context["overall_header_navlink_append"])) { $_overall_header_navlink_append_ = $context["overall_header_navlink_append"]; } else { $_overall_header_navlink_append_ = null; }
            // line 190
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "\t\t\t";
        if (isset($context["overall_header_breadcrumb_append"])) { $_overall_header_breadcrumb_append_ = $context["overall_header_breadcrumb_append"]; } else { $_overall_header_breadcrumb_append_ = null; }
        // line 192
        echo "\t\t</li>
\t\t";
        // line 193
        if (isset($context["overall_header_breadcrumbs_after"])) { $_overall_header_breadcrumbs_after_ = $context["overall_header_breadcrumbs_after"]; } else { $_overall_header_breadcrumbs_after_ = null; }
        // line 194
        echo "
\t\t";
        // line 195
        if (isset($context["S_DISPLAY_SEARCH"])) { $_S_DISPLAY_SEARCH_ = $context["S_DISPLAY_SEARCH"]; } else { $_S_DISPLAY_SEARCH_ = null; }
        if (isset($context["S_IN_SEARCH"])) { $_S_IN_SEARCH_ = $context["S_IN_SEARCH"]; } else { $_S_IN_SEARCH_ = null; }
        if (($_S_DISPLAY_SEARCH_ &&  !$_S_IN_SEARCH_)) {
            // line 196
            echo "\t\t\t<li class=\"rightside responsive-search\" style=\"display: none;\"><a href=\"";
            if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
            echo $_U_SEARCH_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</a></li>
\t\t";
        }
        // line 198
        echo "\t\t<li class=\"rightside dropdown-container icon-only\">
\t\t\t<a href=\"#\" class=\"dropdown-trigger time\" title=\"";
        // line 199
        if (isset($context["CURRENT_TIME"])) { $_CURRENT_TIME_ = $context["CURRENT_TIME"]; } else { $_CURRENT_TIME_ = null; }
        echo $_CURRENT_TIME_;
        echo "\"><i class=\"fa fa-clock-o\"></i></a>
\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t\t<li>";
        // line 203
        if (isset($context["CURRENT_TIME"])) { $_CURRENT_TIME_ = $context["CURRENT_TIME"]; } else { $_CURRENT_TIME_ = null; }
        echo $_CURRENT_TIME_;
        echo "</li>
\t\t\t\t\t<li>";
        // line 204
        if (isset($context["S_TIMEZONE"])) { $_S_TIMEZONE_ = $context["S_TIMEZONE"]; } else { $_S_TIMEZONE_ = null; }
        echo $_S_TIMEZONE_;
        echo "</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>
\t</ul>
</div>
";
        $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
        $context['definition']->set('BREADCRUMBS', $value);
        // line 211
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        if (($this->getAttribute($_definition_, "WRAP_HEADER", array()) != 0)) {
            // line 212
            echo "\t";
            if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
            echo $this->getAttribute($_definition_, "BREADCRUMBS", array());
            echo "
\t";
            // line 213
            if (isset($context["BREADCRUMBS"])) { $_BREADCRUMBS_ = $context["BREADCRUMBS"]; } else { $_BREADCRUMBS_ = null; }
            $value = "";
            $context['definition']->set('BREADCRUMBS', $value);
        }
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  846 => 213,  840 => 212,  837 => 211,  825 => 204,  820 => 203,  812 => 199,  809 => 198,  798 => 196,  794 => 195,  791 => 194,  789 => 193,  786 => 192,  783 => 191,  777 => 190,  775 => 189,  757 => 188,  754 => 187,  749 => 186,  738 => 185,  735 => 184,  722 => 183,  719 => 182,  716 => 181,  712 => 180,  708 => 178,  705 => 177,  700 => 174,  693 => 172,  690 => 171,  687 => 170,  684 => 169,  674 => 167,  671 => 166,  662 => 164,  659 => 163,  649 => 162,  644 => 161,  641 => 160,  632 => 158,  629 => 157,  616 => 156,  612 => 155,  609 => 154,  606 => 153,  597 => 151,  594 => 150,  581 => 149,  577 => 148,  571 => 147,  567 => 146,  564 => 145,  561 => 144,  558 => 143,  522 => 142,  518 => 141,  511 => 139,  507 => 138,  504 => 137,  502 => 136,  494 => 134,  487 => 129,  484 => 128,  481 => 127,  472 => 125,  469 => 124,  459 => 123,  448 => 121,  444 => 120,  441 => 119,  437 => 117,  425 => 116,  418 => 113,  410 => 111,  402 => 110,  398 => 109,  389 => 104,  381 => 102,  373 => 101,  370 => 100,  358 => 96,  354 => 94,  352 => 93,  342 => 91,  333 => 90,  330 => 89,  328 => 88,  325 => 87,  315 => 86,  304 => 82,  301 => 81,  297 => 80,  286 => 77,  283 => 76,  279 => 75,  266 => 74,  264 => 73,  254 => 71,  251 => 70,  249 => 69,  245 => 67,  242 => 66,  236 => 62,  225 => 61,  215 => 60,  205 => 56,  202 => 55,  197 => 54,  189 => 52,  186 => 51,  177 => 48,  174 => 47,  170 => 46,  168 => 45,  163 => 42,  157 => 40,  154 => 39,  151 => 38,  146 => 37,  139 => 33,  132 => 32,  120 => 30,  115 => 27,  108 => 26,  105 => 25,  101 => 23,  99 => 22,  96 => 21,  87 => 18,  79 => 16,  71 => 15,  62 => 13,  58 => 12,  49 => 10,  45 => 9,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
