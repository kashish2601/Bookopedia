<?php

include './php/login.php';
include './php/Registration.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Registration Form</title>
<link rel="stylesheet" href="./css/LogReg.css">
<link rel="shortcut icon" href="./assets/open-book.png" type="image/x-icon">
</head>
<body background="https://wallpaperaccess.com/full/124383.jpg">
    
               
        <div id="login-form" class="login-page">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" onclick="login()" class="toggle-btn">Log In</button>
                    <button type="button" onclick="register()" class="toggle-btn">Register</button>
                </div>
            <div class="social-icons">

            </div>
                <form id="login" class="input-group-login" name="lin" method="POST">
                    <input type="text" class = "input-field" name="em" placeholder="Email Id" required >
		    <input type="password" class = "input-field" name="pwd" placeholder="Enter Password" required>
		    <input type="checkbox" class = "check-box"><span>Remember Password</span>
		    <button type="submit" name="submit" class="submit-btn"> <a href="index.html" style="color: rgba(0, 0, 0, 0.6); text-decoration: none;"> Log in </a></button>
		 </form>
		 <form id="register" class="input-group-register" name="reg" method="POST">
		     <input type="text" class="input-field" name="firstname" placeholder="First Name" required>
		     <input type="text" class="input-field" name="lastname" placeholder="Last Name " required>
		     <input type="email" class="input-field" name="email" placeholder="Email Id" required>
		     <input type="password" class="input-field" name="password" placeholder="Enter Password" required>
		     <input type="password" class="input-field" name="confirm" placeholder="Confirm Password"  required>
		     <input type="checkbox" class="check-box"><span>I agree to the <a href="#">terms and conditions</a></span>
                    <button type="submit" name="submit" class="submit-btn" > <a href="#lin" style="color: rgba(0, 0, 0, 0.6); text-decoration: none;">Register</a></button>
					
	         </form>
            </div>
        </div>
    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
		
	</script>
	
</body>
</html>