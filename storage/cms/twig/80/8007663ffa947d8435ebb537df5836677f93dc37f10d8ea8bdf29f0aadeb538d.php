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

/* W:\OSPanel\domains\october/plugins/saurabhdhariwal/comments/components/comments/list.htm */
class __TwigTemplate_cbafba5bee297fb107ccf47fdd13734dd80b6a8134ca6e7a2afbb5d11ca93af9 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "<li>
    <div class=\"comment\" id=\"comment-";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 3), "html", null, true);
            echo "\">
        <div class=\"comment-avatar\">
            ";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["post"], "avatar", [], "any", false, false, false, 5);
            echo "
        </div>
        <div class=\"comment-content\">
            <div class=\"comment-header\">
                <span class=\"comment-name\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 9), "html", null, true);
            echo "</span>
                <a class=\"comment-date\" href=\"#comment-";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 10), "html", null, true);
            echo "\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, false, 11), "diffForHumans", [], "any", false, false, false, 11), "html", null, true);
            echo "
                </a>
            </div>
            <div>";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 14);
            echo "</div>
            <div class=\"comment-footer\">
                <a class=\"comment-reply\" onclick=\"Comment.replay(event,'";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "')\">Reply</a>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>

    ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["post"], "children", [], "any", false, false, false, 22)) {
                // line 23
                echo "    <ul>
        ";
                // line 24
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['posts'] = twig_get_attribute($this->env, $this->source, $context["post"], "children", [], "any", false, false, false, 24)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("commentsPost::list"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 25
                echo "    </ul>
    ";
            }
            // line 27
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "W:\\OSPanel\\domains\\october/plugins/saurabhdhariwal/comments/components/comments/list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 27,  94 => 25,  89 => 24,  86 => 23,  84 => 22,  75 => 16,  70 => 14,  64 => 11,  60 => 10,  56 => 9,  49 => 5,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for post in posts %}
<li>
    <div class=\"comment\" id=\"comment-{{post.id}}\">
        <div class=\"comment-avatar\">
            {{post.avatar|raw}}
        </div>
        <div class=\"comment-content\">
            <div class=\"comment-header\">
                <span class=\"comment-name\">{{post.name}}</span>
                <a class=\"comment-date\" href=\"#comment-{{post.id}}\">
                    {{post.created_at.diffForHumans}}
                </a>
            </div>
            <div>{{post.content|raw}}</div>
            <div class=\"comment-footer\">
                <a class=\"comment-reply\" onclick=\"Comment.replay(event,'{{post.id}}')\">Reply</a>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>

    {% if post.children %}
    <ul>
        {% partial \"commentsPost::list\" posts=post.children %}
    </ul>
    {% endif %}
</li>
{% endfor %}", "W:\\OSPanel\\domains\\october/plugins/saurabhdhariwal/comments/components/comments/list.htm", "");
    }
}
