<?php

session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userrag');


$name= $_POST['Name'];
$Uname=$_POST['Uname'];
$Password=$_POST['password'];
$Gmail=$_POST['gmail'];
$Phone=$_POST['phone'];


$s="select * from data where name='$Name'";
$result = mysqli_query($con,$s);

$num= mysqli_num_rows($result);

if($num--1){
	echo"User Already taken";
}else{
	$reg="insurt value"values('$name','Uname','Password','Gmail','Phone',);
	mysqli_query($con,$reg);
	echo "REgistration ";
}
?>


