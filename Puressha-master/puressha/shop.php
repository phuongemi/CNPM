<?php

include("../handleData/helpers/format.php");
$fm = new Format();

 include("../handleData/classes/sanpham.php");
include("../handleData/classes/chitietsanpham.php");
include("../handleData/classes/danhmuc.php");

include("myHelper.php");
$user = confirmLogin();

 $cate = new danhmuc();
$category = $cate->getAll();

 $prod = new sanpham();
 $product = $prod->getAll();

$prodD = new chitietsanpham();



if(checkCart()){
	$cart = $_SESSION["cart"];
$check = 1;
 }
else $check = 0;

 //print_r($cart);
$total=0;
$amount=0;
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Puressha</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/letter-p.png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="index.php"><img src="img/core-img/logo6.png"  alt="" width="144" height="127"></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="shop.php">Shop</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li><a href="shop.php">Danh mục</a></li>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="img/bg-img/bg-6.jpg" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="order.php" style="<?php if(!$user) echo'display: none'?>">Order</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="shop.php" method="get">                    
                     <input type = "text" name = "search" placeholder = "Nhập từ khóa cần tìm" value =
                     "<?php if(isset($_GET["search"])) { echo $_GET["search"]; } ?>" >
                     <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                     </form>
                
                </div>

                <!-- Favourite Area -->
                <!-- User Login Info -->
                <div class="user-login-info classynav">
                    <ul><li><a href="#"><img src="img/core-img/user.svg" alt=""></a>
					<ul class="dropdown" style="<?php if($user) echo'display: none'?>">
                                    <li><a href="../customer/login.php">Login</a></li>
                                    <li><a href="../customer/register.php">Register</a></li>
                    </ul>
					<ul class="dropdown" style="<?php if(!$user) echo'display: none'?>">
                                    <li></li>
                                    <li><a href="../customer/profile.php">Profile</a></li>
                                    <li><a><form method="post" >
										<input style="border: 0; background: white" type="submit" name="submit" value="Logout"></form></a></li>
                    </ul></li></ul>
                </div>
				<?php 
				include("../customer/logout.php");
				?>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""> <span><?php echo count($cart)?></span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="img/core-img/bag.svg" alt=""> <span><?php echo count($cart)?></span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                
                <!-- Single Cart Item -->
				<?php
				if (!$check) echo "<p><strong>Chưa có mặt hàng được chọn vào giỏ hàng</strong></p>";
				else {
					foreach($cart as $c){
						$productC = $prod->getByMSP($c[0]);
						$pC = $productC->fetch_assoc();
						
						$productCD = $prodD->getByMCTSP($c[1]);
						$pCD = $productCD->fetch_assoc();
						echo '<div class="single-cart-item">
								<div class="product-image">
									<img src="img/product-img/'.$pCD['ANH'].'" class="cart-thumb" alt="">
									<!-- Cart Item Desc -->
									<div class="cart-item-desc">
									  <span class="product-remove"><form method="post" >
													<input type="hidden" name="prodD" value="'.$pCD['MCTSP'].'">
													<button style="border: none; background: none"
														   type="submit" name="button" value="Del to Cart"><i class="fa fa-close" aria-hidden="true"></i></button></form></span>
										<h6><a href="detail.php?'.$pCD['MCTSP'].'">'.$pC['TEN'].'</a></h6>
										<p class="size">Size: '.$pCD['SIZE'].'</p>
										<p class="color">Color: '.$pCD['MAU_SAC'].'</p>
										<p class="color">Qty: '.$c[2].'</p>
										<p class="price">'.$fm->format_currency($pCD['GIA_BAN']).' VND</p>
									</div>
								</div>
							</div>';
						
						$total=$total+$pCD['GIA_BAN']*$c[2];
						$amount= $amount + $c[2];
						}
					}
                
				?>
            </div>
			<!-- Cart Summary -->
            <div class="cart-amount-summary" >

                <h2>Summary</h2>
                <ul class="summary-table">
                    <li><span>amount:</span> <span><?php echo $amount?></span></li>
                    <li><span>total:</span> <span><?php echo $fm->format_currency($total)?> VND</span></li>
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="checkout.php<?php ?>" class="btn essence-btn">check out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>dresses</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Catagories</h6>

     <!--  Show danh muc  -->
                            <div class="catagories-menu">
                    <form action="shop.php" method="get">
                        <?php
                            $c=new danhmuc();
                            $result=$c->getAll();
                            if($result->num_rows > 0){
                                while ($cate = $result->fetch_assoc()){
                        ?>
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="MDM[]" value="<?php echo $cate['MDM']?>" >
                            <?php echo $cate['TEN_DANH_MUC'];?>
                        </label>
                        <br>
                        <?php
                                }
                            }  
                        ?>
                        <!-- phần xử lý nút filter -->
                        <input type="submit" class="btn btn-info" value="Filter">     
                    </form>
                    <?php    
                        $madm = $_GET['MDM'];
                        $sp = new sanpham();
                             
                    ?>   
                    </div>
                    </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget price mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Filter by</h6>
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Price</p>

                            <div class="widget-desc">
                                <div class="slider-range">
                                    <div data-min="49" data-max="360" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="49" data-value-max="360" data-label-result="Range:">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div class="range-price">Range: $49.00 - $360.00</div>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->
                                    <div class="total-products">
                                        <p><span><?php?>186</span> products found</p>
                                    </div>
                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex">
                                        <p>Sort by:</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect">
                                                <option value="value">Highest Rated</option>
                                                <option value="value">Newest</option>
                                                <option value="value">Price: $$ - $</option>
                                                <option value="value">Price: $ - $$</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

						<?php
                            $conn = mysqli_connect("localhost", "root", "","puressha");
                            mysqli_set_charset($conn,"utf8");
                                if(isset($_GET["search"]) && !empty($_GET["search"]))
                                {
                                    $key = $_GET["search"];
                                    $sql = "SELECT * FROM san_pham WHERE  TEN LIKE '%$key%' " ;
                                    
                                }
                                else {
                                    $sql = "SELECT * FROM san_pham ";
                                }

                            $result = mysqli_query($conn, $sql);
                        ?>
  
                        <?php
                           if (!isset($_GET['MDM']) || empty($_GET['MDM']) ) {
                            
                           while($row = mysqli_fetch_assoc($result))
                            {                        
                                $msp = $row["MSP"];
                                $mdm = $row["MDM"];
                                $ten = $row["TEN"];
                                $mo_ta = $row["MO_TA"];
                                $tong_so_luong = $row["TONG_SO_LUONG"];
                                $productD = $prodD->getAll($msp);
                                $pD = $productD->fetch_assoc();
                                echo '<!-- Single Product -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                    <img src="img/product-img/'.$pD['ANH'].'" alt="">
                                    
                                    <!-- Hover Thumb -->
                                                        <img class="hover-img" src="img/product-img/product-3.jpg" alt="">
                                    
                                    <!-- Product Badge -->
                                    <!--div class="product-badge new-badge">
                                        <span>New</span>
                                    </div-->
                                    
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                    <a href="detail.php?MSP='.$msp.'">
                                        <h6>'.$ten.'</h6>
                                    </a>
                                    <p class="product-price">'.$fm->format_currency($pD['GIA_BAN']).' VND</p>
                            
                                    <!-- Hover Content -->
                                    <div class="hover-content">
                                        <!-- Add to Cart -->
                                        <div class="add-to-cart-btn">
                                        <form method="post" >
                                        <input type="hidden" name="prod" value="'.$msp.'">
                                        <input type="hidden" name="prodD" value="'.$pD['MCTSP'].'">
                                        <input class="btn essence-btn"  
                                            type="submit" name="button" value="Add to Cart"></form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>';
                            }
                        } 
                        else {
                            $danhmuc = $sp->getSPByMDM($madm); 
							while ($p = $danhmuc->fetch_assoc()){                             
								$productD = $prodD->getAll($p['MSP']);
								$pD = $productD->fetch_assoc();
								echo '<!-- Single Product -->
								<div class="col-12 col-sm-6 col-lg-4">
									<div class="single-product-wrapper">
										<!-- Product Image -->
										<div class="product-img">
											<img src="img/product-img/'.$pD['ANH'].'" alt="">
											
											<!-- Hover Thumb -->
                                        	<img class="hover-img" src="img/product-img/product-3.jpg" alt="">
											
											<!-- Product Badge -->
											<!--div class="product-badge new-badge">
												<span>New</span>
											</div-->
											
										</div>

										<!-- Product Description -->
										<div class="product-description">
											<a href="detail.php?'.$pD['MCTSP'].'">
												<h6>'.$p['TEN'].'</h6>
											</a>
											<p class="product-price">'.$fm->format_currency($pD['GIA_BAN']).' VND</p>

											<!-- Hover Content -->
											<div class="hover-content">
												<!-- Add to Cart -->
												<div class="add-to-cart-btn">
													<form method="post" >
										        	<input type="hidden" name="prod" value="'.$p['MSP'].'">
													<input type="hidden" name="prodD" value="'.$pD['MCTSP'].'">
													<input class="btn essence-btn"  
														   type="submit" name="button" value="Add to Cart"></form>
												</div>
											</div>
										</div>
									</div>
								</div>';
							}
                        }
                        ?>	
                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination mt-50 mb-70">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area mb-30">
                        <ul class="footer_widget_menu">
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Payment Options</a></li>
                            <li><a href="#">Shipping and Delivery</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row align-items-end">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_heading mb-30">
                            <h6>Subscribe</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="mail" placeholder="Your email here">
                                <button type="submit" class="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>

<div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>