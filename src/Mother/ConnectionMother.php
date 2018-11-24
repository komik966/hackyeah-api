<?php

declare(strict_types=1);

namespace App\Mother;


use App\Api\Connection;

final class ConnectionMother
{
    public static function random(): Connection
    {
        StationMother::init();
        return new Connection(1, StationMother::random(), StationMother::random());
    }
}