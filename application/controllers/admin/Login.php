<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if(isset($_SESSION['user_id'])){
			redirect('admin/dashboard');
		}

		$data=[];
		if(isset($_SESSION['error'])){
			// die($_SESSION['error']);
			$data['error']=$_SESSION['error'];

		}else{
			$data['error']="No_Error";
		}
		$this->load->view('adminpanel/loginview',$data);
	}

	function login_post(){
		if (isset($_POST)) {
				$email = $_POST['email'];
				$password = $_POST['password'];

			//validate
			$query = $this->db->query("SELECT * FROM `backenduser` WHERE `username`='$email' AND `password` ='$password'");
			if ($query->num_rows()) {
				//credentials are valid

				$result = $query->result_array();
				// echo "<pre>"; // format the output
				// print_r($result); die();

				//set a session
				$this->session->set_userdata('user_id', $result[0]['uId']);
				redirect('admin/dashboard');
			}else{
				//invalid credentials
				$this->session->set_flashdata('error','Invalid Credentials');
				redirect('admin/login');

			}

		}else{
			die("Invalid Inputs");
		}
	
	}

	function logout(){
		session_destroy();
		redirect('admin/login');
	}
}