<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statuses extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		//calling model
		$this->load->model("Statuses_Model");
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
	
}
