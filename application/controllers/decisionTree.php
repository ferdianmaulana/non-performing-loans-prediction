<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class decisionTree extends CI_Controller {

	public function __construct(){
        parent::__construct();
    }


  public function index(){
      $data = array();
      $data['page_title'] = 'Decision Tree';
      $data['main_content'] = $this->load->view('v_decisionTree', $data, TRUE);
      $this->load->view('index', $data);

  }


}
