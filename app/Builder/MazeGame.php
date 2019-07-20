<?php

declare(strict_types=1);

namespace App\Builder;

use App\Builder\Builders\MazeBuilder;
use App\Builder\Mazes\Maze;

class MazeGame
{
    public function createMaze(MazeBuilder $builder): Maze
    {
        $builder->buildMaze();

        $builder->buildRoom(1);
        $builder->buildRoom(2);
        $builder->buildDoor(1, 2);

        return $builder->getMaze();
    }

    public function createComplexMaze(MazeBuilder $builder): Maze
    {
        $builder->buildMaze();

        $builder->buildRoom(1);
        // ...
        $builder->buildRoom(1001);

        return $builder->getMaze();
    }
}
