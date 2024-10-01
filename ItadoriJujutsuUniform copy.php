
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Itadori Jujutsu Uniform-HOKAGE Store</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>
<div class="container">
    <div class="navbar">
        <div class="logo">
            <a href="mini_project.php"><img src="images/logo.png" width="125px"></a>
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="mini_project.php">Home</a></li>
                <li><a href="products.php">Product</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="https://www.instagram.com/urstrulymaha._/">Contact</a></li>
                <li><a href="account.php">Account</a></li>

            </ul>
        </nav>
        <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>
</div>



<!----- Single product detail----->

<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="images/yuji1.jpg" width="70%" id="ProductImg">
            <div class="small-img-row">
                <div class="small-img-col">
                    <img src="images/yuji1.jpg" width="40%"  class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/yuji3.jpg" width="40%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/yuji4.jpg" width="40%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/yuji5.jpg" width="40%" class="small-img">
                </div>
            </div>
        </div>
        <div class="col-2">
            <p> Home/T-Shirt</p>
            <h1>Itadori Jujutsu<br> Uniform </h1>
            <h4>₹1,400.00</h4>
            <select> 
                <option>Select Size</option>
                <option>XXL</option>
                <option>XL</option>
                <option>Large</option>
                <option>Medium</option>
                <option>Small</option>
                <input type="number" value="1">
                <a href="cart.php" class="btn">Add To Cart</a>
                <h3>Product Detail <i class="fa fa-ident"></i></h3>
                <br>
                
            </select>
        </div>
    </div>
</div>
<!----- title----->
<div class="small-container">
    <div class="row row-2">
        <h2>Related Products</h2>
        <a href="products.php"><p> View More</p></a>

    </div>
</div>

<!----- products----->
<div class="small-container">
    <div class="row">
        <div class="col-4">
            <img src="images/product-9.jpg">
            <h4>Red Printed T-Shirt</h4>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-10.jpg">
            <h4>Red Printed T-Shirt</h4>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-11.jpg">
            <h4>Red Printed T-Shirt</h4>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-12.jpg">
            <h4>Red Printed T-Shirt</h4>
            <p>$50.00</p>
        </div>
    </div>


   
</div>

<!----- footer----->

<div class="footer">
    <div class="conatainer">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our Apple</h3>
                <p>Download App for Android and ios mobile phone.</p>
                <div class="app-logo">
                    <a href="#"><img src="images/play-store.png" ></a>
                    <a href="#"><img src="images/app-store.png" ></a>
                </div>
            </div>
            <div class="footer-col-2">
                <img src="images/logo-white.png">
                <p> Our aim Is To make Hokage store choice of every weeb.</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li><a href = "review.php">Reviews</li></a>
                    <li><a href = "returnpolicy.php">Return Policy</li></a>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow us</h3>
                <ul>
                    <a href="https://www.facebook.com/profile.php?id=100039284318869"><li>Facebook</li></a>
                    <a href="https://www.instagram.com/hokagestore__/"><li>Instagram</li></a>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2022 </p>
    </div>
    </div>
<!----- js for toggle menu----->
<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle() {
        if(MenuItems.style.maxHeight == "0px")
          {
             MenuItems.style.maxHeight = "200px"
          }
        else
          {
             MenuItems.style.maxHeight = "0px";
          }
    }
</script>  
<!----- js for product gallery----->
<script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");

    SmallImg[0].onclick = function()
     {
        ProductImg.src = SmallImg[0].src;
     }
    SmallImg[1].onclick = function()
     {
        ProductImg.src = SmallImg[1].src;
     }
    SmallImg[2].onclick = function()
     {
        ProductImg.src = SmallImg[2].src;
     }
    SmallImg[3].onclick = function()
     {
        ProductImg.src = SmallImg[3].src;
    }
    
     

    
</script>


</body>
</html>
