<?php  

	class Order{

		public $ID;
		public $OrderDate;
		public $Status;
		public $Products;
		public $Quantity;
		public $price;
		private $_CI;

		public function __construct($ID=null){
			$this->_CI= &get_instance();
			$this->_CI->load->model("OrderModel","po");
			if($ID==null){
				$data=array("Date"=>date("Y-m-d"));
				$this->ID=$this->_CI->po->placeOrder($data);
			}else{
				//not completed
			}
			
		}

		public function getProducts()
		{
			if($this->Products ===null || count($this->Products) <1) {
				return false;
			}
			return $this->Products;
		}

		public function addProduct($ProductID,$amount){

			$quantity=0;
			if(isset($this->Products[$ProductID]))
				$quantity=$this->Products[$ProductID];

			$this->Products[$ProductID]=$amount+$quantity;
			$item=array("OrdID"=>$this->ID, "PrdID"=>$ProductID, "Quantity"=>$this->Products[$ProductID]);	
			$cart= $this->_CI->po->updateOrder($item);
			return $this->ID;


		}

		public function removeProduct(){


		}
		public function getTotal(){
		}


		public function checkout(){

		}



		

	}



?>