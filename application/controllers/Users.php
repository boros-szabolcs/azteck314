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
		echo 'insert';
	}
	
	public function update()
	{
		echo 'update';
	}
	
	public function delete()
	{
		echo 'delete';
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
