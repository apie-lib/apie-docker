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

/* config/apie.php.twig */
class __TwigTemplate_f6be99c78cb82bad1009b622eea3b3dc extends Template
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

use Apie\\DoctrineEntityDatalayer\\DoctrineEntityDatalayer;

return [
    'cms' => [
        'base_url' => '/cms',
        'dashboard_template' => 'apie/dashboard',
        'error_template' => 'apie::error',
        'asset_folders' => [],
    ],
    'doctrine' => [
        'build_once' => false,
        'run_migrations' => true,
        'connection_params' => [
            'driver' => 'pdo_sqlite',
            'path' => base_path(\"db.sqlite\"),
        ]
    ],
    'datalayers' => [
        'default_datalayer' => DoctrineEntityDatalayer::class,
    ],
    'bounded_contexts' => [
        'example' => [
            'entities_folder' => base_path(\"app/Apie/Example/Resources/\"),
            'entities_namespace' => 'App\\Apie\\Example\\Resources',
            'actions_folder' => base_path(\"app/Apie/Example/Actions/\"),
            'actions_namespace' => 'App\\Apie\\Example\\Actions',
        ],
    ],
    'rest_api' => [
        'base_url' => '/api',
    ]
];
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "config/apie.php.twig";
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
        return new Source("", "config/apie.php.twig", "/app/laravel/installer/laravel/config/apie.php.twig");
    }
}
