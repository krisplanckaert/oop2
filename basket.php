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
            $id = $_GET['id'];
            session_start();  
            $products = $_SESSION['products'];
            
            $items = array('id' => $id, 'aantal' => $_SESSION['winkelmand']->getAantal($id));
            $_SESSION['winkelmand']->toevoegenAanMand($items);
            
            echo $products[$id]['titel'] . '<br />' . $products[$id]['prijs'];
        ?>
        <a href="index.php">Bestel</a>
    </body>
</html>
