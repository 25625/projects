<?php
session_start();
// echo $_SESSION['uname'];
if (isset($_SESSION['uname']))
{
	$file = "buttonStatus.txt";
	$handle = fopen($file,'w+');
	if (isset($_POST['on1']))
	{
	$onstring = "bb1";
	fwrite($handle,$onstring);
	fclose($handle);
	}
	if(isset($_POST['off1']))
	{
	$offstring = "bb0";
	fwrite($handle, $offstring);
	fclose($handle);
	}

	if(isset($_POST['on2']))
	{
		$onstring = 'cg1';
		fwrite($handle,$onstring);
		fclose($handle);
	}
	if(isset($_POST['off2']))
	{
		$onstring = 'cg0';
		fwrite($handle,$onstring);
		fclose($handle);
	}
	if (isset($_POST['on3']))
	{
	$onstring = "l1";
	fwrite($handle,$onstring);
	fclose($handle);
	}
	if(isset($_POST['off3']))
	{
	$offstring = "l0";
	fwrite($handle, $offstring);
	fclose($handle);
	}

	if(isset($_POST['on4']))
	{
		$onstring = 'f1';
		fwrite($handle,$onstring);
		fclose($handle);
	}
	if(isset($_POST['off4']))
	{
		$onstring = 'f0';
		fwrite($handle,$onstring);
		fclose($handle);
	}
}
else
{
	echo '<script>alert()</script>';
	echo "<script>location.href='index.html';</script>";
	return;
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="https://image.flaticon.com/icons/svg/25/25694.svg">
  <title>Home</title>
  <link rel="stylesheet" href="demo.css">
  </head>
  <body>
    <div class="menu">
     <ul>
       <li>Bulb</li>
       <li>Charger</li>
       <li>LED</li>
       <li>Fan</li>

     </ul>
     </div>
     <form method = "POST" id="button1">
     <input type = "submit" name ="on1" id="on1" value = "Bulb On">
     <input type = "submit" name ="off1" id="off1" value = "Bulb Off">
     </form>
     <form method = "POST" id="button2">
     <input type = "submit" name ="on2" id="on2" value = "Charger On">
     <input type = "submit" name ="off2" id="off2" value = "Charger Off">
     </form>
     <form method = "POST" id="button3">
     <input type = "submit" name ="on3" id="on3" value = "LED  On">
     <input type = "submit" name ="off3" id="off3" value = "LED  Off">
     </form>
     <form method = "POST" id="button4">
     <input type = "submit" name ="on4" id="on4" value = "Fan On">
     <input type = "submit" name ="off4" id="off4" value = "Fan Off">
     </form>
		 <form action="logout.php">
			 <input type="submit" value="logout"/>
		 </form>
    </body>

</html>
