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

/* ValueObjects/VerifyUserOTP.php.twig */
class __TwigTemplate_87364a438938d8c7c9d37cd7a8e19593 extends Template
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
namespace App\\Apie\\Example\\ValueObjects;

use Apie\\Core\\Entities\\EntityInterface;
use Apie\\OtpValueObjects\\VerifyOTP;
use App\\Apie\\Example\\Resources\\User;
use ReflectionProperty;

/**
 * Used for 2FA in the enable 2FA form. ";
        // line 10
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "enable2Fa", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "If you never intend to use 2DA, throw away.";
        }
        // line 11
        yield " */
final class VerifyUserOTP extends VerifyOTP
{
    public static function getOtpReference(): ReflectionProperty
    {
        return new ReflectionProperty(User::class, 'totp');
    }

    public static function getOtpLabel(EntityInterface \$entity): string
    {
        assert(\$entity instanceof User);
        return 'Apie test project (' . \$entity->getId() . ')';
    }
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "ValueObjects/VerifyUserOTP.php.twig";
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
        return array (  57 => 11,  53 => 10,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "ValueObjects/VerifyUserOTP.php.twig", "/app/laravel/installer/user/ValueObjects/VerifyUserOTP.php.twig");
    }
}
