<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Signin extends CI_Controller{
        public function index(){
            $data['left_signin'] = $this->load->view('pages/left_signin.php', NULL, TRUE);

            $this->load->view('pages/signin.php', $data);
        }
    }
?>