<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Campaign extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('image_lib');


    }


    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/campaign');
        $this->load->view('templates/footer');
    }
}
