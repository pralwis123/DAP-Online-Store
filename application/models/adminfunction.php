<?php

class adminfunction extends CI_Model{

   public function addCategory($category=""){

    
    if($category!=""){
         $this->db->insert("category",$category);
         return true;
      }
      else{
         return fALSE;
      }


   }
   public function addBrand($brand=""){
      if($brand!=""){
         $this->db->insert("brand",$brand);
         return true;
      }
      else{
         return fALSE;
      }
   }

   public function addProduct($product,$ctg){  

      if($product!=""){

         $this->db->insert("product",$product);
         $pid=$this->db->insert_id();
         foreach($ctg as $cid){
            $p_catg=array("CatID"=>$cid,"ProductID"=>$pid);    
            $this->db->insert("categoriesofproduct",$p_catg);
         }
         return true;
      }else{
         return fALSE;
      }

      
   }

   public function getAllCategory(){

      $ctg= $this->db->get("category");

      return $ctg->result();


   }

   public function getAllBrand(){

       $ctg= $this->db->get("brand");
      return $ctg->result();
   }



}
?>