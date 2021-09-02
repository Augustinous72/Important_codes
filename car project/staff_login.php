

<?php
$usr = "admin";
$psw = "password";
if(isset($_POST['login'])){
$username = $_POST['username'];
$password = $_POST['password'];
//$usr == $username && $psw == $password
if ($_SESSION['login']==true || ($_POST['username']=="admin" && $_POST['password']=="password")) {
   header( 'location:');
}else {
    echo "incorrect login";
}}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Admin_login.css">
  </head>
  <body>
<div class="login-box">
    
<form name="input" action=".php" method="get">
          
  <h1>Staff Login</h1>
  <div class="textbox">
    
    <input type="text"  placeholder="Username">
  </div>

  <div class="textbox">
    
    <input type="password"  placeholder="Password">
  </div>
  <input type="submit"name="login" value="LogIn">
        </form>
</div>
  </body>
  
<?php include('footer2.php');?>

</html>