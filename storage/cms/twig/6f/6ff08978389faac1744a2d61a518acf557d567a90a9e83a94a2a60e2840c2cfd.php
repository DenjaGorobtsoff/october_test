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

/* W:\OSPanel\domains\october/themes/vorobuwek/partials/footer.htm */
class __TwigTemplate_4eaa32d5625cabd0039a71828b57f03334b221066a64d17618e8670a3d17ef39 extends \Twig\Template
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
        echo "<footer class=\"main-footer\">
    <div class=\"container\">
        <h3>My FOOTER</h3>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci commodi enim expedita id ipsa nesciunt rem?
            Assumenda molestias praesentium reprehenderit?
        </p>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "W:\\OSPanel\\domains\\october/themes/vorobuwek/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"main-footer\">
    <div class=\"container\">
        <h3>My FOOTER</h3>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci commodi enim expedita id ipsa nesciunt rem?
            Assumenda molestias praesentium reprehenderit?
        </p>
    </div>
</footer>", "W:\\OSPanel\\domains\\october/themes/vorobuwek/partials/footer.htm", "");
    }
}
