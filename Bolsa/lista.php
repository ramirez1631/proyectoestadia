<!DOCTYPE html>
<?php
include 'config.php';
?>
</br>


        
<p><strong>BUSCAR POR ID</strong></p>
<form action="lista.php" method="get">
<input type="text" name="palabra" value="<?php  echo ($_GET[""]);  ?>"  />
<input type="submit" class="btn btn-primary" name="buscador" value="Buscar"  />
</form>

<?php 




if ($_GET['buscador'])
{

$buscar = $_GET['palabra'];

if (empty($buscar))
{
    echo "</br>";
    echo "<h3>";
    echo "<center>";
echo "No se ha ingresado ninguna palabra";
echo "</h3>";
echo "</center>";
}
else
{

$sql = "SELECT * FROM tbl_documentos WHERE id_documento LIKE '%$buscar%'";
$result = mysql_query($sql,$connect);

$total = mysql_num_rows($result);

if ($row = mysql_fetch_array($result)) {
    echo "<center>";
    echo "<h3>";
echo("</br>");
echo "Resultados para ID: ";

echo "<font color='#0174DF'>";

echo "$buscar";

echo "</font>";


echo "</br>";
echo "</br>";
echo "Total de resultados: ";
echo "<font color='#0174DF'>";
echo "$total";
echo "</font>";

echo "</center>";
echo "</h3>";
do {
?>
<br>
<br>
<center><h3>
ID:  <?php echo "<font color='#0174DF'>"; ?> <?php echo $row['id_documento']; ?> <?php echo "</font>";?>  |  Nombre del Archivo: <?php echo "<font color='#0174DF'>"; ?><?php echo $row['nombre_archivo']; ?> <?php echo "</font>";?>
</center></h3>
<?php
}
while ($row = mysql_fetch_array($result));
}
else
{
       echo "<center>";
    echo "<h3>";
echo("</br>");
echo "No se encontraron resultados para el ID: ";
 echo "<font color='#0174DF'>";
echo "$buscar";
echo "</font>";


echo "</h3>";
echo "</center>";
}
}
}
?>


</br>
</br>
<html>
    <head>
    <center>  <img src="http://localhost/Bolsa/imagenes/adlogo.png" alt="" width="230px" height="150px"  /></center>

        <meta charset="UTF-8">
   

           <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"></link>





<ul class="nav nav-tabs">

  <li  role="presentation"><a class="glyphicon glyphicon-user" aria-hidden="true" href="../Bolsa/index.php/vistatablas"><strong><font color="black"> USUARIOS</font></strong></a></li>
  <li><a href="#"><strong><font color="black">|</font></strong></a></li>
  <li  role="presentation"><a class="glyphicon glyphicon-folder-open" aria-hidden="true" href="../Bolsa/lista.php"><strong><font color="black"> CURRÍCULUMS</font></strong></a></li>
  <li><a href="#"><strong><font color="black">|</font></strong></a></li>
  <li  role="presentation"><a class="glyphicon glyphicon-search" aria-hidden="true" href="http://localhost/Bolsa/index.php/buscar"><strong><font color="black"> BUSCAR USUARIOS</font></strong></a></li>
<li  role="presentation" ><a href="#"><strong><font color="black">|</font></strong></a></li>
<li role="presentation"><a class="glyphicon glyphicon-user" aria-hidden="true" href="http://localhost/Bolsa/paginacion.php"><strong><font color="black"> USUARIOS ACTIVOS</font></strong></a></li> 

</ul>  





        <title></title>
               <center></span><h3 class="bg-primary"><i><strong>Currículums </strong></i><font color="black"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></h3></center> 

    </head>
    <body>
        <table class="table table-bordered table-hover">
            <tr>
      <td><center><p class="glyphicon glyphicon-file" aria-hidden="true"  ></center></p></li><strong><h3><center>ID</center></h3></strong></td>
      <td><center><p class="glyphicon glyphicon-inbox" aria-hidden="true"  ></center></p></li><strong><h3><center>Tamaño</center></h3></strong></td>
      <td><center><p class="glyphicon glyphicon-folder-close" aria-hidden="true"  ></center></p></li><strong><h3><center>Tipo</center></h3></strong></td>
      <td><center><p class="glyphicon glyphicon-download-alt" aria-hidden="true"  ></center></p></li><strong><h3><center>Archivo</center></h3></strong></td>
            </tr>
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select*from tbl_documentos";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>

            <tr>
			    <td><?php echo $datos['id_documento']; ?></td>
                <td><?php echo $datos['tamanio']; ?></td>
                <td><?php echo $datos['tipo']; ?></td>
                <td><a href="archivo.php?id=<?php echo $datos['id_documento']?>"><?php echo $datos['nombre_archivo']; ?></a></td>
            </tr>
                
          <?php  } ?>
            
        </table>
    </body>
</html>
