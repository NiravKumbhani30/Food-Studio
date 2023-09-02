<?php require_once 'connection.php';


$_SESSION['page']="details";
if($_REQUEST['id']!="")
{
    $_SESSION['proid']=$_REQUEST['id'];
    header('location:itemdetails.php');
}
$temp=$_SESSION["proid"];
$data=$con->query("select * from item where itemid=$_SESSION[proid]");
$row=mysqli_fetch_array($data);
$_SESSION['itemid'] = $row[1];
$_SESSION['amount'] = $row[4];

if(isset($_REQUEST['reviewitem']))
{
   
    date_default_timezone_set('Asia/kolkata');
    $ireviewdate=date('Y-m-d');

    $data=$con->query("select * from item_review where userid like '$_SESSION[userid]' and itemid=$_SESSION[proid]");
    $row=mysqli_fetch_array($data);

    if($row[0]=="")
    {
    $in=$con->query("insert into item_review value('$_SESSION[userid]','$_SESSION[proid]',0,'$ireviewdate','$_REQUEST[reviewtext]')");
    header('location:itemdetails.php');
    }
    else
    {
        header('location:itemdetails.php');
    }
                      
}

if(isset($_REQUEST['cartaddbtn']))
{
    $in=$con->query("insert into cart value('$_SESSION[userid]',0,$_SESSION[itemid],0,'$_SESSION[amount]',0,'$_SESSION[amount]')");
    //echo "insert into cart value('$_SESSION[userid]',0,'$_SESSION[itemid]',0,'$_SESSION[amount]',0,'$_SESSION[amount]')";
    header('location:cart.php');
}


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
                    <h1>Item Details</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="blogs-grid-without-sidebar.html">Item Details</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Why Item Made So...</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <div class="product-details-section pt-100 pb-70 bg-black">
        <div class="container">
            <div class="row align-items-center">

                <?php 
                    $data=$con->query("select c.*, i.* from category as c, item as i where c.categoryid=i.categoryid and i.itemid=$_SESSION[proid]");
                    $row=mysqli_fetch_array($data);
                ?>

                <div class="col-sm-12 col-md-12 col-lg-5 pb-30">
                    <div class="product-details-item">
                        <div class="product-details-slider">
                            <div class="product-details-for popup-gallery">
                                <div class="product-for-item">
                                    <a href="<?php echo $row[6] ;?>"><img style="height: 360px;width: 464px;border-radius: 10px;background-size: cover;" src="<?php echo $row[6] ;?>"
                                            alt="product"></a>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-7 pb-30">
                    <div class="product-details-item">
                        <div class="product-details-caption">
                            <div class="product-status product-status-danger mb-20">
                                New
                            </div>
                            <h3 class="mb-20 color-white"><?php echo $row[1]; ?></h3>
                            <!-- <h4 class="mb-20 product-id">Id: FA-001-002</h4> -->
                            <div class="product-details-price mb-20">
                                <h4 style="color: #fc0;">ITEM :&nbsp;<?php echo $row[5]; ?></h4>
                                <h4 style="color: #fc0;">PRICE :&nbsp;<i class="fas fa-rupee-sign"></i>&nbsp;<?php echo $row[7]; ?></h4>

                            </div>
                            <div class="review-star mb-20">
                                
                                    

                                        <?php
                                                $data=$con->query("select avg(rate) from item_rate where itemid=$_SESSION[proid]");
                                                $r2=mysqli_fetch_array($data);
                                                $fullrate=$r2[0];
                                                $roundrate=floor($fullrate);
                                                $howmuch=$fullrate-$roundrate;


                                                for($i=1;$i<=5;$i++)
                                                {
                                                    if($r2[0]==$roundrate)
                                                    {
                                                        if($i<=$r2[0])
                                                        {
                                                        ?>
                                        <i class="fas fa-star" style="padding: 3px; color:#fbc206;"></i>
                                        <?php		
                                                        }
                                                        else
                                                        {
                                                        ?>
                                        <i class="far fa-star" style="padding: 3px; color:#fbc206;"></i>
                                        <?php
                                                        }
                                                    }
                                                    else
                                                    {
                                                        if($i<=$roundrate+1)
                                                        {
                                                            if($i==$roundrate+1)
                                                            {
                                                                if($howmuch>0.50)
                                                                {
                                                                ?>
                                        <i class="fas fa-star" style="padding: 3px; color:#fbc206;"></i>
                                        <?php
                                                                }
                                                                else
                                                                {
                                                                    
                                                                ?>
                                        <i class="fas fa-star-half-alt" style="padding: 3px; color:#fbc206;"></i>
                                        <?php
                                                                }
                                                            }
                                                            else
                                                            {
                                                            ?>
                                        <i class="fas fa-star" style="padding: 3px; color:#fbc206;"></i>
                                        <?php 
                                                            }
                                                        }
                                                        else
                                                        {
                                                        ?>
                                        <i class="far fa-star" style="padding: 3px; color:#fbc206;"></i>
                                        <?php
                                                        }
                                                    }
                                                }
                                            ?>
                                        <!-- <i style="padding:10px 10px; font-size:20px;color:#fbc206;" class="far fa-star"></i> -->
                                        <hr />
                                        <?php
                                            if($_SESSION['userid']=="")
                                            {
                                            ?>
                                        <a href="login.php" style="height: 10px; margin-left: 20px; padding: 14px 14px" class="btn">Rate</a>
                                        <?php
                                                }
                                                else
                                                {
                                            ?>                                       
                                            <a style="height: 10px; margin-left: 20px; padding: 14px 14px" class="btn btn-yellow" data-toggle="modal" data-target="#rateus"
                                            onclick="forrrate('rate',<?php echo $_SESSION['proid']; ?>,'<?php echo $_SESSION['userid']; ?>',0);">Rate
                                            Us</a>
                                        <?php
                                            }
                                        ?>

                                       
                                        
                                
                                
                            </div>
                            
                            <div class="product-details-para mb-20">
                                <p>This Dishes served in a thali vary from region to region in the Indian subcontinent
                                    and are usually served in small bowls, called katori in India. These katoris are
                                    placed along the edge of the round tray, the actual thali; sometimes a steel
                                    tray with multiple compartments is used.</p>
                            </div>

                            <div class="product-action-info mb-20">
                                <div class="d-flex flex-wrap align-items-center product-quantity">

                                    <?php
                                    if($_SESSION['userid']=="")
                                    {
                                    ?>
                                        
                                            <a href="login.php">
                                                <button class="btn btn-icon product-quantity-item">
                                                    Add To Cart
                                                    <i class="flaticon-shopping-cart-black-shape"></i>
                                                </button>
                                            </a>
                                        
                                    <?php
                                    }
                                    else
                                    {
                                    ?> 
                                        <form action="" method="POST" name="addto">
                                            
                                                <button class="btn btn-icon product-quantity-item" name="cartaddbtn">
                                                    Add To Cart
                                                    <i class="flaticon-shopping-cart-black-shape"></i>
                                                </button>
                                            
                                        </form>
                                    <?php
                                    }
                                    ?>   
                                </div>

                            </div>

                            <div class="product-action-info">
                                <div class="product-add-wishlist">
                                    <a href="#"><i class="flaticon-heart"></i>Add To Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-details-tab">
                <ul class="product-details-tab-list">
                    <li class="active" data-product-tab-list="1">Description</li>
                    <li data-product-tab-list="2">Reviews </li>
                </ul>
                <div class="product-tab-information">
                    <div class="product-tab-information-item active" data-product-details-tab="1">
                        <div class="product-description mb-30">
                            <p>Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euism
                                od tellus. Nam mattis eros nec mi sag ittis sagittis. Vestibulum suscipit cursus
                                bibendum. Integer at justo eget sem auctor auctor eget vitae arcu. Nam tempor mal esuada
                                portti tor. Nulla quis dignissim ipsum. Aliquam pulvinar iaculis justo, sit amet
                                interdum sem hendrerit vitae. Vivamus vel erat tortor. Nulla facilisi. In nulla quam,
                                lacinia eu aliquam ac, aliquam in nisl.</p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor.</p>
                        </div>
                    </div>
                    <div class="product-tab-information-item" data-product-details-tab="2">
                        <div class="product-review-list">

                        <?php
                        $rdata = $con->query("select i.*,r.* from item_review as i,register as r  where i.userid=r.userid and  i.itemid=$_SESSION[proid] ORDER by reviewid desc limit 4");
                        while ($rrow = mysqli_fetch_array($rdata)) 
                        {
                        ?>

                            <div class="testimonial-carousel-item bg-main product-review-item">
                                <p class="carousel-para"><?php echo $rrow[4]; ?></p>
                                <div class="carousel-info-grid">
                                    <div class="carousel-thumb">
                                        <img src="<?php echo $rrow[12]; ?>" alt="client">
                                    </div>
                                    <div class="carousel-info text-end">
                                        <div class="review-star">
                                            <ul class="justify-content-end">
                                            <?php
                                                    $data1=$con->query("select * from item_rate where userid like '$_SESSION[userid]' and itemid like '$_SESSION[proid]'");
                                                    $row1=mysqli_fetch_array($data1);
                                                    if($_REQUEST['ketla1']!=0)
                                                    {

                                                    }
                                                    else
                                                    {
                                                        if($row1[0]=="")
                                                        {
                                                        $oldrate=0;
                                                        }
                                                        else
                                                        {
                                                        $oldrate=$row1[3];
                                                        }
                                                    }

                                                ?>


                                                <center>
                                                <?php
                                                for($i=1;$i<=5;$i++)
                                                {
                                                if($i<=$oldrate)
                                                {
                                                ?>
                                                <i style="padding:2px 2px; font-size:10px;color:#fbc206;"
                                                    class="fas fa-star"></i>
                                                <?php
                                                }
                                                else
                                                {
                                                ?>
                                                <i style="padding:2px 2px; font-size:10px;color:#fbc206;"
                                                    class="far fa-star"></i>
                                                <?php
                                                }
                                                }
                                                ?>
                                                <br />

                                                </center>

                                            </ul>
                                        </div>
                                        <h3 class="carousel-name" style="text-transform: capitalize;"><?php echo $rrow[8]." ".$rrow[9]; ?></h3>
                                        <h4 class="carousel-designation">
                                            <?php  
                                                $orgDate = "$rrow[3]";  
                                                $newDate = date("d-m-Y", strtotime($orgDate));  
                                                echo " ".$newDate. " ";  
                                            ?>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                        <?php 
                        }
                        ?>
                            
                        </div>
                        <div class="product-review-area">
                            <div class="sub-section-title">
                                <h3 class="color-white">Add Your Reviews</h3>
                            </div>
                            <form action="" method="POST" name="">
                                <div class="form-review mb-20">
                                    
                                </div>
                                <div class="comment-input-area">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input type="text" name="name" id="name" class="form-control"
                                                        placeholder="Name*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input type="text" name="emal" id="emal" class="form-control"
                                                        placeholder="Email*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <textarea  class="form-control" name="reviewtext" id="message" rows="5"
                                                        placeholder="Your Comment*"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="custom-control custom-checkbox mb-20">
                                                <input type="checkbox" class="custom-control-input" id="review1">
                                                <label class="custom-control-label" for="review1">Save my name and
                                                    website in this browser for the next time I comment.</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <?php
                                            if($_SESSION['userid']=="")
                                            {
                                            ?>
                                                <button class="btn full-width">Post Your Review</button>
                                            <?php
                                            }
                                            else
                                            {
                                            ?>
                                                <button class="btn full-width" name="reviewitem">Post Your Review</button>
                                            <?php
                                            }
                                            ?>
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



    <!-- Rate Modal -->

    <div class="modal fade" id="rateus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content" id="missrate1">

            </div>
        </div>
    </div>




    <?php require_once 'script.php';?>
</body>



</html>