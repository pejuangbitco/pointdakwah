<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_m');
		
	}

	public function index() {
		$this->load->view('login');
	}

	public function submit() {
				
		if($_POST) {			
			$result = $this->auth_m->row(['username' => $this->POST('username')]);
			
			if($result) {
				$sess = [
					'username' => $result->username
				];
				$this->session->set_userdata($sess);
				redirect('Home','refresh');
			} else {
				$this->flashmsg('Username atau Password Salah!','danger');
				redirect('Login','refresh');
			}
			// $this->dump($result);
		}
		
	}
}