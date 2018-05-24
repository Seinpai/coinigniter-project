<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Paymentpaypal extends CI_Controller {

	public $id;

    function __construct() {
        parent::__construct();
        $this->load->model('Payment_model', 'payment_model', TRUE);
        $this->load->library('form_validation');
        $this->id;
    }


    public function index()
    {

	    	if(empty($this->session->userdata['email']))
	    	{
			redirect(site_url().'main/login/');
	     }
     
       $data['userdata'] = $this->session->userdata;
        $id = $this->input->post();
        $this->load->view('templates/header');
        $this->load->view('pages/paymentpaypal', $id);
        $this->load->view('templates/footer');
        var_dump($id);
    }

    public function donate()
    {
    	# code...
        $this->form_validation->set_rules('Money', 'Money', 'required'); 

        if ($this->form_validation->run() == false) {
        	# code...
        	$this->load->view('templates/header');
  	     	$this->load->view('pages/paymentpaypal', $id);
  	     	$this->load->view('templates/footer');
        } else {
          $post = $this->input->post();
  		    var_dump($post);
          $data = $this->payment_model->processbitcoin();
        }
    }
}
