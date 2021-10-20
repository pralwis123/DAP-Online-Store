
	<script type="text/javascript" >
		
		$(document).ready(function(){

			$("#sidebarCollapse").hide();
			$("#sidebarCollapse").click(function(){$("#sidebar").toggle();
				$("#sidebarCollapse").toggle();


			});

			$("#btn-icon").click(function(){

				$("#sidebar").toggle();
					$("#sidebarCollapse").toggle();
			});
				
		});

	</script>

    <!--form submition ajax-->
    <script type="text/javascript">

        $(document).ready(function(){
            
                $(".formClass").on("submit",function(e){
                    e.preventDefault();
                   // alert("test");
                    //console.log($(this).serialize());
                    var dataobj=$(this).serialize();
                    var thisid=$(this).attr("id");
                    var call_method=$(this).attr("action");
                    var fileup=new FormData(this);
                    $.ajax({
                        url:call_method,
                        type:"POST",
                        data:fileup,
                
                        contentType:false,
                        cache:false,
                        processData:false,
                        success:function(data){
                            if(data=="Data inserted"){
                                $("#cartItems").html("<h3>"+data+" Successfully!</h3>");
                                $("#cartModal").modal("toggle");
                                $("#"+thisid).trigger("reset");
                            }
                            

                        },
                        error:function(ajhr,textStus,errorThown){
                            alert("data hasn't inserted !");
                        }
                    });

                });
                

        });
        

        
    </script>
  <!-- Modal -->
<div class="modal fade" id="cartModal" role="dialog" >
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data insert state</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
       <div class="modal-body">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12" id="cartItems">
          <h3 style="text-align: center;">Error Occured !</h3>
      </div>
    </div>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        <!--<button type="button" id="ajtest" class="btn btn-outline-warning">Edit cart</button-->
      </div>
    </div>
  </div>
</div>


<div class="wrapper">
    
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>DAP STORE<button class="btn-close" id="btn-icon" style=" margin-left:12px; margin-right: 0px; font-size: 20px;"></button></h3>

            </div>

            <ul class="list-unstyled components">
                <p>Admin Panel</p>
                <li class="active">
                    <a id="DASH" class="list-dash"  >Dashbord</a>
                    
                </li>
                
                <li>
                    <a id="ADC" class="list-dash"  >Add Category</a>
                    
                </li>
                <li>
                    <a id="ADB" class="list-dash">Add Brands</a>
                </li>
                <li>
                    <a id="ADP" class="list-dash">Add Products</a>
                </li>
                 <li>
                    <a id="EMD" class="list-dash">Employes Details</a>
                </li>
                <li>
                    <a id="IVD" class="list-dash">Inventory Details </a>
                </li>
                <li>
                    <a id="ABU" class="list-dash">About-Us</a>
                </li>
            </ul>
            


           
        </nav>

        <script type="text/javascript">

          // load content  of page  
        	
              $(document).ready(function(){
                 $(".list-dash").click(function(){

                     $.ajax({

                        type:"POST",

                          url:"<?=base_url('index.php/AjaxData/getCtgPage')?>",
                          data:"",
                        success: function(data){

                           //alert(data);
                           $("#ctg-view").html(data);
                       }



                            

                    });

                     $.ajax({

                        type:"POST",

                          url:"<?=base_url('index.php/AjaxData/getBrndPage')?>",
                          data:"",
                        success: function(data){

                           //alert(data);
                           $("#brd-view").html(data);
                       }

                   

                            

                    });
                        
                });



              	$(".CL-CTG").hide();
              	$("#divDASH").show();

              	$(".list-dash").click(function(){

              		var Cdata={cliId:$(this).attr("id")}
              		$(".list-dash").parent().removeClass("active");
              		$(this).parent().toggleClass("active");
              		

              		$.ajax({

              			type:"POST",

        		      url:"<?=base_url('index.php/AjaxData/dashbord')?>",
        		      data:Cdata,
        		      	success: function(data){

        		      		$(".CL-CTG").hide();
        		      		$("#"+data).show();

        		      		

	        		}
	        	});

                   



              	});

              });

        	
        </script>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="material-icons">dashboard</i>
                    </button>
                    

                     
                </div>
            </nav>
            <div id="content-div">
    
  



           
        