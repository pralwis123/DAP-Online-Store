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





<style type="text/css">

@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}

body {
    background-color: #f4f4f4
}

.container {
    margin: 40px auto
}

#header {
    width: 100%;
    height: 60px;
    box-shadow: 5px 5px 15px #e8e8e8
}

.col-lg-4,
.col-md-6 {
    padding-right: 0
}



.btn:focus {
    box-shadow: none
}

.box-label .btn {
    background-color: #fff;
    padding: 0;
    font-size: 0.8rem
}

.btn-red {
    background-color: #e00000ce
}

.btn-orange {
    background-color: #ffa500
}

.btn-pink {
    background-color: #e0009dce
}

.btn-green {
    background-color: #00811c
}

.btn-blue {
    background-color: #026bc2
}

.btn-brown {
    background-color: #994a00
}

.navbar {
    display: inline-flex
}

.pagination .page-item .page-link {
    color: #333;
    border: none;
    width: 40px;
    text-align: center
}

.pagination .page-item.active .page-link {
    background-color: #fff;
    border: 1px solid #333
}

select {
    outline: none;
    padding: 6px 12px;
    margin: 0px 4px;
    color: #999;
    font-size: 0.85rem;
    width: 140px
}

#select2 {
    border: 1px solid #777;
    color: #999
}

#pro {
    border: none;
    color: #333;
    font-weight: 700;
    padding-left: 0px;
    width: initial
}

#filterbar {
    width: 30%;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 15px;
    float: left
}

#filterbar input[type="radio"] {
    visibility: hidden
}

#filterbar input[type='radio']:checked {
    background-color: #16c79a;
    border: none
}

#filterbar .btn.btn-success {
    background-color: #ddd;
    color: #333;
    border: none;
    width: 115px
}

#filterbar .btn.btn-success:hover {
    background-color: #aff1e1;
    color: #444
}

#filterbar .btn-success:not(:disabled):not(.disabled).active,
#filterbar .btn-success:not(:disabled):not(.disabled):active {
    background-color: #16c79a;
    color: #fff
}

label {
    cursor: pointer
}

.tick {
    display: block;
    position: relative;
    padding-left: 23px;
    cursor: pointer;
    font-size: 0.9rem;
    margin: 0
}

.tick input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0
}

.check {
    position: absolute;
    top: 1px;
    left: 0;
    height: 18px;
    width: 18px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 3px
}

.tick:hover input~.check {
    background-color: #f3f3f3
}

.tick input:checked~.check {
    background-color: #ffffff
}

.check:after {
    content: "";
    position: absolute;
    display: none
}

.tick input:checked~.check:after {
    display: block;
    transform: rotate(45deg) scale(1)
}

.tick .check:after {
    left: 6px;
    top: 2px;
    width: 5px;
    height: 10px;
    border: solid rgb(0, 0, 0);
    border-width: 0 3px 3px 0;
    transform: rotate(45deg) scale(2)
}

.box {
    padding: 10px
}

.box-label {
    color: #11698e;
    font-size: 0.9rem;
    font-weight: 800
}

#inner-box,
#inner-box2 {
    height: 150px;
    overflow-y: scroll
}

#inner-box2 {
    height: 132px
}

#inner-box::-webkit-scrollbar,
#inner-box2::-webkit-scrollbar {
    width: 6px
}

#inner-box::-webkit-scrollbar-track,
#inner-box2::-webkit-scrollbar-track {
    background-color: #ddd;
    border-radius: 2px
}

#inner-box::-webkit-scrollbar-thumb,
#inner-box2::-webkit-scrollbar-thumb {
    background-color: #333;
    border-radius: 2px
}

.card {
    padding: 10px;
    cursor: pointer;
    transition: .3s all ease-in-out;
    height: 450px
}

.card:hover {
    box-shadow: 2px 2px 15px #fd9a6ce5;
    transform: scale(1.02)
}


#price {
    height: 45px
}

#size input[type="checkbox"] {
    visibility: hidden
}

#size input[type='checkbox']:checked {
    background-color: #16c79a;
    border: none
}

#size .btn.btn-success {
    background-color: #ddd;
    color: #333;
    border: none;
    width: 40px;
    font-size: 0.8rem;
    border-radius: 0
}

#size .btn.btn-success:hover {
    background-color: #aff1e1;
    color: #444
}

#size .btn-success:not(:disabled):not(.disabled).active,
#size .btn-success:not(:disabled):not(.disabled):active {
    background-color: #16c79a;
    color: #fff
}

#size label {
    margin: 10px;
    margin-left: 0px
}



#avail-size input[type="checkbox"] {
    visibility: hidden
}

#avail-size input[type='checkbox']:checked {
    background-color: #16c79a;
    border: none
}

#avail-size .btn.btn-success {
    background-color: #ddd;
    color: #333;
    border: none;
    width: 20px;
    font-size: 0.7rem;
    border-radius: 0;
    padding: 0
}

#avail-size .btn.btn-success:hover {
    background-color: #aff1e1;
    color: #444
}

#avail-size .btn-success:not(:disabled):not(.disabled).active,
#avail-size .btn-success:not(:disabled):not(.disabled):active {
    background-color: #16c79a;
    color: #fff
}

#avail-size label {
    margin: 10px;
    margin-left: 0px
}

#shirt {
    height: 170px
}

.middle {
    position: relative;
    width: 100%;
    margin-top: 25px
}

.slider {
    position: relative;
    z-index: 1;
    height: 5px;
    margin: 0 15px
}

.slider>.track {
    position: absolute;
    z-index: 1;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    border-radius: 5px;
    background-color: #ddd
}

.slider>.range {
    position: absolute;
    z-index: 2;
    left: 25%;
    right: 25%;
    top: 0;
    bottom: 0;
    border-radius: 5px;
    background-color: #36a31b
}

.slider>.thumb {
    position: absolute;
    top: 2px;
    z-index: 3;
    width: 20px;
    height: 20px;
    background-color: #36a31b;
    border-radius: 50%;
    box-shadow: 0 0 0 0 rgba(63, 204, 75, 0.705);
    transition: box-shadow .3s ease-in-out
}

.slider>.thumb::after {
    position: absolute;
    width: 8px;
    height: 8px;
    left: 28%;
    top: 30%;
    border-radius: 50%;
    content: '';
    background-color: #fff
}

.slider>.thumb.left {
    left: 25%;
    transform: translate(-15px, -10px)
}

.slider>.thumb.right {
    right: 25%;
    transform: translate(15px, -10px)
}

.slider>.thumb.hover {
    box-shadow: 0 0 0 10px rgba(125, 230, 134, 0.507)
}

.slider>.thumb.active {
    box-shadow: 0 0 0 10px rgba(63, 204, 75, 0.623)
}

input[type=range] {
    position: absolute;
    pointer-events: none;
    -webkit-appearance: none;
    z-index: 2;
    height: 10px;
    width: 100%;
    opacity: 0
}

input[type=range]::-webkit-slider-thumb {
    pointer-events: all;
    width: 30px;
    height: 30px;
    border-radius: 0;
    border: 0 none;
    background-color: red;
    -webkit-appearance: none
}

.del {
    text-decoration: line-through;
    color: red
}

@media(min-width:1199.6px) {
    #filterbar {
        width: 25%
    }
}

@media(max-width:1199.5px) {
    #filterbar {
        width: 28%
    }

    .card {
        height: 350px
    }

    .price {
        font-size: 0.9rem
    }

    .product-name {
        font-size: 0.8rem
    }
}

@media(max-width: 991.5px) {
    .navbar-nav {
        min-width: 290px;
        position: absolute;
        left: -168px;
        bottom: -146px;
        padding: 20px 10px;
        display: block;
        background-image: none;
        z-index: 2;
        background-color: #1d1c1cb2
    }

    #filterbar {
        width: 36%
    }

    #sort {
        background-color: inherit;
        color: #fff;
        margin: 0;
        margin-bottom: 20px;
        width: 100%
    }

    #sort option,
    #pro option {
        color: #000
    }

    #pro,
    #select2,
    .result {
        background-color: inherit;
        color: #fff
    }

    .card {
        height: 345px
    }

    .price {
        font-size: 0.85rem
    }
}

@media(max-width: 767.5px) {
    #filterbar {
        width: 50%
    }
}

@media(max-width: 525.5px) {
    #filterbar {
        float: none;
        width: 100%;
        margin-bottom: 20px;
        border-radius: 5px
    }

    #content.my-5 {
        margin-top: 20px !important;
        margin-bottom: 20px !important
    }

    .col-lg-4,
    .col-md-6 {
        padding-left: 0
    }
}

@media(max-width: 500.5px) {
    .pagination {
        display: none
    }
}

.center-text{
    width: 100%;
    text-align: center;
}
.Card-Name{
    color: black;
}
.Card-Name:hover{
    color:brown;
}

</style>
</head>
<body>
<div class="container">
    <div class="bg-white rounded d-flex align-items-center justify-content-between" id="header"> <button class="btn btn-hide text-uppercase" type="button" data-toggle="collapse" data-target="#filterbar" aria-expanded="false" aria-controls="filterbar" id="filter-btn" onclick="changeBtnTxt()"> <span class="fas fa-angle-left" id="filter-angle"></span> <span id="btn-txt">Back to Home</span> </button>
        <nav class="navbar navbar-expand-lg navbar-light pl-lg-0 pl-auto"> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" aria-controls="mynav" aria-expanded="false" aria-label="Toggle navigation" onclick="chnageIcon()" id="icon"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="mynav">
                <ul class="navbar-nav d-lg-flex align-items-lg-center">
                    <li class="nav-item active"> <select name="sort" id="sort">
                            <option value="" hidden selected>Sort by</option>
                            <option value="price">Price</option>
                            <option value="popularity">Popularity</option>
                            <option value="rating">Rating</option>
                        </select> </li>
                    <li class="nav-item d-inline-flex align-items-center justify-content-between mb-lg-0 mb-3">
                        <div class="d-inline-flex align-items-center mx-lg-2" id="select2">
                            <div class="pl-2">Products:</div> <select name="pro" id="pro">
                                <option value="20">20</option>
                                <option value="40">40</option>
                            </select>
                        </div>
                        <div class="font-weight-bold mx-2 result">1 from 2</div>
                    </li>
                    <li class="nav-item d-lg-none d-inline-flex"> </li>
                </ul>
            </div>
        </nav>
        <div class="ml-auto mt-3 mr-2">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"> <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true" class="font-weight-bold">&lt;</span> <span class="sr-only">Previous</span> </a> </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">..</a></li>
                    <li class="page-item"><a class="page-link" href="#">24</a></li>
                    <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true" class="font-weight-bold">&gt;</span> <span class="sr-only">Next</span> </a> </li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="content" class="my-5">
        <div id="filterbar" class="collapse">
            <form action="<?=base_url("index.php/customerCI/category")?>">
            <div class="box border-bottom">
                <div class="box">
                <div class="box-label text-uppercase d-flex align-items-center">Brand<button class="btn ml-auto" type="button" data-toggle="collapse" data-target="#size" aria-expanded="false" aria-controls="size"><span class="fas fa-plus"></span></button> </div>

                <select name="Brand" class="form-control" style="margin-bottom:10px; margin-top:10px">
                    <option value="0">ALL</option>
                    <?php
                    if(isset($brand)){
                        foreach($brand as $brd){
                    
                    ?>
                        <option 
                        <?php if (isset($SelectedBrand) && $SelectedBrand==$brd->Brandid){
                                echo "selected";
                        } ?> 
                        value="<?=$brd->Brandid?>" > <?=$brd->Name?></option>
                    <?php
                        }
                     }
                    ?>
                </select>
            </div>
                
            <div class="box border-bottom">
                <div class="box-label text-uppercase d-flex align-items-center">Categories<button class="btn ml-auto" type="button" data-toggle="collapse" data-target="#inner-box" aria-expanded="false" aria-controls="inner-box" id="out" onclick="outerFilter()"> <span class="fas fa-plus"></span> </button> </div>
                <div id="inner-box" class="collapse mt-2 mr-1">
                    <?php
                    if(isset($category)){
                        foreach($category as $ctg){
                    
                    ?>
                    <div class="my-1"> <label class="tick"><?=$ctg->Name?><input type="checkbox" name="category[]" value="<?= $ctg->CatID ?>" <?php if (in_array($ctg->CatID, $CheckedCtg)) { echo "Checked";}?> ><span class="check"></span> </label> </div>
                    <?php
                        }
                     }
                    ?>
                </div>
            </div>
            
           

            <div class="form-group text-center" style="margin-top: 10px;">
                <div class="btn-group" data-toggle="buttons"> <input type="reset" class="btn btn-success form-check-label" value="Reset"> <input class="btn btn-success form-check-label active" type="submit" value="Apply"> </div>
                </div>
               
            </div>
            
            </form>
        </div>
        <div id="products">
       
            <div class="row">
        <?php
            foreach($Product as $rowN=>$row){
        ?>     
            <?php      
                foreach($row as $singleproduct){
            ?>                    
                    <div class="col-auto" style="margin-bottom:10px">
                        <div class="card">
                            <div class="card-body" >
                                <img src="<?php echo $singleproduct->Image ?>" style=" max-width:200px; height: auto; margin-left: auto; margin-right: auto;">                      
                            </div>
                            <div class="card-footer">
                              <h5 class="center-text Card-Name" ><?=$singleproduct->Name?></h5>
                                
                                <label class="center-text">Rs.<?=$singleproduct->Price?>.00</label>
                            </div>
                        </div>
                    </div> 
            <?php
                }
            ?>
         <?php
            }
        ?>
            <hr>  
            </div>
       
        </div>
    </div>
</div>

<script type="text/javascript">

  // For Filters
document.addEventListener("DOMContentLoaded", function() {
var filterBtn = document.getElementById('filter-btn');
var btnTxt = document.getElementById('btn-txt');
var filterAngle = document.getElementById('filter-angle');

$('#filterbar').collapse(false);
var count = 0, count2 = 0;
function changeBtnTxt() {
$('#filterbar').collapse(true);
count++;
if (count % 2 != 0) {
filterAngle.classList.add("fa-angle-right");
btnTxt.innerText = "show filters"
filterBtn.style.backgroundColor = "#36a31b";
}
else {
filterAngle.classList.remove("fa-angle-right")
btnTxt.innerText = "hide filters"
filterBtn.style.backgroundColor = "#ff935d";
}

}

// For Applying Filters
$('#inner-box').collapse(false);
$('#inner-box2').collapse(false);

// For changing NavBar-Toggler-Icon
var icon = document.getElementById('icon');

function chnageIcon() {
count2++;
if (count2 % 2 != 0) {
icon.innerText = "";
icon.innerHTML = '<span class="far fa-times-circle" style="width:100%"></span>';
icon.style.paddingTop = "5px";
icon.style.paddingBottom = "5px";
icon.style.fontSize = "1.8rem";


}
else {
icon.innerText = "";
icon.innerHTML = '<span class="navbar-toggler-icon"></span>';
icon.style.paddingTop = "5px";
icon.style.paddingBottom = "5px";
icon.style.fontSize = "1.2rem";
}
}

// Showing tooltip for AVAILABLE COLORS
$(function () {
$('[data-tooltip="tooltip"]').tooltip()
})

// For Range Sliders
var inputLeft = document.getElementById("input-left");
var inputRight = document.getElementById("input-right");

var thumbLeft = document.querySelector(".slider > .thumb.left");
var thumbRight = document.querySelector(".slider > .thumb.right");
var range = document.querySelector(".slider > .range");

var amountLeft = document.getElementById('amount-left')
var amountRight = document.getElementById('amount-right')

function setLeftValue() {
var _this = inputLeft,
min = parseInt(_this.min),
max = parseInt(_this.max);

_this.value = Math.min(parseInt(_this.value), parseInt(inputRight.value) - 1);

var percent = ((_this.value - min) / (max - min)) * 100;

thumbLeft.style.left = percent + "%";
range.style.left = percent + "%";
amountLeft.innerText = parseInt(percent * 100);
}
setLeftValue();

function setRightValue() {
var _this = inputRight,
min = parseInt(_this.min),
max = parseInt(_this.max);

_this.value = Math.max(parseInt(_this.value), parseInt(inputLeft.value) + 1);

var percent = ((_this.value - min) / (max - min)) * 100;

amountRight.innerText = parseInt(percent * 100);
thumbRight.style.right = (100 - percent) + "%";
range.style.right = (100 - percent) + "%";
}
setRightValue();

inputLeft.addEventListener("input", setLeftValue);
inputRight.addEventListener("input", setRightValue);

inputLeft.addEventListener("mouseover", function () {
thumbLeft.classList.add("hover");
});
inputLeft.addEventListener("mouseout", function () {
thumbLeft.classList.remove("hover");
});
inputLeft.addEventListener("mousedown", function () {
thumbLeft.classList.add("active");
});
inputLeft.addEventListener("mouseup", function () {
thumbLeft.classList.remove("active");
});

inputRight.addEventListener("mouseover", function () {
thumbRight.classList.add("hover");
});
inputRight.addEventListener("mouseout", function () {
thumbRight.classList.remove("hover");
});
inputRight.addEventListener("mousedown", function () {
thumbRight.classList.add("active");
});
inputRight.addEventListener("mouseup", function () {
thumbRight.classList.remove("active");
});
});

</script>
</body>