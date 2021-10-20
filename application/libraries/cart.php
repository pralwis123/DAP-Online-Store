<?php 

	class CI_Cart{

		public $CartID;
		private $Products;

		function __construct(){

			$this->_CI = & get_instance();
	        $this->_CI->load->model('ProductCart','dm');
	        $this->_CI->load->helper('cookie','ck'); 

	        $cookie_name="DAPStore";
			
			if(get_cookie($cookie_name)==''){
				$cart_id=$this->_CI->dm->newcart();
				$cookie_value = $cart_id;
				$cookieAr= array(
			           'name'   =>$cookie_name,
			           'value'  => $cart_id,                            
			           'expire' => '3300',                                                                    
			           'secure' => TRUE
			    );

				$this->_CI->input->set_cookie($cookieAr);
				$this->CartID=$cart_id;

			}
			else{
				
				$cart_id=$this->_CI->input->cookie($cookie_name,true);
				
				
				$this->CartID=$cart_id;

			}
		       
	       	$Cart=$this->_CI->dm->getProducts($this->CartID);
	       	if($Cart!== NULL){

	       		foreach($Cart as $ct){

	       			$this->Products[$ct->ProductID]=$ct->Quantity;
	       		}
	       	}

        }

		public function addToCart($ProductID,$amount=1){

			$quantity=0;
			if(isset($this->Products[$ProductID]))
				$quantity=$this->Products[$ProductID];

			$this->Products[$ProductID]=$amount+$quantity;
			$item=array("CartID"=>$this->CartID, "ProductID"=>$ProductID, "Quantity"=>$this->Products[$ProductID]);	
			$cart= $this->_CI->dm->updateCart("Product",$item);
			return $this->CartID;


		}
		public function removeFromCart(){



		}
		public function getTotal(){


			
		}

		public function getProducts()
		{
			if($this->Products ===null || count($this->Products) <1) {
				return false;
			}
			return $this->Products;
		}

		public function getID(){

			return $this->CartID;


		}


	}



 ?>