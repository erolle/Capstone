function Username(username){
	if(validateEmail(username.value)==false){
		alert(" invalid email entered");
	}else{
	    if(typeof(Storage)!=="undefined"){
	    	localStorage.clear(); // tempariery 
	        var loginObject = {"username":username};
	        username = hash(username.value);
	        localStorage.loginObject=loginObject;
	    }
	    show('divUsername', 'hide');
	    show('divPass1','show');
	}
}

function Pass1(PasValue, num){   
	if(validatePass(PasValue)==false){
		alert("you must fill out theis forme")
	}else{
		divPass='divPass';
	    num2= parseInt(num) + 1;
	    password = hash(PasValue.value);
	    console.log(password);
	    localStorage.Pass1=password;
	    show(divPass + num, 'hide');
	    show(divPass + num2,'show');
	}
}
function Pass2(PasValue, num){   
	if(validatePass(PasValue)==false){
		alert("you must fill out theis forme")
	}else{
		divPass='divPass';
	    num2= parseInt(num) + 1;
	    password = hash(PasValue.value);
	    console.log(password);
	    localStorage.Pass1=password;
	    show(divPass + num, 'hide');
	    show(divPass + num2,'show');
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

function toJASON