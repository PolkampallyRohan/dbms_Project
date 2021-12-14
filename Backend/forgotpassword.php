<?php
include("setting.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("location:forgotpass_email.php");
}
$email=$_SESSION['email'];
$a=mysqli_query($al, "SELECT * FROM customers WHERE email='$email'");
$b=mysqli_fetch_array($a);
$sec=$b['security_que'];
$pass=$b['password'];
$c=mysqli_query($al, "SELECT * FROM security_questions WHERE sec_id='$sec'");
$d=mysqli_fetch_array($c);
$e=$d['sec_que'];

if($_POST['answer']!=NULL)
{
    $sql=mysqli_query($al, "SELECT * FROM customers WHERE email='$email'");
    $sql2=mysqli_fetch_array($sql);
    $sql3=$sql2['answer'];
    if($sql3==$_POST['answer'])
    {
        $info="Your password is $pass";
    }
    else
    {
        $info="The Entered answer is wrong! try again";
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
<tr><td class="labels">Your security question:  </td><td colspan="2" class="info" align="center"><?php echo $e;?></td></tr>
<tr><td class="labels">Type answer : </td><td><input  size="25" name="answer" class="fields"  required="required" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Get Password" class="fields" /></td></tr>

</table>
</form>
<br />
<br />
<br />
<a href="logout.php" class="link">Home</a>

</div>
</body>
<br />
<br />
<br />
</html>