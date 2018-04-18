<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Campaign extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('image_lib');

    }


    public function index()
    {
        $data['title'] = "Bantu Baby Shawqi Sembuh dari VSD CoA";
        $data['danaterkumpul'] = 300;
        $data['danamax'] = 400;
        $data['isfundedyet'] = 0;
        $data['deskripsi'] = "Bantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aorta";
        $data['campaignsterter'] = "Udin si Udin";
        $data['details'] = "Bantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aortaBantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aortaBantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aortaBantuBantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aortaBantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aorta";


        $this->load->view('templates/header');
        $this->load->view('pages/campaign', $data);
        $this->load->view('templates/footer');
    }
}
