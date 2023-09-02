<?php require_once 'connection.php';
$_SESSION['page'] = "login";

if($_SESSION['userid']!="")
{
    header('location:usermaster.php');
}

if(isset($_REQUEST['login']))
{
    // sql injection
    $userid=$con->real_escape_string($_REQUEST['userid']);
    $password=$con->real_escape_string($_REQUEST['password']);
    // setcookie("block",$userid,time()+31556926,'/');
    // echo $_COOKIE ['block'];

    // echo $userid;
    // echo $password;

    //query wirzard
    $data = $con->query ("select * from register where userid like '$userid' and password like '$password'");
    $row = mysqli_fetch_array($data);

    if($row[2]=="")
    {
        $flag=1;


        // $ch= $con->query ("select * from register where userid like '$_COOKIE[block]'");
        // $chh=mysqli_fetch_array($ch);

        // if($chh[0]!="")
        // {
        //     echo "hey";
        // }
       
    }
    else
    {
        //user info
        $_SESSION['userid']=$row[2];
        $_SESSION['username']=$row[4]." ".$row[3];
        $_SESSION['lastlogin']=$row[9];
        $_SESSION['identity']="dashboard";

        if(isset($_REQUEST['rem']))
        {
            setcookie('cuserid',$row[2]);
            setcookie('cpassword',$row[8]);
        }
        else
        {
            if(isset($_COOKIE['cuserid']))
            {
                setcookie('cuserid',$row[2],time()-60);
                setcookie('cpassword',$row[8],time()-60);
            }
        }
        header('location:usermaster.php');

    }
}
?>


<!DOCTYPE html>
<html lang="zxx">


<?php require_once 'head.php';?>

<body>


    <?php require_once 'header.php';?>


    <div class="header-bg header-bg-page">
        <div class="header-padding position-relative">
            <div class="header-page-shape">

                <div class="header-page-shape-item ">

                    <img src="assets/images/header-shape-3.png" alt="shape" style="height:100px;">
                </div>
                <div class="header-page-shape-item">
                    <img src="assets/images/header-shape-1.png" alt="shape">
                </div>

            </div>

            <div class="container mr ">
                <div class="row">

                    <div class="col-md-1">

                    </div>

                    <div class="col-md-6 ">
                        <h2 class="animate" style="color:white">Welcome Back!  Food Beverages</h2>
                        <h6>
                            <p>
                                We gain the satisfaction of our customers with our
                                delicate service and extreme high food quality.Country's best thali are delivered by us.

                            </p>
                        </h6>
                        <div style="color:white;text-align: center;" class="animate__animated animate__fadeInDownBig">
                            <?php
                                if($flag==1)
                                {
                                    echo"<font color=red size=6>[Oops!Somthing wrong!]</font>";
                                }
                            ?>

                        </div>

                    </div>

                    <div class="col-md-1">

                    </div>


                    <div class="col-md-4">

                        <h1 style="text-align: left;color: white;">Login

                        </h1>
                        <div class="authentication-details">
                            <div class="authentication-details-item active" data-authentication-details="1">
                                <form action="" method="post" name="login" class="sign-in-from">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="xyz@yourmail.com"
                                                required="" name="userid" value=" 
                                                <?php
                                                    if(isset($_COOKIE['cuserid']))
                                                    {
                                                        echo $_COOKIE['cuserid'];
                                                    } 
                                                ?> ">
                                            <div class="input-group-append">
                                                <span class="input-group-text reveal">
                                                    <i class="flaticon-email"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <!-- <div class="input-group-append">
                                                <span class="input-group-text reveal">
                                                    <i class="flaticon-email"></i>
                                                </span>
                                            </div> -->
                                            <input type="password" id="lpassword" class="form-control password"
                                                placeholder="**********" required="" name="password"
                                                pattern="^[a-z0-9]{8,}$" value="<?php
                                                    if(isset($_COOKIE['cpassword']))
                                                    {
                                                        echo $_COOKIE['cpassword'];
                                                    } 
                                                ?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text reveal">
                                                    <i class="flaticon-visibility pass-close"></i>
                                                    <i class="flaticon-eye pass-view"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="authentication-action mb-20">

                                        <div class="form-check">
                                            <?php
                                            if(isset($_COOKIE['cuserid']))
                                            {        
                                            ?>
                                            <input class="form-check-input haa" type="checkbox" name="rem" id="contact1"
                                                checked="">
                                            <label class="haa" for="contact1">Remember Me?</label>
                                            <?php
                                            }
                                            else
                                            {
                                            ?>
                                            <input class="form-check-input haa" type="checkbox" name="rem"
                                                id="contact1">
                                            <label class="haa" for="contact1">Remember Me?</label>
                                            <?php
                                            }
                                            ?>
                                        </div>

                                        <!-- <div class="authentication-action-item"> -->
                                        <!-- </div> -->
                                        <div class="authentication-action-item">
                                            <a href="forgotpassword.php">Forgot Password?</a>
                                        </div>
                                    </div>

                                    <div class="authentication-btn containe p-0">
                                        <div class="row ">
                                            <div class="col-md-6 mb-20"><button type="submit" name="login"
                                                    class="btn w-100">Log In</button></div>
                                            <div class="col-md-6"><button type="reset"
                                                    class="btn w-100 btn-yellow">Clear</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="contanier">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="authentication-action-item" style="color:white;padding-left :40px;"> Don't have
                                                    an account?
                                                    <a href="register.php">Create
                                                        Account</a>
                                                </div>

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
    </div>
    
    <?php require_once 'script.php';?>
</body>



</html>