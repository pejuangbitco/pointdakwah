<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends MY_Controller
{
  	
  	private $id;
  	private $data_id;
	public function __construct()
	{
		parent::__construct();
		// date_default_timezone_set("Asia/Jakarta");
		// $this->load->library('tanggal');
		$this->load->model('auth_m');
		$this->id = $this->session->userdata('username');
		$this->data_id = $this->auth_m->row(['id_auth' => $this->id]);
	}

	public function index() {
		$data = [
			'content' => 'dashboard'
		];
		$this->load->view('adminlte/templates/layout',$data);
	}

	
	
	public function article() {
		$data = [
			'data_id' => $this->data_id,
			'content' => 'article'
		];		
		$this->load->view('adminlte/templates/layout', $data);
	}

	public function profile() {
		$data = [
			'data_id' => $this->data_id,
			'content' => 'profile'
		];		
		$this->load->view('adminlte/templates/layout', $data);
	}

	public function point() {
		$data = [
			'data_id' => $this->data_id,
			'content' => 'point'
		];		
		$this->load->view('adminlte/templates/layout', $data);
	}

	public function reward() {
		$data = [
			'data_id' => $this->data_id,
			'content' => 'reward'
		];		
		$this->load->view('adminlte/templates/layout', $data);
	}

	public function referral() {
		$data = [
			'data_id' => $this->data_id,
			'content' => 'referral'
		];		
		$this->load->view('adminlte/templates/layout', $data);
	}

}