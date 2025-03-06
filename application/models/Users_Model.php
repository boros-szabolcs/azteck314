<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_Model extends CI_Model {
	
	function __construct()
	{
		//call model constructor
		parent::__construct();
	}
	
	function getUsers()
	{
		$query = $this->db->get('users');
		return $query->result();
	}
	
	function create_user($user)
	{
		$this->db->insert('users',$user);
		return $this->db->insert_id();
	}
	
	function validate_user($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query = $this->db->get('users');
		
		if ($query->num_rows() == 1)
		{
			return $query->row();
		}
		else
		{
			return false;
		}
	}
	
	function validate_email()
	{
		$email = $this->input->post('email');
		$this->db->where('email',$email);
		$query = $this->db->get('users');
		
		if ($query->num_rows() == 1)
		{
			return $query->row();
		}
		else
		{
			return false;
		}
	}
}
