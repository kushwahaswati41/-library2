<?php

$con = mysqli_connect('localhost','root','','library');
function showdata1()
{
	global $con;
	$query = "SELECT * FROM book";
	$run = mysqli_query($con,$query);
	if($run==TRUE)
	{?>
    <table border="1" width="80%" align="centre">
    <tr>
  
    <td>BookName</td>
    <td>ISBN</td>
    <td>Subject</td>
    <td>Author</td>
    <td>Publication</td>
    <td>Cost</td>
    </tr>
		<?php
		while($data = mysqli_fetch_assoc($run))
		{?>
        <tr>
       
        <td><?php echo $data['Name'];?></td>
        <td><?php echo $data['ISBN'];?></td>
        <td><?php echo $data['Subject'];?></td>
        <td><?php echo $data['Author'];?></td>
        <td><?php echo $data['Publication'];?></td>
        <td><?php echo $data['Cost'];?></td>
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
<?php showdata1() ?>
<a href="home.php">
  <input type="button" name="button" id="button" value="Home"></a>
</body>
</html>
