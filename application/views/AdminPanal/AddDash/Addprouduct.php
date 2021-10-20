


<div id="divADP" class="CL-CTG">

	
	
	<h1 style="text-align:center"> ADD PRODUCTS</h1>

	<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
               	<form method="post" id="fmp"  action='<?= base_url("index.php/dataInsert/productReg");?>' class="formClass"  >
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>ADD PRODUCT</strong><small> Form</small></div>
                        
							<div class="card-body card-block">
							   <div class="form-group" >
								    <label >CATEGORY SELECT</label>
								    
								    <select class="form-select mb-3" multiple name="cat[]"  id="ctg-view">
								    	<?php
								    		foreach($ctgs as $row){


								    	?>
										  <option value="<?=$row->CatID?>"><?=$row->Name?> </option>
										 <?php
										}
										 ?>
									</select><br>

									<label >BRAND SELECT</label>
								    
								    <select class="form-select" name="BRND" id="brd-view" >
										  <option id="OP2"></option>
									</select><br>

									<div class="form-group">
									    <label>ITEM NAME</label>
									    <input type="text" class="form-control" id="in1" name="ITM-NAME"placeholder="Enter item name" >
									  </div><br>
									  <div class="form-group">
									    <label for="exampleFormControlTextarea1">Description</label>
                                        <textarea class="form-control" id="in2" name="ITM-des" rows="3" ></textarea>
									  </div><br>

									  <div class="form-group">
									    <label >Color</label>
									    <input type="text" class="form-control" id="in3" name="ITM-CLR"placeholder="Enter Color" >
									  </div><br>

									  <div class="form-group">
									    <label >Price</label>
									    <input type="text" class="form-control" id="in4" name="ITM-price"placeholder="Enter item price" >
									  </div><br>

									  <div class="form-group">
									    <label >Quntity</label>
									    <input type="text" class="form-control" id="in4" name="ITM-qty"placeholder="Enter item quntity" >
									  </div><br>

									  <div class="form-group">
									    <label >Availability</label>
									    <input type="text" class="form-control" id="in5" name="ITM-avl"placeholder="Enter aveilability" >
									  </div><br>

									  <div class="form-group">
									  	<div class="custom-file">
									  		 <label >Choose Image</label><br><br>
										    <input type="file" class="custom-file-input form-control" id="in6" name="ITM-img">
										  
										    									    
									   </div>
									  </div><br>

									  

									  <div class="form-group">
									    <label >Product Code</label>
									    <input type="text" class="form-control" id="in7" name="ITM-prd" placeholder="Enter Product Code">
									  </div>
									
								</div><br><br>
								<input type="submit" id="sub" class="" style="width:100%; color:white; border-radius: 50px; background-color:darkcyan;">
							   
							</div>
						
                     </div>
                  </div>
                  </form>
               </div>
            </div>
         </div>

      
</div>
<!---for testing purpose--->
<!----
<script type="text/javascript">
	
	
	$(document).ready(function(){
		$("#fmp").on("submit",function(e){
           e.preventDefault();

           var getaction=$(this).attr("action");
           var fileup=new FormData(this);

			var tdata=$(this).serialize();
			$.ajax({
				url:getaction,
				type:"POST",
				data:fileup,
				
				contentType:false,
				cache:false,
				processData:false,
				success:function(data){
					alert("ok");
					console.log(data);
					//console.log(data);

				}
			});		
		});
	});


</script>
--->