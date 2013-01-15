function Username(username){
	if(validateEmail(username.value)==false){
		alert(" invalid email entered");
	}else{
	    if(typeof(Storage)!=="undefined"){
	    	localStorage.clear(); // tempariery 
	        //username = hash(username.value);
	        username = username.value;
	        var loginObject = new Object; // make new object
	        loginObject.username = username;
	        localStorage.setItem("loginObject", JSON.stringify(loginObject));// Put the object into storage
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
	    var passObject =new Object;
	    passObject.pass1 = hash(PasValue.value);
	    localStorage.setItem("passObject", JSON.stringify(passObject));
	    
	    show(divPass + num, 'hide');
	    show(divPass + num2,'show');
	    //console.log(localStorage.loginObject.username + " 2")
	}
}
function Pass2(PasValue, num){   
	if(validatePass(PasValue)==false){
		alert("you must fill out theis forme")
	}else{
		divPass='divPass';
	    num2= parseInt(num) + 1;
	    password = hash(PasValue.value);
	    //appendToStorage("passObject", password);
	    password1 = localStorage.getItem(passObject);
	    console.log(password1);
	    password = password + passObject.password1;
	    xmlhttp.open("POST","home.php",true);
	    xmlhttp.send();

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
