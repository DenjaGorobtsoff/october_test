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

/* W:\OSPanel\domains\october/plugins/saurabhdhariwal/comments/components/comments/default.htm */
class __TwigTemplate_2a3e0c127d4694b2628208d03cdf22f388e36257b26733773e05c68220efb68b extends \Twig\Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", [], "any", false, false, false, 1);
        // line 2
        echo "
<div class=\"col-xs-6\" id=\"comments-content\">
    ";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "count", [], "any", false, false, false, 4) > 0)) {
            // line 5
            echo "        <h3 class=\"text-right\"><span id=\"comments-count\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "count", [], "any", false, false, false, 5), "html", null, true);
            echo "</span> comments</h3>
    ";
        }
        // line 7
        echo "    ";
        if ((($context["user"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, false, 7), "allow_guest", [], "any", false, false, false, 7))) {
            // line 8
            echo "
        ";
            // line 9
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("commentsPost::form"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 10
            echo "
    ";
        }
        // line 12
        echo "    <div class=\"comments\">
        <ul>
            ";
        // line 14
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['posts'] = ($context["posts"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("commentsPost::list"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "        </ul>
    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "W:\\OSPanel\\domains\\october/plugins/saurabhdhariwal/comments/components/comments/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  69 => 14,  65 => 12,  61 => 10,  57 => 9,  54 => 8,  51 => 7,  45 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = __SELF__.posts %}

<div class=\"col-xs-6\" id=\"comments-content\">
    {% if(__SELF__.count) > 0 %}
        <h3 class=\"text-right\"><span id=\"comments-count\">{{ __SELF__.count }}</span> comments</h3>
    {% endif %}
    {% if(user or __SELF__.settings.allow_guest) %}

        {% partial \"commentsPost::form\" %}

    {% endif %}
    <div class=\"comments\">
        <ul>
            {% partial \"commentsPost::list\" posts=posts %}
        </ul>
    </div>
</div>


", "W:\\OSPanel\\domains\\october/plugins/saurabhdhariwal/comments/components/comments/default.htm", "");
    }
}
