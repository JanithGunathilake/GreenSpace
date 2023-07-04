<?php
session_start();
require 'pages/admin/config.php';


//ADDING NEW VISITOR
$visitor_ip=$_SERVER['REMOTE_ADDR'];

//CHECK IF USER IS UNIQUE

$query="SELECT * FROM  count WHERE ip_address='$visitor_ip'";
$result=$conn->query($query);

//CHECKING QUERY ERROR
if(!$result){

 die("Retriving error<br>".$query);
}

$total_visitors= $result-> num_rows;

if($total_visitors<1){

    $query="INSERT INTO count (ip_address) VALUES('$visitor_ip')";
    $result=$conn->query($query); 
}




?>



<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Home Page
        </title>
        <link rel="stylesheet" href="css/mystyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>

    <body>
        <div class="btntop">
            
            <?php   
            if(isset($_SESSION['user_id'])){
                echo "<button class=\"button1\"  style=\"float:right;width:100px;height:px;\"><a class=\"jk\" href=\"pages/login/logout.php\">Log Out</a></button>";
            }else{
                echo "<button class=\"button1\"  style=\"float:right;width:100px;height:px;\"><a class=\"jk\" href=\"pages/login/register_form.php\">Sign Up</a></button>";
            }
            ?>
            <?php   
            if(isset($_SESSION['user_id'])){
                if($_SESSION['user_id'] == '18'){

                    echo "<button class=\"button1\"  style=\"float:right;width:100px;height:px;\"><a class=\"jk\" href=\"pages/admin/dashbord.php\">";
                echo $_SESSION['user_name'] . "</a></button>";
                }else{
                    echo "<button class=\"button1\"  style=\"float:right;width:100px;height:px;\"><a class=\"jk\" href=\"pages/login/user_page.php\">";
                echo $_SESSION['user_name'] . "</a></button>";
                }
                
            }else{
                echo "<button class=\"button1\"  style=\"float:right;width:100px;height:px;\"><a class=\"jk\" href=\"pages/login/login_form.php\">Log in</a></button>";
            }
            ?>
        </div>
        <h1>
            <center>
                <a href="homepage.php"><img src="img/logo.png"  alt="LOGO" style="float:left;width:200px;height:80px;"></a>
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
                <li><a class="jk" href="homepage.php">Home</a></li>
                <li><a class="jk" href="pages/find_a_place/find_a_place.php"> Find a Place </a></li>
                <li><a class="jk" href="pages/apartment/apartment.php">Apartments</a></li>
                        <li><a class="jk" href="pages/gallery/gallery.php">Gallery</a></li>
                        <li><a class="jk" href="pages/facilities/facilities.php">Facilities</a></li>
                <li><a class="jk" href="#">Loan Service</a>
                        <ul>
                            <li><a class="jk" href="pages/loan_service/guide.php">Property Buying Guide</a></li>
                            <li><a class="jk" href="pages/loan_service/loan_service.php">Home Loan Calculator</a></li>
                            
                        </ul>
                    </li>

                        
                        <li><a class="jk" href="pages/about_us/about_us.php">About us</a></li>
                       <li><a class="jk" href="pages/contact_us/contact_us.php">Contact us</a></li>
            </ul>
               
            
        
        </div>
        
       

<br> <br> 
<br> <br>

        <div class="slideshow-container">

            <div class="mySlides fade">
            <img src="img/1.jpeg" style="width:1000px;height: 400px;">
           
            </div>
            
            <div class="mySlides fade">
            <img src="img/2.jpeg" style="width:1000px;height: 400px;">
            
            </div>
            
            <div class="mySlides fade">
            <img src="img/3.jpeg" style="width:1000px;height: 400px;">
            
            </div>
            
            </div>
            <br>
            
            <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
            </div>

            <script>
                let slideIndex = 0;
                showSlides();
                
                function showSlides() {
                  let i;
                  let slides = document.getElementsByClassName("mySlides");
                  let dots = document.getElementsByClassName("dot");
                  for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                  }
                  slideIndex++;
                  if (slideIndex > slides.length) {slideIndex = 1}    
                  for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";  
                  dots[slideIndex-1].className += " active";
                  setTimeout(showSlides, 2000);
                }
                </script>

                <center><h1>Featured Apartments</h1></center>


                <table class="tab">
                    <tr>
                        <td align="center">
                            <div class="i_">
                                <a href="pages/apartment/apartment.php"><img src="img/2.jpeg" class="image"></a>
                                <div class="overlay">Kandy</div>
                              </div>
                        </td>
                        <td align="center">
                            <div class="i_">
                            <a href="pages/apartment/apartment.php"><img src="img/3.jpeg" class="image"></a>
                                <div class="overlay">Colombo</div>
                              </div>
                        </td>
                        <td align="center">
                            <div class="i_">
                            <a href="pages/apartment/apartment.php"><img src="img/4.jpeg" class="image"></a>
                                <div class="overlay">Mathara</div>
                              </div>
                        </td> 
                    </tr>
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
          <li> <a href="homepage.php">Home |</a> </li> 
          <li> <a href="pages/find_a_place/find_a_place.php">Find a Plce |</a>  </li>
          <li><a href="pages/apartment/apartment.php">Apartment |</a>  </li>
          <li><a href="pages/about_us/about_us.php">About us |</a>  </li>
          <li><a href="pages/contact_us/contact_us.php">Contact us |</a>  </li>
          <li> <a href="pages/gallery/gallery.php"> Gallery |</a>  </li>
          <li><a href="pages/facilities/facilities.php">Facilities </a> </li>
        </ul>
      </div>

     </div>
    </body>
</html>