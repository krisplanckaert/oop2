<?php
require_once 'includes/Winkelmand.php';
ini_set('display_errors',1);
error_reporting(E_ALL);
?>
<!doctype html>
<html>
    <head>
        <title>
            Winkelmand - basket
        </title>
    </head>
    <body>
        <?php 
            $id = isset($_POST) ? (int)$_POST['id'] : (int)$_GET['id'];
            session_start();  
            $items = array('id' => $id, 'aantal' => 1);
            $_SESSION['winkelmand']->toevoegenAanMand($items);
            echo $_SESSION['products'][$id]['titel'] . '<br />' . $_SESSION['products'][$id]['prijs'];
        ?>
        <a href="index.php">Bestel</a>
    </body>
</html>
