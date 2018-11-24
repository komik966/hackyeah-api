<?php

declare(strict_types=1);

namespace App\Api;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(normalizationContext={"groups"={"read"}})
 */
class Connection
{
    /**
     * @ApiProperty(identifier=true)
     * @Groups("read")
     * @var int
     */
    public $id;

    /**
     * @Groups("read")
     * @var Station
     */
    public $from;

    /**
     * @Groups("read")
     * @var Station
     */
    public $to;

    public function __construct(int $id, Station $from, Station $to)
    {
        $this->id = $id;
        $this->from = $from;
        $this->to = $to;
    }
}