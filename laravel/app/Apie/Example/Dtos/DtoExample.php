<?php

namespace App\Apie\Example\Dtos;

use Apie\CommonValueObjects\FullName;
use Apie\Core\Dto\DtoInterface;
use Apie\Core\ValueObjects\DatabaseText;

class DtoExample implements DtoInterface
{
    public DatabaseText $description;

    public FullName $name;
}