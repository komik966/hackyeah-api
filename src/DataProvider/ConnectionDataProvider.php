<?php

namespace App\DataProvider;

use ApiPlatform\Core\DataProvider\CollectionDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use App\Api\Connection;
use App\Api\Wheel;
use App\Mother\ConnectionMother;
use function strtotime;
use Symfony\Component\HttpFoundation\RequestStack;
use function var_dump;

class ConnectionDataProvider implements CollectionDataProviderInterface, RestrictedDataProviderInterface
{
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    public function getCollection(string $resourceClass, string $operationName = null)
    {
        $request = $this->requestStack->getCurrentRequest();

        $index = explode('\\', $resourceClass);
        $index = strtolower(end($index));

        $filters = $request->query->all();


        for ($i = 0; $i < 10; ++$i) {
            $ret = ConnectionMother::random();
            if (isset($filters['dateTime'])) {
                if (strtotime($filters['dateTime']) < $ret->dateTime->getTimestamp()) {
                    yield $ret;
                }
            } else {
                yield $ret;
            }
        }
    }

    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return Connection::class === $resourceClass;
    }
}
