<?php

namespace Domains\Example\Identifiers;

use Apie\CommonValueObjects\Email;
use Apie\Core\Identifiers\IdentifierInterface;
use Domains\Example\Resources\User;
use ReflectionClass;

/**
 * @implements IdentifierInterface<User>
 */
class UserId extends Email implements IdentifierInterface
{
    public static function getReferenceFor(): ReflectionClass
    {
        return new ReflectionClass(User::class);
    }
}
