<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Air_view extends CI_Controller {




function __construct(){       
            parent::__construct();
            $this->load->model('bike_air_model');
            
            $this->load->helper("url");
            $this->load->library("pagination");
            
            $this->load->library('session');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * http://example.com/index.php/welcome
     *- or -
     * http://example.com/index.php/welcome/index
     *- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
    
       
        $list_size = 20;
        $list_start = 0;
       

        
       // $this->load->library('pagination');

        $config = array();
        $config["base_url"] = base_url()."air_view/index";
        $config["total_rows"] = $this->bike_air_model->get_all_count();
        $config["per_page"] = 20;
        $config["uri_segment"] = 3;
        $config['num_links'] = 2;
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);
          
        
        
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) -1) *  $config["per_page"] : 0;
        
        
        
        
        $result = $this->bike_air_model->get_page_list($page, $list_size);
        $data['result'] = $result ;
        
        $data['pagination'] = $this->pagination->create_links();
        
        
        $my_session = array('recent_url'=> $this->uri->uri_string());
        
        $this->session->set_userdata($my_session);

        $this->load->view('header');
        $this->load->view('air_view', $data);
        $this->load->view('footer');
    }



    public function detail() {
        $data['IDX'] = $this->uri->segment(3);
        
        
        $result = $this->bike_air_model->get_one_data($data['IDX']);
        $data['result'] = $result[0];
        
        
        $data['recent_url'] = $this->session->userdata('recent_url');
        
        
        $this->load->view('header');
        $this->load->view('air_view_detail', $data);
        $this->load->view('footer');
    }
}
