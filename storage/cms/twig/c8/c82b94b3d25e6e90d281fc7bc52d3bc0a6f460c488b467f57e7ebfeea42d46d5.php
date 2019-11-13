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

/* W:\OSPanel\domains\october/themes/vorobuwek/pages/bird.htm */
class __TwigTemplate_43f1dafd85237a201eac2528e8e3063668e171e85cd171944cdd266e676d7ae8 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, false, 3);
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "    <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
            echo "</h2>
    <h3>Gallery</h3>
    <ul class=\"gallery clearfix\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "images_gallery", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 10
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 10), "html", null, true);
                echo "\">
                <li><img src=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => "150", 1 => ($context["auto"] ?? null)], "method", false, false, false, 11), "html", null, true);
                echo "\" alt=\"\"></li>
            </a>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    </ul>


    <p>";
            // line 18
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, false, 18);
            echo "</p>

    <span class=\"date\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "created_at", [], "any", false, false, false, 20), "html", null, true);
            echo "</span>

";
        } else {
            // line 23
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "W:\\OSPanel\\domains\\october/themes/vorobuwek/pages/bird.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  84 => 20,  79 => 18,  74 => 15,  64 => 11,  59 => 10,  55 => 9,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}
    <h2>{{record.name}}</h2>
    <h3>Gallery</h3>
    <ul class=\"gallery clearfix\">
        {% for image in record.images_gallery %}
            <a href=\"{{ image.path }}\">
                <li><img src=\"{{image.thumb('150', auto)}}\" alt=\"\"></li>
            </a>

        {% endfor %}
    </ul>


    <p>{{record.description | raw}}</p>

    <span class=\"date\">{{record.created_at}}</span>

{% else %}
    {{ notFoundMessage }}
{% endif %}", "W:\\OSPanel\\domains\\october/themes/vorobuwek/pages/bird.htm", "");
    }
}
