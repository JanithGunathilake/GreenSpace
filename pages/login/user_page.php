<?php session_start(); ?>
<?php

@include 'config.php';

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!-- HTML file  -->
<!DOCTYPE html>
<html lang="en">
<head>

   <title>user page</title>

   <!-- CSS file link  -->
   
   <link rel="stylesheet" href="css/contact_us.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                echo "<button class=\"button1\"  style=\"float:right;width:100px;height:px;\"><a class=\"jk\" href=\"../login/user_page.php\">";
                echo $_SESSION['user_name'] . "</a></button>";
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
                <li><a class="jk" href="../find_a_place/find_a_place.php"> Find a Place </a></li>
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
        <br><br><br>
        <br><br><br>
        <br><br><br>


        <div class="update-profile">

<form action="action_page.php" method="post">
   <div class="imgcontainer">
     <img src="img/photo.png" alt="Avatar" class="avatar">
   </div>
<form action="" method="post" enctype="multipart/form-data">
   <h1>User Account</h1>
   <br>
   <br>
   <div class="flex">
      <div class="inputBox">
         <span><h3>First Name : Dilini</h3></span>
         <br>
         <span><h3>Last Name : Rathnayake</h3></span>
         <br>
         <span><h3>Email : dilini92@gmail.com</h3></span>
         <br>
         <span><h3>Date of Birth : 12/30/1992</h3></span>
         <br>
         <span><h3>Gender : Female</h3></span>
         <br>
         <span><h3>Account Type : User</h3></span>
         
         
      </div>
      <div class="inputBox">
         <span><h3>Address : 13/A, St. Joseph Street, Negombo</Address></h3></span>
         <br>
         <span><h3>City : Negombo</h3></span>
         <br>
         <span><h3>Phone : +94(0) 70 465 7785</h3></span>
         <br>
         <span><h3>Gender : Female</h3></span>
         <br>
         <span><h3>Update your pic :</h3></span>
         <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
      </div>
   </div>
   <input type="submit" value="Update Profile" name="update_profile" class="btn">
   <input type="submit" value="Change Password" name="update_profile" class="btn">
   </form>

</div>



               
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
                    <li> <a href="../find_a_place/find_a_place.php">Find a Plce |</a>  </li>
                    <li><a href="../apartment/apartment.php">Apartment |</a>  </li>
                    <li><a href="../about_us/about_us.php">About us |</a>  </li>
                    <li><a href="contact_us.php">Contact us |</a>  </li>
                    <li> <a href="../gallery/gallery.php"> Gallery |</a>  </li>
                    <li><a href="../facilities/facilities.php">Facilities </a> </li>
                </ul>
              </div>
        
            </div>
         </body>
     </html>


</body>
</html>