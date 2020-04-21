<?php         
function check_login() 
{ 
  if(strlen($_SESSION['login'])==0) 
  { 
    header("Location:index1.php"); 
  } 
?>
