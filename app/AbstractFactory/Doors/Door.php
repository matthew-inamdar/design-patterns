<?php

declare(strict_types=1);

namespace App\AbstractFactory\Doors;

use App\AbstractFactory\MapSite;
use App\AbstractFactory\Rooms\Room;

class Door implements MapSite
{
    /**
     * @var \App\AbstractFactory\Rooms\Room
     */
    protected $room1;

    /**
     * @var \App\AbstractFactory\Rooms\Room
     */
    protected $room2;

    /**
     * @var bool
     */
    protected $isOpen;

    public function __construct(Room $room1, Room $room2)
    {
        $this->room1 = $room1;
        $this->room2 = $room2;
        $this->isOpen = false;
    }

    public function enter(): void
    {
        // TODO: Implement enter() method.
    }

    public function otherSideFrom(Room $room): Room
    {
        return $room->roomNumber === $this->room1->roomNumber
            ? $this->room2
            : $this->room1;
    }
}
