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

/* @help_topics/color.changing.html.twig */
class __TwigTemplate_ab7dbb7b775c3bc1c228aeeecc2ed28d extends \Twig\Template
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
        // line 6
        ob_start(function () { return ''; });
        // line 7
        echo "  ";
        echo t("Appearance", array());
        $context["appearance_link_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        $context["appearance_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help_topics\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["appearance_link_text"] ?? null), 9, $this->source), "system.themes_page"));
        // line 10
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 11
        echo t("Change the colors for links, backgrounds, and text in a theme that supports the Color module. Color-specific stylesheets will be generated and saved; you will need to follow these steps again to regenerate the stylesheets if you make any changes to the base stylesheets of your theme.", array());
        echo "</p>
<h2>";
        // line 12
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 14
        echo t("In the Manage administrative menu, navigate to @appearance_link.", array("@appearance_link" => ($context["appearance_link"] ?? null), ));
        echo "</li>
  <li>";
        // line 15
        echo t("Click the <em>Settings</em> link for the theme you want to change the colors of.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("In the <em>Color scheme</em> section, choose new colors for the backgrounds, text, and links that your theme defines colors for. However, if you do not see color settings, then your theme does not support the Color module.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("Click <em>Save configuration</em>. Color-specific stylesheets will be generated and saved in the file system.", array());
        echo "</li>
</ol>

<h2>";
        // line 20
        echo t("Additional resources", array());
        echo "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/8/core/modules/color/overview\">";
        // line 22
        echo t("Color module overview", array());
        echo "</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@help_topics/color.changing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  79 => 20,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  56 => 12,  52 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/color.changing.html.twig", "C:\\xampp\\htdocs\\drupal\\core\\modules\\color\\help_topics\\color.changing.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 6, "trans" => 7);
        static $filters = array("escape" => 14);
        static $functions = array("render_var" => 9, "help_route_link" => 9);

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
