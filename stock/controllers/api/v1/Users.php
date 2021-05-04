<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
	}

    /*
    * ------------------------------------------------
    * GET ALL Users
    * ------------------------------------------------
    * ดึงรายชื่อ users ทั้งหมด 
    */

    // http://localhost/ciproject/api/v1/users/users_get

    public function users_get()
    {
        $result = $this->db
        ->select('id,username,email,fullname,mobile,status')
        ->from('users')
        ->get()
        ->result();

        // print_r($result);
        echo json_encode($result);
    }

    /*
    * ------------------------------------------------
    * ADD NEW Users
    * ------------------------------------------------
    * เพิ่มสมาชิกใหม่
    */

    // http://localhost/ciproject/api/v1/users/users_post
    public function users_post()
    {
        // รับค่าจาก Client
        $inputJSON = file_get_contents('php://input');

        // แปลง JSON เป็น Array
        $input =  json_decode($inputJSON, true);

        // print_r($input);
        // exit();

        $user_data = array(
            'username' => $input['username'],
            'password' => $input['password'],
            'fullname' => $input['fullname'],
            'mobile' => $input['mobile'],
            'email' => $input['email'],
            'status' => $input['status']
        );

        $this->db->insert('users', $user_data);

        if($this->db->affected_rows() > 0){
            echo '{"Success":{"text":"Add new user success"}}';
        }else{
            echo '{"Error":{"text":"Add new user fail"}}';
        }
    }

    /*
    * ------------------------------------------------
    * EDIT Users
    * ------------------------------------------------
    * แก้ไขข้อมูลสมาชิก
    */

    // http://localhost/ciproject/api/v1/users/users_put/2
    public function users_put($id)
    {
        // รับค่าจาก Client
        $inputJSON = file_get_contents('php://input');

        // แปลง JSON เป็น Array
        $input =  json_decode($inputJSON, true);

        $where_user_data = array(
            'id' => $id
        );

        $user_data = array(
            'username' => $input['username'],
            'password' => $input['password'],
            'fullname' => $input['fullname'],
            'mobile' => $input['mobile'],
            'email' => $input['email'],
            'status' => $input['status']
        );

        $this->db->where($where_user_data);
        $this->db->update('users', $user_data);

        if($this->db->affected_rows() > 0){
            echo '{"Success":{"text":"Update user success"}}';
        }else{
            echo '{"Error":{"text":"Update user fail"}}';
        }
    }

    /*
    * ------------------------------------------------
    * Delete Users
    * ------------------------------------------------
    * ลบข้อมูล users
    */

    // http://localhost/ciproject/api/v1/users/users_delete/6
    public function users_delete($id)
    {
        $where_user_data = array(
            'id' => $id
        );

        $this->db->where($where_user_data);
        $this->db->delete('users');

        if ($this->db->affected_rows() > 0)
        {
            echo '{"Sucess":{"text":"Delete user success"}}';
        }
        else
        {
            echo '{"Error":{"text":"Delete user fail"}}';
        }
    }

}