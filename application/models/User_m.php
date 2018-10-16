<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_m extends MY_Model
{
	public function __constructor() {
		parent::__constructor();
		$this->data['table_name']	= 'user';
		$this->data['primary_key']	= 'email';
	}


}