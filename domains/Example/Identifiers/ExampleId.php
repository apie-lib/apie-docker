<?php

namespace Domains\Example\Identifiers;

use Domains\Example\Resources\Example;
use Apie\Core\Identifiers\IdentifierInterface;
use Apie\Core\Identifiers\UuidV4;
use ReflectionClass;

/**
 * @implements IdentifierInterface<Example>
 */
class ExampleId extends UuidV4 implements IdentifierInterface
{
    public static function getReferenceFor(): ReflectionClass
    {
        return new ReflectionClass(Example::class);
    }
}
