<!DOCTYPE html>
<html lang="zxx">

<?php 
    require_once 'connection.php';
?>


<head>
    <meta charset="utf-8">
    <meta name="description" content="Fafo">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="HiBootstrap">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <title>Mystery Flavours - Eat today,Live another day</title>
    <link rel="icon" href="assets/images/tab.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css" type="text/css" media="all" />

    <link rel="stylesheet" href="assets/css/animate.min.css" type="text/css" media="all" />

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" type="text/css" media="all" />

    <link rel="stylesheet" href="assets/css/slick.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/slick-theme.css" type="text/css" media="all" />

    <link rel="stylesheet" href="assets/css/jquery-ui.css" type="text/css" media="all" />

    <link rel="stylesheet" href="assets/css/jquery.timepicker.min.css" type="text/css" media="all" />

    <link rel="stylesheet" href="assets/css/meanmenu.min.css" type="text/css" media="all" />

    <link rel="stylesheet" href="assets/css/magnific-popup.min.css" type="text/css" media="all" />

    <link rel='stylesheet' href='assets/css/icofont.min.css' type="text/css" media="all" />

    <link rel='stylesheet' href='assets/css/flaticon.css' type="text/css" media="all" />

    <link rel='stylesheet' href='assets/css/settings.css' type="text/css" media="all" />
    <link rel='stylesheet' href='assets/css/layers.css' type="text/css" media="all" />
    <link rel='stylesheet' href='assets/css/navigation.css' type="text/css" media="all" />

    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />

    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all" />

</head>

<body>

    <div class="preloader bg-main">
        <div class="preloader-wrapper">
            <div class="preloader-grid">
                <div class="preloader-grid-item preloader-grid-item-1"></div>
                <div class="preloader-grid-item preloader-grid-item-2"></div>
                <div class="preloader-grid-item preloader-grid-item-3"></div>
                <div class="preloader-grid-item preloader-grid-item-4"></div>
                <div class="preloader-grid-item preloader-grid-item-5"></div>
                <div class="preloader-grid-item preloader-grid-item-6"></div>
                <div class="preloader-grid-item preloader-grid-item-7"></div>
                <div class="preloader-grid-item preloader-grid-item-8"></div>
                <div class="preloader-grid-item preloader-grid-item-9"></div>
            </div>
        </div>
    </div>


    <div class="topbar bg-main">
        <div class="container">
            <div class="topbar-inner">
                <div class="topbar-item topbar-padding">
                    <ul class="social-list social-list-white">
                        <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                        <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                        <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                        <li><a href="#"><i class="flaticon-youtube"></i></a></li>
                        <li><a href="#"><i class="flaticon-instagram-1"></i></a></li>
                    </ul>
                </div>
                <div class="topbar-item">
                    <div
                        class="topbar-right d-flex flex-wrap topbar-right justify-content-center justify-content-md-start full-height">
                        <div class="topbar-right-item topbar-padding color-white">
                            <i class="flaticon-clock"></i>
                            Friday Closed
                        </div>
                        <div class="topbar-right-item topbar-padding color-white">
                            <i class="flaticon-placeholder-1"></i>
                            12 Poor Street, New York.
                        </div>
                        <div class="topbar-right-item topbar-padding color-white">
                            <i class="flaticon-smartphone-call"></i>
                            <a href="tel:001-964-565-87652" class="color-white">+1 964 565 87652</a>
                        </div>
                        <div class="topbar-right-item topbar-padding language-button language-option">
                            <button class="dropdown-toggle color-white lang-compo" type="button" id="language1"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="assets/images/uk.png" alt="flag">
                                English
                            </button>
                            <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language1">
                                <a class="dropdown-item" href="#">
                                    <img src="assets/images/uk.png" alt="flag">
                                    English
                                </a>
                                <a class="dropdown-item" href="#">
                                    <img src="assets/images/germany.png" alt="flag">
                                    Deutsch
                                </a>
                                <a class="dropdown-item" href="#">
                                    <img src="assets/images/china.png" alt="flag">
                                    简体中文
                                </a>
                                <a class="dropdown-item" href="#">
                                    <img src="assets/images/arab.png" alt="flag">
                                    العربيّة
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <header>

        <div class="fixed-top">
            <div class="navbar-area navbar-dark">

                <div class="mobile-nav">
                    <a href="index.html" class="mobile-brand">
                        <img src="assets/images/logo.png" alt="logo" class="blue-logo">
                    </a>

                    <div class="navbar-option d-flex align-items-center">
                        <div class="navbar-option-item navbar-option-dots mobile-hide">
                            <button class="dropdown-toggle" type="button" id="mobileOptionDropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-menu-1"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="mobileOptionDropdown">
                                <div class="navbar-option-item navbar-option-cart">
                                    <a href="#" class="productCart"><i class="flaticon-supermarket-basket"></i></a>
                                    <span class="option-badge">2</span>
                                </div>
                                <div class="navbar-option-item navbar-option-order">
                                    <a href="shops-grid.html" class="btn">
                                        <i class="flaticon-shopping-cart-black-shape"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-option-item navbar-option-authentication">
                            <button class="navbar-authentication-button" type="button" id="auth2"
                                data-bs-toggle="dropdown" aria-haspopup="true"><i
                                    class="flaticon-add-user"></i></button>
                            <div class="authentication-box dropdown-menu" aria-labelledby="auth2">
                                <div class="authentication-close"><i class="flaticon-cancel"></i></div>
                                <div class="authentication-body">
                                    <ul class="authentication-tab">
                                        <li class="authentication-tab-item active" data-authentication-tab="1">Log In
                                        </li>
                                        <li class="authentication-tab-item" data-authentication-tab="2">Sign Up</li>
                                    </ul>
                                    <div class="authentication-details">
                                        <div class="authentication-details-item active" data-authentication-details="1">
                                            <form>
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="User Name" />
                                                    </div>
                                                </div>
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <input type="password" class="form-control"
                                                            placeholder="Password" />
                                                    </div>
                                                </div>
                                                <div class="authentication-action mb-20">
                                                    <div class="authentication-action-item">
                                                        <a href="forget-password.html">Forget Password?</a>
                                                    </div>
                                                    <div class="authentication-action-item">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="check3">
                                                            <label class="custom-control-label" for="check3">Remember
                                                                Me</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="authentication-btn">
                                                    <button class="btn full-width btn-border mb-20">Log In</button>
                                                    <button class="btn full-width"><i
                                                            class="icofont-google-plus"></i>Log In With Google</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="authentication-details-item" data-authentication-details="2">
                                            <form>
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="User Name" />
                                                    </div>
                                                </div>
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Email" />
                                                    </div>
                                                </div>
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <input type="password" class="form-control"
                                                            placeholder="Password" />
                                                    </div>
                                                </div>
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <input type="password" class="form-control"
                                                            placeholder="Confirm Password" />
                                                    </div>
                                                </div>
                                                <div class="authentication-action mb-20">
                                                    <div class="authentication-action-item">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="check4">
                                                            <label class="custom-control-label" for="check4">I agree
                                                                that my submitted data is being collected and stored.
                                                                For further details on handling user data, see our <a
                                                                    href="privacy-policy.html">Privacy
                                                                    Policy</a>.</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="authentication-btn">
                                                    <button class="btn full-width btn-border mb-20">Log In</button>
                                                    <button class="btn full-width"><i
                                                            class="icofont-google-plus"></i>Log In With Google</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-option-item navbar-option-search">
                            <button class="dropdown-toggle" type="button" id="search2" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-loupe"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="search2">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <button><i class="flaticon-loupe"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="navbar-option-item navbar-option-cart mobile-block">
                            <a href="#" class="productCart"><i class="flaticon-supermarket-basket"></i></a>
                            <span class="option-badge">2</span>
                        </div>
                        <div class="navbar-option-item navbar-option-order mobile-block">
                            <a href="shops-grid.html" class="btn">
                                <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="main-nav">
                    <div class="container">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/images/logo.png" alt="logo" class="logo">
                            </a>

                            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">HOME</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="index.html" class="nav-link">Home 1 (With Revolution)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="index-2.html" class="nav-link">Home 2 (With Revolution)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="index-3.html" class="nav-link">Home 3 (With Revolution)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="index-1-without-revolution.html" class="nav-link">Home 4
                                                    (Without Revolution)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="index-2-without-revolution.html" class="nav-link">Home 5
                                                    (Without Revolution)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="index-3-without-revolution.html" class="nav-link">Home 6
                                                    (Without Revolution)</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link active">MENU</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">PAGES</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="about-us.html" class="nav-link">About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="faqs.html" class="nav-link">FAQ's</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="our-history.html" class="nav-link">Our History</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="services.html" class="nav-link">Services</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link dropdown-toggle">Team</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item">
                                                        <a href="our-team.html" class="nav-link">Our Team</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="team-details.html" class="nav-link">Team Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link dropdown-toggle">Restaurent</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item">
                                                        <a href="careers.html" class="nav-link">Careers</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="deals.html" class="nav-link">Deals</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="reservation.html" class="nav-link">Reservation</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="catering.html" class="nav-link">Catering</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link dropdown-toggle">Shop</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item">
                                                        <a href="shops-grid.html" class="nav-link">Shop Grid</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="shop-details.html" class="nav-link">Shop Details</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="cart.html" class="nav-link">Cart</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="wishlist.html" class="nav-link">Wishlist</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="checkout.html" class="nav-link">Checkout</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="tracking-order.html" class="nav-link">Tracking
                                                            Order</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="my-account.html" class="nav-link">My Account</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a href="testimonial.html" class="nav-link">Testimonial</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link dropdown-toggle">Others</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item">
                                                        <a href="terms-conditions.html" class="nav-link">Terms &
                                                            Conditions</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="privacy-policy.html" class="nav-link">Privacy
                                                            Policy</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="search-page.html" class="nav-link">Search Page</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="forget-password.html" class="nav-link">Forget
                                                            Password</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="404.html" class="nav-link">404 Error Page</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">BLOG</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="blogs-grid-without-sidebar.html" class="nav-link">Blog Grid
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="blogs-list-with-sidebar.html" class="nav-link">Blog List </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="blogs-3.html" class="nav-link">Blog 3 </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="blog-details.html" class="nav-link">Blog Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact-us.html" class="nav-link">CONTACT US</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="navbar-option d-flex align-items-center">
                                <div class="navbar-option-item navbar-option-authentication">
                                    <button class="navbar-authentication-button" type="button" id="auth1"
                                        data-bs-toggle="dropdown" aria-haspopup="true"><i
                                            class="flaticon-add-user"></i></button>
                                    <div class="authentication-box dropdown-menu" aria-labelledby="auth1">
                                        <div class="authentication-close"><i class="flaticon-cancel"></i></div>
                                        <div class="authentication-body">
                                            <ul class="authentication-tab">
                                                <li class="authentication-tab-item active" data-authentication-tab="1">
                                                    Log In</li>
                                                <li class="authentication-tab-item" data-authentication-tab="2">Sign Up
                                                </li>
                                            </ul>
                                            <div class="authentication-details">
                                                <div class="authentication-details-item active"
                                                    data-authentication-details="1">
                                                    <form>
                                                        <div class="form-group mb-20">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="User Name" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <div class="input-group">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Password" />
                                                            </div>
                                                        </div>
                                                        <div class="authentication-action mb-20">
                                                            <div class="authentication-action-item">
                                                                <a href="forget-password.html">Forget Password?</a>
                                                            </div>
                                                            <div class="authentication-action-item">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="check1">
                                                                    <label class="custom-control-label"
                                                                        for="check1">Remember Me</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="authentication-btn">
                                                            <button class="btn full-width btn-border mb-20">Log
                                                                In</button>
                                                            <button class="btn full-width"><i
                                                                    class="icofont-google-plus"></i>Log In With
                                                                Google</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="authentication-details-item"
                                                    data-authentication-details="2">
                                                    <form>
                                                        <div class="form-group mb-20">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="User Name" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Email" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <div class="input-group">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Password" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <div class="input-group">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Confirm Password" />
                                                            </div>
                                                        </div>
                                                        <div class="authentication-action mb-20">
                                                            <div class="authentication-action-item">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="check2">
                                                                    <label class="custom-control-label" for="check2">I
                                                                        agree that my submitted data is being collected
                                                                        and stored. For further details on handling user
                                                                        data, see our <a
                                                                            href="privacy-policy.html">Privacy
                                                                            Policy</a>.</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="authentication-btn">
                                                            <button class="btn full-width btn-border mb-20">Log
                                                                In</button>
                                                            <button class="btn full-width"><i
                                                                    class="icofont-google-plus"></i>Log In With
                                                                Google</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="navbar-option-item navbar-option-search">
                                    <button class="dropdown-toggle" type="button" id="search1" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="flaticon-loupe"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="search1">
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <button><i class="flaticon-loupe"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="navbar-option-item navbar-option-cart">
                                    <a href="#" class="productCart"><i class="flaticon-supermarket-basket"></i></a>
                                    <span class="option-badge">2</span>
                                </div>
                                <div class="navbar-option-item navbar-option-order">
                                    <a href="shops-grid.html" class="btn text-nowrap">
                                        Order Online <i class="flaticon-shopping-cart-black-shape"></i>
                                    </a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </header>


    <div class="header-bg header-bg-page">
        <div class="header-padding position-relative">
            <div class="header-page-shape">
                <div class="header-page-shape-item">
                    <img src="assets/images/header-shape-1.png" alt="shape">
                </div>
                <div class="header-page-shape-item">
                    <img src="assets/images/header-shape-2.png" alt="shape">
                </div>
                <div class="header-page-shape-item">
                    <img src="assets/images/header-shape-3.png" alt="shape">
                </div>
                <div class="header-page-shape-item">
                    <img src="assets/images/header-shape-1.png" alt="shape">
                </div>
                <div class="header-page-shape-item">
                    <img src="assets/images/header-shape-4.png" alt="shape">
                </div>
                <div class="header-page-shape-item">
                    <img src="assets/images/header-shape-1.png" alt="shape">
                </div>
                <div class="header-page-shape-item">
                    <img src="assets/images/header-shape-3.png" alt="shape">
                </div>
            </div>
            <div class="container">
                <div class="header-page-content">
                    <h1>Our Menu</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Menu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <section class="menu-section bg-black p-tb-100">
        <div class="container position-relative">
            <div class="section-title">
                <small>Menu</small>
                <h2 class="color-white">Just Choose From The Best</h2>
            </div>
            <div class="menu-main-carousel-area">
                <div class="menu-main-thumb-nav">
                    <div class="menu-main-thumb-item menu-main-thumb-black">
                        <div class="menu-main-thumb-inner">
                            <img src="assets/images/menu-2.png" alt="menu">
                            <p>PIZZA</p>
                        </div>
                    </div>
                    <div class="menu-main-thumb-item menu-main-thumb-black">
                        <div class="menu-main-thumb-inner">
                            <img src="assets/images/menu-1.png" alt="menu">
                            <p>BURGER</p>
                        </div>
                    </div>
                    <div class="menu-main-thumb-item menu-main-thumb-black">
                        <div class="menu-main-thumb-inner">
                            <img src="assets/images/menu-3.png" alt="menu">
                            <p>SANDWITCH</p>
                        </div>
                    </div>
                    <div class="menu-main-thumb-item menu-main-thumb-black">
                        <div class="menu-main-thumb-inner">
                            <img src="assets/images/menu-4.png" alt="menu">
                            <p>SHAKE</p>
                        </div>
                    </div>
                    <div class="menu-main-thumb-item menu-main-thumb-black">
                        <div class="menu-main-thumb-inner">
                            <img src="assets/images/menu-5.png" alt="menu">
                            <p>ICE-CREAME</p>
                        </div>
                    </div>
                    <div class="menu-main-thumb-item menu-main-thumb-black">
                        <div class="menu-main-thumb-inner">
                            <img src="assets/images/menu-6.png" alt="menu">
                            <p>DESSERT</p>
                        </div>
                    </div>
                </div>
                <div class="menu-main-details-for">
                    <div class="menu-main-details-item">
                        <div class="receipe-grid receipe-grid-three">
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/pizza-receipe-1.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Pepperoni Pizza</a></h3>
                                            <h4>$4.59<del>$7.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/pizza-receipe-2.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Beefka Pizza</a></h3>
                                            <h4>$5.12<del>$6.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/pizza-receipe-3.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Chicken Pizza</a></h3>
                                            <h4>$6.57<del>$7.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/pizza-receipe-4.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Avocado Pizza</a></h3>
                                            <h4>$5.12<del>$6.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/pizza-receipe-5.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Vegan Pizza</a></h3>
                                            <h4>$7.45<del>$8.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/pizza-receipe-6.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Meat Pizza</a></h3>
                                            <h4>$8.45<del>$9.24</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/pizza-receipe-2.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Ball Pizza</a></h3>
                                            <h4>$9.45<del>$10.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/pizza-receipe-1.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Green Pizza</a></h3>
                                            <h4>$8.45<del>$12.01</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/pizza-receipe-4.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Pepperoni Pizza</a></h3>
                                            <h4>$4.59<del>$7.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/pizza-receipe-1.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Pepperoni Pizza</a></h3>
                                            <h4>$4.59<del>$7.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/pizza-receipe-2.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Beefka Pizza</a></h3>
                                            <h4>$5.12<del>$6.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/pizza-receipe-3.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Chicken Pizza</a></h3>
                                            <h4>$6.57<del>$7.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="pro.html" class="btn load-more-btn">
                                <span class="load-more-text">Load More</span>
                                <span class="load-more-icon"><i class="icofont-refresh"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-main-details-item">
                        <div class="receipe-grid receipe-grid-three">
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/burger-receipe-1.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Pepperoni Burger</a></h3>
                                            <h4>$4.59<del>$7.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/burger-receipe-2.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Beefka Burger</a></h3>
                                            <h4>$5.12<del>$6.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/burger-receipe-3.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Chicken Burger</a></h3>
                                            <h4>$6.57<del>$7.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/burger-receipe-4.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Avocado Burger</a></h3>
                                            <h4>$5.12<del>$6.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/burger-receipe-5.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Vegan Burger</a></h3>
                                            <h4>$7.45<del>$8.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/burger-receipe-6.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Meat Burger</a></h3>
                                            <h4>$8.45<del>$9.24</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/burger-receipe-7.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Ball Burger</a></h3>
                                            <h4>$9.45<del>$10.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/burger-receipe-8.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Green Burger</a></h3>
                                            <h4>$8.45<del>$12.01</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/burger-receipe-9.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Pepperoni Burger</a></h3>
                                            <h4>$4.59<del>$7.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/burger-receipe-5.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Pepperoni Burger</a></h3>
                                            <h4>$4.59<del>$7.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/burger-receipe-2.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Beefka Burger</a></h3>
                                            <h4>$5.12<del>$6.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/burger-receipe-8.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Chicken Burger</a></h3>
                                            <h4>$6.57<del>$7.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="pro.html" class="btn load-more-btn">
                                <span class="load-more-text">Load More</span>
                                <span class="load-more-icon"><i class="icofont-refresh"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-main-details-item">
                        <div class="receipe-grid receipe-grid-three">
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/sandwitch-receipe-1.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Pepperoni Sandwitch</a></h3>
                                            <h4>$4.59<del>$7.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/sandwitch-receipe-2.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Beefka Sandwitch</a></h3>
                                            <h4>$5.12<del>$6.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/sandwitch-receipe-3.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Chicken Sandwitch</a></h3>
                                            <h4>$6.57<del>$7.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/sandwitch-receipe-4.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Avocado Sandwitch</a></h3>
                                            <h4>$5.12<del>$6.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/sandwitch-receipe-5.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Vegan Sandwitch</a></h3>
                                            <h4>$7.45<del>$8.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/sandwitch-receipe-6.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Meat Sandwitch</a></h3>
                                            <h4>$8.45<del>$9.24</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/sandwitch-receipe-7.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Ball Sandwitch</a></h3>
                                            <h4>$9.45<del>$10.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/sandwitch-receipe-8.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Green Sandwitch</a></h3>
                                            <h4>$8.45<del>$12.01</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/sandwitch-receipe-9.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Pepperoni Sandwitch</a></h3>
                                            <h4>$4.59<del>$7.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/sandwitch-receipe-3.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Pepperoni Sandwitch</a></h3>
                                            <h4>$4.59<del>$7.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/sandwitch-receipe-6.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Beefka Sandwitch</a></h3>
                                            <h4>$5.12<del>$6.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/sandwitch-receipe-1.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Chicken Sandwitch</a></h3>
                                            <h4>$6.57<del>$7.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="pro.html" class="btn load-more-btn">
                                <span class="load-more-text">Load More</span>
                                <span class="load-more-icon"><i class="icofont-refresh"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-main-details-item">
                        <div class="receipe-grid receipe-grid-three">
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/shake-receipe-1.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Strawberry Shake</a></h3>
                                            <h4>$4.59<del>$7.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/shake-receipe-2.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Cream Shake</a></h3>
                                            <h4>$5.12<del>$6.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/shake-receipe-3.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Cherry Venilla</a></h3>
                                            <h4>$6.57<del>$7.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/shake-receipe-4.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Fruty Pebble</a></h3>
                                            <h4>$5.12<del>$6.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/shake-receipe-5.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Oreo Shake</a></h3>
                                            <h4>$7.45<del>$8.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/shake-receipe-6.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Banana Shake</a></h3>
                                            <h4>$8.45<del>$9.24</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/shake-receipe-7.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Italiano Shake</a></h3>
                                            <h4>$9.45<del>$10.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/shake-receipe-8.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Green Cream</a></h3>
                                            <h4>$8.45<del>$12.01</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/shake-receipe-9.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Cappuccino Shake</a></h3>
                                            <h4>$4.59<del>$7.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/shake-receipe-4.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Cherry Shake</a></h3>
                                            <h4>$4.59<del>$7.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/shake-receipe-1.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Strawberry Shake</a></h3>
                                            <h4>$5.12<del>$6.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/shake-receipe-7.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Cherry Venilla</a></h3>
                                            <h4>$6.57<del>$7.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="pro.html" class="btn load-more-btn">
                                <span class="load-more-text">Load More</span>
                                <span class="load-more-icon"><i class="icofont-refresh"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-main-details-item">
                        <div class="receipe-grid receipe-grid-three">
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/icecream-receipe-1.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Italiano Icecream</a></h3>
                                            <h4>$4.59<del>$7.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/icecream-receipe-2.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Creamy Icecream</a></h3>
                                            <h4>$5.12<del>$6.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/icecream-receipe-3.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Chocolate Layer</a></h3>
                                            <h4>$6.57<del>$7.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/icecream-receipe-4.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Regular Cream</a></h3>
                                            <h4>$5.12<del>$6.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/icecream-receipe-5.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Light Flavour</a></h3>
                                            <h4>$7.45<del>$8.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/icecream-receipe-6.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">French Icecream</a></h3>
                                            <h4>$8.45<del>$9.24</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/icecream-receipe-7.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Creamy Icecream</a></h3>
                                            <h4>$9.45<del>$10.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/icecream-receipe-8.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Milk Flavour</a></h3>
                                            <h4>$8.45<del>$12.01</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/icecream-receipe-9.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Perfect Pear</a></h3>
                                            <h4>$4.59<del>$7.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/icecream-receipe-5.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Italiano Icecream</a></h3>
                                            <h4>$4.59<del>$7.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/icecream-receipe-2.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">French Icecream</a></h3>
                                            <h4>$5.12<del>$6.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/icecream-receipe-6.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Light Icecream</a></h3>
                                            <h4>$6.57<del>$7.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="pro.html" class="btn load-more-btn">
                                <span class="load-more-text">Load More</span>
                                <span class="load-more-icon"><i class="icofont-refresh"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-main-details-item">
                        <div class="receipe-grid receipe-grid-three">
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/dessert-receipe-1.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Frozen</a></h3>
                                            <h4>$4.59<del>$7.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/dessert-receipe-2.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Decadent</a></h3>
                                            <h4>$5.12<del>$6.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/dessert-receipe-3.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Zesty</a></h3>
                                            <h4>$6.57<del>$7.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/dessert-receipe-4.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Luscious</a></h3>
                                            <h4>$5.12<del>$6.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/dessert-receipe-5.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Creamy</a></h3>
                                            <h4>$7.45<del>$8.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/dessert-receipe-6.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Oreo Mixed</a></h3>
                                            <h4>$8.45<del>$9.24</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/dessert-receipe-7.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Zesty</a></h3>
                                            <h4>$9.45<del>$10.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/dessert-receipe-8.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Luscious</a></h3>
                                            <h4>$8.45<del>$12.01</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/dessert-receipe-9.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Creamy</a></h3>
                                            <h4>$4.59<del>$7.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/dessert-receipe-3.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Oreo Mixed</a></h3>
                                            <h4>$4.59<del>$7.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/dessert-receipe-6.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Frozen</a></h3>
                                            <h4>$5.12<del>$6.59</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                                <div class="receipe-item-inner">
                                    <div class="receipe-image">
                                        <img src="assets/images/dessert-receipe-8.png" alt="receipe">
                                    </div>
                                    <div class="receipe-content">
                                        <div class="receipe-info">
                                            <h3><a href="shop-details.html">Creamy</a></h3>
                                            <h4>$6.57<del>$7.12</del></h4>
                                        </div>
                                        <div class="receipe-cart">
                                            <a href="#">
                                                <i class="flaticon-supermarket-basket"></i>
                                                <i class="flaticon-supermarket-basket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="pro.html" class="btn load-more-btn">
                                <span class="load-more-text">Load More</span>
                                <span class="load-more-icon"><i class="icofont-refresh"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="step-section p-tb-100 bg-black">
        <div class="container">
            <div class="section-title">
                <h2 class="color-white">3 Easy Steps To Enjoy</h2>
            </div>
            <div class="steps-box">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="steps-item">
                            <h3>1. Choose</h3>
                            <p>Choose Your Best Combos From The Thousands Of Exciting Items.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="steps-item">
                            <h3>2. Pay</h3>
                            <p>Pay Through Online Easily. We Use The Most Safe way In Payment.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 offset-md-3 offset-lg-0">
                        <div class="steps-item">
                            <h3>3. Enjoy</h3>
                            <p>Enjoy Your Meal From The Core Of Heart & Feel The Taste Inside.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="bg-overlay-1 bg-black">
        <div class="footer-upper pt-100 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 order-2 order-lg-1">
                        <div class="footer-content-list footer-content-item">
                            <div class="footer-content-title">
                                <h3>Our Offer</h3>
                            </div>
                            <div class="d-flex justify-content-between flex-wrap flex-lg-nowrap desk-pad-right-30">
                                <ul class="footer-details footer-list">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="blogs-grid-without-sidebar.html">Blogs</a></li>
                                    <li><a href="faqs.html">FAQ's</a></li>
                                    <li><a href="reservation.html">Reservation</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                </ul>
                                <ul class="footer-details footer-list">
                                    <li><a href="our-team.html">Teams</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 order-1 order-lg-2">
                        <div class="footer-content-item text-start text-lg-center">
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/images/logo.png" alt="logo"></a>
                            </div>
                            <ul class="footer-details footer-address">
                                <li>12 Poor Street, New York, USA</li>
                                <li><span>Hotline:</span><a href="tel:001-964-565-87652">+1 964 565 87652</a></li>
                                <li><span>Email:</span><a
                                        href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#0f676a6363604f696e6960216c6062"><span
                                            class="__cf_email__"
                                            data-cfemail="4e262b2222210e282f2821602d2123">[email&#160;protected]</span></a>
                                </li>
                            </ul>
                            <div class="footer-follow">
                                <p>Follow Us:</p>
                                <ul class="social-list social-list-white">
                                    <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                    <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="flaticon-youtube"></i></a></li>
                                    <li><a href="#"><i class="flaticon-instagram-1"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 order-3">
                        <div class="footer-content-list footer-content-item desk-pad-left-30">
                            <div class="footer-content-title">
                                <h3>Open Hours</h3>
                            </div>
                            <ul class="footer-details footer-time">
                                <li>Saturday: <span>08:00 - 23.00</span></li>
                                <li>Sunday: <span>08:00 - 23.00</span></li>
                                <li>Monday: <span>08:00 - 21.00</span></li>
                                <li>Tuesday: <span>09:00 - 23.00</span></li>
                                <li>Wednesday: <span>08:00 - 23.00</span></li>
                                <li>Thursday: <span>08:00 - 23.00</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-lower">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="footer-lower-item">
                        <div class="footer-copyright-text footer-copyright-text-red">
                            <p>Copyright ©2021 Design &amp; Developed By <a href="https://hibootstrap.com/"
                                    target="_blank">HiBootstrap</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="cart-modal-wrapper">
        <div class="cart-modal modal-item">
            <div class="cart-modal-header">
                <h3 class="color-white">Cart 2</h3>
                <div class="cart-modal-close">
                    <i class="flaticon-cancel"></i>
                </div>
            </div>
            <div class="cart-modal-body">
                <h2 class="color-white">My Order</h2>
                <div class="cart-modal-product">
                    <div class="cart-modal-thumb">
                        <a href="shop-details.html">
                            <img src="assets/images/product-1.png" alt="product">
                        </a>
                    </div>
                    <div class="cart-modal-content">
                        <h4><a href="shop-details.html">Crispy Chicken Burger</a></h4>
                        <div class="cart-modal-action">
                            <div class="cart-modal-action-item">
                                <div class="cart-modal-quantity">
                                    <p>1</p>
                                    <p>x</p>
                                    <p class="cart-quantity-price">$ 4.50</p>
                                </div>
                            </div>
                            <div class="cart-modal-action-item">
                                <div class="cart-modal-delete">
                                    <a href="#"><i class="icofont-ui-delete"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-modal-product">
                    <div class="cart-modal-thumb">
                        <a href="shop-details.html">
                            <img src="assets/images/product-2.png" alt="product">
                        </a>
                    </div>
                    <div class="cart-modal-content">
                        <h4><a href="shop-details.html">Red Sause Pizza</a></h4>
                        <div class="cart-modal-action">
                            <div class="cart-modal-action-item">
                                <div class="cart-modal-quantity">
                                    <p>1</p>
                                    <p>x</p>
                                    <p class="cart-quantity-price">$ 3.50</p>
                                </div>
                            </div>
                            <div class="cart-modal-action-item">
                                <div class="cart-modal-delete">
                                    <a href="#"><i class="icofont-ui-delete"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-modal-total">
                    <p>Total</p>
                    <h3>$8.0</h3>
                </div>
                <div class="cart-modal-button">
                    <a href="checkout.html" class="btn full-width">Proceed To Checkout</a>
                    <a href="cart.html" class="btn btn-yellow full-width">View Shopping Cart</a>
                </div>


            </div>
        </div>
    </div>


    <div class="scroll-top" id="scrolltop">
        <div class="scroll-top-inner">
            <span><i class="flaticon-up-arrow"></i></span>
        </div>
    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/jquery-ui.js"></script>

    <script src="assets/js/jquery.timepicker.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/slick.min.js"></script>

    <script src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/jquery.themepunch.tools.min.js"></script>

    <script src="assets/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.video.min.js"></script>

    <script src="assets/js/wow.min.js"></script>

    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/form-validator.min.js"></script>

    <script src="assets/js/contact-form-script.js"></script>

    <script src="assets/js/jquery.meanmenu.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>


</html>