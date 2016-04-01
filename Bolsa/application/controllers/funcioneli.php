   <?php 
                class funcioneli extends CI_Controller {
                  function index(){

                        $this->load->view('funcioneli');
                             $this->load->model('model');

                    
                }

   
                    function nuevo(){
              
                   	
                        
                    }

                   function recibo(){
              

                    }

                    function editar(){
                      
   
                    
                        
                       
                    }

                   function borrar() {

                       $eli =  $this->db->query('select fn_del_registro(?) as resultado', array('id_registro' => 1));
                       $res=$eli->result();
                       if($res==0){

                          echo json_encode(array('estatus'=>true,'data'=>$res));
                           
                       }else{

                          echo json_encode(array('estatus'=>false,'data'=>$res));  
                        }

              

            }



                  



                    function actualizar(){
             
                    }
                    
                    
                }

                ?>