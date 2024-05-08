<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends BaseController{
	
	public function __construct()
	{
		$db = db_connect();
		
		
	}
	
	public function view($seg1 = false){
		
		
		$data['type'] = $seg1;
		echo view('pages/home',$data);
	}
	
	
}