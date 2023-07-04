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








if(isset($_POST['AddApartment'])){

    


$apartmentid=$_POST['APID'];
$companyid=$_POST['COMID'];
$province=$_POST['province'];
$location=$_POST['GSLocation'];
$price=$_POST['price'];
$des=$_POST['gdescription'];
$facilities=$_POST['aFacility'];
$room=$_POST['aRoom'];

$aid=1;

$file_name=$_FILES['image']['name'];
$file_type=$_FILES['image']['type'];
$file_size=$_FILES['image']['size'];
$temp_name=$_FILES['image']['tmp_name'];

$upload_to='images/';



if(empty($apartmentid)|| empty($companyid) || empty($location) || empty($province) ||empty($des)|| empty($facilities) || empty($room) || empty($price) || empty($file_name)){

   echo'<script>alert("Fill all the fields");</script>';

}
else{

    $insert="INSERT INTO apartment(APID,COMID,province,GSLocation,price,gdescription,aFacility,aRoom,aimage,AID) VALUES ('$apartmentid','$companyid','$province','$location','$price','$des','$facilities','$room','$file_name','$aid')";
    $upload=mysqli_query($conn,$insert);

    if($upload){
        move_uploaded_file($temp_name,$upload_to.$file_name);
        echo'<script>("New Apartment added successfully");</script>';
    }
    else{

        echo'<script>alert("Something went wrongs");</script>';
    }
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
    <title>Apartment</title>
    
      
      
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


                                    echo '<div class="dropdownmsg"><a class="notify" href="readmsg.php?id=' . $msg["id"] . '">' .$msg["name"] ." <br>" . $msg["msg"] . " <br>" . $msg["time"] . "<hr><br>" . '</a></div>';
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
<h1>Add New Apartment</h1>
    
    <label class="formlabel" for="APID">Apartment ID</label >
    <input type="text" name="APID" placeholder="APC/APK/APM.." class="inputbox" required>
     <br>
    <label class="formlabel" for="COMID">Company ID</label>
    <input type="text" name="COMID"class="inputbox" required>
     <br>
     <label class="formlabel" for="provice">Province</label>
    <input type="text" name="province" class="inputbox" required>
      <br>
    <label class="formlabel" for="GSLocation">Location</label>
    <input type="text" name="GSLocation" class="inputbox" required>
      <br>
    <label class="formlabel" for="price">Price</label>
    <input type="number" name="price" class="inputbox" required>
      <br>
    <label class="formlabel" for="gdescription">Description</label>
    <input type="text" name="gdescription" class="inputbox" required>
      <br>
    <label class="formlabel" for="aFacility">Facilities</label>
    <input type="text" name="aFacility" class="inputbox" required>
       <br>
    <label class="formlabel" for="aRoom">Rooms</label>
    <input type="text" name="aRoom" class="inputbox" required>
    <br>
    <label class="formlabel" for="image">Image</label>
    <input type="file" name="image" accept="image/png, image/jpg, image/jpeg" class="inputbox" required>
     <br>
    <input type="submit" name="AddApartment" value="Add apartment" class="btn" required>
</form>
  
<div class="result-box">

<table id="msg">

<thead>
     <tr>
         <td>Apartment ID</td>
         <td>Company ID</td>
         <td>Province</td>
         <td>Location</td>
         <td>Price</td>
         <td>Description</td>
         <td>Facilities</td>
         <td>Rooms</td>
         <td>Image</td>
         <td>#</td>
         
     </tr>
     
 </thead>
     
 <tbody>
     <?php $message=mysqli_query($conn,"SELECT *  FROM apartment");
     while($row=mysqli_fetch_assoc($message)) :?>
 </tbody>
     
  <tr>
      <td><?php echo $row["APID"];?></td>
      <td><?php echo $row["COMID"];?></td>
      <td><?php echo $row["province"];?></td>
      <td><?php echo $row["GSLocation"];?></td>
      <td><?php echo $row["price"];?></td>
      <td><?php echo $row["gdescription"];?></td>
      <td><?php echo $row["aFacility"];?></td>
      <td><?php echo $row["aRoom"];?></td>
      <td><img src="images/<?php echo$row["aimage"];?>" height="100" width="100" alt=""></td>
      <td><a href="deleteapartment.php?APID=<?php echo $row["APID"];?>"<i style="color:red;"class="fas fa-trash"></i></a>
          <a href="updateapartment.php?APID=<?php echo $row["APID"];?>"<i style="color:blue"class="fas fa-edit"></i></a>
    </td>
  </tr>
   <?php endwhile ?>

</table>
</div>

</div>
   </div>
</body>
</html>












