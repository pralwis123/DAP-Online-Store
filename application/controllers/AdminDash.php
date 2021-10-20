<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDash extends CI_Controller {

	
	public function dashbord()
	{
		

		$this->load->view('AdminPanal/AddDash/Dashbord');

		
	}

	
}

?>