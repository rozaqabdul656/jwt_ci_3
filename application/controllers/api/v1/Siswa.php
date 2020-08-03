<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/core/Api_Controller.php';


class Siswa extends Api_Controller
{
    
    public function __construct(){
    	parent::__construct();
    	$this->load->model('Siswa_model');

    }
  	public function data_get()
    {
     
     $resp=$this->Siswa_model->Get_all();
     return $this->response($resp,200);
    }
}