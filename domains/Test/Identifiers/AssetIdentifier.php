<?php

namespace Domains\Test\Identifiers;

use Apie\Core\Identifiers\IdentifierInterface;
use Apie\Core\Identifiers\Ulid;
use Domains\Test\Resources\Asset;
use ReflectionClass;

class AssetIdentifier extends Ulid implements IdentifierInterface
{
    public static function getReferenceFor(): ReflectionClass
    {
        return new ReflectionClass(Asset::class);
    }
}
