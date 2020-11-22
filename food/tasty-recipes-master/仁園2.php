<!doctype html>
<?php
session_start();
require 'db.php';
require_once 'food.php';
require 'sql2.php';
$cant=$_SESSION['cb'];
?>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tasty Recipes</title>
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
    <link rel="stylesheet" href="css/animate.css">
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
                                <a href="index.html">
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
                        <h3>Menu</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->


    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                       

                        

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            <div class="media post_item">
                                <img src="img/咖哩飯.jpg" alt="post"  width="100" height="90">
                                <div class="media-body">
                                    <h3><?php $c=0; foreach ($cant as $v){
    if ($v==1){
        echo "咖哩飯已售完" ;
        $c=$c+1;
        break;
    }
}
                                        if($c==0){
                                            echo "咖哩飯 40$";
                                        }?></h3>
                                    <input type="text" name="qty" style=width:20px;height:15px>
			                	<a href="buy.php?id=1" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i></a>
                                    
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/水餃.jpg" alt="post" width="100" height="90">
                                <div class="media-body">
                                   
                                        <h3><?php $c=0; foreach ($cant as $v){
    if ($v==2){
        echo "水餃十顆已售完" ;
        $c=$c+1;
        break;
    }
}
                                        if($c==0){
                                            echo "水餃十顆 50$";
                                        }?></h3>
                                     <input type="text" name="qty" style=width:20px;height:15px>
			                	<a href="buy.php?id=2" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i></a>
                                    
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/可樂.jpg" alt="post" width="100" height="90">
                                <div class="media-body">
                                    
                                        <h3><?php $c=0; foreach ($cant as $v){
    if ($v==3){
        echo "可樂已售完" ;
        $c=$c+1;
        break;
    }
}
                                        if($c==0){
                                            echo "可樂 20$";
                                        }?></h3>
                                     <input type="text" name="qty" style=width:20px;height:15px>
			                	<a href="buy.php?id=3" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i></a>
                                    
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/酸辣麵.jpg" alt="post" width="100" height="90">
                                <div class="media-body">
                                    
                                        <h3><?php $c=0; foreach ($cant as $v){
    if ($v==4){
        echo "酸辣麵已售完" ;
        $c=$c+1;
        break;
    }
}
                                        if($c==0){
                                            echo "酸辣麵 50$";
                                        }?></h3>
                                    <input type="text" name="qty" style=width:20px;height:15px>
			                	<a href="buy.php?id=4" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i></a>
                                    
                                </div>
                            </div>
                        </aside>
                       


                       


                     
                 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    <!-- footer start -->
    <!-- footer  -->
<!--/ footer  -->

<!-- link that opens popup -->
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