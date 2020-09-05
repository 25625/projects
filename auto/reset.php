<?php
include 'config.php';
$user = $_POST["email"];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
if($con && $pass == $cpass)
{
  $str = 'agf@54';
  $pass = md5($str.$pass);
  $quer = "SELECT DISTINCT * FROM details WHERE email = '$user'";
  $res   = $con->query($quer);
  if(!empty($res))
  {
    while ($row =  $res->fetch_assoc())
    {
      if($row['email'] == $user)
      {
        $quer = "UPDATE details SET pass = '$pass' WHERE email = '$user'";
        $res = $con->query($quer);
        if($res === TRUE)
        {
          echo '<script>alert("password changed")</script>';
          echo '<script>window.location.replace("index.php")</script>';
          return;
        }
        else
        {
          echo '<script>alert("password not changed")</script>';
          echo '<script>window.location.replace("reset.html")</script>';
          return;
        }
      }
      else
      {
        echo '<script>alert("email is incorrect")</script>';
        echo '<script>window.location.replace("reset.html")</script>';
        return;
      }
    }
  }
}
else
{
  echo '<script>alert("password did not match")</script>';
  echo '<script>window.location.replace("reset.html")</script>';
}
?>
