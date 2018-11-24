<?php

namespace App\Api;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(normalizationContext={"groups"={"read"}})
 */
class Vehicle
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
     * @var Wheel[]
     */
    public $wheels;

    public function __construct(int $id, string $name, array $wheels)
    {
        $this->id = $id;
        $this->name = $name;
        $this->wheels = $wheels;
    }
}
