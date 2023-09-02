<?php require_once 'connection.php';

$_SESSION['totalamt']=0;


?>

<!DOCTYPE html>
<html lang="zxx">


<?php require_once 'head.php'; ?>

<body>

    


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
                    <h1>Cart</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <section class="cart-section pt-100 pb-70 bg-black">
        <div class="container">
        
            <div class="cart-table cart-table-dark">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Product</th>
                            <th>Unit Price</th>
                            <th>Discount</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>

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

                        <tr>
                            <td class="cancel"><a href="#" ><i class='flaticon-cancel'></i></a></td>
                            <td>
                                <div class="product-table-info">
                                    <div class="product-table-thumb">
                                        <img src="<?php echo $proimg;?>" alt="product">
                                    </div>
                                </div>
                            </td>
                            <td class="td-product-name"><?php echo $proname;?></td>
                            
                            <td><i class="fas fa-rupee-sign"></i>&nbsp;<?php echo $row[4] ;?></td>
                            <td>
                                <div class="cart-quantity">
                                    <button class="qu-btn dec"></button>
                                    <input type="text" class="qu-input" value="0%">
                                    <button class="qu-btn inc"></button>
                                </div>
                            </td>
                            <td class="td-total-price"><i class="fas fa-rupee-sign"></i>&nbsp;<?php echo $row[6] ;?></td>
                        </tr>
                        <?php
                       $_SESSION['totalamt']=$_SESSION['totalamt']+$row[6];
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-6 pb-30 offset-lg-3 offset-md-2">
                    <div class="cart-details mt-20">
                        <h3 class="cart-details-title color-white">Cart Totals</h3>
                        <div class="cart-total-box">
                            <div class="cart-total-item">
                                <h4>Sub Total</h4>
                                <p><i class="fas fa-rupee-sign"></i>&nbsp; <?php echo $_SESSION['totalamt']; ?></p>
                            </div>
                            <div class="cart-total-item">
                                <h4>Shipping</h4>
                                <div class="cart-total-checkarea">
                                    
                                    <div class="cart-checkarea-item">
                                        <div class="cart-check-box">
                                            <input type="radio" name="" id="cart2" checked>
                                            <label for="cart2">Express Delivery</label>
                                        </div>
                                        <p><i class="fas fa-rupee-sign"></i>&nbsp; 30</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="cart-total-item cart-total-bold">
                                <h4 class="color-white">Total</h4>
                                <p><i class="fas fa-rupee-sign"></i>&nbsp; <?php 
                                $_SESSION['totalamt']=$_SESSION['totalamt']+30;
                                echo $_SESSION['totalamt']; 
                                ?></p>
                            </div>
                        </div>
 
                        <form action="checkout.php" method="POST" name="addto">
                                            
                            <button class="btn" name="checkoutbtn">
                            Proceed To Checkout
                            </button>

                            <a href="index.php">
                                <button class="btn" name="">
                                Continue
                                <i class="flaticon-shopping-cart-black-shape"></i>
                                </button>
                            </a>     
                        </form>

                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    


    <?php require_once 'footer.php'; ?>


   


    <div class="scroll-top" id="scrolltop">
        <div class="scroll-top-inner">
            <span><i class="flaticon-up-arrow"></i></span>
        </div>
    </div>


    <?php require_once 'script.php'; ?>
</body>


</html>