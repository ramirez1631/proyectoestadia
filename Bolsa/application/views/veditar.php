<!-- EDITAMOS DATOS EN LA TABLA -->

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
        <title>Estatus</title>
     
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"></link>
          </br>
          <center>
            <img src="http://localhost/Bolsa/imagenes/adlogo.png" alt="" width="230px" height="150px"  />
      </center>
        </head>



        <body>


















        <!-- HACEMOS ESTO PARA SACAR LA POSICION EN LAS FILA Y LAS DEFINIMOS EN LOS VALORES ABAJO EN EL FORMULARIO -->
            <?php
            
            foreach ($registro as $fila) {
                
            }
            
            ?>



         <!-- LE DECIMOS QUE DEL CONTROLADOR NOS MANDE LA FUNCION -->
        <form id="form1" name="form1" method="post" action="<?php echo base_url('vistatablas/actualizar')?>">
        <div class="container">


           <center></span><h3 class="bg-primary"><i><strong>Usuario</strong> </i><font color="black"><span class="glyphicon glyphicon-user" aria-hidden="true"></h3></center> 

      <div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">ID:</span>
          <input type="text" class="form-control" required="" placeholder="Nombre(s)" name="id" id="id" value="<?php echo $fila->id_registro?>" aria-describedby="basic-addon1">
        </div>
      </div>
    </div>
</br>
     







       <center></span><h3 class="bg-primary"><i><strong>Activo</strong> </i><font color="black"><span class="glyphicon glyphicon-user" aria-hidden="true"></h3></center> 


      <div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Activo: </span>
            &nbsp;&nbsp; <strong> SI </strong> &nbsp;&nbsp;<input type="radio" name="activo" id="activo" value="S" checked="checked"  /> &nbsp;&nbsp;
             <strong> NO </strong> &nbsp;&nbsp;<input type="radio" name="activo" id="activo" value="N" />
        </div>
      </div>
    </div>





    </br>
           <center></span><h3 class="bg-primary"><i><strong>Favorito</strong> </i><font color="black"><span class="glyphicon glyphicon-star" aria-hidden="true"></h3></center> 

      <div class="row">
      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Favorito: </span>
            &nbsp;&nbsp; <strong> SI </strong> &nbsp;&nbsp;<input type="radio" name="fa" id="fa" value="Favorito" /> &nbsp;&nbsp;
             <strong> NO </strong> &nbsp;&nbsp;<input type="radio" name="fa" id="fa" value="N" checked="checked" />
        </div>
      </div>
    </div>


</br>
     







          <center>
          <input type="submit" id="Guardar" class="btn btn-primary" claname="Guardar" id="Guardar" value="Actualizar" />
           </center>
        </form>


        </body>



        <script>
            // funcion de jquery
            $(document).on('ready',function (){
            
           //ponemos la funcion del evento del botton
            $("#Guardar").on("click", function(){
           //mandamo una alerta al dar click

            alert("Se Guardaron los cambios con éxito");    
            });
            
            });
            
            </script>

          </html>



