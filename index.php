<?php include 'admin/include/config.php'; ?>
<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from live.hasthemes.com/html/4/maxcoach-preview/maxcoach/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Apr 2021 11:21:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home 4 - MaxCoach</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome-pro.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-gilroy.css"> -->

    <!-- Plugins CSS (All Plugins Files) -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/select2.min.css">
    <link rel="stylesheet" href="assets/css/plugins/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="assets/css/plugins/photoswipe.css">
    <link rel="stylesheet" href="assets/css/plugins/photoswipe-default-skin.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css"> -->

    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

</head>

<body>

    <div id="page">

   <?php include 'include/path/head.php'; ?>
    
   <?php 

        if (isset($_GET['ref'])) {
         $source= $_GET['ref'] ;
        }else{
            $source="";
        }
        
        switch ($source) {

            case 'notification':
             include 'include/path/notification.php';
            break;

            case 'Sign':
             include 'include/path/join.php';
            break;
            
            default:
              include 'include/path/default.php';
            break;
        }

    ?>    

   <?php include 'include/path/footer.php'; ?>

        <!-- Scroll Top Start -->
        <a href="#" class="scroll-top" id="scroll-top">
            <i class="arrow-top fal fa-long-arrow-up"></i>
            <i class="arrow-bottom fal fa-long-arrow-up"></i>
        </a>
        <!-- Scroll Top End -->
    </div>

    <div id="site-main-mobile-menu" class="site-main-mobile-menu">
        <div class="site-main-mobile-menu-inner">
            <div class="mobile-menu-header">
                <div class="mobile-menu-logo">
                    <a href="index.html"><img src="assets/images/logo/dark-logo.png" alt=""></a>
                </div>
                <div class="mobile-menu-close">
                    <button class="toggle">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-menu-content">
                <nav class="site-mobile-menu">
                    <ul>
                        <li class="has-children position-static">
                            <a href="#"><span class="menu-text">Home</span></a>
                            <span class="menu-toggle"><i class="far fa-angle-down"></i></span>

                            <ul class="mega-menu">
                                <li>
                                    <ul>
                                        <li><a href="index.html"><span class="menu-text">MaxCoach Education <span class="badge">Hot</span></span></a></li>
                                        <li><a href="index-2.html"><span class="menu-text">Course Portal</span></a></li>
                                        <li><a href="index-3.html"><span class="menu-text">Distant Learning <span class="badge">Hot</span></span></a></li>
                                        <li><a href="index-4.html"><span class="menu-text">Multimedia Pedagogy</span></a></li>
                                        <li><a href="index-5.html"><span class="menu-text">Modern Schooling</span></a></li>
                                        <li><a href="index-6.html"><span class="menu-text">Remote Training</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li><a href="index-7.html"><span class="menu-text">Health Coaching</span></a></li>
                                        <li><a href="index-8.html"><span class="menu-text">Gym Coaching</span></a></li>
                                        <li><a href="index-9.html"><span class="menu-text">Business</span></a></li>
                                        <li><a href="index-10.html"><span class="menu-text">Artist <span class="badge primary">New</span></span></a></li>
                                        <li><a href="index-11.html"><span class="menu-text">Kitchen Coach <span class="badge primary">New</span></span></a></li>
                                        <li><a href="index-12.html"><span class="menu-text">Motivation <span class="badge primary">New</span></span></a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-50">
                                    <ul>
                                        <li><a href="#"><img src="assets/images/menu/mega-menu.jpg" alt="menu-image"></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#"><span class="menu-text">Pages</span></a>
                            <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                            <ul class="sub-menu">
                                <li><a href="start-here.html"><span class="menu-text">Start Here</span></a></li>
                                <li><a href="success-story.html"><span class="menu-text">Success Story</span></a></li>
                                <li><a href="about-me.html"><span class="menu-text">About me</span></a></li>
                                <li><a href="about-us-1.html"><span class="menu-text">About us 01</span></a></li>
                                <li><a href="about-us-2.html"><span class="menu-text">About us 02</span></a></li>
                                <li><a href="about-us-3.html"><span class="menu-text">About us 03</span></a></li>
                                <li><a href="contact-me.html"><span class="menu-text">Contact me</span></a></li>
                                <li><a href="contact-us.html"><span class="menu-text">Contact us</span></a></li>
                                <li><a href="purchase-guide.html"><span class="menu-text">Purchase Guide</span></a></li>
                                <li><a href="privacy-policy.html"><span class="menu-text">Privacy Policy</span></a></li>
                                <li><a href="terms-of-service.html"><span class="menu-text">Terms of Service</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#"><span class="menu-text">Courses</span></a>
                            <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                            <ul class="sub-menu">
                                <li><a href="courses-grid-1.html"><span class="menu-text">Courses Grid 01</span></a></li>
                                <li><a href="courses-grid-2.html"><span class="menu-text">Courses Grid 02</span></a></li>
                                <li><a href="courses-grid-3.html"><span class="menu-text">Courses Grid 03</span></a></li>
                                <li><a href="membership-levels.html"><span class="menu-text">Membership Levels</span></a></li>
                                <li><a href="become-a-teacher.html"><span class="menu-text">Become a Teacher</span></a></li>
                                <li><a href="profile.html"><span class="menu-text">Profile</span></a></li>
                                <li><a href="checkout.html"><span class="menu-text">Checkout</span></a></li>
                                <li class="has-children">
                                    <a href="course-details-sticky-feature-bar.html"><span class="menu-text">Single Layout</span></a>
                                    <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                    <ul class="sub-menu">
                                        <li><a href="course-details-free.html"><span class="menu-text">Free Course</span></a></li>
                                        <li><a href="course-details-sticky-feature-bar.html"><span class="menu-text">Sticky Features Bar</span></a></li>
                                        <li><a href="course-details-standard-sidebar.html"><span class="menu-text">Standard Sidebar</span></a></li>
                                        <li><a href="course-details-no-sidebar.html"><span class="menu-text">No Sidebar</span></a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#"><span class="menu-text">Event</span></a>
                            <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                            <ul class="sub-menu">
                                <li><a href="event.html"><span class="menu-text">Event</span></a></li>
                                <li><a href="zoom-meetings.html"><span class="menu-text">Zoom Meetings</span></a></li>
                                <li><a href="event-details.html"><span class="menu-text">Event Details</span></a></li>
                                <li><a href="zoom-event-details.html"><span class="menu-text">Zoom Meeting Details</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#"><span class="menu-text">Blog</span></a>
                            <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                            <ul class="sub-menu">
                                <li><a href="blog-grid.html"><span class="menu-text">Blog Grid</span></a></li>
                                <li><a href="blog-masonry.html"><span class="menu-text">Blog Masonry</span></a></li>
                                <li><a href="blog-classic.html"><span class="menu-text">Blog Classic</span></a></li>
                                <li><a href="blog-list.html"><span class="menu-text">Blog List</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#"><span class="menu-text">Shop</span></a>
                            <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                            <ul class="sub-menu">
                                <li><a href="shop.html"><span class="menu-text">Shop Left Sidebar</span></a></li>
                                <li><a href="shop-right-sidebar.html"><span class="menu-text">Shop Right Sidebar</span></a></li>
                                <li><a href="shopping-cart.html"><span class="menu-text">Cart</span></a></li>
                                <li><a href="shopping-cart-empty.html"><span class="menu-text">Cart Empty</span></a></li>
                                <li><a href="wishlist.html"><span class="menu-text">Wishlist</span></a></li>
                                <li><a href="product-details.html"><span class="menu-text">Single Product</span></a></li>
                                <li><a href="my-account.html"><span class="menu-text">My Account</span></a></li>
                                <li><a href="login-register.html"><span class="menu-text">Login Register</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- JS
============================================ -->

    <!-- Vendors JS -->
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.1.0.min.js"></script>
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/parallax.min.js"></script>
<script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Main Activation JS -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>





</body>


<!-- Mirrored from live.hasthemes.com/html/4/maxcoach-preview/maxcoach/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Apr 2021 11:22:32 GMT -->
</html>