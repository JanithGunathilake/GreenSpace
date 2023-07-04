<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'User already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
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
   <title>register form</title>

   <!-- CSS file link  -->
   <link rel="stylesheet" href="css/lgstyle.css">

   <!-- Social media icons  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Sign up</h3>

      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

      <input type="text" name="name" required placeholder="Enter your Name">
      <input type="email" name="email" required placeholder="Enter your Email">
      <input type="password" name="password" required placeholder="Enter your Password">
      <input type="password" name="cpassword" required placeholder="Confirm your Password">
      <select name="user_type">
         <option value="user">User</option>
         <option value="admin">Admin</option>
      </select>

      <input type="submit" name="submit" value="Register me" class="form-btn">

      <div class="seperator"><b>OR</b></div>

      <!--Social login buttons-->
         <div class="social-icons">
                        
            <a href="https://www.facebook.com/"><div class="social-icon facebook"><span class="fa fa-facebook"></span></a></div>
            <a href="https://twitter.com/?lang=en"><div class="social-icon twitter"><span class="fa fa-twitter"></span></a></div>
            <a href="https://myaccount.google.com/"><div class="social-icon google"><span class="fa fa-google"></span></a></div>
            </div>

      <p>Already have an Account?<a href="login_form.php"> Sign in</a></p>
   </form>

</div>

</body>
</html>