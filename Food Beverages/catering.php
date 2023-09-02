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

                </div>
                <div class="header-page-shape-item">
                    <img src="assets/images/header-shape-1.png" alt="shape">
                </div>

            </div>
            <div class="container">
                <div class="header-page-content">
                    <h1>Catering</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Catering</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <section class="service-section pt-100 pb-70 bg-black bg-overlay-1">
        <div class="container">
            <div class="section-title">
                <h2 class="color-white">We Offer 3 Kinds Of Services</h2>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                    <div class="service-item">
                        <div class="service-image">
                            <img src="assets/images/catering-1.jpg" alt="service">
                        </div>
                        <div class="service-content">
                            <h3>1. Private Party</h3>
                            <p>Choose Your Best Combos From The Thousands Of Exciting Items.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                    <div class="service-item">
                        <div class="service-image">
                            <img src="assets/images/catering-2.jpg" alt="service">
                        </div>
                        <div class="service-content">
                            <h3>2. Corporate Event</h3>
                            <p>Choose Your Best Combos From The Thousands Of Exciting Items.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 pb-30 offset-md-3 offset-lg-0">
                    <div class="service-item">
                        <div class="service-image">
                            <img src="assets/images/catering-3.jpg" alt="service">
                        </div>
                        <div class="service-content">
                            <h3>3. Social Event</h3>
                            <p>Choose Your Best Combos From The Thousands Of Exciting Items.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="booking-section p-tb-100 bg-black menu-section">
        <div class="container position-relative">
            <div class="section-title">
                <small>Catering</small>
                <h2 class="color-white">Fill Out Our Catering Form</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                    <div class="checkout-form m-0">
                        <form>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="name" class="form-control" required placeholder="First Name*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="name" class="form-control" required placeholder="Last Name*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="email" class="form-control" required placeholder="Your Email*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="phone" class="form-control" required placeholder="Your Phone*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="date" id="datepicker" class="form-control" required placeholder="Select Date*" />
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <i class="flaticon-calendar-1"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="location" class="form-control" required placeholder="Location*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <select name="country" class="form-control">
                                                <option value="1">Your Interested Catering*</option>
                                                <option value="2">Private Party</option>
                                                <option value="3">Corporate Event</option>
                                                <option value="4">Social Event</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="startTime" class="form-control timepicker" required placeholder="Event Start Time*" />
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <i class="flaticon-clock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="endTime" class="form-control timepicker" required placeholder="Event End Time*" />
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <i class="flaticon-clock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <select name="country" class="form-control">
                                                <option value="1">Number Of Guest*</option>
                                                <option value="2">2</option>
                                                <option value="3">5</option>
                                                <option value="4">10</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="budget" class="form-control" required placeholder="Budget*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <div class="input-group input-group-textarea">
                                            <textarea name="eventInfo" class="form-control" rows="5" placeholder="What Kind Of Event It Is?"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="custom-control custom-checkbox mb-20 text-center">
                                        <input type="checkbox" class="custom-control-input" id="post1">
                                        <label class="custom-control-label" for="post1">I agree that my submitted data is being collected and stored.</label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn full-width">Send Request</button>
                        </form>
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
                                    <input type="email" id="emails" class="form-control" placeholder="Enter Email Address*" name="EMAIL" required autocomplete="off">
                                </div>
                                <button class="btn" type="submit">Subscribe <i class="flaticon-right-arrow-sketch-1"></i></button>
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