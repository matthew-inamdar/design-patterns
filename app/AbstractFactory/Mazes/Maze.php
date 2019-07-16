<?php

declare(strict_types=1);

namespace App\AbstractFactory\Mazes;

use App\AbstractFactory\MapSite;
use App\AbstractFactory\Rooms\Room;

class Maze implements MapSite
{
    /**
     * @var \App\AbstractFactory\Rooms\Room[]
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
    }
}
