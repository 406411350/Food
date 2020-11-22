<?php
  require 'db.php';
  require 'customer_sql.php';
  require 'customers.php';

  $sql="select * from `customer`";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $msg = $_GET["msg"] ?? "";

  $msg = isset($_GET["customerExisted"]) ? "此會員的資料已存在" : "";

  if(isset($_GET["addCustomer"])){ 
      $msg = $_GET["addCustomer"] ? "會員註冊成功" : "會員註冊失敗";
  }

?>

<!DOCTYPE html>
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
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slick.css">
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
                                        <li><a href="login.php">登入</a></li>
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
                        <h3>Contact Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->
    <!-- ================ contact section start ================= -->
    <section class="contact-section section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register</h2>
                </div>
                <div class="col-lg-8">
                    <!-- <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate"> -->
                        <div class="row">
                            <div class="col-12">
                            </div>
                            <div class="col-6">
                            </div>
                            <div class="col-sm-6">
                            </div>
                        </div>
                        <!--<div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_4 boxed-btn">使用者登入</button>
              <button type="submit" class="button button-contactForm btn_4 boxed-btn">管理者登入</button>
            </div>-->
                        <aside class="single_sidebar_widget newsletter_widget">
                            <form action="addcustomer.php" method="post">
                                <div class="form-group">
                                    <?= $msg ?>
                                    <div class="country">姓名</div>
                                    <input type="text" name="customer_name" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = '請輸入姓名'" placeholder='請輸入姓名' required><br>
                                    
                                    <div class="country">帳號</div>
                                    <input type="text" name="customer_account" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = '學號/教職員編號'" placeholder='學號/教職員編號' required><br>
                                    
                                    <div class="country">密碼</div>
                                    <input type="password" name="customer_password" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = '請輸入密碼'" placeholder='請輸入密碼' required><br>
                                    
                                    <div class="country">手機號碼</div>
                                    <input type="text" name="customer_phone" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = '請輸入手機號碼'" placeholder='請輸入手機號碼' required><br>
                                    
                                    <div class="country">悠遊卡卡號</div>
                                    <input type="text" name="customer_cardnumber" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = '請輸入悠遊卡背面的悠遊卡號'" placeholder='請輸入悠遊卡背面的悠遊卡號' required><br>
                                </div>
                                <button type="submit" class="genric-btn primary circle large" style="margin-right:10px;">註冊</button>
                            </form>
                        </aside>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
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