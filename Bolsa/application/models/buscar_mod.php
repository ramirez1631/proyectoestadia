<!--ESTE ES EL MODELO PARA BUSCAR REGISTROS EN EL MENU DEL ADMINISTRADOR-->


			<?php

			class buscar_mod extends CI_Model{

            //RECIBIMOS EL PARARAMETRO $Buscar DE LA OTRA CLASE
			public function buscar($Buscar){
			//con esto el like podemos buscar los datos que estan en la base 
			$this-> db ->like('fecha_creacion',$Buscar);
			
			$this-> db ->or_like('nombre',$Buscar);
			//con el get obtenemos los datos de la tabla amigos
			$query = $this -> db -> get('tbl_registro');

			return $query -> result();




			}



			}

				
				


			?>