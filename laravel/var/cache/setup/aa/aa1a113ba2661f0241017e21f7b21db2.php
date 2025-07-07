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

/* Resources/User.php.twig */
class __TwigTemplate_3d8e91042ba4ca6a8eea53fc7cd2970f extends Template
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

use Apie\\Common\\Interfaces\\CheckLoginStatusInterface;
use Apie\\CommonValueObjects\\Email;
use Apie\\Core\\Attributes\\Internal;
use Apie\\Core\\Entities\\EntityWithStatesInterface;
use Apie\\Core\\Lists\\StringList;
";
        // line 9
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "enable2Fa", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "use Apie\\OtpValueObjects\\OTP;
use Apie\\OtpValueObjects\\TOTPSecret;
";
        }
        // line 13
        yield "use Apie\\Serializer\\Exceptions\\ValidationException;
use Apie\\Core\\ValueObjects\\DatabaseText;
use Apie\\TextValueObjects\\EncryptedPassword;
use Apie\\TextValueObjects\\StrongPassword;
use App\\Apie\\Example\\Identifiers\\UserId;
";
        // line 18
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "enable2Fa", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "use App\\Apie\\Example\\ValueObjects\\VerifyUserOTP;
";
        }
        // line 20
        yield "use LogicException;

final class User implements EntityWithStatesInterface, CheckLoginStatusInterface
{
    private UserId \$id;
    private EncryptedPassword \$password;
    private ?DatabaseText \$blockedReason = null;
    ";
        // line 27
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "enable2Fa", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "private TOTPSecret \$totp;
    private bool \$totpActivated = false;
    ";
        }
        // line 31
        yield "
    public function __construct(
        private Email \$email,
        StrongPassword \$password
    ) {
        \$this->id = UserId::fromNative(\$email);
        ";
        // line 37
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "enable2Fa", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "\$this->totp = TotpSecret::createRandom();";
        }
        // line 40
        yield "    
        \$this->password = EncryptedPassword::fromUnencryptedPassword(\$password);
    }

    public function getId(): UserId
    {
        return \$this->id;
    }

    public function getEmail(): Email
    {
        return \$this->email;
    }

    public function isDisabled(): bool
    {
        return \$this->blockedReason !== null;
    }

    public function getBlockedReason(): ?DatabaseText
    {
        return \$this->blockedReason;
    }

    private function checkUnblocked(string \$field): void
    {
        if (\$this->blockedReason !== null) {
            throw ValidationException::createFromArray([
                \$field => new LogicException('User \"' . \$this->email . '\" is blocked!')
            ]);
        }
    }

    public function block(DatabaseText \$blockedReason): User
    {
        \$this->checkUnblocked('blockedReason');
        \$this->blockedReason = \$blockedReason;

        return \$this;
    }

    public function unblock(): User
    {
        if (\$this->blockedReason === null) {
            throw new LogicException('User \"' . \$this->email . '\" is not blocked!');
        }
        \$this->blockedReason = null;

        return \$this;
    }

    #[Internal]
    public function provideAllowedMethods(): StringList
    {
        return new StringList(
            \$this->isDisabled() ? ['unblock'] : ['block'";
        // line 95
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "enable2Fa", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield ", (\$this->has2FaEnabled() ? 'reset2FA' : 'enable2FA'), ";
        }
        yield "]
        ); 
    }

";
        // line 99
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "enable2Fa", [], "any", false, false, false, 99)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 100
            yield "    public function has2FaEnabled(): bool
    {
        return \$this->totpActivated;
    }

    public function reset2FA(): void
    {
        \$this->checkUnblocked('');
        \$this->totp = TotpSecret::createRandom();
        \$this->totpActivated = false;
    }
    
    public function enable2FA(VerifyUserOTP \$otp): void
    {
        \$this->checkUnblocked('otp');
        if (\$this->totp->verify(\$otp)) {
            \$this->totpActivated = true;
        } else {
            throw ValidationException::createFromArray([
                'otp' => new LogicException('Code is incorrect')
            ]);
        }
    }
";
        }
        // line 124
        yield "
    public function verifyPassword(string \$password";
        // line 125
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "enable2Fa", [], "any", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield ", ?OTP \$otp";
        }
        yield "): bool
    {
        \$this->checkUnblocked('password');
        ";
        // line 128
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "enable2Fa", [], "any", false, false, false, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 129
            yield "if (!\$this->password->verifyUnencryptedPassword(\$password)) {
            return false;
        }
        if (\$this->totpActivated && \$otp) {
            return \$this->totp->verify(\$otp);
        }
        
        return !\$this->totpActivated;";
        } else {
            // line 138
            yield "return \$this->password->verifyUnencryptedPassword(\$password);";
        }
        // line 140
        yield "
    }
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Resources/User.php.twig";
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
        return array (  220 => 140,  217 => 138,  207 => 129,  205 => 128,  197 => 125,  194 => 124,  168 => 100,  166 => 99,  157 => 95,  100 => 40,  97 => 38,  95 => 37,  87 => 31,  82 => 28,  80 => 27,  71 => 20,  66 => 18,  59 => 13,  54 => 10,  52 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "Resources/User.php.twig", "/app/laravel/installer/user/Resources/User.php.twig");
    }
}
