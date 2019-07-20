<?php

declare(strict_types=1);

namespace App\Builder\Mazes;

use App\Builder\MapSite;
use App\Builder\Rooms\Room;

class Maze implements MapSite
{
    /**
     * @var \App\Builder\Rooms\Room[]
     */
    protected $rooms;

    public function __construct()
    {
        $this->rooms = [];
    }

    public function enter(): void
    {
        // TODO: Implement enter() method.
    }

    public function addRoom(Room $room): void
    {
        $this->rooms[] = $room;
    }

    public function roomNumber(int $roomNumber): ?Room
    {
        foreach ($this->rooms as $room) {
            if ($roomNumber === $room->roomNumber) {
                return $room;
            }
        }

        return null;
    }
}
