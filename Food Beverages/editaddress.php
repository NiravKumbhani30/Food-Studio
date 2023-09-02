<?php
if($_REQUEST['what']=="myaddress")
{ // Start My Address
?>




<div class="account-info">
    <div class="my-order">
        <div class="sub-section-title">
            <h3 class="color-white">My Addresses</h3>

        </div>
        <div class="row">
            <div class="col-lg-12">
            <div class="billing-address">
                <div class="billing-title">
                    <h4></h4>
                    <p onclick="getdata('editaddress');">Edit</p>
                </div>
                
                <?php
                    $upr=$con->query("select * from address where userid like '$_SESSION[userid]'");
                    $row=mysqli_fetch_array($upr);
                ?>  
                            
                                <div class="contact-item-info">
                                    <center>
                                    <div class="comment-input-area mt-30">
                                        <div class="form-group mb-20">
                                            <div class="input-group" style="width: 100px;">
                                                
                                                <input disabled="" class="profile" value="<?php echo $row[2];?>" />

                                            </div>
                                        </div>
                                    </div>
                                    </center>

                                    <div class="comment-input-area mt-30">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <input disabled="" class="profile" value="<?php echo $row[3];?> " />
                                            </div>
                                        </div>
                                    </div>

                                    
                                </div>
                           
                        
                    
                </div>

            </div>
        </div>
    </div>
</div>


<?php
} // End  My Address

if($_REQUEST['what']=="editaddress")
{ // Start EditAddress
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
} // End Edit Address
?>