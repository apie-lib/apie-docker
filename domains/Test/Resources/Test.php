<?php

namespace Domains\Test\Resources;

use Domains\Test\Identifiers\TestIdentifier;

class Test implements \Apie\Core\Entities\EntityInterface
{
    public function __construct(
        private TestIdentifier $id,
    ) {
    }

    public function getId(): TestIdentifier
    {
        return $this->id;
    }
}
