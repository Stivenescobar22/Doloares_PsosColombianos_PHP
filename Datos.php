<?php 

  class Datos{

    private $numero1;
    
    public function __construct(){
        $this->numero1 = 0;
       
    }
    
    //numero1
    public function setNumero1($valor){
        $this->numero1 = $valor;
    }

    protected function getNumero1(){
        return $this->numero1;
    }

  

  }


?>
