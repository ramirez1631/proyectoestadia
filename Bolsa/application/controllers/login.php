<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){


    parent::__construct();


	}
//CON EL MD5 ES PARA CODIGOS ENCRIPTADOS

	public function index(){

     if($this -> session -> userdata('nombre')){

     	redirect('vistatablas');
     }

if(isset($_POST['password'])){

    //nos traemos la clase model 
	$this -> load -> model('admin_model');
	//pasamos los parametros de donde esta el formulario
	if($this -> admin_model -> login($_POST['nombre'],md5($_POST['password']))){
      $this -> session -> set_userdata('nombre', $_POST['nombre']);
	   
	  redirect('vistatablas');
            
    
	}else{


   echo '<script>alert("USUARIO O CONTRASEÑA INCORRECTA")</script> ';

	}


}

    // mostramos la vista login
    $this -> load -> view('login');

	}
	public function logout()
	{
		$this -> session -> sess_destroy();
		redirect('login');
	}
	}




?>