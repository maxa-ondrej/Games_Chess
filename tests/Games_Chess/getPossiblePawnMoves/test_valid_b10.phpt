--TEST--
Games_Chess->getPossiblePawnMoves() valid black #10
--SKIPIF--
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php.inc';
$board->addPiece('W', 'P', 'a4');
$err = $board->getPossiblePawnMoves('b4', 'B');
$phpunit->assertEquals(array('b3'), $err, 1);
echo 'tests done';
?>
--EXPECT--
tests done