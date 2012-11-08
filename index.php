<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
// require the needed objects
require_once 'includes/Winkelmand.php';
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
        $product['id']=1;
        $product['titel']='Nokia';
        $product['prijs']=100;
        $products[1] = $product;

        $product['id']=2;
        $product['titel']='Ericson';
        $product['prijs']=150;
        $products[2] = $product;    
        

        session_start();  
        $_SESSION['products'] = $products;
        
        if(!isset($_SESSION['winkelmand'])) {
            $winkelmand = new Winkelmand();
            $_SESSION['winkelmand'] = $winkelmand;
        }

?>        
        <table>
<?php       foreach($products as $product) { ?>
                <tr>
                    <td><?php echo $product['id'];?></td>
                    <td><?php echo $product['titel'];?></td>
                    <td><?php echo $product['prijs'];?></td>  
                    <td>aantal : <?php echo $_SESSION['winkelmand']->getAantal($product['id']);?></td>  
                    <td><a href="basket.php?id=<?php echo $product['id'];?>" >Bestel</a></td>
                </tr>
<?php       } ?>
        </table>
    </body>
</html>
