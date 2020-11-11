<?php
class m_gantiPassword extends CI_Model {

  public function check_pass_lama($data){
    $sql = "select password from user where id = '$data[id]'";
    $query = $this->db->query($sql, $data);
    return $query->result_array();
  }

  public function ganti_password($data){
    $sql = "update user set password = '$data[password_baru]' where id = '$data[id]'";
    $this->db->query($sql, $data);
  }



}
