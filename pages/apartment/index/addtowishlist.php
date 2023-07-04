<?php 


require 'config.php';


if(isset($_GET['APID'])){

    $apartmentid=$_GET['APID'];

    $apartmentmsg=mysqli_query($conn,"INSERT INTO wishlist (`APID`, `province`, `GSLocation`, `price`, `gdescription`, `aRoom`, `aimage`)  values ('$result=mysqli_fetch_assoc($apartmentmsg) where APID = '$apartmentid')");

    if($aapartmentmsg){

        header("Location:wishlist.php");
    }
    else{

        echo("Error: " . mysqli_error($con)); 
          
    }
    
    }


?>

