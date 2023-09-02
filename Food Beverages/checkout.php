<?php require_once 'connection.php'; 



require('config.php');
	require('razorpay-php/Razorpay.php');

    $_SESSION['totalamt']=0;
    
if(isset($_REQUEST['disconnectbtn']))
{
    $data=$con->query("delete  from cart where userid like '$_SESSION[userid]'");
    header('location:index.php');
}


if(isset($_REQUEST['paybtn']))
{
    $ship = $_REQUEST['ship'];
    
    //echo "insert into bill value($ship,'$_SESSION[userid]',0,'$newDate','$_SESSION[totalamt]')";
    
}

?>

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
                <div class="header-page-shape-item">

                </div>
            </div>
            <div class="container">
                <div class="header-page-content">
                    <h1>Checkout</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <form action="" method="POST" name="">
    
        <div class="checkout-section pt-100 pb-70 bg-black">
            <div class="container">
                <div class="row">
                <?php
                $upr=$con->query("select * from address where userid like '$_SESSION[userid]'");
                $row=mysqli_fetch_array($upr);
                ?>
                   
                    <div class="col-sm-12 col-md-6 col-lg-6 pb-30">
                        <div class="checkout-payment-area">
                            <h3 class="color-white cart-details-title">Billing Details</h3>
                            <div class="checkout-form">
                                
                                    <div class="row">

                                        <div class="col-sm-12">     
                                            <div class="area" style="color:white;">

                                                <label style="font-size: 18px;color:#e7272d;">Your Emailid :</label>

                                            </div>

                                                <label style="font-size: 20px;color:white;"><?php echo $row[0];?></label>
                                             
                                        </div>
                                       
                                        <div class="col-sm-12"> 
                                        
                                            <div class="area" style="color:white;">

                                                <label style="font-size: 18px;color:#e7272d;">Your Adress :</label>
                                            </div>
                                                <?php
                                                $flag=0;
                                                $upr=$con->query("select * from address where userid like '$_SESSION[userid]'");
                                                while($row=mysqli_fetch_array($upr))
                                                {
                                                

                                                    if($flag==0)
                                                    {
                                                        $flag=1;
                                                        $_SESSION['ship']=$row[1];
                                                        ?>
                                                        <input checked type="radio" name="ship" value="<?php echo $row[1]; ?>" style="width: 20px;height: 18px;border-radius: 50%;cursor: pointer;">
                                                        <label style="font-size: 20px;color:white;padding-left: 7px;" type="radio"><?php echo $row[3];?></label><br/>
                                                        <?php
                                                    }
                                                    else{
                                                        $_SESSION['ship']=$row[1];
                                                        ?>

                                                        <input type="radio" name="ship" value="<?php echo $row[1]; ?>" style="width: 20px;height: 18px;border-radius: 50%;cursor: pointer;">
                                                        <label style="font-size: 20px;color:white;padding-left: 7px;" type="radio"><?php echo $row[3];?></label><br/>
                                                        <?php
                                                    }
                                                    
                                                
                                                }
                                                ?>
                                               
                                        
                                        </div>
                                        
                                        
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 pb-30">
                        <div class="checkout-item">
                            <div class="checkout-details cart-details mb-30">
                                <h3 class="cart-details-title color-white">Cart Totals</h3>
                                <div class="cart-total-box">

                                    <?php
                                    $data=$con->query("select * from cart where userid like '$_SESSION[userid]'");
                                    while($row=mysqli_fetch_array($data))
                                    {
                                        if($row[1]==0)
                                        {
                                            $pdata=$con->query("select * from item where itemid = $row[2]");
                                            $prow=mysqli_fetch_array($pdata); 
                                            $proname=$prow[2];   
                                            $proimg=$prow[3];    
                                        }
                                        else{
                                            $pdata=$con->query("select * from fixthali where fixthaliid = $row[1]");
                                            $prow=mysqli_fetch_array($pdata);
                                            $proname=$prow[1];
                                            $proimg=$prow[2];
                                        }
                                    ?>

                                    <div class="cart-total-item pt-0">
                                        <h4 class="color-main"><?php echo $proname; ?></h4>
                                        <p><i class="fas fa-rupee-sign"></i>&nbsp; <?php echo $row[6]; ?></p>
                                    </div>
                                  
                                    <?php
                                    $_SESSION['totalamt']=$_SESSION['totalamt']+$row[6];
                                    }
                                    ?>

                                    <div class="cart-total-item">
                                        <h4>Sub Total</h4>
                                        <p><i class="fas fa-rupee-sign"></i>&nbsp; <?php echo $_SESSION['totalamt']; ?></p>
                                    </div>
                                    <div class="cart-total-item">
                                        <h4>Express Delivery</h4>
                                        <p><i class="fas fa-rupee-sign"></i>&nbsp; 30</p>
                                    </div>
                                    <div class="cart-total-item cart-total-bold">
                                        <h4 class="color-white">Total</h4>
                                        <p><i class="fas fa-rupee-sign"></i>&nbsp; <?php 
                                        $_SESSION['totalamt']=$_SESSION['totalamt']+30;
                                        echo $_SESSION['totalamt']; 
                                        ?></p>
                                    </div>
                                        
                                  

                                </div>
                                                         
                                        <?php
                                    
                                    // Create the Razorpay Order

                                    $data=$con->query("select * from register where userid like '$_SESSION[userid]'");
                                    $row=mysqli_fetch_array($data);

                                    use Razorpay\Api\Api;

                                    $api = new Api($keyId, $keySecret);

                                    //check all field are set or not?
                                    $name=$row[3];
                                    $mail=$_SESSION['userid'];
                                    $amount=$_SESSION['totalamt'];
                                    $phno=$row[6];
                                    
                                    

                                    //
                                    // We create an razorpay order using orders api
                                    // Docs: https://docs.razorpay.com/docs/orders
                                    //
                                    $orderData = [
                                        'receipt'         => 3456,
                                        'amount'          => $amount * 100, // 2000 rupees in paise
                                        'currency'        => 'INR',
                                        'payment_capture' => 1 // auto capture
                                    ];

                                    $razorpayOrder = $api->order->create($orderData);

                                    $razorpayOrderId = $razorpayOrder['id'];

                                    $_SESSION['razorpay_order_id'] = $razorpayOrderId;

                                    $displayAmount = $amount = $orderData['amount'];

                                    if ($displayCurrency !== 'INR')
                                    {
                                        $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
                                        $exchange = json_decode(file_get_contents($url), true);

                                        $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
                                    }

                                    $checkout = 'manual';

                                    if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
                                    {
                                        $checkout = $_GET['checkout'];
                                    }

                                    $data = [
                                        "key"               => $keyId,
                                        "amount"            => $amount,
                                        "name"              => "Mystery Flavours",
                                        "description"       => "Mystery Flavours - Eat today,Live another day",
                                        "image"             => "https://vishvdesai.000webhostapp.com/assets/images/logo.png",
                                        "prefill"           => [
                                        "name"              => $name,
                                        "email"             => $mail,
                                        "contact"           => $phno,
                                        ],
                                        "notes"             => [
                                        "address"           => "G Villa, Manipark Society, Singanpor, Surat, Gujarat 395004",
                                        "merchant_order_id" => rand(1000,9999),
                                        ],
                                        "theme"             => [
                                        "color"             => "#4400ff"
                                        ],
                                        "order_id"          => $razorpayOrderId,
                                    ];

                                    if ($displayCurrency !== 'INR')
                                    {
                                        $data['display_currency']  = $displayCurrency;
                                        $data['display_amount']    = $displayAmount;
                                    }

                                    $json = json_encode($data);
                                    ?>
                                    
                                    <button class="btn" name="paybtn" id="rzp-button1"> Pay </button>
                                    
                                    <button  class="btn" name="disconnectbtn"> Cancel </button>
                                    
                                    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                                    
                                    <script>
                                    // Checkout details as a json
                                    var options = <?php echo $json?>;

                                    /**
                                    * The entire list of Checkout fields is available at
                                    * https://docs.razorpay.com/docs/checkout-form#checkout-fields
                                    */
                                    options.handler = function (response){
                                        document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                                        document.getElementById('razorpay_signature').value = response.razorpay_signature;
                                        document.razorpayform.submit();
                                    };

                                    // Boolean whether to show image inside a white frame. (default: true)
                                    options.theme.image_padding = false;

                                    options.modal = {
                                        ondismiss: function() {
                                            console.log("This code runs when the popup is closed");
                                        },
                                        // Boolean indicating whether pressing escape key 
                                        // should close the checkout form. (default: true)
                                        escape: true,
                                        // Boolean indicating whether clicking translucent blank
                                        // space outside checkout form should close the form. (default: false)
                                        backdropclose: false
                                    };

                                    var rzp = new Razorpay(options);

                                    document.getElementById('rzp-button1').onclick = function(e){
                                        rzp.open();
                                        e.preventDefault();
                                    }
                                    </script>

                                   

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
                
                                    <form name='razorpayform' action="success.php" method="POST">
                                        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
                                        <input type="hidden" name="razorpay_signature"  id="razorpay_signature" >
                                        <input type="hidden"  name="name" value="<?php echo $name; ?>">
                                        <input type="hidden"  name="mail" value="<?php echo $mail; ?>">
                                        <input type="hidden"  name="phno" value="<?php echo $phno; ?>">
                                        <input type="hidden"  name="amount" value="<?php echo $amount; ?>">

                                    </form>



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