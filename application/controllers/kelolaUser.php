<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class kelolaUser extends CI_Controller {

	public function __construct(){
        parent::__construct();
				$this->load->model('m_kelolaUser');

    }


  public function index(){
      $data = array();
			$data['data_user'] = $this->m_kelolaUser->datauser();
      $data['page_title'] = 'Kelola User';
      $data['main_content'] = $this->load->view('v_kelolaUser', $data, TRUE);
			$this->load->view('index', $data);

  }

	public function tambahUser(){
      $data = array();
      $data['page_title'] = 'Tambah User';
			$db_data = array(
				'nama' => '',
				'username' => '',
			);
			$data['user']=$db_data;
      $data['main_content'] = $this->load->view('v_tambahUser', $data, TRUE);
			$this->load->view('index', $data);

  }

	public function hapusUser()
	{
		if(isset($_POST['submit']))
			{
				$id=$_POST['id'];

				$db_data = array(
					'id' => $id
				);
				$this->m_kelolaUser->hapus_user($db_data);

			}
			$data = array();
			$data['data_user'] = $this->m_kelolaUser->datauser();
			$data['alert'] = 'hapus';
      $data['page_title'] = 'Kelola User';
      $data['main_content'] = $this->load->view('v_kelolaUser', $data, TRUE);
			$this->load->view('index', $data);
	}

	public function editUser()
	{
		if(isset($_POST['submit']))
			{
				$id=$_POST['id'];
				$counter=$_POST['counter'];
				$nama=$_POST['nama'];
				$username=$_POST['username'];
				$role=$_POST['role'];

				$db_data = array(
					'id' => $id,
					'nama' => $nama,
					'username' => $username,
					'role' => $role
				);
				$check = $this->m_kelolaUser->check_username($db_data);
				foreach ($check as $value){
				$blaa = $value['jmlh'];}
				if ($blaa == 1 ) {
					$data = array();
					$data['alert'] = "terpakai";
					$data['data_user'] = $this->m_kelolaUser->datauser();
					$data['index'] = $counter;
					$data['user'] = $db_data;
					$data['page_title'] = 'Tambah User';
					$data['main_content'] = $this->load->view('v_kelolaUser', $data, TRUE);
					$this->load->view('index', $data);
				} else {
					$this->m_kelolaUser->edit_user($db_data);
					$data = array();
					$data['data_user'] = $this->m_kelolaUser->datauser();
					$data['alert'] = 'edit';
		      $data['page_title'] = 'Kelola User';
		      $data['main_content'] = $this->load->view('v_kelolaUser', $data, TRUE);
					$this->load->view('index', $data);
				}
	}
}

	public function addUser()
	{
		if(isset($_POST['submit']))
			{
				$nama=$_POST['nama'];
				$username=$_POST['username'];
				$pass=md5($_POST['password']);
				$role=$_POST['role'];

				$db_data = array(
					'id' => 0,
					'nama' => $nama,
					'username' => $username,
					'password' => $pass,
					'tgl_dibuat' => date('Y-m-d h:i:s'),
					'role' => $role
				);

				$check = $this->m_kelolaUser->check_username($db_data);
				foreach ($check as $value){
				$blaa = $value['jmlh'];}
				if ($blaa == 1) {
					$data = array();
					$data['alert'] = "terpakai";
					$data['user'] = $db_data;
					$data['page_title'] = 'Tambah User';
					$data['main_content'] = $this->load->view('v_tambahUser', $data, TRUE);
					$this->load->view('index', $data);
				} else {
					$this->m_kelolaUser->add_user($db_data);
					$data = array();
					$data['data_user'] = $this->m_kelolaUser->datauser();
					$data['alert'] = 'tambah';
		      $data['page_title'] = 'Kelola User';
		      $data['main_content'] = $this->load->view('v_kelolaUser', $data, TRUE);
					$this->load->view('index', $data);
				}
			}
	}

}
