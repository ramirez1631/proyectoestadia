<?php

$host = 'localhost';
$base = 'bolsa_trabajo';
$usuario = 'root';
$password ='';
try{
	$conn = new PDO('mysql:host='.$host.';dbname='.$base.'', $usuario, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("SET CHARACTER SET utf8");
}catch(PDOException $e){
	echo "ERROR: " . $e->getMessage();
}
$municipio = $_POST['municipio'];
 $sql = $conn->prepare('SELECT * FROM municipios WHERE estado_id='.$municipio.' ');
    $sql->execute();
    $resultado = $sql->fetchAll();
    foreach ($resultado as $row) {
        echo "<option value='".$row['nombre']."'>".$row['nombre']."</option>";
  }
