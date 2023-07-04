<?php session_start(); ?>
<?php

$servername ="localhost";
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
  


<div class="item">
  <div class="row_">
    <div class="column_">
    <?php
        $province = '';
        $GSLocation = '';
        $aRoom = '';
        $aBathroom = '';
        $area = '';
        $aFacility = '';
        $Acondition = '';
        $price = '';
        $img = '';
       if(isset($_GET['APID']))

        $apartmentid=$_GET['APID'];

         
    $apartmentmsg=mysqli_query($conn,"SELECt *FROM apartment_details WHERE APID='$apartmentid'");

    while($result=mysqli_fetch_assoc($apartmentmsg)):?>

      <img class="imgb" src="img/<?php echo $result['aimage'];?>" style="width:100%">
      </div>
      <div class="column_">
      <p class="description">
      <h1 class="price">Rs. <?php echo $result['price'];?></h1>
      <p class="des"><h2 class="head2">Property details</h2><b><?php echo $result['gdescription'];?></b><p>

      <div class="column_">
        <p>
        <ul>
          <li><b>Proovince - </b><?php echo $result['province'];?></li>
          <li><b>City - </b><?php echo $result['GSLocation'];?></li>
          <li><b>Facilities - </b><?php echo $result['aFacility'];?></li>
          <li><b>Rooms - </b><?php echo $result['aRoom'];?></li>
          <li><b>Bathrooms - </b><?php echo $result['aBathroom'];?></li>
          <li><b>Area - </b><?php echo $result['area'];?></li>
          <li><b>Condition - </b><?php echo $result['Acondition'];?></li>
          <?php $province = $result['province']; ?>
          <?php $GSLocation = $result['GSLocation']; ?>
          <?php $aFacility = $result['aFacility']; ?>
          <?php $aRoom = $result['aRoom']; ?>
          <?php $aBathroom = $result['aBathroom']; ?>
          <?php $area = $result['area']; ?>
          <?php $Acondition = $result['Acondition']; ?>
          <?php $price = $result['price']; ?>
          <?php $aimage = $result['aimage']; ?>
          <?php $gdescription = $result['gdescription'] ?>
          <?php endwhile?>

          
          
          <?php

            if(isset($_POST['btnsubmit'])){

               // $apartmentid=$_GET['APID'];
            $apid=$_POST['apartmentid'];
            $prov=$_POST['province'];
            $loc=$_POST['GSLocation'];
            $des=$_POST['des'];
            $price=$_POST['price'];
            $room=$_POST['aRoom'];
            $broom=$_POST['aBathroom'];
            $img=$_POST['aimage'];

            

                    
            $wishlist="INSERT INTO wishlist (APID, province, GSLocation, price, gdescription, aRoom, aimage) VALUES ('$apid', '$prov', '$loc', '$price', ' $des', '$room', ' $img')";
            $wishmsg=mysqli_query($conn,$wishlist);
             
                    }
    
                       
                
                    ?>
          
                    
        
            <input type="hidden" name="id" value="<?php echo $apartmentid; ?>">
            <input type="hidden" name="province" value="<?php echo $province;?>">
            <input type="hidden" name="GSLocation" value="<?php echo $GSLocation;?>">
            <input type="hidden" name="aFacility" value="<?php echo $aFacility;?>">
            <input type="hidden" name="aRoom" value="<?php echo $aRoom;?>">
            <input type="hidden" name="aBathroom" value="<?php echo $aBathroom;?>">
            <input type="hidden" name="area" value="<?php echo $area;?>">
            <input type="hidden" name="Acondition" value="<?php echo $Acondition;?>">
            <input type="hidden" name="price" value="<?php echo $price;?>">
            <input type="hidden" name="img" value="<?php echo $img;?>">
            <input type="hidden" name="description" value="<?php echo $description;?>">
          <button type="submit" class="button1" method="get" name="btnsubmit" style="float:right;width:100%;"><a class="jk" href="#">Add to Wishlist</a></button> 
         
          <button class="button1"  style="float:right;width:100%;"><a class="jk" href="wishlist.php">View Wishlist</a></button>
        </ul>
        
        </p>

      </p>
    </div>

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



