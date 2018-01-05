<style type="text/css">
body {
	background-color: #0FF;
}
</style>
<?php
$Name = $_POST['Name'];
$Id = $_POST['Id'];
$Branch = $_POST['Branch'];
$Address = $_POST['Address'];
$ContactNo = $_POST['ContactNo'];
$EmailId = $_POST['EmailId'];
$con = mysqli_connect('localhost','root','','library');
$query1 = "INSERT INTO member(Name,Branch,Address,ContactNo,EmailId,Id) 
             VALUES ('$Name','$Branch','$Address','$ContactNo','$EmailId',$Id)";
	$run = mysqli_query($con,$query1);
	if($run==TRUE)
	{
     echo "Member Added<a href='Addmember.php'>click here add more</a>";
	}
	else
	{
		echo "Error !";
	}
?>
