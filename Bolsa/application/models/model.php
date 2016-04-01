<?php

        class model extends CI_Model {
     // CON EL METODO GET NOS PERMITE MOSTRAR LOS DATOS
                function verReg() {
    
            }







          function borrar() {

             $eli =  $this->db->query('select fn_del_registro(?)', array('id_registro' => 2));
             if($eli){
                return json_encode(array('estatus'=>true,'data'=>$eli));
             }else{
                return json_encode(array('estatus'=>false,'data'=>$eli));  
             }



            
            }
        }

        ?>
