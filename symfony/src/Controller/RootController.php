<?php

namespace App\Controller;

use Apie\Core\BoundedContext\BoundedContextHashmap;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

#[Route('/')]
class RootController
{
    public function __invoke(UrlGeneratorInterface $urlGenerator, BoundedContextHashmap $hashmap): RedirectResponse
    {
        foreach ($hashmap as $key => $value) {
            return new RedirectResponse($urlGenerator->generate('apie.' . $key . '.cms.dashboard'));
        }
        return new Response("No entities found. Pls run this in a terminal:<br /><code>docker exec myapp php bin/console apie:create-domain-object -b example Test</code>");
    }
}
