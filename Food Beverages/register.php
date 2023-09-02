<?php
require_once 'connection.php';

if(isset($_REQUEST['submit']))
{
    
    // file avilable validation
    if($_FILES['profilepic']['name']!="")
    {
        
        // file size validation
        if(($_FILES['profilepic']['size']/1024/1024)<3)
        {
            // file type validation
            if($_FILES['profilepic']['type']=="image/jpg" || $_FILES['profilepic']['type']=="image/jpeg" || $_FILES['profilepic']['type']=="image/png")
            {
            
                // file currepted
                if($_FILES['profilepic']['error']==0)
                {
                   
                    $ex=".".substr($_FILES['profilepic']['type'],6);
                    $newname=$_REQUEST['fname'].date('m').chr(rand(65,90)).rand(10,99);

                    //echo $newname.$ex;

                    $serverpath=dirname(__FILE__)."\img\userprofile\\".$newname.$ex;

                    //echo $serverpath;

                    $databasepath="img/userprofile/".$newname.$ex;

                    //echo $databasepath;

                    if(move_uploaded_file($_FILES['profilepic']['tmp_name'],$serverpath))
                    {
                       $in=$con->query("insert into register values('$_REQUEST[areaid]','$_REQUEST[landmarkid]','$_REQUEST[userid]','$_REQUEST[fname]','$_REQUEST[lname]','$_REQUEST[gender]','$_REQUEST[mobile]','$databasepath','$_REQUEST[password]','')");
                       
                       header('location:login.php');
                       
                    }
                }
            }
        } 
    }
}


?>









<!DOCTYPE html>
<html lang="zxx">


<?php require_once 'head.php';?>

<body onload="getdatacaptcha('captcha');">

    <?php require_once 'header.php';?>

    <div class="account-page-section pt-100 pb-70 bg-black">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 pb-30">
                    <div class="account-sidebar around-border">
                        <img class="emoji" src="assets/images/myemoji.png" alt="shape">
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 pb-30">
                    <div class="account-info">
                        <form action="" method="post" name="login" novalidate="" onsubmit="return checkpass();"
                            enctype="multipart/form-data">

                            <div class="account-setting-item-b">
                                <div class="row">
                                    <h1 class="sign" style="color:white">Welcome To  Food Beverages</h1>
                                    <h2 class="sign" style="color:white">Sign Up Now</h2>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <div class="topbar-right-item" style="color:white">
                                                    <i class="flaticon-user"></i>
                                                </div>
                                                <input type="text" name="fname" class="form-control"
                                                    placeholder="First Name*" required="" pattern="^[a-z]$" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <div class="topbar-right-item" style="color:white">
                                                    <i class="flaticon-user"></i>
                                                </div>
                                                <input type="text" name="lname" class="form-control"
                                                    placeholder="Last Name*" required="" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <div class="topbar-right-item" style="color:white">
                                                    <i class="flaticon-email"></i>
                                                </div>
                                                <input type="email" name="userid" class="form-control"
                                                    placeholder="xyz@yourmail.com" required="" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <div class="topbar-right-item" style="color:white;">
                                                    <i class="flaticon-phone-call"></i>
                                                </div>
                                                <input type="text" name="mobile" class="form-control" 
                                                    placeholder="+91********48" required="" pattern="^[0-9]{10}$" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group ss">
                                                <div class="topbar-right-item" style="color:white">
                                                    <i class="fas fa-mars"></i>
                                                </div>
                                                <input style="cursor:pointer" type="radio" name="gender" 
                                                id="contact11" checked="" value="male" placeholder="male">
                                                <label class="haa" for="contact11"> &nbsp;&nbsp;Male &nbsp;&nbsp;&nbsp;
                                                </label>
                                                <i style="color:white" class="fas fa-venus"></i>
                                                &nbsp;&nbsp;&nbsp;
                                                <input style="cursor:pointer" type="radio" name="gender" id="contact1" value="female">
                                                <label class="haa" for="contact1"> &nbsp;&nbsp;Female &nbsp;&nbsp;</label><br>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12 ">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5 col-lg-5">
                                                <div class="area" style="color:white">

                                                    <label>Choose a area:</label>
                                                    <select name="areaid" onchange="combobox('landmark',this.value);"
                                                        required="">
                                                        <option value="">--- Select ---</option>
                                                        <?php
                                                            $data=$con->query("select * from area");
                                                            while($row=mysqli_fetch_array($data))
                                                            {
                                                            ?>
                                                        <option value="<?php echo $row[0]; ?>">
                                                            <?php echo $row[1]."[". $row[2] ."]"; ?></option>
                                                        <?php
                                                            }
                                                            ?>
                                                    </select>
                                                    <br><br>

                                                </div>
                                            </div>

                                            <div class="col-sm-12 col-md-2 col-lg-2">
                                            </div>

                                            <div class="col-sm-12 col-md-4 col-lg-4">
                                                <div class="area" style="color:white">

                                                    <label>Choose a landmark:</label>
                                                    <select name="landmarkid" id="landmarkdata" required="">
                                                        <option value="">--- Select ---</option>

                                                    </select>
                                                    <br><br>

                                                </div>
                                            </div>


                                            <div class="col-sm-12 col-md-2 col-lg-2">
                                            </div>


                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input style="color:white;outline:none;" type="file"
                                                        name="profilepic" required="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="account-setting-item account-setting-avatar">
                                    <div class="sub-section-title">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <div class="topbar-right-item" style="color:white">
                                                        <i class="flaticon-login"></i>
                                                    </div>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="flaticon-login-1"></i></span>
                                                    </div>
                                                    <input type="password" name="password" id="rnpassword"
                                                        class="form-control password" placeholder="Password" required=""
                                                        pattern="^[a-z0-9]{8,}$"
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
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <div class="topbar-right-item" style="color:white">
                                                        <i class="flaticon-login"></i>
                                                    </div>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="flaticon-login-1"></i></span>
                                                    </div>
                                                    <input type="password" name="password" id="rcpassword"
                                                        class="form-control password" placeholder="Confirm Password"
                                                        required="" pattern="^[a-z0-9]{8,}$"
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




                                <div id="captcha"></div>







                                <div class="form-check">
                                    <input class="form-check-input haa" type="checkbox" name="rem" id="checkbox"
                                        checked="">
                                    <div class="" style="color: #b4b4b4">
                                        By creating an account, I accept the
                                        <a href="terms-conditions.php">Terms & Condition</a>
                                    </div>
                                </div>



                                <div class="account-setting-item account-setting-button">
                                    <button class="btn btn-small" type="submit" name="submit">Sign In</button>
                                    <button class="btn btn-yellow btn-small" type="reset">Cancel</button>
                                </div>
                            </div>
                        </form>
                        <div class="item1" style="color:white"> Already have an account?
                            <a href="login.php">Log In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <?php require_once 'script.php';?>
</body>


</html>