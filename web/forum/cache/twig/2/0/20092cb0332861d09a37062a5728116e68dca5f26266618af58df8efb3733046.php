<?php

/* _style_config.html */
class __TwigTemplate_20092cb0332861d09a37062a5728116e68dca5f26266618af58df8efb3733046 extends Twig_Template
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
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        if ($this->getAttribute($_definition_, "FALSE", array())) {
            // line 2
            echo "\tVariables below change style behavior.

\tList of variables and values (do not edit!):
\t\tForums list layout:
\t\t\t\$STANDARD_FORUMS_LAYOUT = 0\t-> Layout with topics and posts below forum title
\t\t\t\$STANDARD_FORUMS_LAYOUT = 1\t-> Default layout with separate columns for topics and posts

\t\tHide forum description:
\t\t\t\$HIDE_FORUM_DESCRIPTION = 0 -> Always show it
\t\t\t\$HIDE_FORUM_DESCRIPTION = 1 -> Show it only when hovering forum title

\t\tWrap header / navigation:
\t\t\t\$WRAP_HEADER = 0 -> Header and navigation will not be included in global wrapper
\t\t\t\$WRAP_HEADER = 1 -> Both header and navigation will be included in global wrapper
\t\t\t\$WRAP_HEADER = 2 -> Header will not be included in global wrapper, navigation will be included

\t\tWrap footer:
\t\t\t\$WRAP_FOOTER = 0 -> Footer will be outside of content wrapper
\t\t\t\$WRAP_FOOTER = 1 -> Footer will be inside content wrapper

\t\tQuick search position:
\t\t\t\$SEARCH_IN_NAVBAR = 0 -> Search bar will be displayed in header
\t\t\t\$SEARCH_IN_NAVBAR = 1 -> Search bar will be displayed in secondary navigation

\tEdit variables below:
";
        }
        // line 28
        echo "
";
        // line 29
        if (isset($context["STANDARD_FORUMS_LAYOUT"])) { $_STANDARD_FORUMS_LAYOUT_ = $context["STANDARD_FORUMS_LAYOUT"]; } else { $_STANDARD_FORUMS_LAYOUT_ = null; }
        $value = 1;
        $context['definition']->set('STANDARD_FORUMS_LAYOUT', $value);
        // line 30
        if (isset($context["HIDE_FORUM_DESCRIPTION"])) { $_HIDE_FORUM_DESCRIPTION_ = $context["HIDE_FORUM_DESCRIPTION"]; } else { $_HIDE_FORUM_DESCRIPTION_ = null; }
        $value = 0;
        $context['definition']->set('HIDE_FORUM_DESCRIPTION', $value);
        // line 31
        if (isset($context["WRAP_HEADER"])) { $_WRAP_HEADER_ = $context["WRAP_HEADER"]; } else { $_WRAP_HEADER_ = null; }
        $value = 2;
        $context['definition']->set('WRAP_HEADER', $value);
        // line 32
        if (isset($context["WRAP_FOOTER"])) { $_WRAP_FOOTER_ = $context["WRAP_FOOTER"]; } else { $_WRAP_FOOTER_ = null; }
        $value = 0;
        $context['definition']->set('WRAP_FOOTER', $value);
        // line 33
        if (isset($context["SEARCH_IN_NAVBAR"])) { $_SEARCH_IN_NAVBAR_ = $context["SEARCH_IN_NAVBAR"]; } else { $_SEARCH_IN_NAVBAR_ = null; }
        $value = 0;
        $context['definition']->set('SEARCH_IN_NAVBAR', $value);
        // line 34
        echo "
";
        // line 35
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        if ($this->getAttribute($_definition_, "FALSE", array())) {
            // line 36
            echo "\tDo not edit code below!
";
        }
    }

    public function getTemplateName()
    {
        return "_style_config.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 36,  76 => 35,  73 => 34,  69 => 33,  65 => 32,  61 => 31,  57 => 30,  53 => 29,  50 => 28,  22 => 2,  19 => 1,);
    }
}
