<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminL extends CI_Controller {


	public function staffdash(){


		$this->load->view('AdminPanal/Stafflogindash');

	}
	public function staffreg(){

		$this->load->view('AdminPanal/StaffregForm');
	}

	public function StaffLoginPage(){

		$this->load->view('AdminPanal/Staffloginform');
	}

	
	public function logpage()
	{

		$this->load->view('AdminPanal/login');

		
	}
	public function singleproduct($pid=48,$cartAdd=null){

		$this->load->model("CustomerModel");
		$data["p_info"]=$this->CustomerModel->getProducts($pid);
		$data["reccBook"]=$this->CustomerModel->getProducts();
		if($cartAdd=="Addtocart"){
			$this->load->library("cart");
			$ct=new $this->cart();
			$qnt=$this->input->post("quantity");
			$ctid=$ct->addToCart($pid,$qnt);
			if($ctid!==null && $ctid>0)
				$data["crt_ad"]=true;
		}
		
		$this->load->view('single-product',$data);

	}

	public function logadmin()
	{
        
        $USR = isset($_POST['USR']) ? $_POST['USR'] : NULL;
        $PSW = isset($_POST['PSW']) ? $_POST['PSW'] : NULL;
		$result= $this->Login->adminLG($USR,$PSW);


		
		//echo $result->Username;

		if(!isset($result->Username ) || !isset($result->Password ) ){

			$data["error_message"]="Password & Username are not matched!";

			$this->load->view('AdminPanal/login',$data);


		}
		else{

			$this->load->model("adminfunction");
			$ctgs=$this->adminfunction->getAllCategory();
			$brand=$this->adminfunction->getAllBrand();

			$data["ctgs"]=$ctgs;
			$data["brnd"]=$brand;

			$this->load->view('AdminPanal/AddDash/templet/dashOpen');
            $this->load->view('AdminPanal/AddDash/SideNavigation');
            $this->load->view('AdminPanal/AddDash/Dashbord');
			$this->load->view('AdminPanal/AddDash/Addbrands');
			$this->load->view('AdminPanal/AddDash/Addcategory');
			$this->load->view('AdminPanal/AddDash/Addprouduct',$data);
			$this->load->view('AdminPanal/AddDash/EMPdetails');
			$this->load->view('AdminPanal/AddDash/Inventrydetails');
			$this->load->view('AdminPanal/AddDash/Aboutus');
			$this->load->view('AdminPanal/AddDash/templet/dashClose');
		}


		
	}

	public function logstaff()
	{
        
        $USR = isset($_POST['USR']) ? $_POST['USR'] : NULL;
        $PSW = isset($_POST['PSW']) ? $_POST['PSW'] : NULL;
		$result= $this->Login->StaffLG($USR,$PSW);


		
		//echo $result->Username;

		if(!isset($result->email ) || !isset($result->password ) ){

			$data["error_message"]="Password & Username are not matched!";

			$this->load->view('AdminPanal/Staffloginform',$data);


		}
		else{

			$this->load->model("adminfunction");
			$ctgs=$this->adminfunction->getAllCategory();
			$brand=$this->adminfunction->getAllBrand();

			$data["ctgs"]=$ctgs;
			$data["brnd"]=$brand;

			$this->load->view('AdminPanal/AddDash/templet/dashOpen');
            $this->load->view('AdminPanal/AddDash/SideNavigation');
            $this->load->view('AdminPanal/AddDash/Dashbord');
			$this->load->view('AdminPanal/AddDash/Addbrands');
			$this->load->view('AdminPanal/AddDash/Addcategory');
			$this->load->view('AdminPanal/AddDash/Addprouduct',$data);
			$this->load->view('AdminPanal/AddDash/EMPdetails');
			$this->load->view('AdminPanal/AddDash/Inventrydetails');
			$this->load->view('AdminPanal/AddDash/Aboutus');
			$this->load->view('AdminPanal/AddDash/templet/dashClose');
			
		}


		
	}


	
}

?>