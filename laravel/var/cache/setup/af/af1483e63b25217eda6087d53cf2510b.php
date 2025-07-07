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

/* Dtos/DtoExample.php.twig */
class __TwigTemplate_52337a20d79769b827790726bf096318 extends Template
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

namespace App\\Apie\\Example\\Dtos;

";
        // line 5
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "setup", [], "any", false, false, false, 5) != "minimal")) {
            // line 6
            yield "use Apie\\CommonValueObjects\\FullName;
";
        }
        // line 8
        yield "use Apie\\Core\\Dto\\DtoInterface;
use Apie\\Core\\ValueObjects\\DatabaseText;

class DtoExample implements DtoInterface
{
    public DatabaseText \$description;

    public ";
        // line 15
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "setup", [], "any", false, false, false, 15) == "minimal")) {
            yield "string";
        } else {
            yield "FullName";
        }
        yield " \$name;
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Dtos/DtoExample.php.twig";
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
        return array (  63 => 15,  54 => 8,  50 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "Dtos/DtoExample.php.twig", "/app/laravel/installer/example/Dtos/DtoExample.php.twig");
    }
}
