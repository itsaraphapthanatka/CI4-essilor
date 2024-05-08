<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;
use App\Models\CompanyModel;
use App\Models\UserOnlineModel;
class Auth extends BaseController{
    public function __construct()
    {
        $db = db_connect();
        $this->UserOnlineModel = new UserOnlineModel($db);
    }

    public function index($page = 'login'){
        helper(['form']);
        if (session()->get('logged_in')) {
            
            if(session()->get('user_role') == 'o'){
                return redirect()->to('/home/'.session()->get('compcode'));
            }else{
                return redirect()->to('/userworks');
            }
            // return redirect()->to('/home');
        }
        return view('pages/'.$page);
        // echo password_hash('Mc5s7140',PASSWORD_DEFAULT);
    }
    public function auth(){
        
        $session = session();
        $model = new UsersModel();
        $username = $this->request->getVar('account_name');
        $password = $this->request->getVar('password');
        // $data = $model->chkLogin($username);
        if ($username == "manager" && $password=="1234") {
            $arr = [
                
                "data" => "success",
                "user" => $username
    
            ];
           
        }else{
            $arr = [
                
                "data" => "fail",
                "user" => $username
    
            ];
        }
        return $this->response->setJSON($arr);
        // if ($data) {
        //     $pass = $data['m_pass'];
        //     $verify_password = password_verify($password,$pass);
        //     if ($verify_password) {
        //         $sess_data = [
        //             'm_id' => $data['m_id'],
        //             'm_name' => $data['m_name'],
        //             'compcode' => $data['compcode'],
        //             'lastname' => $data['m_lastname'],
        //             'middlename' => $data['m_middlename'],
        //             'user_name' => $data['m_user'],
        //             'user_email' => $data['m_email'],
        //             'user_img' => $data['uimg'],
        //             'mobile' => $data['m_tel'],
        //             'user_role' => $data['m_status'],
        //             'gender' => $data['gender'],
        //             'logged_in' => TRUE
        //         ];
        //         $session->set($sess_data);
        //         $this->useronline('online');
        //         if(session()->get('user_role') == 's'){
        //             return redirect()->to('/userworks');
        //         }else{
        //             return redirect()->to('/SelectCompany');
        //         }
               
        //     }else{
        //         $session->setFlashdata('msg', 'Wrong password');
        //         echo view('pages/login');
        //     }
        // }else{
        //     $session->setFlashdata('msg', 'Username not found');
        //     echo view('pages/login');
        // }
    }
    public function loginLevel(){
        
        $session = session();
        $model = new UsersModel();
        $level = $this->request->getPost();
        // $data = $model->chkLogin($username);
            $arr = [
                
                "data" => "success",
                "level" => $level
    
            ];
        return $this->response->setJSON($arr);
        // if ($data) {
        //     $pass = $data['m_pass'];
        //     $verify_password = password_verify($password,$pass);
        //     if ($verify_password) {
        //         $sess_data = [
        //             'm_id' => $data['m_id'],
        //             'm_name' => $data['m_name'],
        //             'compcode' => $data['compcode'],
        //             'lastname' => $data['m_lastname'],
        //             'middlename' => $data['m_middlename'],
        //             'user_name' => $data['m_user'],
        //             'user_email' => $data['m_email'],
        //             'user_img' => $data['uimg'],
        //             'mobile' => $data['m_tel'],
        //             'user_role' => $data['m_status'],
        //             'gender' => $data['gender'],
        //             'logged_in' => TRUE
        //         ];
        //         $session->set($sess_data);
        //         $this->useronline('online');
        //         if(session()->get('user_role') == 's'){
        //             return redirect()->to('/userworks');
        //         }else{
        //             return redirect()->to('/SelectCompany');
        //         }
               
        //     }else{
        //         $session->setFlashdata('msg', 'Wrong password');
        //         echo view('pages/login');
        //     }
        // }else{
        //     $session->setFlashdata('msg', 'Username not found');
        //     echo view('pages/login');
        // }
    }

    public function keep_alive(){
        echo "keep-alive";
    }

    public function logout(){
        $session = session();
        $session->destroy();
        $this->useronline('offline');
        return redirect()->to('/');
    }
    
    public function forgeSignOut($seg1 = false){
        $online = new UserOnlineModel();
        $data = [
            'status' => '0',
            'last_login' => date('Y-m-d H:i:s'),
        ];
        $res = $this->UserOnlineModel->update(['uid'=> $seg1],$data);
        if ($res) {
            return redirect()->to('/checkusersonline');
        }

    }

    private function useronline($seg1 = false){
        $online = new UserOnlineModel();
        $user = $online->asArray()->where(['uid' => session()->get('m_id')])->first();
        if (!$user) {
            $data = [
                'uid' => session()->get('m_id'),
                'status' => '1',
                'last_login' => date('Y-m-d H:i:s'),
                'ip_address' => $this->request->getIPAddress(),
            ];
            $this->UserOnlineModel->insert($data);
        }else{
            if ($seg1 == "online") {
                $data = [
                    'status' => '1',
                ];
                $this->UserOnlineModel->update(['uid'=> session()->get('m_id')],$data);
            }elseif ($seg1 == "offline") {
                $data = [
                    'status' => '0',
                ];
                $this->UserOnlineModel->update(['uid'=> session()->get('m_id')],$data);
            }
            
        }
    }

    public function checkusersonline(){
        echo view('base/header');
        echo view('base/sidebar');
        echo view('master/userOnline');
        echo view('base/footer');
    }
}