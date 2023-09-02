<?php require_once 'connection.php';?>
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
                <div class="header-page-shape-item">

                </div>
            </div>
            <div class="container">
                <div class="header-page-content">
                    <h1>Checkout</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="shops-grid.html">Shops</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <div class="checkout-section pt-100 pb-70 bg-black">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7 col-lg-8 pb-30">
                    <div class="checkout-item">
                        <div class="sub-section-title">
                            <h3 class="color-white">Billing Details</h3>
                        </div>
                        <div class="checkout-form">
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
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <select name="country" class="form-control">
                                                    <option value="1">Your Country*</option>
                                                    <option value="2">USA</option>
                                                    <option value="3">UK</option>
                                                    <option value="4">Germany</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <input type="email" name="street" class="form-control" placeholder="Street" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <select name="country" class="form-control">
                                                    <option value="1">Town*</option>
                                                    <option value="2">New York</option>
                                                    <option value="3">Florida</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <select name="country" class="form-control">
                                                    <option value="1">State*</option>
                                                    <option value="2">NY</option>
                                                    <option value="3">FL</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <input type="email" name="address" class="form-control" required placeholder="Address With Zip Code*" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <input type="email" name="phone" class="form-control" required placeholder="Phone No*" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <input type="email" name="email" class="form-control" required placeholder="Email*" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group input-group-textarea">
                                                <textarea name="order" class="form-control" rows="5" placeholder="Order Notes*"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn full-width">Place Order</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-4 pb-30">
                    <div class="checkout-item">
                        <div class="checkout-details cart-details mb-30">
                            <h3 class="cart-details-title color-white">Cart Totals</h3>
                            <div class="cart-total-box">
                                <div class="cart-total-item pt-0">
                                    <h4 class="color-main">Crispy Chicken Burger</h4>
                                    <p>$ 9.00</p>
                                </div>
                                <div class="cart-total-item">
                                    <h4 class="color-main">Red Sauce Pizza</h4>
                                    <p>$ 8.00</p>
                                </div>
                                <div class="cart-total-item">
                                    <h4>Sub Total</h4>
                                    <p>$ 45</p>
                                </div>
                                <div class="cart-total-item cart-total-bold">
                                    <h4 class="color-white">Total</h4>
                                    <p>$ 45</p>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-payment-area">
                            <h3 class="color-white cart-details-title">Payment Method</h3>
                            <div class="checkout-form">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="cart-check-box">
                                                <input type="radio" name="ship" id="checkout1">
                                                <label for="checkout1">Direct Bank Transfer</label>
                                                <p>Make your payment directly into our bank account. Please use your
                                                    Order ID as the payment reference. Your order will not be shipped
                                                    until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="cart-check-box">
                                                <input type="radio" name="ship" id="checkout2">
                                                <label for="checkout2">Cash On Delivery</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="cart-check-box">
                                                <input type="radio" name="ship" id="checkout3">
                                                <label for="checkout3">Paypal</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkout4">
                                                <label class="custom-control-label" for="checkout4">I’ve read and accept
                                                    the <a href="terms-conditions.html">Terms & Conditions</a> <span class="color-main">*</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                                <button class="btn btn-yellow" type="submit">Subscribe <i class="flaticon-right-arrow-sketch-1"></i></button>
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