<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
  // require the needed objects
require_once 'includes/DB.php';
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
        session_start(); 
        $_SESSION['products'] = $products;  
        $_SESSION['winkelmand'] = !isset($_SESSION['winkelmand']) ? new Winkelmand() : $_SESSION['winkelmand']; 
        
        $clear = isset($_POST['clear']) ? 1 : 0; 
        if($clear) {
            $_SESSION['winkelmand']->mandLeegmaken();
        }
        $mail = isset($_POST['mail']) ? 1 : 0; 
        if($mail) {
            $to      = 'krisleen@telenet.be';
            $subject = 'the subject';
            $message = 'hello';
            $headers = 'From: krisleen@telenet.be' . "\r\n" .
                'Reply-To: krisleen@telenet.be' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            if(mail($to, $subject, $message, $headers)) { ?>
                <h2>Mail was send</h2>
<?php       } else { ?>
                <h2>Mail was send</h2>
<?php       }            
        }        
        $clearproduct = isset($_POST['clearproduct']) ? (int)$_POST['clearproduct'] : 0; 
        if($clearproduct) {
            $items = array(
                'id' => $clearproduct,
                'aantal' => 1,
            );
            $_SESSION['winkelmand']->verwijderenUitMand($items);
        }
        $clearproductall = isset($_POST['clearproductall']) ? (int)$_POST['clearproductall'] : 0; 
        if($clearproductall) {
            $items = array(
                'id' => $clearproductall,
                'aantal' => $_POST['aantal'],
            );
            $_SESSION['winkelmand']->verwijderenUitMand($items);
        }        
        ?>
        <table>
<?php       foreach($products as $product) { ?>       
                <tr>
                    <td><?php echo $product['id'];?></td>
                    <td><?php echo $product['titel'];?></td>
                    <td><?php echo $product['prijs'];?></td>  
                    <td><a href="basket.php?id=<?php echo $product['id'];?>" >Bestel</a></td>
                    <td>
                        <form name="Bestel" action="basket.php" method="post">
                            <input type="Hidden" name="id" value="<?php echo $product['id']; ?>" />
                            <input type="Submit" value="Bestel" />
                        </form>
                    </td>
                </tr>
<?php   } ?>
        </table>
        <div>
            <h1>Winkelmand</h1>
<?php       $winkelmand = isset($_SESSION['winkelmand']) ? $_SESSION['winkelmand']->mandWeergeven() : array(); 
            if(!empty($winkelmand)) { ?>
                <table>
<?php               foreach($winkelmand as $content) { ?>
                        <tr>
                            <td><?php echo $_SESSION['products'][$content['id']]['titel']; ?></td>
                            <td><?php echo $content['aantal']; ?></td>
                            <td>                
                                <form name="ClearProduct" action="" method="post">
                                    <input type="Hidden" name="clearproduct" value="<?php echo $content['id'];?>" />
                                    <input type="Submit" value="Verwijderen" />
                                </form>
                            </td>
                            <td>                
                                <form name="ClearProductAll" action="" method="post">
                                    <input type="Hidden" name="clearproductall" value="<?php echo $content['id'];?>" />
                                    <input type="Hidden" name="aantal" value="<?php echo $content['aantal'];?>" />
                                    <input type="Submit" value="Alles verwijderen" />
                                </form>
                            </td>                            
                        </tr>
<?php               } ?>
                </table>
                <form name="Winkelmand" action="" method="post">
                    <input type="Submit" name="clear" value="Winkelmand leeg maken" />
                    <input type="Submit" name="mail" value="Mail Winkelmand" />
                </form>
            
<?php       } else { ?>
                Leeg!
<?php       } ?>           
        </div>        
    </body>
</html>
