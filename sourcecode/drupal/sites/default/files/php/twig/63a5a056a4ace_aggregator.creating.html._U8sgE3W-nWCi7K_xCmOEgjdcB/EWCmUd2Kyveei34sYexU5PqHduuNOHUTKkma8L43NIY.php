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

/* @help_topics/aggregator.creating.html.twig */
class __TwigTemplate_47e9a23c28fce8a235a65eef594920ec extends \Twig\Template
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
        ob_start(function () { return ''; });
        // line 8
        echo t("Aggregator", array());
        $context["aggregator_overview_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["aggregator_overview_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help_topics\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["aggregator_overview_link_text"] ?? null), 10, $this->source), "aggregator.admin_overview"));
        // line 11
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 12
        echo t("Create a new feed to display syndicated data from an outside source on your website, or import an OPML file to create multiple feeds.", array());
        echo "</p>
<h2>";
        // line 13
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 15
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Web services</em> &gt; @aggregator_overview_link.", array("@aggregator_overview_link" => ($context["aggregator_overview_link"] ?? null), ));
        echo "</li>
  <li>";
        // line 16
        echo t("Click <em>Add feed</em> if you have an individual feed URL to add, or <em>Import OPML</em> if you have an OPML-formatted list of feeds to add.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("If you clicked <em>Add feed</em>, enter a <em>Title</em> for the feed and the <em>URL</em> of the feed. Select an <em>Update interval</em> and click <em>Save</em>.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("If you clicked <em>Import OPML</em>, either choose an <em>OPML file</em> from your local computer or enter an <em>OPML Remote URL</em> to import an OPML list from a URL. Select an <em>Update interval</em> and click <em>Import</em>.", array());
        echo "</li>
  <li>";
        // line 19
        echo t("In the <em>Manage</em> administrative menu, navigate back to <em>Configuration</em> &gt; <em>Web services</em> &gt; @aggregator_overview_link. You should see the new feed or feeds that you added in the list under <em>Feed overview</em>.", array("@aggregator_overview_link" => ($context["aggregator_overview_link"] ?? null), ));
        echo "</li>
  <li>";
        // line 20
        echo t("To verify that your feed is working, click <em>Update items</em> in the <em>Operations</em> list for your feed, and then click the feed name to view the imported items on the standard provided feed page.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/aggregator.creating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 20,  76 => 19,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  55 => 13,  51 => 12,  46 => 11,  44 => 10,  41 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/aggregator.creating.html.twig", "C:\\xampp\\htdocs\\drupal\\core\\modules\\aggregator\\help_topics\\aggregator.creating.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 8);
        static $filters = array("escape" => 15);
        static $functions = array("render_var" => 10, "help_route_link" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_route_link']
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
