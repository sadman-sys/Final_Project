
<?php include 'main_header.php';?>
<html>
     <head>
	 <script>
	  function validate(){
		 var Name=document.logform.Name;
		 var Uname =document.logform.Uname;
		 var password =document.logform.password;
		
		 var gmail=document.logform.gmail;
		 var phone=document.logform.phone;
	
		 
		 if(Name.value.length <= 0)
        {
			alert("name can not be blank");
			Name.focus();
			return false;
			
		}
		 
		if(Uname.value.length <= 0)
        {
			alert("username can not be blank");
			Uname.focus();
			return false;
			
		}	
		
	   if (password.value.length <= 0)
        {
			alert("password can not be blank");
			passwoprd.focus();
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
					<td>:<input type="text" name="Name"placeholder="*name requerd">
						
				</tr>
				<tr>
					<td><span >Username</span></td>
					<td>:<input type="text" name="Uname"placeholder="*Username requerd">
						
				</tr>
				
				<tr>
					<td><span>Password</span></td>
					<td>:<input type="pass" name ="password"placeholder="*password requerd">
					
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
					<td><input type="submit" value="submit"></td>
				</tr>
				
			
			</table>
		</form>
	 
	 </body>
	 
	 </div>
	 




</html>
<?php include 'main_footer.php';?>