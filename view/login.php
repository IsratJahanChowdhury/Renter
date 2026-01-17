<!DOCTYPE html>
<html>
    <head>
        <title>Login</login>
    </head>
<body>
    <div class="login-box">
    <h2>&#128274;Login</h2>
    <p>Welcome back! Please login</p>
     
    <form method="post">
    <div class="input-group">
     <i>&#128100;</i>
    <input type=text name="username" placeholder="Username" value="<?php echo $username; ?>">
    </div>

    <div class="input-group">
    <i>&#128273;</i>
    <input type="password" name="password" id="password"placeholder="Password">
    </div>

    <div class="show-pass" onclick="togglePassword()">Show Password</div>

    <label>
        <input type="checkbox" name="remember"> Remember Me
    </label><br>

    <input type="submit" value="Login" class="login-btn">
    <div class= "centre-box">
        <span>Don’t have an account?></span>
        <a href="../view/signup.php">Sign Up</a>
    </div>
    </form>
    <div class = "footer-text">
    Rental Item Marketplace
    </div>
    </div>
<script src="../js/login.js"></script>
</body>
</html>