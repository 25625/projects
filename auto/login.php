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
