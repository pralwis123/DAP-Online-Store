<body>
<style type="text/css">
    body{
    background-color: #dee9ff;
}

.checkout-form{
    padding: 45px;
}

.checkout-form form{
    text-align: center;
    background-color: #fff;
    max-width: 600px;
    margin: auto;
    padding: 50px 70px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    box-shadow: 10px 10px 300px rgba(0, 0, 0, 0.075);
}


.checkout-form .item{
    border-radius: 20px;
    margin-bottom: 25px;
    padding: 10px 20px;
}

.checkout-form .create-account{
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    background-color: #5791ff;
    border: none;
    color: white;
    margin-top: 20px;
}

</style>
    <div class="checkout-form">
        <form>

           <div class="col">
              <p style="margin-bottom: 30px ;"class="h1">Checkout</p>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="name" placeholder="Receiver Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="address" placeholder="Receiver Address">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="district" placeholder="Receiver District">
            </div>

            <div class="form-group">
                <input type="text" class="form-control item" id="contactno" placeholder="Receiver Contact No">
            </div>

            <div class="form-group">
                <a href=" <?php echo base_url('index.php/customerCI/placeorder') ?>" type="button" class="btn btn-block create-account" >Place Order</a>
            </div>
        </form>

    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
