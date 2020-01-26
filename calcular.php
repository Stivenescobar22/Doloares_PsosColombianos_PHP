<?php 
 
   
  require_once 'Pcolombianos.php';
  require_once 'Dolares.php';

  sleep(2);
  
  $objcolombianos = new Pcolombianos();
  $objdolares = new Dolares();
     
  $numero1 = $_POST["txtnumero1"];
  
  
  if(isset($_POST["btnpsoscolombianos"])){
      $objcolombianos->setNumero1($numero1);
      echo $objcolombianos-> Convercolombianos();
    }

    if(isset($_POST["btndolares"])){
        $objdolares->setNumero1($numero1);
        echo $objdolares->Converdolares();
      }

  
?>
