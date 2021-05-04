<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

    public function dashboard()
    {
        if($this->session->userdata('logged_in'))
        {
            // echo "<pre>";
            // print_r($this->session->userdata('logged_in'));
            // echo "</pre>";

            // Read user table
            $data['users_data'] = $this->db->order_by("id", "desc")
            ->select('*')
            ->where('users.status', '0')
            ->from('users')
            ->get()
            ->result();

            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";

            // ส่งค่าไปแสดงผลที่ View
            $data['main_content'] = 'backend/pages/dashboard';
		    $data['title'] = "รายชื่อผู้ใช้งาน";
            $this->load->view('backend/templates/admin_template', $data);

        }else{
            redirect(base_url() . 'front/login', 'refresh');
        }
    }

    public function logout()
    {
        // คำสั่งในการ destroy session
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect(base_url() . 'front/login', 'refresh');
    }


}
