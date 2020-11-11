<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class kelolaDropdown extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('m_kelolaDropdown');
    }


  public function index($input=''){
      $data = array();
      $data['page_title'] = 'Kelola Daftar Pekerjaan dan Waktu Angsuran';
			$data['alert'] = $input;
			$data['pekerjaan'] = $this->m_kelolaDropdown->dataPekerjaan();
			$data['angsuran'] = $this->m_kelolaDropdown->dataWaktuangsuran();
      $data['main_content'] = $this->load->view('v_kelolaDropdown', $data, TRUE);
      $this->load->view('index', $data);
  }

	public function tambahPekerjaan(){
		if (isset($_POST['submit'])) {
			$pekerjaan = ucwords($_POST['pekerjaan']);
			$cek = $this->m_kelolaDropdown->checkPekerjaan($pekerjaan);

			foreach ($cek as $value){
			$blaa = $value['jmlh'];}

			if ($blaa == 0) {
				$this->m_kelolaDropdown->tambahPekerjaan($pekerjaan);
				$alert = 'berhasil';
			} else {
				$alert = 'gagal';
			}
		}
		$this->index($alert);
  }

	public function tambahWaktuangsuran(){
		if (isset($_POST['submit'])) {
			$waktu_angsuran = $_POST['waktu_angsuran'].' bulan';
			$cek = $this->m_kelolaDropdown->checkWaktuangsuran($waktu_angsuran);

			foreach ($cek as $value){
			$blaa = $value['jmlh'];}

			if ($blaa == 0) {
				$this->m_kelolaDropdown->tambahWaktuangsuran($waktu_angsuran);
				$alert = 'sukses';
			} else {
				$alert = 'fail';
			}

		}
		$this->index($alert);

  }

}
