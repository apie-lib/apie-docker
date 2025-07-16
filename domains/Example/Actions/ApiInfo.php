<?php

namespace Domains\Example\Actions;

use Domains\Example\Dtos\ApplicationInfo;

class ApiInfo
{
    public function __invoke(): ApplicationInfo
    {
        return new ApplicationInfo();
    }
}
