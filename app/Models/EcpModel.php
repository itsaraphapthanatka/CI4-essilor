<?php namespace App\Models;

use CodeIgniter\Model;

class EcpModel extends Model{
    protected $table = 'ecp';
	protected $primaryKey = 'id';
	protected $allowedFields = ['id','customer_cd','customer_name','payment_term_cd','customer_type','c_customer_parent_group','c_experts','c_partner','nikon_lenswear_partner','upgrade_coating','upgrade_azio','upgrade_f360'];

	public function insertValue($data){
		$builder = $this->db->table('ecp');
		return $builder->insert($data);
	}

	public function trancateData(){
		$builder = $this->db->table('ecp');
		return $builder->truncate();
	}
}