<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Editprofile extends CI_Controller{
        public function index(){
            $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
            $data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);

            $this->load->view('pages/editprofile.php', $data);
        }
    }
?>