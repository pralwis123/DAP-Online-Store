<body>
<style type="text/css">
    body{
    background-color: #dee9ff;
}

.registration-form{
    padding: 45px;
}

.registration-form form{
    text-align: center;
    background-color: #fff;
    max-width: 600px;
    margin: auto;
    padding: 50px 70px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.registration-form .item{
    border-radius: 20px;
    margin-bottom: 25px;
    padding: 10px 20px;
}

.registration-form .create-account{
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    background-color: #5791ff;
    border: none;
    color: white;
    margin-top: 20px;
}


@media (max-width: 576px) {
    .registration-form form{
        padding: 50px 20px;
    }

    .registration-form .form-icon{
        width: 70px;
        height: 70px;
        font-size: 30px;
        line-height: 70px;
    }
}

</style>
    <div class="registration-form">
        <form action="<?=base_url('index.php/customerCI/customerReg/')?>" method="GET">

            <div class="col">
              <p style="margin-bottom: 30px ;" class="h1">Customer Registration</p>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="fname" placeholder="Firts Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="lname" placeholder="Last Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="address" placeholder="Address">
            </div>

            <div class="form-group">
                <input type="text" class="form-control item" name="nic" placeholder="NIC">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="contactno" placeholder="Contact No">
            </div>

            <div class="form-group">
                <input type="text" class="form-control item" name="email" placeholder="Email">
            </div>

            <div class="form-group">
                <input type="text" class="form-control item" name="username" placeholder="Username">
            </div>

            <div class="form-group">
                <input type="text" class="form-control item" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">Create Account</button>
            </div>
        </form>

    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
