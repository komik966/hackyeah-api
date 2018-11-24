<?php

namespace App\DataProvider;

use ApiPlatform\Core\DataProvider\CollectionDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use App\Api\Wheel;

class WheelDataProvider implements CollectionDataProviderInterface, RestrictedDataProviderInterface
{
    public function getCollection(string $resourceClass, string $operationName = null)
    {
        yield new Wheel(1);
        yield new Wheel(2);
        yield new Wheel(3);
    }

    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return Wheel::class === $resourceClass;
    }
}
