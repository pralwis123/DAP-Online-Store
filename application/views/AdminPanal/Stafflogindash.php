<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>

  <style type="text/css">
    


/* Set a style for the submit/register button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

  </style>

</head>
<body>



   <form method="post" action="http://localhost/Online_Store/index.php/AdminL/StaffLoginPage">
   <div class="container">
    <h1>Staff DashBord</h1>

     <button type="submit" class="registerbtn">Cashier</button>
     <button type="submit" class="registerbtn">Store Keeper</button>
      
  </div>
 
 
</form>

<form method="post" action="http://localhost/Online_Store/index.php/AdminL/logpage">
   <div class="container">
    

 
     <button type="submit" class="registerbtn">Admin</button>
      
  </div>
 
 
</form>

</body>
</html>
