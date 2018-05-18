<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Welcome extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('User_model', 'user_model', TRUE);
		$this->load->library('form_validation');    
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->status = $this->config->item('status'); 
		$this->roles = $this->config->item('roles');
	}  


	public function index()
	{

        $data = $this->user_model->getAllCampaign();
        

		$this->load->view('templates/header');
		$this->load->view('pages/home', ['data'=>$data]);
		$this->load->view('templates/footer');
	}
}
