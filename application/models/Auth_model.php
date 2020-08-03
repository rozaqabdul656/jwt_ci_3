<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_model {

    public function login($param)
    {
    	$username='rozaq';
    	$pass='abdul';
    	if ($param["username"] ==$username && $param["password"] == $pass) {
    		$tokenData=array();
    		$tokenData['id']=$param['username'].$param['password'];
    		$output['token']=AUTHORIZATION::generateToken($tokenData);
    		$output['username']=$param['username'];
    		return ['error'=>'false','msg'=>'succes','output'=> $output];
    	}
    		return ['error'=>'true','msg'=>'unauthorized'];
    	
     }
  
}
