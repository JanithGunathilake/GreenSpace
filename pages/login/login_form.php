<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_id']=$row['id'];

         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_id']=$row['id'];

         header('location:../../homepage.php');

      }
     
   }else{
      $error[] = 'Incorrect Email or Password!';
   }

};

?>

<!-- HTML file  -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- CSS file link  -->
   <link rel="stylesheet" href="css/lgstyle.css">
   

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login</h3>

      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

      <input type="email" name="email" required placeholder="Enter your Email">

      <input type="password" name="password" required placeholder="Enter your Password" value="" id="myInput">
      <input type="checkbox" style="margin-bottom: 40px; margin-left: -525px; cursor: pointer;" onclick="myFunction()"> 
      <label style="margin-bottom: 40px; margin-left: -215px">Show Password</label>
              
      <p style="margin-top: -10px;"><a href="#" class="text">Forgot your password?</a></p>
      <input type="submit" name="submit" value="Sign me" class="form-btn">

      <p>Not a member? Create your account for FREE!
         <br>
        <a href="register_form.php">Click here</a></p>

   </form>

</div>
<script src="js/lgpassword.js"></script>
</body>
</html>