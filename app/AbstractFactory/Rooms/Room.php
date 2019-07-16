<?php

declare(strict_types=1);

namespace App\AbstractFactory\Rooms;

use App\AbstractFactory\MapSite;

class Room implements MapSite
{
    const DIRECTION_NORTH = 'NORTH';
    const DIRECTION_SOUTH = 'SOUTH';
    const DIRECTION_EAST = 'EAST';
    const DIRECTION_WEST = 'WEST';

    /**
     * @var \App\AbstractFactory\MapSite[]|null[]
     */
    protected $sides;

    /**
     * @var int
     */
    public $roomNumber;

    public function __construct(int $roomNumber)
    {
        $this->sides = [
            self::DIRECTION_NORTH => null,
            self::DIRECTION_SOUTH => null,
            self::DIRECTION_EAST => null,
            self::DIRECTION_WEST => null,
        ];
        $this->roomNumber = $roomNumber;
    }

    public function enter(): void
    {
        // TODO: Implement enter() method.
    }

    public function setSide(string $direction, ?MapSite $mapSite): void
    {
        $this->validateDirection($direction);

        $this->sides[$direction] = $mapSite;
    }

    public function getSide(string $direction): ?MapSite
    {
        $this->validateDirection($direction);

        return $this->sides[$direction];
    }

    protected function validateDirection(string $direction): void
    {
        if (!in_array($direction, [
            static::DIRECTION_NORTH,
            static::DIRECTION_SOUTH,
            static::DIRECTION_EAST,
            static::DIRECTION_WEST,
        ])) {
            throw new \InvalidArgumentException("[{$direction}] is not a valid direction");
        }
    }
}
