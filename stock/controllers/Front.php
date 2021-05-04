<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		// Load Model เข้ามาใช้งาน
		$this->load->model('UsersModel','', true);
	}

	public function index()
	{
		$data['main_content'] = 'frontend/pages/index';
		$data['title'] = 'Home';
		$this->load->view('frontend/templates/default_template', $data);
	}

    public function login()
	{
        $data['main_content'] = 'frontend/pages/login';
		$data['title'] = 'เข้าสู่ระบบ';
		$this->load->view('frontend/templates/default_template', $data);
	}

	public function login_process()
	{
		// การรับค่าจากฟอร์ม
		$email =  $this->input->post('email');
		$password = $this->input->post('password');

		$result = $this->UsersModel->login($email, $password);

		if($result){

			// สร้างตัวแปร array ไว้เก็บ seesion ของ user ที่ล็อกอินเข้ามา
			$sess_array = array();

			foreach($result as $row){

				$sess_array = array(
					'id'		=> $row->id,
					'username'	=> $row->username,
					'email'		=> $row->email,
					'fullname'	=> $row->fullname,
					'mobile'	=> $row->mobile,
					'status'	=> $row->status
				);
			}

			$this->session->set_userdata('logged_in', $sess_array);
			echo "Login Success";
			// ส่งไปหน้า dashboard
			redirect('backend/dashboard', 'refresh');

			// echo "<pre>";
			// print_r($sess_array);
			// echo "</pre>";

		}else{
			// echo "Login Fail!";
			redirect('front/login', 'refresh');
		}
	}
}