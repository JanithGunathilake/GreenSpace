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


if(isset($_POST['Addcontact'])){

      $contactname=$_POST['contactname'];
      $contactemail=$_POST['contactemail'];

      $file_name=$_FILES['avatar']['name'];
      $file_type=$_FILES['avatar']['type'];
      $file_size=$_FILES['avatar']['size'];
      $temp_name=$_FILES['avatar']['tmp_name'];

      $upload_to='image/';

 if(empty($contactname)||empty($contactemail)||empty($temp_name)){


      $alert_message[]="Please enter all fields";
 }
 else
     $insert="INSERT INTO contact_details(contactname,contactemail,avatar) VALUES('$contactname','$contactemail','$file_name')";
     $upload=mysqli_query($conn,$insert);
  
     if($upload){
      move_uploaded_file($temp_name,$upload_to.$file_name);
      $alert_message[]="New Apartment added successfully";
  }
  else{

      $alert_message[]="Something went wrongs";
  }
}



?>

<html>

<head>
      
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="dashbord.css">
      <link rel="stylesheet" href="contacts.css">
  
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
      <title>Apartment</title>
      
        
        
      </head>

      
    <?php 
    if(isset($alert_message)){

      foreach($alert_message as $alert_message){

         echo'<span class="alert">'.$alert_message.'</span>';

      }
    }
    ?>
   
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


                                    echo '<div class="dropdownmsg"><a class="notify" href="readmsg.php?id=' . $msg["id"] . '">'." <br>" . $msg["msg"] . " <br>" . $msg["time"] . "<hr><br>" . '</a></div>';
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

   <h3 class="t-name">Apartment</h3>

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

   <div class="contact-container">

   <div class="contact-contactform">

      <form action="<?php  $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

       <h1>Add new contact</h1>
         
       <input type="text" placeholder="Enter name" name="contactname" class="contact-box" required>
       <input type="text" placeholder="Enter Email" name="contactemail" class="contact-box" required>
       <input type="file" name="avatar" accept="image/png, image/jpg, image/jpeg" class="contact-box" required>
       <input type="submit" name="Addcontact" value="Add Contact" class="bttn" required>

      </form>


   </div>
     
 <div class="contactlog">
         <table class="contact-table">
               <thead>
                     <tr>
                           <td>Avatar</td>
                           <td>Contact Name</td>
                           <td>Contact Email</td>
                           <td><i style="color:gray"class="fas fa-envelope"></i></a></td>
                           <td><i style="color:red;"class="fas fa-trash"></td>
                  
                     </tr>
               </thead>

                   <tr>

                   
                   <?php $contact=mysqli_query($conn,"SELECT *  FROM contact_details");
                   while($row=mysqli_fetch_assoc($contact)) :?>
                   
                           <td><img id="avatar"src="image/<?php echo $row['avatar'];?>" height="100" width="100" alt=""></td>
                           <td><?php echo $row["contactname"];?></td>
                           <td><?php echo $row["contactemail"];?></td>
                           <td><a href="message.php" <i style="color:grey;"class="fas fa-envelope"></i></a></td>
                            <td><a href="deletecontact.php?count=<?php echo $row["count"];?>"<i style="color:red;"class="fas fa-trash"></i></a></td>
                     </tr>
                   
                     <?php endwhile ?>
         </table>
 </div>

</body>


</html>