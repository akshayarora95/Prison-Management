<?php
$con=mysqli_connect("localhost","root","root");
mysqli_select_db($con,"project");
$myusername=$_GET['username'];
$mypassword=$_GET['password'];

if(($myusername=="admin")&&($mypassword=="admin"))
{
  header('Location:menu1.html'); 
 }
else
{
$result=mysqli_query($con,"SELECT * FROM users where username='$myusername' AND password='$mypassword'");
$user_count = mysqli_num_rows($result);

if($user_count==1)
{
 while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
 {
   header('Location:menu.html');
   exit();
  }
}
else
{
 echo $myusername;
  echo " not found";
 echo "<p>Click <a href = \"register.html\">here</a> to register.</p>";
  exit();
}
}
?>
