<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends MY_Controller
{
	public function __constructor() {
		parent::__constructor();

	}

	public function index() {
		$this->load->view('adminlte/templates/layout');
	}

}