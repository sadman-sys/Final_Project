
<?php include 'main_header.php';?>
<html>
     <head>
	 <script>
	  function validate(){
		 var name=document.logform.name;
		 var uname =document.logform.uname;
		 var pass =document.logform.pass;
		
		 var gmail=document.logform.gmail;
		 var phone=document.logform.phone;
		  var type=document.logform.type;
	
		 
		 if(name.value.length <= 0)
        {
			alert("name can not be blank");
			name.focus();
			return false;
			
		}
		 
		if(uname.value.length <= 0)
        {
			alert("username can not be blank");
			uname.focus();
			return false;
			
		}	
		
	   if (pass.value.length <= 0)
        {
			alert("password can not be blank");
			pass.focus();
			return false;
			
		}
		
		if (gmail.value.length <= 0)
        {
			alert("gmail can not be blank");
			gmail.focus();
			return false;
			
		}
		if (phone.value.length <= 0)
        {
			alert("phone can not be blank");
			phone.focus();
			return false;
			
		}
		if (type.value.length <= 0)
        {
			alert("type can not be blank");
			type.focus();
			return false;
			
		}
        return false;
        		
	 }
	 
	 
	 
	 
	 </script>


	 
	 </head>
	 
	 <div class="center-login">
	 <body>
	      <h1> REGISTER FORM </h1>
	      <form  name="logform" method="post"action="" onsubmit="validate()">
			<table>
			     <tr>
					<td><span >Name</span></td>
					<td>:<input type="text" name="name"placeholder="*name requerd">
						
				</tr>
				<tr>
					<td><span >Username</span></td>
					<td>:<input type="text" name="uname"placeholder="*Username requerd">
						
				</tr>
				
				<tr>
					<td><span>Password</span></td>
					<td>:<input type="pass" name ="pass"placeholder="*password requerd">
					
				</tr>
				
				<tr>
					<td><span>Gmail</span></td>
					<td>:<input type="text" name ="gmail"placeholder="*gmail requerd">
					
				</tr>
				<tr>
					<td><span>Phone</span></td>
					<td>:<input type="text" name ="phone"placeholder="*phone requerd">
					
				</tr>
				<tr>
					<td><span>Type</span></td>
					<td>:<input type="text" name ="type"placeholder="*type requerd">
					
				</tr>
				<tr>
					<td><input type="submit" value="submit"></td>
				</tr>
				
			
			</table>
		</form>
	 
	 </body>
	 
	 </div>
	 




</html>




<?php
if(isset($_POST['submit'])){
	 $name=$_POST['name'];	
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$gmail=$_POST['gmail'];
	$phone=$_POST['phone'];
		$type=$_POST['type'];
	$qry="insert into reg_data values(null,'$name','$uname','$pass','$gmail','$phone','$type')";
	if(mysqli_query($db,$qry)){
		//echo '<script>alert("Sumitted successfully")</script>';
		header('location:register.php');
	}else{
		echo mysqli_error($db);
	}
	}
?>
<?php include 'main_footer.php';?>