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
		echo "Users.index()";
	}
	
	/**
	 * Browse all users
	 */
	public function browse()
	{
		$this->load->view('users_browse');
	}
	
	/**
	 * Get one user
	 */
	public function get()
	{
		echo "Users.get()";
	}
}
