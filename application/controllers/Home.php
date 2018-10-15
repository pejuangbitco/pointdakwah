<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends MY_Controller
{
	public function __constructor() {
		parent::__constructor();

	}

	public function index() {
		$this->load->view('portal/templates/layout');
	}

	public function postingan() {
		$this->load->view('portal/templates/layout-single-post');
	}

}