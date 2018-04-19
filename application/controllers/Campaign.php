<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Campaign extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('image_lib');

    }


    public function index()
    {
        $data = array('title' => "Bantu Baby Shawqi Sembuh dari VSD CoA",
       'danaterkumpul' => 300,
       'danamax' => 400,
       'isfundedyet' => 0,
       'deskripsi' => "Bantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aorta",
       'campaignsterter' => "Udin si Udin",
       'details' => "Bantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aortaBantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aortaBantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aortaBantuBantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aortaBantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aorta"
         );
        


        $this->load->view('templates/header');
        $this->load->view('pages/campaign', ['data' => $data]);
        $this->load->view('templates/footer');
    }
}
