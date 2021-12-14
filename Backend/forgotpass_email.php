<?php
include("setting.php");
session_start();
$e=mysqli_real_escape_string($al, $_POST['email']);
if(isset($_SESSION['email']))
{
	header("location:forgotpassword.php");
}
if($_POST['email']!=NULL)
{
    $sql=mysqli_query($al, "SELECT * FROM customers WHERE email='$e'");
	if(mysqli_num_rows($sql)==1)
	{
		$_SESSION['email']=$e;
		header("location:forgotpassword.php");
	}
	else
	{
		$info="This email ID is not registered";
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tour &amp; Travels System</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
<div align="center">
<span class="headingMain">Travellance : Travel management system</span>
</div>
</div>
<br />
<br />
<div align="center">
<span class="subHead">Forgot Password</span><br />
<br />

<form method="post" action="">
<table border="0" align="center" cellpadding="5" cellspacing="5" class="design">
<tr><td colspan="2" class="info" align="center"><?php echo $info;?></td></tr>
<tr><td class="labels">Email ID: </td><td><input size="30" name="email" placeholder="enter your email address" class="fields" required="required" autocomplete="off" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Go" class="fields" /></td></tr>

</table>
</form>
<br />
<br />
<br />
<a href="index.php" class="link">Home</a>

</div>
</body>
<br />
<br />
<br />
</html>