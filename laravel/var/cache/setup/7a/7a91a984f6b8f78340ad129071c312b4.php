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

/* Dtos/ApplicationInfo.php.twig */
class __TwigTemplate_b2b33c4647cb94bc61b599a97435a2e2 extends Template
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

use Apie\\Core\\ApieLib;
use Apie\\Core\\Dto\\DtoInterface;

class ApplicationInfo implements DtoInterface
{
    public string \$apieVersion = ApieLib::VERSION;

    public string \$serverName;

    public function __construct()
    {
        \$this->serverName = gethostname() ? : '(unknown)';
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
        return "Dtos/ApplicationInfo.php.twig";
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
        return new Source("", "Dtos/ApplicationInfo.php.twig", "/app/laravel/installer/example/Dtos/ApplicationInfo.php.twig");
    }
}
