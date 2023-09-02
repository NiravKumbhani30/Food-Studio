<?php

    require_once 'connection.php'; 
    require_once 'query.php';

?>


<!DOCTYPE html>
<html lang="en">


<?php require_once 'head.php'; ?>


<body onload="getdata('<?php echo  $_SESSION['identity']; ?>','display',1);">
    <!-- Left Sidenav -->
    <div class="left-sidenav">
        <!-- LOGO -->
        <div class="brand">
            <a href="index.php" class="logo">
            <span>
                    <img src="assets/images/logo-black1.png" alt="profile-user" class="rounded-circle thumb-xs">
                </span>
                <span>
                    <img src="assets/images/logo.png" alt="" class="logo-lg logo-light">
                    <h5 class="logo-lg logo-dark" style="text-transform: uppercase;font-weight: bold;">Food Beverages</h5>
                </span>
            </a>
        </div>
        <!--end logo-->

        <?php require_once 'menu.php'; ?>

    </div>
    <!-- end left-sidenav-->


    <div class="page-wrapper">
        
        <?php require_once 'header.php'; ?>

        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <div class="row" id="missdata">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row">

                            </div>
                        </div>
                    </div>
                </div>
                <?php require_once 'footer.php'; ?>
            </div>
        </div>

        
<!-- projest modal -->

<div class="modal fade" id="brijesh" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="missmodal">
        
    </div>
  </div>
</div>


<!-- rate modal -->

<div class="modal fade" id="rateus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content" id="missrate">
        
    </div>
  </div>
</div>



        <?php require_once 'script.php'; ?>

</body>



</html>