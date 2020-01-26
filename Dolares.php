<?php 

  require_once 'Datos.php';

    class Dolares extends Datos {

        public function   Converdolares(){
            return($this->getNumero1() * 0.00030);
        }

        

   
    }

?>

