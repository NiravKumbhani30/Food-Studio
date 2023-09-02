<?php

require_once 'connection.php';
require_once 'head.php';

require('config.php');



require('razorpay-php/Razorpay.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";

        ?>
        <?php

            $newDate = date("Y-m-d");  

            $data=$con->query("insert into bill value($_SESSION[ship],'$_SESSION[userid]',0,'$newDate',$_SESSION[totalamt])");      
            
            $pay=$con->query("select billid from bill where addressid like $_SESSION[ship] and userid like '$_SESSION[userid]' and date like '$newDate' and finalamount like $_SESSION[totalamt] order by billid desc limit 1");

            $row=mysqli_fetch_array($pay);

            $datav=$con->query("select *  from cart where userid like '$_SESSION[userid]'");
            while($rowv=mysqli_fetch_array($datav))
            {
                 if($rowv[1]=='0')
                {
                    $data=$con->query("insert into billitem value($row[0],0,$rowv[2],$_SESSION[totalamt],0,$_SESSION[totalamt],'$_POST[razorpay_payment_id]','Netbanking')");
                }
                else{
                    $data=$con->query("insert into billitem value($row[0],$rowv[1],0,$_SESSION[totalamt],0,$_SESSION[totalamt],'$_POST[razorpay_payment_id]','Netbanking')");
                }
                
            }
            $data=$con->query("delete from cart where userid like '$_SESSION[userid]'");
            //header('location:index.php');
            ?>





<?php

$data=$con->query("select * from bill where billid=$row[0];");
$row=mysqli_fetch_array($data);
{
    $datat=$con->query("select * from billitem  where billid = $row[2]");
    $rowt=mysqli_fetch_array($datat);
?>    

    <div class="account-page-section pt-100 pb-70 bg-black">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3 pb-30"></div>
                <div class="col-sm-12 col-md-6 col-lg-6 pb-30">
                    <div class="checkout-item">
                        
                        <div class="checkout-details cart-details mb-20" style="padding: 30px;">
                            
                            <a class="navbar-brand">
                                <img style="height: 110px;width: 110px;margin-left: 40%;" src="assets/images/logo-black.png" title='Eat today,Live another day' alt="logo">
                                <h4></h4>
                            </a>
                            
                            <div class="row">
                                <div class="col-md-5">
                                    <p class="header-subtitle-name">
                                        Email_Id :<span></span> <?php echo $_SESSION['userid']; ?> <span></span> 
                                    </p>
                                </div>

                                <div class="col-md-2"></div>

                                <div class="col-md-5">
                                    <p class="header-subtitle-name">
                                        Bill_Id:<span></span> <?php echo $rowt[0]; ?> <span></span> 
                                    </p>
                                </div>
                            </div>

                            <h4></h4>

                            <div class="row">
                                <div class="col-md-5">
                                    <p class="header-subtitle-name">
                                        Payment_Id :<span></span> <?php echo $rowt[6]; ?> <span></span> 
                                    </p>
                                </div>

                                <div class="col-md-2"></div>

                                <div class="col-md-5">
                                    <p class="header-subtitle-name">
                                        Order_Date :<span></span> <?php echo $row[3]; ?> <span></span> 
                                    </p>
                                </div>
                            </div>

                            

                            <div class="cart-table cart-table-dark" style="padding-top: 20px;;">
                                <table>
                                    <thead>
                                        <tr>
                                            
                                            <th></th>
                                            <th>Product</th>
                                            
                                            <th>Unit Price</th>
                                            
                                        </tr>
                                    </thead>

                                    <?php
                                    $amt=0;
                                    $temp=0;

                                    $datai=$con->query("select * from billitem  where billid = $row[2]");
                                    while($rowi=mysqli_fetch_array($datai))
                                    {
                                        
                                        $amt=$rowi[3];
                                        if($rowi[1]==0)
                                        {
                                            $pdata=$con->query("select * from item where itemid = $rowi[2]");
                                            $prow=mysqli_fetch_array($pdata); 
                                            $proname=$prow[2];   
                                            $proimg=$prow[3]; 
                                            $temp=$prow[4];   
                                        }
                                        else{
                                            $pdata=$con->query("select * from fixthali where fixthaliid = $rowi[1]");
                                            $prow=mysqli_fetch_array($pdata);
                                            $proname=$prow[1];
                                            $proimg=$prow[2];
                                            $temp=$prow[3];  
                                        }
                                        
                                    ?>
                                    <tbody>
                                        <tr>
                                            
                                            <td>
                                                <div class="product-table-info">
                                                    <div class="product-table-thumb">
                                                        <img src="<?php echo $proimg; ?>" alt="product">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="td-product-name"><?php echo $proname; ?></td>
                                            
                                            <td><i class="fas fa-rupee-sign"></i>&nbsp;<?php echo $temp; ?></td>
                                            
                                            
                                        </tr>
                                    
                                    </tbody>
                                <?php
                                }
                                ?>
                                <tr>
                                <td class="td-total-price" style="text-align: right; width:100%;" colspan="3" >Total Amount :&nbsp;<i class="fas fa-rupee-sign"></i>&nbsp;<?php echo $amt; ?></td>
                                </tr>
                                </table>
                            </div>

                            <h4></h4>

                            <div class="row">
                            <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <p class="header-subtitle-name">
                                        Payment_via :<span></span> Netbanking <span></span> 
                                    </p>
                                </div>

                                <div class="row">
                                    <div class="col-md-4"></div>
                                        <div class="col-md-8">
                                            <a href="index.php">
                                                <button class="btn" name="">
                                                Go to Home
                                                </button>
                                            </a>
                                            <p class="download "><i class="fa fa-cloud-download" aria-hidden="true"></i>&nbsp;&nbsp;Download Your Bill</p>
                                        </div>
                                </div>
                                
                            </div>

                        </div>
                        
                    </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 pb-30"></div>
            </div>
        </div>
    </div>

<?php
}
?>






            <?php
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

// echo $html;
?>
</body>
</html>