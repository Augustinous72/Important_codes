

<?php
session_start();
$conn= mysqli_connect('localhost','root','','car_rent');
//check for connection
if(!$conn){
  die("connection failed");
}
else{

  }
if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   
   $myusername = mysqli_real_escape_string($conn,$_POST['email']);
   $mypassword = mysqli_real_escape_string($conn,$_POST['psw']); 
   
   $sql = "SELECT * FROM register WHERE Email = '$myusername' ";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//    $active = $row['active'];
   
   $count = mysqli_num_rows($result);
   
   // If result matched $myusername and $mypassword, table row must be 1 row
   if($count == 1) {
      $_SESSION['Emai'] = $myusername;
      echo 'done';
      header("location:car_home.php");
   }else {
      $error = "Your Login Name or Password is invalid";
      echo $error;
   }
}
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
    
<form method="POST" action="user_login.php">
          
  <h1>client Login</h1>
  <div class="textbox">
    
    <input type="text"name="email"  placeholder="Email">
  </div>

  <div class="textbox">
    
    <input type="password" name="psw" placeholder="Password">
  </div>
  <input type="submit"name="login" value="LogIn">
        </form>
</div>
  </body>
  
<?php include('footer2.php');?>

</html>