<?php 
session_start();
require 'config.php';


if(isset($_GET['id'])){

$tableid=$_GET['id'];
$set_id=mysqli_query($conn,"UPDATE notification SET status='1' WHERE id='$tableid'");


}



?>

<html>

<head>

<style>
#msg {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 5%;
}

#msg td, #msg th {
  border: 1px solid #ddd;
  padding: 8px;
}


#msg tr:nth-child(even){background-color: #f2f2f2;}

#msg tr:nth-child(even)hover {background-color: #ddd;}

#msg thead {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #333;
  color: white;
}

#reverse{

   background-color: #333;
  vertical-align: middle;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    outline: none;
    font-weight: 20px;
    padding-top:10px;
    color: white;
    position:relative;
    margin-left: 750px;
    margin-top:500px;

    
}
</style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

</head>
<body>
    
   <table id="msg">

   <thead>
        <tr>
            <td>#</td>
            <td>Sender ID</td>
            <td>Name</td>
            <td>Message</td>
            <td>Notification Type</td>
            <td>Time</td>
            <td><i class="fas fa-trash"></i></td>
            </div>   
        </tr>
        
    </thead>
        
    <tbody>
        <?php $message=mysqli_query($conn,"SELECT * FROM notification WHERE status='1'");
        while($row=mysqli_fetch_assoc($message)) :?>
    </tbody>
        
     <tr>
         <td><?php echo $row["id"];?></td>
         <td><?php echo $row["senderid"];?></td>
         <td><?php echo $row["name"];?></td>
         <td><?php echo $row["msg"];?></td>
         <td><?php echo $row["notificationtype"];?></td>
         <td><?php echo $row["time"];?></td>
         <td><a href="deletemsg.php?id=<?php echo $row["id"];?>"<i style="color:red;"class="fas fa-trash"></i></a></td>
     </tr>
      <?php endwhile ?>

   </table>



</body>


 <a href="dashbord.php"><button id="reverse"><i class="fas fa-home" ></i></button></a>


</html>