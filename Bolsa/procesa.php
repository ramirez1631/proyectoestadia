<font color="white">
<?php
echo "<font color='white'>";


echo "<center><img src='http://localhost/Bolsa/imagenes/cargando.gif'  width='700px' height='400px'  /></center>
";
$recaptcha = $_POST['g-recaptcha-response'];

if($recaptcha != ''){
$secret = "6Lf33BsTAAAAAKEixHBND-m8sAg4cE0xr8JpD5fm";
$ip = $_SERVER['REMOTE_ADDR'];
$var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip");            
$array = json_decode($var, true);
if($array['success']){
echo "soy humano";

}else{
echo "<script>if(('Revisa que tus datos sean correctos. Deseas continuar?')){ 
document.location='http://localhost/Bolsa/index.php/controlador_usuario_form';} 
else{  
}</script>"; 
}
}else{
echo "<script>if(('Revisa que tus datos sean correctos. Deseas continuar?')){ 
document.location='http://localhost/Bolsa/capcha.html';} 
else{  
}</script>";
}
echo "</font>";
?>
</font>