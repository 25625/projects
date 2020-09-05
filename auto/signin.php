<?php
include 'config.php';
// if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['cpass']))
// {
//   if(strlen($_POST['name']) < 1 | strlen($_POST['email']) < 1 | strlen($_POST['pass']) < 1 | strlen($_POST['cpass']) < 1)
//   {
//     echo '<script>alert("Check the DATA")</script>';
//   }
//  else
//  {
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $pass = htmlentities($_POST['pass']);
    $cpass = htmlentities($_POST['cpass']);
    if($pass == $cpass)
    {
      if (!$con)
      {
        echo '<script>alert("Not Connected")</script>';
      }
      else
      {
        $sql = "SELECT email FROM details WHERE email = '$email'";
        $res = $con->query($sql);
        if(!empty($res))
        {
          $row =  $res->fetch_assoc();
          if(!empty($row['email']))
            {
              echo '<script>alert("User Name is already used")</script>';
              echo "<script>location.href='signin.html'</script>";
              return;
              // header('location:signin.html');
              // return;
            }
            else
            {
              $str = 'agf@54';
              $pass = md5($str.$pass);
              $sql = "INSERT INTO details VALUES('$name','$email','$pass')";
              $result = $con->query($sql);

              if ($result === TRUE)
              {
                echo '<script>alert("Sucessfully registered")</script>';
                echo "<script>location.href='index.html'</script>";
                return;
              }
              else
              {
                echo '<script>alert("Registration is not Succesful")</script>';
                echo "location.href='signin.html'</script>";
              return;
            }
          }
        }
        else {
          echo "I DONT KNOW";
        }
        $conn->close();
      }
    }
    else
    {
      echo '<script>alert("password is not matched")</script>';
      echo "<script>location.href='signin.html'</script>";
      return;
    }
  }
  if ($_SERVER["REQUEST_METHOD"] == "GET")
  {
    echo "get Request";
  }
?>
