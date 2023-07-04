<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <title>
            Gallery
        </title>
        <link rel="stylesheet" href="css/gallery.css">
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
                <li><a class="jk" href="gallery.php">Gallery</a></li>
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


        <br><br>

            
<input type="radio" name="Photos" id="check1" checked>
<input type="radio" name="Photos" id="check2">
<input type="radio" name="Photos" id="check3">
<input type="radio" name="Photos" id="check4">

<div class="container">
    <h1>GALLERY</h1>
    <div class="top-content">
        <h3>Photo Gallery</h3>
        <label for="check1">All Photos</label>
        <label for="check2">Common Areas</label>
        <label for="check3">Commercial Areas</label>
        <label for="check4">Rooftop Areas</label>
    </div>

    <div class="photo-gallery">

    <div class="pic common">
            <img src="img/enter.JPG">
            <div clss="add">The Grand Entrance</div>
        </div>

    <div class="pic commercial">
        <img src="img/medical.JPG"> 
        <div clss="add">Minimart & Pharmacy</div>
        </div>

    <div class="pic rooftop">
        <img src="img/roof1.JPG">
        <div clss="add">Rooftop Area 1</div>
    </div>

    <div class="pic common">
        <img src="img/pool.JPG">
        <div clss="add">Infinity Pool</div>
    </div>

    <div class="pic commercial">
        <img src="img/salon.JPG"> 
        <div clss="add">Salon & Spa</div>
    </div>

    <div class="pic rooftop">
        <img src="img/roof2.JPG">
        <div clss="add">Rooftop Area 2</div>
    </div>

    <div class="pic common">
        <img src="img/game.JPG">
        <div clss="add">Game Room</div>
    </div>

    <div class="pic commercial">
        <img src="img/bar.JPG"> 
        <div clss="add">Bar & Restaurant</div>
    </div>

    <div class="pic rooftop">
        <img src="img/roof3.JPG">
        <div clss="add">Rooftop Area 3</div>
    </div>

    <div class="pic common">
        <img src="img/apt1.JPEG">
        <div clss="add">Apartment: Spring</div>
    </div>

    <div class="pic commercial">
        <img src="img/apt2.JPEG">
        <div clss="add">Apartment: Summer</div> 
    </div>

    <div class="pic rooftop">
        <img src="img/apt3.JPG">
        <div clss="add">Apartment: Winter</div>
    </div>

</div>

</div>



<br><br>












        
              
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
                <li> <a href="gallery.php"> Gallery |</a>  </li>
                <li><a href="../facilities/facilities.php">Facilities </a> </li>
                </ul>
              </div>
        
            </div>
         </body>
     </html>
                                                                                 