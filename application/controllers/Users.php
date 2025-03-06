<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		//calling model
		$this->load->model("Users_Model","users");
	}
	
	/**
	 * Index Page for this controller.
	  */
	public function index()
	{
		echo '---===---';
	}
	
	public function select()
	{
		echo 'select';
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
}
