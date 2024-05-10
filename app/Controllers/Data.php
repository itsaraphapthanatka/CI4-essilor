<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EcpModel;

class Data extends BaseController{
    public function __construct()
	{
		$db = db_connect();
		
	}
    public function getECP(){
        $ecp = new EcpModel();
		$query = $ecp->orderBy('id','ASC')->findAll();
		$count = $ecp->orderBy('id','ASC')->countAllResults();
        $arr = [
            "recordsTotal" => $count,
            "recordsFiltered" => $count,
            "data" => $query

        ];
        return $this->response->setJSON($arr);
    }

}