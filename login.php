<?php include "templates/header.php"; ?>
<?php include "php/get_login.php"; ?>

<div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active"> Sign In </h2>
  
      <!-- Icon -->
      <div class="fadeIn first">
        <img src="img/login.png" id="icon" alt="User Icon" />
      </div>
  
      <!-- Login Form -->
      <form>
        <input type="text" id="email" class="fadeIn second" name="login" placeholder="login">
        <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
        <input type="submit" id="send" class="fadeIn fourth" value="Log In">
      </form>
  
      <!-- Remind Passowrd -->
      <!--<div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div>
      <div id="formFooter">
        <a class="underlineHover" href="#">Register User</a>
      </div>
  -->
    </div>
  </div>
  
  <link href="css/login.css" rel="stylesheet" type="text/css">
  <script src="js/jquery.js"></script> 
