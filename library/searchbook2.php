<?php
$bName = $_POST['bName'];
$Author = $_POST['Author'];
$Publication = $_POST['Publication'];
$Subject = $_POST['Subject'];
$con = mysqli_connect('localhost','root','','library');
function showdata1()
{
	global $con;
	global $bName; global $Author;global $Publication;global $Subject;
	$query1 = "SELECT * FROM book where  Subject='$Subject'";
           $query2 = "SELECT * FROM book where Author='$Author' ";
             $query3 = "SELECT * FROM book where  Name='$bName'";
           $query4= "SELECT * FROM book where  Publication='$Publication'";
	$run1 = mysqli_query($con,$query1);
         $run2 = mysqli_query($con,$query2);
           $run3 = mysqli_query($con,$query3);
           $run4 = mysqli_query($con,$query4);
   if($run1==TRUE)
	{   ?>
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
		while($data = mysqli_fetch_assoc($run1))
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
else if($run2==TRUE)
{   ?>
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
		while($data = mysqli_fetch_assoc($run2))
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
else if($run3==TRUE)
{   ?>
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
		while($data = mysqli_fetch_assoc($run3))
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
else if($run4==TRUE)
{   ?>
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
		while($data = mysqli_fetch_assoc($run4))
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
	echo "Book is not available in library <a href='searchbook.php'> click for more search</a>";
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
</body>
</html>
