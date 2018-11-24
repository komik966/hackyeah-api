<?php

namespace App\DataProvider;

use ApiPlatform\Core\DataProvider\CollectionDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use App\Api\Connection;
use App\Api\Station;
use App\Api\Wheel;
use App\Mother\StationMother;

class StationDataProvider implements CollectionDataProviderInterface, RestrictedDataProviderInterface
{
    public function getCollection(string $resourceClass, string $operationName = null)
    {
        StationMother::init();
        yield StationMother::warszawa();
        yield StationMother::krakow();
        yield StationMother::poznan();
    }

    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return Station::class === $resourceClass;
    }
}
