<?php
class m_datasetBaru extends CI_Model {

  public function tambahDataset($data){
    $sql = "insert into dataset (status_pernikahan, jenis_kelamin, usia, pendapatan, pekerjaan, jumlah_pinjaman, waktu_angsuran, status_kredit)
            values ('$data[status_pernikahan]','$data[jenis_kelamin]','$data[usia]','$data[pendapatan]','$data[pekerjaan]','$data[jumlah_pinjaman]',
            '$data[waktu_angsuran]','$data[status_kredit]')";
    $this->db->query($sql, $data);
  }

  public function datasetCsv(){
    $sqli = "select 'status_pernikahan', 'jenis_kelamin', 'usia', 'pendapatan', 'pekerjaan', 'jumlah_pinjaman', 'waktu_angsuran', 'status_kredit'
             UNION ALL
             select status_pernikahan, jenis_kelamin, usia, pendapatan, pekerjaan, jumlah_pinjaman, waktu_angsuran, status_kredit
             from dataset";
    $query = $this->db->query($sqli);
    return $query->result_array();
  }



}
