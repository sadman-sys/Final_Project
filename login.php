<?php include 'main_header.php';?>


<?php
   
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	//if(isset($_POST["submit"])){
		if(empty($_POST["uname"])){
			$err_uname="*username Required";
		}
		elseif(strlen($_POST["uname"]) < 6){
			$err_uname="username Must be 6 Characters Long";
		}
		
		else{
			$uname=$_POST["uname"];
		}
		
	   
		if(empty($_POST["pass"])){
			$err_pass="*password Required";
		}
		else{
			$pass=$_POST["pass"];
		}
	

   
	}
	
	
	
		
?>

<html>
	<head> </head>
	
	<script>
	  function validate(){
		 var uname =document.logform.uname;
		 var pass =document.logform.pass;
	
		 
		 
		 
		if(uname.value.length <= 0)
        {
		
			uname.focus();
			uname.innerHTML="*username Requred";
			return false;
			
		}	
		
	   if (pass.value.length <= 0)
        {
			
			pass.focus();
			pass.innerHTML="*password Required";
			return false;
			
		}
        return false;
        		
	 }
	 
	 
	 
	 
	 </script>
	
	<body>
		<div class="center-login"><h1>Log In </h1>
		<form action="dashboard.php" method="post">
			<table>
				<tr>
					<td><span >Username</span></td>
					<td>:<input type="text" name="uname" value="<?php echo $uname;?>" placeholder="username">
						<span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span>Password</span></td>
					<td>:<input type="password" value="<?php echo $pass;?>" placeholder="password">
					<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><input type="submit" value="login" href="dashboars.php"></td>
					
				</tr>
				<tr>
				  <td><a href="register.php" >Not registered yet? Sign Up</a></td>
				  </tr>
		
			</table>
		</form>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</body>
</html>

<!--login starts -->


<!--login ends -->
<?php include 'main_footer.php';?>


