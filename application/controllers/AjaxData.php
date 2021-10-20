<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxData extends CI_Controller {

	
	public function dashbord()
	{
		
		$ID=$this->input->post("cliId");
		$this->load->model("adminfunction");


		echo "div".$ID;

		
	}

	public function getCtgPage(){
		$this->load->model("adminfunction");
		$ctgs=$this->adminfunction->getAllCategory();

		
		$html="";
		foreach($ctgs as $row ){
			$html.="<option value='".$row->CatID."'>".$row->Name."</option>";
		}
		echo $html;
	}

	public function getBrndPage(){
		$this->load->model("adminfunction");
		$ctgs=$this->adminfunction->getAllBrand();

		
		$html="";
		foreach($ctgs as $row ){
			$html.="<option value='".$row->Brandid."'>".$row->Name."</option>";
		}
		echo $html;
	}
}

?>
