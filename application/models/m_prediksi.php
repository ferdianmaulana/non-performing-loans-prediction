<?php
class m_prediksi extends CI_Model {


  public function insert_pinjaman($data,$table){
    $this->db->insert($table,$data);
    return $this->db->insert_id();
  }

  public function insert_keputusan($data){
    $sql = "update pengajuan_pinjaman set keputusan = ? where id_pengajuan =
    (select max(id_pengajuan) from pengajuan_pinjaman) AND (keputusan is null OR keputusan = '')";
    $this->db->query($sql, $data);
  }

  public function update_hasil_null($data){
    $sql = "update pengajuan_pinjaman set hasil_prediksi = ? where id_pengajuan =
    (select max(id_pengajuan) from pengajuan_pinjaman) AND (hasil_prediksi is null OR hasil_prediksi = '')";
    $this->db->query($sql, $data);
  }

  public function tampil_hasil(){
    $sqli = "select nama, jenis_kelamin, tgl_lahir, status_nikah, pekerjaan,
             pendapatan, pinjaman, waktu_pengembalian from pengajuan_pinjaman
             where id_pengajuan = (select max(id_pengajuan) from pengajuan_pinjaman)";
    $query = $this->db->query($sqli);
    return $query->result_array();
  }


}
 ?>
