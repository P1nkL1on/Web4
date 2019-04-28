<?php
/**
 * @file
 * Base entry point for the Game of Life.
 *
 * Run "php life.php help" to view the help documentation.
 */

namespace Life;

include 'src/Game.php';
include 'src/Grid.php';

$opts = [];

$game = new Game($opts);
$game->loop();

print 'Bye!';
