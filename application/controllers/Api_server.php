<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/core/Api_Controller.php';


class Api_server extends Api_Controller {

       function __construct() {
            // Construct the parent class
            parent::__construct();
        }

  

    public function users_get()
    {
        // Users from a data store e.g. database
        $users = [
            ['id' => 0, 'name' => 'John', 'email' => 'john@example.com'],
            ['id' => 1, 'name' => 'Jim', 'email' => 'jim@example.com'],
        ];

        $id = $this->get( 'id' );

        if ( $id === null )
        {
            // Check if the users data store contains users
            if ( $users )
            {
                // Set the response and exit
                $this->response( $users, 200 );
            }
            else
            {
                // Set the response and exit
                $this->response( [
                    'status' => false,
                    'message' => 'No users were found'
                ], 404 );
            }
        }
        else
        {
            if ( array_key_exists( $id, $users ) )
            {
                $this->response( $users[$id], 200 );
            }
            else
            {
                $this->response( [
                    'status' => false,
                    'message' => 'No such user found'
                ], 404 );
            }
        }
    }

    // Panggil : Api_server/data
    // Get Data
    public function data_post()
    {
       
 // testing response
    	$response['status']=200;
    	$response['error']=false;
    	$response['message']='ada';

    // tampilkan response
    $this->response($response);

    }

    public function data_get()
    {
       
 // testing response
        $response['status']=200;
        $response['error']=false;
        $response['message']='data tersedia';

    // tampilkan response
    $this->response($response);

    }

 //    public function buku_get()
	// 	{

	// 		$this->response('books');
	// }
}