<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Property Buying Guide
        </title>
        <link rel="stylesheet" href="css/guide.css">
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
            <li><a class="jk" href="../find_a_place/find_a_place.php"> Find a Place </a></li>
            <li><a class="jk" href="../apartment/apartment.php">Apartments</a></li>
            <li><a class="jk" href="../gallery/gallery.php">Gallery</a></li>
            <li><a class="jk" href="../facilities/facilities.php">Facilities</a></li>
            <li><a class="jk" href="#">Loan Service</a>
                    <ul>
                        <li><a class="jk" href="guide.php">Property Buying Guide</a></li>
                        <li><a class="jk" href="../loan_service/loan_service.php">Home Loan Calculator</a></li>
                        
                    </ul>
                </li>
               
                        
                        <li><a class="jk" href="../about_us/about_us.php">About us</a></li>
                        <li><a class="jk" href="../contact_us/contact_us.php">Contact us</a></li>
                                         
                
</ul>
    </div>
<br><br><br>
    <div class="guide">

        <div class="heading">
            <h1>Sri Lanka Property Buying Guide</h1>
        </div>



    <h1>How to Find and Buy the Right Property in Sri Lanka?</h1>
    <center><h2>How to research for property</h2></center>

    <p>When buying a home in a given country, whether you are a local or a foreigner, you must follow a set 
        of laws and regulations. Knowing the ins and outs of property selection will also help you make the 
        finest purchase.
        When looking for property in these cities, you have the option of working with a real 
        estate agent, looking through publications, or going straight to LankaPropertyWeb. Filter your results
         based on your criteria and find your dream house in minutes. Consider the location, availability to utilities
      and services, zoning regulations, average plot costs, and other factors while choosing land for a home. These
       factors may have an impact on your upcoming construction project.
       The requirements to consider while purchasing an apartment, on the other hand, are different.

        Getting a look inside an apartment before you buy it makes it easier to choose your Ideal Home. It also shows you how to
        plan out your funding choices. Here are a few things to think about during the procedure.



       <ul>
           <li> Date of completion and payment schedule (if it is under construction)</li>

           <li>The paperwork and approvals required for the stage of development they are in are available.</li>

           <li>The impact on the issuance of deeds if the property is mortgaged to a bank.</li>

           <li>The developer's and contractor's reputations (for apartments)</li>
       </ul></p>

       <center><h2>Understand the average prices in the area</h2></center>

       <p>Examine the market and ensure that the house you've picked is the best value and location for you. 
        To help you choose the ideal house, you can use features like the House Price Index, Area Guides, ROI Calculator,
        and price comparisons across different adverts.

        You can discover more about the city and its surroundings by consulting our region guide. 
        It assists you in locating the appropriate house near a particular school, institution, or company.

        The LankaPropertyWeb House Price Index provides data on average property prices in Sri Lanka, its nine provinces,
         and Colombo. Property price changes can also be found by comparing data from different quarters of different years.</p>

        <center><h2>Investing or Living?</h2></center>
        <p>Property investment has long been seen as a reliable source of income. 
        The returns you'll be able to enjoy depend on the property itself, 
        whether you live in it and earn from appreciation or buy it and rent it out. That is why, before choosing a property,
         we propose calculating the return on investment.</p>

         <center><h2>Return on Real Estate Investment</h2></center>
         <p>After deducting the investment's related expenses, this is the percentage return a real estate investor can expect. 
             Return consists of two parts. The first is capital gain, which is the increase in value of the property throughout 
             the holding time or the price at which you will sell it. The other is the money made throughout that time (rent income). 
             Deduct the expenses you incurred throughout the holding period, such as insurance premiums, management fees, interest 
             paid (if the property was purchased with a bank loan), and so on, to determine the ROI.

            You may quickly and easily calculate your returns using the LankaPropertyWeb ROI Calculator, which was created just 
            sfor this purpose. Read on to learn more about how to calculate your return.</p>

        <center><h2>How to find a property with the best ROI</h2></center>
        <p>
        Property ROI is primarily determined by two factors: first, the area's value (capital) appreciation, 
        and second, the property's generateable income. For example, property value appreciation in the Colombo 
        03 region is around 6%, however if you invest in a 3 bedroom quality apartment in the same area, you can rent 
        it out for roughly LKR 250,000 per month. The amount of money you make from a property is determined by a number of things.
         Consider the region property value appreciation rate and the income that may be made from the property while looking for 
         the ideal property to invest in. Scarcity of supply, increased demand, and infrastructure developments are all 
         factors that contribute to price increases.
        </p>

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
                                                             