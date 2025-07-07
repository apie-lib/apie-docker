<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* app/Http/Controllers/RootController.php.twig */
class __TwigTemplate_18f0ae8c58a7cf57324717d4d4bec5ea extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace App\\Http\\Controllers;

use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\Routing\\Exception\\RouteNotFoundException;

class RootController
{
    public function __invoke(): RedirectResponse
    {
        try {
            return new RedirectResponse(route('apie.example.cms.dashboard'));
        } catch (RouteNotFoundException) {
            return new RedirectResponse(route('apie.example.swagger_ui'));
        }
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "app/Http/Controllers/RootController.php.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "app/Http/Controllers/RootController.php.twig", "/app/laravel/installer/laravel/app/Http/Controllers/RootController.php.twig");
    }
}
