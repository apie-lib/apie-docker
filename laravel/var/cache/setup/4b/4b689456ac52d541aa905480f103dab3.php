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

/* resources/views/apie/dashboard.blade.php.twig */
class __TwigTemplate_06631c8a5e41e986e5e69bf32d19c16f extends Template
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
        yield "<p>This is the Apie example app. The only application code can be found in app\\Apie and contains just domain objects.
The rest is just done with apie/rest-api and apie/cms.</p>

<p>
You are now viewing the CMS dashboard, but you can also see the <a href=\"";
        // line 5
        yield "{{";
        yield " url('/api/example') }}\">Rest API generated Swagger UI page.</a>
</p>

<p>
  How to continue?
  <ul>
    <li>Set up database if you have a MYSQL database.
      <ul>
        <li>Open config/apie.json in a text editor</li>
        <li>Change the database DSN to add username, password host and database name</li>
      </ul>
    </li>
    <li>Adding console commands? Do <pre>composer require apie/console:";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["apieVersion"] ?? null), "html", null, true);
        yield "</pre> to get console commands to create resources.</li>
  </ul>
</p>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "resources/views/apie/dashboard.blade.php.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  63 => 17,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "resources/views/apie/dashboard.blade.php.twig", "/app/laravel/installer/laravel-cms/resources/views/apie/dashboard.blade.php.twig");
    }
}
