<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Paginacion</title>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"></link>
<body>
</br>

    <center>  <img src="http://localhost/Bolsa/imagenes/adlogo.png" alt="" width="230px" height="150px"  /></center>

</br>

<ul class="nav nav-tabs">
<li role="presentation"><a class="glyphicon glyphicon-user" aria-hidden="true" href="http://localhost/Bolsa/index.php/vistatablas"><strong><font color="black"> USUARIOS</font></strong></a></li> 
<li  role="presentation" ><a href="#"><strong><font color="black">|</font></strong></a></li>
<li role="presentation"><a class="glyphicon glyphicon-folder-open" aria-hidden="true" href="http://localhost/Bolsa/lista.php"><strong><font color="black"> CURRÍCULUMS</font></strong></a></li> 
<li  role="presentation" ><a href="#"><strong><font color="black">|</font></strong></a></li>
<li role="presentation"><a class="glyphicon glyphicon-search" aria-hidden="true" href="http://localhost/Bolsa/index.php/buscar"><strong><font color="black"> BUSCAR USUARIOS</font></strong></a></li> 
<li  role="presentation" ><a href="#"><strong><font color="black">|</font></strong></a></li>
<li role="presentation"><a class="glyphicon glyphicon-user" aria-hidden="true" href="http://localhost/Bolsa/paginacion.php"><strong><font color="black"> USUARIOS ACTIVOS</font></strong></a></li> 

</ul>  






<?php

mysql_connect("localhost","root","");
mysql_select_db("bolsa_trabajo");

?>
<?php 

require_once("PHPPaging.lib.php");
$pagina = new PHPPaging;

?>

</br>   <center>
<table class="table table-bordered table-hover">
  <tr>
  </tr>
  <tr>


      <td><center><p class="glyphicon glyphicon-barcode" aria-hidden="true"  ></center></p></li><strong><h3><center>ID</center></h3></strong></td>
      <td><center><p class="glyphicon glyphicon-star" aria-hidden="true" ></center></p></li><strong><h3>Favorito</h3></strong></td>
      <td><center><p class="glyphicon glyphicon-user" aria-hidden="true"  ></center></p></li><strong><h3><center>Nombre</center></h3></strong></td>
      <td><center><p class="glyphicon glyphicon-user" aria-hidden="true"  ></center></p></li><strong><h3><center>Apellido Paterno</center></h3></strong></td>
      <td><center><p class="glyphicon glyphicon-user" aria-hidden="true"  ></center></p></li><strong><h3><center>Apellido Materno</center></h3></strong></td>
      <td><center><p class="glyphicon glyphicon-glyphicon glyphicon-file" aria-hidden="true"  ></center></p></li><strong><h3><center>CURP</center></h3></strong></td>
      <td><center><p class="glyphicon glyphicon-phone-alt" aria-hidden="true"  ></center></p></li><strong><h3><center>Telefono</center></h3></strong></td>
      <td><center><p class="glyphicon glyphicon-earphone" aria-hidden="true"  ></center></p></li><strong><h3><center>Celular</center></h3></strong></td>
      <td><center><p class="glyphicon glyphicon-envelope" aria-hidden="true"  ></center></p></li><strong><h3><center>Correo</center></h3></strong></td>
      <td><center><p class="glyphicon glyphicon-user" aria-hidden="true"  ></center></p></li><strong><h3><center>Facebook</center></h3></strong></td>

  </tr>
<?php
$pagina->agregarConsulta("select nombre, apellido_paterno, id_registro, favorito, apellido_materno, curp, telefono, celular, correo_electronico, facebook, activo from tbl_registro where activo='S'");
$pagina->ejecutar();
while($res=$pagina->fetchResultado()){
 $id=$res["id_registro"];
 $fa=$res["favorito"];
 $nom=$res["nombre"];
 $ap=$res["apellido_paterno"];
  $am=$res["apellido_materno"];
  $curp=$res["curp"];
  $telefono=$res["telefono"];
	$cel=$res["celular"];
	$mail=$res["correo_electronico"];
	$face=$res["facebook"];
?>  
<tr>
<td><?php echo $id; ?></td>
<td><p class="glyphicon glyphicon-star" aria-hidden="true" ><?php echo $fa; ?></td>
<td><?php echo $nom; ?></td>
<td><?php echo $ap; ?></td>
<td><?php echo $am; ?></td>
<td><?php echo $curp; ?></td>
<td><?php echo $telefono; ?></td>
<td><?php echo $cel; ?></td>
<td><?php echo $mail; ?></td>
<td><?php echo $face; ?></td>

</tr>
<?php
}
?>
</table>
<?php echo 'páginas '.$pagina->fetchNavegacion(); ?>
</center>
</br>
</body>
</html>