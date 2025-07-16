<?php

namespace Domains\Test\Identifiers;

use Apie\Core\Identifiers\IdentifierInterface;
use Apie\Core\Identifiers\Ulid;
use Domains\Test\Resources\Test;
use ReflectionClass;

class TestIdentifier extends Ulid implements IdentifierInterface
{
    public static function getReferenceFor(): ReflectionClass
    {
        return new ReflectionClass(Test::class);
    }
}
