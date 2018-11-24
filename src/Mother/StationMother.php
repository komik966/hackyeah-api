<?php

declare(strict_types=1);

namespace App\Mother;


use App\Api\Station;
use function count;
use function rand;

final class StationMother
{
    private static $data = [];

    public static function init()
    {
        self::$data = [
            new Station(1, 'Poznań', 52.4006548, 16.7612381),
            new Station(2, 'Warszawa', 52.2330252, 20.7803214),
            new Station(3, 'Kraków', 50.0469014, 19.8644448)
        ];
    }

    public static function random(): Station
    {
        return self::$data[rand(0,count(self::$data)-1)];
    }
    public static function poznan(): Station
    {
        return self::$data[1];
    }

    public static function warszawa(): Station
    {
        return self::$data[2];
    }

    public static function krakow(): Station
    {
        return self::$data[3];
    }

}