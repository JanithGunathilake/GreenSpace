<?php 


require 'config.php';


if(isset($_GET['APID'])){

    $deleteid=$_GET['APID'];

    $deletemsg=mysqli_query($conn,"DELETE FROM apartment WHERE APID='$deleteid'");

    if($deletemsg){

        header("Location:apartment.php");
    }
    else{

        echo("Error: " . mysqli_error($con)); 
          
    }
    
    }


?>