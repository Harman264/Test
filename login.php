<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <style>
        .ff{
            margin: auto;
            width: fit-content;
           font-size: 30px;
           color: white;
        }
        h2{
            text-align: center;
            background-color: darkcyan;
        }
        body{
           background-repeat: no-repeat;
           background-size:cover;
           background-image:url("back1.jpg");
        }
        
    </style>
</head>
<body >
<div class="header">
    <h2>Login</h2>
</div>
    <div class="ff">
    <form method="post" action="login.php">
    <?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
    </form>
    </div>
</body>
</html>