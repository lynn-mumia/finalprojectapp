<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Unlawfulness Curbing</title>  
	<link rel="stylesheet" href="../css/loginstyle.css">  
</head>

<body>
	<div class="container">  
		<form id="contact" action="" method="post">
			<center><h2>Login</h2></center>
			<fieldset>
				<input placeholder="Username" name="uname" id="unme" type="text" value= "<?php if(!empty(isset($_POST["uname"]))) echo $_POST["uname"]?>"tabindex="1" required>
			    <span style="color:red" class="error" id="usererror">
			</fieldset>
			<fieldset>
				<input placeholder="Password" name="pwd" id="passwd" type="password" value= "<?php if(!empty(isset($_POST["pwd"]))) echo $_POST["pwd"]?>"tabindex="2" required>
		    	<span style="color:red" class="error" id="passerror">    
			</fieldset>
			
			<fieldset>
				<button name="login" type="submit" id="loginSubmit" onclick="validatelogin()" data-submit="...Sending">Submit</button>
			</fieldset>
			<a href="../register/index.php" style="text-align:center">Sign Up</a>
		</form>
	</div>
    <script type="text/javascript" src="../js/myscript.js"></script>  
</body>
</html>
