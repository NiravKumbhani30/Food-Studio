<!DOCTYPE html>
<html lang="zxx">


<?php require_once 'connection.php'; ?>

<?php 
    require_once 'head.php';
?>

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
                    <h1>Items</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Items</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <section class="shop-section pt-100 pb-70 bg-black">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 pb-30">
                    <div class="row">
                    <?php 
                        $in=$con->query("select c.*,i.* from category c,item i where c.categoryid=i.categoryid order by i.categoryid ");
                        while($row=mysqli_fetch_array($in))
                    {
                    ?>


                        <div class="col-sm-12 col-md-6 col-lg-3 pb-30 wow animate__slideInUp" data-wow-duration="1s"
                            data-wow-delay="0.1s">

                            <div class="blog-card blog-card-maincolor">

                                <div class="blog-card-thumb">

                                    <a href="itemdetails.php?id=<?php echo $row[4]; ?>">
                                        <center>
                                            <img style="height: 250px; widht:300px;background-size: cover;" src="<?php echo $row[6]; ?>">
                                        </center>
                                    </a>

                                </div>

                                <div class="blog-card-content">


                                    <ul class="blog-entry">
                                        <li style="color:white" class="tcenter"><i class="fas fa-utensils"></i><?php echo $row[1]; ?></li>
                                    </ul>
                                    
                                    <!-- <ul class="blog-entry">
                                        <li class="ttcenter">TO</li>
                                    </ul> -->


                                    <ul class="blog-entry">
                                        <li style="color:white" class="tcentert"><i class="fas fa-utensils"></i><?php echo $row[5]; ?><i class="fas fa-rupee-sign" style="padding-left: 70px;"></i><?php echo $row[7]; ?></li>

                                    </ul>

                                    


                                    <div class="blog-entry">
                                        <div class="col-lg-6">
                                            <a href="itemdetails.php?id=<?php echo $row[4]; ?>" class="btn btn-yellow"
                                                style="font-size:12px;">Detail View</a>
                                        </div>

                                        <div class="col-lg-6">
                                            <a style="font-size:12px;" class="btn"
                                                onclick="product1('product1',<?php echo $row[4]; ?>);"
                                                data-toggle="modal" data-target="#brijesh1">Quick View</a>
                                        </div>
                                    </div>



                                    <!-- <p>This Mexican Style Burger is pumped out with flavor</p> -->

                                </div>

                            </div>

                        </div>

                        <?php 
                        }
                        ?>
                    </div>
                </div>

                <!-- <div class="col-sm-12 col-md-3 col-lg-3 pb-30">
                    <div class="sidebar-item around-border sidebar-search">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <button><i class="flaticon-loupe"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-item mb-30">
                        <div class="sidebar-title">
                            <h3 class="color-white">Filter By Price</h3>
                        </div>
                        <div class="sidebar-content">
                            <form class="price-range-content">
                                <div class="price-range-bar" id="range-slider"></div>
                                <div class="price-range-filter">
                                    <div class="price-range-filter-item price-range-filter-button order-2 order-xl-1">
                                        <button class="btn btn-small">Filter</button>
                                    </div>
                                    <div
                                        class="price-range-filter-item d-flex align-items-center text-end order-1 order-xl-2">
                                        <h4>Price:</h4>
                                        <input type="text" id="price-amount" readonly>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-item">
                        <div class="sidebar-title">
                            <h3 class="color-white">Categories</h3>
                        </div>
                        <ul class="sidebar-list">
                            <li>
                                <a href="#">Commercial <span>(08)</span></a>
                            </li>
                            <li>
                                <a href="#">Food Review <span>(04)</span></a>
                            </li>
                            <li>
                                <a href="#">Burger Mania <span>(04)</span></a>
                            </li>
                            <li>
                                <a href="#">Fast Food <span>(14)</span></a>
                            </li>
                            <li>
                                <a href="#">Pizza <span>(10)</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="sidebar-item">
                        <div class="sidebar-title">
                            <h3 class="color-white">Popular</h3>
                        </div>
                        <div class="sidebar-recent-post">
                            <div class="sidebar-recent-item">
                                <div class="sidebar-recent-thumb">
                                    <a href="#"><img src="assets/images/blog-nav-1.jpg" alt="blog"></a>
                                </div>
                                <div class="sidebar-recent-content">
                                    <h3><a href="#">Cheese Burger</a></h3>
                                    <h4 class="product-price">$ 12.50</h4>
                                </div>
                            </div>
                            <div class="sidebar-recent-item">
                                <div class="sidebar-recent-thumb">
                                    <a href="#"><img src="assets/images/blog-nav-4.jpg" alt="blog"></a>
                                </div>
                                <div class="sidebar-recent-content">
                                    <h3><a href="#">Omlette Pizza</a></h3>
                                    <h4 class="product-price">$ 10.12</h4>
                                </div>
                            </div>
                            <div class="sidebar-recent-item">
                                <div class="sidebar-recent-thumb">
                                    <a href="#"><img src="assets/images/blog-nav-3.jpg" alt="blog"></a>
                                </div>
                                <div class="sidebar-recent-content">
                                    <h3><a href="#">Pizza + Burger Combo</a></h3>
                                    <h4 class="product-price">$ 11.45</h4>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div> -->
            </div>
        </div>
    </section>


    <!-- Rate Mdal -->

    <div class="modal fade" id="rateus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content" id="missrate">

            </div>
        </div>
    </div>


    <?php require_once 'footer.php'; ?>



    <div class="scroll-top" id="scrolltop">
        <div class="scroll-top-inner">
            <span><i class="flaticon-up-arrow"></i></span>
        </div>
    </div>

    <!-- brijesh1 -->
    <div class="modal fade" id="brijesh1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="missmodal1">

            </div>
        </div>
    </div>



    <?php require_once 'script.php'; ?>
</body>


</html>