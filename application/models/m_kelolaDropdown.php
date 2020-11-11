<?php
class m_kelolaDropdown extends CI_Model {

  public function dataPekerjaan(){
    $sqli = "select id, pekerjaan from pekerjaan order by id asc";
    $query = $this->db->query($sqli);
    return $query->result_array();
  }

  public function dataWaktuangsuran(){
    $sqli = "select id, waktu_angsuran from waktu_angsuran order by id asc";
    $query = $this->db->query($sqli);
    return $query->result_array();
  }

  public function tambahPekerjaan($data){
    $sqli = "insert into pekerjaan (pekerjaan) values ('$data')";
    $query = $this->db->query($sqli);
  }

  public function tambahWaktuangsuran($data){
    $sqli = "insert into waktu_angsuran (waktu_angsuran) values ('$data')";
    $query = $this->db->query($sqli);
  }

  public function checkPekerjaan($data){
    $sqli = "select count(pekerjaan) as jmlh from pekerjaan where pekerjaan = '$data'";
    $query = $this->db->query($sqli);
    return $query->result_array();
  }

  public function checkWaktuangsuran($data){
    $sqli = "select count(waktu_angsuran) as jmlh from waktu_angsuran where waktu_angsuran = '$data'";
    $query = $this->db->query($sqli);
    return $query->result_array();
  }


}
