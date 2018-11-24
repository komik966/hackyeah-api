<?php

namespace App\DataProvider;

use ApiPlatform\Core\DataProvider\CollectionDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use App\Api\Connection;
use App\Api\Wheel;
use App\Mother\ConnectionMother;

class ConnectionDataProvider implements CollectionDataProviderInterface, RestrictedDataProviderInterface
{
    public function getCollection(string $resourceClass, string $operationName = null)
    {
        yield ConnectionMother::random();
        yield ConnectionMother::random();
        yield ConnectionMother::random();
    }

    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return Connection::class === $resourceClass;
    }
}
