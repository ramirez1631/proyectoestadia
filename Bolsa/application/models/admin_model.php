<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Admin_model extends CI_Model{



public function __construct(){


parent::__construct();




}

public function login($nombre,$password){



	$this-> db ->where('nombre',$nombre);
    $this-> db->where('password',$password);
    //CONSULTAMOS LA TABLA
    $q = $this-> db->get('tbl_administrador');
    // si nos devuelve una fila es porque existe
    if($q->num_rows()>0){


    	return true;
    }else{

      return false;


    }
}

}


?>