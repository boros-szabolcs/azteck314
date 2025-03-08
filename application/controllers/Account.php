<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
	
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
	
	public function login()
	{
		$this->load->helper('security');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('email'   ,'E-mail'  ,'required|trim|xss_clean|callback_login_email_valid');
		$this->form_validation->set_rules('password','Password','required|trim');
		
		if ($this->form_validation->run())
		{
			$this->login_action();
		}
		else
		{
			$this->recruitment();
		}
	}
	
	public function signup()
	{
		$this->load->helper('security');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username','User name'       ,'required|trim|xss_clean');
		$this->form_validation->set_rules('email'   ,'E-mail'          ,'required|trim|xss_clean|callback_signup_email_valid');
		$this->form_validation->set_rules('password','Password'        ,'required|trim');
		$this->form_validation->set_rules('repasswd','Re-type password','required|trim|matches[password]');
		
		if ($this->form_validation->run())
		{
			$this->signup_action();
		}
		else
		{
			$_POST['navigate'] = 'signup';
			$this->recruitment(); // this is a GET call, what happens with $_POST data, set just above?
		}
	}
	
	private function login_action()
	{
		if ($this->input->post())
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			
			$user = $this->Users_Model->validate_user($email,$password);
			
			if ($user)
			{
				$this->session->set_userdata('user',$user);
				$this->recruitment();
			}
			else
			{
				$this->session->set_flashdata('error','Invalid credentials');
				$this->recruitment();
			}
		}
		$this->recruitment();
	}
	
	private function signup_action()
	{
		if ($this->input->post())
		{
			$username   = $this->input->post('username');
			$email      = $this->input->post('email');
			$password   = $this->input->post('password');
			$repasswd   = $this->input->post('repasswd');
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
			
			if ($userid)
			{
				$user['userid'] = $userid;
				$this->session->set_userdata('user',$user);
				$this->recruitment();
			}
			else
			{
				$this->session->set_flashdata('error','Something went wrong');
				$this->recruitment();
			}
		}
		$this->recruitment();
	}
	
	public function logout()
	{
		$this->session->unset_userdata('user');
		$this->session->sess_destroy();
		$this->recruitment();
	}
	
	private function recruitment()
	{
		redirect('recruitment');
	}
	
	public function login_email_valid()
	{
		if ($this->Users_Model->validate_email())
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('login_email_valid',"E-mail doesn't exist.");
			return false;
		}
	}
	
	public function signup_email_valid()
	{
		if (!$this->Users_Model->validate_email())
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('signup_email_valid',"E-mail already exists.");
			return false;
		}
	}
}
