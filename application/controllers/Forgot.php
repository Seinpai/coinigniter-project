<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Forgot extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('User_model', 'user_model', TRUE);
        $this->load->library('form_validation');

    }


    public function index()
    {
        $this->load->view('pages/forgot');
    }
}
