<!DOCTYPE HYML>
<html>
   <head>
      <meta charset="utf-8">
     <meta http-equiv="content-type" content="text/html; charset=utf-8">
     <title>Ejercicio conversion de dinero</title>

       <script>
       
          function proceso(txtnumero1, boton){
              switch(boton){

                case "Pcolombianos":
                  var parametros = {

                    "txtnumero1" : txtnumero1,
                    "btnpsoscolombianos" : boton
                  };
                break;

                case "Dolar":
                  var parametros = {

                    "txtnumero1" : txtnumero1,
                    "btndolares" : boton
                  };
                break;

              }     
              
              $.ajax({
                  data: parametros,
                  url: 'calcular.php',
                  type:'post',
                  beforeSend: 
                   function(){
                       $('#resultado').html('Cargando...');
                   }, 

                   success:
                   function(response){
                    $('#resultado').html(response);
                   }
              });
          }

       </script>

   </head>
   <body>

       <h1>programa de conversion</h1>
       <h2>se realiza la conversion de dolares a pesos colombianos y  viceversa.</h2>
      <form name="form1" method="POST">
         
         Ingresa un valor:<input type="text" name="txtnumero1" id="txtnumero1">
         <br>
         
         <input type="button" name="btnpsoscolombianos" id="btnpsoscolombianos" value="Pcolombianos"
         onclick="proceso($('#txtnumero1').val(), $('#btnpsoscolombianos').val());">
         <br>
         <input type="button" name="btndolares" id="btndolares" value="Dolar"
         onclick="proceso($('#txtnumero1').val(), $('#btndolares').val());">
      
      </form>
      <br>
      <span id="resultado"></span>
   
   
   
    <script src="jquery-3.4.1.js"></script>
   </body>


</html>
