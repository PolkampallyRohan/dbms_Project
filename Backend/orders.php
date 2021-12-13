<?php
include("setting.php");
session_start();
if(!isset($_SESSION['aid']))
{
	header("location:admin.php");
}
$aid=$_SESSION['aid'];
$a=mysqli_query($al, "SELECT * FROM admin WHERE aid='$aid'");
$b=mysqli_fetch_array($a);
$name=$b['name'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tour &amp; Travels System</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.styleclass
{
	border:1px solid #333;
	border-collapse:collapse;
		color:#FFF;
		text-shadow:1px 1px 1px #000000; 
}

</style>
</head>

<body>
<div id="header">
  <div align="center"> <span class="headingMain">Online Tours &amp; Travels System</span> </div>
</div>
<br />
<br />

<div align="center">

 <span class="subHead">Customers Booking<br /></span><br />

<table border="0" cellpadding="5" cellspacing="5" class="design styleclass">
<tr class="labels styleclass"><th class="styleclass">Sr.No.</th><th class="styleclass">E-Mail</th><th class="styleclass">Package Name</th>
<th class="styleclass">Journey By</th>
<th class="styleclass">Total Amount</th>
<th class="styleclass">Members</th>
<th class="styleclass">Date</th>
<th class="styleclass">Status</th>
<th class="styleclass">Delete</th></tr>
<?php
$u=1;
$x=mysqli_query($al, "SELECT * FROM bookings");
while($y=mysqli_fetch_array($x))
{
	?>
<tr class="labels">
<td class="styleclass"><?php echo $u;$u++;?></td>
<td class="styleclass"><?php echo $y['email'];?></td>
<td class="styleclass"><?php echo $y['package'];?></td>
<td class="styleclass"><?php echo $y['journey'];?></td>
<td class="styleclass"><?php echo "INR ".$y['amount'];?></td>
<td class="styleclass"><?php echo $y['members'];?></td>
<td class="styleclass"><?php echo $y['date'];?></td>
<?php if($y['status']==0)
{
	
?> <td class="styleclass"><a href="app.php?a=<?php echo $y['id'];?>" class="link">Approve</a></td>
<?php } else { ?>
<td class="styleclass">Approved</td>
<?php }
?>
<td class="styleclass"><a href="deleteH.php?dd=<?php echo $y['id'];?>" class="link">Delete</a></td>
</tr>
<?php } ?>
</table>
<br />
<br />
<a href="ahome.php" class="link">HOME</a>
</div>
</body>
</html>