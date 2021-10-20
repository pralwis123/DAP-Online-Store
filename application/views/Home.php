<!DOCTYPE html>
<html>
<head>

 <!-- Pre Header -->
    <div id="pre-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <span>Free Shipping | Island-wide cash on delivery available ! | Hotline:- +94771234567</span>
          </div>
        </div>
      </div>
    </div>

        <!-- Navigation -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a style ="text-align:left; font-size: 36px;  "class="nav-link" href="#"><img src="assets/images/" alt=""> <span>DAP CLOTHING</span></a>

        <form class="d-flex" style="margin-left: auto; margin-right:25px">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>


        <a href="<?php echo base_url("index.php/customerCI/cart")?>">
        <svg style = "margin-right: 18px; "xmlns="http://www.w3.org/2000/svg" width="25" height="25"  fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
        </svg>

        </a>

      <!-- Avatar -->
      <a
        class="dropdown-toggle d-flex align-items-center hidden-arrow"
        href="#"
        id="navbarDropdownMenuLink"
        role="button"
        data-mdb-toggle="dropdown"
        aria-expanded="false"
      >
        <img
          src="https://mdbootstrap.com/img/new/avatars/2.jpg"
          class="rounded-circle"
          height="25"
          alt=""
          loading="lazy"
        />
      </a>
      <ul
        class="dropdown-menu dropdown-menu-end"
        aria-labelledby="navbarDropdownMenuLink"
      >
        <li>
          <a class="dropdown-item" href="#">My profile</a>
        </li>
        <li>
          <a class="dropdown-item" href="#">Settings</a>
        </li>
        <li>
          <a class="dropdown-item" href="#">Logout</a>
        </li>
      </ul>
    </div>
        </span>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>




        <div class=" navbar-expand-lg" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="navbar-brand" href="<?php echo base_url("index.php")?>">Home</a>
            </li>
            <li class="nav-item active">
              <a class="navbar-brand" href="<?php echo base_url("index.php/customerCI/category")?>">Categories</a>
            </li>
            <li class="nav-item active">
              <a class="navbar-brand" href="<?php echo base_url("index.php/customerCI/AboutUs")?>">About Us</a>
            </li>
            <li class="nav-item active">
              <a class="navbar-brand" href="<?php echo base_url("index.php/customerCI/ContactUs")?>">Contact</a>
            </li>
            <!--
            <li class="nav-item active">
              <a class="navbar-brand" href="<?php echo base_url("index.php/customerCI/cart")?>">Shopping Cart</a>
            </li>


            <li class="nav-item active">
              <a class="navbar-brand" href="<?php echo base_url("index.php/customerCI/customerLogin")?>">Login</a>
            </li>

            <li class="nav-item active">
              <a style = "color:black;" class="navbar-brand" href="<?php echo base_url("index.php/customerCI/CustomerReg")?>">Registration</a>
            </li>
           </ul>
           -->

        </div>
      </div>
    </nav>


  
  <meta charset="utf-8">
  <title></title>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Pixie - Product Detail</title>

    <!-- Additional CSS Files -->
   

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome.css" media="all">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tooplate-main.css" media="all">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.css" media="all">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flex-slider.css" media="all">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>


<body>
    
<section>

  <!--Carousel Wrapper-->
  <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="view">
          <img class="d-block w-100" src=" <?php echo base_url('assets\images\14new.jpg') ?>"
            alt="First slide">
          <a href="#!">
            <div class="mask rgba-black-light"></div>
          </a>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Shop Now</h3>
          <p>First text</p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src=" <?php echo base_url('assets\images\20.jpg') ?>"
            alt="Second slide">
          <a href="#!">
            <div class="mask rgba-black-light"></div>
          </a>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Shop Now</h3>
          <p>Secondary text</p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src=" <?php echo base_url('assets\images\16.jpg') ?>"
            alt="Third slide">
          <a href="#!">
            <div class="mask rgba-black-light"></div>
          </a>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Shop Now</h3>
        </div>
      </div>
    </div>
    <!--/Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/Controls-->
  </div>
  <!--/Carousel Wrapper-->

</section>
<!--Section: Block Content-->

    <!-- Featured Starts Here -->
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>New Arrivals</h1>
            </div>
          </div>
          <div>
           

             <div class="col-md-12">
            <div class="owl-carousel owl-theme">
              <?php
           
              foreach($p_info as $row){
 
              ?>
              <a href="<?php echo base_url("index.php/AdminL/singleproduct/".$row->ProductID)?>">
                <div class="featured-item">
                  <img src="<?=$row->Image?>" alt="Item 1">
                  <h4><?=$row->Name?></h4>
                  <h6>Rs.<?=$row->Price?>.00</h6>
                </div>
              </a>
           
          <?php
            }
          ?>

        </div>
      </div>
    </div>
    <!-- Featred Ends Here -->



    


    <!-- Sub Footer Starts Here -->
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-text">
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sub Footer Ends Here -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

        
  
<style type="text/css">
	.cardItem{
		width: 250px;
		height: 400px;
		background-color: whitesmoke;
		margin: 10px;

	}
	.cardhd{
		width: 200px;
		margin-left: auto;
		margin-right: auto;
	}
	.cardimg{
		margin-top: 10px;
		width: 200px;
		height: auto;
	}

	.cardbd{
		padding: 10px;
	}
</style>
<div  class="row">
	

	<?php
		foreach($p_info as $row){
			?>

			<div class="card" style="width: 18rem;">
			  <img src="<?=$row->Image?>" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title"><h3><?=$row->Name?></h3></h5>
			    <div>Price: <?=$row->Price?></div>
			    <a href="#" class="btn btn-primary">View Product</a>
			  </div>
			</div>
						
			<?php
		}

	?>
	
    <!-- Footer Starts Here -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="logo">
              <img src="assets/images/" alt="">
            </div>
          </div>
          <div class="col-md-12">
            <div class="footer-menu">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="social-icons">
              <ul>
                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Ends Here -->
 </body>
 
 </html>

