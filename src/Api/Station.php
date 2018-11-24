<?php

namespace App\Api;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(normalizationContext={"groups"={"read"}})
 */
class Station
{
    /**
     * @ApiProperty(identifier=true)
     * @Groups("read")
     * @var int
     */
    public $id;

    /**
     * @Groups("read")
     * @var string
     */
    public $name;

    /**
     * @Groups("read")
     * @var float
     */
    public $latitude;

    /**
     * @Groups("read")
     * @var float
     */
    public $longitude;



    public function __construct(int $id,string $name, float $latitude, float $longitude)
    {
        $this->id = $id;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->name = $name;
    }
}
