<?php
class Productmd extends CI_Model{

	public function getProductByCategoryAndBrand($ctid=null,$brd=null){
		$this->db->select("product.*");
		$this->db->from("product");
		if($ctid!=null){
			$this->db->join("categoriesofproduct","product.ProductID=categoriesofproduct.ProductID","inner");
			$this->db->where("categoriesofproduct.CatID",$ctid);
		}
		if($brd!=null && $brd!="" && $brd!=0){			
			$this->db->where("product.BrandID",$brd);
		}
		
		

		$res= $this->db->get();
		return $res->result();

	}
	

	public function getProductAll($brd=null){
		if($brd!==null && $brd!=="" && $brd!==0){
			
			$this->db->where("BrandID",$brd);
		}
		
		return $this->db->get("product")->result();
	}
}

?>