<?php
class m_login extends CI_Model {

    //-- check valid user
    function validate_user(){

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $this->input->post('user_name'));
        $this->db->where('password', md5($this->input->post('password')));
        $this->db->limit(1);
        $query = $this->db->get();

        if($query->num_rows() == 1){
           return $query->result();
        }
        else{
            return false;
        }
    }



}
