<!--FORMULARIO DEL REGISTRO USUARIO-->
 <html>
 <head>
 
<title>Formulario | Usuario</title>
<!-- LIBRERIA DEL BOOTSTRAP -->

<meta charset="utf-8"> 
<script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"></link>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready (function (){

    $("#registrar").click (function(){
   
       $.ajax({

           url: '<?php echo base_url('controlador_usuario_form/agregar')?>',
           type: 'POST',
           data: $('#form').serialize(),
           success: function(msj){
         
         $("#mensaje").html(msj);
         if(msj == 'Registro Completado')
         {

            jQuery.fn.reset = function () {

              $(this).each (function() { this.reset(); });
            }

             $("#form").reset();

         }

           }


       });

   return false;

      })

  });

  </script>


<script type="text/javascript">
window.onload = function(){
fecha = new Date();
texto = document.getElementById("fechaing");
texto.value = fecha;
}
</script>



<style>


body {
  background: url(../imagenes/fondoform.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  color: black;

 
}


</style>
<center><strong><h3></h3></strong><a href="http://localhost/Bolsa/"><img src="http://localhost/Bolsa/imagenes/homee.png" alt="" width="45px" height="45px"  /></a></center>     

</head>
<body>

<div class="container">
  <hr>
 
       <center></span><h3 class="bg-primary"><i><strong>Datos Generales</strong> </i><font color="black"><span class="glyphicon glyphicon-book" aria-hidden="true"></h3></center> 
</font>
<hr>

<form id="form">






<div class="container">



      <div class="row">
      <div class="col-md-7">
        <div class="input-group">
          <input type="hidden" class="form-control"  placeholder="Introduce aquí tu imagen" value="n" name="fa" id="fa" aria-describedby="basic-addon1">
        </div>
      </div>
    </div>
</br>
                                                                                                                                    

      <div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Nombre:</span>
          <input type="text" class="form-control"  placeholder="Nombre(s)" name="nombre" id="nombre" aria-describedby="basic-addon1">
        </div>
      </div>
    </div>
</br>

      <div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Apellido Paterno:</span>
          <input type="text" class="form-control"  placeholder="Apellido paterno sin abreviación" name="ap" id="ap" aria-describedby="basic-addon1">
        </div>
      </div>
    </div>
</br>
      <div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Apellido Materno:</span>
          <input type="text" class="form-control"  placeholder="Apellido materno sin abreviación" name="am" id="am" aria-describedby="basic-addon1">
        </div>
      </div>
    </div>

</br>
      <div class="row">
      <div class="col-md-3">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Fecha de Nacimiento:</span>
          <input type="date" class="form-control"  placeholder="Introduce aquí tu fecha de nacimiento" name="fn"  id="fechaing" aria-describedby="basic-addon1">
        </div>
      </div>
    </div>

    </br>
      <h5><strong>

</h5></strong>
<div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Entidad Federativa:</span> &nbsp;&nbsp;
         <select name="en" id="en">
                <option value=""></option>
                 <option value="Aguascalientes">Aguascalientes</option>
                 <option value="Baja California">Baja California</option>
                 <option value="Baja California Sur">Baja California Sur</option>
                 <option value="Campeche">Campeche</option>
                 <option value="Coahuila">Coahuila</option>
                 <option value="Colima">Colima</option>
                 <option value="Chiapas">Chiapas</option>
                 <option value="Chihuahua">Chihuahua</option>
                 <option value="Distrito Federal">Distrito Federal</option>
                 <option value="Durango">Durango</option>
                 <option value="Guanajuato">Guanajuato</option>
                 <option value="Guerrero">Guerrero</option>
                 <option value="Hidalgo">Hidalgo</option>
                 <option value="Jalisco">Jalisco</option>
                 <option value="Mexico">Mexico</option>
                 <option value="Michoacan">Michoacan</option>
                 <option value="Morelos">Morelos</option>
                 <option value="Nayarit">Nayarit</option>
                 <option value="Nuevo Leon">Nuevo Leon</option>
                 <option value="Oaxaca">Oaxaca</option>
                 <option value="Puebla">Puebla</option>
                 <option value="Queretaro">Queretaro</option>
                 <option value="Quintana Roo">Quintana Roo</option>
                 <option value="San Luis Potosi">San Luis Potosi</option>
                 <option value="Sinaloa">Sinaloa</option>
                 <option value="Sonora">Sonora</option>
                 <option value="Tabasco">Tabasco</option>
                 <option value="Tamaulipas">Tamaulipas</option>
                 <option value="Tlaxcala">Tlaxcala</option>
                 <option value="Veracruz">Veracruz</option>
                 <option value="Yucatan">Yucatan</option>
                 <option value="Zacatecas">Zacatecas</option>
            
             </select>

         </div>
      </div>
    </div>  

  </br>
      <div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">CURP:</span>
          <input type="text" class="form-control" maxlength="18"  placeholder="Introduce tu curp" name="cur" id="cur" aria-describedby="basic-addon1">
        </div>
      </div>
    </div>

   </br>
      <div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Genero: </span>
            &nbsp;&nbsp; <strong> Hombre </strong> &nbsp;&nbsp;<input type="radio" name="genero" id="genero" value="H" /> &nbsp;&nbsp;
             <strong> Mujer </strong> &nbsp;&nbsp;<input type="radio" name="genero" id="genero" value="M" />
        </div>
      </div>
    </div>




<hr>
       <center></span><h3 class="bg-primary"><i><strong>Domicilio</strong> </i><font color="black"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></h3></center> 

<hr>
</br>
      <div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Calle:</span>
          <input type="text" class="form-control"  placeholder="Nombre de la calle donde vives" name="calle" id="calle" aria-describedby="basic-addon1">
        </div>
      </div>
    </div>
</br>


 <div class="row">
      <div class="col-md-5">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Numero exterior:</span>
          <input type="text" class="form-control"  placeholder="Numero exterior de tu domicilio" name="exterior" id="exterior" aria-describedby="basic-addon1">
        </div>
      </div>
    </div>
</br>

 <div class="row">
      <div class="col-md-5">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Numero interior:</span>
          <input type="text" class="form-control"  placeholder="Numero interior de tu domicilio" name="interior" id="interior" aria-describedby="basic-addon1">
        </div>
      </div>
    </div>
</br>







<div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Colonia:</span>
          <input type="text" class="form-control"  placeholder="Colonia en la que vives" name="col" id="col" aria-describedby="basic-addon1">
        </div>
      </div>
    </div>
</br>

<div class="row">
      <div class="col-md-5">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Código Postal:</span>
          <input type="text" class="form-control"  maxlength="5" placeholder="Introduce tu código postal" name="cp" id="cp" aria-describedby="basic-addon1">
        </div>
      </div>
    </div>
</br>
      <h5><strong>


</h5></strong>
<div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Estados:</span> &nbsp;&nbsp;
       
         <select id="estados" name="estado">
            <option></option>
          <?php __ListarEstados(); ?>
         </select>

         </div>
      </div>
    </div>     
</br>
      <h5><strong>


</h5></strong>
<div class="container">
<div class="row"
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Municipios:</span> &nbsp;&nbsp;
          <select id="municipios" name="municipio">
         </select>
     </div>
      </div>
    </div>     
</br>
<hr>

       <center></span><h3 class="bg-primary"><i><strong>Contacto</strong> </i><font color="black"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></h3></center> 

<hr>
</br>
      <div class="row">
      <div class="col-md-5">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Telefono:</span>
          <input type="text" class="form-control"  placeholder="Introduce tu telefono" name="tel" id="tel" aria-describedby="basic-addon1">
       
 </div>
      </div>
    </div>
</br>
<div class="row">
      <div class="col-md-5">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Celular:</span>
          <input type="text" class="form-control"  placeholder="Introduce tu celular" name="cel" id="cel" aria-describedby="basic-addon1">

        </div>
      </div>
    </div>
</br>

      <div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Correo:</span>
          <input type="text" class="form-control" placeholder="correo@ejemplo.com" name="mail" id="mail" aria-describedby="basic-addon1">
       
 </div>
      </div>
    </div>
</br>

      <div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Facebook:</span>
          <input type="text" class="form-control"  placeholder="Introduce tu dirección de Facebook" name="face" id="face" aria-describedby="basic-addon1">
       </div>
      </div>
    </div> 
</br>

      <div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">twitter:</span>
          <input type="text" class="form-control" placeholder="Introduce tu dirección de Twitter" name="twitter" id="twitter" aria-describedby="basic-addon1">

 </div>
      </div>
    </div> 
</br>

<hr>
       <center></span><h3 class="bg-primary"><i><strong>Nivel académico</strong> </i><font color="black"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></h3></center> 


<hr>

 <strong> Nivel de Estudios:</strong>
         <select name="cat" id="cat">

          <option value=""></option>
                 <option value="Preescolar">Preescolar</option>
                 <option value="Primaria">Primaria</option>
                 <option value="Secundaria">Secundaria</option>
                 <option value="Educación Especial">Educación Especial</option>
                 <option value="Bachillerato">Bachillerato</option>
                 <option value="Educación_Normal">Educación Normal</option>
                 <option value="Universidad">Universidad</option>
             </select>

    
</br>
</br>
     

      <div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Estudias actualmente: </span>
            &nbsp;&nbsp; <strong> SI </strong> &nbsp;&nbsp;<input type="radio" name="estuactual" id="btn1" value="S" /> &nbsp;&nbsp;
            <strong>  NO </strong>&nbsp;&nbsp;<input type="radio" name="estuactual" id="btn2" value="N" />
    


</div>
      </div>
    </div> 






<p id="caja2">



</br>



          <input type="text" class="form-control" placeholder="Introduce aquí el nombre de la institución académica" name="nombreinstitu" id="nombreinstitu" aria-describedby="basic-addon1">



</br>

<strong>TURNO: </strong>


            &nbsp;&nbsp; <strong> Matutino </strong>&nbsp;&nbsp;<input type="radio" name="turnoo" id="turnoo" value="M" /> &nbsp;&nbsp;
             <strong> Vespertino </strong> &nbsp;&nbsp;<input type="radio" name="turnoo" id="turnoo" value="V" /> &nbsp;&nbsp;
            <strong>  Nocturno</strong> &nbsp;&nbsp;<input type="radio" name="turnoo" id="turnoo" value="N " />
</p>

 <div class="row">
      <div class="col-md-6">
        <div class="input-group">


</div>
      </div>
    </div> 
</br>





<hr>
       <center></span><h3 class="bg-primary"><i><strong>Datos profesionales</strong> </i><font color="black"><span class="glyphicon glyphicon-lock" aria-hidden="true"></h3></center> 


<hr>
</div>
      </div>
    </div> 
</br>

     <div class="container">
      <div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Area de interes:</span>
          <input type="text" class="form-control"  placeholder="El puesto al que aspiras" name="interes" id="interes" aria-describedby="basic-addon1">











</div>
      </div>
    </div> 
</br>

      <div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Reubicarme: </span>
            &nbsp;&nbsp; <strong> SI </strong> &nbsp;&nbsp;<input type="radio" name="reu" id="reu" value="S" /> &nbsp;&nbsp;
             <strong> NO </strong> &nbsp;&nbsp;<input type="radio" name="reu" id="reu" value="N" />
    



</div>
      </div>
    </div> 




</br>

      <div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Viajar: </span>
            &nbsp;&nbsp; <strong> SI </strong> &nbsp;&nbsp;<input type="radio" name="viaje" id="viaje" value="S" /> &nbsp;&nbsp;
             <strong> NO </strong> &nbsp;&nbsp;<input type="radio" name="viaje" id="viaje" value="N" />
    


</div>
      </div>
    </div> 
</br>


<hr>
       <center></span><h3 class="bg-primary"><i><strong>Experiencia profesional</strong> </i><font color="black"><span class="glyphicon glyphicon-lock" aria-hidden="true"></h3></center> 


<hr>

</div>
      </div>
    </div> 
</br>
   <div class="container">
      <div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Experiencia profesional: </span>
            &nbsp;&nbsp; <strong> SI</strong> &nbsp;&nbsp;<input type="radio" name="profe"  id="btn111"  value="S" /> &nbsp;&nbsp;
            <strong>  NO</strong> &nbsp;&nbsp;<input type="radio" name="profe"  id="btn222"  value="N" />
    
</div>
      </div>
    </div> 
</br>

<p id="caja3">

 
          <input type="text" class="form-control"  placeholder="Introduce el nombre de la empresa" name="empre" id="empre" aria-describedby="basic-addon1">
        </br>
          <input type="text" class="form-control"  placeholder="Nombra el puesto que desempeñabas" name="cargo" id="cargo" aria-describedby="basic-addon1">
        </br>
          <input type="text" class="form-control"  placeholder="Introduce la calle de la empresa" name="calleempre" id="calleempre" aria-describedby="basic-addon1">
        </br>
          <input type="text" class="form-control"  placeholder="Numero exterior del domicilio de la empresa" name="exteempre" id="exteempre" aria-describedby="basic-addon1">
        </br>
          <input type="text" class="form-control" placeholder="Numero interior del domicilio de la empresa" name="inteempre" id="inteempre" aria-describedby="basic-addon1">
        </br>
          <input type="text" class="form-control"  placeholder="Introduce la colonia en la que se ubica la empresa" name="coloempre" id="coloempre" aria-describedby="basic-addon1">
        </br>
          <input type="date" class="form-control"  placeholder="" name="inicioempre" id="fechaing" aria-describedby="basic-addon1">
        </br>
         <input type="date" class="form-control" placeholder="" name="finempre" id="fechaing" aria-describedby="basic-addon1">

</br>
</br>
<strong>Más experiencia? </strong>
<strong> SI </strong><input type="radio" name="cb" onchange="start();" /> 
<strong> NO </strong><input type="radio" name="cb" onchange="chgtx1();" /> 


</br>
</br>
<script> 

function start1() { 
 form.empre3.disabled = !form.cb.checked; 
form.cargo3.disabled = !form.cb.checked; 
form.calleempre3.disabled = !form.cb.checked; 
form.exteempre3.disabled = !form.cb.checked; 
form.inteempre3.disabled = !form.cb.checked; 
form.coloempre3.disabled = !form.cb.checked; 
form.inicioempre3.disabled = !form.cb.checked; 
form.finempre3.disabled = !form.cb.checked; 
} 

function start2() { 
form.empre3.disabled = false; 
form.cargo3.disabled = false; 
form.calleempre3.disabled = false; 
form.exteempre3.disabled = false; 
form.inteempre3.disabled = false; 
form.coloempre3.disabled = false; 
form.inicioempre3.disabled = false; 
form.finempre3.disabled = false; 
} 
onload = start2; 





function start() { 
form.empre2.disabled = false; 
form.cargo2.disabled = false; 
form.calleempre2.disabled = false; 
form.exteempre2.disabled = false; 
form.inteempre2.disabled = false; 
form.coloempre2.disabled = false; 
form.inicioempre2.disabled = false; 
form.finempre2.disabled = false; 
form.empre3.disabled = false; 
form.cargo3.disabled = false; 
form.calleempre3.disabled = false; 
form.exteempre3.disabled = false; 
form.inteempre3.disabled = false; 
form.coloempre3.disabled = false; 
form.inicioempre3.disabled = false; 
form.finempre3.disabled = false; 
} 
onload = start; 

function chgtx1() { 
form.empre2.disabled = !form.cb.checked; 
form.cargo2.disabled = !form.cb.checked; 
form.calleempre2.disabled = !form.cb.checked; 
form.exteempre2.disabled = !form.cb.checked; 
form.inteempre2.disabled = !form.cb.checked; 
form.coloempre2.disabled = !form.cb.checked; 
form.inicioempre2.disabled = !form.cb.checked; 
form.finempre2.disabled = !form.cb.checked; 
form.empre3.disabled = !form.cb.checked; 
form.cargo3.disabled = !form.cb.checked; 
form.calleempre3.disabled = !form.cb.checked; 
form.exteempre3.disabled = !form.cb.checked; 
form.inteempre3.disabled = !form.cb.checked; 
form.coloempre3.disabled = !form.cb.checked; 
form.inicioempre3.disabled = !form.cb.checked; 
form.finempre3.disabled = !form.cb.checked; 
} 
</script>

    <input type="text" class="form-control"  placeholder="Introduce el nombre de la empresa" name="empre2" id="empre2" aria-describedby="basic-addon1">
        </br>
          <input type="text" class="form-control"  placeholder="Nombra el puesto que desempeñabas" name="cargo2" id="cargo2" aria-describedby="basic-addon1">
        </br>
          <input type="text" class="form-control"  placeholder="Introduce la calle de la empresa" name="calleempre2" id="calleempre2" aria-describedby="basic-addon1">
        </br>
          <input type="text" class="form-control"  placeholder="Numero exterior del domicilio de la empresa" name="exteempre2" id="exteempre2" aria-describedby="basic-addon1">
        </br>
          <input type="text" class="form-control" placeholder="Numero interior del domicilio de la empresa" name="inteempre2" id="inteempre2" aria-describedby="basic-addon1">
        </br>
          <input type="text" class="form-control"  placeholder="Introduce la colonia en la que se ubica la empresa" name="coloempre2" id="coloempre2" aria-describedby="basic-addon1">
        </br>
          <input type="date" class="form-control"  placeholder="" name="inicioempre2" id="fechaing" aria-describedby="basic-addon1">
        </br>
         <input type="date" class="form-control" placeholder="" name="finempre2" id="fechaing" aria-describedby="basic-addon1">

</br></br>

<strong>Más experiencia? </strong>
<strong> SI </strong><input type="radio" name="cb" onchange="start2();" /> 
<strong> NO </strong><input type="radio" name="cb" onchange="start1();" /> 


</br></br>
         <input type="text" class="form-control"  placeholder="Introduce el nombre de la empresa" name="empre3" id="empre3" aria-describedby="basic-addon1">
        </br>
          <input type="text" class="form-control"  placeholder="Nombra el puesto que desempeñabas" name="cargo3" id="cargo3" aria-describedby="basic-addon1">
        </br>
          <input type="text" class="form-control"  placeholder="Introduce la calle de la empresa" name="calleempre3" id="calleempre3" aria-describedby="basic-addon1">
        </br>
          <input type="text" class="form-control"  placeholder="Numero exterior del domicilio de la empresa" name="exteempre3" id="exteempre3" aria-describedby="basic-addon1">
        </br>
          <input type="text" class="form-control" placeholder="Numero interior del domicilio de la empresa" name="inteempre3" id="inteempre3" aria-describedby="basic-addon1">
        </br>
          <input type="text" class="form-control"  placeholder="Introduce la colonia en la que se ubica la empresa" name="coloempre3" id="coloempre3" aria-describedby="basic-addon1">
        </br>
          <input type="date" class="form-control"  placeholder="" name="inicioempre3" id="fechaing" aria-describedby="basic-addon1">
        </br>
         <input type="date" class="form-control" placeholder="" name="finempre3" id="fechaing" aria-describedby="basic-addon1">


</div>
      </div>
    </div> 
</br>

    </p>


 <script>
   
  
   $(document).on("ready",function(){
   
   var elem = $('#caja1');
   
   $('#btn11').click(function(){

      elem.fadeIn()
   
   
    });

     $('#btn22').click(function(){

     elem.slideToggle()
    });
   

   });
   
  
  </script>


 <script>
   
  
   $(document).on("ready",function(){
   
   var elem = $('#caja2');
   
   $('#btn1').click(function(){

      elem.fadeIn()
   
   
    });

     $('#btn2').click(function(){

     elem.slideToggle()
    });
   

   });
   
  
  </script>


  <script>
   
  
   $(document).on("ready",function(){
   
   var elem = $('#caja3');
   
   $('#btn111').click(function(){

      elem.fadeIn()
   
   
    });

     $('#btn222').click(function(){

     elem.slideToggle()
    });
   

   });
   
  
  </script>






<hr>



<div class="container">
    


  <div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Trabaja actual: </span>
            &nbsp;&nbsp; <strong> SI </strong> &nbsp;&nbsp;<input type="radio" name="traactual" id="btn11" value="S"  /> &nbsp;&nbsp;
             <strong> NO </strong> &nbsp;&nbsp;<input type="radio" name="traactual" id="btn22" value="N"  />
    


</div>
      </div>
    </div> 
</br>





<!--CON ESTE DIV SE OCULTA LA CAJA DE TEXTO-->

<p id="caja1">

      
          <input type="text" class="form-control"  placeholder="Cargo que desempeñas" name="respoempre" id="respoempre" aria-describedby="basic-addon1">
 

</p>









 <div class="row">
      <div class="col-md-6">
        <div class="input-group">
    

     </div>
      </div>
    </div> 
</br>


  <div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <!--ACTIVO-->
            &nbsp;&nbsp;  &nbsp;&nbsp;<input type="hidden"  type="radio" name="activo" id="activo"  checked="checked"  value="N" /> &nbsp;&nbsp;
               &nbsp;&nbsp;<input type="hidden"  type="radio" name="activo" id="activo" value="S" />
    






 </div>
      </div>
    </div>

</br>

<div id="mensaje"></div>

</br>

<input class="btn btn-primary" type="button" value="Enviar" id="registrar" /> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
<td><a class="btn btn-primary" href="<?php echo base_url() ?>controlador_usuario_form">Limpiar</a></td>
</br>
</br>






</form>































<?php

Function  __ListarEstados(){

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
 $sql = $conn->prepare('SELECT * FROM estados');
    $sql->execute();
    $resultado = $sql->fetchAll();
    foreach ($resultado as $row) {
        echo "<option value='".$row['id']."'>".$row['nombre']."</option>";
    }
  }

?>







<script src="../jquery.min.js"></script>
<script type="text/javascript">
$( "#estados" ).change(function() {
    var municipio = $("select#estados option:selected").val();
    var datastring = 'municipio='+municipio;

        $.ajax({

          type: 'POST',
          url: '../municipios.php',
          data: datastring,
             success: function(data){
               $('#municipios').html('');
               $('#municipios').html(data);
             }
        });
});
</script>

       


</body>




















 </html>

 