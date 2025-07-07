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

/* Resources/Example.php.twig */
class __TwigTemplate_e438c9b34620fcff0915f0348a3bc1db extends Template
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

namespace App\\Apie\\Example\\Resources;

use Apie\\Core\\Attributes\\RemovalCheck;
";
        // line 6
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "includeUser", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "use Apie\\Core\\Attributes\\Requires;
use Apie\\Core\\Attributes\\RuntimeCheck;
";
        }
        // line 10
        yield "use Apie\\Core\\Attributes\\StaticCheck;
use Apie\\Core\\Entities\\EntityInterface;
use App\\Apie\\Example\\Dtos\\DtoExample;
use App\\Apie\\Example\\Identifiers\\ExampleId;

";
        // line 15
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "includeUser", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "#[RuntimeCheck(new Requires('authenticated'))]
";
        }
        // line 18
        yield "#[RemovalCheck(new StaticCheck())]
class Example implements EntityInterface
{
    private ExampleId \$id;

    public DtoExample \$dtoExample;

    public function __construct(private string \$requiredString)
    {
        \$this->id = ExampleId::createRandom(); // @phpstan-ignore-line
    }
    public function getId(): ExampleId
    {
        return \$this->id;
    }

    public function getRequiredString(): string
    {
        return \$this->requiredString;
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
        return "Resources/Example.php.twig";
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
        return array (  69 => 18,  65 => 16,  63 => 15,  56 => 10,  51 => 7,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "Resources/Example.php.twig", "/app/laravel/installer/example/Resources/Example.php.twig");
    }
}
