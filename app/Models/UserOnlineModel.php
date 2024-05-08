<?php namespace App\Models;

use CodeIgniter\Model;

class UserOnlineModel extends Model{
    protected $table = 'user_online';
	protected $primaryKey = 'uid';
	protected $allowedFields = ['id','uid','status','last_login','ip_address','latitude','longtitude','compcode'];

	public function getUsersOnline(){
		$db = db_connect();
		$query = $db->query("
		SELECT
			a.id,
			a.uid,
			a.`status`,
			a.last_login,
			a.ip_address,
			CONCAT(b.m_firstname,' ',b.m_lastname) as fullname,
			b.uimg as user_img
		FROM
			user_online a
			INNER JOIN
			member b
			ON 
				a.uid = b.m_id
		WHERE
			a.compcode = '".session()->get('compcode')."'
		AND
			b.m_type = 'employee'
		order by
			b.m_id ASC
		");
		$query = $query->getResult();

		$builder = $db->table('user_online');
		$builder->select('*');
		$builder->join('member', 'member.m_id = user_online.uid');
		$builder->where(['user_online.compcode' => session()->get('compcode'),'member.m_type' => 'employee']);
		$count = $builder->countAllResults();
		
		return $arr = [
            "recordsTotal" => $count,
            "recordsFiltered" => $count,
            "data" => $query

        ];
	}
}