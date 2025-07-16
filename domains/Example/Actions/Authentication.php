<?php

namespace Domains\Example\Actions;

use Apie\Common\ApieFacade;
use Apie\Core\Attributes\Not;
use Apie\Core\Attributes\Requires;
use Apie\Core\Attributes\RuntimeCheck;
use Apie\Core\BoundedContext\BoundedContextId;
use Apie\Core\Exceptions\EntityNotFoundException;
use Domains\Example\Identifiers\UserId;
use Domains\Example\Resources\User;

class Authentication
{
    public function __construct(private readonly ApieFacade $apie)
    {
    }

    #[RuntimeCheck(new Not(new Requires('authenticated')))]
    public function verifyAuthentication(string $username, string $password): ?User
    {
        try {
            $user = $this->apie->find($username, new BoundedContextId('example'));
        } catch (EntityNotFoundException) {
            return null;
        }
        if ($user instanceof User) {
            return $user->verifyPassword($password) ? $user : null;
        }

        return null; // @phpstan-ignore-line
    }
}