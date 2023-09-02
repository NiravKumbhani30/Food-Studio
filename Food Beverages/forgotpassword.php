<?php require_once 'connection.php';

if(isset($_REQUEST['getpassword']))
{
    $userid=$con->real_escape_string($_REQUEST['userid']);

    $data = $con->query ("select * from register where userid like '$userid'");
    $row = mysqli_fetch_array($data);

    if($row[0]=="")
    {
        $flag=1;
       
    }
    else
    {
        $to=$row[2];
        $subject="mysteryflavours: password";
        $headers="content-type:text/html; charset=UTF-8\r\n"; 
        $body='
        <html>
            <body>

                <center><b style="background-color:#252851; color:white; border-radius:10px;">&nbsp;&nbsp;your password : '.$row[8].'&nbsp;&nbsp;</b></center>
                
            </body>
        </html> 
        ';
        if(mail($to,$subject,$body,$headers))
        {
            header('location:login.php');
        }
        else
        {
          echo "Sorry! Network Problem..!";
        }
    }

}
?>


<!DOCTYPE html>
<html lang="zxx">


<?php require_once 'head.php';?>

<body>

    <?php require_once 'header.php';?>


    <div class="header-bg header-bg-page">
        <div class="header-padding-bg1 position-relative">
            <div class="header-page-shape">

                <div class="header-page-shape-item">
                    <img src="assets/images/header-shape-3.png" alt="shape">
                </div>
                <div class="header-page-shape-item">
                    <img src="assets/images/header-shape-1.png" alt="shape">
                </div>

            </div>

            <div class="container mr">
                <div class="row">

                    <div class="col-md-8">
                    <h6 class="forget" style="color:#b4b4b4">Please enter your email address and we will send your login details via email. </h6>
                    <center>
                        <?php
                        if($flag==1)
                        {
                            echo"<font color=red size=5>[somthing worng!]</font>";
                        }
                        ?>
                    </center>

                </div>

                    <div class="col-md-4">
                        <div style="color:white" >
                            <h1>Forgot Password
                                
                            </h1>
                        </div>
                        <div class="authentication-details ">
                            <div class="authentication-details-item active" data-authentication-details="1">
                                <form action="" method="post" name="login" class="sign-in-from">
                                    <div class="form-group mb-20 ">
                                        <div class="input-group ">
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


                                    <div class="authentication-btn containe p-0">
                                        <div class="row">
                                            <div class="col-md-6 mb-20"><button type="submit" name="getpassword"
                                                    class="btn w-100">Submit</button></div>
                                            <div class="col-md-6"><button class="btn w-100 btn-yellow"
                                                    type="reset">Clear</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contanier">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="authentication-action-item" style="color:white"> Don't have
                                                    an account?
                                                    <a href="register.php" >Create
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
    </div>
    <?php require_once 'script.php';?>
</body>



</html>