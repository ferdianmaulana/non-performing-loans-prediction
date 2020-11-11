<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class datasetBaru extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('m_datasetBaru');
    }


  public function index($input=''){
      $data = array();
      $data['page_title'] = 'Dataset Baru';
			$data['alert'] = $input;
      $data['main_content'] = $this->load->view('v_datasetBaru', $data, TRUE);
      $this->load->view('index', $data);
  }

	public function uploadCsv(){
		if(isset($_POST["submit"])) {

				$type = explode(".", $_FILES["namafile"]["name"]);
				$handle = fopen($_FILES["namafile"]["tmp_name"], "r");
				$tulis = fopen('assets/r/dataset.csv','w');
				$read = fgetcsv($handle);
				$jmlh = count($read);

				if(end($type) == "csv" && $jmlh == 8) {
					$baris = 0;
					while (($read = fgetcsv($handle, ",")) !== FALSE) {
						if ($read[2] >= 0 && $read[2] < 26) {
							$usia = 'Muda';
						}elseif ($read[2] >= 26 && $read[2] < 46) {
							$usia = 'Dewasa';
						}elseif ($read[2] >= 46 ) {
							$usia = 'Tua';
						}

						if ($read[3] >= 0 && $read[3] <= 2500000) {
							$pendapatan = 'Rendah';
						}elseif ($read[3] > 2500000 && $read[3] <= 4000000) {
							$pendapatan = 'Sedang';
						}elseif ($read[3] > 4000000 ) {
							$pendapatan = 'Tinggi';
						}

						if ($read[5] >= 0 && $read[5] <= 1500000) {
							$jumlah_pinjaman = 'Sangat Rendah';
						}elseif ($read[5] > 1500000 && $read[5] <= 2500000) {
							$jumlah_pinjaman = 'Rendah';
						}elseif ($read[5] > 2500000 && $read[5] <= 4000000) {
							$jumlah_pinjaman = 'Sedang';
						}elseif ($read[5] > 4000000 && $read[5] <= 6000000) {
							$jumlah_pinjaman = 'Tinggi';
						}elseif ($read[5] > 6000000) {
							$jumlah_pinjaman = 'Sangat Tinggi';
						}

						$data = array(
							'status_pernikahan' => $read[0],
							'jenis_kelamin' => $read[1],
							'usia' => $usia,
							'pendapatan' => $pendapatan,
							'pekerjaan' => $read[4],
							'jumlah_pinjaman' => $jumlah_pinjaman,
							'waktu_angsuran' => $read[6],
							'status_kredit' => $read[7]
						);

							$this->m_datasetBaru->tambahDataset($data);

						$baris++;
					}

					$tocsv = $this->m_datasetBaru->datasetCsv();
					foreach ($tocsv as $value) {
						fputcsv($tulis, $value);
					}

					exec('assets\r\split_akurasi.R');
					$data = 'berhasil';
					$this->index($data);

				}elseif (end($type) == "csv" && $jmlh !== 8){
					$data = 'kurang';
					$this->index($data);

				}else{
					$data = 'salah';
					$this->index($data);
				}
				fclose($handle);
				fclose($tulis);

		}
	}


}
