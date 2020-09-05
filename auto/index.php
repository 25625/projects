<?php
  include 'config.php';
      $user = htmlentities($_POST["un"]);
      $pass = htmlentities($_POST["pass"]);
      session_start();
      if(isset($_SESSION['uname']))
      {
        echo '<script>window.location.replace("button.php")</script>';
      }

  else if(!$con)
  {
    echo "not connected";
    echo '<script>window.location.replace("index.html")</script>';
  }
  else
  {
    $str = 'agf@54';
    $pass = md5($str.$pass);
    $quer = "SELECT DISTINCT * FROM details WHERE email = '$user'";
    $res   = $con->query($quer);
    if(!empty($res))
    {
      while ($row =  $res->fetch_assoc())
      {
        if($row['email'] == $user && $row['pass'] == $pass)
        {
          $_SESSION['uname'] = $user;
          echo '<script>window.location.replace("button.php")</script>';
          return;
        }
        else
        {
          echo '<script>alert("username or password is incorrect")</script>';
          echo '<script>window.location.replace("index.html")</script>';
          return;
        }
      }
    }
  }
?>

<!doctype html>
<html>
<head>
  <link rel="shortcut icon" type="image/x-icon" href="https://image.freepik.com/free-icon/lock-circle_318-9883.jpg">
  <title>LOGIN Page</title>
  <link rel="stylesheet" href="login-style.css">

</head>
<body>
<h1>Welcome to Home Automation</h1>
<div>
<form class="active" action="" method="post">
<h3>Log In</h3>
<input type="text" name="un" placeholder="user name" required>
<input type="password" name="pass" placeholder="password" required>
<input type="submit" value="login">
</form>
</div>
<div>
  <a href="https://suryasameer.pythonanywhere.com/forgot">Forgot password</a>
</div>
<div class="signup">
  <a href="signin.html">sign up</a>
</div>
</body>
</html>
