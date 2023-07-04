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
if(isset($_GET['formbttn'])){

$type=$_GET['type'];
$name=$_GET['name'];
$email=$_GET['email'];
$message=$_GET['Message'];

$insert="INSERT INTO form(type,name,email,message) VALUES('$type','$name','$email','$message')";
$result=mysqli_query($conn,$insert);

if($result){

  echo'<script>alert("Successful!");</script>';

}
else{

    echo'<script>alert("Failier");</script>';
}

}

?>





<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Contact Us
        </title>
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
                        <li><a class="jk" href="contact_us.php">Contact us</a></li>
                           
                    
                      
                    
                            
                            
                            
                    
                   
            </ul>
               
            
        
        </div>


        <br><br><br>
        <br><br><br>
   
        









<!--contact us-->


<div class="container">
<form method="get">
<form action="<?php $_SERVER['PHP_SELF'];?>" class="form" >
    <h2>Fill Form</h2>
	

	<label for="type"><b>Type</b></label>
    <select id="select" name="type" >
      <option value="Feed back">Feed back</option>
      <option value="Help needed">Help needed</option>
      <option value="Others">Others</option>
    </select>
	
	
    <label for="name"><b>Your Name</b></label>
    <input type="text" placeholder="Your Name" name="name" required>
	
	<label for="email"><b>Your Email</b></label>
    <input type="text" placeholder="Enter your Email" name="email" required>
	
    <label for="Message"><b>Message</b></label>
    <textarea id="textarea" name="Message" placeholder="Write something" style="height:200px" ></textarea>
	
	<center><button class="button1" type="submit" class="btn" name="formbttn">Submit</button>
    <button class="button1" type=" button" class="del" value="delete"
     onclick="deleteSomething()">Delete</button></center>

    
  </form>
</div>
<script src="js/script.js"></script>


<h1><center>Contact us</center></h1>

<!--link-->
<div class="row">



	<div class="img" >
		<img src="img/visit.png" alt="visit us Icon"  height="100px"  width="100px">
		<h3>visit us</h3>
		<p>Green Street</P>
		<p>colombo 07</p>
	</div>
	   
	<div class="img">
		<img src="img/call.jpg" alt="Phone Icon" height="100px"  width="100px" >
		<h3>Call us</h3>
		<p>(+94)112510896</p>
		<p>(+94)112510869</p>
	</div>
	 
	<div class="img">
		<img src="img/email.png" alt="email Icon"  height="100px" width="100px">
		<h3>Email us</h3>
		<p>greenspace123@gmail.com</p>
	</div>
	  
	<div class="img">
		 <img src="img/whatsapp.png" alt="Whatsapp Icon" height="100px"  width="100px">
		 <h3>Whatsapp</h3>
		 <p>(+94)773652487</p>
	</div>
	  
	<div class="img">
		<img src="img/twiter.png" alt="Twitter Icon"  height="100px"  width="100px">
		<h3>Twitter</h3>
		<p>green_space</p>
	</div>

	 <div class="img">
		<img src="img/fb.png" alt="facebook Icon" height="100px"  width="100px" >
		<h3>Facebook</h3>
		<p>Green space</p>
	</div>
			  
          
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
                                                                                 