<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Akurasi extends CI_Controller {

	public function __construct(){
        parent::__construct();
    }


  public function index(){
      $data = array();
      $data['page_title'] = 'Akurasi';
      $data['main_content'] = $this->load->view('v_akurasi', $data, TRUE);
      $this->load->view('index', $data);
  }


}
