<?php

namespace App\DataProvider;

use ApiPlatform\Core\DataProvider\CollectionDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use App\Api\Vehicle;
use App\Api\Wheel;

class VehicleDataProvider implements CollectionDataProviderInterface, RestrictedDataProviderInterface
{
    public function getCollection(string $resourceClass, string $operationName = null)
    {
        yield new Vehicle(1, 'foo', [new Wheel(1), new Wheel(2)]);
    }

    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return Vehicle::class === $resourceClass;
    }
}
