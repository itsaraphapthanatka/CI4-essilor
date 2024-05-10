<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EcpModel;

class Pages extends BaseController{
	
	public function __construct()
	{
		$db = db_connect();
		
	}
	
	public function view($seg1 = false){
		$data['type'] = $seg1;
		echo view('pages/home',$data);
	}

	public function load_list_ecp_view(){
		
		echo view('pages/list_ecp_view');
	}
	
	
}