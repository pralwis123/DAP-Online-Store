<?php

class OrderModel extends CI_Model{

	public function placeOrder($data){

		$this->db->insert("order",$data);
		return $this->db->insert_id();

	}

	public function updateOrder($item){
	 	$this->db->replace('orderitems',$item);
		
	}




}


?>