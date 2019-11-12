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

/* W:\OSPanel\domains\october/themes/vorobuwek/partials/header.htm */
class __TwigTemplate_b3ec019577f08371beb31fbb65ea5113eb399b721f4f5fb6fee54660148bdc89 extends \Twig\Template
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
        echo "<header class=\"main-header\">
    <div class=\"container clearfix\">
        <h1 class=\"logo\">PART OF SITE</h1>

        <nav class=\"main-nav\">
            <ul>
                <li class=\"";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7) == "homePage")) {
            echo " active ";
        }
        echo "\">
                    <a href=";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homePage");
        echo ">Home</a>
                </li>
                <li class=\"";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10) == "movies")) {
            echo " active ";
        }
        echo "\">
                    <a href=";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("movies");
        echo ">Movies</a>
                </li>
            </ul>
        </nav>
    </div>


</header>";
    }

    public function getTemplateName()
    {
        return "W:\\OSPanel\\domains\\october/themes/vorobuwek/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  56 => 10,  51 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"main-header\">
    <div class=\"container clearfix\">
        <h1 class=\"logo\">PART OF SITE</h1>

        <nav class=\"main-nav\">
            <ul>
                <li class=\"{% if this.page.id == 'homePage' %} active {% endif %}\">
                    <a href={{'homePage'|page}}>Home</a>
                </li>
                <li class=\"{% if this.page.id == 'movies' %} active {% endif %}\">
                    <a href={{'movies'|page}}>Movies</a>
                </li>
            </ul>
        </nav>
    </div>


</header>", "W:\\OSPanel\\domains\\october/themes/vorobuwek/partials/header.htm", "");
    }
}
