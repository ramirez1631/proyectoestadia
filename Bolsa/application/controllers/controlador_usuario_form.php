

          <?php

        
            class controlador_usuario_form extends CI_Controller {


            	public function __construct()
               
            	{

                parent::__construct();
                $this -> load -> model('ajaxmodelo');
                $this-> load ->library('form_validation');
            
            	}

            	public function index()

            	{
            // llamamos la vista del formulario del usuario
               $this -> load -> view('vista_usuario_form'); 
       
               

                }

                public function agregar()
              {

              if(!$this-> input-> is_ajax_request())
              {
                redirect('404');
              }
              else
              {

              $this-> form_validation->set_rules('fa','favorito','');
              $this-> form_validation->set_rules('nombre','nombre','required');
              $this-> form_validation->set_rules('ap','apellido_paterno','required');
              $this-> form_validation->set_rules('am','apellido_materno','required');
              $this-> form_validation->set_rules('fn','fecha_nacimiento','required');
              $this-> form_validation->set_rules('en','id_estado_nacimiento','required');
              $this-> form_validation->set_rules('cur','curp','required');
              $this-> form_validation->set_rules('genero','genero','required');
              $this-> form_validation->set_rules('calle','calle','required');
              $this-> form_validation->set_rules('exterior','numero_exterior','required');
              $this-> form_validation->set_rules('interior','numero_interior','');
              $this-> form_validation->set_rules('col','colonia','required');
              $this-> form_validation->set_rules('cp','codigo_postal','required');
              $this-> form_validation->set_rules('estado','id_estado','required');
              $this-> form_validation->set_rules('municipio','id_municipio','required');
              $this-> form_validation->set_rules('tel','telefono','required');
              $this-> form_validation->set_rules('cel','celular','required');
              $this-> form_validation->set_rules('mail','correo_electronico','required|valid_email');
              $this-> form_validation->set_rules('face','facebook','');
              $this-> form_validation->set_rules('twitter','twitter','');
              $this-> form_validation->set_rules('cat','id_cat_estudios','required');
              $this-> form_validation->set_rules('viaje','viajar','required');
              $this-> form_validation->set_rules('profe','experiencia_profesional','required');
              $this-> form_validation->set_rules('reu','reubicarme','required');
              $this-> form_validation->set_rules('empre','nombre_empresa','');
              $this-> form_validation->set_rules('cargo','cargo_empresa','');
              $this-> form_validation->set_rules('calleempre','calle_empresa','');
              $this-> form_validation->set_rules('exteempre','numero_exterior_empresa','');
              $this-> form_validation->set_rules('inteempre','numero_interior_empresa','');
              $this-> form_validation->set_rules('coloempre','colonia_empresa','');
              $this-> form_validation->set_rules('inicioempre','inicio_empresa','');
              $this-> form_validation->set_rules('finempre','fin_empresa','');
              $this-> form_validation->set_rules('traactual','trabajo_actual','required');
              $this-> form_validation->set_rules('respoempre','responsabilidad_empresa','');
              $this-> form_validation->set_rules('interes','area_interes','required');
              $this-> form_validation->set_rules('activo','activo','');
              $this-> form_validation->set_rules('estuactual','estudias','required');
              $this-> form_validation->set_rules('nombreinstitu','nombre_insti','');
              $this-> form_validation->set_rules('turnoo','turno_insti','');

              //
              //

              $this-> form_validation->set_message('required','El campo %s es requerido');
              $this-> form_validation->set_message('valid_email','El campo %s es Invalido');
                                                                                         
             if($this-> form_validation->run() == false)
             {  

                $error = json_encode(validation_errors());
                $error = str_replace('"',"", $error);              
                $error = str_replace('<\/p>\n',"", $error);
                echo $error;
             }
             else
             {

                  
           $this-> ajaxmodelo ->agregar();

    


      echo "<script>if(('Revisa que tus datos sean correctos. Deseas continuar?')){ 
      document.location='http://localhost/Bolsa/subir_archivo.php#no-back-button';} 
      else{  
      }</script>"; 




             }



              }


            

             }


          }



            ?>