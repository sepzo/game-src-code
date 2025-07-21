<?php
/**
 * @file
 * Base entry point for the Game of Life.
 *
 * to Run "php life.php "keep_alive=1"
 */

namespace Life;

include 'src/Game.php';
include 'src/Grid.php';

$opts = [];

if (isset($argv[1])) {
  // Populate options from the input arguments.
  parse_str($argv[1], $opts);
}

$game = new Game($opts);
$game->loop();

print "\nGame Over!\n\n";