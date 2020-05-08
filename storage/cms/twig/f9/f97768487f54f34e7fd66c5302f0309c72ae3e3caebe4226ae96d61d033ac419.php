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

/* W:\OSPanel\domains\october/plugins/gorob4ik/birds/components/somebird/default.htm */
class __TwigTemplate_f2efc0450332f651a14cbee4c4816f9f234108d21f9176b501a064c2a9743378 extends \Twig\Template
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
        $context["birdList"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "birdList", [], "any", false, false, false, 1);
        // line 2
        echo "
<div>
    <ul>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["birdList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["bird"]) {
            // line 6
            echo "            <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bird"], "name", [], "any", false, false, false, 6), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bird'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "W:\\OSPanel\\domains\\october/plugins/gorob4ik/birds/components/somebird/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set birdList  = __SELF__.birdList %}

<div>
    <ul>
        {% for bird in birdList %}
            <li>{{bird.name}}</li>
        {% endfor %}
    </ul>
</div>", "W:\\OSPanel\\domains\\october/plugins/gorob4ik/birds/components/somebird/default.htm", "");
    }
}
