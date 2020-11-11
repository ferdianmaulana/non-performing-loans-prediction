<?php
class m_dashboard extends CI_Model {

  public function total_pengajuan(){
    $role = $this->session->userdata('role');
    $id = $this->session->userdata('id');
    if ($role == 'pimpinan') {
      $sqli = "select count(id_pengajuan) as jumlah from pengajuan_pinjaman";
    } else {
      $sqli = "select count(id_pengajuan) as jumlah from pengajuan_pinjaman where id_user = '$id'";
    }
    $query = $this->db->query($sqli);
    return $query->result_array();
  }

  public function persentase(){
    $role = $this->session->userdata('role');
    $id = $this->session->userdata('id');
    if ($role == 'pimpinan') {
      $sqli = "select count(if(keputusan='Diterima', keputusan, NULL)) as diterima, count(if(keputusan='Ditolak', keputusan, NULL)) as ditolak from pengajuan_pinjaman";
    } else {
      $sqli = "select count(if(keputusan='Diterima', keputusan, NULL)) as diterima, count(if(keputusan='Ditolak', keputusan, NULL)) as ditolak from pengajuan_pinjaman where id_user='$id'";
    }
    $query = $this->db->query($sqli);
    return $query->result_array();
  }

  public function perbulan(){
    $role = $this->session->userdata('role');
    $id = $this->session->userdata('id');
    if ($role == 'pimpinan') {
      $sqli = "select count(if(keputusan='Diterima', keputusan, NULL)) as diterima, count(if(keputusan='Ditolak', keputusan, NULL)) as ditolak,
               date_format(waktu_pengajuan, '%Y-%m') as bulan from pengajuan_pinjaman where waktu_pengajuan > date_sub(now(), INTERVAL 11 MONTH) group by bulan
               order by bulan asc";
    } else {
      $sqli = "select count(if(keputusan='Diterima', keputusan, NULL)) as diterima, count(if(keputusan='Ditolak', keputusan, NULL)) as ditolak,
               date_format(waktu_pengajuan, '%Y-%m') as bulan from pengajuan_pinjaman where waktu_pengajuan > date_sub(now(), INTERVAL 11 MONTH) AND id_user = '$id' group by bulan
               order by bulan asc";
    }
    $query = $this->db->query($sqli);
    return $query->result_array();
  }

  public function agen(){
    $sqli = "select count(if(p.keputusan='Diterima', p.keputusan, NULL)) as diterima, count(if(p.keputusan='Ditolak', p.keputusan, NULL)) as ditolak,
             concat(u.nama, ' (',u.username,')') as agen from pengajuan_pinjaman p RIGHT JOIN user u on p.id_user = u.id where role NOT IN ('admin') group by agen order by agen asc";
    $query = $this->db->query($sqli);
    return $query->result_array();
  }



}
