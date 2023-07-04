<?php 

require 'config.php';


if(isset($_GET['id'])){

    $deleteid=$_GET['id'];

    $deletemsg=mysqli_query($conn,"DELETE FROM notification WHERE id='$deleteid'");

    if($deletemsg){

        header("Location:readmsg.php");
    }
    else{

        echo("Error: " . mysqli_error($conn)); 
          
    }
    
    }


?>