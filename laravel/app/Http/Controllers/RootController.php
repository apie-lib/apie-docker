<?php

namespace App\Http\Controllers;

use Apie\Core\BoundedContext\BoundedContextHashmap;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class RootController
{
    public function __invoke(BoundedContextHashmap $hashmap): RedirectResponse
    {
        foreach ($hashmap as $key => $value) {
            return new RedirectResponse(route('apie.' . $key . '.cms.dashboard'));
        }
        return new Response("No entities found. Pls run this in a terminal:<br /><code>docker exec myapp php artisan apie:create-domain-object -b example Test</code>");
    }
}
