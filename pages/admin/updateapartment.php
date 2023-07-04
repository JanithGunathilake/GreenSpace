<?php 
session_start();
require 'config.php';

//perform query box 1 total_visitors
$query = "SELECT * FROM  count";
$result = mysqli_query($conn, $query);

//CHECKING QUERY ERROR
if (!$result) {

   die("Retriving error<br>" . $query);
}

$total_visitors = mysqli_num_rows($result);

//box 2 members

$memberQuery = "SELECT * FROM register";
$memberresult = mysqli_query($conn, $memberQuery);

//CHECKING QUERY ERROR

if (!$memberresult) {

   die("Retriving error<br>" . $memberquery);
}

$total_members = mysqli_num_rows($memberresult);

//box 3 sales


$salesQuery = "SELECT * FROM payment";
$salesresult = mysqli_query($conn, $salesQuery);

//CHECKING QUERY ERROR

if (!$salesresult) {

   die("Retriving error<br>" . $salesQuery);
}

$total_sales = mysqli_num_rows($salesresult);

//box 4 revenue

$revenuQuery = "SELECT SUM(pAmount)AS sum FROM payment";
$revenuresult = mysqli_query($conn, $revenuQuery);

//CHECKING QUERY ERROR

if (!$revenuresult) {

   die("Retriving error<br>" . $revenuQuery);
}

$total_revenu = mysqli_fetch_assoc($revenuresult);

 

 if(isset($_POST['UpdateApartment'])){

    $updateid=$_POST['APID'];
    

$companyid=$_POST['COMID'];
$location=$_POST['GSLocation'];
$facilities=$_POST['aFacility'];
$room=$_POST['aRoom'];
$price=$_POST['price'];
$aid=1;

    $updatedetails=mysqli_query($conn,"UPDATE apartment SET WHERE APID='$deleteid'");

    if($deletemsg){

        header("Location:apartment.php");
    }
    else{

        echo("Error: " . mysqli_error($con)); 
          
    }
    
    }


?>

<html>

<head>

  
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashbord.css">
    <link rel="stylesheet" href="apartment.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <title>Update Apartment</title>
      
      <style>

       .pagesize{

          width:192rem; 
          height:55rem;
          margin-top:68px;
          margin-left:179px;

       }
        
       .addpage{

         width: 500px;
         height:500px;
         display: flex;
         flex-direction: row;
       align-items: center;
       justify-content: center;
        padding-left:420px;
        padding-top: 95px;

       }

       .addpage form{

       width:700px;
       height:810px;
       margin-top:190px;
       padding:20px;
       background:white;
       border-radius: 4px;
       box-shadow: 0 8px 16px rgba(0,0,0,0.3);
      margin-right: 15px;
       }

       .addpage form h1{

        text-align: center;
        margin: bottom 24px;
        color: #222;
       }
       .addpage form .box{

        width:100%;
        height: 40px;
        background:white;
        border-radius: 4px;
        border:1px solid silver;
        margin: 10px 0 18px 0;
        padding:10px 0;

       }

       .addpage form .btn{

        margin-left:50%;
        transform:translateX(-50%);
        width:200px;
        height:30px;
        border:none;
        outline:none;
        background: #27a327; 
        cursor: pointer;
        font-size: 10px;
        text-transform: uppercase;
        color: white;
        margin-top: 20px;
        padding:10px;

       }



      </style>

</head>

<body>

<?php 
     
     $notification_get=mysqli_query($conn,"SELECT * FROM notification WHERE status=0");
     $notification_count=mysqli_num_rows($notification_get);
   
   ?>

    <div class="notification-container">
        <nav>
            <ul>
                <li> <div class="dropdown"><span id="background"><i class="far fa-bell"></i></span><?php if ($notification_count !== 0) echo  '<button id="notamount">' . $notification_count . '</button>'; ?> <div class="dropdown-notification">
                        <p><?php $notificationQuery = "SELECT * FROM notification WHERE status=0";
                            $notificationresult = mysqli_query($conn, $notificationQuery);

                            if (mysqli_num_rows($notificationresult) > 0) {

                                while ($msg = mysqli_fetch_assoc($notificationresult)) {


                                    echo '<div class="dropdownmsg"><a class="notify" href="readmsg.php?id=' . $msg["id"] . '">' .$msg["name"]." <br>" . $msg["msg"] . " <br>" . $msg["time"] . "<hr><br>" . '</a></div>';
                                }
                            } else {
                                echo "No Notifications!";
                            } ?></p>
                    </div>
                </div></li>
                <li><a href="../login/logout.php">  <img src="image/admin.png" alt="" class="admin-avatar" ></a></li>
            </ul>
        </nav>

    </div>

    <section id="menubar">

<div class="logo">

   <img src="image/logo.png" alt="logo">
   <h2>GreenSpace</h2>

</div>

<div class="topics">
   <li><i class="fas fa-chart-pie"></i><a href="dashbord.php">Dashboard</a></li>
   <li><i class="fas fa-building" ></i><a href="apartment.php">Apartments</a></li>
   <li><i class="fas fa-comment-alt"></i><a href="message.php">Message</a></li>
   <li><i class="fas fa-user"></i><a href="profile.php">Profile</a></li>
   <li><i class="fas fa-address-book"></i><a href="contacts.php">Contacts</a></li>
   <li><i class="fas fa-exchange-alt"></i><a href="switch.php">Switch</a></li>
</div>

</section>

<section id="page">

   <h3 class="t-name">Apartments</h3>

   <div class="maxcontainer">
      <div class="upperpart">

         <div class="boxes">

            <i class="fas fa-users"></i>
            <div>
               <h3><?php echo "$total_visitors"; ?></h3>
               <span>Visitors</span>
            </div>

         </div>
         
         <div class="boxes">

            <i class="fas fa-user-tie"></i>
            <div>
               <h3><?php echo "$total_members"; ?></h3>
               <span>Members</span>
            </div>

         </div>
         <div class="boxes">

            <i class="fas fa-handshake"></i>
            <div>
               <h3><?php echo "$total_sales"; ?></h3>
               <span>Sales</span>
            </div>

         </div>
         <div class="boxes">

            <i class="fas fa-coins"></i>
            <div>
               <h3><?php printf(" %s.00", $total_revenu["sum"]); ?></h3>
               <span>Revenue</span>
            </div>

         </div>
         
      </div>

      </div>

      <br>


   <div class="pagesize">
  
<div class="addpage">

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
<h1>Update Apartment</h1>
    
   
    <label class="formlabel" for="GSLocation">Location</label>
    <input type="text" name="GSLocation" class="box" required>
    <br>
    <label class="formlabel" for="price">Province</label>
    <input type="number" name="price" class="box" required>
    
      <br>
    <label class="formlabel" for="price">Price</label>
    <input type="number" name="price" class="box" required>
      <br>
    <label class="formlabel" for="aFacility">Facilities</label>
    <input type="text" name="aFacility" class="box" required>
       <br>
    <label class="formlabel" for="aRoom">Rooms</label>
    <input type="text" name="aRoom" class="box" required>
    <br>
    <label class="formlabel" for="image">Image</label>
    <input type="file" name="image" accept="image/png, image/jpg, image/jpeg" class="box" required>
     <br>
    <input type="submit" name="UpdateApartment" value="update apartment" class="btn" required>
</form>

  </div>
</body>

</html>