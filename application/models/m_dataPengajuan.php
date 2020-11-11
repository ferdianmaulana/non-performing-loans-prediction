<?php
class m_dataPengajuan extends CI_Model {

  public function datapengajuan(){
    $role = $this->session->userdata('role');
    $id = $this->session->userdata('id');
    if ($role == 'pimpinan') {
      $sqli = "select nama, jenis_kelamin, tgl_lahir, status_nikah, pekerjaan, pendapatan, pinjaman,
               waktu_pengembalian, hasil_prediksi, keputusan, waktu_pengajuan from pengajuan_pinjaman order by waktu_pengajuan desc";
    } else {
      $sqli = "select nama, jenis_kelamin, tgl_lahir, status_nikah, pekerjaan, pendapatan, pinjaman,
               waktu_pengembalian, hasil_prediksi, keputusan, waktu_pengajuan from pengajuan_pinjaman
               where id_user = '$id' order by waktu_pengajuan desc";
    }
    $query = $this->db->query($sqli);
    return $query->result_array();
  }



}
