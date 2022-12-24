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

/* @help_topics/tracker.tracking_changed_content.html.twig */
class __TwigTemplate_1aeafb808683a0d2eb5db7aead14f53c extends \Twig\Template
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
        // line 8
        ob_start(function () { return ''; });
        // line 9
        echo t("Recent content", array());
        $context["recent_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        $context["recent_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help_topics\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["recent_link_text"] ?? null), 11, $this->source), "tracker.page"));
        // line 12
        echo "<h2>";
        echo t("What displays of recently-updated content are available?", array());
        echo "</h2>
<p>";
        // line 13
        echo t("Assuming that you have the core Activity Tracker module installed, these pages that show recently-updated content are available:", array());
        echo "</p>
<ul>
  <li>";
        // line 15
        echo t("@recent_link: Shows the content that has been most recently added, updated, or commented on.", array("@recent_link" => ($context["recent_link"] ?? null), ));
        echo "</li>
  <li>";
        // line 16
        echo t("The <em>My recent content</em> tab on the <em>Recent content</em> page (for logged-in users) limits the list to content created or commented on by the user viewing the page.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("The <em>Activity</em> tab on a user profile shows the same list for the user whose profile is being viewed.", array());
        echo "</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@help_topics/tracker.tracking_changed_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 17,  60 => 16,  56 => 15,  51 => 13,  46 => 12,  44 => 11,  41 => 9,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/tracker.tracking_changed_content.html.twig", "C:\\xampp\\htdocs\\drupal\\core\\modules\\tracker\\help_topics\\tracker.tracking_changed_content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 9);
        static $filters = array("escape" => 15);
        static $functions = array("render_var" => 11, "help_route_link" => 11);

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
