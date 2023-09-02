<?php require_once 'connection.php';?>
<?php
if($_SESSION['userid']!="")
{
?>
    <div id="tx" style="display:none;">

    </div>
<?php
}
?>

<div class="topbar bg-black">
    <div class="container">
        <div class="topbar-inner">
            <div class="topbar-item topbar-padding">
                <ul class="social-list social-list-white">
                    <li><a href="#"><i class="flaticon-facebook" title="Facebook"></i></a></li>
                    <li><a href="#"><i class="flaticon-twitter" title="Twitter"></i></a></li>
                    <li><a href="#"><i class="flaticon-linkedin" title="Linkedin"></i></a></li>
                    <li><a href="#"><i class="flaticon-youtube" title="Youtube"></i></a></li>
                    <li><a href="#"><i class="flaticon-instagram-1" title="Instagram"></i></a></li>
                </ul>
            </div>
            <div class="topbar-item">
                <div
                    class="topbar-right d-flex flex-wrap topbar-right justify-content-center justify-content-md-start full-height">

                    <div class="topbar-right-item topbar-padding color-white">
                        <i class="flaticon-email"></i>
                        FoodBeverages007@gmail.com
                    </div>
                    <div class="topbar-right-item topbar-padding color-white">
                        <i class="flaticon-phone-call"></i>
                        <a href="tel:8140422048" class="color-white">+91 8140422048</a>
                    </div>
                    <div class="topbar-right-item topbar-padding color-white">
                        <i class="flaticon-user"></i>
                        <?php
                        if($_SESSION['userid']=="")
                        {
                        ?>
                        <a href="login.php" class="color-white">Log in</a>
                        <?php
                        } 
                        else 
                        {
                        ?>
                        <a href="logout.php" class="color-white">Log out</a>
                        <?php
                        }
                        ?>
                    </div>


                    <!-- <div class="navbar-option-item navbar-option-authentication">
                    <button class="navbar-authentication-button"> <a href="login.php" class="color-white"><i class="flaticon-add-user fs"></i></a></button>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>


<header>

    <div class="fixed-top">
        <div class="navbar-area navbar-area-three">

            <div class="mobile-nav">
                <a href="index.html" class="mobile-brand">
                    <img src="assets/images/logo-black.png" alt="logo" class="blue-logo">
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
                        <button class="navbar-authentication-button" type="button" id="auth2" data-bs-toggle="dropdown"
                            aria-haspopup="true"><i class="flaticon-add-user"></i></button>
                        <div class="authentication-box dropdown-menu" aria-labelledby="auth2">
                            <div class="authentication-close"><i class="flaticon-cancel"></i></div>
                            <div class="authentication-body">
                                <ul class="authentication-tab">
                                    <li class="authentication-tab-item active" data-authentication-tab="1">Log In</li>
                                    <li class="authentication-tab-item" data-authentication-tab="2">Sign Up</li>
                                </ul>
                                <div class="authentication-details">
                                    <div class="authentication-details-item active" data-authentication-details="1">
                                        <form>
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="User Name" />
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
                                                        <input type="checkbox" class="custom-control-input" id="check3">
                                                        <label class="custom-control-label" for="check3">Remember
                                                            Me</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="authentication-btn">
                                                <button class="btn full-width btn-border mb-20">Log In</button>
                                                <button class="btn full-width"><i class="icofont-google-plus"></i>Log In
                                                    With Google</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="authentication-details-item" data-authentication-details="2">
                                        <form>
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="User Name" />
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
                                                        <input type="checkbox" class="custom-control-input" id="check4">
                                                        <label class="custom-control-label" for="check4">I agree that my
                                                            submitted data is being collected and stored. For further
                                                            details on handling user data, see our <a
                                                                href="privacy-policy.html">Privacy Policy</a>.</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="authentication-btn">
                                                <button class="btn full-width btn-border mb-20">Log In</button>
                                                <button class="btn full-width"><i class="icofont-google-plus"></i>Log In
                                                    With Google</button>
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
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/images/logo-black.png" title='Eat today,Live another day' alt="logo"
                                class="logo logo1">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link">HOME</a>

                                </li>
                                <li class="nav-item">
                                    <a href="aboutus.php" class="nav-link">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">items</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">

                                        </li>
                                        <li class="nav-item">
                                            <a href="faqs.php" class="nav-link">FAQ's</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="our-history.php" class="nav-link">Our History</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="services.php" class="nav-link">Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link dropdown-toggle">Team</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="our-team.php" class="nav-link">Our Team</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="team-details.php" class="nav-link">Team Details</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="team-profile.php" class="nav-link">Team Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link dropdown-toggle">Restaurent</a>
                                            <ul class="dropdown-menu">
                                                <!-- <li class="nav-item">
                                                    <a href="careers.php" class="nav-link">Careers</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="deals.html" class="nav-link">Deals</a>
                                                </li> -->
                                                <li class="nav-item">
                                                    <a href="reservation.php" class="nav-link">Reservation</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="catering.php" class="nav-link">Catering</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- <li class="nav-item">
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
                                                    <a href="tracking-order.html" class="nav-link">Tracking Order</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="my-account.html" class="nav-link">My Account</a>
                                                </li>
                                            </ul>
                                        </li> -->
                                        <li class="nav-item">
                                            <a href="testimonial.php" class="nav-link">Testimonial</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link dropdown-toggle">Others</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="terms-conditions.php#terms" class="nav-link">Terms &
                                                        Conditions</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="privacy-policy.php#privacy" class="nav-link">Privacy Policy</a>
                                                </li>
                                                <!-- <li class="nav-item">
                                                    <a href="search-page.html" class="nav-link">Search Page</a>
                                                </li> -->
                                                <li class="nav-item">
                                                    <a href="forgotpassword.php" class="nav-link">Forget Password</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="coming-soon.php" class="nav-link">Coming Soon</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a href="404.html" class="nav-link">404 Error Page</a>
                                        </li> -->
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Dish</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="allfixthali.php" class="nav-link">All Fixthali </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="allitem.php" class="nav-link">All Items </a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a href="blogs-3.html" class="nav-link">Blog 3 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">Blog Details</a>
                                        </li> -->
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contactus.php" class="nav-link">CONTACT US</a>
                                </li>
                            </ul>
                        </div>

                        <div class="navbar-option d-flex align-items-center">


                            <div class="navbar-option-item navbar-option-cart">
                                <a href="cart.php" class="productCart"><i class="flaticon-supermarket-basket"></i></a>
                                <span class="option-badge">0</span>
                            </div>
                            <div class="navbar-option-item navbar-option-order">
                                <a href="allfixthali.php" class="btn text-nowrap">
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