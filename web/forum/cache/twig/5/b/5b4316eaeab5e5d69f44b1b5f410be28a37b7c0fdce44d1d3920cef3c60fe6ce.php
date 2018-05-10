<?php

/* ucp_profile_reg_details.html */
class __TwigTemplate_5b4316eaeab5e5d69f44b1b5f410be28a37b7c0fdce44d1d3920cef3c60fe6ce extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_profile_reg_details.html", 1)->display($context);
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

\t";
        // line 9
        if (isset($context["S_FORCE_PASSWORD"])) { $_S_FORCE_PASSWORD_ = $context["S_FORCE_PASSWORD"]; } else { $_S_FORCE_PASSWORD_ = null; }
        if ($_S_FORCE_PASSWORD_) {
            // line 10
            echo "\t\t<p class=\"error\">";
            echo $this->env->getExtension('phpbb')->lang("FORCE_PASSWORD_EXPLAIN");
            echo "</p>
\t";
        }
        // line 12
        echo "
\t<fieldset>
\t";
        // line 14
        if (isset($context["ERROR"])) { $_ERROR_ = $context["ERROR"]; } else { $_ERROR_ = null; }
        if ($_ERROR_) {
            echo "<p class=\"error\">";
            if (isset($context["ERROR"])) { $_ERROR_ = $context["ERROR"]; } else { $_ERROR_ = null; }
            echo $_ERROR_;
            echo "</p>";
        }
        // line 15
        echo "\t";
        if (isset($context["ucp_profile_register_details_before"])) { $_ucp_profile_register_details_before_ = $context["ucp_profile_register_details_before"]; } else { $_ucp_profile_register_details_before_ = null; }
        // line 16
        echo "\t<dl>
\t\t<dt><label ";
        // line 17
        if (isset($context["S_CHANGE_USERNAME"])) { $_S_CHANGE_USERNAME_ = $context["S_CHANGE_USERNAME"]; } else { $_S_CHANGE_USERNAME_ = null; }
        if ($_S_CHANGE_USERNAME_) {
            echo "for=\"username\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("USERNAME_EXPLAIN");
        echo "</span></dt>
\t\t<dd>";
        // line 18
        if (isset($context["S_CHANGE_USERNAME"])) { $_S_CHANGE_USERNAME_ = $context["S_CHANGE_USERNAME"]; } else { $_S_CHANGE_USERNAME_ = null; }
        if ($_S_CHANGE_USERNAME_) {
            echo "<input type=\"text\" name=\"username\" id=\"username\" value=\"";
            if (isset($context["USERNAME"])) { $_USERNAME_ = $context["USERNAME"]; } else { $_USERNAME_ = null; }
            echo $_USERNAME_;
            echo "\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "\" />";
        } else {
            echo "<strong>";
            if (isset($context["USERNAME"])) { $_USERNAME_ = $context["USERNAME"]; } else { $_USERNAME_ = null; }
            echo $_USERNAME_;
            echo "</strong>";
        }
        echo "</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"email\">";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>";
        // line 22
        if (isset($context["S_CHANGE_EMAIL"])) { $_S_CHANGE_EMAIL_ = $context["S_CHANGE_EMAIL"]; } else { $_S_CHANGE_EMAIL_ = null; }
        if ($_S_CHANGE_EMAIL_) {
            echo "<input type=\"email\" name=\"email\" id=\"email\" maxlength=\"100\" value=\"";
            if (isset($context["EMAIL"])) { $_EMAIL_ = $context["EMAIL"]; } else { $_EMAIL_ = null; }
            echo $_EMAIL_;
            echo "\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
            echo "\" autocomplete=\"off\" />";
        } else {
            echo "<strong>";
            if (isset($context["EMAIL"])) { $_EMAIL_ = $context["EMAIL"]; } else { $_EMAIL_ = null; }
            echo $_EMAIL_;
            echo "</strong>";
        }
        echo "</dd>
\t</dl>
\t";
        // line 24
        if (isset($context["S_CHANGE_PASSWORD"])) { $_S_CHANGE_PASSWORD_ = $context["S_CHANGE_PASSWORD"]; } else { $_S_CHANGE_PASSWORD_ = null; }
        if ($_S_CHANGE_PASSWORD_) {
            // line 25
            echo "\t\t<dl>
\t\t\t<dt><label for=\"new_password\">";
            // line 26
            echo $this->env->getExtension('phpbb')->lang("NEW_PASSWORD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("CHANGE_PASSWORD_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"password\" name=\"new_password\" id=\"new_password\" maxlength=\"255\" value=\"";
            // line 27
            if (isset($context["NEW_PASSWORD"])) { $_NEW_PASSWORD_ = $context["NEW_PASSWORD"]; } else { $_NEW_PASSWORD_ = null; }
            echo $_NEW_PASSWORD_;
            echo "\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("CHANGE_PASSWORD");
            echo "\" autocomplete=\"off\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"password_confirm\">";
            // line 30
            echo $this->env->getExtension('phpbb')->lang("CONFIRM_PASSWORD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("CONFIRM_PASSWORD_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"password\" name=\"password_confirm\" id=\"password_confirm\" maxlength=\"255\" value=\"";
            // line 31
            if (isset($context["PASSWORD_CONFIRM"])) { $_PASSWORD_CONFIRM_ = $context["PASSWORD_CONFIRM"]; } else { $_PASSWORD_CONFIRM_ = null; }
            echo $_PASSWORD_CONFIRM_;
            echo "\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("CONFIRM_PASSWORD");
            echo "\" autocomplete=\"off\" /></dd>
\t\t</dl>
\t";
        }
        // line 34
        echo "\t";
        if (isset($context["ucp_profile_register_details_after"])) { $_ucp_profile_register_details_after_ = $context["ucp_profile_register_details_after"]; } else { $_ucp_profile_register_details_after_ = null; }
        echo "\t
\t</fieldset>
\t</div>
</div>

<div class=\"panel\">
\t<div class=\"inner\">

\t<fieldset>
\t<dl>
\t\t<dt><label for=\"cur_password\">";
        // line 44
        echo $this->env->getExtension('phpbb')->lang("CURRENT_PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        if (isset($context["S_CHANGE_PASSWORD"])) { $_S_CHANGE_PASSWORD_ = $context["S_CHANGE_PASSWORD"]; } else { $_S_CHANGE_PASSWORD_ = null; }
        if ($_S_CHANGE_PASSWORD_) {
            echo $this->env->getExtension('phpbb')->lang("CURRENT_CHANGE_PASSWORD_EXPLAIN");
        } else {
            echo $this->env->getExtension('phpbb')->lang("CURRENT_PASSWORD_EXPLAIN");
        }
        echo "</span></dt>
\t\t<dd><input type=\"password\" name=\"cur_password\" id=\"cur_password\" maxlength=\"255\" value=\"";
        // line 45
        if (isset($context["CUR_PASSWORD"])) { $_CUR_PASSWORD_ = $context["CUR_PASSWORD"]; } else { $_CUR_PASSWORD_ = null; }
        echo $_CUR_PASSWORD_;
        echo "\" class=\"inputbox\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("CURRENT_PASSWORD");
        echo "\" autocomplete=\"off\" /></dd>
\t</dl>
\t</fieldset>

\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t";
        // line 53
        if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
        echo $_S_HIDDEN_FIELDS_;
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 54
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 55
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
</fieldset>
</form>

";
        // line 59
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_profile_reg_details.html", 59)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_profile_reg_details.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 59,  220 => 55,  216 => 54,  209 => 53,  195 => 45,  183 => 44,  169 => 34,  160 => 31,  153 => 30,  144 => 27,  137 => 26,  134 => 25,  131 => 24,  113 => 22,  108 => 21,  89 => 18,  77 => 17,  74 => 16,  71 => 15,  63 => 14,  59 => 12,  53 => 10,  50 => 9,  43 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
