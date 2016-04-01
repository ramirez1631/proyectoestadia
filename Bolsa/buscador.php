<?php
include 'config.php';
?>

<form action="buscador.php" method="get">
<input type="text" name="palabra" value="<?php  echo ($_GET[""]);  ?>"  />
<input type="submit" name="buscador" value="Buscar"  />
</form>

<?php 

if ($_GET['buscador'])
{

$buscar = $_GET['palabra'];

if (empty($buscar))
{
echo "No se ha ingresado ninguna palabra";
}
else
{

$sql = "SELECT * FROM tbl_documentos WHERE titulo LIKE '%$buscar%'";
$result = mysql_query($sql,$connect);

$total = mysql_num_rows($result);

if ($row = mysql_fetch_array($result)) {

echo "Resultados para: $buscar";
echo "</br>";
echo "Total de resultados: $total";

do {
?>
<br>
<br>
(Id: <?php echo $row['id_documento']; ?>) - <?php echo $row['titulo']; ?>

<?php
}
while ($row = mysql_fetch_array($result));
}
else
{
echo "No se encontraron resultados para: $buscar";
}
}
}
?>