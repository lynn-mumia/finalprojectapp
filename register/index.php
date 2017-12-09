<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="UTF-8"> 
	<link rel="stylesheet" href="../css/loginstyle.css"> 
</head>
<body>		
	<div class="container">  
		<form id="contact" action="" method="post">
			<center><h2>Register</h2></center>
			<fieldset>
				<input placeholder="First name" type="text" name="fname" id="fnm" value= "<?php if(!empty(isset($_POST["fname"]))) echo $_POST["fname"]?>" tabindex="1" required>
			    <span style="color:red" class="error" id="ferror">
			</fieldset>
			<fieldset>
				<input placeholder="Last name" type="text" name="lname" id="lnm" value="<?php if(!empty(isset($_POST["lname"]))) echo $_POST["lname"]?>" tabindex="2" required>
			    <span style="color:red" class="error" id="lerror">
			</fieldset>
			<fieldset>
				<input placeholder="Username" type="text" name="uname" id="unm" tabindex="3" value="<?php if(!empty(isset($_POST["uname"]))) echo $_POST["uname"]?>" required>
			    <span style="color:red" class="error" id="uerror">
			</fieldset>			
			<fieldset>
				<input placeholder="Email" type="email" name="email" id="eml" value="<?php if(!empty(isset($_POST["email"]))) echo $_POST["email"]?>" tabindex="4" required>
			    <span style="color:red" class="error" id="emerror">
			</fieldset>
			<fieldset>
				<input placeholder="Age" type="text" name="age" id="age" tabindex="3" value="<?php if(!empty(isset($_POST["age"]))) echo $_POST["age"]?>" required>
			    <span style="color:red" class="error" id="uerror">
			</fieldset>	
			<fieldset>
				<input placeholder="Phonenumber" type="text" name="pnumber" id="pnm" tabindex="3" value="<?php if(!empty(isset($_POST["pnumber"]))) echo $_POST["pnumber"]?>" required>
			    <span style="color:red" class="error" id="uerror">
			</fieldset>	
			<fieldset>
				<button name="register" type="submit" id="registerSubmit" onclick="validateregistration()" data-submit="...Sending">Submit</button>
			</fieldset>
			<a href="../login/index.php" style="text-align:center">Back to Login</a>
		</form>
	</div>
	<script type="text/javascript" src="../js/myscript.js"></script>  
    
</body>
</html>