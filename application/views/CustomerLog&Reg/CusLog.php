<style type="text/css">
  body{
    background-color: #dee9ff;
}

.Login-form{
  padding: 45px;
}

.Login-form form{
    background-color: #fff;
    text-align: center;
    max-width: 600px;
    margin: auto;
    padding: 50px 70px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.Login-form .item{
  border-radius: 20px;
    margin-bottom: 25px;
    padding: 10px 20px;
}

.Login-form .create-account{
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    background-color: #5791ff;
    border: none;
    color: white;
    margin-top: 20px;
}
/*

*/
@media (max-width: 576px) {
    .Login-form form{
        padding: 50px 20px;
    }

        width: 70px;
    .Login-form .form-icon{
        height: 70px;
        font-size: 30px;
        line-height: 70px;
    }
}


</style>


<div class="Login-form">
        <form action="<?=base_url('index.php/customerCI/customerLogin')?>" method="POST">

            <div class="col">
              <p style="margin-bottom: 30px ;" class="h1">Customer Login</p>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="username" name="Username" placeholder="Username" >
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="password" name="Password" placeholder="Password">
            </div>
           
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">Login</button>
            </div>

            <div id="formFooter">
               <a class="underlineHover" shref="#">Forgot Password?</a>
            </div>

        </form>
       
    </div>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
      $('#birth-date').mask('00/00/0000');
      $('#phone-number').mask('0000-0000');
         })
    </script>