<?php

  class CustomerModel extends CI_Model{

    public function getProducts($pid=null){
      if($pid!==null){

        $this->db->where("ProductID",$pid);
        $products=$this->db->get("product");
         return $products->row();
      }else{
        $products=$this->db->get("product");
        return $products->result();
      }

    }

    public function cusLogin($username=null,$password=null){

      if ($username==null || $password==null) {

        return false; 

      }else{
        $login="SELECT * FROM `customer` WHERE `Username` ='".$username."' AND `Password` = '".$password."'";
        $cusLog=$this->db->query($login);
        return $cusLog->result();
      }
    }

    public function cusRegistration($fname=null,$lname=null,$address=null,$NIC=null,$Cno=null,$email=null,$username=null,$psw=null){

      if($fname==null || $lname==null || $address==null || $NIC==null || $Cno==null || $email==null || $username==null || $psw==null) {

        return false;
      }
      else{
           $cusInfo=array("Fname"=>$fname,"Lname"=>$lname,"Address"=>$address,"NIC"=>$NIC,"Cnumber"=>$Cno,"Email"=>$email,"Username"=>$username,"Password"=>$psw);
          $this->db->insert("customer",$cusInfo);
          return $this->db->insert_id();
      }
      
    }

    public function itemSearch(){

    }

  }


?>
