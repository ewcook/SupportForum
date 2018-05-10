<?php

/* posting_review.html */
class __TwigTemplate_123320beb555b8791bbaa01be3be345e62b338993648ef31b46404224fbfaff0 extends Twig_Template
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
        echo "<h3>";
        echo $this->env->getExtension('phpbb')->lang("POST_REVIEW");
        echo "</h3>

<p>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("POST_REVIEW_EXPLAIN");
        echo "</p>

";
        // line 5
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "post_review_row", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["post_review_row"]) {
            // line 6
            if (isset($context["post_review_row"])) { $_post_review_row_ = $context["post_review_row"]; } else { $_post_review_row_ = null; }
            if ($this->getAttribute($_post_review_row_, "S_IGNORE_POST", array())) {
                // line 7
                echo "<div class=\"post bg3 post-ignore\">
\t<div class=\"inner\">
\t\t";
                // line 9
                if (isset($context["post_review_row"])) { $_post_review_row_ = $context["post_review_row"]; } else { $_post_review_row_ = null; }
                echo $this->getAttribute($_post_review_row_, "L_IGNORE_POST", array());
                echo "
";
            } else {
                // line 11
                echo "<div class=\"post ";
                if (isset($context["post_review_row"])) { $_post_review_row_ = $context["post_review_row"]; } else { $_post_review_row_ = null; }
                if (($this->getAttribute($_post_review_row_, "S_ROW_COUNT", array()) % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                echo "\">
\t<div class=\"inner\">
";
            }
            // line 14
            echo "
\t<div class=\"postbody\" id=\"ppr";
            // line 15
            if (isset($context["post_review_row"])) { $_post_review_row_ = $context["post_review_row"]; } else { $_post_review_row_ = null; }
            echo $this->getAttribute($_post_review_row_, "POST_ID", array());
            echo "\">
\t\t<h3><a href=\"#ppr";
            // line 16
            if (isset($context["post_review_row"])) { $_post_review_row_ = $context["post_review_row"]; } else { $_post_review_row_ = null; }
            echo $this->getAttribute($_post_review_row_, "POST_ID", array());
            echo "\">";
            if (isset($context["post_review_row"])) { $_post_review_row_ = $context["post_review_row"]; } else { $_post_review_row_ = null; }
            echo $this->getAttribute($_post_review_row_, "POST_SUBJECT", array());
            echo "</a></h3>
\t\t<p class=\"author\">";
            // line 17
            if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
            if ($_S_IS_BOT_) {
                if (isset($context["post_review_row"])) { $_post_review_row_ = $context["post_review_row"]; } else { $_post_review_row_ = null; }
                echo $this->getAttribute($_post_review_row_, "MINI_POST_IMG", array());
            } else {
                echo "<a href=\"";
                if (isset($context["post_review_row"])) { $_post_review_row_ = $context["post_review_row"]; } else { $_post_review_row_ = null; }
                echo $this->getAttribute($_post_review_row_, "U_MINI_POST", array());
                echo "\">";
                if (isset($context["post_review_row"])) { $_post_review_row_ = $context["post_review_row"]; } else { $_post_review_row_ = null; }
                echo $this->getAttribute($_post_review_row_, "MINI_POST_IMG", array());
                echo "</a>";
            }
            echo " ";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo "<strong>  ";
            if (isset($context["post_review_row"])) { $_post_review_row_ = $context["post_review_row"]; } else { $_post_review_row_ = null; }
            echo $this->getAttribute($_post_review_row_, "POST_AUTHOR_FULL", array());
            echo "</strong> &raquo; ";
            if (isset($context["post_review_row"])) { $_post_review_row_ = $context["post_review_row"]; } else { $_post_review_row_ = null; }
            echo $this->getAttribute($_post_review_row_, "POST_DATE", array());
            echo "</p>
\t\t<div class=\"content\">";
            // line 18
            if (isset($context["post_review_row"])) { $_post_review_row_ = $context["post_review_row"]; } else { $_post_review_row_ = null; }
            echo $this->getAttribute($_post_review_row_, "MESSAGE", array());
            echo "</div>

\t\t";
            // line 20
            if (isset($context["post_review_row"])) { $_post_review_row_ = $context["post_review_row"]; } else { $_post_review_row_ = null; }
            if ($this->getAttribute($_post_review_row_, "S_HAS_ATTACHMENTS", array())) {
                // line 21
                echo "\t\t\t<dl class=\"attachbox\">
\t\t\t\t<dt>";
                // line 22
                echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                echo "</dt>
\t\t\t\t";
                // line 23
                if (isset($context["post_review_row"])) { $_post_review_row_ = $context["post_review_row"]; } else { $_post_review_row_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_post_review_row_, "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 24
                    echo "\t\t\t\t\t<dd>";
                    if (isset($context["attachment"])) { $_attachment_ = $context["attachment"]; } else { $_attachment_ = null; }
                    echo $this->getAttribute($_attachment_, "DISPLAY_ATTACHMENT", array());
                    echo "</dd>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "\t\t\t</dl>
\t\t";
            }
            // line 28
            echo "
\t</div>

\t</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_review_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
<hr />
";
    }

    public function getTemplateName()
    {
        return "posting_review.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 34,  135 => 28,  131 => 26,  121 => 24,  116 => 23,  112 => 22,  109 => 21,  106 => 20,  100 => 18,  76 => 17,  68 => 16,  63 => 15,  60 => 14,  48 => 11,  42 => 9,  38 => 7,  35 => 6,  30 => 5,  25 => 3,  19 => 1,);
    }
}
