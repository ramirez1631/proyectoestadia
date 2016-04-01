<!-- AQUI CARGAMOS TODAS LAS VISTAS Y METODOS DECLARADO DE LA CLASE MODEL -->

<!-- AQUI CARGAMOS UNA VISTA CON ESTO $this -> load -> view('Plantilla/Header');  -->

<!-- AQUI CARGAMOS UNA CLASE QUE ESTA EN EL MODEL   $this->load->model('magenda'); -->

<!-- AQUI CARGAMOS UNA CLASE QUE ESTA EN EL MODEL   $this->load->model('magenda'); -->

<!-- AQUI CARGAMOS UNA CLASE QUE ESTA EN EL MODEL CON UNA FUNCION   $data['registros']=$this->magenda->verReg(); -->


                <?php 
                class Vistatablas extends CI_Controller {
//////////////////////////////////////////////////////////////////////////////////////////////////
                  function index(){
                        $this->load->view('arribadmin');

                         $this->load->model('ajaxmodelo');
                        //se declara la variable registros
                        $data['registros']=$this->ajaxmodelo->verReg();
                        $this->load->view('vistatablavista',$data);	
                        //cargamos la vista de abajo
                        
                          $this->load->view('abajoadmin');
                }

    //////////////////////////////////////////////////////////////////////////////////////            
                   //AGREGAR REGISTRO
                    function nuevo(){
              
                //cargamos la vista del formulario para agregar un registro
                 $this -> load-> view('vnuevo');
             
                      	
                        
                    }
                    
//////////////////////////////////////////////////////////////////////////////////////////
                    // este metedo recibo los datos recien guardados en la base
                   function recibo(){
              
                    //cargamos el modelo de la base de la base con las funciones
                   //    $this->load->model('ajaxmodelo');
                       //obtenemos el metodo guardar
                   //    $this->magenda->guardar();
                       // con esto metodo obtenemos la tabla
                   //    $this->index();
             
                    }

/////////////////////////////////////////////////////////////////////////////////////////////
                   // LA FUNCION PARA MODIFICAR REGISTROS
                    function editar(){
                      
                        //cargamos la funciones del metodo magenda
                        $this->load->model('ajaxmodelo');
                        //cargamos la variables registro y el metodo editar
                        $data['registro']=$this->ajaxmodelo->editar();
                        //cargamos la vista editar con la variable data para obtener el orden de los registros de la base
                        $this->load->view('veditar',$data);	
                    
                        
                       
                    }
///////////////////////////////////////////////////////////////////////////////////////////////                    
                    //PARA BORRAR REGISTROS
                    function borrar(){
                   
                       //cargamos la funciones del metodo magenda
                     //   $this->load->model('magenda');
                        // CARGAMOS EL METODO BORRAR
                     //   $this->magenda->borrar();
                        // CARGAMOS LA TABLA
                    //    $this->index();
                      
                    
        //Mandamo una alerta
     // echo "<script type=''>
    //  alert('Eliminado con Exito!');
    //  </script>"; 


                    }


                  

//////////////////////////////////////////////////////////////////////////////////
                     //PARA VER LOS REGISTROS EDITADOS ACTUALIZADOS
                    function actualizar(){
                    
                         //cargamos el modelo de la base
                        $this->load->model('ajaxmodelo');
                        //cargamos el metodo de actualizar del modelo
                        $this->ajaxmodelo->actualizar();
                        //sin el index no se muestra la tabla
                        $this->index();
                       
                    }
                    
                    
                }

                ?>