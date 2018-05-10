<?php

/* ucp_avatar_options_local.html */
class __TwigTemplate_c459d3053a94d18a05a008bf8d1defc274675bfa9156572418cf39738d7213be extends Twig_Template
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
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "avatar_local_cats", array()))) {
            // line 2
            echo "<label for=\"category\">";
            echo $this->env->getExtension('phpbb')->lang("AVATAR_CATEGORY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"avatar_local_cat\" id=\"category\">
";
            // line 3
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "avatar_local_cats", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["avatar_local_cats"]) {
                // line 4
                echo "<option value=\"";
                if (isset($context["avatar_local_cats"])) { $_avatar_local_cats_ = $context["avatar_local_cats"]; } else { $_avatar_local_cats_ = null; }
                echo $this->getAttribute($_avatar_local_cats_, "NAME", array());
                echo "\"";
                if (isset($context["avatar_local_cats"])) { $_avatar_local_cats_ = $context["avatar_local_cats"]; } else { $_avatar_local_cats_ = null; }
                if ($this->getAttribute($_avatar_local_cats_, "SELECTED", array())) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                if (isset($context["avatar_local_cats"])) { $_avatar_local_cats_ = $context["avatar_local_cats"]; } else { $_avatar_local_cats_ = null; }
                echo $this->getAttribute($_avatar_local_cats_, "NAME", array());
                echo "</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_local_cats'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "</select></label>
<input type=\"submit\" value=\"";
            // line 7
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" name=\"avatar_local_go\" class=\"button2\" />

<div id=\"gallery\">
";
            // line 10
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "avatar_local_row", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["avatar_local_row"]) {
                // line 11
                if (isset($context["avatar_local_row"])) { $_avatar_local_row_ = $context["avatar_local_row"]; } else { $_avatar_local_row_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_avatar_local_row_, "avatar_local_col", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["avatar_local_col"]) {
                    // line 12
                    echo "\t<label for=\"av-";
                    if (isset($context["avatar_local_row"])) { $_avatar_local_row_ = $context["avatar_local_row"]; } else { $_avatar_local_row_ = null; }
                    echo $this->getAttribute($_avatar_local_row_, "S_ROW_COUNT", array());
                    echo "-";
                    if (isset($context["avatar_local_col"])) { $_avatar_local_col_ = $context["avatar_local_col"]; } else { $_avatar_local_col_ = null; }
                    echo $this->getAttribute($_avatar_local_col_, "S_ROW_COUNT", array());
                    echo "\"><img src=\"";
                    if (isset($context["avatar_local_col"])) { $_avatar_local_col_ = $context["avatar_local_col"]; } else { $_avatar_local_col_ = null; }
                    echo $this->getAttribute($_avatar_local_col_, "AVATAR_IMAGE", array());
                    echo "\" alt=\"\" /><br />
\t<input type=\"radio\" name=\"avatar_local_file\" id=\"av-";
                    // line 13
                    if (isset($context["avatar_local_row"])) { $_avatar_local_row_ = $context["avatar_local_row"]; } else { $_avatar_local_row_ = null; }
                    echo $this->getAttribute($_avatar_local_row_, "S_ROW_COUNT", array());
                    echo "-";
                    if (isset($context["avatar_local_col"])) { $_avatar_local_col_ = $context["avatar_local_col"]; } else { $_avatar_local_col_ = null; }
                    echo $this->getAttribute($_avatar_local_col_, "S_ROW_COUNT", array());
                    echo "\"
\t\t   value=\"";
                    // line 14
                    if (isset($context["avatar_local_col"])) { $_avatar_local_col_ = $context["avatar_local_col"]; } else { $_avatar_local_col_ = null; }
                    echo $this->getAttribute($_avatar_local_col_, "AVATAR_FILE", array());
                    echo "\"";
                    if (isset($context["avatar_local_col"])) { $_avatar_local_col_ = $context["avatar_local_col"]; } else { $_avatar_local_col_ = null; }
                    if ($this->getAttribute($_avatar_local_col_, "CHECKED", array())) {
                        echo " checked=\"checked\"";
                    }
                    echo " /></label>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_local_col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_local_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "</div>
";
        } else {
            // line 19
            echo "<p><strong>";
            echo $this->env->getExtension('phpbb')->lang("NO_AVATARS");
            echo "</strong></p>
";
        }
    }

    public function getTemplateName()
    {
        return "ucp_avatar_options_local.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 19,  108 => 17,  90 => 14,  82 => 13,  70 => 12,  65 => 11,  60 => 10,  54 => 7,  51 => 6,  33 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
