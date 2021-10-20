<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customerCI extends CI_Controller {

	public function cart()
	{
		$this->load->library("cart");
		$cart=new $this->cart();
		$productIdArray=$cart->getProducts();
		
		if ($productIdArray !==false) {

				$this->load->model("CustomerModel");
				$products=[];
				$productsQnt=[];

				foreach($productIdArray as $pid=>$qnt){
					$products[]=$this->CustomerModel->getProducts($pid);
					$productsQnt[$pid]=$qnt;
				}
				$data["products"]=$products;
				$data["productQnt"]=$productsQnt;
				$this->load->view('Header/header');
				$this->load->view("cartpage",$data);
		}
		else{
			echo "Cart is Empty";
		}
	}

	public function placeorder()
	{
		$this->load->library("order");
		$ord=new $this->order();
		$this->load->library("cart");
		$crt=new $this->cart();
		$cartitems= $crt->getProducts();
		if($cartitems!==false){
			foreach($cartitems as $id=>$qnty){
				$ord->addProduct($id,$qnty);
			}
		}

	}
	
	public function category()
	{
		

		$this->load->model("CategoryMd");
		$ctg=$this->CategoryMd->getAllCategory();
		$data['category']=$ctg;


		$this->load->model("Brandmd");
		$brd=$this->Brandmd->getAllBrand();
		$data["brand"]=$brd;

		$brand=$this->input->get("Brand");
		$category=$this->input->get("category");
		$this->load->model("Productmd");
		
 		$checkCtgs=[];
		if($category!==null){
			foreach($category as $ctg){
				
				$checkCtgs[]=$ctg;
				$products[]=$this->Productmd->getProductByCategoryAndBrand($ctg,$brand);
			}
		}else{
			$products["All"]=$this->Productmd->getProductAll($brand);
		}
		$data["SelectedBrand"]=$brand;
		$data["CheckedCtg"]=$checkCtgs;
		$data["Product"]=$products;

		$this->load->view('Header/header');
		$this->load->view("categoryPage",$data);


	}

	public function checkout(){
		$this->load->view('Header/header');
		$this->load->view("checkoutPage");

	}

	
	public function customerReg(){
		$fname=$this->input->get("fname");
		$lname=$this->input->get("lname");
		$address=$this->input->get("address");
		$NIC=$this->input->get("nic");
		$Cno=$this->input->get("contactno");
		$email=$this->input->get("email");
		$username=$this->input->get("username");
		$password=$this->input->get("password");
		$this->load->model("CustomerModel");
		$reginfo=$this->CustomerModel->cusRegistration($fname,$lname,$address,$NIC,$Cno,$email,$username,$password);
		if($reginfo!==null && $reginfo >0){
			print_r($reginfo);
			echo "Registration Successfull";
			return;
		}
		else{
			echo "";
		}
		$this->load->view('Header/header');
		$this->load->view("CustomerLog&Reg/CustomerReg");


	}

	public function customerLogin(){
		$username=$this->input->post("Username");
		$password=$this->input->post("Password");
		$this->load->model("CustomerModel");
		$cusdetails=$this->CustomerModel->cusLogin($username,$password);
		//var_dump($username);
		if($cusdetails!==null && $cusdetails!==false && count($cusdetails) >0){
			print_r($cusdetails);
			echo "Login Successfull";
			return;
		}
		else{
			echo "";
		}
		$this->load->view('Header/header');
		$this->load->view("CustomerLog&Reg/CusLog");
	}

	public function AboutUs(){
		$this->load->view('Header/header');
		$this->load->view("aboutUs");
	}

	public function ContactUs(){
		$this->load->view('Header/header');
		$this->load->view("contactUs");
	}




}

?>