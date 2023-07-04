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

//$conn = mysqli_connect('localhost','root','','user_db');


if(isset($_POST["BtnSubmit"])){

    $province=$_POST['province'];
    $city=$_POST['GSLocation'];
    $room=$_POST['aRoom'];
    
    if(empty($province) ||empty($city) || empty($room)){

        $alert_message[]="Please enter all fields";
        
        }

    
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Find A Place <?php     ?>
        </title>
        <link rel="stylesheet" href="css/find_a_place.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js.js"></script>
    </head>

    <body>
    <div class="btntop">
            
    <?php   
            if(isset($_SESSION['user_id'])){
                echo "<button class=\"button1\"  style=\"float:right;width:100px;height:px;\"><a class=\"jk\" href=\"../login/logout.php\">Log Out</a></button>";
            }else{
                echo "<button class=\"button1\"  style=\"float:right;width:100px;height:px;\"><a class=\"jk\" href=\"../login/register_form.php\">Sign Up</a></button>";
            }
            ?>
            <?php   
            if(isset($_SESSION['user_id'])){
                if($_SESSION['user_id'] == '18'){

                    echo "<button class=\"button1\"  style=\"float:right;width:100px;height:px;\"><a class=\"jk\" href=\"../admin/dashbord.php\">";
                echo $_SESSION['user_name'] . "</a></button>";
                }else{
                    echo "<button class=\"button1\"  style=\"float:right;width:100px;height:px;\"><a class=\"jk\" href=\"../login/user_page.php\">";
                echo $_SESSION['user_name'] . "</a></button>";
                }
                
            }else{
                echo "<button class=\"button1\"  style=\"float:right;width:100px;height:px;\"><a class=\"jk\" href=\"../login/login_form.php\">Log in</a></button>";
            }
            ?>
        </div>
        <h1>
            <center>
            <a href="../../homepage.php"><img src="img/logo.png"  alt="LOGO" style="float:left;width:200px;height:80px;"></a>
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
            <li><a class="jk" href="../../homepage.php">Home</a></li>
            <li><a class="jk" href="find_a_place.php"> Find a Place </a></li>
            <li><a class="jk" href="../apartment/apartment.php">Apartments</a></li>
            <li><a class="jk" href="../gallery/gallery.php">Gallery</a></li>
            <li><a class="jk" href="../facilities/facilities.php">Facilities</a></li>
            <li><a class="jk" href="#">Loan Service</a>
                    <ul>
                        <li><a class="jk" href="../loan_service/guide.php">Property Buying Guide</a></li>
                        <li><a class="jk" href="../loan_service/loan_service.php">Home Loan Calculator</a></li>
                       
                    </ul>
                </li>
               
                        
                        <li><a class="jk" href="../about_us/about_us.php">About us</a></li>
                        <li><a class="jk" href="../contact_us/contact_us.php">Contact us</a></li>
                        
                
                     
                       
                
</ul>
    </div>

    
    <br><br><br><hr> <center><h2>Find Me an Apartment <?php      
            $pro="";
            $city="";
            $room="";
         if(isset($_POST['BtnSubmit'])){

            $pro=$_POST['province'];
            $city=$_POST['GSLocation'];
            $room=$_POST['aRoom'];
            
        
         
         $message=mysqli_query($conn,"SELECT *FROM apartment WHERE province='$pro' && GSLocation='$city' && aRoom='$room'"); 
           
        
        $count=mysqli_num_rows($message);

        echo "$count";
        
         }?>
        
        
        </h2> </center>
     
   
    <div class="checkbox">
        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
        <select class="selectbox" name="province">
        <option class="selectbox" value="">-- Select Province --</option>
        <option class="selectbox" value="Western">Western</option>
        <option class="selectbox" value="Central">Central</option>
        <option class="selectbox" value="Southern">Southern</option>
        </select>
        <select class="selectbox" name="GSLocation">
        <option class="selectbox" value="">-- Select City --</option>
        <option class="selectbox" value="Colombo">Colombo</option>
        <option class="selectbox" value="Kandy">Kandy</option>
        <option class="selectbox" value="Matara">Matara</option>
        </select>
        <select class="selectbox" name="aRoom">
        <option class="selectbox" value="">-- Sort By --</option>
        <option class="selectbox" value="2">2 Rooms</option>
        <option class="selectbox" value="3">3 Rooms</option>
        <option class="selectbox" value="4">4 Rooms</option>
        </select>
        <input class="selectbox"  name="BtnSubmit" type="submit" value="Submit" id="subbttn">
        </form>
</div>
    <hr>
    <center>
     <div>
     <?php
         
            
            $pro="";
            $city="";
            $room="";
         if(isset($_POST['BtnSubmit'])){

            $pro=$_POST['province'];
            $city=$_POST['GSLocation'];
            $room=$_POST['aRoom'];
            
       
         
         $message=mysqli_query($conn,"SELECT *FROM apartment WHERE province='$pro' && GSLocation='$city' && aRoom='$room' "); 
         }
          
             if(mysqli_affected_rows($conn)<1){

                echo'<script>alert("Wrong Selection Try Again");</script>';
              echo'<img src="img/find.jpg" style="width:435px;height:250px;">';

              }else
              
          while($row=mysqli_fetch_assoc($message)):?>
         
         <img src="img/<?php echo $row['aimage'];?>" alt="Mountains" style="width:435px;height:250px;">
         <p>  <?php  echo $row['gdescription'];?></p>
          
         </div>
    </center>
          
          
         <?php endwhile ?>

         
         
     


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
          <li> <a href="../../homepage.php">Home |</a> </li> 
          <li> <a href="find_a_place.php">Find a Plce |</a>  </li>
          <li><a href="../apartment/apartment.php">Apartment |</a>  </li>
          <li><a href="../about_us/about_us.php">About us |</a>  </li>
          <li><a href="../contact_us/contact_us.php">Contact us |</a>  </li>
          <li> <a href="../gallery/gallery.php"> Gallery |</a>  </li>
          <li><a href="../facilities/facilities.php">Facilities </a> </li>
        </ul>
      </div>

    </div>
   </body>
 </html>
                                                             