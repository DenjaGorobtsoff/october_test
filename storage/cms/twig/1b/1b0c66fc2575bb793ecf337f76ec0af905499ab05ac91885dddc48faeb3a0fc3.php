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
class __TwigTemplate_c35e3e978ff00671a7a52c4aa580f945693550f7f93d517fafa5d375e437d680 extends \Twig\Template
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
        // line 7
        echo 23456;
        echo "
";
        // line 8
        if (($context["record"] ?? null)) {
            // line 9
            echo "    <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, false, 9), "html", null, true);
            echo "</h2>
    <h3>Gallery</h3>
    <ul class=\"gallery clearfix\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "images_gallery", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 13
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 13), "html", null, true);
                echo "\">
                <li><img src=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => "150", 1 => ($context["auto"] ?? null)], "method", false, false, false, 14), "html", null, true);
                echo "\" alt=\"\"></li>
            </a>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </ul>

    <h2>About Bird</h2>


    <p>";
            // line 23
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, false, 23);
            echo "</p>

    <h3>Birds Type</h3>

    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "types", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["bird_type"]) {
                // line 28
                echo "
        <a href=\"";
                // line 29
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("birds-type", ["slug" => twig_get_attribute($this->env, $this->source, $context["bird_type"], "slug", [], "any", false, false, false, 29)]);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bird_type"], "bird_type", [], "any", false, false, false, 29), "html", null, true);
                echo "</a><br />

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bird_type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "
    <p><span class=\"date\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "created_at", [], "any", false, false, false, 33), "html", null, true);
            echo "</span></p>

";
        } else {
            // line 36
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
        // line 38
        echo "
";
        // line 39
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("commentsPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
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
        return array (  130 => 39,  127 => 38,  121 => 36,  115 => 33,  112 => 32,  101 => 29,  98 => 28,  94 => 27,  87 => 23,  80 => 18,  70 => 14,  65 => 13,  61 => 12,  54 => 9,  52 => 8,  48 => 7,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}



{{23456}}
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

    <h2>About Bird</h2>


    <p>{{record.description | raw}}</p>

    <h3>Birds Type</h3>

    {% for bird_type in record.types %}

        <a href=\"{{ 'birds-type' | page ( { slug :bird_type.slug} ) }}\">{{ bird_type.bird_type }}</a><br />

    {% endfor %}

    <p><span class=\"date\">{{record.created_at}}</span></p>

{% else %}
    {{ notFoundMessage }}
{% endif %}

{% component 'commentsPost' %}", "W:\\OSPanel\\domains\\october/themes/vorobuwek/pages/bird.htm", "");
    }
}
