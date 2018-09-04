<?php
session_start();
require_once("admin/connection.php");
extract($_REQUEST);
$q=mysql_query("select * from login where username='".($user)."' and password='".($pass)."'");
$c=mysql_fetch_array($q);

if(isset($submit))
{
	if($c>0)
	{
		if($captcha==$_SESSION['cap'])
		{	
			$_SESSION['name']=$user;
			header("location:welcome.php");
		}
	}
}
if(!empty($_GET['b']))
{
	session_unset();

}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title> Signin & Signup </title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Quick Signin & Signup form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css/styleln.css" type="text/css" media="all">
    <!-- onlinefonts -->
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //Custom-Stylesheet-Links -->
</head>

<body>
    <header>
        <h1 class="title-agile text-center">Signin & Signup</h1>
    </header>
    <!-- //header -->
    <section class="login-wrap">
        <div class="main_w3agile">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
            <label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up">
            <label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                <!-- signin form -->
                <div class="signin_wthree">
                    <form method="post" action="#">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input id="user" type="text" name="user" class="input" required>
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" type="password" name="pass" class="input" data-type="password" required>
                        </div>
						 <div class="group">
                            <label for="user" class="label">Captcha</label>
                            <input id="user" type="text" name="captcha" class="input" required>
                        </div>
						 <div class="group">
                            <img src="captcha.php" />
                        </div>
                        <div class="group">
                            <input id="check" name="checkbox" type="checkbox" class="check" checked>
                            <label for="check">
                                <span class="icon"></span> Keep me Signed in</label>
                        </div>
                        <div class="group">
                            <input type="submit" class="button" name="submit" value="Sign In">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <h2><a href="#">Forgot Password?</a></h2>
                        </div>
                    </form>
                </div>
                <!-- //signin form -->
                <!-- signup form -->
                <div class="signup_wthree">
                    <form method="post" action="#">
                        <div class="group">
                            <label for="user1" class="label">Username</label>
                            <input id="user1" type="text" class="input" required>
                        </div>
                        <div class="group">
                            <label for="password1" class="label">Password</label>
                            <input id="password1" type="password" class="input" data-type="password" required>
                        </div>
                        <div class="group">
                            <label for="password2" class="label">Re-Enter Password</label>
                            <input id="password2" type="password" class="input" data-type="password" required>
                        </div>
                        <div class="group">
                            <label for="email" class="label">Email Address</label>
                            <input id="email" type="email" class="input" required>
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Sign Up">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <label for="tab-1">Already Member? </label>
                        </div>
                    </form>
                </div>
                <!-- //signup form -->
            </div>
        </div>
    </section>
    <!-- //section -->
    <footer>
        <div class="copy-wthree text-center">
            <p>&copy; 2018 Quick Signin & Signup form. All rights reserved | Design by
                <a href="http://w3layouts.com">W3layouts</a>
            </p>
        </div>
    </footer>
    <!-- //footer -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
</body>
<!-- //Body -->

</html>