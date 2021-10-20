<?php


class Login extends CI_Model{

   public function adminLG($username,$password){

    //$sql = "SELECT Username,Password FROM admin";
    
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('Username',$username);
    $this->db->where('Password',$password);

    $this->db->limit(1);

    //$query=$this->db->query($sql);

    $result=$this->db->get();
    return $result->row();




   }


   public function StaffLG($email,$password){

   
    
    $this->db->select('*');
    $this->db->from('employee');
    $this->db->where('email',$email);
    $this->db->where('password',$password);

    $this->db->limit(1);

    //$query=$this->db->query($sql);

    $result=$this->db->get();
    return $result->row();




   }

}



?>