<?php 

  require_once 'Datos.php';

    class Pcolombianos extends Datos {

        public function Convercolombianos(){
            return($this->getNumero1() * 3.36507 );
        }

        

   
    }

?>

