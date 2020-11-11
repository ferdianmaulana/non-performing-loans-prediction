<?php
class m_kelolaUser extends CI_Model {

  public function datauser(){
    $sqli = "select id, nama, username, role from user";
    $query = $this->db->query($sqli);
    return $query->result_array();
  }

  public function hapus_user($data){
    $sql = "delete from user where id = ?";
    $this->db->query($sql, $data);
  }

  public function edit_user($data){
    $sql = "update user set nama = '$data[nama]', username = '$data[username]', role = '$data[role]' where id = '$data[id]'";
    $this->db->query($sql, $data);
  }

  public function add_user($data){
    $sql = "insert into user (nama, username, password, tgl_dibuat, role)
            values ('$data[nama]','$data[username]','$data[password]','$data[tgl_dibuat]','$data[role]')";
    $this->db->query($sql, $data);
  }

  public function check_username($data){
    $sql = "select count(username) as jmlh from user where username = '$data[username]' AND id != '$data[id]'";
    $query = $this->db->query($sql, $data);
    return $query->result_array();
  }

}
