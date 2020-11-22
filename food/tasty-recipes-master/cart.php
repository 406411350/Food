<!doctype html>
<?php
session_start();
if (!isset($_SESSION["account"])) {
  header("Location:login.php");
};

require 'db.php';
require 'sql.php';
require 'sql2.php';
?>

<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>SEOGO</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link rel="manifest" href="site.webmanifest"> -->
	<!-- Place favicon.ico in the root directory -->

	<!-- CSS here -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/gijgo.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/slicknav.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
	<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="checkout1.php">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu white_text  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.php">首頁</a></li>
                                        <li><a href="訂單明細.php">訂單明細</a></li>
                                        <li><a href="userInfo.php">顧客資料</a></li>
                                        <li><a href="logout.php">登出</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="search_icon">
                                <a href="#">
                                    <i class="ti-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Cart</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->

	<!-- Start Sample Area -->

	<!-- End Sample Area -->

	<!-- Start Button -->
	
	<!-- End Button -->

	<!-- Start Align Area -->
	<div>
	<div class="whole-wrap">
		<div class="container box_1170">

			<div class="section-top-border">
				<h3 class="mb-30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;餐點</h3>
				
				
	<center>	<table style="border:3px #cccccc solid;" cellpadding="10" border='1'>
  <tr>
      <th ><center>我的購物清單</center></th>
      <th>數量</th>
      <th>價格</th>
      <th></th>
  </tr>
 <?php
        $data=$_SESSION['data'];
        foreach ($data as $v){
        ?>
  <tr>
    <td><center><?php echo $v[1]; ?> </center></td>
      <td ><center><a href="countplus.php?c=<?php echo $v[0]; ?>"><img src="img/%E5%8A%A0.jpg" width="15" border="0"></a><a href="count.php?c=<?php echo $v[0] ?>"><img src="img/%E6%B8%9B.jpg" width="15" border="0"></a>&nbsp;&nbsp;&nbsp;<?php echo $v[2]; ?></center></td>
    <td ><center><?php echo $v[3]; ?></center></td>
      <td ><center><a href="delete.php?de=<?php echo $v[0]; ?>"><img src="img/垃圾桶.jpg"width="25" height="25" alt=""></a></center></td>
  </tr>
  <?php
        }
        ?>
  
  
    <tr>
      <td colspan="4">總額<?php $to=0; foreach ($data as $v){
    $to=$v[3]*$v[2]+$to;
}
          echo $to;?></td> 
  </tr>
  
  <tr>
      <td colspan="4">備註欄:</td> 
  </tr>
  
 </table></center>
       <br>
       <center><h4>預計可取餐時間:30分鐘</h4></center> 
			</div>

			<div class="section-top-border">
				<div class="row">
				
					<div class="col-lg-3 col-md-4 mt-sm-30">

						<div class="single-element-widget mt-30">
							<h3 class="mb-30">付款方式</h3>
							<div class="switch-wrap d-flex justify-content-between">
								<p>線上支付  (餘額)</p>
								<div class="primary-checkbox">
									<input type="checkbox" id="default-checkbox">
									<label for="default-checkbox"></label>
								</div>
							</div>
							<div class="switch-wrap d-flex justify-content-between">
								<p>現場支付</p>
								<div class="primary-checkbox">
									<input type="checkbox" id="primary-checkbox" checked>
									<label for="primary-checkbox"></label>
								</div>
							</div>
						
							</div>
						<div class="button-group-area mt-40" >
						<a href="checkout.php" class="genric-btn success circle arrow" >送出訂單<span class="lnr lnr-arrow-right"></span></a>
						</div>
						<div class="button-group-area mt-40" >
						<a href="仁園2.php" class="genric-btn success circle arrow" >繼續點餐<span class="lnr lnr-arrow-right"></span></a>
						</div>						
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Align Area -->

    <!-- footer  -->
<!--/ footer  -->

	<!-- JS here -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
	<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/ajax-form.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/scrollIt.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/nice-select.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/gijgo.min.js"></script>

	<!--contact js-->
	<script src="js/contact.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.form.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/mail-script.js"></script>

	<script src="js/main.js"></script>
</body>
</html>