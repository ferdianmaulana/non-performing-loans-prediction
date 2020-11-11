<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dataPengajuan extends CI_Controller {

	public function __construct(){
        parent::__construct();
				$this->load->model('m_dataPengajuan');

    }


  public function index(){
      $data = array();
			$data['data_pengajuan'] = $this->m_dataPengajuan->datapengajuan();
      $data['page_title'] = 'Data Pengajuan';
      $data['main_content'] = $this->load->view('v_dataPengajuan', $data, TRUE);
      $this->load->view('index', $data);

  }


}
