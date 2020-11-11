<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prediksi extends CI_Controller {

	public function __construct(){
        parent::__construct();
				$this->load->model('m_prediksi');
				$this->load->model('m_kelolaDropdown');
    }


  public function index($input=''){
      $data = array();
      $data['page_title'] = 'Prediksi';
			$data['pekerjaan'] = $this->m_kelolaDropdown->dataPekerjaan();
			$data['waktu_angsuran'] = $this->m_kelolaDropdown->dataWaktuangsuran();
			$data['alert'] = $input;
      $data['main_content'] = $this->load->view('v_prediksi', $data, TRUE);
      $this->load->view('index', $data);
  }



	public function hasilPrediksi(){
		$file = fopen("assets/r/hasilpred.csv","r");
		$content=fgetcsv($file);
		$hasil = implode($content);

		$this->m_prediksi->update_hasil_null($hasil);

		$data = array();
		$data['data_nasabah'] = $this->m_prediksi->tampil_hasil();
		$data['page_title'] = 'Prediksi';
		$data['hasil'] = $hasil;
		$data['main_content'] = $this->load->view('v_hasilPrediksi', $data, TRUE);
		$this->load->view('index', $data);

	}

	public function insert()
	{
		if(isset($_POST['submit']))
		  {
		    $nama=$_POST['nama'];
		    $pernikahan=$_POST['pernikahan'];
		    $jenis_kelamin=$_POST['jk'];
			  $bd = $_POST['usia'];
				$bod= new DateTime($bd);
				$usia=$bod->diff(new DateTime);
		    $pekerjaan=$_POST['pekerjaan'];
		    $pendapatan=$_POST['pendapatan'];
		    $pinjaman=$_POST['pinjaman'];
		    $pengembalian=$_POST['pengembalian'];
		    $file_open = fopen('assets/r/databaru.csv', "w");
		    $i=1;

				if ($usia->y >= 0 && $usia->y < 26) {
					$umur = 'Muda';
				}elseif ($usia->y >= 26 && $usia->y < 46) {
					$umur = 'Dewasa';
				}elseif ($usia->y >= 46 ) {
					$umur = 'Tua';
				}

				if ($pendapatan >= 0 && $pendapatan <= 2500000) {
					$gaji = 'Rendah';
				}elseif ($pendapatan > 2500000 && $pendapatan <= 4000000) {
					$gaji = 'Sedang';
				}elseif ($pendapatan > 4000000 ) {
					$gaji = 'Tinggi';
				}

				if ($pinjaman >= 0 && $pinjaman <= 1500000) {
					$jumlah_pinjaman = 'Sangat Rendah';
				}elseif ($pinjaman > 1500000 && $pinjaman <= 2500000) {
					$jumlah_pinjaman = 'Rendah';
				}elseif ($pinjaman > 2500000 && $pinjaman <= 4000000) {
					$jumlah_pinjaman = 'Sedang';
				}elseif ($pinjaman > 4000000 && $pinjaman <= 6000000) {
					$jumlah_pinjaman = 'Tinggi';
				}elseif ($pinjaman > 6000000) {
					$jumlah_pinjaman = 'Sangat Tinggi';
				}

				$db_data = array(
					'nama' => $nama,
					'jenis_kelamin' => $jenis_kelamin,
					'tgl_lahir' => $bd,
					'status_nikah' => $pernikahan,
					'pekerjaan' => $pekerjaan,
					'pendapatan' => $pendapatan,
					'pinjaman' => $pinjaman,
					'waktu_pengembalian' => $pengembalian,
					'id_user' => $this->session->userdata('id'),
					'waktu_pengajuan' => date('Y-m-d')
				);
				$this->m_prediksi->insert_pinjaman($db_data, 'pengajuan_pinjaman');

		    $csv_data = array(
					array("status_pernikahan","jenis_kelamin", "usia", "pendapatan", "pekerjaan", "jumlah_pinjaman",
					 "waktu_angsuran"),
					array(
					'status_pernikahan'    =>  $pernikahan,
		      'jenis_kelamin'    =>  $jenis_kelamin,
		      'usia'   =>  $umur,
		      'pendapatan' =>  $gaji,
		      'pekerjaan' =>  $pekerjaan,
		      'jumlah_pinjaman' =>  $jumlah_pinjaman,
		      'waktu_angsuran' =>  $pengembalian)
		);
				foreach ($csv_data as $value) {
					fputcsv($file_open, $value);
				}

		    $nama='';
		    $pernikahan='';
		    $jk='';
		    $usia='';
		    $pekerjaan='';
		    $pendapatan='';
		    $pinjaman='';
		    $pengembalian='';
		  }
			exec('assets\r\prediksi.R');
			$this->hasilPrediksi();
	}

	public function insertKeputusan()
	{
		if(isset($_POST['submit']))
		  {
		    $keputusan=$_POST['keputusan'];

				$db_data = array(
					'keputusan' => $keputusan,
				);
				$this->m_prediksi->insert_keputusan($db_data);

		  }
			$data = 'tersimpan';
			$this->index($data);
	}


}
