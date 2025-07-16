<?php
namespace Domains\Example\Resources;

use Apie\Common\Interfaces\CheckLoginStatusInterface;
use Apie\CommonValueObjects\Email;
use Apie\Core\Attributes\Internal;
use Apie\Core\Entities\EntityWithStatesInterface;
use Apie\Core\Lists\StringList;
use Apie\Serializer\Exceptions\ValidationException;
use Apie\Core\ValueObjects\DatabaseText;
use Apie\TextValueObjects\EncryptedPassword;
use Apie\TextValueObjects\StrongPassword;
use Domains\Example\Identifiers\UserId;
use LogicException;

final class User implements EntityWithStatesInterface, CheckLoginStatusInterface
{
    private UserId $id;
    private EncryptedPassword $password;
    private ?DatabaseText $blockedReason = null;
    
    public function __construct(
        private Email $email,
        StrongPassword $password
    ) {
        $this->id = UserId::fromNative($email);
            
        $this->password = EncryptedPassword::fromUnencryptedPassword($password);
    }

    public function getId(): UserId
    {
        return $this->id;
    }

    public function getEmail(): Email
    {
        return $this->email;
    }

    public function isDisabled(): bool
    {
        return $this->blockedReason !== null;
    }

    public function getBlockedReason(): ?DatabaseText
    {
        return $this->blockedReason;
    }

    private function checkUnblocked(string $field): void
    {
        if ($this->blockedReason !== null) {
            throw ValidationException::createFromArray([
                $field => new LogicException('User "' . $this->email . '" is blocked!')
            ]);
        }
    }

    public function block(DatabaseText $blockedReason): User
    {
        $this->checkUnblocked('blockedReason');
        $this->blockedReason = $blockedReason;

        return $this;
    }

    public function unblock(): User
    {
        if ($this->blockedReason === null) {
            throw new LogicException('User "' . $this->email . '" is not blocked!');
        }
        $this->blockedReason = null;

        return $this;
    }

    #[Internal]
    public function provideAllowedMethods(): StringList
    {
        return new StringList(
            $this->isDisabled() ? ['unblock'] : ['block']
        ); 
    }


    public function verifyPassword(string $password): bool
    {
        $this->checkUnblocked('password');
        return $this->password->verifyUnencryptedPassword($password);
    }
}