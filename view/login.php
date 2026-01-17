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
</body>
 </html>