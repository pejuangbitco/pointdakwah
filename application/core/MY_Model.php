<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model
{
	protected $data = [];

	public function __construct()
	{
		parent::__construct();
	}

	public function get()
	{
		return $this->db->get($this->data['table_name'])->result();
	}

	public function get_where($cond)
	{
		$this->db->where($cond);
		return $this->db->get($this->data['table_name'])->result();
	}

	public function row($cond)
	{
		$this->db->where($cond);
		return $this->db->get($this->data['table_name'])->row();
	}

	public function join($table,$cond,$where='')
	{
		$this->db->select('*');
		for ($i = 0; $i < count($table); $i++) {
			$this->db->join($table[$i], $cond[$i]);
		}
		if(isset($where) && strlen($where) > 3) {
			$this->db->where($where);
			return $this->db->get($this->data['table_name'])->row();
		}
		return $this->db->get($this->data['table_name'])->result();
	}

	public function insert($data)
	{
		return $this->db->insert($this->data['table_name'], $data);
	}

	public function update($pk, $data)
	{		
		return $this->db->update($this->data['table_name'], $data, $this->data['primary_key'].'='.$pk);
	}

	public function delete($pk)
	{
		return $this->db->delete($this->data['table_name'], array($this->data['primary_key'] => $pk));
	}
}