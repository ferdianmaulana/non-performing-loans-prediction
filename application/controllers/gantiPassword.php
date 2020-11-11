<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gantiPassword extends CI_Controller {

	public function __construct(){
        parent::__construct();
				$this->load->model('m_gantiPassword');

    }


  public function index($input=''){
      $data = array();
      $data['page_title'] = 'Ganti Password';
			$data['alert'] = $input;
      $data['main_content'] = $this->load->view('v_gantiPassword', $data, TRUE);
			$this->load->view('index', $data);

  }

  public function passBaru(){
    if (isset($_POST['submit'])) {
				$lama = md5($_POST['pass_lama']);
				$baru = md5($_POST['pass_baru']);
				$konf = md5($_POST['konf_pass_baru']);
        $data_check = array(
          'id' => $this->session->userdata('id'),
          'password_lama' => $lama,
          'password_baru' => $baru
        );

        $check = $this->m_gantiPassword->check_pass_lama($data_check);
        foreach ($check as $value){
        $pass_db = $value['password'];}

        if ($lama !== $pass_db) {
					$data = 'salah';
					$this->index($data);
        } elseif ($baru == $pass_db) {
					$data = 'sama';
					$this->index($data);
				} elseif ($baru == $konf) {
          $this->m_gantiPassword->ganti_password($data_check);
					$data = 'berhasil';
					$this->index($data);
        } elseif ($baru !== $konf) {
					$data = 'tidak_cocok';
					$this->index($data);
        }


    }
  }

}
