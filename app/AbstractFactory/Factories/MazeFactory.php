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

    public function makeDoor(Room $roomFrom, Room $roomTo): Door
    {
        return new Door($roomFrom, $roomTo);
    }
}
