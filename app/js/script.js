///////////////////////////////////////////
// take in email and gos to next screen //
/////////////////////////////////////////

function Username(username) {
	if (validateEmail(username.value) == false) {
		alert(" invalid email entered");
	} else {
		hash512 = hash(username.value);
		makeInk(hash512, "canPass1");
		show('divUsername', 'hide');
		show('divPass1', 'show');
	}
}

function Pass1(PasValue, num) {
	if (validatePass(PasValue) == false) {
		alert("you must fill out theis forme")
	} else {
		divPass = 'divPass';
		num2 = parseInt(num) + 1;
		hash512 = hash(PasValue.value);
		makeInk(hash512, "canPass2");
		show(divPass + num, 'hide');
		show(divPass + num2, 'show');
	}
}

function Pass2(PasValue) {
	if (validatePass(PasValue) == false) {
		alert("you must fill out theis forme")
	} else {
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
		$.post("/capstone/app/process_login.php", {
			email: username,
			password: pass
		}, function(data, status) {
			//alert("Data: " + data + "\nStatus: " + status);
			window.location.href = data;
		});
	}
}
//////////////////
// Hide show   //
////////////////

function show(id, visable) {
	document.getElementById(id).className = document.getElementById(id).className.replace('hide', '');
	document.getElementById(id).className = document.getElementById(id).className.replace('show', '');
	if (visable == "show") {
		document.getElementById(id).className += "show";
	} else {
		document.getElementById(id).className += "hide";
	}
}
////////////////////
//  hash stuff   //
//////////////////

function hash(inputvalue) {
	var shaObj = new jsSHA(inputvalue, "ASCII"); // macks a hash object
	var shaValue = shaObj.getHash("SHA-512", "B64"); // makes hash string
	return shaValue;
}
////////////////////
// validate fild //
//////////////////

function validateEmail(FildValue) {
	var atPos = FildValue.indexOf("@");
	var dotPos = FildValue.indexOf(".");
	if (atPos < 1 || dotPos < atPos + 2 || dotPos + 2 >= FildValue.length) {
		return false;
	}
}

function validatePass(FildValue) {
	if (FildValue == null || FildValue == "") {
		return false;
	}
}
/////////////////////
// keycoad checer //
///////////////////

function verifyKey(e, inputValue, id) {
	var keycode;

	if (window.event) {
		keycode = window.event.keyCode;
	} else if (e) {
		keycode = e.which;
	}
	if (keycode == 13 || keycode == 9 || !id.substring(19) == "1" || !id.substring(19) == "2") { // the return or tab key is pressed 
		id = "can" + id;
		regImg(inputValue, id);
	} else if (!id == "" || !id == null) {
/*
	   // live update coad 
	   // id = "can" + id;  
	   // regImg(inputValue, id);
	   */
	} else if (id.substring(19) == "UserPasswordConfirm") {
		idNum = id.substring(19);
		passConferm(document.getElementById('UserPassword' + idNum), document.getElementById('UserPasswordConfirm' + idNum));
		
	} else if (id == "UserEmail") {} else {}
}
///////////////////////
// simulat tab key  //
/////////////////////

function passConferm(UserPassword, UserPasswordConfirm) {
	
	if (UserPassword.value != UserPasswordConfirm.value) {
		console.log("not the same");
	}else{console.log("the same");}
}
/////////////////////////////////
// simulat tab key NOT IN USE //
///////////////////////////////

function simulatPressTab() {
	var keyboardEvent = document.createEvent("KeyboardEvent");
	var initMethod = typeof keyboardEvent.initKeyboardEvent !== 'undefined' ? "initKeyboardEvent" : "initKeyEvent";
	keyboardEvent[initMethod]("keydown", // event type : keydown, keyup, keypress
	true, // bubbles
	true, // cancelable
	window, // viewArg: should be window
	false, // ctrlKeyArg
	false, // altKeyArg
	false, // shiftKeyArg
	false, // metaKeyArg
	9, // keyCodeArg : unsigned long the virtual key code, else 0
	0 // charCodeArgs : unsigned long the Unicode character associated with the depressed key, else 0
	);
	document.dispatchEvent(keyboardEvent);
}
/////////////////////
// send to JASON  //
///////////////////

function appendToStorage(name, data) {
	var old = localStorage.getItem(name);
	if (old === null) old = "";
	localStorage.setItem(name, old + "," + data);
}
///////////////////////////
// generat inkblot img  //
/////////////////////////

function makeInk(hash512, CanName) {
	if (!hash512 == null || !hash512 == "") {
		textStuff(hash512, CanName);
		return true;
	} else {
		false;
	}
}
/////////////////////////////////
// registration inkbolt image //
///////////////////////////////

function regImg(input, CanName) {
	//var canvas = document.getElementById('CanName');
	//context.clearRect(0, 0, canvas.width, canvas.height);
	hash512 = hash(input);
	textStuff(hash512, CanName);
}
/////////////////////////////////
// the draws the the inkbolt  //
///////////////////////////////

function textStuff(hash512, CanName) {
	var inputvalu = hash512; //document.getElementById('inputText').value; //string place holder
	var shaObj = new jsSHA(inputvalu, "ASCII"); // macks a hash object
	//console.log(shaObj);
	var str = shaObj.getHash("SHA-512", "B64"); // makes hash string 
	//console.log(str);
	// make arrays
	var numberArray = new Array();
	var theNumber = new Array();
	var n = str.split(""); // split string in to array
	for (var i = 0; i < n.length; i++) {
		theNumber[i] = str.charCodeAt(i); // gets charicter code for each
	}
	//console.log(theNumber.toString());
	makeShap(theNumber, CanName);
}

function makeShap(theNumber, CanName) {
	var canvas = document.getElementById(CanName);
	var context = canvas.getContext('2d');
	context.translate(0, 0);
	var num3 = theNumber.length;
	var i = 0;
	for (var i = 1; i < 4; i++) {
		// loop thru points on path
		context.save();
		var j = 512;
		arrNum = 0;
		//console.log(bakupNubber[0]);
		while (0 < j) {
			var num1 = theNumber[arrNum];
			arrNum++;
			var num2 = theNumber[arrNum];
			context.beginPath();
			context.arc(num1 + num3, num2 + num3, num1 / 4, 0, 2 * Math.PI);
			context.stroke();
			context.fill();
			context.fillStyle = "#FFA500";
			context.strokeStyle = "#FFA500";
			//console.log(num1+num3,num2+num3);
			arrNum++;
			num3 = theNumber[arrNum]; // getes the ling of the array
			context.rotate(Math.PI * 2 / (num3 * 6)); // rotates the canvase grid
			j--;
		}
		context.rotate(Math.PI * 2 / (i * 6)); // rotates the canvase grid
	}
	// close pathe
	//context.closePath();
}

function cloneObject(obj) {
	var clone = {};
	for (var i in obj) {
		if (typeof(obj[i]) == "object") clone[i] = cloneObject(obj[i]);
		else clone[i] = obj[i];
	}
	return clone;
}
