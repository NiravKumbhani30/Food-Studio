<?php
require_once 'connection.php';
require_once 'query.php';
if($_REQUEST['what']!="")
{
$_SESSION['identity']=$_REQUEST['what'];
}
$perpage=4;
$page=5;

//print_r($_REQUEST);

// start Dashboard
if($_REQUEST['what']=="dashboard")
{
?>



        
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-md-12">
                    <p class="adminp"><i class="fas fa-quote-left"></i>&nbsp;<?php echo $_SESSION['identity']." "." "; ?>&nbsp;<i class="fas fa-quote-right"></i></p>
                    <hr />
                </div>
                    
            </div>                                                             
                    
            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">                      
                                    <h4 class="card-title" style="font-weight: bold;">Revenu Status</h4>                      
                                </div><!--end col-->
                                <div class="col-auto"> 
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            This Month<i class="las la-angle-down ml-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">This Year</a>
                                        </div>
                                    </div>               
                                </div><!--end col-->
                            </div>  <!--end row-->                                  
                        </div><!--end card-header-->
                        <div class="card-body"> 
                            <div class="">
                                <div id="Revenu_Status" class="apex-charts"></div>
                            </div>                                                                                                                          
                        </div><!--end card-body--> 
                    </div><!--end card-->  
                    <div class="row">
                        <div class="col-12 col-lg-6 col-xl"> 
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col text-center">                                                                        
                                            <span class="h4"><i class="fas fa-rupee-sign"></i>&nbsp;24,500</span>      
                                            <h6 class="text-uppercase text-muted mt-2 m-0">Weekly Sales</h6>                
                                        </div><!--end col-->
                                    </div> <!-- end row -->
                                </div><!--end card-body-->
                            </div> <!--end card-body-->                     
                        </div><!--end col-->
                        <div class="col-12 col-lg-6 col-xl"> 
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col text-center">                                                                        
                                            <span class="h4">520</span>      
                                            <h6 class="text-uppercase text-muted mt-2 m-0">Orders Placed</h6>                
                                        </div><!--end col-->
                                    </div> <!-- end row -->
                                </div><!--end card-body-->
                            </div> <!--end card-body-->                     
                        </div><!--end col-->
                        <div class="col-12 col-lg-6 col-xl"> 
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col text-center">                                                                        
                                            <span class="h4">82.8%</span>      
                                            <h6 class="text-uppercase text-muted mt-2 m-0">Conversion Rate</h6>                
                                        </div><!--end col-->
                                    </div> <!-- end row -->
                                </div><!--end card-body-->
                            </div> <!--end card-body-->                     
                        </div><!--end col-->
                        <div class="col-12 col-lg-6 col-xl"> 
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col text-center">                                                                        
                                            <span class="h4"><i class="fas fa-rupee-sign"></i>&nbsp;80.5</span>      
                                            <h6 class="text-uppercase text-muted mt-2 m-0">Avg. Value</h6>                
                                        </div><!--end col-->
                                    </div> <!-- end row -->
                                </div><!--end card-body-->
                            </div> <!--end card-->                     
                        </div><!--end col-->                                
                    </div><!--end row--> 
                </div><!-- end col--> 

                <div class="col-lg-3">
                    <div class="card"> 
                        <div class="card-body">                                    
                            <div class="row">
                                <div class="col">
                                    <div class="media">
                                        <img src="assets/images/money-beg.png" alt="" class="align-self-center" height="40">
                                        <div class="media-body align-self-center ml-3"> 
                                            <h6 class="m-0 font-20"><i class="fas fa-rupee-sign"></i>&nbsp;1850.00</h6>
                                            <p class="text-muted mb-0">Total Revenue</p>                                                                                                                                               
                                        </div><!--end media body-->
                                    </div><!--end media-->
                                </div><!--end col-->  
                                <div class="col-auto align-self-center">
                                    <p class="mb-0"><span class="text-success"><i class="mdi mdi-trending-up"></i>4.8%</span> Then Last Month</p>
                                </div><!--end col-->                                      
                            </div><!--end row-->
                        </div><!--end card-body-->
                        <div class="row">
                            <div class="col-12">
                                <div class="apexchart-wrapper">
                                    <div id="dash_spark_1" class="chart-gutters"></div>
                                </div>
                            </div><!--end col-->
                        </div>
                    </div> <!--end card-->  
                    <div class="card"> 
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">                      
                                    <h4 class="card-title" style="font-weight: bold;">Earning Reports</h4>                   
                                </div><!--end col-->  
                                <div class="col-auto"> 
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            This Week<i class="las la-angle-down ml-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Mont</a>
                                            <a class="dropdown-item" href="#">This Year</a>
                                        </div>
                                    </div>               
                                </div><!--end col-->                                      
                            </div>  <!--end row-->                                  
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="text-center">
                                <div id="ana_device" class="apex-charts"></div>
                                <h6 class="bg-lighte-alt py-3 px-2 mb-0">
                                    <i data-feather="calendar" class="align-self-center icon-xs mr-1"></i>
                                    01 January 2021 to 31 May 2021
                                </h6>
                            </div>                                                                                            
                        </div><!--end card-body-->                                
                    </div><!--end card-->   
                </div><!-- end col-->                                                          
            </div><!--end row-->
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">                      
                                    <center><h4 class="card-title" style="font-weight: bold;">Earnings Reports</h4></center>                      
                                </div><!--end col-->                                        
                            </div>  <!--end row-->                                  
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 table-hover">
                                    <thead class="td">
                                        <tr>
                                            <th class="border-top-0" >Date</th>                                                            
                                            <th class="border-top-0">Item Count</th>
                                            <th class="border-top-0">Text</th>
                                            <th class="border-top-0">Earnings</th>
                                        </tr><!--end tr-->
                                    </thead>
                                    <tbody>
                                        <tr>                                                        
                                            <td>01 January</td>                                                            
                                            <td>50</td>
                                            <td class="text-danger">- <i class="fas fa-rupee-sign"></i>&nbsp;4,900</td>
                                            <td><i class="fas fa-rupee-sign"></i>&nbsp;15,000</td>
                                        </tr><!--end tr-->     
                                        <tr>                                                        
                                            <td>02 January</td>
                                            <td>25</td>
                                            <td>-</td>
                                            <td><i class="fas fa-rupee-sign"></i>&nbsp;9,500</td>
                                            
                                        </tr><!--end tr-->    
                                        <tr>                                                        
                                            <td>03 January</td>
                                            <td>65</td>
                                            <td class="text-danger">- <i class="fas fa-rupee-sign"></i>&nbsp;5,000</td>
                                            <td><i class="fas fa-rupee-sign"></i>&nbsp;35,000</td>
                                            
                                        </tr><!--end tr-->    
                                        <tr>                                                        
                                            <td>04 January</td>
                                            <td>20</td>
                                            <td>-</td>
                                            <td><i class="fas fa-rupee-sign"></i>&nbsp;8,500</td>
                                        </tr><!--end tr-->    
                                        <tr>                                                        
                                            <td>05 January</td>
                                            <td>40</td>
                                            <td class="text-danger">- <i class="fas fa-rupee-sign"></i>&nbsp;4,000</td>
                                            <td><i class="fas fa-rupee-sign"></i>&nbsp;12,000</td>                                                            
                                        </tr><!--end tr-->    
                                        <tr>                                                        
                                            <td>06 January</td>
                                            <td>45</td>
                                            <td class="text-danger">- <i class="fas fa-rupee-sign"></i>&nbsp;4,550</td>
                                            <td><i class="fas fa-rupee-sign"></i>&nbsp;13,500</td>                                                            
                                        </tr><!--end tr-->                            
                                    </tbody>
                                </table> <!--end table-->                                               
                            </div><!--end /div-->
                        </div><!--end card-body--> 
                    </div><!--end card--> 
                </div> <!--end col-->   
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">                      
                                    <center><h4 class="card-title" style="font-weight: bold;">Most Populer Thali & Items</h4></center>                    
                                </div><!--end col-->                                        
                            </div>  <!--end row-->                                  
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 table-hover">
                                    <thead class="td">
                                        <tr>
                                            <th class="border-top-0">Thali & Items</th>
                                            <th class="border-top-0">Price</th>
                                            <th class="border-top-0">Sell</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Action</th>
                                        </tr><!--end tr-->
                                    </thead>
                                    <tbody>
                                        <tr>                                                        
                                            <td>
                                                <div class="media">
                                                    <img src="assets/images/products/pavbhaji.jpg" height="60" class="mr-3 align-self-center rounded" alt="...">
                                                    <div class="media-body align-self-center"> 
                                                        <h6 class="m-0">Pav-Bhaji (Extra Cheese)</h6>
                                                        <a href="#" class="font-12 text-primary">ID: A3652</a>                                                                                           
                                                    </div><!--end media body-->
                                                </div>
                                            </td>
                                            <td><i class="fas fa-rupee-sign"></i>&nbsp;99 <del class="text-muted font-10 fas fa-rupee-sign">&nbsp;150</del></td>                                   
                                            <td>450 <small class="text-muted">(550)</small></td>
                                            <td><span class="badge badge-soft-success px-2">Available</span></td>
                                            <td>                                                       
                                                <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                                <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                                            </td>
                                        </tr><!--end tr-->     
                                        <tr>                                                        
                                            <td>
                                                <div class="media">
                                                    <img src="assets/images/products/dabeli.jpg" height="50" class="mr-3 align-self-center rounded" alt="...">
                                                    <div class="media-body align-self-center"> 
                                                        <h6 class="m-0">3 Dabeli</h6>
                                                        <a href="#" class="font-12 text-primary">ID: A5002</a>                                                                                          
                                                    </div><!--end media body-->
                                                </div>
                                            </td>
                                            <td><i class="fas fa-rupee-sign"></i>&nbsp;50 <del class="text-muted font-10 fas fa-rupee-sign">&nbsp;70</del></td>                                   
                                            <td>750 <small class="text-muted">(00)</small></td>
                                            <td><span class="badge badge-soft-primary px-2">Out of Stock</span></td>
                                            <td>                                                       
                                                <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                                <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                                            </td>
                                        </tr><!--end tr-->    
                                        <tr>                                                        
                                            <td>
                                                <div class="media">
                                                    <img src="assets/images/products/combothali.png" height="40" class="mr-3 align-self-center rounded" alt="...">
                                                    <div class="media-body align-self-center"> 
                                                        <h6 class="m-0">Gujarati Thali (Combo)</h6>
                                                        <a href="#" class="font-12 text-primary">ID: A6598</a>                                                                                           
                                                    </div><!--end media body-->
                                                </div>
                                            </td>
                                            <td><i class="fas fa-rupee-sign"></i>&nbsp;199 <del class="text-muted font-10 fas fa-rupee-sign">&nbsp;250</del></td>                                   
                                            <td>280 <small class="text-muted">(220)</small></td>
                                            <td><span class="badge badge-soft-success px-2">Available</span></td>
                                            <td>                                                       
                                                <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                                <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                                            </td>
                                        </tr><!--end tr-->    
                                        <tr>                                                        
                                            <td>
                                                <div class="media">
                                                    <img src="assets/images/products/samosha.png" height="50" class="mr-3 align-self-center rounded" alt="...">
                                                    <div class="media-body align-self-center"> 
                                                        <h6 class="m-0">Bihari Smoosa</h6>
                                                        <a href="#" class="font-12 text-primary">ID: A9547</a>                                                                                            
                                                    </div><!--end media body-->
                                                </div>
                                            </td>
                                            <td><i class="fas fa-rupee-sign"></i>&nbsp;40 <del class="text-muted font-10 fas fa-rupee-sign">&nbsp;49</del></td>                                   
                                            <td>500 <small class="text-muted">(1000)</small></td>
                                            <td><span class="badge badge-soft-primary px-2">Out of Stock</span></td>
                                            <td>                                                       
                                                <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                                <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                                            </td>
                                        </tr><!--end tr-->  
                                        <tr>                                                        
                                            <td>
                                                <div class="media">
                                                    <img src="assets/images/products/icecream.jpg" height="50" class="mr-3 align-self-center rounded" alt="...">
                                                    <div class="media-body align-self-center"> 
                                                        <h6 class="m-0">Ice-Cream (Strawberry Flavours)</h6>
                                                        <a href="#" class="font-12 text-primary">ID: A9547</a>                                                                                            
                                                    </div><!--end media body-->
                                                </div>
                                            </td>
                                            <td><i class="fas fa-rupee-sign"></i>&nbsp;70 <del class="text-muted font-10 fas fa-rupee-sign">&nbsp;99</del></td>                                   
                                            <td>500 <small class="text-muted">(1000)</small></td>
                                            <td><span class="badge badge-soft-success px-2">Available</span></td>
                                            <td>                                                       
                                                <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                                <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                                            </td>
                                        </tr><!--end tr-->  
                                                                        
                                    </tbody>
                                </table> <!--end table-->                                               
                            </div><!--end /div-->
                        </div><!--end card-body--> 
                    </div><!--end card--> 
                </div> <!--end col-->     
                

                
                <div class="container-fluid">
                    <div class="row">                        
                        <div class="col-12">
                            <div class="card">  
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">All Order</h4>                      
                                        </div><!--end col-->
                                        <div class="col-auto"> 
                                            <a href="#" class="text-primary">View All</a>   
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->                                
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead class="td">
                                                <tr>
                                                    <th>Order Id</th>
                                                    <th>Order Name</th>
                                                    <th>Customer Name</th>
                                                    <th>Order Date</th>
                                                    <th>Delivered Time</th>
                                                    <th>Order Status</th>
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Gujarati Thali (Combo)</td>
                                                    <td>
                                                        <img src="assets/images/users/user-2.jpg" alt="" class="thumb-sm rounded mr-2">
                                                        Bri's Patel
                                                    </td>
                                                    <td>26/4/2021</td>
                                                    <td>10:10</td>
                                                    <td><span class="badge badge-md badge-boxed  badge-soft-success">Delivered</span></td>
                                                    <td>

                                                        <small class="font-15"><i class="fas fa-rupee-sign "></i>&nbsp;199</small>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Samoosa &amp; Dabeli</td>
                                                    <td>
                                                        <img src="assets/images/users/user-3.jpg" alt="" class="thumb-sm rounded mr-2">
                                                        Raj Kachhadiya
                                                    </td>
                                                    <td>11/5/2021</td>
                                                    <td>14:05</td>
                                                    <td><span class="badge badge-md badge-boxed  badge-soft-warning">Pending</span></td>
                                                    <td>

                                                        <small class="font-15"><i class="fas fa-rupee-sign "></i>&nbsp;90</small>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Punjabi Thali &amp; Extra Roti</td>
                                                    <td>
                                                        <img src="assets/images/users/user-4.jpg" alt="" class="thumb-sm rounded mr-2">
                                                        Dipika Jain
                                                    </td>
                                                    <td>21/5/2021</td>
                                                    <td>12:15</td>
                                                    <td><span class="badge badge-md badge-boxed  badge-soft-warning">Pending</span></td>
                                                    <td>

                                                        <small class="font-15"><i class="fas fa-rupee-sign "></i>&nbsp;250</small>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Gujarati Jalebi &amp; Dhokla</td>
                                                    <td>
                                                        <img src="assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded mr-2">
                                                        Rahul Dudhat
                                                    </td>
                                                    <td>30/4/2021</td>
                                                    <td>13:10</td>
                                                    <td><span class="badge badge-md badge-boxed  badge-soft-danger">Cancelled</span></td>
                                                    <td>

                                                        <small class="font-15"><i class="fas fa-rupee-sign "></i>&nbsp;110</small>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Rajasthani Thali</td>
                                                    <td>
                                                        <img src="assets/images/users/user-6.jpg" alt="" class="thumb-sm rounded mr-2">
                                                        Anushka Sen
                                                    </td>
                                                    <td>20/3/2021</td>
                                                    <td>11:20</td>
                                                    <td><span class="badge badge-md badge-boxed  badge-soft-success">Delivered</span></td>
                                                    <td>

                                                        <small class="font-15"><i class="fas fa-rupee-sign "></i>&nbsp;150</small>

                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>6</td>
                                                    <td>Punjabi Thali &amp; Strawberry Ice-cream</td>
                                                    <td>
                                                        <img src="assets/images/users/user-8.jpg" alt="" class="thumb-sm rounded mr-2">
                                                        Rutvik Shah
                                                    </td>
                                                    <td>8/4/2021</td>
                                                    <td>14:35</td>
                                                    <td><span class="badge badge-md badge-boxed  badge-soft-success">Delivered</span></td>
                                                    <td>

                                                        <small class="font-15"><i class="fas fa-rupee-sign "></i>&nbsp;299</small>

                                                    </td>
                                                </tr>                                                                                                  
                                            </tbody>
                                        </table>
                                                                                        
                                    </div><!--end table-responsive--> 
                                </div><!--end card-body-->                                                                                                        
                            </div><!--end card-->
                        </div><!--end col-->     
                    </div><!--end row-->
                </div>
                



            </div><!--end row-->
            
        </div>

            
        


<?php
}
//end dashboard






//start area

if($_REQUEST['what']=="area")
{
    
    
    if($_REQUEST['action']=="display" && $_REQUEST['id']==0)
    {
        $_SESSION['currpage']=1;
    }
    
    if($_SESSION['currpage']=="" || $_SESSION['insuccess']==1)
    {
        
        $_SESSION['currpage']=1;
        unset($_SESSION['insuccess']);
    }
    if($_REQUEST['action']=="paging")
    {
        $st=($_REQUEST['id']*$perpage)-$perpage;
        $_SESSION['currpage']=$_REQUEST['id'];
    }       
    else
    {
        $st=($_SESSION['currpage']*$perpage)-$perpage;
        
    }
    

    if($_REQUEST['action']=="delete")
    {
        $del=$con->query("delete from area where areaid=$_REQUEST[id]");
    }
    if($_REQUEST['action']=="deleteall")
    {
        $del=$con->query("delete from area");
    }

    $rec=$con->query("select count(*) from area");
    $norec=mysqli_fetch_array($rec);
    $_SESSION['areacount']=$norec[0];

    $pages=ceil($_SESSION['areacount']/$perpage);
    
    if($pages<$_SESSION['currpage'])
    {
        if($pages==0)
        {
            $_SESSION['currpage']=1;
        }
        else
        {
        $_SESSION['currpage']=$pages;
        }
        $st=($_SESSION['currpage']*$perpage)-$perpage;
    }
     
?>

<div class="col-md-12">
    <p class="adminp"><i class="fas fa-quote-left"></i>&nbsp;<?php echo $_SESSION['identity']." "." management"; ?>&nbsp;<i class="fas fa-quote-right"></i></p>
    <hr />
</div>

<div class="col-md-3">
    <div class="frm">

        <?php
        if($_REQUEST['action']=="update")
        {
        $data=$con->query("select * from area where areaid=$_REQUEST[id]");
        $row=mysqli_fetch_array($data);
        $_SESSION['upid']=$row[0];
        ?>

        <div class="card-card p-3">
            <form action="" method="post" name="uparea">
                <p><?php echo "update ".$_SESSION['identity']?></p>
                <hr />
                <?php if($_SESSION['duperr']==1) 
            {
                echo "<font size=2 color=red>Already Exists</font>";
                $_SESSION['duperr']=0;
            }
            ?>
                <div class="col-lg">
                    <label for="example-input1-group1"><b>Area Name :</b></label>
                    <div class="form-group row has-success">
                        <input type="text" id="example-input1-group1" name="upname" value="<?php echo $row[1]; ?>"
                            class="form-control" required="" pattern="^[a-zA-z -._]*$">
                    </div>
                </div>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Pincode :</b></label>
                    <div class="form-group row has-success">
                        <input type="text" maxlength="6" name="uppincode" value="<?php echo $row[2]; ?>"
                            class="form-control" required="" pattern="^[0-9]{6}$">
                    </div>
                </div>

                <div class="col-lg">
                    <button type="submit" name="uparea" class="btn btn-primary">Update</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </div>

            </form>
        </div>

        <?php
        }
        else
        {
        ?>

        <div class="card-card p-3">
            <form action="" method="post" name="area">
                <p><?php echo "add ".$_SESSION['identity']?></p>
                <hr />
                <?php if($_SESSION['duperr']==1) 
            {
                echo "<font size=2 color=red>Already Exists</font>";
                $_SESSION['duperr']=0;
            }
            ?>
                <div class="col-lg">
                    <label for="example-input1-group1"><b>Area Name :</b></label>
                    <div class="form-group row has-success">
                        <input type="text" id="example-input1-group1" name="name" class="form-control" required=""
                            placeholder="area name" pattern="^[a-zA-z -._]*$">
                    </div>
                </div>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Pincode :</b></label>
                    <div class="form-group row has-success">
                        <input type="text" maxlength="6" name="pincode" class="form-control" required=""
                            placeholder="000000" pattern="^[0-9]{6}$">
                    </div>
                </div>

                <div class="col-lg">
                    <button type="submit" name="inarea" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </div>

            </form>
        </div>
        <?php
        }
        ?>

    </div>
</div>

<div class="col-md-9">
    <div class="card-card p-3">
        <div class="dis">
            <p><?php echo "manage ".$_SESSION['identity']?>

                <?php 
        if($_SESSION['areacount']!=0)
        {
        $rs=(($_SESSION['currpage']*$perpage)-$perpage)+1;
        $re=$_SESSION['currpage']*$perpage;
        if($re>$_SESSION['areacount'])
        {
            $re=$_SESSION['areacount'];
        }
        ?>
                [Record Range : <?php echo "$rs to $re"; ?>]
                <?php
        }
        ?>

                <i class="las la-trash-alt text-danger font-18"
                    ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','deleteall',0);"></i>
            </p>

            <hr />

            <div>
                <table class="table table-hover">

                    <thead class="td">
                        <th>Area Name</th>
                        <th>Pincode</th>
                        <th>Edit</th>
                        <th>remove</th>
                    </thead>

                    <tbody>
                        <?php
                    $c=0;
                        if($_REQUEST['action']=="search")
                        {
                        $data=$con->query("select * from area where name like '%$_REQUEST[id]%'");
                        }
                        else
                        {
                        $data=$con->query("select * from area order by areaid desc limit $st,$perpage");
                        }

                        while($row=mysqli_fetch_array($data))
                        {
                    $c++;
                        ?>
                        <tr>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[2]; ?></td>
                            <td
                                ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','update',<?php echo $row[0]; ?>);">
                                <i class="far fa-edit"></i>
                            </td>

                            <td
                                ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','delete',<?php echo $row[0]; ?>);">
                                <i class="las la-trash-alt text-danger font-18"></i>
                            </td>

                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    <?php if($c!=0)
                { 
                    if($_REQUEST['action']!="search")
                    {
                ?>
                    <tfoot>
                        <tr>
                            <td colspan="4">
                                <center>
                                    <ul class="paging">
                                        <?php 

                                        if($pages<=$page)
                                        {
                                            $ls=1;
                                            $le=$pages;
                                        }
                                        else
                                        {
                                            if($_SESSION['currpage']>$page)
                                            {
                                                $ls=$_SESSION['currpage']-2;
                                                $le=$_SESSION['currpage']+2;
                                                if($le>$pages)
                                                {
                                                    $le=$pages;
                                                    $ls=$le-4;
                                                }
                                                // if($_SESSION['currpage']==$pages-1)
                                                // {
                                                //     $ls=$_SESSION['currpage']-3;
                                                //     $le=$pages;
                                                // }
                                                // if($_SESSION['currpage']==$pages)
                                                // {
                                                //     $ls=$_SESSION['currpage']-4;
                                                //     $le=$pages;
                                                // }
                                            }
                                            else
                                            {
                                                $ls=1;
                                                $le=$page;
                                            }
                                        }

                                        if($_SESSION['currpage']>$page)
                                        {
                                        ?>
                                        <li
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $_SESSION['currpage']-1;?>);">
                                            PREVIOUS</li>
                                        <?php
                                        }

                                        for($i=$ls;$i<=$le;$i++)
                                        {
                                            if($_SESSION['currpage']==$i)
                                            {
                                        ?>
                                        <li class="active"
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $i; ?>);">
                                            <?php echo $i; ?></li>
                                        <?php
                                            }
                                            else
                                            {
                                        ?>
                                        <li
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $i; ?>);">
                                            <?php echo $i; ?></li>
                                        <?php
                                            }
                                        }
                                        if($_SESSION['currpage']!=$pages)
                                        {
                                        if($pages>$page)
                                        {
                                        ?>
                                        <li
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $_SESSION['currpage']+1;?>);">
                                            NEXT</li>
                                        <?php
                                        }
                                        }
                                        ?>
                                    </ul>
                                </center>

                            </td>
                        </tr>
                    </tfoot>
                    <?php 
                    } 
                }
                ?>
                </table>
                <?php
            if($c==0)
            {
            ?>
                <div class="nodata">
                    <center>
                        <img src="assets/images/nodata.png">
                    </center>

                </div>
                <?php
            }
            ?>
            </div>
        </div>
    </div>
</div>

<?php
}
//end area






//start category

if($_REQUEST['what']=="category")
{

    if($_REQUEST['action']=="display" && $_REQUEST['id']==0)
    {
        $_SESSION['currpage']=1;
    }
    
    if($_SESSION['currpage']=="" || $_SESSION['insuccess']==1)
    {
        
        $_SESSION['currpage']=1;
        unset($_SESSION['insuccess']);
    }
    if($_REQUEST['action']=="paging")
    {
        $st=($_REQUEST['id']*$perpage)-$perpage;
        $_SESSION['currpage']=$_REQUEST['id'];
    }       
    else
    {
        $st=($_SESSION['currpage']*$perpage)-$perpage;
    }
    

    if($_REQUEST['action']=="delete")
    {
        $del=$con->query("delete from category where categoryid=$_REQUEST[id]");
        
    }
    if($_REQUEST['action']=="deleteall")
    {
        $del=$con->query("delete from category");
    }

    $rec=$con->query("select count(*) from category");
    $norec=mysqli_fetch_array($rec);
    $_SESSION['categorycount']=$norec[0];

    $pages=ceil($_SESSION['categorycount']/$perpage);
    
    if($pages<$_SESSION['currpage'])
    {
        if($pages==0)
        {
            $_SESSION['currpage']=1;
        }
        else
        {
        $_SESSION['currpage']=$pages;
        }
        $st=($_SESSION['currpage']*$perpage)-$perpage;
    }
?>

<div class="col-md-12">
    <p class="adminp"><i class="fas fa-quote-left"></i>&nbsp;<?php echo $_SESSION['identity']." "." management"; ?>&nbsp;<i class="fas fa-quote-right"></i></p>
    <hr />
</div>

<div class="col-md-3">
    <div class="frm">

        <?php
        if($_REQUEST['action']=="update")
        {
        $data=$con->query("select * from category where categoryid=$_REQUEST[id]");
        $row=mysqli_fetch_array($data);
        $_SESSION['upid']=$row[0];
        ?>

        <div class="card-card p-3">
            <form action="" method="post" name="upcategory" enctype="multipart/form-data">
                <p><?php echo "update ".$_SESSION['identity']?></p>
                <hr />
                <?php if($_SESSION['duperr']==1) 
            {
                echo "<font size=2 color=red>Already Exists</font>";
                $_SESSION['duperr']=0;
            }
            ?>
                <div class="col-lg">
                    <label for="example-input1-group1"><b>Category Name :</b></label>
                    <div class="form-group row has-success">
                        <input type="text" id="" name="upname" value="<?php echo $row[1]; ?>" class="form-control"
                            required="" pattern="^[a-zA-z -._]*$">
                    </div>
                </div>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Icon :</b></label>
                    <div class="form-group row has-success">
                        <input type="file" name="upicon" class="form-control">
                        <input type="hidden" name="oldpath" value="<?php echo $row[2]; ?>">
                    </div>
                </div>

                <div class="col-lg">
                    <button type="submit" name="upcategory" class="btn btn-primary">Update</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </div>

            </form>
        </div>

        <?php
        }
        else
        {
        ?>

        <div class="card-card p-3">
            <form action="" method="post" name="category" enctype="multipart/form-data">
                <p class="adminp"><?php echo "add ".$_SESSION['identity']?></p>
                <hr />
                <?php if($_SESSION['duperr']==1) 
            {
                echo "<font size=2 color=red>Already Exists</font>";
                $_SESSION['duperr']=0;
            }
            ?>
                <div class="col-lg">
                    <label for="example-input1-group1"><b>Category Name :</b></label>
                    <div class="form-group row has-success">
                        <input type="text" id="" name="name" class="form-control" required="" placeholder="category name"
                            pattern="^[a-zA-z -._]*$">
                    </div>
                </div>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Icon :</b></label>
                    <div class="form-group row has-success">
                        <input type="file" name="icon" id="" class="form-control" required="">
                    </div>
                </div>

                <div class="col-lg">
                    <button type="submit" name="incategory" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </div>

            </form>
        </div>
        <?php
        }
        ?>

    </div>
</div>

<div class="col-md-9">
    <div class="card-card p-3">
        <div class="dis">
            <p class="adminp"><?php echo "manage ".$_SESSION['identity'];?>

                <?php 
        if($_SESSION['categorycount']!=0)
        {
        $rs=(($_SESSION['currpage']*$perpage)-$perpage)+1;
        $re=$_SESSION['currpage']*$perpage;
        if($re>$_SESSION['categorycount'])
        {
            $re=$_SESSION['categorycount'];
        }
        ?>
                [Record Range : <?php echo "$rs-$re"; ?>]
                <?php
        }
        ?>

                <i class="las la-trash-alt text-danger font-18"
                    ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','deleteall',0);"></i>
            </p>

            <hr />

            <div>
                <table class="table table-hover">

                    <!-- <thead class="td">
                        <th>Category</th>
                        <th>Icon</th>
                        <th>Edit</th>
                        <th>remove</th>
                    </thead> -->

                    <tbody>
                    <div class="row">
                        <?php
                    $c=0;
                        if($_REQUEST['action']=="search")
                        {
                        $data=$con->query("select * from category where name like '%$_REQUEST[id]%'");
                        }
                        else
                        {
                        $data=$con->query("select * from category order by categoryid desc limit $st,$perpage");
                        }

                        while($row=mysqli_fetch_array($data))
                        {
                    $c++;
                        ?>
                        
                            <!-- <td><?php echo $row[1]; ?></td>
                            <td><img width="60px" height="60px" src=" <?php echo $row[2]; ?> "></td>
                            <td
                                ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','update',<?php echo $row[0]; ?>);">
                                <i class="far fa-edit"></i>
                            </td>

                            <td
                                ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','delete',<?php echo $row[0]; ?>);">
                                <i class="las la-trash-alt text-danger font-18"></i>
                            </td> -->


                            

                                

                                <div class="col-md-6 col-lg-3">
                                    <div class="card">
                                        <img class="card-img-top img-fluid bg-light-alt" style="width:234px; height:156px;background-size: cover;" src="<?php echo $row[2]; ?>" alt="Card image cap">
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col-md-12">
                                                <center><h4 class="card-title"><?php echo $row[1]; ?></h4></center><hr/>
                                                </div>
                                                <div class="col-md-3">
                                                    
                                                    <span class="badge badge-outline-light" 
                                                        ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','update',<?php echo $row[0]; ?>);">
                                                        <i class="far fa-edit font-11"></i>
                                                    </span>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="badge badge-outline-light"
                                                        ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','delete',<?php echo $row[0]; ?>);">
                                                        <i class="las la-trash-alt text-danger font-15"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="card-body">

                                            <center><a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#brijesh" onclick="thali('thali');">Quick View</a></center>

                                        </div> -->
                                    </div>
                                </div>

                                

                        

                        
                        <?php
                        }
                        ?>
                        </div>
                    </tbody>
                    <?php if($c!=0)
                { 
                    if($_REQUEST['action']!="search")
                    {
                ?>
                    <tfoot>
                        <tr>
                            <td colspan="4">
                                <center>
                                    <ul class="paging">
                                        <?php 

                                        if($pages<=$page)
                                        {
                                            $ls=1;
                                            $le=$pages;
                                        }
                                        else
                                        {
                                            if($_SESSION['currpage']>$page)
                                            {
                                                $ls=$_SESSION['currpage']-2;
                                                $le=$_SESSION['currpage']+2;
                                                if($le>$pages)
                                                {
                                                    $le=$pages;
                                                    $ls=$le-4;
                                                }
                                                // if($_SESSION['currpage']==$pages-1)
                                                // {
                                                //     $ls=$_SESSION['currpage']-3;
                                                //     $le=$pages;
                                                // }
                                                // if($_SESSION['currpage']==$pages)
                                                // {
                                                //     $ls=$_SESSION['currpage']-4;
                                                //     $le=$pages;
                                                // }
                                            }
                                            else
                                            {
                                                $ls=1;
                                                $le=$page;
                                            }
                                        }

                                        if($_SESSION['currpage']>$page)
                                        {
                                        ?>
                                        <li
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $_SESSION['currpage']-1;?>);">
                                            PREVIOUS</li>
                                        <?php
                                        }

                                        for($i=$ls;$i<=$le;$i++)
                                        {
                                            if($_SESSION['currpage']==$i)
                                            {
                                        ?>
                                        <li class="active"
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $i; ?>);">
                                            <?php echo $i; ?></li>
                                        <?php
                                            }
                                            else
                                            {
                                        ?>
                                        <li
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $i; ?>);">
                                            <?php echo $i; ?></li>
                                        <?php
                                            }
                                        }
                                        if($_SESSION['currpage']!=$pages)
                                        {
                                        if($pages>$page)
                                        {
                                        ?>
                                        <li
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $_SESSION['currpage']+1;?>);">
                                            NEXT</li>
                                        <?php
                                        }
                                        }
                                        ?>
                                    </ul>
                                </center>

                            </td>
                        </tr>
                    </tfoot>
                    <?php 
                    } 
                }
                ?>
                </table>
                <?php
            if($c==0)
            {
            ?>
                <div class="nodata">
                    <center>
                        <img src="assets/images/nodata.png">
                    </center>

                </div>
                <?php
            }
            ?>
            </div>
        </div>
    </div>
</div>

<?php
}

//end category






//start fixthali

if($_REQUEST['what']=="fixthali")
{

    if($_REQUEST['action']=="display" && $_REQUEST['id']==0)
    {
        $_SESSION['currpage']=1;
    }
    
    if($_SESSION['currpage']=="" || $_SESSION['insuccess']==1)
    {
        
        $_SESSION['currpage']=1;
        unset($_SESSION['insuccess']);
    }
    if($_REQUEST['action']=="paging")
    {
        $st=($_REQUEST['id']*$perpage)-$perpage;
        $_SESSION['currpage']=$_REQUEST['id'];
    }       
    else
    {
        $st=($_SESSION['currpage']*$perpage)-$perpage;
    }
    

    if($_REQUEST['action']=="delete")
    {
        $del=$con->query("delete from fixthali where fixthaliid=$_REQUEST[id]");
        
    }
    if($_REQUEST['action']=="deleteall")
    {
        $del=$con->query("delete from fixthali");
    }

    $rec=$con->query("select count(*) from fixthali");
    $norec=mysqli_fetch_array($rec);
    $_SESSION['fixthalicount']=$norec[0];

    $pages=ceil($_SESSION['fixthalicount']/$perpage);
    
    if($pages<$_SESSION['currpage'])
    {
        if($pages==0)
        {
            $_SESSION['currpage']=1;
        }
        else
        {
        $_SESSION['currpage']=$pages;
        }
        $st=($_SESSION['currpage']*$perpage)-$perpage;
    }
?>

<div class="col-md-12">
    <p class="adminp"><i class="fas fa-quote-left"></i>&nbsp;<?php echo $_SESSION['identity']." "." management"; ?>&nbsp;<i class="fas fa-quote-right"></i></p>
    <hr />
</div>

<div class="col-md-3">
    <div class="frm">

        <?php
        if($_REQUEST['action']=="update")
        {
        $data=$con->query("select * from fixthali where fixthaliid=$_REQUEST[id]");
        $row=mysqli_fetch_array($data);
        $_SESSION['upfix']=$row[0];
        ?>

        <div class="card-card p-3">
            <form action="" method="post" name="upfixthali" enctype="multipart/form-data">
                <p><?php echo "update ".$_SESSION['identity']?></p>
                <hr />
                <?php if($_SESSION['duperr']==1) 
            {
                echo "<font size=2 color=red>Already Exists</font>";
                $_SESSION['duperr']=0;
            }
            ?>
                <div class="col-lg">
                    <label for="example-input1-group1"><b>Fixthali Name :</b></label>
                    <div class="form-group row has-success">
                        <input type="text" id="" name="upname" value="<?php echo $row[1]; ?>" class="form-control"
                            required="" pattern="^[a-zA-z -._]*$">
                    </div>
                </div>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Image :</b></label>
                    <div class="form-group row has-success">
                        <input type="file" name="upimage" class="form-control">
                        <input type="hidden" name="oldpath" value="<?php echo $row[2]; ?>">
                    </div>
                </div>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Amount :</b></label>
                    <div class="form-group row has-success">
                        <input type="text" id="" name="upamount" class="form-control" required="" placeholder="amount"
                            pattern="^[0-9]*$" value="<?php echo $row[3]; ?>">
                    </div>
                </div>

                <div class="col-lg">
                    <button type="submit" name="upfixthali" class="btn btn-primary">Update</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </div>

            </form>
        </div>

        <?php
        }
        else
        {
        ?>

        <div class="card-card p-3">
            <form action="" method="post" name="fixthali" enctype="multipart/form-data">
                <p class="adminp"><?php echo "add ".$_SESSION['identity']?></p>
                <hr />
                <?php if($_SESSION['duperr']==1) 
            {
                echo "<font size=2 color=red>Already Exists</font>";
                $_SESSION['duperr']=0;
            }
            ?>
                <div class="col-lg">
                    <label for="example-input1-group1"><b>Fixthali Name :</b></label>
                    <div class="form-group row has-success">
                        <input type="text" id="" name="name" class="form-control" required="" placeholder="fixthali name"
                            pattern="^[a-zA-z -._]*$">
                    </div>
                </div>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Image :</b></label>
                    <div class="form-group row has-success">
                        <input type="file" name="image" id="" class="form-control" required="">
                    </div>
                </div>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Amount :</b></label>
                    <div class="form-group row has-success">
                        <input type="text" id="" name="amount" class="form-control" required="" placeholder="amount"
                            pattern="^[0-9]*$">
                    </div>
                </div>

                <div class="col-lg">
                    <button type="submit" name="infixthali" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </div>

            </form>
        </div>
        <?php
        }
        ?>

    </div>
</div>

<div class="col-md-9">
    <div class="card-card p-3">
        <div class="dis">
            <p class="adminp"><?php echo "manage ".$_SESSION['identity'];?>

                <?php 
        if($_SESSION['fixthalicount']!=0)
        {
        $rs=(($_SESSION['currpage']*$perpage)-$perpage)+1;
        $re=$_SESSION['currpage']*$perpage;
        if($re>$_SESSION['fixthalicount'])
        {
            $re=$_SESSION['fixthalicount'];
        }
        ?>
                [Record Range : <?php echo "$rs-$re"; ?>]
                <?php
        }
        ?>

                <i class="las la-trash-alt text-danger font-18"
                    ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','deleteall',0);"></i>
            </p>

            <hr />

            <div>
                <table class="table table-hover">

                    <!-- <thead class="td">
                        <th>Fixthali</th>
                        <th>Image</th>
                        <th>Amount</th>
                        <th>Edit</th>
                        <th>remove</th>
                    </thead> -->

                    <tbody>
                    <div class="row">
                        <?php
                    $c=0;
                        if($_REQUEST['action']=="search")
                        {
                        $data=$con->query("select * from fixthali where name like '%$_REQUEST[id]%'");
                        }
                        else
                        {
                        $data=$con->query("select * from fixthali order by fixthaliid desc limit $st,$perpage");
                        }

                        while($row=mysqli_fetch_array($data))
                        {
                    $c++;
                        ?>
                        
                            <!-- <td><?php echo $row[1]; ?></td>
                            <td><img width="70px" height="70px" src=" <?php echo '../mysteryflavour/'.$row[2]; ?> ">
                            </td>
                            <td><?php echo $row[3]; ?></td>
                            <td
                                ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','update',<?php echo $row[0]; ?>);">
                                <i class="far fa-edit"></i>
                            </td>

                            <td
                                ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','delete',<?php echo $row[0]; ?>);">
                                <i class="las la-trash-alt text-danger font-18"></i>
                            </td> -->



                            

                                

                                <div class="col-md-6 col-lg-3">
                                    <div class="card">
                                        <img class="card-img-top img-fluid bg-light-alt" style="width:234px; height:156px;background-size: cover;" src="<?php echo '../mysteryflavour/'.$row[2]; ?>" alt="Card image cap">
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col-md-12">
                                                <center><h4 class="card-title"><?php echo $row[1]; ?></h4></center><hr/>
                                                <center><h4 class="fas fa-rupee-sign">&nbsp;<?php echo $row[3]; ?></h4></center><hr/>
                                                </div>
                                                <div class="col-md-3">
                                                    
                                                    <span class="badge badge-outline-light" 
                                                        ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','update',<?php echo $row[0]; ?>);">
                                                        <i class="far fa-edit font-11"></i>
                                                    </span>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="badge badge-outline-light"
                                                        ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','delete',<?php echo $row[0]; ?>);">
                                                        <i class="las la-trash-alt text-danger font-15"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="card-body">

                                            <center><a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#brijesh" onclick="thali('thali');">Quick View</a></center>

                                        </div> -->
                                    </div>
                                </div>

                                

                            





                        
                        <?php
                        }
                        ?>
                    </div>
                    </tbody>
                    <?php if($c!=0)
                { 
                    if($_REQUEST['action']!="search")
                    {
                ?>
                    <tfoot>
                        <tr>
                            <td colspan="4">
                                <center>
                                    <ul class="paging">
                                        <?php 

                                        if($pages<=$page)
                                        {
                                            $ls=1;
                                            $le=$pages;
                                        }
                                        else
                                        {
                                            if($_SESSION['currpage']>$page)
                                            {
                                                $ls=$_SESSION['currpage']-2;
                                                $le=$_SESSION['currpage']+2;
                                                if($le>$pages)
                                                {
                                                    $le=$pages;
                                                    $ls=$le-4;
                                                }
                                                // if($_SESSION['currpage']==$pages-1)
                                                // {
                                                //     $ls=$_SESSION['currpage']-3;
                                                //     $le=$pages;
                                                // }
                                                // if($_SESSION['currpage']==$pages)
                                                // {
                                                //     $ls=$_SESSION['currpage']-4;
                                                //     $le=$pages;
                                                // }
                                            }
                                            else
                                            {
                                                $ls=1;
                                                $le=$page;
                                            }
                                        }

                                        if($_SESSION['currpage']>$page)
                                        {
                                        ?>
                                        <li
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $_SESSION['currpage']-1;?>);">
                                            PREVIOUS</li>
                                        <?php
                                        }

                                        for($i=$ls;$i<=$le;$i++)
                                        {
                                            if($_SESSION['currpage']==$i)
                                            {
                                        ?>
                                        <li class="active"
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $i; ?>);">
                                            <?php echo $i; ?></li>
                                        <?php
                                            }
                                            else
                                            {
                                        ?>
                                        <li
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $i; ?>);">
                                            <?php echo $i; ?></li>
                                        <?php
                                            }
                                        }
                                        if($_SESSION['currpage']!=$pages)
                                        {
                                        if($pages>$page)
                                        {
                                        ?>
                                        <li
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $_SESSION['currpage']+1;?>);">
                                            NEXT</li>
                                        <?php
                                        }
                                        }
                                        ?>
                                    </ul>
                                </center>

                            </td>
                        </tr>
                    </tfoot>
                    <?php 
                    } 
                }
                ?>
                </table>
                <?php
            if($c==0)
            {
            ?>
                <div class="nodata">
                    <center>
                        <img src="assets/images/nodata.png">
                    </center>

                </div>
                <?php
            }
            ?>
            </div>
        </div>
    </div>
</div>

<?php
}

//end fixthali






//start item

if($_REQUEST['what']=="item")
{

    if($_REQUEST['action']=="display" && $_REQUEST['id']==0)
    {
        $_SESSION['currpage']=1;
    }

    if($_REQUEST['action']=="display" && $_REQUEST['id']==0)
    {
        $_SESSION['currpage']=1;
    }
    
    if($_SESSION['currpage']=="" || $_SESSION['insuccess']==1)
    {
        
        $_SESSION['currpage']=1;
        unset($_SESSION['insuccess']);
    }
    if($_REQUEST['action']=="paging")
    {
        $st=($_REQUEST['id']*$perpage)-$perpage;
        $_SESSION['currpage']=$_REQUEST['id'];
    }       
    else
    {
        $st=($_SESSION['currpage']*$perpage)-$perpage;
    }    

    if($_REQUEST['action']=="delete")
    {
        $del=$con->query("delete from item where itemid=$_REQUEST[id]");
        echo $_SESSION['currpage'];
    }
    if($_REQUEST['action']=="deleteall")
    {
        $del=$con->query("delete from item");
    }

    $rec=$con->query("select count(*) from item");
    $norec=mysqli_fetch_array($rec);
    $_SESSION['itemcount']=$norec[0];

    $pages=ceil($_SESSION['itemcount']/$perpage);
    
    if($pages<$_SESSION['currpage'])
    {
        if($pages==0)
        {
            $_SESSION['currpage']=1;
        }
        else
        {
        $_SESSION['currpage']=$pages;
        }
        $st=($_SESSION['currpage']*$perpage)-$perpage;
    }
?>

<div class="col-md-12">
    <p class="adminp"><i class="fas fa-quote-left"></i>&nbsp;<?php echo $_SESSION['identity']." "." management"; ?>&nbsp;<i class="fas fa-quote-right"></i></p>
    <hr />
</div>

<div class="col-md-3">
    <div class="frm">

        <?php
        if($_REQUEST['action']=="update")
        {
        $data=$con->query("select * from item where itemid=$_REQUEST[id]");
        $row=mysqli_fetch_array($data);
        
        //print_r($row);
        $_SESSION['upid']=$row[1];
        ?>

        <div class="card-card p-3">
            <form action="" method="post" name="upitem" enctype="multipart/form-data">
                <p><?php echo "update ".$_SESSION['identity']?></p>
                <hr />
                <?php if($_SESSION['duperr']==1) 
                {
                echo "<font size=2 color=red>Already Exists</font>";
                $_SESSION['duperr']=0;
                }
                ?>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Category Name :</b></label>
                    <div class="form-group row has-success">
                        <select name="upcategoryid" class="form-control" required="">

                            <?php
                $data1=$con->query("select * from category");
                while($row1=mysqli_fetch_array($data1))
                {
                    if($row[0]==$row1[0])
                    {
                ?>
                            <option selected="" value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>
                            <?php
                    }
                    else
                    {

                ?>
                            <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>
                            <?php
                    }
                }
                ?>
                        </select>
                    </div>
                </div>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Item Name :</b></label>
                    <div class="form-group row has-success">
                        <input type="text" id="example-input1-group1" name="upname" value="<?php echo $row[2]; ?>"
                            class="form-control" required="" pattern="^[a-zA-z -._]*$">
                    </div>
                </div>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Image :</b></label>
                    <div class="form-group row has-success">
                        <input type="file" name="upimage" class="form-control">

                        <input type="hidden" name="oldpath" value="<?php echo $row[3]; ?>">
                    </div>
                </div>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Amount :</b></label>
                    <div class="form-group row has-success">
                        <input type="text" id="" name="upamount" class="form-control" required="" placeholder="amount"
                            pattern="^[0-9]*$" value="<?php echo $row[4]; ?>">
                    </div>
                </div>

                <div class="col-lg">
                    <button type="submit" name="upitem" class="btn btn-primary">Update</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </div>

            </form>
        </div>

        <?php
        }
        else
        {
        ?>

        <div class="card-card p-3">
            <form action="" method="post" name="initem" enctype="multipart/form-data">
                <p><?php echo "add ".$_SESSION['identity']?></p>
                <hr />
                <?php if($_SESSION['duperr']==1) 
            {
                echo "<font size=2 color=red>Already Exists</font>";
                $_SESSION['duperr']=0;
            }
            ?>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Category Name :</b></label>
                    <div class="form-group row has-success">
                        <select name="categoryid" class="form-control" required="">
                            <option value="">--Select Category--</option>
                            <?php
                $data=$con->query("select * from category");
                while($row=mysqli_fetch_array($data))
                {
                ?>
                            <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                            <?php
                }
                ?>
                        </select>
                    </div>
                </div>


                <div class="col-lg">
                    <label for="example-input1-group1"><b>Item Name :</b></label>
                    <div class="form-group row has-success">
                        <input type="text" id="example-input1-group1" name="name" class="form-control" required=""
                            placeholder="item name" pattern="^[a-zA-z -._]*$">
                    </div>
                </div>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Image :</b></label>
                    <div class="form-group row has-success">
                        <input type="file" name="image" class="form-control" required="">
                    </div>
                </div>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Amount :</b></label>
                    <div class="form-group row has-success">
                        <input type="text" id="" name="amount" class="form-control" required="" placeholder="amount"
                            pattern="^[0-9]*$" value="<?php echo $row[4]; ?>">
                    </div>
                </div>

                <div class="col-lg">
                    <button type="submit" name="initem" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </div>

            </form>
        </div>
        <?php
        }
        ?>

    </div>
</div>

<div class="col-md-9">
    <div class="card-card p-3">
        <div class="dis">
            <p><?php echo "manage ".$_SESSION['identity']?>

                <?php 
        if($_SESSION['itemcount']!=0)
        {
        $rs=(($_SESSION['currpage']*$perpage)-$perpage)+1;
        $re=$_SESSION['currpage']*$perpage;
        if($re>$_SESSION['itemcount'])
        {
            $re=$_SESSION['itemcount'];
        }
        ?>
                [Record Range : <?php echo "$rs-$re"; ?>]
                <?php
        }
        ?>

                <i class="las la-trash-alt text-danger font-18"
                    ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','deleteall',0);"></i>
            </p>

            <hr />

            <div>
                <table class="table table-hover">

                    <!-- <thead class="td">
                        <th>Category Name</th>
                        <th>Item</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>remove</th>
                    </thead> -->

                    <tbody>
                    <div class="row">
                        <?php
                    $c=0;
                        if($_REQUEST['action']=="search")
                        {
                        $data=$con->query("select * from item where name like '%$_REQUEST[id]%'");
                        }
                        else
                        {
                        $data=$con->query("select * from item order by itemid desc limit $st,$perpage");
                        }

                        while($row=mysqli_fetch_array($data))
                        {
                    $c++;
                        ?>
                        
                            <!-- <td>
                                <?php
                                    $st=$con->query("select * from category where categoryid=$row[0]");
                                    $stt=mysqli_fetch_array($st);
                                    echo $stt[1];
                                ?>
                            </td>
                            <td><?php echo $row[2]; ?></td>
                            <td><img width="70px" height="70px" src="<?php echo '../mysteryflavour/'.$row[3]; ?>" />
                            </td>
                            <td
                                ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','update',<?php echo $row[1]; ?>);">
                                <i class="far fa-edit"></i>
                            </td>

                            <td
                                ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','delete',<?php echo $row[1]; ?>);">
                                <i class="las la-trash-alt text-danger font-18"></i>
                            </td> -->


                            

                                

                                <div class="col-md-6 col-lg-3">
                                    <div class="card">
                                        <img class="card-img-top img-fluid bg-light-alt" style="width:234px; height:156px;background-size: cover;" src="<?php echo '../mysteryflavour/'.$row[3]; ?>" alt="Card image cap">
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col-md-12">
                                                <center><h6 class="card-title">
                                                            <?php
                                                                $st=$con->query("select * from category where categoryid=$row[0]");
                                                                $stt=mysqli_fetch_array($st);
                                                                echo $stt[1];
                                                            ?>
                                                        </h6>
                                                </center><hr/>
                                                <center><h4 style="text-transform: capitalize;"><?php echo $row[2]; ?></h4></center><hr/>
                                                <center><h4 class="fas fa-rupee-sign">&nbsp;<?php echo $row[4]; ?></h4></center><hr/>

                                                </div>
                                                <div class="col-md-3">
                                                    
                                                    <span class="badge badge-outline-light" 
                                                        ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','update',<?php echo $row[1]; ?>);">
                                                        <i class="far fa-edit font-11"></i>
                                                    </span>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="badge badge-outline-light"
                                                        ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','delete',<?php echo $row[1]; ?>);">
                                                        <i class="las la-trash-alt text-danger font-15"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="card-body">

                                            <center><a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#brijesh" onclick="thali('thali');">Quick View</a></center>

                                        </div> -->
                                    </div>
                                </div>

                                

                           




                            
                        
                        <?php
                        }
                        ?>
                    </div>
                    </tbody>
                    <?php if($c!=0)
                { 
                    if($_REQUEST['action']!="search")
                    {
                ?>
                    <tfoot>
                        <tr>
                            <td colspan="4">
                                <center>
                                    <ul class="paging">
                                        <?php 

                                        if($pages<=$page)
                                        {
                                            $ls=1;
                                            $le=$pages;
                                        }
                                        else
                                        {
                                            if($_SESSION['currpage']>$page)
                                            {
                                                $ls=$_SESSION['currpage']-2;
                                                $le=$_SESSION['currpage']+2;
                                                if($le>$pages)
                                                {
                                                    $le=$pages;
                                                    $ls=$le-4;
                                                }
                                                // if($_SESSION['currpage']==$pages-1)
                                                // {
                                                //     $ls=$_SESSION['currpage']-3;
                                                //     $le=$pages;
                                                // }
                                                // if($_SESSION['currpage']==$pages)
                                                // {
                                                //     $ls=$_SESSION['currpage']-4;
                                                //     $le=$pages;
                                                // }
                                            }
                                            else
                                            {
                                                $ls=1;
                                                $le=$page;
                                            }
                                        }

                                        if($_SESSION['currpage']>$page)
                                        {
                                        ?>
                                        <li
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $_SESSION['currpage']-1;?>);">
                                            PREVIOUS</li>
                                        <?php
                                        }

                                        for($i=$ls;$i<=$le;$i++)
                                        {
                                            if($_SESSION['currpage']==$i)
                                            {
                                        ?>
                                        <li class="active"
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $i; ?>);">
                                            <?php echo $i; ?></li>
                                        <?php
                                            }
                                            else
                                            {
                                        ?>
                                        <li
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $i; ?>);">
                                            <?php echo $i; ?></li>
                                        <?php
                                            }
                                        }
                                        if($_SESSION['currpage']!=$pages)
                                        {
                                        if($pages>$page)
                                        {
                                        ?>
                                        <li
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $_SESSION['currpage']+1;?>);">
                                            NEXT</li>
                                        <?php
                                        }
                                        }
                                        ?>
                                    </ul>
                                </center>

                            </td>
                        </tr>
                    </tfoot>
                    <?php 
                    } 
                }
                ?>
                </table>
                <?php
            if($c==0)
            {
            ?>
                <div class="nodata">
                    <center>
                        <img src="assets/images/nodata.png">
                    </center>

                </div>
                <?php
            }
            ?>
            </div>
        </div>
    </div>
</div>

<?php
}

//end item






//start landmark

if($_REQUEST['what']=="landmark")
{
    

    if($_REQUEST['action']=="display" && $_REQUEST['id']==0)
    {
        $_SESSION['currpage']=1;
    }
    
    if($_SESSION['currpage']=="" || $_SESSION['insuccess']==1)
    {
        
        $_SESSION['currpage']=1;
        unset($_SESSION['insuccess']);
    }
    if($_REQUEST['action']=="paging")
    {
        $st=($_REQUEST['id']*$perpage)-$perpage;
        $_SESSION['currpage']=$_REQUEST['id'];
    }       
    else
    {
        $st=($_SESSION['currpage']*$perpage)-$perpage;
    }    

    if($_REQUEST['action']=="delete")
    {
        $del=$con->query("delete from landmark where landmarkid=$_REQUEST[id]");
        echo $_SESSION['currpage'];
    }
    if($_REQUEST['action']=="deleteall")
    {
        $del=$con->query("delete from landmark");
    }

    $rec=$con->query("select count(*) from landmark");
    $norec=mysqli_fetch_array($rec);
    $_SESSION['landmarkcount']=$norec[0];

    $pages=ceil($_SESSION['landmarkcount']/$perpage);
    
    if($pages<$_SESSION['currpage'])
    {
        if($pages==0)
        {
            $_SESSION['currpage']=1;
        }
        else
        {
        $_SESSION['currpage']=$pages;
        }
        $st=($_SESSION['currpage']*$perpage)-$perpage;
    }
?>

<div class="col-md-12">
    <p class="adminp"><i class="fas fa-quote-left"></i>&nbsp;<?php echo $_SESSION['identity']." "." management"; ?>&nbsp;<i class="fas fa-quote-right"></i></p>
    <hr />
</div>

<div class="col-md-3">
    <div class="frm">

        <?php
        if($_REQUEST['action']=="update")
        {
        $data=$con->query("select * from landmark where landmarkid=$_REQUEST[id]");
        $row=mysqli_fetch_array($data);
        $_SESSION['upid']=$_REQUEST['id'];
        ?>

        <div class="card-card p-3">
            <form action="" method="POST" name="uplandmarkfrm">
                <p><?php echo "update ".$_SESSION['identity']?></p>
                <hr />
                <?php if($_SESSION['duperr']==1) 
                {
                    echo "<font size=2 color=red>Already Exists</font>";
                    $_SESSION['duperr']=0;
                }
                

                ?>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Area Name :</b></label>
                    <div class="form-group row has-success">

                        <select name="upareafk" class="form-control">
                            <?php
                    $upcat=$con->query("select * from area");
                    while($upcatt=mysqli_fetch_array($upcat))
                    {
                        if($row[0]==$upcatt[0])
                        {
                ?>
                            <option selected="" value="<?php echo $upcatt[0]; ?>"><?php echo $upcatt[1]; ?></option>
                            <?php
                        }
                    else
                        {

                ?>
                            <option value="<?php echo $upcatt[0]; ?>"><?php echo $upcatt[1]; ?></option>
                            <?php
                        }
                    }
                ?>
                        </select>
                    </div>
                </div>


                <div class="col-lg">
                    <label for="example-input1-group1"><b>Landmark Name :</b></label>
                    <div class="form-group row has-success">
                        <input type="text" id="example-input1-group1" name="upname" value="<?php echo $row[2]; ?>"
                            required="" class="form-control" pattern="^[a-zA-z -._]*$">
                    </div>
                </div>



                <div class="col-lg">
                    <button type="submit" name="uplandmark" class="btn btn-primary">Update</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </div>

            </form>
        </div>

        <?php
        }
        else
        {
        ?>

        <div class="card-card p-3">
            <form action="" method="post" name="inlandmark">
                <p><?php echo "add ".$_SESSION['identity']?></p>
                <hr />
                <?php 
                if($_SESSION['duperr']==1) 
                {
                    echo "<font size=2 color=red>Already Exists</font>";
                    $_SESSION['duperr']=0;
                }
            ?>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Area Name :</b></label>
                    <div class="form-group row has-success">
                        <select name="area" class="form-control" required="">
                            <option value="">--Select Area--</option>
                            <?php
                $data=$con->query("select * from area");
                while($row=mysqli_fetch_array($data))
                {
                ?>
                            <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                            <?php
                }
                ?>
                        </select>
                    </div>
                </div>


                <div class="col-lg">
                    <label for="example-input1-group1"><b>Landmark Name :</b></label>
                    <div class="form-group row has-success">
                        <input type="text" id="example-input1-group1" name="name" class="form-control" required=""
                            placeholder="landmark" pattern="^[a-zA-z -._]*$">
                    </div>
                </div>



                <div class="col-lg">
                    <button type="submit" name="inlandmark" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </div>

            </form>
        </div>
        <?php
        }
        ?>

    </div>
</div>

<div class="col-md-9">
    <div class="card-card p-3">
        <div class="dis">
            <p><?php echo "manage ".$_SESSION['identity']?>

                <?php 
        if($_SESSION['landmarkcount']!=0)
        {
        $rs=(($_SESSION['currpage']*$perpage)-$perpage)+1;
        $re=$_SESSION['currpage']*$perpage;
        if($re>$_SESSION['landmarkcount'])
        {
            $re=$_SESSION['landmarkcount'];
        }
        ?>
                [Record Range : <?php echo "$rs-$re"; ?>]
                <?php
        }
        ?>

                <i class="las la-trash-alt text-danger font-18"
                    ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','deleteall',0);"></i>
            </p>

            <hr />

            <div>
                <table class="table table-hover">

                    <thead class="td">
                        <th>Area</th>
                        <th>Landmark</th>
                        <th>Edit</th>
                        <th>remove</th>
                    </thead>

                    <tbody>
                        <?php
                    $c=0;
                        if($_REQUEST['action']=="search")
                        {
                        $data=$con->query("select * from landmark where name like '%$_REQUEST[id]%'");
                        }
                        else
                        {
                        $data=$con->query("select * from landmark order by landmarkid desc limit $st,$perpage");
                        }

                        while($row=mysqli_fetch_array($data))
                        {
                    $c++;
                        ?>
                        <tr>

                            <td>
                                <?php
                                    $st=$con->query("select * from area where areaid=$row[0]");
                                    $stt=mysqli_fetch_array($st);
                                    echo $stt[1];
                                ?>
                            </td>
                            <td><?php echo $row[2]; ?></td>
                            <td
                                ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','update',<?php echo $row[1]; ?>);">
                                <i class="far fa-edit"></i>
                            </td>

                            <td
                                ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','delete',<?php echo $row[1]; ?>);">
                                <i class="las la-trash-alt text-danger font-18"></i>
                            </td>

                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    <?php if($c!=0)
                { 
                    if($_REQUEST['action']!="search")
                    {
                ?>
                    <tfoot>
                        <tr>
                            <td colspan="4">
                                <center>
                                    <ul class="paging">
                                        <?php 

                                        if($pages<=$page)
                                        {
                                            $ls=1;
                                            $le=$pages;
                                        }
                                        else
                                        {
                                            if($_SESSION['currpage']>$page)
                                            {
                                                $ls=$_SESSION['currpage']-2;
                                                $le=$_SESSION['currpage']+2;
                                                if($le>$pages)
                                                {
                                                    $le=$pages;
                                                    $ls=$le-4;
                                                }
                                                // if($_SESSION['currpage']==$pages-1)
                                                // {
                                                //     $ls=$_SESSION['currpage']-3;
                                                //     $le=$pages;
                                                // }
                                                // if($_SESSION['currpage']==$pages)
                                                // {
                                                //     $ls=$_SESSION['currpage']-4;
                                                //     $le=$pages;
                                                // }
                                            }
                                            else
                                            {
                                                $ls=1;
                                                $le=$page;
                                            }
                                        }

                                        if($_SESSION['currpage']>$page)
                                        {
                                        ?>
                                        <li
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $_SESSION['currpage']-1;?>);">
                                            PREVIOUS</li>
                                        <?php
                                        }

                                        for($i=$ls;$i<=$le;$i++)
                                        {
                                            if($_SESSION['currpage']==$i)
                                            {
                                        ?>
                                        <li class="active"
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $i; ?>);">
                                            <?php echo $i; ?></li>
                                        <?php
                                            }
                                            else
                                            {
                                        ?>
                                        <li
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $i; ?>);">
                                            <?php echo $i; ?></li>
                                        <?php
                                            }
                                        }
                                        if($_SESSION['currpage']!=$pages)
                                        {
                                        if($pages>$page)
                                        {
                                        ?>
                                        <li
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $_SESSION['currpage']+1;?>);">
                                            NEXT</li>
                                        <?php
                                        }
                                        }
                                        ?>
                                    </ul>
                                </center>

                            </td>
                        </tr>
                    </tfoot>
                    <?php 
                    } 
                }
                ?>
                </table>
                <?php
            if($c==0)
            {
            ?>
                <div class="nodata">
                    <center>
                        <img src="assets/images/nodata.png">
                    </center>

                </div>
                <?php
            }
            ?>
            </div>
        </div>
    </div>
</div>

<?php
}

//end landmark






//start offer

if($_REQUEST['what']=="offer")
{

    if($_REQUEST['action']=="display" && $_REQUEST['id']==0)
    {
        $_SESSION['currpage']=1;
    }
    
    if($_SESSION['currpage']=="" || $_SESSION['insuccess']==1)
    {
        
        $_SESSION['currpage']=1;
        unset($_SESSION['insuccess']);
    }
    if($_REQUEST['action']=="paging")
    {
        $st=($_REQUEST['id']*$perpage)-$perpage;
        $_SESSION['currpage']=$_REQUEST['id'];
    }       
    else
    {
        $st=($_SESSION['currpage']*$perpage)-$perpage;
    }
    

    if($_REQUEST['action']=="delete")
    {
        $del=$con->query("delete from offer where offerid=$_REQUEST[id]");
        
    }
    if($_REQUEST['action']=="deleteall")
    {
        $del=$con->query("delete from offer");
    }

    $rec=$con->query("select count(*) from offer");
    $norec=mysqli_fetch_array($rec);
    $_SESSION['offercount']=$norec[0];

    $pages=ceil($_SESSION['offercount']/$perpage);
    
    if($pages<$_SESSION['currpage'])
    {
        if($pages==0)
        {
            $_SESSION['currpage']=1;
        }
        else
        {
        $_SESSION['currpage']=$pages;
        }
        $st=($_SESSION['currpage']*$perpage)-$perpage;
    }
?>

<div class="col-md-12">
    <p class="adminp"><i class="fas fa-quote-left"></i>&nbsp;</i><?php echo $_SESSION['identity']." "." management"; ?>&nbsp;<i class="fas fa-quote-right"></i></p>
    <hr />
</div>

<div class="col-md-3">
    <div class="frm">

        <?php
        if($_REQUEST['action']=="update")
        {
        $data=$con->query("select * from offer where offerid=$_REQUEST[id]");
        $row=mysqli_fetch_array($data);
        $_SESSION['upoff']=$row[0];
        ?>

        <div class="card-card p-3">
            <form action="" method="post" name="upoffer" enctype="multipart/form-data">
                <p><?php echo "update ".$_SESSION['identity']?></p>
                <hr />
                <?php if($_SESSION['duperr']==1) 
            {
                echo "<font size=2 color=red>Already Exists</font>";
                $_SESSION['duperr']=0;
            }
            ?>
                <div class="col-lg">
                    <label for="example-input1-group1"><b>Offer :</b></label>
                    <div class="form-group row has-success">
                        <input type="text" id="" name="upname" value="<?php echo $row[1]; ?>" class="form-control"
                            pattern="^[a-zA-Z -._]*$">
                    </div>
                </div>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Image :</b></label>
                    <div class="form-group row has-success">
                        <input type="file" name="upimage" class="form-control">
                        <input type="hidden" name="oldpath" value="<?php echo $row[2]; ?>">
                    </div>
                </div>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Startdate :</b></label>
                    <div class="form-group row has-success">
                        <input type="date" id="" name="upstartdate" value="<?php echo $row[3]; ?>" class="form-control"
                            required="" placeholder="stratdate">
                    </div>
                </div>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Enddate :</b></label>
                    <div class="form-group row has-success">
                        <input type="date" id="" name="upenddate" value="<?php echo $row[4]; ?>" class="form-control"
                            required="" placeholder="enddate">
                    </div>
                </div>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Offeramount :</b></label>
                    <div class="form-group row has-success">
                        <input type="text" id="" name="upofferamount" value="<?php echo $row[5]; ?>"
                            class="form-control" required="" placeholder="offeramount" pattern="^[0-9]*$">
                    </div>
                </div>

                <div class="col-lg">
                    <button type="submit" name="upoffer" class="btn btn-primary">Update</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </div>

            </form>
        </div>

        <?php
        }
        else
        {
        ?>

        <div class="card-card p-3">
            <form action="" method="post" name="offer" enctype="multipart/form-data">
                <p class="adminp"><?php echo "add ".$_SESSION['identity']?></p>
                <hr />
                <?php if($_SESSION['duperr']==1) 
            {
                echo "<font size=2 color=red>Already Exists</font>";
                $_SESSION['duperr']=0;
            }
            ?>
                <div class="col-lg">
                    <label for="example-input1-group1"><b>Offer :</b></label>
                    <div class="form-group row has-success">
                        <input type="text" id="" name="name" class="form-control" required="" placeholder="offer"
                            pattern="^[a-zA-Z -._]*$">
                    </div>
                </div>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Image :</b></label>
                    <div class="form-group row has-success">
                        <input type="file" name="image" id="" class="form-control" required="">
                    </div>
                </div>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Startdate :</b></label>
                    <div class="form-group row has-success">
                        <input type="date" id="" name="startdate" class="form-control" required=""
                            placeholder="stratdate">
                    </div>
                </div>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Enddate :</b></label>
                    <div class="form-group row has-success">
                        <input type="date" id="" name="enddate" class="form-control" required="" placeholder="enddate">
                    </div>
                </div>

                <div class="col-lg">
                    <label for="example-input1-group1"><b>Offeramount :</b></label>
                    <div class="form-group row has-success">
                        <input type="text" id="" name="offeramount" class="form-control" required=""
                            placeholder="offeramount" pattern="^[0-9]*$">
                    </div>
                </div>

                <div class="col-lg">
                    <button type="submit" name="inoffer" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </div>

            </form>
        </div>
        <?php
        }
        ?>

    </div>
</div>

<div class="col-md-9">
    <div class="card-card p-3">
        <div class="dis">
            <p class="adminp"><?php echo "manage ".$_SESSION['identity'];?>

                <?php 
        if($_SESSION['offercount']!=0)
        {
        $rs=(($_SESSION['currpage']*$perpage)-$perpage)+1;
        $re=$_SESSION['currpage']*$perpage;
        if($re>$_SESSION['offercount'])
        {
            $re=$_SESSION['offercount'];
        }
        ?>
                [Record Range : <?php echo "$rs-$re"; ?>]
                <?php
        }
        ?>

                <i class="las la-trash-alt text-danger font-18"
                    ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','deleteall',0);"></i>
            </p>

            <hr />

            <div>
                <table class="table table-hover">

                    <!-- <thead class="td">
                        <th>Offer</th>
                        <th>Image</th>
                        <th>Startdate</th>
                        <th>Enddate</th>
                        <th>Offeramount</th>
                        <th>Edit</th>
                        <th>remove</th>
                    </thead> -->

                    <tbody>
                    <div class="row">
                        <?php
                    $c=0;
                        if($_REQUEST['action']=="search")
                        {
                        $data=$con->query("select * from offer where name like '%$_REQUEST[id]%'");
                        }
                        else
                        {
                        $data=$con->query("select * from offer order by offerid desc limit $st,$perpage");
                        }

                        while($row=mysqli_fetch_array($data))
                        {
                    $c++;
                        ?>
                        
                            <!-- <td><?php echo $row[1]; ?></td>
                            <td><img width="70px" height="70px" src=" <?php echo $row[2]; ?> "></td>
                            <td><?php echo $row[3]; ?></td>
                            <td><?php echo $row[4]; ?></td>
                            <td><?php echo $row[5]; ?></td>
                            <td
                                ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','update',<?php echo $row[0]; ?>);">
                                <i class="far fa-edit"></i>
                            </td>

                            <td
                                ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','delete',<?php echo $row[0]; ?>);">
                                <i class="las la-trash-alt text-danger font-18"></i>
                            </td> -->


                            


                                <div class="col-md-6 col-lg-3">
                                    <div class="card">
                                        <img class="card-img-top img-fluid bg-light-alt" style="width:234px; height:156px;background-size: cover;" src="<?php echo $row[2]; ?>" alt="Card image cap">
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col-md-12">
                                                <center><h4 class="card-title"><?php echo $row[1]; ?></h4></center><hr/>
                                                <center><h4 class="fas fa-rupee-sign"><?php echo $row[5]; ?></h4></center><hr/>
                                                <h6>Startdate: <?php echo $row[3]; ?></h6>
                                                <h6>Enddate: <?php echo $row[4]; ?></h6><hr/>
                                                </div>
                                                <div class="col-md-3">
                                                    
                                                    <span class="badge badge-outline-light" 
                                                        ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','update',<?php echo $row[0]; ?>);">
                                                        <i class="far fa-edit font-11"></i>
                                                    </span>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="badge badge-outline-light"
                                                        ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','delete',<?php echo $row[0]; ?>);">
                                                        <i class="las la-trash-alt text-danger font-15"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="card-body">

                                            <center><a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#brijesh" onclick="thali('thali');">Quick View</a></center>

                                        </div> -->
                                    </div>
                                </div>

                                

                            
                        <?php
                        }
                        ?>
                    </div>
                    </tbody>
                    <?php if($c!=0)
                { 
                    if($_REQUEST['action']!="search")
                    {
                ?>
                    <tfoot>
                        <tr>
                            <td colspan="4">
                                <center>
                                    <ul class="paging">
                                        <?php 

                                        if($pages<=$page)
                                        {
                                            $ls=1;
                                            $le=$pages;
                                        }
                                        else
                                        {
                                            if($_SESSION['currpage']>$page)
                                            {
                                                $ls=$_SESSION['currpage']-2;
                                                $le=$_SESSION['currpage']+2;
                                                if($le>$pages)
                                                {
                                                    $le=$pages;
                                                    $ls=$le-4;
                                                }
                                                // if($_SESSION['currpage']==$pages-1)
                                                // {
                                                //     $ls=$_SESSION['currpage']-3;
                                                //     $le=$pages;
                                                // }
                                                // if($_SESSION['currpage']==$pages)
                                                // {
                                                //     $ls=$_SESSION['currpage']-4;
                                                //     $le=$pages;
                                                // }
                                            }
                                            else
                                            {
                                                $ls=1;
                                                $le=$page;
                                            }
                                        }

                                        if($_SESSION['currpage']>$page)
                                        {
                                        ?>
                                        <li
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $_SESSION['currpage']-1;?>);">
                                            PREVIOUS</li>
                                        <?php
                                        }

                                        for($i=$ls;$i<=$le;$i++)
                                        {
                                            if($_SESSION['currpage']==$i)
                                            {
                                        ?>
                                        <li class="active"
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $i; ?>);">
                                            <?php echo $i; ?></li>
                                        <?php
                                            }
                                            else
                                            {
                                        ?>
                                        <li
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $i; ?>);">
                                            <?php echo $i; ?></li>
                                        <?php
                                            }
                                        }
                                        if($_SESSION['currpage']!=$pages)
                                        {
                                        if($pages>$page)
                                        {
                                        ?>
                                        <li
                                            onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $_SESSION['currpage']+1;?>);">
                                            NEXT</li>
                                        <?php
                                        }
                                        }
                                        ?>
                                    </ul>
                                </center>

                            </td>
                        </tr>
                    </tfoot>
                    <?php 
                    } 
                }
                ?>
                </table>
                <?php
            if($c==0)
            {
            ?>
                <div class="nodata">
                    <center>
                        <img src="assets/images/nodata.png">
                    </center>

                </div>
                <?php
            }
            ?>
            </div>
        </div>
    </div>
</div>

<?php
}

//end offer

if($_REQUEST['data']=="thali")
{
?> 
    
    
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo $_REQUEST['thaid']."na data ahi load thashe!" ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
 

    <ul class="rateus">
        <li>
            <?php
            for($i=1;$i<=5;$i++)
            {
            ?>
                <i style="padding:10px 10px; font-size:20px;color:#fbc206;" class="far fa-star"></i>
            <?php
            }
            ?>
        </li>
            <li>
                    <?php  
                    if($_SESSION['who'])
                    {
                    ?>
                        <button type="button" disabled="" title="Login first,then give rate" class="btn btn-primary btn-sm">Rate Us</button>
                    <?php
                    }
                    else
                    {
                    ?>
                        <button type="button" onclick="forrate('rate',0,0,0);" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#rateus">Rate Us</button>
                    <?php
                    }
                    ?>
            </li>
    </ul>




<?php
}

if($_REQUEST['why']=="rate")
{
?>

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Rate Us</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <br/>
            Your rate is important for us. Rate to say us hows we are!
            <br/>
            <center>
                <?php
                for($i=1;$i<=5;$i++)
                {
                ?>
                    <i style="padding:10px 10px; font-size:20px;color:#fbc206;" class="far fa-star"></i>
                <?php
                }
                ?>
                <br/>
                <from action="" method="post" name="rateus">
                <button type="submit" class="btn btn-primary btn-sm" >Rate Us</button>
                </form>
            </center>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Submit</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>


<?php
}


//  Start assign

if($_REQUEST['what']=="fixthaliitemassign")
{

    if($_REQUEST['action']=="display" && $_REQUEST['id']==0)
    {
        $_SESSION['currpage']=1;
    }

    if($_REQUEST['action']=="display" && $_REQUEST['id']==0)
    {
        $_SESSION['currpage']=1;
    }
    
    if($_SESSION['currpage']=="" || $_SESSION['insuccess']==1)
    {
        
        $_SESSION['currpage']=1;
        unset($_SESSION['insuccess']);
    }
    if($_REQUEST['action']=="paging")
    {
        $st=($_REQUEST['id']*$perpage)-$perpage;
        $_SESSION['currpage']=$_REQUEST['id'];
    }       
    else
    {
        $st=($_SESSION['currpage']*$perpage)-$perpage;
    }    

    if($_REQUEST['action']=="delete")
    {
        $del=$con->query("delete from item where itemid=$_REQUEST[id]");
        echo $_SESSION['currpage'];
    }
    if($_REQUEST['action']=="deleteall")
    {
        $del=$con->query("delete from item");
    }

    $rec=$con->query("select count(*) from item");
    $norec=mysqli_fetch_array($rec);
    $_SESSION['itemcount']=$norec[0];

    $pages=ceil($_SESSION['itemcount']/$perpage);
    
    if($pages<$_SESSION['currpage'])
    {
        if($pages==0)
        {
            $_SESSION['currpage']=1;
        }
        else
        {
        $_SESSION['currpage']=$pages;
        }
        $st=($_SESSION['currpage']*$perpage)-$perpage;
    }
?>

<div class="col-md-12">
    <p class="adminp"><i class="fas fa-quote-left"></i>&nbsp;<?php echo $_SESSION['identity']." "." management"; ?>&nbsp;<i class="fas fa-quote-right"></i></p>
    <hr />
</div>



    

<div class="col-md-12">
    
    <form action="" method="post" name="" enctype="multipart/form-data">

        <div class="row">
            <div class="col-md-3">

                <div class="frm">
            

                    <?php
                    if($_REQUEST['action']=="update")
                    {
                    $data=$con->query("select * from item where itemid=$_REQUEST[id]");
                    $row=mysqli_fetch_array($data);

                    //print_r($row);
                    $_SESSION['upid']=$row[1];
                    ?>

                    <div class="card-card p-3">
                        
                            <p><?php echo "update ".$_SESSION['identity']?></p>
                            <hr />
                            <?php if($_SESSION['duperr']==1) 
                            {
                            echo "<font size=2 color=red>Already Exists</font>";
                            $_SESSION['duperr']=0;
                            }
                            ?>

                            <div class="col-lg">
                                <label for="example-input1-group1"><b>Fixthali Name :</b></label>
                                <div class="form-group row has-success">
                                    <select name="upfixthaliid" class="form-control" required="">

                                        <?php
                                        $data1=$con->query("select * from fixthali");
                                        while($row1=mysqli_fetch_array($data1))
                                        {
                                        
                                            $data2=$con->query("select * from fixthaliitemassign where fixthaliid = $row1[0] and itemid = $row[1]");
                                            $row2=mysqli_fetch_array($data2);
                                            
                                            if($row2[0]==$row1[0])
                                            {
                                        ?>
                                                    <option selected="" value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>
                                                    <?php
                                            }
                                            else
                                            {
                                        ?>
                                                    <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>
                                                    <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            

                            <div class="col-lg">
                                <button type="submit" name="upassign" class="btn btn-primary">Update</button>
                                <button type="reset" class="btn btn-danger">Cancel</button>
                            </div>

                        
                    </div>

                    <?php
                    }
                    else
                    {
                    ?>

                    <div class="card-card p-3">
                        
                            <p><?php echo "add ".$_SESSION['identity']?></p>
                            <hr />
                            <?php if($_SESSION['duperr']==1) 
                        {
                            echo "<font size=2 color=red>Already Exists</font>";
                            $_SESSION['duperr']=0;
                        }
                        ?>

                            <div class="col-lg">
                                <label for="example-input1-group1"><b>Fixthali Name :</b></label>
                                <div class="form-group row has-success">
                                    <select name="fixthaliid" class="form-control" required="">
                                        <option value="">--Select Fixthali--</option>
                                        <?php
                            $data=$con->query("select * from fixthali");
                            while($row=mysqli_fetch_array($data))
                            {
                            ?>
                                        <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                                        <?php
                            }
                            ?>
                                    </select>
                                </div>
                            </div>


                            

                            <div class="col-lg">
                                <button type="submit" name="inassign1" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-danger">Cancel</button>
                            </div>

                        
                    </div>
                    <?php
                    }
                    ?>
                    

                    
                </div>   
                
            </div>

            

            <div class="col-md-9">

                <div class="card-card p-3">
                    <div class="dis">
                        <p><?php echo "manage ".$_SESSION['identity']?>

                            <?php 
                    if($_SESSION['itemcount']!=0)
                    {
                    $rs=(($_SESSION['currpage']*$perpage)-$perpage)+1;
                    $re=$_SESSION['currpage']*$perpage;
                    if($re>$_SESSION['itemcount'])
                    {
                        $re=$_SESSION['itemcount'];
                    }
                    ?>
                            [Record Range : <?php echo "$rs-$re"; ?>]
                            <?php
                    }
                    ?>

                            <i class="las la-trash-alt text-danger font-18"
                                ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','deleteall',0);"></i>
                        </p>

                        <hr />

                        <div>
                            <table class="table table-hover">

                                

                                <tbody>
                                <div class="row"> 
                                
                                
                    
                                
                                
                                    <?php
                                $c=0;
                                    if($_REQUEST['action']=="search")
                                    {
                                    $data=$con->query("select * from item where name like '%$_REQUEST[id]%'");
                                    }
                                    else
                                    {
                                    $data=$con->query("select * from item order by itemid desc");
                                    }
                                
                                    while($row=mysqli_fetch_array($data))
                                    {
                                $c++;
                                    ?>
                                    
                                        

                                            <div class="col-md-6 col-lg-3">
                                                <div class="card">

                                                    <?php

                                                    if($_REQUEST['action']=="update")
                                                    {
                                                    
                                                     $data1=$con->query("select * from fixthaliitemassign where itemid = $_REQUEST[id]");
                                                     $row1=mysqli_fetch_array($data1);

                                                     $data2=$con->query("select * from fixthaliitemassign where fixthaliid =$row1[0]");
                                                     while($row2=mysqli_fetch_array($data2))
                                                     {
                                                        if($row2[1]==$row[1])
                                                        {          
                                                        ?>
                                                            <input class="haa" checked type="checkbox" value="<?php echo $row[1]; ?>" name="rem[]" id="contact1">
                                                        <?php 
                                                       
                                                        }
                                                     }

                                                     $data1=$con->query("select * from fixthaliitemassign where itemid = $_REQUEST[id]");
                                                     $row1=mysqli_fetch_array($data1);

                                                     $data2=$con->query("select * from fixthaliitemassign where fixthaliid !=$row1[0] and itemid=$row[1]");
                                                     while($row2=mysqli_fetch_array($data2))
                                                     {
                                                        if($row2[1]=$row[1])
                                                        {          
                                                        ?>
                                                            <input class="haa" type="checkbox" value="<?php echo $row[1]; ?>" name="rem[]" id="contact1">
                                                        <?php 
                                                       
                                                        }
                                                     }

                                                    }
                                                    else
                                                    {
                                                        ?>
                                                            <input class="haa" type="checkbox" value="<?php echo $row[1]; ?>" name="rem[]" id="contact1">
                                                        <?php
                                                    }

                                                    ?>


                                                    

                                                    <img class="card-img-top img-fluid bg-light-alt" style="width:234px; height:156px;background-size: cover;" src="<?php echo '../mysteryflavour/'.$row[3]; ?>" alt="Card image cap">
                                                    <div class="card-header">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-12">
                                                            
                                                            <center><h4 style="text-transform: capitalize;"><?php echo $row[2]; ?></h4></center><hr/>
                                                            <center><h4 class="fas fa-rupee-sign">&nbsp;<?php echo $row[4]; ?></h4></center>
                                                            </div>
                                                            <div class="col-md-3">
                                                                
                                                                <span class="badge badge-outline-light" 
                                                                    ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','update',<?php echo $row[1]; ?>);">
                                                                    <i class="far fa-edit font-11"></i>
                                                                </span>
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <span class="badge badge-outline-light"
                                                                    ondblclick="getdata('<?php echo $_SESSION['identity']; ?>','delete',<?php echo $row[1]; ?>);">
                                                                    <i class="las la-trash-alt text-danger font-15"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            

                                    




                                        
                                    
                                    <?php
                                    }
                                    ?>
                                
                                </div>
                                </tbody>
                                <?php if($c!=0)
                            { 
                                if($_REQUEST['action']!="search")
                                {
                            ?>
                                <!-- <tfoot>
                                    <tr>
                                        <td colspan="4">
                                            <center>
                                                <ul class="paging">
                                                    <?php 

                                                    if($pages<=$page)
                                                    {
                                                        $ls=1;
                                                        $le=$pages;
                                                    }
                                                    else
                                                    {
                                                        if($_SESSION['currpage']>$page)
                                                        {
                                                            $ls=$_SESSION['currpage']-2;
                                                            $le=$_SESSION['currpage']+2;
                                                            if($le>$pages)
                                                            {
                                                                $le=$pages;
                                                                $ls=$le-4;
                                                            }
                                                            // if($_SESSION['currpage']==$pages-1)
                                                            // {
                                                            //     $ls=$_SESSION['currpage']-3;
                                                            //     $le=$pages;
                                                            // }
                                                            // if($_SESSION['currpage']==$pages)
                                                            // {
                                                            //     $ls=$_SESSION['currpage']-4;
                                                            //     $le=$pages;
                                                            // }
                                                        }
                                                        else
                                                        {
                                                            $ls=1;
                                                            $le=$page;
                                                        }
                                                    }

                                                    if($_SESSION['currpage']>$page)
                                                    {
                                                    ?>
                                                    <li
                                                        onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $_SESSION['currpage']-1;?>);">
                                                        PREVIOUS</li>
                                                    <?php
                                                    }

                                                    for($i=$ls;$i<=$le;$i++)
                                                    {
                                                        if($_SESSION['currpage']==$i)
                                                        {
                                                    ?>
                                                    <li class="active"
                                                        onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $i; ?>);">
                                                        <?php echo $i; ?></li>
                                                    <?php
                                                        }
                                                        else
                                                        {
                                                    ?>
                                                    <li
                                                        onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $i; ?>);">
                                                        <?php echo $i; ?></li>
                                                    <?php
                                                        }
                                                    }
                                                    if($_SESSION['currpage']!=$pages)
                                                    {
                                                    if($pages>$page)
                                                    {
                                                    ?>
                                                    <li
                                                        onclick="getdata('<?php echo $_SESSION['identity']; ?>','paging',<?php echo $_SESSION['currpage']+1;?>);">
                                                        NEXT</li>
                                                    <?php
                                                    }
                                                    }
                                                    ?>
                                                </ul>
                                            </center>

                                        </td>
                                    </tr>
                                </tfoot> -->
                                <?php 
                                } 
                            }
                            ?>
                            </table>
                            <?php
                        if($c==0)
                        {
                        ?>
                            <div class="nodata">
                                <center>
                                    <img src="assets/images/nodata.png">
                                </center>

                            </div>
                            <?php
                        }
                        ?>
                        </div>
                    </div>
                </div>
                
            </div>
            
            

            
            
        </div>  
        
    </form>
    
</div>

        




<?php
}
// End assign
?>