<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_model {

    public function Get_all()
    {
    	
        $all = $this->db->get("tb_siswa")->result();
        $response['status']=200;
        $response['error']=false;
        $response['person']=$all;
        return $response;
    }
    
}
