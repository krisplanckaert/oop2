<?php
require_once('includes/User.php');

$xavier = new Customer('xavier', 1);
$john = new Customer('john', 2);

echo $xavier->getUsername(). '<br />' .$john->getUsername();

?>
