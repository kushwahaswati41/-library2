<?php

$con = mysqli_connect('localhost','root','','library');
function showdata()
{
	global $con;
	$query = "SELECT * FROM member";
	$run = mysqli_query($con,$query);
	if($run==TRUE)
	{?>
    <table border="1" width="80%" align="centre">
    <tr>
    
    <td>Name</td>
    <td>Id</td>
    <td>EmailId</td>
    <td>ContactNo</td>
    <td>Address</td>
    <td>Branch</td>
    </tr>
		<?php
		while($data = mysqli_fetch_assoc($run))
		{?>
        <tr>
        
        <td><?php echo $data['Name'];?></td>
        <td><?php echo $data['Id'];?></td>
        <td><?php echo $data['EmailId'];?></td>
        <td><?php echo $data['ContactNo'];?></td>
        <td><?php echo $data['Address'];?></td>
        <td><?php echo $data['Branch'];?></td>
        </tr>
        <?php
			}
        ?>
	</table><?php	
	}
	else
	{
		echo "Error !";
	}
}
?>
<html><head>
<title>show data</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body {
	background-color: #0FF;
}
</style>
</head>
<body>
<?php showdata() ?>
<a href="home.php">
  <input type="button" name="button" id="button" value="Home"></a>
</body>
</html>
