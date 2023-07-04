<?php 



require 'config.php';

if(isset($_GET['count'])){

    $deleteid=$_GET['count'];

    $deletemsg=mysqli_query($conn,"DELETE FROM contact_details WHERE count='$deleteid'");

    if($deletemsg){

        header("Location:contacts.php");
    }
    else{

        echo("Error: " . mysqli_error($con)); 
          
    }
    
    }


?>