function Username(username){
	if(validateEmail(username.value)==false){
		alert(" invalid email entered");
	}else{
		hash512 = hash(username.value);
		makeInk(hash512);
		show('divUsername', 'hide');
		show('divPass1','show');		    	    
	}
}

function Pass1(PasValue, num){   
	if(validatePass(PasValue)==false){
		alert("you must fill out theis forme")
	}else{
		divPass='divPass';
	    num2 = parseInt(num) + 1;
	    hash512 = hash(PasValue.value);
	    makeInk(hash512);	    
	    show(divPass + num, 'hide');
	    show(divPass + num2,'show');
	}
}
function Pass2(PasValue){   
	if(validatePass(PasValue)==false){
		alert("you must fill out theis forme")
	}else{	    
	    username = document.getElementById('username').value;
	    password1 = hash(document.getElementById('pass1').value);
	    password2 = hash(document.getElementById('pass2').value);
	    pass = hash(password1 + password2);
	    /*$.ajax({
	    	type: "POST",
			url: "home.php",
			data: {email: username, password: pass},
			success: "success",
			dataType: "html"
		});
		window.location.href = "home.php";
		*/
		$.post(
			"process_login.php",
			{email: username, password: pass},
			function(data,status){
				alert("Data: " + data + "\nStatus: " + status);
			}
		);
	}
}
//////////////////
// Hide show   //
////////////////
function show(id, visable){
	document.getElementById(id).className = document.getElementById(id).className.replace( 'hide' , '' );
	document.getElementById(id).className = document.getElementById(id).className.replace( 'show' , '' );
	if(visable == "show"){
		document.getElementById(id).className += "show";
	}else{
		document.getElementById(id).className += "hide";
	}
}

////////////////////
//  hash stuff   //
//////////////////

function hash(inputvalue){
	var shaObj = new jsSHA(inputvalue, "ASCII"); // macks a hash object
	var shaValue = shaObj.getHash("SHA-512", "B64"); // makes hash string
	return  shaValue;
}
////////////////////
// validate fild //
//////////////////

function validateEmail(FildValue){
	var atPos=FildValue.indexOf("@");
	var dotPos=FildValue.indexOf(".");
	if (atPos<1 || dotPos<atPos+2 || dotPos+2>=FildValue.length){
		return false;
	}
}
function validatePass(FildValue){
	if(FildValue==null || FildValue==""){
		return false;
	}
}
/////////////////////
// send to JASON  //
///////////////////
function appendToStorage(name, data){
    var old = localStorage.getItem(name);
    if(old === null) old = "";
    localStorage.setItem(name, old + "," + data );
}
///////////////////////////
// generat inkblot img  //
/////////////////////////
function makeInk(hash512){
	if(!hash512==null || !hash512==""){
		return true;
	}else{false;}
}