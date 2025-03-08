<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statuses_Model extends CI_Model {
	
	function __construct()
	{
		//call model constructor
		parent::__construct();
	}
	
	function getStatuses()
	{
		$query = $this->db->get('statuses');
		return $query->result();
	}
	
	function getStatusByStatusid($statusid)
	{
		$this->db->where('statusid',$statusid);
		$query = $this->db->get('statuses');
		
		if ($query->num_rows() == 1)
		{
			return $query->row();
		}
		else
		{
			return false;
		}
	}
	
	function insertStatus($status)
	{
		$this->db->insert('statuses',$status);
		return $this->db->insert_id();
	}
	
	function updateStatusByStatusid($statusid,$status)
	{
		$this->db->set($status);
		$this->db->where('statusid',$statusid);
		$this->db->update('statuses',$status);
	}
	
	function deleteStatusByStatusid($statusid)
	{
		$this->db->where('statusid',$statusid);
		$this->db->delete('statuses');
	}
}
