<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Signup extends CI_Controller{
        public function index(){
            $data['left_signup'] = $this->load->view('pages/left_signup.php', NULL, TRUE);

            $this->load->view('pages/signup.php', $data);
        }
    }
?>