<?php 
   require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="zxx">

<?php require_once 'head.php';?>

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


    <?php require_once 'header.php';?>


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
                    <h1>Our Service</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Service</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <section class="service-section p-tb-100 bg-black">
        <div class="container-fluid">
            <div class="container">
                <div class="section-title">
                    <h2 class="color-white">We Offer 3 Kinds Of Services</h2>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                        <div class="service-item">
                            <div class="service-image">
                                <img src="assets/images/service-1.jpg" alt="service">
                            </div>
                            <div class="service-content">
                                <h3>1. Dine In</h3>
                                <p>Choose Your Best Dishes From The Thousands Of Exciting Items.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                        <div class="service-item">
                            <div class="service-image">
                                <img src="assets/images/service-2.png" alt="service">
                            </div>
                            <div class="service-content">
                                <h3>2. Take Away</h3>
                                <p>Choose Your Best Dishes From The Thousands Of Exciting Items.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 pb-30 offset-md-3 offset-lg-0">
                        <div class="service-item">
                            <div class="service-image">
                                <img src="assets/images/service-3.jpg" alt="service">
                            </div>
                            <div class="service-content">
                                <h3>3. Home Delivery</h3>
                                <p>Choose Your Best Dishes From The Thousands Of Exciting Items.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="video-section p-tb-100">
        <div class="container">
            <div class="video-button">
                <a href="https://www.youtube.com/watch?v=h_YmYLYi65k" id="video-popup"><i
                        class="flaticon-play-button"></i></a>
            </div>
        </div>
    </div>

    <section class="download-section building-shape pt-100 pb-70 bg-overlay-2">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-sm-12 col-lg-7 pb-30">
                    <div class="download-image-grid">
                        <div class="download-image-mobile wow animate__slideInLeft" data-wow-duration="1.3s"
                            data-wow-delay="0.1s">
                            <div class="download-image-mobile-item">
                                <img src="assets/images/image-asset.png" alt="mobile">
                            </div>
                            <div class="download-image-mobile-item">
                                <img src="assets/images/image-asset1.png" alt="mobile">
                            </div>
                        </div>
                        <div class="download-image-rider wow animate__slideInLeft" data-wow-duration="2s"
                            data-wow-delay="0.4s">
                            <img src="assets/images/rider.png" alt="rider">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-5 pb-30 wow animate__slideInUp" data-wow-duration="1s"
                    data-wow-delay="0.3s">
                    <div class="about-content section-title text-center text-lg-end m-0">
                        <h2 class="color-white">Download Our App & Order Online To Get Free Delivery</h2>
                        <p>We are the country's no.1 Fast food retailer with 15+ years of reputation. Country's best
                           Dishes are delivered by us. We gain the satisfaction of our customers with our
                            delicate service and extreme high food quality.</p>
                        <ul class="button-list justify-content-center justify-content-lg-end">
                            <li>
                                <a href="#" class="btn">
                                    Download From
                                    <i class="flaticon-playstore"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn">
                                    Download From
                                    <i class="icofont-brand-appstore"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="subscribe-section mural-bg pt-100 pb-70 bg-main">
        <div class="container">
            <div class="subscribe-grid">
                <div class="subscribe-item">
                    <div class="section-title text-center text-lg-start m-0">
                        <h2 class="color-white">Subscribe Our Newsletter</h2>
                        <p>Don't miss any upcoming event & Get your coupon via email.</p>
                    </div>
                </div>
                <div class="subscribe-item">
                    <div class="subscribe-form">
                        <form class="newsletter-form newsletter-form-white" data-bs-toggle="validator">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" id="emails" class="form-control"
                                        placeholder="Enter Email Address*" name="EMAIL" required autocomplete="off">
                                </div>
                                <button class="btn btn-yellow" type="submit">Subscribe <i
                                        class="flaticon-right-arrow-sketch-1"></i></button>
                            </div>
                            <div id="validator-newsletter" class="form-result color-white"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php require_once 'footer.php';?>


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


    <?php require_once 'script.php';?>
</body>


</html>