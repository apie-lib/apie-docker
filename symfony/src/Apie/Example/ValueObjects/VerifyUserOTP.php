<?php
namespace App\Apie\Example\ValueObjects;

use Apie\Core\Entities\EntityInterface;
use Apie\OtpValueObjects\VerifyOTP;
use App\Apie\Example\Resources\User;
use ReflectionProperty;

/**
 * Used for 2FA in the enable 2FA form. If you never intend to use 2DA, throw away. */
final class VerifyUserOTP extends VerifyOTP
{
    public static function getOtpReference(): ReflectionProperty
    {
        return new ReflectionProperty(User::class, 'totp');
    }

    public static function getOtpLabel(EntityInterface $entity): string
    {
        assert($entity instanceof User);
        return 'Apie test project (' . $entity->getId() . ')';
    }
}