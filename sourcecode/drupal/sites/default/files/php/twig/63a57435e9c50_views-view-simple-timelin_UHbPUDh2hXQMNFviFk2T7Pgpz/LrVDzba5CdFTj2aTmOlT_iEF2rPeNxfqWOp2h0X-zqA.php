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

/* modules/contrib/simple_timeline/templates/views-view-simple-timeline.html.twig */
class __TwigTemplate_cb0fa69d7fae2482e3394327c4a41cf8 extends \Twig\Template
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
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("simple_timeline/timeline"), "html", null, true);
        echo "
";
        // line 21
        if (($context["attributes"] ?? null)) {
            // line 22
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 22, $this->source), "html", null, true);
            echo ">
";
        }
        // line 24
        echo "  ";
        if (($context["title"] ?? null)) {
            // line 25
            echo "    <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 25, $this->source), "html", null, true);
            echo "</h3>
  ";
        }
        // line 27
        echo "
  <ul ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "attributes", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo ">

    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 31
            echo "      <li";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo ">
        <div class=\"timeline-item-wrapper clearfix\">
          <span class=\"timeline-marker\"></span>
          ";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "
        </div>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
  </ul>

";
        // line 41
        if (($context["attributes"] ?? null)) {
            // line 42
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/simple_timeline/templates/views-view-simple-timeline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 42,  94 => 41,  89 => 38,  79 => 34,  72 => 31,  68 => 30,  63 => 28,  60 => 27,  54 => 25,  51 => 24,  45 => 22,  43 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/simple_timeline/templates/views-view-simple-timeline.html.twig", "C:\\xampp\\htdocs\\drupal\\modules\\contrib\\simple_timeline\\templates\\views-view-simple-timeline.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 21, "for" => 30);
        static $filters = array("escape" => 20);
        static $functions = array("attach_library" => 20);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
                ['attach_library']
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
