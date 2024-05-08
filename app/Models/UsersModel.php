<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model{
    protected $table = 'member';
    protected $primaryKey = 'm_id';
    protected $allowedFields = ['m_id','m_code','m_name','m_user','m_pass','m_status','m_position','m_type','m_login','m_email','m_project','m_department','m_tel','uimg','compcode','sign','m_vender','LoginStatus','LastUpdate','user_type','date_pass','dashboard','lineid','prekey','user_status'];
    // protected $useTimestamps = true;
    
    public function chkLogin($username){
        
        return $this->asArray()
                    ->where(['m_user'=> $username,'user_status'=>'active'])
                    ->first();
       
    }
}