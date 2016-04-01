<?php

        class ajaxmodelo extends CI_Model {
     // CON EL METODO GET NOS PERMITE MOSTRAR LOS DATOS
                function verReg() {
               $sql = $this->db->get('tbl_registro');
                return $sql->result();
            }



    
            function editar() {
     // CON ESTE SENTENCIA NOS TRAEMOS EL ID SELECCIONADO PARA PODER MODIFICARLO

              $sql = "select * from tbl_registro where id_registro=?";
                 $sql = $this->db->query($sql, $_GET['id_registro']);
                  return $sql->result();
            }

           // CON ESTE SENTENCIA NOS TRAEMOS EL ID SELECCIONADO PARA PODER BORRARLO

            function borrar() {
             //   $id = $_GET['id'];
              //  $this->db->delete('amigos', array('id' => $id));
                    
               

            }

            //con esta funcion podemos agregar datos creando un arreglo en el orden de la base

        public function agregar(){
       

        $this -> db -> insert('tbl_registro',array(
          
            'favorito'=>$this -> input ->post('fa',TRUE),
            'nombre'=>$this-> input ->post('nombre',TRUE),
            'apellido_paterno'=>$this-> input ->post('ap',TRUE),
            'apellido_materno'=>$this-> input ->post('am',TRUE),
            'fecha_nacimiento'=>$this-> input ->post('fn',TRUE),
            'id_estado_nacimiento'=>$this-> input ->post('en',TRUE),
            'curp'=>$this-> input ->post('cur',TRUE),
            'genero'=>$this-> input ->post('genero',TRUE),
            'calle'=>$this-> input ->post('calle',TRUE),
            'numero_exterior'=>$this-> input ->post('exterior',TRUE),
            'numero_interior'=>$this-> input ->post('interior',TRUE),
            'colonia'=>$this-> input ->post('col',TRUE),
            'codigo_postal'=>$this-> input ->post('cp',TRUE),
            'id_estado'=>$this-> input ->post('estado',TRUE),
            'id_municipio'=>$this-> input ->post('municipio',TRUE),
            'telefono'=>$this-> input ->post('tel',TRUE),
            'celular'=>$this-> input ->post('cel',TRUE),
            'correo_electronico'=>$this-> input ->post('mail',TRUE),
            'facebook'=>$this-> input ->post('face',TRUE),
            'twitter'=>$this-> input ->post('twitter',TRUE),
            'id_cat_estudios'=>$this-> input ->post('cat',TRUE),
            'viajar'=>$this-> input ->post('viaje',TRUE),
            'experiencia_profesional'=>$this-> input ->post('profe',TRUE),
            'reubicarme'=>$this-> input ->post('reu',TRUE),
            'nombre_empresa'=>$this-> input ->post('empre',TRUE),
            'cargo_empresa'=>$this-> input ->post('cargo',TRUE),
            'calle_empresa'=>$this-> input ->post('calleempre',TRUE),
            'numero_exterior_empresa'=>$this-> input ->post('exteempre',TRUE),
            'numero_interior_empresa'=>$this-> input ->post('inteempre',TRUE),
            'colonia_empresa'=>$this-> input ->post('coloempre',TRUE),
            'inicio_empresa'=>$this-> input ->post('inicioempre',TRUE),
            'fin_empresa'=>$this-> input ->post('finempre',TRUE),

            'nombre_empresa2'=>$this-> input ->post('empre2',TRUE),
            'cargo_empresa2'=>$this-> input ->post('cargo2',TRUE),
            'calle_empresa2'=>$this-> input ->post('calleempre2',TRUE),
            'numero_exterior_empresa2'=>$this-> input ->post('exteempre2',TRUE),
            'numero_interior_empresa2'=>$this-> input ->post('inteempre2',TRUE),
            'colonia_empresa2'=>$this-> input ->post('coloempre2',TRUE),
            'inicio_empresa2'=>$this-> input ->post('inicioempre2',TRUE),
            'fin_empresa2'=>$this-> input ->post('finempre2',TRUE),

            'nombre_empresa3'=>$this-> input ->post('empre3',TRUE),
            'cargo_empresa3'=>$this-> input ->post('cargo3',TRUE),
            'calle_empresa3'=>$this-> input ->post('calleempre3',TRUE),
            'numero_exterior_empresa3'=>$this-> input ->post('exteempre3',TRUE),
            'numero_interior_empresa3'=>$this-> input ->post('inteempre3',TRUE),
            'colonia_empresa3'=>$this-> input ->post('coloempre3',TRUE),
            'inicio_empresa3'=>$this-> input ->post('inicioempre3',TRUE),
            'fin_empresa3'=>$this-> input ->post('finempre3',TRUE),

            'trabajo_actual'=>$this-> input ->post('traactual',TRUE),
            'responsabilidad_empresa'=>$this-> input ->post('respoempre',TRUE),
            'area_interes'=>$this-> input ->post('interes',TRUE),
            'activo'=>$this-> input ->post('activo',TRUE),
            'estudias'=>$this-> input ->post('estuactual',TRUE),
            'nombre_insti'=>$this-> input ->post('nombreinstitu',TRUE),
            'turno_insti'=>$this-> input ->post('turnoo',TRUE),
            
        ));



        }

            //NOS TRAEMOS EL ARREGLO CON EL ID CON EL METODO POST CON LA VARIABLES DE LA CAJA DE TEXTO 


            //CON LA SENTENCIA UPDATE ES LA QUE NOS PERMITE MODIFICAR
            
            function actualizar() {
                       $data = array(

                       'favorito' => $_POST['fa'],
          
                       'activo' => $_POST['activo']
          
                );

                $this->db->where('id_registro', $_POST['id']);
                $this->db->update('tbl_registro', $data);

              
            }
        }

        ?>
