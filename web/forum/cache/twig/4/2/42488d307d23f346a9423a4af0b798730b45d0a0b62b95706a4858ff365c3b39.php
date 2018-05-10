<?php

/* acp_database.html */
class __TwigTemplate_42488d307d23f346a9423a4af0b798730b45d0a0b62b95706a4858ff365c3b39 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_database.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (isset($context["MODE"])) { $_MODE_ = $context["MODE"]; } else { $_MODE_ = null; }
        if (($_MODE_ == "restore")) {
            // line 6
            echo "\t<h1>";
            echo $this->env->getExtension('phpbb')->lang("ACP_RESTORE");
            echo "</h1>

\t<p>";
            // line 8
            echo $this->env->getExtension('phpbb')->lang("ACP_RESTORE_EXPLAIN");
            echo "</p>

\t";
            // line 10
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "files", array()))) {
                // line 11
                echo "\t<form id=\"acp_backup\" method=\"post\" action=\"";
                if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                echo $_U_ACTION_;
                echo "\">

\t<fieldset>
\t\t<legend>";
                // line 14
                echo $this->env->getExtension('phpbb')->lang("RESTORE_OPTIONS");
                echo "</legend>
\t<dl>
\t\t<dt><label for=\"file\">";
                // line 16
                echo $this->env->getExtension('phpbb')->lang("SELECT_FILE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t<dd><select id=\"file\" name=\"file\" size=\"10\">";
                // line 17
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "files", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["files"]) {
                    echo "<option value=\"";
                    if (isset($context["files"])) { $_files_ = $context["files"]; } else { $_files_ = null; }
                    echo $this->getAttribute($_files_, "FILE", array());
                    echo "\"";
                    if (isset($context["files"])) { $_files_ = $context["files"]; } else { $_files_ = null; }
                    if ($this->getAttribute($_files_, "S_LAST_ROW", array())) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    if (isset($context["files"])) { $_files_ = $context["files"]; } else { $_files_ = null; }
                    echo $this->getAttribute($_files_, "NAME", array());
                    echo "</option>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['files'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</select></dd>
\t</dl>

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
                // line 21
                echo $this->env->getExtension('phpbb')->lang("START_RESTORE");
                echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"submit\" id=\"delete\" name=\"delete\" value=\"";
                // line 22
                echo $this->env->getExtension('phpbb')->lang("DELETE_BACKUP");
                echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"submit\" id=\"download\" name=\"download\" value=\"";
                // line 23
                echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_BACKUP");
                echo "\" />
\t</p>
\t";
                // line 25
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t</fieldset>
\t</form>
\t";
            } else {
                // line 29
                echo "\t\t<div class=\"errorbox\">
\t\t\t<p>";
                // line 30
                echo $this->env->getExtension('phpbb')->lang("ACP_NO_ITEMS");
                echo "</p>
\t\t</div>
\t";
            }
            // line 33
            echo "
";
        } else {
            // line 35
            echo "\t<h1>";
            echo $this->env->getExtension('phpbb')->lang("ACP_BACKUP");
            echo "</h1>

\t<p>";
            // line 37
            echo $this->env->getExtension('phpbb')->lang("ACP_BACKUP_EXPLAIN");
            echo "</p>

\t<script type=\"text/javascript\">
\t// <![CDATA[

\t\tfunction selector(bool)
\t\t{
\t\t\tvar table = document.getElementById('table');

\t\t\tfor (var i = 0; i < table.options.length; i++)
\t\t\t{
\t\t\t\ttable.options[i].selected = bool;
\t\t\t}
\t\t}

\t// ]]>
\t</script>

\t<form id=\"acp_backup\" method=\"post\" action=\"";
            // line 55
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 58
            echo $this->env->getExtension('phpbb')->lang("BACKUP_OPTIONS");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"type\">";
            // line 60
            echo $this->env->getExtension('phpbb')->lang("BACKUP_TYPE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"type\" value=\"full\" id=\"type\" checked=\"checked\" /> ";
            // line 61
            echo $this->env->getExtension('phpbb')->lang("FULL_BACKUP");
            echo "</label>
\t\t\t<label><input type=\"radio\" name=\"type\" class=\"radio\" value=\"structure\" /> ";
            // line 62
            echo $this->env->getExtension('phpbb')->lang("STRUCTURE_ONLY");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"type\" value=\"data\" /> ";
            // line 63
            echo $this->env->getExtension('phpbb')->lang("DATA_ONLY");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"method\">";
            // line 66
            echo $this->env->getExtension('phpbb')->lang("FILE_TYPE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>";
            // line 67
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "methods", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["methods"]) {
                // line 68
                echo "\t\t<label><input name=\"method\"";
                if (isset($context["methods"])) { $_methods_ = $context["methods"]; } else { $_methods_ = null; }
                if ($this->getAttribute($_methods_, "S_FIRST_ROW", array())) {
                    echo " id=\"method\" checked=\"checked\"";
                }
                echo " type=\"radio\" class=\"radio\" value=\"";
                if (isset($context["methods"])) { $_methods_ = $context["methods"]; } else { $_methods_ = null; }
                echo $this->getAttribute($_methods_, "TYPE", array());
                echo "\" /> ";
                if (isset($context["methods"])) { $_methods_ = $context["methods"]; } else { $_methods_ = null; }
                echo $this->getAttribute($_methods_, "TYPE", array());
                echo "</label>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['methods'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"where\">";
            // line 72
            echo $this->env->getExtension('phpbb')->lang("ACTION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label><input id=\"where\" type=\"radio\" class=\"radio\" name=\"where\" value=\"store\" checked=\"checked\" /> ";
            // line 74
            echo $this->env->getExtension('phpbb')->lang("STORE_LOCAL");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"where\" value=\"download\" /> ";
            // line 75
            echo $this->env->getExtension('phpbb')->lang("DOWNLOAD");
            echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"table\">";
            // line 79
            echo $this->env->getExtension('phpbb')->lang("TABLE_SELECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select id=\"table\" name=\"table[]\" size=\"10\" multiple=\"multiple\">
\t\t";
            // line 81
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "tables", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tables"]) {
                // line 82
                echo "\t\t\t<option value=\"";
                if (isset($context["tables"])) { $_tables_ = $context["tables"]; } else { $_tables_ = null; }
                echo $this->getAttribute($_tables_, "TABLE", array());
                echo "\">";
                if (isset($context["tables"])) { $_tables_ = $context["tables"]; } else { $_tables_ = null; }
                echo $this->getAttribute($_tables_, "TABLE", array());
                echo "</option>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tables'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "\t\t</select></dd>
\t\t<dd><a href=\"#\" onclick=\"selector(true); return false;\">";
            // line 85
            echo $this->env->getExtension('phpbb')->lang("SELECT_ALL");
            echo "</a> :: <a href=\"#\" onclick=\"selector(false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("DESELECT_ALL");
            echo "</a></dd>
\t</dl>

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 89
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 90
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t</p>
\t";
            // line 92
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        }
        // line 97
        echo "
";
        // line 98
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_database.html", 98)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_database.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 98,  293 => 97,  284 => 92,  279 => 90,  275 => 89,  266 => 85,  263 => 84,  250 => 82,  245 => 81,  239 => 79,  232 => 75,  228 => 74,  222 => 72,  217 => 69,  199 => 68,  194 => 67,  189 => 66,  183 => 63,  179 => 62,  175 => 61,  170 => 60,  165 => 58,  158 => 55,  137 => 37,  131 => 35,  127 => 33,  121 => 30,  118 => 29,  110 => 25,  105 => 23,  101 => 22,  97 => 21,  71 => 17,  66 => 16,  61 => 14,  53 => 11,  50 => 10,  45 => 8,  39 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
