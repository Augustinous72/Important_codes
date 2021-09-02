


<html>
<head>
  <title>Staff Register</title>
  <link rel="stylesheet" type="text/css" href="staff_register.css">
</head>
<body>
  <div class="header">
  	<h2>Staff Register</h2>
  </div>

  <form method="post" action="car_home.php">
  
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" placeholder="User Name" required="required">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" placeholder="Email" required="required">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password" required="required" placeholder="Password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="confirm_password" placeholder="Confirm Password" required="required">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="registerNewUser">Register</button>
  	</div>
  </form>
</body>
</html>