<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include_once 'config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $descri= $_POST['descripcion'];
            $db=new Conect_MySql();
            $sql = "INSERT INTO tbl_documentos(tamanio,tipo,nombre_archivo) VALUES('$tamanio','$tipo','$nombre')";
            $query = $db->execute($sql);
            if($query){
                
              echo "<script type=''>
      alert(': “Tus datos y currículum han sido registrados.”');
      </script>"; 


echo "<script>if(('Revisa que tus datos sean correctos. Deseas continuar?')){ 
document.location='http://localhost/Bolsa/';} 
else{  
}</script>"; 

            }
        } else {
            echo "Error";
        }
    }
}
?>

<html>
    <head>
              <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"></link>

     <script src='../Bolsa/custom.js'></script> 
        <meta charset="UTF-8">
        <title></title>

    </head>
    <style>


body {
  background: url(imagenes/fondociudadono.png) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  color: black;

 
}


</style>
    <body onload="nobackbutton();">




        <div style="width: 400px;margin: auto;border: 1px solid black;padding: 25px;">
               <center></span><h3 class="bg-primary"><strong><i>Adjunta tu currículum </i></strong><font color="black"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></h3></center> 

            <form method="post" action="" enctype="multipart/form-data">
                <table>
                    <tr>
                        
                    </tr>
                
                    <tr>
                        <td colspan="2"><input  type="file" name="archivo"></td>
                    <tr>
                    </br>
                        <td><input type="submit"  value="subir" name="subir"></td>
                    </tr>
                </table>
            </form>            
        </div>
    </body>
</html>
