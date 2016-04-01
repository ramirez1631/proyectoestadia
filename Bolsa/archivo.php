<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"></link>

        <title></title>
    </head>
    <body>
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select*from tbl_documentos where id_documento=".$_GET['id'];
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
                if($datos['nombre_archivo']==""){?>
        <p>NO tiene archivos</p>
                <?php }else{ ?>
     <center>



<a href="http://localhost/Bolsa/lista.php"><img src="http://localhost/Bolsa/imagenes/atras.png" alt="" width="60px" height="60px"  /></a>   




        &nbsp;&nbsp;









<iframe width="454px" height="600px" src="archivos/<?php echo $datos['nombre_archivo']; ?>"></iframe></center>
                
                <?php } } ?>
    </body>
</html>
