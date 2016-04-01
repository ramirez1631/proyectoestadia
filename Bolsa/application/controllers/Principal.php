		
<!-- A QUI MANDAMOS LA VISTA DEL MENU DE ARRIBA DEL ADMINISTRADOR -->

		<?php

		class Principal extends ci_controller{

			public function index(){


        $this -> load -> view('arriba');	

		//LA VISTA DEL MENU CON LETRAS
		$this -> load -> view('principal');

		//AQUI MANDAMOS LA VISTA DE ABAJO 
		$this -> load -> view('abajo');




		}
		}
		?>