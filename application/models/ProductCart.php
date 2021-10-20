<?php

class ProductCart extends CI_Model{

	public function newcart(){

		$ct=array("Date"=>date("Y:m:d"));
	 	$this->db->insert("cart",$ct);

	 	$last_id = $this->db->insert_id();
	 	return $last_id;


	}




	public function updateCart($itemType,$item){
	 	$this->db->replace('cartitems', $item);
		
	}

	 public function deleteCartItem($ProductID,$CartID){
	 	
	 	
	 		$this->db->where("CartID",$CartID);
	 		$this->db->where("ProductID",$ProductID);
			$this->db->delete('cartitems');
	 		
	 	
	 }

	 public function getProducts($CartID){
	 	
	 	$this->db->select("*");
	 	$this->db->where("CartID",$CartID);
	 	$Result=$this->db->get("cartitems");


	 	return $Result->result();
	 }
	 




}

?>