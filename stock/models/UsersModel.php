<?php

class UsersModel extends CI_Model
{

    // Login
    public function login($email, $password)
    {

        $this->db->select('id,username,email,password,fullname,mobile,status');
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }

    }

}