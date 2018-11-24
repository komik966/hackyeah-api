<?php

declare(strict_types=1);

namespace App\Api;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use DateTime;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Filter\DateFilter;

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

    /**
     * @Groups("read")
     * @ApiFilter(DateFilter::class)
     * @var DateTime
     */
    public $dateTime;

    public function __construct(int $id, Station $from, Station $to, DateTime $dateTime)
    {
        $this->id = $id;
        $this->from = $from;
        $this->to = $to;
        $this->dateTime = $dateTime;
    }
}