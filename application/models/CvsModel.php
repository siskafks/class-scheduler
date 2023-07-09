<?php

class CvsModel extends CI_Model{

    public function getData($table)
    {
        return $this->db->get($table);
    }

    public function insertData($data,$table)
    {
        $this->db->insert($table,$data);
    }
    
    public function updateData($table,$data,$where)
    {
        $this->db->update($table,$data,$where);
    }

    public function deleteData($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function cek_loginT()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result =  $this->db->where('username',$username)
                            ->where('password',md5($password))
                            ->limit(1)
                            ->get('guru');;

        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return FALSE;
        }
    }

    public function cek_loginS()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result =  $this->db->where('username',$username)
                            ->where('password',md5($password))
                            ->limit(1)
                            ->get('user');;

        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return FALSE;
        }
    }
}
?>