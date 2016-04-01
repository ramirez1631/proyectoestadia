    <!--A QUI ES LA VISTA DE ARRIBA DEL MENU DEL ADMINISTRADOR-->

<!doctype html>

<html lang='es'>
<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    </br>




       <center></span><h3 class="bg-primary"><i><strong>Bienvenido Administrador </strong></i><font color="black"><span class="glyphicon glyphicon-user" aria-hidden="true"></h3></center> 
</br>
<center>
<img src="http://localhost/Bolsa/imagenes/adlogo.png" alt="" width="230px" height="150px"  />
</center>

</center>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"></link>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<title></title>

</head>

<body>


 <script>

// la funcion de la alerta personalizada  
function EventoAlert(){
  swal("¡Hasta luego! Administrador");

}
  
    </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>





</br>

  <?php if($this -> session -> userdata('nombre')): ?>


  <!-- PONEMOS EL BOTON Y LLAMAMOS AL METODO PARA QUE ROMPA LA SESSION -->
</br>
<center><a onclick="EventoAlert()" href="<?php echo site_url('login/logout')?>"><img src="http://localhost/Bolsa/imagenes/salir.gif" alt="" width="140px" height="40px"  /></a></center>     

<?php else: ?>
 
<?php endif;?>
</br>
</br>
</br>
</br>




          
  <!--A QUE HACEMOS EL MENU PARA NAVEGAR--> 

<ul class="nav nav-tabs">
<li role="presentation"><a class="glyphicon glyphicon-user" aria-hidden="true" href="<?php echo base_url() ?>vistatablas"><strong><font color="black"> USUARIOS</font></strong></a></li> 
<li  role="presentation" ><a href="#"><strong><font color="black">|</font></strong></a></li>
<li role="presentation"><a class="glyphicon glyphicon-folder-open" aria-hidden="true" href="http://localhost/Bolsa/lista.php"><strong><font color="black"> CURRÍCULUMS</font></strong></a></li> 
<li  role="presentation" ><a href="#"><strong><font color="black">|</font></strong></a></li>
<li role="presentation"><a class="glyphicon glyphicon-search" aria-hidden="true" href="<?php echo base_url() ?>buscar"><strong><font color="black"> BUSCAR USUARIOS</font></strong></a></li> 
<li  role="presentation" ><a href="#"><strong><font color="black">|</font></strong></a></li>
<li role="presentation"><a class="glyphicon glyphicon-user" aria-hidden="true" href="http://localhost/Bolsa/paginacion.php"><strong><font color="black"> USUARIOS ACTIVOS</font></strong></a></li> 

</ul>  



   
  <hr>
