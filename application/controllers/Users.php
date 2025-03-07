<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		//calling model
		$this->load->model("Users_Model");
	}
	
	/**
	 * Index Page for this controller.
	  */
	public function index()
	{
		// Since this controller's methods are needed for jTable actions,
		// controller must be *public*-ly available. But openly requesting the
		// controller (aka. controller's default method) shouldn't be allowed
		// in this particular case, hence the redirect.
		redirect('recruitment');
	}
	
	public function select()
	{
		try
		{
			$rows = $this->Users_Model->getUsers();
			// Return result to jTable
			$result = array();
			$result['Result'] = 'OK';
			$result['Records'] = $rows;
			print json_encode($result);
		}
		catch (Exception $ex)
		{
			print error_message($ex);
		}
	}
	
	public function insert()
	{
		try
		{
			$username   = $this->input->post('username');
			$email      = $this->input->post('email');
			$password   = $this->input->post('password');
			$phone      = $this->input->post('phone');
			$firstname  = $this->input->post('firstname');
			$middlename = $this->input->post('middlename');
			$lastname   = $this->input->post('lastname');
			$city       = $this->input->post('city');
			$country    = $this->input->post('country');
			$user = array(
				'username'   => ( $username   === '' ) ? null : $username,
				'email'      => ( $email      === '' ) ? null : $email,
				'password'   => ( $password   === '' ) ? null : $password,
				'phone'      => ( $phone      === '' ) ? null : $phone,
				'firstname'  => ( $firstname  === '' ) ? null : $firstname,
				'middlename' => ( $middlename === '' ) ? null : $middlename,
				'lastname'   => ( $lastname   === '' ) ? null : $lastname,
				'city'       => ( $city       === '' ) ? null : $city,
				'country'    => ( $country    === '' ) ? null : $country,
			);
			$userid = $this->Users_Model->insertUser($user);
			
			// Use one of two below
			//$user['userid'] = $userid; // this would be faster than another MySQL DB Query
			$user = $this->Users_Model->getUserByUserid($userid); // or just use $userid
			// using LAST_INSERT_ID() could be problematic when many inserts happen simultaneously by different users
			// later edit: using LAST_INSERT_ID() didn't work
			
			// Return result to jTable
			$result = array();
			$result['Result'] = 'OK';
			$result['Record'] = $user;
			print json_encode($result);
		}
		catch (Exception $ex)
		{
			print error_message($ex);
		}
	}
	
	public function update()
	{
		echo 'update';
	}
	
	public function delete()
	{
		try
		{
			$userid = $this->input->post('userid');
			$this->Users_Model->deleteUserByUserid($userid);
			
			// Return result to jTable
			$result = array();
			$result['Result'] = 'OK';
			print json_encode($result);
		}
		catch (Exception $ex)
		{
			print error_message($ex);
		}
	}
	
	private function error_message($ex)
	{
		// Return error message
		$result = array();
		$result['Result'] = 'ERROR';
		$result['Message'] = $ex->getMessage();
		return json_encode($result);
	}
}
