<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Home Loan Calculator
        </title>
        <link rel="stylesheet" href="css/loan_service.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>

function computeLoan(){
  var amount = document.getElementById('amount').value;
  var interest_rate = document.getElementById('interest_rate').value;
  var months = document.getElementById('months').value;
  var interest = (amount * (interest_rate * .01)) / months;
  var payment = ((amount / months) + interest).toFixed(2);
  payment = payment.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  document.getElementById('payment').innerHTML = "Monthly Payment = "+payment;
}
</script>
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
                        <li><a class="jk" href="guide.php">Property Buying Guide</a></li>
                        <li><a class="jk" href="loan_service.php">Home Loan Calculator</a></li>
                        
                    </ul>
                </li>
               
                        
                        <li><a class="jk" href="../about_us/about_us.php">About us</a></li>
                        <li><a class="jk" href="../contact_us/contact_us.php">Contact us</a></li>
                                         
                
</ul>
    </div>






<br><br><br>
    <div class="all">
    <div class="header">
    <h1>Home Loan Calculator</h1>
    </div>
    <div class='parent'>
      <div class='child'>
      
    
    
        
        <div>
        <form>
<label class="lable4"  for="rad">Currency</label>
<input type="radio" name="Currency">LKR
<input type="radio" name="Currency">USD<br><br>

<label class="lable1">Loan Amount: </label> <input id="amount" type="number" min="1" max="1000000" onchange="computeLoan()"><br><br><br>
<label class="lable2">Interest Rate:</label> <input id="interest_rate" type="number" min="0" max="100" value="10" step=".1" onchange="computeLoan()">% <br><br><br>
<label class="lable3">Months:</label> <input id="months" type="number" min="1" max="72" value="1" step="1" onchange="computeLoan()"><br><br><br>
<h2 id="payment"></h2>
      </form>
          </div>
          </div>
         
          <div class='child'>
         
            <h3>Let us help for a fast and<br>hassle free loan application.</h3>
            <button type="button">Apply For A Home Loan</button>
            <button type="button">Call Us!</button>
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
          <li> <a href="../../homepage.php">Home |</a> </li> 
          <li> <a href="../find_a_place/find_a_place.php">Find a Plce |</a>  </li>
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
                                                             