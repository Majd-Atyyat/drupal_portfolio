<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @help_topics/quickedit.quick_edit.html.twig */
class __TwigTemplate_b213bca1b624998e2710e78ced3ccf28 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 8
        echo t("Edit content in place.", array());
        echo "</p>
<h2>";
        // line 9
        echo t("What is quick editing?", array());
        echo "</h2>
<p>";
        // line 10
        echo t("Quick editing is editing content inline. Content quick editing is provided by the core Quick Edit module or its contributed replacement. It requires the core Contextual Links module in order to expose the links that let you edit in place.", array());
        echo "</p>
<h2>";
        // line 11
        echo t("Who can edit content in place?", array());
        echo "</h2>
<p>";
        // line 12
        echo t("In order to follow these steps to edit content in place, the core Quick Edit module or its contributed replacement must be installed. Also, either the core Toolbar module or a contributed replacement must be installed. You will need to have <em>Use contextual links</em> permission, <em>Access in-place editing</em> permission, as well as permission to edit the particular content.", array());
        echo "</p>
<h2>";
        // line 13
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 15
        echo t("Find and visit a page on your site that has the content that you would like to edit.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("Click the contextual links <em>Edit</em> button on the toolbar (in most themes, it looks like a pencil). Contextual <em>Edit</em> links with the same icon will appear all over your page.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("Find the contextual link for the part of the page you want to edit. For example, to edit a specific post on the front page, the link should be in the top-right corner of the post, or top-left for right-to-left languages.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("Click the link to open the contextual links menu, and click <em>Quick edit</em>. All editable fields will be enclosed in a light blue box. Hover over any box to see the label of the field that box contains. Click on the box and a form to edit that field will appear.", array());
        echo "</li>
  <li>";
        // line 19
        echo t("Make your edits and submit the form.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/quickedit.quick_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/quickedit.quick_edit.html.twig", "C:\\xampp\\htdocs\\drupal\\core\\modules\\quickedit\\help_topics\\quickedit.quick_edit.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 7);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
