<?php session_start(); ?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "green_space";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Apartment
        </title>
        <link rel="stylesheet" href="css/apartment.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>

    <body>
    <div class="btntop">
            
    <?php   
            if(isset($_SESSION['user_id'])){
                echo "<button class=\"button1\"  style=\"float:right;width:100px;height:px;\"><a class=\"jk\" href=\"../../login/logout.php\">Log Out</a></button>";
            }else{
                echo "<button class=\"button1\"  style=\"float:right;width:100px;height:px;\"><a class=\"jk\" href=\"../../login/register_form.php\">Sign Up</a></button>";
            }
            ?>
            <?php   
            if(isset($_SESSION['user_id'])){
                if($_SESSION['user_id'] == '18'){

                    echo "<button class=\"button1\"  style=\"float:right;width:100px;height:px;\"><a class=\"jk\" href=\"../../admin/dashbord.php\">";
                echo $_SESSION['user_name'] . "</a></button>";
                }else{
                    echo "<button class=\"button1\"  style=\"float:right;width:100px;height:px;\"><a class=\"jk\" href=\"../../login/user_page.php\">";
                echo $_SESSION['user_name'] . "</a></button>";
                }
                
            }else{
                echo "<button class=\"button1\"  style=\"float:right;width:100px;height:px;\"><a class=\"jk\" href=\"../../login/login_form.php\">Log in</a></button>";
            }
            ?>
        </div>
          <h1>
            <center>
            <a href="../../../homepage.php"><img src="img/logo.png" alt="LOGO" style="float:left;width:200px;height:80px;"></a>
                Green Space Apartments
            </center>
        </h1>
        <h5>
            <center>
                A Higher Quality of Living
            </center>
        </h5>


        <div class="menu">
        
        
        <ul>
            <li><a class="jk" href="../../../homepage.php">Home</a></li>
            <li><a class="jk" href="../../find_a_place/find_a_place.php"> Find a Place </a></li>
            <li><a class="jk" href="../apartment.php">Apartments</a></li>
            <li><a class="jk" href="../../gallery/gallery.php">Gallery</a></li>
            <li><a class="jk" href="../../facilities/facilities.php">Facilities</a></li>
            <li><a class="jk" href="#">Loan Service</a>
                    <ul>
                            <li><a class="jk" href="../../loan_service/guide.php">Property Buying Guide</a></li>
                            <li><a class="jk" href="../../loan_service/loan_service.php">Home Loan Calculator</a></li>
                           
                    </ul>
                </li>
                        
                        <li><a class="jk" href="../../about_us/about_us.php">About us</a></li>
            <li><a class="jk" href="../../contact_us/contact_us.php">Contact us</a></li>
                        
</ul>
    </div>
<br><br><br><br>
  
<h1 align="center" style=color:red;">Wishlist</h1>
<h2>Your Items</h2>

<table border="4">


     <tr align="center">
         <td>Apartment ID</td>
         <td>Province</td>
         <td>Location</td>
         <td>Price</td>
         <td>Description</td>
         <td>Rooms</td>
         <td>Image</td>
         <td>Delete</td>
         
     </tr>
     
 
     
 <tbody>
     <?php $message=mysqli_query($conn,"SELECT *  FROM wishlist");
     while($row=mysqli_fetch_assoc($message)) :?>
 </tbody>
     
  <tr>
      <td><?php echo $row["APID"];?></td>
      <td><?php echo $row["province"];?></td>
      <td><?php echo $row["GSLocation"];?></td>
      <td><?php echo $row["price"];?></td>
      <td><?php echo $row["gdescription"];?></td>
      <td><?php echo $row["aRoom"];?></td>
      <td><img src="img/<?php echo$row["aimage"];?>" height="100" width="100" alt=""></td>
      <td><a href="delete.php?APID=<?php echo $row["APID"];?>"><button>Delete</button></a></td>
      
  </tr>
   <?php endwhile ?>

</table>





                







  
<div class="footerbar">
	<div id="table">  
<table> 

    <tr> 
	  <th>
	  		<div class="head"><h1>Green Space Cooperation</h1></div>
              <div class="p1"><p>Established in 2007, Green Space (GS) is currently Sri lanka most visited 
                property and apartment listing website with over 500 active 
               Sri Lanka ads in the Market. Featuring Houses, Apartments, Annexes for both rent and 
               sale in all four corners of the island. Greenspaces is a platform on which you can buy Apartment 
               easily! Use the location selector to find apartments close to you. 100% buyer protection</p></div>
	  </th> 

	  <th>
        <h4>
            FOLLOW US ON SOCIAL MEDIA
        </h4>
        <ul class="socials">
            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://youtube.com/"><i class="fa fa-youtube"></i></a></li>
            <li><a href="https://lk.linkedin.com/"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>
	  </th> 
  </tr>

 </table> 
 
 </div> 
</div>
<div class="footer-bottom">
    <p>
        Copyright &copy; <a href="#">Green Space Cooperation</a>
    </p>


    <div class="footer-menu">
        <ul class="f-menu">
          <li> <a href="../../../homepage.html">Home |</a> </li> 
          <li> <a href="../../find_a_place/find_a_place.html">Find a Plce |</a>  </li>
          <li><a href="../../loan_service/loan_service.html">Loan Service |</a>  </li>
          <li><a href="../../about_us/about_us.html">About us |</a>  </li>
          <li><a href="../../contact_us/contact_us.html">Contact us |</a>  </li>
          <li> <a href="../../gallery/gallery.html"> Gallery |</a>  </li>
          <li><a href="../../facilities/facilities.html">Facilities </a> </li>
        </ul>
      </div>

    </div>
   </body>
 </html>



