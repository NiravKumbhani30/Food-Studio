<?php require_once 'connection.php'; ?>

<!DOCTYPE html>
<html lang="zxx">


<?php require_once 'head.php'; ?>

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


    <?php require_once 'header.php'; ?>


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

            </div>
            <div class="container">
                <div class="header-page-content">
                    <h1>Team Details</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Team Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <section class="team-details-section p-tb-100 bg-black">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-5 pb-30">
                    <div class="team-details-thumb text-center">
                        <img src="assets/images/team-details-figure.jpg" alt="chef">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-7 pb-30">
                    <div class="team-details-caption-box around-border">
                        <div class="team-details-caption-info">
                            <h3 class="color-white">Victor James</h3>
                            <h4>Senior Pizza Chef</h4>
                            <p>You can dream, create, design, and build the most wonder ful place in the world. But it
                                requires people to make the dream a reality.</p>
                        </div>
                        <ul class="team-details-caption-list">
                            <li>
                                <span>Age:</span>28 years
                            </li>
                            <li>
                                <span>Department:</span>Pizza
                            </li>
                            <li>
                                <span>Experience:</span>3+ years
                            </li>
                            <li>
                                <span>Phone:</span><a href="tel:001-123-456-789">+1 123 456 789</a>
                            </li>
                            <li>
                                <span>Email:</span><a
                                    href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#31424441415e4345715750575e1f525e5c"><span
                                        class="__cf_email__"
                                        data-cfemail="82eae7eeeeedc2e4e3e4edace1edef">[email&#160;protected]</span></a>
                            </li>
                            <li>
                                <span>Address:</span>32,Walse Street, New York, USA
                            </li>
                            <li>
                                <span>Follow On:</span>
                                <ul class="social-list social-list-white">
                                    <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                    <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="flaticon-youtube"></i></a></li>
                                    <li><a href="#"><i class="flaticon-instagram-1"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="team-biograpy mt-20">
                <div class="team-biograpy-item team-biograpy-item-title">
                    <h3 class="color-white">Biography</h3>
                </div>
                <div class="team-biograpy-item team-biograpy-item-para">
                    <p>You can dream, create, design, and build the most wonder ful place in the world. But it requires
                        people to make the dream a reality. Manufacturing industry became a key sector of production and
                        labour in and North American countries during the Industrial Revolution, upsetting mercan tile
                        and feudal economics. The argument something like this. Countries during the Industrial
                        Revolution</p> <br>
                    <p>You can dream, create, design, and build the most wonder ful place in the world. But it requires
                        people to make the dream a reality. Manufacturing industry became a key sector of production and
                        labour in and North American countries.</p>
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


    <?php require_once 'footer.php'; ?>


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


    <?php require_once 'script.php'; ?>
</body>


</html>