<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_login extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -  
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('admin_login');
    }
    
    
    public function login()
    {

        
        
        $id = $this->input->post('id');
        $pwd = $this->input->post('pwd');
        
        
        
        $logged_in = false;
        if($id=="admin" && $pwd == "1234"){
            $this->session->set_userdata('isLogin', true);
            $logged_in = true;
        }
                       
      //  $this->load->view('admin_login');
        
        
        if ($logged_in == FALSE){
             redirect('/admin_login/', 'refresh');
        }else{
            
             redirect('/air_view/', 'refresh');
        }
        
        
        
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */