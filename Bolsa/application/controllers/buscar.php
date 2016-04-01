<!--PARA BUSCAR EN EL MENU DE ADMINISTRADROR-->

				<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

				class buscar extends ci_controller{


				public function index(){
			    
			    $this->load->view('arribadmin');

				//cargamos el modelo de la base de datos
				$this-> load ->model('buscar_mod');
				//creamos un if para recibir los datos del formulario 




				if($_POST){
				// aqui nos referimos al formulario con el name="busqueda" 
				$buscar = $this-> input ->post('busqueda');

				}else{
				//de lo contrario la dejamos en blanco
				$buscar = '';

				}

				//con esta variable le madamos los datos a la vista para mostrarla

				// y cargamos el metodo buscar
				$agendas['agendas']= $this-> buscar_mod -> buscar($buscar);

				$this -> load -> view('buscaragen', $agendas);
	

	            $this->load->view('abajoadmin');

				}










				

				}













				?>


