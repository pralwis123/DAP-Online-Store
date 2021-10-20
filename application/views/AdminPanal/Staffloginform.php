<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Login Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
       <!----link Bootstrap---->

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


      <!----link jquery----->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
       crossorigin="anonymous"></script>

       <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

       <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/AdminL.css');?>">





   </head>
   <body>
                    

         <div class="wrapper fadeInDown">
           <div id="formContent">
             <!-- Tabs Titles -->

             <!-- Icon -->
             <div class="fadeIn first">
             <i class="material-icons" >account_circle</i>



              
             </div>

             <!-- Login Form -->
             <form method="post" action="http://localhost/Online_Store/index.php/AdminL/logstaff">
               <input type="text" id="login" class="fadeIn second" name="USR" placeholder="Username">
               <input type="text" id="password" class="fadeIn third" name="PSW" placeholder="Password">
               <input type="submit" class="fadeIn fourth" value="Log In">

             </form>

             <?php

                  if(isset($error_message)){


                    ?>

                    <div class="alert alert-danger" role="alert"><?=$error_message?></div>

                    <?php
                  } 


             ?>

             <!-- Remind Passowrd -->
             <div id="formFooter">
               <a class="underlineHover" href="#">Forgot Password?</a>
               <a class="underlineHover" href="http://localhost/Online_Store/index.php/AdminL/staffreg">Register New User?</a>
             </div>
             

           </div>
         </div>

         
      
   </body>
</html>