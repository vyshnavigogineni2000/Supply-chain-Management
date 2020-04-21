<!DOCTYPE html> 
<? php 
session_start(); 
include ("include/confg.php"); 
if(isset($_POST['login']))
{
$a=mysqli_query($con,"SELECT * FROM User_details WHERE username='".$_POST['username']."'and password='". $_POST['password']."'"); 
$m=mysqli_fetch_array($a); 
if($m>0) 
{
$_SESSION['id']=$m['userid']; 
$_SESSION['login']=$m['username']; 
$_SESSION['cat']=$m['role'].' '.$m['category']; 
header("location:home.php"); 
} 
else 
{ 
$message = "Invalid username or password"; 
echo"<scripttype='text/javascript'>alert('$message');
</script>"; 
}
}
?>
<html lang = "en"> 
<head> 
  <title>DQMS-PDM/ERP</title> 
  <meta charset = "utf-8" /> 
  <meta name = "viewport" content = "width=device-width, initialscale=1.0" /> 
  <link rel = "stylesheet" type = "text/css" href = "css/style.css" />
  <link rel = "stylesheet" type = "text/css" href = "css/login.css" /> 
  <body> 
  <ul class="header"> 
  <blink>
  <a href="index1.php">
  <img src="img/favicon.ico"></blink> 
  <li style="foat:left;font-size:27px;top: 0px;color:#fff;padding:16px;">PHOENIX</li></a> 
  </ul> 
  <div class="logdiv"> 
  <center><h2 style="color:#fff;height:auto;">Login</h2></center> 
  <form method = "POST" style="background-color:#fff"> 
  <div class="container"><br> 
  <label for="username"><b>Username</b></label> 
  <input type="text" placeholder="Enter Username" name="username" required= "required"> 
  <br><br> 
  <label for="password"><b>Password</b></label> 
  <input type="password" placeholder="Enter Password" name="password" required= "required"> 
  <br>  <br> 
  <button type="submit" name="login">Login</button> 
  <br> 
  </div> 
  </form> 
  </div> 
  <div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fxed-bottom"> 
  </div> 
  </body>         
  </html>
