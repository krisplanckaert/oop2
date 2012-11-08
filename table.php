<?php
require_once 'includes/Table.php';
require_once 'includes/Row.php';
require_once 'includes/Cell.php';
require_once 'includes/Strong_Cell.php';

$celA1 = new Cell('Dit is cel A1');
$celA2 = new Strong_Cell('Dit is cel A2');

$rowA = new Row();
$rowA->append($celA1);
$rowA->append($celA2);
$rowA->append(new Cell('Dit is cel A3'));

$rowB = new Row();
$rowB->append($celA1);
$rowB->append($celA2);
$rowB->append(new Cell('Dit is cel A3'));


$table = new Table();
$table->append($rowA);
$table->append($rowB);
$table->draw();

?>
