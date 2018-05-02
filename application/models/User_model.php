<?php
class User_model extends CI_Model {

    public $status; 
    public $roles;
    
    function __construct(){
        // Call the Model constructor
        parent::__construct();        
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->helper('date');
    }    
    
    public function insertUser($d)
    {  
            $string = array(
                'first_name'=>$d['firstname'],
                'last_name'=>$d['lastname'],
                'email'=>$d['email'],
                'role'=>$this->roles[0], 
                'status'=>$this->status[0]
            );
            $q = $this->db->insert_string('users',$string);             
            $this->db->query($q);
            return $this->db->insert_id();
    }

    public function getCampaignById($id)
    {
        # code...
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('campaign');
        $result = $query->row_array();
        return $result;
    }

    public function insertCampaign($d)
    {  
        $date = date('Y-m-d');
        $id = $this->session->userdata['id'];
        $name = $this->getusersname($id);
            $string = array(
                'user_id'=>$id,
                'campaign_name'=>$d['Campaign'],
                'campaign_starter'=>$name->last_name.' '.$name->first_name,
                'campaign_current_fund'=>"0",
                'campaign_target_fund'=>$d['targetfund'],
                'campaign_description'=>$d['desc'],
                'campaign_start_date'=>$date,
                'campaign_end_date'=>$d['date']
            );
            $q = $this->db->insert_string('campaign',$string);             
            $this->db->query($q);
            return $this->db->insert_id();
    }
    public function autoMycampaign($id)
    {   
        //$id = $this->session->userdata['id'];
        $this->db->select('*');
        $this->db->where('user_id', $id);
        $this->db->order_by('campaign_start_date','desc');
        $query = $this->db->get('campaign');
        $result = $query->result_array();
        return $result; 
    }
    public function getusersname($id)
    {
        $this->db->select('first_name', 'last_name');
        $this->db->limit(2);
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        $name = $query->row();
        return $name; 
    }
    public function isDuplicate($email)
    {     
        $this->db->get_where('users', array('email' => $email), 1);
        return $this->db->affected_rows() > 0 ? TRUE : FALSE;         
    }

    public function getAllCampaign()
    {
        # code...
        $this->db->select('*');
        $this->db->order_by('campaign_start_date','desc');
        $query = $this->db->get('campaign');
        $result = $query->result_array();
        return $result;
    }

    public function isDuplicate2($campaign)
    {     
        $this->db->get_where('campaign', array('campaign_name' => $campaign), 1);
        return $this->db->affected_rows() > 0 ? TRUE : FALSE;         
    }
    
    public function insertToken($user_id)
    {   
        $token = substr(sha1(rand()), 0, 30); 
        $date = date('Y-m-d');
        
        $string = array(
                'token'=> $token,
                'user_id'=>$user_id,
                'created'=>$date
            );
        $query = $this->db->insert_string('tokens',$string);
        $this->db->query($query);
        return $token . $user_id;
        
    }
    
    public function isTokenValid($token)
    {
       $tkn = substr($token,0,30);
       $uid = substr($token,30);      
       
        $q = $this->db->get_where('tokens', array(
            'tokens.token' => $tkn, 
            'tokens.user_id' => $uid), 1);                         
               
        if($this->db->affected_rows() > 0){
            $row = $q->row();             
            
            $created = $row->created;
            $createdTS = strtotime($created);
            $today = date('Y-m-d'); 
            $todayTS = strtotime($today);
            
            if($createdTS != $todayTS){
                return false;
            }
            
            $user_info = $this->getUserInfo($row->user_id);
            return $user_info;
            
        }else{
            return false;
        }
        
    }    
    
    public function getUserInfo($id)
    {
        $q = $this->db->get_where('users', array('id' => $id), 1);  
        if($this->db->affected_rows() > 0){
            $row = $q->row();
            return $row;
        }else{
            error_log('no user found getUserInfo('.$id.')');
            return false;
        }
    }

    public function getMyCampaign($id)
    {
        $q = $this->db->get_where('campaign', array('id' => $id), 1);
        if($this->db->affected_rows() > 0){
            // $row = $q->row();
            // return $row;
            error_log('no Campaign found in ('.$id.')');
            return false;
        }else{
            error_log('no Campaign found in ('.$id.')');
            return false;
        }
    }
    
    public function updateUserInfo($post)
    {
        $data = array(
               'password' => $post['password'],
               'last_login' => date('Y-m-d h:i:s A'), 
               'status' => $this->status[1]
            );
        $this->db->where('id', $post['user_id']);
        $this->db->update('users', $data); 
        $success = $this->db->affected_rows(); 
        
        if(!$success){
            error_log('Unable to updateUserInfo('.$post['user_id'].')');
            return false;
        }
        
        $user_info = $this->getUserInfo($post['user_id']); 
        return $user_info; 
    }
    
    public function checkLogin($post)
    {
        $this->load->library('password');       
        $this->db->select('*');
        $this->db->where('email', $post['email']);
        $query = $this->db->get('users');
        $userInfo = $query->row();
        
        if(!$this->password->validate_password($post['password'], $userInfo->password)){
            error_log('Unsuccessful login attempt('.$post['email'].')');
            return false; 
        }
        
        $this->updateLoginTime($userInfo->id);
        
        unset($userInfo->password);
        return $userInfo; 
    }
    
    public function updateLoginTime($id)
    {
        $this->db->where('id', $id);
        $this->db->update('users', array('last_login' => date('Y-m-d h:i:s A')));
        return;
    }
    
    public function getUserInfoByEmail($email)
    {
        $q = $this->db->get_where('users', array('email' => $email), 1);  
        if($this->db->affected_rows() > 0){
            $row = $q->row();
            return $row;
        }else{
            error_log('no user found getUserInfo('.$email.')');
            return false;
        }
    }
    
    public function updatePassword($post)
    {   
        $this->db->where('id', $post['user_id']);
        $this->db->update('users', array('password' => $post['password'])); 
        $success = $this->db->affected_rows(); 
        
        if(!$success){
            error_log('Unable to updatePassword('.$post['user_id'].')');
            return false;
        }        
        return true;
    } 
    
}
