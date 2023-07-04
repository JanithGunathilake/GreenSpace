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

?>


?>

<html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashbord.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    
    <title>Dashbord</title>

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


                                    echo '<div class="dropdownmsg"><a class="notify" href="readmsg.php?id=' . $msg["id"] . '">' .$msg["name"]. " <br>" . $msg["msg"] . " <br>" . $msg["time"] . "<hr><br>" . '</a></div>';
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

   <h3 class="t-name">Dashboard</h3>

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

      <div class="display">
         <table width="100%">
            <th>
               <tr id="tableheadrow">
                  <td>Name</td>
                  <td>Title</td>
                  <td>Status</td>
                  <td>Position</td>
                  
               </tr>
            </th>
            <tbody>
               <tr>
                  <td class="staff">

                     <img src="image/administrater.jpg" alt="">
                     <div class="description">
                        <h5>Dinidu Ekanayaka</h5>
                        <p>greenspaceadmin@gmail.com</p>
                     </div>
                  </td>

                  <td class="position">
                     <h5>System Administrator</h5>
                     <p>Green Space</p>
                  </td>

                  <td class="status">
                     <p>Active</p>
                  </td>

                  <td class="respo">
                     <p>Employee</p>
                  </td>

                

               </tr>
               <tr>
                  <td class="staff">

                     <img src="image/customer manager.jpg" alt="">
                     <div class="description">
                        <h5>Methma Subo</h5>
                        <p>greenspaccmanager@gmail.com</p>
                     </div>
                  </td>

                  <td class="position">
                     <h5>Customer Manager</h5>
                     <p>Green Space</p>
                  </td>

                  <td class="status">
                     <p>Active</p>
                  </td>

                  <td class="respo">
                     <p>Employee</p>
                  </td>

                 

               </tr>
               <tr>
                  <td class="staff">

                     <img src="image/customer service manager.jpg" alt="">
                     <div class="description">
                        <h5>Thihara Edirisooriya</h5>
                        <p>greenspacecsmanager@gmail.com</p>
                     </div>
                  </td>

                  <td class="position">
                     <h5>Customer Service Manager</h5>
                     <p>Green Space</p>
                  </td>

                  <td class="status">
                     <p>Active</p>
                  </td>

                  <td class="respo">
                     <p>Employee</p>
                  </td>

                

               </tr>
               <tr>
                  <td class="staff">

                     <img src="image/financial manager.jpg" alt="">
                     <div class="description">
                        <h5>Janith Gunathilaka</h5>
                        <p>greenspacefmanager@gmail.com</p>
                     </div>
                  </td>

                  <td class="position">
                     <h5>Financial Manager</h5>
                     <p>Green Space</p>
                  </td>

                  <td class="status">
                     <p>Active</p>
                  </td>

                  <td class="respo">
                     <p>Employee</p>
                  </td>

                 

               </tr>
            <tbody>
         </table>
      </div>
   </div>
</section>
   
</html>






