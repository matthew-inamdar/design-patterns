<?php

declare(strict_types=1);

use App\AbstractFactory\Factories\MazeFactory;
use App\AbstractFactory\MazeGame;

require dirname(__DIR__, 2) . '/vendor/autoload.php';

$game = new MazeGame();
$factory = new MazeFactory();

$maze = $game->createMaze($factory);

var_dump($maze);
