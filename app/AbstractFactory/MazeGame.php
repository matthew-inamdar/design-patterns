<?php

declare(strict_types=1);

namespace App\AbstractFactory;

use App\AbstractFactory\Factories\MazeFactory;
use App\AbstractFactory\Mazes\Maze;
use App\AbstractFactory\Rooms\Room;

class MazeGame
{
    public function createMaze(MazeFactory $factory): Maze
    {
        $maze = $factory->makeMaze();
        $room1 = $factory->makeRoom(1);
        $room2 = $factory->makeRoom(2);
        $door = $factory->makeDoor($room1, $room2);

        $maze->addRoom($room1);
        $maze->addRoom($room2);

        $room1->setSide(Room::DIRECTION_NORTH, $factory->makeWall());
        $room1->setSide(Room::DIRECTION_EAST, $door);
        $room1->setSide(Room::DIRECTION_SOUTH, $factory->makeWall());
        $room1->setSide(Room::DIRECTION_WEST, $factory->makeWall());

        $room2->setSide(Room::DIRECTION_NORTH, $factory->makeWall());
        $room2->setSide(Room::DIRECTION_EAST, $factory->makeWall());
        $room2->setSide(Room::DIRECTION_SOUTH, $factory->makeWall());
        $room2->setSide(Room::DIRECTION_WEST, $door);

        return $maze;
    }
}
