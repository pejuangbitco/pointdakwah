<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth_m extends MY_Model
{
	public function __construct() {
		parent::__construct();
		$this->data['table_name']	= 'auth';
		$this->data['primary_key']	= 'id_auth';

	}
}