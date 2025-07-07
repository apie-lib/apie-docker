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

/* Actions/Authentication.php.twig */
class __TwigTemplate_1ccae6cfaa517902e4c0cd6386943803 extends Template
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

namespace App\\Apie\\Example\\Actions;

use Apie\\Common\\ApieFacade;
use Apie\\Core\\Attributes\\Not;
use Apie\\Core\\Attributes\\Requires;
use Apie\\Core\\Attributes\\RuntimeCheck;
use Apie\\Core\\BoundedContext\\BoundedContextId;
use Apie\\Core\\Exceptions\\EntityNotFoundException;
";
        // line 11
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "enable2Fa", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "use Apie\\OtpValueObjects\\OTP;
";
        }
        // line 14
        yield "use App\\Apie\\Example\\Identifiers\\UserId;
use App\\Apie\\Example\\Resources\\User;

class Authentication
{
    public function __construct(private readonly ApieFacade \$apie)
    {
    }

    #[RuntimeCheck(new Not(new Requires('authenticated')))]
    public function verifyAuthentication(string \$username, string \$password";
        // line 24
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "enable2Fa", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield ", ?OTP \$otp";
        }
        yield "): ?User
    {
        try {
            \$user = \$this->apie->find(\$username, new BoundedContextId('example'));
        } catch (EntityNotFoundException) {
            return null;
        }
        if (\$user instanceof User) {
            return \$user->verifyPassword(\$password";
        // line 32
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "enable2Fa", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield ", \$otp";
        }
        yield ") ? \$user : null;
        }

        return null; // @phpstan-ignore-line
    }
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Actions/Authentication.php.twig";
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
        return array (  85 => 32,  72 => 24,  60 => 14,  56 => 12,  54 => 11,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "Actions/Authentication.php.twig", "/app/laravel/installer/user/Actions/Authentication.php.twig");
    }
}
