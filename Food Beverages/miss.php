<?php
    require_once 'connection.php';
    if($_REQUEST['what']!="")
    {
    $_SESSION['identity']=$_REQUEST['what'];
    }
    
    // print_r($_REQUEST);

    if($_REQUEST['what']=="dashboard")
    {
        // user dashboard
    }
$_SESSION['totalamt']=0;
?>


<?php
    if($_REQUEST['what']=="changepass")
    { // Start Change Password
?>

<form action="" method="post" name="changepassword" onsubmit="return checkps();">
    <div class="account-info">
        <div class="account-setting-item account-setting-avatar">
            <div class="sub-section-title">
                <h3 class="color-white">Change Password</h3>
            </div>
            <div class="account-page-section pt-100 bg-black">
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-7 col-lg-7">
                    <div class="form-group mb-20">
                        <div class="input-group">
                            <div class="topbar-right-item" style="color:white">
                                <i class="flaticon-login"></i>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="flaticon-login-1"></i></span>
                            </div>
                            <input type="password" name="curpassword" id="pass1" class="form-control password"
                                placeholder="Current Password" required="" pattern="^[a-z0-9]{8,}$"
                                title="Please fill the 8 character password (a-z,0-9)" />
                            <div class="input-group-append">
                                <span class="input-group-text reveal">
                                    <i class="flaticon-visibility pass-close"></i>
                                    <i class="flaticon-eye pass-view"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-7 col-lg-7">
                    <div class="form-group mb-20">
                        <div class="input-group">
                            <div class="topbar-right-item" style="color:white">
                                <i class="flaticon-login"></i>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="flaticon-login-1"></i></span>
                            </div>
                            <input type="password" name="newpassword" id="newpassword" class="form-control password"
                                placeholder="New Password" required="" pattern="^[a-z0-9]{8,}$"
                                title="Please fill the 8 character password (a-z,0-9)" />
                            <div class="input-group-append">
                                <span class="input-group-text reveal">
                                    <i class="flaticon-visibility pass-close"></i>
                                    <i class="flaticon-eye pass-view"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-7 col-lg-7">
                    <div class="form-group m-0">
                        <div class="input-group">
                            <div class="topbar-right-item" style="color:white">
                                <i class="flaticon-login"></i>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="flaticon-login-1"></i></span>
                            </div>
                            <input type="password" name="conpassword" id="conpassword" class="form-control password"
                                placeholder="Confirm New Password" required="" pattern="^[a-z0-9]{8,}$"
                                title="Please fill the 8 character password (a-z,0-9)" />
                            <div class="input-group-append">
                                <span class="input-group-text reveal">
                                    <i class="flaticon-visibility pass-close"></i>
                                    <i class="flaticon-eye pass-view"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="account-setting-item account-setting-button">
            <button class="btn btn-small" type="submit" name="chpass">Save Changes</button>
            <button class="btn btn-yellow btn-small" type="reset">Cancel</button>
        </div>

    </div>
</form>

<?php
} // End Change Password 

if($_REQUEST['what']=="myprofile")
{ // Start My Profile
?>

<?php
    $upr=$con->query("select * from register where userid like '$_SESSION[userid]'");
    $row=mysqli_fetch_array($upr);
?>

<div class="account-info">
    <div class="account-setting-item account-setting-avatar">

        <div class="sub-section-title">
            <h3 class="color-white">My Profile</h3>
        </div>

        <div class="account-page-section pt-100 bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="account-avatar-info">
                            <div class="account-avatar-thumb">
                                <img src="<?php echo $row[7];?>">
                            </div>
                            <!-- <ul class="account-avatar-action">
                                    <li><button class="btn">Upload</button></li>
                                    <li><button class="btn btn-yellow">Remove</button></li>
                            </ul> -->
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="billing-title">
                            <h4></h4>
                                <p onclick="getdata('editprofile');">Edit Profile</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="account-setting-item">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-8">
                <div class="topbar-right-item" style="color:white">
                    <i class="flaticon-user"></i>
                    <h6 class="color-white">Name :</h6>
                </div>
                <div class="form-group mb-20">
                    <div class="input-group">
                        <input type="text" name="first_name" id="first_name" disabled="" class="profile" value="<?php echo $row[3];?> <?php echo $row[4];?>" />
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">
            </div>

            <div class="col-sm-12 col-md-8 col-lg-8">
                <div class="topbar-right-item" style="color:white">
                    <i class="flaticon-email"></i>
                    <h6 class="color-white">Emailid :</h6>
                </div>
                <div class="form-group mb-20">
                    <div class="input-group">
                        <input type="text" name="email" id="email" disabled="" class="profile" required=""
                            value="<?php echo $row[2];?>" />
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">
            </div>

            <div class="col-sm-12 col-md-8 col-lg-8">
                <div class="topbar-right-item" style="color:white">
                    <i class="flaticon-phone-call"></i>
                    <h6 class="color-white">Mobile No :</h6>
                </div>
                <div class="form-group mb-20">
                    <div class="input-group">
                        <input type="text" name="phone" id="phone" disabled="" class="profile" required=""
                            value="<?php echo $row[6];?>" />
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-8 col-lg-8">
                <div class="topbar-right-item" style="color:white">
                    <i class="flaticon-user"></i>
                    <h6 class="color-white">Gender :</h6>
                </div>
                <div class="form-group mb-20">
                    <div class="input-group">
                        <input type="text" name="first_name" id="first_name" disabled="" class="profile" required=""
                            value=" <?php echo $row[5];?>" />
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-sm-12 col-md-8 col-lg-8">
        <div class="topbar-right-item" style="color:white">
            <i class="flaticon-placeholder"></i>
            <h5 class="color-white">Area :</h5>
        </div>

        <div class="form-group mb-20">
            <div class="input-group">
                <input type="text" name="first_name" id="first_name" disabled="" class="profile" required="" value=" <?php 
                    
                                $st=$con->query("select * from area where areaid=$row[0]");
                                $stt=mysqli_fetch_array($st);
                                echo $stt[1];

                            ?>" />
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-8 col-lg-8">
        <div class="topbar-right-item" style="color:white">
            <i class="flaticon-placeholder"></i>
            <h6 class="color-white">Landmark :</h6>
        </div>
        <div class="form-group mb-20">
            <div class="input-group">
                <input type="text" name="first_name" id="first_name" disabled="" class="profile" required="" value="<?php 
                    
                                $st=$con->query("select * from landmark where landmarkid=$row[1]");
                                $stt=mysqli_fetch_array($st);
                                echo $stt[2];

                            ?>" />
            </div>
        </div>
    </div>

    <!-- <div class="account-setting-item account-setting-button">

        <button class="btn btn-small" onclick="getdata('editprofile');">Edit Profile</button>
        
    </div> -->
</div>
</div>
</div>
</div>
</div>
</div>


<?php
} // End My Profile
if($_REQUEST['what']=="dashboard")
{ // Start Dashboard
?>

<div class="account-info">
    <section class="">
        <div class="container position-relative">
            
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                    <div class="career-card career-card-light">
                        <h3>Your Profile</h3>
                        
                        <a onclick="getdata('myprofile');" class="btn btn-small">Apply Now</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                    <div class="career-card career-card-light">
                        <h3>Add Address</h3>
                        
                        <a onclick="getdata('address');" class="btn btn-small">Apply Now</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                    <div class="career-card career-card-light">
                        <h3>Change Password</h3>
                        
                        <a onclick="getdata('changepass');" class="btn btn-small">Apply Now</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                    <div class="career-card career-card-light">
                        <h3>My Order</h3>
                        
                        <a href="#" class="btn btn-small">Apply Now</a>
                    </div>
                </div>
            
                <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                    <div class="career-card career-card-light">
                        <h3>Log Out</h3>
                        
                        <a href="logout.php" class="btn btn-small">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<?php
} // End Dashboard
if($_REQUEST['what']=="editprofile")
{ // Start EditProfile
?>

<?php
    $data=$con->query("select r.*,a.*,l.* from register as r, area as a, landmark as l where r.areaid=a.areaid and r.landmarkid=l.landmarkid and r.userid='$_SESSION[userid]'");
    $row=mysqli_fetch_array($data);
    {
?>

<form action="" method="POST" name="updateprofile" enctype="multipart/form-data">
    <div class="account-info">
        <div class="account-setting-item account-setting-avatar">

            <div class="sub-section-title">
                <h3 class="color-white">Edit Profile</h3>
            </div>

            <div class="account-page-section pt-100 bg-black">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4">
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4">

                            <div class="account-avatar-info">
                                <div class="account-avatar-thumb">

                                    <img src="<?php echo $row[7]; ?>">

                                </div>
                            </div>

                            <div class="image-upload">
                                <label for="file-input">
                                    <i class="fas fa-images fa-lg cam" style="color:white"></i>
                                </label>

                                <input id="file-input" type="file" name="upprofilepic"/>

                                <input type="hidden" name="oldpath" value="<?php echo $row[7]; ?>">

                            </div>

                            <!-- <i class="fas fa-camera cam" style="color:white"></i> -->
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4">
                        </div>

                        <div class="col-sm-12 col-md-4 col-lg-4">
                        </div>

                        <div class="col-sm-12 col-md-5 col-lg-5" style="padding-left: 20px; padding-top: 8px;">
                            <ul class="account-avatar-action">

                                <li><button type="submit" name="upprofile" class="btn">Upload</button></li>
                                <!-- <li><button type="reset" class="btn btn-yellow">Remove</button></li> -->

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="account-setting-item">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="topbar-right-item" style="color:white">
                        <i class="flaticon-user"></i>
                        <h6 class="color-white">First_Name :</h6>
                    </div>
                    <div class="form-group mb-20">
                        <div class="input-group">
                            <input type="text" name="upfname" id="first_name" class="form-control" value="<?php echo $row[3];?>" />
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                </div>

                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="topbar-right-item" style="color:white">
                        <i class="flaticon-user"></i>
                        <h6 class="color-white">Last_Name :</h6>
                    </div>
                    <div class="form-group mb-20">
                        <div class="input-group">
                            <input type="text" name="uplname" id="last_name" class="form-control" 
                                value="<?php echo $row[4];?>" />
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                </div>

                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="topbar-right-item" style="color:white">
                        <i class="flaticon-email"></i>
                        <h6 class="color-white">Emailid :</h6>
                    </div>
                    <div class="form-group mb-20">
                        <div class="input-group">
                            <input type="text" name="" id="email" class="profile" disabled="" 
                                value="<?php echo $row[2];?>" />
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                </div>

                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="topbar-right-item" style="color:white">
                        <i class="flaticon-phone-call"></i>
                        <h6 class="color-white">Mobile No :</h6>
                    </div>
                    <div class="form-group mb-20">
                        <div class="input-group">
                            <input type="text" name="upmobile" id="phone" class="form-control"
                                value="<?php echo $row[6];?>" />
                        </div>
                    </div>
                </div>

                <!-- <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="topbar-right-item" style="color:white">
                        <i class="flaticon-user"></i>
                        <h6 class="color-white">Gender :</h6>
                    </div>
                    <div class="form-group mb-20">
                        <div class="input-group">
                            <input type="text" name="upgender" id="first_name" class="form-control" required=""
                                value=" <?php echo $row[5];?>" />
                        </div>
                    </div>
                </div> -->

            </div>
        </div>

        <!-- <div class="account-setting-item account-setting-avatar">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="topbar-right-item" style="color:white">
                        <i class="flaticon-login"></i>
                        <h6 class="color-white">Password :</h6>
                    </div>
                    <div class="form-group mb-20">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="flaticon-login-1"></i>
                                </span>
                            </div>
                            <input type="password" name="uppass" id="pass1" class="form-control password"
                                value="<?php echo $row[8];?>" />
                            <div class="input-group-append">
                                <span class="input-group-text reveal">
                                    <i class="flaticon-visibility pass-close"></i>
                                    <i class="flaticon-eye pass-view"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="col-sm-12 col-md-8 col-lg-8">
            <div class="topbar-right-item" style="color:white">
                <i class="flaticon-placeholder"></i>
                <h5 class="color-white">Area :</h5>
            </div>

            <div class="form-group mb-20">
                <div class="input-group">
                    <select name="uparea" class="form-control" onchange="combobox('landmark',this.value)" > 
                        <?php
                            $data=$con->query("select * from area");
                            while($row1=mysqli_fetch_array($data))
                            {
                        ?>
                    
                            <option value="<?php echo $row1[0]; ?>" <?php if($row[0]==$row1[0]){echo "selected";} ?>><?php echo $row1[1] . "[" . $row1[2] . "]"; ?></option>

                        <?php
                            }
                        ?> 
                    </select>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-8 col-lg-8">
            <div class="topbar-right-item" style="color:white">
                <i class="flaticon-placeholder"></i>
                <h6 class="color-white">Landmark :</h6>
            </div>
            <div class="form-group mb-20">
                <div class="input-group">
                <select name="uplandmarkid" class="form-control" id="landmarkdata"> 
                        <?php
                            $data=$con->query("select * from landmark where areaid=$row[0]");
                            while($row2=mysqli_fetch_array($data))
                            {
                        ?>
                    
                            <option value="<?php echo $row2[1]; ?>" <?php if($row[1]==$row2[1]){echo "selected";} ?>><?php echo $row2[2]; ?></option>

                        <?php
                            }
                        ?> 
                    </select>
                </div>
            </div>
        </div>

        <div class="account-setting-item account-setting-button">
            <button type="submit" name="upprofile" class="btn btn-small">Save Change</button>
            <button type="reset" class="btn btn-yellow btn-small">Cancel</button>
        </div>
    </div>
    
</form>
<?php
    }
?>

<?php
} // End EditProfile

if($_REQUEST['what']=="address")
{ // Start Address
?>

<div class="account-info">



    <div class="contact-item">
        <div class="contact-item-title text-center">
            <h3 class="color-white">Address</h3>
        </div>

        <div class="account-page-section pt-100 bg-black">
        <form action="" method="POST" name="address">
            <div class="contact-item-info">

                <div class="select1">
                    <select name="tag" required="">

                        <option value="">--Select Address Line--</option>
                        <option value="home"> Home </option>
                        <option value="office"> Office </option>
                        <option value="factory"> Factory </option>

                    </select>
                </div>

                <div class="comment-input-area mt-30">
                    <div class="form-group mb-20">
                        <div class="input-group">
                            <textarea name="address" class="form-control" placeholder="Address*" required=""
                                pattern="^[A-z]{30}$"></textarea>
                        </div>
                    </div>
                </div>

                <div class="comment-input-area mt-30">
                    <div class="form-group mb-20">
                        <div class="input-group">
                            <textarea name="location" class="form-control" placeholder="Location*" required=""
                                pattern="^[A-z]{30}$"></textarea>
                        </div>
                    </div>
                </div>

                <div class="account-setting-item account-setting-button">
                    <button type="submit" name="addresss" class="btn btn-small">Save Change</button>
                    <button type="reset" class="btn btn-yellow btn-small">Cancel</button>
                </div>
            </div>
        </form>
        </div>
    </div>



</div>

<?php
} // End Address



if($_REQUEST['what']=="mybill")
{ // Start My Bill
?>

        <?php

        $data=$con->query("select * from bill  where userid like '$_SESSION[userid]'");
        while($row=mysqli_fetch_array($data))
        {
            $datat=$con->query("select * from billitem  where billid = $row[2]");
            $rowt=mysqli_fetch_array($datat);
        ?>    
        <div class="checkout-item">
            
            <div class="checkout-details cart-details mb-20" style="padding: 30px;">
                
                <a class="navbar-brand">
                    <img style="height: 110px;width: 110px;margin-left: 40%;" src="assets/images/logo-black.png" title='Eat today,Live another day' alt="logo">
                    <h4></h4>
                </a>
                
                <div class="row">
                    <div class="col-md-6">
                        <p class="header-subtitle-name">
                            Email_Id :<span></span> <?php echo $_SESSION['userid']; ?> <span></span> 
                        </p>
                    </div>

                    <div class="col-md-1"></div>

                    <div class="col-md-5">
                        <p class="header-subtitle-name">
                            Bill_Id :<span></span> <?php echo $rowt[0]; ?> <span></span> 
                        </p>
                    </div>
                </div>

                <h4></h4>

                <div class="row">
                    <div class="col-md-6">
                        <p class="header-subtitle-name">
                            Payment_Id :<span></span> <?php echo $rowt[6]; ?> <span></span> 
                        </p>
                    </div>

                    <div class="col-md-1"></div>

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
                                
                                <th>Product</th>
                                <th>Product Name</th>
                                
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
                    <td class="td-total-price" style="text-align: right; width:100%;" colspan="3" ><i class="fas fa-rupee-sign"></i>&nbsp;<?php echo $amt; ?></td>
                    </tr>
                    </table>
                </div>

                <h4></h4>

                <div class="row">
                <div class="col-md-8"></div>
                    <div class="col-md-4">
                        <p class="header-subtitle-name">
                            Payment_via :<span></span> Netbanking <span></span> 
                        </p>
                    </div>
                    
                </div>

            </div>
            
        </div>

        <?php
        }
    ?>
        

<?php
} // End My Bill



if($_REQUEST['data']=="product")
{ // Start Fixthali Quick View Modal
?>

<?php 
            $in=$con->query("select * from fixthali where fixthaliid=$_REQUEST[proid]");
            while($row=mysqli_fetch_array($in))
        {
        ?>

<div class="modal-header">
    <h3 class="modal-title" id="exampleModalLongTitle">THALI : <?php echo $row[1]; ?><br />PRICE : &nbsp;<i
            class="fas fa-rupee-sign"></i>&nbsp;<?php echo $row[3]; ?>
    </h3>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">

    <div class="product-card-thumb-inner">
        <center><img style="height: 300px; widht:500px;border-radius: 10px;" src="<?php echo $row[2]; ?>"></center>
    </div>

    <center>
        <?php
                        $data=$con->query("select avg(rate) from fixthali_rate where fixthaliid=$_SESSION[proid]");
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
        <i class="fas fa-star" style="padding:10px 10px; font-size:20px;color:#fbc206;"></i>
        <?php		
                                }
                                else
                                {
                                ?>
        <i class="far fa-star" style="padding:10px 10px; font-size:20px;color:#fbc206;"></i>
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
        <i class="fas fa-star" style="padding:10px 10px; font-size:20px;color:#fbc206;"></i>
        <?php
                                        }
                                        else
                                        {
                                            //half
                                        ?>
        <i class="fas fa-star-half-alt" style="padding:10px 10px; font-size:20px;color:#fbc206;"></i>
        <?php
                                        }
                                    }
                                    else
                                    {
                                    ?>
        <i class="fas fa-star" style="padding:10px 10px; font-size:20px;color:#fbc206;"></i>
        <?php 
                                    }
                                }
                                else
                                {
                                ?>
        <i class="far fa-star" style="padding:10px 10px; font-size:20px;color:#fbc206;"></i>
        <?php
                                }
                            }
                        }
                    ?>
    </center>


    <?php
        }
        ?>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <!-- <button type="button" class="btn btn-yellow">Save changes</button> -->
</div>





<?php
} // End Fixthali Quick View Modal



if($_REQUEST['why']=="rate")
{ // Start Fixthali Rate

$data=$con->query("select * from fixthali_rate where userid like '$_REQUEST[kon]' and fixthaliid like '$_REQUEST[kone]'");
$row=mysqli_fetch_array($data);
if($_REQUEST['ketla']!=0)
{
    if($row[0]=="")
    {
        $in=$con->query("insert into fixthali_rate values('$_REQUEST[kone]','$_REQUEST[kon]',0,$_REQUEST[ketla])");
        // echo ("insert into fixthali_rate values('$_REQUEST[kone]','$_REQUEST[kon]',0,$_REQUEST[ketla])");
        
    }
    else
    {
        $up=$con->query("update fixthali_rate set rate='$_REQUEST[ketla]' where userid like '$_REQUEST[kon]' and fixthaliid like '$_REQUEST[kone]'");
    }
    $oldrate=$_REQUEST['ketla'];
}
else
{
    if($row[0]=="")
    {
        $oldrate=0;
    }
    else
    {
        $oldrate=$row[3];
    }
}


//print_r($_REQUEST);

?>

<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Rate Us</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <br />
    Your rate is important for us. Rate to say us hows we are!
    <br />
    <center>
        <?php
                for($i=1;$i<=5;$i++)
                {
                    if($i<=$oldrate)
                    {
                ?>
        <i style="padding:10px 10px; font-size:20px;color:#fbc206;" class="fas fa-star"
            onclick="forrate('rate',<?php echo $_SESSION['proid']; ?>,'<?php echo $_SESSION['userid']; ?>',<?php echo $i; ?>);"></i>
        <?php
                    }
                    else
                    {
                    ?>
        <i style="padding:10px 10px; font-size:20px;color:#fbc206;" class="far fa-star"
            onclick="forrate('rate',<?php echo $_SESSION['proid']; ?>,'<?php echo $_SESSION['userid']; ?>',<?php echo $i; ?>);"></i>
        <?php
                    }
                }
                ?>
        <br />
        <from action="" method="post" name="rateus">
            <a href="" class="btn" style="padding: 10px 25px;">Rate Us</a>
        </form>
    </center>
</div>



<?php
} // End Fixthali Rate



if($_REQUEST['why1']=="rate")
{ // Start Item Rate

$data=$con->query("select * from item_rate where userid like '$_REQUEST[kon1]' and itemid like '$_REQUEST[kone1]'");
$row=mysqli_fetch_array($data);
if($_REQUEST['ketla1']!=0)
{
    if($row[0]=="")
    {
        $in=$con->query("insert into item_rate values('$_REQUEST[kone1]','$_REQUEST[kon1]',0,$_REQUEST[ketla1])");
        // echo ("insert into item_rate values('$_REQUEST[kone]','$_REQUEST[kon]',0,$_REQUEST[ketla])");
        
    }
    else
    {
        $up=$con->query("update item_rate set rate='$_REQUEST[ketla1]' where userid like '$_REQUEST[kon1]' and itemid like '$_REQUEST[kone1]'");
    }
    $oldrate=$_REQUEST['ketla1'];
}
else
{
    if($row[0]=="")
    {
        $oldrate=0;
    }
    else
    {
        $oldrate=$row[3];
    }
}


//print_r($_REQUEST);

?>

<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Rate Us</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <br />
    Your rate is important for us. Rate to say us hows we are!
    <br />
    <center>
        <?php
                for($i=1;$i<=5;$i++)
                {
                    if($i<=$oldrate)
                    {
                ?>
        <i style="padding:10px 10px; font-size:20px;color:#fbc206;" class="fas fa-star"
            onclick="forrrate('rate',<?php echo $_SESSION['proid']; ?>,'<?php echo $_SESSION['userid']; ?>',<?php echo $i; ?>);"></i>
        <?php
                    }
                    else
                    {
                    ?>
        <i style="padding:10px 10px; font-size:20px;color:#fbc206;" class="far fa-star"
            onclick="forrrate('rate',<?php echo $_SESSION['proid']; ?>,'<?php echo $_SESSION['userid']; ?>',<?php echo $i; ?>);"></i>
        <?php
                    }
                }
                ?>
        <br />
        <from action="" method="post" name="rateus">
            <a href="" class="btn" style="padding: 10px 25px;">Rate Us</a>
        </form>
    </center>
</div>


<?php
} // End Item Rate



if($_REQUEST['captcha']=="captcha")
{  // Start Captcha
    $scap="";
?>

<div class="area" style="color:white">

    <p style="color:white">Captcha Huminity:</p>
    <div class="col-sm-12 col-md-4 col-lg-4">

        <div class="subscribe-section mural-bg pt-100 pb-70 bg-main" style="padding:4px; padding-left: 22px; font-size:20px; font-weight:bold;  color:#fff; border-radius: 40px;">

            <span style="padding:0px 6px; -webkit-transform: rotate(50deg);"><?php echo $ek=chr(rand(97,122)); ?></span>
            <span style="padding:0px 6px;"><?php echo $be=chr(rand(65,90)); ?></span>
            <span style="padding:0px 6px; -webkit-transform: rotate(-30deg);"><?php echo $tran=chr(rand(97,122)); ?></span>
            <span style="padding:0px 6px; -webkit-transform: rotate(30deg);"><?php echo $char=rand(0,9); ?></span>
            <span style="padding:0px 6px;"><?php echo $panch=chr(rand(65,90)); ?></span>
            <span style="padding:0px 6px; -webkit-transform: rotate(-50deg);"><?php echo $chha=rand(0,9); ?></span>

        </div>
 
    </div>
</div>



<div class="col-sm-12 col-md-4 col-lg-4">
    <div class="form-group mb-20">
        <div class="input-group">

            <input type="text" id="usercaptcha" class="form-control " title="Captcha" required=""
                placeholder="Captcha" />

        </div>
    </div>
</div>

<div class="form-group mb-20">

    <input type="hidden" value="<?php echo $ek.$be.$tran.$char.$panch.$chha; ?>" class="form-control" required=""
        title="captcha" id="systemcaptcha" />

</div>


<?php
}  // End Captcha



if($_REQUEST['data1']=="product1")
// Start Item Quick View Modal
{
            $in=$con->query("select * from item where itemid=$_REQUEST[proid1]");
            while($row=mysqli_fetch_array($in))
        {
        ?>

<div class="modal-header">
    <h3 class="modal-title" id="exampleModalLongTitle">ITEMS    : <?php echo $row[2]; ?><br/>PRICE  : <i class="fas fa-rupee-sign"></i>&nbsp;<?php echo $row[4]; ?></h3>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">


    <div class="product-card-thumb-inner">
        <center><img style="height: 300px; widht:500px;" src="<?php echo $row[3]; ?>"></center>
    </div>

    <center>
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
        <i class="fas fa-star" style="padding:10px 10px; font-size:20px;color:#fbc206;"></i>
        <?php		
                                            }
                                            else
                                            {
                                            ?>
        <i class="far fa-star" style="padding:10px 10px; font-size:20px;color:#fbc206;"></i>
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
        <i class="fas fa-star" style="padding:10px 10px; font-size:20px;color:#fbc206;"></i>
        <?php
                                                    }
                                                    else
                                                    {
                                                        
                                                    ?>
        <i class="fas fa-star-half-alt" style="padding:10px 10px; font-size:20px;color:#fbc206;"></i>
        <?php
                                                    }
                                                }
                                                else
                                                {
                                                ?>
        <i class="fas fa-star" style="padding:10px 10px; font-size:20px;color:#fbc206;"></i>
        <?php 
                                                }
                                            }
                                            else
                                            {
                                            ?>
        <i class="far fa-star" style="padding:10px 10px; font-size:20px;color:#fbc206;"></i>
        <?php
                                            }
                                        }
                                    }
                                ?>
    </center>
    <?php
        }
        ?>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <!-- <button type="button" class="btn btn-yellow">Save changes</button> -->
</div>

<?php
} // End Item Quick View Modal



if($_REQUEST['combo']=="landmark")
{
    $data=$con->query("select * from landmark where areaid=$_REQUEST[comboid]");
    while($row=mysqli_fetch_array($data))
    {
    ?>
        <option value="<?php echo $row[1]; ?>"><?php echo $row[2]; ?></option>
    <?php
    }
}
?>


<?php require_once 'script.php'; ?>