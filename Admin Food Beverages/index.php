<?php require_once 'connection.php';
$_SESSION['page'] = "login";

// if(isset($_REQUEST['emailid']))
// {
//     header('location:dashboard.php');
// }

if(isset($_REQUEST['login']))
{
    // sql injection
    $emailid=$con->real_escape_string($_REQUEST['emailid']);
    $password=$con->real_escape_string($_REQUEST['password']);

    // echo $emailid;
    // echo $password;

    //query wirzard
    $data = $con->query ("select * from admin where emailid like '$emailid' and password like '$password'");
    $row = mysqli_fetch_array($data);

    if($row[2]=="")
    {
        $flag=1;
       
    }
    else
    {
        //user info
        $_SESSION['emailid']=$row[0];
        // $_SESSION['username']=$row[4]." ".$row[3];
        $_SESSION['lastlogin']=$row[2];
        $_SESSION['identity']="dashboard";

        if(isset($_REQUEST['rem']))
        {
            setcookie('cemailid',$row[0]);
            setcookie('cpassword',$row[1]);
        }
        else
        {
            if(isset($_COOKIE['cemailid']))
            {
                setcookie('cemailid',$row[0],time()-60);
                setcookie('cpassword',$row[1],time()-60);
            }
        }
        header('location:dashboard.php');

    }
}
?>


<!DOCTYPE html>
<html lang="en">



<?php require_once 'head.php'; ?>

<body class="account-body accountbg">

    
    <div class="container">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 auth-header-box">
                                <div class="text-center p-3">
                                    <a href="index.html" class="logo logo-admin">
                                        <img src="assets/images/logo-black.png" height="70" alt="logo"
                                            class="auth-logo">
                                    </a>
                                    <h4 class="mt-3 mb-1 font-weight-semibold text-white font-18">Let's Get Started
                                    Food Beverages</h4>
                                    <p class="text-muted  mb-0">Sign in to continue to Food Beverages</p>
                                    <?php
                                        if($flag==1)
                                        {
                                            echo"<font color=red size=4>[Oops!Somthing wrong!]</font>";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="card-body p-0" style="background-color: #fff;">
                                <ul class="nav-border nav nav-pills" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active font-weight-semibold" data-toggle="tab"
                                            href="#LogIn_Tab" role="tab">Log In</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-semibold" data-toggle="tab" href="#Register_Tab"
                                            role="tab">Register</a>
                                    </li>
                                </ul>
                                
                                <div class="tab-content">
                                    <div class="tab-pane active p-3" id="LogIn_Tab" role="tabpanel">
                                        <form class="form-horizontal auth-form" action="" method="post" name="login">

                                            <div class="form-group mb-2">
                                                <label for="username">Email Id :</label>
                                                <div class="input-group">
                                                    <input type="email" class="form-control" name="emailid" id="username"
                                                        required="" placeholder="Enter Email id" value="
                                                        <?php
                                                            if(isset($_COOKIE['cemailid']))
                                                            {
                                                                echo $_COOKIE['cemailid'];
                                                            } 
                                                        ?> ">

                                                </div>
                                            </div>
                                            

                                            <div class="form-group mb-2">
                                                <label for="userpassword">Password :</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" name="password"
                                                        id="lpassword" required="" placeholder="Enter password" value="<?php
                                                                    if(isset($_COOKIE['cpassword']))
                                                                    {
                                                                        echo $_COOKIE['cpassword'];
                                                                    } 
                                                                 ?>">
                                                </div>
                                            </div>
                                            

                                            <div class="form-group row my-3">
                                                <div class="col-sm-6">
                                                    <div class="custom-control custom-switch switch-success">
                                                        <?php
                                                    if(isset($_COOKIE['cemailid']))
                                                    {        
                                                    ?>
                                                        <input type="checkbox" class="custom-control-input"
                                                        name="rem" id="contact1"
                                                        checked="">
                                                        
                                                        <label class="custom-control-label text-muted"
                                                            for="contact1">Remember me</label>
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                    ?>
                                                        <input type="checkbox" class="custom-control-input"
                                                        name="rem" id="contact1">
                                                        <label class="custom-control-label text-muted"
                                                            for="contact1">Remember me</label>
                                                    <?php
                                                    }
                                                    ?>
                                                    </div>
                                                </div>
                                               
                                                <!-- <div class="col-sm-6 text-right">
                                                        <a href="auth-recover-pw.html" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>                                    
                                                    </div>  -->
                                            </div>
                                            
                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block waves-effect waves-light"
                                                        type="submit" name="login">Log In <i
                                                            class="fas fa-sign-in-alt ml-1"></i></button>
                                                </div>
                                               
                                            </div>
                                            
                                        </form>
                                       
                                        <div class="m-3 text-center text-muted">
                                            <p class="mb-0">Don't have an account ? <a href="auth-register.html"
                                                    class="text-primary ml-2">Free Resister</a></p>
                                        </div>
                                        <!-- <div class="account-social">
                                            <h6 class="mb-3">Or Login With</h6>
                                        </div>
                                        <div class="btn-group btn-block">
                                            <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Facebook</button>
                                            <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Twitter</button>
                                            <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Google</button>
                                        </div> -->
                                    </div>
                                    <div class="tab-pane px-3 pt-3" id="Register_Tab" role="tabpanel">
                                        <form class="form-horizontal auth-form"
                                            action="https://mannatthemes.com/dastone-1/default/index.html">

                                            <div class="form-group mb-2">
                                                <label for="username">Username</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="username"
                                                        id="username" placeholder="Enter username">
                                                </div>
                                            </div>
                                            

                                            <div class="form-group mb-2">
                                                <label for="useremail">Email</label>
                                                <div class="input-group">
                                                    <input type="email" class="form-control" name="email" id="useremail"
                                                        placeholder="Enter Email">
                                                </div>
                                            </div>
                                            

                                            <div class="form-group mb-2">
                                                <label for="userpassword">Password</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" name="password"
                                                        id="userpassword" placeholder="Enter password">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group mb-2">
                                                <label for="conf_password">Confirm Password</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" name="conf-password"
                                                        id="conf_password" placeholder="Enter Confirm Password">
                                                </div>
                                            </div>
                                            

                                            <div class="form-group mb-2">
                                                <label for="mo_number">Mobile Number</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="mobile number"
                                                        id="mo_number" placeholder="Enter Mobile Number">
                                                </div>
                                            </div>
                                            

                                            <div class="form-group row my-3">
                                                <div class="col-sm-12">
                                                    <div class="custom-control custom-switch switch-success">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customSwitchSuccess2">
                                                        <label class="custom-control-label text-muted"
                                                            for="customSwitchSuccess2">You agree to the Metrica <a
                                                                href="#" class="text-primary">Terms of Use</a></label>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            

                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block waves-effect waves-light"
                                                        type="button">Register <i
                                                            class="fas fa-sign-in-alt ml-1"></i></button>
                                                </div>
                                               
                                            </div>
                                            
                                        </form>
                                        
                                        <p class="my-3 text-muted">Already have an account ?<a href="auth-login.html"
                                                class="text-primary ml-2">Log in</a></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-body bg-light-alt text-center">
                                <span class="d-none d-sm-inline-block text-white">Food Bevereges @ 2022</span>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
           
        </div>
        
    </div>
    






    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/simplebar.min.js"></script>


</body>




</html>