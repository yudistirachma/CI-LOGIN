<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/auth_header.php');
        $this->load->view('auth/login.php');
        $this->load->view('templates/auth_footer.php');
    }
    public function registration()
    {
        $this->load->view('templates/auth_header.php');
        $this->load->view('auth/registration.php');
        $this->load->view('templates/auth_footer.php');
    }
}
