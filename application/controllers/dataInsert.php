<?php


class dataInsert extends CI_Controller{

	public function brandReg(){
		if($this->input->is_ajax_request()){
			$brand["Name"]=$this->input->post("brand");

			$brand["Description"]="test25";

			$this->load->model("adminfunction");

			$respond=$this->adminfunction->addBrand($brand);
			if($respond){
				echo "Data inserted";
			}else{
				echo "Data not inserted";
			}

		}
		
	}


	public function categoryReg(){
		if($this->input->is_ajax_request()){
			$category["Name"]=$this->input->post("categories");
			$this->load->model("adminfunction");
			$respond=$this->adminfunction->addCategory($category);
			if($respond){
				echo "Data inserted";

			}else
			{
				echo "data is not inserted";

			}
		}
		else{
			$this->load->view("Home");
		}
	}

	public function productReg(){

		if($this->input->is_ajax_request()){
			
			$product["Availability"]=$this->input->post("ITM-avl");
			$product["BrandID"]=$this->input->post("BRND");
			$product["Color"]=$this->input->post("ITM-CLR");
			$product["Description"]=$this->input->post("ITM-des");
			//$product["Image"]=$this->input->post("ITM-img");
			$product["Image"]=" test";
			$product["Name"]=$this->input->post("ITM-NAME");
			$product["Pcode"]=$this->input->post("ITM-prd");
			$product["Price"]=$this->input->post("ITM-price");
			$product["Quantity"]=$this->input->post("ITM-qty");


			$config["allowed_types"]="jpg|png|jpeg|gif";
			$config["upload_path"]= FCPATH."imgUplods/";
			$this->load->library("upload",$config);
			if($this->upload->do_upload("ITM-img")){

				$file=$this->upload->data();
				//$test=array("p"=>$product,"file"=>$file["raw_name"]);
				$product["Image"]=base_url()."imgUplods/".$file["raw_name"].$file["file_ext"];
				$ctg=$this->input->post("cat");
				$test =array("p"=>$product,"c"=>$ctg);
				//echo json_encode($test);
				
		        $this->load->model("adminfunction");
		        $respond=$this->adminfunction->addProduct($product,$ctg);
		        if($respond){
					echo "Data inserted";

				}else
				{
					echo "data is not inserted 1";

				}

				//echo json_encode($test);

			}
			else{
				
				echo "data is not inserted 1";
			}
			/*
			$ctg=$this->input->post("cat");
			$test =array("p"=>$product,"c"=>$ctg);
			//echo json_encode($test);
			
	        $this->load->model("adminfunction");
	        $respond=$this->adminfunction->addProduct($product,$ctg);
	        if($respond){
				echo "Data inserted";

			}else
			{
				echo "data is not inserted";

			}
			

		*/

		}
	}

	public function Empreg(){



		
	}



}





?>