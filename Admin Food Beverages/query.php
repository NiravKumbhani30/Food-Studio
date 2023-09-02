<?php 
require_once 'connection.php';  


// area query

if(isset($_REQUEST['inarea']))
{
    $data=$con->query("select * from area where name like '$_REQUEST[name]' or pincode=$_REQUEST[pincode]");
    $row=mysqli_fetch_array($data);
    if($row[0]=="")
    {
    $in=$con->query("insert into area values(0,'$_REQUEST[name]','$_REQUEST[pincode]')");
    $_SESSION['insuccess']=1;
    }
    else
    {
        $_SESSION['duperr']=1;
    }
}

if(isset($_REQUEST['uparea']))
{
    $data=$con->query("select * from area where name like '$_REQUEST[upname]' and pincode=$_REQUEST[uppincode]");
    $row=mysqli_fetch_array($data);
    if($row[0]=="")
    {
    $in=$con->query("update area set name='$_REQUEST[upname]',pincode=$_REQUEST[uppincode] where areaid=$_SESSION[upid]");
    unset($_SESSION["upid"]);

    }
    else
    {
        $_SESSION['duperr']=1;
    }
}




// category query

if(isset($_REQUEST['incategory']))
{
    
    // file avilable validation
    if($_FILES['icon']['name']!="")
    {
            
        // file size validation
        if(($_FILES['icon']['size']/1024/1024)<15)
        {
            
            // file type validation
            if($_FILES['icon']['type']=="image/jpg" || $_FILES['icon']['type']=="image/jpeg" || $_FILES['icon']['type']=="image/png")
            {
                
                // file currepted
                if($_FILES['icon']['error']==0)
                {
                   
                    $ex=".".substr($_FILES['icon']['type'],6);
                    $newname=$_REQUEST['name'].date('m').chr(rand(65,90)).rand(10,99);

                    //echo $newname.$ex;
                    
                    $serverpath=dirname(__FILE__)."\assets\images\iconimg\\".$newname.$ex;

                    //echo $serverpath;
                    
                    $databasepath="assets/images/iconimg/".$newname.$ex;

                    //echo $databasepath;

                    if(move_uploaded_file($_FILES['icon']['tmp_name'],$serverpath))
                    {
                        //echo "hyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy";
                       
                        $data=$con->query("select * from category where name like '$_REQUEST[name]'");
                        $row=mysqli_fetch_array($data);
                        if($row[0]=="")
                        {
                        //echo"hyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy";
                        $in=$con->query("insert into category values('0','$_REQUEST[name]','$databasepath')");
                        $_SESSION['insuccess']=1;    
                        }
                        else
                        {
                        //echo"hyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy";
                       
                            $_SESSION['duperr']=1;
                        }
                    }
                }
            } 
        }
    }
}

if(isset($_REQUEST['upcategory']))
{
    
    // file avilable validation
    if($_FILES['upicon']['name']!="")
    {
       

            
        // file size validation
        if(($_FILES['upicon']['size']/1024/1024)<15)
        {
            
            // file type validation
            if($_FILES['upicon']['type']=="image/jpg" || $_FILES['upicon']['type']=="image/jpeg" || $_FILES['upicon']['type']=="image/png")
            {
                
                // file currepted
                if($_FILES['upicon']['error']==0)
                {
                   
                    $ex=".".substr($_FILES['upicon']['type'],6);
                    $newname=$_REQUEST['upname'].date('m').chr(rand(65,90)).rand(10,99);

                    //echo $newname.$ex;
                    
                    $serverpath=dirname(__FILE__)."\assets\images\iconimg\\".$newname.$ex;

                    //echo $serverpath;
                    
                    $databasepath="assets/images/iconimg/".$newname.$ex;

                    //echo $databasepath;

                    if(move_uploaded_file($_FILES['upicon']['tmp_name'],$serverpath))
                    {
                        //echo "hyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy";
                       
                        $up=$con->query("update category set name='$_REQUEST[upname]',icon='$databasepath' where categoryid=$_SESSION[upid]");
                    
                       
                    }
                    
                }
            } 
        }
    }
    else
    {
        $up=$con->query("update category set name='$_REQUEST[upname]',icon='$_REQUEST[oldpath]' where categoryid=$_SESSION[upid]");
    
    }
}




// fixthali query

if(isset($_REQUEST['infixthali']))
{

           
    // file avilable validation
    if($_FILES['image']['name']!="")
    {
            
        // file size validation
        if(($_FILES['image']['size']/1024/1024)<15)
        {
            
            // file type validation
            if($_FILES['image']['type']=="image/jpg" || $_FILES['image']['type']=="image/jpeg" || $_FILES['image']['type']=="image/png")
            {
                
                // file currepted
                if($_FILES['image']['error']==0)
                {
                   
                    $ex=".".substr($_FILES['image']['type'],6);
                    $newname=$_REQUEST['name'].date('m').chr(rand(65,90)).rand(10,99);

                    //echo $newname.$ex;
                    
                    $serverpath="..\mysteryflavour\assets\images\\fixthaliimg\\".$newname.$ex;

                    //echo $serverpath;
                    
                    $databasepath="assets/images/fixthaliimg/".$newname.$ex;

                    //echo $databasepath;

                    
                    if(move_uploaded_file($_FILES['image']['tmp_name'],$serverpath))
                    {
                        // echo "hey";
                        $data=$con->query("select * from fixthali where name like '$_REQUEST[name]'");
                        $row=mysqli_fetch_array($data);
                        if($row[0]=="")
                        {
                         $in=$con->query("insert into fixthali values(0,'$_REQUEST[name]','$databasepath',$_REQUEST[amount])");
                       // echo "insert into fixthali values(0,$_REQUEST[name],'$databasepath',$_REQUEST[amount])";
                        $_SESSION['insuccess']=1;    
                        }
                        else
                        {
                            $_SESSION['duperr']=1;
                        }
                    }
                }
            } 
        }
    }
}

if(isset($_REQUEST['upfixthali']))
{



    // file avilable validation
    if($_FILES['upimage']['name']=="")
    {

       $up=$con->query("update fixthali set amount=$_REQUEST[upamount] ,name='$_REQUEST[upname]',image='$_REQUEST[oldpath]' where fixthaliid=$_SESSION[upfix]");
    }     
    else
    {       
        // file size validation
        if(($_FILES['upimage']['size']/1024/1024)<15)
        {
            
            // file type validation
            if($_FILES['upimage']['type']=="image/jpg" || $_FILES['upimage']['type']=="image/jpeg" || $_FILES['upimage']['type']=="image/png")
            {
                
                // file currepted
                if($_FILES['upimage']['error']==0)
                {
                   
                    $ex=".".substr($_FILES['upimage']['type'],6);
                    $newname=$_REQUEST['upname'].date('m').chr(rand(65,90)).rand(10,99);

                    //echo $newname.$ex;
                    
                    $serverpath="..\mysteryflavour\assets\images\iconimg\\".$newname.$ex;

                    //echo $serverpath;
                    
                    $databasepath="assets/images/iconimg/".$newname.$ex;

                    //echo $databasepath;

                    if(move_uploaded_file($_FILES['upimage']['tmp_name'],$serverpath))
                    {
                        
                       
                        $up=$con->query("update fixthali set amount=$_REQUEST[upamount],name='$_REQUEST[upname]',image='$databasepath' where fixthaliid=$_SESSION[upfix]");
                    
                       
                    }
                    else
                    {
                        $_SESSION['duperr']=1;
                    }
                }
            } 
        }
    }

    
}




// item query

if(isset($_REQUEST['initem']))
{

    // file avilable validation
    if($_FILES['image']['name']!="")
    {
           
        // file size validation
        if(($_FILES['image']['size']/1024/1024)<15)
        {
            
            // file type validation
            if($_FILES['image']['type']=="image/jpg" || $_FILES['image']['type']=="image/jpeg" || $_FILES['image']['type']=="image/png")
            {
                
                // file currepted
                if($_FILES['image']['error']==0)
                {
                   
                    $ex=".".substr($_FILES['image']['type'],6);
                    $newname=$_REQUEST['name'].date('m').chr(rand(65,90)).rand(10,99);

                    
                    
                    $serverpath="..\mysteryflavour\assets\images\\itemimg\\".$newname.$ex;

                    //echo $serverpath;
                    
                    $databasepath="assets/images/itemimg/".$newname.$ex;

                    //echo $databasepath;

                        
                    if(move_uploaded_file($_FILES['image']['tmp_name'],$serverpath))
                    {
                       
                        $data=$con->query("select * from item where name like '$_REQUEST[name]'");
                        $row=mysqli_fetch_array($data);
                        if($row[0]=="")
                        {
                         $in=$con->query("insert into item values($_REQUEST[categoryid],0,'$_REQUEST[name]','$databasepath',$_REQUEST[amount])");
                            
                        $_SESSION['insuccess']=1;    
                        }
                        else
                        {
                            $_SESSION['duperr']=1;
                        }
                    }
                }
            } 
        }
    }
}

if(isset($_REQUEST['upitem']))
{
    

         // file avilable validation
    if($_FILES['upimage']['name']!="")
    {
       
      
        // file size validation
        if(($_FILES['upimage']['size']/1024/1024)<15)
        {
            
            // file type validation
            if($_FILES['upimage']['type']=="image/jpg" || $_FILES['upimage']['type']=="image/jpeg" || $_FILES['upimage']['type']=="image/png")
            {
                
                // file currepted
                if($_FILES['upimage']['error']==0)
                {
                   
                    $ex=".".substr($_FILES['upimage']['type'],6);
                    $newname=$_REQUEST['upname'].date('m').chr(rand(65,90)).rand(10,99);

                    
                    
                    $serverpath="..\mysteryflavour\assets\images\itemimg\\".$newname.$ex;

                    //echo $serverpath;
                    
                    $databasepath="assets/images/itemimg/".$newname.$ex;

                    //echo $databasepath;

                        
                    if(move_uploaded_file($_FILES['upimage']['tmp_name'],$serverpath))
                    {
                                               
                            $in=$con->query("update item set categoryid=$_REQUEST[upcategoryid],name='$_REQUEST[upname]',image='$databasepath',amount=$_REQUEST[upamount] where itemid=$_SESSION[upid]");

                            //echo ("update item set categoryid=$_REQUEST[upcategoryid],name='$_REQUEST[upname]',image='$databasepath',amount=$_REQUEST[upamount] where itemid=$_SESSION[upid]");

            
                    }
                    
                }
            } 
        }
    }
    else
    {
        $in=$con->query("update item set categoryid=$_REQUEST[upcategoryid],name='$_REQUEST[upname]',image='$_REQUEST[oldpath]',amount=$_REQUEST[upamount] where itemid=$_SESSION[upid]");
    }
    
   
}




// landmark query

if(isset($_REQUEST['inlandmark']))  
{
    $data=$con->query("select * from landmark where name like '$_REQUEST[name]' ");
    $row=mysqli_fetch_array($data);
    if($row[0]=="")
    {
    $in=$con->query("insert into landmark values($_REQUEST[area],0,'$_REQUEST[name]')");
    // echo "insert into landmark values($_REQUEST[area],0,'$_REQUEST[name]')";
    $_SESSION['insuccess']=1;
    }
    else
    {
        $_SESSION['duperr']=1;
    }
}

if(isset($_REQUEST['uplandmark']))
{
   
            
     $up=$con->query("update landmark set areaid=$_REQUEST[upareafk],name='$_REQUEST[upname]' where landmarkid=$_SESSION[upid]");
     unset($_SESSION['upid']);
  
}




// offer query

if(isset($_REQUEST['inoffer']))
{
    
    // file avilable validation
    if($_FILES['image']['name']!="")
    {
        
        // file size validation
        if(($_FILES['image']['size']/1024/1024)<15)
        {
            
            // file type validation
            if($_FILES['image']['type']=="image/jpg" || $_FILES['image']['type']=="image/jpeg" || $_FILES['image']['type']=="image/png")
            {
                
                // file currepted
                if($_FILES['image']['error']==0)
                {
                   
                    $ex=".".substr($_FILES['image']['type'],6);
                    $newname=$_REQUEST['name'].date('m').chr(rand(65,90)).rand(10,99);

                    //echo $newname.$ex;
                    
                    $serverpath=dirname(__FILE__)."\assets\images\\offerimg\\".$newname.$ex;

                    //echo $serverpath;
                    
                    $databasepath="assets/images/offerimg/".$newname.$ex;

                    //echo $databasepath;

                        
                    if(move_uploaded_file($_FILES['image']['tmp_name'],$serverpath))
                    {
                       
                        $data=$con->query("select * from offer where name like '$_REQUEST[name]'");
                        $row=mysqli_fetch_array($data);
                        if($row[0]=="")
                        {
                         $in=$con->query("insert into offer values(0,'$_REQUEST[name]','$databasepath','$_REQUEST[startdate]','$_REQUEST[enddate]',$_REQUEST[offeramount],1)");
                       // echo "insert into fixthali values(0,$_REQUEST[name],'$databasepath',$_REQUEST[amount])";
                        $_SESSION['insuccess']=1;    
                        }
                        else
                        {
                            $_SESSION['duperr']=1;
                        }
                    }
                }
            } 
        }
    }
}


if(isset($_REQUEST['upoffer']))
{
 
      //file available validation
      if($_FILES['upimage']['name']=="")
    {
      
        $up=$con->query("update offer set offeramount=$_REQUEST[upofferamount] ,startdate='$_REQUEST[upstartdate]',enddate='$_REQUEST[upenddate]',name='$_REQUEST[upname]', image='$_REQUEST[oldpath]' where offerid=$_SESSION[upoff]");

    }
    else
    {
      //echo "hiiiiiiiiiiiiiiiiiiiiiii";
          //file size validation     
          if(($_FILES['upimage']['size']/1024/1024)<10)
        {  
              //image type validation
              if($_FILES['upimage']['type']=="image/jpg" || $_FILES['upimage']['type']=="image/jpeg" || $_FILES['upimage']['type']=="image/png" )
            {
                  //file currepted
                  if($_FILES['upimage']['error']==0)
                {
                    $ex=".".substr($_FILES['upimage']['type'],6);
                    $newname=$_REQUEST['name'].date('m').chr(rand(65,90)).rand(10,99);
  
                    //echo $newname.$ex;
  
                    $serverpath=dirname(__FILE__)."\assets\images\offerimg\\".$newname.$ex;
  
                //echo $serverpath;

                    $databasepath="assets/images/offerimg/".$newname.$ex;
                    
                    // echo $databasepath;

                    if(move_uploaded_file($_FILES['upimage']['tmp_name'],$serverpath))
                    {
                    
                    // $data=$con->query("select * from fixthali where name like '$_REQUEST[upname]'");
                    // $row=mysqli_fetch_array($data);
                    // if($row[0]=="")
                    
                    $in=$con->query("update offer set offeramount=$_REQUEST[upofferamount] , startdate='$_REQUEST[upstartdate]', enddate='$_REQUEST[upenddate]', name='$_REQUEST[upname]',image='$databasepath' where offerid='$_SESSION[upoff]'");
                    $_SESSION['insuccess']=1;
                    
                    
                    // $in=$con->query("insert into category values('0','$_REQUEST[name]','$databasepath')");
                    } else
                    {
                        $_SESSION['duperr']=1;
                    }
                     
                }
            }
        }

    }
}

if(isset($_REQUEST['inassign1']))
{
    //  echo "hey";
    foreach($_REQUEST['rem'] as $val)
    
        {
            //echo ("insert into fixthaliitemassign values($_REQUEST[fixthaliid],$val,0)");

            $in1=$con->query("insert into fixthaliitemassign values($_REQUEST[fixthaliid],$val,0)");
            $com=$con->query("select count(*) from fixthaliitemassign where fixthaliid='$_REQUEST[fixthaliid]'");
            $rr1=mysqli_fetch_array($com);
            $up1=$con->query("update fixthali set numofmen=$rr1[0] where fixthaliid='$_REQUEST[fixthaliid]'");
        }
    
}


// if(isset($_REQUEST['upassign']))
// {
//     echo ("update item set fixthaliid=$_REQUEST[upfixthaliid],itemid=$_REQUEST[rem] where fixthaliassignid=$_SESSION[upid]");
//     $in=$con->query("update item set fixthaliid=$_REQUEST[upfixthaliid],itemid=$_REQUEST[rem] where fixthaliassignid=$_SESSION[upid]");

// }


?>