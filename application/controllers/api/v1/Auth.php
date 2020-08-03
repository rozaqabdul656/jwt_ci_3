<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/core/Api_Controller.php';


class Auth extends Api_Controller
{
    
    protected $exceptions=['login'];
    public function __construct(){
    	parent::__construct();
    	$this->load->model('Auth_model');

    }
  	public function login_post()
    {
     
     $resp=$this->Auth_model->login($this->post());
     return $this->response($resp,200);
    }
}