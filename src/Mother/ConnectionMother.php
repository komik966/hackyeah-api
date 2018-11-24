<?php

declare(strict_types=1);

namespace App\Mother;


use App\Api\Connection;
use DateTime;
use function strtotime;
use function time;

final class ConnectionMother
{
    public static function random(): Connection
    {
        StationMother::init();
        return new Connection(1, StationMother::random(), StationMother::random(), self::randomDate());
    }

    public static function randomDate(): DateTime
    {
        $randomTimestamp = mt_rand(time(), strtotime("+ 10 days"));
        $randomDate = new DateTime();
        $randomDate->setTimestamp($randomTimestamp);
        return $randomDate;
    }
}