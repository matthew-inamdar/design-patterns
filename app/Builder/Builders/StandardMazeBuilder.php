<?php

declare(strict_types=1);

namespace App\Builder\Builders;

use App\Builder\Doors\Door;
use App\Builder\Mazes\Maze;
use App\Builder\Rooms\Room;
use App\Builder\Walls\Wall;

class StandardMazeBuilder implements MazeBuilder
{
    /**
     * @var \App\Builder\Mazes\Maze
     */
    protected $maze;

    public function buildMaze(): void
    {
        $this->maze = new Maze();
    }

    public function buildRoom(int $roomNumber): void
    {
        if ($this->maze->roomNumber($roomNumber)) {
            return;
        }

        $room = new Room($roomNumber);
        $this->maze->addRoom($room);

        $room->setSide(Room::DIRECTION_NORTH, new Wall());
        $room->setSide(Room::DIRECTION_SOUTH, new Wall());
        $room->setSide(Room::DIRECTION_EAST, new Wall());
        $room->setSide(Room::DIRECTION_WEST, new Wall());
    }

    public function buildDoor(int $roomFromNumber, int $roomToNumber): void
    {
        $roomFrom = $this->maze->roomNumber($roomFromNumber);
        $roomTo = $this->maze->roomNumber($roomToNumber);
        $door = new Door($roomFrom, $roomTo);

        $roomFrom->setSide(Room::DIRECTION_EAST, $door);
        $roomTo->setSide(Room::DIRECTION_WEST, $door);
    }

    public function getMaze(): Maze
    {
        return $this->maze;
    }
}
