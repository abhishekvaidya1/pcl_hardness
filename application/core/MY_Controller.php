<?php

class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        define('SITE_URL', site_url());
        define('BASE_URL', base_url());
    }

    public function layout_admin($data) {
        if ($this->session->userdata('user_name') != null) {
            $temp['data'] = $data;
            $temp['title'] = $data['title'];
            $this->load->view('layout/index', $temp);
        } else {
            $this->load->view('login');
        }
    }
    

    
    
    
}
