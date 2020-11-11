<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }


    public function index(){
        $this->load->view('login');
    }


    public function log(){

        if(isset($_POST['submit'])){
            $query = $this->m_login->validate_user();

            //-- if valid
            if($query){
                $data = array();
                foreach($query as $row){
                    $data = array(
                        'id' => $row->id,
                        'name' => $row->nama,
                        'username' =>$row->username,
                        'role' =>$row->role,
                        'is_login' => TRUE
                    );
                    $this->session->set_userdata($data);
                    if ($data['role'] == 'pimpinan' || $data['role'] == 'agen' ) {
                      // $url = base_url('dashboard');
                      redirect('dashboard');
                    } else {
                      // $url = base_url('kelolaUser');
                      redirect('kelolaUser');
                    }

                }
                // echo json_encode(array('st'=>1,'url'=> $url)); //--success
            }else{
                // echo json_encode(array('st'=>0)); //-- error
                $data = array();
                $data['page'] = 'salah';
                $this->load->view('login',$data);
            }

        }
    }



    function logout(){
        $this->session->sess_destroy();
        $data = array();
        $data['page'] = 'logout';
        $this->load->view('login', $data);
    }

}
