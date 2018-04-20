<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Campaign extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('User_model', 'user_model', TRUE);
    }


    public function index()
    {
        
    }

    public function campaign_by_id($id)
    {
       //  code...
       //  $data = array('title' => "Bantu Baby Shawqi Sembuh dari VSD CoA",
       // 'danaterkumpul' => 300,
       // 'danamax' => 400,
       // 'isfundedyet' => 0,
       // 'deskripsi' => "Bantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aorta",
       // 'campaignsterter' => "Udin si Udin",
       // 'details' => "Bantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aortaBantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aortaBantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aortaBantuBantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aortaBantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aorta"
       //   );

      
        
        $result = $this->user_model->getCampaignById($id);

        if ($result != null) 
        {
            # code...
            $data = $result;

            $current = $result['campaign_current_fund'];
            $target = $result['campaign_target_fund'];
            $isfundedyet = null;
            if ($current<$target) {
                # code...
                $isfundedyet = 0;
            } else {
                $isfundedyet = 1;
            }

            $data['isfundedyet'] = $isfundedyet;
            $data['details'] = "Bantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aortaBantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aortaBantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aortaBantuBantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aortaBantu Baby Shawqi sembuh dari infeksi paru-paru, kebocoran bilik jantung dan penyempitan pembuluh aorta";


            $this->load->view('templates/header');
            $this->load->view('pages/campaign', ['data'=>$data]);
            $this->load->view('templates/footer');
        }
        else 
        {
            redirect(site_url().'main');
        }
    } 
        
}
