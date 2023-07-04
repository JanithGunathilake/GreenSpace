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

<html>
    <head>
      
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashbord.css">
    <link rel="stylesheet" href="message.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <title>Message</title>
    
      
      
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


                                    echo '<div class="dropdownmsg"><a class="notify" href="readmsg.php?id=' . $msg["id"] . '">'.$msg["name"]. " <br>"  . $msg["msg"] . " <br>" . $msg["time"] . "<hr><br>" . '</a></div>';
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

   <h3 class="t-name">Message</h3>

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


        <div class="box-container">
           
      <div class="contact-box">
 
           <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
              <span><i class="fas fa-at">GreenMail</i></span><br>
              <input type="text" class="input-field" placeholder=" Sender name" name="senderName">
              <input type="text" class="input-field" placeholder="Reciver name" name="reciverName">
              <input type="text" class="input-field" placeholder="Email address" name="contactmail">
              <input type="text" class="input-field" placeholder="subject" name="sub">
              <textarea type="text" class="input-field textarea-field" placeholder="Message" name="msg"></textarea>
              <button type="submit" class="btn" name="mailbttn" value>Send Message</button>
           </form>
      </div>

       <div class="result-box">
      <?php 
          
          $input="SELECT a.avatar,a.contactname,b.msg FROM contact_details a,mailbox b WHERE a.contactemail=b.contactemail";
          $message=mysqli_query($conn,$input);
          while($row=mysqli_fetch_assoc($message)) :?>

          <table>

            <tr>
               <td><img id="messageicon"src="image/<?php echo $row["avatar"];?>" alt="" style="width:"></td>
               <td><?php echo $row["contactname"];?></td>
               <td><?php echo $row["msg"];?></td>
            </tr>
            <?php endwhile?>
          </table>


  </div>

</div>
<?php 

if(isset($_POST['mailbttn'])){

$name=$_POST["senderName"];
$rename=$_POST["reciverName"];
$mail=$_POST["contactmail"];
$subject=$_POST["sub"];
$message=$_POST["msg"];

$input="INSERT INTO mailbox(senderName,reciverName,contactemail,sub,msg) VALUES ('{$name}','{$rename}','{$mail}','{$subject}','{$message}')";
$result=mysqli_query($conn,$input);

if($result){

 echo'<script>alert("SEND SUCCESFULLY!");</script>';

}
else{

   echo'<script>alert("ERROR!");</script>';

}

}
?>




        
           
 