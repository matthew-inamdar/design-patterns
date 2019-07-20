<?php

declare(strict_types=1);

namespace App\Builder\Doors;

use App\Builder\MapSite;
use App\Builder\Rooms\Room;

class Door implements MapSite
{
    /**
     * @var \App\Builder\Rooms\Room
     */
    protected $roomFrom;

    /**
     * @var \App\Builder\Rooms\Room
     */
    protected $roomTo;

    /**
     * @var bool
     */
    protected $isOpen;

    public function __construct(Room $roomFrom, Room $roomTo)
    {
        $this->roomFrom = $roomFrom;
        $this->roomTo = $roomTo;
        $this->isOpen = false;
    }

    public function enter(): void
    {
        // TODO: Implement enter() method.
    }

    public function otherSideFrom(Room $room): Room
    {
        return $room->roomNumber === $this->roomFrom->roomNumber
            ? $this->roomTo
            : $this->roomFrom;
    }
}
