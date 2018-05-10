<?php

/* ucp_prefs_view.html */
class __TwigTemplate_8bba9ee98fb3c2651720cb470d0bae3ebd857baa71d15d432d94ecd77f86eb22 extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_prefs_view.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        if (isset($context["S_UCP_ACTION"])) { $_S_UCP_ACTION_ = $context["S_UCP_ACTION"]; } else { $_S_UCP_ACTION_ = null; }
        echo $_S_UCP_ACTION_;
        echo "\"";
        if (isset($context["S_FORM_ENCTYPE"])) { $_S_FORM_ENCTYPE_ = $context["S_FORM_ENCTYPE"]; } else { $_S_FORM_ENCTYPE_ = null; }
        echo $_S_FORM_ENCTYPE_;
        echo ">

<h2>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t\t<fieldset>
\t\t";
        // line 11
        if (isset($context["ERROR"])) { $_ERROR_ = $context["ERROR"]; } else { $_ERROR_ = null; }
        if ($_ERROR_) {
            echo "<p class=\"error\">";
            if (isset($context["ERROR"])) { $_ERROR_ = $context["ERROR"]; } else { $_ERROR_ = null; }
            echo $_ERROR_;
            echo "</p>";
        }
        // line 12
        echo "\t\t";
        if (isset($context["ucp_prefs_view_radio_buttons_prepend"])) { $_ucp_prefs_view_radio_buttons_prepend_ = $context["ucp_prefs_view_radio_buttons_prepend"]; } else { $_ucp_prefs_view_radio_buttons_prepend_ = null; }
        // line 13
        echo "\t\t<dl>
\t\t\t<dt><label for=\"images1\">";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("VIEW_IMAGES");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"images1\"><input type=\"radio\" name=\"images\" id=\"images1\" value=\"1\"";
        // line 16
        if (isset($context["S_IMAGES"])) { $_S_IMAGES_ = $context["S_IMAGES"]; } else { $_S_IMAGES_ = null; }
        if ($_S_IMAGES_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label> 
\t\t\t\t<label for=\"images0\"><input type=\"radio\" name=\"images\" id=\"images0\" value=\"0\"";
        // line 17
        if (isset($context["S_IMAGES"])) { $_S_IMAGES_ = $context["S_IMAGES"]; } else { $_S_IMAGES_ = null; }
        if ( !$_S_IMAGES_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"flash0\">";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("VIEW_FLASH");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"flash1\"><input type=\"radio\" name=\"flash\" id=\"flash1\" value=\"1\"";
        // line 23
        if (isset($context["S_FLASH"])) { $_S_FLASH_ = $context["S_FLASH"]; } else { $_S_FLASH_ = null; }
        if ($_S_FLASH_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label> 
\t\t\t\t<label for=\"flash0\"><input type=\"radio\" name=\"flash\" id=\"flash0\" value=\"0\"";
        // line 24
        if (isset($context["S_FLASH"])) { $_S_FLASH_ = $context["S_FLASH"]; } else { $_S_FLASH_ = null; }
        if ( !$_S_FLASH_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"smilies1\">";
        // line 28
        echo $this->env->getExtension('phpbb')->lang("VIEW_SMILIES");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"smilies1\"><input type=\"radio\" name=\"smilies\" id=\"smilies1\" value=\"1\"";
        // line 30
        if (isset($context["S_SMILIES"])) { $_S_SMILIES_ = $context["S_SMILIES"]; } else { $_S_SMILIES_ = null; }
        if ($_S_SMILIES_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label> 
\t\t\t\t<label for=\"smilies0\"><input type=\"radio\" name=\"smilies\" id=\"smilies0\" value=\"0\"";
        // line 31
        if (isset($context["S_SMILIES"])) { $_S_SMILIES_ = $context["S_SMILIES"]; } else { $_S_SMILIES_ = null; }
        if ( !$_S_SMILIES_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"sigs1\">";
        // line 35
        echo $this->env->getExtension('phpbb')->lang("VIEW_SIGS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"sigs1\"><input type=\"radio\" name=\"sigs\" id=\"sigs1\" value=\"1\"";
        // line 37
        if (isset($context["S_SIGS"])) { $_S_SIGS_ = $context["S_SIGS"]; } else { $_S_SIGS_ = null; }
        if ($_S_SIGS_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label> 
\t\t\t\t<label for=\"sigs0\"><input type=\"radio\" name=\"sigs\" id=\"sigs0\" value=\"0\"";
        // line 38
        if (isset($context["S_SIGS"])) { $_S_SIGS_ = $context["S_SIGS"]; } else { $_S_SIGS_ = null; }
        if ( !$_S_SIGS_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"avatars1\">";
        // line 42
        echo $this->env->getExtension('phpbb')->lang("VIEW_AVATARS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"avatars1\"><input type=\"radio\" name=\"avatars\" id=\"avatars1\" value=\"1\"";
        // line 44
        if (isset($context["S_AVATARS"])) { $_S_AVATARS_ = $context["S_AVATARS"]; } else { $_S_AVATARS_ = null; }
        if ($_S_AVATARS_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label> 
\t\t\t\t<label for=\"avatars0\"><input type=\"radio\" name=\"avatars\" id=\"avatars0\" value=\"0\"";
        // line 45
        if (isset($context["S_AVATARS"])) { $_S_AVATARS_ = $context["S_AVATARS"]; } else { $_S_AVATARS_ = null; }
        if ( !$_S_AVATARS_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t";
        // line 48
        if (isset($context["S_CHANGE_CENSORS"])) { $_S_CHANGE_CENSORS_ = $context["S_CHANGE_CENSORS"]; } else { $_S_CHANGE_CENSORS_ = null; }
        if ($_S_CHANGE_CENSORS_) {
            // line 49
            echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"wordcensor1\">";
            // line 50
            echo $this->env->getExtension('phpbb')->lang("DISABLE_CENSORS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd>
\t\t\t\t\t<label for=\"wordcensor1\"><input type=\"radio\" name=\"wordcensor\" id=\"wordcensor1\" value=\"1\"";
            // line 52
            if (isset($context["S_DISABLE_CENSORS"])) { $_S_DISABLE_CENSORS_ = $context["S_DISABLE_CENSORS"]; } else { $_S_DISABLE_CENSORS_ = null; }
            if ($_S_DISABLE_CENSORS_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label> 
\t\t\t\t\t<label for=\"wordcensor0\"><input type=\"radio\" name=\"wordcensor\" id=\"wordcensor0\" value=\"0\"";
            // line 53
            if (isset($context["S_DISABLE_CENSORS"])) { $_S_DISABLE_CENSORS_ = $context["S_DISABLE_CENSORS"]; } else { $_S_DISABLE_CENSORS_ = null; }
            if ( !$_S_DISABLE_CENSORS_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t";
        }
        // line 57
        echo "\t\t";
        if (isset($context["ucp_prefs_view_radio_buttons_append"])) { $_ucp_prefs_view_radio_buttons_append_ = $context["ucp_prefs_view_radio_buttons_append"]; } else { $_ucp_prefs_view_radio_buttons_append_ = null; }
        // line 58
        echo "\t\t<hr />
\t\t";
        // line 59
        if (isset($context["ucp_prefs_view_select_menu_prepend"])) { $_ucp_prefs_view_select_menu_prepend_ = $context["ucp_prefs_view_select_menu_prepend"]; } else { $_ucp_prefs_view_select_menu_prepend_ = null; }
        // line 60
        echo "\t\t<dl>
\t\t\t<dt><label>";
        // line 61
        echo $this->env->getExtension('phpbb')->lang("VIEW_TOPICS_DAYS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>";
        // line 62
        if (isset($context["S_TOPIC_SORT_DAYS"])) { $_S_TOPIC_SORT_DAYS_ = $context["S_TOPIC_SORT_DAYS"]; } else { $_S_TOPIC_SORT_DAYS_ = null; }
        echo $_S_TOPIC_SORT_DAYS_;
        echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label>";
        // line 65
        echo $this->env->getExtension('phpbb')->lang("VIEW_TOPICS_KEY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>";
        // line 66
        if (isset($context["S_TOPIC_SORT_KEY"])) { $_S_TOPIC_SORT_KEY_ = $context["S_TOPIC_SORT_KEY"]; } else { $_S_TOPIC_SORT_KEY_ = null; }
        echo $_S_TOPIC_SORT_KEY_;
        echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label>";
        // line 69
        echo $this->env->getExtension('phpbb')->lang("VIEW_TOPICS_DIR");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>";
        // line 70
        if (isset($context["S_TOPIC_SORT_DIR"])) { $_S_TOPIC_SORT_DIR_ = $context["S_TOPIC_SORT_DIR"]; } else { $_S_TOPIC_SORT_DIR_ = null; }
        echo $_S_TOPIC_SORT_DIR_;
        echo "</dd>
\t\t</dl>
\t\t<hr />
\t\t<dl>
\t\t\t<dt><label>";
        // line 74
        echo $this->env->getExtension('phpbb')->lang("VIEW_POSTS_DAYS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>";
        // line 75
        if (isset($context["S_POST_SORT_DAYS"])) { $_S_POST_SORT_DAYS_ = $context["S_POST_SORT_DAYS"]; } else { $_S_POST_SORT_DAYS_ = null; }
        echo $_S_POST_SORT_DAYS_;
        echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label>";
        // line 78
        echo $this->env->getExtension('phpbb')->lang("VIEW_POSTS_KEY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>";
        // line 79
        if (isset($context["S_POST_SORT_KEY"])) { $_S_POST_SORT_KEY_ = $context["S_POST_SORT_KEY"]; } else { $_S_POST_SORT_KEY_ = null; }
        echo $_S_POST_SORT_KEY_;
        echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label>";
        // line 82
        echo $this->env->getExtension('phpbb')->lang("VIEW_POSTS_DIR");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>";
        // line 83
        if (isset($context["S_POST_SORT_DIR"])) { $_S_POST_SORT_DIR_ = $context["S_POST_SORT_DIR"]; } else { $_S_POST_SORT_DIR_ = null; }
        echo $_S_POST_SORT_DIR_;
        echo "</dd>
\t\t</dl>
\t\t";
        // line 85
        if (isset($context["ucp_prefs_view_select_menu_append"])) { $_ucp_prefs_view_select_menu_append_ = $context["ucp_prefs_view_select_menu_append"]; } else { $_ucp_prefs_view_select_menu_append_ = null; }
        // line 86
        echo "\t\t</fieldset>

\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t";
        // line 92
        if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
        echo $_S_HIDDEN_FIELDS_;
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp; 
\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 93
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 94
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
</fieldset>
</form>

";
        // line 98
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_prefs_view.html", 98)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_prefs_view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 98,  337 => 94,  333 => 93,  326 => 92,  318 => 86,  316 => 85,  310 => 83,  305 => 82,  298 => 79,  293 => 78,  286 => 75,  281 => 74,  273 => 70,  268 => 69,  261 => 66,  256 => 65,  249 => 62,  244 => 61,  241 => 60,  239 => 59,  236 => 58,  233 => 57,  221 => 53,  212 => 52,  206 => 50,  203 => 49,  200 => 48,  189 => 45,  180 => 44,  174 => 42,  162 => 38,  153 => 37,  147 => 35,  135 => 31,  126 => 30,  120 => 28,  108 => 24,  99 => 23,  93 => 21,  81 => 17,  72 => 16,  66 => 14,  63 => 13,  60 => 12,  52 => 11,  43 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
