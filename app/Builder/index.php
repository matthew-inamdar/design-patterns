<?php

declare(strict_types=1);

use App\Builder\Builders\StandardMazeBuilder;
use App\Builder\MazeGame;

require dirname(__DIR__, 2) . '/vendor/autoload.php';

$game = new MazeGame();
$builder = new StandardMazeBuilder();

$game->createMaze($builder);
$maze = $builder->getMaze();

var_dump($maze);
