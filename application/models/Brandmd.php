<?php

class Brandmd extends CI_Model{

	public function getAllBrand(){
		$brd=$this->db->get("brand");
		return $brd->result();
	}

	


}


?>