<?php
	require('config.php');
	require('razorpay-php/Razorpay.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

// Create the Razorpay Order


use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//check all field are set or not?
$name=$_REQUEST['name'];
$mail=$_REQUEST['mail'];
$amount=$_REQUEST['amount'];
$phno=$_REQUEST['phno'];


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

$checkout = 'automatic';

if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "HRHouse",
    "description"       => "HRhouse - One Stop Solution",
    "image"             => "https://vishvdesai.000webhostapp.com/assets/images/logo.png",
    "prefill"           => [
    "name"              => $name,
    "email"             => $mail,
    "contact"           => $phno,
    ],
    "notes"             => [
    "address"           => "Hello World",
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
<button id="rzp-button1">Pay </button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form name='razorpayform' action="success.php" method="POST">
    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
    <input type="hidden" name="razorpay_signature"  id="razorpay_signature" >
    <input type="hidden"  name="name" value="<?php echo $name; ?>">
    <input type="hidden"  name="mail" value="<?php echo $mail; ?>">
    <input type="hidden"  name="phno" value="<?php echo $phno; ?>">
    <input type="hidden"  name="amount" value="<?php echo $amount; ?>">

</form>
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


</body>
</html>