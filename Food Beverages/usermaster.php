<?php 
    require_once 'connection.php';
    require_once 'userquery.php';
    $_SESSION['page']="usermaster";

    $_SESSION['identity']="dashboard";

    if($_SESSION['userid']=="")
    {
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once 'head.php'; ?>

<?php require_once 'header.php';?>

<body onload="getdata('<?php echo $_SESSION['identity'];?>')">

    <div class="header-bg header-bg-page">
        <div class="header-padding position-relative">
            <div class="header-page-shape">
                <div class="header-page-shape-item">
                    <img src="assets/images/header-shape-1.png" alt="shape">
                </div>
                <div class="header-page-shape-item">
                    
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
                        <div class=row>
                            <div class="col-md-12">
                                <h2>
                                    <p style="color:white;text-transform:capitalize;"> Welcome,<?php echo $_SESSION['username']; ?></p>
                                </h2>
                                <p>[Lastseen:<?php echo $_SESSION['lastlogin'];?>]</p>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>

    <div class="account-page-section pt-100 pb-70 bg-black">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 pb-30">
                    <div class="account-sidebar around-border">
                        <ul class="account-sidebar-list">
                            <li onclick="getdata('dashboard');"><a href="#">Dashboard</a></li>
                            <li onclick="getdata('myprofile');"><a href="#">My Profile</a></li>
                            <li onclick="getdata('address');"><a href="#">Add Address</a></li>
                            <li onclick="getdata('changepass');"><a href="#">Change Password</a></li>
                            <li onclick="getdata('mybill');"><a href="#">My Bills</a></li>
                            <li><a href="logout.php">Log out</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-12 col-md-1 col-lg-1 pb-30" offset>
                </div>

                <div class="col-sm-12 col-md-7 col-lg-7 pb-30" id="missdata">
                    
                </div>
            </div>
        </div>
    </div>


    <!-- <section class="career-section pt-100 pb-70 bg-black menu-section">
        <div class="container position-relative">
            <div class="section-title">
                <small>Career</small>
                <h2 class="color-white">Grab Opportunity To Work With Us</h2>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                    <div class="career-card career-card-light">
                        <h3>Senior Chef</h3>
                        <ul class="career-card-list">
                        <li onclick="getdata('myprofile');"><a href="#">My Profile</a></li>
                        </ul>
                        <a href="#" class="btn btn-small">Apply Now</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                    <div class="career-card career-card-light">
                        <h3>Assistant Chef</h3>
                        <ul class="career-card-list">
                            <li><i class="icofont-location-pin"></i>New York</li>
                            <li><i class="icofont-clock-time"></i>Full Time</li>
                            <li><i class="flaticon-calendar"></i>3 Hrs Ago</li>
                        </ul>
                        <a href="#" class="btn btn-small">Apply Now</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                    <div class="career-card career-card-light">
                        <h3>Manager</h3>
                        <ul class="career-card-list">
                            <li><i class="icofont-location-pin"></i>Florida</li>
                            <li><i class="icofont-clock-time"></i>Part Time</li>
                            <li><i class="flaticon-calendar"></i>4 Hrs Ago</li>
                        </ul>
                        <a href="#" class="btn btn-small">Apply Now</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                    <div class="career-card career-card-light">
                        <h3>Waiter</h3>
                        <ul class="career-card-list">
                            <li><i class="icofont-location-pin"></i>Miami</li>
                            <li><i class="icofont-clock-time"></i>Full Time</li>
                            <li><i class="flaticon-calendar"></i>3 Hrs Ago</li>
                        </ul>
                        <a href="#" class="btn btn-small">Apply Now</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                    <div class="career-card career-card-light">
                        <h3>Senior Chef</h3>
                        <ul class="career-card-list">
                            <li><i class="icofont-location-pin"></i>New York</li>
                            <li><i class="icofont-clock-time"></i>Full Time</li>
                            <li><i class="flaticon-calendar"></i>2 Hrs Ago</li>
                        </ul>
                        <a href="#" class="btn btn-small">Apply Now</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                    <div class="career-card career-card-light">
                        <h3>Assistant Chef</h3>
                        <ul class="career-card-list">
                            <li><i class="icofont-location-pin"></i>New York</li>
                            <li><i class="icofont-clock-time"></i>Full Time</li>
                            <li><i class="flaticon-calendar"></i>3 Hrs Ago</li>
                        </ul>
                        <a href="#" class="btn btn-small">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    






</body>



<?php require_once 'footer.php';?>

<?php require_once 'script.php';?>