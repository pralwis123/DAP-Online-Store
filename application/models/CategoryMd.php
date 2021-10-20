<?php


class CategoryMd extends CI_Model{
	public function getAllCategory(){
		$ctg=$this->db->get("Category");
		return $ctg->result();
	}

	public function getCategoryById($ctg){
		$this->db->where($ctg);
		$ctg=$this->db->get("Category");
		return $ctg->row();
	}
}
	

?>