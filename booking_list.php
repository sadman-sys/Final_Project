<?php include 'admin_header.php';?>

<?php
    $name="";
	$err_name="";
	$form="";
	$err_form="";
	$to="";
	$err_to="";
	$date="";
	$err_date ="";
	$seatNo="";
	$err_seatNo="";
	$phone="";
	$err_phone="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	//if(isset($_POST["submit"])){
		if(empty($_POST["name"])){
			$err_name="*name Required";
		}
		elseif(strlen($_POST["name"]) < 6){
			$err_name="name Must be 6 Characters Long";
		}
		
		else{
			$name=$_POST["name"];
		}
		
		
	}	
?>


<?php $db=mysqli_connect("localhost","root","","ccrud");?>


<html>
<head>
<h1><center>Total Booking ticket <h1>
</head>
<body>
<form action="bookingg.php" method="post">
			<table>
			
				
			</table>
			</body>
		
			
				
<table style="width: 80%" border="1">
<tr>
    <th>Sl#</th>
	<th>Name</th>
   <th>Form</th>
	<th>TO</th>
	<th>Date</th>
	<th>Seat</th>
	<th>phone</th>

	
	</tr>
	<?php 
	$i =0;
	$qry="select * from booking";
	$run=$db -> query($qry);
	if($run -> num_rows >0){
		while($row = $run -> fetch_assoc()){
		$id=$row['id'];	
		?>	
	<tr>
	<td><?php echo $i++;?></td>
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['form']; ?></td>
	<td><?php echo $row['to']; ?></td>
	<td><?php echo $row['date']; ?></td>
	<td><?php echo $row['seatNo']; ?></td>
	<td><?php echo $row['phone']; ?></td>
	<td>
	
	
</tr>
<?php
		}
	}
	?>

</table>
</body>
</html>


<?php
if(isset($_POST['submit'])){
	 $name=$_POST['name'];
	 $form=$_POST['form'];	
	$to=$_POST['to'];
	$date=$_POST['date'];
	$seatNo=$_POST['seatNo'];
	$phone=$_POST['phone'];
	$qry="insert into booking values(null,'$name','$form','$to','$date','$seatNo','$phone')";
	if(mysqli_query($db,$qry)){
		//echo '<script>alert("Sumitted successfully")</script>';
		header('location:bookingg.php');
	}else{
		echo mysqli_error($db);
	}
	}
?>

<?php include 'main_footer.php';?>