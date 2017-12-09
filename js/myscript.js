
/*This is a sample javascript validation*/ 
function validateregistration(){	
	//These are the commands for getting the elements from the html file
	var uname = document.getElementById("unm");
	var fname = document.getElementById("fnm");
	var lname = document.getElementById("lnm");
	var email = document.getElementById("eml");
	var password = document.getElementById("pwd");
	var gender = document.getElementById("gnd");
	var major = document.getElementById("majorSelect");	
	var uerror = document.getElementById("uerror");
	var perror = document.getElementById("perror");
	var emerror = document.getElementById("emerror");
	var ferror = document.getElementById("ferror");
	var lerror = document.getElementById("lerror");
	var gerror = document.getElementById("gerror");
	var merror = document.getElementById("merror");
	//validating username
	//function validateregistration(){
	if(uname.value==""){
		uerror.innerHTML = "Please enter your username";
	}else{
		if(!preg_match('/^[a-zA-Z ]+$/', uname)){
			uerror.innerHTML = "Enter only alphabetical letters";
		}		
	}
	//validating firstname
	if(fname.value==""){
		ferror.innerHTML = "Please enter your first name";
	}else{
		if(!preg_match('/^[a-zA-Z ]+$/', fname)){
			ferror.innerHTML = "Enter only alphabetical letters";
		}		
	}
	//validating lastname
	 if(lname.value==""){
		lerror.innerHTML = "Please enter your last name";
	}else{
		if(!preg_match('/^[a-zA-Z ]+$/', lname)){
			lerror.innerHTML = "Enter only alphabetical letters";
		}		
	}
	//validating email
	if(email.value==""){
		emerror.innerHTML = "Enter your email address";
	}else{
	  if(!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]??\w+)*(\.\w{2,3})+$/', email)){
			emerror.innerHTML = "Enter your email in the correct format";
	  }		
	}
	//validating password
	 if(password.value==""){
		perror.innerHTML = "Enter your password";
	}else{
	  if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,12}$/', password)){
		  perror.innerHTML = "<span style='color:red;' 'font:60px'>The password must contain at least 6 characters, a number and uppercase letters</span>";
    	}		
	}
	
	//validating gender
	if (gender.value== '') {
		gerror.innerHTML = "Select your gender";
	}
		//validating major
	if (major.value== ''||'Please Select a Major'){
		merror.innerHTML = "Select your major";
	}			
}


function validatelogin(){
	var uname = document.getElementById("unme");
	var password = document.getElementById("passwd");
	var usererror = document.getElementById("usererror");
	var passerror = document.getElementById("passerror");
	
	if(uname.value==""){
		usererror.innerHTML = "Enter your username";
	}
	
	if(password.value==""){
		passerror.innerHTML = "Enter your password";
	}
}
	
	