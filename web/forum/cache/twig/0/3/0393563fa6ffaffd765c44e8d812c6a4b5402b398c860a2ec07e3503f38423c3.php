<?php

/* ucp_avatar_options_gravatar.html */
class __TwigTemplate_0393563fa6ffaffd765c44e8d812c6a4b5402b398c860a2ec07e3503f38423c3 extends Twig_Template
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
        echo "<dl>
\t<dt><label for=\"avatar_gravatar_email\">";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("GRAVATAR_AVATAR_EMAIL");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("GRAVATAR_AVATAR_EMAIL_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"email\" name=\"avatar_gravatar_email\" id=\"avatar_gravatar_email\" value=\"";
        // line 3
        if (isset($context["AVATAR_GRAVATAR_EMAIL"])) { $_AVATAR_GRAVATAR_EMAIL_ = $context["AVATAR_GRAVATAR_EMAIL"]; } else { $_AVATAR_GRAVATAR_EMAIL_ = null; }
        echo $_AVATAR_GRAVATAR_EMAIL_;
        echo "\" class=\"inputbox\" data-reset-on-edit=\"#avatar_gravatar_width, #avatar_gravatar_height\" /></dd>
</dl>
<dl>
\t<dt><label for=\"avatar_gravatar_width\">";
        // line 6
        echo $this->env->getExtension('phpbb')->lang("GRAVATAR_AVATAR_SIZE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("GRAVATAR_AVATAR_SIZE_EXPLAIN");
        echo "</span></dt>
\t<dd>
\t\t<label for=\"avatar_gravatar_width\"><input type=\"text\" name=\"avatar_gravatar_width\" id=\"avatar_gravatar_width\" size=\"3\" value=\"";
        // line 8
        if (isset($context["AVATAR_GRAVATAR_WIDTH"])) { $_AVATAR_GRAVATAR_WIDTH_ = $context["AVATAR_GRAVATAR_WIDTH"]; } else { $_AVATAR_GRAVATAR_WIDTH_ = null; }
        echo $_AVATAR_GRAVATAR_WIDTH_;
        echo "\" class=\"inputbox autowidth\" /> ";
        echo $this->env->getExtension('phpbb')->lang("PIXEL");
        echo "</label> &times;&nbsp; 
\t\t<label for=\"avatar_gravatar_height\"><input type=\"text\" name=\"avatar_gravatar_height\" id=\"avatar_gravatar_height\" size=\"3\" value=\"";
        // line 9
        if (isset($context["AVATAR_GRAVATAR_HEIGHT"])) { $_AVATAR_GRAVATAR_HEIGHT_ = $context["AVATAR_GRAVATAR_HEIGHT"]; } else { $_AVATAR_GRAVATAR_HEIGHT_ = null; }
        echo $_AVATAR_GRAVATAR_HEIGHT_;
        echo "\" class=\"inputbox autowidth\" /> ";
        echo $this->env->getExtension('phpbb')->lang("PIXEL");
        echo "</label>
\t</dd>
</dl>
";
    }

    public function getTemplateName()
    {
        return "ucp_avatar_options_gravatar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  44 => 8,  36 => 6,  29 => 3,  22 => 2,  19 => 1,);
    }
}
