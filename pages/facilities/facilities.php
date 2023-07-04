<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Facilities
        </title>
        <link rel="stylesheet" href="css/facilities.css">
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
                        <li><a class="jk" href="facilities.php">Facilities</a></li>
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

<br><br><br><br>
    <h1><center>Facilities</center></h1>


    
      <body>
      
      
      
      <div class="container">
        <div class="mySlides">
          <img src="img/6.jpg" style="width:100%" height="600px">
        </div>
      
        <div class="mySlides">
          <img src="img/8.jpg" style="width:100%" height="600px">
        </div>
      
        <div class="mySlides">
          <img src="img/3.jpg" style="width:100%" height="600px">
        </div>
          
        <div class="mySlides">
          <img src="img/4.jpg" style="width:100%" height="600px">
        </div>
      
        <div class="mySlides">
          <img src="img/5.jpg" style="width:100%" height="600px">
        </div>
          
        <div class="mySlides">
          <img src="img/1.jpg" style="width:100%" height="600px">
        </div>
          
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
      
        <div class="caption-container">
          <p id="caption"></p>
        </div>
      
        <div class="row">
          <div class="column">
            <img class="demo cursor" src="img/6.jpg" style="width:100%" onclick="currentSlide(1)" alt="POOL">
          </div>
          <div class="column">
            <img class="demo cursor" src="img/8.jpg" style="width:100%" onclick="currentSlide(2)" alt="Roof Top">
          </div>
          <div class="column">
            <img class="demo cursor" src="img/3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Garden">
          </div>
          <div class="column">
            <img class="demo cursor" src="img/4.jpg" style="width:100%" onclick="currentSlide(4)" alt="POOL">
          </div>
          <div class="column">
            <img class="demo cursor" src="img/5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Kids Play Area">
          </div>    
          <div class="column">
            <img class="demo cursor" src="img/1.jpg" style="width:100%" onclick="currentSlide(6)" alt="GYM">
          </div>
        </div>
      </div>
      

      <script>
      let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

</script>




















      
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
          <li><a href="../contact_us/contact_us.php">Contact us |</a>  </li>
          <li> <a href="../gallery/gallery.php"> Gallery |</a>  </li>
          <li><a href="facilities.php">Facilities </a> </li>
        </ul>
      </div>

    </div>
   </body>
 </html>
                                                            