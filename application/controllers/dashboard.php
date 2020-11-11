<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
        parent::__construct();
				$this->load->model('m_dashboard');
    }

    public function index(){
        $data = array();
        $data['page_title'] = 'Dashboard';
        $data['total'] = $this->m_dashboard->total_pengajuan();
				$data['persentase'] = $this->m_dashboard->persentase();
				$data['perbulan'] = $this->m_dashboard->perbulan();
				$data['diterima'] = $this->m_dashboard->perbulan();
				$data['ditolak'] = $this->m_dashboard->perbulan();
				$data['agen'] = $this->m_dashboard->agen();
				$data['agen_ditolak'] = $this->m_dashboard->agen();
				$data['agen_diterima'] = $this->m_dashboard->agen();
        $data['main_content'] = $this->load->view('v_dashboard', $data, TRUE);
        $this->load->view('index', $data);
    }



}
