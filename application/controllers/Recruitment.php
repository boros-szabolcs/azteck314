<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruitment extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		include APPPATH . 'third_party/recruitment/views.php';
	}
	
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->decide();
	}
	
	private function decide()
	{
		if ($this->session->userdata('user')) { // TODO [boross] check for correct version
			$this->dashboard();
		} else {
			if (!true) { // TODO [boross] check for correct version
				$this->login();
			} else {
				$this->signup();
			}
		}
	}
	
	private function dashboard()
	{
		$this->display_webpage('dashboard');
	}
	
	private function login()
	{
		$this->display_webpage('login');
	}
	
	private function signup()
	{
		$this->display_webpage('signup');
	}
	
	private function notfound()
	{
		$this->display_webpage();
	}
	
	private function display_webpage($page = 'notfound')
	{
		$this->load->view('recruitment_start', array('title'=>$page));
		$this->display_page('recruitment_' . $page);
		$this->load->view('recruitment_end');
	}
	
	private function display_page($page)
	{
		$this->load->view('recruitment_header');
		$this->load->view('recruitment_navi');
		$this->load->view($page);
		$this->load->view('recruitment_footer');
	}
}
