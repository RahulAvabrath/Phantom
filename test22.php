<!DOCTYPE html>
<html>
<head>
  <title>Phantom-Login</title>
</head>
<link rel="icon" href="http:phantom6.jpg" type="image/gif" sizes="30x30">
<body style="
background-image: url(lbg6.jpg); height: 100vh;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;

">


<link rel="stylesheet" type="text/css" href="test2.css">
<script type="text/javascript" href="test.js"></script>


<h2 style="color:#000; font-size: 35px;" onclick="location.href = 'displaypage.php'; "><b><u>Phantom.com</u></b></h2>
<br>


<div class="container" id="container" style="height: 70%; width: 50%; background: #333;">
  <div class="form-container sign-up-container">
    <form action="signup.php" method="post">
      <h1>Create Account</h1>
  
      <br>
      <input type="text" name="fname" placeholder="First Name" />
      <input type="text" name="lname" placeholder="Last Name" />
      <input type="text" name="phoneno" placeholder="Mob number"  />
      <input type="email" name="email" placeholder="Email" />
      <input type="text" name="username" placeholder="Username" />
      <input type="password" name="password" placeholder="Password" />
      <input type="text" name="address" placeholder="Address" />
      

      <button >Sign Up</button>
    </form>
  </div>
  <div class="form-container sign-in-container">
    <form action="signin.php" method="post" >
      <h1>Sign in</h1>

      <br>
      <input type="email" name="email" placeholder="Email" />
      <input type="password" name="password" placeholder="Password" />
      <a href="#">Forgot your password?</a>
      <button onclick="signin.php">Sign In</button>
    </form>
  </div>



  <div class="overlay-container" >
    <div class="overlay" style="background: #222;">
      <div class="overlay-panel overlay-left" style="background: #222;">
        <h1>Welcome Back!</h1>
        <p>To keep connected with us please login with your personal info</p>
        <button class="ghost" id="signIn">Sign In</button>
      </div>
      <div class="overlay-panel overlay-right" style="background: #222;">
        <h1>Hello, Friend!</h1>
        <p>Enter your personal details and start journey with us</p>
        <button class="ghost" id="signUp">Sign Up</button>
      </div>
    </div>
  </div>
</div>


<script src="test.js"></script>


<div class="adminbtn" action="chat.php" style="position: absolute;top: 5%;right: 5%; ">
      <form action="admin.php" method="post" style="background: #000;">
           <!-- <button onclick="admin.php">Admin</button>-->
      </form>
      
</div>
</body>
</html>

