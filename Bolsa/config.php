<?PHP

$host = "localhost"; 	//TU HOST//
$dbuser = "root";	 	//TU USUARIO DEL HOST//
$dbpwd = "";	//TU CONTRASE�A//
$db = "bolsa_trabajo";		//TU BASE DE DATOS//

$connect = mysql_connect ($host, $dbuser, $dbpwd);
if(!connect)
echo ("No se pudo conectar a la base de datos");
else
$select = mysql_select_db($db);
?>