<?php

declare(strict_types=1);

namespace App\Builder\Builders;

use App\Builder\Mazes\Maze;

interface MazeBuilder
{
    public function buildMaze(): void;

    public function buildRoom(int $roomNumber): void;

    public function buildDoor(int $roomFromNumber, int $roomToNumber): void;

    public function getMaze(): Maze;
}
