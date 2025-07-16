<?php

namespace Domains\Example\Resources;

use Apie\Core\Attributes\RemovalCheck;
use Apie\Core\Attributes\Requires;
use Apie\Core\Attributes\RuntimeCheck;
use Apie\Core\Attributes\StaticCheck;
use Apie\Core\Entities\EntityInterface;
use Domains\Example\Dtos\DtoExample;
use Domains\Example\Identifiers\ExampleId;

#[RuntimeCheck(new Requires('authenticated'))]
#[RemovalCheck(new StaticCheck())]
class Example implements EntityInterface
{
    private ExampleId $id;

    public DtoExample $dtoExample;

    public function __construct(private string $requiredString)
    {
        $this->id = ExampleId::createRandom(); // @phpstan-ignore-line
    }
    public function getId(): ExampleId
    {
        return $this->id;
    }

    public function getRequiredString(): string
    {
        return $this->requiredString;
    }
}
