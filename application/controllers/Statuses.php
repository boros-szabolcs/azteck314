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
	
	public function select()
	{
		try
		{
			$rows = $this->Statuses_Model->getStatuses();
			
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
			$statustext = $this->input->post('statustext');
			$status = array(
				'statustext' => ( $statustext === '' ) ? null : $statustext,
			);
			$statusid = $this->Statuses_Model->insertStatus($status);
			
			// Use one of two below
			//$status['statusid'] = $statusid; // this would be faster than another MySQL DB Query
			$status = $this->Statuses_Model->getStatusByStatusid($statusid); // or just use $statusid
			// using LAST_INSERT_ID() could be problematic when many inserts happen simultaneously by different users
			// later edit: using LAST_INSERT_ID() didn't work
			
			// Return result to jTable
			$result = array();
			$result['Result'] = 'OK';
			$result['Record'] = $status;
			print json_encode($result);
		}
		catch (Exception $ex)
		{
			print error_message($ex);
		}
	}
	
	public function update()
	{
		try
		{
			$statusid   = $this->input->post('statusid');
			$statustext = $this->input->post('statustext');
			$status = array(
				'statustext' => ( $statustext === '' ) ? null : $statustext,
			);
			$this->Statuses_Model->updateStatusByStatusid($statusid,$status);
			
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
	
	public function delete()
	{
		try
		{
			$statusid = $this->input->post('statusid');
			$this->Statuses_Model->deleteStatusByStatusid($statusid);
			
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
