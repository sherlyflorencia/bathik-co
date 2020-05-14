<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller{
        public function index(){
            $data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
            $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
            $data['header_home'] = $this->load->view('pages/header_home.php', NULL, TRUE);

            $this->load->view('pages/home.php', $data);
        }
    }
?>