<?php

declare(strict_types=1);

namespace App\AbstractFactory\Factories;

use App\AbstractFactory\Doors\Door;
use App\AbstractFactory\Mazes\Maze;
use App\AbstractFactory\Rooms\Room;
use App\AbstractFactory\Walls\Wall;

class MazeFactory
{
    public function makeMaze(): Maze
    {
        return new Maze();
    }

    public function makeWall(): Wall
    {
        return new Wall();
    }

    public function makeRoom(int $roomNumber): Room
    {
        return new Room($roomNumber);
    }

    public function makeDoor(Room $room1, Room $room2): Door
    {
        return new Door($room1, $room2);
    }
}
