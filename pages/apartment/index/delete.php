<?php 


require 'config.php';


if(isset($_GET['APID'])){

    $deleteid=$_GET['APID'];

    $deletemsg=mysqli_query($conn,"DELETE FROM wishlist WHERE APID='$deleteid'");

    if($deletemsg){

        header("Location:wishlist.php");
    }
    else{

        echo("Error: " . mysqli_error($con)); 
          
    }
    
    }


?>